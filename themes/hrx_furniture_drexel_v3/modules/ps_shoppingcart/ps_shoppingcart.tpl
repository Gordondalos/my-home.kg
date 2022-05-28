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
    <div id="_desktop_cart">
        <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} tv-header-cart" data-refresh-url="{$refresh_url}">
            <div class="tvheader-cart-wrapper {if Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up'}tvcms-popup-block{/if}">
                <div class="tvheader-cart-btn-wrapper {if Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'classic'}tvcms-classic-block{/if}">
                    <a rel="nofollow" href="JavaScript:void(0);" data-url='{$cart_url}' title='{l s="Cart" d="Shop.Theme.Checkout"}'>
                        <div class="tvcart-icon-text-wrapper">
                            <div class="tv-cart-icon-main">
                                <div class="tv-cart-icon tvheader-right-icon">
                                    {* <i class="material-icons shopping-cart">&#xe8f8;</i> *}
                                    {* <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                        <g>
                                            <path id="XMLID_10_" style="fill:#FFD741;" d="M7.7,12.7h30l-7.2,12.5H9.8C9.8,25.1,6.9,14,7.7,12.7z" />
                                            <path id="XMLID_22_" d="M39.8,11.5c-0.1-0.2-0.4-0.4-0.7-0.4H7.4l-1-5.7c0-0.2-0.1-0.3-0.2-0.4L1.4,0.2C1-0.1,0.5-0.1,0.2,0.2
                                        c-0.3,0.3-0.3,0.8,0,1.1l4.7,4.5l3.5,20.1c0.1,0.4,0.4,0.7,0.8,0.7h25.4c1.2,0,2.2,1,2.2,2.2c0,1.2-1,2.2-2.2,2.2H10.2
                                        c-0.4,0-0.8,0.4-0.8,0.8c0,0.4,0.4,0.8,0.8,0.8h24.3c2.1,0,3.8-1.7,3.8-3.8c0-2.1-1.7-3.8-3.8-3.8h-2.2l7.5-12.9
                                        C39.9,12,39.9,11.7,39.8,11.5L39.8,11.5z M30.5,25.1H9.8L7.7,12.7h30L30.5,25.1z M30.5,25.1" />
                                            <path id="XMLID_18_" d="M28.8,34c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3c1.6,0,3-1.3,3-3C31.8,35.3,30.4,34,28.8,34L28.8,34z M28.8,38.3
                                        c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4C30.2,37.7,29.5,38.3,28.8,38.3L28.8,38.3z M28.8,38.3" />
                                            <path id="XMLID_14_" d="M15.9,34c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3c1.6,0,3-1.3,3-3C18.9,35.3,17.6,34,15.9,34L15.9,34z M15.9,38.3
                                        c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4C17.3,37.7,16.7,38.3,15.9,38.3L15.9,38.3z M15.9,38.3" />
                                        </g>
                                    </svg> *}
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="19px" viewBox="0 0 45.6 38.4" style="enable-background:new 0 0 45.6 38.4;" xml:space="preserve">
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
                                </div>
                            </div>
                            <div class="tv-cart-cart-inner">
                                <span class="tvcart-lable">{l s='My Cart' d='Shop.Theme.Checkout'}</span>
                                {* <span class="tvcart-total-price">{$cart.totals.total_excluding_tax.value}</span> *}
                                <span class="cart-products-count"><i>(</i>{$cart.products_count}<i>)</i></span>
                                <span class="tv-cart-title">{l s='Products' d='Shop.Theme.Checkout'}</span>
                            </div>
                        </div>
                    </a>
                </div>
                {if Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'classic'}
                <div class="ttvcmscart-show-dropdown-right">
                    {if $cart.products_count > 0}
                    <div class="ttvcart-scroll-container">
                        <div class="ttvcart-close-title-count">
                            <button class="ttvclose-cart"></button>
                            <div class="ttvcart-top-title">
                                <h4>{l s='Shopping Cart' d='Shop.Theme.Checkout'}</h4>
                            </div>
                            <div class="ttvcart-counter">
                                <span class="ttvcart-products-count">{$cart.products_count}</span>
                            </div>
                        </div>
                        <div class="ttvcart-product-content-box ttvscroll-container">
                            {foreach from=$cart.products item=product}
                            <div class="ttvcart-product-wrapper items">
                                <div class="tvcart-product-list-img">
                                    <a href="{$product.url}" class="tvshoping-cart-dropdown-img-block">
                                        <img src="{$product.cover.bySize.cart_default.url}">
                                    </a>
                                </div>
                                <div class="tvcart-product-content">
                                    <div class="tvshoping-cart-dropdown-title">
                                        <a href="{$product.url}" class="">
                                            <span class="product-name">{$product.name}</span>
                                        </a>
                                    </div>
                                    <div class="tvcart-product-list-box">
                                        <span class="tvshopping-cart-qty">{l s='QTY :' d='Shop.Theme.Actions'}</span>
                                        <span class="product-qty">{$product.quantity}</span>
                                    </div>
                                    <span class="product-price">{$product.price}</span>
                                    {if $product.has_discount}
                                    <span class="regular-price">{$product.regular_price}</span>
                                    {/if}
                                    {*<div class="tvcart-product-list-attribute">
                                        {foreach $product.attributes as $prod_attb=>$prod_val}
                                        <div class="tvcart-product-attr"><span>{$prod_attb}:</span> <span>{$prod_val}</span></div>
                                        {/foreach}
                                    </div>*}
                                    <div class="tvcart-product-remove">
                                        {$url = 'controller=cart&delete='|cat:$product.id_product}
                                        <a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="delete-from-cart" data-id-product="{$product.id_product|escape:'javascript'}" data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}" data-id-customization="{$product.id_customization|escape:'javascript'}" title="{l s='remove from cart' d='Shop.Theme.Actions'}">
                                            <i class='material-icons'>&#xe872;</i>
                                        </a>
                                    </div>
                                    {if $product.customizations|count}
                                    <div class="customizations">
                                        <ul>
                                            {foreach from=$product.customizations item='customization'}
                                            <li>
                                                <span class="product-quantity">{$customization.quantity}</span>
                                                <a href="{$customization.remove_from_cart_url}" title="{l s='remove from cart' d='Shop.Theme.Actions'}" class="remove-from-cart" rel="nofollow">{l s='Remove' d='Shop.Theme.Actions'}</a>
                                                <ul>
                                                    {foreach from=$customization.fields item='field'}
                                                    <li>
                                                        <span>{$field.label}</span>
                                                        {if $field.type == 'text'}
                                                        <span>{$field.text nofilter}</span>
                                                        {else if $field.type == 'image'}
                                                        <img src="{$field.image.small.url}">
                                                        {/if}
                                                    </li>
                                                    {/foreach}
                                                </ul>
                                            </li>
                                            {/foreach}
                                        </ul>
                                    </div>
                                    {/if}
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="ttvcart-price-shipping-text">
                        {foreach from=$cart.subtotals item="subtotal"}
                        {if $subtotal.value && $subtotal.type !== 'tax'}
                        <div class="ttvcart-product-label-value" id="tvcart-subtotal-{$subtotal.type}">
                            <span class="ttvshoping-cart-label label{if 'products' === $subtotal.type} js-subtotal{/if}">
                                {if 'products' == $subtotal.type}
                                {l s='Sub Total' d='Shop.Theme.Checkout'}
                                {else}
                                {$subtotal.label}
                                {/if}
                                {if $subtotal.type === 'shipping'}
                                <small class="value">{hook h='displayCheckoutSubtotalDetails' subtotal=$subtotal}</small>
                                {/if}
                            </span>
                            <span class="ttvcart-product-value">{$subtotal.value}</span>
                        </div>
                        {/if}
                        {/foreach}
                        {* <div class="ttvcart-product-label-value">
                            <span class="ttvshoping-cart-label">{l s='Subtotal' d='Shop.Theme.Checkout'}</span>
                            <span class="ttvcart-product-value">{$subtotal.value}</span>
                        </div>
                        <div class="ttvcart-product-label-value">
                            <span class="ttvshoping-cart-label">{l s='Shipping' d='Shop.Theme.Checkout'}</span>
                            <span class="ttvcart-product-value">{$cart.subtotals.shipping.value}</span>
                        </div>*}
                        <div class="ttvcart-product-label-value total">
                            <span class="ttvshoping-cart-label">{$cart.totals.total.label} {$cart.labels.tax_short}</span>
                            <span class="ttvcart-product-value">{$cart.totals.total.value}</span>
                        </div>
                        <div class="ttvcart-product-label-value tax">
                            <span class="ttvshoping-cart-label">{$cart.subtotals.tax.label}</span>
                            <span class="ttvcart-product-value">{$cart.subtotals.tax.value}</span>
                        </div>
                    </div>
                    <div class="ttvcart-product-list-btn-wrapper">
                        <button class="ttvcart-product-list-viewcart">
                            <a href="{$cart_url}">
                                {l s='View Cart' d='Shop.Theme.Actions'}
                            </a>
                        </button>
                        <button class="ttvcart-product-list-checkout">
                            <a href="{$link->getPageLink('order', null, $language.id)}">
                                {l s='CheckOut' d='Shop.Theme.Actions'}
                            </a>
                        </button>
                    </div>
                    {else}
                    <div class="ttvcart-no-product">
                        <div class="tdclose-btn-wrap">
                            <div class="ttvcart-close-title-count">
                                <button class="ttvclose-cart"></button>
                                <div class="ttvcart-top-title">
                                    <h4>{l s='Shopping Cart' d='Shop.Theme.Checkout'}</h4>
                                </div>
                                <div class="ttvcart-counter">
                                    <span class="ttvcart-products-count">{$cart.products_count}</span>
                                </div>
                            </div>
                        </div>
                        <div class="tvcart-no-product-img">
                            <img src="{$urls.img_url}themevolty/cart.png">
                            <div class='ttvcart-no-product-label'><span>{l s='No Product Add in Cart' d='Shop.Theme.Checkout'}</span></div>
                        </div>
                    </div>
                    {/if}
                </div>
                <div class="modal-backdrop-cart"></div>
                <!-- Start DropDown header cart -->
                {elseif Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up'}
                <div class="tvcmscart-show-dropdown">
                    {if $cart.products_count > 0}
                    <div class="tvcart-product-list">
                        <div class="tvcart-product-totle">
                            {l s='Your Cart: ' d='Shop.Theme.Checkout'} {count($cart.products)} {if count($cart.products) == 1}{l s='Item' d='Shop.Theme.Checkout'}{else}{l s='Items' d='Shop.Theme.Checkout'}{/if}
                        </div>
                        <div class="tvcart-product-content-box tvscroll-container">
                            {foreach from=$cart.products item=product}
                            <div class="tvcart-product-wrapper items">
                                <div class="tvcart-product-list-img">
                                    <a href="{$product.url}" class="tvshoping-cart-dropdown-img-block">
                                        <img src="{$product.cover.bySize.cart_default.url}">
                                    </a>
                                </div>
                                <div class="tvcart-product-content">
                                    <div class="tvcart-product-list-quentity">
                                        <div class="tvshoping-cart-dropdown-title">
                                            <a href="{$product.url}" class="">
                                                <span class="product-name">{$product.name}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tvcart-product-list-price">
                                        <span class="product-quentity">{$product.quantity}</span>
                                        <span class="tvshopping-cart-quentity">X</span>
                                        <span class="product-price">{$product.price}</span>
                                    </div>
                                    <div class="tvcart-product-list-attribute">
                                        {foreach $product.attributes as $prod_attb=>$prod_val}
                                        <div class="tvcart-product-attr"><span>{$prod_attb}:</span> <span>{$prod_val}</span></div>
                                        {/foreach}
                                    </div>
                                    <div class="tvcart-product-remove">
                                        {$url = 'controller=cart&delete='|cat:$product.id_product}
                                        <a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="delete-from-cart" data-id-product="{$product.id_product|escape:'javascript'}" data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}" data-id-customization="{$product.id_customization|escape:'javascript'}" title="{l s='remove from cart' d='Shop.Theme.Actions'}">
                                            <i class='material-icons'>&#xe872;</i>
                                        </a>
                                    </div>
                                    {if $product.customizations|count}
                                    <div class="customizations">
                                        <ul>
                                            {foreach from=$product.customizations item='customization'}
                                            <li>
                                                <span class="product-quantity">{$customization.quantity}</span>
                                                <a href="{$customization.remove_from_cart_url}" title="{l s='remove from cart' d='Shop.Theme.Actions'}" class="remove-from-cart" rel="nofollow">{l s='Remove' d='Shop.Theme.Actions'}</a>
                                                <ul>
                                                    {foreach from=$customization.fields item='field'}
                                                    <li>
                                                        <span>{$field.label}</span>
                                                        {if $field.type == 'text'}
                                                        <span>{$field.text nofilter}</span>
                                                        {else if $field.type == 'image'}
                                                        <img src="{$field.image.small.url}">
                                                        {/if}
                                                    </li>
                                                    {/foreach}
                                                </ul>
                                            </li>
                                            {/foreach}
                                        </ul>
                                    </div>
                                    {/if}
                                </div>
                            </div>
                            {/foreach}
                        </div>
                        <div class="tvcart-product-list-total-info">
                            <div class="tvcart-product-list-subtotal-prod">
                                <span class="tvshoping-cart-subtotal">{l s='Sub Total' d='Shop.Theme.Checkout'}</span>
                                <span class="tvcart-product-price">{$cart.subtotals.products.value}</span>
                            </div>
                            {* <div class="tvcart-product-list-subtotal-shipping">
                                <span class="tvshoping-cart-shipping">{l s='Shipping' d='Shop.Theme.Checkout'}</span>
                                <span class="tvcart-product-price">{$cart.subtotals.shipping.value}</span>
                            </div>
                            <div class="tvcart-product-list-subtotal-tax">
                                <span class="tvshoping-cart-tax">{l s='Tax' d='Shop.Theme.Checkout'}</span>
                                <span class="tvcart-product-price">{$cart.subtotals.tax.value}</span>
                            </div>
                            <div class="tvcart-product-list-subtotal-excluding-text">
                                <span class="ttshoping-cart-total">{l s='Total' d='Shop.Theme.Checkout'}</span>
                                <span class="tvcart-product-price">{$cart.totals.total_excluding_tax.value}</span>
                            </div> *}
                        </div>
                    </div>
                    <div class="tvcart-product-list-btn-wrapper">
                        <div class="tvcart-product-list-viewcart">
                            <a href="{$cart_url}">{l s='View cart' d='Shop.Theme.Checkout'}</a>
                        </div>
                        <div class="tvcart-product-list-checkout">
                            <a href="javascript:void(0);" class="tvcart-product-list-checkout-link">{l s='Proceed to checkout' d='Shop.Theme.Checkout'}</a>
                        </div>
                    </div>
                    {else}
                    <div class="tvcart-no-product">
                        <div class='tvcart-no-product-label'>{l s='No product add in cart' d='Shop.Theme.Checkout'}</div>
                    </div>
                    {/if}
                </div>
                {/if}
            </div>
        </div>
    </div>
    {/strip}