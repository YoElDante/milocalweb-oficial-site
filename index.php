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
    <div class="hero-effects" aria-hidden="true">
        <!-- Onda inferior tipo ilustraciones de producto -->
        <svg class="hero-wave" viewBox="0 0 1440 180" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,120 C240,180 480,60 720,100 C960,140 1200,40 1440,100 L1440,180 L0,180 Z" fill="var(--mlw-bosque-900)"/>
            <path d="M0,140 C280,190 520,80 760,120 C1000,160 1220,60 1440,120 L1440,180 L0,180 Z" fill="var(--mlw-bosque-700)" opacity="0.55"/>
        </svg>

        <!-- Blob orgánico verde -->
        <div class="hero-blob hero-blob--green"></div>
        <!-- Blob orgánico naranja -->
        <div class="hero-blob hero-blob--orange"></div>

        <!-- Pin de local flotante (estilo ilustraciones) -->
        <div class="hero-float hero-float--pin">
            <svg viewBox="0 0 80 100" width="80" height="100" aria-hidden="true">
                <path d="M40 0C17.9 0 0 17.9 0 40c0 30 40 60 40 60s40-30 40-60C80 17.9 62.1 0 40 0z" fill="var(--mlw-naranja-vivo)"/>
                <ellipse cx="40" cy="90" rx="22" ry="8" fill="var(--mlw-bosque-900)" opacity="0.2"/>
                <path d="M40 12c-8 0-14.5 6.5-14.5 14.5 0 6.5 4.5 12 10.5 14L40 52l3.5-11.5c6.5-2 10.5-7.5 10.5-14C54 18.5 47.5 12 40 12z" fill="var(--mlw-blanco)"/>
                <rect x="32" y="34" width="16" height="3" rx="1.5" fill="var(--mlw-naranja-vivo)"/>
            </svg>
        </div>

        <!-- Hojas decorativas flotantes -->
        <div class="hero-float hero-float--leaf hero-float--leaf-1">
            <svg viewBox="0 0 60 80" width="60" height="80" aria-hidden="true">
                <path d="M30 0C30 0 5 20 5 45c0 20 15 35 25 35s25-15 25-35C55 20 30 0 30 0z" fill="var(--mlw-verde-500)"/>
                <path d="M30 5v75" stroke="var(--mlw-bosque-900)" stroke-width="2" stroke-linecap="round" opacity="0.25"/>
            </svg>
        </div>
        <div class="hero-float hero-float--leaf hero-float--leaf-2">
            <svg viewBox="0 0 50 70" width="50" height="70" aria-hidden="true">
                <path d="M25 0C25 0 5 18 5 40c0 16 12 30 20 30s20-14 20-30C45 18 25 0 25 0z" fill="var(--mlw-verde-300)"/>
            </svg>
        </div>

        <!-- Dispositivos estilizados flotantes -->
        <div class="hero-float hero-float--laptop">
            <svg viewBox="0 0 120 90" width="120" height="90" aria-hidden="true">
                <rect x="10" y="10" width="90" height="55" rx="6" fill="var(--mlw-bosque-900)"/>
                <rect x="15" y="15" width="80" height="42" rx="3" fill="var(--mlw-blanco)"/>
                <rect x="20" y="22" width="25" height="4" rx="2" fill="var(--mlw-verde-200)"/>
                <rect x="20" y="30" width="40" height="3" rx="1.5" fill="var(--mlw-gris-300)"/>
                <rect x="20" y="37" width="30" height="3" rx="1.5" fill="var(--mlw-gris-300)"/>
                <circle cx="75" cy="32" r="12" fill="var(--mlw-naranja-100)"/>
                <path d="M25 70h90l-8 12H33l-8-12z" fill="var(--mlw-gris-700)"/>
            </svg>
        </div>
        <div class="hero-float hero-float--phone">
            <svg viewBox="0 0 50 90" width="50" height="90" aria-hidden="true">
                <rect x="5" y="5" width="40" height="80" rx="8" fill="var(--mlw-bosque-900)"/>
                <rect x="8" y="12" width="34" height="66" rx="4" fill="var(--mlw-blanco)"/>
                <rect x="12" y="20" width="20" height="4" rx="2" fill="var(--mlw-verde-200)"/>
                <rect x="12" y="28" width="26" height="2" rx="1" fill="var(--mlw-gris-300)"/>
                <rect x="12" y="33" width="20" height="2" rx="1" fill="var(--mlw-gris-300)"/>
                <circle cx="25" cy="55" r="10" fill="var(--mlw-naranja-100)"/>
                <path d="M22 52l6 6m0-6l-6 6" stroke="var(--mlw-naranja-vivo)" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        </div>

        <!-- Grid de puntos decorativos -->
        <div class="hero-dots hero-dots--top"></div>
        <div class="hero-dots hero-dots--bottom"></div>
    </div>

    <div class="hero-content">
        <span class="hero-badge">
            <span class="hero-badge-pulse" aria-hidden="true"></span>
            <span>Presencia digital en 24hs</span>
        </span>
        <img src="<?= LOGOS_URL ?>/ISOLOGOTIPO CUADRADO VERDE NARANJA.webp"
             alt="MiLocalWeb"
             class="hero-isotipo">
        <h1 class="h1--with-accent">
            Tu comercio<br>
            <span class="hero-title-highlight">en internet</span><br>
            y en el mapa
        </h1>
        <p class="hero-subtitle">
            Te configuramos <strong>Google, Instagram, Facebook y WhatsApp Business</strong>. Te armamos una web propia con meses bonificados y mantenimiento fijo por 1 año. <strong>Todo queda a tu nombre.</strong>
        </p>
        <div class="hero-actions">
            <a href="#planes" class="btn-primary btn-primary--hero">Ver planes</a>
            <a href="#contacto" class="btn-secondary btn-secondary--hero">Contactanos</a>
        </div>
    </div>
