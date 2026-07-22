<?php
/**
 * Landing page principal de MiLocalWeb.
 *
 * Presenta el sitio publico con secciones de hero, planes de servicio
 * y contacto. Incluye cabecera y pie compartidos desde includes/.
 *
 * @package MiLocalWeb
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="hero-effects" aria-hidden="true"></div>
    <div class="hero-content">
        <img src="<?= LOGOS_URL ?>/ISOLOGOTIPO CUADRADO VERDE NARANJA.webp"
             alt="MiLocalWeb"
             class="hero-isotipo">
        <h1>Presencia digital profesional para tu comercio</h1>
        <p class="hero-subtitle">
            Creamos paginas web, optimizamos tu SEO y potenciamos tus redes sociales.
            <strong>Pago unico, sin mensualidades obligatorias.</strong>
        </p>
        <div class="hero-actions">
            <a href="#planes" class="btn-primary">Ver planes</a>
            <a href="#contacto" class="btn-secondary">Contactanos</a>
        </div>
    </div>
</section>

<section id="planes" class="section section-plans">
    <h2>Planes a tu medida</h2>
    <p class="section-subtitle">Elegi el plan que mejor se adapte a tu negocio. Paga una sola vez y listo.</p>
    <div class="plans-grid">
        <div class="plan-card">
            <h3 class="plan-name">Plan Inicial</h3>
            <div class="plan-price">$65.000 <span>ARS</span></div>
            <p class="plan-pago">Pago unico</p>
            <ul class="plan-features">
                <li>Google Business Profile</li>
                <li>Instagram y Facebook</li>
                <li>WhatsApp Business</li>
                <li>Linktree personalizado</li>
                <li>6 fotos editadas</li>
            </ul>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan">Lo quiero</a>
        </div>

        <div class="plan-card plan-destacado">
            <span class="plan-badge">Recomendado</span>
            <h3 class="plan-name">Plan Imparable</h3>
            <div class="plan-price">$180.000 <span>ARS</span></div>
            <p class="plan-pago">Pago unico</p>
            <ul class="plan-features">
                <li>Landing page completa <small>(gratis 3 meses)</small></li>
                <li>SEO Local</li>
                <li>Catalogo WhatsApp sincronizado</li>
                <li>Logo personalizado</li>
                <li>Kit QR</li>
                <li>Capacitacion basica</li>
                <li>24 fotos editadas</li>
            </ul>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-destacado">Lo quiero</a>
        </div>

        <div class="plan-card">
            <h3 class="plan-name">Plan Visible</h3>
            <div class="plan-price">$120.000 <span>ARS</span></div>
            <p class="plan-pago">Pago unico</p>
            <ul class="plan-features">
                <li>Todo lo del Plan Inicial</li>
                <li>Landing page <small>(gratis 1 mes)</small></li>
                <li>Catalogo WhatsApp <small>(9 productos)</small></li>
                <li>12 fotos editadas</li>
            </ul>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan">Lo quiero</a>
        </div>
    </div>
    <div class="planes-promo">
        <span class="promo-badge">Gratis siempre</span>
        <p>
            Con nosotros tu dirección profesional es <code>[tunegocio].milocalweb.com.ar</code>
            — sin costo y lista al instante.
        </p>
    </div>

    <div class="planes-promo planes-promo--accent">
        <span class="promo-badge promo-badge--accent">Solo Tuyo</span>
        <p>
            ¿Necesitas un <strong>dominio propio</strong>? <code>tunegocio.com.ar</code>
            por pago único anual de $20.000 ARS.
        </p>
    </div>
</section>

<section id="por-que" class="section section-why">
    <h2>¿Por que MiLocalWeb?</h2>
    <div class="why-grid">
        <div class="why-card">
            <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <h3>Sin ataduras</h3>
            <p>No secuestramos tus cuentas. Las credenciales de Google, Instagram, Facebook y WhatsApp son tuyas.</p>
        </div>
        <div class="why-card">
            <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="1" x2="12" y2="23"></line>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
            </div>
            <h3>Pago unico</h3>
            <p>Sin mensualidades obligatorias. Pagas una vez y recibis todo armado y funcionando.</p>
        </div>
        <div class="why-card">
            <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <h3>Hecho para vos</h3>
            <p>Diseñado pensando en comercios locales, emprendedores y profesionales independientes.</p>
        </div>
    </div>
</section>

<section id="contacto" class="section section-contact">
    <h2>Conversemos</h2>
    <p class="contact-subtitle">
        Contanos que necesita tu negocio. Escribinos por WhatsApp o email y te respondemos a la brevedad.
    </p>
    <div class="contact-actions">
        <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
            <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
            </svg>
            WhatsApp Comercial
        </a>
        <a href="mailto:comercial@milocalweb.com.ar" class="btn-email">
            <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
            comercial@milocalweb.com.ar
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
