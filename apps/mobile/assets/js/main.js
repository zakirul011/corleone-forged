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
	$('.video-btn').magnificPopup({
		type: 'iframe'
	});

	$('.pop-img-btn').magnificPopup({
		type: 'image'
	});

	// reponsive menu
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

	// custom tab
	tabFunc(document.querySelectorAll('.single-wheel-link'), document.querySelectorAll('.single-wheel-tab'))

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

	// qty
	const qty = document.querySelectorAll('.qty');
	qty.forEach(wrap => {
		let input = wrap.querySelector('input');
		let stepUp = wrap.querySelector('.spin-up');
		let stepDown = wrap.querySelector('.spin-down');
		stepUp.addEventListener('click', ()=>{input.stepUp();})
		stepDown.addEventListener('click', ()=>{input.stepDown();})
	});

	// select sibling child
	const selectableList = document.querySelectorAll('.colors ul li, .sizes ul li')
	selectableList.forEach(list => {
		list.addEventListener('click', ()=>{
			let listParent = list.parentElement;
			for (let i = 0; i < listParent.children.length; i++) {
				listParent.children[i].classList.remove('active')
			}
			list.classList.add('active')
		})
	});

	// nice select
	$('select').niceSelect();

	// popup
	const popup = document.querySelectorAll('.popup')
	popup.forEach(pop => {
		let closes = pop.querySelectorAll('.close, .ovarlay')
		closes.forEach(close => {
			close.addEventListener('click', ()=>{
				pop.classList.remove('active')
			})
		});
	});

	// sticky
	var wind = $(window);
	var sticky = $('.app-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 70) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});


	 
	
})(jQuery);


// cc formating
const ccInput = document.querySelectorAll('.cc-input')
ccInput.forEach(input => {
	input.addEventListener('input', ()=>{
		input.value = cc_format(input.value);
	})
});
function cc_format(value) {
	var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
	var matches = v.match(/\d{4,16}/g);
	var match = matches && matches[0] || ''
	var parts = []
	for (i = 0, len = match.length; i < len; i += 4) {
	  parts.push(match.substring(i, i + 4))
	}
	if (parts.length) {
	  return parts.join(' ')
	} else {
	  return value
	}
 }
