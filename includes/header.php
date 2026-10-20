<?php
/**
 * Cabecera compartida del sitio MiLocalWeb.
 *
 * Incluye metadatos SEO, Open Graph, Twitter Cards, favicon, enlaces a hojas
 * de estilo y la barra de navegacion con los logos institucionales.
 *
 * Cada pagina puede definir estas variables antes de incluir el archivo:
 * $seoTitle, $seoDescription, $seoCanonical, $seoImage, $seoImageAlt,
 * $seoType y $seoRobots.
 *
 * @package MiLocalWeb
 */

$seoTitle       = $seoTitle       ?? 'MiLocalWeb — Posicionamiento Web Profesional en Córdoba';
$seoDescription = $seoDescription ?? 'Presencia digital profesional para tu comercio en Córdoba. Configuramos Google, redes sociales y WhatsApp Business y desarrollamos tu web propia.';
$seoCanonical   = $seoCanonical   ?? SITE_URL . '/';
$seoImage       = $seoImage       ?? OG_IMAGE_URL;
$seoImageAlt    = $seoImageAlt    ?? 'MiLocalWeb — Posicionamiento Web Profesional en Córdoba';
$seoType        = $seoType        ?? 'website';
$seoRobots      = $seoRobots      ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($seoTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta name="robots" content="<?= htmlspecialchars($seoRobots) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($seoCanonical) ?>">

    <!-- Open Graph: Facebook, WhatsApp, LinkedIn -->
    <meta property="og:type" content="<?= htmlspecialchars($seoType) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:locale" content="es_AR">
    <meta property="og:title" content="<?= htmlspecialchars($seoTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($seoCanonical) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($seoImage) ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($seoImage) ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="<?= OG_IMAGE_WIDTH ?>">
    <meta property="og:image:height" content="<?= OG_IMAGE_HEIGHT ?>">
    <meta property="og:image:alt" content="<?= htmlspecialchars($seoImageAlt) ?>">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($seoTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($seoImage) ?>">
    <meta name="twitter:image:alt" content="<?= htmlspecialchars($seoImageAlt) ?>">

    <meta name="theme-color" content="#123F24">

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
                         class="brand-icon"
                         width="546"
                         height="738"
                         decoding="async">
                    <img src="<?= LOGOS_URL ?>/MI LOCAL WEB VERDE NARANJA.webp"
                         alt="MiLocalWeb"
                         class="brand-wordmark"
                         width="1180"
                         height="358"
                         decoding="async">
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
