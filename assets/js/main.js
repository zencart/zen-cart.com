(function ($) {
    "use strict";

    $(document).ready(function () {
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "1199",
            meanExpand: ['<i class="far fa-plus"></i>'],
        });

        $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });

        $(".sidebar__toggle").on("click", function () {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        $(".body-overlay").on("click", function () {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");
            $(".body-overlay").removeClass("opened");
        });

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 250) {
                $("#header-sticky").addClass("sticky");
            } else {
                $("#header-sticky").removeClass("sticky");
            }
        });

        new WOW().init();

        function applyAnimationProperties() {
            $('[data-ani]').each(function () {
                var animationClass = $(this).data('ani');
                $(this).addClass(animationClass);
            });

            $('[data-ani-delay]').each(function () {
                var delay = $(this).data('ani-delay');
                $(this).css('animation-delay', delay);
            });
        }

        applyAnimationProperties();

        // Function to initialize Swiper
        function initializeSwiper(sliderContainer) {
            if (!sliderContainer.length) {
                console.warn('Swiper container not found.');
                return;
            }

            var sliderOptions = sliderContainer.data('slider-options') || {};

            var previousArrow = sliderContainer.find('.slider-prev');
            var nextArrow = sliderContainer.find('.slider-next');
            var paginationElement = sliderContainer.find('.slider-pagination');
            var numberedPagination = sliderContainer.find('.slider-pagination.pagi-number');

            var paginationStyle = sliderOptions['paginationType'] || 'bullets';
            var autoplaySettings = sliderOptions['autoplay'] || {
                delay: 6000,
                disableOnInteraction: false
            };

            // Conditional Navigation Object
            var navigation = undefined;
            if (nextArrow.length || previousArrow.length) {
                navigation = {
                    nextEl: nextArrow.length ? nextArrow.get(0) : null,
                    prevEl: previousArrow.length ? previousArrow.get(0) : null,
                };
            }

            // Conditional Pagination Object
            var pagination = undefined;
            if (paginationElement.length) {
                pagination = {
                    el: paginationElement.get(0),
                    type: paginationStyle,
                    clickable: true,
                    renderBullet: function (index, className) {
                        var bulletNumber = index + 1;
                        var formattedNumber = bulletNumber < 10 ? '0' + bulletNumber : bulletNumber;
                        if (numberedPagination.length) {
                            return '<span class="' + className + ' number">' + formattedNumber + '</span>';
                        } else {
                            return '<span class="' + className + '" aria-label="Go to Slide ' + formattedNumber + '"></span>';
                        }
                    },
                };
            }

            var defaultSwiperConfig = {
                slidesPerView: sliderOptions['slidesPerView'] || 1,
                spaceBetween: sliderOptions['spaceBetween'] || 24,
                loop: sliderOptions['loop'] !== false,
                speed: sliderOptions['speed'] || 1000,
                initialSlide: sliderOptions['initialSlide'] || 0,
                centeredSlides: !!sliderOptions['centeredSlides'],
                effect: sliderOptions['effect'] || 'slide',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: autoplaySettings,
                navigation: navigation,
                pagination: pagination,
                mousewheel: sliderOptions['mousewheel'] || false,
                on: {
                    slideChange: function (swiper) {
                        if (swiper && swiper.params && swiper.params.mousewheel) {
                            setTimeout(function () {
                                swiper.params.mousewheel.releaseOnEdges = false;
                            }, 500);
                        }
                    },
                    reachEnd: function (swiper) {
                        if (swiper && swiper.params && swiper.params.mousewheel) {
                            setTimeout(function () {
                                swiper.params.mousewheel.releaseOnEdges = true;
                            }, 750);
                        }
                    }
                }
            };

            // Deep Merge User Options with Default Config
            var finalConfig = $.extend(true, {}, defaultSwiperConfig, sliderOptions);

            // Initialize Swiper Instance
            return new Swiper(sliderContainer.get(0), finalConfig);
        }

        // Initialize Swipers on page load
        var swiperInstances = [];
        $('.gt-slider').each(function () {
            var sliderContainer = $(this);
            var swiperInstance = initializeSwiper(sliderContainer);
            swiperInstances.push(swiperInstance);
        });

        // Bootstrap tab show event
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            var targetTab = $(e.target).attr('href');
            $(targetTab).find('.et-slider').each(function () {
                var sliderContainer = $(this);
                if (!sliderContainer[0].swiper) {
                    initializeSwiper(sliderContainer);
                } else {
                    sliderContainer[0].swiper.update();
                }
            });
        });

        // Add click event handlers for external slider arrows based on data attributes
        $('[data-slider-prev], [data-slider-next]').on('click', function () {
            var targetSliderSelector = $(this).data('slider-prev') || $(this).data('slider-next');
            var targetSlider = $(targetSliderSelector);

            if (targetSlider.length) {
                var swiper = targetSlider[0].swiper;

                if (swiper) {
                    if ($(this).data('slider-prev')) {
                        swiper.slidePrev();
                    } else {
                        swiper.slideNext();
                    }
                }
            }
        });

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 20) {
                $("#back-top").addClass("show");
            } else {
                $("#back-top").removeClass("show");
            }
        });

        $(document).on('click', '#back-top', function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });

        if ($(".popup-video").length) {
            $(".popup-video").magnificPopup({
                type: "iframe",
                removalDelay: 260,
                mainClass: 'mfp-zoom-in',
            });
        }

        if ($(".img-popup").length) {
            $(".img-popup").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        }

        if ($('.progress-bar').length) {
            $('.progress-bar').each(function () {
                var $this = $(this);
                var progressWidth = $this.attr('style').match(/width:\s*(\d+)%/)[1] + '%';

                $this.waypoint(function () {
                    $this.css({
                        '--progress-width': progressWidth,
                        'animation': 'animate-positive 1.8s forwards',
                        'opacity': '1'
                    });
                }, {offset: '75%'});
            });
        }

        $(".accordion-button").on("click", function () {

            var targetSectionIndex = $(this).data("bs-target");
            console.log("Target Section Index:", targetSectionIndex);

            if (targetSectionIndex === '#faq1')
                $('#deploySteps').attr('src', 'assets/images/steps/step_1.jpg');
            else if (targetSectionIndex === '#faq2')
                $('#deploySteps').attr('src', 'assets/images/steps/step_2.jpg');
            else if (targetSectionIndex === '#faq3')
                $('#deploySteps').attr('src', 'assets/images/steps/step_3.jpg');
            else
                $('#deploySteps').attr('src', 'assets/images/steps/step_4.jpg');

        });

        $(window).on('load', function() {
            // Accessibility - give the main MeanMenu hamburger toggle a discernible name
            $('.meanmenu-reveal').attr('aria-label', 'Toggle mobile menu');

            // Accessibility - give the submenu '+' drop-down toggles a discernible name (if applicable)
            $('.mean-expand').attr('aria-label', 'Toggle submenu');
        });

        // Modal window for templates
        $('.view-template-btn').on('click', function(e) {
            e.preventDefault();

            // Get the ID of the template clicked
            var templateId = $(this).data('id');

            // Show the modal instantly with a loading spinner
            $('#templateModalBody').html(`
            <div class="text-center py-5">
                <div class="spinner-border text-primary" role="status"></div>
                <p class="mt-2">Loading template details...</p>
            </div>
        `);
            $('#templateModal').modal('show');

            // Fetch the template details
            $.ajax({
                url: 'ajax_template_details.php',
                type: 'GET',
                data: { id: templateId },
                success: function(response) {
                    // Replace the spinner with the actual HTML from the server
                    $('#templateModalBody').html(response);

                    // Initialize Swiper AFTER the HTML is injected into the modal
                    // We use setTimeout to give the browser 50ms to render the DOM first
                    setTimeout(function() {
                        // Initialize the Thumbnail Swiper
                        var thumbSwiper = new Swiper('.thumb-image-swiper', {
                            spaceBetween: 10,
                            slidesPerView: 4, // Show 4 thumbnails at a time
                            freeMode: true,
                            watchSlidesProgress: true,
                        });

                        // Initialize the Main Swiper and link it to the Thumbs
                        var mainSwiper = new Swiper('.main-image-swiper', {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: '.gallery-next', // Use to custom arrow
                                prevEl: '.gallery-prev', // Use to custom arrow
                            },
                            thumbs: {
                                swiper: thumbSwiper
                            }
                        });
                    }, 50);
                },
                error: function() {
                    $('#templateModalBody').html('<div class="alert alert-danger">Error loading template. Please try again.</div>');
                }
            });
        });

        // Initialize Isotope on the grid
        if ($('.template-grid-container').length > 0) {
            var $grid = $('.template-grid-container').isotope({
                itemSelector: '.template-item',
                layoutMode: 'fitRows' // Maintains the Bootstrap grid structure
            });

            // Recalculate the grid layout every time an image finishes loading
            $grid.imagesLoaded().progress(function() {
                $grid.isotope('layout');
            });

            // Store active filters in an object
            var filters = {};

            // Listen for filter button clicks
            $('.filter-button-group').on('click', 'button', function() {
                var $this = $(this);

                // Get the group (price or version)
                var $buttonGroup = $this.parents('.button-group');
                var filterGroup = $buttonGroup.attr('data-filter-group');

                // Set the filter for this specific group
                filters[filterGroup] = $this.attr('data-filter');

                // Combine the filters (e.g. ".free" + ".v2-0-0" = ".free.v2-0-0")
                var filterValue = concatValues(filters);

                // Run Isotope filter
                $grid.isotope({ filter: filterValue });

                // Update active styling on buttons
                $buttonGroup.find('.active').removeClass('active');
                $this.addClass('active');
            });

            // Helper function to combine filter values
            function concatValues(obj) {
                var value = '';
                for (var prop in obj) {
                    value += obj[prop];
                }
                return value;
            }
        }

    }); // End Document Ready Function

})(jQuery);

