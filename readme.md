# Zen Cart - Official Website - REVAMP SUGGESTION

This is the modern, responsive front-end promotional website for [Zen Cart](https://www.zen-cart.com/), the free, open-source e-commerce platform. It is designed to showcase platform features, provide software downloads, and host a dynamic template and plugin directory.

* **Core:** PHP 8.x, HTML5, CSS3
* **Framework:** Bootstrap 5.x
* **JavaScript:** jQuery 3.7.1
* **Libraries Used:**
  * [Isotope](https://isotope.metafizzy.co/) (Grid filtering)
  * [imagesLoaded](https://imagesloaded.desandro.com/) (Grid layout stabilization)
  * [Swiper](https://swiperjs.com/) (Touch sliders & galleries)
  * [Magnific Popup](https://dimsemenov.com/plugins/magnific-popup/) (Lightboxes)
  * [WOW.js](https://wowjs.uk/) (Scroll animations)

# How to Add a New Template

To add a new template to the directory, simply edit the templates.xml file. The grid and modal popups will automatically update.
XML file structure
```text
<template id="unique-id">
    <name>Theme Name</name>
    <price>Free</price> <price_class>text-success</price_class> <description>Short description of the theme...</description>
    <author>Designer Name</author>
    <version>1.0.0</version>
    <compatibility>Zen Cart 2.1.0, 2.2.0</compatibility>
    <image_main>assets/images/templates/large-img.jpg</image_main>
    <gallery>
        <image>assets/images/templates/gallery-1.jpg</image>
    </gallery>
    <download_link>[https://link-to-download.com](https://link-to-download.com)</download_link>
    <demo_link>[https://link-to-demo.com](https://link-to-demo.com)</demo_link>
</template>
```
NOTE: the `compatibility` field is parsed for Isotope filters.

# Credits
**Sources Used:** pexels.com

Special thanks to @dbltoe for his assistance and involvement to address accessibility.

# License

Content and Graphics Copyright (c) 2003 - 2026 Zen Ventures, LLC - all rights reserved. Zen Cart® is a Registered Trademark of Zen Ventures, LLC.