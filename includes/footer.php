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
                       class="social-link" aria-label="Instagram">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-instagram.svg'); ?></span>
                    </a>
                    <a href="https://www.facebook.com/milocalweb.com.ar"
                       target="_blank" rel="noopener noreferrer"
                       class="social-link" aria-label="Facebook">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-facebook.svg'); ?></span>
                    </a>
                    <a href="https://wa.me/5493513783473"
                       target="_blank" rel="noopener noreferrer"
                       class="social-link" aria-label="WhatsApp Comercial">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-whatsapp-brand.svg'); ?></span>
                    </a>
                    <a href="mailto:comercial@milocalweb.com.ar"
                       class="social-link" aria-label="Email Comercial">
                        <span class="social-icon" aria-hidden="true"><?php readfile(__DIR__ . '/../assets/img/iconos/icon-mail.svg'); ?></span>
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Enlaces</h4>
                <ul>
                    <li><a href="http://demo.milocalweb.com.ar" target="_blank" rel="noopener noreferrer">Portal de Demostración</a></li>
                    <li><a href="https://linktr.ee/milocalweb" target="_blank" rel="noopener noreferrer">Linktree</a></li>
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
