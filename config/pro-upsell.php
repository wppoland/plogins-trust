<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-trust-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Badgevo Pro',
    'url'        => 'https://plogins.com/plogins-trust-pro/pricing/',
    'sellable'   => true,
    'price_from' => 19,
    'currency'   => 'EUR',
    // Gettext source strings, so language packs translate them like the rest
    // of the screen. Loaded at render time, after the text domain is ready.
    'features'   => [
        ['title' => __('Sticky trust bar', 'badgevo'), 'desc' => __('A slim, fixed secure-checkout bar pinned to the bottom of single product pages with custom messages and colors.', 'badgevo')],
        ['title' => __('Badge schedules', 'badgevo'), 'desc' => __('Show seasonal or campaign badges during date and time ranges, reverting automatically for both row and bar.', 'badgevo')],
        ['title' => __('Per-product badge sets', 'badgevo'), 'desc' => __('Choose a custom badge list on the product General tab for the badge row and sticky bar on that product page.', 'badgevo')],
        ['title' => __('Badge impression analytics', 'badgevo'), 'desc' => __('Per-badge view counters, split by placement, on their own report screen.', 'badgevo')],
        ['title' => __('Expanded badge library', 'badgevo'), 'desc' => __('12 additional inline-SVG badges, curated preset sets and visual pickers.', 'badgevo')],
    ],
];
