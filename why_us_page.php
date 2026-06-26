<?php
  ob_start();
  $pageTitle   = 'Why Choose Us | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Discover why enterprises and government agencies trust IA SoftTech — experienced team, client-centric approach and reliable post-deployment support.';
  $pageOGImage = 'images/hero7.jpg';
?>
<body>
<div class="page-wrapper">
  <?php include 'include/header.php'; ?>
  <div class="main-content2">
    <video class="page-bg-video" autoplay muted loop playsinline>
      <source src="videos/allpage.mp4" type="video/mp4">
    </video>

    <!-- Page Hero -->
    <div class="about-page-hero" style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('images/Main3.jpg') center center / cover no-repeat;">
      <div class="about-page-hero-inner">
        <p class="about-page-eyebrow">OUR EDGE</p>
        <h1 class="about-page-title">Why Choose Us</h1>
        <div class="about-page-rule"></div>
        <p class="about-page-sub">End-to-end solutions, certified expertise, and a proven track record trusted by 30+ clients across industries.</p>
      </div>
    </div>

    <?php include 'why_us.php'; ?>

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
