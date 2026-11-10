# Resumen de documentación — MiLocalWeb

Se creó la documentación permanente y se ordenó la estructura interna de CSS, JS y secciones PHP sin cambiar contenido, diseño, datos de negocio ni SEO. Los P0/P1 de seguridad, SEO y performance siguen abiertos: esto es orden documental y estructural, no un producto terminado.

> Fuente de los conteos: `_audit/CHANGES-SUMMARY.md` (2026-11-09).

## Fixes 2026-11-10

- API key de Maps eliminada del código y del HTML; mapa local.
- `.git/`, `docs/`, `.atl/` y `tools/` bloqueados en `.htaccess`/`robots.txt`.
- Pendiente: rotar la key que sigue en el historial de Git.
- Detalle completo: [Resumen de fixes](../../../docs/resumen-fixes-2026-11-10.md).

## Qué se hizo

| Acción | Archivos | Resultado |
|---|---|---|
| Dividir CSS | `assets/css/styles.css` → `assets/css/src/01-base.css` … `23-confianza.css` | 23 parciales; máximo 374 líneas |
| Crear build CSS | `tools/build-css.php` | Concatenación en orden explícito + minificación conservadora; bundle de 61.904 bytes |
| Dividir JS | `assets/js/main.js` → `assets/js/main/00-header.js` … `99-footer.js` | 6 parciales; máximo 218 líneas |
| Crear build JS | `tools/build-js.php` | Concatenación sin minificar; bundle generado y `node --check` OK |
| Dividir `index.php` | `index.php` → entrypoint + `includes/sections/*.php` | Entrypoint de 32 líneas + 11 secciones; máximo 282 líneas |
| Corregir rutas de assets | 6 lecturas movidas de `__DIR__` a `dirname(__DIR__, 2)` | Hero, productos, ubicación y contacto conservan sus iconos/foto |
| Documentar en sitio | 46 archivos: 17 PHP, 23 CSS, 6 JS | Comentarios de responsabilidad y dependencias |
| Crear documentación | `docs/README.md`, `estado-actual.md`, `arquitectura.md`, `mapa-sitio.md`, `resumen-documentacion.md` | Este paquete |

## Archivos divididos

| Antes | Líneas | Después | Máx. líneas |
|---|---:|---|---:|
| `assets/css/styles.css` | 3.684 | 23 parciales en `assets/css/src/` | 374 (`21-responsive.css`) |
| `assets/js/main.js` | 404 | 6 parciales en `assets/js/main/` | 218 (`04-share.js`) |
| `index.php` | 1.023 | Entrypoint de 32 líneas + 11 secciones en `includes/sections/` | 282 (`productos.php`) |

> Los conteos son líneas físicas del estado final posterior a los comentarios documentales.

## Verificación

| Prueba | Resultado |
|---|---|
| `php -l` | 17 archivos, 0 errores |
| `node --check` | `main.js`, OK |
| CSS normalizado | Equivalente al original |
| HTML renderizado | Idéntico en `/` (ignorando comentarios CSS inline) |
| Smoke test navegador | FAQ y menú de compartir OK |
| `git status` | Cambios en working tree, sin commits |

## Qué NO se tocó

- Lógica de negocio, contenido, datos, SEO y diseño.
- Se eliminó la API key de Google Maps del código/HTML y el mapa pasó a ser local (`mapa-oficina.webp`); `.htaccess` y `robots.txt` se actualizaron para bloquear `.git/`, `docs/`, `.atl/` y `tools/`.
- El P0 de la key quedó mitigado en código, pero **sigue en el historial de Git**: falta rotarla. Los P1 de Google Fonts, geo tags, alt text, CSP/HSTS y performance siguen abiertos.
- No se hicieron commits, `git add` ni deploy.
- El `README.md` raíz sigue desactualizado en rutas y estructura.
- No se modificaron imágenes existentes ni documentos previos de `docs/`; se agregó `mapa-oficina.webp`. Los bundles CSS/JS se regeneraron solo para reflejar el nuevo orden de fuentes.

## Cómo revertir

- Backup completo previo a los cambios:
  `C:\workspace\MiLocalWeb-WorkSpace\_backups\ProyectosWebs-20261109-203606\milocalweb.com.ar`
- Git: `git -C "C:\workspace\MiLocalWeb-WorkSpace\ProyectosWebs\pages.propias\milocalweb.com.ar" status` y `git -C ... diff`.
- No se hicieron commits; el backup es la vía segura para volver al estado anterior.
- Para regenerar los bundles: `php tools/build-css.php` y `php tools/build-js.php`.
- Si se restaura el backup, se vuelve al estado monolítico previo (CSS/JS/`index.php` sin dividir); no mezclar parciales nuevos con el backup.

## Pendientes recomendados

No se duplican acá: el detalle y la prioridad están en [Estado actual](estado-actual.md). Los tres primeros son:

1. Rotar y restringir la clave de Google Maps; sacarla del código y del historial.
2. Bloquear `.git/`, `.atl/` y `docs/` en `.htaccess` y excluirlos del deploy.
3. Implementar CSP/HSTS, auto-hospedar fuentes y agregar geo tags.

## Documentos relacionados

- [README de documentación](README.md)
- [Estado actual](estado-actual.md)
- [Arquitectura](arquitectura.md)
- [Mapa del sitio](mapa-sitio.md)
- [SEO — Estado y pendientes 2026](seo-estado-2026.md)
- [Checklist de deploy y validación SEO 2026](checklist-deploy-seo-2026.md)