</section>

<section id="por-que" class="section section-why">
    <h2>¿Por qué MiLocalWeb?</h2>
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
            <h3>Tu negocio online</h3>
            <p>Creamos tu sitio web profesional para que tus clientes te encuentren, conozcan tus servicios y contacten contigo desde cualquier dispositivo.</p>
        </div>
        <div class="why-card">
            <img src="<?= IMG_URL ?>/beneficios/Tienda Online.webp"
                 alt="Tienda online abierta las 24 horas"
                 class="why-img"
                 width="200"
                 height="200"
                 loading="lazy"
                 decoding="async">
            <h3>Vendé 24/7</h3>
            <p>Armá tu tienda online con catálogo de productos y carrito por WhatsApp. Tus clientes compran cuando quieran, vos atendés desde el celular.</p>
        </div>
        <div class="why-card">
            <img src="<?= IMG_URL ?>/beneficios/Visibilidad Digital.webp"
                 alt="Visibilidad en Google Maps y búsquedas locales"
                 class="why-img"
                 width="200"
                 height="200"
                 loading="lazy"
                 decoding="async">
            <h3>Te encuentran, te eligen</h3>
            <p>Aparecé en Google Maps, redes sociales y búsquedas locales. Mejoramos tu reputación online para que te prefieran antes que a la competencia.</p>
        </div>
    </div>
</section>

