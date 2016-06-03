jQuery(function($) {

	$(document).ready(function(){
		$('.bxslider').bxSlider({
			auto: true,
			mode: 'fade',
			speed: 1000
		});
		
		$(".fancybox").fancybox();
	});

});