# Guía de Estilo Visual — MiLocalWeb 2026

> Informe + propuesta de actualización gráfica a partir de las 3 piezas de Instagram (`assets/img/instagram/promo 1/2/3.jpg`) contrastadas con `paleta-colores.md` y `assets/css/styles.css`.
> Objetivo: unificar la estética web con la estética social y dejar un punto de partida listo para humano + IA (Figma / CSS / prompts generativos).

---

## 1. Resumen ejecutivo

La web actual habla un idioma **glass / luminoso / blur** (`backdrop-filter`, verdes claros `#5A9939` como protagonistas, degradados neón). Las 3 promos de Instagram hablan otro: **flat sólido, alto contraste, orgánico-geométrico** con verdes bosque profundos, naranja saturado, mucho blanco, blobs, pills y dot-grids.

No son incompatibles, pero hoy están desalineadas. La guía propone **reconciliarlas**: mantener los 2 colores sagrados del logo y sumar un **verde bosque profundo** como primario real de titulares/superficies + sistematizar blobs/waves/dots/pills/prompt IA, para que la web respire como las promos sin perder el trabajo glass ya hecho (se reserva glass para tarjetas secundarias).

**Decisión clave:**
> Pasamos de "verde claro protagonista" a **verde bosque protagonista** + verde marca como acento luminoso. El naranja queda como highlight de conversión. El blanco pasa a ser el 55-60% del lienzo.

---

## 2. Análisis de las 3 promos

### 2.1 Rasgos comunes (ADN compartido)

| Dimensión | Qué se observa en las 3 piezas |
|---|---|
| **Paleta percibida** | Blanco ~60% + Verde bosque #123E22 aprox. ~25% + Naranja #FF6A00 ~10% + Verde medio #2E8B3B ~3% + Mint muy claro #EEF5EA para tramas. Negro #1A1A1A solo para micro-texto. |
| **Tipografía** | Sans geométrica, sin serif. Logotipo “MiLocalWeb”: Mi+Local en verde bosque semibold, Web en naranja semibold. Titulares bold/extraBold (700-900). Subtítulos regular/medium 400-500. Promo 3 usa condensed extra-black en mayúsculas para impacto. Tracking apretado en display. |
| **Estética / vibe** | **Orgánico + Clínico**. Fondo blanco clínico (confianza/b2b local) + formas orgánicas cálidas (cercanía). Nada de glass/blur/neón. Todo es sólido y legible a tamaño móvil/ig. Energía sin infantilismo. |
| **Formas signature** | 1. **Blob / wave** fluido que recorta el lienzo (esquinas y laterales). 2. **Pill** (rectángulo 999px radius) para CTAs y tags. 3. **Dot-grid** 4×4 / 5×4 puntos (5-6px) sobre blobs. 4. **Arcos finos** 1-1.5px (naranja y verde claro) como contorno decorativo. 5. **Círculos outline** para iconos. |
| **Iconografía** | Lineal, trazo 1.8-2px, extremos redondeados, monocromo verde bosque sobre círculo blanco con borde fino. En promo 1: 9 iconos outline (monitor, carrito, G, maps pin, ig/fb, nube, globo, mail, headset). Misma familia que `assets/img/iconos/*.svg` pero más outline. |
| **Composición** | Mucho aire blanco, jerarquía A-B-C: claim enorme → claim secundario → body pequeño. Promo 1 es la única “informativa/densa”; promo 2 es “minimal interrogativa”; promo 3 es “manifiesto bold”. Las 3 comparten el isotipo pin naranja con aro verde abajo. |
| **Fotografía / mockup** | Solo promo 1 usa mockup real (laptop + móvil con sombra suave, recorte limpio). El resto es tipográfico puro. No hay ilustraciones 3D. |
| **Sensación** | Cercana, local, profesional, sin humo. El naranja nunca compite con el verde: el verde ocupa superficie, el naranja puntúa. |

### 2.2 Promo por promo

