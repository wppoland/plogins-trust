=== Plogins Trust - Trust Badges for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, trust badges, secure checkout, conversion, ecommerce
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge nach dem Button „In den Warenkorb“ eine Reihe von Trust-Badges hinzu, um Käufer über die Zahlungssicherheit zu beruhigen.

== Description ==

Trust zeigt nach dem Button „In den Warenkorb“ eine Reihe von Trust-Badges an, unter einer kurzen Überschrift wie „Garantiert sicherer Checkout“. Die Idee ist einfach: Erinnere Käufer daran, dass der Shop sicher ist – genau dort, wo sie sich für den Kauf entscheiden.

Das Plugin enthält zehn handgezeichnete Inline-SVG-Badges: sicherer Checkout, SSL-Verschlüsselung, Geld-zurück-Garantie, verifizierter Shop, kostenloser Versand, Kartenzahlung, digitale Geldbörse, 24/7-Support, Datenschutz und Zufriedenheit. Du wählst, welche angezeigt werden, schreibst die Überschrift (oder lässt sie leer für nur Icons) und legst die Icon-Farbe fest.

Es ist so gebaut, dass es nicht im Weg steht:

* <strong>Keine externen Anfragen.</strong> Die Badges sind Inline-SVGs von deiner eigenen Website, sodass nichts von Dritten geladen wird und nichts nachverfolgt werden kann.
* <strong>Kein JavaScript im Shop.</strong> Die Badge-Zeile ist reines CSS, sodass beim Laden der Seite kein Skript hinzugefügt wird und das Layout nicht verschoben wird.
* <strong>Barrierefrei.</strong> Jedes Badge hat einen barrierefreien Namen und die Zeile ist als Liste markiert. Die kleine Hover-Animation wird für Besucher übersprungen, die `prefers-reduced-motion` gesetzt haben.
* <strong>Erbt deine Farbe.</strong> Lege eine Farbe fest und jedes Badge folgt ihr über `currentColor`.

Trust ist noch nicht im WordPress.org-Verzeichnis. Der Quellcode liegt auf GitHub unter https://github.com/wppoland/plogins-trust, falls du den Code lesen oder einen Fehler melden möchtest.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-trust/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-trust/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-trust
* <strong>Fehlerberichte und Funktionswünsche</strong> – https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

* Einzelne Produktseite, nach dem Button „In den Warenkorb“.
* Überall über den Shortcode `[trust_badges]`.

= Settings =

Eine Einstellungsseite im WooCommerce-Menü ermöglicht dir:

* Badges aktivieren oder deaktivieren.
* Die Überschrift schreiben (oder leer lassen für nur Icons).
* Auswählen, welche mitgelieferten Badges angezeigt werden.
* Die Icon-Farbe wählen.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/trust` hoch oder installiere es über Plugins → Installieren.
2. Aktiviere es. WooCommerce muss installiert und aktiv sein.
3. Öffne <strong>WooCommerce → Trust Badges</strong>, um deine Badges, Überschrift und Farbe auszuwählen.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. Trust erfordert eine aktive WooCommerce-Installation.

= Does it load anything from third-party servers? =

Nein. Alle mitgelieferten Badges sind Inline-SVGs von deiner eigenen Website.

= Will it slow my store down or shift the layout? =

Nein. Die Shop-Ausgabe ist nur CSS ohne JavaScript, sodass es zu keiner Layout-Verschiebung kommt.

= Can I place badges somewhere custom? =

Ja. Verwende den Shortcode `[trust_badges]`, um die Zeile überall dort zu rendern, wo Shortcodes unterstützt werden.

= Which badges are included? =

Ein kuratierter Satz von Inline-SVG-Icons (sicherer Checkout, Versand, Rücksendungen und Ähnliches). Wähle in den Einstellungen, welche angezeigt werden.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Die Trust-Badge-Zeile unter dem Button „In den Warenkorb“ auf einer einzelnen Produktseite.
2. Der Trust-Badges-Einstellungsbildschirm.

== External Services ==

Trust stellt keine Verbindung zu externen Diensten her. Jedes Badge ist ein mitgeliefertes Inline-SVG von deiner eigenen Website, sodass die Shop-Ausgabe nichts von Dritten lädt und das Plugin keine Netzwerkanfragen stellt. Deine Auswahl (Überschrift, ausgewählte Badges und Icon-Farbe) wird auf deiner Website in einer einzigen Option `trust_settings` zusammen mit einem `trust_db_version`-Marker gespeichert; beide werden entfernt, wenn du das Plugin löschst. Das Plugin versendet keine E-Mails und speichert keine Besucher- oder Kundendaten.

== Translations ==

Plogins Trust enthält deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-trust`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Deutsche, polnische und spanische Übersetzungen für die Plugin-Oberfläche mitgeliefert.

= 1.0.1 =
* Erste stabile Version.

= 0.1.4 =
* Für einen eindeutigeren Plugin-Namen in Plogins Trust für WooCommerce umbenannt.

= 0.1.3 =
* Fügt den Filter `trust/badge_library` hinzu, damit Add-ons sichere Inline-SVG-Badges an den gemeinsamen Auswahl- und Renderer anhängen können.

= 0.1.2 =
* Fügt die Aktion `trust/badges_rendered` und die Attribute `data-trust-badge` für datenschutzfreundliche Add-on-Analysen hinzu.

= 0.1.1 =
* Fügt Unterstützung für Start-/Enddaten der Saison- und Kampagnen-Anzeigeplanung hinzu (erfordert Trust Pro).

= 0.1.0 =
* Erstveröffentlichung: mitgelieferte Inline-SVG-Trust-Badges nach dem Button „In den Warenkorb“ auf einzelnen Produktseiten, mit konfigurierbarer Überschrift, Badge-Auswahl, Icon-Farbe und dem Shortcode `[trust_badges]`.
