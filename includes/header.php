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
    <header class="site-header">
        <nav class="navbar">
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
            <ul class="navbar-menu">
                <li><a href="/">Inicio</a></li>
                <li><a href="/#planes">Planes</a></li>
                <li><a href="/#faqs">Preguntas</a></li>
                <li><a href="/#servicios">Servicios</a></li>
                <li><a href="/#oficina">Oficina</a></li>
                <li><a href="/#contacto">Contacto</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Portal interno</a>
                    <ul class="dropdown-menu">
                        <li><a href="/pagos">Pagos</a></li>
                        <li><a href="/tutoriales">Tutoriales</a></li>
                        <li><a href="/descargas">Descargas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main class="site-main">
