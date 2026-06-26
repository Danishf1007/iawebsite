<body class="home-page">
  <div class="page-wrapper">
    <!-- Fixed background video for home page -->
    <video class="page-bg-video" autoplay muted loop playsinline>
      <source src="videos/home.mp4" type="video/mp4">
    </video>
    <?php include 'include/header.php'; ?>
    <main class="main-content">
      
      <section id="hero">
        <!-- Background video -->
        <video class="hero-video-bg" autoplay muted loop playsinline>
          <source src="videos/home.mp4" type="video/mp4">
        </video>

        <!-- Dark gradient scrim -->
        <div class="hero-scrim"></div>

        <div id="particles-js"></div>

        <!-- Left-aligned dynamic text -->
        <div class="hero-content-left">
          <p class="hero-eyebrow" id="heroEyebrow">Welcome</p>
          <h1 class="hero-title-main" id="heroTitle">IA SoftTech Sdn. Bhd.</h1>
          <p class="hero-subtitle" id="heroSubtitle">Accelerating Innovation Through <br> Intelligent Technology Solutions</p>
          <a href="product.php" class="hero-cta-btn" id="heroCtaBtn">Explore Products</a>
        </div>

        <!-- Right-side stacked stats -->
        <div class="hero-stats-stack">
          <div class="hero-stat-stack-item">
            <i class="fa-solid fa-eye"></i>
            <span class="hss-number"><?php include 'data/counter.php'; ?></span>
            <span class="hss-label">Website Visits</span>
          </div>
          <div class="hero-stat-stack-divider"></div>
          <div class="hero-stat-stack-item">
            <i class="fa-solid fa-clock"></i>
            <span class="hss-number hss-clock" id="heroClock">00:00:00</span>
            <span class="hss-label">Current Time (MYT)</span>
          </div>
        </div>

      </section>

      <!-- Our Activities Section -->
      <section id="activities-section" class="scrollable-section">
        <div class="section-hero">
          <div class="section-hero-inner">
            <h2 class="section-title">Our Activities</h2>
            <div class="section-rule"></div>
            <p class="section-sub">Showcasing Malaysian innovation at international exhibitions and building strategic partnerships worldwide.</p>
          </div>
        </div>
        <?php include 'activities.php'; ?>
      </section>

      <!-- Why Choose Us Section -->
      <section id="whyus-section" class="scrollable-section">
        <div class="section-hero">
          <div class="section-hero-inner">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="section-rule"></div>
            <p class="section-sub">End-to-end solutions, certified expertise, and a proven track record trusted by 30+ clients across industries.</p>
          </div>
        </div>
        <?php include 'why_us.php'; ?>
      </section>

      <?php include 'techpartner.php'; ?>
    </main>

    <?php include 'include/footer.php'; ?>
  </div>

  <!-- Scripts at the very end -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      particles: {
        number: { value: 80 },
        color: { value: "#1A1A1A" },
        shape: { type: "circle" },
        opacity: { value: 0.5 },
        size: { value: 3 },
        line_linked: {
          enable: true,
          distance: 150,
          color: "#000000",
          opacity: 0.6,
          width: 1
        },
        move: {
          enable: true,
          speed: 3
        }
      },
      interactivity: {
        events: {
          onhover: { enable: true, mode: "grab" }, // change mode from "repulse" to "grab"
          onclick: { enable: false }
        },
        modes: {
          grab: { distance: 400, line_linked: { opacity: 0.6 } }, // set grab distance to 400
          repulse: { distance: 150 } // keep repulse if you use it elsewhere
        }
      },
      retina_detect: true
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({disableMutationObserver: true,startEvent: 'DOMContentLoaded',});

    const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('aos-animate');
      }
      });
    });

  document.querySelectorAll('[data-aos]').forEach(el => {
  observer.observe(el);
  });
  </script>
  <script src="include/script.js"></script>
</body>
