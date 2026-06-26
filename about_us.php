<?php
  ob_start();
  $pageTitle   = 'About Us | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Learn about IA SoftTech Sdn Bhd — our vision, mission, core values, leadership team and certifications. A trusted IT partner for enterprises and government agencies in Malaysia.';
  $pageOGImage = 'images/office.jpg';
?>
<body>
<div class="page-wrapper">
  <?php include 'include/header.php'; ?>
  <div class="main-content2" style="background-color: #ffffff; position: relative; z-index: 1;">

    <!-- About Page Hero -->
    <section class="prod-hero" style="background-color:#0f0f0f;background-image:linear-gradient(135deg,#0f0f0f 0%,#1a1a1a 55%,#2a0508 100%);">
      <div class="prod-hero-bg-grid"></div>
      <div class="prod-hero-glow"></div>
      <div class="prod-hero-inner">
        <h1 class="prod-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          About <span class="prod-hero-accent">Us</span>
        </h1>
      </div>
      <div class="prod-hero-scroll-indicator">
        <span></span>
      </div>
    </section>

    <section id="about">
      <div class="about-section">
        <div class="about-content" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="700">
          <p>
            IA SoftTech Sdn Bhd is a leading IT solutions provider specializing in system integration, managed
            services and end-to-end IT solutions. With a strong presence in cloud computing, cybersecurity,
            software development, IT infrastructure and defense systems, we deliver cutting-edge technology
            to enterprises and government sectors.
          </p>
          <p>
            We believe in driving innovation and empowering businesses with transformative IT solutions. Our
            team of highly skilled professionals works closely with clients to understand their unique challenges
            and deliver tailored solutions that optimize operations, enhance security and promote digital growth.
          </p>
          <p>
            As a trusted IT partner, we leverage our strategic alliances with global technology giants to bring
            world-class solutions to local and international markets. We continually invest in research and
            development, as well as talent development, to stay ahead of technological advancements and
            provide cutting-edge solutions to our clients.
          </p>
        </div>

        <div class="about-cards" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
          <div class="about-card">
            <h3>VISION</h3>
            <p>
              Our vision is to be the leading IT solutions provider in Asia, driving
              digital transformation through innovation, excellence and strategic partnerships.
            </p>
          </div>
          <div class="about-card">
            <h3>MISSION</h3>
            <p>
              Our mission is to expand our footprint across Asia while establishing a dominant
              presence in the domestic market. Through innovation, strategic partnerships and
              a commitment to excellence, IA SoftTech Sdn Bhd aims to be the preferred IT solutions
              provider in the region.
            </p>
          </div>
        </div>
      </div>

      <br><br>

    <!-- Our Leader -->
    <div class="ceo2-section" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

      <div class="ceo2-container">

        <!-- Row 1: Title + Name header -->
        <div class="ceo2-header">
          <div class="ceo2-title-block">
            <h2>Chief Executive</h2>
            <h2>Officer</h2>
          </div>
          <!-- <div class="ceo2-name-block">
            <p class="ceo2-name">Aliff Bin Datuk Wira Haji Amir Sharifuddin</p>
          </div> -->
        </div>

        <!-- Photo + All text side-by-side -->
        <div class="ceo2-body">

          <div class="ceo2-photo-col">
            <img src="images/Ceo18.png" alt="Aliff Bin Datuk Wira Haji Amir Sharifuddin — Chief Executive Officer of IA SoftTech" class="ceo2-photo" />
          </div>

          <div class="ceo2-bio-col">
            <h1>Aliff bin Datuk Wira Haji Amir Sharifuddin</h1> 
            <p>Mr. Aliff holds a Bachelor's Degree in Business and Marketing from Coventry University, United Kingdom.</p>
            <p>He started his career as a Business Development Manager and successfully led important projects like the Part Task Trainer A400M for the Ministry of Defence Malaysia. He later became Head of Corporate Affairs and Communication, where he worked on securing defence contracts with the Malaysia Armed Forces.</p>
            <p>As a former Chief Operating Officer, Mr. Aliff has over 10 years of experience in project management, procurement, and corporate strategy. Since becoming CEO in 2025, he has helped grow IA SoftTech's digital solutions, launched new platforms to improve client engagement, and strengthened the company's role in the regional market.</p>
            <p>He is also committed to personal growth and is currently pursuing a Master of Management to further develop his leadership and strategic skills.</p>
          </div>

        </div>
      </div>
    </div><!-- /.ceo2-section -->

    <br><br><br>

        <!-- Our Certification Section -->
      <div class="certification-section" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" style="margin: 60px 0 0 0;">
        <h2 style="text-align:center; color:#1A1A1A;">Our Certification</h2>

        <div class="certification-flex">
          
          <!-- Certificate 1 -->

          <!-- Certificate 2 -->
          <div class="cert-item">
            <div class="cert-img-wrapper">
              <img loading="lazy" src="certificates/iso.jpg" alt="ISO Certificate" class="cert-img" />
              <div class="cert-details">
                <h3>ISO Certification</h3>
                <p>
                  IA Softtech is ISO certified, ensuring quality management and operational efficiency.
                </p>
                <strong>Key Features:</strong>
                <ul>
                  <li>International quality assurance standards.</li>
                  <li>Continuous improvement practices.</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div><!-- /.certification-section -->

      <?php include 'iso.php'; ?>

  </section>
</div>
  <?php include 'include/footer.php'; ?>
</div>


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
<script>
  // disable right-click on whole page
  document.addEventListener('contextmenu', e => e.preventDefault());

  // disable dragging on all images
  document.querySelectorAll('img').forEach(img => {
    img.addEventListener('dragstart', e => e.preventDefault());
  });
</script>
<script src="include/script.js"></script>
</body>
