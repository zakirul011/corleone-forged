(function ($) {
	"use strict";

	/*=========================
	PRELOADER JS
	===========================*/
	$(window).on('load', function (event) {
		$('.preloader').delay(500).fadeOut(500);
	});


	/*=========================
	magnificPopup image JS
	===========================*/
	$('.video-btn, .discount-play-v2 a').magnificPopup({
		type: 'iframe'
	});

	$('.pop-img-btn').magnificPopup({
		type: 'image'
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



	// skrollr activation
	var s = skrollr.init();
	if (s.isMobile()) {
			s.destroy();
	}

	 
	// custom tab
	tabFunc(document.querySelectorAll('.category-btn'), document.querySelectorAll('.category-tab'))
	function tabFunc(tabLinks, tabs) {
		tabLinks.forEach((link, index) => {
			link.addEventListener('click', ()=>{
				for (let i = 0; i < tabLinks.length; i++) {
					tabLinks[i].classList.remove('active')
					tabs[i].classList.remove('active')
				}
				link.classList.add('active')
				tabs[index].classList.add('active')
			})
		});
	}


})(jQuery);

