<?php
/**
 * Landing page principal de MiLocalWeb.
 *
 * Ensambla la home a partir de secciones en `includes/sections/`.
 * Cada sección es un parcial de presentación; los datos vienen de
 * `config/config.php` y de los bloques PHP de la sección de ubicación.
 *
 * Depende de: config/config.php (constantes y $oficina) e includes/header.php,
 * que abre el documento. El orden de los require define el orden del DOM y
 * debe coincidir con la navegación del header.
 *
 * @package MiLocalWeb
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<?php require_once __DIR__ . '/includes/sections/hero.php'; ?>
<?php require_once __DIR__ . '/includes/sections/beneficios.php'; ?>
<?php require_once __DIR__ . '/includes/sections/resumen-planes.php'; ?>
<?php require_once __DIR__ . '/includes/sections/productos.php'; ?>
<?php require_once __DIR__ . '/includes/sections/confianza.php'; ?>
<?php require_once __DIR__ . '/includes/sections/garantia.php'; ?>
<?php require_once __DIR__ . '/includes/sections/complementarios.php'; ?>
<?php require_once __DIR__ . '/includes/sections/faq.php'; ?>
<?php require_once __DIR__ . '/includes/sections/ubicacion.php'; ?>
<?php require_once __DIR__ . '/includes/sections/contacto.php'; ?>
<?php require_once __DIR__ . '/includes/sections/seo-jsonld.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
