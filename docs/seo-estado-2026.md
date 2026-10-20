# SEO — Estado y pendientes (2026)

> Auditoría y gestión aplicada sobre la landing principal de MiLocalWeb.
> Última actualización: 2026-10-19.

## Implementado

### Metadatos y redes sociales
- `title` orientado a keyword: "MiLocalWeb — Posicionamiento Web Profesional en Córdoba" (55 caracteres).
- `meta description` de 145 caracteres, con propuesta de valor y ubicación.
- `lang="es-AR"`.
- `canonical` absoluto a `https://milocalweb.com.ar/`.
- `meta robots`: `index, follow` + previews grandes.
- Open Graph completo: tipo, sitio, locale, título, descripción, URL e imagen.
- Twitter Cards (`summary_large_image`).
- `theme-color` con el bosque de marca (`#123F24`).
- Imagen OG 1200x630 (`assets/img/logos/og-milocalweb-1200x630.jpg`).

### Datos estructurados (JSON-LD)
- `LocalBusiness` con `@id`, dirección, geo, teléfono E.164, email, mapa y `sameAs` (Instagram/Facebook).
- `WebSite` + `WebPage` enlazados por `@id`.
- `OfferCatalog` con los tres planes y precios.
- `FAQPage` con las siete preguntas frecuentes.

### Rastreo e indexación
- `robots.txt` con `Sitemap:` y bloqueo de `/config/` e `/includes/`.
- `sitemap.xml` con la home.
- Redirección 301 de `www` a dominio sin `www` (evita contenido duplicado).
- Redirección HTTPS conservada.

### Rendimiento y HTML
- Compresión GZIP para HTML, CSS, JS, JSON, XML y SVG.
- Cache de assets versionados y de imágenes.
- Todas las imágenes con `width`/`height` (evita CLS) y `alt`.
- Imágenes bajo el pliegue con `loading="lazy"` y `decoding="async"`.
- Imagen principal con `fetchpriority="high"`.

## Pendiente

### Al desplegar
- Subir `robots.txt`, `sitemap.xml` y la imagen OG.
- Verificar que `https://www.milocalweb.com.ar` redirija 301 al dominio sin `www`.
- Confirmar que LiteSpeed respete GZIP y los headers de cache.

### Fuera del código (requiere cuentas y datos reales)
- Alta y verificación en Google Search Console; enviar `sitemap.xml`.
- Alta en Bing Webmaster Tools.
- Validar Open Graph con el debugger de Facebook/WhatsApp y Twitter Card Validator.
- Validar JSON-LD con Rich Results Test.
- Completar Google Business Profile con el mismo NAP del sitio.
- Agregar `openingHours` al schema cuando se definan los horarios reales.
- Agregar reseñas reales (`aggregateRating`) solo cuando existan.

### Mejoras recomendadas a futuro
- Optimizar `assets/img/oficina/oficina.webp` (1,3 MB) y generar variantes responsive.
- Renombrar archivos con espacios a kebab-case descriptivo (ej. `logo-plan-inicial.webp`).
- Agregar `apple-touch-icon` de 180x180 y `manifest.webmanifest`.
- Evaluar self-hosting de Google Fonts para eliminar la dependencia externa.
- Crear páginas de servicio (diseño web, Google Business, redes) para ampliar cobertura de keywords.
- Revisar Core Web Vitals en PageSpeed Insights después del deploy.
