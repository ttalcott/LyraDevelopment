$(document).ready(function(){

		$('.navbar').addClass('navbar-default');

		$(window).on('scroll', function() {

			if($(window).scrollTop() > 75) {
				$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
				$('.nav-logo img').attr('src','/images/header-logo.svg');
			}

			/* when user scrolls back up, reset navbar*/
			if($(window).scrollTop() <=75) {
				$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
				$('.nav-logo img').attr('src','/images/lyra-standalone-logo.svg');
			}

		});

});
