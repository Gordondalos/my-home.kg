<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce67496_16358224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce67496_16358224 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="_desktop_cart"><div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?> tv-header-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="tvheader-cart-wrapper <?php if (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up') {?>tvcms-popup-block<?php }?>"><div class="tvheader-cart-btn-wrapper <?php if (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'classic') {?>tvcms-classic-block<?php }?>"><a rel="nofollow" href="JavaScript:void(0);" data-url='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cart",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
'><div class="tvcart-icon-text-wrapper"><div class="tv-cart-icon-main"><div class="tv-cart-icon tvheader-right-icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="19px" viewBox="0 0 45.6 38.4" style="enable-background:new 0 0 45.6 38.4;" xml:space="preserve"><g id="XMLID_1_"><path id="XMLID_24_" style="fill:#222222;" d="M45.6,5.8c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.2-0.1,0.3c-0.8,2.8-1.5,5.6-2.3,8.4c-0.9,3.1-1.7,6.3-2.6,9.4c-0.5,1.7-1.8,2.7-3.6,2.8c-0.4,0-0.9,0-1.3,0c0.2,0.1,0.3,0.2,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.6-0.5-4.7-2.7-4.8-5.2c-0.1-2.9,1.5-5.3,4.2-6c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0c-5,0-10,0-15,0c0.1,0.1,0.3,0.1,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.5-0.5-4.4-2.4-4.7-5c-0.3-2.4,1-4.8,3.3-5.9c0.4-0.2,0.9-0.4,1.4-0.6c-0.4,0-0.7,0-1,0c-2.3,0-3.6-1.1-4.1-3.2C9.5,17.2,7.9,10.8,6.3,4.4C6.2,4,6.1,3.8,5.6,3.8c-1.2,0-2.5,0-3.7,0C1,3.8,0.3,3.2,0.1,2.4c-0.2-0.8,0.2-1.8,1-2.1C1.2,0.1,1.3,0.1,1.5,0C3.2,0,5,0,6.8,0c0,0,0.1,0.1,0.1,0.1c1.6,0.4,2.6,1.4,3,3c1.6,6.4,3.2,12.9,4.8,19.3c0.1,0.5,0.3,0.7,0.9,0.7c6.9,0,13.8,0,20.7,0c0.2,0,0.4,0,0.6,0c1.2-4.5,2.4-8.9,3.7-13.4c-8.7,0-17.5,0-26.2,0c-0.3-1.3-0.6-2.5-1-3.8C24.2,5.8,34.9,5.8,45.6,5.8z M19.2,32.6c0-1.1-0.8-1.9-1.9-1.9c-1.1,0-1.9,0.9-1.9,1.9c0,1,0.8,1.9,1.9,1.9C18.3,34.5,19.2,33.7,19.2,32.6z M34.5,30.7c-1.1,0-1.9,0.9-1.9,1.9c0,1.1,0.9,1.9,1.9,1.9c1,0,1.9-0.8,1.9-1.9C36.5,31.6,35.6,30.7,34.5,30.7z" /></g></svg></div></div><div class="tv-cart-cart-inner"><span class="tvcart-lable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span><span class="cart-products-count"><i>(</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
<i>)</i></span><span class="tv-cart-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></div></div></a></div><?php if (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'classic') {?><div class="ttvcmscart-show-dropdown-right"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><div class="ttvcart-scroll-container"><div class="ttvcart-close-title-count"><button class="ttvclose-cart"></button><div class="ttvcart-top-title"><h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4></div><div class="ttvcart-counter"><span class="ttvcart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><div class="ttvcart-product-content-box ttvscroll-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="ttvcart-product-wrapper items"><div class="tvcart-product-list-img"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvshoping-cart-dropdown-img-block"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"></a></div><div class="tvcart-product-content"><div class="tvshoping-cart-dropdown-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=""><span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></div><div class="tvcart-product-list-box"><span class="tvshopping-cart-qty"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QTY :','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><span class="product-qty"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span></div><span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?><div class="tvcart-product-remove"><?php $_smarty_tpl->_assignInScope('url', ('controller=cart&delete=').($_smarty_tpl->tpl_vars['product']->value['id_product']));?><a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="delete-from-cart" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-customization="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe872;</i></a></div><?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?><div class="customizations"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?><li><span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="remove-from-cart" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?><li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?><span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="ttvcart-price-shipping-text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
if ($_smarty_tpl->tpl_vars['subtotal']->value['value'] && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?><div class="ttvcart-product-label-value" id="tvcart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span class="ttvshoping-cart-label label<?php if ('products' === $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>"><?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?><small class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</small><?php }?></span><span class="ttvcart-product-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="ttvcart-product-label-value total"><span class="ttvshoping-cart-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ttvcart-product-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div><div class="ttvcart-product-label-value tax"><span class="ttvshoping-cart-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ttvcart-product-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><div class="ttvcart-product-list-btn-wrapper"><button class="ttvcart-product-list-viewcart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></button><button class="ttvcart-product-list-checkout"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',null,$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CheckOut','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></button></div><?php } else { ?><div class="ttvcart-no-product"><div class="tdclose-btn-wrap"><div class="ttvcart-close-title-count"><button class="ttvclose-cart"></button><div class="ttvcart-top-title"><h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4></div><div class="ttvcart-counter"><span class="ttvcart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></div><div class="tvcart-no-product-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/cart.png"><div class='ttvcart-no-product-label'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product Add in Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></div></div></div><?php }?></div><div class="modal-backdrop-cart"></div><!-- Start DropDown header cart --><?php } elseif (Configuration::get('TVCMSCUSTOMSETTING_CART_VIEW') == 'pop-up') {?><div class="tvcmscart-show-dropdown"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><div class="tvcart-product-list"><div class="tvcart-product-totle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Cart: ','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['cart']->value['products']), ENT_QUOTES, 'UTF-8');?>
 <?php if (count($_smarty_tpl->tpl_vars['cart']->value['products']) == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
}?></div><div class="tvcart-product-content-box tvscroll-container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="tvcart-product-wrapper items"><div class="tvcart-product-list-img"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvshoping-cart-dropdown-img-block"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"></a></div><div class="tvcart-product-content"><div class="tvcart-product-list-quentity"><div class="tvshoping-cart-dropdown-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=""><span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></div></div><div class="tvcart-product-list-price"><span class="product-quentity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><span class="tvshopping-cart-quentity">X</span><span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span></div><div class="tvcart-product-list-attribute"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'prod_val', false, 'prod_attb');
$_smarty_tpl->tpl_vars['prod_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod_attb']->value => $_smarty_tpl->tpl_vars['prod_val']->value) {
$_smarty_tpl->tpl_vars['prod_val']->do_else = false;
?><div class="tvcart-product-attr"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prod_attb']->value, ENT_QUOTES, 'UTF-8');?>
:</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prod_val']->value, ENT_QUOTES, 'UTF-8');?>
</span></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvcart-product-remove"><?php $_smarty_tpl->_assignInScope('url', ('controller=cart&delete=').($_smarty_tpl->tpl_vars['product']->value['id_product']));?><a class="remove-from-cart tvcmsremove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="delete-from-cart" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" data-id-customization="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class='material-icons'>&#xe872;</i></a></div><?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?><div class="customizations"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?><li><span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="remove-from-cart" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?><li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?><span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvcart-product-list-total-info"><div class="tvcart-product-list-subtotal-prod"><span class="tvshoping-cart-subtotal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span><span class="tvcart-product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></div><div class="tvcart-product-list-btn-wrapper"><div class="tvcart-product-list-viewcart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div><div class="tvcart-product-list-checkout"><a href="javascript:void(0);" class="tvcart-product-list-checkout-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div></div><?php } else { ?><div class="tvcart-no-product"><div class='tvcart-no-product-label'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No product add in cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div></div><?php }?></div><?php }?></div></div></div><?php }
}
