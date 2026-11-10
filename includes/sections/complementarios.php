
<?php /**
 * Servicios adicionales (#complementarios).
 *
 * Responsabilidad: ofrecer extras de pago único (teléfono exclusivo y
 * capacitación en autogestión de redes). Mantiene los alias legacy #servicios
 * y #adicionales.
 *
 * Depende de: config/config.php (IMG_URL).
 */ ?>
<!-- Alias legacy: #servicios → #complementarios (+ alias #adicionales) -->
<div id="servicios" aria-hidden="true" class="anchor-legacy"></div>
<div id="adicionales" aria-hidden="true" class="anchor-legacy"></div>

<section id="complementarios" class="section section-extras section-complementarios" aria-labelledby="complementarios-heading">
    <h2 id="complementarios-heading">Servicios Adicionales</h2>
    <p class="section-subtitle">Complementa tu plan con servicios extra. Pago único, sin mensualidades.</p>
    <div class="extras-grid">
        <div class="extra-card">
            <img src="<?= IMG_URL ?>/productos/telefono y linea.webp"
                 alt="Teléfono y línea exclusiva para tu negocio"
                 class="extra-img"
                 width="400"
                 height="300"
                 loading="lazy"
                 decoding="async">
            <h3 class="extra-name">Teléfono Exclusivo para tu Negocio</h3>
            <p class="extra-desc">Separa tu vida personal del trabajo. Un número exclusivo para atender clientes, con equipo propio y línea nueva.</p>
            <ul class="extra-features">
                <li>Desde <strong>$200.000.-</strong> <small>incluye línea prepago nueva</small></li>
                <li>Equipos con capacidad para configurar y administrar redes</li>
                <li>Con garantía</li>
            </ul>
        </div>
        <div class="extra-card">
            <h3 class="extra-name">Capacitación: Autogestión Digital de Redes</h3>
            <p class="extra-desc">Aprende a manejar tus propias redes sin depender de nosotros.</p>
            <ul class="extra-features">
                <li>Publicar en Instagram y Facebook</li>
                <li>Responder mensajes y reseñas</li>
                <li>Armar historias y destacadas</li>
                <li>Tips de contenido para tu rubro</li>
                <li>Uso básico de WhatsApp Business</li>
            </ul>
            <div class="extra-price">
                <strong>$150.000.-</strong> <small>(hasta 4 personas)</small>
                <span class="extra-price-add">+ $30.000.- por persona extra</span>
            </div>
        </div>
    </div>
</section>
