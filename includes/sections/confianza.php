
<?php /**
 * Vidriera de clientes (#confiaron-en-nosotros).
 *
 * Responsabilidad: mostrar webs ya entregadas como prueba social. Cada card
 * enlaza al sitio real en una pestaña nueva y la última reserva un espacio
 * publicitario para el próximo cliente.
 *
 * Depende de: config/config.php (IMG_URL) y de las capturas/logos en
 * assets/img/clientes/.
 */ ?>
<!-- =====================================================
     Vidriera: webs desarrolladas — pruebas reales de lo
     que vendemos. Cada card link al sitio del cliente.
     ===================================================== -->
<section id="confiaron-en-nosotros" class="section section-confianza" aria-labelledby="confianza-heading">
    <h2 id="confianza-heading">Empresas y Profesionales que confiaron en nosotros</h2>
    <p class="section-subtitle">
        Estas webs ya están online y trabajando para cada negocio. Tocá la imagen y pasá a verlas como si fueran tuyas.
    </p>

    <div class="confianza-grid">
        <?php /* Cada card abre el sitio real en una pestaña nueva; la imagen es la meta OG de esa web y el logo va debajo. */ ?>
        <a href="https://origen.milocalweb.com.ar" target="_blank" rel="noopener noreferrer" class="confianza-card">
            <span class="confianza-card__media">
                <img src="<?= IMG_URL ?>/clientes/og-origen-88-1200x630.jpg"
                     alt="Vista previa de la web de Origen8.8, indumentaria y accesorios"
                     class="confianza-card__img"
                     width="1200" height="630"
                     loading="lazy" decoding="async">
            </span>
            <span class="confianza-card__logo">
                <img src="<?= IMG_URL ?>/clientes/logo-origen-88-600x600.webp"
                     alt="Logo de Origen8.8"
                     width="600" height="600"
                     loading="lazy" decoding="async">
            </span>
            <span class="confianza-card__nombre">Origen8.8</span>
            <span class="confianza-card__rubro">Indumentaria y accesorios para el tiempo libre</span>
        </a>

        <a href="https://eznutrifit.milocalweb.com.ar" target="_blank" rel="noopener noreferrer" class="confianza-card">
            <span class="confianza-card__media">
                <img src="<?= IMG_URL ?>/clientes/og-ez-nutrifit-1200x630.webp"
                     alt="Vista previa de la web de EZ Nutrifit, suplementos y nutrición"
                     class="confianza-card__img"
                     width="1200" height="630"
                     loading="lazy" decoding="async">
            </span>
            <span class="confianza-card__logo confianza-card__logo--dark">
                <img src="<?= IMG_URL ?>/clientes/logo-ez-nutrifit-300x300.webp"
                     alt="Logo de EZ Nutrifit"
                     width="300" height="300"
                     loading="lazy" decoding="async">
            </span>
            <span class="confianza-card__nombre">EZ Nutrifit</span>
            <span class="confianza-card__rubro">Suplementos dietarios y nutrición</span>
        </a>

        <a href="https://alejandrotinte.milocalweb.com.ar" target="_blank" rel="noopener noreferrer" class="confianza-card">
            <span class="confianza-card__media">
                <img src="<?= IMG_URL ?>/clientes/og-alejandro-tinte-1200x630.jpg"
                     alt="Vista previa de la web de Alejandro Tinte, escritor"
                     class="confianza-card__img"
                     width="1200" height="630"
                     loading="lazy" decoding="async">
            </span>
            <span class="confianza-card__logo confianza-card__logo--wordmark">
                <!-- El cliente aún no tiene logo: se muestra su nombre como wordmark -->
                <span class="confianza-wordmark">Alejandro&nbsp;Tinte</span>
            </span>
            <span class="confianza-card__nombre">Alejandro Tinte</span>
            <span class="confianza-card__rubro">Escritor — novelas y relatos</span>
        </a>

        <?php /* Placeholder comercial: reserva el lugar del próximo cliente y enlaza a WhatsApp. */ ?>
        <a href="https://wa.me/5493513783473?text=Hola%2C%20vi%20la%20vidriera%20de%20webs%20en%20su%20p%C3%A1gina%20y%20quiero%20info%20para%20mi%20negocio."
           target="_blank" rel="noopener noreferrer"
           class="confianza-card confianza-card--ad"
           aria-label="Espacio publicitario disponible: su empresa podría estar aquí — consultá por WhatsApp">
            <span class="confianza-card__badge">Espacio disponible</span>
            <span class="confianza-card__media confianza-card__media--ad">
                <span class="confianza-ad__plus" aria-hidden="true">+</span>
                <span class="confianza-ad__text">Su empresa podría estar aquí</span>
            </span>
            <span class="confianza-card__nombre">¿La próxima?</span>
            <span class="confianza-card__rubro">Escribinos y reservá tu lugar</span>
        </a>
    </div>

    <p class="confianza-invita">
        Pasá a verlas en acción: cada web está en internet ahora mismo, atendiendo clientes.
        Como vas a ver, <strong>la tuya también podría estar acá.</strong>
    </p>
</section>
