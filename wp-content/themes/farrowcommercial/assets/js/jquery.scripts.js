// Homepage Menu Slideout

var slided = false;

function homepageSlideMenu() {
	var elem = jQuery('.header .navigation .menu-mobile-menu-container');
	if (slided) {
		elem.clearQueue().animate({
			left: -(elem.width() + 30)
		}, 400);
		console.log('slide in');
		slided = false;
	} else {
		elem.clearQueue().animate({
			left: 0
		}, 300);
		console.log('slide out');
		slided = true;
	}
}



jQuery(document).mouseup(function (e) {

    var container = jQuery('.header .navigation .menu-main-menu-container');
    var iframe = jQuery('.iframe-modal');
    var button = jQuery('.mobile-button a i');



    if (!container.is(e.target) && !button.is(e.target) && container.has(e.target).length === 0 && slided) {
        homepageSlideMenu();
    }

	if (!iframe.is(e.target)) {
		jQuery(function($){
			$('.iframe-modal-container').fadeOut(600, function() {
				$('.iframe-modal-container').remove();
			});
        });
    }

});



jQuery(function($) {



	// Make Two Sibling Elements the Same Height

	function sameHeight (left, right) {

		if ( $(window).width() > 980 ) {

			if (left.height() >= right.height()) {

				right.height(left.height());

			} else {

				left.height(right.height());

			}
		}
	}


	// Open News & Media items in modal iframe

	function openInModal (src) {
		if ( $('.iframe-modal').length > 0 ) {
			$('.iframe-modal').remove();
		}
		var iframe = "<iframe class='iframe-modal' src='" + src + "'></iframe>";
		var output = "<div class='iframe-modal-container'><div class='closer'>X</div>" + iframe + "</div>";
		$('body').append(output);
	}

		// Event Listeners

		$('.media_post a').on('click', function(e) {
			e.preventDefault();
			var href = $(this).attr('href');
			if ( href.indexOf('youtube') != -1 ) {
				// Youtube link
				window.open(href);
			} else {
				openInModal( $(this).attr('href') );
			}
		});



	$(document).ready(function(){

        // Add flex: 2 to longer menu items to take up more space as necessary
        $('#menu-main-menu').children('li').children('a').each(function(){
            var textLength = $(this).text().length;
            if ( textLength > 10 ) {
                $(this).parent().css('flex','2');
            }
        });

		// Form Styles

		$('.wpcf7-form input, .wpcf7-form textarea').addClass('form-control');
		$('.wpcf7-form input[type=submit]').removeClass('form-control').addClass('btn btn-success pull-right');



		// Homepage About Boxes

		if ( $('body').hasClass('home') ) {



			sameHeight($('.left-about'), $('.right-about'));

			$(window).on('resize', function() {

				sameHeight($('.left-about'), $('.right-about'));

			});

		}





		// Fancybox

		$(".fancybox").fancybox();





		// Homepage Services Fade In

		function fadeInServiceBoxes() {

			if ( $('.home-boxes').length > 0 ) {

				var $top = $('.home-boxes').offset().top - $(window).scrollTop();

				if ( $top < 600 ) {

					$('.home-box').animate({

						'opacity': 1

					}, 800);

				}

			}

		}

		$(window).on('scroll', function() {

			fadeInServiceBoxes();

		});
	});
});
