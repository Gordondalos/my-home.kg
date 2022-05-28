{**
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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2021 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class="tvproduct-wishlist">
        <input type="hidden" class="wishlist_prod_id" value="{$id_product|escape:'htmlall':'UTF-8'}">
        {if isset($wishlists) && !empty($wishlists) && count($wishlists) > 1}
        <div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Add to Wishlist' mod='tvcmswishlist'}">
            <div id="wishlist_button">
                {foreach $wishlists as $wishlist}
                {if $wishlist.default == '1'}
                <a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '{$id_product|intval|escape:'htmlall':'UTF-8'}', $('#idCombination').val(), 1, {$wishlist.id_wishlist}); return false;">
                    <div class="panel-product-line panel-product-actions tvproduct-wishlist-icon">
                        {* <i class='material-icons'>&#xe87e;</i> *}
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="-31.802 175.13 477.534 443.742" style="enable-background:new -31.802 175.13 477.534 443.742;" xml:space="preserve">
                            <path style="fill:#222222;" d="M311.107,175.133L311.107,175.133c-36.291,0.042-70.938,15.14-95.676,41.694L207,225.736
                            l-8.431-8.909c-49.087-52.831-131.709-55.865-184.539-6.778c-2.341,2.176-4.602,4.436-6.778,6.778
                            c-52.072,56.166-52.072,142.968,0,199.134L194.61,613.542c6.482,6.843,17.284,7.136,24.127,0.654
                            c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581c52.069-56.16,52.069-142.957,0-199.117
                            C381.98,190.295,347.369,175.19,311.107,175.133z M381.967,392.46L207,577.002L32.015,392.46c-39.78-42.916-39.78-109.234,0-152.149
                            c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0
                            l20.804-21.931c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l0,0
                            c40.126,42.984,40.42,109.422,0,152.132H381.967z" />
                        </svg>
                        <span>{l s='Add to wishlist' mod='tvcmswishlist'}</span>
                    </div>
                </a>
                {/if}
                {/foreach}
                {* <select id="idWishlist">
                    {foreach $wishlists as $wishlist}
                    <option value="{$wishlist.id_wishlist|escape:'htmlall':'UTF-8'}">{$wishlist.name|escape:'htmlall':'UTF-8'}</option>
                    {/foreach}
                </select> *}
            </div>
        </div>
        {else}
        <a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '{$id_product|intval|escape:'htmlall':'UTF-8'}', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Add to Wishlist' mod='tvcmswishlist'}">
            <div class="panel-product-line panel-product-actions tvproduct-wishlist-icon">
                {* <i class='material-icons'>&#xe87e;</i> *}
                <div class="tvproduct-wishlist-wrapper-icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="-31.802 175.13 477.534 443.742" style="enable-background:new -31.802 175.13 477.534 443.742;" xml:space="preserve">
                        <path style="fill:#222222;" d="M311.107,175.133L311.107,175.133c-36.291,0.042-70.938,15.14-95.676,41.694L207,225.736
                            l-8.431-8.909c-49.087-52.831-131.709-55.865-184.539-6.778c-2.341,2.176-4.602,4.436-6.778,6.778
                            c-52.072,56.166-52.072,142.968,0,199.134L194.61,613.542c6.482,6.843,17.284,7.136,24.127,0.654
                            c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581c52.069-56.16,52.069-142.957,0-199.117
                            C381.98,190.295,347.369,175.19,311.107,175.133z M381.967,392.46L207,577.002L32.015,392.46c-39.78-42.916-39.78-109.234,0-152.149
                            c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0
                            l20.804-21.931c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l0,0
                            c40.126,42.984,40.42,109.422,0,152.132H381.967z" />
                    </svg>
                </div>
                <span>{l s='Add to wishlist' mod='tvcmswishlist'}</span>
            </div>
        </a>
        {/if}
    </div>
    {/strip}