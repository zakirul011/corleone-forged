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

	$('.gallery-viewer').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		 },
	});

	$('.footer-gallery-viewer').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		 },
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

	




	/*=========================
	offer-active-slider-v2
	===========================*/
	$('.offer-active-slider-v2').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
	});



	/*=========================
	HERO SLIDER JS
	===========================*/
	function heroSlider() {
		var BasicSlider = $('.hero-active-slider-v2');
		BasicSlider.on('init', function (e, slick) {
			var $firstAnimatingElements = $('.single-hero-slider-v2:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-hero-slider-v2[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			fade: true,
			arrows: false,
			speed: 400,
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
	  

	// category v2 js
	const categoryLinks = document.querySelectorAll('.category-tab-link-v2')
	const categoryTap = document.querySelectorAll('.category-tab-content-v2')

	categoryLinks.forEach((link, index) => {
		link.addEventListener('click', ()=>{

			for (let i = 0; i < categoryLinks.length; i++) {
				categoryLinks[i].classList.remove('active')
				categoryTap[i].classList.remove('active')
			}

			categoryTap[index].classList.add('active')
			link.classList.add('active')
		})
	});


	/*=========================
	category-active-slider-v2
	===========================*/
	$('.category-active-slider-v2').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.category-active-nav-v2'
	 });
	 
	 $('.category-active-nav-v2').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		asNavFor: '.category-active-slider-v2',
		dots: false,
		centerMode: false,
		focusOnSelect: true,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
		centerPadding: '0px',
		
	});


	/*=========================
	feature-preview-slider-v2
	===========================*/
	$('.feature-preview-slider-v2').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.feature-slider-navs-v2'
	 });
	 
	 $('.feature-slider-navs-v2').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.feature-preview-slider-v2',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
		centerPadding: '0px',
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
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
	single-shop-preview
	===========================*/
	$('.single-shop-preview').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.single-shop-slider-wrap'
	 });
	 
	 $('.single-shop-slider-wrap').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.single-shop-preview',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
		centerPadding: '0px',
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
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
	shop-active-slider-v2
	===========================*/

	 const shopCounter = document.querySelectorAll('.shop-counter-v2');
	 const shopSlider = document.querySelector('.shop-active-slider-v2')
	 const shopLength = document.querySelector('.shop-length-v2');
	 const indecator = document.querySelector('.indecator-v2');
	
	 shopCounter.forEach(sCounter => {
		const shopSliderChilds = shopSlider.children.length;
		const firstIndecatorWidth = 100 / shopSliderChilds;
  
		shopLength.innerHTML = shopSliderChilds;
		indecator.style.width = firstIndecatorWidth + "%"
		
		$('.shop-active-slider-v2').on('beforeChange', function(event, slick, currentSlide, nextSlide){
			sCounter.innerHTML = nextSlide + 1;
		  indecator.style.width = firstIndecatorWidth * (nextSlide + 1) + "%";
		});
	 });
	 
	$('.shop-active-slider-v2').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
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
	standard-active-slider-v2
	===========================*/
	$('.standard-active-slider-v2').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
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
	review-active-slider-v2
	===========================*/
	$('.review-active-slider-v2').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
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
	footer-active-gallery-v2
	===========================*/
	$('.footer-active-gallery-v2').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 7,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 5,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3,
				}
			}
		]
	});

	/*=========================
	product-active-slider-v2
	===========================*/
	$('.product-active-slider-v2').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
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
	special-content-v2
	===========================*/
	$('.special-content-v2').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
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
	single-shop-bottom-slider
	===========================*/
	$('.single-shop-bottom-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',

		responsive: [{
				breakpoint: 1024,
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
	testimony-active-slider-v2
	===========================*/
	$('.testimony-active-slider-v2').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
	});
	/*=========================
	threeD-slider
	===========================*/
	$('.threeD-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
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
				submenu.style.maxHeight = submenu.scrollHeight + 'px'
			}
		})
	});


	// tooltip
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
	})


	// skrollr activation
	var s = skrollr.init();
	if (s.isMobile()) {
			s.destroy();
	}

	// filter slide bar 
	const filterBtn = document.querySelectorAll('.filter-btn a')
	const filterMenu = document.querySelector('.filter-menu')
	const ClosefilterMenu = document.querySelector('.close-filter-menu')

	filterBtn.forEach(btn => {
		btn.addEventListener('click',(e)=>{
			e.preventDefault();
			btn.classList.toggle('active')
			filterMenu.classList.toggle('active')
		})
		ClosefilterMenu.addEventListener('click',(e)=>{
			btn.classList.toggle('active')
			filterMenu.classList.toggle('active')
		})
	});



	// reverse item
	$('.single-shop-description-wrap > .row > div:nth-child(even)').addClass('reverse-item');

	// single-shop tab
	const singleshopTabLink = document.querySelectorAll('.single-shop-tab-link ul li a')
	const singleshopTab = document.querySelectorAll('.single-shop-tab')

	singleshopTabLink.forEach((link, index) => {
		link.addEventListener('click', (e)=>{
			e.preventDefault();
			for (let i = 0; i < singleshopTabLink.length; i++) {
				singleshopTabLink[i].classList.remove('active')
				singleshopTab[i].classList.remove('active')
			}
			link.classList.add('active')
			singleshopTab[index].classList.add('active')
		})
	});


	// item selection 
	const selectAbleItm = document.querySelectorAll('.filter-list a, .boxed-list a')

	selectAbleItm.forEach(link => {
		link.addEventListener('click', (e)=>{
			e.preventDefault();
			for (let i = 0; i < link.parentElement.parentElement.children.length; i++) {
				link.parentElement.parentElement.children[i].children[0].classList.remove('active')
			}
			link.classList.add('active')
		})
	});

	const selectAbleItm2 = document.querySelectorAll('.color-list li')

	selectAbleItm2.forEach(link => {
		link.addEventListener('click', (e)=>{
			e.preventDefault();
			for (let i = 0; i < link.parentElement.children.length; i++) {
				link.parentElement.children[i].classList.remove('active')
			}
			link.classList.add('active')
		})
	});

	// boostrap modal animation easing
	$(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});


	// tab
	const tabLink = document.querySelectorAll('.about-review-client')
	const tabContent = document.querySelectorAll('.about-review-text')

	tabLink.forEach((link, index) => {
		link.addEventListener('click', ()=>{
			for (let i = 0; i < tabLink.length; i++) {
				tabLink[i].classList.remove('active')
				tabContent[i].classList.remove('active')
			}
			link.classList.add('active')
			tabContent[index].classList.add('active')
		})
	});
	

	// niceSelect
	$('select').niceSelect();

	// FOCUSED INPUT
	const focucedInput = document.querySelectorAll('.labeled-input input')

	focucedInput.forEach(input => {
		let inputWrap = input.closest('.labeled-input-wrap')
		if (input.value !== '') {
			inputWrap.classList.add('active')
		}
		input.addEventListener('focus', ()=>{
			inputWrap.classList.add('active')
		})
		input.addEventListener('focusout', ()=>{
			if (input.value == '') {
				inputWrap.classList.remove('active')
			}
		})
	});


	// init Isotope
	$('.grid').imagesLoaded( function() {
		var $grid = $('.grid').isotope({
			itemSelector: '.gallery-page-item',
			layoutMode: 'fitRows',
			columnWidth: '.grid-sizer',
		});
		// filter items on button click
		$('.filter-button-group').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			$(this).addClass('active').siblings().removeClass('active');
		});

		const galleryFilter = document.querySelectorAll('.gallery-filter-btn, .gallery-page-overlay, .gallery-page-buttons')
		galleryFilter.forEach(btn => {
			btn.addEventListener('click', ()=>{
				for (let i = 0; i < galleryFilter.length; i++) {
					galleryFilter[i].classList.toggle('active')
				}
			})
		});
	 });


	 
	// faq-page-tab
	const faqPageNavs = document.querySelectorAll('.faq-page-navs ul li')
	const faqPageContent = document.querySelectorAll('.faq-page-content')

	faqPageNavs.forEach((nav, index) => {
		nav.addEventListener('click', ()=>{
			for (let i = 0; i < faqPageNavs.length; i++) {
				faqPageNavs[i].classList.remove('active')
			}
			for (let i = 0; i < faqPageContent.length; i++) {
				faqPageContent[i].classList.remove('active')
			}
			
			nav.classList.add('active')
			faqPageContent[index].classList.add('active')
		})
	});

	// faq page accordings
	const faqPageBoxTitle = document.querySelectorAll('.faq-page-box-title')
	faqPageBoxTitle.forEach(title => {
		// shop active faq body
		if (title.parentElement.classList.contains('active-box')) {
			title.parentElement.children[1].style.maxHeight = title.parentElement.children[1].scrollHeight + 'px'
		}
		title.addEventListener('click', ()=>{
			let faqBox = title.parentElement;
			let faqbody = title.nextElementSibling;

			// toogle class on click
			if (faqBox.classList.contains('active-box')) {
				faqBox.classList.remove('active-box')
			}else{
				faqBox.classList.add('active-box')
			}
	
			// colps animaion
			if (faqbody.style.maxHeight) {
				faqbody.style.maxHeight = null;
			} else {
				faqbody.style.maxHeight = faqbody.scrollHeight + 'px';
			}

		})
	});


	// toggle active class in check out page
	const checkoutHeader = document.querySelectorAll('.checkout-header-item-title')
	checkoutHeader.forEach(header => {
		header.addEventListener('click', ()=>{
			header.parentElement.classList.toggle('active')
		})
	});

	// password show hide
	const eyeIcon = document.querySelectorAll('.eye-icon')
	eyeIcon.forEach(icon => {
		icon.addEventListener('click', ()=>{
			for (let i = 0; i < icon.parentElement.children.length; i++) {
				icon.parentElement.children[i].classList.toggle('active')
			}
			
			let input = icon.parentElement.querySelector('input')
			if (input.getAttribute('type') == 'password') {
				input.setAttribute('type', 'text')
			}else{
				input.setAttribute('type', 'password')
			}

		})
	});

	// account tab
	const accountTabLink = document.querySelectorAll('.account-tab-link')
	const accountTabContent = document.querySelectorAll('.account-tab-content')

	accountTabLink.forEach((link, index) => {
		link.addEventListener('click', ()=>{
			for (let i = 0; i < accountTabLink.length; i++) {
				accountTabLink[i].classList.remove('active')
				accountTabContent[i].classList.remove('active')
			}
			link.classList.add('active')
			accountTabContent[index].classList.add('active')
		})
	});

})(jQuery);

