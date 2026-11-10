
<?php /**
 * Sección "¿Por qué MiLocalWeb?" (#beneficios).
 *
 * Responsabilidad: tres tarjetas de beneficios (web propia, tienda online y
 * visibilidad local). Mantiene el alias legacy #por-que para enlaces viejos.
 *
 * Depende de: config/config.php (IMG_URL).
 */ ?>
<!-- Alias legacy: #por-que → #beneficios -->
<div id="por-que" aria-hidden="true" class="anchor-legacy"></div>

<section id="beneficios" class="section section-why section-beneficios" aria-labelledby="beneficios-heading">
    <h2 id="beneficios-heading">¿Por qué MiLocalWeb?</h2>
    <p class="section-subtitle">Tres formas de hacer crecer tu negocio en internet, sin depender de nadie más.</p>
    <div class="why-grid">
        <div class="why-card">
            <img src="<?= IMG_URL ?>/beneficios/Sitio Web.webp"
                 alt="Sitio web profesional para tu negocio"
                 class="why-img"
                 width="200"
                 height="200"
                 loading="lazy"
                 decoding="async">
            <h3>Tu lugar en internet</h3>
            <p>Se dueño de tu propio sitio web profesional! Tus clientes te encuentren, conozcan tus servicios y contacten contigo desde cualquier dispositivo.</p>
        </div>
        <div class="why-card">
            <img src="<?= IMG_URL ?>/beneficios/Tienda Online.webp"
                 alt="Tienda online abierta las 24 horas"
                 class="why-img"
                 width="200"
                 height="200"
                 loading="lazy"
                 decoding="async">
            <h3>Siempre abierto</h3>
            <p>Armamos tu tienda online con catálogo de productos y carrito por WhatsApp. Tus clientes compran cuando quieran, vos atendés desde el celular.</p>
        </div>
        <div class="why-card">
            <img src="<?= IMG_URL ?>/beneficios/Visibilidad Digital.webp"
                 alt="Visibilidad en Google Maps y búsquedas locales"
                 class="why-img"
                 width="200"
                 height="200"
                 loading="lazy"
                 decoding="async">
            <h3>Llegan hasta vos</h3>
            <p>Aparecé en Google Maps, redes sociales y búsquedas locales. Mejoramos tu reputación online para que te prefieran antes que a la competencia.</p>
        </div>
    </div>
</section>
