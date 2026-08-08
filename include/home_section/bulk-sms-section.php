<style>
    .home-bulksms {
        padding: 80px 24px;
        display: flex;
        justify-content: center;
    }

    .home-bulksms_content {
        width: 100%;
        max-width: 1180px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-areas:
            "heading heading"
            "info dashboard"
            "cta cta";
        row-gap: 36px;
        column-gap: 60px;
        align-items: start;
    }

    /* ---------- Heading ---------- */
    .home-bulksms_content--heading {
        grid-area: heading;
        text-align: center;
        max-width: 760px;
        margin: 0 auto;
    }

    .home-bulksms_content--heading-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff1e6;
        color: #f47c28;
        font-size: 13px;
        font-weight: 600;
        padding: 7px 16px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .home-bulksms_content--heading-badge span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #f47c28;
        display: inline-block;
    }

    .home-bulksms_content--heading h2 {
        font-size: 40px;
        line-height: 1.25;
        font-weight: 700;
        color: #1a2233;
        margin: 0 0 18px;
    }

    .home-bulksms_content--heading h2 span {
        background: linear-gradient(90deg, #f47c28 0%, #1a2233 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .home-bulksms_content--heading-para {
        font-size: 16px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 auto;
    }

    .home-bulksms_content--heading-para strong {
        color: #1a2233;
        font-weight: 700;
    }

    /* ---------- Left column: services + benefits ---------- */
    .home-bulksms_content--info {
        grid-area: info;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .home-bulksms_content--info-service {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .home-bulksms_content--info-service-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: #ffffff;
        border-left: 3px solid #f47c28;
        border-radius: 12px;
        padding: 18px 18px;
        box-shadow: 0 10px 30px rgba(20, 30, 60, 0.08);
        position: relative;
    }

    .home-bulksms_content--info-service-item-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 10px;
        background: #fff1e6;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home-bulksms_content--info-service-item-icon span {
        width: 22px;
        height: 22px;
        background: #f47c28;
        -webkit-mask-size: contain;
        mask-size: contain;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center;
    }

    .home-bulksms_content--info-service-item:nth-child(1) .home-bulksms_content--info-service-item-icon span {
        -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M3 11l18-5v12L3 14v-3z'/%3E%3Cpath d='M11.6 16.8a3 3 0 1 1-5.8-1.6'/%3E%3C/svg%3E");
        mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M3 11l18-5v12L3 14v-3z'/%3E%3Cpath d='M11.6 16.8a3 3 0 1 1-5.8-1.6'/%3E%3C/svg%3E");
    }

    .home-bulksms_content--info-service-item:nth-child(2) .home-bulksms_content--info-service-item-icon span {
        -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='4' y='3' width='16' height='18' rx='2'/%3E%3Cpath d='M8 8h8M8 12h8M8 16h5'/%3E%3C/svg%3E");
        mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='4' y='3' width='16' height='18' rx='2'/%3E%3Cpath d='M8 8h8M8 12h8M8 16h5'/%3E%3C/svg%3E");
    }

    .home-bulksms_content--info-service-item:nth-child(3) .home-bulksms_content--info-service-item-icon span {
        -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z'/%3E%3Cpath d='M9 12l2 2 4-4'/%3E%3C/svg%3E");
        mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z'/%3E%3Cpath d='M9 12l2 2 4-4'/%3E%3C/svg%3E");
    }

    .home-bulksms_content--info-service-item-content {
        flex: 1;
    }

    .home-bulksms_content--info-service-item-content-lable {
        display: block;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #f47c28;
        margin-bottom: 4px;
    }

    .home-bulksms_content--info-service-item-content h3 {
        font-size: 17px;
        font-weight: 700;
        color: #1a2233;
        margin: 0 0 6px;
    }

    .home-bulksms_content--info-service-item-content p {
        font-size: 13.5px;
        line-height: 1.6;
        color: #6b7280;
        margin: 0;
    }

    .home-bulksms_content--info-service-item::after {
        content: "→";
        position: absolute;
        right: 16px;
        top: 18px;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: #fff1e6;
        color: #f47c28;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home-bulksms_content--info-service-item:nth-child(1) .home-bulksms_content--info-service-item-content-lable::before {
        content: "Marketing Messages";
    }

    .home-bulksms_content--info-service-item:nth-child(2) .home-bulksms_content--info-service-item-content-lable::before {
        content: "Customer Updates";
    }

    .home-bulksms_content--info-service-item:nth-child(3) .home-bulksms_content--info-service-item-content-lable::before {
        content: "Secure Verification";
    }

    .home-bulksms_content--info-service-item:nth-child(1) h3::before {
        content: "Promotional Bulk SMS";
    }

    .home-bulksms_content--info-service-item:nth-child(2) h3::before {
        content: "Transactional SMS";
    }

    .home-bulksms_content--info-service-item:nth-child(3) h3::before {
        content: "OTP & Verification SMS";
    }

    .home-bulksms_content--info-service-item:nth-child(1) p::before {
        content: "Promote offers, launches, events and campaigns directly to a large customer audience within seconds.";
    }

    .home-bulksms_content--info-service-item:nth-child(2) p::before {
        content: "Send booking confirmations, order updates, payment alerts and important service notifications automatically.";
    }

    .home-bulksms_content--info-service-item:nth-child(3) p::before {
        content: "Deliver secure one-time passwords for login, account verification, payments and transaction authentication.";
    }

    /* benefits row */
    .home-bulksms_content--info-benifit {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .home-bulksms_content--info-benifit-item {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #fff1e6;
        border-radius: 10px;
        padding: 12px 14px;
    }

    .home-bulksms_content--info-benifit-item span:first-child {
        width: 26px;
        height: 26px;
        min-width: 26px;
        border-radius: 7px;
        background: #f47c28;
        position: relative;
    }

    .home-bulksms_content--info-benifit-item span:last-child {
        font-size: 13.5px;
        font-weight: 600;
        color: #1a2233;
    }

    .home-bulksms_content--info-benifit-item:nth-child(1) span:last-child::before {
        content: "Fast Message Delivery";
    }

    .home-bulksms_content--info-benifit-item:nth-child(2) span:last-child::before {
        content: "Real-Time Reports";
    }

    .home-bulksms_content--info-benifit-item:nth-child(3) span:last-child::before {
        content: "Contact Management";
    }

    .home-bulksms_content--info-benifit-item:nth-child(4) span:last-child::before {
        content: "API Integration";
    }

    /* ---------- Right column: dashboard mock ---------- */
    .home-bulksms_content--info-dashboard {
        grid-area: dashboard;
        background: #ffffff;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(20, 30, 60, 0.08);
        padding: 22px;
        position: relative;
        max-width: 480px;
        margin: 0 auto;
    }

    .home-bulksms_content--info-dashboard-head {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .home-bulksms_content--info-dashboard-head-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #1a2233;
        position: relative;
    }

    .home-bulksms_content--info-dashboard-head-icon span {
        position: absolute;
        inset: 0;
        margin: auto;
        width: 14px;
        height: 14px;
        background: #f47c28;
        border-radius: 3px;
    }

    .home-bulksms_content--info-dashboard-head-text h3 {
        font-size: 14px;
        font-weight: 700;
        color: #1a2233;
        margin: 0;
        flex: 1;
    }

    .home-bulksms_content--info-dashboard-head-label {
        margin-left: auto;
    }

    .home-bulksms_content--info-dashboard-head-label span {
        display: inline-block;
        font-size: 11px;
        font-weight: 700;
        color: #1fa971;
        background: #e7f8f0;
        padding: 5px 12px;
        border-radius: 20px;
    }

    .home-bulksms_content--info-dashboard-head-label span::before {
        content: "● Campaign Live";
    }

    .home-bulksms_content--info-dashboard-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-bottom: 22px;
    }

    .home-bulksms_content--info-deshboard-stats-items {
        background: #f6f8fb;
        border-radius: 10px;
        padding: 12px 10px;
    }

    .home-bulksms_content--info-deshboard-stats-items span:first-child {
        display: block;
        font-size: 9.5px;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        color: #9aa2b1;
        margin-bottom: 4px;
    }

    .home-bulksms_content--info-deshboard-stats-items p {
        font-size: 19px;
        font-weight: 800;
        color: #1a2233;
        margin: 0 0 4px;
    }

    .home-bulksms_content--info-deshboard-stats-items span:last-child {
        font-size: 11px;
        font-weight: 700;
        color: #1fa971;
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(1) span:first-child::before {
        content: "Messages Sent";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(1) p::before {
        content: "48.6K";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(1) span:last-child::before {
        content: "↑ 24.8%";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(2) span:first-child::before {
        content: "Delivered";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(2) p::before {
        content: "97.4%";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(2) span:last-child::before {
        content: "✓ Successful";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(3) span:first-child::before {
        content: "Click Rate";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(3) p::before {
        content: "18.7%";
    }

    .home-bulksms_content--info-deshboard-stats-items:nth-child(3) span:last-child::before {
        content: "↑ 9.6%";
    }

    .home-bulksms_content--info-dashboard-report {
        background: #f6f8fb;
        border-radius: 12px;
        padding: 16px;
        margin-bottom: 18px;
    }

    .home-bulksms_content--info-dashboard-report-heading h3 {
        font-size: 13px;
        font-weight: 700;
        color: #1a2233;
        margin: 0 0 12px;
    }

    .home-bulksms_content--info-dashboard-report-heading h3::before {
        content: "Message Delivery Performance";
    }

    .home-bulksms_content--info-dashboard-report-heading h3::after {
        content: "Today";
        float: right;
        font-size: 10.5px;
        font-weight: 700;
        color: #9aa2b1;
        background: #fff;
        padding: 3px 10px;
        border-radius: 10px;
    }

    .home-bulksms_content--info-dashboard-report-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .home-bulksms_content--info-dashboard-report-item span:first-child {
        font-size: 11.5px;
        font-weight: 600;
        color: #1a2233;
        width: 78px;
        min-width: 78px;
    }

    .home-bulksms_content--info-dashboard-report-item p {
        flex: 1;
        height: 7px;
        border-radius: 6px;
        background: #e6e9f0;
        margin: 0;
        overflow: hidden;
        position: relative;
    }

    .home-bulksms_content--info-dashboard-report-item p::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: var(--progress, 0%);
        transition: width 2s ease;
        border-radius: 6px;
        background: linear-gradient(90deg, #f47c28, #e8631a);
    }

    .home-bulksms_content--info-dashboard-report-item span:last-child {
        font-size: 11px;
        font-weight: 700;
        color: #1a2233;
        width: 34px;
        text-align: right;
    }

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(2) span:first-child::before {
        content: "Delivered";
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(2) p::before {
        width: 97%;
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(2) span:last-child::before {
        content: "97%";
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(3) span:first-child::before {
        content: "Opened";
    } */

    .home-bulksms_content--info-dashboard-report-item:nth-child(3) p::before {

        background: linear-gradient(90deg, #2f6fed, #1a4fc4);
    }

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(3) span:last-child::before {
        content: "89%";
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(4) span:first-child::before {
        content: "Link Clicks";
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(4) p::before {
        width: 64%;
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(4) span:last-child::before {
        content: "64%";
    } */

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(5) span:first-child::before {
        content: "Responses";
    } */

    .home-bulksms_content--info-dashboard-report-item:nth-child(5) p::before {
        /* width: 42%; */
        background: #c7ccd6;
    }

    /* .home-bulksms_content--info-dashboard-report-item:nth-child(5) span:last-child::before {
        content: "42%";
    } */

    .home-bulksms_content--info-dashboard-message {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        background: #fff8f2;
        border: 1px solid #ffe1c4;
        border-radius: 12px;
        padding: 14px;
    }

    .home-bulksms_content--info-dashboard-message-icon {
        width: 34px;
        height: 34px;
        min-width: 34px;
        border-radius: 9px;
        background: #f47c28;
        display: block;
        position: relative;
    }

    .home-bulksms_content--info-dashboard-message-heading {
        font-size: 12.5px;
        font-weight: 700;
        color: #1a2233;
        margin: 2px 0 4px;
    }

    .home-bulksms_content--info-dashboard-message-heading::before {
        content: "Latest Promotional Message";
    }

    .home-bulksms_content--info-dashboard-message-message {
        font-size: 12px;
        color: #6b7280;
        line-height: 1.5;
        margin: 0;
    }

    .home-bulksms_content--info-dashboard-message-message::before {
        content: "Special offer available today. Click the link to claim your discount.";
    }

    .home-bulksms_content--info-dashboard-floating-item {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(20, 30, 60, 0.08);
        padding: 9px 14px;
        font-size: 12px;
        font-weight: 700;
        color: #1a2233;
    }

    .home-bulksms_content--info-dashboard-floating-item span {
        width: 20px;
        height: 20px;
        border-radius: 6px;
        background: #f47c28;
        display: inline-block;
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(1) {
        top: -16px;
        left: -30px;
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(1) h4::before {
        content: "Instant Delivery";
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(2) {
        top: 130px;
        right: -30px;
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(2) span {
        background: #1a2233;
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(2) h4::before {
        content: "Live Reports";
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(3) {
        bottom: -16px;
        left: 14px;
    }

    .home-bulksms_content--info-dashboard-floating-item:nth-of-type(3) h4::before {
        content: "Mass Reach";
    }

    .home-bulksms_content--info-dashboard-floating-item h4 {
        margin: 0;
        font-size: 12px;
    }

    /* ---------- CTA ---------- */
    .home-bulksms_content--cta {
        grid-area: cta;
        justify-self: center;
        margin-top: 20px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(90deg, #f47c28, #e8631a);
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-size: 15px;
        padding: 16px 32px;
        border-radius: 30px;
        box-shadow: 0 10px 24px rgba(244, 124, 40, 0.35);
    }

    @media (max-width:900px) {
        .home-bulksms_content {
            grid-template-columns: 1fr;
            grid-template-areas:
                "heading"
                "info"
                "dashboard"
                "cta";
        }

        .home-bulksms_content--heading h2 {
            font-size: 30px;
        }
    }
</style>

<section class="home-bulksms">
    <div class="home-bulksms_content">
        <div class="home-bulksms_content--heading">
            <div class="home-bulksms_content--heading-badge">
                <span></span>
                <p>Bulk SMS Service</p>
            </div>
            <h2>Reach Thousands of Customers with <span>Fast and Reliable Bulk SMS</span></h2>
            <p class="home-bulksms_content--heading-para">
                Send promotional offers, important alerts, transaction updates and OTP messages directly to your customers with <strong>fast delivery, real-time reporting and secure communication.</strong>
            </p>
        </div>

        <div class="home-bulksms_content--info">
            <div class="home-bulksms_content--info-service">
                <article class="home-bulksms_content--info-service-item">
                    <div class="home-bulksms_content--info-service-item-icon"><span></span></div>
                    <div class="home-bulksms_content--info-service-item-content">
                        <span class="home-bulksms_content--info-service-item-content-lable"></span>
                        <h3></h3>
                        <p></p>
                    </div>
                </article>
                <article class="home-bulksms_content--info-service-item">
                    <div class="home-bulksms_content--info-service-item-icon"><span></span></div>
                    <div class="home-bulksms_content--info-service-item-content">
                        <span class="home-bulksms_content--info-service-item-content-lable"></span>
                        <h3></h3>
                        <p></p>
                    </div>
                </article>
                <article class="home-bulksms_content--info-service-item">
                    <div class="home-bulksms_content--info-service-item-icon"><span></span></div>
                    <div class="home-bulksms_content--info-service-item-content">
                        <span class="home-bulksms_content--info-service-item-content-lable"></span>
                        <h3></h3>
                        <p></p>
                    </div>
                </article>
            </div>

            <div class="home-bulksms_content--info-benifit">
                <div class="home-bulksms_content--info-benifit-item"><span></span><span></span></div>
                <div class="home-bulksms_content--info-benifit-item"><span></span><span></span></div>
                <div class="home-bulksms_content--info-benifit-item"><span></span><span></span></div>
                <div class="home-bulksms_content--info-benifit-item"><span></span><span></span></div>
            </div>
        </div>

        <div class="home-bulksms_content--info-dashboard">
            <div class="home-bulksms_content--info-dashboard-head">
                <div class="home-bulksms_content--info-dashboard-head-icon"><span></span></div>
                <div class="home-bulksms_content--info-dashboard-head-text">
                    <h3>King Digital Bulk SMS Dashboard</h3>
                </div>
                <div class="home-bulksms_content--info-dashboard-head-label"><span></span></div>
            </div>

            <div class="home-bulksms_content--info-dashboard-stats">
                <div class="home-bulksms_content--info-deshboard-stats-items"><span></span>
                    <p></p><span></span>
                </div>
                <div class="home-bulksms_content--info-deshboard-stats-items"><span></span>
                    <p></p><span></span>
                </div>
                <div class="home-bulksms_content--info-deshboard-stats-items"><span></span>
                    <p></p><span></span>
                </div>
            </div>

            <div class="home-bulksms_content--info-dashboard-report">
                <div class="home-bulksms_content--info-dashboard-report-heading">
                    <h3></h3>
                </div>
                <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                    <p data-width="97"></p><span><span class="count" data-target="97">0</span>%</span>
                </div>
                <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                    <p data-width="89"></p><span><span class="count" data-target="89">0</span>%</span>
                </div>
                <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                    <p data-width="64"></p><span><span class="count" data-target="64">0</span>%</span>
                </div>
                <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                    <p data-width="42"></p><span><span class="count" data-target="42">0</span>%</span>
                </div>
            </div>

            <div class="home-bulksms_content--info-dashboard-message">
                <span class="home-bulksms_content--info-dashboard-message-icon"></span>
                <div>
                    <h4 class="home-bulksms_content--info-dashboard-message-heading"></h4>
                    <p class="home-bulksms_content--info-dashboard-message-message"></p>
                </div>
            </div>

            <div class="home-bulksms_content--info-dashboard-floating-item"><span></span>
                <h4></h4>
            </div>
            <div class="home-bulksms_content--info-dashboard-floating-item"><span></span>
                <h4></h4>
            </div>
            <div class="home-bulksms_content--info-dashboard-floating-item"><span></span>
                <h4></h4>
            </div>
        </div>

        <a href="#" class="home-bulksms_content--cta">Start Your Bulk SMS Campaign <span>→</span></a>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const bars = document.querySelectorAll(
            ".home-bulksms_content--info-dashboard-report-item p"
        );

        const observer = new IntersectionObserver(function(entries, observer) {

            entries.forEach(function(entry) {

                if (entry.isIntersecting) {

                    const target = entry.target.dataset.width;

                    entry.target.style.setProperty("--progress", "0%");

                    setTimeout(function() {

                        entry.target.style.setProperty("--progress", target + "%");

                    }, 100);

                    observer.unobserve(entry.target);

                }

            });

        }, {

            threshold: 0.4

        });

        bars.forEach(function(bar) {

            observer.observe(bar);

        });

    });
</script>

