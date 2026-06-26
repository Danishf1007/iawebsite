<?php
  ob_start();
  $pageTitle   = 'Our Leaders | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Meet the leadership of IA SoftTech Sdn Bhd — CEO Aliff Bin Datuk Wira and COO Ts. Azlizan Bin Aziz — driving digital transformation across Malaysia.';
  $pageOGImage = 'images/office.jpg';
?>
<body>
  <div class="page-wrapper">
    <?php include 'include/header.php'; ?>
    <div class="main-content2">
      <video class="page-bg-video" autoplay muted loop playsinline>
        <source src="videos/allpage.mp4" type="video/mp4">
      </video>

      <!-- Hero with dark overlay + title -->
      <div class="leaders-hero-image">
        <img src="images/office.jpg" alt="Our Leaders Banner" />
        <div class="leaders-hero-overlay">
          <h1 class="leaders-hero-title">Our Leaders</h1>
          <p class="leaders-hero-sub">The vision and experience driving IA SoftTech forward</p>
        </div>
      </div>

      <!-- CEO Profile -->
      <div class="leader-profile-section" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
        <div class="leader-section-header">
          <p class="leader-eyebrow">OUR LEADERSHIP</p>
          <h2 class="leader-section-title">Our Leader</h2>
          <div class="leader-section-rule"></div>
        </div>

        <div class="lceo-wrap">

          <!-- Photo -->
          <div class="lceo-photo-col">
            <img src="images/ceo.jpeg" alt="Aliff Bin Datuk Wira Haji Amir Sharifuddin — Chief Executive Officer of IA SoftTech" class="lceo-photo" />
            <div class="lceo-photo-caption">Chief Executive Officer</div>
          </div>

          <!-- Content -->
          <div class="lceo-content">
            <span class="lceo-badge">CEO</span>
            <h1 class="lceo-name">Aliff Bin Datuk Wira Haji Amir Sharifuddin</h1>
            <div class="lceo-rule"></div>
            <p class="lceo-position">CHIEF EXECUTIVE OFFICER OF <span class="lceo-position-brand">IA SOFTTECH</span></p>
            <div class="lceo-bio">
              <p>Mr. Aliff Bin Datuk Wira Haji Amir Sharifuddin is the Chief Executive Officer of IA SoftTech, where he leads the company's digital growth and transformation. He holds a Bachelor's Degree in Business and Marketing from Coventry University, United Kingdom.</p>
              <p>He started his career as a Business Development Manager and successfully led important projects like the Part Task Trainer A400M for the Ministry of Defence Malaysia. He later became Head of Corporate Affairs and Communication, where he worked on securing defence contracts with the Malaysia Armed Forces.</p>
              <p>As a former Chief Operating Officer, Mr. Aliff has over 10 years of experience in project management, procurement, and corporate strategy. Since becoming CEO in 2025, he has helped grow IA SoftTech's digital solutions, launched new platforms to improve client engagement, and strengthened the company's role in the regional market.</p>
              <p>He is also committed to personal growth and is currently pursuing a Master of Management to further develop his leadership and strategic skills.</p>
            </div>
          </div>

        </div>
      </div><!-- /.leader-profile-section CEO -->

      <!-- COO Profile -->
      <div class="leader-profile-section lcoo-section" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

        <div class="lceo-wrap lceo-wrap-reverse">

          <!-- Content -->
          <div class="lceo-content">
            <span class="lceo-badge">COO</span>
            <h1 class="lceo-name">Ts. Azlizan Bin Aziz</h1>
            <div class="lceo-rule"></div>
            <p class="lceo-position">CHIEF OPERATING OFFICER OF <span class="lceo-position-brand">IA SOFTTECH</span></p>
            <div class="lceo-bio">
              <p>Mr. Azlizan Bin Aziz is the Chief Operating Officer of IA SoftTech, with nearly 20 years of experience in the IT and telecommunications industry. He holds a Diploma in Telecommunication Technology from the Advanced Technology Training Center (ADTEC) and is certified by the Malaysia Board of Technologists (MBOT) as a Technologist in Information and Computing Technology.</p>
              <p>He started his career as a Project Manager from 2008 to 2020, where he was responsible for managing risks, tracking project results, and ensuring clear communication with all teams and stakeholders.</p>
              <p>From 2020 to 2025, he worked as Head of Manager, handling major infrastructure and defence-related projects. During this time, he also completed special training in Air-to-Ground Strafing and Bomb Scoring Systems, which helped him manage projects related to air-to-ground bombing systems.</p>
              <p>In 2025, he became Chief Operating Officer of IA SoftTech. In this role, he oversees all IT-related tenders and supports the company's business growth and project success. His strong technical skills and leadership continue to drive the company forward.</p>
            </div>
          </div>

          <!-- Photo placeholder (no photo yet) -->
          <div class="lceo-photo-col">
            <div class="lceo-no-photo">
              <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="lceo-photo-caption">Chief Operating Officer</div>
          </div>

        </div>
      </div><!-- /.leader-profile-section COO -->
    </div>
    <?php include 'include/footer.php'; ?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ disableMutationObserver: true, startEvent: 'DOMContentLoaded' });
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('aos-animate');
    });
  });
  document.querySelectorAll('[data-aos]').forEach(el => observer.observe(el));
</script>
<script src="include/script.js"></script>
</body>
