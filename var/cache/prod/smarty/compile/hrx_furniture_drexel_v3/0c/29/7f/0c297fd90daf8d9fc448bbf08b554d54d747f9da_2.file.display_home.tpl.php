<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd461e70_62066802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c297fd90daf8d9fc448bbf08b554d54d747f9da' => 
    array (
      0 => '/var/www/html/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd461e70_62066802 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSFOOTERLOGO_IMG')) {?><div class='tvfooter-about-logo-wrapper'><div class='tvfooter-logo-block wow fadeInUp'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['main_image']) {?><div class='tvfooter-img-block'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" alt="" height="51" width="205"/></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_title']) {?><div class='tvfooter-logo-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_short_description']) {?><div class='tvfooter-logo-short-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_description']) {?><div class='tvfooter-logo-desc'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
