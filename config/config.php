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