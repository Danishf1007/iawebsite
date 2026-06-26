<?php
  ob_start();
  $basePath = '';
  $pageTitle = 'Products | IA SoftTech Sdn Bhd';
  $pageDesc = 'Explore our comprehensive range of IT software solutions and professional training programs designed for enterprise and government sectors.';
  $pageKeywords = 'IT software solutions, software products, training programs, enterprise software, IT training, Malaysia';
  $pageOGImage = $basePath . 'images/product-hero.jpg';
  include 'include/header.php';
?>

<body>
  <div class="page-wrapper">
    <div class="main-content2" style="background-color: #ffffff; position: relative; z-index: 1;">

      <!-- ░░ HERO ░░ -->
      <section class="prod-hero" style="background-color:#0f0f0f;background-image:linear-gradient(135deg,#0f0f0f 0%,#1a1a1a 55%,#2a0508 100%);">
        <div class="prod-hero-bg-grid"></div>
        <div class="prod-hero-glow"></div>
        <div class="prod-hero-inner">
          <h1 class="prod-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Our <span class="prod-hero-accent">Products</span>
          </h1>
          <p class="prod-hero-sub" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Innovative enterprise solutions — from cybersecurity to AI automation — tailored for business and government.
          </p>
        </div>
        <div class="prod-hero-scroll-indicator">
          <span></span>
        </div>
      </section>

      <!-- ░░ TABS + PRODUCTS ░░ -->
      <section class="prod-section">

        <!-- Pill Tabs -->
        <div class="prod-tabs-wrap" data-aos="fade-up" data-aos-duration="700">
          <div class="prod-tabs">
            <button class="prod-tab active" data-cat="software">
              <i class="fas fa-cube"></i> Software Solutions
            </button>
            <button class="prod-tab" data-cat="services-tab">
              <i class="fa-brands fa-servicestack"></i> Services
            </button>
            <button class="prod-tab" data-cat="training">
              <i class="fas fa-graduation-cap"></i> Training Programs
            </button>
          </div>
        </div>

        <!-- ── Software Solutions ── -->
        <div id="software" class="prod-cat active">
          <div class="prod-grid">

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
              <div class="prod-card-icon" style="--icon-color:#16a34a;">
                <i class="fas fa-boxes"></i>
              </div>
              <div class="prod-card-body">
                <h3>Inventory &amp; Asset Management System (IAMS)</h3>
                <p>Comprehensive inventory tracking and optimization platform with real-time stock management, automated reordering, and supply chain integration.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Real-time Stock Tracking</li>
                  <li><i class="fas fa-check-circle"></i> Automated Reordering</li>
                  <li><i class="fas fa-check-circle"></i> Supply Chain Integration</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
              <div class="prod-card-icon" style="--icon-color:#4f46e5;">
                <i class="fas fa-briefcase"></i>
              </div>
              <div class="prod-card-body">
                <h3>Human Resources Information Automation System (HRIAS)</h3>
                <p>Advanced HR automation platform utilizing AI and workflow automation to streamline HR processes, reduce manual tasks, and improve employee experience.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Workflow Automation</li>
                  <li><i class="fas fa-check-circle"></i> AI-Driven Insights</li>
                  <li><i class="fas fa-check-circle"></i> Employee Self-Service</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
              <div class="prod-card-icon" style="--icon-color:#d97706;">
                <i class="fas fa-lock"></i>
              </div>
              <div class="prod-card-body">
                <h3>Identity &amp; Access Management (IAM)</h3>
                <p>Advanced authentication and authorization with multi-factor security, role-based access control, and comprehensive audit trails.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Multi-factor Auth</li>
                  <li><i class="fas fa-check-circle"></i> RBAC System</li>
                  <li><i class="fas fa-check-circle"></i> Audit Logging</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="650">
              <div class="prod-card-icon" style="--icon-color:#7c3aed;">
                <i class="fas fa-robot"></i>
              </div>
              <div class="prod-card-body">
                <h3>AI-Powered Automation Platform</h3>
                <p>Intelligent automation leveraging artificial intelligence and machine learning to streamline business processes and boost efficiency.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> ML Models</li>
                  <li><i class="fas fa-check-circle"></i> Process RPA</li>
                  <li><i class="fas fa-check-circle"></i> Smart Analytics</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

          </div><!-- /prod-grid -->
        </div><!-- /#software -->

        <!-- ── Training Programs ── -->
        <div id="training" class="prod-cat">
          <div class="prod-grid prod-grid--training">


            <div class="prod-card prod-card--training" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350">
              <div class="prod-card-icon" style="--icon-color:#4285f4;">
                <i class="fab fa-google"></i>
              </div>
              <div class="prod-card-body">
                <h3>Google Certified Trainer</h3>
                <p>Empower your team with comprehensive training on Google Workspace tools. Learn best practices, productivity hacks, and effective collaboration strategies.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-clock"></i> 40 Hours Training</li>
                  <li><i class="fab fa-google"></i> Google Workspace</li>
                  <li><i class="fas fa-chalkboard-teacher"></i> Expert-Led Sessions</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn prod-btn--training">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card prod-card--training" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
              <div class="prod-card-icon" style="--icon-color:#7c3aed;">
                <i class="fas fa-brain"></i>
              </div>
              <div class="prod-card-body">
                <h3>Generative AI</h3>
                <p>Hands-on training in Generative AI fundamentals, large language models, and prompt engineering techniques to build intelligent, AI-powered solutions.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-clock"></i> 30 Hours Training</li>
                  <li><i class="fas fa-robot"></i> LLM &amp; Prompt Engineering</li>
                  <li><i class="fas fa-project-diagram"></i> Real-World AI Projects</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn prod-btn--training">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

          </div><!-- /prod-grid -->
        </div><!-- /#training -->

        <!-- ── Services ── -->
        <div id="services-tab" class="prod-cat">
          <div class="prod-grid">

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
              <div class="prod-card-icon" style="--icon-color:#c40915;">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div class="prod-card-body">
                <h3>End-to-End IT Solutions</h3>
                <p>Delivering comprehensive IT strategies and solutions from planning to deployment, ensuring seamless digital transformation.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Full Lifecycle Support</li>
                  <li><i class="fas fa-check-circle"></i> Strategic Planning</li>
                  <li><i class="fas fa-check-circle"></i> Implementation & Deployment</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250">
              <div class="prod-card-icon" style="--icon-color:#d97706;">
                <i class="fas fa-code"></i>
              </div>
              <div class="prod-card-body">
                <h3>Specialized Software Development</h3>
                <p>Developing tailored software solutions for the finance, healthcare, government and enterprise sectors.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Custom Development</li>
                  <li><i class="fas fa-check-circle"></i> Sector-Specific Solutions</li>
                  <li><i class="fas fa-check-circle"></i> Agile Delivery</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
              <div class="prod-card-icon" style="--icon-color:#16a34a;">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="prod-card-body">
                <h3>Custom Web & Mobile Application Development</h3>
                <p>Building cutting-edge web and mobile applications tailored to your business needs with modern technologies and best practices.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> Web Applications</li>
                  <li><i class="fas fa-check-circle"></i> Mobile Apps (iOS/Android)</li>
                  <li><i class="fas fa-check-circle"></i> Cross-Platform Development</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="prod-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
              <div class="prod-card-icon" style="--icon-color:#4f46e5;">
                <i class="fas fa-palette"></i>
              </div>
              <div class="prod-card-body">
                <h3>UI/UX Modernization & Website Redesign</h3>
                <p>Transforming your digital presence with modern, user-centric design and interface improvements to enhance user engagement.</p>
                <ul class="prod-feat">
                  <li><i class="fas fa-check-circle"></i> UX Research & Strategy</li>
                  <li><i class="fas fa-check-circle"></i> Modern UI Design</li>
                  <li><i class="fas fa-check-circle"></i> Responsive Redesign</li>
                </ul>
              </div>
              <div class="prod-card-footer">
                <a href="contact.php" class="prod-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

          </div><!-- /prod-grid -->
        </div><!-- /#services -->

      </section>

      <!-- ░░ CTA SECTION ░░ -->
      <section class="prod-cta-section" style="background-color:#0f0f0f;background-image:linear-gradient(135deg,#0f0f0f 0%,#1a1a1a 60%,#2a0508 100%);" data-aos="fade-up" data-aos-duration="800">
        <div class="prod-cta-glow"></div>
        <div class="prod-cta-inner">
          <span class="prod-cta-badge">GET STARTED</span>
          <h2>Ready to Transform Your Business?</h2>
          <p>Contact our team to discuss how our products and training programs can help you achieve your organizational goals.</p>
          <div class="prod-cta-btns">
            <a href="contact.php" class="prod-cta-btn-primary">Get Started Today</a>
            <a href="about_us.php" class="prod-cta-btn-ghost">Learn About Us</a>
          </div>
        </div>
      </section>

    </div><!-- /main-content2 -->

    <?php include 'include/footer.php'; ?>
  </div><!-- /page-wrapper -->
</body>

<script>
  document.querySelectorAll('.prod-tab').forEach(tab => {
    tab.addEventListener('click', function () {
      const cat = this.getAttribute('data-cat');
      document.querySelectorAll('.prod-tab').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
      document.querySelectorAll('.prod-cat').forEach(c => c.classList.remove('active'));
      document.getElementById(cat).classList.add('active');
      AOS.refreshHard();
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    AOS.refreshHard();
  });
</script>

<script src="include/script.js"></script>

</html>
