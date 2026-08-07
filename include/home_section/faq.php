<!-- faq  -->
<style>
    .kdf-section {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: radial-gradient(circle at 15% 30%, rgba(226, 106, 33, 0.06), transparent 45%),
            linear-gradient(180deg, #f7f8fa 0%, #eef0f3 100%);
        padding: 70px 6vw 90px;
    }

    .kdf-inner {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* ---------- Header ---------- */
    .kdf-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .kdf-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        color: #e26a21;
        font-weight: 700;
        font-size: 13px;
        padding: 8px 18px;
        border-radius: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 18px;
        opacity: 0;
        animation: kdfFadeUp .6s ease forwards;
    }

    .kdf-eyebrow-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #e26a21;
        animation: kdfPulse 1.6s ease-in-out infinite;
    }

    .kdf-title {
        font-size: 44px;
        font-weight: 800;
        color: #171728;
        margin: 0;
        line-height: 1.2;
        opacity: 0;
        animation: kdfFadeUp .6s ease forwards;
        animation-delay: .1s;
    }

    .kdf-title-accent {
        color: #e26a21;
        display: block;
    }

    .kdf-subtext {
        color: #5c5c6a;
        font-size: 16px;
        margin: 18px 0 0;
        opacity: 0;
        animation: kdfFadeUp .6s ease forwards;
        animation-delay: .2s;
    }

    @keyframes kdfFadeUp {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes kdfPulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .4;
            transform: scale(1.5);
        }
    }

    /* ---------- Tabs ---------- */
    .kdf-tabs-wrap {
        background: #fff;
        border-radius: 20px;
        padding: 12px;
        box-shadow: 0 16px 38px rgba(239, 86, 13, .08), inset 0 1px 1px rgba(255, 255, 255, 1), inset 0 -20px 40px rgba(239, 86, 13, .05);
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 30px;
        opacity: 0;
        animation: kdfFadeUp .6s ease forwards;
        animation-delay: .3s;
    }

    .kdf-tab-btn {
        border: none;
        background: transparent;
        color: #3a3a3a;
        font-weight: 700;
        font-size: 14px;
        padding: 12px 22px;
        border-radius: 30px;
        cursor: pointer;
        transition: background .3s ease, color .3s ease, transform .2s ease;
        white-space: nowrap;
    }

    .kdf-tab-btn:hover {
        background: rgba(226, 106, 33, 0.08);
        color: #e26a21;
    }

    .kdf-tab-btn.kdf-tab-active {
        background: linear-gradient(135deg, #2b1f25, #ef560d);
        color: #fff;
        box-shadow: 0 6px 16px rgba(63, 38, 17, 0.35);
        transform: translateY(-1px);
    }

    /* ---------- Accordion panels ---------- */
    .kdf-panel {
        display: none;
    }

    .kdf-panel.kdf-panel-active {
        display: block;
        animation: kdfPanelIn .4s ease;
        box-shadow: 0 28px 80px rgba(239, 86, 13, .12), inset 0 1px 1px rgba(255, 255, 255, 1), inset 0 -38px 70px rgba(239, 86, 13, .06);
    }

    @keyframes kdfPanelIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .kdf-item {
        background: rgba(255, 255, 255, .46);
        border: 1px solid rgba(255, 255, 255, .86);
        backdrop-filter: blur(26px) saturate(190%);
        -webkit-backdrop-filter: blur(26px) saturate(190%);

        border-radius: 16px;
        box-shadow: 0 16px 38px rgba(239, 86, 13, .08), inset 0 1px 1px rgba(255, 255, 255, 1), inset 0 -20px 40px rgba(239, 86, 13, .05);
        margin-bottom: 16px;
        overflow: hidden;
        transition: box-shadow .3s ease;
    }

    .kdf-item:hover {
        box-shadow: 0 10px 26px rgba(20, 20, 40, 0.09);
    }

    .kdf-item-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 22px 26px;
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
    }

    .kdf-item-question {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        font-weight: 700;
        color: #171728;
        margin: 0;
    }

    .kdf-item-number {
        color: #e26a21;
        margin-right: 6px;
    }

    .kdf-item-toggle {
        width: 34px;
        height: 34px;
        min-width: 34px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .72);
        border: 1px solid rgba(239, 86, 13, .16);
        box-shadow: 0 8px 18px rgba(239, 86, 13, .08);
        transition: .35s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: background .3s ease, transform .3s ease;
    }

    .kdf-item-toggle::before,
    .kdf-item-toggle::after {
        content: "";
        position: absolute;
        background: #3f2611;
        border-radius: 2px;
        transition: transform .3s ease, background .3s ease;
    }

    .kdf-item-toggle::before {
        width: 12px;
        height: 2px;
    }

    .kdf-item-toggle::after {
        width: 2px;
        height: 12px;
    }

    .kdf-item.kdf-item-open .kdf-item-toggle {
        background: linear-gradient(135deg, #2b1f25, #ef560d);
        transform: rotate(180deg);
    }

    .kdf-item.kdf-item-open .kdf-item-toggle::before,
    .kdf-item.kdf-item-open .kdf-item-toggle::after {
        background: #fff;
    }

    .kdf-item.kdf-item-open .kdf-item-toggle::after {
        transform: scaleY(0);
    }

    .kdf-item-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height .35s ease, padding .35s ease;
        padding: 0 26px;
    }

    .kdf-item.kdf-item-open .kdf-item-body {
        padding: 0 26px 24px;
    }

    .kdf-item-body p {
        margin: 0;
        color: #5c5c6a;
        font-size: 15px;
        line-height: 1.7;
        max-width: 90ch;
    }

    .sdasdw65 {
        padding: 20px;
        border-radius: 34px;
        background: rgba(255, 255, 255, .36);
        border: 1px solid rgba(239, 86, 13, .14);
        backdrop-filter: blur(34px) saturate(200%);
        -webkit-backdrop-filter: blur(34px) saturate(200%);
        box-shadow: 0 28px 80px rgba(239, 86, 13, .12), inset 0 1px 1px rgba(255, 255, 255, 1), inset 0 -38px 70px rgba(239, 86, 13, .06);
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 768px) {
        .kdf-title {
            font-size: 32px;
        }

        .kdf-tabs-wrap {
            justify-content: flex-start;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
            padding: 10px;
        }

        .kdf-tabs-wrap::-webkit-scrollbar {
            display: none;
        }

        .kdf-item-head {
            padding: 18px;
        }

        .kdf-item-question {
            font-size: 14.5px;
        }
    }

    @media (max-width: 480px) {
        .kdf-section {
            padding: 50px 5vw 60px;
        }

        .kdf-title {
            font-size: 26px;
        }

        .kdf-subtext {
            font-size: 14px;
        }

        .kdf-item-toggle {
            width: 28px;
            height: 28px;
            min-width: 28px;
        }
    }
