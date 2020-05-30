/* ===================================================================
 * Philosophy - Main JS
 *
 * ------------------------------------------------------------------- */

(function ($) {
    /* Back to Top
     * ------------------------------------------------------ */
    var clBackToTop = function () {

        var pxShow = 500,
            goTopButton = $(".go-top")

        // Show or hide the button
        if ($(window).scrollTop() >= pxShow) goTopButton.addClass('link-is-visible');

        $(window).on('scroll', function () {
            if ($(window).scrollTop() >= pxShow) {
                if (!goTopButton.hasClass('link-is-visible')) goTopButton.addClass('link-is-visible')
            } else {
                goTopButton.removeClass('link-is-visible')
            }
        });
    };


    /* Initialize
     * ------------------------------------------------------ */
    (function ssInit() {
        clBackToTop();
    })();

})(jQuery);

$(document).ready(function () {

    /** INIT noticias Carousel */
    $("#noticialCarousel").owlCarousel({
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    /** INIT de carousel partners */
    $("#partnerDiresa").owlCarousel({
        loop:true,
        autoplay: true,
        nav: false,
        dots: false,
        margin:10,
        responsive:{
            0:
            {
                items: 1,
                center: true

            },
            480:
            {
                items: 2,
                center: true
            },
            720:
            {
                items: 3,
                center: true
            },
            991:
            {
                items: 4,
                center: true
            },
            1199:
            {
                items: 6,
                loop:false,
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
        responsive:
        {
            0:
            {
                items: 1
            },
            480:
            {
                items: 2
            },
            720:
            {
                items: 3
            },
            991:
            {
                items: 4
            }
        }
    });

    /*BOTON DE + DE ACCESOS*/
    $("#botonclases").click(function () {
        $("#collapse1").removeClass("col-sm-none");
        $("#collapse2").removeClass("col-sm-none");
        $("#collapse3").removeClass("col-sm-none");
        $("#collapse4").removeClass("col-sm-none");
        $("#collapse5").removeClass("col-sm-none");
        $("#btn_context").addClass("d-none");
    });
    /*BOTON DE + DOCUMENTOS*/
    $("#botondoc").click(function () {
        $("#collapsedoc1").removeClass("col-sm-none");
        $("#collapsedoc2").removeClass("col-sm-none");
        $("#collapsedoc3").removeClass("col-sm-none");
        $("#collapsedoc4").removeClass("col-sm-none");
        $("#collapsedoc5").removeClass("col-sm-none");
        $("#btn_contextdoc").addClass("d-none");
    });

    /*TABLA DE CONVOCATORIAS*/
    $('#convocatoria').DataTable({
        "scrollX": true,
        "ordering": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
    /*TABLA GENERAL*/
    $('#example').DataTable({
        "ordering": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });


    /* DOCUMENTOS DE GESTION*/
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    
});