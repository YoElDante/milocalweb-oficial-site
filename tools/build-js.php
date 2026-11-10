<?php
/**
 * Build script — JS bundle de MiLocalWeb.
 *
 * Concatena los parciales de `assets/js/main/` en `assets/js/main.js`.
 * No minifica: el bundle conserva el código original para facilitar el
 * diagnóstico en producción. El orden de `$sourceFiles` es el orden de
 * ejecución dentro del IIFE y NO debe alterarse.
 *
 * `assets/js/main.js` es un artefacto generado: no editarlo a mano.
 *
 * Uso:
 *   php tools/build-js.php
 *
 * @package MiLocalWeb
 */

$baseDir = __DIR__ . '/..';
$jsDir   = $baseDir . '/assets/js';
$outFile = $jsDir . '/main.js';

// 00 abre el IIFE y 99 lo cierra; el resto se ejecuta en este orden.
$sourceFiles = [
    'main/00-header.js',
    'main/01-smooth-scroll.js',
    'main/02-faq.js',
    'main/03-navbar.js',
    'main/04-share.js',
    'main/99-footer.js',
];

$js = [];
foreach ($sourceFiles as $file) {
    $path = $jsDir . '/' . $file;
    if (!is_file($path)) {
        fwrite(STDERR, "Advertencia: no se encontró {$path}\n");
        continue;
    }
    $js[] = file_get_contents($path);
}

// Sin separadores: los parciales comparten el mismo IIFE y se concatenan tal cual.
$bundle = implode('', $js);

if (file_put_contents($outFile, $bundle) === false) {
    fwrite(STDERR, "Error: no se pudo escribir {$outFile}\n");
    exit(1);
}

$size = filesize($outFile);
echo "✓ Bundle generado: assets/js/main.js (" . number_format($size) . " bytes)\n";
echo "  Versión/cache-bust: ?v=" . filemtime($outFile) . "\n";
