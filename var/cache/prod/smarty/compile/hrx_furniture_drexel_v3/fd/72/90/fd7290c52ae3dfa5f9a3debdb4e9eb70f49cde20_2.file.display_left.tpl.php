<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmsbestsellerproducts/views/templates/front/display_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd3a8a92_04377731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7290c52ae3dfa5f9a3debdb4e9eb70f49cde20' => 
    array (
      0 => '/var/www/html/modules/tvcmsbestsellerproducts/views/templates/front/display_left.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl' => 2,
  ),
),false)) {
function content_62928bcd3a8a92_04377731 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusbest']->value == 0) {
$_smarty_tpl->_subTemplateRender("module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'best_seller_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusbest']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
$_smarty_tpl->_subTemplateRender("module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'best_seller_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, true);
}
}
}
