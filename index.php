<?php
$meta_description = 'Official site for the popular Zen Cart e-commerce shopping cart software.';
$meta_tag = 'Zen Cart™ - Putting the dream of your own business within reach of anyone!';
$meta_page = 'Zen Cart Support';
$meta_title = $meta_page . ' | ' . $meta_tag;

require 'includes/html_header.php';
?>

<body>

    <?php require 'includes/header.php'; ?>

    <section class="intro-section bg-1">
        <div class="intro-container-wrapper">
            <div class="intro-wrapper fix">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="intro-content">
                                    <div class="intro-section-title">
                                        <h1 class="intro-title">FREE Open Source Ecommerce Platform</h1>
                                        <p class="intro-desc">
                                            Own your store. Own your data. Scale your business on the platform that puts freedom first.
                                        </p>
                                    </div>
                                    <div class="btn-wrapper wow fadeInUp" data-wow-delay=".6s">
                                        <a class="theme-btn" href="download.php">Get Started Now
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_11_22)">
                                                    <path
                                                        d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_11_22">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </a>
                                        <a class="theme-btn style2 wow fadeInUp" data-wow-delay=".2s"
                                            href="about.php">About Zen Cart
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_11_27)">
                                                    <path
                                                        d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                        fill="#282C32" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_11_27">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="mt-5">
                                        <a href="#" class="text-theme fw-bold text-decoration-underline" data-bs-toggle="modal" data-bs-target="#openSourceModal" style="font-size: 0.95rem;">
                                            <i class="fa-solid fa-circle-info me-1"></i>What does Open Source mean?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="intro-thumb">
                                    <picture>
                                        <source type="image/webp"
                                                sizes="(min-width: 1700px) 830px, (min-width: 992px) 50vw, calc(100vw - 30px)"
                                                srcset="
                assets/images/hero/pexels-negativespace-34577-sm.webp 600w,
                assets/images/hero/pexels-negativespace-34577-720.webp 720w,
                assets/images/hero/pexels-negativespace-34577-md.webp 900w,
                assets/images/hero/pexels-negativespace-34577-lg.webp 1400w">

                                        <source type="image/jpeg"
                                                sizes="(min-width: 1700px) 830px, (min-width: 992px) 50vw, calc(100vw - 30px)"
                                                srcset="
                assets/images/hero/pexels-negativespace-34577-sm.jpg 600w,
                assets/images/hero/pexels-negativespace-34577-720.jpg 720w,
                assets/images/hero/pexels-negativespace-34577-md.jpg 900w,
                assets/images/hero/pexels-negativespace-34577-lg.jpg 1400w">

                                        <img src="assets/images/hero/pexels-negativespace-34577-md.jpg"
                                             alt="online shopping platform"
                                             class="img-fluid"
                                             loading="eager">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="why-section section-padding bg-gradient-1">
        <div class="container-wrapper">
            <div class="container">
                <div class="why-wrapper">
                    <div class="section-title text-center mxw-685 mx-auto mb-60">
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">Why Choose Zen Cart</h2>
                    </div>
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="why-box wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon-box">
                                    <i class="fa fa-2x fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="Details About Zen Cart"> 20+ years on the market </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="why-box active wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon-box">
                                    <i class="fa fa-2x fa-store" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="About Zen Cart"> 50.000+ Active Shops </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="why-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="fa fa-2x fa-link" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="About Zen Cart"> 2.000+ Plugins Available </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="why-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="fa fa-brands fa-2x fa-searchengin" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="About Zen Cart"> SEO Optimized </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="why-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="fa fa-2x fa-handshake" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="About Zen Cart"> Community Driven </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="why-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon-box">
                                    <i class="fa fa-2x fa-gears" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="about.php" title="About Zen Cart"> API Integrations </a></h3>
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inc-section section-padding fix bg-2">
        <div class="container-wrapper">
            <div class="container">
                <div class="section-title text-center mxw-685 mx-auto wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="title">What's Included</h2>
                </div>
                <div class="inc-wrapper">
                    <div class="row gy-5">
                        <div class="col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center">
                            <div class="inc-content">
                                <div class="fancy-box">
                                    <div class="content wow fadeInUp" data-wow-delay=".2s">
                                        <h3>It's FREE</h3>
                                        <p class="text">No monthly costs, no hidden fees, nothing - download it and it's yours to use</p>
                                    </div>
                                </div>
                                <div class="fancy-box wow fadeInUp" data-wow-delay=".4s">
                                    <div class="content">
                                        <h3>PCI DSS Compliant</h3>
                                        <p class="text">Designed to meet PA-DSS certification standards</p>
                                    </div>
                                </div>
                                <div class="fancy-box wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <h3>Unparalleled Support</h3>
                                        <p class="text">There are few questions that have not been answered already over the years</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center">
                            <div class="inc-thumb wow fadeInUp" data-wow-delay=".2s">
                                <div class="main-thumb wow bounceInUp" data-wow-delay=".6s"><img
                                        src="assets/images/included.jpg" alt="included"></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center justify-content-xl-end">
                            <div class="inc-content">
                                <div class="fancy-box wow fadeInUp" data-wow-delay=".2s">
                                    <div class="content">
                                        <h3>No restrictions</h3>
                                        <p class="text">Unlimited categories/products, sales volumes and admin users</p>
                                    </div>
                                </div>
                                <div class="fancy-box wow fadeInUp" data-wow-delay=".4s">
                                    <div class="content">
                                        <h3>SEO Optimized</h3>
                                        <p class="text">Excellent SEO results out of the box</p>
                                    </div>
                                </div>
                                <div class="fancy-box wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <h3>Constant Development</h3>
                                        <p class="text">Continuous updates - <a href="https://github.com/zencart/zencart" target="_blank">see Github</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deploy-section section-padding fix bg-1">
        <div class="container">
            <div class="deploy-wrapper">
                <div class="shape"> <img src="assets/images/shape/side-circle.png" alt="shape"> </div>
                <div class="row gy-5 gy-md-0 gx-60 d-flex align-items-center">
                    <div class="col-xl-4">
                        <div class="deploy-content">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    How It Works
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Deploy your website in 10 minutes</h2>
                            </div>
                            <div class="deploy-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1" aria-label="01. Download Zen Cart">
                                                01. Download Zen Cart
                                            </button>
                                        </h3>
                                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Download the zip file from our official repository
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2" aria-label="02. Upload to your server">
                                                02. Upload to your server
                                            </button>
                                        </h3>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Upload the file to your server
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3" aria-label="03. Install on your server">
                                                03. Install on your server
                                            </button>
                                        </h3>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Follow the simple process to install the application on your server
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".9s">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4" aria-label="04. Ready to go">
                                                04. Ready to go
                                            </button>
                                        </h3>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Your site is ready for use. You can always add more plugins to extend functionality
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="deploy-thumb wow fadeInUp" data-wow-delay=".4s">
                            <div class="main-thumb img-custom-anim-right wow">
                                <img id="deploySteps" src="assets/images/steps/step_1.jpg" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage-section fix">
        <div class="container-wrapper">
            <div class="container">
                <div class="advantage-wrapper section-padding">
                    <div class="container">
                        <div class="row mb-5 text-center justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                    <div class="subtitle text-uppercase">The Zen Cart Advantage</div>
                                    <h2 class="title">Everything You Need, Built-In.</h2>
                                    <p class="section-desc">
                                        Stop paying for "apps" to do basic tasks. Zen Cart comes loaded with enterprise-grade features
                                        right out of the box, optimized for speed, accessibility, and total control.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="checklist-wrapper wow fadeInUp" data-wow-delay=".4s">
                                    <ul class="checklist">
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Unlimited Growth:</strong> No limits on products, sales, or admin users.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>B2B & Wholesale:</strong> Built-in group pricing and volume discounts.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Global Commerce:</strong> Native multi-language, multi-currency, and tax rules.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Marketing Engine:</strong> Coupons, vouchers, and sophisticated "Specials" logic.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="checklist-wrapper wow fadeInUp" data-wow-delay=".5s">
                                    <ul class="checklist">
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Accessibility:</strong> Modern core meets the highest SEO standards.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>PHP 8.x Optimized:</strong> High-performance code under active development.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Payment Ready:</strong> PayPal, Authorize.Net and Check/Money Order out of the box.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>True Ownership:</strong> No monthly platform fees or "revenue tax."</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 text-center">
                            <div class="col-12">
                                <a class="theme-btn wow fadeInUp" data-wow-delay=".6s" href="download.php">
                                    Download Zen Cart
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="advantage-section fix bg-2">
        <div class="container-wrapper">
            <div class="container">
                <div class="advantage-wrapper section-padding">
                    <div class="container rounded-4">
                        <div class="row mb-5 text-center justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                    <div class="subtitle text-uppercase">Limitless Extensibility</div>
                                    <h2 class="title">Tailor-Made with Free Plugins</h2>
                                    <p class="section-desc">
                                        Need more? The Zen Cart community provides thousands of free modules to customize
                                        your store's workflow, shipping, and marketing - no monthly "App Store" subscriptions required.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="checklist-wrapper wow fadeInUp" data-wow-delay=".4s">
                                    <ul class="checklist">
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Modern Checkout:</strong> Conversion-optimized One-Page Checkout modules.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Global Payment Gateways:</strong> Native support for PayPal, Stripe, Zelle, Braintree and many more.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Full Logistics Integration:</strong> Real-time rates for DHL, FedEx, UPS, USPS, and Royal Mail.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Complex Inventory Control:</strong> The powerful Products Options Stock Manager (POSM) is now built-in for precise variant tracking.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Advanced Media:</strong> High-performance image management and automated thumbnail processing.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="checklist-wrapper wow fadeInUp" data-wow-delay=".5s">
                                    <ul class="checklist">
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>SEO Powerhouse:</strong> Structured Data (JSON-LD), XML Sitemaps, and SEO-friendly URLs.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Marketing Sync:</strong> Built-in connectors for Google Analytics and Google Merchant Center.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Abandoned Cart Recovery:</strong> Automated email campaigns to recapture lost revenue without monthly fees.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Data Mobility:</strong> Professional Import/Export tools for products, customers, and orders.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Global Compliance:</strong> EU VAT exemption modules and advanced sales reporting.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 text-center">
                            <div class="col-12">
                                <p class="small italic">...and over 2,000+ more community-contributed plugins available for free.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="compare-section section-padding fix">
        <div class="container-wrapper">
            <div class="compare-wrapper container">
                <div class="row mb-5 text-center justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                            <div class="subtitle text-uppercase">The Open Source Choice</div>
                            <h2 class="title">Ownership vs. Subscriptions</h2>
                            <p class="section-desc">
                                In a market saturated with "rented" storefronts, Zen Cart® stands as a
                                bastion of true digital ownership.
                            </p>
                            <p class="section-desc fw-bold">
                                Don't let your platform dictate your profit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="pe-lg-5 wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="h3 fw-bold mb-3">Why Zen Cart® Over Commercial Platforms?</h3>
                            <p>
                                There are dozens of open-source shopping cart programs available, but none come close
                                to the options, features, and stability of Zen Cart®.
                            </p>
                            <p class="mb-4">
                                As for commercial SaaS ecommerce programs? Watch as their fees ramp up to match your sales!
                                At some point, every growing business is forced to "jump ship" to avoid these
                                revenue taxes. <strong>Why not start with an unrestricted solution from day one?</strong>
                            </p>
                            <a href="compare.php" class="theme-btn mt-3">
                                View Comparison
                                <i class="fa-solid fa-chevron-right ms-2"></i>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card border-1 shadow-md p-4 rounded-4 wow fadeInUp" data-wow-delay=".4s">
                            <h3 class="h3 mb-4 text-orange-color fw-bold">The Real Cost of Selling</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-file-invoice-dollar text-orange-color me-2"></i> Monthly License</span>
                                    <span>$0.00</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-chart-line text-orange-color me-2"></i> Revenue Fees</span>
                                    <span>None</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-puzzle-piece text-orange-color me-2"></i> Core B2C and B2B Tools</span>
                                    <span>Included</span>
                                </li>
                                <li class="mb-0 d-flex justify-content-between">
                                    <span><i class="fa-solid fa-database text-orange-color me-2"></i> Your Data</span>
                                    <span>100% Private</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="card border-0 shadow-sm bg-dark text-white p-4 rounded-4 wow fadeInUp" data-wow-delay=".4s">
                            <h3 class="h3 mb-4 fw-bold">System Requirements (v2.1+)</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-brands fa-php me-2"></i> PHP</span>
                                    <span class="text-white">8.1 - 8.3+</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-server me-2"></i> Web Server</span>
                                    <span class="text-white">Apache / Nginx</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-database me-2"></i> Database</span>
                                    <span class="text-white">MySQL 5.7+ / MariaDB</span>
                                </li>
                                <li class="mb-0 d-flex justify-content-between">
                                    <span><i class="fa-solid fa-code-branch me-2"></i> Development</span>
                                    <span class="text-white">Local (MAMP/XAMPP)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="pe-lg-5 wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="h3 fw-bold mb-3">Getting Started</h3>
                            <p>
                                A standard Linux-based hosting solution (LAMP stack) is usually all you need.
                                While many hosts offer "one-click" installers, we recommend a manual installation
                                for production environments to ensure maximum security and customizability.
                            </p>
                            <a href="https://docs.zen-cart.com/user/first_steps/server_requirements/" class="theme-btn mt-3">
                                View Full Server Requirements
                                <i class="fa-solid fa-chevron-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section section-padding bg-2">
        <div class="container-wrapper">
            <div class="container">
                <div class="testimonial-wrapper fix">
                    <div class="container">
                        <div class="section-title-wrapper">
                            <div class="row d-flex align-items-center">
                                <div class="col-xl-6">
                                    <div class="section-title">
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">What our users say?</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="slider-arrow-button text-end wow fadeInUp" data-wow-delay=".9s">
                                        <button data-slider-prev="#testimonialSliderTwo"
                                            class="slider-arrow arrowPrev" aria-label="Previous testimonial"><i
                                                 class="fa-sharp fa-solid fa-chevron-left"></i></button>
                                        <button data-slider-next="#testimonialSliderTwo"
                                            class="slider-arrow arrowNext" aria-label="Next testimonial"><i
                                                class="fa-sharp fa-solid fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-area testimonialSliderTwo">
                            <div class="swiper gt-slider" id="testimonialSliderTwo"
                                data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                    alt="icon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                         alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                                         alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                         alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                                         alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                         alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                                         alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                         alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                                         alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="assets/images/profile_1.jpg"
                                                         alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h3>John Doe</h3>
                                                    <p class="text">Team Leader</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <ul class="star-wrapper">
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                    <li><img src="assets/images/icon/star.svg" alt="icon"></li>
                                                </ul>
                                                <p class="desc">There are many variations of passages of Lorem Ipsum
                                                    available,a but
                                                    chiropractor like majority have a suffered alteration in some form,
                                                    by injected humour,</p>
                                            </div>
                                            <div class="quote-icon"><img src="assets/images/icon/quoteIcon.svg"
                                                                         alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="openSourceModal" tabindex="-1" aria-labelledby="openSourceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h3 class="modal-title h4 fw-bold" id="openSourceModalLabel">The Power of Open Source</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3 pb-4 px-4">
                    <p class="mb-4">
                        Unlike "rented" SaaS platforms (like Shopify or BigCommerce), Zen Cart is entirely open-source. This means you have full access to the underlying software, giving you and your developers the absolute freedom to customize and enhance how your store works.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold text-theme"><i class="fa-solid fa-ban me-2"></i>Zero Monthly Fees</h4>
                            <p class="text-muted small">You will never pay a monthly subscription just to keep your store online, and we don't take a percentage of your sales.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold text-theme"><i class="fa-solid fa-database me-2"></i>Total Ownership</h4>
                            <p class="text-muted small">You host the software. You own the database. Your customer lists, orders, and products can never be locked behind a paywall.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold text-theme"><i class="fa-solid fa-code me-2"></i>Limitless Customization</h4>
                            <p class="text-muted small">Because the code is open, you aren't restricted by arbitrary "platform limits." If you can dream it, you or a developer can build it into Zen Cart.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold text-theme"><i class="fa-solid fa-users me-2"></i>Community Driven</h4>
                            <p class="text-muted small">Backed by thousands of store owners and developers who constantly create free plugins, templates, and security updates.</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 bg-light rounded-bottom d-flex justify-content-between align-items-center">
                    <a href="https://opensource.com/resources/what-open-source" target="_blank" rel="noopener noreferrer" class="theme-btn" style="padding: 10px 24px;">
                        Learn More <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                    </a>
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Got it</button>
                </div>

            </div>
        </div>
    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>