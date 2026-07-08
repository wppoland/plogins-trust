=== Plogins Trust - Trust Badges for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, trust badges, secure checkout, conversion, ecommerce
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Wymaga wtyczek: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaj rząd plakietek bezpiecznej kasy po przycisku „Dodaj do koszyka”, aby zapewnić kupujących o bezpieczeństwie płatności.

== Description ==

Trust wyświetla rząd plakietek bezpiecznej kasy po przycisku „Dodaj do koszyka”, pod krótkim nagłówkiem, np. „Gwarancja bezpiecznej kasy”. Pomysł jest prosty: umieść przypomnienie, że sklep jest bezpieczny w miejscu, w którym kupujący decyduje się na zakup.

Wtyczka zawiera dziesięć ręcznie rysowanych, wbudowanych plakietek SVG: bezpieczna kasa, szyfrowane SSL, gwarancja zwrotu pieniędzy, zweryfikowany sklep, bezpłatna wysyłka, płatność kartą, portfel cyfrowy, wsparcie 24/7, ochrona prywatności i satysfakcja. Wybierasz, które mają być wyświetlane, piszesz nagłówek (lub zostawiasz go pustym dla tylko ikon) i ustawiasz kolor ikony.

Został zbudowany tak, aby nie przeszkadzać:

* <strong>Brak żądań z zewnątrz.</strong> Plakietki to wbudowane pliki SVG udostępniane z Twojej własnej witryny, więc nic nie jest ładowane od stron trzecich i nie ma czego śledzić.
* <strong>Brak JavaScript w witrynie sklepu.</strong> Wiersz plakietki to zwykły CSS, więc nie dodaje skryptu ani nie zmienia układu podczas ładowania strony.
* <strong>Dostępne.</strong> Każda plakietka ma przystępną nazwę, a wiersz jest oznaczony jako lista. Animacja małego najechania jest pomijana w przypadku gości, którzy ustawili opcję „preferuje zmniejszony ruch”.
* <strong>Dziedziczy Twój kolor.</strong> Ustaw jeden kolor, a każda plakietka będzie podążać za nim poprzez „currentColor”.

Trust nie znajduje się jeszcze w katalogu WordPress.org. Źródło znajduje się na GitHubie pod adresem https://github.com/wppoland/plogins-trust, jeśli chcesz przeczytać kod lub zgłosić błąd.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-trust/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-trust/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-trust
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

* Strona pojedynczego produktu, po przycisku dodaj do koszyka.
* W dowolnym miejscu za pomocą krótkiego kodu `[trust_badges]`.

= Settings =

Strona ustawień w menu WooCommerce umożliwia:

* Włącz lub wyłącz odznaki.
* Wpisz nagłówek (lub pozostaw go pustym tylko dla ikon).
* Wybierz, które odznaki w pakiecie mają być wyświetlane.
* Wybierz kolor ikony.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/trust` lub zainstaluj poprzez Wtyczki → Dodaj nową.
2. Aktywuj. WooCommerce musi być zainstalowany i aktywny.
3. Odwiedź <strong>WooCommerce → Odznaki zaufania</strong>, aby wybrać odznaki, nagłówek i kolor.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. Trust wymaga aktywnej instalacji WooCommerce.

= Does it load anything from third-party servers? =

Nie. Wszystkie odznaki w pakiecie są wbudowanymi plikami SVG wyświetlanymi z Twojej własnej witryny.

= Will it slow my store down or shift the layout? =

Nie. Dane wyjściowe sklepu zawierają wyłącznie CSS, bez JavaScriptu, więc nie powodują zmiany układu.

= Can I place badges somewhere custom? =

Tak. Użyj krótkiego kodu `[trust_badges]`, aby wyrenderować wiersz wszędzie tam, gdzie obsługiwane są krótkie kody.

= Which badges are included? =

Wyselekcjonowany zestaw wbudowanych ikon SVG (bezpieczne zakupy, wysyłka, zwroty i podobne). Wybierz, które mają być wyświetlane w ustawieniach.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Wiersz z plakietką zaufania pod przyciskiem Dodaj do koszyka na stronie pojedynczego produktu.
2. Ekran ustawień Trust Badge.

== External Services ==

Trust nie łączy się z żadnymi usługami zewnętrznymi. Każda plakietka jest dołączonym wbudowanym plikiem SVG udostępnianym z Twojej własnej witryny, więc dane wyjściowe sklepu nie ładują niczego od stron trzecich, a wtyczka nie wysyła żadnych żądań sieciowych. Twoje wybory (nagłówek, wybrane plakietki i kolor ikony) są przechowywane na Twojej witrynie w pojedynczej opcji „trust_settings” wraz ze znacznikiem „trust_db_version”; oba zostaną usunięte po usunięciu wtyczki. Wtyczka nie wysyła wiadomości e-mail i nie przechowuje żadnych danych odwiedzających ani klientów.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.4 =
* Zmieniono nazwę na Plogins Trust dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.3 =
* Dodaj filtr `trust/badge_library`, aby dodatki mogły dołączać bezpieczne wbudowane odznaki SVG do współdzielonego selektora i modułu renderującego.

= 0.1.2 =
* Dodaj akcję `trust/badges_rendered` i atrybuty `data-trust-badge`, aby zapewnić dodatkową analitykę zapewniającą ochronę prywatności.

= 0.1.1 =
* Dodaje obsługę dat rozpoczęcia/zakończenia harmonogramu wyświetlania sezonowego i kampanii (wymaga Trust Pro).

= 0.1.0 =
* Wersja pierwsza: dołączone wbudowane plakietki zaufania SVG wyświetlane po przycisku „Dodaj do koszyka” na stronach poszczególnych produktów, z konfigurowalnym nagłówkiem, wyborem plakietki, kolorem ikony i krótkim kodem „[trust_badges]”.
