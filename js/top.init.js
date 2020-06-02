(function($) {
    /* Back to Top
     * ------------------------------------------------------ */
    var clBackToTop = function() {

        var pxShow = 500,
            goTopButton = $(".go-top")

        // Show or hide the button
        if ($(window).scrollTop() >= pxShow) goTopButton.addClass('link-is-visible');

        $(window).on('scroll', function() {
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