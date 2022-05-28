<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccad9897_50835137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '013e70f7a758f186cc95a378a235eca57a0659aa' => 
    array (
      0 => '/var/www/html/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccad9897_50835137 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='tvcmscookies-notice'><div class='tvcookies-notice-img-wrapper'><div class="tvcookies-notice-img-inner"><div class="tvcookie-content-box"><div class='tvcookies-notice-title'><?php echo $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'];?>
</div></div><div class="tvcookie-btn-wrapper"><button class='close-cookie tvclose-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button><button class='close-cookie tvok-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ok','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button></div></div><div class="tvcookies-notice-icon"><button class='close-cookie tvclose-icon tvall-inner-btn'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</span></button></div></div></div><?php }
}
