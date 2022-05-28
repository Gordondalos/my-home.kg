<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:38
  from '/var/www/html/modules/tvcmstabproducts/views/templates/front/display_index_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bd2587329_33913722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb0c9303fd71a87b590599b25fea3c0aed54c4c' => 
    array (
      0 => '/var/www/html/modules/tvcmstabproducts/views/templates/front/display_index_data.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_62928bd2587329_33913722 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_status']) {
$_smarty_tpl->_assignInScope('col', 'col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 tvimage-true');
$_smarty_tpl->_assignInScope('image', true);
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_side'] == 'left') {
$_smarty_tpl->_assignInScope('image_side', 'left');
} else {
$_smarty_tpl->_assignInScope('image_side', 'right');
}
} else {
$_smarty_tpl->_assignInScope('col', '');
$_smarty_tpl->_assignInScope('image', '');
$_smarty_tpl->_assignInScope('image_side', '');
}
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class="tvtab-product-wrapper container wow fadeInUp"><div class="tvtab-product-all-box"><div class="tvtab-product"><div class='tvtab-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?><div class="tvtab-title-wrapper"><div class="tvtab-title"><ul class="tvtabs-products"><?php $_smarty_tpl->_assignInScope('tmp', true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><li class="tvtab-name tab-index <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?>" data-tab-data='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
' data-tab-paging='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
' data-tab-data-slider-class='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
'><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['tab_name'], ENT_QUOTES, 'UTF-8');?>
</span></li><?php $_smarty_tpl->_assignInScope('tmp', false);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div></div></div><div class="tvtab-product-branner"><?php if ($_smarty_tpl->tpl_vars['image']->value == true && $_smarty_tpl->tpl_vars['image_side']->value == 'left') {?><div class="tvall-product-branner tvall-product-branner-left col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="tvall-block-box-shadows"><div class="tvbanner-hover-wrapper"><div class='tvbanner-hover'></div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Product','mod'=>'tvcmstabproducts'),$_smarty_tpl ) );?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['height'], ENT_QUOTES, 'UTF-8');?>
"><div class='tvbanner-hover1'></div></div></div></div><?php }?><div class="tvtab-product-all-pagination <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="tvall-block-box-shadows"><div class='tvtab-product-list-wrapper'><?php $_smarty_tpl->_assignInScope('tmp', true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'tab_products');
$_smarty_tpl->tpl_vars['tab_products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_products']->value) {
$_smarty_tpl->tpl_vars['tab_products']->do_else = false;
?><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
" class="tvcmstab-product <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
 tvcmstab-product-detail"><div class="products owl-theme owl-carousel tvproduct-wrapper-content-box tvall-tab-product-block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
" data-has-image='<?php if ($_smarty_tpl->tpl_vars['image']->value == true) {?>true<?php } else { ?>false<?php }?>'><?php if (Configuration::get('TVCMSCUSTOMSETTING_TAB_PRODUCT_ROW')) {
$_smarty_tpl->_assignInScope('count', 1);?>                                    <?php $_smarty_tpl->_assignInScope('double_row', true);
$_smarty_tpl->_assignInScope('single_row', false);
} else {
$_smarty_tpl->_assignInScope('count', 5);?>                                    <?php $_smarty_tpl->_assignInScope('double_row', false);
$_smarty_tpl->_assignInScope('single_row', true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_products']->value['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value == '1') {?><div class="tvtabproduct-main-block item"><?php $_smarty_tpl->_assignInScope('double_row', true);
}
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>'tab_product','tab_slider'=>true,'double_row'=>$_smarty_tpl->tpl_vars['double_row']->value), 0, true);
$_smarty_tpl->_assignInScope('double_row', false);
if ($_smarty_tpl->tpl_vars['count']->value == '2') {?></div><?php $_smarty_tpl->_assignInScope('count', '0');
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != '1' && !$_smarty_tpl->tpl_vars['single_row']->value) {?></div><?php }?></div><div class='tvtab-pagination-wrapper tv-pagination-wrapper'><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination tvtab-pagination <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?>"></div><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination tvtab-pagination <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?>"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination-next-pre-btn tvcms-next-pre-btn"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
-prev tvcmsprev-btn" data-parent="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>&#xe314;</i></div><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
-next tvcmsnext-btn" data-parent="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>&#xe315;</i></div></div></div></div></div><?php $_smarty_tpl->_assignInScope('tmp', false);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php if ($_smarty_tpl->tpl_vars['image']->value == true && $_smarty_tpl->tpl_vars['image_side']->value == 'right') {?><div class="tvall-product-branner tvall-product-branner-right col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="tvall-block-box-shadows"><div class="tvbanner-hover-wrapper"><div class='tvbanner-hover'></div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Product','mod'=>'tvcmstabproducts'),$_smarty_tpl ) );?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['height'], ENT_QUOTES, 'UTF-8');?>
"><div class='tvbanner-hover1'></div></div></div></div><?php }?></div></div></div><?php }
}
}
