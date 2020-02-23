(function ($) {
    "use strict";
    /*************************
     scroll down start
     *************************/
    $(function () {
        $('.down').click(function () {
            $('html, body').animate({scrollTop: $('.booking').offset().top}, 'slow');
            return false;
        });
    });

    /*************************
     scroll down end
     *************************/
    /*************************
     loader js start
     *************************/

    $('.loader-wrapper').fadeOut('slow', function () {
        $(this).remove();
    });

    /*************************
     loader js end
     *************************/
    /*************************
     add class on scroll js start
     *************************/
    if ($(window).width() <= 991) {
        $('.menu-container').find('.inner-collapse').addClass("collapse");
        $(".dropdown-sec").on('click', function () {
            $('.navbar-nav').find('.dropdown-content').removeClass("demo");
            $(this).find('.dropdown-content').addClass("demo");
        });

        $(".menu-container").on('click', function () {
            $('.menu-container').find('.inner-collapse').removeClass("demo2");
            $(this).find('.inner-collapse').removeClass("collapse");
            $(this).find('.inner-collapse').addClass("demo2");
        });

        //demo2
    }

    /*************************
     add class on scroll js end
     *************************/


    /*************************
     tap to top js start
     *************************/

    // $(window).on('scroll', function () {
    //     if ($(this).scrollTop() > 500) {
    //         $('.tap-top').fadeIn();
    //     } else {
    //         $('.tap-top').fadeOut();
    //     }
    // });
    $('.tap-top').on('click', function () {
        window.open('https://ronaldo.id', '_blank');
        // $("html, body").animate({
        //     scrollTop: 0
        // }, 600);
        // return false;
    });

    /*************************
     tap to top js end
     *************************/


    /*************************
     scroll js start
     *************************/
    if ($(window).width() >= 991) {
        $("nav a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 45
                }, 1000, function () {
                });
                return false;
            }
        });
    } else {
        $("nav a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 50
                }, 1000, function () {
                });
                return false;
            }
        });
    }

    /*************************
     scroll js end
     *************************/

    /*************************
     Footer title Start
     *************************/
    var contentwidth = jQuery(window).width();
    if ((contentwidth) < '768') {
        jQuery('.footer-title h3').append('<span class="according-menu"></span>');
        jQuery('.footer-title').on('click', function () {
            jQuery('.footer-title').removeClass('active');
            jQuery('.footer-contant').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).next().slideDown('normal');
            }
        });
        jQuery('.footer-contant').hide();
    } else {
        jQuery('.footer-contant').show();
    }

    /*************************
     Footer title End
     *************************/

    $('.filter-btn').on('click', function (e) {
        $('.collection-filter').css("left", "-15px");
    });
    $('.filter-back').on('click', function (e) {
        $('.collection-filter').css("left", "-365px");
        $('.sidebar-popup').trigger('click');
    });


    /*=====================
   16 .category page
   ==========================*/
    $('.collapse-block-title').on('click', function (e) {
        e.preventDefault;
        var speed = 300;
        var thisItem = $(this).parent(),
            nextLevel = $(this).next('.collection-collapse-block-content');
        if (thisItem.hasClass('open')) {
            console.log('a');
            thisItem.removeClass('open');
            nextLevel.slideUp(speed);
        } else {
            console.log('b');
            thisItem.addClass('open');
            console.log(thisItem);
            nextLevel.slideDown(speed);
        }
    });
    $('.color-selector ul li').on('click', function (e) {
        $(".color-selector ul li").removeClass("active");
        $(this).addClass("active");
    });
//list layout view
    $('.list-layout-view').on('click', function (e) {
        // $('.collection-grid-view').css('opacity', '0');
        $(".product-wrapper-grid").css("opacity", "0.2");
        $('.shop-cart-ajax-loader').css("display", "block");
        $('.product-wrapper-grid').addClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-12 col-grid-box ");
        setTimeout(function () {
            $(".product-wrapper-grid").css("opacity", "1");
            $('.shop-cart-ajax-loader').css("display", "none");
        }, 500);
    });
//grid layout view
    $('.grid-layout-view').on('click', function (e) {
        $('.collection-grid-view').css('opacity', '1');
        $('.product-wrapper-grid').removeClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-3 col-grid-box");

    });
    $('.product-2-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-6 col-grid-box ");
        }
    });
    $('.product-3-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-4 col-grid-box");
        }
    });
    $('.product-4-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-3 col-grid-box");
        }
    });
    $('.product-6-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-2 col-grid-box");
        }
    });

    //toggle show
    $('.toggle-nav').on('click', function (e) {
        $('.navbar').css("right", "0px");
    });
    $('.btn-back').on('click', function (e) {
        $('.navbar').css("right", "-350px");
    });

    function checkWidth() {
        var windowSize = $(window).width();
        if (windowSize <= 991) {
            $(".dropdown").click(function () {
                $(".dropdown ~ul").not($(this).siblings()).hide("fast");
                $(".dropdown ~.mega-menu-container").not($(this).siblings()).hide("fast");
                $(this).siblings().slideToggle("fast");
            });
        } else if (windowSize >= 991) {
            $(".navbar > ul > li + .mega-menu").mouseover(function () {
                $(this).children().css("display", "block");
            });
            $(".navbar > ul > li + .mega-menu").mouseout(function () {
                $(this).children().last().css("display", "none");
            });

            $(".sub-menu").mouseover(function () {
                $(this).children().css("display", "block")
            });
            $(".sub-menu").mouseout(function () {
                $(this).children().last().css("display", "none")
            });
        }
    }

    checkWidth();
    $(window).resize(checkWidth);
})(jQuery);

