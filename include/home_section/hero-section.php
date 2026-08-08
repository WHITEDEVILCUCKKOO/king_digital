<style>
    /* ////////////////////////////////////////////////////// Hero Section Start Here /////////////////////////////////////////////// */

    .home-hero {
        position: relative;
        width: 100%;
        /* max-width: 1440px; */
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

    /* ============ TABLET (≤1024px) ============ */
    @media (max-width: 1024px) {
        .home-hero {
            max-height: none;
            padding: 100px 0 40px;
        }

        #canvas {
            max-height: none;
            padding: 90px 0 40px;
        }

        .home-hero_content {
            flex-direction: column;
            gap: 32px;
            text-align: center;
        }

        .home-hero_content--text {
            max-width: 100%;
        }

        .home-hero_content--upper-feature {
            white-space: normal;
            text-align: center;
            max-width: 90%;
            margin: 0 auto 18px;
        }

        .home-hero_content--heading {
            font-size: 32px;
        }

        .home-hero_content--cta {
            justify-content: center;
            flex-wrap: wrap;
        }

        .home-hero_content--features {
            max-width: 480px;
            margin: 10px auto 0;
        }

        .home-hero_content--visual-img {
            min-width: 450px;
            margin: 0 auto;
        }

        .home-hero_content--visual-text {
            font-size: 13px;
            padding: 10px 14px;
        }

        .home-hero_content--visual-text--growth {
            top: 10px;
            left: 0;
        }

        .home-hero_content--visual-text--campaigns {
            top: auto;
            bottom: 80px;
            right: 0;
        }

        .home-hero_content--visual-text--clients {
            bottom: 10px;
            left: 0;
        }
    }

    @media (max-width: 640px) {
        .home-hero {
            padding: 100px 0 32px;
        }

        .home-hero_content {
            width: 92%;
            gap: 24px;
        }

        .home-hero_content--heading {
            font-size: 26px;
            margin-bottom: 14px;
        }

        .home-hero_content--para {
            font-size: 14px;
        }

        .home-hero_content--cta {
            flex-direction: column;
            width: 100%;
            gap: 12px;
        }

        .home-hero_content--cta a {
            width: 100%;
            padding: 14px 20px;
        }

        /* 3-column stat grid is too tight on phones — drop to 1 column */
        .home-hero_content--features {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .home-hero_content--visual-img {
            max-width: 280px;
            padding: 10px;
        }

        /* floating badges are too cramped on small screens — hide them, keep the core visual */
        .home-hero_content--visual-text--growth,
        .home-hero_content--visual-text--campaigns,
        .home-hero_content--visual-text--clients {
            display: none;
        }
    }

    /* ////////////////////////////////////////////////// Hero Styling End ////////////////////////////////////////// */
</style>


<!-- ////////////////////////////////////////////////// Hero Section ////////////////////////////////////////// -->
<section class="home-hero" id="first-section">
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

<!-- ///////////////////////////////////////// Hero Section End ///////////////////////////////////////////     -->

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