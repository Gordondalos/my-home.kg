<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:38
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/catalog/_partials/miniatures/product-grid-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bd215e803_90755790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312deef8522607c215a7dc97dbece3db537d24e6' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/catalog/_partials/miniatures/product-grid-view.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
  ),
),false)) {
function content_62928bd215e803_90755790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="tvproduct-wrapper <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139981538862928bd2131ac4_02870802', 'product_thumbnail');
?>
<div class="tvproduct-info-box-wrapper"><div class="product-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value,'productType'=>((string)$_smarty_tpl->tpl_vars['class_name']->value)),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26150250562928bd2151c23_44204025', 'product_name');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126960942262928bd2152e38_29939271', 'product_price_and_shipping');
?>
</div><div class="tv-product-price-info-box"><?php if (Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_COLOR') == '1') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45435608462928bd215b4a7_49288285', 'product_variants');
}?></div></div></div><?php }
/* {block 'product_flags'} */
class Block_204809897762928bd2140b05_79422107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="tvproduct-flags tvproduct-online-new-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'online-only' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul class="tvproduct-flags tvproduct-sale-pack-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'on-sale' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'pack') {?><li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_60693069162928bd2148a16_83654273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><div class="tvproduct-quick-icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="182 372 50 50" style="enable-background:new 182 372 50 50;" xml:space="preserve"><g><path style="fill:#222222;" d="M204.019,416.038c-12.141,0-22.019-9.877-22.019-22.019c0-12.141,9.878-22.019,22.019-22.019c12.142,0,22.019,9.878,22.019,22.019C226.038,406.161,216.161,416.038,204.019,416.038z M204.019,376.065c-9.9,0-17.954,8.054-17.954,17.954c0,9.9,8.054,17.954,17.954,17.954c9.9,0,17.954-8.054,17.954-17.954C221.973,384.119,213.919,376.065,204.019,376.065z" /><path style="fill:#222222;" d="M229.967,422c-0.52,0-1.04-0.198-1.437-0.596l-11.653-11.653c-0.794-0.793-0.794-2.081,0-2.874c0.794-0.794,2.08-0.794,2.874,0l11.653,11.653c0.794,0.793,0.794,2.081,0,2.874C231.007,421.802,230.487,422,229.967,422z" /></g></svg></div></a><?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_thumbnail'} */
class Block_139981538862928bd2131ac4_02870802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_139981538862928bd2131ac4_02870802',
  ),
  'product_flags' => 
  array (
    0 => 'Block_204809897762928bd2140b05_79422107',
  ),
  'quick_view' => 
  array (
    0 => 'Block_60693069162928bd2148a16_83654273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-image"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail" itemprop="url"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tvproduct-defult-img " height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"><?php if (Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][0]['cover'])) {?><img class="tvproduct-hover-img " src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"><?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][1]['cover'])) {?><img class="tvproduct-hover-img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"><?php }
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"></a><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204809897762928bd2140b05_79422107', 'product_flags', $this->tplIndex);
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?><div class='tvproduct-hover-btn'><div class=" tvproduct-quick-btn"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60693069162928bd2148a16_83654273', 'quick_view', $this->tplIndex);
?>
</div><div class="tvproduct-cart-btn"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="qty" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['is_customizable']) && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php }?><input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>tvproduct-out-of-stock disable<?php }?>" title="<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out Of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?> data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out Of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>"><?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?><svg class="out-of-stock hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="14px" height="14px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M512 0Q373 0 255 68.5T68.5 255T0 512t68.5 257T255 955.5t257 68.5t257-68.5T955.5 769t68.5-257t-68.5-257T769 68.5T512 0zM64 512q0-167 110-294l632 632Q679 961 512 961q-73 0-141.5-22.5T247 874t-96.5-97t-64-123.5T64 512zm787 293L219 173q61-52 136-80.5T512 64q73 0 141.5 22.5t123.5 64t96.5 96.5t64 123.5T960 512q0 166-109 293z" fill="#222222" /><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg><?php } else { ?><svg class="add-cart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 45.6 38.4" style="enable-background:new 0 0 45.6 38.4;" xml:space="preserve"><g id="XMLID_1_"><path id="XMLID_24_" style="fill:#222222;" d="M45.6,5.8c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.2-0.1,0.3c-0.8,2.8-1.5,5.6-2.3,8.4c-0.9,3.1-1.7,6.3-2.6,9.4c-0.5,1.7-1.8,2.7-3.6,2.8c-0.4,0-0.9,0-1.3,0c0.2,0.1,0.3,0.2,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.6-0.5-4.7-2.7-4.8-5.2c-0.1-2.9,1.5-5.3,4.2-6c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0c-5,0-10,0-15,0c0.1,0.1,0.3,0.1,0.5,0.2c2.2,0.7,3.9,2.7,4.1,4.9c0.2,2.4-1,4.7-3.1,5.7c-0.6,0.3-1.2,0.4-1.8,0.6c-0.5,0-1,0-1.5,0c-0.1,0-0.1-0.1-0.2-0.1c-2.5-0.5-4.4-2.4-4.7-5c-0.3-2.4,1-4.8,3.3-5.9c0.4-0.2,0.9-0.4,1.4-0.6c-0.4,0-0.7,0-1,0c-2.3,0-3.6-1.1-4.1-3.2C9.5,17.2,7.9,10.8,6.3,4.4C6.2,4,6.1,3.8,5.6,3.8c-1.2,0-2.5,0-3.7,0C1,3.8,0.3,3.2,0.1,2.4c-0.2-0.8,0.2-1.8,1-2.1C1.2,0.1,1.3,0.1,1.5,0C3.2,0,5,0,6.8,0c0,0,0.1,0.1,0.1,0.1c1.6,0.4,2.6,1.4,3,3c1.6,6.4,3.2,12.9,4.8,19.3c0.1,0.5,0.3,0.7,0.9,0.7c6.9,0,13.8,0,20.7,0c0.2,0,0.4,0,0.6,0c1.2-4.5,2.4-8.9,3.7-13.4c-8.7,0-17.5,0-26.2,0c-0.3-1.3-0.6-2.5-1-3.8C24.2,5.8,34.9,5.8,45.6,5.8z M19.2,32.6c0-1.1-0.8-1.9-1.9-1.9c-1.1,0-1.9,0.9-1.9,1.9c0,1,0.8,1.9,1.9,1.9C18.3,34.5,19.2,33.7,19.2,32.6z M34.5,30.7c-1.1,0-1.9,0.9-1.9,1.9c0,1.1,0.9,1.9,1.9,1.9c1,0,1.9-0.8,1.9-1.9C36.5,31.6,35.6,30.7,34.5,30.7z" /></g></svg><?php }?></button></form></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCompareProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWishlistBtnProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_26150250562928bd2151c23_44204025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_26150250562928bd2151c23_44204025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-name"><div class="product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><h6 itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6></a></div></div><?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_126960942262928bd2152e38_29939271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_126960942262928bd2152e38_29939271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tv-product-price tvproduct-name-price-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-price-and-shipping"><meta itemprop="sku" content="1234" /><meta itemprop="mpn" content="1234" /><meta itemprop="brand" content="fashion" /><span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?><span class="discount-amount discount-product tvproduct-discount-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }
}
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }?></div><?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_45435608462928bd215b4a7_49288285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_45435608462928bd215b4a7_49288285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?><div class="tvproduct-color"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['main_variants'], 'color_info');
$_smarty_tpl->tpl_vars['color_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color_info']->value) {
$_smarty_tpl->tpl_vars['color_info']->do_else = false;
?><div class='tvproduct-color-wrapper'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="tvproduct-color-box-border"><div class='tvporoduct-color-box' style='<?php if ($_smarty_tpl->tpl_vars['color_info']->value['html_color_code'] != '') {?>background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['texture'], ENT_QUOTES, 'UTF-8');?>
);<?php }?>'></div></div></a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
/* {/block 'product_variants'} */
}
