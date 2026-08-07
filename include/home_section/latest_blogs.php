  <!-- slider manule -->
  <style>
      .abx91-section {
          --abx91-orange: #ff7a1a;
          --abx91-orange-dark: #f2660a;
          --abx91-ink: #1c2230;
          --abx91-sub: #6b7280;
          --abx91-card-bg: #ffffff;
          --abx91-card-border: #eef0f4;

          position: relative;
          overflow: hidden;
          padding: clamp(48px, 8vw, 96px) 0;
          background:
              radial-gradient(60% 55% at 12% 15%, rgba(255, 159, 90, 0.20), rgba(255, 159, 90, 0) 70%),
              radial-gradient(50% 50% at 85% 10%, rgba(255, 122, 26, 0.10), rgba(255, 122, 26, 0) 70%),
              #fbfbfc;
          font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      }

      .abx91-header {
          max-width: 720px;
          margin: 0 auto clamp(28px, 6vw, 48px);
          padding: 0 20px;
          text-align: center;
      }

      .abx91-logo-row {
          display: flex;
          justify-content: center;
          margin-bottom: 18px;
      }

      /* Placeholder slot for the client logo — swap the <img src="">
   with the real logo path when ready. */
      .abx91-logo-slot {
          height: 34px;
          width: auto;
          max-width: 180px;
          object-fit: contain;
      }

      .abx91-badge {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: #ffffff;
          border: 1px solid #f0e4da;
          color: var(--abx91-orange-dark);
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.3px;
          padding: 8px 18px;
          border-radius: 999px;
          box-shadow: 0 6px 16px rgba(255, 122, 26, 0.12);
          margin-bottom: 18px;
      }

      .abx91-title {
          font-size: clamp(26px, 4.2vw, 42px);
          line-height: 1.2;
          font-weight: 800;
          color: var(--abx91-ink);
          margin: 0 0 14px;
      }

      .abx91-title-accent {
          color: var(--abx91-orange);
      }

      .abx91-subtitle {
          font-size: clamp(14px, 1.6vw, 16px);
          color: var(--abx91-sub);
          margin: 0;
          line-height: 1.6;
      }

      /* ---------------- SLIDER SHELL ---------------- */

      .abx91-slider {
          position: relative;
          max-width: 1290px;
          margin: 0 auto;
          padding: 0 clamp(44px, 8vw, 64px);
      }

      .abx91-viewport {
          overflow: hidden;
          width: 100%;
      }

      .abx91-track {
          display: flex;
          gap: 22px;
          padding: 10px 4px 14px;
          transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1);
          will-change: transform;
      }

      /* ---------------- CARD ---------------- */

      .abx91-card {
          position: relative;
          flex: 0 0 calc((100% - 77px)/4);
          max-width: calc((100% - 77px)/4);
          background: var(--abx91-card-bg);
          border: 1px solid var(--abx91-card-border);
          border-radius: 18px;
          padding: 26px 24px 22px;
          box-shadow: 0 10px 28px rgba(20, 20, 43, 0.05);
          transition: transform 0.35s ease, box-shadow 0.35s ease, background 0.35s ease;
      }

      .abx91-card::before {
          content: "";
          position: absolute;
          top: -80%;
          left: -130%;
          width: 52%;
          height: 260%;
          background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .95), transparent);
          transform: rotate(24deg);
          animation: kdShine 5.5s ease-in-out infinite;
          z-index: 3;
          pointer-events: none;
      }

      .abx91-card::after {
          content: "";
          position: absolute;
          inset: 0;
          padding: 1px;
          border-radius: 22px;
          background: linear-gradient(135deg, rgba(239, 86, 13, .38), transparent, rgba(255, 255, 255, .9), rgba(239, 86, 13, .16));
          -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
          -webkit-mask-composite: xor;
          mask-composite: exclude;
          pointer-events: none;
          z-index: 4;
      }

      .abx91-card:hover {
          transform: translateY(-6px) scale(1.02);
          box-shadow: 0 20px 40px rgba(255, 122, 26, 0.35);
          z-index: 2;
          /* background: linear-gradient(135deg, var(--abx91-orange) 0%, var(--abx91-orange-dark) 100%); */
          border-color: transparent;
      }


      @keyframes kdShine {
          0% {
              left: -130%;
          }

          45%,
          100% {
              left: 135%;
          }
      }

      /* .abx91-card:hover .abx91-text,
    .abx91-card:hover .abx91-name {
      color: #fffaf6;
    }

    .abx91-card:hover .abx91-role {
      color: #ffe3cc;
    }

    .abx91-card:hover .abx91-stars,
    .abx91-card:hover .abx91-quote-icon {
      color: rgba(255, 255, 255, 0.85);
    }

    .abx91-card:hover .abx91-footer {
      border-top-color: rgba(255, 255, 255, 0.25);
    } */

      .abx91-card-top {
          display: flex;
          align-items: flex-start;
          justify-content: space-between;
          margin-bottom: 14px;
      }

      .abx91-stars {
          color: var(--abx91-orange);
          font-size: 14px;
          letter-spacing: 2px;
      }

      .abx91-quote-icon {
          font-family: Georgia, "Times New Roman", serif;
          font-size: 34px;
          font-weight: 800;
          line-height: 1;
          color: rgba(255, 122, 26, 0.22);
      }

      .abx91-text {
          font-size: 16px;
          /* line-height: 1.65; */
          color: #101827;
          /* margin: 0 0 20px; */
          font-weight: 900;
          margin: 0;
          padding: 5px 15px !important;
      }

      .abx91-footer {
          display: flex;
          align-items: center;
          gap: 12px;
          padding-top: 16px;
          border-top: 1px solid rgba(0, 0, 0, 0.06);
      }

      .abx91-avatar {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          object-fit: cover;
          background: #e9edf3;
          flex: 0 0 auto;
      }

      .abx91-name {
          font-size: 14px;
          font-weight: 700;
          color: var(--abx91-ink);
          margin: 0;
      }

      .abx91-role {
          font-size: 12.5px;
          font-weight: 700;
          color: var(--abx91-orange-dark);
          margin: 2px 0 0;
      }

      /* ---------------- PREV / NEXT BUTTONS ---------------- */

      .abx91-nav-btn {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          width: 44px;
          height: 44px;
          border-radius: 50%;
          border: 1px solid var(--abx91-card-border);
          background: #ffffff;
          color: var(--abx91-orange-dark);
          font-size: 18px;
          display: flex;
          align-items: center;
          justify-content: center;
          cursor: pointer;
          box-shadow: 0 8px 20px rgba(20, 20, 43, 0.08);
          transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
          z-index: 3;
      }

      .abx91-nav-btn:hover {
          background: linear-gradient(135deg, var(--abx91-orange) 0%, var(--abx91-orange-dark) 100%);
          color: #ffffff;
          box-shadow: 0 12px 26px rgba(255, 122, 26, 0.35);
      }

      .abx91-nav-btn:active {
          transform: translateY(-50%) scale(0.92);
      }

      .abx91-nav-btn--prev {
          left: 0;
      }

      .abx91-nav-btn--next {
          right: 0;
      }

      .abx91-nav-btn:disabled {
          opacity: 0.35;
          cursor: default;
          box-shadow: none;
      }

      .abx91-nav-btn:disabled:hover {
          background: #ffffff;
          color: var(--abx91-orange-dark);
      }

      /* ---------------- DOTS ---------------- */

      .abx91-dots {
          display: flex;
          justify-content: center;
          gap: 8px;
          margin-top: 26px;
      }

      .abx91-dot {
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background: #e3d9d0;
          border: none;
          padding: 0;
          cursor: pointer;
          transition: background 0.25s ease, width 0.25s ease;
      }

      .abx91-dot.abx91-dot--active {
          background: var(--abx91-orange);
          width: 22px;
          border-radius: 999px;
      }

      /* ---------------- RESPONSIVE ---------------- */

      @media (max-width: 1024px) {
          .abx91-card {
              width: calc((100% - 22px)/2);
              max-width: none;
          }

          .abx91-slider {
              padding: 0 clamp(36px, 7vw, 56px);
          }
      }

      @media (max-width:767px) {
          .abx91-card {
              flex: 0 0 100%;
              max-width: 100%;
              padding: 22px 20px 18px;
          }
      }

      @media (min-width:768px) and (max-width:1024px) {
          .abx91-card {
              flex: 0 0 calc((100% - 22px)/2);
              max-width: calc((100% - 22px)/2);
          }
      }

      @media (max-width: 640px) {
          .abx91-card {
              .abx91-track {
                  gap: 16px;
              }

              .abx91-slider {
                  padding: 0 40px;
              }

              .abx91-nav-btn {
                  width: 38px;
                  height: 38px;
                  font-size: 16px;
              }

              .abx91-text {
                  font-size: 14px;
              }
          }
      }
  </style>

  <style>
      .abx91-card {
          padding: 0;
          padding-bottom: 20px;
          border: 1px solid #ffd8c2;
          border-radius: 24px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0, 0, 0, .06)
      }

      /* .abx91-card img.abx91-avatar {
      display: none;
    }

    .abx91-card::before {
      content: '';
      display: block;
      height: 180px;
      background: #eee
    } */

      .abx91-card-top {
          position: absolute;
          top: 14px;
          left: 14px;
          right: 14px;
          justify-content: flex-start
      }

      .abx91-stars {
          background: #fff;
          padding: 8px 14px;
          border-radius: 999px;
          font-size: 11px;
          font-weight: 800;
      }

      .abx91-text,
      .abx91-footer {
          padding: 0 15px 15px;
      }

      .aesimgaw74 {
          width: 100%;
          height: 150px;
          overflow: hidden;

          img {
              width: 100%;
              object-fit: cover;
          }
      }

      .asedju84 {
          display: block;
          padding: 15px 15px 5px 15px;
          margin: 0;
          color: #666;
          font-size: 11.5px;
          font-weight: 900;
      }

      .we81aq {
          color: #5d6676;
          font-size: 13px;
          line-height: 1.55;
          margin: 5px 0;
          padding: 0 15px;
          margin-bottom: 10px;
      }

      .kd-blog-link {
          color: #ef560d;
          font-size: 13px;
          font-weight: 900;
          padding: 20px 15px;
          margin-bottom: 20px;
      }
  </style>

  <section class="abx91-section">

      <div class="abx91-header">



          <span class="abx91-badge">Latest Blogs</span>
          <h2 class="abx91-title">Explore Our Latest <span class="abx91-title-accent">Digital Insights</span></h2>
          <p class="abx91-subtitle">Read helpful blogs about SEO, Google Ads, Meta Ads, website design, branding and lead
              generation. Learn practical marketing tips to grow your business online with better visibility and quality
              leads. Stay updated with simple strategies that help your brand perform better every day.</p>
      </div>

      <div class="abx91-slider" id="abx91Slider">

          <button class="abx91-nav-btn abx91-nav-btn--prev" id="abx91PrevBtn"
              aria-label="Previous testimonial">&#10094;</button>
          <button class="abx91-nav-btn abx91-nav-btn--next" id="abx91NextBtn"
              aria-label="Next testimonial">&#10095;</button>

          <div class="abx91-viewport" id="abx91Viewport">
              <div class="abx91-track" id="abx91Track">

                  <!-- card 1 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">SEO</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/seo.avif">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">How SEO Helps Your Business Get More Organic Leads</p>
                      <p class="we81aq">
                          Learn how keyword planning and content optimization can improve your search visibility.
                      </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 2 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Google Ads</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/Google Ads.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">Google Ads Tips To Generate Quality Leads Faster</p>
                      <p class="we81aq">
                          Discover how targeted campaigns bring high-intent customers to your business.
                      </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 3 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Meta Ads</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/netflix.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">Why Meta Ads Are Powerful For Brand Awareness</p>
                      <p class="we81aq">
                          Build stronger reach with creative campaigns for Facebook and Instagram.
                      </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 4 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Website</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/website.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">Why A Professional Website Builds More Trust</p>
                      <p class="we81aq">
                          A clean website improves credibility, user experience and conversions.
                      </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 5 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Leads</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/leaders.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">Lead Generation Strategy For Small Businesses</p>
                      <p class="we81aq">
                          Use landing pages, ads and follow-up systems to convert more visitors.
                      </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 6 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Social</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/social.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">Social Media Marketing Ideas For Better Engagement</p>
                      <p class="we81aq">
                          Create consistent posts, reels and campaigns that connect with your audience. </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 7 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">Branding</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/branding.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">VHow Branding Makes Your Business More Memorable</p>
                      <p class="we81aq">
                          Strong visuals and messaging help customers remember and trust your business. </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>

                  <!-- card 8 -->
                  <div class="abx91-card">
                      <div class="abx91-card-top">
                          <span class="abx91-stars">WhatsApp</span>
                      </div>
                      <div class="aesimgaw74">
                          <img class="sdaae" src="img/whatsapp.avif" alt="James C.">
                      </div>
                      <h6 class="asedju84">
                          📆 June 2026 • 5 min Read
                      </h6>
                      <p class="abx91-text">WhatsApp Marketing For Faster Customer Response</p>
                      <p class="we81aq">
                          Use smart messaging flows to connect with customers and improve conversions. </p>
                      <span class="kd-blog-link">Read Blog →</span>
                  </div>


              </div>
          </div>

          <div class="abx91-dots" id="abx91Dots" style="display: none;"></div>

      </div>

  </section>

  <script>
      (function() {
          // Scope everything under a unique namespace so it never collides
          // with other scripts on the page.
          var abx91Track = document.getElementById('abx91Track');
          var abx91PrevBtn = document.getElementById('abx91PrevBtn');
          var abx91NextBtn = document.getElementById('abx91NextBtn');
          var abx91DotsWrap = document.getElementById('abx91Dots');

          var abx91OriginalCards = Array.prototype.slice.call(abx91Track.querySelectorAll('.abx91-card'));
          var abx91Count = abx91OriginalCards.length;

          // Clone the whole set once before and once after the real cards.
          // This is what lets prev/next always slide smoothly into a
          // neighbouring card instead of jump-cutting at the start/end —
          // classic infinite-carousel trick.
          function abx91CloneSet() {
              return abx91OriginalCards.map(function(c) {
                  var clone = c.cloneNode(true);
                  clone.classList.add('abx91-clone');
                  clone.setAttribute('aria-hidden', 'true');
                  return clone;
              });
          }

          var abx91CloneBefore = abx91CloneSet();
          var abx91CloneAfter = abx91CloneSet();

          abx91Track.innerHTML = '';
          abx91CloneBefore.forEach(function(c) {
              abx91Track.appendChild(c);
          });
          abx91OriginalCards.forEach(function(c) {
              abx91Track.appendChild(c);
          });
          abx91CloneAfter.forEach(function(c) {
              abx91Track.appendChild(c);
          });

          var abx91RealStart = abx91Count; // index of the first real (non-clone) card
          var abx91Index = abx91RealStart; // current left-most visible card

          function abx91CardStep() {
              var card = abx91Track.children[0];
              var trackStyles = window.getComputedStyle(abx91Track);
              var gap = parseFloat(trackStyles.columnGap || trackStyles.gap || 0);
              return card.getBoundingClientRect().width + gap;
          }

          function abx91UpdateDots() {
              var realIndex = ((abx91Index - abx91RealStart) % abx91Count + abx91Count) % abx91Count;
              var dots = abx91DotsWrap.querySelectorAll('.abx91-dot');
              dots.forEach(function(dot, i) {
                  dot.classList.toggle('abx91-dot--active', i === realIndex);
              });
          }

          function abx91GoTo(index, animate) {
              abx91Index = index;
              if (!animate) abx91Track.style.transition = 'none';
              abx91Track.style.transform = 'translateX(-' + (abx91Index * abx91CardStep()) + 'px)';
              if (!animate) {
                  abx91Track.getBoundingClientRect(); // force reflow so the jump is instant
                  abx91Track.style.transition = '';
              }
              abx91UpdateDots();
          }

          function abx91BuildDots() {
              abx91DotsWrap.innerHTML = '';
              for (var i = 0; i < abx91Count; i++) {
                  var dot = document.createElement('button');
                  dot.className = 'abx91-dot';
                  dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                  (function(dotIndex) {
                      dot.addEventListener('click', function() {
                          abx91GoTo(abx91RealStart + dotIndex, true);
                      });
                  })(i);
                  abx91DotsWrap.appendChild(dot);
              }
          }

          abx91PrevBtn.addEventListener('click', function() {
              abx91GoTo(abx91Index - 1, true);
          });
          abx91NextBtn.addEventListener('click', function() {
              abx91GoTo(abx91Index + 1, true);
          });

          // Once a slide animation finishes, silently recentre back into the
          // real block if we've drifted into a clone — the clone is an exact
          // copy so the recentre is invisible to the eye.
          abx91Track.addEventListener('transitionend', function(e) {
              if (e.propertyName !== 'transform') return;
              if (abx91Index < abx91RealStart) {
                  abx91GoTo(abx91Index + abx91Count, false);
              } else if (abx91Index >= abx91RealStart + abx91Count) {
                  abx91GoTo(abx91Index - abx91Count, false);
              }
          });

          var abx91ResizeTimer;
          window.addEventListener('resize', function() {
              clearTimeout(abx91ResizeTimer);
              abx91ResizeTimer = setTimeout(function() {
                  abx91GoTo(abx91Index, false);
              }, 150);
          });

          // init
          abx91BuildDots();
          abx91GoTo(abx91RealStart, false);
      })();
  </script>