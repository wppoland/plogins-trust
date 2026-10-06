<?php
/**
 * BV-3 + BV-4: every PRO card string goes through gettext in the badgevo
 * domain, and none carries internal notes or a menu path instead of a feature.
 * Run: php tests/pro-upsell-copy-test.php
 */

define('ABSPATH', __DIR__);
function __(string $s, string $d): string { return $d === 'badgevo' ? "\x01" . $s : $s; }

$data = require __DIR__ . '/../config/pro-upsell.php';
assert(count($data['features']) > 0);
foreach ($data['features'] as $f) {
    foreach (['title', 'desc'] as $k) {
        assert(is_string($f[$k] ?? null) && $f[$k][0] === "\x01", "$k not via __(): " . var_export($f, true));
        assert(! preg_match('/\(shipped\)|trust\/|PRO settings|WooCommerce >/', $f[$k]), "internal copy: {$f[$k]}");
    }
    assert(! isset($f['en']) && ! isset($f['pl']), 'locale literal arrays are back');
}
echo "OK: " . count($data['features']) . " PRO cards, all gettext, no internal copy\n";
