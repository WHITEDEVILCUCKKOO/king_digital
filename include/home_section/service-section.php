<style>
    .home-service {
        width: 100%;
        /* max-width: 1440px; */
        padding: 80px 0;
        background: linear-gradient(135deg, #eef2f7, #f6f8fb);
    }

    .home-service_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 28px 22px;
    }


    .home-service_content--badge {
        width: fit-content;
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        justify-self: center;
        padding: 9px 18px;
        margin-bottom: 10px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 13px;
        font-weight: 900;
        background: rgba(255, 255, 255, .55);
        border: 1px solid rgba(255, 255, 255, .85);
        box-shadow: 0 14px 34px rgba(60, 60, 80, .08);
    }

    .home-service_content--badge span {
        position: relative;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f;
    }

    .home-service_content--badge span::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    .home-service_content--badge p {
        margin: 0;
    }

    .home-service_content--heading {
        max-width: 850px;
        margin: 0 auto 12px;
        color: #101827;
        font-family: "Inter", Arial, sans-serif;
        font-size: 32px;
        font-weight: 900;
        line-height: 1.14;
        letter-spacing: -0.85px;
        text-align: center;
    }

    .home-service_content--heading span {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 45%, #123d6b 100%);
        background-size: 220% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    .home-service_content--para {
        max-width: 850px;
        font-size: 18px;
        text-align: center;
        margin: auto;
        line-height: 1.5;
        color: #6b7280;
        margin-bottom: 16px;
    }

    .home-service_content--para strong {
        color: #101827;
        font-weight: 800;
    }

    .home-service_content--grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .home-service_content--card {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 14px 18px 26px;
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 18px 40px rgba(30, 41, 59, .08);
        overflow: hidden;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-service_content--card::after {
        content: "";
        position: absolute;
        top: -75%;
        left: -120%;
        width: 42%;
        height: 250%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .58), transparent);
        transform: rotate(24deg);
        animation: homeHeroShine 5s ease-in-out infinite;
        pointer-events: none;
    }

    .home-service_content--card:nth-child(1)::after {
        animation-delay: 0s;
    }

    .home-service_content--card:nth-child(2)::after {
        animation-delay: .3s;
    }

    .home-service_content--card:nth-child(3)::after {
        animation-delay: .6s;
    }

    .home-service_content--card:nth-child(4)::after {
        animation-delay: .9s;
    }

    .home-service_content--card:nth-child(5)::after {
        animation-delay: 1.2s;
    }

    .home-service_content--card:nth-child(6)::after {
        animation-delay: 1.5s;
    }

    .home-service_content--card:nth-child(7)::after {
        animation-delay: 1.8s;
    }

    .home-service_content--card:nth-child(8)::after {
        animation-delay: 2.1s;
    }

    .home-service_content--card:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 50px rgba(30, 41, 59, .13);

        .home-service_content--card-img img {
            transform: scale(1.2);
        }

        .home-service_content--card-icon {
            background: linear-gradient(145deg,
                    #163d70 0%,
                    #0d2f5c 50%,
                    #08254a 100%);

            border: 4px solid rgba(255, 255, 255, 0.75);

            box-shadow:
                0 15px 32px rgba(6, 20, 38, 0.36),
                0 8px 25px rgba(16, 58, 107, 0.40),
                0 0 0 7px rgba(255, 255, 255, 0.45),
                0 0 18px rgba(30, 91, 160, 0.35),
                inset 0 1px 1px rgba(255, 255, 255, 0.45),
                inset 0 -7px 15px rgba(3, 14, 27, 0.18);
        }

        .home-service_content--card-icon span {
            color: #fff1e6;
        }

        .home-service_content--card-cta {
            transform: translateY(-3px);
            color: #fff !important;
            background-color: #f0530f;
        }

    }

    .home-service_content--card-img {
        aspect-ratio: 6/4;
        width: 100%;
        height: 160px;
        border-radius: 16px;
        overflow: hidden;
        background: linear-gradient(135deg, #1f2530, #0c1016);
    }

    .home-service_content--card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .25s ease
    }



    .home-service_content--card-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        margin-top: -30px;
        border-radius: 50%;
        background: #ffffff;
        border: 2px solid #fde3d3;
        box-shadow: 0 10px 24px rgba(16, 24, 39, 0.12), 0 8px 22px rgba(239, 86, 13, 0.15), 0 0 0 7px rgba(255, 255, 255, 0.58), inset 0 1px 1px rgba(255, 255, 255, 1), inset 0 -5px 12px rgba(239, 86, 13, 0.04);
        z-index: 1;
        transition: transform .25s ease;
    }

    .home-service_content--card-icon span {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ee5209;
        font-size: 20px;
        font-weight: 800;
        transition: transform .25s ease;
    }

    .home-service_content--card-heading {
        margin-top: 14px;
    }

    .home-service_content--card-heading h3 {
        font-size: 17px;
        font-weight: 800;
        color: #101827;
        text-align: center;
    }

    .home-service_content--card-para {
        margin-top: 8px;
        margin-bottom: 18px;
    }

    .home-service_content--card-para p {
        font-size: 13px;
        line-height: 1.65;
        color: #6b7280;
        text-align: center;
    }

    .home-service_content--card-cta {
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 20px;
        border-radius: 999px;
        color: #ee5209;
        font-size: 13px;
        font-weight: 800;
        background: #fdf4ee;
        border: 1px solid #f6d9c2;
        transition: transform .2s ease, background .2s ease;
    }

    .home-service_content--footer-cta {
        grid-column: 1 / -1;
        justify-self: center;
        margin-top: 14px;
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 17px 34px;
        border-radius: 999px;
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 700;
        overflow: hidden;
        background: linear-gradient(135deg, #ff9448, #f0530f);
        box-shadow: 0 22px 44px rgba(240, 83, 15, .30);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-service_content--footer-cta:hover {
        transform: translateY(-4px);
    }

    .home-service_content--footer-cta::after {
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

    /* ============ TABLET (≤980px) — fixed selector + refinements ============ */
    @media (max-width: 980px) {
        .home-service_content--grid {
            grid-template-columns: repeat(2, 1fr);
            /* now this actually works */
            gap: 20px;
        }

        .home-service_content--heading {
            font-size: 28px;
        }

        .home-service_content--para {
            font-size: 16px;
        }
    }

    /* ============ MOBILE (≤560px) — fixed selector + refinements ============ */
    @media (max-width: 560px) {
        .home-service {
            padding: 60px 0;
        }

        .home-service_content--grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .home-service_content--heading {
            font-size: 24px;
            letter-spacing: -0.4px;
        }

        .home-service_content--para {
            font-size: 15px;
        }

        .home-service_content--card {
            padding: 12px 16px 22px;
        }

        .home-service_content--card-img {
            height: 180px;
        }

        .home-service_content--footer-cta {
            width: 100%;
            justify-content: center;
            padding: 15px 24px;
        }
    }
</style>

<section class="home-service">
    <div class="home-service_content">
        <div class="home-service_content--badge">
            <span></span>
            <p>Our Core Services</p>
        </div>
        <div class="home-service_content--heading">
            <h2>Business Communication &amp;
                <span>Digital Growth Solutions</span>
            </h2>
        </div>
        <div class="home-service_content--para">
            <p>Premium digital, communication and marketing solutions created to improve <strong>brand visibility, customer communication, leads and business growth.</strong></p>
        </div>
        <div class="home-service_content--grid">
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-web-developer.avif" alt="Website Development">
                </div>
                <div class="home-service_content--card-icon">
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
                            <path d="M8 9l-3 3 3 3" />
                            <path d="M16 9l3 3-3 3" />
                            <path d="M14 5l-4 14" />
                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Website Development</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Clean, responsive and conversion-focused websites developed to improve trust, speed and brand value.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-bulk-sms.avif" alt="Bulk SMS">
                </div>
                <div class="home-service_content--card-icon">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M12 3C6.5 3 2 6.6 2 11c0 2.3 1.2 4.3 3.2 5.7L4 22l5-2.5c1 .3 2 .5 3 .5 5.5 0 10-3.6 10-9S17.5 3 12 3zm-4 8a1 1 0 110-2 1 1 0 010 2zm4 0a1 1 0 110-2 1 1 0 010 2zm4 0a1 1 0 110-2 1 1 0 010 2z" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Bulk SMS</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Reliable promotional and transactional SMS campaigns for fast and effective customer communication.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-otp-sms.avif" alt="OTP SMS">
                </div>
                <div class="home-service_content--card-icon">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            aria-hidden="true">

                            <!-- Left Filled Half -->
                            <path fill="currentColor"
                                d="M12 3L5 6v6c0 5 3.5 8.5 7 9V3z" />

                            <!-- Shield Outline -->
                            <path fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3l7 3v6c0 5-3.5 8.5-7 9-3.5-.5-7-4-7-9V6l7-3z" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>OTP SMS</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Secure OTP delivery for login, account verification, transactions and customer authentication.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-whatsapp.avif" alt="WhatsApp API">
                </div>
                <div class="home-service_content--card-icon">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="currentColor"
                            aria-hidden="true">

                            <!-- Chat bubble -->
                            <path d="M12 2C6.48 2 2 6.3 2 11.61c0 1.92.58 3.7 1.57 5.2L2.5 22l5.38-1.42A10.2 10.2 0 0 0 12 21.2c5.52 0 10-4.3 10-9.59S17.52 2 12 2z" />

                            <!-- Phone handset -->
                            <path fill="#fff" d="M15.82 13.96c-.23-.12-1.37-.68-1.58-.76-.21-.08-.37-.12-.52.12-.16.23-.6.76-.74.91-.14.16-.28.18-.51.06-.24-.12-1-.37-1.9-1.19-.7-.62-1.18-1.39-1.32-1.63-.14-.23-.02-.36.1-.48.11-.11.23-.28.35-.42.12-.14.16-.23.23-.39.08-.16.04-.29-.02-.41-.06-.12-.52-1.25-.71-1.71-.19-.45-.39-.39-.52-.4h-.45c-.16 0-.41.06-.62.29-.21.23-.81.79-.81 1.93 0 1.14.83 2.25.95 2.41.12.16 1.64 2.5 3.97 3.5.55.24.99.38 1.33.49.56.18 1.07.15 1.47.09.45-.07 1.37-.56 1.57-1.1.19-.54.19-1 .14-1.1-.05-.1-.2-.16-.43-.28z" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>WhatsApp API</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Automated WhatsApp notifications, marketing messages and customer support communication.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-voice-sms.avif" alt="Voice SMS">
                </div>
                <div class="home-service_content--card-icon">
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

                            <path d="M12 3a3 3 0 0 1 3 3v5a3 3 0 1 1-6 0V6a3 3 0 0 1 3-3z" />
                            <path d="M6 11a6 6 0 0 0 12 0" />
                            <path d="M12 17v4" />
                            <path d="M8 21h8" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Voice SMS</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Professional pre-recorded voice campaigns designed to communicate clearly with large customer audiences.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-ivr.avif" alt="IVR Solutions">
                </div>
                <div class="home-service_content--card-icon">
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

                            <!-- Headband -->
                            <path d="M5 12a7 7 0 0 1 14 0" />

                            <!-- Left earcup -->
                            <rect x="4" y="11" width="3" height="6" rx="1.5" />

                            <!-- Right earcup -->
                            <rect x="17" y="11" width="3" height="6" rx="1.5" />

                            <!-- Mic arm -->
                            <path d="M17 15l-3 2" />

                            <!-- Mic -->
                            <circle cx="13" cy="17.5" r="1" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>IVR Solutions</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Smart call routing, automated greetings and professional customer handling with customized IVR.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-google.avif" alt="Google Ads">
                </div>
                <div class="home-service_content--card-icon">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            fill="currentColor"
                            aria-hidden="true">

                            <path d="M12 3a9 9 0 1 0 0 18c4.3 0 8-3.1 8-7v-1h-7v2.5h4.2A5.8 5.8 0 1 1 12 5.2a5.6 5.6 0 0 1 4.1 1.7l1.7-1.7A8.1 8.1 0 0 0 12 3z" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Google Ads</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Search advertising campaigns focused on qualified leads, accurate tracking and measurable growth.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-meta.avif" alt="Meta Ads">
                </div>
                <div class="home-service_content--card-icon">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 287.56 191"
                            fill="currentColor"
                            width="32"
                            height="32"
                            aria-hidden="true">

                            <path d="M31.06,126c0,11,2.41,19.41,5.56,24.51A19,19,0,0,0,53.19,160c8.1,0,15.51-2,29.79-21.76,11.44-15.83,24.92-38,34-52l15.36-23.6c10.67-16.39,23-34.61,37.18-47C181.07,5.6,193.54,0,206.09,0c21.07,0,41.14,12.21,56.5,35.11,16.81,25.08,25,56.67,25,89.27,0,19.38-3.82,33.62-10.32,44.87C271,180.13,258.72,191,238.13,191V160c17.63,0,22-16.2,22-34.74,0-26.42-6.16-55.74-19.73-76.69-9.63-14.86-22.11-23.94-35.84-23.94-14.85,0-26.8,11.2-40.23,31.17-7.14,10.61-14.47,23.54-22.7,38.13l-9.06,16c-18.2,32.27-22.81,39.62-31.91,51.75C84.74,183,71.12,191,53.19,191c-21.27,0-34.72-9.21-43-23.09C3.34,156.6,0,141.76,0,124.85Z" />

                            <path d="M24.49,37.3C38.73,15.35,59.28,0,82.85,0c13.65,0,27.22,4,41.39,15.61,15.5,12.65,32,33.48,52.63,67.81l7.39,12.32c17.84,29.72,28,45,33.93,52.22,7.64,9.26,13,12,19.94,12,17.63,0,22-16.2,22-34.74l27.4-.86c0,19.38-3.82,33.62-10.32,44.87C271,180.13,258.72,191,238.13,191c-12.8,0-24.14-2.78-36.68-14.61-9.64-9.08-20.91-25.21-29.58-39.71L146.08,93.6c-12.94-21.62-24.81-37.74-31.68-45C107,40.71,97.51,31.23,82.35,31.23c-12.27,0-22.69,8.61-31.41,21.78Z" />

                            <path d="M82.35,31.23c-12.27,0-22.69,8.61-31.41,21.78C38.61,71.62,31.06,99.34,31.06,126c0,11,2.41,19.41,5.56,24.51L10.14,167.91C3.34,156.6,0,141.76,0,124.85,0,94.1,8.44,62.05,24.49,37.3,38.73,15.35,59.28,0,82.85,0Z" />

                        </svg>
                    </span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Meta Ads</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Facebook and Instagram advertising campaigns built for traffic, product sales and quality lead generation.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
        </div>
        <a href="#" class="home-service_content--footer-cta">View All Services <span>→</span></a>
    </div>
</section>