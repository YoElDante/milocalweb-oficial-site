# Estado actual — MiLocalWeb

MiLocalWeb es la landing corporativa de servicios de posicionamiento digital en Córdoba. Está construida en PHP plano, CSS con custom properties y JavaScript vanilla, sin framework, Composer ni Node.js. La auditoría del 2026-11-09 la marcó **NO LISTO** con **47/73 ítems aplicables (64,4 %)**; la sesión posterior ordenó la estructura interna y creó esta documentación, pero no corrigió los P0/P1 de seguridad, SEO ni performance.

> Fuente del veredicto y los estados: `_audit/milocalweb.md` (auditoría de solo lectura, 2026-11-09).

> **Nota sobre referencias:** los números de línea son orientativos. La auditoría se hizo antes de la división de archivos y de los comentarios; si un archivo cambió, verificá por selector, meta tag o nombre de función.

## Actualización 2026-11-10 — fixes aplicados

- Se eliminó la API key de Google Maps del código y del HTML; el mapa es local (`assets/img/oficina/mapa-oficina.webp`).
- `.git/`, `docs/`, `.atl/`, `tools/` y `README.md` quedaron bloqueados en `.htaccess` y `robots.txt`.
- La key sigue en el historial de Git: hay que rotarla en la cuenta de Google.
- Detalle completo: [Resumen de fixes](../../../docs/resumen-fixes-2026-11-10.md).

> El veredicto y el puntaje de abajo son el corte de la auditoría 2026-11-09; no se recalcularon.

## Veredicto

| Campo | Valor |
|---|---|
| Estado | **NO LISTO** |
| Cumplimiento | 47/73 ítems aplicables (64,4 %) |
| Fecha | 2026-11-09 |
| Alcance | Auditoría de solo lectura (base) + refactor interno de CSS/JS/PHP y documentación. No se corrigió seguridad, SEO, contenido ni performance. |

- **P0 — secreto expuesto:** la clave de Google Maps está hardcodeada y versionada en `config/config.php:56`, y se inserta en el HTML como parte de la URL de Static Maps en `includes/sections/ubicacion.php:24-33`. Sin restricción por referrer/API, cualquier visitante puede consumir cuota y facturación a nombre del titular.
- **P1 — exposición de archivos internos:** `.git/` y `docs/` responden 200 en el servidor embebido; `.htaccess:47` solo bloquea `config` e `includes`, y `robots.txt:6-7` tampoco cubre `/docs/`, `.git` ni `.atl`.
- **P1 — hardening y rendimiento:** no hay CSP ni HSTS; Google Fonts se carga desde un CDN externo y `styles.css` se carga de forma síncrona en `includes/header.php:64-69`.
- **P1 — señales SEO:** faltan geo tags, el alt text es mayormente genérico, el `sitemap.xml` tiene `lastmod` fijo en 2026-10-19 y el JSON-LD no vincula `OfferCatalog` con `LocalBusiness`.
- **Estructura interna:** el CSS monolítico, `index.php` y `main.js` se dividieron en parciales con builds reproducibles. Esto mejora el mantenimiento, pero **no cambia el veredicto** ni se usó para recalcular el puntaje.

## Ficha técnica

| Campo | Valor |
|---|---|
| Ruta | `C:\workspace\MiLocalWeb-WorkSpace\ProyectosWebs\pages.propias\milocalweb.com.ar` |
| Dominio previsto | `https://milocalweb.com.ar` |
| Stack | PHP plano (probado con PHP 8.4.6; el README declara PHP 7.4+), HTML5, CSS con custom properties, JS vanilla. Sin framework, Composer ni Node.js. |
| Entry point | `index.php` (32 líneas; orquesta 11 secciones) |
| Fuente de datos | `config/config.php` para constantes, URLs, cache busting y `$oficina`. Los precios, FAQ y textos comerciales siguen en las secciones. |
| Build CSS | `php tools/build-css.php` → `assets/css/styles.css` (61.904 bytes, minificado) |
| Build JS | `php tools/build-js.php` → `assets/js/main.js` (sin minificar) |
| Git | Rama `main`; último commit `ba10f62 feat(portfolio): add client showcase section with site links and ad slot` (2026-11-09 19:49:40 -0300); working tree con cambios sin commit |

## Cumplimiento de especificaciones

> Base: `landingpages.clientes/template/docs/checklist-verificacion.md` y `guia-seo-implementacion.md`, adaptados a un sitio propio de servicios.
> `PASS` = cumple; `PARCIAL` = cumple con observaciones; `FAIL` = no cumple; `N/A` = no aplica.
>
> **Puntaje auditado: 47/73 = 40 PASS + 14 PARCIAL (0,5 cada uno) + 19 FAIL.** Los estados de las tablas siguientes son los de la auditoría del 2026-11-09. El refactor posterior resolvió estructuralmente CSS-01, CSS-02 y CSS-03 (pasarían a PASS en una re-auditoría) y dividió `index.php`, pero no se ejecutó una nueva auditoría ni se recalculó el puntaje.

### Resumen por grupo

