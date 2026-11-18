# Propuesta Comercial MiLocalWeb — Planes 2026

> Documento de especificación para ajuste de precios, productos, mensaje y estructura de la página de planes en milocalweb.com.ar  
> Fecha: agosto 2026  
> Estado: implementado en index.php, styles.css, main.js y header.php

---

## 1. Resumen ejecutivo

MiLocalWeb deja de vender "una página web barata de pago único" para ofrecer **posicionamiento digital profesional con opción de sitio web propio**.

El producto real que se entrega es:

- Presencia en Google Maps y Google Business Profile.
- Perfiles profesionales de Instagram, Facebook y WhatsApp Business.
- Configuración de Meta Business Suite para autogestión.
- Fotos, diseño gráfico y cartelería física (QR, flyers, tarjetas).
- Opcionalmente, una página web propia con hosting y mantenimiento.

**Mensaje clave para el cliente:** todo el posicionamiento digital le pertenece. Si en algún momento decide no seguir pagando el sitio web, conserva su perfil de Google, sus redes sociales, su Meta Business Suite y toda la configuración realizada. El sitio web es un servicio adicional de presencia online; el posicionamiento es suyo de por vida.

---

## 2. Cambio de filosofía de precios

### Antes
- Pago único, sin mensualidades.
- Precios muy por debajo del mercado.
- El foco estaba en la entrega del sitio, no en el acompañamiento.

### Ahora
- Precio de desarrollo + posicionamiento digital.
- Período de web bonificada.
- Costo mensual de mantenimiento web posterior al período gratuito.
- Garantía de precio fijo durante el primer año.

### Por qué este cambio es defensible
En agosto 2026, los precios de mercado en Argentina son:

| Tipo de servicio | Rango en ARS | Rango en USD |
|------------------|--------------|--------------|
| Landing page básica | $150.000 – $1.200.000 | USD 100 – 800 |
| Sitio institucional (5 secciones) | $400.000 – $900.000 | USD 270 – 600 |
| E-commerce básico | $750.000 – $1.800.000 | USD 500 – 1.200 |
| E-commerce a medida | $1.300.000 – $6.000.000+ | USD 870 – 4.000+ |
| Community manager (2 redes, 12-20 posts/mes) | $150.000 – $600.000/mes | USD 100 – 400/mes |
| Mantenimiento web mensual tipo SaaS | $50.000 – $75.000/mes | USD 35 – 50/mes |

Fuente: referencias de mercado recopiladas agosto 2026 (dólar oficial ~$1.514, dólar blue ~$1.555, inflación anual ~33,8%).

**Conclusión:** los nuevos precios de MiLocalWeb no están por encima del mercado; ubican la oferta en la franja media-baja con un diferencial claro: el cliente no compra solo una web, compra presencia digital profesional y conserva todo lo configurado.

---

## 3. Arquitectura sugerida para la página de planes

### Referencias externas consultadas
Se revisaron patrones de páginas de precios de SaaS y servicios en 2026 (Linear, Slack, Notion, Webflow, Framer, Unbounce, Vercel, Stripe). Los patrones más repetidos y efectivos son:

1. **Tres tarjetas visibles arriba**, una destacada como recomendada.
2. **Cada tarjeta muestra**: nombre, tagline, precio contado, financiación, 3–4 bullets clave y un CTA.
3. **CTA que baja a la sección de detalle** de ese plan, no un botón genérico.
4. **Secciones de detalle por plan** debajo de las tarjetas, con todo lo incluido, beneficios y formas de pago.
5. **FAQ al final** con 5–8 preguntas sobre precio, pagos, cancelación y propiedad.

### Estructura propuesta para `index.php`

```
1. Hero
2. ¿Por qué MiLocalWeb?
3. Tarjetas de planes (INICIAL / VISIBLE / IMPARABLE)
4. Plan INICIAL — detalle completo
5. Plan VISIBLE — detalle completo
6. Plan IMPARABLE — detalle completo
7. Resumen de precios y financiación
8. Lo que conservás para siempre
9. Preguntas frecuentes
10. Contacto
```

### Qué se elimina
- Se quita el cuadro comparativo grande con tilde/checkmarks.
- Se reemplaza por tarjetas simplificadas + secciones de detalle individuales.

---

## 4. Tarjetas simplificadas de planes (sección superior)