<section id="planes" class="section section-plans">
    <h2>Planes a tu medida</h2>
    <p class="section-subtitle">Elegí el plan de posicionamiento digital que se ajuste a tu negocio. Todos incluyen configuración profesional de tus perfiles. Agregá una web propia con meses gratis y mantenimiento fijo por 1 año.</p>

    <div class="plans-grid">
        <div class="plan-card">
            <span class="plan-float" aria-hidden="true">
                <span class="plan-float-text">contratalo</span>
                <span class="plan-float-arrow">↘</span>
            </span>
            <img src="<?= IMG_URL ?>/productos/Logo INICIAL.webp" alt="Logo Plan INICIAL" class="plan-logo">
            <h3 class="plan-name">INICIAL</h3>
            <p class="plan-tagline">"Que te encuentren y te contacten"</p>
            <div class="plan-price-block">
                <div class="plan-price">$498.000 <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">3 cuotas de $199.000</p>
            </div>
            <ul class="plan-features">
                <li>Google Business Profile configurado</li>
                <li>Instagram, Facebook y WhatsApp profesionales</li>
                <li>Web propia con subdominio gratis</li>
                <li>6 fotos editadas + kit QR</li>
            </ul>
            <a href="#plan-inicial" class="btn-plan-anchor">Quiero arrancar con el plan INICIAL</a>
        </div>

        <div class="plan-card plan-destacado">
            <span class="plan-badge">Recomendado</span>
            <span class="plan-float plan-float--destacado" aria-hidden="true">
                <span class="plan-float-text">hacelo tuyo</span>
                <span class="plan-float-arrow">↓</span>
            </span>
            <img src="<?= IMG_URL ?>/productos/Logo IMPARABLE.webp" alt="Logo Plan IMPARABLE" class="plan-logo">
            <h3 class="plan-name">IMPARABLE</h3>
            <p class="plan-tagline">"Que te prefieran"</p>
            <div class="plan-price-block">
                <div class="plan-price">$998.000 <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">$399.000 + 4 cuotas de $199.000</p>
            </div>
            <ul class="plan-features">
                <li>Todo lo de VISIBLE</li>
                <li>Web completa con múltiples secciones</li>
                <li>Hasta 30 productos cargados + 30 actualizaciones</li>
                <li>3 meses de publicaciones profesionales en redes</li>
            </ul>
            <a href="#plan-imparable" class="btn-plan-anchor btn-plan-anchor-destacado">VOY A SER IMPARABLE</a>
        </div>

        <div class="plan-card">
            <span class="plan-float" aria-hidden="true">
                <span class="plan-float-text">compralo</span>
                <span class="plan-float-arrow">↙</span>
            </span>
            <img src="<?= IMG_URL ?>/productos/Logo VISIBLE.webp" alt="Logo Plan VISIBLE" class="plan-logo">
            <h3 class="plan-name">VISIBLE</h3>
            <p class="plan-tagline">"Que te vean y te elijan"</p>
            <div class="plan-price-block">
                <div class="plan-price">$648.000 <span>ARS</span></div>
                <p class="plan-price-label">Precio de contado</p>
            </div>
            <div class="plan-finance">
                <p class="plan-finance-title">Opción de financiación</p>
                <p class="plan-finance-text">4 cuotas de $199.000</p>
            </div>
            <ul class="plan-features">
                <li>Todo lo de INICIAL</li>
                <li>Catálogo web con carrito por WhatsApp</li>
                <li>Hasta 15 productos cargados + 10 actualizaciones</li>
                <li>12 fotos editadas + 1 mes de publicaciones</li>
            </ul>
            <a href="#plan-visible" class="btn-plan-anchor">Quiero SER VISIBLE</a>
        </div>
    </div>

    <div class="planes-nota">
        <p>
            Pagá de contado y ahorrá. O financiá en cuotas fijas. La primera cuota se abona al contratar.
            <br><small>El mantenimiento mensual aplica después del período bonificado y se mantiene fijo durante 12 meses.</small>
        </p>
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

<section id="plan-inicial" class="section plan-detail-section">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h2 class="plan-detail-name">INICIAL</h2>
            <p class="plan-detail-tagline">Que te encuentren y te contacten</p>
            <p class="plan-detail-intro">Para comercios, profesionales independientes y emprendedores que quieren aparecer en Google, tener redes presentables y un punto de contacto digital sin complicaciones.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/INICIAL Explicado.webp" alt="Ilustración del Plan INICIAL" class="plan-detail-hero-img">
        </div>
    </div>

    <div class="plan-detail-grid">
        <div class="plan-detail-content">
            <h3>¿Qué incluye?</h3>
            <ul class="plan-detail-list">
                <li>Relevamiento completo de tu negocio.</li>
                <li>Configuración y optimización de Google Business Profile.</li>
                <li>Instagram profesional (bio, foto, links, historias destacadas iniciales).</li>
                <li>Página de Facebook vinculada.</li>
                <li>Redirección de WhatsApp Business.</li>
                <li>Sesión de fotos: 6 fotos editadas.</li>
                <li>Kit QR A4 plastificado + expositor acrílico.</li>
                <li>Página web propia con subdominio gratis.</li>
                <li>Revisión final y entrega.</li>
            </ul>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Aparecés en Google Maps</strong> cuando busquen tu rubro en tu zona.</li>
                <li><strong>Tus redes quedan profesionales</strong> desde el primer día.</li>
                <li><strong>Tu web queda online</strong> con 1 mes gratis para probar el servicio.</li>
                <li><strong>Todo es tuyo:</strong> las cuentas y configuraciones quedan a tu nombre.</li>
            </ul>
        </div>

        <aside class="plan-detail-sidebar">
            <div class="plan-detail-box">
                <div class="plan-detail-price">$498.000</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O 3 cuotas de <strong>$199.000</strong></p>
                <p class="plan-detail-saving">Ahorrá <strong>$99.000</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>1 mes gratis de hosting y mantenimiento.<br>A partir del mes 2: <strong>$50.000/mes</strong> hasta completar 1 año.</p>
            </div>

            <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20INICIAL%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
               target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-detail">Quiero el plan INICIAL</a>
        </aside>
    </div>
