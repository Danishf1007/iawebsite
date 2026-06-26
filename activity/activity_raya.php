<?php
  ob_start();
  $pageTitle   = 'Jamuan Raya IA SoftTech 2026 | IA SoftTech';
  $pageDesc    = 'IA SoftTech hosted a Hari Raya 2026 gathering, celebrating the festive season together with team members and guests.';
  $pageOGImage = '../images/Ceremony/raya26/01.jpeg';
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
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">Jamuan Raya IA SoftTech 2026</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 27/04/2026  <br>  Location: IA SoftTech</p>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
            IA SoftTech Sdn Bhd proudly organized a joyful Jamuan Hari Raya celebration on 17 April 2026. The event was held at our office and brought together all staff in a warm and festive atmosphere.

            This year, the celebration was made extra special with a potluck session, where employees contributed a variety of delicious homemade and traditional Hari Raya dishes. The sharing of food not only showcased everyone’s creativity but also strengthened the bond among colleagues.

            The event was filled with laughter, great conversations, and a strong sense of togetherness, reflecting the true spirit of Hari Raya. It was a memorable occasion that highlighted unity, appreciation, and the vibrant culture within our company.
          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Ceremony/raya26/01.jpeg" alt="Jamuan Raya IA SoftTech 2026 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Ceremony/raya26/02.jpeg" alt="Jamuan Raya IA SoftTech 2026 2">
          <img loading="lazy" src="../images/Ceremony/raya26/03.jpeg" alt="Jamuan Raya IA SoftTech 2026 3">
          <img loading="lazy" src="../images/Ceremony/raya26/04.jpeg" alt="Jamuan Raya IA SoftTech 2026 4">
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