Estas tarjetas son el resumen. Cada una termina con un botón que hace scroll suave a la sección de detalle correspondiente (`#plan-inicial`, `#plan-visible`, `#plan-imparable`).

### Tarjeta INICIAL
- **Nombre:** INICIAL
- **Tagline:** "Que te encuentren y te contacten"
- **Precio contado:** $498.000
- **Financiación:** 3 cuotas de $199.000
- **Web:** 2 meses incluidos, luego $50.000/mes
- **Bullets clave:**
  - Google Business Profile configurado.
  - Instagram, Facebook y WhatsApp profesionales.
  - Web propia: `tunegocio.milocalweb.com.ar`.
  - 6 fotos del negocio + hasta 9 de productos.
  - Kit QR para locales o tarjeta digital para profesionales.
- **CTA:** "Conocer plan INICIAL" → scroll a `#plan-inicial`

### Tarjeta VISIBLE
- **Nombre:** VISIBLE
- **Tagline:** "Que te vean y te elijan"
- **Precio contado:** $648.000
- **Financiación:** 4 cuotas de $199.000
- **Web:** 4 meses incluidos, luego $68.000/mes
- **Bullets clave:**
  - Todo lo de INICIAL.
  - Catálogo web con carrito por WhatsApp.
  - Hasta 20 productos + 10 actualizaciones al mes.
  - Fotos de productos + 3 meses de historias programadas.
- **CTA:** "Conocer plan VISIBLE" → scroll a `#plan-visible`

### Tarjeta IMPARABLE (destacado como recomendado)
- **Nombre:** IMPARABLE
- **Tagline:** "Que te prefieran"
- **Precio contado:** $998.000
- **Financiación:** $399.000 + 4 cuotas de $199.000
- **Web:** 6 meses de hosting, mantenimiento y dominio incluidos, luego $78.000/mes
- **Bullets clave:**
  - Todo lo de VISIBLE.
  - Sitio web completo con múltiples secciones.
  - Hasta 50 productos + 20 actualizaciones al mes.
  - 6 meses de publicaciones profesionales en redes.
- **CTA:** "Conocer plan IMPARABLE" → scroll a `#plan-imparable`

> **Nota de diseño:** la tarjeta IMPARABLE debe llevar un badge "Recomendado" y un CTA más prominente, siguiendo el patrón de Slack, Linear y Notion.

---

## 5. Plan INICIAL — detalle completo

### Propósito
Para comercios, profesionales independientes y emprendedores que quieren aparecer en Google, tener redes presentables y un punto de contacto digital sin complicaciones.

### Precio
- **Contado:** $498.000 (mejor precio)
- **Financiado:** 3 cuotas de $199.000 (total $597.000)
- Primera cuota al contratar; siguientes cuotas cada 30 días.

### Web incluida
- Página web propia: `tunegocio.milocalweb.com.ar` (landing o sitio básico según lo acordado).
- Hosting, mantenimiento y actualizaciones incluidos en el precio del plan durante los primeros 2 meses.
- A partir del mes 3: **$50.000/mes** hasta completar 1 año.
- Dominio propio `.com.ar` opcional (consultar costo anual).

### Posicionamiento digital incluido (permanece del cliente)
- Relevamiento completo del negocio.
- Configuración y optimización de Google Business Profile.
- Instagram profesional (bio, foto, links, historias destacadas iniciales).
- Historias de Instagram programadas: 3 por semana durante 1 mes.
- Página de Facebook vinculada.
- Redirección a WhatsApp desde todas tus redes.
- Sesión de fotos del negocio: 6 fotos por dentro y por fuera, editadas y mejoradas.
- Hasta 9 fotos de productos editadas y mejoradas: 3 productos estrella, 3 novedades y 3 ofertas para la web.
- Kit QR A4 plastificado + expositor acrílico para locales físicos, o tarjeta personal digital con PDF imprimible para profesionales.
- Revisión final y entrega.

### Beneficios principales
1. **Aparecés en Google Maps** cuando busquen tu rubro en tu zona.
2. **Tus redes quedan profesionales** desde el primer día.
3. **Tu web queda online** con 2 meses de hosting, mantenimiento y actualizaciones incluidos en el precio del plan.
4. **Todo es tuyo**: las cuentas y configuraciones quedan a tu nombre.

### Inversión del primer año (escenario con web)
- Desarrollo: $498.000
- Mantenimiento: 10 meses × $50.000 = $500.000
- **Total año 1:** $998.000