| Grupo | PASS | PARCIAL | FAIL | Subtotal |
|---|---:|---:|---:|---:|
| Datos y configuración | 2 | 1 | 2 | 2,5/5 |
| Assets | 2 | 2 | 2 | 3/6 |
| CSS y build | 1 | 1 | 4 | 1,5/6 |
| JavaScript | 3 | 0 | 2 | 3/5 |
| SEO técnico | 9 | 6 | 2 | 12/17 |
| Secciones | 8 | 0 | 0 | 8/8 |
| Documentación | 1 | 1 | 0 | 1,5/2 |
| Accesibilidad | 4 | 0 | 1 | 4/5 |
| Performance | 2 | 2 | 1 | 3/5 |
| Seguridad | 3 | 0 | 4 | 3/7 |
| Mobile | 3 | 0 | 1 | 3/4 |
| Funcionalidad | 2 | 1 | 0 | 2,5/3 |
| **Total** | **40** | **14** | **19** | **47/73 (64,4 %)** |

### Datos y configuración

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| CFG-01 | `config.php` existe, completo y sin placeholders/lorem/TODO | PASS | `config/config.php:1-69`; búsqueda case-sensitive de `lorem`, `ipsum`, `TODO` y `FIXME` en PHP/JS/CSS: 0 coincidencias |
| CFG-02 | Constantes de sitio, assets, OG y cache busting definidas | PASS | `config/config.php:15-49`; `CSS_VERSION`/`JS_VERSION` usados en `includes/header.php:69` e `includes/footer.php:94` |
| CFG-03 | Datos de contacto y ubicación centralizados | PARCIAL | `$oficina` en `config/config.php:60-69`; pero teléfono/WhatsApp están hardcodeados en `includes/sections/hero.php:118`, `includes/sections/contacto.php:17,21,25` e `includes/footer.php:59,75-76,86` |
| CFG-04 | `config.php` como fuente única de contenido | FAIL | Planes, precios, FAQ y textos comerciales viven en `includes/sections/resumen-planes.php:26,60,93`, `includes/sections/productos.php:56,141,234` e `includes/sections/faq.php:21-66`; el JSON-LD repite precios en `includes/sections/seo-jsonld.php:90,98,106`. Cambiar un precio exige editar al menos 3 lugares |
| CFG-05 | Sin secretos versionados | FAIL | Clave de Google Maps hardcodeada en `config/config.php:56`; se usa en `includes/sections/ubicacion.php:24-33` y aparece en el HTML renderizado. El commit `aefc623` indica que la clave ya se había tocado en el historial |

### Assets

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| AST-01 | Estructura de assets por tipo y sin archivos de trabajo | PARCIAL | Carpetas por tipo en `assets/img/{beneficios,clientes,contrato,iconos,instagram,logos,oficina,productos,pie de pagina}`; hay `assets/img/paleta-colores.md` dentro de assets y 2,3 MB en `assets/img/instagram/` no referenciados por el HTML |
| AST-02 | Convención lowercase/kebab-case, sin espacios ni mayúsculas | FAIL | Rutas con espacios o mayúsculas: `assets/img/beneficios/Sitio Web.webp`, `assets/img/pie de pagina/pie de pagina.webp`, `assets/img/logos/Principales/LOGO VERDE NARANJA.webp`; referenciadas en `includes/sections/hero.php:104`, `includes/header.php:77` e `includes/footer.php:16,33` |
| AST-03 | WebP prioritario | PARCIAL | Las imágenes referenciadas son WebP salvo las OG de clientes en JPG (`includes/sections/confianza.php:26,62`) y la OG principal JPG (`config/config.php:38`), aceptable para OG pero no uniforme |
| AST-04 | Favicon y OG 1200x630 presentes | PASS | `includes/header.php:61-62`; `assets/img/iconos/favicon.ico` existe; `assets/img/logos/og-milocalweb-1200x630.jpg` verificado 1200x630 |
| AST-05 | `width`/`height` declarados coherentes con la imagen real | FAIL | `includes/sections/beneficios.php:21-22` declara 200x200 para `Sitio Web.webp` (real 521x801); `includes/sections/garantia.php:19-20` declara 400x400 para `contrato.webp` (real 1312x1199); `includes/sections/complementarios.php:23-24` declara 400x300 para `telefono y linea.webp` (real 1254x1254) |
| AST-06 | Todas las imágenes referenciadas existen | PASS | Verificación de los 23 `<img>` renderizados: 22 locales OK, 1 externa (Static Map) OK; 0 faltantes |

### CSS y build

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| CSS-01 | CSS modular por componente | FAIL | **Estado auditado:** `assets/css/` contenía solo `styles.css`, sin parciales ni `base.css`, `navbar.css`, `hero.css`, etc. **Post-auditoría:** 23 parciales en `assets/css/src/` |
| CSS-02 | Build script que combine parciales | FAIL | **Estado auditado:** `tools/` no existía (`Test-Path tools` = False). **Post-auditoría:** `tools/build-css.php` |
| CSS-03 | `styles.css` es artefacto generado, no editado a mano | FAIL | **Estado auditado:** `assets/css/styles.css` tenía 3.684 líneas y 74.742 bytes, sin fuentes ni manifiesto. **Post-auditoría:** bundle generado de 61.904 bytes; no editar a mano |
| CSS-04 | Colores mediante variables CSS, mínimo hardcodeo | PARCIAL | Tokens en `:root` en `assets/css/src/01-base.css:7`; fuera de `:root` quedan valores hexadecimales y 4 usos de `#25D366` en `assets/css/src/06-botones.css:80`, `11-footer.css:195`, `16-planes-compartir.css:118` y `20-whatsapp.css:17` |
| CSS-05 | Critical CSS inline y CSS principal con `preload + onload` | FAIL | `includes/header.php:64-69` no tiene `<style>` crítico ni `rel="preload"`; `styles.css` se carga síncrono en `includes/header.php:69` |
| CSS-06 | Cache busting y respuesta HTTP correcta | PASS | `includes/header.php:69` agrega `?v=filemtime`; el CSS responde 200 `text/css` |

