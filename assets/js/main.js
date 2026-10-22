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

  function isMobileNav() {
    return window.innerWidth <= 1024;
  }

  function closeNavbar() {
    if (!navbarMenu || !navbarToggle) return;
    navbarMenu.classList.remove('is-open');
    navbarToggle.setAttribute('aria-expanded', 'false');
    navbarToggle.setAttribute('aria-label', 'Abrir menú de navegación');
    document.body.style.overflow = '';
  }

  function openNavbar() {
    if (!navbarMenu || !navbarToggle) return;
    navbarMenu.classList.add('is-open');
    navbarToggle.setAttribute('aria-expanded', 'true');
    navbarToggle.setAttribute('aria-label', 'Cerrar menú de navegación');
    if (isMobileNav()) {
      document.body.style.overflow = 'hidden';
    }
  }

  if (navbarToggle && navbarMenu) {
    navbarToggle.addEventListener('click', function () {
      var isOpen = navbarMenu.classList.contains('is-open');
      if (isOpen) {
        closeNavbar();
        if (dropdown) {
          dropdown.classList.remove('is-open');
          if (dropdownToggle) dropdownToggle.setAttribute('aria-expanded', 'false');
        }
      } else {
        openNavbar();
      }
    });

    // Cerrar al hacer click en un link interno (anclas) — UX mobile
    navbarMenu.querySelectorAll('a[href^="/#"], a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function () {
        if (isMobileNav()) {
          closeNavbar();
        }
      });
    });

    // Cerrar al hacer click fuera
    document.addEventListener('click', function (e) {
      if (!isMobileNav()) return;
      if (!navbarMenu.classList.contains('is-open')) return;
      var isClickInsideMenu = navbarMenu.contains(e.target);
      var isClickOnToggle = navbarToggle.contains(e.target);
      if (!isClickInsideMenu && !isClickOnToggle) {
        closeNavbar();
      }
    });

    // Cerrar con ESC
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && navbarMenu.classList.contains('is-open')) {
        closeNavbar();
        navbarToggle.focus();
      }
    });

    // Al volver a desktop, limpiar estados mobile
    window.addEventListener('resize', function () {
      if (!isMobileNav()) {
        closeNavbar();
        if (dropdown) {
          dropdown.classList.remove('is-open');
          if (dropdownToggle) dropdownToggle.setAttribute('aria-expanded', 'false');
        }
        document.body.style.overflow = '';
      }
    });
  }

  // Dropdown toggle — en desktop mantiene hover, en mobile es click accordion
  if (dropdown && dropdownToggle) {
    dropdownToggle.addEventListener('click', function (e) {
      // En desktop dejamos que hover/focus-within gestione el dropdown,
      // pero también permitimos click para accesibilidad (toggle is-open)
      var isOpen = dropdown.classList.contains('is-open');
      if (isMobileNav()) {
        e.preventDefault();
        dropdown.classList.toggle('is-open');
        dropdownToggle.setAttribute('aria-expanded', String(!isOpen));
      } else {
        // Desktop: toggle con click también, sin navegar
        e.preventDefault();
        dropdown.classList.toggle('is-open');
        dropdownToggle.setAttribute('aria-expanded', String(!isOpen));
      }
    });

    // Cerrar dropdown al click fuera (desktop)
    document.addEventListener('click', function (e) {
      if (!dropdown.contains(e.target) && dropdown.classList.contains('is-open')) {
        // No cerrar si el click fue en el toggle (ya gestionado)
        if (!isMobileNav()) {
          // En desktop, cerrar al clicar fuera
          dropdown.classList.remove('is-open');
          dropdownToggle.setAttribute('aria-expanded', 'false');
        }
      }
    });
  }

  // Links "Próximamente" — evita 404 y avisa
  document.querySelectorAll('[data-coming-soon]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      // Feedback sutil sin alert invasivo — se puede reemplazar por toast si se desea
      var label = (link.textContent || 'Este apartado').trim().split(' ')[0];
      console.info(label + ' — próximamente disponible.');
    });
  });

  /**
   * Compartir planes — Web Share API con fallback propio.
   * Cada botón [data-share-plan] comparte el enlace directo a su plan
   * (resumen y detalle). En móvil se usa la hoja nativa del sistema;
   * en desktop se abre un menú con WhatsApp y "copiar enlace".
   */
  var shareButtons = document.querySelectorAll('[data-share-plan]');
  var shareMenu = null;
  var shareTrigger = null;
  var shareToast = null;
  var shareToastTimer = null;

  function shareUrlFor(anchor) {
    var base = window.location.origin + window.location.pathname;
    return anchor ? base + '#' + anchor : base;
  }

  function sharePayloadFor(button) {
    var plan = button.getAttribute('data-share-plan') || 'MiLocalWeb';
    var tagline = button.getAttribute('data-share-tagline') || '';
    var anchor = button.getAttribute('data-share-anchor') || '';
    var text = 'Plan ' + plan + ' de MiLocalWeb';

    if (tagline) {
      text += ': ' + tagline;
    }

    return {
      title: 'Plan ' + plan + ' — MiLocalWeb',
      text: text + '. Mirá todo lo que incluye:',
      url: shareUrlFor(anchor)
    };
  }

  function showShareToast(message) {
    if (!shareToast) {
      shareToast = document.createElement('div');
      shareToast.className = 'share-toast';
      shareToast.setAttribute('role', 'status');
      shareToast.setAttribute('aria-live', 'polite');
      document.body.appendChild(shareToast);
    }

    shareToast.textContent = message;
    shareToast.classList.add('is-visible');
    window.clearTimeout(shareToastTimer);
    shareToastTimer = window.setTimeout(function () {
      shareToast.classList.remove('is-visible');
    }, 2400);
  }

  function copyShareUrl(url) {
    if (!url) {
      return;
    }

    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(url).then(function () {
        showShareToast('Enlace copiado');
      }, function () {
        fallbackCopy(url);
      });
      return;
    }

    fallbackCopy(url);
  }

  // Copia para navegadores sin Clipboard API o sin contexto seguro.
  function fallbackCopy(url) {
    var field = document.createElement('textarea');
    field.value = url;
    field.setAttribute('readonly', '');
    field.style.position = 'fixed';
    field.style.top = '-9999px';
    document.body.appendChild(field);
    field.select();

    var copied = false;
    try {
      copied = document.execCommand('copy');
    } catch (error) {
      copied = false;
    }

    document.body.removeChild(field);
    showShareToast(copied ? 'Enlace copiado' : 'No pudimos copiar el enlace');
  }

  function closeShareMenu() {
    if (!shareMenu || shareMenu.hidden) {
      return;
    }

    shareMenu.hidden = true;
    if (shareTrigger) {
      shareTrigger.setAttribute('aria-expanded', 'false');
    }
    shareTrigger = null;
  }

  function getShareMenu() {
    if (shareMenu) {
      return shareMenu;
    }

    shareMenu = document.createElement('div');
    shareMenu.className = 'plan-share__menu';
    shareMenu.setAttribute('aria-label', 'Opciones para compartir');
    shareMenu.hidden = true;
    shareMenu.innerHTML =
      '<a class="plan-share__option plan-share__option--whatsapp"' +
      ' target="_blank" rel="noopener noreferrer">' +
      '<span class="plan-share__option-icon" aria-hidden="true">' +
      '<svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" focusable="false">' +
      '<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>' +
      '</svg></span>WhatsApp</a>' +
      '<button type="button" class="plan-share__option plan-share__option--copy">' +
      '<span class="plan-share__option-icon" aria-hidden="true">' +
      '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor"' +
      ' stroke-width="2" stroke-linecap="round" stroke-linejoin="round" focusable="false">' +
      '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>' +
      '<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>' +
      '</svg></span>Copiar enlace</button>';

    shareMenu.querySelector('.plan-share__option--whatsapp').addEventListener('click', function () {
      closeShareMenu();
    });

    shareMenu.querySelector('.plan-share__option--copy').addEventListener('click', function () {
      copyShareUrl(shareMenu.getAttribute('data-share-url') || '');
      closeShareMenu();
    });

    document.addEventListener('click', function (event) {
      if (shareMenu.hidden) {
        return;
      }
      if (shareMenu.contains(event.target)) {
        return;
      }
      if (shareTrigger && shareTrigger.contains(event.target)) {
        return;
      }
      closeShareMenu();
    });

    document.addEventListener('keydown', function (event) {
      if (event.key !== 'Escape' || shareMenu.hidden) {
        return;
      }
      var trigger = shareTrigger;
      closeShareMenu();
      if (trigger) {
        trigger.focus();
      }
    });

    return shareMenu;
  }

  function openShareMenu(button, payload) {
    var menu = getShareMenu();
    var wrap = (button.closest && button.closest('.plan-share')) || button.parentNode;

    if (shareTrigger === button && !menu.hidden) {
      closeShareMenu();
      return;
    }

    if (shareTrigger && shareTrigger !== button) {
      shareTrigger.setAttribute('aria-expanded', 'false');
    }

    if (menu.parentNode) {
      menu.parentNode.removeChild(menu);
    }

    wrap.appendChild(menu);
    menu.setAttribute('data-share-url', payload.url);
    menu.querySelector('.plan-share__option--whatsapp').href =
      'https://wa.me/?text=' + encodeURIComponent(payload.text + ' ' + payload.url);
    menu.hidden = false;

    shareTrigger = button;
    button.setAttribute('aria-expanded', 'true');
  }

  shareButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var payload = sharePayloadFor(button);

      // La hoja nativa solo en pantallas táctiles: en desktop el menú propio
      // deja elegir WhatsApp directo y evita el diálogo del sistema operativo.
      if (typeof navigator.share === 'function' && navigator.maxTouchPoints > 0) {
        navigator.share(payload).catch(function (error) {
          if (error && error.name === 'AbortError') {
            return;
          }
          openShareMenu(button, payload);
        });
        return;
      }

      openShareMenu(button, payload);
    });
  });

  console.log('MiLocalWeb — sitio cargado.');
})();
