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

	$(document).ready(function(){
		
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

		// Sidebar Template
		if ( $(window).width() > 980 ) {
			sameHeight($('.sidebar_left'),$('.content_right'));

			$(window).on('resize', sameHeight( $('.sidebar_left'),$('.content_right') ));
		}

	});
});