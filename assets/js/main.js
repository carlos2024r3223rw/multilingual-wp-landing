document.addEventListener('DOMContentLoaded', function () {
  /* ---- Menú móvil ---- */
  var toggle = document.querySelector('.mobile-menu-toggle');
  var mobileNav = document.querySelector('.mobile-nav');
  if (toggle && mobileNav) {
    toggle.addEventListener('click', function () {
      var isOpen = mobileNav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      toggle.setAttribute('aria-label', isOpen ? toggle.dataset.closeLabel : toggle.dataset.openLabel);
    });

    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileNav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', toggle.dataset.openLabel);
      });
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && mobileNav.classList.contains('is-open')) {
        mobileNav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', toggle.dataset.openLabel);
        toggle.focus();
      }
    });
  }

  /* ---- Submenú "Servizi" en móvil ---- */
  var subToggle = document.querySelector('.mobile-submenu-toggle');
  var subMenu = document.querySelector('.mobile-submenu');
  if (subToggle && subMenu) {
    subToggle.addEventListener('click', function () {
      var isOpen = subMenu.classList.toggle('is-open');
      subToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      subMenu.style.maxHeight = isOpen ? subMenu.scrollHeight + 'px' : '0px';
    });
  }

  /* ---- Carrusel de testimonios ---- */
  var track = document.querySelector('.testimonials-track');
  var prevBtn = document.querySelector('.testimonials-nav .prev');
  var nextBtn = document.querySelector('.testimonials-nav .next');
  if (track && prevBtn && nextBtn) {
    var scrollAmount = function () {
      var card = track.querySelector('.testimonial-card');
      return card ? card.getBoundingClientRect().width + 24 : 320;
    };
    prevBtn.addEventListener('click', function () {
      track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
    });
    nextBtn.addEventListener('click', function () {
      track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
    });
  }
});
