$(document).ready(function(){

		$('.navbar').addClass('navbar-default');

		$(window).on('scroll', function() {

			if($(window).scrollTop() > 75) {
				$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
			}

			/* when user scrolls back up, reset navbar*/
			if($(window).scrollTop() <= 50) {
				$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
			}

		});


	// /* check body tag for content-layout class, and add navbar-DEFAULT class */
	// if($('body').hasClass('content-layout')) {
	// 	$('.navbar').addClass('navbar-default');
	// }

});
