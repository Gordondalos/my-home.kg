<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmsfeaturedproducts/views/templates/front/display_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd371b49_38120669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb079d982e1cb235499ef8a55f5c4a00117c698f' => 
    array (
      0 => '/var/www/html/modules/tvcmsfeaturedproducts/views/templates/front/display_left.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:tvcmsfeaturedproducts/views/templates/front/display_side_product.tpl' => 2,
  ),
),false)) {
function content_62928bcd371b49_38120669 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusFeature']->value == 0) {
$_smarty_tpl->_subTemplateRender("module:tvcmsfeaturedproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'featured_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusFeature']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
$_smarty_tpl->_subTemplateRender("module:tvcmsfeaturedproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'featured_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, true);
}
}
}
