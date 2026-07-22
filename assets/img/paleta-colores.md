# Paleta de Colores — MiLocalWeb

> Referencia oficial de la paleta corporativa extraída del logo
> `MI LOCAL WEB VERDE NARANJA.webp` (carpeta `webp/Principales/`).
> Validada cruzando con `LOGO VERDE NARANJA.webp` de la misma carpeta.
>
> Los valores fueron obtenidos por muestreo directo de los píxeles del
>archivo y corresponden al verde del isotipo y al naranja del tipográfico.

---

## 1. Colores principales de marca

### Verde MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#5A9939` |
| **RGB** | `90, 153, 57` |
| **HSL** | `hsl(99, 46%, 41%)` |
| **Uso** | Isologotipo, íconos, acentos primarios, botones de acción, enlaces, fondo de headers de tarjetas. |

Muestras:

```
█ #5A9939  Verde MiLocalWeb (base)
```

### Naranja MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#EF6015` |
| **RGB** | `239, 96, 21` |
| **HSL** | `hsl(21, 87%, 51%)` |
| **Uso** | Tipográfico del logotipo, llamadas de atención, CTAs secundarios, highlights, bullets activos. |

Muestras:

```
█ #EF6015  Naranja MiLocalWeb (base)
```

---

## 2. Tonos derivados (escala)

Uso: jerarquía visual, hovers, estados disabled, fondos de sección, gradientes.

### Escala Verde

| Token | HEX | Uso sugerido |
|-------|-----|---------------|
| verde-50  | `#2D4C1C` | Sombras profundas, texto sobre fondo claro cuando se necesita énfasis |
| verde-70  | `#3F6B28` | Hover oscuro sobre verde base |
| verde-85  | `#4C8230` | Border / outline de foco sobre verde |
| **verde-100** | `#5A9939` | **Base marca** |
| verde-115 | `#67B042` | Hover claro sobre verde base |
| verde-130 | `#75C74A` | Estados activos, badges glow |

### Escala Naranja

| Token | HEX | Uso sugerido |
|-------|-----|---------------|
| naranja-50  | `#78300A` | Texto oscuro sobre fondo naranja (accesibilidad) |
| naranja-70  | `#A7430F` | Hover oscuro sobre naranja base |
| naranja-85  | `#CB5212` | Border / outline de foco sobre naranja |
| **naranja-100** | `#EF6015` | **Base marca** |
| naranja-115 | `#FF6E18` | Hover claro sobre naranja base |
| naranja-130 | `#FF7D1B` | Estados activos, badges glow |

---

## 3. Neutros de acompañamiento

No son parte estricta del logo, pero son los tonos que acompañan
naturalmente la paleta (derivados del fondo y el negro del isologotipo de
otras versiones).

| Token | HEX | Uso sugerido |
|-------|-----|---------------|
| `negro-suave` | `#1E1E1E` | Texto principal — negro puro queda agresivo, este es más cálido |
| `gris-medio` | `#707070` | Texto secundario, captions, bordes |
| `gris-claro` | `#D0D0D0` | Borders, divisores |
| `blanco-off` | `#F8F8F2` | Fondo de tarjetas — blanco puro `#FFFFFF` pega con el naranja |

---

## 4. Combinaciones recomendadas

| Fondo | Texto | Contraste (aprox.) | Ok AA? |
|-------|-------|---------------------|--------|
| `#FFFFFF` blanco | `#5A9939` verde | 3.0:1 | Solo texto grande — usar `verde-70` `#3F6B28` para texto chico |
| `#FFFFFF` blanco | `#EF6015` naranja | 3.0:1 | Solo texto grande — usar `naranja-70` `#A7430F` para texto chico |
| `#5A9939` verde | `#FFFFFF` blanco | 3.6:1 | AA texto grande; texto chico próximo a límite |
| `#EF6015` naranja | `#FFFFFF` blanco | 3.0:1 | Solo texto grande; texto chico requiere `naranja-70` de fondo |
| `#1E1E1E` negro suave | `#F8F8F2` blanco off | 16:1 | AAA — cualquier tamaño |
| `#5A9939` verde | `#1E1E1E` texto | 5.4:1 | AA — texto normal |
| `#EF6015` naranja | `#1E1E1E` texto | 5.0:1 | AA — texto normal |

> **Nota accesibilidad:** verde y naranja base tienen contraste borderline
> sobre blanco para texto pequeño. Para body text usar siempre los tonos -70
> (`#3F6B28` / `#A7430F`) o el negro suave sobre fondo claro.

