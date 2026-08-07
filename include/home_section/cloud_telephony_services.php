 <!-- Cloud Telephony Services -->

 <style>
     .kdc-section {
         font-family: 'Segoe UI', Arial, sans-serif;
         background: radial-gradient(circle at 8% 30%, rgba(226, 106, 33, 0.08), transparent 45%),
             linear-gradient(180deg, #f7f8fa 0%, #eef0f3 100%);
         padding: 80px 6vw 90px;
     }

     .kdc-grid {
         max-width: 1360px;
         margin: 0 auto;
         display: grid;
         grid-template-columns: 1fr 1.15fr;
         gap: 70px;
         align-items: center;
     }

     /* ================= LEFT: dashboard mockup ================= */
     .kdc-media {
         position: relative;
         max-width: 500px;
         margin: 0 auto;
     }

     .kdc-panel {
         background: #fff;
         border-radius: 22px;
         padding: 18px;
         box-shadow: 0 30px 60px rgba(20, 20, 40, 0.12);
     }

     .kdc-panel-header {
         display: flex;
         align-items: center;
         justify-content: space-between;
         margin-bottom: 16px;
         padding: 0 4px;
     }

     .kdc-panel-title {
         font-size: 14px;
         font-weight: 700;
         color: #171728;
     }

     .kdc-live-pill {
         display: flex;
         align-items: center;
         gap: 6px;
         background: rgba(226, 106, 33, 0.1);
         color: #e26a21;
         font-size: 11px;
         font-weight: 700;
         padding: 5px 12px;
         border-radius: 20px;
     }

     .kdc-live-dot {
         width: 6px;
         height: 6px;
         border-radius: 50%;
         background: #e26a21;
         animation: kdcPulse 1.4s ease-in-out infinite;
     }

     @keyframes kdcPulse {

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

     .kdc-stats-row {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         gap: 10px;
         margin-bottom: 14px;
     }

     .kdc-stat-box {
         background: #f7f7f9;
         border-radius: 12px;
         padding: 12px;
     }

     .kdc-stat-label {
         font-size: 9.5px;
         font-weight: 700;
         color: #8a8a95;
         letter-spacing: .4px;
         text-transform: uppercase;
         margin-bottom: 6px;
     }

     .kdc-stat-value {
         font-size: 17px;
         font-weight: 800;
         color: #171728;
     }

     .kdc-stat-sub {
         font-size: 10.5px;
         font-weight: 600;
         color: #2fa96a;
         margin-top: 4px;
     }

     .kdc-stat-sub.kdc-neutral {
         color: #8a8a95;
     }

     .kdc-lower-grid {
         display: grid;
         grid-template-columns: 1fr 1.1fr;
         gap: 10px;
     }

     /* --- Dark call card --- */
     .kdc-call-card {
         background: linear-gradient(160deg, #17203d, #0c1226);
         border-radius: 16px;
         padding: 18px 14px;
         display: flex;
         flex-direction: column;
         align-items: center;
         text-align: center;
         position: relative;
     }

     .kdc-call-avatar {
         width: 64px;
         height: 64px;
         border-radius: 50%;
         background: linear-gradient(150deg, #f2803a, #d9541a);
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 6px 0 14px;
         box-shadow: 0 0 0 8px rgba(226, 106, 33, 0.12);
         animation: kdcRing 1.8s ease-in-out infinite;
     }

     @keyframes kdcRing {

         0%,
         100% {
             box-shadow: 0 0 0 8px rgba(226, 106, 33, 0.12);
         }

         50% {
             box-shadow: 0 0 0 14px rgba(226, 106, 33, 0.05);
         }
     }

     .kdc-call-avatar svg {
         width: 24px;
         height: 24px;
         fill: #fff;
     }

     .kdc-call-label {
         font-size: 9.5px;
         font-weight: 700;
         color: #9aa3c2;
         letter-spacing: .5px;
         text-transform: uppercase;
         margin-bottom: 6px;
     }

     .kdc-call-number {
         font-size: 15px;
         font-weight: 800;
         color: #fff;
         margin-bottom: 6px;
     }

     .kdc-call-status {
         font-size: 11px;
         color: #7d87ab;
         margin-bottom: 18px;
     }

     .kdc-call-controls {
         display: flex;
         gap: 10px;
     }

     .kdc-call-btn {
         width: 34px;
         height: 34px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         background: rgba(255, 255, 255, 0.08);
         transition: transform .25s ease;
     }

     .kdc-call-btn svg {
         width: 14px;
         height: 14px;
         fill: #fff;
     }

     .kdc-call-btn.kdc-call-btn-accept {
         background: linear-gradient(150deg, #f2803a, #d9541a);
     }

     .kdc-call-btn:hover {
         transform: translateY(-3px);
     }

     /* --- Right lower column: voice broadcast + IVR routing --- */
     .kdc-lower-right {
         display: flex;
         flex-direction: column;
         gap: 10px;
     }

     .kdc-mini-card {
         background: #f7f7f9;
         border-radius: 14px;
         padding: 14px;
     }

     .kdc-mini-card-head {
         display: flex;
         align-items: center;
         justify-content: space-between;
         margin-bottom: 12px;
     }

     .kdc-mini-card-title {
         font-size: 12px;
         font-weight: 700;
         color: #171728;
     }

     .kdc-auto-badge {
         font-size: 9px;
         font-weight: 700;
         color: #e26a21;
         background: rgba(226, 106, 33, 0.1);
         padding: 3px 8px;
         border-radius: 10px;
     }

     /* --- Equalizer bars: this is the "getting big / small" animation --- */
     .kdc-equalizer {
         display: flex;
         align-items: flex-end;
         gap: 5px;
         height: 46px;
     }

     .kdc-eq-bar {
         width: 4px;
         border-radius: 3px;
         background: #17203d;
         animation: kdcEqualize 1.1s ease-in-out infinite;
         transform-origin: bottom;
     }

     .kdc-eq-bar:nth-child(odd) {
         background: #e26a21;
     }

     .kdc-eq-bar:nth-child(1) {
         height: 14px;
         animation-delay: 0s;
     }

     .kdc-eq-bar:nth-child(2) {
         height: 26px;
         animation-delay: .1s;
     }

     .kdc-eq-bar:nth-child(3) {
         height: 18px;
         animation-delay: .2s;
     }

     .kdc-eq-bar:nth-child(4) {
         height: 34px;
         animation-delay: .3s;
     }

     .kdc-eq-bar:nth-child(5) {
         height: 44px;
         animation-delay: .4s;
     }

     .kdc-eq-bar:nth-child(6) {
         height: 22px;
         animation-delay: .5s;
     }

     .kdc-eq-bar:nth-child(7) {
         height: 30px;
         animation-delay: .6s;
     }

     .kdc-eq-bar:nth-child(8) {
         height: 16px;
         animation-delay: .7s;
     }

     .kdc-eq-bar:nth-child(9) {
         height: 24px;
         animation-delay: .8s;
     }

     @keyframes kdcEqualize {

         0%,
         100% {
             transform: scaleY(0.4);
         }

         50% {
             transform: scaleY(1);
         }
     }

     .kdc-ivr-list {
         display: flex;
         flex-direction: column;
         gap: 10px;
     }

     .kdc-ivr-item {
         display: flex;
         align-items: center;
         gap: 10px;
         background: #fff;
         border-radius: 10px;
         padding: 9px 10px;
     }

     .kdc-ivr-icon {
         width: 26px;
         height: 26px;
         min-width: 26px;
         border-radius: 8px;
         background: rgba(226, 106, 33, 0.12);
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .kdc-ivr-icon svg {
         width: 12px;
         height: 12px;
         fill: #e26a21;
     }

     .kdc-ivr-text {
         flex-grow: 1;
     }

     .kdc-ivr-title {
         font-size: 11.5px;
         font-weight: 700;
         color: #171728;
     }

     .kdc-ivr-sub {
         font-size: 9.5px;
         color: #8a8a95;
         margin-top: 2px;
     }

     .kdc-ivr-arrow {
         color: #c7c7cf;
         font-size: 14px;
     }

     .kdc-ivr-arrow.kdc-done {
         color: #2fa96a;
     }

     /* --- Floating badges over the panel --- */
     .kdc-float {
         position: absolute;
         display: flex;
         align-items: center;
         gap: 9px;
         background: #fff;
         padding: 9px 15px 9px 9px;
         border-radius: 30px;
         box-shadow: 0 10px 24px rgba(20, 20, 40, 0.14);
         font-size: 12px;
         font-weight: 700;
         color: #2a2a35;
         animation: kdcFloat 3.5s ease-in-out infinite;
         white-space: nowrap;
     }

     @keyframes kdcFloat {

         0%,
         100% {
             transform: translateY(0);
         }

         50% {
             transform: translateY(-7px);
         }
     }

     .kdc-float-icon {
         width: 24px;
         height: 24px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .kdc-float-icon svg {
         width: 11px;
         height: 11px;
         fill: #fff;
     }

     .kdc-float-broadcast {
         top: 6%;
         left: -8%;
         animation-delay: 0s;
     }

     .kdc-float-broadcast .kdc-float-icon {
         background: linear-gradient(150deg, #f2803a, #d9541a);
     }

     .kdc-float-ivr {
         top: 44%;
         right: -10%;
         animation-delay: .7s;
     }

     .kdc-float-ivr .kdc-float-icon {
         background: linear-gradient(150deg, #17203d, #0c1226);
     }

     .kdc-float-missed {
         bottom: 4%;
         left: -6%;
         animation-delay: 1.4s;
     }

     .kdc-float-missed .kdc-float-icon {
         background: linear-gradient(150deg, #f2803a, #d9541a);
     }

     /* ================= RIGHT: text content ================= */
     .kdc-badge {
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
         margin-bottom: 24px;
     }

     .kdc-badge-icon {
         width: 24px;
         height: 24px;
         border-radius: 50%;
         background: linear-gradient(150deg, #f2803a, #d9541a);
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .kdc-badge-icon svg {
         width: 12px;
         height: 12px;
         fill: #fff;
     }

     .kdc-heading {
         font-size: 42px;
         font-weight: 800;
         color: #171728;
         line-height: 1.25;
         margin: 0 0 20px;
     }

     .kdc-heading-accent {
         color: #e26a21;
     }

     .kdc-desc {
         max-width: 640px;
         margin-bottom: 23px;
         color: var(--kd-grey-dark);
         font-size: 14px;
         font-weight: 400;
         line-height: 1.78;
     }

     .kdc-desc strong {
         color: #2a2a35;
     }

     .kdc-feature-grid {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 12px;
         margin-bottom: 30px;
     }

     .kdc-feature {
         position: relative;
         isolation: isolate;
         overflow: hidden;
         min-height: 76px;
         display: flex;
         align-items: center;
         gap: 10px;
         padding: 0px 11px;
         border: 1px solid rgba(255, 255, 255, 0.90);
         border-radius: 15px;
         background: linear-gradient(145deg, rgba(255, 255, 255, 0.96), rgba(246, 249, 253, 0.74));
         box-shadow: 0 10px 24px rgba(6, 20, 38, 0.06);
         transition: transform 0.36s ease, border-color 0.36s ease, box-shadow 0.36s ease;
     }

     .kdc-feature:hover {
         transform: translateY(-4px);
         box-shadow: 0 14px 26px rgba(20, 20, 40, 0.1);
     }

     .kdc-feature::before {
         content: "";
         position: absolute;
         top: 0;
         bottom: 0;
         left: 0;
         width: 3px;
         border-radius: 0 6px 6px 0;
         background: linear-gradient(180deg, var(--kd-orange-light), var(--kd-orange));
         transform: scaleY(0.32);
         transition: transform 0.36s ease;
     }



     .kdc-feature:hover::before {
         transform: scaleY(1);
     }


     .kdc-feature.kdc-feature-full {
         grid-column: 1 / -1;
     }

     .kdc-feature-icon {
         width: 38px;
         height: 38px;
         min-width: 38px;
         border-radius: 10px;
         background: rgba(226, 106, 33, 0.1);
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .kdc-feature:hover .kdc-feature-icon {
         color: #ffffff;
         background: linear-gradient(135deg, var(--kd-navy-dark), var(--kd-navy-main));
         transform: rotate(-5deg) scale(1.04);
     }

     .kdc-feature-icon svg {
         width: 17px;
         height: 17px;
         fill: #e26a21;
     }

     .kdc-feature:hover .kdc-feature-icon svg {
         fill: white;
     }

     .kdc-feature-title {

         margin-bottom: 3px;
         color: var(--kd-black);
         font-size: 12px;
         font-weight: 900;
         line-height: 1.25;
     }

     .kdc-feature-text {

         color: var(--kd-grey);
         font-size: 9.5px;
         font-weight: 500;
         line-height: 1.42;
     }

     .kdc-cta {
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

     .kdc-cta:hover {
         transform: translateY(-3px);
         box-shadow: 0 16px 32px rgba(217, 84, 26, 0.45);
     }

     .kdc-cta svg {
         width: 15px;
         height: 15px;
         fill: #fff;
         transition: transform .25s ease;
     }

     .kdc-cta:hover svg {
         transform: translateX(4px);
     }

     /* ================= Responsive ================= */
     @media (max-width: 1050px) {
         .kdc-grid {
             grid-template-columns: 1fr;
             gap: 90px;
         }

         .kdc-media {
             order: -1;
             max-width: 460px;
         }

         .kdc-float-broadcast {
             left: 2%;
         }

         .kdc-float-ivr {
             right: 2%;
         }

         .kdc-float-missed {
             left: 2%;
         }
     }

     @media (max-width: 560px) {
         .kdc-section {
             padding: 60px 6vw 70px;
         }

         .kdc-heading {
             font-size: 27px;
         }

         .kdc-feature-grid {
             grid-template-columns: 1fr;
         }

         .kdc-lower-grid {
             grid-template-columns: 1fr;
         }

         .kdc-stats-row {
             grid-template-columns: 1fr 1fr 1fr;
         }

         .kdc-stat-value {
             font-size: 14px;
         }

         .kdc-float {
             font-size: 10.5px;
             padding: 7px 12px 7px 7px;
         }

         .kdc-float-icon {
             width: 20px;
             height: 20px;
         }

         .kdc-float-broadcast {
             left: -2%;
             top: 2%;
         }

         .kdc-float-ivr {
             right: -2%;
         }

         .kdc-float-missed {
             left: -2%;
             bottom: -2%;
         }
     }
 </style>

 <section class="kdc-section">
     <div class="kdc-grid">

         <!-- LEFT: dashboard mockup -->
         <div class="kdc-media">
             <div class="kdc-panel">
                 <div class="kdc-panel-header">
                     <span class="kdc-panel-title">Telephony Dashboard</span>
                     <span class="kdc-live-pill"><span class="kdc-live-dot"></span> Calls Live</span>
                 </div>

                 <div class="kdc-stats-row">
                     <div class="kdc-stat-box">
                         <div class="kdc-stat-label">Total Calls</div>
                         <div class="kdc-stat-value">12.8K</div>
                         <div class="kdc-stat-sub">↑ 18.4%</div>
                     </div>
                     <div class="kdc-stat-box">
                         <div class="kdc-stat-label">Connected</div>
                         <div class="kdc-stat-value">91.7%</div>
                         <div class="kdc-stat-sub">✓ Successful</div>
                     </div>
                     <div class="kdc-stat-box">
                         <div class="kdc-stat-label">Avg. Duration</div>
                         <div class="kdc-stat-value">02:48</div>
                         <div class="kdc-stat-sub kdc-neutral">● Active</div>
                     </div>
                 </div>

                 <div class="kdc-lower-grid">
                     <div class="kdc-call-card">
                         <div class="kdc-call-avatar">
                             <svg viewBox="0 0 24 24">
                                 <path
                                     d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                             </svg>
                         </div>
                         <div class="kdc-call-label">Incoming Business Call</div>
                         <div class="kdc-call-number">+91 98XX XX4321</div>
                         <div class="kdc-call-status">Connecting through IVR...</div>
                         <div class="kdc-call-controls">
                             <span class="kdc-call-btn">
                                 <svg viewBox="0 0 24 24">
                                     <path
                                         d="M16.5 12c0-1.77-1-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.42.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3 3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4 9.91 6.09 12 8.18V4z" />
                                 </svg>
                             </span>
                             <span class="kdc-call-btn kdc-call-btn-accept">
                                 <svg viewBox="0 0 24 24">
                                     <path
                                         d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                                 </svg>
                             </span>
                             <span class="kdc-call-btn">
                                 <svg viewBox="0 0 24 24">
                                     <path
                                         d="M3 5h18v14H3V5zm2 2v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2zm4 0v2h2V7h-2zM5 11v2h2v-2H5zm4 0v2h2v-2H9zm4 0v2h2v-2h-2zm4 0v2h2v-2h-2zM7 15v2h10v-2H7z" />
                                 </svg>
                             </span>
                         </div>
                     </div>

                     <div class="kdc-lower-right">
                         <div class="kdc-mini-card">
                             <div class="kdc-mini-card-head">
                                 <span class="kdc-mini-card-title">Voice Broadcast</span>
                             </div>
                             <!-- Animated equalizer: bars continuously grow/shrink -->
                             <div class="kdc-equalizer">
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                                 <span class="kdc-eq-bar"></span>
                             </div>
                         </div>

                         <div class="kdc-mini-card">
                             <div class="kdc-mini-card-head">
                                 <span class="kdc-mini-card-title">IVR Call Routing</span>
                                 <span class="kdc-auto-badge">Automated</span>
                             </div>
                             <div class="kdc-ivr-list">
                                 <div class="kdc-ivr-item">
                                     <span class="kdc-ivr-icon">
                                         <svg viewBox="0 0 24 24">
                                             <path
                                                 d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                                         </svg>
                                     </span>
                                     <span class="kdc-ivr-text">
                                         <div class="kdc-ivr-title">Incoming Call</div>
                                         <div class="kdc-ivr-sub">Customer connected</div>
                                     </span>
                                     <span class="kdc-ivr-arrow">›</span>
                                 </div>
                                 <div class="kdc-ivr-item">
                                     <span class="kdc-ivr-icon">
                                         <svg viewBox="0 0 24 24">
                                             <path
                                                 d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z" />
                                         </svg>
                                     </span>
                                     <span class="kdc-ivr-text">
                                         <div class="kdc-ivr-title">DTMF Selection</div>
                                         <div class="kdc-ivr-sub">Press 1 for sales</div>
                                     </span>
                                     <span class="kdc-ivr-arrow">›</span>
                                 </div>
                                 <div class="kdc-ivr-item">
                                     <span class="kdc-ivr-icon">
                                         <svg viewBox="0 0 24 24">
                                             <path
                                                 d="M12 2a5 5 0 0 1 5 5v5a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5zm7 10a7 7 0 0 1-14 0H3a9 9 0 0 0 8 8.94V23h2v-2.06A9 9 0 0 0 21 12h-2z" />
                                         </svg>
                                     </span>
                                     <span class="kdc-ivr-text">
                                         <div class="kdc-ivr-title">Agent Connected</div>
                                         <div class="kdc-ivr-sub">Call transferred</div>
                                     </span>
                                     <span class="kdc-ivr-arrow kdc-done">✓</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="kdc-float kdc-float-broadcast">
                 <span class="kdc-float-icon">
                     <svg viewBox="0 0 24 24">
                         <path d="M3 10v4h4l5 5V5L7 10H3zm13.5 2c0-1.77-1-3.29-2.5-4.03v8.05c1.5-.73 2.5-2.25 2.5-4.02z" />
                     </svg>
                 </span>
                 Voice Broadcast
             </div>

             <div class="kdc-float kdc-float-ivr">
                 <span class="kdc-float-icon">
                     <svg viewBox="0 0 24 24">
                         <path
                             d="M12 2a5 5 0 0 1 5 5v5a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5zm7 10a7 7 0 0 1-14 0H3a9 9 0 0 0 8 8.94V23h2v-2.06A9 9 0 0 0 21 12h-2z" />
                     </svg>
                 </span>
                 Smart IVR Routing
             </div>

             <div class="kdc-float kdc-float-missed">
                 <span class="kdc-float-icon">
                     <svg viewBox="0 0 24 24">
                         <path
                             d="M12 22a2.2 2.2 0 0 0 2.2-2.2h-4.4A2.2 2.2 0 0 0 12 22zm7-6.2V11c0-3.5-1.9-6.4-5.2-7.2V3a1.8 1.8 0 1 0-3.6 0v.8C7 4.6 5 7.5 5 11v4.8L3 17.8V19h18v-1.2l-2-2z" />
                     </svg>
                 </span>
                 Missed Call Alert
             </div>
         </div>

         <!-- RIGHT: text content -->
         <div class="kdc-right">
             <span class="kdc-badge">
                 <span class="kdc-badge-icon">
                     <svg viewBox="0 0 24 24">
                         <path
                             d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                     </svg>
                 </span>
                 Cloud Telephony Services
             </span>

             <h1 class="kdv-heading">Manage Business Calls with <span class="kdv-heading-accent-gr">Smart Cloud Telephony
                     Solutions</span></h1>

             <p class="kdc-desc">
                 King Digital provides reliable cloud telephony solutions that help businesses automate calls, manage customer
                 communication and improve response efficiency. From <strong>voice broadcasting and IVR systems to OTP calls,
                     missed-call alerts and click-to-call solutions,</strong> our services help your team handle more
                 conversations, route calls professionally and create a better customer experience.
             </p>

             <div class="kdc-feature-grid">
                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path d="M3 10v4h4l5 5V5L7 10H3zm13.5 2c0-1.77-1-3.29-2.5-4.03v8.05c1.5-.73 2.5-2.25 2.5-4.02z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">Voice Broadcast (OBD)</p>
                         <p class="kdc-feature-text">Send pre-recorded voice messages to thousands of customers automatically.</p>
                     </span>
                 </div>

                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM5 8h2v2H5V8zm0 3h2v2H5v-2zm3-3h2v2H8V8zm0 3h2v2H8v-2zm3-3h2v2h-2V8zm0 3h2v2h-2v-2zm5 5H8v-2h8v2zm0-5h-2V8h2v2zm0-3h-2V8h2v2z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">Voice DTMF</p>
                         <p class="kdc-feature-text">Capture customer selections through keypad inputs during automated calls.</p>
                     </span>
                 </div>

                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">Click to Call</p>
                         <p class="kdc-feature-text">Connect customers and agents instantly through a website or CRM call button.
                         </p>
                     </span>
                 </div>

                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M12 2 4 5v6c0 5.5 3.4 10.7 8 12 4.6-1.3 8-6.5 8-12V5l-8-3zm0 2.2 6 2.2v4.6c0 4.4-2.7 8.7-6 9.9-3.3-1.2-6-5.5-6-9.9V6.4l6-2.2zM11 7v6h2V7h-2zm0 8v2h2v-2h-2z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">OTP on Call</p>
                         <p class="kdc-feature-text">Deliver secure verification codes through automated voice calls.</p>
                     </span>
                 </div>

                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M12 2a5 5 0 0 1 5 5v5a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5zm7 10a7 7 0 0 1-14 0H3a9 9 0 0 0 8 8.94V23h2v-2.06A9 9 0 0 0 21 12h-2z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">IVR / Toll Free</p>
                         <p class="kdc-feature-text">Route calls to the right team through professional automated call menus.</p>
                     </span>
                 </div>

                 <div class="kdc-feature">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M12 22a2.2 2.2 0 0 0 2.2-2.2h-4.4A2.2 2.2 0 0 0 12 22zm7-6.2V11c0-3.5-1.9-6.4-5.2-7.2V3a1.8 1.8 0 1 0-3.6 0v.8C7 4.6 5 7.5 5 11v4.8L3 17.8V19h18v-1.2l-2-2z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">Missed Call Alert</p>
                         <p class="kdc-feature-text">Capture customer interest and trigger instant alerts after a missed call.</p>
                     </span>
                 </div>

                 <div class="kdc-feature kdc-feature-full">
                     <span class="kdc-feature-icon">
                         <svg viewBox="0 0 24 24">
                             <path
                                 d="M20 10h-3.2l-.6-3H19V5h-3.2l-.5-2.4-2 .4.4 2H10l-.5-2.4-2 .4.4 2H4v2h3.6l.6 3H5v2h3.6l.6 3H6v2h3.6l.5 2.4 2-.4-.4-2h3.6l.5 2.4 2-.4-.4-2H20v-2h-3.6l-.6-3H20v-2zm-5.6 3H10.8l-.6-3h4.2l.6 3z" />
                         </svg>
                     </span>
                     <span>
                         <p class="kdc-feature-title">Long Code / Short Code</p>
                         <p class="kdc-feature-text">Provide customers with dedicated numbers for campaigns, enquiries, responses
                             and automated business communication.</p>
                     </span>
                 </div>
             </div>

             <button class="kdc-cta" type="button">
                 <svg viewBox="0 0 24 24">
                     <path
                         d="M6.6 10.8c1.4 2.8 3.7 5 6.5 6.5l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.4.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.4 21 3 13.6 3 4.9c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                 </svg>
                 Get Cloud Telephony
                 <svg viewBox="0 0 24 24">
                     <path d="M5 12h13M13 6l6 6-6 6" />
                 </svg>
             </button>
         </div>

     </div>
 </section>