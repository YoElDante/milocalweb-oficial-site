<?php
/**
 * Pie de pagina compartido del sitio MiLocalWeb.
 *
 * Cierra las etiquetas HTML abiertas en header.php e incluye el script
 * principal del sitio.
 *
 * @package MiLocalWeb
 */
?>
    </main>
    <footer class="site-footer">
        <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. Todos los derechos reservados.</p>
    </footer>
    <script src="<?= JS_URL ?>/main.js"></script>
</body>
</html>