# Paleta de Colores — MiLocalWeb

> Manifiesto de color 2026 para la landing y futuros productos digitales.
> Se conservan los dos colores principales extraídos del logo; el resto de
> la escala se rediseñó para una estética glass, luminosa y actual.

---

## 1. Colores principales de marca (inmutables)

Estos son los únicos colores sagrados. No se modifican.

### Verde MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#5A9939` |
| **RGB** | `90, 153, 57` |
| **HSL** | `hsl(99, 46%, 41%)` |
| **Uso** | Identidad primaria: logo, acciones principales, enlaces, éxito. |

### Naranja MiLocalWeb

| Propiedad | Valor |
|-----------|-------|
| **HEX** | `#EF6015` |
| **RGB** | `239, 96, 21` |
| **HSL** | `hsl(21, 87%, 51%)` |
| **Uso** | Acento energético: CTAs destacados, badges, highlights, alertas suaves. |

---

## 2. Escala derivada — versión luminosa / glass

La escala antigua usaba tonos oscuros para hover (`-70`), lo que apagaba los
botones y los hacía ver barrosos. La nueva escala prioriza la luminosidad:
los hovers suben de brillo, no bajan.

### Escala Verde

| Token | HEX | Uso |
|-------|-----|-----|
| `verde-900` | `#1B3A0F` | Texto de máximo énfasis sobre fondo claro. |
| `verde-700` | `#2D5A1A` | Fondos oscuros, footer, hero profundo. |
| `verde-500` | `#5A9939` | **Base marca**. |
| `verde-300` | `#7BC352` | Hover claro sobre verde base. |
| `verde-200` | `#9BD97A` | Glows, acentos luminosos, estados activos. |
| `verde-100` | `#C8F0B0` | Fondos glass verdes muy suaves. |
| `verde-glass` | `rgba(90, 153, 57, 0.15)` | Cards, badges y superficies glass. |

### Escala Naranja

| Token | HEX | Uso |
|-------|-----|-----|
| `naranja-900` | `#7A2E08` | Texto de énfasis sobre fondo claro. |
| `naranja-700` | `#A7470D` | Fondos oscuros de alerta o acento profundo. |
| `naranja-500` | `#EF6015` | **Base marca**. |
| `naranja-300` | `#FF8A45` | Hover claro sobre naranja base. |
| `naranja-200` | `#FFAE7A` | Glows, highlights, estados activos. |
| `naranja-100` | `#FFD6BD` | Fondos glass naranjas muy suaves. |
| `naranja-glass` | `rgba(239, 96, 21, 0.15)` | Cards, badges y superficies glass. |

### Neutros glass

| Token | Valor | Uso |
|-------|-------|-----|
| `negro-suave` | `#1E1E1E` | Texto principal. |
| `gris-700` | `#4A4A4A` | Texto secundario. |
| `gris-500` | `#8A8A8A` | Captions, metadatos. |
| `gris-300` | `#D4D4D4` | Bordes suaves. |
| `blanco` | `#FFFFFF` | Fondo puro. |
| `blanco-glass` | `rgba(255, 255, 255, 0.72)` | Superficies glass sobre fondos vibrantes. |
| `blanco-glass-strong` | `rgba(255, 255, 255, 0.88)` | Header, dropdowns, superficies que necesitan más opacidad. |
| `negro-glass` | `rgba(30, 30, 30, 0.55)` | Superficies glass oscuras. |

---

## 3. Principios de combinación

1. **Hover = luminosidad ascendente.** Nunca oscurecer un botón de marca;
   siempre iluminarlo (`verde-500` → `verde-300`, `naranja-500` → `naranja-300`).
2. **No mezclar verde y naranja en un degradado.** La transición entre ambos
   tiende a pasar por un marrón fangoso. Usar uno u otro como protagonista, o
   separarlos con blanco/negro entre medias.
3. **Gradientes recomendados:**
   - Hero: `verde-700 → verde-500 → verde-200`.
   - Acento sutil: `blanco → verde-glass` o `blanco → naranja-glass`.
   - Footer oscuro: `verde-900 → verde-700`.
4. **Glassmorphism:** usar `backdrop-filter: blur(12px)`, bordes
   `rgba(255, 255, 255, 0.35)` sobre fondos vibrantes y sombras muy suaves.
5. **Contraste accesible:** para texto pequeño sobre fondo claro usar
   `verde-900` o `naranja-900`; nunca `verde-500` ni `naranja-500` puros.

---

## 4. Variables CSS actualizadas

```css
:root {
  /* Marca */
  --mlw-verde-900: #1B3A0F;
  --mlw-verde-700: #2D5A1A;
  --mlw-verde-500: #5A9939;
  --mlw-verde-300: #7BC352;
  --mlw-verde-200: #9BD97A;
  --mlw-verde-100: #C8F0B0;
  --mlw-verde-glass: rgba(90, 153, 57, 0.15);

  --mlw-naranja-900: #7A2E08;
  --mlw-naranja-700: #A7470D;
  --mlw-naranja-500: #EF6015;
  --mlw-naranja-300: #FF8A45;
  --mlw-naranja-200: #FFAE7A;
  --mlw-naranja-100: #FFD6BD;
  --mlw-naranja-glass: rgba(239, 96, 21, 0.15);

  /* Neutros */
  --mlw-negro: #1E1E1E;
  --mlw-gris-700: #4A4A4A;
  --mlw-gris-500: #8A8A8A;
  --mlw-gris-300: #D4D4D4;
  --mlw-blanco: #FFFFFF;
  --mlw-blanco-glass: rgba(255, 255, 255, 0.72);
  --mlw-blanco-glass-strong: rgba(255, 255, 255, 0.88);
  --mlw-negro-glass: rgba(30, 30, 30, 0.55);

  /* Alias semánticos */
  --mlw-color-primario: var(--mlw-verde-500);
  --mlw-color-primario-hover: var(--mlw-verde-300);
  --mlw-color-acento: var(--mlw-naranja-500);
  --mlw-color-acento-hover: var(--mlw-naranja-300);
  --mlw-texto: var(--mlw-negro);
  --mlw-texto-muted: var(--mlw-gris-500);
  --mlw-fondo: var(--mlw-blanco);
  --mlw-fondo-glass: var(--mlw-blanco-glass);
}
```

---

## 5. Uso del logo

- Sobre fondos claros: versiones verde/naranja.
- Sobre fondos oscuros: versiones blanco/negro.
- Sobre fondos naranjas: versiones verdes.
- Sobre fondos verdes: versiones naranjas.
- Versiones transparentes para usar sobre glass.

---

## 6. Pendientes

- [ ] Validar contraste AA con las nuevas escalas en la landing real.
- [ ] Definir colores de error, warning e info para la app NocoBase (Fase 2).
