<?php

declare(strict_types=1);

namespace Trust\Service;

defined('ABSPATH') || exit;

/**
 * The customer-facing strings a merchant may override, in the language of the
 * site.
 *
 * The badge-row heading used to be an English sentence in config/defaults.php,
 * written into `trust_settings` at activation. A string in a config array is
 * never wrapped in a gettext call, so it is not in the .pot and cannot be
 * translated, and once it sits in the option even a complete language pack
 * cannot reach it: a Polish shop printed "Guaranteed safe checkout" above the
 * badges however complete the translation was.
 *
 * The packaged default is now empty, meaning "use the string below". A merchant
 * who types their own still wins, and what they typed is stored as typed.
 */
final class Texts
{
    /**
     * Setting key => the translated default.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'heading' => __('Guaranteed safe checkout', 'badgevo'),
        ];
    }

    /**
     * Fill every empty text key with its translated default.
     *
     * Applied on the way OUT, where the string is about to be shown, and never
     * on the way in: writing the resolved text back to the option would freeze
     * one language into the database, which is the bug this class exists to fix.
     *
     * @param array<string, mixed> $settings
     * @return array<string, mixed>
     */
    public static function apply(array $settings): array
    {
        foreach (self::defaults() as $key => $text) {
            if (trim((string) ($settings[$key] ?? '')) === '') {
                $settings[$key] = $text;
            }
        }

        return $settings;
    }
}
