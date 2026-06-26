<?php
  ob_start();
  $pageTitle   = 'IOTE 2025 Shenzhen Participation | IA SoftTech';
  $pageDesc    = 'IA SoftTech participated in the 24th International Internet of Things Exhibition (IOTE) 2025 in Shenzhen, exploring IoT, AI and smart technologies.';
  $pageOGImage = '../images/Exhibition/iote/01.jpg';
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
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">IA SoftTech’s Participation in the International Internet of Things Exhibition (IOTE) 2025</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 31/03/2026  <br> Location: Shenzhen, China </p>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
            27–29 August 2025 | Shenzhen, China:
            IA SoftTech Sdn Bhd participated in The 24th International Internet of Things Exhibition (IOTE) 2025, held at the Shenzhen World Exhibition & Convention Center. This international exhibition brought together industry leaders to showcase the latest advancements in Internet of Things (IoT), artificial intelligence (AI), and smart technologies.
            The participation aimed to explore new technologies, identify potential collaboration partners, and gain insights into current industry trends that could support the company’s future project development. Throughout the exhibition, several technologies—including RFID, barcode scanning, electronic paper display (EPD), and smart tracking systems—were identified as having strong potential to enhance operational efficiency and asset management.
            Overall, the participation provided valuable exposure to technological innovations and strategic collaboration opportunities that align with the company’s future development direction and project initiatives.

          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Exhibition/iote/01.jpg" alt="SHENZEN 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Exhibition/iote/02.jpg" alt="SHENZEN 2">
          <img loading="lazy" src="../images/Exhibition/iote/03.jpg" alt="SHENZEN 3">
          <img loading="lazy" src="../images/Exhibition/iote/04.jpg" alt="SHENZEN 4">
          <img loading="lazy" src="../images/Exhibition/iote/05.jpg" alt="SHENZEN 5">
          <img loading="lazy" src="../images/Exhibition/iote/06.jpg" alt="SHENZEN 6">
          <img loading="lazy" src="../images/Exhibition/iote/07.jpg" alt="SHENZEN 7">
          <img loading="lazy" src="../images/Exhibition/iote/01.jpg" alt="SHENZEN 8">
          <img loading="lazy" src="../images/Exhibition/iote/02.jpg" alt="SHENZEN 9">
          <img loading="lazy" src="../images/Exhibition/iote/03.jpg" alt="SHENZEN 10">
          <img loading="lazy" src="../images/Exhibition/iote/04.jpg" alt="SHENZEN 11">
          <img loading="lazy" src="../images/Exhibition/iote/05.jpg" alt="SHENZEN 12">
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