### JavaScript

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| JS-01 | JS vanilla, sin dependencias ni CDNs | PASS | `assets/js/main.js` (bundle) y parciales `assets/js/main/*.js`; IIFE con `'use strict'`, sin imports, jQuery ni frameworks. Orden en `tools/build-js.php:23-30` |
| JS-02 | Scripts con `defer` | FAIL | `includes/footer.php:94` carga `main.js` sin `defer`; está al final del `<body>`, lo que mitiga el bloqueo, pero incumple la especificación |
| JS-03 | Cache busting y respuesta HTTP correcta | PASS | `includes/footer.php:94`; `main.js` responde 200 `application/javascript` |
| JS-04 | Interacciones esenciales implementadas | PASS | Smooth scroll en `assets/js/main/01-smooth-scroll.js`; FAQ en `02-faq.js`; navbar mobile en `03-navbar.js`; compartir planes en `04-share.js`; “Próximamente” en `03-navbar.js:120-128` |
| JS-05 | Back to top funcional | FAIL | Búsqueda de `back-to-top`, `volver arriba` y `backToTop` en todo el proyecto: 0 coincidencias |

### SEO técnico

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| SEO-01 | Title `{nombre} — {keywords} en {localidad}` | PASS | `includes/header.php:19`; renderizado: `MiLocalWeb — Posicionamiento Web Profesional en Córdoba` (55 caracteres) |
| SEO-02 | Meta description con servicios reales + ubicación, sin `mb_strtolower` | PASS | `includes/header.php:20`; 145 caracteres; menciona Google, redes, WhatsApp y Córdoba |
| SEO-03 | Canonical absoluta y correcta | PASS | `includes/header.php:21,35`; renderizado `https://milocalweb.com.ar/` |
| SEO-04 | Meta robots indexable con previews | PASS | `includes/header.php:25,34`; `index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1` |
| SEO-05 | `lang` correcto | PASS | `includes/header.php:28`: `lang="es-AR"` |
| SEO-06 | Geo tags (`geo.region`, `geo.placename`, `geo.position`, `ICBM`) | FAIL | `includes/header.php:29-69` no contiene ninguno; búsqueda global: 0 coincidencias. Al implementar, usar `AR-X` para Córdoba y corregir la guía que indica `AR-C` |
| SEO-07 | Open Graph completo | PASS | `includes/header.php:38-49`; 12 tags; `og:image` 1200x630 existe y `og:image:type` coincide (`image/jpeg`) |
| SEO-08 | Twitter Card `summary_large_image` | PASS | `includes/header.php:52-56`; 5 tags, incluido `twitter:image:alt` |
| SEO-09 | JSON-LD válido | PASS | 4 bloques en `includes/sections/seo-jsonld.php:18-155`; `json_decode()` OK: `LocalBusiness`, `WebSite` + `WebPage`, `OfferCatalog`, `FAQPage` |
| SEO-10 | JSON-LD completo y consistente con el contenido visible | PARCIAL | `includes/sections/seo-jsonld.php:18-155`: falta `makesOffer`/`offers` que una el `OfferCatalog` al `LocalBusiness`; falta `openingHours` (dato no disponible) y `WebPage.name` (`:69`) no coincide exactamente con el `<title>` (`includes/header.php:19`) |
| SEO-11 | `robots.txt` permite indexar, bloquea internos y declara sitemap | PARCIAL | `robots.txt:4-9`: permite `/`, bloquea `/config/` e `/includes/`, declara sitemap; no bloquea `/docs/`, `/README.md`, `.git` ni `.atl` |
| SEO-12 | `sitemap.xml` con `lastmod` dinámico, imágenes y geo | PARCIAL | `sitemap.xml:3-8`: una sola URL, `lastmod` fijo `2026-10-19` (el último commit es 2026-11-09), sin `image:image` ni `geo:geo` |
| SEO-13 | `.htaccess` con HTTPS, CSP y cache | PARCIAL | `.htaccess:26-40` cache; `:43-55` HTTPS y `www`→sin `www`; no hay `Content-Security-Policy` |
| SEO-14 | Alt text en todas las imágenes con formato `{nombre} — {descripción} en {localidad}` | FAIL | 23/23 imágenes tienen `alt` (1 vacío decorativo en `includes/footer.php:17`), pero la mayoría son genéricos: “MiLocalWeb” (`includes/sections/hero.php:105`), “Logo Plan INICIAL” (`includes/sections/resumen-planes.php:21`), “Sitio web profesional para tu negocio” (`includes/sections/beneficios.php:19`); solo `includes/sections/ubicacion.php:46,70` incluyen “Córdoba” |
| SEO-15 | Links internos válidos y rastreables | PARCIAL | Los 8 anchors del navbar (`includes/header.php:97-104`) existen en el HTML; `/pagos`, `/tutoriales`, `/descargas` (`includes/header.php:108-110`) no tienen archivo y solo funcionan por JS (`assets/js/main/03-navbar.js:120-128`) |
| SEO-16 | Jerarquía de headings h1→h2→h3 sin saltos | PARCIAL | 1 `<h1>` (`includes/sections/hero.php:112`), 9 `<h2>`, 23 `<h3>`; hay 2 `<h4>` en el footer (`includes/footer.php:47,72`) sin un `<h3>` padre en esa zona |
| SEO-17 | Favicon declarado y existente | PASS | `includes/header.php:61-62`; `assets/img/iconos/favicon.ico` responde 200 `image/vnd.microsoft.icon` |

