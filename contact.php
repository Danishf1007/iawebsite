<?php
  ob_start();
  $pageTitle   = 'Contact Us | IA SoftTech Sdn Bhd';
  $pageDesc    = 'Get in touch with IA SoftTech Sdn Bhd. Call +603 2201 2320, email info@iasofttech.com.my or visit us at Dana 1 Commercial Centre, Petaling Jaya, Selangor.';
  $pageOGImage = 'images/hero7.jpg';
?>
<body>
  <div class="page-wrapper">
    <?php include 'include/header.php'; ?>
    <div class="main-content2">
      <video class="page-bg-video" autoplay muted loop playsinline>
        <source src="videos/allpage.mp4" type="video/mp4">
      </video>
      <section class="contact-section">
  <div class="contact-wrapper" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="700">
    <div class="contact-left">
      <div class="contact-item">
        <i class="fas fa-phone"></i>
        <p>+603 2201 2320</p>
      </div>
      <div class="contact-item">
        <i class="fab fa-whatsapp"></i>
        <p><a href="https://wa.me/60143422770" target="_blank">Helpdesk</a></p>
        <p>Scan to Chat with Our Support Team on WhatsApp</p>
        <img loading="lazy" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://wa.me/60143422770" alt="WhatsApp QR Code" style="height: 120px; width: 120px;margin-top:10px;border:2px solid white;">
      </div>
      <div class="contact-item">
        <i class="fas fa-envelope"></i>
        <p><a href="mailto:info@iasofttech.com.my">info@iasofttech.com.my</a></p>
      </div>
      <div class="contact-item">
        <i class="fas fa-file-pdf"></i>
        <p>
          <a href="CompanyProfile.pdf" target="_blank">Company Profile</a>
        </p>
      </div>
    </div>
    <div class="contact-right">
      <i class="fas fa-map-marker-alt contact-icon"></i>
      <p><strong>IA SOFTTECH SDN. BHD.</strong></p>
      <span style="font-family: 'Courier New';">
        D5-5-G, Dana 1 Commercial Centre,<br>
        Jalan PJU 1A/46 47301 Petaling Jaya,<br>
        Selangor, Malaysia.
      </span>
      
    <!-- Google Map Embed -->
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4902.113102673068!2d101.58179007581339!3d3.110699953386075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4d7ad6d9121f%3A0x63b6a2427f384e68!2sIA%20SoftTech%20Sdn%20Bhd!5e1!3m2!1sen!2smy!4v1752111577523!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<section class="inquiry-section">
  <div class="inquiry-wrapper">
    <h2>Send Us an Inquiry</h2>
    <form action="include/send_inquiry.php" method="POST" class="contact-form">

  <input type="text" id="name" name="name" placeholder="Name" required />

  <input type="email" id="email" name="email" placeholder="Email" required />

  <input type="text" id="subject" name="subject" placeholder="Subject" required />

  <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

  <button type="submit">Submit Inquiry</button>
</form>
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
