<?php

/**
 * Checkout placement and shopper captions.
 *
 * - The Checkout block gets the row after it; other blocks are untouched.
 * - With captions on, each badge prints its shopper caption and the icon is
 *   aria-hidden (one announcement). With captions off, the icon is the named
 *   image. The admin picker text ("Secure checkout (lock)") never reaches the
 *   storefront either way.
 * - A store saved before captions existed keeps its icon-only row; a fresh
 *   install keeps the default (on).
 *
 * Run: php tests/checkout-captions-check.php
 */

declare(strict_types=1);

namespace Trust {
    const VERSION = '1.2.0';
}

namespace {
    define('ABSPATH', __DIR__);
    define('TRUST_DIR', dirname(__DIR__) . '/');
    define('TRUST_URL', 'https://example.test/');

    /** @var array<string, mixed> */
    $GLOBALS['opts'] = [];

    function get_option(string $name, mixed $default = false): mixed
    {
        return $GLOBALS['opts'][$name] ?? $default;
    }

    function update_option(string $name, mixed $value, mixed $autoload = null): bool
    {
        $GLOBALS['opts'][$name] = $value;
        return true;
    }

    function add_option(string $name, mixed $value, string $deprecated = '', mixed $autoload = null): bool
    {
        $GLOBALS['opts'][$name] = $value;
        return true;
    }

    function apply_filters(string $hook, mixed $value, mixed ...$args): mixed
    {
        // Simulates an add-on that adds a library badge without a caption.
        if ('trust/badges' === $hook) {
            $value[] = ['slug' => 'support', 'svg' => '<svg></svg>', 'label' => '24/7 support (headset)'];
        }
        return $value;
    }

    function do_action(string $hook, mixed ...$args): void
    {
    }

    function __(string $text, string $domain): string
    {
        return $text;
    }

    function _x(string $text, string $context, string $domain): string
    {
        return $text;
    }

    function esc_attr(string $text): string
    {
        return htmlspecialchars($text, ENT_QUOTES);
    }

    function esc_html(string $text): string
    {
        return htmlspecialchars($text, ENT_QUOTES);
    }

    /** @param array<string, mixed> $allowed */
    function wp_kses(string $html, array $allowed): string
    {
        return $html;
    }

    function wp_style_is(string $handle, string $list): bool
    {
        return true;
    }

    function sanitize_hex_color(string $color): string
    {
        return $color;
    }

    require __DIR__ . '/../src/Contract/HasHooks.php';
    require __DIR__ . '/../src/Badges/BadgeLibrary.php';
    require __DIR__ . '/../src/Service/Texts.php';
    require __DIR__ . '/../src/Service/BadgesService.php';
    require __DIR__ . '/../src/Migrator.php';

    $failures = 0;
    $check    = static function (bool $ok, string $what) use (&$failures): void {
        if (! $ok) {
            echo "FAIL: {$what}\n";
            $failures++;
        }
    };

    $service = new \Trust\Service\BadgesService();
    $block   = '<div class="wp-block-woocommerce-checkout"></div>';

    $GLOBALS['opts']['trust_settings'] = ['badges' => ['secure_checkout'], 'show_on_checkout' => true, 'show_captions' => true];

    $out = $service->renderCheckoutBlock($block, ['blockName' => 'woocommerce/checkout']);
    $check(str_starts_with($out, $block), 'checkout block markup comes first');
    $check(str_contains($out, 'data-trust-placement="checkout"'), 'row after the checkout block is the checkout placement');
    $check($service->renderCheckoutBlock($block, ['blockName' => 'woocommerce/cart']) === $block, 'other blocks are untouched');

    $check(str_contains($out, '<span class="trust-badge__label">Secure checkout</span>'), 'caption printed under the icon');
    $check(str_contains($out, 'class="trust-badge__icon" aria-hidden="true"'), 'icon hidden when the caption names it');
    $check(! str_contains($out, 'role="img"'), 'no second accessible name with a caption');
    $check(str_contains($out, '<span class="trust-badge__label">24/7 support</span>'), 'filtered library badge gets its shopper caption');
    $check(! str_contains($out, '(lock)') && ! str_contains($out, '(headset)'), 'admin picker text never reaches shoppers');

    $GLOBALS['opts']['trust_settings']['show_captions'] = false;
    ob_start();
    $service->renderRow('product');
    $iconOnly = (string) ob_get_clean();
    $check(str_contains($iconOnly, 'role="img" aria-label="Secure checkout"'), 'icon-only row names the icon with the caption');
    $check(! str_contains($iconOnly, 'trust-badge__label'), 'icon-only row prints no caption');

    // Upgrade: a store saved before 1.2.0 has no show_captions key.
    $GLOBALS['opts'] = ['trust_settings' => ['badges' => ['secure_checkout'], 'show_heading' => true], 'trust_db_version' => '1.1.4'];
    (new \Trust\Migrator())->maybeMigrate();
    $check(false === ($GLOBALS['opts']['trust_settings']['show_captions'] ?? null), 'existing store keeps the icon-only row');

    // Fresh install: seeded from defaults, captions on.
    $GLOBALS['opts'] = [];
    (new \Trust\Migrator())->maybeMigrate();
    $check(true === ($GLOBALS['opts']['trust_settings']['show_captions'] ?? null), 'fresh install shows captions');

    echo 0 === $failures ? "OK: checkout row and shopper captions\n" : '';
    exit($failures > 0 ? 1 : 0);
}
