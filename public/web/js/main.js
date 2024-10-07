(function($) {
	"use strict";
	var spinner = function() {
		setTimeout(function() {
			if ($('#spinner').length > 0) {
				$('#spinner').removeClass('show')
			}
		}, 1)
	};
	spinner(0);
	new WOW().init();
	$(window).scroll(function() {
		if ($(this).scrollTop() > 45) {
			$('.nav-bar').addClass('sticky-top shadow-sm').css('top', '0px')
		} else {
			$('.nav-bar').removeClass('sticky-top shadow-sm').css('top', '-100px')
		}
	});
	$(".header-carousel").owlCarousel({
		animateOut: 'fadeOut',
		items: 1,
		margin: 0,
		stagePadding: 0,
		autoplay: !0,
		smartSpeed: 500,
		dots: !0,
		loop: !0,
		nav: !0,
		navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],
	});
	$(".testimonial-carousel").owlCarousel({
		autoplay: !0,
		smartSpeed: 1500,
		center: !1,
		dots: !1,
		loop: !0,
		margin: 25,
		nav: !0,
		navText: ['<i class="fa fa-arrow-right"></i>', '<i class="fa fa-arrow-left"></i>'],
		responsiveClass: !0,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});
	$('[data-toggle="counter-up"]').counterUp({
		delay: 5,
		time: 2000
	});
	$(window).scroll(function() {
		if ($(this).scrollTop() > 300) {
			$('.back-to-top').fadeIn('slow')
		} else {
			$('.back-to-top').fadeOut('slow')
		}
	});
	$('.back-to-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 1500, 'easeInOutExpo');
		return !1
	})
})(jQuery)