<?php include 'include/header.php' ?>

<style>
    /* ////////////////////////////////////////////////////// Hero Section Start Here /////////////////////////////////////////////// */

    .home-hero {
        position: relative;
        width: 100%;
        max-width: 1440px;
        height: 100%;
        max-height: 578px;
        display: flex;
        align-items: center;
        padding: 118px 0 55px;
        overflow: hidden;
        background: radial-gradient(circle at 8% 18%, rgba(255, 92, 18, .34), transparent 30%), radial-gradient(circle at 90% 82%, rgba(255, 121, 35, .30), transparent 35%), linear-gradient(135deg, #ffbf98 0%, #ffe9dc 48%, #ffb17d 100%);
    }

    #canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        max-width: 1440px;
        height: 100%;
        max-height: 578px;
        pointer-events: none;
    }

    .home-hero_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        height: 100%;
        z-index: 1;
    }

    .home-hero_content--text {
        flex: 1;
        max-width: 620px;
    }

    .home-hero_content--upper-feature {
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
        white-space: nowrap;
        width: fit-content;
        overflow: hidden;
    }



    .home-hero_content--bullet {
        position: relative;
        width: 10px;
        height: 10px;
        background: #df4d0f;
        border-radius: 50%;
    }

    .home-hero_content--bullet::before {
        content: "";
        position: absolute;

        inset: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeHeroBlinkingDot 1.5s infinite;
    }

    @keyframes homeHeroBlinkingDot {
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

    .home-hero_content--upper-feature::after {
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

    .home-hero_content--heading {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.08;
        color: #101827;
        margin-bottom: 20px;
        text-shadow: 0 2px 0 rgba(255, 255, 255, .25);
    }

    .home-hero_content--heading h1 {
        box-shadow: 0 2px 0 rgba(255, 255, 255, .25);
    }

    .home-hero_content--heading span {
        background: linear-gradient(90deg, #e84209, #ff681e, #d93605, #ff8b45);
        background-size: 300% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: heroHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes heroHeadingGradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .home-hero_content--para {
        font-size: 16px;
        line-height: 1.2;
        color: #424f63;
        margin-bottom: 20px;
    }

    .home-hero_content--cta {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 32px;
    }

    .home-hero_content--cta a {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 16px 30px;
        border-radius: 999px;
        font-size: 16px;
        font-weight: 700;
        transition: transform .25s ease, box-shadow .25s ease;
        overflow: hidden;
    }

    .home-hero_content--cta a:hover {
        transform: translateY(-4px);
    }

    .home-hero_content--cta1 {
        color: #ffffff !important;
        background: linear-gradient(135deg, #28202b, #f05214);
    }

    .home-hero_content--cta1::after {
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

    .home-hero_content--cta2 {
        color: #101827 !important;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .34));
        border: 1px solid rgba(255, 255, 255, .95);
    }

    .home-hero_content--cta2::after {
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

    .home-hero_content--features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 10px;
        padding: 10px 0;
        overflow: hidden;
    }

    .home-hero_content--features-items {
        position: relative;
        overflow: hidden;
        flex: 1 1 0;
        min-width: 0;
        padding: 20px 18px;
        border-radius: 22px;
        text-align: center;
        background: linear-gradient(135deg, rgba(255, 255, 255, .58), rgba(255, 255, 255, .30));
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 18px 38px rgba(120, 45, 15, .13);
        animation: heroItemFloat 5.5s ease-in-out infinite;
    }

    .home-hero_content--features-items::after {
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

    .home-hero_content--features-items h4 {
        color: #df4d0f;
        font-size: 24px;
        font-weight: 800;
        letter-spacing: 1.2;
    }

    .home-hero_content--features-items p {
        margin-top: 8px;
        font-size: 15px;
        color: #4b5563;
    }

    .home-hero_content--features-items:nth-child(2) {
        animation-delay: 0.6;
    }

    .home-hero_content--features-items:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes heroItemFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-9px);
        }
    }

    .home-hero_content--visual {
        position: relative;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-hero_content--visual-img {
        width: 100%;
        max-width: 560px;
        padding: 16px;
        border-radius: 32px;
        background: rgba(255, 255, 255, .45);
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 28px 70px rgba(80, 35, 15, .16);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-hero_content--visual-img img {
        width: 100%;
        display: block;
        border-radius: 24px;
    }

    .home-hero_content--visual-text {
        position: absolute;
        padding: 13px 17px;
        border-radius: 16px;
        color: #101827;
        font-size: 15px;
        font-weight: 900;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .38));
        border: 1px solid rgba(255, 255, 255, .95);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 20px 60px rgba(60, 30, 10, .16);
        animation: heroItemFloat 5s ease-in-out infinite;
    }

    .home-hero_content--visual-text--growth {
        top: -15px;
        left: -20px;
    }

    .home-hero_content--visual-text--campaigns {
        top: 160px;
        right: -35px;
        animation-delay: .6s;
    }

    .home-hero_content--visual-text--clients {
        bottom: 20px;
        left: -30px;
        animation-delay: 1s;
    }

    @keyframes homeHeroShine {
        0% {
            left: -120%;
        }

        45%,
        100% {
            left: 130%;
        }
    }

    /* ////////////////////////////////////////////////// Hero Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// About Styling Start ////////////////////////////////////////// */

    .home-about {
        width: 100%;
        max-width: 1440px;
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
        width: 90%;
        max-width: 1120px;
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
        left: 0;
        bottom: 0;
        width: 48%;
        height: 92px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 16px;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 20px 44px rgba(60, 30, 10, .10);
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
        background: #ffffff;
        box-shadow: 0 30px 65px rgba(60, 30, 10, .20);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-about_content2--visual-img2--info {
        position: relative;
        padding: 18px 20px 12px;
    }

    .home-about_content2--visual-img2--info span {
        display: block;
        font-size: 13px;
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
        position: absolute;
        top: 16px;
        right: 18px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #123d6b;
        color: #ffffff;
        font-size: 13px;
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

    @media (max-width: 900px) {
        .home-about_content2 {
            flex-direction: column;
            gap: 90px;
        }

        .home-about_content2--visual {
            max-width: 400px;
            width: 100%;
        }

        .home-about_content2--features {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
    }

    /* ////////////////////////////////////////////////// About Content 2 Styling End ////////////////////////////////////////// */
</style>

<main>

    <!-- ////////////////////////////////////////////////// Hero Section ////////////////////////////////////////// -->
    <section class="home-hero">
        <canvas id="canvas"></canvas>
        <div class="home-hero_content">
            <div class="home-hero_content--text">
                <div class="home-hero_content--upper-feature">
                    <span class="home-hero_content--bullet"></span>
                    <h3>Trusted By 15,000+ Businesses & Resellers</h3>
                </div>
                <h1 class="home-hero_content--heading">
                    Grow Faster With <span>Result-Driven</span> Digital Marketing
                </h1>
                <p class="home-hero_content--para">
                    Transform your business into a powerful online brand with data-driven marketing strategies, creative campaigns, and high-converting digital experiences.
                </p>
                <div class="home-hero_content--cta">
                    <a href="#" class="home-hero_content--cta1">Get Free Consultation</a>
                    <a href="#" class="home-hero_content--cta2">Start Your Project</a>
                </div>
                <div class="home-hero_content--features">
                    <div class="home-hero_content--features-items">
                        <h4>15k+</h4>
                        <p>Businesses</p>
                    </div>
                    <div class="home-hero_content--features-items">
                        <h4>10+</h4>
                        <p>Years Experience</p>
                    </div>
                    <div class="home-hero_content--features-items">
                        <h4>98%</h4>
                        <p>Client Satisfaction</p>
                    </div>
                </div>

            </div>
            <div class="home-hero_content--visual">
                <div class="home-hero_content--visual-img">
                    <img src="assets/images/hero-image.avif" alt="Hero Image">
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--growth">
                    📈 +320% Growth
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--campaigns">
                    🎯 High Converting Campaigns
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--clients">
                    ⭐ 15,000+ Clients
                </div>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////////////////// Hero Section End ///////////////////////////////////////////     -->

    <!-- /////////////////////////////////////////////////// About Section Start ///////////////////////////////////////////     -->
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
                        <span>Trusted By Clients</span>
                        <h3>15K+</h3>
                        <span class="home-about_content2--visual-img2--icon">✦</span>
                    </div>
                    <img src="assets/images/home-about-person.webp" alt="About Image">
                </div>
            </div>
            <div class="home-about_content2--text">
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
    <!-- /////////////////////////////////////////////////// About Section End ///////////////////////////////////////////     -->
</main>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const hero = document.querySelector('.home-hero');

    let width, height;

    function resize() {
        width = canvas.width = hero.offsetWidth;
        height = canvas.height = hero.offsetHeight;
    }
    resize();
    window.addEventListener('resize', () => {
        resize();
        initDots();
    });

    const SPACING = 20,
        BASE_RADIUS = 1,
        REPEL_RADIUS = 120,
        REPEL_STRENGTH = 40,
        EASE = 0.12;
    let dots = [];

    function initDots() {
        dots = [];
        const cols = Math.ceil(width / SPACING) + 1;
        const rows = Math.ceil(height / SPACING) + 1;
        for (let i = 0; i < cols; i++)
            for (let j = 0; j < rows; j++)
                dots.push({
                    baseX: i * SPACING,
                    baseY: j * SPACING,
                    x: i * SPACING,
                    y: j * SPACING
                });
    }
    initDots();

    const mouse = {
        x: -9999,
        y: -9999
    };
    hero.addEventListener('mousemove', (e) => {
        const rect = hero.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });
    hero.addEventListener('mouseleave', () => {
        mouse.x = -9999;
        mouse.y = -9999;
    });

    function animate() {
        ctx.clearRect(0, 0, width, height);
        for (const dot of dots) {
            const dx = dot.baseX - mouse.x,
                dy = dot.baseY - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            let targetX = dot.baseX,
                targetY = dot.baseY;
            if (dist < REPEL_RADIUS) {
                const force = 1 - dist / REPEL_RADIUS;
                const angle = Math.atan2(dy, dx);
                targetX += Math.cos(angle) * force * REPEL_STRENGTH;
                targetY += Math.sin(angle) * force * REPEL_STRENGTH;
            }
            dot.x += (targetX - dot.x) * EASE;
            dot.y += (targetY - dot.y) * EASE;
            ctx.beginPath();
            ctx.arc(dot.x, dot.y, BASE_RADIUS, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(247, 238, 238, 0.86)';
            ctx.fill();
        }
        requestAnimationFrame(animate);
    }
    animate();
</script>

<?php include 'include/footer.php' ?>