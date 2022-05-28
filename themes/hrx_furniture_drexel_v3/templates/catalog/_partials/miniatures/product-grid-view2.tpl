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
    <div class="tvproduct-wrapper {$class_name}">
        {block name='product_thumbnail'}
        <div class="tvproduct-image">
            {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img src="{$product.cover.bySize[$image_size]['url']}" alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name}{/if}" class="tvproduct-defult-img" height="{$product.cover.bySize[$image_size]['height']}" width="{$product.cover.bySize[$image_size]['width']}" >
                {if Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')}
                {if isset($product.images.0.bySize[$image_size]['url']) && empty($product.images.0.cover)}
                <img class="tvproduct-hover-img" src="{$product.images.0.bySize[$image_size]['url']}" alt="{$product.name}" height="{$product.images.0.bySize[$image_size]['height']}" width="{$product.images.0.bySize[$image_size]['width']}" >
                {elseif isset($product.images.1.bySize[$image_size]['url']) && empty($product.images.1.cover)}
                <img class="tvproduct-hover-img" src="{$product.images.1.bySize[$image_size]['url']}" alt="{$product.name}" height="{$product.images.1.bySize[$image_size]['height']}" width="{$product.images.1.bySize[$image_size]['width']}" >
                {/if}
                {/if}
            </a>
            {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img src="{$urls.no_picture_image.bySize[$image_size]['url']}" height="{$urls.no_picture_image.bySize[$image_size]['height']}" width="{$urls.no_picture_image.bySize[$image_size]['width']}">
            </a>
            {/if}
            {block name='product_flags'}
            <ul class="tvproduct-flags tvproduct-online-new-wrapper">
                {foreach from=$product.flags item=flag}
                {if $flag.type == 'online-only' || $flag.type == 'new'}
                <li>{$flag.label}</li>
                {/if}
                {/foreach}
            </ul>
            <ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
            {foreach from=$product.flags item=flag}
            {if $flag.type == 'on-sale' || $flag.type == 'pack'}
                <li class="product-flag {$flag.type}">{$flag.label}</li>
            {/if}
            {/foreach}
            </ul>
            {*{if $product.discount_type === 'percentage'}
            <ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
                <li>{$product.discount_percentage}</li>
            </ul>
            {elseif $product.discount_type === 'amount'}
            <span class="product-flag on-sale">{$product.discount_amount_to_display}</span>
            {/if}*}
            {/block}
            {if !empty($product.specific_prices.from) && !empty($product.specific_prices.to) && $product.specific_prices.from != '0000-00-00 00:00:00' && $product.specific_prices.to != '0000-00-00 00:00:00'}
            {include file='catalog/_partials/miniatures/product-timer.tpl' timer=$product.specific_prices.to}
            {/if}
            <div class='tvproduct-hover-btn'>
                <div class="{* highlighted-informations{if !$product.main_variants} no-variants{/if} *} tvproduct-quick-btn">
                    {block name='quick_view'}
                    <a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Quick View' d='Shop.Theme.Actions'}" data-original-title="{l s='Quick View' d='Shop.Theme.Actions'}">
                        <div class="tvproduct-quick-icon">
                            {* <i class="material-icons search">&#xE8B6;</i> *}
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="182 372 50 50" style="enable-background:new 182 372 50 50;" xml:space="preserve">
                                <g>
                                    <path style="fill:#222222;" d="M204.019,416.038c-12.141,0-22.019-9.877-22.019-22.019c0-12.141,9.878-22.019,22.019-22.019
                                        c12.142,0,22.019,9.878,22.019,22.019C226.038,406.161,216.161,416.038,204.019,416.038z M204.019,376.065
                                        c-9.9,0-17.954,8.054-17.954,17.954c0,9.9,8.054,17.954,17.954,17.954c9.9,0,17.954-8.054,17.954-17.954
                                        C221.973,384.119,213.919,376.065,204.019,376.065z" />
                                    <path style="fill:#222222;" d="M229.967,422c-0.52,0-1.04-0.198-1.437-0.596l-11.653-11.653c-0.794-0.793-0.794-2.081,0-2.874
                                        c0.794-0.794,2.08-0.794,2.874,0l11.653,11.653c0.794,0.793,0.794,2.081,0,2.874C231.007,421.802,230.487,422,229.967,422z" />
                                </g>
                            </svg>
                        </div>
                        {* <div class="tvproduct-quick-lable">
                            {l s='Quick View' d='Shop.Theme.Actions'}
                        </div> *}
                    </a>
                    {/block}
                </div>
                <div class="tvproduct-cart-btn">
                    <form action="{$urls.pages.cart}" method="post">
                        <input type="hidden" name="id_product" value="{$product.id_product}">
                        <input type="hidden" name="qty" value="{$product.minimal_quantity}">
                        {if !empty($product.is_customizable) && count($product.customizations.fields)}
                        <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                        {/if}
                        <input type="hidden" name="token" value="{$static_token}">
                        <button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart {if !$product.add_to_cart_url}tvproduct-out-of-stock disable{/if}" title="{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if}" {if !$product.add_to_cart_url}disabled{/if} data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if}">
                            {* <i class='material-icons add-cart'>&#xe8cc;</i>
                            <i class='material-icons out-of-stock hide'>&#xe611;</i> *}
                            {if !$product.add_to_cart_url}
                            <svg class="out-of-stock hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="14px" height="14px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path d="M512 0Q373 0 255 68.5T68.5 255T0 512t68.5 257T255 955.5t257 68.5t257-68.5T955.5 769t68.5-257t-68.5-257T769 68.5T512 0zM64 512q0-167 110-294l632 632Q679 961 512 961q-73 0-141.5-22.5T247 874t-96.5-97t-64-123.5T64 512zm787 293L219 173q61-52 136-80.5T512 64q73 0 141.5 22.5t123.5 64t96.5 96.5t64 123.5T960 512q0 166-109 293z" fill="#222222" />
                                <rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                            {else}
                            <svg class="add-cart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 45.6 38.4" style="enable-background:new 0 0 45.6 38.4;" xml:space="preserve">
                                <g id="XMLID_1_">
                                    <path id="XMLID_24_" style="fill:#222222;" d="M45.6,5.8c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.2-0.1,0.3c-0.8,2.8-1.5,5.6-2.3,8.4
                                        c-0.9,3.1-1.7,6.3-2.6,9.4c-0.5,1.7-1.8,2.7-3.6,2.8c-0.4,0-0.9,0-1.3,0c0.2,0.1,0.3,0.2,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9
                                        c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.6-0.5-4.7-2.7-4.8-5.2
                                        c-0.1-2.9,1.5-5.3,4.2-6c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0c-5,0-10,0-15,0c0.1,0.1,0.3,0.1,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9
                                        c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.5-0.5-4.4-2.4-4.7-5
                                        c-0.3-2.4,1-4.8,3.3-5.9c0.4-0.2,0.9-0.4,1.4-0.6c-0.4,0-0.7,0-1,0c-2.3,0-3.6-1.1-4.1-3.2C9.5,17.2,7.9,10.8,6.3,4.4
                                        C6.2,4,6.1,3.8,5.6,3.8c-1.2,0-2.5,0-3.7,0C1,3.8,0.3,3.2,0.1,2.4c-0.2-0.8,0.2-1.8,1-2.1C1.2,0.1,1.3,0.1,1.5,0C3.2,0,5,0,6.8,0
                                        c0,0,0.1,0.1,0.1,0.1c1.6,0.4,2.6,1.4,3,3c1.6,6.4,3.2,12.9,4.8,19.3c0.1,0.5,0.3,0.7,0.9,0.7c6.9,0,13.8,0,20.7,0
                                        c0.2,0,0.4,0,0.6,0c1.2-4.5,2.4-8.9,3.7-13.4c-8.7,0-17.5,0-26.2,0c-0.3-1.3-0.6-2.5-1-3.8C24.2,5.8,34.9,5.8,45.6,5.8z M19.2,32.6
                                        c0-1.1-0.8-1.9-1.9-1.9c-1.1,0-1.9,0.9-1.9,1.9c0,1,0.8,1.9,1.9,1.9C18.3,34.5,19.2,33.7,19.2,32.6z M34.5,30.7
                                        c-1.1,0-1.9,0.9-1.9,1.9c0,1.1,0.9,1.9,1.9,1.9c1,0,1.9-0.8,1.9-1.9C36.5,31.6,35.6,30.7,34.5,30.7z" />
                                </g>
                            </svg>
                            {/if}
                            {* <span class="tvproduct-add-to-cart-label">{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if} </span> *}
                        </button>
                    </form>
                </div>
                {hook h='displayProductCompareProductList' product=$product}
                {hook h='displayWishlistBtnProductList' product=$product}
            </div>
        </div>
        {/block}
        <div class="tvproduct-info-box-wrapper">
            <div class="product-description">
                {* Start Product Comment *}
                {hook h='displayReviewProductList' product=$product  productType="$class_name"}
                {* End Product Comment *}
                {block name='product_name'}
                        <div class="tvproduct-name product-title">
                            <a href="{$product.url}">
                                <h6>{$product.name}</h6>
                            </a>
                        </div>
                    {* <div class="tvproduct-cat-name">{$product.category_name}</div> *}
                {/block}
                {block name='product_price_and_shipping'}
                    <div class="tv-product-price tvproduct-name-price-wrapper">
                        {if $product.show_price}
                        <div class="product-price-and-shipping">
                        <meta itemprop="sku" content="1234" />
                        <meta itemprop="mpn" content="1234" />
                        <meta itemprop="brand" content="fashion" />
                        <span class="price">{$product.price}</span>
                        {if $product.has_discount}
                        {if $product.discount_type === 'percentage'}
                        <span class="discount-percentage discount-product tvproduct-discount-price">{$product.discount_percentage}{*{l s='off' d='Shop.Theme.Catalog'}*}</span>
                        {elseif $product.discount_type === 'amount'}
                        <span class="discount-amount discount-product tvproduct-discount-price">{$product.discount_amount_to_display} {l s='off' d='Shop.Theme.Catalog'}</span>
                        {/if}
                        {/if}
                        {if $product.has_discount}
                        <span class="regular-price">{$product.regular_price}</span>
                        {/if}
                        {if $product.has_discount}
                        {hook h='displayProductPriceBlock' product=$product type="old_price"}
                        <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                        {*{if $product.discount_type === 'percentage'}
                        <span class="discount-percentage discount-product tvproduct-discount-price">{$product.discount_percentage}{l s='off' d='Shop.Theme.Catalog'}</span>
                        {elseif $product.discount_type === 'amount'}
                        <span class="discount-amount discount-product tvproduct-discount-price">{$product.discount_amount_to_display} {l s=' off' d='Shop.Theme.Catalog'}</span>
                        {/if}*}
                        {/if}
                        {hook h='displayProductPriceBlock' product=$product type="before_price"}
                        <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
                        {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                        {hook h='displayProductPriceBlock' product=$product type='weight'}
                    </div>
                        {/if}
                    </div>
                {/block}
            </div>
            <div class="tv-product-price-info-box">
                {* Start Product Stock Indicator *}
                {* <div class='tvcmsstock-indicator-wraper'>
                    {hook h='displayProductListStockIndicator' product=$product}
                </div> *}
                {* End Product Stock Indicator *}
                {if Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_COLOR') == '1'}
                {block name='product_variants'}
                {if $product.main_variants}
                    <div class="tvproduct-color">
                        {foreach from=$product.main_variants item=color_info}
                        <div class='tvproduct-color-wrapper'>
                            <a href="{$color_info.url}">
                                <div class="tvproduct-color-box-border">
                                    <div class='tvporoduct-color-box' style='{if $color_info.html_color_code != ""}background-color: {$color_info.html_color_code};{else}background-image: url({$color_info.texture});{/if}'></div>
                                </div>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                {/if}
                {/block}
                {/if}
            </div>
        </div>
    </div>
    {/strip}