# Checklist de deploy y validación SEO — 2026

> Guía operativa para publicar los cambios SEO de MiLocalWeb y verificar que
> Google, las redes sociales y los validadores los detecten correctamente.
>
> Commits incluidos:
> - `ef3834d` — crawl files, redirect de `www` y GZIP.
> - `f57463f` — metadatos sociales, canonical, JSON-LD e imágenes.

---

## 1. Antes de desplegar

- [ ] Confirmar que estás en `main` y con el último commit:
  ```powershell
  git checkout main
  git pull origin main
  git log --oneline -3
  ```
- [ ] Confirmar que el sitio renderiza sin errores en local:
  ```powershell
  php -l index.php
  php -l includes/header.php
  php -l includes/footer.php
  php -l config/config.php
  ```
- [ ] Hacer backup del sitio actual en el hosting (archivos y `.htaccess`).

## 2. Archivos que deben subir

Todos los archivos modificados o nuevos respecto de `aefc623`:

| Archivo | Cambio |
|---------|--------|
| `.htaccess` | Redirect 301 `www`, GZIP y guardas de `mod_headers` |
| `config/config.php` | `SITE_URL`, `OG_IMAGE_URL` y teléfono E.164 |
| `includes/header.php` | Open Graph, Twitter, canonical, robots, title y description |
| `includes/footer.php` | Dimensiones y lazy loading del isotipo |
| `index.php` | JSON-LD ampliado, dimensiones y lazy loading de imágenes |
| `assets/img/logos/og-milocalweb-1200x630.jpg` | Imagen OG (nueva) |
| `robots.txt` | Nuevo |
| `sitemap.xml` | Nuevo |
| `docs/seo-estado-2026.md` | Documentación (opcional en producción) |

> No es necesario subir `docs/` ni los archivos de `.atl/` para que el sitio
> funcione. Subir `.htaccess` sí es obligatorio.

## 3. Verificación post-deploy

Ejecutar desde PowerShell con `curl.exe` (no sigue redirects con `-I`).

### 3.1 Home y HTTPS

```powershell
curl.exe -I https://milocalweb.com.ar/
```

Esperado: `HTTP/1.1 200 OK` y `content-type: text/html`.

### 3.2 Redirect de www al dominio canónico

```powershell
curl.exe -I https://www.milocalweb.com.ar/
```

Esperado:

```
HTTP/1.1 301 Moved Permanently
location: https://milocalweb.com.ar/
```

Si devuelve `200`, el `.htaccess` no se subió o `mod_rewrite` no está activo.

### 3.3 Redirect de HTTP a HTTPS

```powershell
curl.exe -I http://milocalweb.com.ar/
```

Esperado: `301` con `location: https://milocalweb.com.ar/`.

### 3.4 robots.txt y sitemap.xml

```powershell
curl.exe -I https://milocalweb.com.ar/robots.txt
curl.exe -I https://milocalweb.com.ar/sitemap.xml
```

Esperado: `200` y `content-type: text/plain` / `application/xml`.

Contenido esperado de `robots.txt`:

```
User-agent: *
Allow: /
Disallow: /config/
Disallow: /includes/

Sitemap: https://milocalweb.com.ar/sitemap.xml
```

### 3.5 Imagen Open Graph

```powershell
curl.exe -I https://milocalweb.com.ar/assets/img/logos/og-milocalweb-1200x630.jpg
```

Esperado: `200`, `content-type: image/jpeg`, `content-length: 97792` (aprox.).

### 3.6 Compresión GZIP

```powershell
curl.exe -I -H "Accept-Encoding: gzip" https://milocalweb.com.ar/
```

Esperado: header `content-encoding: gzip`.

> LiteSpeed puede comprimir de forma nativa aunque `mod_deflate` no exista.
> Lo importante es que el header aparezca.

### 3.7 Cache de assets

```powershell
curl.exe -I https://milocalweb.com.ar/assets/css/styles.css
curl.exe -I https://milocalweb.com.ar/assets/img/logos/og-milocalweb-1200x630.jpg
```

Esperado:
- CSS: `cache-control: public, max-age=31536000, immutable`.
- Imagen: `cache-control: public, max-age=2592000`.

### 3.8 Verificación del HTML publicado

```powershell
curl.exe -s https://milocalweb.com.ar/ | Select-String "og:image|canonical|application/ld\+json"
```

Esperado: al menos una línea por cada etiqueta.

## 4. Validación SEO

### 4.1 Rich Results / datos estructurados

