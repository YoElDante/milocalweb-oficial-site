<?php
/**
 * Landing page principal de MiLocalWeb.
 *
 * Presenta el sitio público con secciones de hero, planes de servicio
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
            Creamos páginas web, optimizamos tu SEO y potenciamos tus redes sociales.
            <strong>Pago único, sin mensualidades obligatorias.</strong>
        </p>
        <div class="hero-actions">
            <a href="#planes" class="btn-primary">Ver planes</a>
            <a href="#contacto" class="btn-secondary">Contactanos</a>
        </div>
    </div>
</section>

<section id="por-que" class="section section-why">
    <h2>¿Por qué MiLocalWeb?</h2>
    <div class="why-grid">
        <div class="why-card">
            <div class="why-icon" aria-hidden="true">
                <?php readfile(__DIR__ . '/assets/img/iconos/icon-check.svg'); ?>
            </div>
            <h3>Sin ataduras</h3>
            <p>No secuestramos tus cuentas. Las credenciales de Google, Instagram, Facebook y WhatsApp son tuyas.</p>
        </div>
        <div class="why-card">
            <div class="why-icon" aria-hidden="true">
                <?php readfile(__DIR__ . '/assets/img/iconos/icon-dollar.svg'); ?>
            </div>
            <h3>Pago único</h3>
            <p>Sin mensualidades obligatorias. Pagás una vez y recibís todo armado y funcionando.</p>
        </div>
        <div class="why-card">
            <div class="why-icon" aria-hidden="true">
                <?php readfile(__DIR__ . '/assets/img/iconos/icon-check-circle.svg'); ?>
            </div>
            <h3>Hecho para vos</h3>
            <p>Diseñado pensando en comercios locales, emprendedores y profesionales independientes.</p>
        </div>
    </div>
</section>

<section id="planes" class="section section-plans">
    <h2>Planes a tu medida</h2>
    <p class="section-subtitle">Elegí el plan que mejor se adapte a tu negocio. Pagá una sola vez y listo.</p>
    <div class="plans-grid">
        <div class="plan-card">
            <h3 class="plan-name">INICIAL</h3>
            <p class="plan-tagline">"Que te encuentren y te contacten"</p>
            <div class="plan-price">$128.000 <span>ARS</span></div>
            <p class="plan-pago">Pago único</p>
            <ul class="plan-features">
                <li>Relevamiento completo</li>
                <li>Google Business Profile</li>
                <li>Instagram profesional</li>
                <li>Página de Facebook</li>
                <li>Redirección de WhatsApp</li>
                <li>Sesión de fotos <small>(6 fotos editadas)</small></li>
                <li>Web propia <small>(3 meses gratis)</small></li>
                <li>Revisión final y entrega</li>
                <li>Kit QR A4 + Expositor acrílico</li>
            </ul>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan">Lo quiero</a>
        </div>

        <div class="plan-card plan-destacado">
            <span class="plan-badge">Recomendado</span>
            <h3 class="plan-name">IMPARABLE</h3>
            <p class="plan-tagline">"Que te prefieran"</p>
            <div class="plan-price">$280.000 <span>ARS</span></div>
            <p class="plan-pago">Pago único</p>
            <ul class="plan-features">
                <li>Página Web completa <small>(4-5 secciones)</small></li>
                <li>5 historias destacadas en Instagram</li>
                <li>Catálogo WhatsApp sincronizado <small>(hasta 9 productos)</small></li>
                <li>Sesión de fotos completa <small>(24 fotos editadas)</small></li>
                <li>QR WhatsApp + QR Reseñas impresos</li>
                <li>Capacitación básica + verificación final</li>
                <li>Tarjetas personales + flyer</li>
                <li>Subdominio GRATIS PARA SIEMPRE</li>
            </ul>
            <details class="plan-details">
                <summary class="plan-details-summary">Incluye todo lo de VISIBLE</summary>
                <ul class="plan-features plan-features-inherited">
                    <li>Relevamiento completo</li>
                    <li>Google Business Profile</li>
                    <li>Instagram profesional</li>
                    <li>Página de Facebook</li>
                    <li>Redirección de WhatsApp</li>
                    <li>Sesión de fotos <small>(6 fotos editadas)</small></li>
                    <li>Web propia <small>(3 meses gratis)</small></li>
                    <li>Revisión final y entrega</li>
                    <li>Kit QR A4 + Expositor acrílico</li>
                    <li>Página web <small>(foto + oferta + mapa)</small></li>
                    <li>Web bonificada <small>(3 meses gratis + 50% el resto)</small></li>
                    <li>Catálogo WhatsApp Business <small>(hasta 9 productos)</small></li>
                    <li>3 historias destacadas en Instagram</li>
                    <li>1 mes de publicaciones programadas</li>
                    <li>Sesión de fotos ampliada <small>(12 fotos)</small></li>
                </ul>
            </details>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-destacado">Lo quiero</a>
        </div>

        <div class="plan-card">
            <h3 class="plan-name">VISIBLE</h3>
            <p class="plan-tagline">"Que te vean y te elijan"</p>
            <div class="plan-price">$188.000 <span>ARS</span></div>
            <p class="plan-pago">Pago único</p>
            <ul class="plan-features">
                <li>Página web <small>(foto + oferta + mapa)</small></li>
                <li>Web bonificada <small>(3 meses gratis + 50% el resto)</small></li>
                <li>Catálogo WhatsApp Business <small>(hasta 9 productos)</small></li>
                <li>3 historias destacadas en Instagram</li>
                <li>1 mes de publicaciones programadas</li>
                <li>Sesión de fotos ampliada <small>(12 fotos)</small></li>
            </ul>
            <details class="plan-details">
                <summary class="plan-details-summary">Incluye todo lo de INICIAL</summary>
                <ul class="plan-features plan-features-inherited">
                    <li>Relevamiento completo</li>
                    <li>Google Business Profile</li>
                    <li>Instagram profesional</li>
                    <li>Página de Facebook</li>
                    <li>Redirección de WhatsApp</li>
                    <li>Sesión de fotos <small>(6 fotos editadas)</small></li>
                    <li>Web propia <small>(3 meses gratis)</small></li>
                    <li>Revisión final y entrega</li>
                    <li>Kit QR A4 + Expositor acrílico</li>
                </ul>
            </details>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-plan">Lo quiero</a>
        </div>
    </div>
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
            desde <strong>$25.000 ARS/año</strong>. (Sin "milocalweb" en la URL).
        </p>
    </div>
</section>

<section id="comparativa" class="section section-comparativa">
    <h2>Cuadro comparativo</h2>
    <p class="section-subtitle">Todos los servicios, plan por plan. Para que elijas sin dudas.</p>
    <div class="tabla-wrapper">
        <table class="tabla-comparativa">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>INICIAL</th>
                    <th class="th-destacada">VISIBLE</th>
                    <th class="th-imparable">IMPARABLE</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr-seccion"><td colspan="4">Presencia digital base</td></tr>
                <tr><td>Relevamiento completo</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Google Business Profile</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Instagram profesional</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Página de Facebook</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Redirección de WhatsApp</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Revisión final y entrega</td><td>✅</td><td>✅</td><td>✅</td></tr>

                <tr class="tr-seccion"><td colspan="4">Material publicitario</td></tr>
                <tr><td>Kit QR A4 plastificado + Expositor acrílico</td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>QR de Reseñas impreso</td><td>—</td><td>—</td><td>✅</td></tr>
                <tr><td>Tarjetas personales + flyer listo para impresión</td><td>—</td><td>—</td><td>✅</td></tr>

                <tr class="tr-seccion"><td colspan="4">Sesión de fotos</td></tr>
                <tr><td>Fotos editadas</td><td>6</td><td>12</td><td>24</td></tr>

                <tr class="tr-seccion"><td colspan="4">Página web</td></tr>
                <tr><td>Web con link a redes, productos estrella y contacto</td><td>3 meses gratis</td><td><span class="check">✅</span></td><td><span class="check">✅</span></td></tr>
                <tr><td>Web con foto del local, 3 productos, mapa y WhatsApp</td><td>—</td><td>✅</td><td><span class="text-muted">incluido</span></td></tr>
                <tr><td>Web completa (4-5 secciones: inicio, quiénes somos, ofertas, contacto)</td><td>—</td><td>—</td><td>✅</td></tr>
                <tr><td>Web bonificada (3 meses gratis + 50% resto del año)</td><td>—</td><td>✅</td><td>✅</td></tr>

                <tr class="tr-seccion"><td colspan="4">WhatsApp Business</td></tr>
                <tr><td>Catálogo WhatsApp (hasta 9 productos con foto y precio)</td><td>—</td><td>✅</td><td>✅</td></tr>
                <tr><td>Catálogo sincronizado (3 llamadores + 3 ofertas + 3 mayor margen)</td><td>—</td><td>—</td><td>✅</td></tr>

                <tr class="tr-seccion"><td colspan="4">Redes sociales</td></tr>
                <tr><td>Historias destacadas en Instagram</td><td>—</td><td>3</td><td>5</td></tr>
                <tr><td>Publicaciones programadas (1 mes)</td><td>—</td><td>✅</td><td>✅</td></tr>
                <tr><td>Capacitación: autogestión de redes</td><td>—</td><td>—</td><td>✅</td></tr>

                <tr class="tr-seccion"><td colspan="4">Dominio</td></tr>
                <tr><td>Subdominio gratuito <code>tunegocio.milocalweb.com.ar</code></td><td>✅</td><td>✅</td><td>✅</td></tr>
                <tr><td>Dominio propio <code>.com.ar</code> (opcional)</td><td>—</td><td>+$25.000/año</td><td>+$20.000/año</td></tr>
            </tbody>
            <tfoot>
                <tr class="tr-precio">
                    <td>Precio final</td>
                    <td><strong>$128.000</strong><br><small>pago único</small></td>
                    <td class="td-destacada"><strong>$188.000</strong><br><small>pago único</small></td>
                    <td class="td-imparable"><strong>$280.000</strong><br><small>pago único</small></td>
                </tr>
            </tfoot>
        </table>
    </div>
</section>

<section id="servicios" class="section section-extras">
    <h2>Servicios Adicionales</h2>
    <p class="section-subtitle">Complementa tu plan con servicios extra. Pago único, sin mensualidades.</p>
    <div class="extras-grid">
        <div class="extra-card">
            <h3 class="extra-name">Teléfono Exclusivo para tu Negocio</h3>
            <p class="extra-desc">Separa tu vida personal del trabajo. Un número exclusivo para atender clientes.</p>
            <ul class="extra-features">
                <li><strong>Básico</strong> — desde $200.000 <small>(línea exclusiva)</small></li>
                <li><strong>Intermedio</strong> — consultar <small>(+ IVR, bienvenida automática)</small></li>
                <li><strong>Avanzado</strong> — consultar <small>(+ centralita virtual, extensiones)</small></li>
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
                <strong>$150.000</strong> <small>(hasta 4 personas)</small>
                <span class="extra-price-add">+ $30.000 por persona extra</span>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="section section-contact">
    <h2>Conversemos</h2>
    <p class="contact-subtitle">
        Contanos que necesita tu negocio. Llamanos, escribinos por WhatsApp o email y te respondemos a la brevedad.
    </p>
    <div class="contact-actions">
        <a href="tel:+5493513783473" class="btn-phone">
            <span class="btn-icon" aria-hidden="true"><?php readfile(__DIR__ . '/assets/img/iconos/icon-phone.svg'); ?></span>
            +54 9 351 378-3473
        </a>
        <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
            <span class="btn-icon" aria-hidden="true"><?php readfile(__DIR__ . '/assets/img/iconos/icon-whatsapp.svg'); ?></span>
            WhatsApp Comercial
        </a>
        <a href="mailto:comercial@milocalweb.com.ar" class="btn-email">
            <span class="btn-icon" aria-hidden="true"><?php readfile(__DIR__ . '/assets/img/iconos/icon-mail.svg'); ?></span>
            comercial@milocalweb.com.ar
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
