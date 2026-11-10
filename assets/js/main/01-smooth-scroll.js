  /**
   * Parcial 01 — Scroll suave para anclas internas.
   *
   * Continúa el docblock de 00-header.js. Usa un offset fijo de 90px para el
   * header sticky y, en mobile, centra la ficha del plan para dejar ver que
   * hay contenido debajo. Depende de los IDs definidos por las secciones.
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

      var isProductAnchor = href === '#plan-inicial' || href === '#plan-visible' || href === '#plan-imparable';
      var isMobile = window.innerWidth <= 768;

      var offsetPosition;

      if (isProductAnchor && isMobile) {
        var heroImg = target.querySelector('.plan-detail-hero-img');
        var referenceEl = heroImg || target.querySelector('.plan-detail-header') || target;
        var rect = referenceEl.getBoundingClientRect();
        var referenceCenter = rect.top + rect.height / 2;
        // Centra la imagen ~42% del viewport para dejar pista de que hay más abajo
        var viewportTarget = window.innerHeight * 0.42;
        offsetPosition = window.pageYOffset + referenceCenter - viewportTarget;
      } else {
        // 90px compensa aproximadamente el alto del header sticky.
        var headerOffset = 90;
        var elementPosition = target.getBoundingClientRect().top;
        offsetPosition = elementPosition + window.pageYOffset - headerOffset;
      }

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
