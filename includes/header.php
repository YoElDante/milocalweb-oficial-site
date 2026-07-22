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
    <meta name="description" content="MiLocalWeb — Presencia digital profesional para tu comercio. Pago unico, sin mensualidades obligatorias.">
    <title><?= defined('SITE_NAME') ? SITE_NAME : 'MiLocalWeb' ?> — Presencia digital para tu negocio</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= ICONOS_URL ?>/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="<?= ICONOS_URL ?>/favicon.ico">

    <link rel="stylesheet" href="<?= CSS_URL ?>/styles.css">
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
                <li><a href="/#servicios">Servicios</a></li>
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
