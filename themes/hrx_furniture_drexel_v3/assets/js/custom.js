/*
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2019 PrestaShop SA
 *  @version  Release: $Revision$
 *  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
//console.log("Testing -> 3.6");
var t;
var customImgLazyLoad;
var mobileViewSize = 991;
var productTime;
var themevoltyCallMasterEvents = [];
var themevoltyCallEventsPushKey = 1;
var themevoltyCallEventsPushParam = [];
var themevoltyCallEventsPushParamCalled = [];
var currentThemeName = tvthemename + "_";
var themevoltyCallEventsPushStaus = true;
var themevoltyCallEventsPush = function($obj, $param) {
    themevoltyCallMasterEvents.push($obj);
    themevoltyCallEventsPushParam[themevoltyCallEventsPushKey] = $param;
    themevoltyCallEventsPushParamCalled[themevoltyCallEventsPushKey] = false;
    themevoltyCallEventsPushKey++;
}
var themevoltyCallEvents = function($ForceCall) {
    if (themevoltyCallEventsPushStaus) {
        var height = $(window).scrollTop();
        if (height > 49 || $ForceCall) {
            $i = 1;
            // themevoltyCallEventsPushStaus = false;
            $.each(themevoltyCallMasterEvents, function(index, func) {
                if (!themevoltyCallEventsPushParamCalled[$i]) {
                    themevoltyCallEventsPushParamCalled[$i] = true;
                    if (themevoltyCallEventsPushParam[$i] != null) {
                        func(themevoltyCallEventsPushParam[$i]);
                    } else {
                        func();
                    }
                }
                $i++;
            });
        }
    }
}
/******* Start Master Classes *********/
/************ Start To Change Left Column Position in Mobile Size *****************/
function changePositionLeftColumnMobileView() {
    if (document.body.clientWidth > 1199) {
        $('#left-column').insertBefore('#content-wrapper');
    } else {
        $('#left-column').insertAfter('#content-wrapper');
    }
}

function moveDataInMobileView(desktopClass, mobileClass) {
    if ($(desktopClass).html() != undefined && $(mobileClass).html() != undefined) {
        var html = '' + $(desktopClass).html();
        if (html != '') {
            $(mobileClass).html(html);
            $(desktopClass).html('');
        }
    }
}

function moveDataInDesktopView(desktopClass, mobileClass) {
    if ($(desktopClass).html() != undefined && $(mobileClass).html() != undefined) {
        var html = '' + $(mobileClass).html();
        if (html != '') {
            $(desktopClass).html(html);
            $(mobileClass).html('');
        }
    }
}
// check function is defined or not
function isFunction(fn) {
    return typeof fn === 'function';
}

function showView() {
    if (document.body.clientWidth <= mobileViewSize) { //for mobile view
        moveDataInMobileView('#tvcmsdesktop-logo', '#tvcmsmobile-header-logo');
        moveDataInMobileView('#_desktop_cart_manage', '#tvmobile-cart');
        moveDataInMobileView('#tvcmsdesktop-account-button', '#tvcmsmobile-account-button');
        moveDataInMobileView('#tvdesktop-megamenu', '#tvmobile-megamenu');
        // moveDataInMobileView('#tvcmsdesktop-vertical-menu', '#tvcmsmobile-vertical-menu');
        moveDataInMobileView('#_desktop_search', '#tvcmsmobile-search');
        moveDataInMobileView('.tvheader-language', '.tvmobile-lang');
        moveDataInMobileView('.tvheader-currency', '.tvmobile-curr');
        // moveDataInMobileView('.tvheader-compare', '.tvmobile-compare');
        // moveDataInMobileView('.ttvcms-wishlist-icon', '.tvmobile-wishlist');
        moveDataInMobileView('.tvcmsdesktop-contact', '.tvcmsmobile-contact');
        // moveDataInMobileView('.tvsearch-header-display-wrappper', '#tvcmsmobile-vertical-menu');
    } else { //for desktop view
        moveDataInDesktopView('#tvcmsdesktop-logo', '#tvcmsmobile-header-logo');
        moveDataInDesktopView('#_desktop_cart_manage', '#tvmobile-cart');
        moveDataInDesktopView('#tvcmsdesktop-account-button', '#tvcmsmobile-account-button');
        moveDataInDesktopView('#tvdesktop-megamenu', '#tvmobile-megamenu');
        // moveDataInDesktopView('#tvcmsdesktop-vertical-menu', '#tvcmsmobile-vertical-menu');
        moveDataInDesktopView('#_desktop_search', '#tvcmsmobile-search');
        moveDataInDesktopView('.tvheader-language', '.tvmobile-lang');
        moveDataInDesktopView('.tvheader-currency', '.tvmobile-curr');
        // moveDataInDesktopView('.tvheader-compare', '.tvmobile-compare');
        // moveDataInDesktopView('.ttvcms-wishlist-icon', '.tvmobile-wishlist');
        moveDataInDesktopView('.tvcmsdesktop-contact', '.tvcmsmobile-contact');
    }
} //showView

