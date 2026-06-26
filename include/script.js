/* ===========================
   Sticky Header Shadow on Scroll
   =========================== */
(function () {
  var header = document.getElementById('site-header');
  if (!header) return;

  function onScroll() {
    if (window.scrollY > 10) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ===========================
   Hero Live Clock (Malaysia Time UTC+8)
   =========================== */
(function () {
  var clock = document.getElementById('heroClock');
  if (!clock) return;

  function tick() {
    var now = new Date();
    var formatter = new Intl.DateTimeFormat('en-US', {
      timeZone: 'Asia/Kuala_Lumpur',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: false
    });
    clock.textContent = formatter.format(now);
  }

  tick();
  setInterval(tick, 1000);
})();

/* ===========================
   Hamburger Menu Toggle
   =========================== */
(function () {
  var hamburger = document.getElementById('hamburger-toggle');
  var nav = document.getElementById('main-nav');
  if (!hamburger || !nav) return;

  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
    var isExpanded = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
  });

  // Close mobile menu when clicking a non-dropdown link
  var links = nav.querySelectorAll('ul.navbar > li:not(.dropdown) > a');
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function () {
      hamburger.classList.remove('active');
      nav.classList.remove('active');
    });
  }
})();

/* ===========================
   Mega Dropdown Toggle (mobile)
   =========================== */
(function () {
  var dropdown = document.getElementById('about-dropdown');
  if (!dropdown) return;
  var toggle = dropdown.querySelector('.dropdown-toggle');
  if (!toggle) return;

  toggle.addEventListener('click', function (e) {
    // On mobile (<=1024), toggle dropdown instead of navigating
    if (window.innerWidth <= 1024) {
      e.preventDefault();
      dropdown.classList.toggle('open');
    }
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function (e) {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove('open');
    }
  });
})();