### Secciones (adaptado a sitio de servicios)

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| SEC-01 | Hero con H1 de keywords + localidad, sin slogan | PASS | `includes/sections/hero.php:10,112-115`; H1 “Posicionamiento Web Profesional en Córdoba” |
| SEC-02 | Oferta de servicios/planes con nombre, descripción y CTA | PASS | `includes/sections/resumen-planes.php:14-119` (resumen) e `includes/sections/productos.php:12-282` (detalle de los 3 planes) |
| SEC-03 | Precios visibles consistentes con JSON-LD | PASS | `includes/sections/resumen-planes.php:26,60,93` ($498.000 / $998.000 / $648.000) vs `includes/sections/seo-jsonld.php:90,98,106` (498000 / 648000 / 998000); coinciden |
| SEC-04 | Ubicación con dirección y mapa | PASS | `includes/sections/ubicacion.php:38-79`; dirección `:53`, Static Map `:69-75`, link a Google Maps `:55-60` |
| SEC-05 | FAQ visible y consistente con JSON-LD | PASS | 7 `<details>` en `includes/sections/faq.php:20-67`; 7 preguntas equivalentes en `includes/sections/seo-jsonld.php:117-153` |
| SEC-06 | Contacto con teléfono, WhatsApp y email | PASS | `includes/sections/contacto.php:17-28`; `tel:+5493513783473`, `wa.me/5493513783473`, `mailto:comercial@milocalweb.com.ar` |
| SEC-07 | Footer estándar y WhatsApp float | PASS | `includes/footer.php:30-92`; float `:86-92`; color `#25D366` en `assets/css/src/20-whatsapp.css:17` |
| SEC-08 | Vidriera de clientes/portfolio | PASS | `includes/sections/confianza.php:16-95`; 3 webs reales + slot publicitario; los 3 enlaces externos responden 200 |

### Documentación

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| DOC-01 | README y documentación técnica presentes | PASS | `README.md:1-34`; `docs/seo-estado-2026.md`, `docs/checklist-deploy-seo-2026.md`, `docs/guia-estilo-visual-2026.md`, `docs/paleta-colores.md`, `docs/propuesta-comercial-planes-2026.md`, `docs/google maps.txt` |
| DOC-02 | README fiel a la estructura real | PARCIAL | `README.md:7-23` omite `.htaccess`, `robots.txt`, `sitemap.xml`, `docs/` y `tools/`; `README.md:42` afirma rutas `/css` y `/js` que no existen (la real es `/assets/css` y `/assets/js`, `config/config.php:30-33`) |

### Accesibilidad

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| ACC-01 | Skip-link al contenido principal | PASS | `includes/header.php:72`; destino `#main-content` en `includes/header.php:116` |
| ACC-02 | `:focus-visible` global con outline visible | FAIL | Solo hay selectores por componente en `assets/css/src/03-navbar.css:67`, `11-footer.css:171-214`, `16-planes-compartir.css:38-122` y `23-confianza.css:33-38`; no existe una regla global para links/botones genéricos |
| ACC-03 | Roles ARIA y labels en secciones/nav | PASS | `includes/header.php:74` (`navigation` + `aria-label`); 17 `aria-label` en el HTML renderizado; secciones con `aria-labelledby` |
| ACC-04 | `aria-expanded` en menú hamburguesa/dropdown | PASS | `includes/header.php:91,106`; actualizado por JS en `assets/js/main/03-navbar.js` |
| ACC-05 | Alt presente en todas las imágenes | PASS | 23 `<img>`, 23 con atributo `alt`; el vacío de `includes/footer.php:17` es decorativo y su contenedor es `aria-hidden="true"` (`includes/footer.php:15`) |

