<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from 'module:tvcmsspecialproductsviews' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd254008_89879922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78bd1c3980aff0c5e69a9de0c2bf80c980671d3' => 
    array (
      0 => 'module:tvcmsspecialproductsviews',
      1 => 1653771103,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 1,
    'file:catalog/_partials/miniatures/special_product_left.tpl' => 1,
  ),
),false)) {
function content_62928bcd254008_89879922 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmsleft-special-product tvleft-right-penal-all-block tvall-block-box-shadows wow fadeInUp"><div class="tvleft-special-product"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_title_status']->value,'title'=>$_smarty_tpl->tpl_vars['main_title']->value), 0, false);
?><div class="tvleft-product-wrapper-info tvcms-left-special"><div class="products tvleft-product-wrapper owl-theme owl-carousel"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="item"><?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/special_product_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>$_smarty_tpl->tpl_vars['tv_product_type']->value), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php }
}
