(function ($) {
	"use strict";

	
	// One Page Nav
	var top_offset = $('.presentation-area').height() - 30;
	$('.presentation-menu ul, .responsive-menu ul').onePageNav({
		scrollOffset: top_offset,
	});

	
	// sticky
	var wind = $(window);
	var sticky = $('.presentation-area');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 150) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});

	/*=========================
	PRELOADER JS
	===========================*/
	$(window).on('load', function (event) {
		$('.preloader').delay(500).fadeOut(500);
	});



	/*=========================
	magnificPopup image JS
	===========================*/
	$('.video-btn').magnificPopup({
		type: 'iframe'
	});

	$('.pop-img-btn').magnificPopup({
		type: 'image'
	});

	$('.poster-view').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		 },
	});

		// responsive menu
		const resBar = document.querySelectorAll('.humberger-bar, .resonsive-slide, .resonsive-slide-overlay')
		resBar.forEach(btn => {
			btn.addEventListener('click', ()=>{
				for (let i = 0; i < resBar.length; i++) {
					resBar[i].classList.toggle('active')
				}
			})
		});


	/*=========================
	SCROLL-UP JS
	===========================*/
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fal fa-angle-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	

	// social-slider
	 $('.social-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		centerMode: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
		centerPadding: '0px',
		
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
			}
		}
	]
	});


	// animated-slider
	 $('.animated-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		centerMode: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
		centerPadding: '0px',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
			}
		}
	]
	});
	
	// video-slider
	 $('.video-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		centerMode: true,
		centerPadding: '0%',
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
			}
		}
	]
	});




	
	// skrollr
	var s = skrollr.init();
	if (s.isMobile()) {
		s.destroy();
  }
	
})(jQuery);

