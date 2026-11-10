<?php
/**
 * Sección "Nuestra Oficina" (#ubicacion).
 *
 * Responsabilidad: mostrar foto, dirección, enlace a Google Maps y un mapa
 * estático local. Mantiene el alias legacy #oficina.
 *
 * Depende de: config/config.php ($oficina) y de las imágenes locales
 * assets/img/oficina/oficina.webp y assets/img/oficina/mapa-oficina.webp.
 */

// Datos de la sección "Ubicación" (industria: location/address/map)
$oficinaImgPath = dirname(__DIR__, 2) . '/assets/img/oficina/oficina.webp';
// width/height reales de la foto: evitan saltos de layout (CLS) al cargar.
$oficinaImgSize = (function_exists('getimagesize') && is_file($oficinaImgPath)) ? getimagesize($oficinaImgPath) : null;
$oficinaImgDims = $oficinaImgSize ? ' width="' . $oficinaImgSize[0] . '" height="' . $oficinaImgSize[1] . '"' : '';

/*
 * El mapa es una imagen local generada una sola vez con Static Maps.
 * Así el HTML no expone ninguna API key y el mapa no depende de una
 * llamada externa en cada visita. Para actualizarlo, regenerar el archivo
 * `assets/img/oficina/mapa-oficina.webp` desde Google Maps.
 */
$mapaLocal = IMG_URL . '/oficina/mapa-oficina.webp';
?>
<!-- Alias legacy: #oficina → #ubicacion -->
<div id="oficina" aria-hidden="true" class="anchor-legacy"></div>

<section id="ubicacion" class="section section-office section-ubicacion" aria-labelledby="ubicacion-heading">
    <h2 id="ubicacion-heading">Nuestra Oficina</h2>
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
        <?php /* La imagen se envuelve en un enlace para abrir Google Maps; el mapa estático es solo la vista previa. */ ?>
        <div class="office-map">
            <a href="<?= htmlspecialchars($oficina['gmaps_link']) ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="office-map-link"
               aria-label="Ver ubicación de MiLocalWeb en Google Maps">
                <img src="<?= htmlspecialchars($mapaLocal) ?>"
                     alt="Mapa de ubicación de MiLocalWeb en Córdoba"
                     class="office-map-img"
                     width="640"
                     height="350"
                     loading="lazy"
                     decoding="async">
            </a>
        </div>
    </div>
</section>
