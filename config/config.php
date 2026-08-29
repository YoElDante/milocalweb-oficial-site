<?php
/**
 * Configuración general del sitio MiLocalWeb.
 *
 * Define constantes globales para rutas, nombre del sitio y parámetros
 * operativos. Este archivo es incluido por todas las páginas del sitio.
 *
 * @package MiLocalWeb
 */

// Nombre del sitio
define('SITE_NAME', 'MiLocalWeb');

// Detección automática de entorno: local vs producción.
// En local (php -S localhost:8000) usa URL relativa para que el navegador
// cargue los assets desde el mismo servidor. En producción usa el dominio.
$esLocal = (php_sapi_name() === 'cli-server')
    || in_array($_SERVER['SERVER_NAME'] ?? '', ['localhost', '127.0.0.1'], true);

define('BASE_URL', $esLocal ? '' : 'https://milocalweb.com.ar');

// Ruta absoluta a assets desde la raíz pública
define('ASSETS_URL', BASE_URL . '/assets');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');
define('IMG_URL', ASSETS_URL . '/img');
define('ICONOS_URL', IMG_URL . '/iconos');
define('LOGOS_URL', IMG_URL . '/logos/Principales');

// Cache busting: fuerza recarga de assets cuando los archivos cambian.
// Usa el timestamp del CSS y JS real como versión.
$cssFile = __DIR__ . '/../assets/css/styles.css';
$jsFile  = __DIR__ . '/../assets/js/main.js';
$cssVersion = is_file($cssFile) ? filemtime($cssFile) : time();
$jsVersion  = is_file($jsFile)  ? filemtime($jsFile)  : time();
define('CSS_VERSION', '?v=' . $cssVersion);
define('JS_VERSION',  '?v=' . $jsVersion);

// Zona horaria
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Google Maps API key (misma cuenta usada en las landingpages de clientes)
// Se lee de env var en producción; fallback al valor de consola para compatibilidad.
define('GOOGLE_MAPS_API_KEY', getenv('GOOGLE_MAPS_API_KEY') ?: 'AIzaSyAcV2YdYUk07mJnRLBl_pXi4uG7BOrfYZE');

// Datos de la oficina / ubicación comercial — sección "Ubicación" (alias legacy: oficina)
// Industria IT: la sección del mapa suele llamarse "Ubicación", "Location" o "Dónde estamos" / "Where to find us"
$oficina = [
    'nombre'     => 'MiLocalWeb',
    'direccion'  => "Angelo de Peredo 34\nX5000BTB Córdoba",
    'telefono'   => '+54 9 351 378-3473',
    'lat'        => '-31.4282461',
    'lng'        => '-64.1896678',
    'foto'       => IMG_URL . '/oficina/oficina.webp',
    'gmaps_link' => 'https://maps.app.goo.gl/322Nu5SZxSpRDYy17',
];
