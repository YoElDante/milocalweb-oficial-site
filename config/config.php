<?php
/**
 * Configuracion general del sitio MiLocalWeb.
 *
 * Define constantes globales para rutas, nombre del sitio y parametros
 * operativos. Este archivo es incluido por todas las paginas del sitio.
 *
 * @package MiLocalWeb
 */

// Nombre del sitio
define('SITE_NAME', 'MiLocalWeb');

// URL base del sitio (ajustar segun entorno de despliegue)
define('BASE_URL', 'https://milocalweb.com.ar');

// Ruta absoluta a assets desde la raiz publica
define('ASSETS_URL', BASE_URL . '/assets');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');
define('IMG_URL', ASSETS_URL . '/img');

// Zona horaria
date_default_timezone_set('America/Argentina/Buenos_Aires');