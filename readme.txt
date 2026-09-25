=== Badgevo - Trust Badges for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, trust badges, secure checkout, conversion, ecommerce
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.1.2
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add a row of secure-checkout badges after the add-to-cart button to reassure shoppers about payment safety.

== Description ==

Badgevo shows a row of secure-checkout badges after the add-to-cart button, under a short heading like "Guaranteed safe checkout". The idea is simple: put a reminder that the store is safe right where the shopper decides whether to buy.

The plugin includes ten hand-drawn inline SVG badges: secure checkout, SSL encrypted, money-back guarantee, verified store, free shipping, card payment, digital wallet, 24/7 support, privacy protected and satisfaction. You pick which ones to show, write the heading (or turn the heading off for icons only) and set the icon colour.

It is built to stay out of the way:

* **No external requests.** The badges are inline SVGs served from your own site, so nothing loads from third parties and there is nothing to track.
* **No JavaScript on the storefront.** The badge row is plain CSS, so it does not add a script or shift the layout as the page loads.
* **Accessible.** Each badge has an accessible name and the row is marked up as a list. The small hover animation is skipped for visitors who set `prefers-reduced-motion`.
* **Inherits your colour.** Set one colour and every badge follows it via `currentColor`.

Badgevo is not yet on the WordPress.org directory. The source lives on GitHub at [github.com/wppoland/plogins-trust](https://github.com/wppoland/plogins-trust) if you want to read the code or report a bug.

= Documentation and links =

* **Documentation**: [plogins.com/plogins-trust/docs/](https://plogins.com/plogins-trust/docs/)
* **Plugin page**: [plogins.com/plogins-trust/](https://plogins.com/plogins-trust/)
* **Source code**: [github.com/wppoland/plogins-trust](https://github.com/wppoland/plogins-trust)
* **Bug reports and feature requests**: [github.com/wppoland/plogins-trust/issues](https://github.com/wppoland/plogins-trust/issues)


= Where badges appear =

* Single product page, after the add-to-cart button.
* Anywhere via the `[trust_badges]` shortcode.

= Settings =

A settings page under the WooCommerce menu lets you:

* Enable or disable the badges.
* Write the heading, or turn it off for icons only. Left empty, it uses the bundled wording in your site language.
* Pick which bundled badges to show.
* Choose the icon colour.

== Installation ==

1. Upload the plugin to `/wp-content/plugins/badgevo`, or install via Plugins > Add New.
2. Activate it. WooCommerce must be installed and active.
3. Visit **WooCommerce > Trust Badges** to choose your badges, heading and colour.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Yes. Badgevo requires an active WooCommerce installation.

= Does it load anything from third-party servers? =

No. All bundled badges are inline SVGs served from your own site.

= Will it slow my store down or shift the layout? =

No. The storefront output is CSS-only with no JavaScript, so it does not cause layout shift.

= Can I place badges somewhere custom? =

Yes. Use the `[trust_badges]` shortcode to render the row anywhere shortcodes are supported.

= Which badges are included? =

A curated set of inline SVG icons (secure checkout, shipping, returns and similar). Choose which to show in settings.


= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== Screenshots ==

1. The trust-badge row beneath the add-to-cart button on a single product page.
2. The Badgevo settings screen for badges.

== External Services ==

Badgevo does not connect to any external services. Every badge is a bundled inline SVG served from your own site, so the storefront output loads nothing from third parties and the plugin makes no network requests. Your choices (the heading, selected badges and icon colour) are kept on your own site in a single `trust_settings` option, alongside a `trust_db_version` marker; both are removed when you delete the plugin. The plugin sends no email and stores no visitor or customer data.

== Translations ==

Badgevo is fully translatable and ships the `badgevo.pot` template. Translations are delivered by WordPress.org language packs from translate.wordpress.org, which is where Polish, German and Spanish are being contributed; the package itself carries no compiled translation files.

== Changelog ==

= 1.1.2 =
* Renamed to Badgevo, a plain English name in place of the Esperanto one. The text domain and the plugin folder follow the name; the stored settings, options and every hook are unchanged.

= 1.1.1 =
* The sidebar upgrade promo now follows the same dismissal as the banner. Dismissing the banner used to leave a full-height advert on the settings screen for good, which is not what the WordPress.org guideline on upgrade prompts means by used with moderation.

= 1.1.0 =
* Renamed to Fidindo. The WordPress.org review team asks a plugin name to lead with a distinctive, coined identifier rather than a generic descriptive word. Fidindo comes from the Esperanto fidinda, trustworthy. The text domain follows the name; the stored data, the settings and every hook are unchanged.

= 1.0.12 =
* Fixed: the PRO upgrade promo kept selling to people who had already bought the paid edition. Only the banner could be dismissed, so the sidebar promo and the locked feature cards followed a paying customer around for good. The promo now checks whether the paid edition is active and steps aside when it is.
* Fixed: arrow glyphs in the admin menu paths, and in the strings handed to translators. An arrow inside a translatable string makes the glyph every translator's problem and changes the layout in any locale that drops it.

= 1.0.11 =
* Fixed: deleting the plugin left the per-user "dismiss" flag from the PRO notice in the database. Uninstall now removes it for every user, not just the one who dismissed it.

= 1.0.10 =
* Fixed the badge heading always printing in English. "Guaranteed safe checkout" was a plain string in the plugin's default settings, so it never reached the translation files and was written into the database when the plugin was activated. On a site running in Polish, German or Spanish the badges were translated but the line above them was not, and no language pack could reach it. The heading is a translatable string now and follows the site language as soon as a translation for it exists. Translations arrive as WordPress.org language packs rather than bundled in this download, so it stays English until a pack is published. A heading you typed yourself is kept exactly as you typed it.
* Added a "Show the heading" switch. Leaving the heading field empty used to be the way to show the icons on their own; empty now means "use the default wording, translated", so the switch takes over that job. If your heading was empty, the switch is turned off for you and your product pages look the same as before.

= 1.0.9 =
* Renamed to Plogins Trust - Trust Badges for WooCommerce so the name leads with the brand rather than a generic word, which is what the WordPress.org plugin review team asks for. The plugin slug is unchanged.

= 1.0.8 =
* Tested against WordPress 7.1. Verified by activating this build on a clean 7.1 install with WooCommerce 11.1, not by editing the header.

= 1.0.7 =
* Fixed the PRO promo on the settings screen quoting a price in PLN. PRO is priced and charged in EUR, so an admin on a Polish site was shown a zloty amount and then billed in euro, and the zloty figure was a fixed conversion that drifted from the real charge as the rate moved. The promo now shows the euro price that is actually taken.

= 1.0.6 =
* Your chosen icon colour now applies to badges placed with the [trust_badges] shortcode, including when "Show on product pages" is off. Those badges used to ignore the colour picker and show up in the stylesheet's default green.

= 1.0.4 =
* Translations: completed Polish, German and Spanish for the PRO upgrade panel.

= 1.0.3 =
* Fixed low-contrast admin headings under an OS dark-mode preference.

= 1.0.2 =
* Added bundled Polish, German and Spanish translations for the plugin interface.

= 1.0.1 =
* First stable release.

= 0.1.4 =
* Renamed to Plogins Trust for WooCommerce for a more distinctive plugin name.

= 0.1.3 =
* Add `trust/badge_library` filter so add-ons can append safe inline SVG badges to the shared picker and renderer.

= 0.1.2 =
* Add `trust/badges_rendered` action and `data-trust-badge` attributes for privacy-safe add-on analytics.

= 0.1.1 =
* Adds support for seasonal and campaign display scheduling start/end dates (requires Trust Pro).

= 0.1.0 =
* Initial release: bundled inline SVG trust badges shown after the add-to-cart button on single product pages, with a configurable heading, badge selection, icon colour and a `[trust_badges]` shortcode.
