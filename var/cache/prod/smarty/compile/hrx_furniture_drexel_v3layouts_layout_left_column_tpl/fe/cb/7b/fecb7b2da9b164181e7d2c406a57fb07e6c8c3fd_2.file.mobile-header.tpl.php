<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/mobile-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcceb1395_32275547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fecb7b2da9b164181e7d2c406a57fb07e6c8c3fd' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/mobile-header.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcceb1395_32275547 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id='tvcms-mobile-view-header' class="hidden-lg-up"><div class="tvcmsmobile-top-wrapper"><div class='tvmobileheader-offer-wrapper col-sm-12'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopOfferText'),$_smarty_tpl ) );?>
</div></div><div class='tvcmsmobile-header-search-logo-wrapper'><div class="tvcmsmobile-header-logo-right-wrapper col-md-3 col-sm-12"><div id='tvcmsmobile-header-logo'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-logo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="34" width="200"></a></div><?php }?></div></div><div class="tvcmsmobile-header-search col-md-9 col-sm-12"><div id="tvcmsmobile-search"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavSearchBlock'),$_smarty_tpl ) );
}?></div></div></div><div class='tvcmsmobile-header-menu-offer-text'><div class="tvcmsmobile-header-menu col-sm-2 col-xs-2"><div class="tvcmsheader-verticalmenu"><div class="tvallcategories"><div class="tvallcategories-wrapper"><div class="tvcategory-title-wrapper"><div class="tvleft-right-title facet-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span></div><div class="tvleft-right-title-toggle"><i class='material-icons'>&#xe5d2;</i></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayVerticalMenu'),$_smarty_tpl ) );
}?></div><div id='tvmobile-megamenu'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );
}?></div></div><div class="col-sm-10 col-xs-10 tvcmsmobile-cart-acount-text"><div id="tvcmsmobile-account-button"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tvcms-header-myaccount"><div class="tv-header-account"><div class="tv-account-wrapper"><button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop"><i class='material-icons'>person</i><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><span class="tvcms_customer_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['gender']['name'][$_smarty_tpl->tpl_vars['customer']->value['gender']['id']], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }?></button><ul class="dropdown-menu tv-account-dropdown tv-dropdown"><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="tvmyccount"><i class="material-icons">person</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?><li class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCustomerSignInBlock'),$_smarty_tpl ) );?>
</li><li class="tvmobile-wishlist"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlock'),$_smarty_tpl ) );?>
</li><li class="tvmobile-compare"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavProductCompareBlock'),$_smarty_tpl ) );?>
</li><li class="tvmobile-lang hidden-lg-up"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavLanguageBlock'),$_smarty_tpl ) );?>
</li><li class="tvmobile-curr hidden-lg-up"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCurrencyBlock'),$_smarty_tpl ) );?>
</li></ul></div></div></div><?php }?></div><div class="tvcmsmobile-contact"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
 <?php }?></div><div id="tvmobile-cart"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavShoppingCartBlock'),$_smarty_tpl ) );
}?></div></div></div></div><?php }
}