</section>

<section id="plan-visible" class="section plan-detail-section plan-detail-section--alt">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h2 class="plan-detail-name">VISIBLE</h2>
            <p class="plan-detail-tagline">Que te vean y te elijan</p>
            <p class="plan-detail-intro">Para negocios que venden productos físicos y quieren mostrar catálogo online sin integrar pagos electrónicos complejos. Ideal para comercios que atienden por WhatsApp.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/VISIBLE Explicado.webp" alt="Ilustración del Plan VISIBLE" class="plan-detail-hero-img">
        </div>
    </div>

    <div class="plan-detail-grid">
        <div class="plan-detail-content">
            <h3>¿Qué incluye?</h3>
            <p>Todo lo del Plan INICIAL, más:</p>
            <ul class="plan-detail-list">
                <li>Sitio web con catálogo de productos.</li>
                <li>Carrito virtual <strong>sin login</strong>: el cliente arma su lista y te envía el pedido por WhatsApp.</li>
                <li>Catálogo sincronizado con WhatsApp Business.</li>
                <li>Botón de WhatsApp flotante en la web.</li>
                <li>Sesión de fotos ampliada: 12 fotos editadas.</li>
                <li>3 historias destacadas en Instagram.</li>
                <li>1 mes de publicaciones programadas en redes.</li>
            </ul>

            <h3>Productos incluidos</h3>
            <ul class="plan-detail-list">
                <li>Carga inicial de hasta <strong>15 productos</strong> con foto y descripción.</li>
                <li>Durante los 3 meses bonificados: actualización de hasta <strong>10 productos</strong> en total.</li>
                <li>Actualizaciones adicionales: se cotizan como mantenimiento web.</li>
            </ul>

            <div class="plan-detail-highlight">
                <h4>¿Cómo funciona el carrito por WhatsApp?</h4>
                <p>Tu cliente elige productos en tu web como si armara una lista de pedido. Al tocar "Pedir por WhatsApp", le llega a vos el mensaje con el listado completo. Vos cerrás la venta como siempre: por WhatsApp, con transferencia, efectivo o el medio de pago que uses. Sin comisiones por venta, sin pasarelas complejas.</p>
            </div>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Tu cliente elige productos en tu web</strong> y te manda el pedido por WhatsApp.</li>
                <li><strong>Sin comisiones por venta</strong>, sin pasarelas de pago complejas.</li>
                <li><strong>Nosotros cargamos y actualizamos tus productos</strong> durante los meses bonificados.</li>
                <li><strong>Todo el posicionamiento queda en tus cuentas</strong>, no en las nuestras.</li>
            </ul>
        </div>

        <aside class="plan-detail-sidebar">
            <div class="plan-detail-box">
                <div class="plan-detail-price">$648.000</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O 4 cuotas de <strong>$199.000</strong></p>
                <p class="plan-detail-saving">Ahorrá <strong>$148.000</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>3 meses gratis de hosting y mantenimiento.<br>A partir del mes 4: <strong>$68.000/mes</strong> hasta completar 1 año.</p>
            </div>

            <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20VISIBLE%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
               target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-detail">Quiero el plan VISIBLE</a>
        </aside>
    </div>
</section>

