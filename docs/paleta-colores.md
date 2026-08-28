# Paleta de Colores — MiLocalWeb

> Guía de estilo visual 2026 — versión 2.
> Se conservan los colores sagrados del logo; la nueva escala "bosque" asume
> el rol de primario real, mint aporta aire a los fondos, y el naranja vivo
> digital refuerza los acentos. El glass pasa a ser una variante secundaria,
> no el default.

---

## 1. Colores principales de marca (inmutables)

Estos son los únicos colores sagrados. No se modifican.

### Verde MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#5A9939` |
| **RGB** | `90, 153, 57` |
| **HSL** | `hsl(99, 46%, 41%)` |
| **Token** | `verde-marca` |
| **Uso** | Logo, identidad primaria, acciones principales, enlaces, éxito. |

### Naranja MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#EF6015` |
| **RGB** | `239, 96, 21` |
| **HSL** | `hsl(21, 87%, 51%)` |
| **Token** | `naranja-marca` |
| **Uso** | Acento energético: CTAs destacados, badges, highlights, alertas suaves. |

---

## 2. Escala primaria real — Bosque

La escala bosque reemplaza al verde base como primario digital. Se reserva el
verde marca para la identidad y momentos de marca explícitos.

| Token | HEX | Uso |
|-------|-----|-----|
| `bosque-950` | `#0B2816` | Footer profundo, texto sobre mint. |
| `bosque-900` | `#123F24` | Titulares H1/H2, pills, fondos primarios — verde de las promos. |
| `bosque-700` | `#164A2B` | Fondos, barras, hovers oscuros. |
| `bosque-600` | `#1D5E36` | Hover sutil sobre bosque. |

## 3. Acentos digitales

| Token | HEX | Uso |
|-------|-----|-----|
| `naranja-vivo` | `#FF6A00` | Acento digital: CTAs de alto impacto, highlights, alertas. |
| `naranja-300` | `#FF8A45` | Hover claro sobre naranja vivo. |
| `verde-marca` | `#5A9939` | Color sagrado del logo; acentos de marca puntuales. |
| `naranja-marca` | `#EF6015` | Color sagrado del logo; acentos de marca puntuales. |

## 4. Mint

| Token | HEX | Uso |
|-------|-----|-----|
| `mint-50` | `#EEF5EA` | Fondos de trama, cards suaves, espacios de aire. |
| `mint-100` | `#E0EFE0` | Hover sutil sobre mint, separadores luminosos. |

## 5. Neutros

| Token | HEX | Uso |
|-------|-----|-----|
| `negro` | `#1A1A1A` | Texto principal. |
| `gris-700` | `#4A4A4A` | Texto secundario. |
| `gris-500` | `#7A7A7A` | Captions, metadatos, texto deshabilitado. |
| `gris-300` | `#D9D9D9` | Bordes suaves, divisores. |
| `blanco` | `#FFFFFF` | Fondo puro. |

## 6. Variante secundaria: glass

El glass deja de ser el default y pasa a ser una variante secundaria para
superficies específicas sobre fondos vibrantes.

| Token | Valor | Uso |
|-------|-------|-----|
| `verde-glass` | `rgba(90, 153, 57, 0.15)` | Cards, badges y superficies glass verdes. |
| `naranja-glass` | `rgba(239, 96, 21, 0.15)` | Cards, badges y superficies glass naranjas. |
| `blanco-glass` | `rgba(255, 255, 255, 0.72)` | Superficies glass sobre fondos vibrantes. |
| `blanco-glass-strong` | `rgba(255, 255, 255, 0.88)` | Header, dropdowns, superficies que necesitan más opacidad. |
| `negro-glass` | `rgba(26, 26, 26, 0.55)` | Superficies glass oscuras. |

---

## 7. Principios de combinación

1. **Primario digital = bosque.** Usar `bosque-900` para acciones principales y
   `bosque-600` para hover; reservar `verde-marca` para la identidad.
2. **Hover = luminosidad ascendente.** Nunca oscurecer un botón de marca;
   siempre iluminarlo (`bosque-900` → `bosque-600`, `naranja-vivo` → `naranja-300`).
3. **No mezclar verde y naranja en un degradado.** La transición entre ambos
   tiende a pasar por un marrón fangoso. Usar uno u otro como protagonista, o
   separarlos con blanco/negro entre medias.
4. **Gradientes recomendados:**
   - Hero: `bosque-950 → bosque-900 → bosque-700`.
   - Acento sutil: `blanco → mint-50` o `blanco → verde-glass`.
   - Footer oscuro: `bosque-950 → bosque-900`.
5. **Glassmorphism:** usar `backdrop-filter: blur(12px)`, bordes
   `rgba(255, 255, 255, 0.35)` sobre fondos vibrantes y sombras muy suaves.
   Aplicar solo como variante secundaria, no como default.
6. **Contraste accesible:** para texto pequeño sobre fondo claro usar
   `bosque-900` o `negro`; nunca `verde-marca` ni `naranja-vivo` puros.

---

## 8. Variables CSS actualizadas (v2)

```css
:root {
  /* Colores sagrados de marca */
  --mlw-verde-marca: #5A9939;
  --mlw-naranja-marca: #EF6015;

  /* Escala primaria real: bosque */
  --mlw-bosque-950: #0B2816;
  --mlw-bosque-900: #123F24;
  --mlw-bosque-700: #164A2B;
  --mlw-bosque-600: #1D5E36;

  /* Acentos digitales */
  --mlw-naranja-vivo: #FF6A00;
  --mlw-naranja-300: #FF8A45;

  /* Mint */
  --mlw-mint-50: #EEF5EA;
  --mlw-mint-100: #E0EFE0;

  /* Neutros */
  --mlw-negro: #1A1A1A;
  --mlw-gris-700: #4A4A4A;
  --mlw-gris-500: #7A7A7A;
  --mlw-gris-300: #D9D9D9;
  --mlw-blanco: #FFFFFF;

  /* Variantes secundarias glass */
  --mlw-verde-glass: rgba(90, 153, 57, 0.15);
  --mlw-naranja-glass: rgba(239, 96, 21, 0.15);
  --mlw-blanco-glass: rgba(255, 255, 255, 0.72);
  --mlw-blanco-glass-strong: rgba(255, 255, 255, 0.88);
  --mlw-negro-glass: rgba(26, 26, 26, 0.55);

  /* Alias semánticos v2 */
  --mlw-color-primario: var(--mlw-bosque-900);
  --mlw-color-primario-hover: var(--mlw-bosque-600);
  --mlw-color-marca: var(--mlw-verde-marca);
  --mlw-color-acento: var(--mlw-naranja-vivo);
  --mlw-color-acento-hover: var(--mlw-naranja-300);
  --mlw-texto: var(--mlw-negro);
  --mlw-texto-muted: var(--mlw-gris-500);
  --mlw-fondo: var(--mlw-blanco);
  --mlw-fondo-trama: var(--mlw-mint-50);
}
```

---

## 9. Uso del logo

- Sobre fondos claros: versiones verde/naranja.
- Sobre fondos oscuros: versiones blanco/negro.
- Sobre fondos naranjas: versiones verdes.
- Sobre fondos verdes: versiones naranjas.
- Versiones transparentes para usar sobre glass.

---

## 10. Pendientes

- [ ] Validar contraste AA con las nuevas escalas en la landing real.
- [ ] Definir colores de error, warning e info para la app NocoBase (Fase 2).
