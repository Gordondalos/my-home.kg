<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-main-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca67cc1_65549229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b7c960564d0d4a94450d97c0719fc2e80ae126' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-main-title.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcca67cc1_65549229 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcmsmain-title-wrapper clearfix'><div class="tvcms-main-title"><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_sub_title']) {?><div class='tvmain-sub-title'><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['short_desc'], ENT_QUOTES, 'UTF-8');?>
</h4></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_title']) {?><div class='tvmain-title'><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_description']) {?><div class='tvmain-desc'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['desc'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
