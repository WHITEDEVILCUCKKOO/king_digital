<!-- slider -->
<style>
    .kdts-section {
        --kdts-orange: #ff7a1a;
        --kdts-orange-dark: #f2660a;
        --kdts-ink: #1c2230;
        --kdts-sub: #6b7280;
        --kdts-card-bg: #ffffff;
        --kdts-card-border: #eef0f4;
        --kdts-duration: 32s;

        position: relative;
        overflow: hidden;
        padding: clamp(20px, 2vw, 20px) 0;
        /* background:
        radial-gradient(60% 55% at 12% 15%, rgba(255, 159, 90, 0.20), rgba(255, 159, 90, 0) 70%),
        radial-gradient(50% 50% at 85% 10%, rgba(255, 122, 26, 0.10), rgba(255, 122, 26, 0) 70%),
        #fbfbfc; */
        font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #f1f4f8;
        background-image: radial-gradient(ellipse 46% 28% at 8% 34%, rgba(239, 86, 13, .064) 0%, rgba(239, 86, 13, .021) 45%, transparent 76%), radial-gradient(ellipse 49% 29% at 92% 70%, rgba(16, 58, 107, .072) 0%, rgba(16, 58, 107, .024) 46%, transparent 76%), linear-gradient(180deg, #eef2f7 0%, #eef2f7 10%, #f1f4f8 20%, #f6f8fb 31%, #fbfcfe 43%, #ffffff 55%, #fafbfd 68%, #f7f9fc 80%, #f3f6fa 91%, #f1f4f8 100%);
        /* background-repeat: no-repeat; */
        background-position: center;
        background-size: 100% 100%;
    }

    .kdts-header {
        max-width: 720px;
        margin: 0 auto clamp(32px, 6vw, 56px);
        padding: 0 20px;
        text-align: center;
    }

    .kdts-logo-row {
        display: flex;
        justify-content: center;
        margin-bottom: 18px;
    }

    /* Placeholder slot for the client logo — swap the <img src="">
   with the real logo path when ready. */
    .kdts-logo-slot {
        height: 34px;
        width: auto;
        max-width: 180px;
        object-fit: contain;
    }

    .kdts-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #ffffff;
        border: 1px solid #f0e4da;
        color: var(--kdts-orange-dark);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.3px;
        padding: 8px 18px;
        border-radius: 999px;
        box-shadow: 0 6px 16px rgba(255, 122, 26, 0.12);
        margin-bottom: 18px;
    }

    .kdts-title {
        font-size: clamp(26px, 4.2vw, 42px);
        line-height: 1.2;
        font-weight: 800;
        color: var(--kdts-ink);
        margin: 0 0 14px;
    }

    .kdts-title-accent {
        color: var(--kdts-orange);
    }

    .kdts-subtitle {
        font-size: clamp(14px, 1.6vw, 16px);
        color: var(--kdts-sub);
        margin: 0;
        line-height: 1.6;
    }

    /* ---------------- TRACK / MARQUEE ---------------- */

    .kdts-viewport {
        position: relative;
        width: 70%;
        -webkit-mask-image: linear-gradient(to right,
                /* transparent 0, */
                #000 5%,
                #000 95%
                /* transparent 100% */
            );
        mask-image: linear-gradient(to right,
                /* transparent 0, */
                #000 5%,
                #000 95%
                /* transparent 100% */
            );
        /* -webkit-mask-image: linear-gradient(
    to right,
    transparent 0,
    #000 5%,
    #000 95%,
    transparent 100%
  );
  mask-image: linear-gradient(
    to right,
    transparent 0,
    #000 5%,
    #000 95%,
    transparent 100%
  ); */

        margin: auto;
    }

    .kdts-track {
        display: flex;
        width: max-content;
        animation: kdts-scroll var(--kdts-duration) linear infinite;
    }

    /* .kdts-viewport:hover .kdts-track {
      animation-play-state: paused;
    } */

    .kdts-track-group {
        display: flex;
        gap: 22px;
        padding: 10px 11px 30px;
    }

    @keyframes kdts-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ---------------- CARD ---------------- */

    .kdts-card {
        /* position: relative;
  flex: 0 0 auto;
  width: clamp(240px, 26vw, 300px);
  background: var(--kdts-card-bg);
  border: 1px solid var(--kdts-card-border);
  border-radius: 18px;
  padding: 26px 24px 22px;
  box-shadow: 0 10px 28px rgba(20, 20, 43, 0.05);
  transition: transform 0.35s ease, box-shadow 0.35s ease, background 0.35s ease; */

        position: relative;
        width: 225px;
        min-height: 180px;
        padding: 9px 25px 10px;
        border-radius: 24px;
        overflow: hidden;
        isolation: isolate;
        background: linear-gradient(145deg, rgba(255, 255, 255, .96), rgba(255, 248, 244, .78)), rgba(255, 255, 255, .88);
        border: 1px solid rgba(239, 86, 13, .13);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        box-shadow: 0 14px 32px rgba(15, 23, 42, .055), 0 8px 22px rgba(239, 86, 13, .055), inset 0 1px 1px rgba(255, 255, 255, .98);
        transition: transform .75s cubic-bezier(.22, 1, .36, 1), box-shadow .75s cubic-bezier(.22, 1, .36, 1), border-color .75s ease, background .75s ease;
        animation: kdFloatCard 8s ease-in-out infinite;
    }

    .kdts-card>* {
        position: relative;
        z-index: 2;
    }

    .kdts-card::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        opacity: 0;
        background: radial-gradient(circle at 18% 15%, rgba(255, 255, 255, .38), transparent 35%), linear-gradient(135deg, #ffefe6 0%, #ff9b5a 48%, #ef560d 100%);
        transition: opacity .75s cubic-bezier(.22, 1, .36, 1)
    }

    .kdts-card::after {
        content: "";
        position: absolute;
        top: -100%;
        left: -150%;
        width: 46%;
        height: 300%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .62), transparent);
        transform: rotate(25deg);
        transition: 1.25s ease;
        z-index: 5;
        pointer-events: none;
    }

    .kdts-card:hover::after {
        left: 170%;
    }

    .kdts-card:hover {
        /* transform: translateY(-6px) scale(1.02);
  box-shadow: 0 20px 40px rgba(255, 122, 26, 0.35);
  z-index: 2;
  background: linear-gradient(135deg, var(--kdts-orange) 0%, var(--kdts-orange-dark) 100%);
  border-color: transparent; */

        transform: translateY(-12px) scale(1.035) rotateX(3deg);
        border-color: rgba(255, 255, 255, .58);
        box-shadow: 0 28px 58px rgba(239, 86, 13, .23), inset 0 1px 1px rgba(255, 255, 255, .58);
    }

    .kdts-card:hover::before {
        opacity: 1;
    }

    /* .kdts-card:hover .kdts-text,
.kdts-card:hover .kdts-name {
  color: #fffaf6;
}

.kdts-card:hover .kdts-role {
  color: #ffe3cc;
}

.kdts-card:hover .kdts-stars,
.kdts-card:hover .kdts-quote-icon {
  color: rgba(255, 255, 255, 0.85);
}

.kdts-card:hover .kdts-footer {
  border-top-color: rgba(255, 255, 255, 0.25);
} */

    .kdts-card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 5px;
        position: relative;
    }

    .kdts-stars {
        /* color: var(--kdts-orange); */
        color: rgb(255, 208, 0);
        font-size: 16px;
        letter-spacing: 2px;
    }

    .kdts-quote-icon {
        position: fixed;
        top: 7px;
        right: 15px;

        font-family: Georgia, "Times New Roman", serif;
        font-size: 60px;
        font-weight: 900;
        /* line-height: 1; */
        color: rgba(255, 122, 26, 0.28);
        transform: rotate(180deg);
    }

    .kdts-quote-icon {
        color: rgba(255, 122, 26, 0.22);
        width: 17px;

        img {
            width: 100%;
            transform: rotate(180deg);
        }
    }

    .kdts-text {
        font-size: 11.4px;
        line-height: 1.65;
        color: #384153;
        /* margin: 0 0 20px; */
        /* font-weight: 700; */
        font-style: italic;
    }

    .kdts-footer {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 16px;
        /* border-top: 1px solid rgba(0, 0, 0, 0.06); */
        padding-bottom: 8px;
    }

    .kdts-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        background: #e9edf3;
        flex: 0 0 auto;
    }

    .kdts-name {
        font-size: 14px;
        font-weight: 700;
        color: var(--kdts-ink);
        margin: 0;
    }

    .kdts-role {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--kdts-orange-dark);
        margin: 2px 0 0;
    }


    .kdts-card:hover .kdts-text,
    .kdts-card:hover .kdts-name,
    .kdts-card:hover .kdts-role {
        color: white;
    }

    /* ---------------- RESPONSIVE ---------------- */

    @media (max-width: 1024px) {
        .kdts-card {
            width: clamp(220px, 40vw, 280px);
        }

        .kdts-section {
            --kdts-duration: 26s;
        }
    }

    @media (max-width: 640px) {
        .kdts-card {
            width: 76vw;
            padding: 22px 20px 18px;
        }

        .kdts-track-group {
            gap: 16px;
            padding: 8px 8px 26px;
        }

        .kdts-section {
            --kdts-duration: 20s;
        }

        .kdts-text {
            font-size: 14px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .kdts-track {
            animation: none;
        }
    }
</style>

<section class="kdts-section">

    <div class="kdts-header">

        <div class="kdts-logo-row">
            <!-- LOGO PLACEHOLDER: replace src="" with your logo file path -->
            <!-- <img src="img/.jpg" class="kdts-logo-slot" src="" alt="Company logo"> -->
        </div>

        <span class="kdts-badge">★★★★★ Client Reviews</span>
        <h2 class="kdts-title">What Our <span class="kdts-title-accent">Customers Say</span></h2>
        <p class="kdts-subtitle">Real feedback from real clients — smooth motion, clean and professional styling.</p>
    </div>

    <div class="kdts-viewport">
        <div class="kdts-track">

            <!-- GROUP A -->
            <div class="kdts-track-group" id="kdts-group-a">

                <!-- card 1 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/11.jpg" class="kdts-avatar" src="" alt="Mia R.">
                        <div>
                            <p class="kdts-name">Mia R.</p>
                            <p class="kdts-role">Ecommerce Owner</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Very reliable team. Every detail was handled with care and the final result looked
                        polished.</p>

                </div>

                <!-- card 2 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/15.jpg" class="kdts-avatar" src="" alt="James C.">
                        <div>
                            <p class="kdts-name">James C.</p>
                            <p class="kdts-role">Founder</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Our website speed and enquiry flow improved a lot. The design quality was truly
                        premium.</p>

                </div>

                <!-- card 3 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/21.jpg" class="kdts-avatar" src="" alt="Ava T.">
                        <div>
                            <p class="kdts-name">Ava T.</p>
                            <p class="kdts-role">Business Client</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">The campaign setup was neat and transparent. We started getting better quality
                        enquiries within weeks.</p>

                </div>

                <!-- card 4 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/32.jpg" class="kdts-avatar" src="" alt="Robert M.">
                        <div>
                            <p class="kdts-name">Robert M.</p>
                            <p class="kdts-role">Service Provider</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Creative ideas, clean execution and quick support. They made our brand look far more
                        professional online.</p>

                </div>

                <!-- card 5 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/44.jpg" class="kdts-avatar" src="" alt="Sophia L.">
                        <div>
                            <p class="kdts-name">Sophia L.</p>
                            <p class="kdts-role">Marketing Manager</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Their digital strategy was practical and effective, and the business presentation came
                        out beautifully.</p>

                </div>

                <!-- card 6 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/45.jpg" class="kdts-avatar" src="" alt="Daniel K.">
                        <div>
                            <p class="kdts-name">Daniel K.</p>
                            <p class="kdts-role">Operations Head</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">From planning to delivery, communication stayed clear the whole way. Exactly the kind
                        of partner we needed.</p>

                </div>

            </div>

            <!-- GROUP B — exact duplicate of GROUP A, required for the seamless loop.
           When you add a card, mirror it here too. -->
            <div class="kdts-track-group" id="kdts-group-b" aria-hidden="true">

                <!-- card 7 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/52.jpg" class="kdts-avatar" src="" alt="Mia R.">
                        <div>
                            <p class="kdts-name">Mia R.</p>
                            <p class="kdts-role">Ecommerce Owner</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Very reliable team. Every detail was handled with care and the final result looked
                        polished.</p>

                </div>

                <!-- card 8 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/62.jpg" class="kdts-avatar" src="" alt="James C.">
                        <div>
                            <p class="kdts-name">James C.</p>
                            <p class="kdts-role">Founder</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Our website speed and enquiry flow improved a lot. The design quality was truly
                        premium.</p>

                </div>

                <!-- card 9 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/68.jpg" class="kdts-avatar" src="" alt="Ava T.">
                        <div>
                            <p class="kdts-name">Ava T.</p>
                            <p class="kdts-role">Business Client</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">The campaign setup was neat and transparent. We started getting better quality
                        enquiries within weeks.</p>

                </div>

                <!-- card 10 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/71.jpg" class="kdts-avatar" src="" alt="Robert M.">
                        <div>
                            <p class="kdts-name">Robert M.</p>
                            <p class="kdts-role">Service Provider</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Creative ideas, clean execution and quick support. They made our brand look far more
                        professional online.</p>

                </div>

                <!-- card 11 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/75.jpg" class="kdts-avatar" src="" alt="Sophia L.">
                        <div>
                            <p class="kdts-name">Sophia L.</p>
                            <p class="kdts-role">Marketing Manager</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">Their digital strategy was practical and effective, and the business presentation came
                        out beautifully.</p>

                </div>

                <!-- card 12 -->
                <div class="kdts-card">
                    <div class="kdts-footer">
                        <img src="img/90.jpg" class="kdts-avatar" src="" alt="Daniel K.">
                        <div>
                            <p class="kdts-name">Daniel K.</p>
                            <p class="kdts-role">Operations Head</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="img/google_icon_png.png" alt="" srcset=""></span>
                    </div>
                    <p class="kdts-text">From planning to delivery, communication stayed clear the whole way. Exactly the kind
                        of partner we needed.</p>

                </div>

            </div>

        </div>
    </div>

</section>