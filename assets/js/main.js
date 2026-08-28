/**
 * Script principal de MiLocalWeb.
 * Lógica de interacción del lado del cliente.
 */
(function () {
  'use strict';

  /**
   * Scroll suave con offset para el header sticky.
   * Compensa la altura del navbar al navegar por anclas internas.
   */
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (event) {
      var href = this.getAttribute('href');
      if (!href || href === '#' || href.length < 2) {
        return;
      }

      var target = document.querySelector(href);
      if (!target) {
        return;
      }

      event.preventDefault();

      var headerOffset = 90;
      var elementPosition = target.getBoundingClientRect().top;
      var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    });
  });

  /**
   * FAQ acordeón: al abrir una pregunta, se cierran las demás.
   */
  var faqItems = document.querySelectorAll('.faq-item');
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

  console.log('MiLocalWeb — sitio cargado.');
})();
