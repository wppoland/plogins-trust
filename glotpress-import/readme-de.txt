=== Plogins Trust - Trust Badges for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, trust badges, secure checkout, conversion, ecommerce
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Erfordert Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge nach der Schaltfläche „Zum Warenkorb hinzufügen“ eine Reihe von Abzeichen für den sicheren Checkout hinzu, um Käufer hinsichtlich der Zahlungssicherheit zu überzeugen.

== Description ==

Trust zeigt nach der Schaltfläche „Zum Warenkorb hinzufügen“ eine Reihe von Abzeichen für den sicheren Checkout an, unter einer kurzen Überschrift wie „Garantiert sicherer Checkout“. Die Idee ist einfach: Erinnern Sie den Käufer daran, dass das Geschäft sicher ist, und zwar genau dort, wo er sich für den Kauf entscheidet.

Das Plugin enthält zehn handgezeichnete Inline-SVG-Abzeichen: sichere Kaufabwicklung, SSL-Verschlüsselung, Geld-zurück-Garantie, verifizierter Shop, kostenloser Versand, Kartenzahlung, digitale Geldbörse, 24/7-Support, Datenschutz und Zufriedenheit. Sie wählen aus, welche angezeigt werden sollen, schreiben die Überschrift (oder lassen sie nur für Symbole leer) und legen die Symbolfarbe fest.

Es ist so gebaut, dass es nicht im Weg ist:

* <strong>Keine externen Anfragen.</strong> Die Abzeichen sind Inline-SVGs, die von deiner eigenen Website bereitgestellt werden, sodass nichts von Dritten geladen wird und nichts nachverfolgt werden kann.
* <strong>Kein JavaScript auf der Storefront.</strong> Die Badge-Zeile ist reines CSS, sodass beim Laden der Seite kein Skript hinzugefügt oder das Layout verschoben wird.
* <strong>Zugänglich.</strong> Jedes Abzeichen hat einen barrierefreien Namen und die Zeile ist als Liste markiert. Die kleine Hover-Animation wird für Besucher übersprungen, die „Prefers-Reduced-Motion“ einstellen.
* <strong>Erbt deine Farbe.</strong> Lege eine Farbe fest und jedes Abzeichen folgt dieser über „currentColor“.

Trust befindet sich noch nicht im WordPress.org-Verzeichnis. Die Quelle befindet sich auf GitHub unter https://github.com/wppoland/plogins-trust, wenn du den Code lesen oder einen Fehler melden möchten.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-trust/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-trust/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-trust
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

* Einzelne Produktseite, nach der Schaltfläche „In den Warenkorb“.
* Überall über den Shortcode „[trust_badges]“.

= Settings =

Auf einer Einstellungsseite im WooCommerce-Menü kannst du:

* Aktivieren oder deaktiviere die Abzeichen.
* Schreibe die Überschrift (oder lass sie nur für Symbole leer).
* Wähle aus, welche gebündelten Abzeichen angezeigt werden sollen.
* Wähle die Symbolfarbe.

== Installation ==

1. Lade das Plugin nach „/wp-content/plugins/trust“ hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss installiert und aktiv sein.
3. Gehe zu <strong>WooCommerce → Trust Badges</strong>, um deine Abzeichen, Überschrift und Farbe auszuwählen.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. Trust erfordert eine aktive WooCommerce-Installation.

= Does it load anything from third-party servers? =

Nein. Alle gebündelten Abzeichen sind Inline-SVGs, die von deiner eigenen Website bereitgestellt werden.

= Will it slow my store down or shift the layout? =

Nein. Die Storefront-Ausgabe ist nur CSS und enthält kein JavaScript, sodass es zu keiner Layoutverschiebung kommt.

= Can I place badges somewhere custom? =

Ja. Verwende den Shortcode „[trust_badges]“, um die Zeile überall dort zu rendern, wo Shortcodes unterstützt werden.

= Which badges are included? =

Ein kuratierter Satz von Inline-SVG-Symbolen (sicherer Checkout, Versand, Rücksendungen und ähnliches). Wähle in den Einstellungen aus, was angezeigt werden soll.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Die Zeile mit dem Vertrauensabzeichen unter der Schaltfläche „In den Warenkorb“ auf einer einzelnen Produktseite.
2. Der Einstellungsbildschirm für Trust Badges.

== External Services ==

Trust stellt keine Verbindung zu externen Diensten her. Bei jedem Badge handelt es sich um eine gebündelte Inline-SVG, die von deiner eigenen Website bereitgestellt wird, sodass die Storefront-Ausgabe nichts von Dritten lädt und das Plugin keine Netzwerkanfragen stellt. deine Auswahl (Überschrift, ausgewählte Abzeichen und Symbolfarbe) wird auf deiner eigenen Website in einer einzigen „trust_settings“-Option zusammen mit einer „trust_db_version“-Markierung gespeichert; beide werden entfernt, wenn du das Plugin löschen. Das Plugin versendet keine E-Mails und speichert keine Besucher- oder Kundendaten.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.4 =
* Für einen eindeutigeren Plugin-Namen in Plogins Trust für WooCommerce umbenannt.

= 0.1.3 =
* Füge den Filter „trust/badge_library“ hinzu, damit Add-ons sichere Inline-SVG-Badges an den gemeinsamen Auswahl- und Renderer anhängen können.

= 0.1.2 =
* Füge die Aktion „trust/badges_rendered“ und die Attribute „data-trust-badge“ für datenschutzsichere Add-on-Analysen hinzu.

= 0.1.1 =
* Fügt Unterstützung für die Start-/Enddaten der Saison- und Kampagnenanzeigeplanung hinzu (erfordert Trust Pro).

= 0.1.0 =
* Erstveröffentlichung: gebündelte Inline-SVG-Vertrauensabzeichen, die nach der Schaltfläche „In den Warenkorb“ auf einzelnen Produktseiten angezeigt werden, mit konfigurierbarer Überschrift, Abzeichenauswahl, Symbolfarbe und einem „[trust_badges]“-Shortcode.
