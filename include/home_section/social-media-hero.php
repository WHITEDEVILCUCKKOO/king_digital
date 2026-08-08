<style>
  .kingDig-wrapper {
    font-family: 'Segoe UI', Arial, sans-serif;
    width: 100%;
    box-sizing: border-box;
    background: linear-gradient(120deg, #fdf0e8 0%, #f7f8fb 40%, #f7f8fb 100%);
    padding: 70px 12rem;
    overflow: hidden;
  }

  .kingDig-wrapper *,
  .kingDig-wrapper *::before,
  .kingDig-wrapper *::after {
    box-sizing: border-box;
  }

  .kingDig-grid {
    max-width: 1360px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 0.95fr;
    gap: 50px;
    align-items: center;
  }

  /* ============ LEFT COLUMN ============ */
  .kingDig-badgeTag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: #ffffff;
    color: #ff7a1a;
    font-size: 13px;
    font-weight: 800;
    padding: 9px 18px;
    border-radius: 30px;
    box-shadow: 0 4px 14px rgba(255, 122, 26, 0.16);
    margin-bottom: 22px;
  }

  .kingDig-badgeTag svg {
    width: 14px;
    height: 14px;
  }

  .kingDig-badgeDot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background-color: #ff7a1a;
    display: inline-block;
    margin-left: 2px;
  }

  .kingDig-heading {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c22;
    line-height: 1.2;
    margin: 0 0 22px 0;
  }

  .kingDig-headingAccent {
    display: block;
    background: linear-gradient(100deg, #ff7a1a, #b9502e, #ff7a1a);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: kingDigGradientShift 5s linear infinite;
  }

  @keyframes kingDigGradientShift {
    0% {
      background-position: 0% 50%;
    }

    100% {
      background-position: 200% 50%;
    }
  }

  .kingDig-description {
    font-size: 15px;
    line-height: 1.75;
    color: #55555f;
    margin: 0 0 26px 0;
    max-width: 620px;
  }

  .kingDig-description b {
    color: #2a2a32;
  }

  /* ---- Platform Badges ---- */
  .kingDig-platformRow {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 26px;
  }

  .kingDig-platformPill {
    display: flex;
    align-items: center;
    gap: 8px;
    background-color: #ffffff;
    border-radius: 30px;
    padding: 9px 16px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .kingDig-platformPill:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .kingDig-platformIcon {
    width: 22px;
    height: 22px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .kingDig-platformIcon svg {
    width: 13px;
    height: 13px;
    color: #ffffff;
  }

  .kingDig-platformLabel {
    font-size: 13.5px;
    font-weight: 700;
    color: #1c1c22;
  }

  .kingDig-iconInstagram {
    background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af);
  }

  .kingDig-iconFacebook {
    background-color: #1877f2;
  }

  .kingDig-iconLinkedin {
    background-color: #0a66c2;
  }

  .kingDig-iconYoutube {
    background-color: #ff0000;
  }

  /* ---- Checklist ---- */
  .kingDig-checkList {
    list-style: none;
    margin: 0 0 30px 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .kingDig-checkItem {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14.5px;
    color: #3d3d44;
  }

  .kingDig-checkIcon {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ff7a1a, #ff9a3d);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .kingDig-checkIcon svg {
    width: 12px;
    height: 12px;
    color: #ffffff;
  }

  /* ---- CTA Button ---- */
  .kingDig-ctaBtn {
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

  .kingDig-ctaBtn:hover {
    background-position: 100% 0%;
    transform: translateY(-3px);
    box-shadow: 0 16px 30px rgba(255, 122, 26, 0.45);
  }

  .kingDig-ctaBtn:active {
    transform: translateY(0) scale(0.97);
  }

  .kingDig-ctaBtn svg {
    width: 16px;
    height: 16px;
  }

  .kingDig-ctaArrow {
    transition: transform 0.3s ease;
  }

  .kingDig-ctaBtn:hover .kingDig-ctaArrow {
    transform: translateX(4px);
  }

  /* ============ RIGHT COLUMN: PHONE MOCKUP ============ */
  .kingDig-visualCol {
    position: relative;
    height: 560px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .kingDig-glowBlur {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 380px;
    height: 380px;
    transform: translate(-50%, -50%);
    background: radial-gradient(circle, rgba(255, 122, 26, 0.28) 0%, rgba(255, 122, 26, 0) 70%);
    border-radius: 50%;
    animation: kingDigGlowPulse 4s ease-in-out infinite;
    z-index: 0;
  }

  @keyframes kingDigGlowPulse {

    0%,
    100% {
      transform: translate(-50%, -50%) scale(1);
      opacity: 0.8;
    }

    50% {
      transform: translate(-50%, -50%) scale(1.15);
      opacity: 1;
    }
  }

  /* ---- Phone Frame ---- */
  .kingDig-phoneFrame {
    position: relative;
    z-index: 2;
    width: 240px;
    height: 490px;
    background-color: #14141a;
    border-radius: 38px;
    padding: 12px;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.28);
    animation: kingDigPhoneFloat 4.5s ease-in-out infinite;
    animation: kdSocialCompactPhoneFloat 6s ease-in-out infinite;
  }


  @keyframes kdSocialCompactPhoneFloat {

    0%,
    100% {
      transform: translateY(0) rotate(-1.5deg);
    }

    50% {
      transform: translateY(-7px) rotate(1deg);
    }
  }

  @keyframes kingDigPhoneFloat {

    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
    }

    50% {
      transform: translateY(-16px) rotate(0.6deg);
    }
  }

  .kingDig-phoneNotch {
    position: absolute;
    top: 12px;
    left: 50%;
    transform: translateX(-50%);
    width: 70px;
    height: 16px;
    background-color: #14141a;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    z-index: 3;
  }

  .kingDig-phoneScreen {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    border-radius: 28px;
    overflow: hidden;
    padding-top: 22px;
  }

  .kingDig-screenHeader {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 4px 14px 10px 14px;
    font-size: 12.5px;
    font-weight: 800;
    color: #1c1c22;
  }

  .kingDig-screenHeader svg {
    width: 14px;
    height: 14px;
    color: #8a8f9c;
  }

  /* ---- Stories row ---- */
  .kingDig-storyRow {
    display: flex;
    gap: 8px;
    padding: 0 14px 10px 14px;
    overflow: hidden;
  }

  .kingDig-storyItem {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    flex-shrink: 0;
  }

  .kingDig-storyCircle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 2px solid #ff7a1a;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8px;
    font-weight: 800;
    color: #ff7a1a;
    background-color: #fff5ee;
  }

  .kingDig-storyLabel {
    font-size: 6.5px;
    color: #8a8f9c;
    font-weight: 600;
  }

  /* ---- Profile row ---- */
  .kingDig-profileRow {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 14px;
    border-top: 1px solid #f0f0f3;
    border-bottom: 1px solid #f0f0f3;
  }

  .kingDig-profileLeft {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .kingDig-profileAvatar {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ff7a1a, #b9502e);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 7px;
    font-weight: 800;
    color: #ffffff;
  }

  .kingDig-profileName {
    font-size: 9px;
    font-weight: 800;
    color: #1c1c22;
    margin: 0;
  }

  .kingDig-profileSub {
    font-size: 7px;
    color: #9a9fac;
    margin: 0;
    height: 9px;
    overflow: hidden;
    position: relative;
  }

  .kingDig-profileSub span {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    animation: kingDigTextCycle 9s ease-in-out infinite;
  }

  .kingDig-profileSub span:nth-child(1) {
    animation-delay: 0s;
  }

  .kingDig-profileSub span:nth-child(2) {
    animation-delay: 3s;
  }

  .kingDig-profileSub span:nth-child(3) {
    animation-delay: 6s;
  }

  /* ---- Content Card (cycling) ---- */
  .kingDig-contentCard {
    position: relative;
    height: 150px;
    margin: 8px 14px;
    border-radius: 12px;
    overflow: hidden;
  }

  .kingDig-cardSlide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 12px 14px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    opacity: 1;
    /* animation: kingDigCardCycle 9s ease-in-out infinite; */
  }





  @keyframes kingDigCardCycle {
    0% {
      opacity: 0;
    }

    4% {
      opacity: 1;
    }

    30% {
      opacity: 1;
    }

    36% {
      opacity: 0;
    }

    100% {
      opacity: 0;
    }
  }

  @keyframes kingDigTextCycle {
    0% {
      opacity: 0;
    }

    4% {
      opacity: 1;
    }

    30% {
      opacity: 1;
    }

    36% {
      opacity: 0;
    }

    100% {
      opacity: 0;
    }
  }

  .kingDig-cardTag {
    font-size: 6.5px;
    font-weight: 800;
    letter-spacing: 0.5px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0 0 4px 0;
  }

  .kingDig-cardTitle {
    font-size: 12.5px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.3;
    margin: 0 0 8px 0;
  }

  .kingDig-cardBtn {
    display: inline-block;
    background-color: #ffffff;
    color: #1c1c22;
    font-size: 7px;
    font-weight: 800;
    padding: 5px 10px;
    border-radius: 12px;
    width: fit-content;
  }

  /* ---- Engagement row ---- */
  .kingDig-engageRow {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px 4px 14px;
  }

  .kingDig-engageRow svg {
    width: 12px;
    height: 12px;
    color: #6b6b74;
  }

  .kingDig-captionText {
    font-size: 7px;
    color: #6b6b74;
    line-height: 1.4;
    padding: 0 14px 10px 14px;
    margin: 0;
    height: 18px;
    overflow: hidden;
    position: relative;
  }

  .kingDig-captionText span {
    position: absolute;
    top: 0;
    left: 14px;
    right: 14px;
    opacity: 0;
    animation: kingDigTextCycle 9s ease-in-out infinite;
  }

  .kingDig-captionText span b {
    color: #1c1c22;
  }

  .kingDig-captionText span:nth-child(1) {
    animation-delay: 0s;
  }

  .kingDig-captionText span:nth-child(2) {
    animation-delay: 3s;
  }

  .kingDig-captionText span:nth-child(3) {
    animation-delay: 6s;
  }

  /* ---- Bottom nav ---- */
  .kingDig-bottomNav {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 10px 14px;
    border-top: 1px solid #f0f0f3;
    margin-top: auto;
    position: fixed;
    bottom: 7px;
    width: 89%;
    background: white;
    z-index: 0;
    border-bottom-right-radius: 35px;
    border-bottom-left-radius: 35px;
  }

  .kingDig-bottomNav svg {
    width: 13px;
    height: 13px;
    color: #b7bac2;
  }

  .kingDig-bottomNav svg:first-child {
    color: #1c1c22;
  }

  /* ---- Floating Badges ---- */
  .kingDig-floatBadge {
    position: absolute;
    z-index: 4;
    display: flex;
    align-items: center;
    gap: 8px;
    background-color: #ffffff;
    border-radius: 12px;
    padding: 8px 12px;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.14);
  }



  .kingDig-badgeFollowers {
    top: 12%;
    right: 17%;
    animation: kingDigBadgeFloat1 4s ease-in-out infinite;
  }

  @keyframes kingDigBadgeFloat1 {

    /* Right se bahar */
    0% {
      opacity: 0;
      transform: translateX(120px);
    }

    /* Andar aaya */
    15% {
      opacity: 1;
      transform: translateX(0);
    }

    /* Thoda float */
    30% {
      transform: translate(0, -8px);
    }

    /* Stay */
    70% {
      opacity: 1;
      transform: translate(0, -8px);
    }

    /* Right ki taraf wapas */
    100% {
      opacity: 0;
      transform: translateX(120px);
    }
  }


  .kingDig-badgeEngagement {
    bottom: 15%;
    left: 21%;
    animation: kingDigBadgeFloat2 5s ease-in-out infinite;
  }

  @keyframes kingDigBadgeFloat2 {

    /* Left ke bahar */
    0% {
      opacity: 0;
      transform: translateX(-120px);
    }

    /* Andar aaya */
    15% {
      opacity: 1;
      transform: translateX(0);
    }

    /* Thoda float */
    30% {
      transform: translate(0, 10px);
    }

    /* Stay */
    70% {
      opacity: 1;
      transform: translate(0, 10px);
    }

    /* Left ki taraf wapas */
    100% {
      opacity: 0;
      transform: translateX(-120px);
    }
  }

  .kingDig-badgeIconCircle {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ff7a1a, #ff9a3d);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .kingDig-badgeIconCircle2 {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: linear-gradient(135deg, #050f68, #3d5aff);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }


  .kingDig-badgeIconCircle svg {
    width: 13px;
    height: 13px;
    color: #ffffff;
  }

  .kingDig-badgeIconCircle2 svg {
    width: 13px;
    height: 13px;
    color: #ffffff;
  }

  .kingDig-badgeTitle {
    font-size: 11px;
    font-weight: 800;
    color: #1c1c22;
    margin: 0;
  }

  .kingDig-badgeSub {
    font-size: 8.5px;
    color: #9a9fac;
    margin: 0;
  }

  /* ---- Floating Social Icons ---- */
  .kingDig-floatSocial {
    position: absolute;
    z-index: 1;
    width: 46px;
    height: 46px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.14);
  }

  .kingDig-floatSocial svg {
    width: 20px;
    height: 20px;
    color: #ffffff;
  }

  .kingDig-socialInstagram {
    top: 22%;
    left: 2%;
    background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af);
    animation: kingDigSocialFloat1 3.8s ease-in-out infinite;
  }

  .kingDig-socialFacebook {
    top: 30%;
    right: -2%;
    background-color: #1877f2;
    animation: kingDigSocialFloat2 4.2s ease-in-out infinite;
  }

  .kingDig-socialYoutube {
    bottom: 26%;
    left: -3%;
    background-color: #ff0000;
    animation: kingDigSocialFloat1 4.6s ease-in-out infinite;
  }

  .kingDig-socialLinkedin {
    bottom: 18%;
    right: 0%;
    background-color: #0a66c2;
    animation: kingDigSocialFloat2 4s ease-in-out infinite;
  }

  @keyframes kingDigSocialFloat1 {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-12px);
    }
  }

  @keyframes kingDigSocialFloat2 {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(12px);
    }
  }

  /* ===================== RESPONSIVE BREAKPOINTS ===================== */

  @media (max-width: 1100px) {
    .kingDig-wrapper {
      padding: 50px 32px;
    }

    .kingDig-grid {
      grid-template-columns: 1fr;
      gap: 60px;
    }

    .kingDig-visualCol {
      height: 500px;
    }
  }

  @media (max-width: 640px) {
    .kingDig-wrapper {
      padding: 40px 18px;
    }

    .kingDig-heading {
      font-size: 30px;
    }

    .kingDig-platformRow {
      gap: 8px;
    }

    .kingDig-visualCol {
      height: 440px;
      transform: scale(0.85);
    }

    .kingDig-ctaBtn {
      width: 100%;
      justify-content: center;
    }
  }


  .content_scroll_shot_kill {
    overflow: hidden;

  }



  .insta-content_cards-3,
  .insta-content_cards-2,
  .insta-content_cards-1 {
    opacity: 0;
    transform: translateY(20px);
    animation: kingDigTextScroll 9s infinite;
  }

  @keyframes kingDigTextScroll {

    0% {
      opacity: 0;
      transform: translateY(20px);
    }

    10% {
      opacity: 1;
      transform: translateY(-60px);
    }

    30% {
      opacity: 1;
      transform: translateY(-120px);
    }

    40% {
      opacity: 1;
      transform: translateY(-200px);
    }

    50% {
      opacity: 1;
      transform: translateY(-300px);
    }

    60% {
      opacity: 1;
      transform: translateY(-400px);
    }

    70% {
      opacity: 1;
      transform: translateY(-450px);
    }

    90% {
      opacity: 1;
      transform: translateY(-50px);
    }


    100% {
      opacity: 1;
      transform: translateY(20px);
    }
  }


  .card_social_color_grid_card-1 {
    background: linear-gradient(135deg, #ff9a3d, #b9502e);
  }

  .card_social_color_grid_card-2 {
    background: linear-gradient(135deg, #1c2b4a, #0d1526);
  }

  .card_social_color_grid_card-3 {
    background: linear-gradient(135deg, #b9502e, #ff7a1a);
  }

  .une79a2 {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -2;
    width: 390px;
    height: 390px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.92), rgba(239, 86, 13, 0.07) 42%, rgba(16, 58, 107, 0.045) 62%, transparent 72%);
    transform: translate(-50%, -50%);
  }

  .home_visual-inner-circle-12 {
    position: absolute;
    top: 50%;
    left: 50%;

    width: 335px;
    height: 335px;

    border-radius: 50%;
    border: 1.5px dashed #d9dde6;

    animation: homeAdsSpinReverse12 30s linear infinite;
  }

  .home_visual-outer-circle-12 {
    position: absolute;
    top: 50%;
    left: 50%;

    width: 400px;
    height: 400px;

    border-radius: 50%;
    border: 1.5px dashed #f0c19c;

    animation: homeAdsSpin12 40s linear infinite;
  }

  @keyframes homeAdsSpin12 {

    0% {
      transform: translate(-50%, -50%) rotate(0deg);
    }

    100% {
      transform: translate(-50%, -50%) rotate(360deg);
    }
  }

  @keyframes homeAdsSpinReverse12 {

    0% {
      transform: translate(-50%, -50%) rotate(360deg);
    }

    100% {
      transform: translate(-50%, -50%) rotate(0deg);
    }
  }

  .social_icon_sole_15 {
    width: 65px;
    height: 65px;
    padding: 10px;
    background: white !important;
  }

  .social_icon_sole_15 img {
    width: 100%;
  }
  .social_icon_sole_16 {
    width: 30px;
    height: 30px;
    /* padding: 10px; */
    background: white !important;
  }

  .social_icon_sole_16 img {
    width: 100%;
  }
</style>

<section class="kingDig-wrapper">
  <div class="kingDig-grid">

    <!-- LEFT COLUMN -->
    <div class="kingDig-contentCol">

      <span class="kingDig-badgeTag">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="4" y1="9" x2="20" y2="9"></line>
          <line x1="4" y1="15" x2="20" y2="15"></line>
          <line x1="10" y1="3" x2="8" y2="21"></line>
          <line x1="16" y1="3" x2="14" y2="21"></line>
        </svg>
        Social Media Marketing
        <span class="kingDig-badgeDot"></span>
      </span>

      <h1 class="kingDig-heading">
        Grow Your Brand with
        <span class="kingDig-headingAccent">Powerful Social Media Marketing</span>
      </h1>

      <p class="kingDig-description">King Digital helps businesses build a professional, creative and consistent presence across social media through <b>strategic content planning, branded posts, engaging reels, audience management and performance-focused marketing.</b> We create content that connects with your audience, improves brand visibility and helps turn social media followers into genuine business enquiries.</p>

      <div class="kingDig-platformRow">
        <span class="kingDig-platformPill">
          <span class="kingDig-platformIcon kingDig-iconInstagram social_icon_sole_16">
            <img src="assets/images/social_media_icons/instagram.webp" alt="">
          </span>
          <span class="kingDig-platformLabel">Instagram</span>
        </span>
        <span class="kingDig-platformPill">
          <span class="kingDig-platformIcon kingDig-iconFacebook social_icon_sole_16">
           <img src="assets/images/social_media_icons/facebook.webp" alt="">
          </span>
          <span class="kingDig-platformLabel">Facebook</span>
        </span>
        <span class="kingDig-platformPill">
          <span class="kingDig-platformIcon kingDig-iconLinkedin social_icon_sole_16">
            <img src="assets/images/social_media_icons/linkedin.webp" alt="">
          </span>
          <span class="kingDig-platformLabel">LinkedIn</span>
        </span>
        <span class="kingDig-platformPill">
          <span class="kingDig-platformIcon kingDig-iconYoutube social_icon_sole_16">
            <img src="assets/images/social_media_icons/youtube.webp" alt="">
          </span>
          <span class="kingDig-platformLabel">YouTube</span>
        </span>
      </div>

      <ul class="kingDig-checkList">
        <li class="kingDig-checkItem">
          <span class="kingDig-checkIcon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </span>
          Creative branded posts, stories and short-form social media videos.
        </li>
        <li class="kingDig-checkItem">
          <span class="kingDig-checkIcon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </span>
          Monthly content strategy, captions, hashtags and publishing calendar.
        </li>
        <li class="kingDig-checkItem">
          <span class="kingDig-checkIcon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </span>
          Performance tracking for reach, followers, engagement and enquiries.
        </li>
      </ul>

      <button class="kingDig-ctaBtn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
          <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
        </svg>
        Grow Your Social Media
        <svg class="kingDig-ctaArrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>

    </div>

    <!-- RIGHT COLUMN: Phone Mockup -->
    <div class="kingDig-visualCol">
      <div class="une79a1">

        <span class="kingDig-glowBlur"></span>

        <!-- Floating social icons -->
        <span class="kingDig-floatSocial kingDig-socialInstagram social_icon_sole_15">
          <img src="assets/images/social_media_icons/instagram.webp" alt="">
        </span>
        <span class="kingDig-floatSocial kingDig-socialFacebook social_icon_sole_15">
          <img src="assets/images/social_media_icons/facebook.webp" alt="">
        </span>
        <span class="kingDig-floatSocial kingDig-socialYoutube social_icon_sole_15">
          <img src="assets/images/social_media_icons/youtube.webp" alt="">
        </span>
        <span class="kingDig-floatSocial kingDig-socialLinkedin social_icon_sole_15">
          <img src="assets/images/social_media_icons/linkedin.webp" alt="">
        </span>
        <span class="home_visual-inner-circle-12"></span>
        <span class="home_visual-outer-circle-12"></span>

        <!-- Phone -->
        <div class="kingDig-phoneFrame">
          <span class="kingDig-phoneNotch"></span>
          <div class="kingDig-phoneScreen">

            <div class="kingDig-screenHeader">
              King Social
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </div>

            <div class="content_scroll_shot_kill">

              <div class="insta-content_cards-1">
                <div class="kingDig-storyRow">
                  <div class="kingDig-storyItem">
                    <span class="kingDig-storyCircle">KD</span>
                    <span class="kingDig-storyLabel">Your Story</span>
                  </div>
                  <div class="kingDig-storyItem">
                    <span class="kingDig-storyCircle">01</span>
                    <span class="kingDig-storyLabel">Growth</span>
                  </div>
                  <div class="kingDig-storyItem">
                    <span class="kingDig-storyCircle">02</span>
                    <span class="kingDig-storyLabel">Branding</span>
                  </div>
                  <div class="kingDig-storyItem">
                    <span class="kingDig-storyCircle">03</span>
                    <span class="kingDig-storyLabel">Reels</span>
                  </div>
                  <div class="kingDig-storyItem">
                    <span class="kingDig-storyCircle">04</span>
                    <span class="kingDig-storyLabel">Ads</span>
                  </div>
                </div>

                <div class="kingDig-profileRow">
                  <div class="kingDig-profileLeft">
                    <span class="kingDig-profileAvatar">KD</span>
                    <span>
                      <p class="kingDig-profileName">kingdigital</p>
                      <p class="kingDig-profileSub">
                        <span>Content Strategy</span>
                        <span>Performance update</span>
                        <span>Content Strategy</span>
                      </p>
                    </span>
                  </div>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:12px;height:12px;color:#9a9fac;">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                  </svg>
                </div>

                <div class="kingDig-contentCard card_social_color_grid_card-1">
                  <div class="kingDig-cardSlide">
                    <p class="kingDig-cardTag">CONTENT STRATEGY</p>
                    <p class="kingDig-cardTitle">Turn Followers Into Customers</p>
                    <span class="kingDig-cardBtn">Start Growing</span>
                  </div>
                </div>

                <div class="kingDig-engageRow">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </div>

                <p class="kingDig-captionText">
                  <span><b>kingdigital</b> Strategic posts and reels built for meaningful customer engagement.</span>
                  <span><b>kingdigital</b> Consistent planning that improves visibility and audience engagement.</span>
                  <span><b>kingdigital</b> Creative content designed for better reach and business growth.</span>
                </p>
              </div>

              <!-- content 2 -->
              <br>

              <div class="insta-content_cards-2">
                <div class="kingDig-profileRow">
                  <div class="kingDig-profileLeft">
                    <span class="kingDig-profileAvatar">KD</span>
                    <span>
                      <p class="kingDig-profileName">kingdigital</p>
                      <p class="kingDig-profileSub">
                        <span>Content Strategy</span>
                        <span>Performance update</span>
                        <span>Content Strategy</span>
                      </p>
                    </span>
                  </div>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:12px;height:12px;color:#9a9fac;">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                  </svg>
                </div>

                <div class="kingDig-contentCard card_social_color_grid_card-2">
                  <div class="kingDig-cardSlide">
                    <p class="kingDig-cardTag">AUDIENCE GROWTH</p>
                    <p class="kingDig-cardTitle">Reach More People Every Day</p>
                    <span class="kingDig-cardBtn">View Results</span>
                  </div>
                </div>

                <div class="kingDig-engageRow">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </div>

                <p class="kingDig-captionText">
                  <span><b>kingdigital</b> Strategic posts and reels built for meaningful customer engagement.</span>
                  <span><b>kingdigital</b> Consistent planning that improves visibility and audience engagement.</span>
                  <span><b>kingdigital</b> Creative content designed for better reach and business growth.</span>
                </p>
              </div>

              <!-- content 3 -->
              <br>

              <div class="insta-content_cards-3">
                <div class="kingDig-profileRow">
                  <div class="kingDig-profileLeft">
                    <span class="kingDig-profileAvatar">KD</span>
                    <span>
                      <p class="kingDig-profileName">kingdigital</p>
                      <p class="kingDig-profileSub">
                        <span>Content Strategy</span>
                        <span>Performance update</span>
                        <span>Content Strategy</span>
                      </p>
                    </span>
                  </div>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:12px;height:12px;color:#9a9fac;">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                  </svg>
                </div>

                <div class="kingDig-contentCard card_social_color_grid_card-3">
                  <div class="kingDig-cardSlide">
                    <p class="kingDig-cardTag">SOCIAL GROWTH</p>
                    <p class="kingDig-cardTitle">Build a Brand People Remember</p>
                    <span class="kingDig-cardBtn">Learn More</span>
                  </div>
                </div>

                <div class="kingDig-engageRow">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                  </svg>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </div>

                <p class="kingDig-captionText">
                  <span><b>kingdigital</b> Strategic posts and reels built for meaningful customer engagement.</span>
                  <span><b>kingdigital</b> Consistent planning that improves visibility and audience engagement.</span>
                  <span><b>kingdigital</b> Creative content designed for better reach and business growth.</span>
                </p>
              </div>

            </div>

            <div class="kingDig-bottomNav">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4l2 3h10a2 2 0 0 1 2 2z"></path>
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>

          </div>
        </div>

        <!-- Floating stat badges -->
        <div class="kingDig-floatBadge kingDig-badgeFollowers">
          <span class="kingDig-badgeIconCircle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </span>
          <span>
            <p class="kingDig-badgeTitle">+248 New Followers</p>
            <p class="kingDig-badgeSub">Growth increased today</p>
          </span>
        </div>

        <div class="kingDig-floatBadge kingDig-badgeEngagement">
          <span class="kingDig-badgeIconCircle2">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10"></line>
              <line x1="12" y1="20" x2="12" y2="4"></line>
              <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
          </span>
          <span>
            <p class="kingDig-badgeTitle">Engagement +32%</p>
            <p class="kingDig-badgeSub">Content is performing well</p>
          </span>
        </div>
      </div>

    </div>

  </div>
</section>