### Performance (solo verificable estáticamente)

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| PER-01 | Preload del hero con `fetchpriority="high"` | PARCIAL | `includes/sections/hero.php:104-110` tiene `fetchpriority="high"` y `decoding="async"`, pero no hay `<link rel="preload">` para la imagen |
| PER-02 | `loading="lazy"` y `decoding="async"` en imágenes no críticas | PASS | `includes/sections/beneficios.php:23-24`, `includes/sections/productos.php:25`, `includes/footer.php:21-23` |
| PER-03 | Fuentes auto-hosteadas y sin CDNs externos | FAIL | `includes/header.php:64-67` carga Google Fonts (Inter/Poppins) desde `fonts.googleapis.com` y `fonts.gstatic.com`; no existe `assets/fonts/` |
| PER-04 | Peso de assets razonable / sin bloat | PARCIAL | `assets/img` total 5,92 MB en 81 archivos; `assets/img/instagram/` 2,3 MB no referenciado; `assets/img/oficina/oficina.webp` 1,3 MB |
| PER-05 | GZIP y cache headers configurados | PASS | `.htaccess:17-22` (GZIP) y `:26-40` (CSS/JS 1 año, imágenes 30 días, HTML/PHP no-cache). La aplicación real en producción no es verificable desde el servidor embebido |

### Seguridad

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| SEG-01 | CSP completa en `.htaccess` | FAIL | `.htaccess:3-15` solo define `X-Content-Type-Options`, `X-Frame-Options` y `Referrer-Policy`; `Content-Security-Policy` no aparece |
| SEG-02 | `.git` no accesible públicamente | FAIL | `curl http://127.0.0.1:8104/.git/HEAD` → 200 `ref: refs/heads/main`; `/.git/config` → 200. `.htaccess:47` solo bloquea `config` e `includes`; no hay regla para `.git`, `.atl` ni `Options -Indexes`. En producción depende del hosting: NO VERIFICABLE |
| SEG-03 | Documentación interna no accesible/indexable | FAIL | `curl http://127.0.0.1:8104/docs/seo-estado-2026.md` → 200 `text/markdown`; `docs/google%20maps.txt` → 200; `robots.txt:4-9` no bloquea `/docs/`; `.htaccess` tampoco |
| SEG-04 | `htmlspecialchars()` en salidas de datos | PASS | `includes/header.php:32-35,41-49`; `includes/sections/seo-jsonld.php` usa `htmlspecialchars`; no hay entradas de usuario ni formularios |
| SEG-05 | `rel="noopener noreferrer"` en links externos | PASS | `includes/footer.php:50-51,55-56,60-61`; `includes/sections/confianza.php:24,42,60,78`; 0 links `target="_blank"` sin `rel` con `noopener` |
| SEG-06 | Headers base de seguridad | PASS | `.htaccess:8` (`nosniff`), `:11` (`X-Frame-Options SAMEORIGIN`), `:14` (`Referrer-Policy`) |
| SEG-07 | HSTS | FAIL | No hay `Strict-Transport-Security` en `.htaccess`; solo se fuerza HTTPS con redirect (`:53-55`) |

### Mobile

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| MOB-01 | Viewport meta correcto | PASS | `includes/header.php:31`: `width=device-width, initial-scale=1.0` |
| MOB-02 | Menú hamburguesa funcional | PASS | `includes/header.php:91-95`; lógica `assets/js/main/03-navbar.js`; estilos `assets/css/src/03-navbar.css:219-240`; `aria-expanded` y cierre con ESC |
| MOB-03 | Breakpoints responsive | PASS | `assets/css/src/21-responsive.css:1-374` y media queries distribuidas en los parciales de componente |
| MOB-04 | Navegación usable sin JS | FAIL | En ≤1024 px `.navbar-menu` es `display:none` (`assets/css/src/03-navbar.css:232`) y solo se muestra con `.is-open` (`:238-240`), clase que agrega `assets/js/main/03-navbar.js`; sin JS el menú queda inaccesible |

### Funcionalidad

| ID | Requisito | Estado | Evidencia |
|---|---|---|---|
| FUN-01 | Links de WhatsApp, redes y mapas funcionan | PASS | `includes/footer.php:49-76`, `includes/sections/contacto.php:17-28`, `includes/sections/confianza.php:24-78`; `curl -L` 200 para WhatsApp, Instagram, Facebook, Google Maps y las 3 webs del portfolio |
| FUN-02 | Rutas internas planificadas no generan 404 rastreable | PARCIAL | `/pagos`, `/tutoriales`, `/descargas` (`includes/header.php:108-110`) no tienen archivo; el click se intercepta con `data-coming-soon` (`assets/js/main/03-navbar.js:120-128`), pero el crawler o un usuario sin JS llega a 404 en producción |
| FUN-03 | Sin errores PHP y home operativa | PASS | `php -l` OK en 17 archivos (resumen de cambios); `GET /` → 200 (auditoría) |

### Ítems excluidos del puntaje

| Tipo | Ítems | Motivo |
|---|---|---|
| N/A | `founder_name`/`founder_title`; `seo_categorias`, `seo_marcas`; producto estrella/reels; aside publicitario de cliente; `AGENTS.md`, `docs/ficha-cliente.md`, `docs/guia-relevamiento.md`; `hreflang`; `BreadcrumbList`; iframes de Google Maps | No aplican a un sitio propio de servicios con una sola URL y sin catálogo de cliente |
| NO VERIFICABLE | Lighthouse/Core Web Vitals; contraste WCAG AA; `display_errors = Off`; touch targets ≥ 44x44; ausencia de scroll horizontal; directory listing en producción | Requieren navegador, medición visual o configuración del hosting; no se ejecutaron herramientas de auditoría visual |

