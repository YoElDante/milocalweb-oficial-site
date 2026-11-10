
<?php /**
 * Sección de contacto (#contacto).
 *
 * Responsabilidad: ofrecer los tres canales directos (teléfono, WhatsApp y
 * email) sin formulario, para reducir fricción. Es el último CTA antes del
 * footer.
 *
 * Depende de: los SVG de assets/img/iconos/ leídos inline con readfile().
 */ ?>
<section id="contacto" class="section section-contact" aria-labelledby="contacto-heading">
    <h2 id="contacto-heading">Conversemos</h2>
    <p class="contact-subtitle">
        Contanos qué necesita tu negocio. Llamanos, escribinos por WhatsApp o email y te respondemos a la brevedad.
    </p>
    <div class="contact-actions">
        <a href="tel:+5493513783473" class="btn-phone">
            <span class="btn-icon" aria-hidden="true"><?php readfile(dirname(__DIR__, 2) . '/assets/img/iconos/icon-phone.svg'); ?></span>
            +54 9 351 378-3473
        </a>
        <a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
            <span class="btn-icon" aria-hidden="true"><?php readfile(dirname(__DIR__, 2) . '/assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
            WhatsApp Comercial
        </a>
        <a href="mailto:comercial@milocalweb.com.ar" class="btn-email">
            <span class="btn-icon" aria-hidden="true"><?php readfile(dirname(__DIR__, 2) . '/assets/img/iconos/icon-mail.svg'); ?></span>
            comercial@milocalweb.com.ar
        </a>
    </div>
</section>
