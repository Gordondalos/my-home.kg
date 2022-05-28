/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
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
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2021 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */

var mobileViewSize = 991;
var gettvcmstabproductsajaxStatus = true;
jQuery(document).ready(function($) {
    var gettvcmstabproductsajax = function() {
        if ($('.tvcmstab-title-product').length && gettvcmstabproductsajaxStatus) {
            gettvcmstabproductsajaxStatus = false;
            $.ajax({
                type: 'POST',
                url: gettvcmstabproductslink,
                success: function(data) {
                    $('.tvcmstab-title-product').html(data);
                    tvcmstabproductsajax();
                    customImgLazyLoad('.tvcmstab-title-product');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }
    //setTimeout(function(){gettvcmstabproductsajax()},100);
    //gettvcmstabproductsajax();
    themevoltyCallEventsPush(gettvcmstabproductsajax, null);

    function tvcmstabproductsajax() {
        /********************** Start Tab js *****************************/
        $('.tab-index').click(function(e) {
            $id = $(this).attr('data-tab-data');
            $paging = $(this).attr('data-tab-paging');
            $('.tab-index').removeClass('active');
            $('.tvcmstab-product').removeClass('active');
            $('.tvtab-pagination').removeClass('active');
            $('.tvcmstab-product').hide();
            $('.tvtab-pagination').hide();

            $(this).addClass('active');
            $('#' + $id).addClass('active').fadeIn('500');
            $('.' + $paging + '-pagination').addClass('active').show();
        });

        $('.tvcmstab-product.active').fadeIn();
        $('.tvtab-pagination.active').fadeIn();

        $('.tvcmstab-title-product .tvtab-pagination-wrapper').insertAfter('.tvcmstab-title-product  .tvcms-main-title');

        /********************** End Tab js *****************************/

        /****************** Start Tab Product Slider Js *******************************************/
        var owlClass = [
            //['slider className','navigation nextClass','navigation prevClass']
            ['.tvtab-featured-product .tvproduct-wrapper-content-box', '.tvtab-featured-product-next', '.tvtab-featured-product-prev'],
            ['.tvtab-new-product .tvproduct-wrapper-content-box', '.tvtab-new-product-next', '.tvtab-new-product-prev'],
            ['.tvtab-special-product .tvproduct-wrapper-content-box', '.tvtab-special-product-next', '.tvtab-special-product-prev'],
            ['.tvtab-best-seller-product .tvproduct-wrapper-content-box', '.tvtab-best-seller-product-next', '.tvtab-best-seller-product-prev'],
        ];

        for (var i = 0; i < owlClass.length; i++) {
            if ($(owlClass[i][0]).length) {
                if ($(owlClass[i][0]).attr('data-has-image') == 'true') {
                    var owl = $(owlClass[i][0]).owlCarousel({
                        loop: false,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1 },
                            320: { items: 1, slideBy: 1 },
                            330: { items: 1, slideBy: 1 },
                            425: { items: 2, slideBy: 1 },
                            591: { items: 1, slideBy: 1 },
                            650: { items: 2, slideBy: 1 },
                            767: { items: 2, slideBy: 1 },
                            768: { items: 2, slideBy: 1 },
                            992: { items: 2, slideBy: 1 },
                            1025: { items: 3, slideBy: 1 },
                            1200: { items: 3, slideBy: 1 },
                            1350: { items: 3, slideBy: 1 },
                            1660: { items: 3, slideBy: 1 },
                            1800: { items: 3, slideBy: 1 }
                        }
                    });
                } else {
                    var owl = $(owlClass[i][0]).owlCarousel({
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
                            1800: { items: 4, slideBy: 1 }
                        }
                    });
                }

                $(owlClass[i][1]).on('click', function(e) {
                    e.preventDefault();
                    $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
                });
                $(owlClass[i][2]).on('click', function(e) {
                    e.preventDefault();
                    $('#' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
                });
            }
        }
        /****************** End Tab Product Slider Js *******************************************/
        changeTabTitles();
    }

    function changeTabTitles() {
        if (document.body.clientWidth <= 767 && document.body.clientWidth > 575) {
            $('.tvtab-product .tvtab-title-wrapper').insertAfter('.tvtab-product .tvcmsmain-title-wrapper');
        } else {
            $('.tvtab-product .tvtab-title-wrapper').insertAfter('.tvtab-product .tvcmsmain-title-wrapper .tvcms-main-title');
        }
    }
    $(window).resize(function() {
        changeTabTitles();
    });
});