## Cambios posteriores a la auditoría (no re-auditados)

| Ítem | Antes de la auditoría | Estado actual | Evidencia |
|---|---|---|---|
| CSS-01 | `styles.css` monolítico | 23 parciales en `assets/css/src/` | `tools/build-css.php:24-48` |
| CSS-02 | Sin build | `tools/build-css.php` | `php tools/build-css.php` |
| CSS-03 | Fuente editada a mano | Bundle generado de 61.904 bytes | `assets/css/styles.css`; no editar a mano |
| `index.php` | 1.023 líneas | Entrypoint de 32 líneas + 11 secciones | `index.php:16-32`; `includes/sections/*.php` |
| `main.js` | 404 líneas | 6 parciales + build | `tools/build-js.php:23-30` |

Estos cambios mejoran el mantenimiento y reducen el riesgo de edición, pero **no corrigen** el P0 de la clave, la exposición de `.git`/`docs/`, la falta de CSP, la dependencia de Google Fonts ni las señales SEO pendientes. El puntaje sigue siendo el auditado hasta una nueva auditoría.

## SEO implementado

| Elemento | Estado | Valor encontrado | Evidencia |
|---|---|---|---|
| Title | PASS | `MiLocalWeb — Posicionamiento Web Profesional en Córdoba` (55 caracteres) | `includes/header.php:19,32` |
| Meta description | PASS | 145 caracteres; servicios + Córdoba | `includes/header.php:20,33` |
| Canonical | PASS | `https://milocalweb.com.ar/` | `includes/header.php:21,35` |
| Robots meta | PASS | `index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1` | `includes/header.php:25,34` |
| `lang` | PASS | `es-AR` | `includes/header.php:28` |
| Geo tags | FAIL | Ausentes: 0 `geo.region`, `geo.placename`, `geo.position`, `ICBM` | `includes/header.php:29-69`; búsqueda global 0 |
| Open Graph | PASS | 12 tags: type, site_name, locale, title, description, url, image, secure_url, type, width, height, alt | `includes/header.php:38-49` |
| OG image | PASS | `https://milocalweb.com.ar/assets/img/logos/og-milocalweb-1200x630.jpg`; 1200x630; JPEG | `config/config.php:38-40`; `getimagesize()` |
| Twitter Card | PASS | `summary_large_image` + title/description/image/alt | `includes/header.php:52-56` |
| JSON-LD | PASS | `LocalBusiness`, `WebSite`, `WebPage`, `OfferCatalog`, `FAQPage`; 4/4 bloques válidos | `includes/sections/seo-jsonld.php:18-155` |
| JSON-LD OfferCatalog | PARCIAL | 3 ofertas con precios correctos; no está enlazado al `LocalBusiness` con `makesOffer`/`offers` | `includes/sections/seo-jsonld.php:79-111` vs `:18-51` |
| JSON-LD consistencia visible | PASS | Planes, precios, FAQ y dirección aparecen en el HTML | `resumen-planes.php:26,60,93`; `faq.php:20-67`; `ubicacion.php:38-79` |
| Headings | PARCIAL | 1 H1, 9 H2, 23 H3, 7 H4; H4 en footer sin H3 padre | `includes/sections/hero.php:112`; `includes/footer.php:47,72` |
| Alt text | FAIL | 23/23 con `alt`; mayoría genéricos, solo 2 incluyen localidad | `includes/sections/hero.php:105`; `resumen-planes.php:21`; `ubicacion.php:46,70` |
| `robots.txt` | PARCIAL | `Allow: /`; bloquea `/config/` e `/includes/`; sitemap declarado; no bloquea `/docs/` | `robots.txt:4-9` |
| `sitemap.xml` | PARCIAL | 1 URL; `lastmod` 2026-10-19; sin imágenes/geo | `sitemap.xml:3-8` |
| `.htaccess` | PARCIAL | HTTPS + www + cache + GZIP; sin CSP ni HSTS | `.htaccess:3-55` |
| Internal links | PARCIAL | Anchors válidos; 3 rutas “Próximamente” sin archivo | `includes/header.php:97-110`; `assets/js/main/03-navbar.js:120-128` |
| Favicon | PASS | `favicon.ico` declarado y existente | `includes/header.php:61-62`; `assets/img/iconos/favicon.ico` |
| `hreflang` | N/A | Sitio monolingüe | `includes/header.php:28` |

## Deuda y riesgos

> **No se corrigieron los P0/P1 de seguridad, SEO ni performance.** El alcance fue documental y de orden interno; la única deuda estructural mitigada es el monolito CSS. Ordenado por impacto.

