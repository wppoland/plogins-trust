<?php
/**
 * Default settings, merged under the option key `trust_settings`.
 *
 * The plugin ships enabled, showing a row of secure-checkout badges with a
 * heading after the add-to-cart button on the single product page. The merchant
 * tunes the heading, which badges show and the icon colour from the Trust admin
 * screen.
 *
 * Customer-facing text is NOT written here. A string in this file is seeded into
 * the option at activation and is never a gettext call, so it reaches no .pot
 * and no language pack can replace it once it sits in the database.
 *
 * @package Trust
 *
 * @return array<string, mixed>
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

return [
    'enabled' => true,

    // Heading shown above the badge row. Empty on purpose: empty means "use
    // Trust\Service\Texts", which is translated, and anything a merchant types
    // still wins. To print the icons on their own, untick `show_heading`.
    'heading' => '',

    // Print the heading above the badge row.
    'show_heading' => true,

    // Which bundled badges to show, in display order (slugs from BadgeLibrary).
    'badges' => ['secure_checkout', 'ssl_encrypted', 'money_back', 'card_payment'],

    // Show the row after the add-to-cart button on single product pages.
    'show_on_product' => true,

    // Colour applied to the bundled SVG icons and heading.
    'icon_color' => '#3c4858',

    // Seasonal/campaign display schedules (PRO).
];