### CTA
> "Quiero el plan INICIAL" → botón a WhatsApp con mensaje predefinido.

---

## 6. Plan VISIBLE — detalle completo

### Propósito
Para negocios que venden productos físicos y quieren mostrar catálogo online sin integrar pagos electrónicos complejos. Ideal para comercios que atienden por WhatsApp.

### Precio
- **Contado:** $648.000 (mejor precio)
- **Financiado:** 4 cuotas de $199.000 (total $796.000)
- Primera cuota al contratar; siguientes cuotas cada 30 días.

### Web incluida
- Sitio web con catálogo de productos.
- Carrito virtual **sin login**: el cliente arma su lista de productos y, al tocar "Comprar", se abre WhatsApp con el listado listo para enviar al vendedor.
- 4 meses de hosting, mantenimiento y actualizaciones incluidos en el costo del plan (el mes de desarrollo + los 3 meses de las cuotas).
- A partir del mes 4: **$68.000/mes** hasta completar 1 año.
- Subdominio gratuito: `tunegocio.milocalweb.com.ar`.
- Dominio propio `.com.ar` opcional (consultar costo anual).
- Estructura sugerida: inicio, catálogo, ofertas, contacto.

### Productos incluidos
- Carga inicial de hasta **20 productos** con foto y descripción según indicaciones del cliente.
- Durante los 3 meses bonificados: hasta **10 actualizaciones de productos por mes** (cambios de precio, fotos, descripciones, altas o bajas).
- Actualizaciones adicionales: se cotizan como mantenimiento web.

### Posicionamiento digital incluido (permanece del cliente)
- Todo lo del Plan INICIAL.
- Fotos de hasta 20 productos, editadas y mejoradas (las 6 fotos del negocio ya vienen del Plan INICIAL).
- 3 historias destacadas en Instagram.
- 3 meses de historias de Instagram programadas para autopublicarse, a ritmo de 3 por semana.

### Beneficios principales
1. **Tu cliente elige productos en tu web** y te manda el pedido por WhatsApp.
2. **Sin comisiones por venta**, sin pasarelas de pago complejas.
3. **Nosotros cargamos y actualizamos tus productos**.
4. **Todo el posicionamiento queda en tus cuentas**, no en las nuestras.

### Cómo explicar el carrito sin login
> "Tu cliente elige productos en tu web como si armara una lista de pedido. Al tocar 'Pedir por WhatsApp', le llega a vos el mensaje con el listado completo. Vos cerrás la venta como siempre: por WhatsApp, con transferencia, efectivo o el medio de pago que uses. Sin comisiones por venta, sin pasarelas complejas."

### Cómo explicar el límite de productos
> "Nosotros te cargamos los primeros 20 productos con foto y descripción y, durante los 3 meses bonificados, te actualizamos hasta 10 productos por mes. Si después necesitás cambiar precios o fotos con frecuencia, eso ya entra en el mantenimiento mensual, que es mucho más económico que contratar a alguien para que lo haga."

### Inversión del primer año (escenario con web)
- Desarrollo: $648.000
- Mantenimiento: 9 meses × $68.000 = $612.000
- **Total año 1:** $1.260.000

### CTA
> "Quiero el plan VISIBLE" → botón a WhatsApp con mensaje predefinido.

---

## 7. Plan IMPARABLE — detalle completo

### Propósito
Para negocios que quieren una presencia digital completa: web propia con múltiples secciones, catálogo, gestión profesional de redes y contenido durante los primeros meses.

### Precio
- **Contado:** $998.000 (mejor precio)
- **Pago en dos partes:** $500.000 al contratar + $499.000 a las 2 semanas (total $999.000).
  - Se considera pago único dividido en dos entregas dentro del mismo mes para dar seguridad al cliente de que el producto se entrega antes del segundo pago.
- **Financiado:** $399.000 al contratar + 4 cuotas de $199.000 (total financiado $1.195.000)
- Primera cuota al contratar; siguientes cuotas cada 30 días.

### Web incluida
- Sitio web completo con múltiples secciones (a definir según proyecto).
- 6 meses de hosting, mantenimiento y dominio incluidos en el costo del plan.
- A partir del mes 7: **$78.000/mes** hasta completar 1 año.
- Subdominio gratuito: `tunegocio.milocalweb.com.ar`.
- Dominio propio `.com.ar` incluido durante los 6 meses bonificados (luego costo anual).
- Estructura sugerida: inicio, productos, ofertas, outlet, carrito, contacto, secciones personalizadas por tipo de producto o rubro (`/productos`, `/ofertas`, `/outlet`, `/calzado`, `/ropa`, `/bike`, etc.), y menú/carta online con QR para bares y restaurantes.

