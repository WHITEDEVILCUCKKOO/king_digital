<?php include 'include/header.php' ?>

<style>
    /* ////////////////////////////////////////////////////// Hero Section Start Here /////////////////////////////////////////////// */

    .home-hero {
        position: relative;
        width: 100%;
        max-width: 1440px;
        height: 100%;
        max-height: 578px;
        display: flex;
        align-items: center;
        padding: 118px 0 55px;
        overflow: hidden;
        background: radial-gradient(circle at 8% 18%, rgba(255, 92, 18, .34), transparent 30%), radial-gradient(circle at 90% 82%, rgba(255, 121, 35, .30), transparent 35%), linear-gradient(135deg, #ffbf98 0%, #ffe9dc 48%, #ffb17d 100%);
    }

    #canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        max-width: 1440px;
        height: 100%;
        max-height: 578px;
        pointer-events: none;
    }

    .home-hero_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        height: 100%;
        z-index: 1;
    }

    .home-hero_content--text {
        flex: 1;
        max-width: 620px;
    }

    .home-hero_content--upper-feature {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 14px;
        font-weight: 900;
        background: rgb(255 255 255 / 42%);
        border: 1px solid rgba(255, 255, 255, .78);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 14px 34px rgba(140, 50, 20, .14);
        overflow: hidden;
        white-space: nowrap;
        width: fit-content;
        overflow: hidden;
    }



    .home-hero_content--bullet {
        position: relative;
        width: 10px;
        height: 10px;
        background: #df4d0f;
        border-radius: 50%;
    }

    .home-hero_content--bullet::before {
        content: "";
        position: absolute;

        inset: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeHeroBlinkingDot 1.5s infinite;
    }

    @keyframes homeHeroBlinkingDot {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.62);
            opacity: .0;
        }

        70% {
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0);
            opacity: .55;
        }

        100% {
            transform: scale(2);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.52);
            opacity: .85;
        }
    }

    .home-hero_content--upper-feature::after {
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

    .home-hero_content--heading {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.08;
        color: #101827;
        margin-bottom: 20px;
        text-shadow: 0 2px 0 rgba(255, 255, 255, .25);
    }

    .home-hero_content--heading h1 {
        box-shadow: 0 2px 0 rgba(255, 255, 255, .25);
    }

    .home-hero_content--heading span {
        background: linear-gradient(90deg, #e84209, #ff681e, #d93605, #ff8b45);
        background-size: 300% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: heroHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes heroHeadingGradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .home-hero_content--para {
        font-size: 16px;
        line-height: 1.2;
        color: #424f63;
        margin-bottom: 20px;
    }

    .home-hero_content--cta {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 32px;
    }

    .home-hero_content--cta a {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 16px 30px;
        border-radius: 999px;
        font-size: 16px;
        font-weight: 700;
        transition: transform .25s ease, box-shadow .25s ease;
        overflow: hidden;
    }

    .home-hero_content--cta a:hover {
        transform: translateY(-4px);
    }

    .home-hero_content--cta1 {
        color: #ffffff !important;
        background: linear-gradient(135deg, #28202b, #f05214);
    }

    .home-hero_content--cta1::after {
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

    .home-hero_content--cta2 {
        color: #101827 !important;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .34));
        border: 1px solid rgba(255, 255, 255, .95);
    }

    .home-hero_content--cta2::after {
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

    .home-hero_content--features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 10px;
        padding: 10px 0;
        overflow: hidden;
    }

    .home-hero_content--features-items {
        position: relative;
        overflow: hidden;
        flex: 1 1 0;
        min-width: 0;
        padding: 20px 18px;
        border-radius: 22px;
        text-align: center;
        background: linear-gradient(135deg, rgba(255, 255, 255, .58), rgba(255, 255, 255, .30));
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 18px 38px rgba(120, 45, 15, .13);
        animation: heroItemFloat 5.5s ease-in-out infinite;
    }

    .home-hero_content--features-items::after {
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

    .home-hero_content--features-items h4 {
        color: #df4d0f;
        font-size: 24px;
        font-weight: 800;
        letter-spacing: 1.2;
    }

    .home-hero_content--features-items p {
        margin-top: 8px;
        font-size: 15px;
        color: #4b5563;
    }

    .home-hero_content--features-items:nth-child(2) {
        animation-delay: 0.6;
    }

    .home-hero_content--features-items:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes heroItemFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-9px);
        }
    }

    .home-hero_content--visual {
        position: relative;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-hero_content--visual-img {
        width: 100%;
        max-width: 560px;
        padding: 16px;
        border-radius: 32px;
        background: rgba(255, 255, 255, .45);
        border: 1px solid rgba(255, 255, 255, .82);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 28px 70px rgba(80, 35, 15, .16);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-hero_content--visual-img img {
        width: 100%;
        display: block;
        border-radius: 24px;
    }

    .home-hero_content--visual-text {
        position: absolute;
        padding: 13px 17px;
        border-radius: 16px;
        color: #101827;
        font-size: 15px;
        font-weight: 900;
        background: linear-gradient(135deg, rgba(255, 255, 255, .72), rgba(255, 255, 255, .38));
        border: 1px solid rgba(255, 255, 255, .95);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 20px 60px rgba(60, 30, 10, .16);
        animation: heroItemFloat 5s ease-in-out infinite;
    }

    .home-hero_content--visual-text--growth {
        top: -15px;
        left: -20px;
    }

    .home-hero_content--visual-text--campaigns {
        top: 160px;
        right: -35px;
        animation-delay: .6s;
    }

    .home-hero_content--visual-text--clients {
        bottom: 20px;
        left: -30px;
        animation-delay: 1s;
    }

    @keyframes homeHeroShine {
        0% {
            left: -120%;
        }

        45%,
        100% {
            left: 130%;
        }
    }

    /* ////////////////////////////////////////////////// Hero Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// About Styling Start ////////////////////////////////////////// */

    .home-about {
        width: 100%;
        max-width: 1440px;
        padding: 80px 0;
        background: linear-gradient(135deg, #fdf2e9, #fff5f0);
    }

    .home-about_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .home-about_content--upper-feature {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        color: #df4d0f;
        font-size: 14px;
        font-weight: 900;
        background: rgb(255 255 255 / 42%);
        border: 1px solid rgba(255, 255, 255, .78);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 14px 34px rgba(140, 50, 20, .14);
        overflow: hidden;
    }

    .home-about_content--icon {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6a21;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .home-about_content--bullet {
        position: relative;
        width: 7px;
        height: 7px;
        background: #df4d0f;
        border-radius: 50%;
    }

    .home-about_content--bullet::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    @keyframes homeAboutBlinkingDot {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.62);
            opacity: .0;
        }

        70% {
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0);
            opacity: .55;
        }

        100% {
            transform: scale(2);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.52);
            opacity: .85;
        }
    }

    .home-about_content--heading {
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        color: #101827;
        margin-bottom: 20px;
        text-align: center;
    }

    .home-about_content--heading span {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
        background-size: 250% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes aboutHeadingGradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 250% center;
        }
    }

    .home-about_content--para {
        font-size: 16px;
        line-height: 1.6;
        color: #424f63;
        margin-bottom: 20px;
        text-align: center;
    }

    /* ////////////////////////////////////////////////// About Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// About Content 2 Styling Start ////////////////////////////////////////// */

    .home-about_content2 {
        width: 90%;
        max-width: 1120px;
        margin: 50px auto 0;
        display: flex;
        align-items: center;
        gap: 70px;
    }

    /* ---- Visual collage (left) ---- */

    .home-about_content2--visual {
        position: relative;
        flex: 1;
        max-width: 480px;
        height: 480px;
    }

    .home-about_content2--visual-img1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 76%;
        border-radius: 22px;
        overflow: hidden;
        border: 6px solid #fff;
        box-shadow: 0 30px 60px rgba(60, 30, 10, .18);
    }

    .home-about_content2--visual-img1 img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        display: block;
    }

    .home-about_content2--visual-badge {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 48%;
        height: 92px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 16px;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 20px 44px rgba(60, 30, 10, .10);
    }

    .home-about_content2--visual-badge h4 {
        font-size: 21px;
        font-weight: 800;
        color: #df4d0f;
        white-space: nowrap;
    }

    .home-about_content2--visual-img2 {
        position: absolute;
        right: 0;
        top: 165px;
        width: 52%;
        border-radius: 26px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 30px 65px rgba(60, 30, 10, .20);
        animation: heroItemFloat 6s ease-in-out infinite;
    }

    .home-about_content2--visual-img2--info {
        position: relative;
        padding: 18px 20px 12px;
    }

    .home-about_content2--visual-img2--info span {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #101827;
    }

    .home-about_content2--visual-img2--info h3 {
        margin-top: 4px;
        font-size: 32px;
        font-weight: 800;
        color: #ff5b12;
        letter-spacing: .5px;
    }

    .home-about_content2--visual-img2--icon {
        position: absolute;
        top: 16px;
        right: 18px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #123d6b;
        color: #ffffff;
        font-size: 13px;
    }

    .home-about_content2--visual-img2 img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    /* ---- Text column (right) ---- */

    .home-about_content2--text {
        flex: 1;
    }

    .home-about_content2--heading {
        font-size: 38px;
        font-weight: 800;
        line-height: 1.22;
        color: #101827;
        margin-bottom: 18px;
    }

    .home-about_content2--heading span {
        display: block;
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 45%, #123d6b 100%);
        background-size: 220% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    .home-about_content2--para {
        font-size: 15px;
        line-height: 1.75;
        color: #424f63;
        margin-bottom: 26px;
    }

    .home-about_content2--features {
        display: flex;
        align-items: center;
        gap: 28px;
        padding-bottom: 22px;
        margin-bottom: 22px;
        border-bottom: 1px solid rgba(16, 24, 39, .10);
    }

    .home-about_content2--features-items {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .home-about_content2--features-items--icon {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: #ffffff;
        font-size: 18px;
        box-shadow: 0 12px 26px rgba(60, 30, 10, .10);
    }

    .home-about_content2--features-items h4 {
        font-size: 15px;
        font-weight: 800;
        line-height: 1.35;
        color: #101827;
    }

    .home-about_content2--points {
        display: flex;
        flex-direction: column;
        gap: 14px;
        margin-bottom: 30px;
    }

    .home-about_content2--points-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .home-about_content2--points-item span {
        flex-shrink: 0;
        width: 16px;
        height: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ee5209;
        font-size: 16px;
        line-height: 1;
    }

    .home-about_content2--points-item span::before {
        content: "\2726";
    }

    .home-about_content2--points-item p {
        font-size: 15px;
        font-weight: 700;
        color: #101827;
    }

    .home-about_content2--cta {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 17px 32px;
        border-radius: 999px;
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 700;
        overflow: hidden;
        background: linear-gradient(135deg, #ff9448, #f0530f);
        box-shadow: 0 22px 44px rgba(240, 83, 15, .30);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-about_content2--cta:hover {
        transform: translateY(-4px);
    }

    .home-about_content2--cta::after {
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

    @media (max-width: 900px) {
        .home-about_content2 {
            flex-direction: column;
            gap: 90px;
        }

        .home-about_content2--visual {
            max-width: 400px;
            width: 100%;
        }

        .home-about_content2--features {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
    }

    /* ////////////////////////////////////////////////// About Content 2 Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// Service Section Styling Start ////////////////////////////////////////// */

    .home-service {
        width: 100%;
        max-width: 1440px;
        padding: 80px 0;
        background: linear-gradient(135deg, #eef2f7, #f6f8fb);
    }

    .home-service_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px 22px;
        align-items: start;
    }

    .home-service_content--badge,
    .home-service_content--heading,
    .home-service_content--para {
        grid-column: 1 / -1;
        text-align: center;
    }

    .home-service_content--badge {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        justify-self: center;
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
        font-size: 40px;
        font-weight: 800;
        line-height: 1.25;
        color: #101827;
        margin-bottom: 16px;
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
        font-size: 15px;
        line-height: 1.7;
        color: #6b7280;
        margin-bottom: 20px;
    }

    .home-service_content--para strong {
        color: #101827;
        font-weight: 800;
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
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .home-service_content--card:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 50px rgba(30, 41, 59, .13);
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
        box-shadow: 0 10px 24px rgba(30, 41, 59, .12);
        z-index: 1;
    }

    .home-service_content--card-icon span {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ee5209;
        font-size: 20px;
        font-weight: 800;
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
        color: #ee5209 !important;
        font-size: 13px;
        font-weight: 800;
        background: #fdf4ee;
        border: 1px solid #f6d9c2;
        transition: transform .2s ease, background .2s ease;
    }

    .home-service_content--card-cta:hover {
        transform: translateY(-3px);
        background: #fbe8da;
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

    @media (max-width: 980px) {
        .home-service_content {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 560px) {
        .home-service_content {
            grid-template-columns: 1fr;
        }
    }

    /* ////////////////////////////////////////////////// Service Section Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// Web Design Section Styling Start ////////////////////////////////////////// */

    .home-webDesign {
        width: 100%;
        max-width: 1440px;
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
        transition: opacity .6s ease, transform 6s ease;
    }

    .home-webDesign_content--grid-items-img img.img-default {
        opacity: 1;
        transform: scale(1);
        z-index: 0;
    }

    .home-webDesign_content--grid-items-img img.img-hover {
        opacity: 0;
        transform: scale(1.08);
        z-index: 0;
    }

    .home-webDesign_content--grid-items:hover .img-default {
        opacity: 0;
    }

    .home-webDesign_content--grid-items:hover .img-hover {
        opacity: 1;
        transform: scale(1);
    }

    /* darkening gradient so text always reads, deepens on hover */

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
        max-height: 140px;
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

    /* ////////////////////////////////////////////////// WhatsApp Section Styling Start ////////////////////////////////////////// */

    .home-whatsapp {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 90px 0 140px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fb 100%);
    }

    .home-whatsapp_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 1fr;
        grid-template-rows: auto 1fr;
        grid-template-areas:
            "dashboard badge"
            "dashboard text";
        column-gap: 70px;
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
        margin-bottom: 18px;
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
        width: 7px;
        height: 7px;
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
            opacity: .55;
        }

        100% {
            transform: scale(2);
            opacity: .85;
        }
    }

    .home-whatsapp_content--badge p {
        margin: 0;
    }

    /* ---- Dashboard mockup ---- */

    /* FIX: outer wrapper holds the mockup AND the floating badges.
       It is position:relative but has NO overflow:hidden, so the
       badges (which use negative offsets) can float freely instead
       of being clipped by the mockup's rounded-corner clipping box. */
    .home-whatsapp_content--deshboard-wrap {
        grid-area: dashboard;
        position: relative;
        width: 100%;
        max-width: 500px;
        margin-bottom: 100px;
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
        align-self: flex-start;
        background: #ffffff;
        color: #374151;
        border: 1px solid #eef1f5;
        border-bottom-left-radius: 3px;
    }

    .home-whatsapp_content--deshboard-message .msg-out {
        align-self: flex-end;
        background: linear-gradient(135deg, #ffc199, #ff8a45);
        color: #3a1c05;
        border-bottom-right-radius: 3px;
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
        bottom: -90px;
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
        font-size: 36px;
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
        font-size: 15px;
        line-height: 1.7;
        color: #6b7280;
    }

    .home-whatsapp_content--text-para strong {
        color: #101827;
        font-weight: 800;
    }

    .home-whatsapp_content--text-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-bottom: 28px;
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
        width: 38px;
        height: 38px;
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
        font-size: 14px;
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

    /* ////////////////////////////////////////////////// WhatsApp Section Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// Bulk Sms Section Styling End ////////////////////////////////////////// */

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

    .home-bulksms_content--info-dashboard-report-item:nth-child(2) span:first-child::before {
        content: "Delivered";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(2) p::before {
        width: 97%;
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(2) span:last-child::before {
        content: "97%";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(3) span:first-child::before {
        content: "Opened";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(3) p::before {
        width: 89%;
        background: linear-gradient(90deg, #2f6fed, #1a4fc4);
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(3) span:last-child::before {
        content: "89%";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(4) span:first-child::before {
        content: "Link Clicks";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(4) p::before {
        width: 64%;
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(4) span:last-child::before {
        content: "64%";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(5) span:first-child::before {
        content: "Responses";
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(5) p::before {
        width: 42%;
        background: #c7ccd6;
    }

    .home-bulksms_content--info-dashboard-report-item:nth-child(5) span:last-child::before {
        content: "42%";
    }

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

    /* ////////////////////////////////////////////////// Bulk Sms Section Styling End ////////////////////////////////////////// */
</style>

<main>

    <!-- ////////////////////////////////////////////////// Hero Section ////////////////////////////////////////// -->
    <section class="home-hero">
        <canvas id="canvas"></canvas>
        <div class="home-hero_content">
            <div class="home-hero_content--text">
                <div class="home-hero_content--upper-feature">
                    <span class="home-hero_content--bullet"></span>
                    <h3>Trusted By 15,000+ Businesses & Resellers</h3>
                </div>
                <h1 class="home-hero_content--heading">
                    Grow Faster With <span>Result-Driven</span> Digital Marketing
                </h1>
                <p class="home-hero_content--para">
                    Transform your business into a powerful online brand with data-driven marketing strategies, creative campaigns, and high-converting digital experiences.
                </p>
                <div class="home-hero_content--cta">
                    <a href="#" class="home-hero_content--cta1">Get Free Consultation</a>
                    <a href="#" class="home-hero_content--cta2">Start Your Project</a>
                </div>
                <div class="home-hero_content--features">
                    <div class="home-hero_content--features-items">
                        <h4>15k+</h4>
                        <p>Businesses</p>
                    </div>
                    <div class="home-hero_content--features-items">
                        <h4>10+</h4>
                        <p>Years Experience</p>
                    </div>
                    <div class="home-hero_content--features-items">
                        <h4>98%</h4>
                        <p>Client Satisfaction</p>
                    </div>
                </div>

            </div>
            <div class="home-hero_content--visual">
                <div class="home-hero_content--visual-img">
                    <img src="assets/images/hero-image.avif" alt="Hero Image">
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--growth">
                    📈 +320% Growth
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--campaigns">
                    🎯 High Converting Campaigns
                </div>
                <div class="home-hero_content--visual-text home-hero_content--visual-text--clients">
                    ⭐ 15,000+ Clients
                </div>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////////////////// Hero Section End ///////////////////////////////////////////     -->

    <!-- /////////////////////////////////////////////////// About Section Start ///////////////////////////////////////////     -->
    <section class="home-about">
        <div class="home-about_content">
            <span class="home-about_content--upper-feature">
                <span class="home-about_content--icon">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        width="10"
                        height="10">
                        <path d="M6 2C5.45 2 5 2.45 5 3V21C5 21.55 5.45 22 6 22H18C18.55 22 19 21.55 19 21V3C19 2.45 18.55 2 18 2H6ZM8 5H10V7H8V5ZM14 5H16V7H14V5ZM8 9H10V11H8V9ZM14 9H16V11H14V9ZM8 13H10V15H8V13ZM14 13H16V15H14V13ZM11 17H13V22H11V17Z" />
                    </svg>
                </span>
                <h3>About King Digital</h3>
                <span class="home-about_content--bullet"></span>
            </span>
            <h2 class="home-about_content--heading">
                Your Trusted Partner for <span>Business Growth</span>
            </h2>
            <p class="home-about_content--para">
                King Digital is a full-service digital marketing, technology and business communication company dedicated to helping businesses establish a strong digital presence and achieve sustainable growth. We combine creative thinking, modern technology and result-focused strategies to develop solutions that support brand visibility, customer engagement, lead generation and long-term business performance.
            </p>
            <p class="home-about_content--para">
                Our complete range of services includes professional website development, landing page design,Google Ads, Meta Ads, search engine optimization, social media marketing, graphic designing, video production and digital branding. Every campaign and digital platform is planned according to the business objectives, target audience and market requirements of our clients.
            </p>
        </div>
        <div class="home-about_content2">
            <div class="home-about_content2--visual">
                <div class="home-about_content2--visual-img1">
                    <img src="assets/images/home-about-office.avif" alt="About Image">
                </div>
                <div class="home-about_content2--visual-badge">
                    <h4>King Digital</h4>
                </div>
                <div class="home-about_content2--visual-img2">
                    <div class="home-about_content2--visual-img2--info">
                        <span>Trusted By Clients</span>
                        <h3>15K+</h3>
                        <span class="home-about_content2--visual-img2--icon">✦</span>
                    </div>
                    <img src="assets/images/home-about-person.webp" alt="About Image">
                </div>
            </div>
            <div class="home-about_content2--text">
                <h2 class="home-about_content2--heading">
                    Smart Digital Marketing
                    <span>For Business Growth</span>
                </h2>
                <p class="home-about_content2--para">
                    King Digital helps businesses grow online with result-focused digital marketing, website design, SEO, Google Ads, social media marketing and lead generation. Our team creates clean strategies that improve brand visibility, bring quality traffic and convert visitors into real customers.
                </p>
                <div class="home-about_content2--features">
                    <div class="home-about_content2--features-items">
                        <span class="home-about_content2--features-items--icon">📈</span>
                        <h4>SEO & Google Ads<br>Campaign Growth</h4>
                    </div>
                    <div class="home-about_content2--features-items">
                        <span class="home-about_content2--features-items--icon">🎯</span>
                        <h4>Social Media &<br>Lead Generation</h4>
                    </div>
                </div>
                <div class="home-about_content2--points">
                    <div class="home-about_content2--points-item">
                        <span></span>
                        <p>Professional website design with conversion-focused layout</p>
                    </div>
                    <div class="home-about_content2--points-item">
                        <span></span>
                        <p>Performance marketing campaigns for leads, traffic and sales</p>
                    </div>
                </div>
                <a href="#" class="home-about_content2--cta">Start Your Campaign <span>→</span></a>
            </div>
        </div>
    </section>
    <!-- /////////////////////////////////////////////////// About Section End ///////////////////////////////////////////     -->
    <!-- /////////////////////////////////////////////////// Service Section Start ///////////////////////////////////////////     -->

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
            <div class="home-service_content--card">
                <div class="home-service_content--card-img">
                    <img src="assets/images/services/service-web-developer.avif" alt="Website Development">
                </div>
                <div class="home-service_content--card-icon">
                    <span>&lt;/&gt;</span>
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
                    <span>💬</span>
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
                    <span>🔐</span>
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
                    <span>📲</span>
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
                    <span>🎙️</span>
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
                    <span>☎️</span>
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
                    <span>🔍</span>
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
                    <span>📣</span>
                </div>
                <div class="home-service_content--card-heading">
                    <h3>Meta Ads</h3>
                </div>
                <div class="home-service_content--card-para">
                    <p>Facebook and Instagram advertising campaigns built for traffic, product sales and quality lead generation.</p>
                </div>
                <a href="#" class="home-service_content--card-cta">Explore <span>→</span></a>
            </div>
            <a href="#" class="home-service_content--footer-cta">View All Services <span>→</span></a>
        </div>
    </section>
    <!-- /////////////////////////////////////////////////// Service Section End ///////////////////////////////////////////     -->

    <!-- ////////////////////////////////////////////////// Web Design Section ////////////////////////////////////////// -->

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
                        <img class="img-default" src="assets/images/webDesign/corporate-websites.avif" alt="Corporate Websites">
                        <img class="img-hover" src="assets/images/webDesign/corporate-websites-hover.avif" alt="Corporate Websites">
                        <span>🏢</span>
                        <h3>Corporate Websites</h3>
                    </div>
                    <div class="home-webDesign_content--hover-text">
                        <p>Build a strong professional identity and present your services, values and expertise through a modern website designed to earn customer trust.</p>
                        <span>→</span>
                    </div>
                </div>

                <div class="home-webDesign_content--grid-items">
                    <div class="home-webDesign_content--grid-items-img">
                        <img class="img-default" src="assets/images/webDesign/lead-capture-page.avif" alt="Lead Capture Pages">
                        <img class="img-hover" src="assets/images/webDesign/lead-capture-page-hover.avif" alt="Lead Capture Pages">
                        <span>🎯</span>
                        <h3>Lead Capture Pages</h3>
                    </div>
                    <div class="home-webDesign_content--hover-text">
                        <p>Focused, distraction-free pages built to turn visitors into qualified leads for your sales team.</p>
                        <span>→</span>
                    </div>
                </div>

                <div class="home-webDesign_content--grid-items">
                    <div class="home-webDesign_content--grid-items-img">
                        <img class="img-default" src="assets/images/webDesign/blog.avif" alt="Blog Websites">
                        <img class="img-hover" src="assets/images/webDesign/blog-hover.avif" alt="Blog Websites">
                        <span>✍️</span>
                        <h3>Blog Websites</h3>
                    </div>
                    <div class="home-webDesign_content--hover-text">
                        <p>Content-first websites structured for SEO growth, reader engagement and long-term organic traffic.</p>
                        <span>→</span>
                    </div>
                </div>

                <div class="home-webDesign_content--grid-items">
                    <div class="home-webDesign_content--grid-items-img">
                        <img class="img-default" src="assets/images/webDesign/landing-page.avif" alt="Landing Pages">
                        <img class="img-hover" src="assets/images/webDesign/landing-page-hover.avif" alt="Landing Pages">
                        <span>🚀</span>
                        <h3>Landing Pages</h3>
                    </div>
                    <div class="home-webDesign_content--hover-text">
                        <p>High-converting single-goal pages built for ad campaigns, launches and product promotions.</p>
                        <span>→</span>
                    </div>
                </div>

                <div class="home-webDesign_content--grid-items">
                    <div class="home-webDesign_content--grid-items-img">
                        <img class="img-default" src="assets/images/webDesign/dynamic-website.avif" alt="Dynamic Websites">
                        <img class="img-hover" src="assets/images/webDesign/dynamic-website-hover.avif" alt="Dynamic Websites">
                        <span>⚙️</span>
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
    <!-- /////////////////////////////////////////////////// Web Design Section End ///////////////////////////////////////////     -->

    <!-- /////////////////////////////////////////////////// What'sApp API Section Start ///////////////////////////////////////////     -->

    <section class="home-whatsapp">
        <div class="home-whatsapp_content">

            <div class="home-whatsapp_content--badge">
                <span></span>
                <p>WhatsApp Business API</p>
            </div>

            <!-- FIX: wrapper (no overflow:hidden) now holds both the mockup box
                 and the two floating badges, so the badges are no longer
                 clipped/overlapping the mockup header. -->
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

                            <div class="home-whatsapp_content--deshboard-message">
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
                        <h5>Automated Chatbot Replies</h5>
                        <p>Answer common questions instantly and guide customers automatically.</p>
                    </div>
                    <div class="home-whatsapp_content--text-features-item2">
                        <span>👥</span>
                        <h5>Multi-Agent Live Chat</h5>
                        <p>Manage customer enquiries through one organised shared team inbox.</p>
                    </div>
                    <div class="home-whatsapp_content--text-features-item3">
                        <span>📣</span>
                        <h5>Broadcast Campaigns</h5>
                        <p>Send approved offers, updates and notifications to opted-in customers.</p>
                    </div>
                    <div class="home-whatsapp_content--text-features-item4">
                        <span>📊</span>
                        <h5>Reports and Lead Tracking</h5>
                        <p>Track conversations, customer responses and agent performance.</p>
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

    <!-- /////////////////////////////////////////////////// What'sApp API Section End ///////////////////////////////////////////     -->

    <!-- /////////////////////////////////////////////////// Bulk Sms Section Start /////////////////////////////////////////// -->

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
                        <p></p><span></span>
                    </div>
                    <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                        <p></p><span></span>
                    </div>
                    <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                        <p></p><span></span>
                    </div>
                    <div class="home-bulksms_content--info-dashboard-report-item"><span></span>
                        <p></p><span></span>
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

    <!-- /////////////////////////////////////////////////// Bulk Sms Section End /////////////////////////////////////////// -->
</main>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const hero = document.querySelector('.home-hero');

    let width, height;

    function resize() {
        width = canvas.width = hero.offsetWidth;
        height = canvas.height = hero.offsetHeight;
    }
    resize();
    window.addEventListener('resize', () => {
        resize();
        initDots();
    });

    const SPACING = 20,
        BASE_RADIUS = 1,
        REPEL_RADIUS = 120,
        REPEL_STRENGTH = 40,
        EASE = 0.12;
    let dots = [];

    function initDots() {
        dots = [];
        const cols = Math.ceil(width / SPACING) + 1;
        const rows = Math.ceil(height / SPACING) + 1;
        for (let i = 0; i < cols; i++)
            for (let j = 0; j < rows; j++)
                dots.push({
                    baseX: i * SPACING,
                    baseY: j * SPACING,
                    x: i * SPACING,
                    y: j * SPACING
                });
    }
    initDots();

    const mouse = {
        x: -9999,
        y: -9999
    };
    hero.addEventListener('mousemove', (e) => {
        const rect = hero.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });
    hero.addEventListener('mouseleave', () => {
        mouse.x = -9999;
        mouse.y = -9999;
    });

    function animate() {
        ctx.clearRect(0, 0, width, height);
        for (const dot of dots) {
            const dx = dot.baseX - mouse.x,
                dy = dot.baseY - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            let targetX = dot.baseX,
                targetY = dot.baseY;
            if (dist < REPEL_RADIUS) {
                const force = 1 - dist / REPEL_RADIUS;
                const angle = Math.atan2(dy, dx);
                targetX += Math.cos(angle) * force * REPEL_STRENGTH;
                targetY += Math.sin(angle) * force * REPEL_STRENGTH;
            }
            dot.x += (targetX - dot.x) * EASE;
            dot.y += (targetY - dot.y) * EASE;
            ctx.beginPath();
            ctx.arc(dot.x, dot.y, BASE_RADIUS, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(247, 238, 238, 0.86)';
            ctx.fill();
        }
        requestAnimationFrame(animate);
    }
    animate();
</script>

<?php include 'include/footer.php' ?>