</style>

<section class="kdf-section">
    <div class="kdf-inner">

        <div class="kdf-header">
            <span class="kdf-eyebrow"><span class="kdf-eyebrow-dot"></span> FAQ's</span>
            <h2 class="kdf-title">Frequently Asked<span class="kdf-title-accent">Questions</span></h2>
            <p class="kdf-subtext">Select a service category and get quick answers about King Digital solutions.</p>
        </div>

        <div class="kdf-tabs-wrap" id="kdfTabs">
            <button class="kdf-tab-btn kdf-tab-active" data-target="kdf-panel-sms">SMS &amp; WhatsApp</button>
            <button class="kdf-tab-btn" data-target="kdf-panel-ads">Google &amp; Meta Ads</button>
            <button class="kdf-tab-btn" data-target="kdf-panel-web">Website Development</button>
            <button class="kdf-tab-btn" data-target="kdf-panel-video">Video Production</button>
            <button class="kdf-tab-btn" data-target="kdf-panel-biz">Business Solutions</button>
        </div>

        <div class="sdasdw65">


            <!-- SMS & WhatsApp -->
            <div class="kdf-panel kdf-panel-active" id="kdf-panel-sms">
                <div class="kdf-item ">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">01</span>What is Bulk SMS service?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Bulk SMS helps businesses send promotional, transactional and alert messages to many customers quickly.
                        </p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">02</span>Can I send OTP SMS?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, OTP SMS can be used for login verification, order confirmation and user authentication.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">03</span>Do you provide WhatsApp API?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, WhatsApp Business API setup is available for notifications, reminders, offers and automation.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">04</span>Can I send promotional WhatsApp
                            messages?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, approved templates can be used for offers, updates, campaigns and customer engagement.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">05</span>Do you provide delivery reports?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, campaign delivery, status and performance reports are available.</p>
                    </div>
                </div>
            </div>

            <!-- Google & Meta Ads -->
            <div class="kdf-panel" id="kdf-panel-ads">
                <div class="kdf-item ">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">01</span>Do you manage Google Ads?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we create and manage Google Ads campaigns for leads, calls, traffic and conversions.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">02</span>Can you run Meta Ads?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we manage Facebook and Instagram ads for brand reach, leads and sales.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">03</span>What budget is required?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>The budget depends on your industry, location, audience and campaign goal.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">04</span>Do you create ad creatives?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we create ad banners, copy, videos and landing page suggestions for better results.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">05</span>Can Ads genrate leads?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, properly targeted campaigns can generate quality leads for your business.</p>
                    </div>
                </div>
            </div>

            <!-- Website Development -->
            <div class="kdf-panel" id="kdf-panel-web">
                <div class="kdf-item ">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">01</span>Do you create business websites?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we create responsive websites for businesses, services, portfolios and landing pages.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">02</span>Will my website be mobile friendly?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, every website is designed to work smoothly on mobile, tablet and desktop.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">03</span>Do you create landing pages?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we design high-converting landing pages for ads and lead generation.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">04</span>Can you redesign my old website?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we can redesign your existing website with a modern and professional layout.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">05</span>Do you use WordPress?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, WordPress websites can be built and customized as per your business needs.</p>
                    </div>
                </div>
            </div>

            <!-- Video Production -->
            <div class="kdf-panel" id="kdf-panel-video">
                <div class="kdf-item ">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">01</span>Do you create promotional videos?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we create promotional videos for brands, products, services and campaigns.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">02</span>Do you make reels?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, short-form reels can be created for Instagram, Facebook and YouTube Shorts.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">03</span>Can you make ad videos?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, ad creatives can be made for Google, Meta and social media campaigns.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">04</span>Do you provide script writing?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, scripts, hooks, captions and voice-over lines can be created.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">05</span>Do you create animated videos?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, simple motion graphics, explainer videos and animated ads can be created.</p>
                    </div>
                </div>
            </div>

            <!-- Business Solutions -->
            <div class="kdf-panel" id="kdf-panel-biz">
                <div class="kdf-item ">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">01</span>What business solutions do you offer?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>We offer SMS, WhatsApp API, IVR, Toll Free, ads, website and branding solutions.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">02</span>Do you provide IVR service?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, IVR helps manage business calls with automated call flow and professional routing.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">03</span>Do you provide Toll Free number?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, Toll Free number setup can be provided for customer support and inquiries.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">04</span>Can you help with lead generation?
                        </p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, we use ads, landing pages and follow-up systems to generate quality leads.</p>
                    </div>
                </div>
                <div class="kdf-item">
                    <div class="kdf-item-head">
                        <p class="kdf-item-question"><span class="kdf-item-number">05</span>Do you provide complete branding?</p>
                        <span class="kdf-item-toggle"></span>
                    </div>
                    <div class="kdf-item-body">
                        <p>Yes, branding support can include design, creatives, campaigns and digital presence.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        var tabs = document.querySelectorAll('.kdf-tab-btn');
        var panels = document.querySelectorAll('.kdf-panel');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                tabs.forEach(function(t) {
                    t.classList.remove('kdf-tab-active');
                });
                panels.forEach(function(p) {
                    p.classList.remove('kdf-panel-active');
                });

                tab.classList.add('kdf-tab-active');
                document.getElementById(tab.getAttribute('data-target')).classList.add('kdf-panel-active');
            });
        });

        var items = document.querySelectorAll('.kdf-item');
        items.forEach(function(item) {
            var head = item.querySelector('.kdf-item-head');
            var body = item.querySelector('.kdf-item-body');

            function setHeight(open) {
                body.style.maxHeight = open ? body.scrollHeight + 'px' : '0px';
            }

            if (item.classList.contains('kdf-item-open')) {
                setHeight(true);
            }

            head.addEventListener('click', function() {
                var isOpen = item.classList.contains('kdf-item-open');

                // close siblings within the same panel (single-open accordion)
                var panel = item.closest('.kdf-panel');
                panel.querySelectorAll('.kdf-item').forEach(function(sib) {
                    if (sib !== item) {
                        sib.classList.remove('kdf-item-open');
                        sib.querySelector('.kdf-item-body').style.maxHeight = '0px';
                    }
                });

                item.classList.toggle('kdf-item-open', !isOpen);
                setHeight(!isOpen);
            });
        });

        window.addEventListener('resize', function() {
            document.querySelectorAll('.kdf-item-open .kdf-item-body').forEach(function(body) {
                body.style.maxHeight = body.scrollHeight + 'px';
            });
        });
    })();
</script>