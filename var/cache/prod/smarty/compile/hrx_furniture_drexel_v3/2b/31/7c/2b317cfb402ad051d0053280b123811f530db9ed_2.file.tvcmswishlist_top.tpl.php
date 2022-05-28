<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmswishlist/views/templates/front/tvcmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce312b4_02721367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b317cfb402ad051d0053280b123811f530db9ed' => 
    array (
      0 => '/var/www/html/modules/tvcmswishlist/views/templates/front/tvcmswishlist_top.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce312b4_02721367 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>var wishlistProductsIds='';var baseDir ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content_dir']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var static_token='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var isLogged ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isLogged']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'tvcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'tvcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var mywishlist_url='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';<?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value)) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>var isLoggedWishlist=true;<?php } else { ?>var isLoggedWishlist=false;<?php }
echo '</script'; ?>
><div id="_desktop_wishtlistTop" class="pull-right tvcmsdesktop-view-wishlist"><a class="wishtlist_top tvdesktop-wishlist" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tvwishlist-icon"><i class='material-icons'>&#xe87d;</i></div><div class="tvwishlist-name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist ','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span><span>(</span><span class="cart-wishlist-number tvwishlist-number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['count_product']->value),'mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span><span>)</span></div></a></div><?php }
}
