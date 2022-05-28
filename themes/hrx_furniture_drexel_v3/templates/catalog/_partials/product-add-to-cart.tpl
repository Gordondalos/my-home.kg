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
    <div class="product-add-to-cart">
        {if !$configuration.is_catalog}
        {block name='product_quantity'}
        <div class="product-quantity">
            <span class="control-label">{l s='Quantity : ' d='Shop.Theme.Catalog'}</span>
            <div class="qty">
                <input type="text" name="qty" id="quantity_wanted" value="{$product.quantity_wanted}" class="input-group" min="{$product.minimal_quantity}" aria-label="{l s='Quantity' d='Shop.Theme.Actions'}">
            </div>
        </div>
        <div class='tvwishlist-compare-wrapper-page'>
            <div class="add tv-product-page-add-to-cart-wrapper">
                <div class="tvcart-btn-model">
                    <button class="tvall-inner-btn add-to-cart {if !$product.add_to_cart_url} disabled {/if}" data-button-action="add-to-cart" type="submit" {if !$product.add_to_cart_url} disabled {/if}> {if !$product.add_to_cart_url} {*<i class='material-icons block'>&#xe14b;</i>*}
                        <svg class="out-of-stock hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="18px" height="18px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path d="M512 0Q373 0 255 68.5T68.5 255T0 512t68.5 257T255 955.5t257 68.5t257-68.5T955.5 769t68.5-257t-68.5-257T769 68.5T512 0zM64 512q0-167 110-294l632 632Q679 961 512 961q-73 0-141.5-22.5T247 874t-96.5-97t-64-123.5T64 512zm787 293L219 173q61-52 136-80.5T512 64q73 0 141.5 22.5t123.5 64t96.5 96.5t64 123.5T960 512q0 166-109 293z" fill="#222222" />
                            <rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                        <span>{l s='Out of stock' d='Shop.Theme.Actions'}</span>
                        {else}
                        {* <i class="material-icons shopping-cart">&#xE547;</i> *}
                        <svg class="add-cart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 45.6 38.4" style="enable-background:new 0 0 45.6 38.4;" xml:space="preserve">
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
                        <span>{l s='Add to cart' d='Shop.Theme.Actions'}</span>
                        {/if}
                    </button>
                    {* {if $page.page_name == 'product'}
                    <button type="button" class="tvall-inner-btn tvclick-model" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="tvcustom-btn"></i>
                        <span>Buy in one click</span>
                    </button>
                    {/if} *}
                </div>
                <div class="tvproduct-wishlist-compare">
                    {hook h='displayWishlistProductPage' product=$product}
                    {hook h='displayProductCompareProductPage' product=$product}
                </div>
            </div>
        </div>
        {/block}
        {/if}
    </div>
    {/strip}