/* 
 Project - Learn Education Template
 */

$(document).ready(function () {
    
    //preloader

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

// search form toggle
$(".search-toggle a").click(function(){
    $(".search-form").slideToggle();
});
    //nav hover dropdown
    $('.js-activated').dropdownHover({
        instantlyCloseOthers: false,
        delay: 0
    }).dropdown();
    //parallax
    $.stellar();
    //courses carousel
    $("#item-slider").owlCarousel({
        items: 4,
        lazyLoad: true,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
    //courses carousel
    $(".testi-slider").owlCarousel({
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        slideSpeed: 300,
        pagination: false,
        singleItem: true,
        transitionStyle : "goDown"

                // "singleItem:true" is a shortcut for:
                // items : 1, 
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

    });
    //video carousel
    $(".video-slider").owlCarousel({
        items: 1,
        singleitem: true,
        lazyLoad: true,
        pagination: true,
        navigation: false,
        autoplay: false
    });
});
