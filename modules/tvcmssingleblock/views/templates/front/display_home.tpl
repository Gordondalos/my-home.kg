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
{if $dis_arr_result.status}
<div class='container-fluid tvcmssingle-block'>
    <div class='container tvsingle-block wow fadeInUp'>
        {* <a href="{$dis_arr_result.data.link}">
            <div class="tv-single-block-image">
                <img src="{$dis_arr_result.path}{$dis_arr_result.data.image}" alt="">
            </div>
        </a> *}
        {if !empty($dis_arr_result.data.title)}
        <div class="tv-single-block-content">
        	{* <span class="tvsingle-block-sub-description">
                {$dis_arr_result.data.sub_description}
            </span> *}
            {$dis_arr_result.data.title nofilter}
            {* <div class="tvsingle-block-desc">
                {$dis_arr_result.data.description}
            </div> *}
        </div>
        {/if}{*
        <a href="{$dis_arr_result.data.link}" class="tvsingle-bolck-btn-link-wrapper tvsingle-bolck-btn-link tvsingle-bolck-btn">{$dis_arr_result.data.btn_caption}</a>
        *}</div>
</div>
{/if}
{/strip}