<?php
  ob_start();
  $pageTitle   = 'Canon Think Big SmartTech Programme | IA SoftTech';
  $pageDesc    = 'IA SoftTech participated in the Canon Think Big: Lead with SmartTech programme in Petaling Jaya, exploring AI, cloud computing and workflow automation.';
  $pageOGImage = '../images/Exhibition/Programcanon/03.jpeg';
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
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">Participation in Canon Think Big: Lead with SmartTech Programme</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 31/03/2026  <br> Location: Petaling Jaya </p>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
            12 November 2025 | Petaling Jaya:
            Team representatives attended the Canon Think Big: Lead with SmartTech programme organized by Canon Marketing Malaysia. The programme aimed to inspire local organizations to leverage smart technologies and digital innovation in response to the rapidly evolving business landscape.
            Throughout the event, participants gained exposure to various technology solutions designed to improve operational efficiency, information management, and digital transformation. Key focus areas included artificial intelligence (AI), cloud computing, workflow automation, and real-time operational analytics.
            Highlighted technologies included the next-generation imageFORCE multifunction devices, AI Document Processing (Antelope) for intelligent document management, and VisualAI for real-time operational monitoring. In addition, Panasonic Malaysia ներկայացd smart networking solutions and AI-based surveillance systems to enhance organizational security and infrastructure management.
            The Therefore platform was also introduced as an Enterprise Content Management (ECM) system, enabling organizations to securely store, manage, and process business information through workflow automation and intelligent document handling. Interactive display technologies by iSONIC were showcased to support hybrid work and learning environments, featuring 4K touch displays, wireless screen sharing, and integration with video conferencing platforms.
            Overall, the programme provided valuable insights into how smart technologies can enhance productivity, strengthen data security, and improve operational effectiveness, supporting the development of more modern and efficient work environments.

          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Exhibition/Programcanon/03.jpeg" alt="programcanon 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Exhibition/Programcanon/02.jpeg" alt="programcanon 2">
          <img loading="lazy" src="../images/Exhibition/Programcanon/01.jpeg" alt="programcanon 3">
          <img loading="lazy" src="../images/Exhibition/Programcanon/04.jpeg" alt="programcanon 4">
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
