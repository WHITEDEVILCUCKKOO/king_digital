<?php include 'include/header.php' ?>

<style>
    /* ////////////////////////////////////////////////////// Hero Section Start Here /////////////////////////////////////////////// */

    .home-hero {
        position: relative;
        width: 100%;
        height: 545px;
        padding: 10px 20px;
        overflow: hidden;
        background: radial-gradient(circle at 8% 18%, rgba(255, 92, 18, .34), transparent 30%), radial-gradient(circle at 90% 82%, rgba(255, 121, 35, .30), transparent 35%), linear-gradient(135deg, #ffbf98 0%, #ffe9dc 48%, #ffb17d 100%);
    }

    #canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .home-hero_content {
        position: relative;
        width: 90%;
        padding: 120px 10px 20px 10px;
        margin: auto;
        display: flex;
        gap: 20px;
        z-index: 10;
    }

    .home-hero_content--text {
        display: flex;
        flex-direction: column;
        max-width: 650px;
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
        font-size: 13px;
        font-weight: 800;
        background: rgb(255 255 255 / 42%);
        border: 1px solid rgba(255, 255, 255, .78);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 14px 34px rgba(140, 50, 20, .14);
        overflow: hidden;
        white-space: nowrap;
        width: 53%;
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

    .home-hero_content--heading {
        max-width: 650px;
        margin-bottom: 15px;
        line-height: 1.15;
        font-weight: 900;
        color: #101827;
        font-size: 45px;
    }

    .home-hero_content--heading h1 {
        box-shadow: 0 2px 0 rgba(255, 255, 255, .25);
    }

    .home-hero_content--heading span {
        color: #df4d0f;
    }

    .home-hero_content--para {
        max-width: 630px;
        line-height: 1.7;
        font-size: 15px;
        font-weight: 400;
    }

    .home-hero_content--cta {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
        flex-wrap: nowrap;
    }

    .home-hero_content--cta a {
        text-decoration: none;
        padding: 15px 25px;
        margin-top: 10px;
        text-align: center;
        border-radius: 999px;
        letter-spacing: 1.5;
        transition: ease 0.5s;
    }

    .home-hero_content--cta a:hover {
        transform: translateY(-5px);
    }

    .home-hero_content--cta1 {
        color: #ffffff !important;
        background: linear-gradient(135deg, #28202b, #f05214);
    }

    .home-hero_content--cta2 {
        color: #101827 !important;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .34));
        border: 1px solid rgba(255, 255, 255, .95);
    }

    .home-hero_content--features {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 10px;
        margin-top: 10px;
        padding: 10px 0;
    }

    .home-hero_content--features-items {
        position: relative;
        overflow: hidden;
        flex: 1 1 0;
        min-width: 0;
        padding: 14px 12px;
        border-radius: 18px;
        text-align: center;
        background: linear-gradient(135deg, rgba(255, 255, 255, .58), rgba(255, 255, 255, .30));
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 18px 38px rgba(120, 45, 15, .13);
        animation: heroItemFloat 5.5s ease-in-out infinite;
    }

    .home-hero_content--features-items h4 {
        color: #df4d0f;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1.2;
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
        max-width: 600px;
    }

    .home-hero_content--visual-img {
        width: 450px;
        padding: 13px;
        border-radius: 30px;
        background: rgba(255, 255, 255, .45);
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 28px 70px rgba(80, 35, 15, .16);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-hero_content--visual-img img {
        width: 100%;
        object-fit: fill;
        border-radius: 30px;
    }

    .home-hero_content--visual-text {
        position: absolute;
        padding: 13px 17px;
        border-radius: 16px;
        color: #101827;
        font-size: 13px;
        font-weight: 900;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .38));
        border: 1px solid rgba(255, 255, 255, .95);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 18px 42px rgba(70, 30, 10, .14);
        animation: heroItemFloat 5s ease-in-out infinite;
    }

    .home-hero_content--visual-text:first-child {
        top: 36px;
        left: -35px;
    }

    .home-hero_content--visual-text:nth-child(2) {
        top: 115px;
        right: -35px;
        animation-delay: .6s;
    }

    .home-hero_content--visual-text:nth-child(3) {
        bottom: 32px;
        left: -18px;
        animation-delay: 1s;
    }
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
                <div class="home-hero_content--visual-text">
                    📈 +320% Growth
                </div>
                <div class="home-hero_content--visual-text">
                    🎯 High Converting Campaigns
                </div>
                <div class="home-hero_content--visual-text">
                    ⭐ 15,000+ Clients
                </div>
            </div>
        </div>
    </section>

<!-- /////////////////////////////////////////////////// Hero Section End ///////////////////////////////////////////     -->
</main>

<?php include 'include/footer.php' ?>