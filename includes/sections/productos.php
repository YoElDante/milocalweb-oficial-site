
<?php /**
 * Detalle extendido de planes (#productos).
 *
 * Responsabilidad: una ficha autocontenida por plan (INICIAL, VISIBLE e
 * IMPARABLE) con beneficios, precios, CTA a WhatsApp y botón de compartir.
 * Los id de cada artículo son el destino de los anclajes de resumen-planes.
 *
 * Depende de: config/config.php (IMG_URL) y de los atributos data-share-*
 * que consume assets/js/main/04-share.js.
 */ ?>
<section id="productos" class="section-productos" aria-labelledby="productos-heading">
    <h2 id="productos-heading" class="sr-only">Productos — detalle de planes MiLocalWeb</h2>
    <!-- Cada plan detallado es un artículo autocontenido dentro de Productos -->
    <?php /* Cada artículo es el destino de un ancla del resumen; el id no debe cambiar sin actualizar enlaces, menú y JSON-LD. */ ?>
    <article id="plan-inicial" class="section plan-detail-section" aria-labelledby="plan-inicial-heading">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h3 id="plan-inicial-heading" class="plan-detail-name">INICIAL</h3>
            <p class="plan-detail-tagline">Que te encuentren y te contacten</p>
            <p class="plan-detail-intro">Para comercios, profesionales independientes y emprendedores que quieren aparecer en Google, tener redes presentables y un punto de contacto digital sin complicaciones.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/INICIAL Explicado.webp" alt="Ilustración del Plan INICIAL" class="plan-detail-hero-img"
                 width="1254" height="1254" loading="lazy" decoding="async">
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

        <?php /* Sidebar sticky: precio, financiación, CTA y compartir. En mobile se reordena arriba del contenido (21-responsive.css). */ ?>
        <aside class="plan-detail-sidebar">
            <div class="plan-detail-box">
                <div class="plan-detail-price">$498.000.-</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O 3 cuotas de <strong>$199.000.-</strong></p>
                <p class="plan-detail-saving">Ahorrá <strong>$99.000.-</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>1 mes gratis de hosting y mantenimiento.<br>A partir del mes 2: <strong>$50.000.-/mes</strong> hasta completar 1 año.</p>
            </div>

            <div class="plan-cta-wrap plan-cta-wrap--producto">
                <span class="plan-float" aria-hidden="true">
                    <span class="plan-float-text">contratalo</span>
                    <span class="plan-float-arrow">↘</span>
                </span>
                <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20INICIAL%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
                   target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-detail btn-plan-detail--cta">CONTRATAR</a>
            </div>

            <div class="plan-share plan-share--detail">
                <button type="button" class="plan-share__btn"
                        data-share-plan="INICIAL"
                        data-share-tagline="Que te encuentren y te contacten"
                        data-share-anchor="plan-inicial"
                        aria-expanded="false"
                        aria-label="Compartir el plan INICIAL">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir este plan</span>
                </button>
            </div>
        </aside>
    </div>
</article>

<article id="plan-visible" class="section plan-detail-section plan-detail-section--alt" aria-labelledby="plan-visible-heading">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h3 id="plan-visible-heading" class="plan-detail-name">VISIBLE</h3>
            <p class="plan-detail-tagline">Que te vean y te elijan</p>
            <p class="plan-detail-intro">Para negocios que venden productos físicos y quieren mostrar catálogo online sin integrar pagos electrónicos complejos. Ideal para comercios que atienden por WhatsApp.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/VISIBLE Explicado.webp" alt="Ilustración del Plan VISIBLE" class="plan-detail-hero-img"
                 width="1254" height="1254" loading="lazy" decoding="async">
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
                <div class="plan-detail-price">$648.000.-</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O 4 cuotas de <strong>$199.000.-</strong></p>
                <p class="plan-detail-saving">Ahorrá <strong>$148.000.-</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>3 meses gratis de hosting y mantenimiento.<br>A partir del mes 4: <strong>$68.000.-/mes</strong> hasta completar 1 año.</p>
            </div>

            <div class="plan-cta-wrap plan-cta-wrap--producto">
                <span class="plan-float plan-float--compralo" aria-hidden="true">
                    <span class="plan-float-text">compralo</span>
                    <span class="plan-float-arrow">↙</span>
                </span>
                <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20VISIBLE%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
                   target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-detail btn-plan-detail--cta">CONTRATAR</a>
            </div>

            <div class="plan-share plan-share--detail">
                <button type="button" class="plan-share__btn"
                        data-share-plan="VISIBLE"
                        data-share-tagline="Que te vean y te elijan"
                        data-share-anchor="plan-visible"
                        aria-expanded="false"
                        aria-label="Compartir el plan VISIBLE">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir este plan</span>
                </button>
            </div>
        </aside>
    </div>
