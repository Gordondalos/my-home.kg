<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:34
  from 'module:tvcmsmegamenuviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcece7ce7_56749788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a7b757312e7058da1e4930f080ce8b9441f79ba' => 
    array (
      0 => 'module:tvcmsmegamenuviewstemplat',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcece7ce7_56749788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '206944091562928bcecc2021_99631378';
?>
<div class="container_tv_megamenu container"><div id="tv-menu-horizontal" class="tv-menu-horizontal clearfix"><?php $_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);?><div class="title-menu-mobile"><a href="Javascript:void(0);" title=""><i class='material-icons'>&#xe5d2;</i></a></div><ul class="menu-content"><li class="tvmega-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mega Menu','mod'=>'tvcmsmegamenu'),$_smarty_tpl ) );?>
<a href="Javascript:void(0);"><i class='material-icons'>&#xe14c;</i></a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, NULL, 'menus', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['menu']->value['type'])) && $_smarty_tpl->tpl_vars['menu']->value['type'] == 'CAT' && $_smarty_tpl->tpl_vars['menu']->value['dropdown'] == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu'],'quotes','UTF-8' ));
} else { ?><li class="level-1 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?> parent<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 0 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><img class="img-icon" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/><?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 1 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle'] != '') {?><span class="menu-subtitle" <?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'] != '') {?>style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><span class="icon-drop-mobile"></span><?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])) && count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?><div class="tv-sub-menu menu-dropdown col-xs-12 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['width_sub'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['align_sub'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value['background_img']) {?>style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background_path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['background_img'], ENT_QUOTES, 'UTF-8');?>
);"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['sub_menu'], 'menu_row', false, NULL, 'menu_row', array (
));
$_smarty_tpl->tpl_vars['menu_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_row']->value) {
$_smarty_tpl->tpl_vars['menu_row']->do_else = false;
?><div class="tv-menu-row row <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_row']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])) && count($_smarty_tpl->tpl_vars['menu_row']->value['list_col']) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_row']->value['list_col'], 'menu_col', false, NULL, 'menu_col', array (
));
$_smarty_tpl->tpl_vars['menu_col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_col']->value) {
$_smarty_tpl->tpl_vars['menu_col']->do_else = false;
?><div class="tv-menu-col col-xs-12 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['menu']->value['type'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['type'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"><?php if (count($_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item']) > 0) {?><ul class="ul-column tv-megamenu-slider-wrapper <?php if ($_smarty_tpl->tpl_vars['menu_col']->value['class'] == 'tv-mega-menu-slider') {?> owl-carousel<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item'], 'sub_menu_item', false, NULL, 'sub_menu_item', array (
));
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = false;
?><li class="<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] != 4) {?>tvmega-menu-link<?php }?> <?php if ($_smarty_tpl->tpl_vars['menu_col']->value['class'] == 'tv-mega-menu-slider') {?>item<?php }?> menu-item<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item'] == 1) {?> item-header<?php } else { ?> item-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 4) {?>product-block<?php }?>"><?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 4) {
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);
$_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_item']->value['product'], 'product', false, NULL, 'product', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="product-container clearfix"><div class="product-image-container"><a class="product_img_link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img class="replace-2x img-responsive"src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/></a></div><div class="product-description"><?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'' )),'htmlall','UTF-8' ))) {?><div class="tvproduct-name"><div class="product-title"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ><h6><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'' )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><?php }
if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?><div class="product-price-and-shipping"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?><span class="price product-price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {
if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type'] == 'percentage') {?><span class="price-percent-reduction discount-percentage discount-product tvproduct-discount-price">-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'],'htmlall','UTF-8' ))*100, ENT_QUOTES, 'UTF-8');?>
%</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?><span class="regular-price product-price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
}?></div><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 3) {
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8' ))) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php }?><div class="html-block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['text'],'quotes','UTF-8' ));?>
</div><?php } else {
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8' ))) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8' ));?>
</a><?php }
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul> <?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }
}
