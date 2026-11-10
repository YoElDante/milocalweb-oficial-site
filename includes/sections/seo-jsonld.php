
<?php
/**
 * Datos estructurados JSON-LD de la home.
 *
 * Responsabilidad: declarar LocalBusiness, WebSite/WebPage, OfferCatalog y
 * FAQPage para SEO. Los precios y las respuestas también viven en el HTML:
 * si cambian en resumen-planes.php o faq.php, actualizar también aquí.
 *
 * Depende de: SITE_URL, LOGOS_URL, OG_IMAGE_URL y $oficina (config/config.php).
 */

// --- SEO: JSON-LD structured data (LocalBusiness + WebSite + Offers + FAQPage) ---
$siteUrl = SITE_URL;
$orgLogo = LOGOS_URL . '/' . rawurlencode('LOGO VERDE NARANJA.webp');
?>
<?php /* Bloque 1: LocalBusiness — identidad, dirección, geolocalización y perfiles sociales. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "<?= htmlspecialchars($siteUrl) ?>/#localbusiness",
  "name": "MiLocalWeb",
  "url": "<?= htmlspecialchars($siteUrl) ?>/",
  "logo": "<?= htmlspecialchars($orgLogo) ?>",
  "image": "<?= htmlspecialchars(OG_IMAGE_URL) ?>",
  "telephone": "<?= htmlspecialchars($oficina['telefono_e164']) ?>",
  "email": "comercial@milocalweb.com.ar",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Angelo de Peredo 34",
    "addressLocality": "Córdoba",
    "addressRegion": "Córdoba",
    "postalCode": "X5000BTB",
    "addressCountry": "AR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "<?= htmlspecialchars($oficina['lat']) ?>",
    "longitude": "<?= htmlspecialchars($oficina['lng']) ?>"
  },
  "hasMap": "<?= htmlspecialchars($oficina['gmaps_link']) ?>",
  "priceRange": "$$",
  "areaServed": "Córdoba, Argentina",
  "sameAs": [
    "https://www.instagram.com/milocalweb.com.ar",
    "https://www.facebook.com/milocalweb.com.ar"
  ],
  "description": "Presencia digital profesional para comercios y emprendedores: Google Business, redes, WhatsApp Business y web propia."
}
</script>
<?php /* Bloque 2: WebSite + WebPage — relación entre el sitio, la página y el negocio. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?= htmlspecialchars($siteUrl) ?>/#website",
      "url": "<?= htmlspecialchars($siteUrl) ?>/",
      "name": "MiLocalWeb",
      "inLanguage": "es-AR",
      "publisher": { "@id": "<?= htmlspecialchars($siteUrl) ?>/#localbusiness" }
    },
    {
      "@type": "WebPage",
      "@id": "<?= htmlspecialchars($siteUrl) ?>/#webpage",
      "url": "<?= htmlspecialchars($siteUrl) ?>/",
      "name": "Posicionamiento Web Profesional en Córdoba — MiLocalWeb",
      "description": "Presencia digital profesional para tu comercio en Córdoba: Google Business, redes sociales, WhatsApp Business y web propia.",
      "inLanguage": "es-AR",
      "isPartOf": { "@id": "<?= htmlspecialchars($siteUrl) ?>/#website" },
      "about": { "@id": "<?= htmlspecialchars($siteUrl) ?>/#localbusiness" }
    }
  ]
}
</script>
<?php /* Bloque 3: OfferCatalog — precios de los planes; deben coincidir con resumen-planes.php. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "OfferCatalog",
  "name": "Planes MiLocalWeb",
  "itemListElement": [
    {
      "@type": "Offer",
      "name": "Plan INICIAL — Que te encuentren y te contacten",
      "url": "<?= htmlspecialchars($siteUrl) ?>/#plan-inicial",
      "priceCurrency": "ARS",
      "price": "498000",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Plan VISIBLE — Que te vean y te elijan",
      "url": "<?= htmlspecialchars($siteUrl) ?>/#plan-visible",
      "priceCurrency": "ARS",
      "price": "648000",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Plan IMPARABLE — Que te prefieran",
      "url": "<?= htmlspecialchars($siteUrl) ?>/#plan-imparable",
      "priceCurrency": "ARS",
      "price": "998000",
      "availability": "https://schema.org/InStock"
    }
  ]
}
</script>
<?php /* Bloque 4: FAQPage — mismas preguntas y respuestas que faq.php. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué pasa si no pago el mantenimiento mensual?",
      "acceptedAnswer": { "@type": "Answer", "text": "Se suspende el sitio web, pero todo el posicionamiento configurado (Google Business, redes sociales, WhatsApp, Meta Business Suite) sigue siendo tuyo." }
    },
    {
      "@type": "Question",
      "name": "¿Por qué las cuotas suman más que el precio de contado?",
      "acceptedAnswer": { "@type": "Answer", "text": "Porque financiar el pago tiene un costo administrativo. Pagando de contado accedés al mejor precio." }
    },
    {
      "@type": "Question",
      "name": "¿El dominio propio está incluido?",
      "acceptedAnswer": { "@type": "Answer", "text": "El subdominio tunegocio.milocalweb.com.ar es gratuito. El dominio propio .com.ar tiene un costo anual aparte." }
    },
    {
      "@type": "Question",
      "name": "¿Cuántos productos puedo tener en el plan VISIBLE?",
      "acceptedAnswer": { "@type": "Answer", "text": "Te cargamos hasta 15 productos inicialmente y te actualizamos hasta 10 durante los 3 meses bonificados. Después podés contratar mantenimiento adicional." }
    },
    {
      "@type": "Question",
      "name": "¿La publicación en redes incluye respuesta a mensajes?",
      "acceptedAnswer": { "@type": "Answer", "text": "El plan IMPARABLE incluye programación de contenido durante 3 meses. La atención de mensajes y comentarios puede contratarse como servicio adicional." }
    },
    {
      "@type": "Question",
      "name": "¿Puedo cambiar de plan después?",
      "acceptedAnswer": { "@type": "Answer", "text": "Sí, podés actualizar tu plan en cualquier momento. Escribinos por WhatsApp y te explicamos cómo hacer la transición." }
    },
    {
      "@type": "Question",
      "name": "¿Qué pasa al año con el precio del mantenimiento?",
      "acceptedAnswer": { "@type": "Answer", "text": "Al cumplirse el año revisamos el valor según ajustes de mercado. Vos decidís si renovás, te bajás de plan o cancelás." }
    }
  ]
}
</script>
