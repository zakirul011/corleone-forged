(function ($) {
	"use strict";

	/*=========================
	PRELOADER JS
	===========================*/
	$(window).on('load', function () {
		$('.preloader').delay(500).fadeOut(500);
	});



	/*=========================
	HERO SLIDER JS
	===========================*/
	function heroSlider() {
		var BasicSlider = $('.hero-slider');
		BasicSlider.on('init', function (e, slick) {
			var $firstAnimatingElements = $('.hero-slide:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.hero-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: false,
			autoplaySpeed: 10000,
			dots: false,
			fade: true,
			arrows: true,
			appendArrows: '.hero-slider-wrap .slider-nav',
			prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fal fa-angle-right"></i></button>',

		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function () {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function () {
					$this.removeClass($animationType);
				});
			});
		}
	}
	heroSlider();
	
	/*=========================
	category-slider
	===========================*/
	$('.category-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		centerMode: true,
		centerPadding: '0px',
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 991,
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
	
	/*=========================
	shop-slider
	===========================*/
	$('.shop-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
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
	
	/*=========================
	product-slider
	===========================*/
	$('.product-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		asNavFor: '.product-nav-slider',
		fade: true,
	});
	$('.product-nav-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
		asNavFor: '.product-slider',

		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	});

	/*=========================
	testimony-slider
	===========================*/
	$('.testimony-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		asNavFor: '.testimony-nav-slider',
		fade: true,
	});
	$('.testimony-nav-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
		asNavFor: '.testimony-slider',
		vertical: true,
		focusOnSelect: true,

		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,					
					vertical: false,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,				
					vertical: false,
				}
			}
		]
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
	$('.gallery-item a').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
		}
	});
	$('.footer-gallery-item').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
		}
	});


	// custom tab
	tabFunc(document.querySelectorAll('.promo-link'), document.querySelectorAll('.promo-tab'))
	tabFunc(document.querySelectorAll('.shop-link'), document.querySelectorAll('.shop-tab'))
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

	// cont feature item
	const countFeature = document.querySelectorAll(".count")
	countFeature.forEach((count, index) => {
		count.innerText = (index + 1).toString().padStart(2, 0)
	});



	// responsive menu
	const resBar = document.querySelectorAll('.humberger-bar, .resonsive-slide-overlay')
	resBar.forEach(btn => {
		btn.addEventListener('click', ()=>{
			for (let i = 0; i < resBar.length; i++) {
				resBar[i].classList.toggle('active')
			}
			document.querySelector('.resonsive-slide').classList.toggle('active')
		})
	});
	
	// if has child
	const listItem = document.querySelectorAll('.responsive-menu ul li')
	listItem.forEach(item => {
		if (item.contains(item.querySelector('ul'))) {
			item.classList.add('has-child')
			item.querySelector('a').addEventListener('click', (e)=>{
				e.preventDefault();
			})
		}
	});

	// responsive menu clicking event
	const responsiveMenuLink = document.querySelectorAll('.responsive-menu ul li.has-child')
	responsiveMenuLink.forEach(link => {
		link.addEventListener('click', ()=>{
			let submenu = document.querySelector('.submenu')
			link.classList.toggle('active');
			submenu.classList.toggle('active');
	
			if (submenu.style.maxHeight) {
				submenu.style.maxHeight = null
			}else{
				submenu.style.maxHeight = submenu.scrollHeight + 10 + 'px'
			}
		})
	});
	
	// sticky
	var wind = $(window);
	var sticky = $('.header-area');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 150) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});

	let headerHeight;
	function loadResizer() {
		// header height holder
		const headerHolder = document.querySelectorAll('.header-holder')
		headerHolder.forEach(holder => {
			headerHeight = document.querySelector('.header-area').getBoundingClientRect().height;
			holder.style.height = headerHeight + 'px';
		});	
		
		// applyLergestheight
		applyLergestheight(document.querySelectorAll('.product-nav-slide'))
		applyLergestheight(document.querySelectorAll('.testimony-slide'))
		function applyLergestheight(items) {
			const itemheight = []
			items.forEach(item => {
				itemheight.push(item.scrollHeight)
			});
			items.forEach(item => {
				item.style.height = Math.max.apply(null, itemheight) + 'px';
			});
		}
	}

	window.addEventListener('load', ()=>{
		loadResizer() 

		if (window.matchMedia("(max-width: 767px)").matches) {
			// gallary-slider
			$('.gallary-content').slick({
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
				prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
			});
		}
	})
	window.addEventListener('resize', ()=>{
		loadResizer() 
	})

   // niceSelect
   $("select").niceSelect();

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
	var s = skrollr.init({
		forceHeight: false,
		smoothScrollingDuration: 500,
	});
	if (s.isMobile()) {
			s.destroy();
	}


	const dots = document.querySelectorAll('.feature-img .dot')
	for (const dot of dots) {
		dot.addEventListener('click', goingToSection)
	}
	function goingToSection(e) {
		e.preventDefault();
		const href = this.getAttribute('href');
		const offsetTop = document.querySelector(href).getBoundingClientRect().top + window.pageYOffset - headerHeight;
		window.scrollTo(0, offsetTop)
	}

		
	// One Page Nav
	var top_offset = $('.header-area').height() - 170;
	$('.mainmenu ul, .sidebar-menu ul').onePageNav({
		scrollOffset: top_offset,
	});

	
})(jQuery);