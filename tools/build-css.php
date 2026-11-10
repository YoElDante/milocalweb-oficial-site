<?php
/**
 * Build script — CSS bundle de MiLocalWeb.
 *
 * Concatena los parciales de `assets/css/src/` en un único
 * `assets/css/styles.css` y aplica una minificación conservadora.
 *
 * El orden de `$sourceFiles` reproduce exactamente el orden del antiguo
 * `styles.css` monolítico. NO reordenar sin revisar la cascada.
 *
 * `assets/css/styles.css` es un artefacto generado: no editarlo a mano.
 *
 * Uso:
 *   php tools/build-css.php
 *
 * @package MiLocalWeb
 */

$baseDir = __DIR__ . '/..';
$cssDir  = $baseDir . '/assets/css';
$outFile = $cssDir . '/styles.css';

// Orden de cascada: base/tokens → componentes → responsive → utilidades.
$sourceFiles = [
    'src/01-base.css',
    'src/02-tipografia.css',
    'src/03-navbar.css',
    'src/04-hero-decor.css',
    'src/05-hero-content.css',
    'src/06-botones.css',
    'src/07-secciones.css',
    'src/08-planes.css',
    'src/09-beneficios.css',
    'src/10-contacto.css',
    'src/11-footer.css',
    'src/12-complementarios.css',
    'src/13-ubicacion.css',
    'src/14-planes-detalle.css',
    'src/15-planes-cta.css',
    'src/16-planes-compartir.css',
    'src/17-garantia.css',
    'src/18-faq.css',
    'src/19-comparativa.css',
    'src/20-whatsapp.css',
    'src/21-responsive.css',
    'src/22-utilidades.css',
    'src/23-confianza.css',
];

$css = [];
foreach ($sourceFiles as $file) {
    $path = $cssDir . '/' . $file;
    if (!is_file($path)) {
        fwrite(STDERR, "Advertencia: no se encontró {$path}\n");
        continue;
    }
    $css[] = "/* === {$file} === */";
    $css[] = file_get_contents($path);
}

$bundle = implode("\n", $css);

// Minificación conservadora: elimina comentarios /* */ y espacios redundantes.
// No toca comentarios dentro de strings/comillas porque en CSS estándar no se usan.
// Los headers de cada parcial y los marcadores "/* === archivo === */" no llegan
// al bundle final: este paso los elimina junto con el resto de los comentarios.
$bundle = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!s', '', $bundle);
$bundle = preg_replace('/\s+/', ' ', $bundle);
$bundle = trim($bundle);

if (file_put_contents($outFile, $bundle) === false) {
    fwrite(STDERR, "Error: no se pudo escribir {$outFile}\n");
    exit(1);
}

$size = filesize($outFile);
echo "✓ Bundle generado: assets/css/styles.css (" . number_format($size) . " bytes)\n";
echo "  Versión/cache-bust: ?v=" . filemtime($outFile) . "\n";
