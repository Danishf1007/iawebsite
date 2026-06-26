<footer>
  <div class="footer-main">

    <!-- Column 1: Brand -->
    <div class="footer-brand" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
      <a href="<?= $basePath ?>index.php">
        <img src="<?= $basePath ?>images/logo8.png" alt="IA SoftTech Logo" class="footer-logo">
      </a>
      <p class="footer-tagline">Accelerating Innovation Through<br>Intelligent Technology Solutions.</p>
      <div class="footer-social">
        <a href="https://www.youtube.com/@IASTTV" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://www.tiktok.com/@iast_tv" target="_blank" rel="noopener" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
        <a href="https://www.linkedin.com/company/ia-softtech/posts/?feedView=all" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
      </div>
    </div>

    <!-- Column 2: Quick Links -->
    <div class="footer-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
      <h4 class="footer-col-heading">Quick Links</h4>
      <ul class="footer-links">
        <li><a href="<?= $basePath ?>index.php"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
        <li><a href="<?= $basePath ?>about_us.php"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
        <li><a href="<?= $basePath ?>directory.php"><i class="fa-solid fa-chevron-right"></i> Directory</a></li>
        <li><a href="<?= $basePath ?>product.php"><i class="fa-solid fa-chevron-right"></i> Products</a></li>
        <li><a href="<?= $basePath ?>activities_page.php"><i class="fa-solid fa-chevron-right"></i> Activities</a></li>
        <li><a href="<?= $basePath ?>partners.php"><i class="fa-solid fa-chevron-right"></i> Partners</a></li>
        <li><a href="<?= $basePath ?>career.php"><i class="fa-solid fa-chevron-right"></i> Career</a></li>
        <li><a href="<?= $basePath ?>gallery.php"><i class="fa-solid fa-chevron-right"></i> Gallery</a></li>
        <li><a href="<?= $basePath ?>contact.php"><i class="fa-solid fa-chevron-right"></i> Contact</a></li>
        <li><a href="<?= $basePath ?>privacy_policy.php"><i class="fa-solid fa-chevron-right"></i> Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Column 3: Contact -->
    <div class="footer-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
      <h4 class="footer-col-heading">Contact Us</h4>
      <ul class="footer-contact-list">
        <li><i class="fa-solid fa-location-dot"></i>
          <span>D5-5-G, Dana 1 Commercial Centre,<br>Jalan PJU 1A/46, 47301 Petaling Jaya,<br>Selangor, Malaysia</span>
        </li>
        <li><i class="fa-solid fa-phone"></i>
          <span><a href="tel:+60322012320">+603 2201 2320</a></span>
        </li>
        <li><i class="fa-solid fa-envelope"></i>
          <span><a href="mailto:info@iasofttech.com.my">info@iasofttech.com.my</a></span>
        </li>
        <li><i class="fa-brands fa-whatsapp"></i>
          <span><a href="https://wa.me/60143422770" target="_blank" rel="noopener">WhatsApp Helpdesk</a></span>
        </li>
      </ul>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <p>© 2026 IA SoftTech Sdn. Bhd. All Rights Reserved.</p>
    <div>
      <a href="<?= $basePath ?>privacy_policy.php" style="margin-right: 16px;"><i class="fa-solid fa-shield"></i> Privacy Policy</a>
      <a href="<?= $basePath ?>CompanyProfile2026.pdf" target="_blank"><i class="fa-solid fa-file-pdf"></i> Company Profile</a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    disableMutationObserver: true,
    startEvent: 'DOMContentLoaded',
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('aos-animate');
      }
    });
  });

  document.querySelectorAll('[data-aos]').forEach(el => observer.observe(el));
</script>
