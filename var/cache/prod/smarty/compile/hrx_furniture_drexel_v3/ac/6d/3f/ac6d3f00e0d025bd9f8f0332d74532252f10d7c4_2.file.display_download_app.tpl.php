<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmscustomsetting/views/templates/front/display_download_app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd4c2475_12927135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6d3f00e0d025bd9f8f0332d74532252f10d7c4' => 
    array (
      0 => '/var/www/html/modules/tvcmscustomsetting/views/templates/front/display_download_app.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd4c2475_12927135 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='tvcmsapp-logo '><div class='tvapp-logo '><div class="tvapp-logo-content-box"><div class="tvapp-logo-content-wrappe "><div class="tvapp-logo-img-content-wrapper"><div class="tvapp-logo-content-inner"><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['app_title']) {?><div class='tvdekstop-footer-all-title-wrapper'><div class='tvfooter-title'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_title'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['app_sub_title']) {?><div class='tvdekstop-footer-all-sub-title-wrapper'><div class='tvfooter-subtitle'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_sub_title'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['app_desc']) {?><div class='tvdekstop-footer-all-desc-wrapper'><div class='tvfooter-desc'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_desc'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['app_main_image']) {?><div class='tvapp-logo-image'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_image'], ENT_QUOTES, 'UTF-8');?>
' alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link_title'], ENT_QUOTES, 'UTF-8');?>
" height="275" width="250"/></div><?php }?></div></div><div class="tvapp-logo-link-wrapper "><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['apple_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-apple'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['apple_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Apple App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-1.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Apple App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="43" width="150"></a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['google_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-google'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['google_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Google App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-2.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Google App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="43" width="150"></a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['microsoft_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-microsoft'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['microsoft_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Microsoft App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-3.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Microsoft App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="43" width="150"></a></div><?php }?></div></div></div></div><?php }
}
