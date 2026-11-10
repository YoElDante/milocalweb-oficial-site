  /**
   * Parcial 02 — Acordeón de FAQ y referencias del navbar.
   *
   * Al abrir una pregunta cierra las demás (comportamiento exclusivo) y
   * cachea los nodos que 03-navbar.js reutiliza. Depende de .faq-item en
   * includes/sections/faq.php.
   */
  faqItems.forEach(function (item) {
    item.addEventListener('toggle', function () {
      if (!item.open) {
        return;
      }
      faqItems.forEach(function (otherItem) {
        if (otherItem !== item && otherItem.open) {
          otherItem.open = false;
        }
      });
    });
  });

  /**
   * Navbar hamburguesa — profesional, accesible.
   */
  var navbarToggle = document.querySelector('.navbar-toggle');
  var navbarMenu = document.getElementById('navbar-menu');
  var dropdown = document.querySelector('.dropdown');
  var dropdownToggle = document.querySelector('.dropdown-toggle');

