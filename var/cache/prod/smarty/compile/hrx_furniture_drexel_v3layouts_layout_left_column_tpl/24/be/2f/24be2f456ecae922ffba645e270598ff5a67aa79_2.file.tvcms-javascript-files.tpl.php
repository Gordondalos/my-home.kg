<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-javascript-files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccad50e2_88083676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24be2f456ecae922ffba645e270598ff5a67aa79' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-javascript-files.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccad50e2_88083676 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><!-- START THEME_CONTROL --><div class="tvcms-custom-theme"></div><!-- END THEME_CONTROL --><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_OPTION')) {
if (Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }?><!-- END THEME_CONTROL CUSTOM COLOR CSS --><?php }
}
}