(function($) {
    "use strict";

    /*************************
     brand js start
     *************************/
    $('.ecommerce-home-slider').owlCarousel({
        items: 1,
        nav: true,
        navClass: ['owl-prev', 'owl-next'],
        navText: ['<i class="fa fa-4x fa-angle-left"></i>', '<i class="fa fa-4x fa-angle-right"></i>'],
        dots:false,
        autoplay: true,
        slideSpeed: 300,
        loop: true
    });
    $('.product-slider').owlCarousel({
        items: 5,
        margin: 30,
        autoplay: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 4
            },
            1000: {
                items: 5,
                margin: 30
            }
        }
    });
    $('.blog-slider').owlCarousel({
        items: 3,
        margin: 30,
        autoplay: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1250: {
                items: 3,
                margin: 30
            }
        }
    });

    /*************************
     brand js end
     *************************/
    /*=====================
     05. Image to background js
     ==========================*/
    $(".bg-top" ).parent().addClass('b-top');
    $(".bg-bottom" ).parent().addClass('b-bottom');
    $(".bg-center" ).parent().addClass('b-center');
    $(".bg_size_content").parent().addClass('b_size_content');
    $(".bg-img" ).parent().addClass('bg-size');
    $(".bg-img.blur-up" ).parent().addClass('blur-up lazyload');
    jQuery('.bg-img').each(function() {
        var el = $(this),
            src = el.attr('src'),
            parent = el.parent();
        parent.css({
            'background-image': 'url(' + src + ')',
            'background-size': 'cover',
            'background-position': 'center',
            'display' : 'block'
        });
        el.hide();
    });

})(jQuery);

$(window).on('load', function () {
    $('#exampleModal').modal('show');
});

(function($) {
    "use strict";
    $('.color-selector ul li').on('click', function (e) {
        $(".color-selector ul li").removeClass("active");
        $(this).addClass("active");
    });
//list layout view
    $('.list-layout-view').on('click', function (e) {
        $('.collection-grid-view').css('opacity', '0');
        $(".product-wrapper-grid").css("opacity", "0.2");
        $('.shop-cart-ajax-loader').css("display", "block");
        $('.product-wrapper-grid').addClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-12");
        setTimeout(function () {
            $(".product-wrapper-grid").css("opacity", "1");
            $('.shop-cart-ajax-loader').css("display", "none");
        }, 500);
    });
//grid layout view
    $('.grid-layout-view').on('click', function (e) {
        $('.collection-grid-view').css('opacity', '1');
        $('.product-wrapper-grid').removeClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-3 col-grid-box");

    });
    $('.product-2-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        }
        else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-6 col-grid-box");
        }
    });
    $('.product-3-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        }
        else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-4 col-grid-box");
        }
    });
    $('.product-4-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        }
        else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-3 col-grid-box");
        }
    });
    $('.product-6-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) {
        }
        else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-2 col-grid-box");
        }
    });

    /*=====================
     07. Quantity Counter
     ==========================*/
    $('.quantity-right-plus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.quantity-left-minus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });


    /*=====================
     13.filter js
     ==========================*/
    $('.filter-btn').on('click', function (e) {
        $('.collection-filter').css("left", "-15px");
    });
    $('.filter-back').on('click', function (e) {
        $('.collection-filter').css("left", "-365px");
    });
// sidebar popup
    $('.sidebar-popup').on('click', function (e) {
        $('.open-popup').toggleClass('open');
        $('.collection-filter').css("left", "-15px");
    });
    $('.filter-back').on('click', function (e) {
        $('.collection-filter').css("left", "-365px");
        $('.sidebar-popup').trigger('click');
    });

    $('.account-sidebar').on('click', function (e) {
        $('.dashboard-left').css("left", "0");
    });
    $('.filter-back').on('click', function (e) {
        $('.dashboard-left').css("left", "-365px");
    });

    $(function () {
        $(".col-grid-box.four").slice(0, 8).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 4).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
        $(".col-grid-box.three").slice(0, 6).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 2).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
        $(".col-grid-box.two").slice(0, 6).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 3).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
        $(".col-grid-box.six").slice(0, 18).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 2).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
    });
})(jQuery);
