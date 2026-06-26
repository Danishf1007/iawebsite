<section id="activities">
    <div class="activity-slider-wrapper">
      <button class="activity-btn activity-btn-left" onclick="slideActivity(-1)">&#10094;</button>
      <div class="activity-slider-viewport">
      <div class="activity-slider-track">


        <a href="activity/activity_dsa2026.php" class="activity-card-link">
         <div class="activity-card">
            <div class="activity-img-wrapper">
             <img loading="lazy" src="images/Exhibition/dsanastec2026/01.jpeg" alt="DSA-NASTEC 2026">
              <div class="activity-overlay">
               <p>IA SoftTech’s Participation in DSA-NASTEC 2026</p>
              </div>
            </div>
            <h3>IA SoftTech’s Participation in DSA-NASTEC 2026</h3>
          </div>
        </a>

        <a href="activity/activity_raya.php" class="activity-card-link">
          <div class="activity-card">
            <div class="activity-img-wrapper">
             <img loading="lazy" src="images/Ceremony/raya26/03.jpeg" alt="Jamuan Raya IA SoftTech 2026">
              <div class="activity-overlay">
                <p>Jamuan Raya IA SoftTech 2026</p>
              </div>
            </div>
            <h3>Jamuan Raya IA SoftTech 2026</h3>
          </div>
        </a>


        <a href="activity/activity_sigmawave.php" class="activity-card-link">
          <div class="activity-card">
              <div class="activity-img-wrapper">
               <img loading="lazy" src="images/Ceremony/Sigmawave/01.jpeg" alt="LOI Signing Ceremony between IA SoftTech and Sigma Wave">
                <div class="activity-overlay">
                 <p>LOI Signing Ceremony between IA SoftTech and Sigma Wave</p>
                </div>
              </div>
              <h3>LOI Signing Ceremony between IA SoftTech and Sigma Wave</h3>
          </div>
        </a>

        <a href="activity/activity_kastam.php" class="activity-card-link">
          <div class="activity-card">
            <div class="activity-img-wrapper">
              <img loading="lazy" src="images/Ceremony/Kastam/08.jpg" alt="Royal Malaysian Customs Department">
              <div class="activity-overlay">
                <p>Acceptance and Commissioning of Night Vision Helmet for Special Unit from Royal Malaysian Customs Department</p>
              </div>
            </div>
            <h3>Royal Malaysian Customs Department</h3>
          </div>
        </a>


        <a href="activity/activity_programcanon.php" class="activity-card-link">
          <div class="activity-card">
            <div class="activity-img-wrapper">
            <img loading="lazy" src="images/Exhibition/Programcanon/01.jpeg" alt="Canon Think Big: Lead with SmartTech Programme">
              <div class="activity-overlay">
               <p>Participation in Canon Think Big: Lead with SmartTech Programme</p>
              </div>
            </div>
            <h3>Canon Think Big: Lead with SmartTech Programme</h3>
          </div>
        </a>

          <a href="activity/activity_smartcityd1.php" class="activity-card-link">
            <div class="activity-card">
             <div class="activity-img-wrapper">
               <img loading="lazy" src="images/Exhibition/smartcity/01.jpg" alt="Smart City Expo Kuala Lumpur 2025">
                  <div class="activity-overlay">
                    <p>Visit to Smart City Expo Kuala Lumpur 2025</p>
                  </div>
              </div>
              <h3>Smart City Expo Kuala Lumpur 2025</h3>
            </div>
          </a>

          <a href="activity/activity_SHENZHEN.php" class="activity-card-link">
            <div class="activity-card">
              <div class="activity-img-wrapper">
                 <img loading="lazy" src="images/Exhibition/iote/01.jpg" alt="International Internet of Things Exhibition (IOTE) 2025">
                  <div class="activity-overlay">
                     <p> IA SoftTech’s Participation in the International Internet of Things Exhibition (IOTE) 2025</p>
                  </div>
              </div>
              <h3>International Internet of Things Exhibition (IOTE) 2025</h3>
            </div>
          </a>

        </div>
      </div>
    <button class="activity-btn activity-btn-right" onclick="slideActivity(1)">&#10095;</button>
  </div>
  </section>

  <script>
    var activityIndex = 0;
    function slideActivity(direction) {
      var viewport = document.querySelector('.activity-slider-viewport');
      var cardWidth = 280 + 25;
      activityIndex += direction;
      var track = document.querySelector('.activity-slider-track');
      var cards = track.querySelectorAll('.activity-card-link');
      var visibleCards = Math.floor(viewport.offsetWidth / cardWidth);
      var maxIndex = Math.max(0, cards.length - visibleCards);
      if (activityIndex < 0) activityIndex = 0;
      if (activityIndex > maxIndex) activityIndex = maxIndex;
      track.style.transform = 'translateX(-' + (activityIndex * cardWidth) + 'px)';
    }

    // Touch swipe support
    (function() {
      var track = document.querySelector('.activity-slider-track');
      var touchStartX = 0;
      var touchEndX = 0;
      var swipeThreshold = 50;

      track.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      track.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        var diff = touchStartX - touchEndX;
        if (Math.abs(diff) >= swipeThreshold) {
          slideActivity(diff > 0 ? 1 : -1);
        }
      }, { passive: true });
    })();
  </script>
