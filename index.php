<?php
/**
 * Landing page principal de MiLocalWeb.
 *
 * Presenta el sitio publico con secciones de servicios y contacto.
 * Incluye cabecera y pie compartidos desde includes/.
 *
 * @package MiLocalWeb
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1>Bienvenido a <?= SITE_NAME ?></h1>
    <p>Soluciones web profesionales para impulsar tu negocio.</p>
    <a href="#contacto" class="btn-primary">Contactanos</a>
</section>

<section id="servicios" class="section">
    <h2>Nuestros servicios</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3>Desarrollo web</h3>
            <p>Sitios a medida, optimizados y responsivos.</p>
        </div>
        <div class="service-card">
            <h3>Hosting y dominios</h3>
            <p>Infraestructura confiable para tu presencia online.</p>
        </div>
        <div class="service-card">
            <h3>Soporte tecnico</h3>
            <p>Acompanamiento continuo para tus proyectos.</p>
        </div>
    </div>
</section>

<section id="contacto" class="section section-contact">
    <h2>Contacto</h2>
    <p>Escribinos a <a href="mailto:contacto@milocalweb.com.ar">contacto@milocalweb.com.ar</a></p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>