### Productos incluidos
- Carga inicial de hasta **50 productos** con foto y descripción.
- Hasta **20 actualizaciones o adiciones de productos extras por mes** en la web.
- Actualizaciones adicionales: se cotizan como mantenimiento web.

### Gestión profesional de redes (incluida por 6 meses)
- Programación de **3 publicaciones semanales** en Facebook e Instagram durante 6 meses.
- Contenido orientado a presencia de marca y posicionamiento local.
- **Coordinación cada 15 días** para mantener las publicaciones siempre actualizadas.
- **1 edición mensual de novedad**: pieza gráfica o publicación destacada sobre promoción, lanzamiento o temporada.

### Posicionamiento digital incluido (permanece del cliente)
- Todo lo de los planes anteriores.
- Sesión de fotos completa de hasta 24 fotos editadas: tu negocio va a lucir increíble en todas las redes.
- 6 meses de historias programadas en Instagram publicitando tus productos destacados, tu web e institucionales, que se suman a tus 5 secciones de destacados.
- Instructivo y capacitación básica para mantener tus redes actualizadas.
- QR de reseñas impreso.
- Flyer publicitario imprimible para tu negocio, con actualización de precios una vez al mes si hace falta, y tarjeta personal con QR. Se suma a todo el soporte gráfico de los planes INICIAL y VISIBLE.

### Beneficios principales
1. **Es un sitio web completo, no una sola página**: landing page para recibir a tu público, catálogo con carrito de compras por WhatsApp, institucional (quiénes somos) y sección de contacto con formulario completo que deriva las respuestas a tu mail.
2. **Redes activas durante 6 meses** sin contratar a nadie aparte.
3. **Más productos cargados y más actualizaciones** incluidas, para estar siempre al día.
4. **Guía de recomendaciones y capacitación** para que puedas seguir haciéndolo vos cuando lo desees.

### Cómo explicar el beneficio de redes (versión comercial)
> "Durante 6 meses publicamos 3 veces por semana en tus redes, con coordinación cada 15 días para estar siempre al día. Eso equivale a más de 72 publicaciones profesionales + 6 piezas de novedad. Contratar un community manager para hacer eso sale entre $450.000 y $1.200.000 por mes en el mercado. Acá viene incluido en tu plan."

### Justificación técnica para uso interno
- 3 publicaciones/semana × 4 semanas × 6 meses = 72 publicaciones.
- 1 edición mensual de novedad × 6 meses = 6 piezas adicionales.
- Mercado argentino: gestión de 2 redes con 12-20 publicaciones mensuales oscila entre $150.000 y $600.000/mes según el nivel del profesional.
- Valor aproximado del servicio incluido: entre $900.000 y $3.600.000.

### Inversión del primer año (escenario con web)
- Desarrollo: $998.000
- Mantenimiento: 6 meses × $78.000 = $468.000
- **Total año 1:** $1.466.000

### CTA
> "Quiero el plan IMPARABLE" → botón a WhatsApp con mensaje predefinido.

---

## 8. Tabla resumen de precios y financiación

| Concepto | INICIAL | VISIBLE | IMPARABLE |
|----------|---------|---------|-----------|
| Propósito | Que te encuentren | Que te elijan | Que te prefieran |
| Precio contado | $498.000 | $648.000 | $998.000 |
| Financiación | 3 × $199.000 | 4 × $199.000 | $399.000 + 4 × $199.000 |
| Total financiado | $597.000 | $796.000 | $1.195.000 |
| Ahorro por pago único | $99.000 | $148.000 | $197.000 |
| Web incluida | 2 meses | 4 meses | 6 meses (mantenimiento + dominio) |
| Mantenimiento mensual | $50.000/mes | $68.000/mes | $78.000/mes |
| Productos carga inicial | Hasta 9 | Hasta 20 | Hasta 50 |
| Actualizaciones incluidas | No aplica | Hasta 10 por mes | Hasta 20 por mes |
| Publicaciones en redes | Historias 3/semana × 1 mes | Historias 3/semana × 3 meses | 3 publicaciones/semana × 6 meses |

