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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2021 PrestaShop SA
*  @version  Release: jQueryRevisionjQuery
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
 
jQuery(document).ready(function($){     
    var tvMainSliderSpeed = jQuery('.tvcmsmain-slider-wrapper').attr('data-speed');
    var tvMainSliderPause = '';
    if (jQuery('.tvcmsmain-slider-wrapper').attr('data-pause-hover') == 'true') {
        tvMainSliderPause = true;
    }

    var mainSliderHomePage = jQuery('.tv-main-slider #tvmain-slider');
    mainSliderHomePage.owlCarousel({
      loop: true,
      dots: true,
      nav: false,
      autoplay:true,
      autoplayTimeout: tvMainSliderSpeed,
      autoplayHoverPause: tvMainSliderPause,
      responsive: {
        0: { items: 1},
        320:{ items: 1, slideBy: 1},
        640:{ items: 1, slideBy: 1},
        768:{ items: 1, slideBy: 1},
        1024:{ items: 1, slideBy: 1},
        1399:{ items: 1, slideBy: 1},
      },
    });
    jQuery('.tvmain-slider-next-pre-btn .tvcmsmain-prev').click(function(e){
      e.preventDefault();
      jQuery('.tv-main-slider .owl-nav .owl-prev').trigger('click');
    });

    jQuery('.tvmain-slider-next-pre-btn .tvcmsmain-next').click(function(e){
      e.preventDefault();
      jQuery('.tv-main-slider .owl-nav .owl-next').trigger('click');
    });

    mainSliderHomePage.on('translated.owl.carousel', function(event) {
      mainSliderHomePageJs();
    });

    function mainSliderHomePageJs()
    {
      var num_index = jQuery('#tvmain-slider .owl-dots').find('.owl-dot.active').index();
      jQuery('.tvmain-slider-content-wrapper .tvmain-slider-content-inner').removeClass('active');
      jQuery('.tvmain-slider-content-wrapper .tvmain-slider-content-inner').eq(num_index).addClass('active');
    }

    jQuery(document).on('click', '.tvmain-slider-content-wrapper .tvmain-slider-content-inner', function(){
      var num_index = jQuery(this).attr('data-index');
      jQuery('.tvmain-slider-content-wrapper .tvmain-slider-content-inner').removeClass('active');
      jQuery(this).addClass('active');
      jQuery('#tvmain-slider .owl-dots .owl-dot').eq(num_index).trigger('click')
    });
});