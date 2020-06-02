$(document).ready(function() {

    /** INIT Ddel BAnner */
    $("#main-slider").owlCarousel({
        loop: true,
        dots: true,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });

    /** INIT noticias Carousel */
    $("#noticialCarousel").owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    /** INIT de carousel partners */
    $("#partnerDiresa").owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        dots: false,
        margin: 10,
        responsive: {
            0: {
                items: 1,
                center: true

            },
            480: {
                items: 2,
                center: true
            },
            720: {
                items: 3,
                center: true
            },
            991: {
                items: 4,
                center: true
            },
            1199: {
                items: 6,
                loop: false,
                autoplay: false
            }
        }
    });

    /** INIT de carousel partners2 - enlaces */
    $("#enlacesDiresa").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1200,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            720: {
                items: 3
            },
            991: {
                items: 4
            }
        }
    });
});