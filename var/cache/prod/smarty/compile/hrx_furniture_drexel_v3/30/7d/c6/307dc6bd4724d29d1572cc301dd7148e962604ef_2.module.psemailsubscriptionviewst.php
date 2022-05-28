<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd4b76d5_57494053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd4b76d5_57494053 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcms-newsletter-wrapper col-xl-3 col-lg-3 col-md-12 wow fadeInUp"><div class="tvcms-newsletter-inner"><div class="block_newsletter tv-newsletter-wrapeer"><div class="tvnewsletter-block"><div class="tvnewsletter-lable-wrapper"><?php if (Configuration::get('TVCMSCUSTOMSETTING_NEWSLETTER_TITLE',$_smarty_tpl->tpl_vars['language']->value['id'])) {?><p id="block-newsletter-label" class="tvnewsletter-title"><?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_NEWSLETTER_TITLE',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
</p><?php }?></div><div class="tvnewsletter-input"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post"><div class="tvnewsleeter-input-button-wraper"><div class="input-wrapper"><input name="email" type="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" aria-labelledby="block-newsletter-label"></div><div class="tvnewsleteer-btn-wrapper"><button class='tvall-inner-btn' name="submitNewsletter" type="submit"><span class='tvnewslatter-btn-title hidden-lg-down'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><span class='tvnewslatter-btn-title hidden-xl-up'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></div></div><input type="hidden" name="action" value="0"><div class="tvnewsletter-description"><?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
if ($_smarty_tpl->tpl_vars['msg']->value) {?><span class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );
}?></div></form></div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayDownloadApps'),$_smarty_tpl ) );?>
</div><?php }
}
