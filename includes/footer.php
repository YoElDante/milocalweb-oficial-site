<?php
/**
 * Pie de página compartido del sitio MiLocalWeb.
 *
 * Incluye enlaces a redes sociales, información de contacto y copyright.
 *
 * @package MiLocalWeb
 */
?>
    </main>
    <div class="footer-transition" aria-hidden="true">
        <img src="<?= IMG_URL ?>/pie%20de%20pagina/pie%20de%20pagina.webp"
             alt=""
             class="footer-transition__img"
             width="1774"
             height="887"
             loading="lazy"
             decoding="async"
             fetchpriority="low">
        <div class="footer-transition__scrim footer-transition__scrim--top"></div>
        <div class="footer-transition__scrim footer-transition__scrim--bottom"></div>
        <svg class="footer-transition__wave" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true" focusable="false">
            <path d="M0,32 C320,78 640,2 960,36 C1160,58 1320,52 1440,38 L1440,80 L0,80 Z" fill="var(--mlw-bosque-950)"/>
        </svg>
    </div>
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-brand">
                <img src="<?= LOGOS_URL ?>/ISOLOGOTIPO CUADRADO VERDE NARANJA.webp"
                     alt="MiLocalWeb"
                     class="footer-isotipo">
                <p class="footer-tagline">
                    Ayudamos a comercios, profesionales y emprendedores a tener
                    una presencia digital profesional.
                </p>
            </div>

            <div class="footer-social">
                <h4>Seguinos</h4>
                <div class="social-links">
                    <a href="https://www.instagram.com/milocalweb.com.ar"
                       target="_blank" rel="noopener noreferrer"
                       class="social-link social-link--instagram" aria-label="Instagram">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-instagram.svg'); ?></span>
                    </a>
                    <a href="https://www.facebook.com/milocalweb.com.ar"
                       target="_blank" rel="noopener noreferrer"
                       class="social-link social-link--facebook" aria-label="Facebook">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-facebook.svg'); ?></span>
                    </a>
                    <a href="https://wa.me/5493513783473"
                       target="_blank" rel="noopener noreferrer"
                       class="social-link social-link--whatsapp" aria-label="WhatsApp Comercial">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
                    </a>
                    <a href="mailto:comercial@milocalweb.com.ar"
                       class="social-link social-link--mail" aria-label="Email Comercial">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-mail.svg'); ?></span>
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Enlaces</h4>
                <ul>
                    <li><a href="http://demo.milocalweb.com.ar" target="_blank" rel="noopener noreferrer">Portal de Demostración</a></li>
                    <li><a href="https://wa.me/5493513783473" target="_blank" rel="noopener noreferrer">WhatsApp Comercial</a></li>
                    <li><a href="https://wa.me/5493396577" target="_blank" rel="noopener noreferrer">WhatsApp Sistemas</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. Todos los derechos reservados.</p>
        </div>
    </footer>
    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/5493513783473?text=Hola,%20estoy%20en%20el%20sitio%20web%20y%20quisiera%20recibir%20asesoramiento."
       target="_blank"
       rel="noopener noreferrer"
       class="whatsapp-float"
       aria-label="Chatear por WhatsApp">
        <span class="whatsapp-float__icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
    </a>

    <script src="<?= JS_URL ?>/main.js<?= JS_VERSION ?>"></script>
</body>
</html>
