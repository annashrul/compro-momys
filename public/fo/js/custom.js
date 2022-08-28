(function ($) {
    "use strict";
    jQuery(".mean-menu").meanmenu({ meanScreenWidth: "991" });
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) {
            $(".navbar-area").addClass("sticky-nav");
        } else {
            $(".navbar-area").removeClass("sticky-nav");
        }
    });
    $(".nav-side .search-box i").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-close").on("click", function () {
        $(".search-overlay").removeClass("search-overlay-active");
    });
    $(".side-nav-responsive .dot-menu").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });

    new WOW().init();
    $(window).on("load", function () {
        $(".preloader").fadeOut(500);
    });
    $("body").append("<div class='go-top'><i class='bx bx-chevrons-up'></i></div>");
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $(".go-top").addClass("active");
        if (scrolled < 600) $(".go-top").removeClass("active");
    });
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 50);
    });
    $(".banner-area-two").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        smartSpeed: 950,
        dots: true,
        autoplay:true,
        autoplayTimeout:5000,
        // autoplayHoverPause:true
    });

})(jQuery);