> **Texto sugerido en la web:** "Pagá de contado y ahorrá. O financiá en cuotas fijas. La primera cuota se abona al contratar."

---

## 9. Garantía de precio fijo por 1 año

### Mensaje comercial
> "El precio de tu plan queda fijo por 12 meses. Escrito y firmado por contrato. Al año revisamos los valores según ajustes del mercado, pero durante todo el primer año pagás exactamente lo que acordamos. Tranquilidad para tu negocio."

### Qué cubre la garantía
- El monto del desarrollo ya está pago en el primer mes (contado o financiado).
- El costo mensual de mantenimiento web no se modifica durante los 12 meses.
- Incluye hosting, dominio `milocalweb.com.ar`, certificado SSL, soporte técnico básico y backups.

### Qué pasa al año
- Se revisa el precio de mantenimiento según inflación y costos operativos.
- El cliente puede renovar, bajarse de plan o cancelar.
- Si cancela, conserva Google Business, Meta Business Suite, redes sociales y todo el posicionamiento configurado. Solo se suspende el sitio web alojado en MiLocalWeb.

---

## 10. Justificación de los costos de mantenimiento web

### INICIAL — $50.000/mes
Sitio web simple: pocas páginas, sin base de datos, sin carrito. El mantenimiento cubre hosting, dominio, SSL, backups y soporte técnico básico.

### VISIBLE — $68.000/mes
Sitio web con catálogo y carrito virtual. Requiere base de datos para productos, más páginas, más espacio de almacenamiento y soporte técnico más frecuente. El costo refleja la mayor complejidad operativa.

### IMPARABLE — $78.000/mes
Sitio web completo con múltiples secciones (`/productos`, `/ofertas`, `/outlet`, `/carrito`, etc.), catálogo amplio, base de datos y mayor demanda de hosting. Además incluye secciones personalizadas por tipo de producto o rubro.

### Texto sugerido para la web (letra pequeña o tooltip)
> "El valor mensual cubre hosting, dominio MiLocalWeb, certificado de seguridad SSL, copias de seguridad y soporte técnico. Los planes con catálogo requieren base de datos y más espacio, por eso el mantenimiento es mayor. Todo queda con precio fijo durante el primer año."

---

## 11. Lo que el cliente conserva para siempre

Este punto es diferencial y debe estar bien visible en la web.

> "Todo lo que configuramos para tu posicionamiento es tuyo. Google Business Profile, Meta Business Suite, Instagram, Facebook, WhatsApp Business: las cuentas quedan a tu nombre y con tus credenciales. Si en algún momento decidís no seguir con el sitio web, tu negocio sigue apareciendo en Google Maps y tus redes siguen activas."

### Lista de lo que el cliente retiene
- Google Business Profile.
- Cuenta de Instagram/Facebook vinculada.
- Meta Business Suite configurado.
- WhatsApp Business configurado.
- Fotos y material gráfico entregado.
- QR, tarjetas y flyers impresos.

### Lo que se suspende si no renueva
- El sitio web alojado en `tunegocio.milocalweb.com.ar`.
- El mantenimiento y soporte técnico mensual.

---

## 12. Textos sugeridos para la web

### Hero section
**Título:** Presencia digital profesional para tu comercio  
**Subtítulo:** Te configuramos Google, Instagram, Facebook y WhatsApp Business. También te armamos una web propia con meses bonificados y mantenimiento fijo por 1 año. Todo queda a tu nombre.  
**CTA principal:** Ver planes  
**CTA secundario:** Hablar con un asesor

### Sección "¿Por qué MiLocalWeb?"
- **Es tuyo:** Las cuentas y configuraciones quedan a tu nombre. No te las retenemos.
- **Presencia real:** Aparecés en Google Maps, redes sociales y WhatsApp Business.
- **Web con garantía:** Meses bonificados y precio de mantenimiento fijo durante el primer año.

### Sección de tarjetas de planes (intro)
> "Elegí el plan de posicionamiento digital que se ajuste a tu negocio. Todos incluyen configuración profesional de tus perfiles. Agregá una web propia con meses bonificados y mantenimiento fijo por 1 año."

### Nota legal sugerida
> "Los precios son en pesos argentinos. La financiación implica un costo total mayor al contado. El mantenimiento mensual aplica después del período bonificado y se mantiene fijo durante 12 meses desde la contratación."

---

