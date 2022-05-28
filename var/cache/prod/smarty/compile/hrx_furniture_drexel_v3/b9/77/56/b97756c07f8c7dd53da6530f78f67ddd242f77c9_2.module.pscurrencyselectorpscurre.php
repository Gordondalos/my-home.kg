<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce25847_09211906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce25847_09211906 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcms-header-currency" id="tvcmsdesktop-currency-selector"><div class="tvheader-currency-wrapper"><span class="tv-currency-lable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><button class="btn-unstyle tv-currency-btn"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 51.8 51.8" style="enable-background:new 0 0 51.8 51.8;" xml:space="preserve"><g><path style="fill:#222222;" d="M25.9,51.8c-6.9,0-13.4-2.7-18.3-7.6C2.7,39.3,0,32.8,0,25.9S2.7,12.5,7.6,7.6C12.5,2.7,19,0,25.9,0s13.4,2.7,18.3,7.6c4.9,4.9,7.6,11.4,7.6,18.3s-2.7,13.4-7.6,18.3C39.3,49.1,32.8,51.8,25.9,51.8L25.9,51.8z M25.9,3.2C13.4,3.2,3.2,13.4,3.2,25.9s10.2,22.7,22.7,22.7s22.7-10.2,22.7-22.7S38.4,3.2,25.9,3.2L25.9,3.2z M25.9,3.2"></path><path style="fill:#222222;" d="M25.9,24.3c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6c0-3.5-2.4-6.4-5.7-7.1v-1.8c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6v1.8c-3.2,0.7-5.7,3.6-5.7,7.1c0,4,3.3,7.3,7.3,7.3c2.2,0,4,1.8,4,4c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6c0,3.5,2.4,6.4,5.7,7.1v1.8c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6v-1.8c3.2-0.7,5.7-3.6,5.7-7.1C33.2,27.6,29.9,24.3,25.9,24.3L25.9,24.3z M25.9,24.3"></path></g></svg><span class="tv-currency-span"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span><i class="material-icons expand-more">&#xe313;</i></button><ul class="tv-currency-dropdown tv-dropdown"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?><li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>> <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }
}