function setSimmner() {
    if (document.body.clientWidth > 991) {
        $('.shimmercard-container').each(function(index, value) {
            $shimmerThis = $(this);
            $data_repeat = $shimmerThis.attr('data-repeat');
            $shimmerThis.removeAttr('data-repeat');
            $shimmerHTML = ($shimmerThis.parent().html());
            for (var i = 0; i < $data_repeat - 1; i++) {
                $shimmerThis.parent().append($shimmerHTML);
            }
        });
    }
}
/******* End Master Classes *********/
changePositionLeftColumnMobileView();
showView(); //default landing call for mobile view    
setSimmner();
//mega menu header js
$('.tvcmsmain-menu-wrapper').addClass('tvcmsmain-menu-block');
// vertical menu js
$('.tvcmsverticalmenu').addClass('tvcmsverticalmenu-block');

jQuery(document).ready(function($) {
    /********Sticky Left Right panell*******/
    $('#left-column, #content-wrapper, #right-column').theiaStickySidebar({
        additionalMarginTop: 70
    });
    /*********************** Start Product Category page View ******************************/
    $('.tvcmsproduct-grid-list .tvproduct-grid').addClass('active');

    function removeClassesOfView() {
        $('#products').removeClass('grid grid-2 list list-2 catelog');
    }
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-grid', function() {
        removeClassesOfView();
        $('#products').addClass('grid');
        // $('.tvgrid-list-view-product .tvproduct-wrapper.grid').balance();
        $('.tvcmsproduct-grid-list .tvproduct-grid-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-catelog').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-grid').addClass('active');
    });
    // End Grid View
    // Start Grid-2 View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-grid-2', function() {
        removeClassesOfView();
        $('#products').addClass('grid-2');
        // $('.tvgrid-list-view-product .tvproduct-wrapper.grid-2').balance();
        $('.tvcmsproduct-grid-list .tvproduct-grid').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-catelog').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-grid-2').addClass('active');
    });
    // End Grid-2 View
    // Start List View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-list', function() {
        removeClassesOfView();
        $('#products').addClass('list');
        $('.tvcmsproduct-grid-list .tvproduct-grid-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-catelog').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-grid').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list').addClass('active');
    });
    // End List View
    // Start List-2 View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-list-2', function() {
        removeClassesOfView();
        $('#products').addClass('list-2');
        $('.tvcmsproduct-grid-list .tvproduct-grid-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-catelog').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-grid').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list-2').addClass('active');
    });
    // End List-2 View
    // Start Catelog View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-catelog', function() {
        removeClassesOfView();
        $('#products').addClass('catelog');
        $('.tvcmsproduct-grid-list .tvproduct-grid').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-grid-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-list-2').removeClass('active');
        $('.tvcmsproduct-grid-list .tvproduct-catelog').addClass('active');
    });
    /*********************** End Product Category page View ******************************/
    customImgLazyLoad = function($class) {
        //     t = setTimeout(function() {
        //         if ($class === undefined && !$class) {
        //             $class = 'img.lazy';
        //         } else {
        //             $class += ' img.lazy';
        //         }
        //             $($class).Lazy({
        //                scrollDirection: 'vertical',
        //                 visibleOnly: false,
        //                 onError: function(element) {
        //                     console.log('error loading ' + element.data('src'))
        //                 },
        //                 afterLoad: function(element) {
        //                     element.addClass('loaded');
        //                 },
        //             });
        //     }, 500);
    }
    //customImgLazyLoad();    
    /********************* Lazy product ***************************/
    /*$(document).on('click', '.tvtab-name.tab-index, .tvproduct-view', function(e) {
        customImgLazyLoad('.tvtab-product-wrapper');
        customImgLazyLoad('#js-product-list');
    });
    $('.owl-carousel').on('translate.owl.carousel', function(e) {
        customImgLazyLoad();
    });*/
    /****************** End Default Left Right Panel Hide ************************/
    if (TVCMSCUSTOMSETTING_HOVER_IMG !== undefined && TVCMSCUSTOMSETTING_HOVER_IMG == '0') {
        $('.tvproduct-hover-img').hide();
    }

    function ProductPageVerSlider() {
        if ($("#product .tvvertical-slider").length) {
            $("#product .tvvertical-slider .product-images").not('.slick-initialized').slick({
                dots: false,
                infinite: true,
                speed: 300,
                prevArrow: $('.tvvertical-slider-pre'),
                nextArrow: $('.tvvertical-slider-next'),
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
                height: true,
                centerMode: false,
                focusOnSelect: true,
                autoplay: true,
                adaptiveHeight: true,
                vertical: true,
                responsive: [{
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            vertical: false,
                            adaptiveHeight: false,
                            dots: true,
                            prevArrow: '',
                            nextArrow: '',
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        }
    }
    $(document).ajaxComplete(function() {
        ProductPageVerSlider();
    });

    function HomePageVerSlider() {
        if ($("#index .tvvertical-slider .product-images").length) {
            $("#index .tvvertical-slider .product-images").not('.slick-initialized').slick({
                dots: false,
                infinite: true,
                speed: 300,
                prevArrow: $('.tvvertical-slider-pre'),
                nextArrow: $('.tvvertical-slider-next'),
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
                height: true,
                centerMode: false,
                focusOnSelect: true,
                autoplay: true,
                adaptiveHeight: true,
                vertical: true,
                responsive: [{
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            vertical: false,
                            adaptiveHeight: false,
                            dots: true,
                            prevArrow: '',
                            nextArrow: '',
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        }
    }
    HomePageVerSlider();
    /******************END loading*************/

    // "use strict";    
    /************ Start close dropdown When open other dropdown in mobile view **************/
    function removeDefaultDropdown() {
        // Header My Account DropDown
        if (document.body.clientWidth >= 992) {
            $('#header .tv-account-dropdown').removeClass('open');
            $('#header').find('.tvcms-header-myaccount .tv-myaccount-btn').removeClass('open');
            $('#header').find('.tvcms-header-myaccount .tv-account-dropdown').removeClass('open').hide();
        }
        // Header Search Dropdown
        // $('#header .tvcmsheader-search .tvsearch-open').show();
        // $('#header .tvcmsheader-search .tvsearch-close').hide();
        // $('#header .tvcmsheader-search .tvsearch-header-display-wrappper').removeClass('open');
        // $('body').removeClass('tvactive-search');
        // Header My Account Dropdown
        // language Dropdown
        $('.tvcms-header-language .tv-language-btn').removeClass('open');
        $('.tv-language-dropdown').removeClass('open').hide();
        // Currency Dropdown
        $('.tvcms-header-currency .tv-currency-btn').removeClass('open');
        $('.tv-currency-dropdown').removeClass('open').hide();
        if (document.body.clientWidth <= mobileViewSize) {
            // horizontal menu
            $('#tvcms-mobile-view-header .tvmenu-button').removeClass('open');
            // Cart Dropdown
            $('.hexcms-header-cart .tvcmscart-show-dropdown').removeClass('open');
            // Vertical Menu DropDown
            $('.tvcmsvertical-menu .tvallcategories-wrapper tvleft-right-title-toggle, .tvcmsvertical-menu .tvverticalmenu-dropdown').removeClass('open');
        } else {
            // Vertical Menu DropDown
            $('.tvcmsvertical-menu .tvallcategories-wrapper').removeClass('open');
            $('.tvcmsvertical-menu .tvverticalmenu-dropdown').removeClass('open').removeAttr('style');
        }
    }
    /************ End close dropdown When open other dropdown in mobile view **************/
    /*********************** Start Product Category page View ******************************/
    // Start Grid View
    function removeClassesOfView() {
        $('#products').removeClass('grid grid-2 list list-2 catelog');
    }
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-grid', function() {
        removeClassesOfView();
        $('#products').addClass('grid');
    });
    // End Grid View
    // Start Grid-2 View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-grid-2', function() {
        removeClassesOfView();
        $('#products').addClass('grid-2');
    });
    // End Grid-2 View
    // Start List View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-list', function() {
        removeClassesOfView();
        $('#products').addClass('list');
    });
    // End List View
    // Start List-2 View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-list-2', function() {
        removeClassesOfView();
        $('#products').addClass('list-2');
    });
    // End List-2 View
    // Start Catelog View
    $(document).on('click', '.tvcmsproduct-grid-list .tvproduct-catelog', function() {
        removeClassesOfView();
        $('#products').addClass('catelog');
    });
    // End Catelog View
    /*********************** End Product Category page View ******************************/
    /******************** Start Comman Drop-Down Functions *******************************************/
    var dropDownParentClass = '';
    var dropDownClass = '';
    // this function is use Toggle dropdown
    function tvDropDown(parentClass, dropdownClass, closeOtherDropdown) {
        $(document).on('click', parentClass, function(e) {
            if ($(dropdownClass).hasClass('open')) {
                $(dropdownClass).removeClass('open').stop(false).slideUp(300, "swing");
                $(parentClass).removeClass('open');
            } else {
                if (closeOtherDropdown == true) {
                    removeDefaultDropdown();
                }
                $(dropdownClass).addClass('open').stop(false).slideDown(300, "swing");
                $(parentClass).addClass('open');
            }
            e.stopPropagation();
        });
    }
    //tvDropDown
    /******************** End Drop-Down Functions *******************************************/
    /********************* Start Account DropDown js *****************************************/
    dropDownParentClass = '.tvcms-header-myaccount .tv-myaccount-btn';
    dropDownClass = '.tv-account-dropdown';
    //$(dropDownClass).hide();
    tvDropDown(dropDownParentClass, dropDownClass, true);
    /********************* End Account DropDown js *****************************************/
    /********************* Start Language DropDown js *****************************************/
    dropDownParentClass = '.tvcms-header-language .tv-language-btn';
    dropDownClass = '.tv-language-dropdown';
    //$(dropDownClass).hide();
    tvDropDown(dropDownParentClass, dropDownClass, true);
    /********************* End Language DropDown js *****************************************/
    /********************* Start Currency DropDown js *****************************************/
    dropDownParentClass = '.tvcms-header-currency .tv-currency-btn';
    dropDownClass = '.tv-currency-dropdown';
    //$(dropDownClass).hide();
    tvDropDown(dropDownParentClass, dropDownClass, true);
    /********************* End Currency DropDown js *****************************************/
    /****************** Start Cart Js *******************************************/
    function cartDropDownJs() {
        $(document).on('click', '.tv-header-cart .tvheader-cart-wrapper a', function() {
            if (document.body.clientWidth <= mobileViewSize) {
                if ($('.tv-header-cart .tvcmscart-show-dropdown').hasClass('open')) {
                    $('.tv-header-cart .tvcmscart-show-dropdown').removeClass('open');
                } else {
                    removeDefaultDropdown();
                    $('.tv-header-cart .tvcmscart-show-dropdown').addClass('open');
                }
            }
        });

        $(document).on('mouseenter', '#_desktop_cart .tvheader-cart-wrapper', function() {
            if (document.body.clientWidth > mobileViewSize) {
                removeDefaultDropdown();
                $('#_desktop_cart .tvcmscart-show-dropdown').addClass('open');
            }
        });

        $(document).on('mouseleave', '#_desktop_cart .tvheader-cart-wrapper', function() {
            if (document.body.clientWidth > mobileViewSize) {
                $('#_desktop_cart .tvcmscart-show-dropdown').removeClass('open');
            }
        });
    } //cartDropDownJs
    cartDropDownJs();
    /****************** End Cart Js *******************************************/
    /****************** Start Product Timer Js *******************************************/
    productTime = function() {
        $('.tvproduct-timer').each(function() {
            var $this = $(this);
            var time = $(this).attr('data-end-time');
            $this.countdown(time, function(event) {
                $this.find('.tvproduct-timer-box .days').html(event.strftime('%D'));
                $this.find('.tvproduct-timer-box .hours').html(event.strftime('%H'));
                $this.find('.tvproduct-timer-box .minutes').html(event.strftime('%M'));
                $this.find('.tvproduct-timer-box .seconds').html(event.strftime('%S'));
            })
        })
    }
    /****************** End Product Timer Js *******************************************/
    //************************************ Start Product Details page slider ***************************************************/
    var swiperClass = [
        //['slider className','navigation nextClass','navigation prevClass','paging className']
        ['.tvcmslike-product .tvlike-product-wrapper', '.tvcmslike-next', '.tvcmslike-prev', '.tvcmslike-product'],
        ['.tvcmscross-selling-product .tvcross-selling-product-wrapper', '.tvcmscross-selling-next', '.tvcmscross-selling-prev', '.tvcmscross-selling-product'],
        ['.tvcmssame-category-product .tvsame-category-product-wrapper', '.tvcmssame-category-next', '.tvcmssame-category-prev', '.tvcmssame-category-product'],
    ];
    for (var i = 0; i < swiperClass.length; i++) {
        if ((swiperClass[i][0]).length) {
            $(swiperClass[i][0]).owlCarousel({
                loop: false,
                dots: false,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    320: { items: 1, slideBy: 1 },
                    330: { items: 1, slideBy: 1 },
                    425: { items: 2, slideBy: 1 },
                    480: { items: 2, slideBy: 1 },
                    650: { items: 3, slideBy: 1 },
                    767: { items: 3, slideBy: 1 },
                    768: { items: 3, slideBy: 1 },
                    992: { items: 3, slideBy: 1 },
                    1025: { items: 4, slideBy: 1 },
                    1200: { items: 4, slideBy: 1 },
                    1350: { items: 4, slideBy: 1 },
                    1660: { items: 4, slideBy: 1 },
                    1800: { items: 5, slideBy: 1 }
                }
            });
            $(swiperClass[i][1]).on('click', function(e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
            });
            $(swiperClass[i][2]).on('click', function(e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
            });
            $(swiperClass[i][3] + ' .tv-pagination-wrapper').insertAfter(swiperClass[i][3] + ' .tvcmsmain-title-wrapper .tvcms-main-title');
        }
    }
    //************************************ End Product Details page slider *****************************************************/
    /**************** Start Catelog Quentity Increment Decrement *************************/
    $(document).on('click', '.tvproduct-wrapper.catelog .tvproduct-catalog-btn-wrapper .tvproduct-cart-quentity-increment', function() {
        var obj = $(this).parent().parent().parent().parent();
        var qty = parseInt(obj.find('.tvproduct-cart-quentity').val()) + 1;
        obj.find('.tvproduct-cart-quentity').val(qty);
        $('.tvproduct-cart-catalog-btn form input[name=qty]').val(qty);
    });
    $(document).on('click', '.tvproduct-wrapper.catelog .tvproduct-catalog-btn-wrapper .tvproduct-cart-quentity-decrement', function() {
        var obj = $(this).parent().parent().parent().parent();
        var qty = parseInt(obj.find('.tvproduct-cart-quentity').val()) - 1;
        if (qty >= 1) {
            obj.find('.tvproduct-cart-quentity').val(qty);
            obj.parent().find('.tvproduct-cart-catalog-btn form input[name=qty]').val(qty);
        }
    });
    $(document).on('blur', '.tvproduct-wrapper.catelog .tvproduct-catalog-btn-wrapper .tvproduct-cart-quentity', function() {
        var obj = $(this).parent().parent().parent().parent();
        var qty = parseInt(obj.find('.tvproduct-cart-quentity').val());
        if (qty > 1 && qty != NaN) {
            obj.find('.tvproduct-cart-quentity').val(qty);
            obj.parent().find('.tvproduct-cart-catalog-btn form input[name=qty]').val(qty);
        } else {
            qty = 1;
            obj.find('.tvproduct-cart-quentity').val(qty);
            obj.parent().find('.tvproduct-cart-catalog-btn form input[name=qty]').val(qty);
        }
    });
    /**************** End Catelog Quentity Increment Decrement *************************/
    /******************* Start Footer Toggle ***********************************************/
    $('.footer-container .tvfooter-title-wrapper').on('click', function(e) {
        if (document.body.clientWidth > mobileViewSize) {
            e.stopPropagation();
        }
    });
    /******************* End Footer Toggle ***********************************************/
    /******************* Start Menu Sticky Js ********************************************/
    function bottomTotop() {
        var startMenuStickyHeight = 250;
        var scrollHeight = $(document).scrollTop();
        if (scrollHeight > startMenuStickyHeight) {
            $('.tvbottom-to-top').fadeIn('slow');
        } else {
            $('.tvbottom-to-top').fadeOut('slow');
        }
    }


    function menuStickyJs() {
        var checkMenuSticky = $('body').attr('data-menu-sticky');
        if (checkMenuSticky == '1') {
            var startMenuStickyHeight = 250;
            var scrollHeight = $(document).scrollTop();

            if (document.body.clientWidth > mobileViewSize) {
                if (scrollHeight > startMenuStickyHeight) {
                    $('.tvcmsheader-sticky').addClass('sticky');
                    // $('#wrapper').css('margin-top', $('.tvcmsheader-sticky').height() + 'px');
                } else {
                    $('.tvcmsheader-sticky').removeClass('sticky');
                    // $('#wrapper').css('margin-top', '0px');
                }
            } else {
                $('.tvcmsheader-sticky').removeClass('sticky');
                // $('#wrapper').css('margin-top', '0px');
            }
        }
    }
    menuStickyJs();

    function cartStickyFunction() {
        var startCartStickyHeight = 250;
        var scrollHeight = $(document).scrollTop();
        if (document.body.clientWidth > mobileViewSize) {
            if (scrollHeight > startCartStickyHeight) {
                $('.tvheader-cart-btn-wrapper.tvcms-classic-block').addClass('sticky'); 
                $('.tvheader-cart-wrapper.tvcms-popup-block').addClass('sticky');               
            } else {
                $('.tvheader-cart-btn-wrapper.tvcms-classic-block').removeClass('sticky');
                $('.tvheader-cart-wrapper.tvcms-popup-block').removeClass('sticky');
            }
        } else {
            $('.tvheader-cart-btn-wrapper.tvcms-classic-block').removeClass('sticky');
            $('.tvheader-cart-wrapper.tvcms-popup-block').removeClass('sticky');
        }
    }
    cartStickyFunction();

    $(window).on('scroll', function() {
        var menu_sticky = localStorage.getItem(currentThemeName + 'menu-sticky') || 'true';
        if (menu_sticky == 'true') {
            menuStickyJs();
        } else {
            $('.tvcmsheader-sticky').removeClass('sticky');
            // $('#wrapper').css('margin-top', '0px');
        }
        bottomTotop();
        bottomSticky();
        cartStickyFunction();
    });

    /******************* End Menu Sticky Js **********************/
    /************** Start Filter Search ************************************/
    $(document).on('click', '.tv_search_filter_wrapper .tvleft-right-title-wrapper', function() {
        if ($('#search_filters_wrapper #search_filters').hasClass('open')) {
            $('#search_filters_wrapper #search_filters').removeClass('open').stop(false).slideUp(500, "swing");
        } else {
            $('#search_filters_wrapper #search_filters').addClass('open').stop(false).slideDown(500, "swing");
        }
    });
    /************** End Filter Search ************************************/
    /************* Start Filter Search Category Js ***********************************/
    $(document).on('click', '#search_filters .tvfilter-search-types-title', function() {
        if (document.body.clientWidth <= mobileViewSize) {
            var search_type_id = $(this).attr('data-target');
            if ($(search_type_id).hasClass('open')) {
                $(this).removeClass('open');
                $(search_type_id).removeClass('open').stop(false).slideUp(200, "swing");
            } else {
                $(this).addClass('open');
                $(search_type_id).addClass('open').stop(false).slideDown(200, "swing");
            }
        }
    });
    /************* End Filter Search Category Js ***********************************/
    /*************** Start Left Right Column Js *************************************************/
    // Left panel hide show.
    $(document).on('click', '.tvcms-left-column-wrapper .tv-left-pannal-btn-wrapper', function(e) {
        e.preventDefault();
        if ($('#left-column').hasClass('open')) {
            $('#left-column').removeClass('open');
            $('.modal-backdrop.fade.in').remove();
        } else {
            $('#left-column').addClass('open');
            $('body').append('<div class="modal-backdrop fade in"></div>');
            e.stopPropagation();
        }
    });
    // Right Panel Hide show
    $(document).on('click', '.tvcms-right-column-wrapper .tv-right-pannal-btn-wrapper', function(e) {
        e.preventDefault();
        if ($('#right-column').hasClass('open')) {
            $('#right-column').removeClass('open');
            $('.modal-backdrop.fade.in').remove();
        } else {
            $('#right-column').addClass('open');
            $('body').append('<div class="modal-backdrop fade in"></div>');
            e.stopPropagation();
        }
    });
    $(document).on('click', '#left-column .tvleft-column-close-btn, #right-column .tvright-column-close-btn', function() {
        if ($(this).parent().parent().hasClass('open')) {
            $('.tv-left-right-panel-hide').removeClass('open');
            $('.modal-backdrop.fade.in').remove();
        }
    });
    // Left - right Panel Close. 
    $(document).on('click', '.modal-backdrop.fade.in', function() {
        if ($('#left-column.tv-left-right-panel-hide, #right-column.tv-left-right-panel-hide').hasClass('open')) {
            $('#left-column.tv-left-right-panel-hide, #right-column.tv-left-right-panel-hide').removeClass('open');
            $('.modal-backdrop.fade.in').remove();
        }
    });
    /*************** Start Left Right Column Js *************************************************/
    /************** Start Left Column brand list and supplier toggle ***************************/
    // leftRightBrandSupplierTitleToggle();
    // $(window).resize(function(){
    //     $('.tvfilter-brand-list-wrapper .tvfilter-brand-list, .tvfilter-supplier-list-wrapper .tvfilter-supplier-list').removeClass('open');
    //      });
    //      function leftRightBrandSupplierTitleToggle()
    // {
    //     $('.tvfilter-brand-list-wrapper .tvleft-right-title-toggle, .tvfilter-supplier-list-wrapper .tvleft-right-title-toggle, .block-categories .tvleft-right-title-toggle').on('click', function(){
    //          if(document.body.clientWidth <= 1199){
    //          if($(this).hasClass('open')) {
    //              $(this).removeClass('open');
    //              $(this).parent().parent().find('.tvside-panel-dropdown').removeClass('open').stop(false).slideUp(500, "swing");
    //          } else {
    //              $(this).addClass('open');
    //              $(this).parent().parent().find('.tvside-panel-dropdown').addClass('open').stop(false).slideDown(500, "swing");
    //          }
    //      }
    //      });
    // }
    /************** End Left Column brand list and supplier toggle ***************************/



    /******** Start Scroll to Top js ***************************/
    function scrollToTop() {
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        }, 500);
    }
    $(document).on('click', '.tvbottom-to-top-icon', function() { // When arrow is clicked
        scrollToTop();
    });
    /******** End Scroll to Top js ***************************/
    // *****************STRAT ZOOM_PRODUCT**************
    //if (document.body.clientWidth > 768) {
    if (document.body.clientWidth > 1024) {
        $(".product-cover img").elevateZoom({
            responsive: true,
            //zoomType : "lens",// for lens
            //lensShape : "round",// for lens
            //lensSize    : 150,// for lens
            zoomType: "inner",
            easing: true
        });
        $('body').on('mouseenter', '.tvproduct-image-slider .js-qv-product-cover', function() {
            // Remove old instance od EZ
            $('.zoomContainer').remove();
            $(this).removeData('elevateZoom');
            // Update source for images
            $(this).attr('src', $(this).attr('data-image-large-src'));
            $(this).data('zoom-image', $(this).data('zoom-image'));
        });
        $('body').on('click', '.tvvertical-slider .js-thumb', function(e) {
            e.preventDefault();
            var img_val = $(this).attr('data-image-large-src');
            $('.product-cover img').attr('src', img_val);
            $('.zoomContainer img').attr('src', img_val);
            $('.zoomWindowContainer div').css("background-image", "url(" + $(this).attr('data-image-large-src') + ")");
        });
    }

    // *****************END ZOOM_PRODUCT**************//
    /****************** Start Tooltip Js **************************/
    $(function() {
        'use strict';
        var popoverConfig = {
            trigger: 'hover',
            template: [
                '<div class="popover tvtooltip" role="tooltip">',
                '<div class="popover-arrow"></div>',
                '<h3 class="popover-title"></h3>',
                '<div class="popover-content"></div>',
                '</div>'
            ].join(''),
            placement: 'top',
            container: 'body',
        };
        initPopovers();

        function initPopovers() {
            $('[data-toggle="tvtooltip"]').popover(popoverConfig);
        }

        $(document).ajaxComplete(function() {
            initPopovers();
        });
    });
    /****************** End Tooltip Js **************************/

    $(document).on('click', 'a.tvcart-product-list-checkout-link, .tvcart-product-list-checkout', function(e) {
        location.href = prestashop.urls.pages.order;
    });
    /********************* tab title js ***************************/
    $(document).on('click', '.tvcms-header-menu .tvmain-menu-open', function() {
        if (document.body.clientWidth >= 768) {
            $(this).addClass('open');
            $('.tvcms-header-menu').find('.tvcmsheader-main-menu-wrapper').addClass('open');
            $('body').addClass('tvactive-search');
        }
    });
    $(document).on('click', '.tvcms-header-menu .tvmain-menu-close', function() {
        if (document.body.clientWidth >= 768) {
            $(this).removeClass('open');
            $('.tvcms-header-menu').find('.tvcmsheader-main-menu-wrapper').removeClass('open');
            $('body').removeClass('tvactive-search');
        }
    });
    /*************** Start Left Right Column Js *************************************************/
    $(document).ajaxComplete(function() {
        customImgLazyLoad();
        productTime();
    });
    /*************** Product Page Js *************************************************/
    $(document).on('click', '#product .product-variants li.input-container label', function(e) {
        $(this).find('span').css('border-color', '#000')
            .css('box-shadow', 'none')
            .css('color', '#000');
        $(this).find('i').css('opacity', '1')
            .css('-webkit-transform', 'scale(1)')
            .css('-moz-transform', 'scale(1)')
            .css('-ms-transform', 'scale(1)')
            .css('-o-transform', 'scale(1)');
    });

    function bottomSticky() {
        var startMenuStickyHeight = 878;
        var scrollHeight = $(document).scrollTop();

        if (document.body.clientWidth > mobileViewSize) {
            if (scrollHeight > startMenuStickyHeight) {
                event.stopPropagation();
                $('#product .tvfooter-product-sticky-bottom').addClass('sticky');
                var getHtml = $('.tvproduct-page-wrapper .product-actions').html();
                var GetQty = $('#quantity_wanted').val();
                //$('.tvproduct-page-wrapper .product-actions').html('');  
                var getHtmlsBottom = $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html();
                if (getHtmlsBottom == '') {
                    $('.tvfooter-product-sticky-bottom #bottom_sticky_data').append(getHtml);
                    $('#bottom_sticky_data #new_comment_form_ok').css('display', 'none');
                    $('#bottom_sticky_data #quantity_wanted').val(GetQty);
                    $('#bottom_sticky_data #quantity_wanted').attr('value', GetQty);
                    $('body').css('margin-bottom', $('.tvfooter-product-sticky-bottom.sticky').height() + 'px');
                }
            } else if (scrollHeight < startMenuStickyHeight) {
                $('#product .tvfooter-product-sticky-bottom').removeClass('sticky');
                var GetQty = $('#bottom_sticky_data #quantity_wanted').val();
                event.stopPropagation();
                var getHtmls = $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html();
                if (getHtmls != '') {
                    //var return_back_html = $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html();
                    $('#quantity_wanted').val(GetQty);
                    $('#quantity_wanted').attr('value', GetQty);
                    $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html('');
                    //$('.tvproduct-page-wrapper .product-actions').html(return_back_html);
                }
            }
        } else { //remove mobile
            event.stopPropagation();
            $('#product .tvfooter-product-sticky-bottom').removeClass('sticky');
            var getHtmls = $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html();
            if (getHtmls != '') {
                //var return_back_html = $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html();
                $('.tvfooter-product-sticky-bottom #bottom_sticky_data').html('');
                //$('.tvproduct-page-wrapper .product-actions').html(return_back_html);
            }
        }
    }

    $(document).on('click', '#bottom_sticky_data .btn.btn-touchspin.js-touchspin.bootstrap-touchspin-up', function() {
        event.stopPropagation();
        var obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
        var qty = parseInt(obj.find('#quantity_wanted').val()) + 1;
        $('.input-group.form-control').attr('value', qty);
        $('.input-group.form-control').val(qty);
    });

    $(document).on('click', '#bottom_sticky_data .btn.btn-touchspin.js-touchspin.bootstrap-touchspin-down', function() {
        event.stopPropagation();
        var obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
        var qty = parseInt(obj.find('#quantity_wanted').val()) - 1;
        if (qty >= 1) {
            $('.input-group.form-control').attr('value', qty);
            $('.input-group.form-control').val(qty);
        }
    });

    $(document).on('click', '.tvsticky-up-arrow', function(e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        });
    });
    $(document).on('click', '.ttvcmscart-show-dropdown-right .ttvclose-cart , .modal-backdrop-cart', function() {
        $('.ttvcmscart-show-dropdown-right').removeClass('open');
        $('body').removeClass('classicCartOpen');
        $('body').removeClass('footerCartOpen');

    });
    $(document).on('click', '.tvheader-cart-btn-wrapper', function() {
        $('.ttvcmscart-show-dropdown-right').addClass('open');
        $('body').removeClass('footerCartOpen');
        $('body').addClass('classicCartOpen');
    });
    $('#product_comparison .product-desc').balance();
    $('#product_comparison .tvproduct-name').balance();
    $('#product_comparison .product-price-and-shipping').balance();
    $('#product_comparison .thumbnail-container').balance();
    $(window).on('resize', function() {
        changePositionLeftColumnMobileView();
        //customImgLazyLoad();
        ProductPageVerSlider();
        HomePageVerSlider();
        removeDefaultDropdown();
        showView();
        cartDropDownJs();
        bottomSticky();
        cartStickyFunction();
        $('.tvmain-menu-dropdown').removeClass('open');
    });
});
$(window).on('scroll', function() {
    $('#left-column').show();
    themevoltyCallEvents(true);
});
$(window).on('load', function() {
    $('.tvcms-loading-overlay').fadeOut();
    if (isFunction(WOW) && TVCMSCUSTOMSETTING_WOW_JS != 0) {
        new WOW().init();
    }
    if (document.body.clientWidth > mobileViewSize)
        themevoltyCallEvents(false);
});