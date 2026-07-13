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

Dodaj rząd plakietek bezpiecznej kasy po przycisku „Dodaj do koszyka”, aby zapewnić kupujących o bezpieczeństwie płatności.

== Description ==

Trust wyświetla rząd plakietek bezpiecznej kasy po przycisku „Dodaj do koszyka”, pod krótkim nagłówkiem, np. „Gwarancja bezpiecznej kasy”. Pomysł jest prosty: umieść przypomnienie, że sklep jest bezpieczny, dokładnie tam, gdzie kupujący decyduje się na zakup.

Wtyczka zawiera dziesięć ręcznie rysowanych, wbudowanych plakietek SVG: bezpieczna kasa, szyfrowanie SSL, gwarancja zwrotu pieniędzy, zweryfikowany sklep, bezpłatna wysyłka, płatność kartą, portfel cyfrowy, wsparcie 24/7, ochrona prywatności i satysfakcja. Wybierasz, które mają być wyświetlane, piszesz nagłówek (albo zostawiasz go pusty, aby pokazać same ikony) i ustawiasz kolor ikon.

Został zbudowany tak, aby nie przeszkadzać:

* <strong>Bez żądań zewnętrznych.</strong> Plakietki to wbudowane pliki SVG serwowane z Twojej własnej witryny, więc nic nie jest ładowane od podmiotów trzecich i nie ma czego śledzić.
* <strong>Bez JavaScriptu w sklepie.</strong> Wiersz plakietek to zwykły CSS, więc nie dodaje skryptu ani nie przesuwa układu podczas ładowania strony.
* <strong>Dostępny.</strong> Każda plakietka ma dostępną nazwę, a wiersz jest oznaczony jako lista. Mała animacja po najechaniu jest pomijana dla odwiedzających, którzy ustawili `prefers-reduced-motion`.
* <strong>Dziedziczy Twój kolor.</strong> Ustaw jeden kolor, a każda plakietka podąża za nim przez `currentColor`.

Trust nie jest jeszcze w katalogu WordPress.org. Kod źródłowy jest na GitHubie pod adresem https://github.com/wppoland/plogins-trust, jeśli chcesz go przejrzeć lub zgłosić błąd.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-trust/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-trust/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-trust
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

* Strona pojedynczego produktu, po przycisku „Dodaj do koszyka”.
* W dowolnym miejscu za pomocą shortcode’u `[trust_badges]`.

= Settings =

Strona ustawień w menu WooCommerce pozwala:

* Włączyć lub wyłączyć plakietki.
* Napisać nagłówek (albo zostawić go pusty, aby pokazać same ikony).
* Wybrać, które dołączone plakietki mają być wyświetlane.
* Wybrać kolor ikon.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/trust` lub zainstaluj przez Wtyczki → Dodaj nową.
2. Włącz ją. WooCommerce musi być zainstalowane i aktywne.
3. Wejdź w <strong>WooCommerce → Trust Badges</strong>, aby wybrać plakietki, nagłówek i kolor.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. Trust wymaga aktywnej instalacji WooCommerce.

= Does it load anything from third-party servers? =

Nie. Wszystkie dołączone plakietki to wbudowane pliki SVG serwowane z Twojej własnej witryny.

= Will it slow my store down or shift the layout? =

Nie. Wyjście w sklepie to sam CSS, bez JavaScriptu, więc nie powoduje przeskoków układu.

= Can I place badges somewhere custom? =

Tak. Użyj shortcode’u `[trust_badges]`, aby wyrenderować wiersz wszędzie tam, gdzie obsługiwane są shortcode’y.

= Which badges are included? =

Wyselekcjonowany zestaw wbudowanych ikon SVG (bezpieczna kasa, wysyłka, zwroty i podobne). Wybierz, które pokazać w ustawieniach.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Włącz ją dla całej sieci lub w poszczególnych witrynach; każda witryna zachowuje własne ustawienia i dane.

== Screenshots ==

1. Wiersz plakietek zaufania pod przyciskiem „Dodaj do koszyka” na stronie pojedynczego produktu.
2. Ekran ustawień Trust Badges.

== External Services ==

Trust nie łączy się z żadnymi usługami zewnętrznymi. Każda plakietka to dołączony wbudowany plik SVG serwowany z Twojej własnej witryny, więc wyjście w sklepie niczego nie ładuje od podmiotów trzecich, a wtyczka nie wysyła żadnych żądań sieciowych. Twoje wybory (nagłówek, wybrane plakietki i kolor ikon) są przechowywane na Twojej witrynie w jednej opcji `trust_settings`, wraz ze znacznikiem `trust_db_version`; oba są usuwane po odinstalowaniu wtyczki. Wtyczka nie wysyła wiadomości e-mail i nie przechowuje danych odwiedzających ani klientów.

== Translations ==

Plogins Trust zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-trust`, więc pakiety językowe z WordPress.org mogą też nadpisywać lub rozszerzać te dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.4 =
* Zmieniono nazwę na Plogins Trust dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.3 =
* Dodaje filtr `trust/badge_library`, aby dodatki mogły dołączać bezpieczne wbudowane plakietki SVG do współdzielonego selektora i renderera.

= 0.1.2 =
* Dodaje akcję `trust/badges_rendered` i atrybuty `data-trust-badge` do analityki dodatków z poszanowaniem prywatności.

= 0.1.1 =
* Dodaje obsługę dat rozpoczęcia i zakończenia harmonogramu wyświetlania sezonowego i kampanii (wymaga Trust Pro).

= 0.1.0 =
* Pierwsza wersja: dołączone wbudowane plakietki zaufania SVG wyświetlane po przycisku „Dodaj do koszyka” na stronach pojedynczych produktów, z konfigurowalnym nagłówkiem, wyborem plakietek, kolorem ikon i shortcode’em `[trust_badges]`.
