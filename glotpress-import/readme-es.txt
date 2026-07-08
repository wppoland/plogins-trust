=== Plogins Trust - Trust Badges for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, trust badges, secure checkout, conversion, ecommerce
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Requiere complementos: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Añade una fila de insignias de pago seguro después del botón Añadir al carrito para tranquilizar a los compradores sobre la seguridad del pago.

== Description ==

Trust muestra una fila de insignias de pago seguro después del botón Añadir al carrito, debajo de un título breve como "Pago seguro garantizado". La idea es simple: poner un recordatorio de que la tienda es segura justo donde el comprador decide si quiere comprar.

El complemento incluye diez insignias SVG en línea dibujadas a mano: pago seguro, cifrado SSL, garantía de devolución de dinero, tienda verificada, envío gratuito, pago con tarjeta, billetera digital, soporte 24 horas al día, 7 días a la semana, privacidad protegida y satisfacción. Usted elige cuáles mostrar, escribe el encabezado (o lo deja en blanco solo para los íconos) y establece el color del ícono.

Está diseñado para permanecer fuera del camino:

* <strong>Sin solicitudes externas.</strong> Las insignias son SVG en línea servidos desde tu propio sitio, por lo que no se carga nada de terceros y no hay nada que rastrear.
* <strong>No hay JavaScript en el escaparate.</strong> La fila de la insignia es CSS simple, por lo que no añade un script ni cambia el diseño a medida que se carga la página.
* <strong>Accesible.</strong> Cada insignia tiene un nombre accesible y la fila está marcada como una lista. La pequeña animación de desplazamiento se omite para los visitantes que configuran "prefiere movimiento reducido".
* <strong>Hereda tu color.</strong> Establece un color y cada insignia lo sigue a través de `currentColor`.

La confianza aún no está en el directorio de WordPress.org. La fuente se encuentra en GitHub en https://github.com/wppoland/plogins-trust si desea leer el código o informar un error.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-trust/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-trust/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-trust
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-trust/issues


= Where badges appear =

*Página de producto único, después del botón añadir al carrito.
* En cualquier lugar a través del código corto `[trust_badges]`.

= Settings =

Una página de configuración en el menú de WooCommerce le permite:

* Activar o desactivar las insignias.
* Escribe el encabezado (o déjalo vacío solo para los íconos).
* Elija qué insignias incluidas mostrar.
* Elige el color del icono.

== Installation ==

1. Cargue el complemento en `/wp-content/plugins/trust`, o instálelo a través de Complementos → Añadir nuevo.
2. Actívalo. WooCommerce debe estar instalado y activo.
3. Visita <strong>WooCommerce → Insignias de confianza</strong> para elegir tus insignias, título y color.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. Trust requiere una instalación activa de WooCommerce.

= Does it load anything from third-party servers? =

No. Todas las insignias incluidas son SVG en línea que se entregan desde tu propio sitio.

= Will it slow my store down or shift the layout? =

No. La salida del escaparate es solo CSS sin JavaScript, por lo que no provoca cambios en el diseño.

= Can I place badges somewhere custom? =

Sí. Utilice el código corto `[trust_badges]` para representar la fila en cualquier lugar donde se admitan códigos cortos.

= Which badges are included? =

Un conjunto seleccionado de íconos SVG en línea (pago seguro, envío, devoluciones y similares). Elija cuál mostrar en la configuración.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== Screenshots ==

1. La fila de la insignia de confianza debajo del botón Añadir al carrito en la página de un solo producto.
2. La pantalla de configuración de Trust Badges.

== External Services ==

Trust no se conecta a ningún servicio externo. Cada insignia es un SVG en línea incluido que se entrega desde tu propio sitio, por lo que la salida del escaparate no carga nada de terceros y el complemento no realiza solicitudes de red. Sus elecciones (el encabezado, las insignias seleccionadas y el color del icono) se guardan en tu propio sitio en una única opción "trust_settings", junto con un marcador "trust_db_version"; ambos se eliminan cuando eliminas el complemento. El complemento no envía correos electrónicos y no almacena datos de visitantes o clientes.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.4 =
* Renombrado a Plogins Trust for WooCommerce para obtener un nombre de complemento más distintivo.

= 0.1.3 =
* Añade el filtro `trust/badge_library` para que los complementos puedan añadir insignias SVG en línea seguras al selector y renderizador compartidos.

= 0.1.2 =
* Añade la acción `trust/badges_rendered` y los atributos `data-trust-badge` para análisis complementarios seguros para la privacidad.

= 0.1.1 =
* Añade soporte para fechas de inicio/finalización de programación de visualización de campañas y temporadas (requiere Trust Pro).

= 0.1.0 =
* Lanzamiento inicial: insignias de confianza SVG en línea empaquetadas que se muestran después del botón Añadir al carrito en páginas de productos individuales, con un encabezado configurable, selección de insignia, color de ícono y un código corto `[trust_badges]`.