<section id="plan-imparable" class="section plan-detail-section">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h2 class="plan-detail-name">IMPARABLE</h2>
            <p class="plan-detail-tagline">Que te prefieran</p>
            <p class="plan-detail-intro">Para negocios que quieren una presencia digital completa: web propia con múltiples secciones, catálogo, gestión profesional de redes y contenido durante los primeros meses.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/IMPARABLE Explicado.webp" alt="Ilustración del Plan IMPARABLE" class="plan-detail-hero-img">
        </div>
    </div>

    <div class="plan-detail-grid">
        <div class="plan-detail-content">
            <h3>¿Qué incluye?</h3>
            <p>Todo lo del Plan VISIBLE, más:</p>
            <ul class="plan-detail-list">
                <li>Sitio web completo con múltiples secciones.</li>
                <li>Estructura personalizable: inicio, productos, ofertas, outlet, carrito, contacto, y secciones por rubro.</li>
                <li>Sesión de fotos completa: 24 fotos editadas.</li>
                <li>5 historias destacadas en Instagram.</li>
                <li>QR de reseñas impreso.</li>
                <li>Tarjetas personales + flyer listo para impresión.</li>
                <li>Capacitación básica de autogestión.</li>
            </ul>

            <h3>Productos incluidos</h3>
            <ul class="plan-detail-list">
                <li>Carga inicial de hasta <strong>30 productos</strong> con foto y descripción.</li>
                <li>Durante los 6 meses bonificados: actualización de hasta <strong>30 productos</strong> en total.</li>
                <li>Actualizaciones adicionales: se cotizan como mantenimiento web.</li>
            </ul>

            <h3>Gestión profesional de redes (incluida 3 meses)</h3>
            <ul class="plan-detail-list">
                <li>Programación de <strong>3 publicaciones semanales</strong> en Facebook e Instagram.</li>
                <li>Contenido orientado a presencia de marca y posicionamiento local.</li>
                <li><strong>1 edición mensual de novedad</strong>: pieza gráfica destacada sobre promoción, lanzamiento o temporada.</li>
                <li>Configuración de Meta Business Suite para que puedas continuar la gestión.</li>
            </ul>

            <div class="plan-detail-highlight">
                <h4>¿Cuánto vale la gestión de redes?</h4>
                <p>Durante 3 meses publicamos 3 veces por semana en tus redes para que tu marca esté activa, aparezca en el feed de tu zona y genere confianza. Eso equivale a más de 36 publicaciones profesionales + 3 piezas de novedad. Contratar un community manager para hacer eso sale entre $450.000 y $1.200.000 en el mercado. Acá viene incluido en tu plan.</p>
            </div>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Web completa con secciones propias</strong>, no una sola página.</li>
                <li><strong>Redes activas durante 3 meses</strong> sin contratar a nadie aparte.</li>
                <li><strong>Más productos cargados y más actualizaciones</strong> incluidas.</li>
                <li><strong>Todo el posicionamiento queda en tus cuentas</strong> para seguir usándolo.</li>
            </ul>
        </div>

        <aside class="plan-detail-sidebar">
            <div class="plan-detail-box">
                <div class="plan-detail-price">$998.000</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O $399.000 + 4 cuotas de <strong>$199.000</strong> (financiación).</p>
                <p class="plan-detail-finance">Forma de pago: <strong>$500.000 al inicio</strong> y <strong>$498.000 a las 2 semanas</strong>, una vez que revises el trabajo y quedes conforme.</p>
                <p class="plan-detail-saving">Ahorrá <strong>$197.000</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>6 meses gratis de hosting y mantenimiento.<br>A partir del mes 7: <strong>$78.000/mes</strong> hasta completar 1 año.</p>
            </div>

            <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20IMPARABLE%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
               target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-destacado btn-plan-detail">Quiero el plan IMPARABLE</a>
        </aside>
    </div>
</section>

<section id="conservas" class="section section-keep">
    <div class="keep-contract-float" aria-hidden="true">
        <img src="<?= IMG_URL ?>/contrato/contrato.webp"
             alt="Contrato de propiedad digital de MiLocalWeb"
             class="keep-contract-img"
             width="400"
             height="400"
             loading="lazy"
             decoding="async">
    </div>

    <h2>Todo el posicionamiento es tuyo</h2>
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

