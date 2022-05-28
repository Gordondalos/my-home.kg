<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmsproductpopup/views/templates/hook/tvcmsproductpopup_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccd8d672_93460420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b152bca6306d7db434759b77418e5b9d534622' => 
    array (
      0 => '/var/www/html/modules/tvcmsproductpopup/views/templates/hook/tvcmsproductpopup_footer.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product.tpl' => 1,
  ),
),false)) {
function content_62928bccd8d672_93460420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '30868657462928bccd8a273_74399502';
?>
<div class="prod-animation tvcms-snackbar hidden-sm-down"><?php if ((isset($_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list'])) && count($_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list']) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_prod_fliter']->value['product_list'], 'product', false, NULL, 'product_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="tvcms-prod-popup"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_product']))) {
$_smarty_tpl->_subTemplateRender("file:./product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="tvcms-prod-popup"><p class="alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product at this time','mod'=>'tvcmsproductpopup'),$_smarty_tpl ) );?>
</p></div><?php }?></div><?php }
}
