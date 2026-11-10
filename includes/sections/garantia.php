
<?php /**
 * Sección de garantía (#garantia).
 *
 * Responsabilidad: comunicar que el posicionamiento y las cuentas quedan en
 * manos del cliente, y que el precio se mantiene fijo por 12 meses. Mantiene
 * el alias legacy #conservas.
 *
 * Depende de: config/config.php (IMG_URL) para la imagen del contrato.
 */ ?>
<!-- Alias legacy: #conservas → #garantia -->
<div id="conservas" aria-hidden="true" class="anchor-legacy"></div>

<section id="garantia" class="section section-keep section-garantia" aria-labelledby="garantia-heading">
    <div class="keep-contract-float" aria-hidden="true">
        <img src="<?= IMG_URL ?>/contrato/contrato.webp"
             alt="Contrato de propiedad digital de MiLocalWeb"
             class="keep-contract-img"
             width="400"
             height="400"
             loading="lazy"
             decoding="async">
    </div>

    <h2 id="garantia-heading">Todo el posicionamiento es tuyo</h2>
    <p class="section-subtitle">Si en algún momento decidís no seguir con el sitio web, conservás todo lo que configuramos para tu negocio.</p>

    <div class="keep-grid">
        <div class="keep-card">
            <h3>Queda para vos</h3>
            <ul class="keep-list">
                <li>Google Business Profile</li>
                <li>Cuenta de Instagram/Facebook</li>
                <li>Meta Business Suite configurado</li>
                <li>WhatsApp Business configurado</li>
                <li>Fotos y material gráfico entregado</li>
                <li>QR, tarjetas y flyers impresos</li>
            </ul>
        </div>
    </div>

    <div class="planes-promo planes-promo--accent">
        <span class="promo-badge promo-badge--accent">Garantía de precio fijo</span>
        <p>
            El precio de tu plan queda fijo por 12 meses. Escrito y firmado por contrato. Al año revisamos los valores según ajustes del mercado, pero durante todo el primer año pagás exactamente lo que acordamos.
        </p>
    </div>
</section>
