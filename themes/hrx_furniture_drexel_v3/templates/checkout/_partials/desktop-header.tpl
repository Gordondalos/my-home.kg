{**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2019 PrestaShop SA
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class="tvcmsdesktop-top-header-wrapper ">
        <div class='container-fluid tvcmsdesktop-top-header'>
            <div class="container tvcmsdesktop-top-wrapper">
                <div class='tvheader-offer-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                    {hook h='displayTopOfferText'}
                </div>
                <div class='tvheader-language-currency-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                    <div class="tvheader-language">{if $withData}{hook h='displayNavLanguageBlock'}{/if}</div>
                    <div class="tvheader-currency">{if $withData}{hook h='displayNavCurrencyBlock'}{/if}</div>
                    <div id='tvcmsdesktop-account-button'>
                        {if $withData}
                        <div class="tvcms-header-myaccount">
                            <div class="tv-header-account">
                                <div class="tv-account-wrapper">
                                    <button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop">
                                        <i class='material-icons'>person</i>
                                        {* <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 35.6 34.1" style="enable-background:new 0 0 35.6 34.1;" xml:space="preserve">
                                            <g id="XMLID_11_">
                                                <g id="XMLID_1_">
                                                    <path id="XMLID_32_" style="fill:#FFD741;" d="M17.8,18.1c-4.8,0-8.6-3.9-8.6-8.6s3.9-8.6,8.6-8.6s8.7,3.9,8.7,8.6
                                                            S22.6,18.1,17.8,18.1z" />
                                                    <path id="XMLID_29_" d="M17.8,1.7c4.3,0,7.8,3.5,7.8,7.8s-3.5,7.8-7.8,7.8S10,13.8,10,9.5S13.5,1.7,17.8,1.7 M17.8,0
                                                            c-5.2,0-9.5,4.3-9.5,9.5c0,5.2,4.3,9.5,9.5,9.5s9.5-4.3,9.5-9.5C27.3,4.3,23,0,17.8,0L17.8,0z" />
                                                </g>
                                                <path id="XMLID_3_" style="fill:none;stroke:#010101;stroke-width:1.7;stroke-miterlimit:10;" d="M0.8,34
                                                        c1.3-9.5,8.4-15.5,16.9-15.5h0c8.5,0,15.6,6,16.9,15.5" />
                                            </g>
                                        </svg> *}
                                        {if $customer.is_logged }
                                        <span class="tvcms_customer_name">{$customer.gender.name[$customer.gender.id]} {$customer.firstname} {$customer.lastname}</span>
                                        <i class="material-icons expand-more">&#xe313;</i>
                                        {else}
                                        <span>{l s='My Account' d='Shop.Theme.Catalog'}</span>
                                        <i class="material-icons ttvcms-account-iconexpand-more">&#xe313;</i>
                                        {/if}
                                    </button>
                                    <ul class="dropdown-menu tv-account-dropdown tv-dropdown">
                                        {if $customer.is_logged }
                                        <li><a href="{$urls.pages.my_account}" class="tvmyccount"><i class="material-icons">person</i>{l s='My Account' d='Shop.Theme.Catalog'}</a></li>
                                        {/if}
                                        <li class="">{hook h='displayNavCustomerSignInBlock'}</li>
                                        <li class="ttvcms-wishlist-icon">{hook h='displayNavWishlistBlock'}</li>
                                        <li class="tvheader-compare">{hook h='displayNavProductCompareBlock'}</li>
                                        <li class="tvmobile-lang hidden-lg-up"></li>
                                        <li class="tvmobile-curr hidden-lg-up"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        <div class='container-fluid tvcmsdesktop-top-second hidden-md-down'>
            <div class="container">
                <div class="tvcmsdesktop-top-header-box">
                    <div class='col-md-2 col-xl-2 col-sm-12 tvcms-header-logo-wrapper'>
                        <div class="hidden-sm-down tvcms-header-logo" id="tvcmsdesktop-logo">
                            {if $withData}
                            <div class="tv-header-logo">
                                <a href="{$urls.base_url}">
                                    <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}" height="34" width="200">
                                </a>
                            </div>
                            {/if}
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5 col-md-6 col-xl-6 tvcmsheader-search">
                        <div class='tvcmssearch-wrapper' id="_desktop_search">
                            {if $withData}
                            {hook h='displayNavSearchBlock'}
                            {/if}
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5 col-md-4 col-xl-4 tvcmsheader-nav-right">
                        <div class="tvcmsdesktop-contact">{if $withData} {hook h='displayNav1'} {/if}</div>
                        <div class="tv-contact-account-cart-wrapper">
                            <div id="_desktop_cart_manage" class="tvcms-header-cart">
                                {if $withData}
                                {hook h='displayNavShoppingCartBlock'}
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tvcms-header-menu-offer-wrapper">
            <div class="position-static tvcms-header-menu">
                <div class='tvcmsmain-menu-wrapper container'>
                    <div class="row">
                        <div class="tvcmsheader-verticalmenu col-xl-2">
                            <div class="tvallcategories">
                                <div class="tvallcategories-wrapper">
                                    <div class="tvcategory-title-wrapper">
                                        <div class="tvleft-right-title facet-label">
                                            <span>{l s='Categories' mod='tvcmsverticalmenu'}</span>
                                        </div>
                                        <div class="tvleft-right-title-toggle">
                                            <i class='material-icons'>&#xe5d2;</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {if $withData}
                            {hook h='displayVerticalMenu'}
                            {/if}
                        </div>
                        <div id='tvdesktop-megamenu' class="tvcmsheader-megamenu col-xl-10  tvcmsheader-sticky">
                            {if $withData}
                            {hook h='displayMegamenu'}
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/strip}