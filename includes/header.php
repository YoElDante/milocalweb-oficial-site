<?php
/**
 * Cabecera compartida del sitio MiLocalWeb.
 *
 * Incluye metadatos HTML, enlaces a hojas de estilo y la barra de navegacion.
 * Las rutas de assets usan URLs absolutas desde la raiz publica para
 * garantizar funcionamiento consistente en / y subrutas.
 *
 * @package MiLocalWeb
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MiLocalWeb — Soluciones web y servicios para tu negocio.">
    <title><?= defined('SITE_NAME') ? SITE_NAME : 'MiLocalWeb' ?></title>
    <link rel="stylesheet" href="<?= CSS_URL ?>/styles.css">
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <a href="/" class="navbar-brand"><?= SITE_NAME ?></a>
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