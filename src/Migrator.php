<?php

declare(strict_types=1);

namespace Trust;

defined('ABSPATH') || exit;

/**
 * Idempotent schema/version migrations, run on every boot. Compares a stored
 * option against VERSION and applies forward steps as needed.
 */
final class Migrator
{
    private const OPTION   = 'trust_db_version';
    private const SETTINGS = 'trust_settings';

    /**
     * The English text that shipped as a packaged default up to 1.0.9 and was
     * written into the option at activation.
     *
     * @var array<string, string>
     */
    private const LEGACY_TEXTS = [
        'heading' => 'Guaranteed safe checkout',
    ];

    public function maybeMigrate(): void
    {
        $current = (string) get_option(self::OPTION, '0');

        if (version_compare($current, VERSION, '>=')) {
            return;
        }

        $this->seedDefaultSettings();
        $this->clearUntranslatableTexts();

        update_option(self::OPTION, VERSION, false);
    }

    /**
     * Clear a stored text that is byte for byte the English default.
     *
     * It could never be translated: it was written into the option before any
     * language pack was consulted, so a shop running in Polish printed the
     * English heading however complete the translation was. Empty now means "use
     * the translated default", which Trust\Service\Texts provides.
     *
     * Only an exact match is cleared, so a merchant's own heading, including a
     * hand translation of the English one, survives untouched.
     *
     * The same pass records `show_heading`, which did not exist before 1.0.10.
     * An empty heading used to be the only way to print the icons on their own,
     * and empty now means "use the translated default", so a merchant who made
     * that choice keeps it and their storefront does not change.
     */
    private function clearUntranslatableTexts(): void
    {
        $stored = get_option(self::SETTINGS, null);

        if (! is_array($stored)) {
            return;
        }

        $changed = false;

        if (! array_key_exists('show_heading', $stored)) {
            $stored['show_heading'] = ! array_key_exists('heading', $stored)
                || trim((string) $stored['heading']) !== '';
            $changed                = true;
        }

        foreach (self::LEGACY_TEXTS as $key => $legacy) {
            if (isset($stored[$key]) && (string) $stored[$key] === $legacy) {
                $stored[$key] = '';
                $changed      = true;
            }
        }

        if ($changed) {
            // null keeps the option's existing autoload flag. Passing false here
            // would quietly move the settings out of the autoloaded set on every
            // shop that took this update, which is not a change a text sweep gets
            // to make.
            update_option(self::SETTINGS, $stored, null);
        }
    }

    /**
     * Seed the default settings once, without clobbering an existing config.
     */
    private function seedDefaultSettings(): void
    {
        if (get_option(self::SETTINGS, null) !== null) {
            return;
        }

        /** @var array<string, mixed> $defaults */
        $defaults = require TRUST_DIR . 'config/defaults.php';

        add_option(self::SETTINGS, $defaults, '', false);
    }
}
