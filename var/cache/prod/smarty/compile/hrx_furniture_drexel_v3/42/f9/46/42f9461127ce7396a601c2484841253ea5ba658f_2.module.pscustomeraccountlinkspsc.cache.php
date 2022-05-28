<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd49e201_69764713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd49e201_69764713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208500147862928bcd49b942_20184963';
?>
<div id="block_myaccount_infos" class="col-xl-2 col-lg-2 col-md-12 wow fadeInUp"><div class="tvfooter-title-wrapper" data-target="#footer_sub_menu_myaccount" data-toggle="collapse"><span class="tvfooter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span><span class="float-xs-right tvfooter-toggle-icon-wrapper"><span class="navbar-toggler collapse-icons tvfooter-toggle-icon"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></div><ul id="footer_sub_menu_myaccount" class="collapse account-list footer_account_list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_account_urls']->value, 'my_account_url');
$_smarty_tpl->tpl_vars['my_account_url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->value) {
$_smarty_tpl->tpl_vars['my_account_url']->do_else = false;
?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>
</ul></div><?php }
}
