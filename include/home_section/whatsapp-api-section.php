<style>
    .home-whatsapp {
        width: 100%;
        /* max-width: 1440px; */
        margin: 0 auto;
        padding: 40px 0;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fb 100%);
    }

    .home-whatsapp_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: .98fr 1.02fr;
        grid-template-rows: auto 1fr;
        grid-template-areas:
            "dashboard badge"
            "dashboard text";
        column-gap: 55px;
        align-items: center;
    }

    /* ---- Badge ---- */

    .home-whatsapp_content--badge {
        grid-area: badge;
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        width: fit-content;
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

    .home-whatsapp_content--badge span {
        position: relative;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f;
    }

    .home-whatsapp_content--badge span::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: whatsappBlinkingDot 1.5s infinite;
    }

    @keyframes whatsappBlinkingDot {
        0% {
            transform: scale(1);
            opacity: 0;
        }

        70% {
            opacity: .75;
        }

        100% {
            transform: scale(2);
            opacity: .95;
        }
    }

    .home-whatsapp_content--badge p {
        margin: 0;
    }

    .home-whatsapp_content--deshboard-wrap {
        grid-area: dashboard;
        position: relative;
        width: 100%;
        max-width: 500px;
        min-height: 530px;
        margin-top: 5rem;
    }

    .home-whatsapp_content--deshboard {
        position: relative;
        width: 100%;
        display: flex;
        flex-direction: column;
        background: #ffffff;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 30px 70px rgba(30, 41, 59, .16);
    }

    .home-whatsapp_content--deshboard-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        background: linear-gradient(135deg, #123d6b, #0d2c4e);
        color: #ffffff;
    }

    .home-whatsapp_content--deshboard-brand {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .home-whatsapp_content--deshboard-brand-icon {
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        background: rgba(255, 255, 255, .16);
    }

    .home-whatsapp_content--deshboard-brand-text h3 {
        margin: 0;
        font-size: 14px;
        font-weight: 800;
        line-height: 1.2;
    }

    .home-whatsapp_content--deshboard-brand-text small {
        font-size: 10px;
        font-weight: 500;
        opacity: .7;
    }

    .home-whatsapp_content--deshboard-action {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 13px;
        opacity: .85;
    }

    .home-whatsapp_content--deshboard-action span {
        cursor: pointer;
    }

    .home-whatsapp_content--deshboard-body {
        display: flex;
        min-height: 360px;
    }

    /* Sidebar */

    .home-whatsapp_content--dashboard-sidebar {
        width: 132px;
        flex-shrink: 0;
        background: #fafbfc;
        border-right: 1px solid #eef1f5;
        padding: 10px 0;
        display: flex;
        flex-direction: column;
    }

    .home-whatsapp_content--dashboard-sidebar-search {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 10px;
        color: #9aa3af;
        background: #ffffff;
        border: 1px solid #eef1f5;
        border-radius: 8px;
        margin: 0 10px 8px;
        padding: 6px 8px;
    }

    .home-whatsapp_content--dashboard-sidebar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        flex: 1;
    }

    .home-whatsapp_content--dashboard-sidebar li {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 10px;
        position: relative;
        cursor: pointer;
    }

    .home-whatsapp_content--dashboard-sidebar li.active {
        background: #fff3ea;
    }

    .home-whatsapp_content--dashboard-sidebar .avatar {
        width: 27px;
        height: 27px;
        border-radius: 50%;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 10px;
        font-weight: 800;
    }

    .home-whatsapp_content--dashboard-sidebar .chat-meta {
        min-width: 0;
    }

    .home-whatsapp_content--dashboard-sidebar .chat-meta h5 {
        margin: 0;
        font-size: 11px;
        font-weight: 800;
        color: #101827;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .home-whatsapp_content--dashboard-sidebar .chat-meta h5 i {
        font-style: normal;
        color: #22c55e;
        font-size: 6px;
    }

    .home-whatsapp_content--dashboard-sidebar .chat-meta p {
        margin: 2px 0 0;
        font-size: 10px;
        color: #9aa3af;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 68px;
    }

    .home-whatsapp_content--dashboard-sidebar .unread {
        position: absolute;
        right: 10px;
        top: 14px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #f0530f;
    }

    .home-whatsapp_content--dashboard-sidebar-footer {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 10px;
        font-weight: 800;
        color: #123d6b;
        background: #eef2f7;
        margin: 8px 10px 0;
        padding: 8px 10px;
        border-radius: 10px;
    }

    /* Main chat screen */

    .home-whatsapp_content--deshboard-main-screen {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
    }

    .home-whatsapp_content--deshboard-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 11px 16px;
        border-bottom: 1px solid #eef1f5;
    }

    .home-whatsapp_content--deshboard-heading-user {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .home-whatsapp_content--deshboard-heading-user span {
        height: 25px;
        width: 25px;
        border-radius: 50%;
        text-align: center;
    }

    .home-whatsapp_content--deshboard-heading-user h4 {
        margin: 0;
        font-size: 12px;
        font-weight: 800;
        color: #101827;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .home-whatsapp_content--deshboard-heading-user h4 i {
        font-style: normal;
        font-size: 9px;
        font-weight: 600;
        color: #22c55e;
    }

    .home-whatsapp_content--deshboard-heading .home-whatsapp_content--deshboard-action {
        color: #9aa3af;
        opacity: 1;
    }

    .home-whatsapp_content--deshboard-message {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 14px 16px;
        background: #f9fafc;
    }

    .home-whatsapp_content--deshboard-message .msg {
        position: relative;
        max-width: 88%;
        font-size: 10.5px;
        line-height: 1.5;
        padding: 8px 10px 15px;
        border-radius: 12px;
        opacity: 0;
    }

    .home-whatsapp_content--deshboard-message .msg i {
        position: absolute;
        right: 10px;
        bottom: 4px;
        font-style: normal;
        font-size: 8px;
        opacity: .55;
    }

    .home-whatsapp_content--deshboard-message .msg-in {
        position: relative;
        align-self: flex-start;
        background: #ffffff;
        color: #374151;
        border: 1px solid #eef1f5;
        border-bottom-left-radius: 3px;
        animation: msgInLeft 8s ease-in forwards;
    }

    .home-whatsapp_content--deshboard-message .msg-out {
        position: relative;
        align-self: flex-end;
        background: linear-gradient(135deg, #ffc199, #ff8a45);
        color: #3a1c05;
        border-bottom-right-radius: 3px;
        animation: msgInRight 8s ease-in forwards;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(1) {
        animation-delay: 0s;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(2) {
        animation-delay: .8s;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(3) {
        animation-delay: 1.6s;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(4) {
        animation-delay: 2.4s;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(5) {
        animation-delay: 3.2s;
    }

    .home-whatsapp_content--deshboard-message .msg:nth-child(6) {
        animation-delay: 4s;
    }

    .hidden-chat {
        opacity: 0 !important;
        transform: translateY(10px);
        transition: opacity .3s, transform .3s;
    }

    /* Incoming animation */
    @keyframes msgInLeft {
        0% {
            opacity: 0;
            transform: translateX(-40px);
        }

        15%,
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Outgoing animation */
    @keyframes msgInRight {
        0% {
            opacity: 0;
            transform: translateX(40px);
        }

        15%,
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .home-whatsapp_content--deshboard-search {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        border-top: 1px solid #eef1f5;
    }

    .home-whatsapp_content--deshboard-search>span:first-child {
        font-size: 14px;
    }

    .home-whatsapp_content--deshboard-search div {
        flex: 1;
        font-size: 10px;
        color: #9aa3af;
        background: #f3f4f6;
        border-radius: 999px;
        padding: 7px 12px;
    }

    .home-whatsapp_content--deshboard-search>span:last-child {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 11px;
        background: linear-gradient(135deg, #ff9448, #f0530f);
    }

    /* Floating badges — now children of .deshboard-wrap (not clipped) */

    .home-whatsapp_content--features-items1 {
        position: absolute;
        top: -16px;
        left: -16px;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 9px 15px;
        border-radius: 999px;
        background: #ffffff;
        box-shadow: 0 14px 30px rgba(30, 41, 59, .16);
        font-size: 11px;
        font-weight: 800;
        color: #101827;
        animation: whatsappFloat 5.5s ease-in-out infinite;
    }

    .home-whatsapp_content--features-items2 {
        position: absolute;
        right: -30px;
        bottom: 365px;
        z-index: 2;
        width: 235px;
        padding: 14px 16px;
        border-radius: 16px;
        background: #ffffff;
        box-shadow: 0 22px 48px rgba(30, 41, 59, .18);
        animation: whatsappFloat 6s ease-in-out infinite;
        animation-delay: .6s;
    }

    @keyframes whatsappFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .journey-head {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 10px;
    }

    .journey-head span {
        font-size: 14px;
    }

    .journey-head p {
        margin: 0;
        flex: 1;
        font-size: 12px;
        font-weight: 800;
        color: #101827;
    }

    .journey-head b {
        font-size: 9px;
        font-weight: 800;
        color: #16a34a;
        background: #dcfce7;
        padding: 3px 8px;
        border-radius: 999px;
    }

    .journey-steps {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
    }

    .journey-steps span {
        font-size: 9px;
        font-weight: 700;
        color: #123d6b;
        background: #eef2f7;
        padding: 5px 8px;
        border-radius: 8px;
    }

    .journey-steps i {
        font-style: normal;
        color: #c7cdd6;
        font-size: 10px;
    }

    /* ---- Text column ---- */

    .home-whatsapp_content--text {
        grid-area: text;
    }

    .home-whatsapp_content--text-heading h2 {
        margin: 0 0 16px;
        font-size: 40px;
        font-weight: 800;
        line-height: 1.25;
        color: #101827;
    }

    .home-whatsapp_content--text-heading h2 span {
        display: block;
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 45%, #123d6b 100%);
        background-size: 220% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: whatsappHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes whatsappHeadingGradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 250% center;
        }
    }

    .home-whatsapp_content--text-para p {
        margin: 0 0 26px;
        font-size: 14px;
        line-height: 1.5;
        color: #6b7280;
    }

    .home-whatsapp_content--text-para strong {
        color: #101827;
        font-weight: 900;
    }

    .home-whatsapp_content--text-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-bottom: 16px;
    }

    .home-whatsapp_content--text-features-item1,
    .home-whatsapp_content--text-features-item2,
    .home-whatsapp_content--text-features-item3,
    .home-whatsapp_content--text-features-item4 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-whatsapp_content--text-features>div {
        background: #ffffff;
        border: 1px solid rgba(16, 24, 39, .06);
        border-radius: 16px;
        padding: 16px 18px;
        box-shadow: 0 12px 28px rgba(30, 41, 59, .06);
    }

    .home-whatsapp_content--text-features span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 25px;
        height: 25px;
        margin-bottom: 10px;
        border-radius: 10px;
        font-size: 17px;
        background: linear-gradient(135deg, #fde3d3, #fef1e8);
    }

    .home-whatsapp_content--text-features h5 {
        margin: 0 0 6px;
        font-size: 14px;
        font-weight: 800;
        color: #101827;
    }

    .home-whatsapp_content--text-features p {
        margin: 0;
        font-size: 12.5px;
        line-height: 1.55;
        color: #6b7280;
    }

    .home-whatsapp_content--text-points {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 30px;
    }

    .home-whatsapp_content--text-points p {
        position: relative;
        margin: 0;
        padding-left: 30px;
        font-size: 12px;
        font-weight: 700;
        color: #101827;
        line-height: 1.5;
    }

    .home-whatsapp_content--text-points p::before {
        content: "\2713";
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #f0530f;
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home-whatsapp_content--text-cta {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 17px 32px;
        border-radius: 999px;
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        overflow: hidden;
        background: linear-gradient(135deg, #ff9448, #f0530f);
        box-shadow: 0 22px 44px rgba(240, 83, 15, .30);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-whatsapp_content--text-cta:hover {
        transform: translateY(-4px);
    }

    .home-whatsapp_content--text-cta::after {
        content: "";
        position: absolute;
        top: -75%;
        left: -120%;
        width: 42%;
        height: 250%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .58), transparent);
        transform: rotate(24deg);
        animation: whatsappShine 4.5s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes whatsappShine {
        0% {
            left: -120%;
        }

        45%,
        100% {
            left: 130%;
        }
    }

    @media (max-width: 980px) {
        .home-whatsapp_content {
            grid-template-columns: 1fr;
            grid-template-areas:
                "badge"
                "dashboard"
                "text";
        }

        .home-whatsapp_content--deshboard-wrap {
            max-width: 460px;
            margin: 0 auto 100px;
        }
    }

    @media (max-width: 560px) {
        .home-whatsapp_content--text-features {
            grid-template-columns: 1fr;
        }

        .home-whatsapp_content--deshboard-body {
            flex-direction: column;
        }

        .home-whatsapp_content--dashboard-sidebar {
            width: 100%;
            flex-direction: row;
            overflow-x: auto;
            border-right: none;
            border-bottom: 1px solid #eef1f5;
        }

        .home-whatsapp_content--dashboard-sidebar-search,
        .home-whatsapp_content--dashboard-sidebar-footer {
            display: none;
        }

        .home-whatsapp_content--features-items2 {
            position: static;
            margin-top: 100px;
            width: 100%;
        }
    }
</style>
<section class="home-whatsapp">
    <div class="home-whatsapp_content">

        <div class="home-whatsapp_content--deshboard-wrap">

            <div class="home-whatsapp_content--deshboard">
                <div class="home-whatsapp_content--deshboard-header">
                    <div class="home-whatsapp_content--deshboard-brand">
                        <div class="home-whatsapp_content--deshboard-brand-icon">📩</div>
                        <div class="home-whatsapp_content--deshboard-brand-text">
                            <h3>King Digital Business</h3>
                            <small>WhatsApp Business Account</small>
                        </div>
                    </div>
                    <div class="home-whatsapp_content--deshboard-action">
                        <span>🔍</span>
                        <span>⋮</span>
                    </div>
                </div>

                <div class="home-whatsapp_content--deshboard-body">
                    <aside class="home-whatsapp_content--dashboard-sidebar">
                        <div class="home-whatsapp_content--dashboard-sidebar-search">
                            <span>🔍</span> Search chats
                        </div>
                        <ul>
                            <li class="active">
                                <span class="avatar" style="background:#f0530f">R</span>
                                <div class="chat-meta">
                                    <h5>Rahul <i>●</i></h5>
                                    <p>Need pr...</p>
                                </div>
                                <span class="unread"></span>
                            </li>
                            <li>
                                <span class="avatar" style="background:#123d6b">AK</span>
                                <div class="chat-meta">
                                    <h5>Anjali Kapoor</h5>
                                    <p>Order confirmed</p>
                                </div>
                            </li>
                            <li>
                                <span class="avatar" style="background:#123d6b">VM</span>
                                <div class="chat-meta">
                                    <h5>Vikas Mehta</h5>
                                    <p>Thanks for su...</p>
                                </div>
                            </li>
                            <li>
                                <span class="avatar" style="background:#f0530f">NP</span>
                                <div class="chat-meta">
                                    <h5>Neha Patel</h5>
                                    <p>Delivery status?</p>
                                </div>
                            </li>
                            <li>
                                <span class="avatar" style="background:#123d6b">SK</span>
                                <div class="chat-meta">
                                    <h5>Sanjay Ku...</h5>
                                    <p>Interested in...</p>
                                </div>
                            </li>
                        </ul>
                        <div class="home-whatsapp_content--dashboard-sidebar-footer">
                            <span>👥</span> Multi-Agent Inbox
                        </div>
                    </aside>

                    <div class="home-whatsapp_content--deshboard-main-screen">
                        <div class="home-whatsapp_content--deshboard-heading">
                            <div class="home-whatsapp_content--deshboard-heading-user">
                                <span class="avatar" style="background:#f0530f">R</span>
                                <h4>Rahul Sharma <i>Online</i></h4>
                            </div>
                            <div class="home-whatsapp_content--deshboard-action">
                                <span>📞</span>
                                <span>🎥</span>
                            </div>
                        </div>

                        <div class="home-whatsapp_content--deshboard-message .hidden-chat">
                            <span class="msg msg-in">Hello, I need more details about your services.<i>10:32 AM</i></span>
                            <span class="msg msg-out">Hi Rahul! Thank you for contacting King Digital. Please select the service you are interested in.<i>10:32 AM</i></span>
                            <span class="msg msg-out">1. Website Development<br>2. Google &amp; Meta Ads<br>3. WhatsApp Business API<i>10:33 AM</i></span>
                            <span class="msg msg-in">I am interested in WhatsApp Business API.<i>10:34 AM</i></span>
                        </div>

                        <div class="home-whatsapp_content--deshboard-search">
                            <span>😊</span>
                            <div>Type a message</div>
                            <span>➤</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-whatsapp_content--features-items1">
                <span>⚡</span>
                <p>Instant Replies</p>
            </div>

            <div class="home-whatsapp_content--features-items2">
                <div class="journey-head">
                    <span>🤖</span>
                    <p>Automated Journey</p>
                    <b>Active</b>
                </div>
                <div class="journey-steps">
                    <span>New Lead</span><i>→</i><span>Auto Reply</span><i>→</i><span>Qualified</span>
                </div>
            </div>

        </div>

        <div class="home-whatsapp_content--text">
            <div class="home-whatsapp_content--badge">
                <span></span>
                <p>WhatsApp Business API</p>
            </div>
            <div class="home-whatsapp_content--text-heading">
                <h2>Turn Every WhatsApp Chat
                    <span>Into A Business Opportunity</span>
                </h2>
            </div>
            <div class="home-whatsapp_content--text-para">
                <p>Connect with customers faster and manage every enquiry professionally through the <strong>official WhatsApp Business API.</strong> King Digital helps businesses automate customer replies, send approved notifications, manage multiple agents, qualify incoming leads and create personalised customer journeys through one organised business communication platform.</p>
            </div>
            <div class="home-whatsapp_content--text-features">
                <div class="home-whatsapp_content--text-features-item1">
                    <span>🤖</span>
                    <div class="home-whatsapp_content--text-features-item-text">
                        <h5>Automated Chatbot Replies</h5>
                        <p>Answer common questions instantly and guide customers automatically.</p>
                    </div>
                </div>
                <div class="home-whatsapp_content--text-features-item2">
                    <span>👥</span>
                    <div class="home-whatsapp_content--text-features-item-text">
                        <h5>Multi-Agent Live Chat</h5>
                        <p>Manage customer enquiries through one organised shared team inbox.</p>
                    </div>
                </div>
                <div class="home-whatsapp_content--text-features-item3">
                    <span>📣</span>
                    <div class="home-whatsapp_content--text-features-item-text">
                        <h5>Broadcast Campaigns</h5>
                        <p>Send approved offers, updates and notifications to opted-in customers.</p>
                    </div>
                </div>
                <div class="home-whatsapp_content--text-features-item4">
                    <span>📊</span>
                    <div class="home-whatsapp_content--text-features-item-text">
                        <h5>Reports and Lead Tracking</h5>
                        <p>Track conversations, customer responses and agent performance.</p>
                    </div>
                </div>
            </div>
            <div class="home-whatsapp_content--text-points">
                <p>Send order confirmations, payment reminders, delivery updates and customer support messages.</p>
                <p>Capture and qualify new leads without spending valuable time on repetitive manual replies.</p>
                <p>Improve response speed and provide a professional customer experience at every stage.</p>
            </div>
            <a href="#" class="home-whatsapp_content--text-cta"><span>📲</span> Get WhatsApp Business API <span>→</span></a>
        </div>
    </div>
</section>

<script>

    const messages = document.querySelectorAll(
        ".home-whatsapp_content--deshboard-message .msg"
    );

    function playChat() {
        // Reset animations
        messages.forEach(msg => {
            msg.style.animation = "none";
            void msg.offsetWidth; // Force reflow
            msg.style.animation = "";
        });

        // After all messages have appeared, hide them together
        setTimeout(() => {
            messages.forEach(msg => msg.classList.add("hidden-chat"));
        }, 5200);

        // Show them again and restart
        setTimeout(() => {
            messages.forEach(msg => msg.classList.remove("hidden-chat"));
            playChat();
        }, 6000);
    }

    playChat();
</script>