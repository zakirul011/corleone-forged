(function ($) {
	"use strict";
	
	const cateLink = document.querySelectorAll('.category-title')
	const produtLink = document.querySelectorAll('.product-link li')

	/*=========================
	PRELOADER JS
	===========================*/
	$(window).on('load', function (event) {
		$('.preloader').delay(500).fadeOut(500);
	});

 // SIDEBAR MENU MOBILE
    // if has child
    const listItem = document.querySelectorAll(".sidebar-menu ul li, .mainmenu ul li");
    listItem.forEach((item) => {
        if (item.contains(item.querySelector("ul"))) {
            item.classList.add("has-child");
            item.querySelector("a").addEventListener("click", (e) => {
                e.preventDefault();
            });
        }
    });
    // sidebar menu clicking event
    const sidebarMenuLink = document.querySelectorAll(
        ".sidebar-menu ul li.has-child"
    );
    const resBar = document.querySelectorAll(
        ".humberger-bar, .sidebar-slide-overlay"
    );
    const resBarLink = document.querySelectorAll(
        ".sidebar-menu ul li:not(.has-child)"
    );

    sidebarMenuLink.forEach((link) => {
        link.addEventListener("click", () => {
            let submenu = document.querySelector(".submenu");
            link.classList.toggle("active");
            submenu.classList.toggle("active");
            if (submenu.style.maxHeight) {
                submenu.style.maxHeight = null;
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + 10 + "px";
            }
        });
    });
    resBar.forEach((btn) => {
        btn.addEventListener("click", () => {
            sidebarMenuAction();
        });
    });
    resBarLink.forEach((link) => {
        link.addEventListener("click", () => {
            sidebarMenuAction();
        });
    });
    function sidebarMenuAction() {
        for (let i = 0; i < resBar.length; i++) {
            resBar[i].classList.toggle("active");
        }
        document.querySelector(".sidebar-slide").classList.toggle("active");
    }


	// sticky
	var wind = $(window);
	var sticky = $('.header-area');
	var holder = $('.header-holder')
	wind.on('load', function () {
		holder.css('height', sticky.outerHeight())
	});
	wind.on('resize', function () {
		holder.css('height', sticky.outerHeight())
	});
	// wind.on('scroll', function () {
	// 	var scroll = wind.scrollTop();
	// 	if (scroll < 300) {
	// 		sticky.removeClass('sticky');
	// 	} else {
	// 		sticky.addClass('sticky');
	// 	}
	// });

	
   // niceSelect
   $("select").niceSelect();

	
})(jQuery);