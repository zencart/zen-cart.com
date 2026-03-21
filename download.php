<?php
$meta_description = 'Official site for the popular Zen Cart e-commerce shopping cart software.';
$meta_tag = 'Zen Cart™ - Putting the dream of your own business within reach of anyone!';
$meta_page = 'Download Zen Cart';
$meta_title = $meta_page . ' | ' . $meta_tag;

require 'includes/html_header.php';
?>

<body>

    <?php require 'includes/header.php'; ?>

    <div class="breadcrumb-section fix">
        <div class="breadcrumb-container-wrapper">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <div class="links">
                            <a href="index.php">Home<span class="slash">/</span></a>Download Zen Cart
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="advantage-section fix">
        <div class="advantage-container-wrapper style1">
            <div class="container">
                <div class="advantage-wrapper style1 section-padding">
                    <div class="container">
                        <div class="row gy-5 d-flex align-items-center">
                            <div class="col-xl-8 col-lg-8">
                                <div class="advantage-content">
                                    <div class="section-title">
                                        <h1 class="title">You're making a great choice!</h1>
                                        <p class="section-desc">
                                            Just one step away from being independent with your online store!
                                        </p>
                                    </div>
                                    <div class="checklist-wrapper style1 wow fadeInUp">
                                        <ul class="checklist style1">
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                No monthly cost for license
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Unlimited freedom to customize your store
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                We are trusted all over the world
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn wow fadeInUp" data-wow-delay=".6s" href="https://github.com/zencart/zencart/archive/refs/tags/v2.1.0.zip">
                                        Download Zen Cart <span class="version-badge">2.1.0</span>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>

                                    <p class="mt-3">SHA256: d36bde8d7c79a260c1f268cb7de99d229381daba6dfed383759138c428985542<br>
                                        Tip: Use the SHA checksum shown to <a class="text-link" href="https://docs.zen-cart.com/user/installing/validate_sha/" target="_blank">verify file integrity</a></p>

                                    <p class="mt-5"><a class="text-link" href="https://github.com/zencart/zencart/releases" target="_blank">Click here to download older versions</a></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="advantage-images">
                                    <img src="assets/images/zencart_box3.jpg" alt="Download Zen Cart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage-section fix bg-gradient-1">
        <div class="container-wrapper">
            <div class="container">
                <div class="advantage-wrapper section-padding">
                    <div class="container">
                        <div class="row mb-5 text-center justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                    <h2 class="title">What's Next</h2>
                                    <p class="section-desc">Learn how to get your 10-Minute Deployment</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="checklist-wrapper wow fadeInUp" data-wow-delay=".4s">
                                    <ul class="checklist">
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Extract & Upload:</strong> Unzip the downloaded file and upload the contents to your server's public directory (e.g., public_html) via SFTP or your hosting file manager.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Prepare the Database:</strong> Create a new, empty MySQL or MariaDB database and user in your hosting control panel.</li>
                                        <li><i class="fa-solid fa-circle-check"></i> <strong>Run the Installer:</strong> Navigate to your store's URL in any web browser. The built-in zc_install wizard will automatically launch and guide you through the final database connection and admin setup.</li>
                                    </ul>
                                </div>

                                <div class="details-box mt-5">
                                    <h2 class="subtitle wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        Need a detailed walkthrough?
                                    </h2>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <p class="text wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                Head over to our <a class="text-link" href="https://docs.zen-cart.com/release/1.readme_installation" target="_blank">Official Installation Guide</a> for a step-by-step installation guide, server optimization tips and security best practices to ensure your store is rock-solid from day one.
                                            </p>
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

    <section class="why-section section-padding bg-2">
        <div class="container-wrapper">
            <div class="container">
                <div class="row mb-5 text-center justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="title">Technical Information</h2>
                            <p class="section-desc">What do I need to run Zen Cart®?</p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 align-items-center">
                    <div class="col-lg-7 pe-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="h4 fw-bold mb-3">Server Compatibility</h3>
                        <p class="mb-3">
                            The lowest level hosting solution that offers modern PHP, a web server (like Apache or Nginx), and a MySQL database is usually sufficient to get started.
                        </p>
                        <p class="mb-4">
                            While many hosting companies provide a "one-click" Zen Cart® auto-installer for quick tryouts, we highly recommend performing a manual installation for live production environments. This ensures you have complete control over your security and file structure.
                        </p>
                        <a href="https://docs.zen-cart.com/user/first_steps/server_requirements/" target="_blank" class="theme-btn style2">
                            View Detailed Server Requirements
                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </a>
                    </div>

                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="card border-0 shadow-sm bg-dark text-white p-4 rounded-4">
                            <h4 class="h5 mb-4 fw-bold">Minimum Specs (v2.1+)</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-brands fa-php text-orange-color me-2"></i> PHP</span>
                                    <span>8.1 - 8.3+</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between border-bottom border-secondary pb-2">
                                    <span><i class="fa-solid fa-server text-orange-color me-2"></i> Web Server</span>
                                    <span>Apache / Nginx</span>
                                </li>
                                <li class="mb-0 d-flex justify-content-between">
                                    <span><i class="fa-solid fa-database text-orange-color me-2"></i> Database</span>
                                    <span>MySQL 5.7+ / MariaDB</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="community-section section-padding bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden wow fadeInUp" data-wow-delay=".2s">
                        <div class="row g-0">
                            <div class="col-md-4 bg-dark d-flex align-items-center justify-content-center p-5">
                                <i class="fa-solid fa-users-gear fa-5x text-orange-color"></i>
                            </div>
                            <div class="col-md-8 p-5 bg-white">
                                <h3 class="h3 fw-bold mb-3">Don't build in isolation!</h3>
                                <p class="mb-4 text-muted">
                                    Whether you need help configuring your first payment gateway, styling your template, or discovering hidden features, our community has your back! Join the official Zen Cart forum to access over 20 years of collective e-commerce wisdom, tips and tricks from thousands of active store owners and developers.
                                </p>
                                <a href="https://www.zen-cart.com/forum.php" target="_blank" class="theme-btn">
                                    Join the Official Forum
                                    <i class="fa-solid fa-comments ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'includes/footer.php'; ?>

</body>

</html>