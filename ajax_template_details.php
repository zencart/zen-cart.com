<?php
// Make sure an ID was actually sent via the AJAX request
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo '<div class="alert alert-danger">Error: No template ID provided.</div>';
    exit;
}

$requested_id = htmlspecialchars($_GET['id']);

// Path to the XML file containing template data
$xml_file = 'includes/templates.xml';

if (!file_exists($xml_file)) {
    echo '<div class="alert alert-danger">Error: Template database not found.</div>';
    exit;
}

$xml = simplexml_load_file($xml_file);

// Use XPath to find the specific template by its ID attribute
$result = $xml->xpath("//template[@id='$requested_id']");

if (empty($result)) {
    echo '<div class="alert alert-warning">Template not found.</div>';
    exit;
}

// Get the first (and should be only) match
$template = $result[0];
?>

<div class="row p-3">
    <div class="col-lg-7 mb-4 mb-lg-0">

        <div class="d-flex justify-content-end align-items-center mb-2 gap-3 pe-2">
            <div class="gallery-prev" style="cursor: pointer; color: var(--theme); font-size: 1.1rem; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="gallery-next" style="cursor: pointer; color: var(--theme); font-size: 1.1rem; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

        <div class="swiper main-image-swiper mb-2" style="border-radius: 8px; overflow: hidden; position: relative;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo $template->image_main; ?>" class="img-fluid w-100" alt="<?php echo $template->name; ?> Preview">
                </div>
                <?php if (isset($template->gallery->image) && count($template->gallery->image) > 0) { ?>
                    <?php foreach ($template->gallery->image as $img) { ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $img; ?>" class="img-fluid w-100" alt="Gallery Preview">
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <?php if (isset($template->gallery->image) && count($template->gallery->image) > 0) { ?>
            <div class="swiper thumb-image-swiper mt-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="cursor: pointer;">
                        <img src="<?php echo $template->image_main; ?>" class="img-thumbnail w-100" style="height: 80px; object-fit: cover;">
                    </div>
                    <?php foreach ($template->gallery->image as $img) { ?>
                        <div class="swiper-slide" style="cursor: pointer;">
                            <img src="<?php echo $img; ?>" class="img-thumbnail w-100" style="height: 80px; object-fit: cover;">
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </div>

    <div class="col-lg-5">
        <h2 class="mb-2"><?php echo $template->name; ?></h2>
        <h4 class="<?php echo $template->price_class; ?> mb-3"><?php echo $template->price; ?></h4>

        <p><?php echo $template->description; ?></p>

        <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="fa-solid fa-user me-2 text-muted"></i> <strong>Author:</strong> <?php echo $template->author; ?></li>
            <li class="mb-2"><i class="fa-solid fa-code-branch me-2 text-muted"></i> <strong>Version:</strong> <?php echo $template->version; ?></li>
            <li class="mb-2"><i class="fa-solid fa-check me-2 text-muted"></i> <strong>Compatibility:</strong> <?php echo $template->compatibility; ?></li>
        </ul>

        <div class="d-grid gap-2">
            <a href="<?php echo $template->download_link; ?>" class="theme-btn text-center" target="_blank">
                <i class="fa-solid <?php echo ($template->price == 'Free') ? 'fa-download' : 'fa-cart-shopping'; ?> me-2"></i>
                <?php echo ($template->price == 'Free') ? 'Download Template' : 'Purchase Template'; ?>
            </a>

            <?php if (!empty($template->demo_link)) { ?>
                <a href="<?php echo $template->demo_link; ?>" target="_blank" class="theme-btn style2">
                    <i class="fa-solid fa-desktop me-2"></i> Live Demo
                </a>
            <?php } ?>
        </div>
    </div>
</div>