</article>

<article id="plan-imparable" class="section plan-detail-section" aria-labelledby="plan-imparable-heading">
    <div class="plan-detail-header">
        <div class="plan-detail-title-block">
            <h3 id="plan-imparable-heading" class="plan-detail-name">IMPARABLE</h3>
            <p class="plan-detail-tagline">Que te prefieran</p>
            <p class="plan-detail-intro">Para negocios que quieren una presencia digital completa: web propia con múltiples secciones, catálogo, gestión profesional de redes y contenido durante los primeros meses.</p>
        </div>
        <div class="plan-detail-hero">
            <img src="<?= IMG_URL ?>/productos/IMPARABLE Explicado.webp" alt="Ilustración del Plan IMPARABLE" class="plan-detail-hero-img"
                 width="1254" height="1254" loading="lazy" decoding="async">
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
                <p>Durante 3 meses publicamos 3 veces por semana en tus redes para que tu marca esté activa, aparezca en el feed de tu zona y genere confianza. Eso equivale a más de 36 publicaciones profesionales + 3 piezas de novedad. Contratar un community manager para hacer eso sale entre $450.000.- y $1.200.000.- en el mercado. Acá viene incluido en tu plan.</p>
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
                <div class="plan-detail-price">$998.000.-</div>
                <p class="plan-detail-price-note">Precio de contado — mejor valor</p>
                <p class="plan-detail-finance">O $399.000.- + 4 cuotas de <strong>$199.000.-</strong> (financiación).</p>
                <p class="plan-detail-finance">Forma de pago: <strong>$500.000.- al inicio</strong> y <strong>$498.000.- a las 2 semanas</strong>, una vez que revises el trabajo y quedes conforme.</p>
                <p class="plan-detail-saving">Ahorrá <strong>$197.000.-</strong> pagando de contado.</p>
            </div>

            <div class="plan-detail-box plan-detail-box--muted">
                <h4>Web incluida</h4>
                <p>6 meses gratis de hosting y mantenimiento.<br>A partir del mes 7: <strong>$78.000.-/mes</strong> hasta completar 1 año.</p>
            </div>

            <div class="plan-cta-wrap plan-cta-wrap--producto">
                <span class="plan-float plan-float--destacado" aria-hidden="true">
                    <span class="plan-float-text">hacelo tuyo</span>
                    <span class="plan-float-arrow">↓</span>
                </span>
                <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20interesado%20en%20el%20Plan%20IMPARABLE%20de%20MiLocalWeb.%20Quisiera%20recibir%20asesoramiento."
                   target="_blank" rel="noopener noreferrer" class="btn-plan btn-plan-destacado btn-plan-detail btn-plan-detail--cta btn-plan-detail--cta-destacado">CONTRATAR</a>
            </div>

            <div class="plan-share plan-share--detail">
                <button type="button" class="plan-share__btn"
                        data-share-plan="IMPARABLE"
                        data-share-tagline="Que te prefieran"
                        data-share-anchor="plan-imparable"
                        aria-expanded="false"
                        aria-label="Compartir el plan IMPARABLE">
                    <span class="plan-share__icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98"/><path d="M15.41 6.51L8.59 10.49"/></svg></span>
                    <span>Compartir este plan</span>
                </button>
            </div>
        </aside>
    </div>
</article>

    <?php /* Cierre de la sección: CTA de asesoramiento para quien todavía no sabe qué plan elegir. */ ?>
    <div class="productos-ayuda" role="complementary" aria-label="Asesoramiento comercial">
        <div class="productos-ayuda__text">
            <h3 class="productos-ayuda__title">¿Dudás cuál plan te conviene?</h3>
            <p class="productos-ayuda__desc">Escribinos y te asesoramos sin compromiso. Ajustamos el plan a tu negocio, te explicamos cada detalle y si preferís te llamamos por teléfono.</p>
        </div>
        <a href="https://wa.me/5493513783473?text=Hola%20equipo%20MiLocalWeb%2C%20quiero%20asesoramiento%20para%20elegir%20el%20plan%20ideal%20para%20mi%20negocio%20y%20conocer%20el%20detalle%20telef%C3%B3nico."
           target="_blank" rel="noopener noreferrer" class="btn-whatsapp productos-ayuda__btn">
            <span class="btn-icon" aria-hidden="true"><?php readfile(dirname(__DIR__, 2) . '/assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
            Consultar al equipo comercial
        </a>
    </div>
</section><!-- /#productos -->
