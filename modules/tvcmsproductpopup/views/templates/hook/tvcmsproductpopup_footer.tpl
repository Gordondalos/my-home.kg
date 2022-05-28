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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{strip}
<div class="prod-animation tvcms-snackbar hidden-sm-down">
	{if isset($group_prod_fliter.product_list) && count($group_prod_fliter.product_list) > 0}
		{foreach from=$group_prod_fliter.product_list item=product name=product_list}
			<div class="tvcms-prod-popup">
			{if isset($product.id_product)}
				{include file="./product.tpl" product=$product}
			{/if}
			</div>
		{/foreach}
	{else}
		<div class="tvcms-prod-popup">
			<p class="alert-warning">{l s='No product at this time' mod='tvcmsproductpopup'}</p>
		</div>	
	{/if}

</div>
{/strip}