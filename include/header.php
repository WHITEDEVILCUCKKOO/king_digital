<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Digital</title>

    <!-- All Files  -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">


</head>

<body>


    <!-- ================================ 
                 Header              
 ================================  -->

    <!-- <div style="position: relative;"></div> -->
    <header class="contianer-header" id="header_call">
        <div class="nav_pc">
            <nav>
                <div class="logo_img-box-hearder">
                    <img src="assets/images/logos/king-digital-logo.png" alt="">
                </div>

                <div class="main_links-header">
                    <ul>
                        <li><a href="" class="link_fr26">Home</a></li>
                        <li class="services_drop"><a href="" class="link_fr26 ">Services <span
                                    class="rts_21">&#10094;</span></a>

                            <div class="dropdown_1-services">


                                <div class="sde84">
                                    <h3 class="sae8">Website Development</h3>
                                    <a href="#" class="dute_box">Corporate Websites</a>
                                    <a href="#" class="dute_box">Business Websites</a>
                                    <a href="#" class="dute_box">E-Commerce Websites</a>
                                    <a href="#" class="dute_box">Landing Pages</a>
                                    <a href="#" class="dute_box">Custom Portals</a>
                                    <a href="#" class="dute_box">Website Maintenance</a>
                                </div>

                                <div class="sde84">
                                    <h3 class="sae8">Digital Marketing</h3>
                                    <a href="#" class="dute_box">Seo</a>
                                    <a href="#" class="dute_box">Google Ads</a>
                                    <a href="#" class="dute_box">Social Media Marketing</a>
                                    <a href="#" class="dute_box">Content Marketing</a>
                                    <a href="#" class="dute_box">Email Marketing</a>
                                    <a href="#" class="dute_box">Lead Generation</a>
                                </div>

                                <div class="sde84">
                                    <h3 class="sae8">Branding &amp; Creative</h3>
                                    <a href="#" class="dute_box">Logo Design</a>
                                    <a href="#" class="dute_box">Brand Identity</a>
                                    <a href="#" class="dute_box">Packaging Design</a>
                                    <a href="#" class="dute_box">Brochures</a>
                                    <a href="#" class="dute_box">Social Media Creatives</a>
                                    <a href="#" class="dute_box">Corporate Presentations</a>
                                </div>

                                <div class="sde84">
                                    <h3 class="sae8">Software Development</h3>
                                    <a href="#" class="dute_box">CRM</a>
                                    <a href="#" class="dute_box">ERP</a>
                                    <a href="#" class="dute_box">HRMS</a>
                                    <a href="#" class="dute_box">Inventory Management</a>
                                    <a href="#" class="dute_box">Billing Software</a>
                                    <a href="#" class="dute_box">Custom Software</a>
                                </div>

                            </div>

                        </li>

                        <li class="about_drop"><a href="" class="link_fr26">About Us <span
                                    class="rts_21">&#10094;</span></a>

                            <div class="dropdown_2-about">
                                <!-- <div class="sde8412"> -->
                                <h4 class="sae9">About</h4>
                                <a href="#" class="dute_box">Company Overview</a>
                                <a href="#" class="dute_box">Vision</a>
                                <a href="#" class="dute_box">Mission</a>
                                <a href="#" class="dute_box">Team</a>
                                <a href="#" class="dute_box">Ecosystem</a>
                                <!-- </div> -->
                            </div>

                        </li>

                        <li class="protfolio_drop"><a href="" class="link_fr26">Portfolio <span
                                    class="rts_21">&#10094;</span></a>

                            <div class="dropdown_3-protalio">
                                <!-- <div class="sde8412"> -->
                                <h4 class="sae9">Portfolio</h4>
                                <a href="#" class="dute_box">Websites</a>
                                <a href="#" class="dute_box">Mobile Apps</a>
                                <a href="#" class="dute_box">Branding</a>
                                <a href="#" class="dute_box">Marketing Campaigns</a>
                                <a href="#" class="dute_box">Software Solutions</a>
                                <!-- </div> -->
                            </div>

                        </li>
                        <li class="careers_drop"><a href="" class="link_fr26">Careers <span
                                    class="rts_21">&#10094;</span></a>

                            <div class="dropdown_4-careers">
                                <!-- <div class="sde8412"> -->
                                <h4 class="sae9">Careers</h4>
                                <a href="#" class="dute_box">Why Join Us</a>
                                <a href="#" class="dute_box">Open Positions</a>
                                <a href="#" class="dute_box">Internships</a>
                                <a href="#" class="dute_box">Team</a>
                                <a href="#" class="dute_box">Ecosystem</a>
                                <!-- </div> -->
                            </div>

                        </li>
                        <li><a href="" class="link_fr26">Contact Us</a></li>
                    </ul>
                </div>


                <div class="mobile_call">
                    <a href="" class="free_call_btn_fr26">Free Call</a>
                </div>

                <div class="mobile_menu_btn-show">
                    <div>
                        <a href="" style="width: 60px;font-size: 12px;height: 40px;" class="free_call_btn_fr26">Free Call</a>
                    </div>
                    <div class="mobile_menu_btn" id="nowe785" onclick="show_mobile_nav()">
                        ≡
                    </div>
                </div>


            </nav>
        </div>
    </header>

    <!-- movile show  -->

    <style>
        /* mobile */

        .mobile_menu_btn-show {

            display: grid;
            grid-template-columns: 1fr 45px;
            gap: 20px;
            align-items: center;


        }

        .mobile_menu_btn {
            /* display:none; */
            /* width: 40px;
                height: 0px; */

            font-size: 25px;
            font-weight: 800;
            padding: 8px 15px;
            border-radius: 50%;
            background-color: #ff5b16;
            color: white;

        }

        .display_hiden {
            display: none;
        }

        .show_manu {

            /* display: none; */

            width: 80%;
            /* padding: 20px; */
            position: fixed;
            transform: translate(-50%);
            top: 100px;
            left: 50%;
            /* background-color: white; */
            z-index: 999;


            flex-direction: column;
            align-items: stretch;
            gap: 0;
            padding: 16px;
            padding: 16px;
            border-radius: 26px;
            /* background: rgba(255, 255, 255, .94); */
            background: linear-gradient(to right,
                    rgba(252, 251, 251, 1) 0%,
                    rgba(252, 251, 251, 0) 1000%);
            /* backdrop-filter: blur(30px) saturate(180%);
            -webkit-backdrop-filter: blur(30px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, .96);
            box-shadow: 0 25px 70px rgba(15, 23, 42, .16);

            /* background: rgba(255, 253, 251, 0.96);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(255, 255, 255, 0.6);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.8); */

            border-radius: 28px;
            max-height: 78vh;
            overflow: auto;
            font-family: Arial, sans-serif;
        }

        .mobile_options {
            list-style: none;
        }

        .mobile_options li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .mobile_options li:hover {
            color: #ff5b16;
        }

        .mobile_options li:hover a {
            color: #ff5b16 !important;
        }


        .mobile_options li a {
            position: relative;
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 19px 8px;
            justify-content: space-between;
            color: #171717 !important;
            text-decoration: none !important;
            font-size: 15px;
            font-weight: 700;
            transition: .25s ease;
        }

        .awe8456dsa {
            transform: rotate(270deg);
            transition: .25s ease;
            cursor: pointer;
            height: 20px;
            /* padding: 10px; */
            width: 30px;
            height: 30px;
            /* background-color: #ff5b16; */
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .awe8456dsa-rotate {
            transform: rotate(90deg) !important;
            /* cursor: pointer; */
            transition: .25s ease;
        }

        .mobile_drop_server-content {
            position: static;
            /* top: 65px;
            left: 156%; */
            /* width: min(1030px, calc(100vw - 80px)); */
            padding: 24px;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 22px;
            /* border-radius: 0 0 26px 26px; */
            /* transform: translateX(-50%); */
            /* background: rgba(255, 255, 255, .94); */
            border-radius: 18px;
            background: rgba(255, 246, 241, .92);
            backdrop-filter: blur(32px) saturate(180%);
            -webkit-backdrop-filter: blur(32px) saturate(180%);
            border: none;
            /* border: 1px solid rgba(255, 255, 255, .96); */
            box-shadow: 0 30px 80px rgba(15, 23, 42, .16);
        }


        .kd-popup-mega-col {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 8px;
            border-radius: 12px;
            color: #374151 !important;
            text-decoration: none !important;
            font-size: 14px;
            font-weight: 700;
            transition: .25s ease;
        }

        .kd-popup-mega-col::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #ffc4aa;
            flex: 0 0 auto;
        }



        .sae8 {
            margin: 0 0 12px;
            padding-left: 10px;
            border-left: 3px solid #ff5b16;
            color: #1f2937;
            font-size: 14px;
            font-weight: 900;
        }

        .sae9 {
            position: relative;
            /* padding-left: 12px; */
        }

        .sae9::before {
            content: '';
            position: absolute;
            width: 3px;
            height: 20px;
            display: block;
            background-color: #ff5b16;
            transform: rotate(0deg);
            left: -7px;
            top: 2px;
        }

        .kd-popup-mega-col:hover {
            background-color: rgba(255, 91, 22, .08);
            color: #ff5b16 !important;
            padding-left: 12px;
        }

        .kd-popup-mega-col:hover::before {
            background: #ff5b16;
        }

        .display_hiden_mob {
            display: none !important;
        }

        .mobile_drop_about_us-content {
            padding: 18px;
            border-radius: 0 0 22px 22px;
            background: rgba(255, 246, 241, .92);
            backdrop-filter: blur(32px) saturate(180%);
            -webkit-backdrop-filter: blur(32px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, .96);
            box-shadow: 0 28px 75px rgba(15, 23, 42, .16);
            /* opacity: 0; */
            /* visibility: hidden; */
            /* pointer-events: none; */
            /* transform: translateX(-50%); */
            transition: .25s ease;
        }


        .mobile_drop_about_us-content h4 {
            letter-spacing: 2px;
            color: #ff5b16;
            padding: 5px 0 15px 0;
        }
    </style>
    <section class="show_manu display_hiden" id="mobile_menu_12">

        <ul class="mobile_options">
            <li><a href="">Home</a></li>
            <li>
                <a href="">Services</a>
                <span onclick="mobile_dropdown_links(this)" class="awe8456dsa " data-content="services">
                    &#10094;</span>
            </li>

            <!-- service dropdown -->
            <div class="mobile_drop_server-content display_hiden_mob" id="severs_mob_conten">
                <div class="">
                    <h3>Website Development</h3>
                    <a class="kd-popup-mega-col" href="#">Corporate Websites</a>
                    <a class="kd-popup-mega-col" href="#">Business Websites</a>
                    <a class="kd-popup-mega-col" href="#">E-Commerce Websites</a>
                    <a class="kd-popup-mega-col" href="#">Landing Pages</a>
                    <a class="kd-popup-mega-col" href="#">Custom Portals</a>
                    <a class="kd-popup-mega-col" href="#">Website Maintenance</a>
                </div>

                <div class="">
                    <h3>Digital Marketing</h3>
                    <a class="kd-popup-mega-col" href="#">SEO</a>
                    <a class="kd-popup-mega-col" href="#">Google Ads</a>
                    <a class="kd-popup-mega-col" href="#">Social Media Marketing</a>
                    <a class="kd-popup-mega-col" href="#">Content Marketing</a>
                    <a class="kd-popup-mega-col" href="#">Email Marketing</a>
                    <a class="kd-popup-mega-col" href="#">Lead Generation</a>
                </div>

                <div class="">
                    <h3>Branding &amp; Creative</h3>
                    <a class="kd-popup-mega-col" href="#">Logo Design</a>
                    <a class="kd-popup-mega-col" href="#">Brand Identity</a>
                    <a class="kd-popup-mega-col" href="#">Packaging Design</a>
                    <a class="kd-popup-mega-col" href="#">Brochures</a>
                    <a class="kd-popup-mega-col" href="#">Social Media Creatives</a>
                    <a class="kd-popup-mega-col" href="#">Corporate Presentations</a>
                </div>

                <div class="">
                    <h3>Software Development</h3>
                    <a class="kd-popup-mega-col" href="#">CRM</a>
                    <a class="kd-popup-mega-col" href="#">ERP</a>
                    <a class="kd-popup-mega-col" href="#">HRMS</a>
                    <a class="kd-popup-mega-col" href="#">Inventory Management</a>
                    <a class="kd-popup-mega-col" href="#">Billing Software</a>
                    <a class="kd-popup-mega-col" href="#">Custom Software</a>
                </div>
            </div>

            <li><a href="">About Us</a>
                <span onclick="mobile_dropdown_links(this)" class="awe8456dsa " data-content="about_us">
                    &#10094;</span>
            </li>

            <!-- about dropdown -->
            <div class="mobile_drop_about_us-content display_hiden_mob" id="about_us_content">
                <h4 class="sae9">About</h4>
                <a href="#" class="kd-popup-mega-col">Company Overview</a>
                <a href="#" class="kd-popup-mega-col">Vision</a>
                <a href="#" class="kd-popup-mega-col">Mission</a>
                <a href="#" class="kd-popup-mega-col">Team</a>
                <a href="#" class="kd-popup-mega-col">Ecosystem</a>
            </div>

            <li><a href="">Portfolio</a>
                <span onclick="mobile_dropdown_links(this)" class="awe8456dsa " data-content="portfolio">
                    &#10094;</span>
            </li>

            <!-- portfolio dropdown -->
            <div class="mobile_drop_about_us-content display_hiden_mob" id="portfolio_us_content">
                <h4 class="sae9">About</h4>
                <a href="#" class="kd-popup-mega-col">Company Overview</a>
                <a href="#" class="kd-popup-mega-col">Vision</a>
                <a href="#" class="kd-popup-mega-col">Mission</a>
                <a href="#" class="kd-popup-mega-col">Team</a>
                <a href="#" class="kd-popup-mega-col">Ecosystem</a>
            </div>

            <li><a href="">Careers</a>
                <span onclick="mobile_dropdown_links(this)" class="awe8456dsa " data-content="careers">
                    &#10094;</span>
            </li>

            <!-- careers dropdown -->
            <div class="mobile_drop_about_us-content display_hiden_mob" id="careers_us_content">
                <h4 class="sae9">About</h4>
                <a href="#" class="kd-popup-mega-col">Company Overview</a>
                <a href="#" class="kd-popup-mega-col">Vision</a>
                <a href="#" class="kd-popup-mega-col">Mission</a>
                <a href="#" class="kd-popup-mega-col">Team</a>
                <a href="#" class="kd-popup-mega-col">Ecosystem</a>
            </div>

            <li><a href="">Contact Us</a></li>
        </ul>

    </section>

    <script>
        function mobile_dropdown_links(icon) {

            const content_name = icon.dataset.content;

            // All icons
            const allIcons = document.querySelectorAll(".awe8456dsa");

            // All dropdown contents
            const contents = {
                services: document.getElementById("severs_mob_conten"),
                about_us: document.getElementById("about_us_content"),
                portfolio: document.getElementById("portfolio_us_content"),
                careers: document.getElementById("careers_us_content")
            };

            // Check if clicked icon is already open
            const isOpen = icon.classList.contains("awe8456dsa-rotate");

            // Reset all icons
            allIcons.forEach(item => {
                item.classList.remove("awe8456dsa-rotate");
            });

            // Hide all dropdowns
            Object.values(contents).forEach(content => {
                if (content) {
                    content.classList.add("display_hiden_mob");
                }
            });

            // If it was already open, just close it
            if (isOpen) {
                return;
            }

            // Open clicked icon
            icon.classList.add("awe8456dsa-rotate");

            // Show corresponding content
            if (contents[content_name]) {
                contents[content_name].classList.remove("display_hiden_mob");
            }
        }
    </script>