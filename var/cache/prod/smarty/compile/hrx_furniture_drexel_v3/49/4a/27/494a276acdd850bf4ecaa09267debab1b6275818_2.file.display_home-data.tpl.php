<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:38
  from '/var/www/html/modules/tvcmsfooterproduct/views/templates/front/display_home-data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bd25832f7_18525704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494a276acdd850bf4ecaa09267debab1b6275818' => 
    array (
      0 => '/var/www/html/modules/tvcmsfooterproduct/views/templates/front/display_home-data.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/footer-product.tpl' => 3,
  ),
),false)) {
function content_62928bd25832f7_18525704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('display_prod', Configuration::get('TVCMSFOOTERPRODUCT_NUM_OF_PRODUCT'));
if (Configuration::get('TVCMSFOOTERPRODUCT_STATUS')) {?><div class="tvcmsmain-all-product tvmain-box-layout-content-wrapper container"><div class="tvmain-all-product"><div class="tvmain-product-all-wrapper-box row"><div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 tvcmsfooter-featured-product wow fadeInUp"><?php if (!empty($_smarty_tpl->tpl_vars['footer_product_list']->value['featured_product'])) {?><div class="tvfooter-product-title-product tvall-block-box-shadows"><?php if (Configuration::get('TVCMSFOOTERPRODUCT_FEATURED_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class="tvcms-main-title tvcmsmain-title-wrapper"><div class="tv-main-title tvcms-main-title"><div class="tvtitle tvmain-title"><h2><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERPRODUCT_FEATURED_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</h2></div></div><div class='tvfooter-featured-product-pagination-wrapper'><div class="tvfooter-featured-product-pagination-pagination"><div class="tvfooter-featured-product-pagination-next-pre-btn"><div class="tvfooter-featured-product-prev tvcmsprev-btn" data-parent='tvcmsfooter-featured-product'><i class='material-icons'>&#xe5cb;</i></div><div class="tvfooter-featured-product-next tvcmsnext-btn" data-parent='tvcmsfooter-featured-product'><i class='material-icons'>&#xe5cc;</i></div></div></div></div></div><?php }?><div class="tvmain-all-product-wrapper tvfooter-featured-prod-slider"><div class="tvmain-featured-product-wrapper"><div class="tvmain-featured-product-wrapper-info-box owl-theme owl-carousel"><?php $_smarty_tpl->_assignInScope('count', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_product_list']->value['featured_product']['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value == 1) {?><div class="item tvmain-footer-tab-prod-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php }
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
if ($_smarty_tpl->tpl_vars['count']->value == $_smarty_tpl->tpl_vars['display_prod']->value) {?></div><?php $_smarty_tpl->_assignInScope('count', 0);
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != '1') {?></div><?php }?></div></div></div><div class="tvfooter-view-link"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_product_list']->value['featured_link'], ENT_QUOTES, 'UTF-8');?>
'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Featured Products','mod'=>'tvcmsfooterproduct'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe315;</i></a></div></div><?php }?></div><div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 tvcmsfooter-new-product wow fadeInUp"><?php if (!empty($_smarty_tpl->tpl_vars['footer_product_list']->value['new_product']['product_list'])) {?><div class="tvfooter-product-title-product tvall-block-box-shadows"><?php if (Configuration::get('TVCMSFOOTERPRODUCT_NEW_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class="tvcms-main-title tvcmsmain-title-wrapper"><div class="tv-main-title tvcms-main-title"><div class="tvtitle tvmain-title"><h2><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERPRODUCT_NEW_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</h2></div></div><div class='tvfooter-new-product-pagination-wrapper'><div class="tvfooter-new-product-pagination-pagination"><div class="tvfooter-new-product-pagination-next-pre-btn"><div class="tvfooter-new-product-prev tvcmsprev-btn" data-parent='tvcmsfooter-new-product'><i class='material-icons'>&#xe5cb;</i></div><div class="tvfooter-new-product-next tvcmsnext-btn" data-parent='tvcmsfooter-new-product'><i class='material-icons'>&#xe5cc;</i></div></div></div></div></div><?php }?><div class="tvmain-all-product-wrapper tvfooter-new-prod-slider"><div class="tvmain-new-product-wrapper"><div class="tvmain-new-product-wrapper-info-box owl-theme owl-carousel"><?php $_smarty_tpl->_assignInScope('count', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_product_list']->value['new_product']['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value == 1) {?><div class="item tvmain-footer-tab-prod-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php }
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
if ($_smarty_tpl->tpl_vars['count']->value == $_smarty_tpl->tpl_vars['display_prod']->value) {?></div><?php $_smarty_tpl->_assignInScope('count', 0);
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != '1') {?></div><?php }?></div></div></div><div class="tvfooter-view-link"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_product_list']->value['new_link'], ENT_QUOTES, 'UTF-8');?>
'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' All New Products','mod'=>'tvcmsfooterproduct'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe315;</i></a></div></div><?php }?></div><div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 tvcmsfooter-best-seller-product wow fadeInUp"><?php if (!empty($_smarty_tpl->tpl_vars['footer_product_list']->value['best_seller_product']['product_list'])) {?><div class="tvfooter-product-title-product tvall-block-box-shadows"><?php if (Configuration::get('TVCMSFOOTERPRODUCT_BEST_SELLER_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value)) {?><div class="tvcms-main-title tvcmsmain-title-wrapper"><div class="tv-main-title tvcms-main-title"><div class="tvtitle tvmain-title"><h2><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERPRODUCT_BEST_SELLER_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</h2></div></div><div class='tvfooter-best-seller-product-pagination-wrapper'><div class="tvfooter-best-seller-product-pagination-pagination"><div class="tvfooter-best-seller-product-pagination-next-pre-btn"><div class="tvfooter-best-seller-product-prev tvcmsprev-btn" data-parent="tvcmsfooter-best-seller-product"><i class='material-icons'>&#xe5cb;</i></div><div class="tvfooter-best-seller-product-next tvcmsnext-btn" data-parent="tvcmsfooter-best-seller-product"><i class='material-icons'>&#xe5cc;</i></div></div></div></div></div><?php }?><div class="tvmain-all-product-wrapper tvfooter-besr-prod-slider"><div class="tvmain-best-product-wrapper"><div class="tvmain-new-product-wrapper-info-box owl-theme owl-carousel"><?php $_smarty_tpl->_assignInScope('count', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_product_list']->value['best_seller_product']['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value == 1) {?><div class="item tvmain-footer-tab-prod-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php }
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/footer-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
if ($_smarty_tpl->tpl_vars['count']->value == $_smarty_tpl->tpl_vars['display_prod']->value) {?></div><?php $_smarty_tpl->_assignInScope('count', 0);
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != '1') {?></div><?php }?></div></div></div><div class="tvfooter-view-link"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_product_list']->value['best_seller_link'], ENT_QUOTES, 'UTF-8');?>
'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' All Best Products','mod'=>'tvcmsfooterproduct'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe315;</i></a></div></div><?php }?></div></div></div></div><?php }
}
}
