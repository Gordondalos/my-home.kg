<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmssingleblock/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca99b48_02358901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6a82c1aba45c6e35b1a59b1cbdd049cfee34b1d' => 
    array (
      0 => '/var/www/html/modules/tvcmssingleblock/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcca99b48_02358901 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='container-fluid tvcmssingle-block'><div class='container tvsingle-block wow fadeInUp'><?php if (!empty($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'])) {?><div class="tv-single-block-content"><?php echo $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'];?>
</div><?php }?></div></div><?php }
}
}
