<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c17b0004ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Apartment Booking</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>



    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

    {{-- Isotopes --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            var customContainer = jQuery(".iso-container");
            customContainer.isotope({
                filter: ".item1",
                transitionDuration: "2s",
                animationOptions: {
                    duration: 7500,
                    queue: false,
                },

                layoutMode: "fitRows",
                fitRows: {
                    gutter: 0,
                },
            });

            jQuery("#custom-filter li:first-child > a").addClass("is-checked");

            jQuery("#custom-filter a").click(function() {
                jQuery("#custom-filter .is-checked").removeClass("is-checked");
                jQuery(this).addClass("is-checked");

                var customSelector = jQuery(this).attr("data-filter");
                customContainer.isotope({
                    filter: customSelector,
                    transitionDuration: "1.5s",
                    animationOptions: {
                        duration: 7500,
                        queue: false,
                    },
                    layoutMode: "fitRows",
                    fitRows: {
                        gutter: 0,
                    },
                });
                return false;
            });
        });
    </script>

    {{-- Testimonial --}}
    <script>
        var transitionSpeed = 400;
        var sliderWidth = 500;
        var testimonialCount = 5;
        var testimonialImages = document.getElementById("images").children;
        var testimonials = document.getElementById("testimonials-wrapper");
        var testimonialsStyles = window.getComputedStyle(testimonials);

        function disableEnable(elementId) {
            var element = document.getElementById(elementId);
            element.disabled = true;
            setTimeout(function() {
                element.disabled = false;
            }, transitionSpeed);
        }

        function moveRight() {
            var left = parseInt(testimonialsStyles.getPropertyValue('left'));
            if (left > -(testimonialCount - 1) * sliderWidth) {
                var newleft = left - sliderWidth + 'px';
                testimonials.style.left = newleft;
                disableEnable("right");
                for (var counter = 0; counter < (testimonialImages.length - 1); counter += 1) {
                    if (testimonialImages[counter].className.indexOf("active-image") !== -1) {
                        testimonialImages[counter].className = "image";
                        testimonialImages[counter].nextElementSibling.className += " active-image";
                        return;
                    }
                }
            }
        }

        function moveLeft() {
            var left = parseInt(testimonialsStyles.getPropertyValue('left'));
            if (left < 0) {
                var newleft = left + sliderWidth + 'px';
                testimonials.style.left = newleft;
                disableEnable("left");
                for (var counter = 1; counter < testimonialImages.length; counter += 1) {
                    if (testimonialImages[counter].className.indexOf("active-image") !== -1) {
                        testimonialImages[counter].className = "image";
                        testimonialImages[counter].previousElementSibling.className += " active-image";
                        return;
                    }
                }
            }
        }

        function showTestimonialByImage(imagePixelValue) {
            var allImages = event.target.parentElement.children;
            for (var counter = 0; counter < allImages.length; counter += 1) {
                allImages[counter].className = "image";
            }
            event.target.className += " active-image";
            var testimonials = document.getElementById("testimonials-wrapper");
            testimonials.style.left = imagePixelValue;
            disableEnable("left");
            disableEnable("right");
        }
    </script>



</body>

</html>
