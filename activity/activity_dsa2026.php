<?php
  ob_start();
  $pageTitle   = 'DSA-NATSEC 2026 Exhibition | IA SoftTech';
  $pageDesc    = 'IA SoftTech participated in the DSA-NATSEC 2026 exhibition, showcasing advanced defence and security technology solutions.';
  $pageOGImage = '../images/Exhibition/dsanastec2026/01.jpeg';
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
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">IA SoftTech's Participation in DSA-NATSEC 2026</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 27/04/2026  <br>  Location: Malaysia International Trade and Exhibition Centre (MITEC), Kuala Lumpur  <br>  Date : 20 - 24 April 2026</p>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
            IA SoftTech Sdn Bhd participated in DSA NATSEC 2026, held at the Malaysia International Trade and Exhibition Centre (MITEC), Kuala Lumpur, from 20 to 24 April 2026. This prominent exhibition provided an excellent platform for industry exposure, knowledge sharing, and the exploration of potential business opportunities.

            Throughout the four-day event, the company arranged for staff to attend in groups, enabling employees to explore the exhibition, engage with industry players, and gain valuable insights into the latest technologies and developments.

            In addition, members of the Business Development (BD) Team, along with two supporting staff, were present throughout the entire duration of the exhibition. They provided assistance at the Kemalak Group booth while also focusing on networking and identifying future business opportunities.

            Overall, the event contributed positively to enhancing industry awareness and supporting the company’s business growth initiatives.
          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Exhibition/dsanastec2026/01.jpeg" alt="DSA-NATSEC 2026 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Exhibition/dsanastec2026/02.jpeg" alt="DSA-NATSEC 2026 2">
          <img loading="lazy" src="../images/Exhibition/dsanastec2026/03.jpeg" alt="DSA-NATSEC 2026 3">
          <img loading="lazy" src="../images/Exhibition/dsanastec2026/05.jpeg" alt="DSA-NATSEC 2026 5">
          <img loading="lazy" src="../images/Exhibition/dsanastec2026/06.jpeg" alt="DSA-NATSEC 2026 6">
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
