/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2021 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

jQuery(document).ready(function($) {
    var gettvcmsnewproductsajax = function() {
        if ($('.tvcmsnew-product').length) {
            $.ajax({
                type: 'POST',
                url: gettvcmsnewproductslink,
                success: function(data) {
                    $('.tvcmsnew-product').html(data);
                    makeNewProductSlider();
                    customImgLazyLoad('.tvcmsnew-product');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    //setTimeout(function(){gettvcmsnewproductsajax()},500);
                    console.log(textStatus, errorThrown);
                }
            });
        }
    }
    //setTimeout(function(){gettvcmsnewproductsajax()},500);
    //gettvcmsnewproductsajax();
    themevoltyCallEventsPush(gettvcmsnewproductsajax, null);

    function makeNewProductSlider() {
        var swiperClass = [
            //['slider className','navigation nextClass','navigation prevClass','paging className']
            ['.tvcmsnew-product .tvnew-product-wrapper', '.tvcmsnew-next', '.tvcmsnew-prev', '.tvcmsnew-product'],
        ];

        for (var i = 0; i < swiperClass.length; i++) {
            if ($(swiperClass[i][0]).attr('data-has-image') == 'true') {
                $(swiperClass[i][0]).owlCarousel({
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
                        1800: { items: 4, slideBy: 1 }
                    }
                });
            }

            $(swiperClass[i][1]).on('click', function(e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-next').trigger('click');
            });
            $(swiperClass[i][2]).on('click', function(e) {
                e.preventDefault();
                $('.' + $(this).attr('data-parent') + ' .owl-nav .owl-prev').trigger('click');
            });
            $(swiperClass[i][3] + ' .tv-pagination-wrapper').insertAfter(swiperClass[i][3] + ' .tvcmsmain-title-wrapper');
        }
    }
});