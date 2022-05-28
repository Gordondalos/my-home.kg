{**
* 2007-2021 PrestaShop
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
    * @copyright 2007-2021 PrestaShop SA
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class="tvcmstheme-control">
        <div class="tvtheme-control">
            <div class="tvtheme-control-wrapper">
                <div class="tvthemecontrol-heading">
                    <div class="tvtheme-control-title-name">
                        {hook h='displayFrontSetting'}
                    </div>
                    <div class="tvtheme-control-title-name-reset-btn">
                        <p>{l s='Theme Option' d='Shop.Theme.Global'}</p>
                    </div>
                    <div class="tvcms-custom-font-1"></div>
                    <div class="tvcms-custom-font-2"></div>
                    <div class="tvcms-custom-color"></div>
                    <div class="tvcms-custom-theme"></div>
                </div>
                <table>
                    <tr class="tvselect-theme tvall-theme-content">
                        <td>
                            <div class="tvselect-theme-name">{l s='Theme' d='Shop.Theme.Global'}</div>
                            <select class="tvselect-theme-select" id="select_theme">
                                <option value="" data-color="" data-color-two="">{l s='Theme 1' d='Shop.Theme.Global'}</option>
                                <option value="theme2" data-color="#47779e" data-color-two="#ededed">{l s='Theme 2' d='Shop.Theme.Global'}</option>
                                <option value="theme3" data-color="#317773" data-color-two="#ededed">{l s='Theme 3' d='Shop.Theme.Global'}</option>
                                <option value="theme4" data-color="#CA7840" data-color-two="#ededed">{l s='Theme 4' d='Shop.Theme.Global'}</option>
                                <option value="theme_custom" data-color="">{l s='Custom' d='Shop.Theme.Global'}</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="tvtheme-color-one tvall-theme-content">
                        <td>
                            <div class="tvcolor-theme-name">{l s='Custome Color 1' mod='tvcmsthemeoptions'}</div>
                            <div class="tvtheme-color-box">
                                <input type="text" id="themecolor1" class="tvtheme-color-box-1" data-control="saturation">
                            </div>
                        </td>
                    </tr>
                    {* <tr class="tvtheme-color-two tvall-theme-content">
                        <td>
                            <div class="tvcolor-two-theme-name">{l s='Custome Color 2' d='Shop.Theme.Global'}</div>
                            <div class="tvtheme-color-box">
                                <input type="text" id="themecolor2" class="tvtheme-color-box-2" data-control="saturation">
                            </div>
                        </td>
                    </tr> *}
                    <tr class="tvtheme-box-layout tvall-theme-content">
                        <td>
                            <div class="tvtheme-layout-name">{l s='Box-Layout' d='Shop.Theme.Global'}</div>
                            <div class="box tvtheme-option">
                                <input type="checkbox" id="box-layout-toggle" class='tvtheme-box-layout-option' />
                                <label for="box-layout-toggle" class="tvtheme-option">{* {l s='Toggle' d='Shop.Theme.Global'} *}</label>
                            </div>
                        </td>
                    </tr>
                    <tr class="tvtheme-background-patten tvall-theme-content">
                        <td>
                            <div class="tvtheme-background-pattern-name">{l s='Background Pattern' d='Shop.Theme.Global'}</div>
                            <div class="tvtheme-all-pattern-wrapper">
                                {$i = 1}
                                {while $i <= 36} <div class="tvtheme-all-pattern">
                                    <div id="pattern{$i}" class="tvtheme-pattern-image tvtheme-pattern-image{$i}" style="background-image:url('{$urls.img_url}pattern/pattern_sprite.png')" data-background-image-url="{$urls.img_url}pattern/pattern{$i}.png"></div>
                            </div>
                            {$i = $i + 1}
                            {/while}
            </div>
            <p class="notice">{l s='Custome background also available in admin.' mod='tvcmsthemeoptions'}</p>
            </td>
            </tr>
            <tr class="tvtheme-background-color tvall-theme-content">
                <td>
                    <div class="tvbgcolor-theme-name">{l s='Background color' d='Shop.Theme.Global'}</div>
                    <div class="tvtheme-bgcolor-box">
                        <input type="text" id="themebgcolor2" data-control="saturation" class="tvtheme-bgcolor-box-2">
                    </div>
                </td>
            </tr>
            <tr class="tvtheme-background-layout tvall-theme-content">
                <td>
                    <div class="tvtheme-layout-name">{l s='Body Background' d='Shop.Theme.Global'}</div>
                    <div class="box tvtheme-option">
                        <input type="checkbox" id="body-background-toggle" class='tvtheme-body-background-option' />
                        <label for="body-background-toggle" class="tvtheme-body-background">{* {l s='Toggle' d='Shop.Theme.Global'} *}</label>
                    </div>
                </td>
            </tr>
            <tr class="tvtheme-body-bgcolor tvall-theme-content">
                <td>
                    <div class="tvbody-bgcolor-theme-name tvtheme-layout-name">{l s='Body Background Color' d='Shop.Theme.Global'}</div>
                    <div class="tvtheme-color-box">
                        <input type="text" id="themebodybgcolor" class="tvtheme-bgcolor" data-control="saturation">
                    </div>
                </td>
            </tr>
            <tr class="tvtheme-body-background-patten tvall-theme-content">
                <td>
                    <div class="tvtheme-body-background-pattern-name">{l s='Body Background Pattern' d='Shop.Theme.Global'}</div>
                    <div class="tvtheme-all-body-pattern-wrapper">
                        {$i = 1}
                        {while $i <= 36} <div class="tvtheme-all-body-pattern">
                            <div id="bodypattern{$i}" class="tvtheme-body-pattern-image tvtheme-body-pattern-image{$i}" style="background-image:url('{$urls.img_url}pattern/pattern_sprite.png')" data-background-image-url="{$urls.img_url}pattern/pattern{$i}.png"></div>
                    </div>
                    {$i = $i + 1}
                    {/while}
        </div>
        <p class="notice">{l s='Custome background also available in admin.' mod='tvcmsthemeoptions'}</p>
        </td>
        </tr>
        {* <tr class="tvtheme-theme-mode tvall-theme-content">
            <td>
                <div class="tvtheme-layout-name">{l s='IOS 13 Dark Mode' mod='tvcmsthemeoptions'}</div>
                <div class="tvtheme-theme-mode-wrapper">
                    <table>
                        <tr>
                            <td>
                                <div class="lightModeWrapper mode-option">
                                    <label for="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT">
                                        <img src="{$themeoptionsimagepath}light-icon.png" alt="Light Mode">
                                        <div class="tvcheck-popup"><i class='material-icons'>&#xe5ca</i></div>
                                        <input type="radio" id="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="0">
                                    </label>
                                    <p>
                                        <label>{l s='Light' mod='tvcmsthemeoptions'}</label><br />
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="darkModeWrapper mode-option">
                                    <label for="TVCMSCUSTOMSETTING_DARK_MODE_INPUT">
                                        <img src="{$themeoptionsimagepath}dark-icon.png" alt="Dark Mode">
                                        <div class="tvcheck-popup"><i class='material-icons'>&#xe5ca</i></div>
                                        <input type="radio" id="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="1">
                                    </label>
                                    <p>
                                        <label>{l s='Dark' mod='tvcmsthemeoptions'}</label><br />
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- 
                                <input type="checkbox" id="dark-mode" class='tvtheme-box-layout-option' />
                                <label for="dark-mode-layout" class="tvtheme-option-dark-mode"></label> -->
                </div>
            </td>
        </tr> *}
        <!-- <tr class="tvtheme-box-layout tvall-theme-content">
					<td>
						<div class="tvtheme-layout-name">{l s='Box-Layout' d='Shop.Theme.Global'}</div>
						<div class="box tvtheme-option">
							<input type="checkbox" id="box-layout-toggle" class='tvtheme-box-layout-option' />
							<label for="box-layout-toggle" class="tvtheme-option">{* {l s='Toggle' d='Shop.Theme.Global'} *}</label>
						</div>
					</td>
				</tr> -->
        <!-- <tr class="tvtheme-body-bgcolor tvall-theme-content">
					<td>
						<div class="tvbody-bgcolor-theme-name tvtheme-layout-name">{l s='Body Background Color' d='Shop.Theme.Global'}</div>
						<div class="tvtheme-color-box">
							<input type="text" id="themebodybgcolor" class="tvtheme-bgcolor" data-control="saturation">
						</div>
					</td>
				</tr> -->
        <tr class="tvselect-title-font-1 tvall-theme-content">
            <td>
                <div class="tvselect-title-font-1-name tvtheme-layout-name">{l s='Title Font Family' d='Shop.Theme.Global'}</div>
                <select class="tvselect-title-font-1-select" id="select_title_font_1">
                    <option value="" data-font-link=''>{l s='Default Font Style' d='Shop.Theme.Global'}</option>
                    {foreach $title_font_list as $font}
                    <option value="{$font['name']}" data-font-link="{$font['link']}">{$font['name']}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr class="tvtheme-title-color tvall-theme-content">
            <td>
                <div class="tvtheme-title-color tvtheme-layout-name">{l s='Title Color' d='Shop.Theme.Global'}</div>
                <div class="tvtheme-color-box">
                    <input type="text" id="themeCustomTitleColor" class="tvtheme-custom-title-color" data-control="saturation">
                </div>
            </td>
        </tr>
        <tr class="tvselect-title-font-2 tvall-theme-content">
            <td>
                <div class="tvselect-title-font-2-name tvtheme-layout-name">{l s='Theme' d='Shop.Theme.Global'}</div>
                <select class="tvselect-title-font-2-select" id="select_title_font_2">
                    <option value="" data-font-link=''>{l s='Default Font Style' d='Shop.Theme.Global'}</option>
                    {foreach $title_font_list as $font}
                    <option value="{$font['name']}" data-font-link="{$font['link']}">{$font['name']}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr class="tvtheme-menu-sticky tvall-theme-content">
            <td>
                <div class="tvtheme-menu-sticky-name">
                    {l s='Menu Sticky' d='Shop.Theme.Global'}
                </div>
                <div class="box tvtheme-option">
                    <input type="checkbox" id="menu-sticky-toggle" class='tvtheme-menu-sticky-option' />
                    <label for="menu-sticky-toggle" class="tvtheme-option">{* {l s='Toggle' d='Shop.Theme.Global'} *}</label>
                </div>
            </td>
        </tr>
        </table>
        <button class="tvtheme-control-reset tvall-inner-btn">
            <span>{l s='Reset' d='Shop.Theme.Global'}</span>
        </button>
    </div>
    <div class="tvtheme-control-icon">
        <i class='material-icons'>&#xe429;</i>
    </div>
    </div>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    /*var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5bb5c1e7b033e9743d02392d/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();*/
    </script>
    <!--End of Tawk.to Script-->
    {/strip}