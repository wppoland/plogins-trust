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

Añade una fila de insignias de pago seguro después del botón Añadir al carrito para tranquilizar a los compradores sobre la seguridad del pago.

== Description ==

Trust muestra una fila de insignias de pago seguro después del botón Añadir al carrito, debajo de un encabezado breve como «Pago seguro garantizado». La idea es simple: poner un recordatorio de que la tienda es segura justo donde el comprador decide si quiere comprar.

El plugin incluye diez insignias SVG en línea dibujadas a mano: pago seguro, cifrado SSL, garantía de devolución de dinero, tienda verificada, envío gratuito, pago con tarjeta, monedero digital, soporte 24/7, privacidad protegida y satisfacción. Tú eliges cuáles mostrar, escribes el encabezado (o lo dejas en blanco para mostrar solo iconos) y estableces el color del icono.

Está diseñado para no estorbar:

* <strong>Sin solicitudes externas.</strong> Las insignias son SVG en línea servidos desde tu propio sitio, así que no se carga nada de terceros y no hay nada que rastrear.
* <strong>Sin JavaScript en la tienda.</strong> La fila de insignias es CSS sencillo, así que no añade un script ni desplaza el diseño mientras se carga la página.
* <strong>Accesible.</strong> Cada insignia tiene un nombre accesible y la fila está marcada como una lista. La pequeña animación al pasar el cursor se omite para los visitantes que tienen activado `prefers-reduced-motion`.
* <strong>Hereda tu color.</strong> Establece un color y cada insignia lo sigue mediante `currentColor`.

Trust aún no está en el directorio de WordPress.org. El código fuente está en GitHub en https://github.com/wppoland/plogins-trust por si quieres leerlo o informar de un error.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-trust/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-trust/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-trust
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

* Página de producto individual, después del botón Añadir al carrito.
* En cualquier lugar mediante el shortcode `[trust_badges]`.

= Settings =

Una página de ajustes en el menú de WooCommerce te permite:

* Activar o desactivar las insignias.
* Escribir el encabezado (o dejarlo vacío para mostrar solo iconos).
* Elegir qué insignias incluidas mostrar.
* Elegir el color del icono.

== Installation ==

1. Sube el plugin a `/wp-content/plugins/trust` o instálalo desde Plugins → Añadir nuevo.
2. Actívalo. WooCommerce debe estar instalado y activo.
3. Entra en <strong>WooCommerce → Trust Badges</strong> para elegir tus insignias, encabezado y color.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. Trust requiere una instalación activa de WooCommerce.

= Does it load anything from third-party servers? =

No. Todas las insignias incluidas son SVG en línea servidos desde tu propio sitio.

= Will it slow my store down or shift the layout? =

No. La salida en la tienda es solo CSS, sin JavaScript, así que no provoca saltos de diseño.

= Can I place badges somewhere custom? =

Sí. Usa el shortcode `[trust_badges]` para renderizar la fila en cualquier lugar donde se admitan shortcodes.

= Which badges are included? =

Un conjunto seleccionado de iconos SVG en línea (pago seguro, envío, devoluciones y similares). Elige cuáles mostrar en los ajustes.


= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo en toda la red o en sitios concretos; cada sitio conserva sus propios ajustes y datos.

== Screenshots ==

1. La fila de insignias de confianza debajo del botón Añadir al carrito en la página de un producto individual.
2. La pantalla de ajustes de Trust Badges.

== External Services ==

Trust no se conecta a ningún servicio externo. Cada insignia es un SVG en línea incluido servido desde tu propio sitio, así que la salida en la tienda no carga nada de terceros y el plugin no realiza solicitudes de red. Tus elecciones (el encabezado, las insignias seleccionadas y el color del icono) se guardan en tu propio sitio en una única opción `trust_settings`, junto con un marcador `trust_db_version`; ambos se eliminan al borrar el plugin. El plugin no envía correos electrónicos y no almacena datos de visitantes ni de clientes.

== Translations ==

Plogins Trust incluye traducciones al polaco, alemán y español para la interfaz del plugin. El dominio de texto es `plogins-trust`, así que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Añadidas traducciones al polaco, alemán y español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.4 =
* Renombrado a Plogins Trust para WooCommerce para un nombre de plugin más distintivo.

= 0.1.3 =
* Añade el filtro `trust/badge_library` para que los complementos puedan añadir insignias SVG en línea seguras al selector y renderizador compartidos.

= 0.1.2 =
* Añade la acción `trust/badges_rendered` y los atributos `data-trust-badge` para analítica de complementos respetuosa con la privacidad.

= 0.1.1 =
* Añade compatibilidad con fechas de inicio y fin de programación de visualización estacional y de campaña (requiere Trust Pro).

= 0.1.0 =
* Lanzamiento inicial: insignias de confianza SVG en línea incluidas mostradas después del botón Añadir al carrito en páginas de producto individuales, con encabezado configurable, selección de insignias, color de icono y el shortcode `[trust_badges]`.
