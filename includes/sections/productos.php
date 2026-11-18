
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
    <div class="section-productos__intro">
        <h2 id="productos-heading">Planes a tu medida</h2>
        <p class="section-subtitle">Elegí el plan de posicionamiento digital que se ajuste a tu negocio. Todos incluyen configuración profesional de tus perfiles. Agregá una web propia con meses bonificados y mantenimiento fijo por 1 año.</p>
    </div>
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
                <li>Historias de Instagram programadas: 3 por semana durante 1 mes.</li>
                <li>Página de Facebook vinculada.</li>
                <li>Redirección a WhatsApp desde todas tus redes.</li>
                <li class="li-icon"><svg class="li-icon__svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg><span>Sesión de fotos de tu negocio: 6 fotos por dentro y por fuera, editadas y mejoradas.</span></li>
                <li class="li-icon"><svg class="li-icon__svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg><span>Hasta 9 fotos de productos, también editadas y mejoradas: 3 productos estrella (esos por los que te reconocen tus clientes), 3 novedades y 3 ofertas para tu web.</span></li>
                <li>Kit QR A4 plastificado + expositor acrílico para locales físicos. Si sos profesional independiente: tarjeta personal digital con PDF imprimible, con tu logo y datos de contacto (diseño incluido en el plan).</li>
                <li>Página web propia con tu nombre: <code>https://tunegocio.milocalweb.com.ar</code>.</li>
                <li>Revisión final y entrega.</li>
            </ul>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Aparecés en Google Maps</strong> cuando busquen tu rubro en tu zona.</li>
                <li><strong>Tus redes quedan profesionales</strong> desde el primer día.</li>
                <li><strong>Tu web queda online</strong> con 2 meses de hosting, mantenimiento y actualizaciones incluidos en el precio del plan.</li>
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
                <p>Hosting, mantenimiento y actualizaciones incluidos en el precio del plan durante los primeros 2 meses.<br>A partir del 3er mes: <strong>$50.000.-/mes</strong> hasta completar 1 año.</p>
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
            <details class="plan-incluye-prev">
                <summary>Todo lo del Plan <strong>INICIAL</strong><span class="plan-incluye-prev__hint">ver ítems incluidos</span></summary>
                <ul class="plan-detail-list plan-detail-list--small">
                    <li>Relevamiento completo de tu negocio.</li>
                    <li>Configuración y optimización de Google Business Profile.</li>
                    <li>Instagram profesional (bio, foto, links, historias destacadas iniciales).</li>
                    <li>Historias de Instagram programadas: 3 por semana durante 1 mes.</li>
                    <li>Página de Facebook vinculada.</li>
                    <li>Redirección a WhatsApp desde todas tus redes.</li>
                    <li>Sesión de fotos de tu negocio: 6 fotos por dentro y por fuera, editadas y mejoradas.</li>
                    <li>Hasta 9 fotos de productos editadas y mejoradas: 3 estrella, 3 novedades y 3 ofertas.</li>
                    <li>Kit QR A4 plastificado + expositor acrílico para locales físicos, o tarjeta personal digital con PDF imprimible para profesionales.</li>
                    <li>Página web propia con tu nombre: tunegocio.milocalweb.com.ar.</li>
                    <li>Revisión final y entrega.</li>
                </ul>
            </details>
            <p><strong>Más en el Plan VISIBLE:</strong></p>
            <ul class="plan-detail-list">
                <li>Sitio web con catálogo de productos.</li>
                <li>Carrito virtual <strong>sin login</strong>: el cliente arma su lista y te envía el pedido por WhatsApp.</li>
                <li class="li-icon"><svg class="li-icon__svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg><span>Fotos de hasta <strong>20 productos</strong>, editadas y mejoradas (las 6 fotos del negocio ya vienen del Plan INICIAL).</span></li>
                <li>3 historias destacadas en Instagram.</li>
                <li>3 meses de historias de Instagram programadas para autopublicarse, a ritmo de 3 por semana.</li>
            </ul>

            <h3>Productos incluidos</h3>
            <ul class="plan-detail-list">
                <li>Carga inicial de hasta <strong>20 productos</strong> con foto y descripción.</li>
                <li>Durante los 3 meses bonificados: hasta <strong>10 actualizaciones de productos por mes</strong> en tu web.</li>
                <li>Actualizaciones adicionales: se cotizan como mantenimiento web.</li>
            </ul>

            <div class="plan-detail-highlight">
                <h4 class="h4-icon"><svg class="h4-icon__svg" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>¿Cómo funciona el carrito por WhatsApp?</h4>
                <p>Tu cliente elige productos en tu web como si armara una lista de pedido. Al tocar "Pedir por WhatsApp", le llega a vos el mensaje con el listado completo. Vos cerrás la venta como siempre: por WhatsApp, con transferencia, efectivo o el medio de pago que uses. Sin comisiones por venta, sin pasarelas complejas.</p>
            </div>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Tu cliente elige productos en tu web</strong> y te manda el pedido por WhatsApp.</li>
                <li><strong>Sin comisiones por venta</strong>, sin pasarelas de pago complejas.</li>
                <li><strong>Nosotros cargamos y actualizamos tus productos</strong>.</li>
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
                <p>4 meses de hosting, mantenimiento y actualizaciones incluidos en el costo del plan: el mes de desarrollo, cuando pagás, más los 3 meses de las cuotas.<br>A partir del mes 4: <strong>$68.000.-/mes</strong> hasta completar 1 año.</p>
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
            <details class="plan-incluye-prev">
                <summary>Todo lo del Plan <strong>VISIBLE</strong><span class="plan-incluye-prev__hint">ver ítems incluidos</span></summary>
                <ul class="plan-detail-list plan-detail-list--small">
                    <li>Sitio web con catálogo de productos.</li>
                    <li>Carrito virtual sin login: el cliente arma su lista y te envía el pedido por WhatsApp.</li>
                    <li>Fotos de hasta 20 productos, editadas y mejoradas (las 6 fotos del negocio ya vienen del Plan INICIAL).</li>
                    <li>3 historias destacadas en Instagram.</li>
                    <li>3 meses de historias de Instagram programadas para autopublicarse, a ritmo de 3 por semana.</li>
                </ul>
            </details>
            <p><strong>Más en el Plan IMPARABLE:</strong></p>
            <ul class="plan-detail-list">
                <li>Sitio web completo con múltiples secciones (a definir según proyecto).</li>
                <li>Estructura personalizable: inicio, productos, ofertas, outlet, carrito, contacto, secciones por rubro, y menú/carta online con QR para bares y restaurantes.</li>
                <li class="li-icon"><svg class="li-icon__svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg><span>Sesión de fotos completa de hasta 24 fotos editadas: tu negocio va a lucir increíble en todas las redes.</span></li>
                <li>6 meses de historias programadas en Instagram publicitando tus productos destacados, tu web e institucionales, que se suman a tus 5 secciones de destacados.</li>
                <li>QR de reseñas impreso.</li>
                <li>Flyer publicitario imprimible para tu negocio, con actualización de precios una vez al mes si hace falta, y tarjeta personal con QR. Se suma a todo el soporte gráfico de los planes INICIAL y VISIBLE.</li>
                <li>Instructivo y capacitación básica para mantener tus redes actualizadas.</li>
            </ul>

            <h3>Productos incluidos</h3>
            <ul class="plan-detail-list">
                <li>Carga inicial de hasta <strong>50 productos</strong> con foto y descripción.</li>
                <li>Hasta <strong>20 actualizaciones o adiciones de productos extras por mes</strong> en tu web.</li>
                <li>Actualizaciones adicionales: se cotizan como mantenimiento web.</li>
            </ul>

            <h3>Gestión profesional de redes (incluida 6 meses)</h3>
            <ul class="plan-detail-list">
                <li>Programación de <strong>3 publicaciones semanales</strong> en Facebook e Instagram.</li>
                <li>Contenido orientado a presencia de marca y posicionamiento local.</li>
                <li><strong>Coordinación cada 15 días</strong> para mantener tus publicaciones siempre actualizadas.</li>
                <li><strong>1 edición mensual de novedad</strong>: pieza gráfica destacada sobre promoción, lanzamiento o temporada.</li>
            </ul>

            <div class="plan-detail-highlight">
                <h4>¿Cuánto vale la gestión de redes?</h4>
                <p>Durante 6 meses publicamos 3 veces por semana en tus redes, con coordinación cada 15 días para estar siempre al día. Eso equivale a más de 72 publicaciones profesionales + 6 piezas de novedad. Contratar un community manager para hacer eso sale entre $450.000.- y $1.200.000.- por mes en el mercado. Acá viene incluido en tu plan.</p>
            </div>

            <h3>Beneficios principales</h3>
            <ul class="plan-detail-benefits">
                <li><strong>Es un sitio web completo, no una sola página</strong>: landing page para recibir a tu público, catálogo con carrito de compras por WhatsApp, institucional (quiénes somos) y sección de contacto con formulario completo que deriva las respuestas a tu mail.</li>
                <li><strong>Redes activas durante 6 meses</strong> sin contratar a nadie aparte.</li>
                <li><strong>Más productos cargados y más actualizaciones</strong> incluidas, para estar siempre al día.</li>
                <li><strong>Guía de recomendaciones y capacitación</strong> para que puedas seguir haciéndolo vos cuando lo desees.</li>
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
                <p>6 meses de hosting, mantenimiento y dominio incluidos en el costo del plan.<br>A partir del mes 7: <strong>$78.000.-/mes</strong> hasta completar 1 año.</p>
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