#### Promo 1 — `promo 1.jpg` (la “landing resumida”)
Layout denso a 2 niveles: arriba claim + mockups, abajo grid 9 servicios + billa doble CTA. La que más se parece a lo que debería ser la home. Blob verde grande arriba-der + abajo naranja/wave + dot-grid blanco sobre verde + doble franja pill inferior (izq verde #164E2A / der naranja #F66A00 con separadores). Tipografía: “Tu negocio también necesita **estar online**” mix regular + bold + green. Subrayado naranja 28px + punto. Iconos en fila con separadores verticales finos.

#### Promo 2 — `promo 2.jpg` (la “pregunta Google”)
Minimalismo extremo: fondo blanco, pin + logo arriba, headline gigante verde bosque centrado, search-bar mock (lupa naranja, mic Google colors, 3 puntos) + 3 pills verde bosque sólidas con icono blanco a la izq. Wave verde bosque gruesa abajo (curva suave). Cero naranja salvo lupa. Objetivo: SEO/Google Maps. Tono más “ansiedad-amable” (¿te encuentran?).

#### Promo 3 — `promo 3.jpg` (el “manifiesto”)
Impacto tipográfico: “No hacemos webs lindas, hacemos webs que **TRAEN CLIENTES**” donde “TRAEN CLIENTES” es condensed heavy naranja 2.5× el resto, tracking -2. Fondo blanco + textura diagonal mint 5% + 2 blobs esquineros (arriba naranja, abajo verde bosque) + dot-grid verde sobre naranja + aro fino naranja + cohete outline. Banda verde media pill centrada + footer verde bosque con pill naranja WhatsApp. La más “agencia con actitud”.

---

## 3. Contraste con `paleta-colores.md` y `styles.css` actual

| Eje | `paleta-colores.md` / `styles.css` hoy | Promos Instagram | Brecha / recomendación |
|---|---|---|---|
| **Verde primario** | `#5A9939` (verde amarillento medio, luminoso, “campo”). Usado como `--color-primary`. Hover hacia `#7BC352` aún más claro. | `#123F24` / `#164A2B` / `#0F3D22` (bosque profundo, frío, premium). El `#5A9939` aparece solo como verde medio secundario en pills/cintas. | **Desacople crítico.** El `#5A9939` como titular sobre blanco pierde autoridad vs. el bosque de las promos. **Propuesta:** elevar el bosque a primario de titulares/superficies; relegar `#5A9939` a “verde marca luminoso”. |
| **Naranja** | `#EF6015` sólido, bien. | `#FF6A00` / `#FF7A00` visualmente +5-8% más saturado/brillante. | Alineado. Solo subir saturación/intensidad y declarar naranja como **solo acento de conversión/CTAs**, nunca fondo grande. |
| **Neutros / fondos** | Blanco + `blanco-glass` 0.72 + gradientes glass verdes. Mucho blur. | Blanco puro 100% protagonista, sin transparencias. Fondo mint `#EEF5EA` sutil para tramas. | Opuestos: **flat vs. glass.** Mantener glass solo como variante secundaria para cards internas; default web = sólido como promos. |
| **Degradados** | `verde-700 → verde-500 → verde-200` vivos, neón. | No hay degradados protagonista (solo sólido). | Retirar degradado neón del hero en la próxima iteración; reemplazar por blanco + blobs sólidos (ver §6). |
| **Tipografía** | `system-ui, -apple-system, 'Segoe UI', Roboto` (stack sistema). Sin escala tipográfica definida. | Geométrica (Poppins / Montserrat / Nunito Sans feel). Bold/ExtraBold, condensed para display. | **Desacople total.** Incorporar webfont geométrica. |
| **Formas / estética** | `border-radius: 14/20/28`, sombras `shadow-glass`, `backdrop-filter: blur(12px)`. Círculos blur radiales en hero. | `pill 999px`, blobs orgánicos, dot-grid, arcos 1px, iconos outline sobre círculo. Sin blur ni glass. | La web hoy es “tech-glass”; las promos son “local orgánico”. Adoptar sistema de shapes de promo como primario. |
| **Iconografía** | `icon-check / dollar / check-circle` sólidos sobre fondo degradado verde. | Outline minimal, mismo peso en toda la fila. | Unificar a outline 2px verde bosque. |
| **Tono** | Premium tech suave. | “Más visibilidad, más clientes” — directo, beneficio. | Alinear copy y CTA al tono promo: verbo + beneficio + WhatsApp. |

**Conclusión:** `paleta-colores.md` es una buena base técnica pero debe **evolucionar a v2** (esta guía) para que web e Instagram sean la misma marca. No se toca el logo.

---

## 4. Sistema cromático propuesto — MiLocalWeb v2 (flat-orgánico)

> Conserva los inmutables del logo. Añade el bosque como primario real. Todo tiene token CSS y uso cerrado.

### 4.1 Core inmutable (del logo — no se toca)

| Token | HEX | Uso sagrado |
|---|---|---|
| `--mlw-verde-marca` | `#5A9939` | Logo, acentos luminosos, hover claro, ilustraciones. Nunca titulares pequeños sobre blanco. |
| `--mlw-naranja-marca` | `#EF6015` | Base oficial naranja (impresión). En digital permitimos variante más viva `--mlw-naranja-vivo` para pantallas. |

### 4.2 Escala bosque (nueva protagonista)

| Token | HEX | Nota vs. paleta vieja | Uso |
|---|---|---|---|
| `--mlw-bosque-950` | `#0B2816` | nuevo | Footer profundo, texto sobre mint. |
| `--mlw-bosque-900` | `#123F24` | sustituye a `verde-900 #1B3A0F` (más frío/azulado) | Titulares H1/H2, pills, fondos primarios — **es el verde de las promos**. |
| `--mlw-bosque-700` | `#164A2B` | sustituye a `verde-700 #2D5A1A` | Fondos, barras, hovers oscuros. |
| `--mlw-bosque-600` | `#1D5E36` | nuevo puente | Hover sutil sobre bosque. |

> Si no querés romper compat, mantené `verde-900/700` como alias legacy y usá `bosque-*` para todo lo nuevo. En 2026+ bosque pasa a ser primario.

### 4.3 Escala marca luminosa (se conserva)

| Token | HEX |
|---|---|
| `--mlw-verde-500` | `#5A9939` (base marca) |
| `--mlw-verde-400` | `#6EB348` |
| `--mlw-verde-300` | `#7BC352` (hover claro marca) |
| `--mlw-verde-200` | `#9BD97A` |
| `--mlw-verde-100` | `#C8F0B0` |
| `--mlw-mint-50` | `#EEF5EA` | nuevo: fondo trama diagonal, como en promo 3 |
| `--mlw-mint-100` | `#E0EFE0` | |

### 4.4 Escala naranja (viva digital)

| Token | HEX | Uso |
|---|---|---|
| `--mlw-naranja-vivo` | `#FF6A00` | CTAs, “TRAEN CLIENTES”, subrayados, badge. Más punchy que `#EF6015` en pantalla. Guardar `#EF6015` para print. |
| `--mlw-naranja-500` | `#EF6015` | Base oficial. |
| `--mlw-naranja-300` | `#FF8A45` | Hover. |
| `--mlw-naranja-100` | `#FFD6BD` | Fondos suaves. |

### 4.5 Neutros

| Token | Valor | Uso |
|---|---|---|
| `--mlw-negro` | `#1A1A1A` | Body (mejor que `#1E1E1E`, más contraste). |
| `--mlw-gris-700` | `#4A4A4A` | Secundario |
| `--mlw-gris-500` | `#7A7A7A` | Muted |
| `--mlw-gris-300` | `#D9D9D9` | Bordes |
| `--mlw-blanco` | `#FFFFFF` | Fondo default (no más glass default) |
| `--mlw-glass` | `rgba(255,255,255,0.72)` + `blur(12px)` | **Solo variante** para cards secundarias |

### 4.6 Reglas de uso del color

1. **Blanco 55-60%** del viewport siempre. Verde bosque 25-30%. Naranja máx. 10% y solo en puntos de conversión.
2. **Titulares siempre bosque** (`--mlw-bosque-900`), nunca `#5A9939`. `#5A9939` solo para highlights inline, glows o hover.
3. **Nunca degradado verde→naranja** (marrón). Si necesitás gradiente, usá `bosque-900 → bosque-700` o `blanco → mint-50`.
4. **CTAs:** Primario = bosque sólido con texto blanco. Secundario = naranja-vivo sólido. Terciario = outline bosque sobre blanco. Sin glass en CTAs.
5. **Subrayado corto naranja** (28-40px, 3px alto, `border-radius: 999px`) bajo H1 como en promo 1 — signature de marca.
6. Contraste AA: texto chico sobre mint/blanco → bosque-900. Nunca naranja ni verde marca puro para body.

### 4.7 Variables CSS v2 (copiar/pegar — reemplaza/aumenta `:root` actual)

```css
:root {
  /* Marca inmutable */
  --mlw-verde-marca: #5A9939;
  --mlw-naranja-marca: #EF6015;

  /* Bosque — nuevo primario real (promo) */
  --mlw-bosque-950: #0B2816;
  --mlw-bosque-900: #123F24;
  --mlw-bosque-700: #164A2B;
  --mlw-bosque-600: #1D5E36;

  /* Escala marca luminosa (compat con paleta vieja) */
  --mlw-verde-500: #5A9939;
  --mlw-verde-400: #6EB348;
  --mlw-verde-300: #7BC352;
  --mlw-verde-200: #9BD97A;
  --mlw-verde-100: #C8F0B0;
  --mlw-mint-50: #EEF5EA;
  --mlw-mint-100: #E0EFE0;

  /* Naranja vivo digital */
  --mlw-naranja-vivo: #FF6A00;
  --mlw-naranja-500: #EF6015;
  --mlw-naranja-300: #FF8A45;
  --mlw-naranja-100: #FFD6BD;

  /* Neutros */
  --mlw-negro: #1A1A1A;
  --mlw-gris-700: #4A4A4A;
  --mlw-gris-500: #7A7A7A;
  --mlw-gris-300: #D9D9D9;
  --mlw-blanco: #FFFFFF;

  /* Glass — solo variante secundaria */
  --mlw-glass: rgba(255,255,255,0.72);
  --mlw-glass-strong: rgba(255,255,255,0.88);

  /* Aliases semánticos v2 — CAMBIO CLAVE */
  --mlw-color-primario: var(--mlw-bosque-900);
  --mlw-color-primario-hover: var(--mlw-bosque-600);
  --mlw-color-marca: var(--mlw-verde-marca);
  --mlw-color-acento: var(--mlw-naranja-vivo);
  --mlw-color-acento-hover: var(--mlw-naranja-300);
  --mlw-texto: var(--mlw-negro);
  --mlw-texto-muted: var(--mlw-gris-500);
  --mlw-fondo: var(--mlw-blanco);
  --mlw-fondo-trama: var(--mlw-mint-50);

  /* Shapes */
  --mlw-radius-pill: 999px;
  --mlw-radius-card: 20px;
  --mlw-radius-blob: 32px;
}
```

---

## 5. Tipografía

### 5.1 Diagnóstico

Actual: `system-ui` — neutra pero sin personalidad, no reproduce las promos (geométrica, bold, condensada en display). Promo usa sans geométrica con boca grande, ascendentes contenidos, “a” doble piso.

### 5.2 Sistema propuesto

| Rol | Fuente recomendada (Google Fonts) | Pesos | Uso |
|---|---|---|---|
| **Display / Impact** | **Poppins** Black/ExtraBold (cond. visual) — alt: **Montserrat ExtraBold 800** | 800, 900 | “TRAEN CLIENTES”, números grandes, badges. `text-transform: uppercase; letter-spacing: -0.02em; line-height: 0.9` |
| **Titulares H1-H3** | **Poppins** (o Montserrat) | 700, 800 | “Tu negocio también necesita estar online”, “¿Tu negocio aparece...?” — `letter-spacing: -0.015em` |
| **Subtítulos / pills / nav** | **Poppins** SemiBold / **Inter** SemiBold | 600 | Pills verdes, menú, “SOLUCIONES DIGITALES PARA TU NEGOCIO” |
| **Body / UI** | **Inter** | 400, 500, 600 | Párrafos, cards, tabla, footer — óptima en pantalla chica |
| **Alternativa 100% compatible** | **Nunito Sans** 700-900 para titulares + **Inter** body — más amable/redondeada si Poppins se siente dura |

> **Elección primaria: Poppins + Inter.** Poppins es la que más se parece a la promo (geometría, “g” y “a” exactas). Montserrat es alternativa válida si ya está en uso.

**Carga recomendada:**
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">
```
```css
body { font-family: 'Inter', system-ui, sans-serif; }
h1, h2, h3, .display, .plan-name, .brand-wordmark { font-family: 'Poppins', sans-serif; }
.display--impact { font-weight: 900; text-transform: uppercase; letter-spacing: -0.03em; }
```

### 5.3 Escala tipográfica (desktop / mobile)

| Nivel | Size desktop | Size mobile | Weight | Color | Ejemplo promo |
|---|---|---|---|---|---|
| Display impact | 64-82px | 38-44px | 900 | naranja-vivo | TRAEN CLIENTES |
| H1 | 40-48px | 28-32px | 800 | bosque-900 | ¿Tu negocio aparece...? |
| H2 | 28-32px | 22-24px | 700 | bosque-900 | SOLUCIONES DIGITALES |
| H3/card | 18-20px | 16-18px | 600-700 | bosque-900 | HOSTING / DOMINIOS |
| Body | 16px | 15px | 400-500 | negro / gris-700 | párrafos |
| Caption | 13-14px | 12-13px | 400 | gris-500 | “Diseño moderno y responsive” |
| Pill/CTA | 15-16px | 14px | 600-700 | blanco | “Visibilidad en Google Maps” |

**Detalle signature:** subrayado naranja corto bajo H1 + punto naranja al final (como promo 1). Implementado como `::after` de 32px × 3px.

---

## 6. Sistema estético — formas, patrones, composición

### 6.1 Blobs / Waves (la forma madre)

Es la firma de la marca. No es decoración: es **contenedor**.

- **Blob hero:** `border-radius: 32px 0 0 32px` o curva SVG orgánica. Siempre sólido (verde bosque o naranja vivo), nunca degradado. Se desborda del viewport -10% para dar dinamismo.
- **Wave footer/header:** curva suave única (no zigzag). En web, usar como separador de sección: `height: 56-80px`, color bosque-900, curva con `border-radius: 50% 50% 0 0 / 100% 100% 0 0`.
- **SVG base sugerido (reutilizable):**
```svg
<!-- blob organic top-right -->
<svg viewBox="0 0 400 200" aria-hidden="true">
  <path d="M 260 0 C 340 40 400 80 400 160 L 400 0 Z" fill="currentColor"/>
</svg>
<!-- wave bottom -->
<svg viewBox="0 0 1440 80" preserveAspectRatio="none">
  <path d="M0 40 C 360 80 1080 0 1440 40 L1440 80 L0 80 Z" fill="currentColor"/>
</svg>
```
Poner el blob con `position: absolute; color: var(--mlw-bosque-900); opacity: 1; pointer-events: none;`

### 6.2 Dot-grid

- Grilla de puntos 4×4 o 5×4, `dot 5px`, `gap 12px`, `border-radius: 50%`.
- Color: blanco 95% sobre bosque; bosque 30% sobre naranja; mint 40% sobre blanco.
- Ubicación: esquina sup-der del blob naranja o verde. Nunca centrada. Opacidad 0.9-1.
- En CSS puro: repetir con `radial-gradient` o SVG inline. En Figma: componente `dot-grid`.

### 6.3 Arco fino / línea sutil

Trazo 1-1.5px, color `naranja-vivo 25%` o `verde-marca 15%`. Curva amplia (radio 200-400px). Solo 1-2 por pantalla. Su función es “aire” — no debe competir con contenido.

### 6.4 Pills

- `border-radius: 999px; padding: 12px 22px; font-weight: 600;`
- Pill bosque: `background: var(--mlw-bosque-900); color: #fff;`
- Pill naranja: `background: var(--mlw-naranja-vivo); color: #fff;`
- Pill outline: `background: #fff; color: var(--mlw-bosque-900); border: 1.5px solid var(--mlw-bosque-900);`
- Para tags largos (como “DISEÑO QUE CONVIERTE • ...”) usar pill bosque al 100% ancho con `font-size: 13px; letter-spacing: 0.04em; text-transform: uppercase;`

### 6.5 Iconografía

Migrar a **outline consistente**: `stroke: 2px, linecap: round, linejoin: round`, color bosque-900 sobre círculo blanco con borde `1.5px solid #E6E6E6`. Tamaño: contenedor 56px, icono 24-26px. Hover: fondo `mint-50`. Mantener la fila de 9 servicios de promo 1 como referencia para el grid de servicios de la web.

### 6.6 Sombras y elevación (flat, no glass)

Las promos no usan blur. La web debe bajar el glass:

- Card default: `box-shadow: 0 2px 12px rgba(18,63,36,0.06); border: 1px solid #E8E8E8; background: #fff;`
- Card hover: `transform: translateY(-4px); box-shadow: 0 8px 24px rgba(18,63,36,0.10);`
- Solo cards internas muy secundarias pueden usar glass + blur.

### 6.7 Composición y grilla

- Máx ancho 1100px (se mantiene).
- Ratio blanco/aire: padding vertical sección 64px desktop / 40px mobile (hoy está bien).
- Toda sección inicia con H2 bosque centrado + micro-label naranja arriba (opcional) + subrayado naranja opcional.
- Fotografía: si se usa, recorte con esquina blob (no rectángulo puro). Sombra suave `0 12px 32px rgba(0,0,0,0.12)`.

---

## 7. Qué cambia concretamente en la web

Checklist de migración `styles.css` → v2 (orden sugerido):

- [ ] **1. Tipografía:** agregar Poppins + Inter, redefinir `body` y `h1-h3`.
- [ ] **2. Tokens:** agregar bloque v2 de §4.7, remapear aliases primario → bosque. Mantener legacy como alias por 1 sprint.
- [ ] **3. Hero:** reemplazar degradado neón por `background: #fff` + blob verde bosque sup-der + blob naranja sup-izq + dot-grid + pattern diagonal mint 4%. Pasar H1 a bosque-900 (no blanco), CTA primario bosque-900, secundario outline bosque. Conservar animación solo para dots si se desea, retirar `hero-twinkle` neón.
- [ ] **4. Shapes globales:** crear utilidades `.blob`, `.wave-divider`, `.dot-grid`, `.underline-naranja`, `.pill`.
- [ ] **5. Navbar:** fondo blanco sólido (no glass-strong), `border-bottom: 1px solid #E9E9E9`, hover link bosque-600. Logo sin cambios.
- [ ] **6. Cards (why / plans / extras / tabla):** pasar de glass a `background: #fff; border: 1px solid #E8E8E8; shadow suave`. `plan-destacado` borde `2px solid var(--mlw-naranja-vivo)` (está bien) pero fondo blanco no glass.
- [ ] **7. Iconos:** pasar `why-icon` de degradado a `background: var(--mlw-mint-50); color: var(--mlw-bosque-900); border: 1px solid #E0EFE0` con icono outline.
- [ ] **8. Footer:** mantener bosque profundo pero simplificar: `background: var(--mlw-bosque-950)` sólido, retirar radial neón, mantener wave superior blanca.
- [ ] **9. Accesibilidad:** validar contraste bosque-900 sobre blanco (pasa AAA) y naranja-vivo solo para CTA grande, no body.

---

## 8. Componentes de referencia (HTML/CSS listo)

### Pill bosque con icono (como promo 2)
```html
<a class="pill pill--bosque" href="#">
  <span class="pill__icon" aria-hidden="true">📍</span>
  Visibilidad en Google Maps
</a>
```
```css
.pill { display:inline-flex; align-items:center; gap:10px; border-radius:999px; padding:12px 20px; font-weight:700; font-family:'Poppins',sans-serif; }
.pill--bosque { background:var(--mlw-bosque-900); color:#fff; }
.pill__icon { width:32px; height:32px; border-radius:50%; background:rgba(255,255,255,0.16); display:grid; place-items:center; }
```

### Dot-grid decorativo
```css
.dot-grid { width: 56px; height: 56px; background-image: radial-gradient(circle, currentColor 2.5px, transparent 2.5px); background-size: 14px 14px; color: rgba(255,255,255,0.95); }
.dot-grid--on-orange { color: var(--mlw-bosque-900); opacity: 0.35; }
```

### Subrayado signature bajo H1
```css
.h1--with-accent::after { content:''; display:block; width:36px; height:3px; background:var(--mlw-naranja-vivo); border-radius:999px; margin-top:10px; }
.h1--with-accent::before { content:''; display:inline-block; width:6px; height:6px; background:var(--mlw-naranja-vivo); border-radius:50%; margin-left:8px; vertical-align:middle; }
```

---

## 9. Prompts base para IA generativa (Figma / Midjourney / DALL·E / Firefly)

> Copiar tal cual. Ya incluyen paleta, tipografía y shapes para que cualquier generación salga on-brand.

### Prompt maestro (imagen promo nueva)
```
Flat, modern, organic-minimal promo for "MiLocalWeb — más visibilidad, más clientes", white background 60%, forest green #123F24 for headlines and pills, vivid orange #FF6A00 only for CTA and accent dot, mint #EEF5EA subtle diagonal pattern at 5% opacity, large organic blob shape in forest green or vivid orange overflowing the canvas, 4x4 dot grid (5px dots) on blob corner, thin 1px orange arc, pill-shaped CTAs (border-radius 999px), geometric sans font Poppins bold 800 for headlines, Inter for body, line icons with 2px stroke rounded caps in forest green on white circles, clean mockup of laptop and phone with soft shadow, ultra clean, high contrast, no gradients, no glassmorphism, no 3D, no neon, print-ready flat vector style, 1080x1350, 8k
```

### Prompt negativo
```
no gradients, no glass, no blur, no neon, no dark background, no stock photo clutter, no serif fonts, no brown, no yellow, no purple
```

### Prompt para web/hero (background)
```
Clean website hero background, pure white base, organic blob shape forest green #123F24 at top right overflowing, vivid orange #FF6A00 blob at top corner, subtle mint diagonal pattern 5% opacity, 4x4 white dot grid on green blob, thin 1px orange arc line, minimal, flat, vector, no text
```

### Prompt para iconos (9 servicios)
```
Set of 9 minimal line icons, 2px stroke, rounded caps, forest green #123F24 on white circular background with thin light gray border, icons: desktop monitor, shopping cart, Google G, Google Maps pin, Instagram+Facebook, cloud upload, globe, envelope, headset with mic, flat vector, consistent stroke weight, 512x512 each, no fill, no color
```

---

## 10. Do / Don't

| Do | Don't |
|---|---|
| Blanco como protagonista, blobs sólidos recortando esquinas | Fondos oscuros completos o degradados neón ocupando 100% |
| Titulares bosque-900, naranja solo para verbo/CTA/subrayado | Naranja como fondo de sección o titulares chicos |
| Pills 999px, dot-grid 4×4 en esquina, arcos 1px | Bordes 14px + glass + blur en todo |
| Poppins 700-900 + Inter body, tracking apretado en display | System-ui o serif, todo regular |
| Iconos outline mismo peso | Mix sólido/outline o multicolor |
| Subrayado naranja corto signature | Subrayados largos o arcoíris |
| “Más visibilidad, más clientes” como claim paraguas | Claims genéricos “soluciones digitales” sin beneficio |

---

## 11. Referencias y archivos

- Fuente de verdad estética: `assets/img/instagram/promo 1.jpg`, `promo 2.jpg`, `promo 3.jpg`
- Paleta previa: `docs/paleta-colores.md` (v1 glass — queda como legacy/variante secundaria)
- CSS actual: `assets/css/styles.css` (`:root` y `.hero` son los puntos de mayor divergencia)
- Isotipo: pin naranja con aro verde + wordmark MiLocalWeb (MiLocal verde bosque / Web naranja) — no se modifica

---

## 12. Siguiente paso recomendado

1. Aprobar esta guía (v2) como base.
2. Actualizar `docs/paleta-colores.md` a v2 con el bloque de §4.7 y nota de deprecación de glass como default.
3. Sprint 1: tipografía + tokens + navbar + footer (cambio de bajo riesgo).
4. Sprint 2: hero + cards + iconos + shapes (blob/wave/dot-grid como componentes).
5. Generar con el prompt maestro 2-3 variantes de hero y 1 set de iconos outline para validar antes de codear.

*Guía generada el 2026 — lista para usar por diseñador, dev o IA sin contexto adicional.*
