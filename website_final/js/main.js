(function ($) {
    "use strict";

    const cateLink = document.querySelectorAll(".category-title");
    const produtLink = document.querySelectorAll(".product-link li");

    /*=========================
	PRELOADER JS
	===========================*/
    $(window).on("load", function (event) {
        $(".preloader").delay(500).fadeOut(500);
    });

    /*=========================
	HERO SLIDER JS
	===========================*/
    function heroSlider() {
        var BasicSlider = $(".hero-slider");
        BasicSlider.on("init", function (e, slick) {
            var $firstAnimatingElements = $(".hero-slide:first-child").find(
                "[data-animation]"
            );
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on(
            "beforeChange",
            function (e, slick, currentSlide, nextSlide) {
                var $animatingElements = $(
                    '.hero-slide[data-slick-index="' + nextSlide + '"]'
                ).find("[data-animation]");
                doAnimations($animatingElements);
            }
        );
        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
            fade: true,
            arrows: false,
        });

        function doAnimations(elements) {
            var animationEndEvents =
                "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data("delay");
                var $animationType = "animated " + $this.data("animation");
                $this.css({
                    "animation-delay": $animationDelay,
                    "-webkit-animation-delay": $animationDelay,
                });
                $this
                    .addClass($animationType)
                    .one(animationEndEvents, function () {
                        $this.removeClass($animationType);
                    });
            });
        }
    }
    heroSlider();

    /*=========================
	testimony-slider
	===========================*/
    $(".testimony-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*=========================
	follow-slider
	===========================*/
    $(".follow-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });

    /*=========================
	product-slider
	===========================*/
    $(".product-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*=========================
	trend-slider
	===========================*/
    $(".trend-slider").slick({
        autoplay: true,
        autoplaySpeed: 6000,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*=========================
	about-slider
	===========================*/
    $(".about-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                },
            },
        ],
    });

    /*=========================
	single-shop-img-slider
	===========================*/
    $(".single-shop-img-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: '.single-shop-img-navs',
    });
    $(".single-shop-img-navs").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        asNavFor: '.single-shop-img-slider',
        focusOnSelect: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',
    });

    /*=========================
	single-shop-2-slider
	===========================*/
    $(".single-shop-2-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: '.single-shop-2-navs',
    });
    $(".single-shop-2-navs").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        asNavFor: '.single-shop-2-slider',
        focusOnSelect: true,
        prevArrow:
            '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',
        
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                },
            },
        ],
    });

    /*=========================
	category-slider
	===========================*/
    $(".category-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });

    /*=========================
	review-slider
	===========================*/
    $(".review-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
    });

    /*=========================
	single-shop-review-slider
	===========================*/
    $(".single-shop-review-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 6000,
    });

    /*=========================
	magnificPopup image JS
	===========================*/
    $(".video-btn").magnificPopup({
        type: "iframe",
    });

    $(".pop-img-btn").magnificPopup({
        type: "image",
    });
    $("a.gallery-item").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });
    $(".follow-slide a").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    // selectable star action
    const selectableStarts = document.querySelectorAll(".selectable-star li");
    selectableStarts.forEach((star, index) => {
        star.addEventListener("click", () => {
            for (let i = 0; i < star.parentElement.children.length; i++) {
                star.parentElement.children[i].classList.remove("ratted");
            }
            for (let i = 0; i <= index; i++) {
                star.parentElement.children[i].classList.add("ratted");
            }
            document.getElementsByName("ratted-value")[0].value = index + 1;
        });
    });

    // isotope
    var $galleryContent = $(".gallery-content");
    if (window.matchMedia("(max-width: 767px)").matches) {
        $galleryContent.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            prevArrow:
                '<button type="button" class="slick-prev"><i class="novi-icon fal fa-angle-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-next"><i class="novi-icon fal fa-angle-right"></i></button>',
        });
    } else {
        $galleryContent.imagesLoaded(function () {
            $galleryContent.isotope();
        });
    }

    // singleShopLinks sliding
    if (!window.matchMedia("(max-width: 767px)").matches) {
        const singleShopLinks = document.querySelectorAll('.single-shop-2-detail-links')
        singleShopLinks.forEach(wrap => {
            let items = wrap.querySelectorAll('.single-shop-2-detail-link')
            items.forEach((item, index) => {
                item.addEventListener('click', ()=>{
                    let width = item.clientWidth + parseInt(window.getComputedStyle(item).marginLeft)
                    wrap.style.transform = 'translate(' + (- width * index) + 'px)'
                })
            });
        });
    }


    // custom tab
    tabFunc(produtLink, document.querySelectorAll(".product-tab"));
    tabFunc(cateLink, document.querySelectorAll(".category-item"));
    tabFunc(document.querySelectorAll('.credit-card-method-link'), document.querySelectorAll(".credit-card-method-tab"));
    tabFunc(document.querySelectorAll('.single-shop-detail-links li'), document.querySelectorAll(".single-shop-detail-tab"));
    tabFunc(document.querySelectorAll('.single-shop-2-detail-link'), document.querySelectorAll(".single-shop-2-detail-tab"));

    function tabFunc(tabLinks, tabs) {
        tabLinks.forEach((link, index) => {
            link.addEventListener("click", () => {
                for (let i = 0; i < tabLinks.length; i++) {
                    tabLinks[i].classList.remove("active");
                    tabs[i].classList.remove("active");
                }
                link.classList.add("active");
                tabs[index].classList.add("active");
            });
        });
    }

    // catelog slick re position
    cateLink.forEach((link) => {
        link.addEventListener("click", () => {
            $(".category-slider").slick("setPosition");
        });
    });

    // catelog slick re position
    produtLink.forEach((link) => {
        link.addEventListener("click", () => {
            $(".product-slider").slick("setPosition");
        });
    });

    // apply same hiehgt to siblings
    window.addEventListener("load", () => {
        applyLergestheight(document.querySelectorAll(".card-item"));
    });
    window.addEventListener("resize", () => {
        applyLergestheight(document.querySelectorAll(".card-item"));
    });

    function applyLergestheight(items) {
        const itemheight = [];
        items.forEach((item) => {
            itemheight.push(item.children[0].getBoundingClientRect().height);
        });
        items.forEach((item) => {
            item.style.height = Math.max.apply(null, itemheight) + "px";
        });
    }

    // SIDEBAR MENU MOBILE
    // if has child
    const listItem = document.querySelectorAll(
        ".sidebar-menu ul li, .mainmenu ul li"
    );
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
    var sticky = $(".header-area");
    var holder = $(".header-holder");
    wind.on("load", function () {
        holder.css("height", sticky.outerHeight());
    });
    wind.on("resize", function () {
        holder.css("height", sticky.outerHeight());
    });
    wind.on("scroll", function () {
        var scroll = wind.scrollTop();
        var scrollLength = 300;
        if (window.matchMedia("(max-width: 767px)").matches) {
            scrollLength = 120;
        }
        if (scroll < scrollLength) {
            sticky.removeClass("sticky");
        } else {
            sticky.addClass("sticky");
        }
    });

    // change postion of shop filter paner
    function changeShopPanel() {
        const shopFilterWrap = document.querySelectorAll('.shop-filter-wrap')
        shopFilterWrap.forEach(wrap => {
            let panel = document.querySelector('.shop-filter-panel')
            if (window.matchMedia("(max-width: 767px)").matches) {
                wrap.appendChild(panel)
            }else{    
                let wrap = document.querySelector('.shop-page-wrap')
                wrap.appendChild(panel)
            }
        });
    }
    window.addEventListener('load', changeShopPanel)
    window.addEventListener('resize', changeShopPanel)

    // shopFIlterShower
    const shopFilterBtn = document.querySelectorAll('.shop-filter-btn, .shop-filter-overlay, .shop-filter-close');
    shopFilterBtn.forEach((btn) => {
        let wrap = document.querySelectorAll('.shop-page-wrap, .shop-filter-wrap')
        btn.addEventListener("click", () => {
            for (let i = 0; i < wrap.length; i++) {
               wrap[i].classList.toggle('active')                
            }
        });
    });

    // shop page list view switch
    const shopViewLink = document.querySelectorAll('.shop-view-links li')
    shopViewLink.forEach((link, index) => {
        let wrap = link.closest('.shop-page-wrap')
        let content = document.querySelector('.shop-page-content')
        link.addEventListener('click', ()=>{
            for (let i = 0; i < shopViewLink.length; i++) {
                shopViewLink[i].classList.remove('active')
            }
            link.classList.add('active')
            
            content.style.animation = 'fadeIn 1s ease';
            content.addEventListener('animationend', ()=>{
                content.style.animation = '';
            })

            if (index == 0) {
                wrap.classList.add('list-active')
            }else{
                wrap.classList.remove('list-active')
            }
        })
    });

    // select sibling child
    const selectableList = document.querySelectorAll(".shop-filter-item li, .single-shop-info-list li");
    selectableList.forEach((list) => {
        list.addEventListener("click", () => {
            let sibling = list.parentElement.children;

            if (list.classList.contains("active")) {
                for (let i = 0; i < sibling.length; i++) {
                    sibling[i].classList.remove("active");
                }
            } else {
                for (let i = 0; i < sibling.length; i++) {
                    sibling[i].classList.remove("active");
                }
                list.classList.add("active");
            }
        });
    });

    
    // chane sibling child active
    const changeSiblingActive = document.querySelectorAll(".credit-card-timing li");
    changeSiblingActive.forEach((list) => {
        list.addEventListener("click", () => {
            let sibling = list.parentElement.children;
            for (let i = 0; i < sibling.length; i++) {
                sibling[i].classList.remove("active");
            }
            list.classList.add("active");
        });
    });

    // niceSelect
    $("select").niceSelect();

    /*=========================
	SCROLL-UP JS
	===========================*/
    $.scrollUp({
        scrollName: "scrollUp", // Element ID
        topDistance: "300", // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: "fade", // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<i class="novi-icon fal fa-angle-up"></i>', // Text for element
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

    // One Page Nav
    var top_offset = $(".header-area").height() - 170;
    $(".mainmenu ul, .sidebar-menu ul").onePageNav({
        scrollOffset: top_offset,
    });

    const policy = document.querySelectorAll('.policy-list')
    policy.forEach(wrap => {
        let count = wrap.querySelectorAll('.count-policy')
        for (let i = 0; i < count.length; i++) {
            count[i].textContent = i + 1 + '.'
        }
    });

})(jQuery);
