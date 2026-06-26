<?php
  ob_start();
  $pageTitle   = 'Smart City Expo Kuala Lumpur 2025 | IA SoftTech';
  $pageDesc    = 'IA SoftTech representatives attended the Smart City Expo Kuala Lumpur 2025 at KLCC, exploring AI, IoT, Digital Twin and smart city technologies.';
  $pageOGImage = '../images/Exhibition/smartcity/01.jpg';
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
        <h1 class="article-title" data-aos="fade-down" data-aos-duration="1500">Visit to Smart City Expo Kuala Lumpur 2025</h1>

        <!-- Meta Info -->
        <p class="article-meta">Updated: 31/03/2026 <br> Location: Hall 1, 2, 3 & 4, Kuala Lumpur Convention Centre (KLCC) </p>
        

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
           18 September 2025 | Kuala Lumpur:
           Representatives from the team attended the Smart City Expo Kuala Lumpur 2025, held at Hall 4 & 5, Kuala Lumpur Convention Centre (KLCC). The visit aimed to explore advancements in smart city technologies and evaluate innovative solutions presented by both local and international companies.
           During the visit, participants explored various exhibition booths showcasing technologies such as Artificial Intelligence (AI), Internet of Things (IoT), Digital Twin, real-time data analytics, and robotics. Notable companies that stood out included Intel, Dell Technologies, VL JEJAK, SoftwareOne, and Weston Robot, each presenting solutions relevant to future urban development.
           Key highlights included AI-powered Digital Twin for urban infrastructure simulation, Edge AI for traffic and security management, AI-based flood prediction systems for early disaster warning, and autonomous robots for cleaning, security, and urban logistics operations. These technologies demonstrated the practical application of real-time data and AI in improving urban efficiency and management.
           Overall, the visit provided valuable exposure to emerging technologies and reinforced the potential of smart solutions in building more efficient, secure, and sustainable cities
          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Exhibition/smartcity/01.jpg" alt="Smart City 1">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Exhibition/smartcity/02.jpg" alt="Smart City 2">
          <img loading="lazy" src="../images/Exhibition/smartcity/03.jpg" alt="Smart City 3">
          <img loading="lazy" src="../images/Exhibition/smartcity/04.jpg" alt="Smart City 4">
        </div>

      
        <br><br><br>

        <!-- Body Text -->
        <div class="article-body" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <p>
           19 September 2025 | Kuala Lumpur:
           Team representatives attended the third day of Smart City Expo Kuala Lumpur 2025. The visit provided further exposure to smart city technologies, artificial intelligence (AI), robotics, and digital management systems presented by both local and international technology companies.
           Throughout the visit, participants explored exhibition booths featuring innovations from companies such as Ericsson, Huawei, Odoo, Robotemi, ServeDeck, and Dobot. The showcased technologies included smart city application platforms, AI-based security systems, autonomous robots, smart logistics solutions, and cloud-based facility management platforms.
           Key highlights included the PEARL smart super app, which integrates urban services and e-wallet capabilities for community use, AI-driven surveillance and traffic control systems to enhance public safety and traffic management, as well as the integration of 5G, IoT, and big data analytics to support smart city development. In addition, demonstrations of autonomous and service robots showcased their applications in hospitality, healthcare, logistics, and business operations.
           Overall, the third-day visit provided deeper insight into the smart city technology ecosystem and demonstrated how AI, robotics, and digital systems can significantly improve operational efficiency, service delivery, and urban management.

          </p>
        </div>

        <!-- Hero Image (first image large) -->
        <div class="article-hero-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <img loading="lazy" src="../images/Exhibition/smartcity/05.jpg" alt="Smart City 5">
        </div>

        <!-- Image Grid (remaining images in creative grid) -->
        <div class="article-grid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          <img loading="lazy" src="../images/Exhibition/smartcity/07.jpg" alt="Smart City 6">
          <img loading="lazy" src="../images/Exhibition/smartcity/10.jpg" alt="Smart City 7">
          <img loading="lazy" src="../images/Exhibition/smartcity/11.jpg" alt="Smart City 8">
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
