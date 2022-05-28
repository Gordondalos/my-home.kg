<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/desktop-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce14125_16123553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84083b3b494a167d31c5832bf976d9c68a9685a9' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/desktop-header.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce14125_16123553 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmsdesktop-top-header-wrapper "><div class='container-fluid tvcmsdesktop-top-header'><div class="container tvcmsdesktop-top-wrapper"><div class='tvheader-offer-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopOfferText'),$_smarty_tpl ) );?>
</div><div class='tvheader-language-currency-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'><div class="tvheader-language"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavLanguageBlock'),$_smarty_tpl ) );
}?></div><div class="tvheader-currency"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCurrencyBlock'),$_smarty_tpl ) );
}?></div><div id='tvcmsdesktop-account-button'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tvcms-header-myaccount"><div class="tv-header-account"><div class="tv-account-wrapper"><button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop"><i class='material-icons'>person</i><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><span class="tvcms_customer_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['gender']['name'][$_smarty_tpl->tpl_vars['customer']->value['gender']['id']], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span><i class="material-icons expand-more">&#xe313;</i><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class="material-icons ttvcms-account-iconexpand-more">&#xe313;</i><?php }?></button><ul class="dropdown-menu tv-account-dropdown tv-dropdown"><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="tvmyccount"><i class="material-icons">person</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?><li class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCustomerSignInBlock'),$_smarty_tpl ) );?>
</li><li class="ttvcms-wishlist-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlock'),$_smarty_tpl ) );?>
</li><li class="tvheader-compare"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavProductCompareBlock'),$_smarty_tpl ) );?>
</li><li class="tvmobile-lang hidden-lg-up"></li><li class="tvmobile-curr hidden-lg-up"></li></ul></div></div></div><?php }?></div></div></div></div><div class='container-fluid tvcmsdesktop-top-second hidden-md-down'><div class="container"><div class="tvcmsdesktop-top-header-box"><div class='col-md-2 col-xl-2 col-sm-12 tvcms-header-logo-wrapper'><div class="hidden-sm-down tvcms-header-logo" id="tvcmsdesktop-logo"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-logo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="34" width="200"></a></div><?php }?></div></div><div class="col-sm-12 col-lg-5 col-md-6 col-xl-6 tvcmsheader-search"><div class='tvcmssearch-wrapper' id="_desktop_search"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavSearchBlock'),$_smarty_tpl ) );
}?></div></div><div class="col-sm-12 col-lg-5 col-md-4 col-xl-4 tvcmsheader-nav-right"><div class="tvcmsdesktop-contact"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
 <?php }?></div><div class="tv-contact-account-cart-wrapper"><div id="_desktop_cart_manage" class="tvcms-header-cart"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavShoppingCartBlock'),$_smarty_tpl ) );
}?></div></div></div></div></div></div><div class="tvcms-header-menu-offer-wrapper"><div class="position-static tvcms-header-menu"><div class='tvcmsmain-menu-wrapper container'><div class="row"><div class="tvcmsheader-verticalmenu col-xl-2"><div class="tvallcategories"><div class="tvallcategories-wrapper"><div class="tvcategory-title-wrapper"><div class="tvleft-right-title facet-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'tvcmsverticalmenu'),$_smarty_tpl ) );?>
</span></div><div class="tvleft-right-title-toggle"><i class='material-icons'>&#xe5d2;</i></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayVerticalMenu'),$_smarty_tpl ) );
}?></div><div id='tvdesktop-megamenu' class="tvcmsheader-megamenu col-xl-10  tvcmsheader-sticky"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );
}?></div></div></div></div></div></div><?php }
}
