<?php
  ob_start();
  $pageTitle   = 'Gallery | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Browse the IA SoftTech company gallery — exhibitions, international events, team building activities and key milestones.';
  $pageOGImage = 'images/Exhibition/itex/01.jpg';
?>
<body>
  <div class="page-wrapper">
    <?php include 'include/header.php'; ?>
    <div class="main-content-gallery" style="background-color: #ffffff; position: relative; z-index: 1;">

      <!-- Gallery Page Hero -->
      <section class="prod-hero" style="background-color:#0f0f0f;background-image:linear-gradient(135deg,#0f0f0f 0%,#1a1a1a 55%,#2a0508 100%);">
        <div class="prod-hero-bg-grid"></div>
        <div class="prod-hero-glow"></div>
        <div class="prod-hero-inner">
          <h1 class="prod-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Company <span class="prod-hero-accent">Gallery</span>
          </h1>
          <p class="prod-hero-sub" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Explore our global exhibitions, industry events and team activities.
          </p>
        </div>
        <div class="prod-hero-scroll-indicator">
          <span></span>
        </div>
      </section>

      <section id="gallery">

        <!-- Organized Filter Tab Bar -->
        <div class="gallery-tab-bar">
          <div class="gallery-tab-row">
            <span class="gallery-tab-label"><i class="fas fa-trophy"></i> Exhibition</span>
            <div class="gallery-tab-buttons">
              <button class="gallery-tab" onclick="showGallery('dsa', this)">DSA-NATSEC 2026</button>
              <button class="gallery-tab" onclick="showGallery('cyberdsa', this)">CyberDSA 2025</button>
              <button class="gallery-tab" onclick="showGallery('smartcity', this)">Smart City EXPO 2025</button>
              <button class="gallery-tab" onclick="showGallery('iote', this)">IOTE 2025</button>
              <button class="gallery-tab" onclick="showGallery('cydes', this)">CYDES 2025</button>
              <button class="gallery-tab" onclick="showGallery('taiwan', this)">Taiwan EXPO 2025</button>
              <button class="gallery-tab" onclick="showGallery('netsec', this)">NETSEC 2025</button>
              <button class="gallery-tab active" onclick="showGallery('itex', this)">ITEX 2025</button>
            </div>
          </div>
          <div class="gallery-tab-row">
            <span class="gallery-tab-label"><i class="fas fa-people-group"></i> Team Building</span>
            <div class="gallery-tab-buttons">
              <button class="gallery-tab" onclick="showGallery('manjung', this)">Manjung Run 2025</button>
              <button class="gallery-tab" onclick="showGallery('teambuilding', this)">Team Building 2025</button>
            </div>
          </div>
          <div class="gallery-tab-row">
            <span class="gallery-tab-label"><i class="fa-brands fa-black-tie"></i> Ceremony &amp; Events</span>
            <div class="gallery-tab-buttons">
              <button class="gallery-tab" onclick="showGallery('raya', this)">Raya 2026</button>
              <button class="gallery-tab" onclick="showGallery('customs', this)">Customs 2026</button>
              <button class="gallery-tab" onclick="showGallery('loi-signing', this)">LOI Signing SigmaWave 2026</button>
            </div>
          </div>
        </div>

        <!-- Galleries — masonry columns layout -->
        <div id="itex" class="gallery-grid active">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/01.jpg" alt="ITEX 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/02.jpg" alt="ITEX 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/03.jpg" alt="ITEX 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/04.jpg" alt="ITEX 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/05.jpg" alt="ITEX 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/itex/06.jpg" alt="ITEX 2025"></div>
        </div>

        <div id="teambuilding" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/02.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/03.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/04.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/05.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/06.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/07.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/08.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/09.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/10.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/11.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/12.jpg" alt="Team Building"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/teambuild/13.jpg" alt="Team Building"></div>
        </div>

        <div id="netsec" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/netsec/01.jpg" alt="NETSEC 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/netsec/02.jpg" alt="NETSEC 2025"></div>
        </div>

        <div id="taiwan" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/taiwan/01.jpg" alt="Taiwan EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/taiwan/02.jpg" alt="Taiwan EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/taiwan/03.jpg" alt="Taiwan EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/taiwan/04.jpg" alt="Taiwan EXPO 2025"></div>
        </div>

        <div id="cydes" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/01.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/02.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/03.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/04.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/05.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/06.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/07.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/08.jpg" alt="CYDES 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cydes/09.jpg" alt="CYDES 2025"></div>
        </div>

        <div id="iote" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/01.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/02.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/03.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/04.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/05.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/06.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/07.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/08.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/09.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/10.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/11.jpg" alt="IOTE 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/iote/12.jpg" alt="IOTE 2025"></div>
        </div>

        <div id="smartcity" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/01.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/02.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/03.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/04.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/05.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/06.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/07.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/08.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/09.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/10.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/11.jpg" alt="Smart City EXPO 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/smartcity/12.jpg" alt="Smart City EXPO 2025"></div>
        </div>

        <div id="cyberdsa" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/01.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/02.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/03.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/04.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/05.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/06.jpg" alt="CyberDSA 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/cyberdsa/07.jpg" alt="CyberDSA 2025"></div>
        </div>

        <div id="dsa" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/dsanastec2026/01.jpeg" alt="DSA-NATSEC 2026 1"></div> 
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/dsanastec2026/02.jpeg" alt="DSA-NATSEC 2026 2"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/dsanastec2026/03.jpeg" alt="DSA-NATSEC 2026 3"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/dsanastec2026/05.jpeg" alt="DSA-NATSEC 2026 5"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Exhibition/dsanastec2026/06.jpeg" alt="DSA-NATSEC 2026 6"></div>
        </div>


        <div id="manjung" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/01.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/02.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/03.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/04.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/05.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/06.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/07.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/08.jpg" alt="Manjung Run 2025"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/TeamBuilding/manjung/09.jpg" alt="Manjung Run 2025"></div>
        </div>

        <div id="customs" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/01.jpg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/02.jpeg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/03.jpg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/04.jpg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/05.jpeg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/06.jpg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/07.jpg" alt="Customs 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Kastam/08.jpg" alt="Customs 2026"></div>
        </div>

        <div id="loi-signing" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Sigmawave/01.jpeg" alt="LOI Signing SigmaWave 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Sigmawave/02.jpeg" alt="LOI Signing SigmaWave 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/Sigmawave/03.jpeg" alt="LOI Signing SigmaWave 2026"></div>
        </div>

        <div id="raya" class="gallery-grid">
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/raya26/01.jpeg" alt="Raya 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/raya26/02.jpeg" alt="Raya 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/raya26/03.jpeg" alt="Raya 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/raya26/04.jpeg" alt="Raya 2026"></div>
          <div class="gallery-img-wrap"><img loading="lazy" src="images/Ceremony/raya26/05.jpeg" alt="Raya 2026"></div>
          </div>


      </section>
    </div>

    <?php include 'include/footer.php'; ?>
  </div>

  <!-- Lightbox Modal -->
  <div class="lightbox" id="lightbox">
    <button class="close" onclick="closeLightbox()" aria-label="Close">&times;</button>
    <button class="prev" onclick="changeImage(-1)" aria-label="Previous">&#10094;</button>
    <img id="lightboxImage" src="" alt="Gallery View">
    <button class="next" onclick="changeImage(1)" aria-label="Next">&#10095;</button>
    <div class="lightbox-counter" id="lightboxCounter"></div>
  </div>

  <script>
  // Tab filter — pass clicked button as second arg
  function showGallery(id, btn) {
    document.querySelectorAll('.gallery-grid').forEach(g => g.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    document.querySelectorAll('.gallery-tab').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');
  }

  // Lightbox
  let currentImages = [];
  let currentIndex  = 0;

  document.querySelectorAll('.gallery-grid img').forEach(img => {
    img.addEventListener('click', () => {
      // Use closest() so wrappers don't break the set
      currentImages = Array.from(img.closest('.gallery-grid').querySelectorAll('img'));
      currentIndex  = currentImages.indexOf(img);
      showLightbox();
    });
  });

  function updateCounter() {
    document.getElementById('lightboxCounter').textContent =
      (currentIndex + 1) + ' / ' + currentImages.length;
  }

  function showLightbox() {
    document.getElementById('lightboxImage').src = currentImages[currentIndex].src;
    document.getElementById('lightbox').style.display = 'flex';
    document.body.style.overflow = 'hidden';
    updateCounter();
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

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape')   closeLightbox();
    if (e.key === 'ArrowRight') changeImage(1);
    if (e.key === 'ArrowLeft')  changeImage(-1);
  });

  // Touch swipe support
  let touchStartX = 0;
  const lb = document.getElementById('lightbox');
  lb.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].clientX;
  }, { passive: true });
  lb.addEventListener('touchend', (e) => {
    const delta = touchStartX - e.changedTouches[0].clientX;
    if (Math.abs(delta) > 50) changeImage(delta > 0 ? 1 : -1);
  });
  </script>

  <script>
    document.addEventListener('contextmenu', e => e.preventDefault());
    document.querySelectorAll('img').forEach(img => {
      img.addEventListener('dragstart', e => e.preventDefault());
    });
  </script>
  <script src="include/script.js"></script>
</body>

