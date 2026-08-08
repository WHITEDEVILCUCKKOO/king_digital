<style>
    .home-webDesign {
        width: 100%;
        /* max-width: 1440px; */
        padding: 80px 0;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fb 100%);
    }

    .home-webDesign_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        text-align: center;
    }

    .home-webDesign_content--badge {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 9px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 13px;
        font-weight: 900;
        background: rgba(255, 255, 255, .55);
        border: 1px solid rgba(255, 255, 255, .85);
        box-shadow: 0 14px 34px rgba(60, 60, 80, .08);
    }

    .home-webDesign_content--badge span {
        position: relative;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f;
    }

    .home-webDesign_content--badge span::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    .home-webDesign_content--badge p {
        margin: 0;
    }

    .home-webDesign_content--heading {
        margin-bottom: 16px;
    }

    .home-webDesign_content--heading h2 {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.25;
        color: #101827;
    }

    .home-webDesign_content--heading span {
        display: block;
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 45%, #123d6b 100%);
        background-size: 220% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    .home-webDesign_content--para {
        max-width: 720px;
        margin: 0 auto 44px;
    }

    .home-webDesign_content--para p {
        font-size: 15px;
        line-height: 1.7;
        color: #6b7280;
    }

    .home-webDesign_content--para strong {
        color: #101827;
        font-weight: 800;
    }

    /* ---- Grid ---- */

    .home-webDesign_content--grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 260px);
        gap: 20px;
        text-align: left;
    }

    .home-webDesign_content--grid-items:first-child {
        grid-column: 1 / 2;
        grid-row: 1 / 3;
    }

    .home-webDesign_content--grid-items {
        position: relative;
        border-radius: 22px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 18px 40px rgba(30, 41, 59, .10);
    }

    /* image swap layer */

    .home-webDesign_content--grid-items-img {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .home-webDesign_content--grid-items-img img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: opacity .6s ease-in, transform 6s ease-in;
    }


    .home-webDesign_content--grid-items-img::after {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(180deg, rgba(16, 24, 39, 0) 35%, rgba(16, 24, 39, .78) 100%);
        transition: background .4s ease;
    }

    .home-webDesign_content--grid-items:hover .home-webDesign_content--grid-items-img::after {
        background: linear-gradient(180deg, rgba(16, 24, 39, .10) 0%, rgba(16, 24, 39, .94) 100%);
    }

    /* icon badge, top left */

    .home-webDesign_content--grid-items-img>span {
        position: absolute;
        top: 16px;
        left: 16px;
        z-index: 2;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: #123d6b;
        color: #ffffff;
        font-size: 15px;
        box-shadow: 0 10px 22px rgba(18, 61, 107, .35);
    }

    /* card title */

    .home-webDesign_content--grid-items-img h3 {
        position: absolute;
        left: 20px;
        right: 20px;
        bottom: 20px;
        z-index: 2;
        color: #ffffff;
        font-size: 19px;
        font-weight: 800;
        transition: bottom .4s ease;
    }

    .home-webDesign_content--grid-items:hover .home-webDesign_content--grid-items-img h3 {
        bottom: 84px;
    }

    /* hover reveal: description + arrow */

    .home-webDesign_content--grid-items-img:hover {
        transform: scale(1.1);
        /* opacity: 0.9; */
        transition: 0.25s ease;
    }

    .home-webDesign_content--hover-text {
        position: absolute;
        left: 20px;
        right: 20px;
        bottom: 20px;
        z-index: 3;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-height .45s ease, opacity .35s ease;
    }

    .home-webDesign_content--grid-items:hover .home-webDesign_content--hover-text {
        max-height: 150px;
        opacity: 1;
    }

    .home-webDesign_content--hover-text p {
        font-size: 13px;
        line-height: 1.65;
        color: rgba(255, 255, 255, .88);
        padding-right: 44px;
    }

    .home-webDesign_content--hover-text p::after {
        content: "";
        display: block;
        width: 36px;
        height: 2px;
        margin-top: 12px;
        background: #ff8a45;
    }

    .home-webDesign_content--hover-text span {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-weight: 800;
        font-size: 15px;
        background: linear-gradient(135deg, #ff9448, #f0530f);
        box-shadow: 0 12px 26px rgba(240, 83, 15, .35);
        transform: translateX(12px);
        opacity: 0;
        transition: transform .4s ease, opacity .4s ease;
    }

    .home-webDesign_content--grid-items:hover .home-webDesign_content--hover-text span {
        transform: translateX(0);
        opacity: 1;
    }

    @media (max-width: 980px) {
        .home-webDesign_content--grid {
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(3, 220px);
        }

        .home-webDesign_content--grid-items:first-child {
            grid-column: 1 / 3;
            grid-row: 1 / 2;
        }
    }

    @media (max-width: 620px) {
        .home-webDesign_content--grid {
            grid-template-columns: 1fr;
            grid-template-rows: none;
        }

        .home-webDesign_content--grid-items,
        .home-webDesign_content--grid-items:first-child {
            grid-column: 1 / 2;
            grid-row: auto;
            height: 260px;
        }
    }
</style>
<section class="home-webDesign">
    <div class="home-webDesign_content">
        <div class="home-webDesign_content--badge">
            <span></span>
            <p>Web Design Solutions</p>
        </div>
        <div class="home-webDesign_content--heading">
            <h2>Website Types Designed for
                <span>Real Business Growth</span>
            </h2>
        </div>
        <div class="home-webDesign_content--para">
            <p>We do not create websites that only look attractive. We build a <strong>strong digital presence</strong> with professional design, clean user experience and pages focused on leads, sales and measurable results.</p>
        </div>

        <div class="home-webDesign_content--grid">

            <div class="home-webDesign_content--grid-items">
                <div class="home-webDesign_content--grid-items-img">
                    <img src="assets/images/webDesign/corporate-websites.avif" alt="Corporate Websites">
                </div>
                <div class="home-webDesign_content--grid-items-heading">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M8 2a2 2 0 0 0-2 2v18h4v-4h4v4h4V4a2 2 0 0 0-2-2H8zm1 3h2v2H9V5zm4 0h2v2h-2V5zM9 9h2v2H9V9zm4 0h2v2h-2V9zm-4 4h2v2H9v-2zm4 0h2v2h-2v-2z" />

                        </svg>
                    </span>
                    <h3>Corporate Websites</h3>
                </div>
                <div class="home-webDesign_content--hover-text">
                    <p>Build a strong professional identity and present your services, values and expertise through a modern website designed to earn customer trust.</p>
                    <span>→</span>
                </div>
            </div>

            <div class="home-webDesign_content--grid-items">
                <div class="home-webDesign_content--grid-items-img">
                    <img src="assets/images/webDesign/lead-capture-page.avif" alt="Lead Capture Pages">
                </div>
                <div class="home-webDesign_content--grid-items-heading">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <!-- Outer Ring -->
                            <circle cx="12" cy="12" r="9" />

                            <!-- Middle Ring -->
                            <circle cx="12" cy="12" r="6" />

                            <!-- Center -->
                            <circle cx="12" cy="12" r="3" />

                        </svg>
                    </span>
                    <h3>Lead Capture Pages</h3>
                </div>
                <div class="home-webDesign_content--hover-text">
                    <p>Focused, distraction-free pages built to turn visitors into qualified leads for your sales team.</p>
                    <span>→</span>
                </div>
            </div>

            <div class="home-webDesign_content--grid-items">
                <div class="home-webDesign_content--grid-items-img">
                    <img src="assets/images/webDesign/blog.avif" alt="Blog Websites">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                            width="24"
                            height="24"
                            fill="currentColor">

                            <path d="M368.5 18.3l-50.1 50.1 125.3 125.3 50.1-50.1c21.9-21.9 21.9-57.3 0-79.2L447.7 18.3c-21.9-21.9-57.3-21.9-79.2 0zM279.3 97.2l-.5 .1-144.1 43.2c-19.9 6-35.7 21.2-42.3 41L3.8 445.8c-2.9 8.7-1.9 18.2 2.5 26L161.7 316.4c-1.1-4-1.6-8.1-1.6-12.4 0-26.5 21.5-48 48-48s48 21.5 48 48-21.5 48-48 48c-4.3 0-8.5-.6-12.4-1.6L40.3 505.7c7.8 4.4 17.2 5.4 26 2.5l264.3-88.6c19.7-6.6 35-22.4 41-42.3l43.2-144.1.1-.5-135.5-135.5z" />
                        </svg>
                    </span>
                    <h3>Blog Websites</h3>
                </div>
                <div class="home-webDesign_content--hover-text">
                    <p>Content-first websites structured for SEO growth, reader engagement and long-term organic traffic.</p>
                    <span>→</span>
                </div>
            </div>

            <div class="home-webDesign_content--grid-items">
                <div class="home-webDesign_content--grid-items-img">
                    <img src="assets/images/webDesign/landing-page.avif" alt="Landing Pages">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">

                            <g transform="rotate(18 12 12)">

                                <path d="M12 2
                 C15 4 16 7 16 11
                 V15
                 H8
                 V11
                 C8 7 9 4 12 2Z" />

                                <circle cx="12" cy="8" r="1.2" />

                                <path d="M8 13L5.8 15.2V17L8 16Z" />
                                <path d="M16 13L18.2 15.2V17L16 16Z" />

                                <path d="M10.5 15V17" />
                                <path d="M13.5 15V17" />

                            </g>

                        </svg>
                    </span>
                    <h3>Landing Pages</h3>
                </div>
                <div class="home-webDesign_content--hover-text">
                    <p>High-converting single-goal pages built for ad campaigns, launches and product promotions.</p>
                    <span>→</span>
                </div>
            </div>

            <div class="home-webDesign_content--grid-items">
                <div class="home-webDesign_content--grid-items-img">
                    <img src="assets/images/webDesign/dynamic-website.avif" alt="Dynamic Websites">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <!-- Top Server -->
                            <rect x="3" y="3" width="18" height="6" rx="1.5" />

                            <!-- Middle Server -->
                            <rect x="3" y="9" width="18" height="6" rx="1.5" />

                            <!-- Bottom Server -->
                            <rect x="3" y="15" width="18" height="6" rx="1.5" />

                            <!-- LEDs -->
                            <circle cx="6" cy="6" r="0.6" fill="currentColor" stroke="none" />
                            <circle cx="6" cy="12" r="0.6" fill="currentColor" stroke="none" />
                            <circle cx="6" cy="18" r="0.6" fill="currentColor" stroke="none" />

                            <!-- Drive Slots -->
                            <path d="M10 6h8" />
                            <path d="M10 12h8" />
                            <path d="M10 18h8" />

                        </svg>
                    </span>
                    <h3>Dynamic Websites</h3>
                </div>
                <div class="home-webDesign_content--hover-text">
                    <p>Database-driven websites with admin panels, user accounts and content that updates in real time.</p>
                    <span>→</span>
                </div>
            </div>

        </div>
    </div>
</section>