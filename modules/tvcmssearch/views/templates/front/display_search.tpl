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
    <div class="search-widget tvcmsheader-search" data-search-controller-url="{$search_controller_url|escape:'htmlall':'UTF-8'}">
        <div class="tvsearch-top-wrapper">
            <div class="tvheader-sarch-display">
                <div class="tvheader-search-display-icon">
                    <div class="tvsearch-open"></div>
                    <div class="tvsearch-close">
                        <i class='material-icons'>&#xe5cd;</i>
                    </div>
                </div>
            </div>
            <div class="tvsearch-header-display-full">
                <div class="tvsearch-header-display-wrappper">
                    <form method="get" action="{$search_controller_url|escape:'htmlall':'UTF-8'}">
                        <input type="hidden" name="controller" value="search" />
                        <select class="tvcms-select-category">
                            <option value="0">{l s='All' mod='tvcmssearch'}</option>
                            {foreach $options as $option}
                            <option value="{$option['id_category']|escape:'htmlall':'UTF-8'}">{$option['name'] nofilter}</option>
                            {/foreach}
                        </select>
                        <div class="tvheader-top-search">
                            <div class="tvheader-top-search-wrapper-info-box">
                                <input type="text" name="s" class='tvcmssearch-words' {* value="{$search_string|escape:'htmlall':'UTF-8'}" *} placeholder="{l s='Search our catalog' mod='tvcmssearch'}" aria-label="{l s='Search' mod='tvcmssearch'}" autocomplete="off" />
                            </div>
                        </div>
                        <div class="tvheader-top-search-wrapper">
                            <button type="submit" class="tvheader-search-btn">
                                {* <i class='material-icons'>&#xe8b6;</i> *}
                                {* <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 15 15" style="enable-background:new 0 0 14.5 14.5;" xml:space="preserve">
                                    <g id="XMLID_3_">
                                        <g id="XMLID_1_">
                                            <path id="XMLID_15_" style="fill:#222222;" d="M6,1.5c2.5,0,4.5,2,4.5,4.5s-2,4.5-4.5,4.5S1.5,8.5,1.5,6S3.5,1.5,6,1.5 M6,0
                                                C2.7,0,0,2.7,0,6s2.7,6,6,6s6-2.7,6-6S9.3,0,6,0L6,0z" />
                                        </g>
                                        <rect id="XMLID_2_" x="9.3" y="11.3" transform="matrix(0.7071 0.7071 -0.7071 0.7071 12.0186 -5.0156)" style="fill:#222222;" width="5.5" height="1.5" />
                                    </g>
                                </svg> *}
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="182 372 50 50" style="enable-background:new 182 372 50 50;" xml:space="preserve">
                                    <g>
                                        <path style="fill:#222222;" d="M204.019,416.038c-12.141,0-22.019-9.877-22.019-22.019c0-12.141,9.878-22.019,22.019-22.019
                                        c12.142,0,22.019,9.878,22.019,22.019C226.038,406.161,216.161,416.038,204.019,416.038z M204.019,376.065
                                        c-9.9,0-17.954,8.054-17.954,17.954c0,9.9,8.054,17.954,17.954,17.954c9.9,0,17.954-8.054,17.954-17.954
                                        C221.973,384.119,213.919,376.065,204.019,376.065z" />
                                                                        <path style="fill:#222222;" d="M229.967,422c-0.52,0-1.04-0.198-1.437-0.596l-11.653-11.653c-0.794-0.793-0.794-2.081,0-2.874
                                        c0.794-0.794,2.08-0.794,2.874,0l11.653,11.653c0.794,0.793,0.794,2.081,0,2.874C231.007,421.802,230.487,422,229.967,422z" />
                                    </g>
                                </svg>
                                {* <span class="tvserach-name">{l s='Search' mod='tvcmssearch'}</span> *}
                            </button>
                        </div>
                    </form>
                    <div class='tvsearch-result'></div>
                </div>
            </div>
        </div>
    </div>
    {/strip}