| Prioridad | Problema | Impacto | Evidencia | Recomendación |
|---|---|---|---|---|
| P0 | Clave de Google Maps hardcodeada y versionada; además se renderiza en el HTML | Cualquier visitante puede extraerla; si no está restringida, permite consumo de cuota/facturación a nombre del titular. Está en el historial de Git | `config/config.php:56`; `includes/sections/ubicacion.php:24-33`; commit `aefc623` | Quitar el fallback hardcodeado y leer solo `GOOGLE_MAPS_API_KEY` desde entorno; restringir la clave por HTTP referrer y por API (Static Maps); rotar la clave; purgar el valor del historial si el repo es público; considerar proxy server-side para la imagen estática |
| P1 | `.git` y `docs/` expuestos; `.htaccess` no los bloquea | Fuga de código, metadatos del repo y documentación interna; el `.git` contiene la clave P0 | `curl /.git/HEAD` → 200; `curl /docs/seo-estado-2026.md` → 200; `.htaccess:47` solo bloquea `config` e `includes`; `robots.txt:4-9` no bloquea `/docs/` | Añadir `RewriteRule ^\.git(/.*)?$ - [F,L]`, `RewriteRule ^docs(/.*)?$ - [F,L]`, `RewriteRule ^\.atl(/.*)?$ - [F,L]`, `Options -Indexes`; excluir `.git`, `.atl` y `docs` del deploy; agregar `Disallow: /docs/` en robots |
| P1 | No hay CSP | Sin defensa en profundidad ante XSS/inline injection; incumple el estándar del template | `.htaccess:3-15`; búsqueda `Content-Security-Policy` = 0 | Implementar la CSP de `landingpages.clientes/template/AGENTS.md` adaptando `img-src` a `https://maps.googleapis.com` y `style-src`/`script-src` según los inline actuales; probar en report-only antes de enforcing |
| P1 | CSS monolítico de 3.684 líneas sin parciales ni build (auditoría) | Edición riesgosa y cascada frágil; impedía critical CSS y carga async | `assets/css/styles.css` (3.684 líneas en la auditoría); `Test-Path tools` = False | **Mitigado en esta sesión:** 23 parciales en `assets/css/src/` + `tools/build-css.php`. Mantener el build y no editar el bundle; falta re-auditar |
| P1 | Google Fonts externo y CSS síncrono | Dependencia de terceros, request extra, FOUT/CLS y violación de “sin CDNs externos”; el CSS bloquea el render | `includes/header.php:64-69`; no existe `assets/fonts/` | Auto-hospedar Inter/Poppins en `assets/fonts/*.woff2` con `font-display: swap`; generar critical CSS inline y cargar `styles.css` con `preload + onload`; mantener fallback `system-ui` |
| P1 | Faltan geo tags | Pérdida de señales locales para “Córdoba” en Google; incumple checklist SEO | `includes/header.php:29-69`; 0 coincidencias de `geo.region`, `geo.placename`, `geo.position` e `ICBM` | Agregar `geo.region` (`AR-X` para Córdoba), `geo.placename` “Córdoba, Córdoba, Argentina”, `geo.position` e `ICBM` con las coordenadas de `config/config.php:65-66` |
| P1 | Alt text mayormente genérico, sin localidad | Menor relevancia semántica y de imagen; incumple el formato canónico en la mayoría de las imágenes | 23/23 con `alt`; ejemplos `includes/sections/hero.php:105`, `resumen-planes.php:21`, `beneficios.php:19`; solo `ubicacion.php:46,70` incluyen “Córdoba” | Aplicar `{MiLocalWeb} — {descripción} en Córdoba` a las imágenes de contenido; dejar `alt=""` solo en decorativas |
| P2 | JSON-LD desacoplado y con datos duplicados | El `OfferCatalog` no está vinculado al `LocalBusiness`; `WebPage.name` no coincide con el `<title>`; dirección/precios duplicados fuera de config | `seo-jsonld.php:18-51` (sin `makesOffer`), `:69` vs `includes/header.php:19`, `:90,98,106` | Añadir `makesOffer` con `@id` de las ofertas; alinear `WebPage.name`; derivar dirección/precios de `config.php` para evitar drift |
| P2 | `robots.txt` y `sitemap.xml` incompletos/estáticos | Docs indexables, sitemap desactualizado y sin imágenes/geo | `robots.txt:4-9`; `sitemap.xml:5` (2026-10-19 vs commit 2026-11-09) | Bloquear `/docs/`, `.git`, `.atl`; generar `lastmod` con `date('Y-m-d')` o fecha de build; agregar `xmlns:image` y las OG/hero/productos; opcional `geo:geo` |
| P2 | Rutas “Próximamente” sin archivo | Crawlers y usuarios sin JS reciben 404; el menú promete rutas inexistentes | `includes/header.php:108-110`; `assets/js/main/03-navbar.js:120-128` | Crear páginas placeholder con `noindex` o convertir los ítems en texto no enlazable hasta que existan; agregar un `404.php` útil |
| P2 | Sin back-to-top | Incumple checklist de funcionalidad y empeora la navegación en una página larga | Búsqueda global: 0 coincidencias | Agregar botón `#back-to-top` al footer, con JS y `prefers-reduced-motion` |
| P2 | `:focus-visible` no global | Links y botones genéricos dependen del outline del navegador; inconsistencia accesible | `assets/css/src/03-navbar.css:67`, `11-footer.css:171-214`, `16-planes-compartir.css:38-122`, `23-confianza.css:33-38` | Agregar regla global `:focus-visible { outline: 2px solid var(--mlw-naranja-vivo); outline-offset: 2px; }` en `01-base.css` |
| P2 | H4 en footer sin H3 padre | Salto de jerarquía; incumple checklist de accesibilidad | `includes/footer.php:47,72` | Cambiar a `<h2>`/`<h3>` o usar `<p class="footer-heading">` si no debe ser heading |
| P2 | Animación del WhatsApp float ignora `prefers-reduced-motion` | Molestia para usuarios con sensibilidad al movimiento | `assets/css/src/20-whatsapp.css` (animación `whatsapp-pulse`); el bloque `prefers-reduced-motion` solo desactiva `.share-toast` | Incluir `.whatsapp-float { animation: none; }` dentro del bloque `prefers-reduced-motion` o eliminar la animación |
| P2 | Dimensiones declaradas incorrectas | Reserva de espacio errónea y CLS potencial | `beneficios.php:21-22` (200x200 vs 521x801), `garantia.php:19-20` (400x400 vs 1312x1199), `complementarios.php:23-24` (400x300 vs 1254x1254) | Corregir `width`/`height` a las dimensiones reales o usar `aspect-ratio` consistente; no cambiar solo el CSS |
| P2 | Peso de imágenes y assets no usados | 5,92 MB de imágenes; 2,3 MB de Instagram sin referenciar; `oficina.webp` 1,3 MB | `assets/img` (81 archivos, 5,92 MB); `assets/img/instagram/` 2,3 MB; `assets/img/oficina/oficina.webp` 1,3 MB | Eliminar/mover assets no usados; comprimir oficina y generar variantes responsive con `srcset`; documentar el inventario |
| P2 | README desactualizado | Induce a error sobre rutas y estructura | `README.md:7-23`, `README.md:42` | Actualizar el árbol y las convenciones de rutas; enlazar los docs SEO |
| P2 | Link a demo por HTTP | Enlace inseguro y posible mixed content si se embebe; mala señal | `includes/footer.php:74` (`http://demo.milocalweb.com.ar`) | Cambiar a `https://demo.milocalweb.com.ar` si el host lo soporta; verificar redirect |
| P2 | Menú mobile dependiente de JS | Sin JS no se puede navegar en ≤1024 px | `assets/css/src/03-navbar.css:232,238-240`; `assets/js/main/03-navbar.js` | Añadir fallback con `<noscript>` o un patrón `details/summary` para el menú; al menos mostrar los links principales |
| P2 | `defer` ausente y sin preload del hero | Menor prioridad de ejecución/descubrimiento; incumple checklist | `includes/footer.php:94`; `includes/sections/hero.php:104-110` | Agregar `defer` a `main.js` y `<link rel="preload" as="image" href="...hero...">` con `fetchpriority="high"` |
| P2 | Sin HSTS ni `Options -Indexes` | Endurecimiento incompleto; directory listing dependiente del hosting | `.htaccess` sin `Strict-Transport-Security` ni `Options -Indexes` | Agregar `Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"` (solo con HTTPS estable) y `Options -Indexes` |

