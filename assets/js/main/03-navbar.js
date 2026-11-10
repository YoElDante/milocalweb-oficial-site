  /**
   * Parcial 03 — Comportamiento del navbar móvil y del dropdown.
   *
   * Usa el breakpoint 1024px (igual que 03-navbar.css), bloquea el scroll del
   * body con el menú abierto y mantiene aria-expanded sincronizado. Depende
   * de las variables declaradas en 02-faq.js.
   */

  // Mismo breakpoint que el media query de 03-navbar.css.
  function isMobileNav() {
    return window.innerWidth <= 1024;
  }

  // Restaura el estado cerrado y libera el scroll del body.
  function closeNavbar() {
    if (!navbarMenu || !navbarToggle) return;
    navbarMenu.classList.remove('is-open');
    navbarToggle.setAttribute('aria-expanded', 'false');
    navbarToggle.setAttribute('aria-label', 'Abrir menú de navegación');
    document.body.style.overflow = '';
  }

  // Abre el menú y bloquea el scroll solo en mobile.
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

