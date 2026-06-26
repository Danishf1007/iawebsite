<?php
  ob_start();
  $pageTitle   = 'Careers | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Explore career opportunities at IA SoftTech Sdn Bhd. We are looking for passionate IT professionals to join our growing team in Malaysia.';
  $pageOGImage = 'images/hero6.jpg';
?>
<body>
  <div class="page-wrapper">
    <?php include 'include/header.php'; ?>
    <div class="main-content-career">
      <video class="page-bg-video" autoplay muted loop playsinline>
        <source src="videos/allpage.mp4" type="video/mp4">
      </video>
      <section id="careers">
        <h2 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="700">Careers</h2>
        <div class="career-banner" data-aos="zoom-in-down" data-aos-duration="2000" data-aos-delay="700">
    <!-- <img src="images/Career/01.png" alt="Career Opportunities" class="career-img"> -->
</div>
      <div class="career" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
        <p>No Current Job Openings</p>
        <p>We currently do not have any open job vacancies.</p>
        <p>However, we are always looking for passionate and talented individuals
          to join our team in the future.
        </p>
        <p>Drop us your resume at <a href="mailto:info@iasofttech.com.my">info@iasofttech.com.my</a></p>
      </div>
      </section>
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
