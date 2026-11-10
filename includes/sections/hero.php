<?php /**
 * Hero principal de la home (#inicio).
 *
 * Responsabilidad: presentar la propuesta de valor, el isotipo y los CTA
 * primarios (planes y WhatsApp). La capa decorativa es estática a propósito:
 * no hay animaciones ni scripts asociados.
 *
 * Depende de: config/config.php (IMG_URL) y del SVG leído inline con readfile().
 */ ?>
<section id="inicio" class="hero" aria-label="Inicio — MiLocalWeb presencia digital">
    <div class="hero-effects" aria-hidden="true">
        <!-- Halo central mint — como el círculo claro de las ilustraciones -->
        <div class="hero-halo"></div>

        <!-- Arcos finos outline — detalle productos arriba izquierda -->
        <div class="hero-arc hero-arc--tl"></div>
        <div class="hero-arc hero-arc--tr"></div>

        <!-- Blobs orgánicos estáticos (sin animación) -->
        <div class="hero-blob hero-blob--green"></div>
        <div class="hero-blob hero-blob--orange"></div>

        <!-- Puntitos sobre blob naranja — como grid verde sobre naranja en productos -->
        <div class="hero-dots hero-dots--on-orange"></div>

        <!-- Onda superior sutil — transición orgánica header blanco → mint -->
        <svg class="hero-wave-top" viewBox="0 0 1440 40" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,0 L1440,0 L1440,12 C1080,38 720,-8 360,20 C180,32 90,16 0,18 Z" fill="var(--mlw-blanco)"/>
        </svg>

        <!-- Onda inferior — banda verde orgánica con doble curva superior e inferior -->
        <svg class="hero-wave" viewBox="0 0 1440 180" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,92 C240,152 480,32 720,72 C960,112 1200,12 1440,72 L1440,180 L0,180 Z" fill="var(--mlw-bosque-900)"/>
            <path d="M0,112 C280,162 520,52 760,92 C1000,132 1220,32 1440,92 L1440,180 L0,180 Z" fill="var(--mlw-bosque-700)" opacity="0.55"/>
            <!-- Línea fina verde clara siguiendo la curva — como en productos -->
            <path d="M0,80 C240,138 480,22 720,60 C960,98 1200,2 1440,60" fill="none" class="hero-wave-line"/>
        </svg>
        <!-- Continuidad blanca — crea el borde inferior ondulado y tapa el corte horizontal -->
        <svg class="hero-wave--continuity" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,32 C240,66 480,10 720,32 C960,54 1200,8 1440,32 L1440,80 L0,80 Z" fill="var(--mlw-blanco)"/>
        </svg>

        <!-- Pin de local — estático -->
        <div class="hero-float hero-float--pin">
            <svg viewBox="0 0 80 100" width="80" height="100" aria-hidden="true">
                <path d="M40 0C17.9 0 0 17.9 0 40c0 30 40 60 40 60s40-30 40-60C80 17.9 62.1 0 40 0z" fill="var(--mlw-naranja-vivo)"/>
                <ellipse cx="40" cy="90" rx="22" ry="8" fill="var(--mlw-bosque-900)" opacity="0.2"/>
                <path d="M40 12c-8 0-14.5 6.5-14.5 14.5 0 6.5 4.5 12 10.5 14L40 52l3.5-11.5c6.5-2 10.5-7.5 10.5-14C54 18.5 47.5 12 40 12z" fill="var(--mlw-blanco)"/>
                <rect x="32" y="34" width="16" height="3" rx="1.5" fill="var(--mlw-naranja-vivo)"/>
            </svg>
        </div>

        <!-- Destellos — rayitas verdes en abanico (estilo productos) -->
        <div class="hero-spark hero-spark--pin"><span></span><span></span><span></span></div>
        <div class="hero-spark hero-spark--left"><span></span><span></span><span></span></div>
        <div class="hero-spark hero-spark--right"><span></span><span></span><span></span></div>
        <div class="hero-spark hero-spark--laptop"><span></span><span></span><span></span></div>

        <!-- Hojas decorativas — estáticas -->
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

        <!-- Dispositivos estilizados — estáticos -->
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

        <!-- Grids de puntos decorativos — estilo productos (sin movimiento) -->
        <div class="hero-dots hero-dots--top"></div>
        <div class="hero-dots hero-dots--bottom"></div>
        <div class="hero-dots hero-dots--mint"></div>
    </div>

    <div class="hero-content">
        <div class="hero-isotipo-wrap" aria-hidden="false">
            <img src="<?= IMG_URL ?>/logos/Transparentes/ISOLOGOTIPO CUADRADO VERDE NARANJA Transparente 1184x1166.webp"
                 alt="MiLocalWeb"
                 class="hero-isotipo"
                 width="1184"
                 height="1166"
                 decoding="async"
                 fetchpriority="high">
        </div>
        <h1 class="h1--with-accent">
            Posicionamiento Web<br>
            <span class="hero-title-highlight">Profesional en Córdoba</span>
        </h1>
        <div class="hero-actions">
            <a href="#resumen-planes" class="btn-primary btn-primary--hero">Ver planes</a>
            <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
                <span class="btn-icon" aria-hidden="true"><?php readfile(dirname(__DIR__, 2) . '/assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
                WhatsApp Comercial
            </a>
        </div>
    </div>
</section>