## 13. Preguntas frecuentes sugeridas

**¿Qué pasa si no pago el mantenimiento mensual?**  
Se suspende el sitio web, pero todo el posicionamiento configurado (Google, redes, WhatsApp) sigue siendo tuyo.

**¿Por qué las cuotas suman más que el precio de contado?**  
Porque financiar el pago tiene un costo administrativo. Pagando de contado accedés al mejor precio.

**¿El dominio propio está incluido?**  
El subdominio `tunegocio.milocalweb.com.ar` es gratuito en todos los planes. El dominio propio `.com.ar` tiene un costo anual aparte, salvo en el Plan IMPARABLE, donde el dominio queda incluido durante los 6 meses bonificados.

**¿Cuántos productos puedo tener en el plan VISIBLE?**  
Te cargamos hasta 20 productos inicialmente y te actualizamos hasta 10 por mes durante los 3 meses bonificados. Después podés contratar mantenimiento adicional.

**¿La publicación en redes incluye respuesta a mensajes?**  
El plan IMPARABLE incluye programación de contenido durante 6 meses. La atención de mensajes y comentarios puede contratarse como servicio adicional.

**¿Puedo cambiar de plan después?**  
Sí, podés actualizar tu plan en cualquier momento y lo que ya pagaste en tu plan anterior se reconoce como crédito para el nuevo. Consultanos por WhatsApp y te explicamos cómo hacer la transición.

**¿Qué pasa al año con el precio del mantenimiento?**  
Al cumplirse el año revisamos el valor según ajustes de mercado. Vos decidís si renovás, te bajás de plan o cancelás.

---

## 14. Notas de implementación

### Archivos a modificar en la web
- `index.php`: hero, sección de planes, secciones de detalle por plan, FAQ, contacto.
- `assets/css/styles.css`: ajustes para tarjetas de planes, badges "Recomendado", secciones de detalle, anclas de scroll suave.
- `assets/js/main.js`: posible scroll suave para botones "Conocer plan X".
- Considerar agregar un acordeón de FAQs si no existe.

### Cambios clave en el copy
1. Eliminar o reformular "pago único, sin mensualidades obligatorias".
2. Destacar que el posicionamiento digital es propiedad del cliente.
3. Mostrar precio contado + financiación en cada tarjeta.
4. Agregar letra pequeña sobre mantenimiento mensual.
5. Reemplazar tabla comparativa por tarjetas + secciones de detalle.

### IDs de ancla sugeridos
- `#plan-inicial`
- `#plan-visible`
- `#plan-imparable`
- `#precios`
- `#faqs`

### Scroll suave
Agregar en `main.js` o con CSS `scroll-behavior: smooth`:

```css
html {
  scroll-behavior: smooth;
}
```

### Próximos pasos
1. Revisar este documento y aprobar textos finales.
2. Modificar `index.php` y archivos relacionados.
3. Revisar en navegador y móvil antes de publicar.

---

## 15. Referencias externas consultadas

- **Linear:** tres planes, diseño minimalista, outcome antes que feature list.
- **Slack:** plan recomendado destacado, comparativa clara.
- **Webflow:** navegación por anclas dentro de la página de precios.
- **Notion:** escalera simple Plus/Business/Enterprise.
- **Framer:** pricing por sitio separado de workspace.
- **Unbounce:** tarjetas con descripción de uso + CTA a detalle.
- **Vercel/Stripe:** transparencia de precios sin esconder información.

---

## 16. Contrastes con el mercado (resumen)

| Aspecto | MiLocalWeb propuesta | Mercado Argentina agosto 2026 |
|---------|----------------------|-------------------------------|
| Landing / sitio básico | Desde $498.000 (incluye posicionamiento) | $150.000 – $1.200.000 |
| E-commerce básico | $648.000 + mantenimiento $68.000/mes | $750.000 – $1.800.000 |
| Community manager 6 meses | Incluido en IMPARABLE | $900.000 – $3.600.000 |
| Mantenimiento web | $50.000 – $78.000/mes | $50.000 – $75.000/mes |
| Propiedad del cliente | Todo el posicionamiento es suyo | Variable según proveedor |

**Veredicto:** la propuesta es competitiva, claramente diferenciada y técnicamente justificable. El principal riesgo no es el precio, sino el cambio de mensaje: hay que dejar de vender "pago único barato" y empezar a vender "presencia digital profesional con acompañamiento".
