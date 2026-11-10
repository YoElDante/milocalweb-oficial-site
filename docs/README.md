# Documentación — MiLocalWeb

Sitio corporativo de MiLocalWeb (`milocalweb.com.ar`), una landing PHP de una sola URL que presenta servicios de posicionamiento digital y tres planes. Esta carpeta reúne el estado, la arquitectura y el mapa del sitio para lectura humana y para agentes de IA.

> **Veredicto de la auditoría 2026-11-09: NO LISTO — 47/73 ítems aplicables (64,4 %).**
> La documentación y la estructura interna quedaron ordenadas; el producto sigue con P0/P1 de seguridad, SEO y performance abiertos. No interpretar este paquete como un sitio terminado.

## Orden de lectura

1. [Estado actual](estado-actual.md) — veredicto, cumplimiento, SEO y deuda priorizada.
2. [Arquitectura](arquitectura.md) — archivos, flujos, builds y diagramas.
3. [Mapa del sitio](mapa-sitio.md) — rutas, anclas y sitemap.
4. [Resumen de documentación](resumen-documentacion.md) — cambios de esta sesión y cómo verificarlos.

## Documentos existentes

- [SEO — Estado y pendientes 2026](seo-estado-2026.md) — implementado y pendiente de SEO; última actualización 2026-10-19.
- [Checklist de deploy y validación SEO 2026](checklist-deploy-seo-2026.md) — pasos operativos para publicar y validar.
- [Guía de estilo visual 2026](guia-estilo-visual-2026.md) — análisis y propuesta gráfica.
- [Paleta de colores](paleta-colores.md) — tokens y usos de color.
- [Propuesta comercial de planes 2026](propuesta-comercial-planes-2026.md) — especificación comercial y de precios.
- [Google Maps](<google maps.txt>) — enlace, iframe y dirección de la oficina.
- [README raíz](../README.md) — guía humana del proyecto; está desactualizada en rutas y estructura.

## Para una IA

Leer primero las instrucciones globales del workspace (`C:\Users\Vivay\.config\opencode\AGENTS.md`); este proyecto no tiene un `AGENTS.md` propio. Luego leer `estado-actual.md` y `arquitectura.md`.

Reglas mínimas:

- No editar `assets/css/styles.css` ni `assets/js/main.js` a mano: son artefactos generados.
- Editar `assets/css/src/*.css` o `assets/js/main/*.js` y ejecutar `php tools/build-css.php` o `php tools/build-js.php`.
- No reordenar los parciales: el orden define la cascada CSS y el orden de ejecución del IIFE.
- No tocar la clave de Google Maps de `config/config.php:56` sin un plan de rotación y restricción; es el P0 de la auditoría.
- No afirmar que el sitio está listo: los P0/P1 de seguridad, SEO y performance siguen abiertos.
