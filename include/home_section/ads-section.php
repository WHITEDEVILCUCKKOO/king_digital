
<style>

body{
  margin:0;
  font-family:'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
  background:#eef1f6;
}

.home-ads{
  padding:100px 24px;
  display:flex;
  justify-content:center;
}

.home-ads_content{
  width:100%;
  max-width:1180px;
  display:grid;
  grid-template-columns:440px 1fr;
  column-gap:80px;
  align-items:center;
}

/* ================= VISUAL (left) ================= */
.home-ads_content--visual{
  position:relative;
  width:400px;
  height:400px;
  margin:0 auto;
  animation:homeAdsFloat 5s ease-in-out infinite;
}

@keyframes homeAdsFloat{
  0%,100%{ transform:translateY(0px); }
  50%{ transform:translateY(-14px); }
}

.home-ads_content--visual-outer-circle{
  position:absolute;
  inset:0;
  border-radius:50%;
  border:1.5px dashed #f0c19c;
  animation:homeAdsSpin 40s linear infinite;
}

.home-ads_content--visual-inner-circle{
  position:absolute;
  top:38px;
  left:38px;
  right:38px;
  bottom:38px;
  border-radius:50%;
  border:1.5px dashed #d9dde6;
  animation:homeAdsSpin 30s linear infinite reverse;
}

@keyframes homeAdsSpin{
  from{ transform:rotate(0deg); }
  to{ transform:rotate(360deg); }
}