<section id="faqs" class="section section-faq">
    <h2>Preguntas frecuentes</h2>

    <div class="faq-list">
        <details class="faq-item">
            <summary class="faq-question">¿Qué pasa si no pago el mantenimiento mensual?</summary>
            <div class="faq-answer">
                <p>Se suspende el sitio web, pero todo el posicionamiento configurado (Google Business, redes sociales, WhatsApp, Meta Business Suite) sigue siendo tuyo.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Por qué las cuotas suman más que el precio de contado?</summary>
            <div class="faq-answer">
                <p>Porque financiar el pago tiene un costo administrativo. Pagando de contado accedés al mejor precio.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿El dominio propio está incluido?</summary>
            <div class="faq-answer">
                <p>El subdominio <code>tunegocio.milocalweb.com.ar</code> es gratuito. El dominio propio <code>.com.ar</code> tiene un costo anual aparte.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Cuántos productos puedo tener en el plan VISIBLE?</summary>
            <div class="faq-answer">
                <p>Te cargamos hasta 15 productos inicialmente y te actualizamos hasta 10 durante los 3 meses bonificados. Después podés contratar mantenimiento adicional.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿La publicación en redes incluye respuesta a mensajes?</summary>
            <div class="faq-answer">
                <p>El plan IMPARABLE incluye programación de contenido durante 3 meses. La atención de mensajes y comentarios puede contratarse como servicio adicional.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Puedo cambiar de plan después?</summary>
            <div class="faq-answer">
                <p>Sí, podés actualizar tu plan en cualquier momento. Escribinos por WhatsApp y te explicamos cómo hacer la transición.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Qué pasa al año con el precio del mantenimiento?</summary>
            <div class="faq-answer">
                <p>Al cumplirse el año revisamos el valor según ajustes de mercado. Vos decidís si renovás, te bajás de plan o cancelás.</p>
            </div>
        </details>
    </div>
</section>

<?php
// Datos de la sección "Nuestra Oficina"
$oficinaImgPath = __DIR__ . '/assets/img/oficina/oficina.webp';
$oficinaImgSize = (function_exists('getimagesize') && is_file($oficinaImgPath)) ? getimagesize($oficinaImgPath) : null;
$oficinaImgDims = $oficinaImgSize ? ' width="' . $oficinaImgSize[0] . '" height="' . $oficinaImgSize[1] . '"' : '';

$staticMapUrl = sprintf(
    'https://maps.googleapis.com/maps/api/staticmap?center=%s,%s&zoom=%d&size=%s&markers=color:red%%7C%s,%s&key=%s',
    urlencode($oficina['lat']),
    urlencode($oficina['lng']),
    16,
    '640x350',
    urlencode($oficina['lat']),
    urlencode($oficina['lng']),
    urlencode(GOOGLE_MAPS_API_KEY)
);
?>
<section id="oficina" class="section section-office" aria-label="Nuestra Oficina">
    <h2>Nuestra Oficina</h2>
    <p class="section-subtitle">
        Te invitamos a conocernos. Vení a tomar un café y charlamos sobre cómo llevar tu negocio al mundo digital.
    </p>
    <div class="office-grid">
        <div class="office-info">
            <img src="<?= htmlspecialchars($oficina['foto']) ?>"
                 alt="Oficina de MiLocalWeb en Córdoba"
                 class="office-photo"
                 <?= $oficinaImgDims ?>
                 loading="lazy"
                 decoding="async">
            <div class="office-address">
                <h3>Dirección</h3>
                <p><?= nl2br(htmlspecialchars($oficina['direccion'])) ?></p>
            </div>
            <a href="<?= htmlspecialchars($oficina['gmaps_link']) ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="btn-maps">
                Cómo llegar
            </a>
        </div>
        <div class="office-map">
            <a href="<?= htmlspecialchars($oficina['gmaps_link']) ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="office-map-link"
               aria-label="Ver ubicación de MiLocalWeb en Google Maps">
                <img src="<?= htmlspecialchars($staticMapUrl) ?>"
                     alt="Mapa de ubicación de MiLocalWeb en Córdoba"
                     class="office-map-img"
                     width="640"
                     height="350"
                     loading="lazy">
            </a>
        </div>
    </div>
</section>

<section id="contacto" class="section section-contact">
    <h2>Conversemos</h2>
    <p class="contact-subtitle">
        Contanos qué necesita tu negocio. Llamanos, escribinos por WhatsApp o email y te respondemos a la brevedad.
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
