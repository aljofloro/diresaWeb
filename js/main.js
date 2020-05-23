/* ===================================================================
 * Philosophy - Main JS
 *
 * ------------------------------------------------------------------- */

(function($) {
   /* Back to Top
    * ------------------------------------------------------ */
    var clBackToTop = function() {
        
        var pxShow      = 500,
            goTopButton = $(".go-top")

        // Show or hide the button
        if ($(window).scrollTop() >= pxShow) goTopButton.addClass('link-is-visible');

        $(window).on('scroll', function() {
            if ($(window).scrollTop() >= pxShow) {
                if(!goTopButton.hasClass('link-is-visible')) goTopButton.addClass('link-is-visible')
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

$(document).ready(function()
{
	"use strict";

	$(".moreBox").slice(0, 3).show();
		if ($(".blogBox:hidden").length != 0) {
		$("#loadMore").show();
		}   
		$("#loadMore").on('click', function (e) {
		e.preventDefault();
		$(".moreBox:hidden").slice(0, 6).slideDown();
		if ($(".moreBox:hidden").length == 0) {
			$("#loadMore").fadeOut('slow');
		}
	});
	
	$(".moreBoxaccesos").slice(0, 3).show();
		if ($(".blogBoxaccesos:hidden").length != 0) {
		$("#loadMoreaccesos").show();
		}   
		$("#loadMoreaccesos").on('click', function (e) {
		e.preventDefault();
		$(".moreBoxaccesos:hidden").slice(0, 6).slideDown();
		if ($(".moreBoxaccesos:hidden").length == 0) {
			$("#loadMoreaccesos").fadeOut('slow');
		}
	});


	$('#example').DataTable();
	initPartnersSlider();
	initPartnersSlider2()

	function initPartnersSlider2()
	{
		if($('.partners_slider_partners').length)
		{
			var partnersSlider = $('.partners_slider_partners');
			partnersSlider.owlCarousel(
			{
				loop:true,
				autoplay:true,
				smartSpeed:1200,
				nav:false,
				dots:false,
				responsive:
				{
					0:
					{
						items:1
					},
					480:
					{
						items:2
					},
					720:
					{
						items:3
					},
					991:
					{
						items:4
					},
					1199:
					{
						items:6
					}
				}
			});
		}
	}
	function initPartnersSlider()
	{
		if($('.partners_slider').length)
		{
			var partnersSlider = $('.partners_slider');
			partnersSlider.owlCarousel(
			{
				loop:true,
				autoplay:true,
				smartSpeed:1200,
				nav:false,
				dots:false,
				responsive:
				{
					0:
					{
						items:1
					},
					480:
					{
						items:2
					},
					720:
					{
						items:3
					},
					991:
					{
						items:4
					},
					1199:
					{
						items:4
					}
				}
			});
		}
	}

});