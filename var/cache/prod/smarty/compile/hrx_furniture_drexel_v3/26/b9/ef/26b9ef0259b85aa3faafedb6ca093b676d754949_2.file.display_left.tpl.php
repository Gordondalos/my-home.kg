<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmsnewproducts/views/templates/front/display_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccf13fd5_29781410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b9ef0259b85aa3faafedb6ca093b676d754949' => 
    array (
      0 => '/var/www/html/modules/tvcmsnewproducts/views/templates/front/display_left.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:tvcmsnewproducts/views/templates/front/display_side_product.tpl' => 2,
  ),
),false)) {
function content_62928bccf13fd5_29781410 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatus']->value == 1) {
$_smarty_tpl->_subTemplateRender("module:tvcmsnewproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'new_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatus']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
$_smarty_tpl->_subTemplateRender("module:tvcmsnewproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'new_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, true);
}
}
}
