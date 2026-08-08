<style>
    .home-about {
        width: 100%;
        /* max-width: 1440px; */
        padding: 80px 0;
        background: linear-gradient(135deg, #fdf2e9, #fff5f0);
    }

    .home-about_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .home-about_content--upper-feature {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 14px;
        font-weight: 900;
        background: rgb(255 255 255 / 42%);
        border: 1px solid rgba(255, 255, 255, .78);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 14px 34px rgba(140, 50, 20, .14);
        overflow: hidden;
    }

    .home-about_content--icon {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6a21;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .home-about_content--bullet {
        position: relative;
        width: 7px;
        height: 7px;
        background: #df4d0f;
        border-radius: 50%;
    }

    .home-about_content--bullet::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    @keyframes homeAboutBlinkingDot {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.62);
            opacity: .0;
        }

        70% {
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0);
            opacity: .55;
        }

        100% {
            transform: scale(2);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.52);
            opacity: .85;
        }
    }

    .home-about_content--heading {
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        color: #101827;
        margin-bottom: 20px;
        text-align: center;
    }

    .home-about_content--heading span {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
        background-size: 250% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes aboutHeadingGradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 250% center;
        }
    }

    .home-about_content--para {
        font-size: 16px;
        line-height: 1.6;
        color: #424f63;
        margin-bottom: 20px;
        text-align: center;
    }

    /* ////////////////////////////////////////////////// About Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// About Content 2 Styling Start ////////////////////////////////////////// */

    .home-about_content2 {
        width: 70%;
        /* max-width: 1120px; */
        margin: 50px auto 0;
        display: flex;
        align-items: center;
        gap: 70px;
    }

    /* ---- Visual collage (left) ---- */

    .home-about_content2--visual {
        position: relative;
        flex: 1;
        max-width: 480px;
        height: 480px;
    }

    .home-about_content2--visual-img1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 76%;
        border-radius: 22px;
        overflow: hidden;
        border: 6px solid #fff;
        box-shadow: 0 30px 60px rgba(60, 30, 10, .18);
    }

    .home-about_content2--visual-img1 img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        display: block;
    }

    .home-about_content2--visual-badge {
        position: absolute;
        top: 311px;
        left: -25px;
        z-index: 4;
        width: 250px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 22px;
        color: #f0530f;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.84), rgba(247, 250, 254, 0.55));
        -webkit-backdrop-filter: blur(24px) saturate(175%);
        backdrop-filter: blur(24px) saturate(175%);
        font-family: "Inter", Arial, sans-serif;
        font-size: 26px;
        font-weight: 900;
        line-height: 1;
        box-shadow: 0 20px 45px rgba(16, 24, 39, 0.09), 0 10px 25px rgba(239, 86, 13, 0.07), inset 0 1px 1px rgba(255, 255, 255, 0.96)
    }

    .home-about_content2--visual-badge h4 {
        font-size: 21px;
        font-weight: 800;
        color: #df4d0f;
        white-space: nowrap;
    }

    .home-about_content2--visual-img2 {
        position: absolute;
        right: 0;
        top: 165px;
        width: 52%;
        border-radius: 26px;
        overflow: hidden;
            backdrop-filter: blur(26px) saturate(180%);
    box-shadow: 0 26px 65px rgba(16, 24, 39, 0.12), 0 13px 32px rgba(239, 86, 13, 0.08), inset 0 1px 1px rgba(255, 255, 255, 0.95), inset 0 -40px 80px rgba(16, 58, 107, 0.055);
        box-shadow: 0 30px 65px rgba(60, 30, 10, .20);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-about_content2--visual-img2--info {
        position: relative;
        z-index: 7;
        width: 100%;
        min-height: 98px;
        margin-bottom: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .home-about_content2--visual-img2--info small {
        display: block;
        font-weight: 700;
        color: #101827;
    }

    .home-about_content2--visual-img2--info h3 {
        margin-top: 4px;
        font-size: 32px;
        font-weight: 800;
        color: #ff5b12;
        letter-spacing: .5px;
    }

    .home-about_content2--visual-img2--icon {
        position: relative;
        top: 0;
        right: 0;
        width: 42px;
        height: 42px;
        flex: 0 0 42px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        color: #ffffff;
        font-size: 20px;
        background: linear-gradient(135deg, #101827, #2f6fed);
        box-shadow: 0 8px 20px rgba(10, 35, 66, 0.22), inset 0 1px 1px rgba(255, 255, 255, 0.3);
    }

    .home-about_content2--visual-img2 img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    /* ---- Text column (right) ---- */


    .home-about_content2--text {
        flex: 1;
    }

    .home-about_content2--text-badge {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        width: fit-content;
        padding: 9px 18px;
        margin-bottom: 14px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 10px;
        font-weight: 900;
        background: rgba(255, 255, 255, .55);
        border: 1px solid rgba(255, 255, 255, .85);
        box-shadow: 0 14px 34px rgba(60, 60, 80, .08);
    }

    .home-about_content2--heading {
        font-size: 38px;
        font-weight: 800;
        line-height: 1.22;
        color: #101827;
        margin-bottom: 18px;
    }

    .home-about_content2--heading span {
        display: block;
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 45%, #123d6b 100%);
        background-size: 220% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    .home-about_content2--para {
        font-size: 15px;
        line-height: 1.75;
        color: #424f63;
        margin-bottom: 26px;
    }

    .home-about_content2--features {
        display: flex;
        align-items: center;
        gap: 28px;
        padding-bottom: 22px;
        margin-bottom: 22px;
        border-bottom: 1px solid rgba(16, 24, 39, .10);
    }

    .home-about_content2--features-items {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .home-about_content2--features-items--icon {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: #ffffff;
        font-size: 18px;
        box-shadow: 0 12px 26px rgba(60, 30, 10, .10);
    }

    .home-about_content2--features-items h4 {
        font-size: 15px;
        font-weight: 800;
        line-height: 1.35;
        color: #101827;
    }

    .home-about_content2--points {
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-bottom: 30px;
    }

    .home-about_content2--points-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .home-about_content2--points-item span {
        flex-shrink: 0;
        width: 16px;
        height: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ee5209;
        font-size: 16px;
        line-height: 1;
    }

    .home-about_content2--points-item span::before {
        content: "\2726";
    }

    .home-about_content2--points-item p {
        font-size: 15px;
        font-weight: 700;
        color: #101827;
    }

    .home-about_content2--cta {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 17px 32px;
        border-radius: 999px;
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 700;
        overflow: hidden;
        background: linear-gradient(135deg, #ff9448, #f0530f);
        box-shadow: 0 22px 44px rgba(240, 83, 15, .30);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-about_content2--cta:hover {
        transform: translateY(-4px);
    }

    .home-about_content2--cta::after {
        content: "";
        position: absolute;
        top: -75%;
        left: -120%;
        width: 42%;
        height: 250%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .58), transparent);
        transform: rotate(24deg);
        animation: homeHeroShine 4.5s ease-in-out infinite;
        pointer-events: none;
    }

    .home-about_content2--text {
        width: 100%;
        max-width: 560px;
        margin: 0 auto;
    }

    .home-about_content2--heading {
        font-size: 32px;
        text-align: start;
    }

    .home-about_content2--text-badge,
    .home-about_content2--para {
        text-align: start;
        margin-left: auto;
        margin-right: auto;
    }

    .home-about_content2--text-badge {
        display: flex;
    }

    .home-about_content2--features {
        /* flex-direction: column; */
        align-items: flex-start;
        gap: 16px;
    }

    .home-about_content2--cta {
        display: flex;
        width: fit-content;
        margin: 0 auto;
    }

    /* ============ TABLET / SMALL LAPTOP (≤1100px) — replaces BOTH old 900px blocks ============ */

    @media (max-width: 1100px) {
        .home-about {
            padding: 60px 0;
        }

        .home-about_content--heading {
            font-size: 40px;
            /* 50px was too big for tablet, likely a typo from testing */
        }

        .home-about_content2 {
            width: 100%;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .home-about_content2--visual {
            min-height: 420px;
            width: 100%;
            height: 420px;
            margin: 0 auto;
            padding-left: 10px;
        }

        .home-about_content2--visual-img1 {
            margin: 0 auto;
            width: 100%;
            /* keep the original % — "100%" was making it fill the whole box, throwing off badge/img2 offsets */
        }

        .home-about_content2--visual-badge {
            width: 180px;
            height: 80px;
            left: 11px;
            top: 300px;
        }

    }

    /* ============ MOBILE (≤640px) — your block, mostly kept, two small fixes ============ */
    @media (max-width: 640px) {
        .home-about_content {
            width: 92%;
        }

        .home-about_content--heading {
            font-size: 24px;
        }

        .home-about_content--para {
            font-size: 13px;
            /* 12px was a bit too small to read comfortably */
        }

        .home-about_content2 {
            flex-direction: column;
        }

        .home-about_content2--visual {
            max-width: 400px;
            width: 100%;
            height: 350px;
        }

        .home-about_content2--visual-img1 img {
            height: 190px;
        }

        .home-about_content2--visual-badge {
            top: 215px;
            left: -12px;
            width: 170px;
            height: 70px;
            font-size: 18px;
        }

        .home-about_content2--visual-badge h4 {
            font-size: 15px;
        }

        .home-about_content2--visual-img2 {
            top: 115px;
            width: 40%;
        }

        .home-about_content2--visual-img2 img {
            height: 130px;
        }

        .home-about_content2--visual-img2--info h3 {
            font-size: 24px;
        }

        .home-about_content2--text {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .home-about_content2--heading {
            text-align: center;
            font-size: 24px;
        }

        .home-about_content2--para {
            text-align: center;
            font-size: 12px;
        }

        .home-about_content2--points-item p,
        .home-about_content2--features-items h4 {
            font-size: 14px;
        }

        .home-about_content2--cta {
            width: 100%;
            justify-content: center;
            padding: 15px 24px;
        }
    }
</style>

<section class="home-about">
    <div class="home-about_content">
        <span class="home-about_content--upper-feature">
            <span class="home-about_content--icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    width="10"
                    height="10">
                    <path d="M6 2C5.45 2 5 2.45 5 3V21C5 21.55 5.45 22 6 22H18C18.55 22 19 21.55 19 21V3C19 2.45 18.55 2 18 2H6ZM8 5H10V7H8V5ZM14 5H16V7H14V5ZM8 9H10V11H8V9ZM14 9H16V11H14V9ZM8 13H10V15H8V13ZM14 13H16V15H14V13ZM11 17H13V22H11V17Z" />
                </svg>
            </span>
            <h3>About King Digital</h3>
            <span class="home-about_content--bullet"></span>
        </span>
        <h2 class="home-about_content--heading">
            Your Trusted Partner for <span>Business Growth</span>
        </h2>
        <p class="home-about_content--para">
            King Digital is a full-service digital marketing, technology and business communication company dedicated to helping businesses establish a strong digital presence and achieve sustainable growth. We combine creative thinking, modern technology and result-focused strategies to develop solutions that support brand visibility, customer engagement, lead generation and long-term business performance.
        </p>
        <p class="home-about_content--para">
            Our complete range of services includes professional website development, landing page design,Google Ads, Meta Ads, search engine optimization, social media marketing, graphic designing, video production and digital branding. Every campaign and digital platform is planned according to the business objectives, target audience and market requirements of our clients.
        </p>
    </div>
    <div class="home-about_content2">
        <div class="home-about_content2--visual">
            <div class="home-about_content2--visual-img1">
                <img src="assets/images/home-about-office.avif" alt="About Image">
            </div>
            <div class="home-about_content2--visual-badge">
                <h4>King Digital</h4>
            </div>
            <div class="home-about_content2--visual-img2">
                <div class="home-about_content2--visual-img2--info">
                    <small>Trusted By Clients</small>
                    <h3><span class="count" data-target="15">0</span>K+
                        <span class="home-about_content2--visual-img2--icon">✦</span>
                    </h3>
                </div>
                <img src="assets/images/home-about-person.webp" alt="About Image">
            </div>
        </div>
        <div class="home-about_content2--text">
            <div class="home-about_content2--text-badge">
                <span>
                    ⚡ About King Digital
                </span>
            </div>
            <h2 class="home-about_content2--heading">
                Smart Digital Marketing
                <span>For Business Growth</span>
            </h2>
            <p class="home-about_content2--para">
                King Digital helps businesses grow online with result-focused digital marketing, website design, SEO, Google Ads, social media marketing and lead generation. Our team creates clean strategies that improve brand visibility, bring quality traffic and convert visitors into real customers.
            </p>
            <div class="home-about_content2--features">
                <div class="home-about_content2--features-items">
                    <span class="home-about_content2--features-items--icon">📈</span>
                    <h4>SEO & Google Ads<br>Campaign Growth</h4>
                </div>
                <div class="home-about_content2--features-items">
                    <span class="home-about_content2--features-items--icon">🎯</span>
                    <h4>Social Media &<br>Lead Generation</h4>
                </div>
            </div>
            <div class="home-about_content2--points">
                <div class="home-about_content2--points-item">
                    <span></span>
                    <p>Professional website design with conversion-focused layout</p>
                </div>
                <div class="home-about_content2--points-item">
                    <span></span>
                    <p>Performance marketing campaigns for leads, traffic and sales</p>
                </div>
            </div>
            <a href="#" class="home-about_content2--cta">Start Your Campaign <span>→</span></a>
        </div>
    </div>
</section>