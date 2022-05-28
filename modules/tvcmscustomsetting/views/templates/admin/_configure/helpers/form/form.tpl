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
{extends file="helpers/form/form.tpl"}

{block name="input"}
    {if $input.type == 'file_upload'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="dummyfile input-group">
                        <input id="{$input.name|escape:'htmlall':'UTF-8'}" type="file" name="{$input.name|escape:'htmlall':'UTF-8'}" class="hide-file-upload" />
                        <span class="input-group-addon"><i class="icon-file"></i></span>
                        <input id="{$input.name|escape:'htmlall':'UTF-8'}-name" type="text" class="disabled" name="filename" readonly />
                        <span class="input-group-btn">
                            <button id="{$input.name|escape:'htmlall':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                               <i class="icon-folder-open"></i> {l s='Choose a file' mod='tvcmscustomsetting'}
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            {assign var='width' value='250'}
            {assign var='height' value='275'}

            <div class="form-group">
                <div id="{$input.name|escape:'htmlall':'UTF-8'}-images-thumbnails" class="col-lg-12">
                    <img src="{$path|escape:'htmlall':'UTF-8'}{$fields_value[$input.name]|escape:'htmlall':'UTF-8'}" class="img-thumbnail" />
                    <p class="help-block">{l s='Please Select Image.' mod='tvcmscustomsetting'} (Size:- {$width|escape:'htmlall':'UTF-8'} X {$height|escape:'htmlall':'UTF-8'} )</p>
                </div>
            </div>
                

            <script>
                $(document).ready(function(){
                    $('#{$input.name|escape:"htmlall":"UTF-8"}-selectbutton').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}').trigger('click');
                    });
                    $('#{$input.name|escape:"htmlall":"UTF-8"}-name').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}').trigger('click');
                    });
                    $('#{$input.name|escape:"htmlall":"UTF-8"}').change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $('#{$input.name|escape:"htmlall":"UTF-8"}-name').val(file[file.length-1]);
                    });
                });
            </script>
        </div>
    {/if}

    {if $input.type == 'footer_img'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="dummyfile input-group">
                        <input id="{$input.name|escape:'htmlall':'UTF-8'}" type="file" name="{$input.name|escape:'htmlall':'UTF-8'}" class="hide-file-upload" />
                        <span class="input-group-addon"><i class="icon-file"></i></span>
                        <input id="{$input.name|escape:'htmlall':'UTF-8'}-name" type="text" class="disabled" name="filename" readonly />
                        <span class="input-group-btn">
                            <button id="{$input.name|escape:'htmlall':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                               <i class="icon-folder-open"></i> {l s='Choose a file' mod='tvcmscustomsetting'}
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            {assign var='width' value='1915'}
            {assign var='height' value='550'}

            <div class="form-group">
                <div id="{$input.name|escape:'htmlall':'UTF-8'}-images-thumbnails" class="col-lg-12">
                    <img src="{$path|escape:'htmlall':'UTF-8'}{$fields_value[$input.name]|escape:'htmlall':'UTF-8'}" class="img-thumbnail" />
                    <p class="help-block">{l s='Please select image.' mod='tvcmscustomsetting'} (Size:- {$width|escape:'htmlall':'UTF-8'} X {$height|escape:'htmlall':'UTF-8'} )</p>
                </div>
            </div>
                

            <script>
                $(document).ready(function(){
                    $('#{$input.name|escape:"htmlall":"UTF-8"}-selectbutton').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}').trigger('click');
                    });
                    $('#{$input.name|escape:"htmlall":"UTF-8"}-name').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}').trigger('click');
                    });
                    $('#{$input.name|escape:"htmlall":"UTF-8"}').change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $('#{$input.name|escape:"htmlall":"UTF-8"}-name').val(file[file.length-1]);
                    });
                });
            </script>
        </div>
    {/if}

    {if $input.type == 'file_upload_2'}
        <div class="col-lg-9">
            {foreach from=$languages item=language}
                {if $languages|count > 1}
                    <div class="translatable-field lang-{$language.id_lang|escape:'htmlall':'UTF-8'}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                {/if}
                <div class="form-group">
                    <div class="col-lg-9">
                        <div class="dummyfile input-group">
                            <input id="{$input.name|escape:'htmlall':'UTF-8'}_{$language.id_lang|escape:'htmlall':'UTF-8'}" type="file" name="tvcmscustomsetting_left_image_name_{$language.id_lang|escape:'htmlall':'UTF-8'}" class="hide-file-upload" />

                            <span class="input-group-addon"><i class="icon-file"></i></span>
                            <input id="{$input.name|escape:'htmlall':'UTF-8'}_{$language.id_lang|escape:'htmlall':'UTF-8'}-name" type="text" class="disabled" name="filename" readonly />
                            <span class="input-group-btn">
                                <button id="{$input.name|escape:'htmlall':'UTF-8'}_{$language.id_lang|escape:'htmlall':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                                    <i class="icon-folder-open"></i>{l s='Choose a file' mod='tvcmscustomsetting'}
                                </button>
                            </span>
                        </div>
                    </div>
                    {if $languages|count > 1}
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                {$language.iso_code|escape:'htmlall':'UTF-8'}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                {foreach from=$languages item=lang}
                                <li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'htmlall':'UTF-8'});" tabindex="-1">{$lang.name}</a></li>
                                {/foreach}
                            </ul>
                        </div>
                    {/if}
                </div>

                {assign var='width' value='450'}
                {assign var='height' value='588'}
                <div class="form-group">
                    <div id="{$input.name|escape:'htmlall':'UTF-8'}-{$language.id_lang|escape:'htmlall':'UTF-8'|escape:'htmlall':'UTF-8'}-images-thumbnails" class="col-lg-12">
                        <img src="{$path|escape:'htmlall':'UTF-8'}{$fields_value[$input.name][$language.id_lang]|escape:'htmlall':'UTF-8'}" class="img-thumbnail" />
                        <p class="help-block">Please Select Image. (Size:- {$width|escape:'htmlall':'UTF-8'} X {$height|escape:'htmlall':'UTF-8'} )</p>
                    </div>
                </div>
                    

                {if $languages|count > 1}
                    </div>
                {/if}
                <script>
                $(document).ready(function(){
                    $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}-selectbutton').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}').trigger('click');
                    });

                    $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}-name').click(function(e){
                        $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}').trigger('click');
                    });
                    
                    $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}').change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $('#{$input.name|escape:"htmlall":"UTF-8"}_{$language.id_lang|escape:"htmlall":"UTF-8"}-name').val(file[file.length-1]);
                    });
                });
            </script>
            {/foreach}
        </div>
    {/if}

    {if $input.type == 'file_upload_3'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="tvcmsall-pattern-show">
                        {$i=1}
                        {while $i <= 36}
                            {$tmp = 'pattern'|cat:$i}
                            <div class="tvall-pattern-show {if $background_pattern == $tmp}tvcms_custom_setting_active{/if}" id="pattern{$i}" style="background:url({$front_pattern_path}pattern/pattern{$i}.png)"></div>
                            {$i=$i+1}
                        {/while}
                        <div class="col-lg-12 tvall-pattern-custom-pattern" style="padding: 0;">
                            <input type="file" name="tvcmscustomsetting_custom_pattern" title="Add One Custom Pattern">
                            <input type="hidden" id="tvcmscustomsetting_pattern" name="tvcmscustomsetting_pattern" value="{$background_pattern}">

                            {if $custom_pattern}
                                <div class="tvall-pattern-show custom_pattern {if $background_pattern == 'custompattern'}tvcms_custom_setting_active{/if}" id="custompattern" style="background:url({$path}{$custom_pattern})"></div>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
            <p class="help-block">
                {l s='Choose Your Pattern or Update Your Custom Pattern.' mod='tvcmscustomsetting'}
            </p>
        </div>
    {/if}
 {if $input.type == 'file_upload_4'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="tvcmsall-pattern-show">
                        {assign var = 'custom_body_pattern' value = ''}
                        {$i=1}
                        {while $i <= 36}
                            {$tmp = 'pattern'|cat:$i}
                            <div class="tvall-body-pattern-show {if $body_background_pattern == $tmp}tvcms_custom_setting_body_active{/if}" id="pattern{$i}" style="background:url({$front_pattern_path}pattern/pattern{$i}.png)"></div>
                            {$i=$i+1}
                        {/while}
                        <div class="col-lg-12 tvall-pattern-custom-pattern" style="padding: 0;">
                            <input type="file" name="tvcmscustomsetting_custom_body_pattern" title="Add One Custom Pattern">
                            <input type="hidden" id="tvcmscustomsetting_body_pattern" name="tvcmscustomsetting_body_pattern" value="{$body_background_pattern}">
                            {if $custom_body_pattern}
                                <div class="tvall-body-pattern-show custom_body_pattern {if $body_background_pattern == 'custombodypattern'}tvcms_custom_setting_body_active{/if}" id="custombodypattern" style="background:url({$path}{$custom_body_pattern})"></div>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
            <p class="help-block">
                {l s='Choose Your Pattern or Update Your Custom Pattern.' mod='tvcmscustomsetting'}
            </p>
        </div>
    {/if}
    {if $input.type == 'custom_theme_option'}
        <div class="col-lg-9" id="TVCMSCUSTOMSETTING_THEME_OPTION">
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION1" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="" {if $fields_value[$input.name] == ''} checked {/if}> 
                    <div class="color-wrapper theme1">
                        <div class="first"></div>
                    </div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION1">{l s='Theme 1' mod='tvcmscustomsetting'}</label></p>
                    
                    <!-- <input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION2" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="theme2" {if $fields_value[$input.name] == 'theme2'} checked {/if}> 
                    <div class="color-wrapper theme2">
                        <div class="first"></div>
                    </div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION2">{l s='Theme 2' mod='tvcmscustomsetting'}</label></p>
                    <input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION3" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="theme3" {if $fields_value[$input.name] == 'theme3'} checked {/if}>
                    <div class="color-wrapper theme3">
                        <div class="first"></div>
                    </div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION3">{l s='Theme 3' mod='tvcmscustomsetting'}</label></p>
                    <input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION4" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="theme4" {if $fields_value[$input.name] == 'theme4'} checked {/if}>
                    <div class="color-wrapper theme4">
                        <div class="first"></div>
                    </div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION4">{l s='Theme 4' mod='tvcmscustomsetting'}</label></p> -->
                    
                    <input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION_CUSTOM" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="theme_custom" {if $fields_value[$input.name] == 'theme_custom'} checked {/if}>
                    <div class="color-wrapper theme_custom">
                        <div class="first" style="background-color: {Configuration::get('TVCMSCUSTOMSETTING_THEME_COLOR_1')}"></div>
                    </div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION_CUSTOM">{l s='Custom' mod='tvcmscustomsetting'}</label></p>

                </div>
                    <p class="help-block">
                        {l s='Choose front side theme.' mod='tvcmscustomsetting'}
                    </p>
            </div>
        </div>
    {/if}
    {if $input.type == 'dark_mode'}
        <div class="col-lg-9" id="TVCMSCUSTOMSETTING_DARKMODE_THEME_OPTION">
            <div class="form-group ttvcustom-image">
                <div class="col-lg-12">
                        <table>
                            <tr>
                                <td>
                                    <div class="lightModeWrapper">
                                        <label for="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT"><img src="{$path}light-icon.png" alt="Light Mode"></label>
                                        <p>
                                            <label for="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT">{l s='Light' mod='tvcmscustomsetting'}</label><br/>
                                            <input type="radio" id="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="0" {if $fields_value[$input.name] == 0} checked {/if}> 
                                        </p>                            
                                    </div>
                                </td>

                                <td>
                                    <div class="darkModeWrapper" alt="Dark Mode">
                                        <label for="TVCMSCUSTOMSETTING_DARK_MODE_INPUT"><img src="{$path}dark-icon.png" ></label>
                                        <p>
                                            <label for="TVCMSCUSTOMSETTING_DARK_MODE_INPUT">{l s='Dark' mod='tvcmscustomsetting'}</label><br/>
                                            <input type="radio" id="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="1" {if $fields_value[$input.name] == 1} checked {/if}> 
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                       
                        <p class="help-block">{l s='Choose front side theme.' mod='tvcmscustomsetting'}</p>
                </div>
                    
            </div>
        </div>
    {/if}

    {if $input.type == 'custom_color'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-2">
                    <div class="row">
                        <div class="input-group">
                            <input type="text" data-hex="true" class="color mColorPickerInput mColorPicker" name="TVCMSCUSTOMSETTING_THEME_COLOR_1" value="#0f0010" id="color_0" style="background-color: rgb(255, 255, 255); color: black;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}

    {$smarty.block.parent}
{/block} 
{/strip}
