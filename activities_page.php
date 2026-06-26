<?php
  ob_start();
  $pageTitle   = 'Our Activities | IA SoftTech Sdn Bhd';
  $pageDesc    = 'See IA SoftTech\'s latest exhibitions, partnerships and industry events — from international IoT expos to smart city showcases.';
  $pageOGImage = 'images/Exhibition/smartcity/01.jpg';
?>
<body>
<div class="page-wrapper">
  <?php include 'include/header.php'; ?>
  <div class="main-content2">
    <video class="page-bg-video" autoplay muted loop playsinline>
      <source src="videos/allpage.mp4" type="video/mp4">
    </video>

    <!-- Page Hero -->
    <div class="about-page-hero" style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('images/Main2.jpg') center center / cover no-repeat;">
      <div class="about-page-hero-inner">
        <h1 class="about-page-title">Our Activities</h1>
        <div class="about-page-rule"></div>
        <p class="about-page-sub">Showcasing Malaysian innovation at international exhibitions and building strategic partnerships worldwide.</p>
      </div>
    </div>

    <?php include 'activities.php'; ?>

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
