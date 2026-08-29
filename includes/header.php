<?php
/**
 * Cabecera compartida del sitio MiLocalWeb.
 *
 * Incluye metadatos HTML, favicon, enlaces a hojas de estilo y la barra
 * de navegacion con los logos institucionales.
 *
 * @package MiLocalWeb
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MiLocalWeb — Presencia digital profesional para tu comercio. Configuramos Google, redes sociales y WhatsApp Business. También hacemos tu web propia con meses bonificados y mantenimiento fijo por 1 año.">
    <title><?= defined('SITE_NAME') ? SITE_NAME : 'MiLocalWeb' ?> — Presencia digital para tu negocio</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= ICONOS_URL ?>/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="<?= ICONOS_URL ?>/favicon.ico">

    <!-- Google Fonts: Inter (body) + Poppins (display/titulares) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= CSS_URL ?>/styles.css<?= CSS_VERSION ?>">
</head>
<body>
    <a href="#main-content" class="skip-link">Saltar al contenido principal</a>
    <header class="site-header">
        <nav class="navbar" aria-label="Navegación principal">
            <div class="navbar-brand">
                <a href="/" class="brand-logos">
                    <img src="<?= LOGOS_URL ?>/LOGO VERDE NARANJA.webp"
                         alt="Logo MiLocalWeb"
                         class="brand-icon">
                    <img src="<?= LOGOS_URL ?>/MI LOCAL WEB VERDE NARANJA.webp"
                         alt="MiLocalWeb"
                         class="brand-wordmark">
                </a>
            </div>
            <button class="navbar-toggle" type="button" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="navbar-menu">
                <span class="navbar-toggle__bar" aria-hidden="true"></span>
                <span class="navbar-toggle__bar" aria-hidden="true"></span>
                <span class="navbar-toggle__bar" aria-hidden="true"></span>
            </button>
            <ul class="navbar-menu" id="navbar-menu">
                <li><a href="/#inicio">Inicio</a></li>
                <li><a href="/#beneficios">Beneficios</a></li>
                <li><a href="/#resumen-planes">Planes</a></li>
                <li><a href="/#garantia">Garantía</a></li>
                <li><a href="/#complementarios">Servicios</a></li>
                <li><a href="/#preguntas-frecuentes">Preguntas</a></li>
                <li><a href="/#ubicacion">Ubicación</a></li>
                <li><a href="/#contacto">Contacto</a></li>
                <li class="dropdown">
                    <button type="button" class="dropdown-toggle" aria-expanded="false" aria-controls="dropdown-portal">Portal interno</button>
                    <ul class="dropdown-menu" id="dropdown-portal">
                        <li><a href="/pagos" class="dropdown-link--soon" data-coming-soon>Pagos <span class="badge-soon">Próximamente</span></a></li>
                        <li><a href="/tutoriales" class="dropdown-link--soon" data-coming-soon>Tutoriales <span class="badge-soon">Próximamente</span></a></li>
                        <li><a href="/descargas" class="dropdown-link--soon" data-coming-soon>Descargas <span class="badge-soon">Próximamente</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main id="main-content" class="site-main">
