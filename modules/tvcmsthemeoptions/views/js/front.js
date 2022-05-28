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
*/
var currentThemeName = tvthemename+"_";
var isCallAjax = true;
var storage;
$(document).ready(function(e){
 /******start init*******/
    function getUrlVars(){
      var vars = [], hash;
      var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
      for(var i = 0; i < hashes.length; i++){
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
      }
      return vars;
    }//function getUrlVars()

    storage = $.localStorage;
    var cssPath = prestashop.urls.css_url;
    var demo_theme = getUrlVars()["demo-theme"];
    var demo_theme_mode = getUrlVars()["demo-theme-mode"];
    var cssDataResult = '';
    if(demo_theme != '' && demo_theme != undefined)//FOR REQUEST
      gettvcmsthemeoptions();

    function storageGet(key){
      return storage.get(currentThemeName+key);
    }
    function storageSet(key,value){
      storage.set(currentThemeName+key,value);
    } 

    function setRequestTheme(demo_theme){
      if(demo_theme == "box-width"){
        storageSet("box-layout",true);  
      }else if(demo_theme != '' && demo_theme != undefined){
        storageSet("theme",demo_theme);
        $('.tvselect-theme #select_theme option[value="' + storageGet("theme") + '"]').prop('selected', true);
        var themeColorVal = $('option:selected', $('#select_theme')).attr('data-color');
        var themeColorVal2 = $('option:selected', $('#select_theme')).attr('data-color-two');
        storageSet("theme_color", themeColorVal);//save localStorage
        storageSet("theme_color2", themeColorVal2);//save localStorage
        setCustomeTheme();
        setTimeout(function(){$('.tvtheme-control-icon').trigger('click')},500);
      }
      if(demo_theme_mode == 'dark'){
        storageSet("theme-dark-mode", 1);
      }else if(demo_theme != '' && demo_theme != undefined){
        storageSet("theme-dark-mode", 0);
      }
    }
  
  /******end init*******/
  
  function gettvcmsthemeoptions(){
    if(isCallAjax){
      isCallAjax = false;
      $.ajax({
          type: 'POST',
          url: getThemeOptionsLink,
          success: function(data){
            $('body').prepend(data);
            $('#themecolor1').minicolors();
            $('#themecolor2').minicolors();
            $('#themebgcolor2').minicolors();
            $('#themebodybgcolor').minicolors();
            $('#themeCustomTitleColor').minicolors();
            loadJs();
            setRequestTheme(demo_theme);
            getCustomSetting();
            getCustomFontSettingOnPageLoad();
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
      });
    }
    
  }
  //setTimeout(function(){gettvcmsthemeoptions()},1000);
  //document.addEventListener('scroll', function(e) {
  $(document).on('scroll', function() {
    gettvcmsthemeoptions();
  });
  
  function escapeRegExp(string){
      return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
  }
  function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
  }
  function idealTextColor(bgColor) {

   var nThreshold = 105;
   var components = getRGBComponents(bgColor);
   var bgDelta = (components.R * 0.299) + (components.G * 0.587) + (components.B * 0.114);

   return ((255 - bgDelta) < nThreshold) ? "#000000" : "#ffffff";   
  }

  function getRGBComponents(color) {       

      var r = color.substring(1, 3);
      var g = color.substring(3, 5);
      var b = color.substring(5, 7);

      return {
         R: parseInt(r, 16),
         G: parseInt(g, 16),
         B: parseInt(b, 16)
      };
  }
  
  function setCustomeTheme(){ 
    if ((storageGet("theme_color") != undefined &&  storageGet("theme_color") != '') || (storageGet("theme_color2") != undefined &&  storageGet("theme_color2") != '')) {
      $('#themecolor1').val(storageGet("theme_color"));
      $('#themecolor2').val(storageGet("theme_color2"));

      if(cssDataResult == ""){
        $.get( cssPath+"theme-custom.css", function( dataResult ) {
          cssDataResult = dataResult;
          setCustomCssValues(cssDataResult);
        });
      }else{
        setCustomCssValues(cssDataResult);
      }
    }
  }
  function setCustomCssValues(dataResult){
    var TextColor1 = idealTextColor(storageGet("theme_color"));
    var TextColor2 = idealTextColor(storageGet("theme_color2"));
    dataResult = replaceAll(dataResult,'#maincolor1',storageGet("theme_color"));
    dataResult = replaceAll(dataResult,'#maincolor2',storageGet("theme_color2"));
    dataResult = replaceAll(dataResult,'#maincolortext1',TextColor1);
    dataResult = replaceAll(dataResult,'#maincolortext2',TextColor2);
    $('.tvcms-custom-theme .custom-css').remove('');
    $(".tvcms-custom-theme").append("<div class='custom-css'><style>"+dataResult+"</style><div>");
  }
  $(document).on("change",'input[name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT"]',function(){
    $('.tvcheck-popup').hide();
    $(this).parent().find('.tvcheck-popup').show();
    storageSet("theme-dark-mode", $(this).val());
    setDarkMode();
  });

  function setDarkMode(){
    if(storageGet("theme-dark-mode")==0){
      $('.tvtheme-theme-mode .lightModeWrapper .tvcheck-popup').show();
      $('.tvtheme-theme-mode .lightModeWrapper input').prop('checked', true);
      $('.tvcms-custom-theme .dark-mode-css').remove('');
    }else{
      $('.tvtheme-theme-mode .darkModeWrapper .tvcheck-popup').show();
      $('.tvtheme-theme-mode .darkModeWrapper input').prop('checked', true);
      $.get( cssPath+"dark-theme.css", function( data ) {
            $('.tvcms-custom-theme .dark-mode-css').remove('');
            data = replaceAll(data,'url(..\/img\/','url('+prestashop.urls.img_url);
            $(".tvcms-custom-theme").append("<div class='dark-mode-css'><style>"+data+"</style><div>");
      });
    }
  }
  function setBoxLayout(obj){
      // if($(obj).find('.toggle.btn.btn-default').hasClass('off')){
      if($(obj).prop("checked") == true){
        $('.tv-main-div').addClass('tv-box-layout container');
        $('.tv-main-div').removeClass('tv-full-layout');

        $('.tvtheme-background-patten, .tvtheme-background-color').show();
        if(storageGet("theme-bg-status")){
          $('body').css('background-image',storageGet("theme-bg-pattern"));
          $('body').css('background-color','');
        }else{
          $('body').css('background-color', storageGet("theme-bg-color"));
          $('body').css('background-image', "");
        } 
        storageSet("box-layout", true);//save localStorage
      }else{
        $('.tv-main-div').addClass('tvcms-full-layout');
        $('.tv-main-div').removeClass('tv-box-layout container');

        $('.tvtheme-background-patten, .tvtheme-background-color').hide();
        storageSet("box-layout", false);//save localStorage
      }
    }
    function getPattenSetting(obj){
        $(obj).addClass('active');
        $('.tvtheme-pattern-image').removeClass("active");
        $('.tvtheme-pattern-image').each(function(){
          if ("url("+$(this).attr('data-background-image-url')+")" == storageGet("theme-bg-pattern")) {
            $(this).addClass('active');
          }
        });
        $('body').css('background-image',"url("+storageGet("theme-bg-pattern")+")");
        $('body').css('background-color','');
    }
    function getBgColorSetting(obj){
    $('body').css('background-color', storageGet("theme-bg-color"));
        $('body').css('background-image', "");
        obj.parent().find('.minicolors-swatch-color').css('background-color',storageGet("theme-bg-color"));
    }
  function getCustomSetting(){
    if(!storageGet("themeControl")){
          resetCustomSetting();
      }
      $('.tvselect-theme #select_theme option[value="' + storageGet("theme") + '"]').prop('selected', true);
      setCustomeTheme();
    if(($('.tvselect-theme #select_theme').val()).match(/theme_custom/g)){
      $('.tvtheme-color-one').show();
      $('.tvtheme-color-two').show();
      $('#themecolor1').parent().find('.minicolors-swatch-color').css('background-color',storageGet("theme_color"));
      $('#themecolor2').parent().find('.minicolors-swatch-color').css('background-color',storageGet("theme_color2"));
    }else{
      $('.tvtheme-color-one').hide();
      $('.tvtheme-color-two').hide();
    }
    setDarkMode();

      if(storageGet("box-layout")){
        var obj = $(".tvtheme-box-layout-option");
        setBoxLayout(obj);
        if(storageGet("theme-bg-status")){
          getPattenSetting($('.tvtheme-pattern-image'));
        }else{
          getBgColorSetting($('#themebgcolor2'));
        }
        obj.trigger('click');
      }else{
        $('.tvtheme-background-patten, .tvtheme-background-color').hide();
      }

      if(storageGet("menu-sticky")){
        $('.tvtheme-menu-sticky-option').trigger('click');
      }
     
  }
  function resetCustomSetting(){
    storage.removeAll();
      storageSet("themeControl", true);
      storageSet("theme", "");
      storageSet("theme_color", "");
      storageSet("theme_color2", "");
      storageSet("box-layout", false);
      storageSet("menu-sticky", true);
      storageSet("themeColor1", '#fff');//default color1
      storageSet("themeColor2", '#ededed');//default color1
      storageSet("theme-bg-pattern", "url("+prestashop.urls.img_url+"pattern/pattern14.png)");//save storage
      storageSet("theme-bg-color", '#000');//default color2
      storageSet("theme-bg-status", true);//patten bg dafault on box layout on*/
      storageSet("theme-body-bgcolor-status", false);
      storageSet("theme-body-bgcolor-effect", '');
      storageSet("theme-body-bgcolor", "");
      storageSet("theme-body-bgimage", "");
      storageSet("theme-custom-font-1", "");
      storageSet("theme-custom-font-link-1", "");
      storageSet("theme-custom-font-2", "");
      storageSet("theme-custom-font-link-2", "");
      storageSet("theme-title-color", "");
      storageSet("theme-dark-mode", 0);
  }

    function getCustomFontSettingOnPageLoad(){
      
      if (storageGet("theme-body-bgcolor-status") == true) {
        $('.tvtheme-body-background-option').trigger('click');
        $('.tvtheme-body-bgcolor').show();
        $('.tvtheme-body-background-patten').show();

        if (storageGet("theme-body-bgcolor-effect").trim() == 'color') {

          $('.tv-main-div').css('background-color', storageGet("theme-body-bgcolor"));
          $('#themebodybgcolor').val(storageGet("theme-body-bgcolor"));
          $('#themebodybgcolor').parent().find('.minicolors-swatch-color').css('background-color',storageGet("theme-body-bgcolor"));

        } else{
          $('.tv-main-div').css('background-image',storageGet('theme-body-bgimage'));
          storageGet('theme-body-bgimage');
        }
      } else {
        $('.tvtheme-body-bgcolor').hide();
        $('.tvtheme-body-background-patten').hide();
      }

      setCustomeFontTheme(1);//title font 1
      setCustomeFontTheme(2);//body font 2
      setCustomeFontTheme(3);//title color 3
      
    }

 function setCustomeFontTheme($dataCall){
  var returnData ="";
      /******************Title Font********************/
      if (storageGet("theme-custom-font-1") != undefined && storageGet("theme-custom-font-1") != '' && $dataCall == 1) {
        $('.tvselect-title-font-1-select').val(storageGet("theme-custom-font-1"));
        $.get( cssPath+"theme-custom-title-font.css", function( data ) {
          var link_1 = '';
          data = replaceAll(data,'#fontFamily1', storageGet("theme-custom-font-1"));
          link_1 = '@import url(\''+storageGet("theme-custom-font-link-1")+'\');';
          returnData += link_1+' '+data;
          // $(".tvcms-custom-font").html($(".tvcms-custom-font").html()+"<style>"+returnData+"</style>");
          $('.tvcms-custom-font-1').html("<style>"+returnData+"</style>");
        });
      } else if (storageGet("theme-custom-font-1") == '') {
        $('.tvcms-custom-font-1').html('');
      }
      /******************title color********************/
      if (storageGet("theme-title-color") != undefined &&  storageGet("theme-title-color") != ''  && $dataCall == 3) {
        $.get( cssPath+"theme-custom-title-color.css", function( data ) {
          data = replaceAll(data,'#customTitleColor',storageGet("theme-title-color"));
          returnData = data;
          $('#themeCustomTitleColor').val(storageGet("theme-title-color"));
          $('#themeCustomTitleColor').parent().find('.minicolors-swatch-color').css('background-color',storageGet("theme-title-color"));
          // $(".tvcms-custom-font").html($(".tvcms-custom-font").html()+"<style>"+returnData+"</style>");
          $('.tvcms-custom-color').html('<style>'+returnData+'</style>');
        });
      } else if (storageGet("theme-title-color") == '') {
          $('.tvcms-custom-color').html('');
      }
      /******************Body Font********************/
      if (storageGet("theme-custom-font-2") != undefined && storageGet("theme-custom-font-2") != '' && $dataCall == 2) {
        $('.tvselect-title-font-2-select').val(storageGet("theme-custom-font-2"));
        $.get( cssPath+"theme-custom-body-font.css", function( data ) {
          var link_2 = '';
          data = replaceAll(data,'#fontFamily2',storageGet("theme-custom-font-2"));
          link_2 = '@import url(\''+storageGet("theme-custom-font-link-2")+'\');';
          returnData = link_2+' '+data;
          // $(".tvcms-custom-font").html($(".tvcms-custom-font").html()+"<style>"+returnData+"</style>");
          $('.tvcms-custom-font-2').html('<style>'+returnData+'</style>');
        });
      } else if (storageGet("theme-custom-font-2") == '') {
        $('.tvcms-custom-font-2').html('');
      }
    }

  function loadJs(){
    $(".tvcms-custom-font-1").html('');
    $(".tvcms-custom-font-2").html('');
    $(".tvcms-custom-color").html('');

    $(document).on('click','.tvtheme-menu-sticky-option',function(e){
      if($(this).prop("checked") == true){
        storageSet("menu-sticky", true);//save localStorage
      } else {
        storageSet("menu-sticky", false);//save localStorage  
      }
    });

    $(document).on('click','.tvcmstheme-control .tvtheme-control-icon',function(e){
      var themeOptionWrapper = $('.tvcmstheme-control .tvtheme-control-wrapper');
      if(themeOptionWrapper.hasClass('open')){
        themeOptionWrapper.removeClass('open');
        $('.tvcmstheme-control').removeClass('open');
      }else{
        themeOptionWrapper.addClass('open');
        $('.tvcmstheme-control').addClass('open');
      }
    });

    $(document).on('change','.tvselect-theme #select_theme',function(e){
      e.preventDefault();
      var themeVal = $(this).val();
      var themeColorVal = $('option:selected', this).attr('data-color');
      var themeColorVal2 = $('option:selected', this).attr('data-color-two');
      storageSet("theme", themeVal);//save localStorage
      storageSet("theme_color", themeColorVal);//save localStorage
      storageSet("theme_color2", themeColorVal2);//save localStorage
      $('.tvtheme-color-one').hide();
      $('.tvtheme-color-two').hide();
      if(themeVal == ""){
        $('.tvcms-custom-theme .custom-css').remove();
        $('.minicolors .themecolor1').hide();
        $('.minicolors .themecolor2').hide();
      }else if(themeVal.match(/theme_custom/g)){
          $('.tvtheme-color-one').show();
          $('.tvtheme-color-two').show();
          var theme_color = $('#themecolor1').val();
          var theme_color2 = $('#themecolor2').val();
          storageSet("theme_color", theme_color);
          storageSet("theme_color2", theme_color2);
          setCustomeTheme();
      }else{
          setCustomeTheme();
      }
    });
    
    $(document).on('change','#themecolor1',function(e){      
      var theme_color = $(this).val();
      storageSet("theme_color", theme_color);
       setCustomeTheme();
    });

    $(document).on('change','#themecolor2',function(e){
      var theme_color2 = $(this).val();
      storageSet("theme_color2", theme_color2);
      setCustomeTheme();
    });
   
    $(document).on('click','.tvtheme-box-layout-option',function(e){
      setBoxLayout(this);
    });

    $(document).on('click','.tvtheme-pattern-image',function(e){
      $('.tvtheme-pattern-image').removeClass('active');
        $(this).addClass('active');
        $('body').css('background-image',"url("+$(this).attr('data-background-image-url')+")");
        storageSet("theme-bg-pattern", "url("+$(this).attr('data-background-image-url')+")");//save localStorage
        $('body').css('background-color','');
        storageSet("theme-bg-status",true);
    });
     $(document).on('change','#themebgcolor2',function(e){
        $('body').css('background-color', $(this).val());
        $('body').css('background-image', "");     
        storageSet("theme-bg-status", false);
        storageSet("theme-bg-color", $(this).val());
    });

    $(document).on('click','.tvtheme-body-background', function(){
      if ($('.tvtheme-body-background-option').prop("checked") == true) {
        $('.tvtheme-body-bgcolor').hide();
        $('.tvtheme-body-background-patten').hide();
        $('.tv-main-div').removeAttr('style');
        storageSet("theme-body-bgcolor-status", false);
      } else {
        $('.tvtheme-body-bgcolor').show();
        $('.tvtheme-body-background-patten').show();
        var val = storageGet("theme-body-bgcolor");
        $('.tv-main-div').css('background-color', val);
        storageSet("theme-body-bgcolor-status", true);
      }
    });

    $(document).on('change','#themebodybgcolor',function(e){
      $('.tv-main-div').removeAttr('style');
        $('.tv-main-div').css('background-color', $(this).val());
        storageSet("theme-body-bgcolor", $(this).val());
        storageSet("theme-body-bgcolor-effect", 'color');
    });

    $(document).on('click','.tvtheme-body-pattern-image',function(e){
      $('.tvtheme-body-pattern-image').removeClass('active');
        $('.tv-main-div').removeAttr('style');
        $(this).addClass('active');
        // $(this).css('background-image')
        var tmp = $(this).attr('data-background-image-url');
        $('.tv-main-div').css('background-image','url('+tmp+')');
        storageSet("theme-body-bgimage", 'url('+tmp+')');//save localStorage
        storageSet("theme-body-bgcolor-effect", 'image');
    });    

    $(document).on('change','.tvselect-title-font-1 #select_title_font_1',function(e){
      var font_title = $(this).val();
      var font_link = $(this).find('option:selected').attr('data-font-link');
      storageSet("theme-custom-font-1", font_title);
      storageSet("theme-custom-font-link-1", font_link);
      setCustomeFontTheme(1);
    });

    $(document).on('change','.tvselect-title-font-2 #select_title_font_2',function(e){
      var font_title = $(this).val();
      var font_link = $(this).find('option:selected').attr('data-font-link');
      storageSet("theme-custom-font-2", font_title);
      storageSet("theme-custom-font-link-2", font_link);
      setCustomeFontTheme(2);
    });

    $(document).on('change','#themeCustomTitleColor',function(e){
      storageSet("theme-title-color", $(this).val());
      setCustomeFontTheme(3);
    });

    $(document).on('click','.tvtheme-control-reset',function(e){
      console.log("reset");
      resetCustomSetting();
      location.reload(); 
    });
  }
});
//==========================================