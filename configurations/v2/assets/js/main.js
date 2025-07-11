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

	$('.pop-up-img').magnificPopup({
		type: 'image',
	});

	
	$('.footer-gallery-viewer').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		 },
	});


	// boostrap modal animation easing
	$(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});




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



})(jQuery);