1. Abrir [Rich Results Test](https://search.google.com/test/rich-results).
2. Probar `https://milocalweb.com.ar/`.
3. Confirmar que detecta `LocalBusiness`, `OfferCatalog` y `FAQPage` sin errores.
4. Revisar que no haya advertencias por campos faltantes.

### 4.2 Vista previa en redes sociales

- [ ] **Facebook / WhatsApp**: [Sharing Debugger](https://developers.facebook.com/tools/debug/). Pegar la URL, hacer clic en "Scrape Again" y confirmar imagen 1200x630, título y descripción.
- [ ] **LinkedIn**: [Post Inspector](https://www.linkedin.com/post-inspector/).
- [ ] **WhatsApp**: enviar el link a un chat propio y confirmar la tarjeta.
- [ ] **X / Twitter**: [Card Validator](https://cards-dev.twitter.com/validator) (puede requerir sesión). Confirmar `summary_large_image`.

> Si la imagen no aparece, suele ser cache del scraper. Forzar un nuevo scrape
> o esperar unos minutos después del deploy.

### 4.3 Rendimiento

1. Abrir [PageSpeed Insights](https://pagespeed.web.dev/).
2. Analizar `https://milocalweb.com.ar/` en mobile y desktop.
3. Revisar Core Web Vitals: LCP, CLS e INP.
4. Pendiente conocido: `assets/img/oficina/oficina.webp` pesa ~1,3 MB.

## 5. Google Search Console

### 5.1 Crear la propiedad

1. Entrar a [Google Search Console](https://search.google.com/search-console).
2. Agregar propiedad de tipo **Dominio**: `milocalweb.com.ar`.
   - Esta opción cubre `https`, `http`, `www` y subdominios.
3. Si no tenés acceso al DNS, usar **Prefijo de URL**:
   `https://milocalweb.com.ar/`.

### 5.2 Verificar por DNS (recomendado para propiedad de Dominio)

1. Google entrega un registro TXT con un valor similar a:
   ```
   google-site-verification=<TOKEN_DE_GOOGLE>
   ```
2. En el panel DNS de Donweb, crear un registro:
   - **Tipo**: `TXT`
   - **Nombre / Host**: `@`
   - **Valor**: `google-site-verification=<TOKEN_DE_GOOGLE>`
   - **TTL**: el valor por defecto.
3. Guardar y esperar la propagación (puede tardar desde minutos hasta 24 horas).
4. Volver a Search Console y hacer clic en **Verificar**.

### 5.3 Enviar el sitemap

1. Ir a **Indexación → Sitemaps**.
2. Enviar: `https://milocalweb.com.ar/sitemap.xml`.
3. Confirmar estado "Correcto" y que detecte 1 URL.

### 5.4 Solicitar indexación

1. Ir a **Inspección de URL**.
2. Pegar `https://milocalweb.com.ar/`.
3. Hacer clic en **Solicitar indexación**.
4. Repetir cuando se publiquen páginas nuevas.

### 5.5 Bing Webmaster Tools

1. Entrar a [Bing Webmaster Tools](https://www.bing.com/webmasters).
2. Importar el sitio desde Google Search Console.
3. Confirmar el sitemap y solicitar indexación.

## 6. Google Business Profile

- [ ] Verificar que el nombre, dirección y teléfono coincidan exactamente con el sitio (NAP).
- [ ] Cargar horarios de atención reales.
- [ ] Agregar servicios y fotos actualizadas.
- [ ] Responder reseñas y publicar novedades periódicamente.

> Cuando estén definidos los horarios, agregarlos también al JSON-LD como
> `openingHoursSpecification`. No inventar horarios ni reseñas.

## 7. Rollback

Si algo falla después del deploy:

```powershell
git revert --no-edit f57463f ef3834d
git push origin main
```

O volver a desplegar el commit anterior estable:

```powershell
git checkout aefc623
```

Restaurar también el backup de `.htaccess` si el problema es de servidor.

## 8. Checklist final

- [ ] Home responde 200 por HTTPS.
- [ ] `www` redirige 301 al dominio sin `www`.
- [ ] HTTP redirige 301 a HTTPS.
- [ ] `robots.txt` y `sitemap.xml` responden 200.
- [ ] Imagen OG responde 200 con `image/jpeg`.
- [ ] GZIP activo.
- [ ] Cache de CSS e imágenes activo.
- [ ] Open Graph correcto en Facebook/WhatsApp y LinkedIn.
- [ ] Rich Results sin errores.
- [ ] Sitemap enviado en Search Console.
- [ ] Indexación solicitada.
- [ ] Google Business Profile consistente con el sitio.