---

## 5. Variables CSS (para usar en web/app)

```css
:root {
  /* Colores de marca */
  --mlw-verde: #5A9939;
  --mlw-verde-50: #2D4C1C;
  --mlw-verde-70: #3F6B28;
  --mlw-verde-85: #4C8230;
  --mlw-verde-115: #67B042;
  --mlw-verde-130: #75C74A;

  --mlw-naranja: #EF6015;
  --mlw-naranja-50: #78300A;
  --mlw-naranja-70: #A7430F;
  --mlw-naranja-85: #CB5212;
  --mlw-naranja-115: #FF6E18;
  --mlw-naranja-130: #FF7D1B;

  /* Neutros */
  --mlw-negro: #1E1E1E;
  --mlw-gris-medio: #707070;
  --mlw-gris-claro: #D0D0D0;
  --mlw-blanco: #F8F8F2;

  /* Alias semánticos */
  --mlw-color-primario: var(--mlw-verde);
  --mlw-color-acento: var(--mlw-naranja);
  --mlw-texto: var(--mlw-negro);
  --mlw-fondo: var(--mlw-blanco);
}
```

---

## 6. Variables Tailwind (extensión del config)

```js
module.exports = {
  theme: {
    extend: {
      colors: {
        mlw: {
          verde: {
            DEFAULT: '#5A9939',
            50: '#2D4C1C',
            70: '#3F6B28',
            85: '#4C8230',
            115: '#67B042',
            130: '#75C74A',
          },
          naranja: {
            DEFAULT: '#EF6015',
            50: '#78300A',
            70: '#A7430F',
            85: '#CB5212',
            115: '#FF6E18',
            130: '#FF7D1B',
          },
          negro: '#1E1E1E',
          'gris-medio': '#707070',
          'gris-claro': '#D0D0D0',
          blanco: '#F8F8F2',
        },
      },
    },
  },
};
```

---

## 7. SCSS / Sass

```scss
// MiLocalWeb — Paleta corporativa
$mlw-verde: #5A9939;
$mlw-verde-osc: #3F6B28;
$mlw-verde-claro: #67B042;
$mlw-verde-profundo: #2D4C1C;

$mlw-naranja: #EF6015;
$mlw-naranja-osc: #A7430F;
$mlw-naranja-claro: #FF6E18;
$mlw-naranja-profundo: #78300A;

$mlw-negro: #1E1E1E;
$mlw-gris-medio: #707070;
$mlw-gris-claro: #D0D0D0;
$mlw-blanco: #F8F8F2;
```

---

## 8. Uso del logo

- **Versión principal:** `MI LOCAL WEB VERDE NARANJA.webp`
  (carpeta `webp/Principales/`).
- **Versión cuadrada (isologotipo):**
  `ISOLOGOTIPO CUADRADO VERDE NARANJA.webp` (carpeta `webp/Principales/`).
- Sobre fondos claros: usar estas versiones verde/naranja.
- Sobre fondos oscuros: usar versiones blanco/negro de la carpeta
  `webp/Blanco y Negro/`.
- Sobre fondos naranjas: usar versiones `webp/Verdes/` (solo verde).
- Sobre fondos verdes: usar versiones `webp/Naranjas/` (solo naranja).
- Versiones transparentes disponibles en `webp/Transparentes/`.

---

## 9. Metodología de extracción

Colores extraídos por muestreo directo de los píxeles del archivo
`MI LOCAL WEB VERDE NARANJA.webp` con Python (Pillow). Se filtraron
píxeles transparentes y de fondo blanco. Se validó cruzando contra
`LOGO VERDE NARANJA.webp` de la misma carpeta — el pico de frecuencia
coincide entre ambos archivos, confirmando `#5A9939` (verde) y
`#EF6015` (naranja) como colores base de marca.

**Fecha de extracción:** 2026-07-18
**Autor:** Asistente IA + socio web MiLocalWeb

---

## 10. Pendientes

- [ ] Validar manualmente contra el origen de diseño (Figma / Illustrator)
  si se tiene el archivo fuente — esto confirmaría el color exacto del
  diseñador y no solo el del render webp.
- [ ] Definir color de **error** (suele ser rojo `#D32F2F` pero no está en
  la paleta marca — acordar).
- [ ] Definir color de **éxito**, **warning**, **info** si se necesita para
  la app NocoBase (Fase 2).
- [ ] Confirmar contraste AA con fuentes finales elegidas para la web
  (peso, tamaño mínimo body).