## Checklist para considerarlo terminado

- [ ] P0 resuelto: clave rotada, restringida por referrer/API y fuera del código y del historial.
- [ ] `.git/`, `.atl/` y `docs/` bloqueados por `.htaccess` y excluidos del deploy; `Options -Indexes` activo.
- [ ] CSP y HSTS implementados y probados.
- [ ] Google Fonts auto-hospedadas; CSS crítico inline y carga no bloqueante.
- [ ] Geo tags agregados con `AR-X` y coordenadas de `config/config.php:65-66`.
- [ ] Alt text con formato `{nombre} — {descripción} en {localidad}` en imágenes de contenido.
- [ ] `sitemap.xml` actualizado con `lastmod` real, imágenes y geo.
- [ ] Todos los P1 resueltos o aceptados por escrito.
- [ ] Checklist de `template/docs/checklist-verificacion.md` al 100 %.
- [ ] Sitemap subido a Search Console.
- [ ] Lighthouse móvil: Performance ≥ 85, Accesibilidad ≥ 95, SEO 100.
- [ ] Sin errores PHP ni enlaces/imágenes rotas.
- [ ] Nueva auditoría ejecutada y puntaje actualizado.

## Verificación reproducible

```powershell
C:\tools\php84\php.exe -l index.php
C:\tools\php84\php.exe -l config/config.php
C:\tools\php84\php.exe -l includes/header.php
C:\tools\php84\php.exe -l includes/footer.php
Get-ChildItem includes/sections/*.php | ForEach-Object { C:\tools\php84\php.exe -l $_.FullName }

C:\tools\php84\php.exe -S 127.0.0.1:8000 -t .
curl.exe -s -o NUL -w "%{http_code}" http://127.0.0.1:8000/

C:\tools\php84\php.exe tools/build-css.php
C:\tools\php84\php.exe tools/build-js.php
```

## Documentos relacionados

- [Arquitectura](arquitectura.md)
- [Mapa del sitio](mapa-sitio.md)
- [Resumen de documentación](resumen-documentacion.md)
- [SEO — Estado y pendientes 2026](seo-estado-2026.md)
- [Checklist de deploy y validación SEO 2026](checklist-deploy-seo-2026.md)
- [Guía de estilo visual 2026](guia-estilo-visual-2026.md)
- [Propuesta comercial de planes 2026](propuesta-comercial-planes-2026.md)
