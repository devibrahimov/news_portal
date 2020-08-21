/*-----------------------------------------------------------------------------------

    Template Name: Znews - HTML Magazine Template for Blogging and News Sites. 
    Template URI: https://themeforest.net/user/nilartstudio
    Description: Znews is a unique website template designed in html with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design blog, magazine, news site or any other purposes websites.
    Author: Nilartstudio
    Author URI: http://Nilartstudio.com
    Version: 1.0

-----------------------------------------------------------------------------------*/

/*================================================
[  Table of contents  ]
================================================
	03. jQuery MeanMenu
	04. Selectpicker
	05. Datepicker
	06. wow js 
    07. ScrollUp jquery
    08. Tooltip
    09. Ticker
    10. owl carosel 1
    11. owl carosel 2
    12. owl carosel 3
    13. owl carosel 4
    14. owl carosel sin pro nav
    15. Change active
    16. owl carosel trending post img
    17. owl carosel mega menu
    18. Youtube Video
    19. Login wrapper
    20. Search
    21. Mobile Search
    22. Treeview active
    23. Stats config
    24. Audio
    25. Custom scrollbar
    26. Cart plus minus button
    27. lazyload

 
======================================
[ End table content ]
======================================*/


(function($) {
    "use strict";


    /*-------------------------------------------
    	01. Sub Menu
    --------------------------------------------- */
    var submenu = $('.primary-menu > ul > li').has('.drop');
    if (submenu) {
        $('.dropdown').prev().append(' <i class="fa fa-angle-down"></i>');
    }
    /*-------------------------------------------
    	02. Sidebar Menu
    --------------------------------------------- */
    $(".sidebar-menu-btn").on("click", function () {
        $(".sidebar-menu-inner").addClass("active");
    });
    $(".sidebar-menu > span").on("click", function () {
        $(".sidebar-menu-inner").removeClass("active");
    });
    $('.primary-menu').clone().appendTo('.sidebar-menu-inner');
    $('.sidebar-menu-inner li.drop > a').on('click', function () {
        $(this).siblings('.dropdown').slideToggle(500);
        $(this).toggleClass("active");
    });
    /*-------------------------------------------
    	03. jQuery MeanMenu
    --------------------------------------------- */
    $('nav#mobile_dropdown').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanMenuCloseSize: "18px",
        meanScreenWidth: "991"
    });

    /*-------------------------------------------
        04. Selectpicker
    --------------------------------------------- */
    $('.selectpicker').selectpicker();
    
    /*-------------------------------------------
        05. Datepicker
    --------------------------------------------- */
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
    /*-------------------------------------------
        06. wow js 
    --------------------------------------------- */
    new WOW().init();

    /*-------------------------------------------
        07. ScrollUp jquery
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'slide'
    });

    /*-------------------------------------------
        08. Tooltip
    --------------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip();

    /*-------------------------------------------
        09. Ticker
    --------------------------------------------- */
    $('#bkn').ticker({ 
        effect: 'fadeIn',
        interval: 6000,
        controls: true, 
        duration: 800
    });

    /*-------------------------------------------
        10. owl carosel 1
    --------------------------------------------- */
    var owl = $('.owl-active-1');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:2,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:5,
        }
    }
    });

    /*-------------------------------------------
        11. owl carosel 2
    --------------------------------------------- */
    var owl = $('.owl-active-2');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:3,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });


    /*-------------------------------------------
        12. owl carosel 3
    --------------------------------------------- */
    var owl = $('.owl-active-3');
    owl.owlCarousel({
        items:3,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:3,
        },
        1366 : {
            items:3,
        },
        1400 : {
            items:3,
        }
    }
    });


    /*-------------------------------------------
        13. owl carosel 4
    --------------------------------------------- */
    var owl = $('.owl-active-4');
    owl.owlCarousel({
        items:4,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:2,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });

    /*-------------------------------------------
       14. owl carosel Slide posts
    --------------------------------------------- */
    $('.slide-posts').owlCarousel({
        items:1,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    });

      // Pref add class active to 1st thumbnail via js
    $('.post-thumbnail').eq(0).addClass('active');
      // When slider autoplay or drag is true 
    $('.slide-posts').on('changed.owl.carousel', function(event) {
        $('.post-thumbnail').removeClass('active');
        var sliders = 10;
        var currentItem = event.item.index - 2;
        if(currentItem >= sliders) {
          currentItem = 0;
        }
        $('.post-thumbnail').eq(currentItem).addClass('active');
      });
      // When thumbnail is clicked
      $('.post-thumbnail a').on('click',function(event) {
        event.preventDefault();
        $('.post-thumbnail').removeClass('active');
        var index = $('.post-thumbnail a').index(this);
        $('.post-thumbnail').eq(index).addClass('active');
        $('.slide-posts').trigger('to.owl.carousel', [index, 300, true]);
    });
    
    /*-------------------------------------------
       15. owl carosel sin pro nav
    --------------------------------------------- */
    var owl = $('.zm-sin-por-nav');
    owl.owlCarousel({
        items:5,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:false,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:2,
        },
        480 : {
            items:2,
        },
        768 : {
            items:3,
        },
        992 : {
            items:4,
        },
        1167 : {
            items:5,
        },
        1366 : {
            items:5,
        },
        1400 : {
            items:5,
        }
    }
    });

    /*-------------------------------------------
        16. Change active
    --------------------------------------------- */
      $('.zm-sin-por-nav .zm-sin-pro').on('click', function () {
          $('.zm-sin-por-nav .zm-sin-pro').removeClass('is-select');
          $(this).addClass('is-select');
      });

    /*-------------------------------------------
        17. owl carosel trending post img 
    --------------------------------------------- */
    var owl = $('.owl-trending');
    owl.owlCarousel({
        items:1,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:true,
        nav:false,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:1,
        },
        768 : {
            items:1,
        },
        992 : {
            items:1,
        },
        1167 : {
            items:1,
        },
        1366 : {
            items:1,
        },
        1400 : {
            items:1,
        }
    }
    });

    /*-------------------------------------------
        18. owl carosel mega menu
    --------------------------------------------- */
    var owl = $('.mega-caro-wrap');
    owl.owlCarousel({
        items:4,
        loop:true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        dots:false,
        nav:true,
        navText: [' <span class="prev page-numbers" >Previous</span> ','<span class="next page-numbers" >Next</span> '],
        lazyLoad:true,
        responsive : {
        0 : {
            items:1,
        },
        480 : {
            items:2,
        },
        768 : {
            items:3,
        },
        992 : {
            items:3,
        },
        1167 : {
            items:4,
        },
        1366 : {
            items:4,
        },
        1400 : {
            items:4,
        }
    }
    });

    /*-------------------------------------------
        19. Youtube Video
    --------------------------------------------- */

    $(".video-activetor").YouTubePopUp({
        autoplay: 1 
    });

    /*-------------------------------------------
        20. Login wrapper
    --------------------------------------------- */
    $('.login-btn').on('click', function(){
        if($(this).siblings('.login-form-wrap').hasClass('active')){
            $(this).siblings('.login-form-wrap').removeClass('active').slideUp();
            $(this).removeClass('active');
        }
        else{
            $('.login-btn .login-form-wrap').removeClass('active').slideUp();
            $(this).addClass('active');
            $(this).siblings('.login-form-wrap').addClass('active').slideDown();
        }
    });

    /*-------------------------------------------
        21. Search
    --------------------------------------------- */
    $('.search-btn').on('click', function(){
        if($(this).siblings('.search-form').hasClass('active')){

            $(this).siblings('.search-form').removeClass('active').slideUp();
            $(this).removeClass('active');

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }else{
                $(this).find("i").removeClass('fa-times').addClass('fa-search');
              }

        }
        else{
            $('.search-btn .search-form').removeClass('active').slideUp();
            $('.search-btn .search-form').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.search-form').addClass('active').slideDown();

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }
        }
    });

    /*-------------------------------------------
        22. Mobile Search
    --------------------------------------------- */
    $('.mobile-search-btn').on('click', function(){
        if($(this).siblings('.mobile-search-form').hasClass('active')){
            $(this).siblings('.mobile-search-form').removeClass('active').slideUp();
            $(this).removeClass('active');

            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }else{
                $(this).find("i").removeClass('fa-times').addClass('fa-search');
              }
        }
        else{
            $('.mobile-search-btn .mobile-search-form').removeClass('active').slideUp();
            $('.mobile-search-btn .mobile-search-form').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.mobile-search-form').addClass('active').slideDown();
            if ( $(this).find("i").hasClass('fa-search')){
                $(this).find("i").removeClass('fa-search').addClass('fa-times');
              }
        }
    });

    /*-------------------------------------------
        23. Treeview active
    --------------------------------------------- */
    $('#zm-archive').treeview({
        animated: "normal",
        persist: "location",
        collapsed: true,
        unique: true,
    });


    /*-------------------------------------------
        24. Stats config
    --------------------------------------------- */
    $('.expand-archive').on('click', function(){
      $(this).siblings('ul').slideToggle("slow");
    });

    /*-------------------------------------------
        25. Audio
    --------------------------------------------- */
    $( 'audio' ).audioPlayer();

    /*-------------------------------------------
        26. Custom scrollbar
    --------------------------------------------- */
    $('.zm-scrollbar, .sidebar-menu-inner').mCustomScrollbar();

    /*-------------------------------------------
        27. Cart plus minus button
    --------------------------------------------- */
    $('.cart-plus-minus').append('<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>');
    $('.qtybutton').on('click', function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    //e.target // newly activated tab
    //e.relatedTarget // previous active tab
    $(".owl-carousel").trigger('refresh.owl.carousel');
    });

    /*-------------------------------------------
        28. lazyload
    --------------------------------------------- */
    //$("img").lazyload();

})(jQuery);
