<!-- Video Production Service -->
<style>
    .kdv-section {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: radial-gradient(circle at 8% 40%, rgba(226, 106, 33, 0.08), transparent 45%),
            linear-gradient(180deg, #f7f8fa 0%, #eef0f3 100%);
        padding: 80px 6vw 90px;
    }

    .kdv-grid {
        max-width: 1300px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    /* ---------- Left column ---------- */
    .kdv-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        color: #e26a21;
        font-weight: 700;
        font-size: 13px;
        padding: 9px 18px 9px 10px;
        border-radius: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 26px;
    }

    .kdv-badge-icon {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: linear-gradient(150deg, #f2803a, #d9541a);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kdv-badge-icon svg {
        width: 12px;
        height: 12px;
        fill: #fff;
    }

    .kdv-heading {
        width: 100%;
        max-width: 650px;
        margin-bottom: 17px;
        color: var(--kd-black);
        font-size: clamp(36px, 3.25vw, 44px);
        font-weight: 400;
        line-height: 1.12;
        letter-spacing: -1.1px;
    }

    .kdv-heading-accent-gr {
        display: inline-block;
        background: linear-gradient(90deg, var(--kd-orange) 0%, var(--kd-orange-light) 25%, var(--kd-navy-main) 52%, var(--kd-navy-light) 72%, var(--kd-orange) 100%);
        background-size: 320% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
        animation: kdVideoHeadingGradient 9s linear infinite;
        will-change: background-position;
    }

    @keyframes kdVideoHeadingGradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 320% center;
        }
    }

    .kdv-desc {
        color: #5c5c6a;
        font-size: 16px;
        line-height: 1.8;
        margin: 0 0 36px;
        max-width: 560px;
    }

    .kdv-desc strong {
        color: #2a2a35;
    }

    /* ---------- Step row ---------- */
    .kdv-steps {
        display: flex;
        /* align-items: ; */
        justify-content: space-around;
        margin-bottom: 40px;
        max-width: 560px;
        position: relative;

    }

    .kdv-steps::before {
        content: "";
        position: absolute;
        top: 28px;
        right: 8%;
        left: 8%;
        z-index: 0;
        height: 2px;
        border-radius: 999px;
        background: linear-gradient(90deg, rgba(239, 86, 13, 0.10), var(--kd-orange), var(--kd-navy-main), rgba(16, 58, 107, 0.12));
        background-size: 240% 100%;
        animation: kdVideoTimelineFlow 6s linear infinite;
        pointer-events: none;
    }

    @keyframes kdVideoTimelineFlow {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 240% center;
        }
    }

    .kdv-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 110px;
    }

    .kdv-step-icon {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        width: 56px;
        height: 56px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
        border: 1px solid rgba(239, 86, 13, 0.20);
        border-radius: 18px;
        color: var(--kd-orange);
        font-size: 17px;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.99), rgba(255, 247, 242, 0.88));
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        box-shadow: 0 11px 25px rgba(239, 86, 13, 0.11), 0 0 0 6px rgba(255, 255, 255, 0.62), inset 0 1px 1px rgba(255, 255, 255, 0.98);
        transition: transform 0.48s cubic-bezier(0.22, 1, 0.36, 1), color 0.45s ease, background 0.45s ease, border-color 0.45s ease, box-shadow 0.45s ease;

    }

    z .kdv-step-icon::before {
        content: "";
        position: absolute;
        top: -80%;
        left: -145%;
        width: 45%;
        height: 260%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.72), transparent);
        transform: rotate(24deg);
        transition: left 1s cubic-bezier(0.22, 1, 0.36, 1);
        pointer-events: none;
    }

    .kdv-step-icon:hover::before {
        left: 170%;
    }

    .kdv-step-icon svg {
        width: 22px;
        height: 22px;
        fill: #e26a21;
        transition: fill .3s ease;
    }

    .kdv-step-icon:hover {
        color: #ffffff;
        border-color: rgba(255, 255, 255, 0.36);
        background: linear-gradient(135deg, var(--kd-navy-dark) 0%, var(--kd-navy-main) 70%, var(--kd-navy-light) 100%);
        box-shadow: 0 16px 32px rgba(6, 20, 38, 0.30), 0 0 24px rgba(16, 58, 107, 0.18), 0 0 0 7px rgba(16, 58, 107, 0.09), inset 0 1px 1px rgba(255, 255, 255, 0.28);
        transform: translateY(-5px) rotate(-6deg) scale(1.06);

    }

    .kdv-step-icon:hover svg {
        fill: #fff;
    }

    .kdv-step-label {
        font-size: 13px;
        font-weight: 600;
        color: #2a2a35;
        line-height: 1.4;
    }

    .kdv-step-connector {
        flex-grow: 1;
        height: 2px;
        background: repeating-linear-gradient(90deg, #e26a21, #e26a21 6px, transparent 6px, transparent 12px);
        margin-top: 27px;
        min-width: 20px;
    }

    /* ---------- CTA ---------- */
    .kdv-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        border: none;
        cursor: pointer;
        background: linear-gradient(135deg, #f2803a, #d9541a);
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        padding: 17px 30px;
        border-radius: 40px;
        box-shadow: 0 10px 24px rgba(217, 84, 26, 0.35);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .kdv-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 32px rgba(217, 84, 26, 0.45);
    }

    .kdv-cta svg {
        width: 16px;
        height: 16px;
        fill: #fff;
        transition: transform .25s ease;
    }

    .kdv-cta:hover svg {
        transform: translateX(4px);
    }

    /* ---------- Right column: video card ---------- */
    .kdv-media {
        position: relative;
        max-width: 620px;
        margin: 0 auto;
    }

    .kdv-media-frame {
        position: relative;
        background: #fff;
        border-radius: 26px;
        padding: 14px;
        box-shadow: 0 30px 60px rgba(20, 20, 40, 0.14);
    }

    .kdv-video-wrap {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        background: #0c0c0c;
    }

    .kdv-video-wrap video {
        display: block;
        width: 100%;
        height: auto;
        aspect-ratio: 16/10;
        object-fit: cover;
        background: #0c0c0c;
    }

    .kdv-fullhd-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        background: rgba(12, 12, 12, 0.55);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 20px;
        backdrop-filter: blur(4px);
        pointer-events: none;
    }

    /* Floating badges */
    .kdv-float {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        padding: 10px 16px 10px 10px;
        border-radius: 30px;
        box-shadow: 0 10px 24px rgba(20, 20, 40, 0.14);
        font-size: 13px;
        font-weight: 700;
        color: #2a2a35;
        animation: kdvFloat 3.5s ease-in-out infinite;
    }

    @keyframes kdvFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .kdv-float-icon {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kdv-float-icon svg {
        width: 13px;
        height: 13px;
        fill: #fff;
    }

    .kdv-float-promo {
        top: -22px;
        left: -24px;
        animation-delay: 0s;
    }

    .kdv-float-promo .kdv-float-icon {
        background: linear-gradient(150deg, #f2803a, #d9541a);
    }

    .kdv-float-voice {
        top: 44%;
        right: -30px;
        animation-delay: .6s;
    }

    .kdv-float-voice .kdv-float-icon {
        background: linear-gradient(150deg, #1e2a5e, #121a3d);
    }

    .kdv-float-reels {
        bottom: -20px;
        left: -14px;
        animation-delay: 1.2s;
    }

    .kdv-float-reels .kdv-float-icon {
        background: linear-gradient(150deg, #f2803a, #d9541a);
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 980px) {
        .kdv-grid {
            grid-template-columns: 1fr;
            gap: 70px;
        }

        .kdv-media {
            order: -1;
            max-width: 520px;
        }

        .kdv-heading {
            font-size: 34px;
        }
    }

    @media (max-width: 560px) {
        .kdv-section {
            padding: 60px 6vw 70px;
        }

        .kdv-heading {
            font-size: 27px;
        }

        .kdv-desc {
            font-size: 14.5px;
        }

        .kdv-steps {
            flex-wrap: wrap;
            row-gap: 24px;
        }

        .kdv-step {
            width: 45%;
        }

        .kdv-step-connector {
            display: none;
        }

        .kdv-float {
            font-size: 11px;
            padding: 8px 12px 8px 8px;
        }

        .kdv-float-icon {
            width: 20px;
            height: 20px;
        }

        .kdv-float-promo {
            left: -10px;
            top: -16px;
        }

        .kdv-float-voice {
            right: -10px;
        }

        .kdv-float-reels {
            left: -6px;
            bottom: -14px;
        }
    }
</style>

<section class="kdv-section">
    <div class="kdv-grid">

        <!-- Left column -->
        <div class="kdv-left">
            <span class="kdv-badge">
                <span class="kdv-badge-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                    </svg>
                </span>
                Video Production Service
            </span>

            <h1 class="kdv-heading">Professional Videos That Make <span class="kdv-heading-accent-gr">Your Brand Stand
                    Out</span></h1>

            <p class="kdv-desc">
                We create professional brand videos, promotional videos, product and service showcases, social media reels,
                advertising creatives, corporate presentations and animated explainers. Every video is carefully planned to
                improve <strong>brand visibility, customer engagement, campaign performance and business credibility.</strong>
            </p>

            <div class="kdv-steps">
                <div class="kdv-step">
                    <div class="kdv-step-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M3 11v2a1 1 0 0 0 1 1h2l4 4V6L6 10H4a1 1 0 0 0-1 1zm13.5 1c0-1.77-1-3.29-2.5-4.03v8.05c1.5-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z" />
                        </svg>
                    </div>
                    <span class="kdv-step-label">Brand Promo Videos</span>
                </div>


                <div class="kdv-step">
                    <div class="kdv-step-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M20 6h-4V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zM10 4h4v2h-4V4zm10 15H4V8h16v11z" />
                        </svg>
                    </div>
                    <span class="kdv-step-label">Product &amp; Service Videos</span>
                </div>


                <div class="kdv-step">
                    <div class="kdv-step-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M17 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-5 19a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5-4H7V4h10v13z" />
                        </svg>
                    </div>
                    <span class="kdv-step-label">Reels &amp; Social Ads</span>
                </div>


                <div class="kdv-step">
                    <div class="kdv-step-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M7.5 5.6 5 7 6.4 4.5 5 2l2.5 1.4L10 2 8.6 4.5 10 7 7.5 5.6zm12 9.8L18 14l1.4 2.4L18 18.8l2.5-1.4L23 18.8l-1.4-2.4L23 14l-2.5 1.4zM22 2l-1.25 2.5L18.25 2l1.25 2.5L18.25 7l2.5-1.5L23 7l-1.25-2.5L23 2l-1-.01L22 2zM11.5 4.5 9 10l-6 2 6 2 2.5 5.5L14 14l6-2-6-2-2.5-5.5z" />
                        </svg>
                    </div>
                    <span class="kdv-step-label">Animation &amp; Voice-Over</span>
                </div>
            </div>

            <button class="kdv-cta" type="button">
                Create Video Campaign
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h13M13 6l6 6-6 6" />
                </svg>
            </button>
        </div>

        <!-- Right column: video -->
        <div class="kdv-media">
            <div class="kdv-media-frame">
                <div class="kdv-video-wrap">
                    <!--
            Replace the src below with your actual video URL.
            You can also add a poster="thumbnail.jpg" attribute for a cover image.
          -->
                    <video controls poster="" autoplay muted preload="metadata">
                        <source src="assets/images/img/vidssave.com-Presentation-of-Static-King-_-staticking.com-1080P.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <span class="kdv-fullhd-badge">Full HD</span>
                </div>
            </div>

            <div class="kdv-float kdv-float-promo">
                <span class="kdv-float-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                    </svg>
                </span>
                Promo Videos
            </div>

            <div class="kdv-float kdv-float-voice">
                <span class="kdv-float-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 14a3 3 0 0 0 3-3V5a3 3 0 0 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                    </svg>
                </span>
                Voice-Over
            </div>

            <div class="kdv-float kdv-float-reels">
                <span class="kdv-float-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M17 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-5 19a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5-4H7V4h10v13z" />
                    </svg>
                </span>
                Social Reels
            </div>
        </div>

    </div>
</section>