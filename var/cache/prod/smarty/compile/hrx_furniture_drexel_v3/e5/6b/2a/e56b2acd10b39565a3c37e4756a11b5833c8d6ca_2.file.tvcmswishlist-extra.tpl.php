<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:38
  from '/var/www/html/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bd2189b35_49102350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56b2acd10b39565a3c37e4756a11b5833c8d6ca' => 
    array (
      0 => '/var/www/html/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bd2189b35_49102350 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvproduct-wishlist"><input type="hidden" class="wishlist_prod_id" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && !empty($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?><div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div id="wishlist_button"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
if ($_smarty_tpl->tpl_vars['wishlist']->value['default'] == '1') {?><a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
); return false;"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="-31.802 175.13 477.534 443.742" style="enable-background:new -31.802 175.13 477.534 443.742;" xml:space="preserve"><path style="fill:#222222;" d="M311.107,175.133L311.107,175.133c-36.291,0.042-70.938,15.14-95.676,41.694L207,225.736l-8.431-8.909c-49.087-52.831-131.709-55.865-184.539-6.778c-2.341,2.176-4.602,4.436-6.778,6.778c-52.072,56.166-52.072,142.968,0,199.134L194.61,613.542c6.482,6.843,17.284,7.136,24.127,0.654c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581c52.069-56.16,52.069-142.957,0-199.117C381.98,190.295,347.369,175.19,311.107,175.133z M381.967,392.46L207,577.002L32.015,392.46c-39.78-42.916-39.78-109.234,0-152.149c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0l20.804-21.931c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l0,0c40.126,42.984,40.42,109.422,0,152.132H381.967z" /></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else { ?><a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><div class="tvproduct-wishlist-wrapper-icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="-31.802 175.13 477.534 443.742" style="enable-background:new -31.802 175.13 477.534 443.742;" xml:space="preserve"><path style="fill:#222222;" d="M311.107,175.133L311.107,175.133c-36.291,0.042-70.938,15.14-95.676,41.694L207,225.736l-8.431-8.909c-49.087-52.831-131.709-55.865-184.539-6.778c-2.341,2.176-4.602,4.436-6.778,6.778c-52.072,56.166-52.072,142.968,0,199.134L194.61,613.542c6.482,6.843,17.284,7.136,24.127,0.654c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581c52.069-56.16,52.069-142.957,0-199.117C381.98,190.295,347.369,175.19,311.107,175.133z M381.967,392.46L207,577.002L32.015,392.46c-39.78-42.916-39.78-109.234,0-152.149c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l20.804,21.948c6.856,6.812,17.925,6.812,24.781,0l20.804-21.931c36.125-39.154,97.152-41.609,136.306-5.484c1.901,1.754,3.73,3.583,5.484,5.484l0,0c40.126,42.984,40.42,109.422,0,152.132H381.967z" /></svg></div><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></a><?php }?></div><?php }
}
