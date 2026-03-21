<?php
$meta_description = 'Official site for the popular Zen Cart e-commerce shopping cart software.';
$meta_tag = 'Zen Cart™ - Putting the dream of your own business within reach of anyone!';
$meta_page = 'Download Zen Cart Templates';
$meta_title = $meta_page . ' | ' . $meta_tag;

// Load templates data
$xml_file = 'includes/templates.xml';
$templates = [];

if (file_exists($xml_file)) {
    $templates = simplexml_load_file($xml_file);
}

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
                            <a href="index.php">Home<span class="slash">/</span></a>Download Zen Cart Templates
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="template-header pt-100 pb-50">
        <div class="container text-center">
            <h1 class="title">Zen Cart Templates</h1>
            <p class="section-desc mx-auto my-3" style="max-width: 600px;">
                Discover beautiful, responsive templates to kickstart your online store. Browse our collection of free and premium themes built by the community.
            </p>
        </div>
    </section>

    <section class="template-grid pb-100">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <div class="button-group filter-button-group mb-3" data-filter-group="price">
                        <span class="fw-bold me-3">Price:</span>
                        <button class="btn btn-outline-dark active" data-filter="">All Prices</button>
                        <button class="btn btn-outline-dark" data-filter=".free">Free</button>
                        <button class="btn btn-outline-dark" data-filter=".paid">Premium</button>
                    </div>

                    <div class="button-group filter-button-group" data-filter-group="version">
                        <span class="fw-bold me-3">Version:</span>
                        <button class="btn btn-outline-dark active" data-filter="">All Versions</button>
                        <button class="btn btn-outline-dark" data-filter=".v1-5-8">v1.5.8</button>
                        <button class="btn btn-outline-dark" data-filter=".v2-0-0">v2.0.0</button>
                        <button class="btn btn-outline-dark" data-filter=".v2-1-0">v2.1.0</button>
                        <button class="btn btn-outline-dark" data-filter=".v2-2-0">v2.2.0</button>
                    </div>
                </div>
            </div>

            <div class="row template-grid-container">

                <?php if (!empty($templates)) { ?>
                    <?php
                    // Delay counter for the WOW.js staggered fade-in animation
                    $delay = 0.2;
                    ?>

                    <?php foreach ($templates->template as $tpl) { ?>
                        <?php
                        // Determine Price Class ('free' or 'paid')
                        $priceClass = ($tpl->price == 'Free') ? 'free' : 'paid';

                        // Determine Version Classes (Converts "Zen Cart 1.5.8, 2.0.0" to "v1-5-8 v2-0-0")
                        $compatString = str_replace('Zen Cart ', '', (string)$tpl->compatibility); // Remove text
                        $versions = explode(',', $compatString); // Split by comma
                        $versionClasses = array_map(function($v) {
                            return 'v' . str_replace('.', '-', trim($v)); // Convert "1.5.8" to "v1-5-8"
                        }, $versions);
                        $versionClassString = implode(' ', $versionClasses);
                        ?>

                        <div class="col-lg-4 col-md-6 mb-4 template-item <?php echo $priceClass; ?> <?php echo $versionClassString; ?>" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="template-card card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden template-img-wrapper">
                                    <img src="<?php echo $tpl->image_main; ?>" alt="<?php echo $tpl->name; ?>" class="card-img-top img-fluid" style="transition: transform 0.4s ease;">

                                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 template-overlay">
                                        <button class="theme-btn view-template-btn" data-id="<?php echo $tpl['id']; ?>">View Details</button>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h2 class="h5 mb-1"><?php echo $tpl->name; ?></h2>
                                    <span class="<?php echo $tpl->price_class; ?> fw-bold"><?php echo $tpl->price; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php $delay += 0.2; ?>
                    <?php } ?>

                <?php } else { ?>
                    <div class="col-12 text-center py-5">
                        <p class="fs-4 text-muted">No templates are currently available. Check back soon!</p>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <section class="theme-bounty-section section-padding bg-gradient-1 border-top">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-6 pe-lg-5 wow fadeInUp" data-wow-delay=".2s">
                    <div class="subtitle text-uppercase text-theme fw-bold mb-2">Frontend & UI/UX</div>
                    <h2 class="title fw-bold mb-3">Calling All Theme Designers</h2>
                    <p class="mb-4">
                        Zen Cart boasts one of the most powerful backend e-commerce engines in the world, but our merchants are constantly hungry for modern, high-converting frontend designs.
                    </p>
                    <p class="mb-4">
                        Whether you build premium commercial templates or free open-source themes, we want to showcase your work. Partner with us, and we will feature your agency right here, putting your designs directly in front of tens of thousands of active store owners looking to upgrade.
                    </p>

                    <div class="checklist-wrapper style1 mb-5">
                        <ul class="row list-unstyled mb-0">
                            <li class="col-sm-6 mb-3 d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-orange-color me-2 mt-1"></i>
                                <span class="text-dark fw-bold">Keep 100% of your sales</span>
                            </li>
                            <li class="col-sm-6 mb-3 d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-orange-color me-2 mt-1"></i>
                                <span class="text-dark fw-bold">Featured Partner status</span>
                            </li>
                            <li class="col-sm-6 mb-3 d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-orange-color me-2 mt-1"></i>
                                <span class="text-dark fw-bold">Massive built-in audience</span>
                            </li>
                            <li class="col-sm-6 mb-3 d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-orange-color me-2 mt-1"></i>
                                <span class="text-dark fw-bold">No marketplace tax</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://www.zen-cart.com/sendmessage.php" class="theme-btn">
                        Submit a Theme Portfolio <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="card border-0 shadow-lg p-5 rounded-4 bg-dark text-white position-relative overflow-hidden h-100">
                        <i class="fa-brands fa-css3-alt position-absolute" style="font-size: 15rem; right: -30px; bottom: -30px; opacity: 0.05; color: #fff;"></i>

                        <div class="d-flex align-items-center mb-4 position-relative z-1">
                            <div class="icon-box style1 bg-white shadow-sm text-dark me-3">
                                <i class="fa-solid fa-palette fa-2x text-theme"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0 text-white">Design for Zen Cart</h3>
                        </div>

                        <p class="text-white-75 mb-4 position-relative z-1">
                            Our templating architecture completely abstracts the look-and-feel from the core PHP logic. If you know HTML, CSS and basic Javascript, you can build stunning Zen Cart templates without ever needing to touch the database.
                        </p>

                        <div class="bg-white bg-opacity-10 rounded-3 p-4 position-relative z-1 mt-auto border border-secondary">
                            <h4 class="h6 text-white text-uppercase fw-bold mb-3">High-Demand Styles:</h4>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-white text-dark py-2 px-3 rounded-pill border border-white">Mobile-First</span>
                                <span class="badge bg-white text-dark py-2 px-3 rounded-pill border border-white">Dark Mode UI</span>
                                <span class="badge bg-white text-dark py-2 px-3 rounded-pill border border-white">Mega Menus</span>
                                <span class="badge bg-white text-dark py-2 px-3 rounded-pill border border-white">SaaS Minimalist</span>
                                <span class="badge bg-white text-dark py-2 px-3 rounded-pill border border-white">Bootstrap 5</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="modal fade" id="templateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0" id="templateModalBody">
                </div>
            </div>
        </div>
    </div>

    <?php require 'includes/footer.php'; ?>

</body>

</html>