.home-ads_content--visual-image{
  position:absolute;
  top:78px;
  left:78px;
  right:78px;
  bottom:78px;
  border-radius:50%;
  background:radial-gradient(circle at 35% 30%, #ffffff 0%, #eef1f6 100%);
  box-shadow:0 20px 45px rgba(20,30,60,0.10), inset 0 0 0 1px rgba(255,255,255,0.6);
  display:flex;
  align-items:center;
  justify-content:center;
  overflow:hidden;
}

.home-ads_content--visual-image img{
  position:absolute;
  width:56%;
  height:auto;
  object-fit:contain;
  opacity:0;
  animation:homeAdsFade 8s ease-in-out infinite;
}

.home-ads_content--visual-image img:nth-child(1){
  animation-delay:0s;
}
.home-ads_content--visual-image img:nth-child(2){
  animation-delay:4s;
}

@keyframes homeAdsFade{
  0%{ opacity:0; }
  8%{ opacity:1; }
  42%{ opacity:1; }
  50%{ opacity:0; }
  100%{ opacity:0; }
}

.home-ads_content--visual-features{
  position:absolute;
  inset:0;
}

.home-ads_content--visual-features-item{
  position:absolute;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
  width:96px;
}

.home-ads_content--visual-features-item span{
  width:52px;
  height:52px;
  border-radius:50%;
  background:#ffffff;
  box-shadow:0 10px 24px rgba(20,30,60,0.10);
  margin-bottom:8px;
  position:relative;
  background-repeat:no-repeat;
  background-position:center;
  background-size:22px 22px;
}

.home-ads_content--visual-features-item h4{
  margin:0;
  font-size:12.5px;
  font-weight:700;
  color:#1a2233;
  line-height:1.35;
}

.home-ads_content--visual-features-item:nth-child(1){ top:6px; left:0; }
.home-ads_content--visual-features-item:nth-child(1) span{
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23f47c28' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='12' r='9'/%3E%3Ccircle cx='12' cy='12' r='5'/%3E%3Ccircle cx='12' cy='12' r='1'/%3E%3C/svg%3E");
}
.home-ads_content--visual-features-item:nth-child(1) h4::before{ content:"Targeted Audience"; }

.home-ads_content--visual-features-item:nth-child(2){ top:6px; right:0; }
.home-ads_content--visual-features-item:nth-child(2) span{
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23f47c28' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='3 17 9 11 13 15 21 7'/%3E%3Cpolyline points='14 7 21 7 21 14'/%3E%3C/svg%3E");
}
.home-ads_content--visual-features-item:nth-child(2) h4::before{ content:"High Conversions"; }

.home-ads_content--visual-features-item:nth-child(3){ bottom:6px; left:0; }
.home-ads_content--visual-features-item:nth-child(3) span{
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23f47c28' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E");
}
.home-ads_content--visual-features-item:nth-child(3) h4::before{ content:"Quality Leads"; }

.home-ads_content--visual-features-item:nth-child(4){ bottom:6px; right:0; }
.home-ads_content--visual-features-item:nth-child(4) span{
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23f47c28' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='18' y1='20' x2='18' y2='10'/%3E%3Cline x1='12' y1='20' x2='12' y2='4'/%3E%3Cline x1='6' y1='20' x2='6' y2='14'/%3E%3C/svg%3E");
}
.home-ads_content--visual-features-item:nth-child(4) h4::before{ content:"Real-Time Reports"; }

/* ================= INFO (right) ================= */
.home-ads_content--info-badge{
  display:inline-flex;
  align-items:center;
  gap:8px;
  background:#fff1e6;
  color:#f47c28;
  font-size:13px;
  font-weight:700;
  padding:8px 16px 8px 8px;
  border-radius:20px;
  margin-bottom:22px;
}

.home-ads_content--info-badge span{
  width:24px;
  height:24px;
  min-width:24px;
  border-radius:50%;
  background:#f47c28;
  position:relative;
}

.home-ads_content--info-badge span::before{
  content:"";
  position:absolute;
  inset:0;
  margin:auto;
  width:12px;
  height:12px;
  background-color:#ffffff;
  -webkit-mask-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolygon points='11 5 6 9 2 9 2 15 6 15 11 19 11 5'/%3E%3Cpath d='M15.5 8.5a5 5 0 0 1 0 7'/%3E%3C/svg%3E");
  mask-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolygon points='11 5 6 9 2 9 2 15 6 15 11 19 11 5'/%3E%3Cpath d='M15.5 8.5a5 5 0 0 1 0 7'/%3E%3C/svg%3E");
  -webkit-mask-size:contain;
  mask-size:contain;
  -webkit-mask-repeat:no-repeat;
  mask-repeat:no-repeat;
}

.home-ads_content--info-badge p::before{
  content:"Google Ads & Meta Ads";
}

.home-ads_content--info-heading h2{
  font-size:42px;
  line-height:1.25;
  font-weight:700;
  color:#161a24;
  margin:0 0 20px;
}

.home-ads_content--info-heading h2::before{
  content:"Performance Ads Built for";
  display:block;
}

.home-ads_content--info-heading h2 span::before{
  content:"Quality Leads and Business Growth";
}

.home-ads_content--info-heading h2 span{
  background:linear-gradient(90deg, #f47c28 0%, #f47c28 45%, #4a5568 100%);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
}

.home-ads_content--info-para{
  font-size:15.5px;
  line-height:1.75;
  color:#6b7280;
  max-width:560px;
  margin-bottom:32px;
}

.home-ads_content--info-para::before{
  content:"King Digital creates professional and conversion-focused Google Ads and Meta Ads campaigns that help your business reach the right audience, generate quality enquiries and improve sales performance. Every campaign is planned with precise targeting, compelling ad creatives, conversion tracking and continuous optimisation to achieve measurable business results.";
}

.home-ads_content--info-features{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:14px;
  margin-bottom:32px;
  max-width:600px;
}

.home-ads_content--info-features-item{
  display:flex;
  align-items:center;
  gap:14px;
  background:#f4f6fa;
  border-left:3px solid #f47c28;
  border-radius:8px;
  padding:14px 16px;
}

.home-ads_content--info-features-item span{
  min-width:34px;
  height:26px;
  display:inline-flex;
  align-items:center;
  justify-content:center;
  background:#fff1e6;
  color:#f47c28;
  font-size:12px;
  font-weight:800;
  border-radius:6px;
}

.home-ads_content--info-features-item h4{
  margin:0;
  font-size:14px;
  font-weight:700;
  color:#161a24;
}

.home-ads_content--info-features-item:nth-child(1) span::before{ content:"01"; }
.home-ads_content--info-features-item:nth-child(1) h4::before{ content:"Google Search Ads"; }

.home-ads_content--info-features-item:nth-child(2) span::before{ content:"02"; }
.home-ads_content--info-features-item:nth-child(2) h4::before{ content:"Meta Lead Campaigns"; }

.home-ads_content--info-features-item:nth-child(3) span::before{ content:"03"; }
.home-ads_content--info-features-item:nth-child(3) h4::before{ content:"Conversion Tracking"; }

.home-ads_content--info-features-item:nth-child(4) span::before{ content:"04"; }
.home-ads_content--info-features-item:nth-child(4) h4::before{ content:"Campaign Reports"; }

.home-ads_content--info-cta{
  display:inline-flex;
  align-items:center;
  gap:10px;
  background:linear-gradient(90deg,#f47c28,#e8631a);
  color:#ffffff;
  text-decoration:none;
  font-weight:700;
  font-size:15px;
  padding:16px 30px;
  border-radius:30px;
  box-shadow:0 10px 24px rgba(244,124,40,0.35);
}

.home-ads_content--info-cta span::before{
  content:"→";
  font-size:16px;
}

@media (max-width:900px){
  .home-ads_content{
    grid-template-columns:1fr;
    row-gap:60px;
  }
  .home-ads_content--info-heading h2{ font-size:32px; }
}

</style>

<section class="home-ads">
    <div class="home-ads_content">
        <div class="home-ads_content--visual">
            <!-- The images one after another with a fade-in effect. -->
            <div class="home-ads_content--visual-image">
                <img src="assets/images/logos/meta-ads.png" alt="Mata Icon">
                <img src="assets/images/logos/google-ads.png" alt="Google Ads Icon">
            </div>
            <!-- These circles are rotating around the images like you see the photo -->
            <span class="home-ads_content--visual-inner-circle"></span>
            <span class="home-ads_content--visual-outer-circle"></span>
            <!-- The features and benefits of the ads are listed below the images. Each feature has an icon and a heading. -->
             <!-- whole section move up and down with a parallax effect. -->
            <div class="home-ads_content--visual-features">
                <div class="home-ads_content--visual-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--visual-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--visual-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--visual-features-item">
                    <span></span>
                    <h4></h4>
                </div>
            </div>
        </div>
        <div class="home-ads_content--info">
            <div class="home-ads_content--info-badge">
                <span></span>
                <p></p>
            </div>
            <div class="home-ads_content--info-heading">
                <h2><span></span></h2>
            </div>
            <div class="home-ads_content--info-para">

            </div>
            <div class="home-ads_content--info-features">
                <div class="home-ads_content--info-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--info-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--info-features-item">
                    <span></span>
                    <h4></h4>
                </div>
                <div class="home-ads_content--info-features-item">
                    <span></span>
                    <h4></h4>
                </div>
            </div>
            <a href="#" class="home-ads_content--info-cta">Launch Your Campaign <span></span></a>
        </div>
    </div>
</section>
