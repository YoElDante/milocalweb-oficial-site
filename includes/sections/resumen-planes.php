
<?php /**
 * Resumen comercial de planes (#resumen-planes).
 *
 * Responsabilidad: comparar los tres planes en tarjetas, mostrar precios,
 * financiación y promos. Mantiene el alias legacy #planes.
 *
 * Depende de: config/config.php (IMG_URL) y de los atributos data-share-*
 * que consume assets/js/main/04-share.js.
 */ ?>
<!-- Alias legacy: #planes → #resumen-planes -->
<div id="planes" aria-hidden="true" class="anchor-legacy"></div>

<section id="resumen-planes" class="section section-plans section-resumen-planes" aria-labelledby="resumen-planes-heading">
    <h2 id="resumen-planes-heading">Planes a tu medida</h2>
    <p class="section-subtitle">Elegí el plan de posicionamiento digital que se ajuste a tu negocio. Todos incluyen configuración profesional de tus perfiles. Agregá una web propia con meses gratis y mantenimiento fijo por 1 año.</p>

    <?php /* Orden visual: INICIAL, IMPARABLE (destacado) y VISIBLE. El badge y el borde naranja identifican la recomendación; no cambiar sin revisar la grilla de 08-planes.css. */ ?>
    <div class="plans-grid">
        <div class="plan-card">
            <img src="<?= IMG_URL ?>/productos/Logo INICIAL.webp" alt="Logo Plan INICIAL" class="plan-logo"
                 width="1254" height="1254" loading="lazy" decoding="async">
            <h3 class="plan-name">INICIAL</h3>
            <p class="plan-tagline">"Que te encuentren y te contacten"</p>
            <div class="plan-price-block">
                <div class="plan-price">$498.000.- <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">3 cuotas de $199.000.-</p>
            </div>
            <ul class="plan-features">
                <li>Google Business Profile configurado</li>
                <li>Instagram, Facebook y WhatsApp profesionales</li>
                <li>Web propia con subdominio gratis</li>
                <li>6 fotos editadas + kit QR</li>
            </ul>
            <a href="#plan-inicial" class="btn-plan-anchor btn-plan-anchor--ghost" data-scroll-to-product>Ver detalles del plan INICIAL</a>
            <div class="plan-share">
                <button type="button" class="plan-share__btn"
                        data-share-plan="INICIAL"
                        data-share-tagline="Que te encuentren y te contacten"
                        data-share-anchor="plan-inicial"
                        aria-expanded="false"
                        aria-label="Compartir el plan INICIAL">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir</span>
                </button>
            </div>
        </div>

        <div class="plan-card plan-destacado">
            <span class="plan-badge">Recomendado</span>
            <img src="<?= IMG_URL ?>/productos/Logo IMPARABLE.webp" alt="Logo Plan IMPARABLE" class="plan-logo"
                 width="1254" height="1254" loading="lazy" decoding="async">
            <h3 class="plan-name">IMPARABLE</h3>
            <p class="plan-tagline">"Que te prefieran"</p>
            <div class="plan-price-block">
                <div class="plan-price">$998.000.- <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">$399.000.- + 4 cuotas de $199.000.-</p>
            </div>
            <ul class="plan-features">
                <li>Todo lo de VISIBLE</li>
                <li>Web completa con múltiples secciones</li>
                <li>Hasta 30 productos cargados + 30 actualizaciones</li>
                <li>3 meses de publicaciones profesionales en redes</li>
            </ul>
            <a href="#plan-imparable" class="btn-plan-anchor btn-plan-anchor--ghost btn-plan-anchor--ghost-destacado" data-scroll-to-product>Ver detalles del plan IMPARABLE</a>
            <div class="plan-share">
                <button type="button" class="plan-share__btn"
                        data-share-plan="IMPARABLE"
                        data-share-tagline="Que te prefieran"
                        data-share-anchor="plan-imparable"
                        aria-expanded="false"
                        aria-label="Compartir el plan IMPARABLE">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir</span>
                </button>
            </div>
        </div>

        <div class="plan-card">
            <img src="<?= IMG_URL ?>/productos/Logo VISIBLE.webp" alt="Logo Plan VISIBLE" class="plan-logo"
                 width="1254" height="1254" loading="lazy" decoding="async">
            <h3 class="plan-name">VISIBLE</h3>
            <p class="plan-tagline">"Que te vean y te elijan"</p>
            <div class="plan-price-block">
                <div class="plan-price">$648.000.- <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">4 cuotas de $199.000.-</p>
            </div>
            <ul class="plan-features">
                <li>Todo lo de INICIAL</li>
                <li>Catálogo web con carrito por WhatsApp</li>
                <li>Hasta 15 productos cargados + 10 actualizaciones</li>
                <li>12 fotos editadas + 1 mes de publicaciones</li>
            </ul>
            <a href="#plan-visible" class="btn-plan-anchor btn-plan-anchor--ghost" data-scroll-to-product>Ver detalles del plan VISIBLE</a>
            <div class="plan-share">
                <button type="button" class="plan-share__btn"
                        data-share-plan="VISIBLE"
                        data-share-tagline="Que te vean y te elijan"
                        data-share-anchor="plan-visible"
                        aria-expanded="false"
                        aria-label="Compartir el plan VISIBLE">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir</span>
                </button>
            </div>
        </div>
    </div>

    <?php /* Nota comercial: contado vs. cuotas y mantenimiento bonificado. Debe coincidir con la ficha de cada plan en productos.php. */ ?>
    <div class="planes-nota">
        <p>
            Pagá de contado y ahorrá. O financiá en cuotas fijas. La primera cuota se abona al contratar.
            <br><small>El mantenimiento mensual aplica después del período bonificado y se mantiene fijo durante 12 meses.</small>
        </p>
    </div>

    <?php /* Promos transversales: subdominio gratuito y dominio propio opcional. */ ?>
    <div class="planes-promo">
        <span class="promo-badge">Gratis siempre</span>
        <p>
            Todos los planes incluyen subdominio <code>tunegocio.milocalweb.com.ar</code>
            sin costo adicional, listo al instante y para siempre.
        </p>
    </div>

    <div class="planes-promo planes-promo--accent">
        <span class="promo-badge promo-badge--accent">Solo Tuyo</span>
        <p>
            ¿Querés tu <strong>dominio propio</strong>? <code>tunegocio.com.ar</code>
            desde <strong>$25.000.- ARS/año</strong>. (Sin "milocalweb" en la URL).
        </p>
    </div>
</section>
