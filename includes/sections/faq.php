
<?php /**
 * Preguntas frecuentes (#preguntas-frecuentes).
 *
 * Responsabilidad: resolver objeciones comerciales con un acordeón nativo
 * basado en <details>. Mantiene los alias legacy #faqs y #preguntas.
 *
 * Depende de: assets/js/main/02-faq.js (cierre exclusivo). El texto debe
 * mantenerse sincronizado con el FAQPage de seo-jsonld.php.
 */ ?>
<!-- Alias legacy: #faqs → #preguntas-frecuentes -->
<div id="faqs" aria-hidden="true" class="anchor-legacy"></div>
<div id="preguntas" aria-hidden="true" class="anchor-legacy"></div>

<section id="preguntas-frecuentes" class="section section-faq section-preguntas" aria-labelledby="preguntas-heading">
    <h2 id="preguntas-heading">Preguntas frecuentes</h2>

    <?php /* Mantener estas respuestas sincronizadas con el FAQPage de seo-jsonld.php; Google compara ambos textos. */ ?>
    <div class="faq-list">
        <details class="faq-item">
            <summary class="faq-question">¿Qué pasa si no pago el mantenimiento mensual?</summary>
            <div class="faq-answer">
                <p>Se suspende el sitio web, pero todo el posicionamiento configurado (Google Business, redes sociales, WhatsApp, Meta Business Suite) sigue siendo tuyo.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Por qué las cuotas suman más que el precio de contado?</summary>
            <div class="faq-answer">
                <p>Porque financiar el pago tiene un costo administrativo. Pagando de contado accedés al mejor precio.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿El dominio propio está incluido?</summary>
            <div class="faq-answer">
                <p>El subdominio <code>tunegocio.milocalweb.com.ar</code> es gratuito. El dominio propio <code>.com.ar</code> tiene un costo anual aparte.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Cuántos productos puedo tener en el plan VISIBLE?</summary>
            <div class="faq-answer">
                <p>Te cargamos hasta 15 productos inicialmente y te actualizamos hasta 10 durante los 3 meses bonificados. Después podés contratar mantenimiento adicional.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿La publicación en redes incluye respuesta a mensajes?</summary>
            <div class="faq-answer">
                <p>El plan IMPARABLE incluye programación de contenido durante 3 meses. La atención de mensajes y comentarios puede contratarse como servicio adicional.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Puedo cambiar de plan después?</summary>
            <div class="faq-answer">
                <p>Sí, podés actualizar tu plan en cualquier momento. Escribinos por WhatsApp y te explicamos cómo hacer la transición.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Qué pasa al año con el precio del mantenimiento?</summary>
            <div class="faq-answer">
                <p>Al cumplirse el año revisamos el valor según ajustes de mercado. Vos decidís si renovás, te bajás de plan o cancelás.</p>
            </div>
        </details>
    </div>
</section>

