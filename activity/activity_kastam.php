<?php
  ob_start();
  $pageTitle   = 'Royal Malaysian Customs Dept Night Vision Helmet Commissioning | IA SoftTech';
  $pageDesc    = 'IA SoftTech delivered and commissioned 8 units of Monocular Night Vision Goggles for the special unit of the Royal Malaysian Customs Department.';
  $pageOGImage = '../images/Ceremony/Kastam/08.jpg';
?>
<body>
  <div class="page-wrapper">
    <?php $basePath = '../'; ?>
    <?php include '../include/header.php'; ?>
    <div class="main-content2">
      <video class="page-bg-video" autoplay muted loop playsinline>
        <source src="../videos/allpage.mp4" type="video/mp4">
      </video>
      <article class="article-page">

        <!-- Tag Badge -->
        <span class="article-tag">ACTIVITY</span>

        <!-- Title -->
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">Acceptance and Commissioning of Night Vision Helmet for Special Unit from Royal Malaysian Customs Department</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 31/03/2026</p>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
            The acceptance and commissioning program for 8 units of Helmet Monocular Night Vision Goggles for the special unit of the Royal Malaysian Customs Department was successfully conducted at the Customs Headquarters.
            The program was attended by 18 customs officers, where IA SoftTech officially handed over the equipment and provided operational training. The session proceeded smoothly and achieved its objective of enhancing the operational capabilities of the customs special unit.

          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Ceremony/Kastam/07.jpg" alt="Kastam 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Ceremony/Kastam/02.jpeg" alt="Kastam 2">
          <img loading="lazy" src="../images/Ceremony/Kastam/03.jpg" alt="Kastam 3">
          <img loading="lazy" src="../images/Ceremony/Kastam/04.jpg" alt="Kastam 4">
          <img loading="lazy" src="../images/Ceremony/Kastam/05.jpeg" alt="Kastam 5">
          <img loading="lazy" src="../images/Ceremony/Kastam/06.jpg" alt="Kastam 6">
          <img loading="lazy" src="../images/Ceremony/Kastam/01.jpg" alt="Kastam 7">
          <img loading="lazy" src="../images/Ceremony/Kastam/08.jpg" alt="Kastam 8">
        </div>

      </article>
    </div>
    <?php include '../include/footer.php'; ?>
  </div>

  <!-- Lightbox Modal -->
  <div class="lightbox" id="lightbox">
    <button class="close" onclick="closeLightbox()">&times;</button>
    <button class="prev" onclick="changeImage(-1)">&#10094;</button>
    <img id="lightboxImage" src="" alt="Gallery View">
    <button class="next" onclick="changeImage(1)">&#10095;</button>
  </div>

  <script>
    let currentImages = [];
    let currentIndex = 0;

    document.querySelectorAll('.article-hero-img img, .article-grid img').forEach(img => {
      img.addEventListener('click', () => {
        const allImages = document.querySelectorAll('.article-hero-img img, .article-grid img');
        currentImages = Array.from(allImages);
        currentIndex = currentImages.indexOf(img);
        showLightbox();
      });
    });

    function showLightbox() {
      const lightbox = document.getElementById('lightbox');
      document.getElementById('lightboxImage').src = currentImages[currentIndex].src;
      lightbox.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      document.getElementById('lightbox').style.display = 'none';
      document.body.style.overflow = '';
    }

    function changeImage(direction) {
      currentIndex += direction;
      if (currentIndex < 0) currentIndex = currentImages.length - 1;
      if (currentIndex >= currentImages.length) currentIndex = 0;
      showLightbox();
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') changeImage(1);
      if (e.key === 'ArrowLeft') changeImage(-1);
    });

    document.addEventListener('contextmenu', e => e.preventDefault());
    document.querySelectorAll('img').forEach(img => {
      img.addEventListener('dragstart', e => e.preventDefault());
    });
  </script>

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
  <script src="../include/script.js"></script>
</body>
