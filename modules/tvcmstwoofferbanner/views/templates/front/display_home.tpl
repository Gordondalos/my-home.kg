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
    <div class="tvcmstwoofferbanners-one container-fluid">
        <div class="container">
            <div class="tvcmstwoofferbanner-wrapper">
                <div class="tvofferbanner-two-inner tvbanner1 col-md-6 col-xs-12 wow fadeInUp">
                    <a class="tvbanner-hover-wrapper" href="{$data['TVCMSTWOOFFERBANNER_LINK']}" {* title="{$data['TVCMSTWOOFFERBANNER_CAPTION'][$language_id]}" *}>
                        <img src="{$path}{$data['TVCMSTWOOFFERBANNER_IMAGE_NAME']}" class="tvimage-lazy" alt="{l s='Offer Banner' mod='tvcmstwoofferbanner'}" width="{$data['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_1']}" height="{$data['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_1']}" />
                        {if !empty($data['TVCMSTWOOFFERBANNER_CAPTION'][$language_id]) && $data['TVCMSTWOOFFERBANNER_CAPTION_SIDE'] != 'none'}
                        <div class="{$data['TVCMSTWOOFFERBANNER_CAPTION_SIDE']} tvtwoofferbanner-content tvtwoofferbanner-content-one">
                            {$data['TVCMSTWOOFFERBANNER_CAPTION'][$language_id] nofilter}
                        </div>
                        {/if}
                    </a>
                </div>
                <div class="tvofferbanner-two-inner tvbanner2 col-md-6 col-xs-12 wow fadeInUp">
                    <a class="tvbanner-hover-wrapper" href="{$data['TVCMSTWOOFFERBANNER_LINK_2']}" {* title="{$data['TVCMSTWOOFFERBANNER_CAPTION_2'][$language_id]}" *}>
                        <img src="{$path}{$data['TVCMSTWOOFFERBANNER_IMAGE_NAME_2']}" class="tvimage-lazy" alt="{l s='Offer Banner' mod='tvcmstwoofferbanner'}" width="{$data['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_2']}" height="{$data['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_2']}" />
                        {if !empty($data['TVCMSTWOOFFERBANNER_CAPTION_2'][$language_id]) && $data['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2'] != 'none'}
                        <div class="{$data['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2']} tvtwoofferbanner-content tvtwoofferbanner-content-two">
                            {$data['TVCMSTWOOFFERBANNER_CAPTION_2'][$language_id] nofilter}
                        </div>
                        {/if}
                    </a>
                </div>
            </div>
        </div>
    </div>
    {/strip}