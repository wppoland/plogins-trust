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
    'name'       => 'Trust Pro',
    'url'        => 'https://plogins.com/plogins-trust-pro/pricing/',
    'sellable'   => true,
    'price_from' => 19,
    'currency'   => 'EUR',
    'lead'       => [
        'en' => 'Sticky trust bar, badge schedules, per-product badge sets, badge analytics and expanded badge library ship in version 0.5.0.',
        'pl' => 'Przyklejony pasek, harmonogramy, zestawy per produkt, analityka wyświetleń i rozszerzona biblioteka odznak są dostępne w wydaniu 0.5.0.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Sticky trust bar', 'desc' => 'A slim, fixed secure-checkout bar pinned to the bottom of single product pages with custom messages and colors.'],
            'pl' => ['title' => 'Przyklejony pasek zaufania', 'desc' => 'Smukły, stały pasek bezpiecznej kasy na kartach produktu z własnym komunikatem, kolorem tła i wybranymi ikonami.'],
        ],
        [
            'en' => ['title' => 'Badge schedules', 'desc' => 'Show seasonal or campaign badges during date and time ranges, reverting automatically for both row and bar.'],
            'pl' => ['title' => 'Harmonogramy odznak', 'desc' => 'Pokazywanie odznak w zakresie dat, z automatycznym powrotem (dla rzędu i paska).'],
        ],
        [
            'en' => ['title' => 'Per-product badge sets', 'desc' => 'Choose a custom badge list on the product General tab for the Trust row and sticky bar on that product page.'],
            'pl' => ['title' => 'Zestawy odznak per produkt', 'desc' => 'Wybierz własny zestaw odznak w zakładce Ogólne produktu dla rzędu Trust i paska na tej karcie.'],
        ],
        [
            'en' => ['title' => 'Badge impression analytics', 'desc' => 'Lightweight per-badge view counters via trust/badges_rendered (shipped).'],
            'pl' => ['title' => 'Analityka wyświetleń odznak', 'desc' => 'Lekkie liczniki wyświetleń per odznaka przez trust/badges_rendered (wdrożone).'],
        ],
        [
            'en' => ['title' => 'PRO settings', 'desc' => 'Configure the sticky bar and display schedules under WooCommerce → Trust Bar (Pro).'],
            'pl' => ['title' => 'Ustawienia PRO', 'desc' => 'Skonfiguruj przyklejony pasek i harmonogramy w WooCommerce → Trust Bar (Pro).'],
        ],
        [
            'en' => ['title' => 'Expanded badge library', 'desc' => '12 additional inline-SVG badges, curated preset sets and visual pickers (shipped).'],
            'pl' => ['title' => 'Rozszerzona biblioteka odznak', 'desc' => '12 dodatkowych odznak SVG, gotowe zestawy i wizualne pickery (wdrożone).'],
        ],
    ],
];
