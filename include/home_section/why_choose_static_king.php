<!-- Why Choose Static King -->

<style>
    .skWc-wrapper {
        font-family: 'Segoe UI', Arial, sans-serif;
        width: 100%;
        box-sizing: border-box;
        background: linear-gradient(120deg, #f4f6fb 0%, #fdf2ea 50%, #f4f6fb 100%);
        padding: 70px 14rem;
    }



    .skWc-wrapper *,
    .skWc-wrapper *::before,
    .skWc-wrapper *::after {
        box-sizing: border-box;
    }

    .skWc-grid {
        max-width: 1300px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    /* ============ LEFT: FEATURE CARDS ============ */
    .skWc-cardsGrid {
        display: grid;
        grid-template-columns: 1.5fr 1.5fr;
        gap: 20px;
    }

    .skWc-card {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        min-height: 190px;
        padding: 22px;
        border: 1px solid rgba(255, 255, 255, 0.86);
        border-radius: 26px;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.90), rgba(246, 249, 253, 0.62));
        -webkit-backdrop-filter: blur(18px) saturate(165%);
        /* backdrop-filter: blur(18px) saturate(165%); */
        box-shadow: 0 20px 45px rgba(16, 24, 39, 0.075), inset 0 1px 1px rgba(255, 255, 255, 0.96);
        animation: skWhyFloat120 5.5s ease-in-out infinite;
        transition: transform 0.42s ease, border-color 0.42s ease, box-shadow 0.42s ease;
    }

    @keyframes skWhyFloat120 {

        0%,
        100% {

            transform: translateY(0px);
        }

        50% {
            transform: translateY(-7px);
        }
    }

    /* Card 1 */
    .skWc-card:nth-child(1) {
        animation-duration: 5.2s;
        animation-delay: 0s;
    }

    /* Card 2 */
    .skWc-card:nth-child(2) {
        animation-duration: 6.1s;
        animation-delay: .8s;
        animation-direction: reverse;
    }

    /* Card 3 */
    .skWc-card:nth-child(3) {
        animation-duration: 5.7s;
        animation-delay: 1.5s;
    }

    /* Card 4 */
    .skWc-card:nth-child(4) {
        animation-duration: 6.4s;
        animation-delay: .4s;
        animation-direction: reverse;
    }

    .card_soles {
        border-color: rgba(255, 255, 255, 0.42);
        background: linear-gradient(135deg, #ff9b5a 0%, #ff7226 45%, #ef560d 100%);
        box-shadow: 0 26px 58px rgba(239, 86, 13, 0.26), inset 0 1px 1px rgba(255, 255, 255, 0.36);
    }

    .card_soles::after {
        content: "";
        position: absolute;
        top: -80%;
        left: -130%;
        z-index: -1;
        width: 48%;
        height: 260%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.90), transparent);
        transform: rotate(24deg);
        animation: skWhyShine12 5s ease-in-out infinite;
    }

    @keyframes skWhyShine12 {
        0% {
            left: -130%;
        }

        40%,
        100% {

            left: 135%;
        }
    }


    .skWc-card.skIsVisible {
        animation: skWcFadeUp 0.6s ease forwards;
    }

    .skWc-card:nth-child(1).skIsVisible {
        animation-delay: 0.05s;
    }

    .skWc-card:nth-child(2).skIsVisible {
        animation-delay: 0.15s;
    }

    .skWc-card:nth-child(3).skIsVisible {
        animation-delay: 0.25s;
    }

    .skWc-card:nth-child(4).skIsVisible {
        animation-delay: 0.35s;
    }

    .skWc-card:hover {
        transform: translateY(-8px);
    }

    .skWc-cardOrange {
        background: linear-gradient(140deg, #ff7a1a 0%, #ff9a3d 100%);
        box-shadow: 0 16px 30px rgba(255, 122, 26, 0.3);
    }

    .skWc-cardOrange:hover {
        box-shadow: 0 22px 40px rgba(255, 122, 26, 0.4);
    }

    .skWc-cardWhite {
        background-color: #ffffff;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
    }

    .skWc-cardWhite:hover {
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
    }

    .skWc-cardIconBox {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        border: 1px solid rgba(239, 86, 13, 0.14);
        border-radius: 18px;
        color: #ef560d;
        font-size: 24px;
        background: #ffffff;
        box-shadow: 0 10px 24px rgba(16, 24, 39, 0.06);
    }

    /* .skWc-card:hover .skWc-cardIconBox {
            transform: scale(1.12) rotate(-6deg);
        } */

    .skWc-cardOrange .skWc-cardIconBox {
        background-color: #ffffff;
    }

    .skWc-cardWhite .skWc-cardIconBox {
        background: linear-gradient(140deg, #fff1e6, #ffe2cc);
    }

    .skWc-cardIconBox svg {
        width: 22px;
        height: 22px;
    }

    .skWc-cardOrange .skWc-cardIconBox svg {
        color: #ff7a1a;
    }

    .skWc-cardWhite .skWc-cardIconBox svg {
        color: #ff7a1a;
    }

    .skWc-cardTitle {
        font-size: 16.5px;
        font-weight: 500;
        margin: 0 0 10px 0;
        color: white;
        font-family: "Inter", Arial, sans-serif;
    }

    .skWc-cardOrange .skWc-cardTitle {
        color: #ffffff;
    }

    .skWc-cardWhite .skWc-cardTitle {
        color: #1c1c22;
    }

    .skWc-cardText {
        font-size: 13.5px;
        line-height: 1.6;
        margin: 0;
        font-weight: 400;
        color: white;
        font-family: "Inter", Arial, sans-serif;
    }

    .skWc-cardOrange .skWc-cardText {
        color: rgba(255, 255, 255, 0.92);
    }

    .skWc-cardWhite .skWc-cardText {
        color: #6b6b74;
    }

    /* ============ RIGHT: CONTENT ============ */
    .skWc-contentCol {
        opacity: 0;
        transform: translateY(24px);
    }

    .skWc-contentCol.skIsVisible {
        animation: skWcFadeUp 0.7s ease 0.1s forwards;
    }

    .skWc-badgeTag {
        display: inline-block;
        background-color: #fff1e6;
        color: #ff7a1a;
        font-size: 12.5px;
        font-weight: 800;
        padding: 8px 18px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .skWc-heading {
        font-size: 30px;
        font-weight: 500;
        color: #1c1c22;
        line-height: 1.25;
        margin: 0 0 20px 0;
    }

    .skWc-headingAccent {
        display: inline;
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 30%, #103a6b 67%, #ef560d 100%);
        background-size: 260% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
        animation: skWhyHeadingFlow98794 10s linear infinite;
    }


    @keyframes skWhyHeadingFlow98794 {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 260% center;
        }

    }

    .skWc-description {
        font-size: 14.5px;
        line-height: 1.75;
        color: #5a5a63;
        margin: 0 0 30px 0;
        font-weight: 500;
        max-width: 560px;
    }

    /* ---- Stats Row ---- */
    .skWc-statsRow {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 16px;
        margin-bottom: 30px;
        max-width: 560px;
    }

    .skWc-statBox {
        background-color: #ffffff;
        border-radius: 14px;
        padding: 20px 14px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .skWc-statBox:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 26px rgba(255, 122, 26, 0.18);
    }

    .skWc-statNumber {
        font-size: 22px;
        font-weight: 800;
        color: #ff7a1a;
        margin: 0 0 6px 0;
    }

    .skWc-statLabel {
        font-size: 12px;
        font-weight: 700;
        color: #1c1c22;
        margin: 0;
    }

    /* ---- CTA Button ---- */
    .skWc-ctaBtn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        border: none;
        border-radius: 30px;
        padding: 16px 30px;
        font-size: 14.5px;
        font-weight: 700;
        color: #ffffff;
        cursor: pointer;
        background: linear-gradient(90deg, #ff7a1a 0%, #ff9a3d 100%);
        background-size: 200% 100%;
        background-position: 0% 0%;
        box-shadow: 0 10px 24px rgba(255, 122, 26, 0.35);
        transition: background-position 0.5s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skWc-ctaBtn:hover {
        background-position: 100% 0%;
        transform: translateY(-3px);
        box-shadow: 0 16px 30px rgba(255, 122, 26, 0.45);
    }

    .skWc-ctaBtn:active {
        transform: translateY(0) scale(0.97);
    }

    /* ---- Animations ---- */
    @keyframes skWcFadeUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===================== RESPONSIVE BREAKPOINTS ===================== */

    @media (max-width: 1024px) {
        .skWc-wrapper {
            padding: 50px 32px;
        }

        .skWc-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .skWc-heading {
            font-size: 30px;
        }
    }

    @media (max-width: 640px) {
        .skWc-wrapper {
            padding: 40px 18px;
        }

        .skWc-cardsGrid {
            grid-template-columns: 1fr;
        }

        .skWc-heading {
            font-size: 25px;
        }

        .skWc-statsRow {
            grid-template-columns: 1fr;
        }

        .skWc-ctaBtn {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="skWc-wrapper">
    <div class="skWc-grid">

        <!-- LEFT: Feature Cards -->
        <div class="skWc-cardsGrid" id="skWcCardsGrid">

            <div class="skWc-card card_soles">
                <span class="skWc-cardIconBox">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </span>
                <h3 class="skWc-cardTitle">Fast Delivery</h3>
                <p class="skWc-cardText">Quick SMS, WhatsApp and voice communication delivery for business campaigns.</p>
            </div>

            <div class="skWc-card skWc-cardWhite">
                <span class="skWc-cardIconBox">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </span>
                <h3 class="skWc-cardTitle">Secure Platform</h3>
                <p class="skWc-cardText">Reliable OTP, SMS gateway and API solutions with professional setup.</p>
            </div>

            <div class="skWc-card skWc-cardWhite">
                <span class="skWc-cardIconBox">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </span>
                <h3 class="skWc-cardTitle">Smart Reports</h3>
                <p class="skWc-cardText">Track campaign delivery, response and performance with clear reporting.</p>
            </div>

            <div class="skWc-card card_soles">
                <span class="skWc-cardIconBox">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                </span>
                <h3 class="skWc-cardTitle">Expert Support</h3>
                <p class="skWc-cardText">Get proper guidance for Bulk SMS, IVR, WhatsApp API and ads setup.</p>
            </div>

        </div>

        <!-- RIGHT: Content -->
        <div class="skWc-contentCol" id="skWcContentCol">

            <span class="skWc-badgeTag">Why Choose Static King</span>

            <h2 class="skWc-heading">Reliable Communication <span class="skWc-headingAccent">For Every Business</span></h2>

            <p class="skWc-description">Static King gives businesses a complete platform to manage customer communication, marketing messages and lead generation. Our solutions are built for brands that need fast delivery, better response, smooth automation and professional support.</p>

            <div class="skWc-statsRow">
                <div class="skWc-statBox">
                    <p class="skWc-statNumber"><span class="count" data-target="15">0</span>K+</p>
                    <p class="skWc-statLabel">Businesses Served</p>
                </div>
                <div class="skWc-statBox">
                    <p class="skWc-statNumber"><span class="count" data-target="98">0</span>%</p>
                    <p class="skWc-statLabel">Delivery Focused</p>
                </div>
                <div class="skWc-statBox">
                    <p class="skWc-statNumber"><span class="count" data-target="24">0</span>0/<span class="count" data-target="7">0</span></p>
                    <p class="skWc-statLabel">Support</p>
                </div>
            </div>

            <button class="skWc-ctaBtn">Start Your Campaign</button>

        </div>

    </div>
</section>

<script>
    (function skWcScrollReveal() {
        var skRevealEls = document.querySelectorAll('#skWcContentCol');

        // IntersectionObserver halka aur efficient hai, scroll event ki tarah baar-baar fire nahi hota
        if ('IntersectionObserver' in window) {
            var skObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('skIsVisible');
                        skObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            skRevealEls.forEach(function(el) {
                skObserver.observe(el);
            });
        } else {
            skRevealEls.forEach(function(el) {
                el.classList.add('skIsVisible');
            });
        }
    })();
</script>