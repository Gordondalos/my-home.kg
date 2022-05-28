<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce46393_52952131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce46393_52952131 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="_desktop_contact_link"><div id="contact-link"><div class="tv-contact-icon-main"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20.1px" height="20px" viewBox="0 0 50.1 50" style="enable-background:new 0 0 50.1 50;" xml:space="preserve"><g id="XMLID_1_"><path id="XMLID_25_" style="fill:#222222;" d="M0,11.3c0.2-0.6,0.2-1.3,0.5-1.8c0.6-1,1.2-1.9,2-2.8C4.2,4.9,6,3.1,7.8,1.3c1.7-1.7,4.7-1.7,6.4,0c2.5,2.5,5,5.1,7.4,7.6c1.4,1.5,2,3.1,1,5.2c-0.2,0.4-0.5,0.8-0.9,1.2c-1.1,1.1-2.2,2.3-3.4,3.4c-0.3,0.3-0.3,0.5-0.2,0.8c2.2,4.8,5.7,8.5,10.2,11.2c0.7,0.5,1.5,0.8,2.3,1.3c0.3,0.2,0.5,0.2,0.8-0.1c1.1-1.2,2.3-2.3,3.5-3.5c1.5-1.4,3.8-1.6,5.5-0.5c0.3,0.2,0.6,0.6,0.9,0.8c2.2,2.2,4.3,4.4,6.5,6.5c1,1,2,2,2.2,3.5c0,0.3,0,0.6,0,0.9c-0.2,1.5-1.1,2.5-2.2,3.5c-1.6,1.6-3.2,3.2-4.8,4.8c-0.4,0.3-0.8,0.6-1.2,0.9c-0.9,0.6-2,0.9-3.1,1.1c-0.3,0-0.6,0-1,0c-1-0.3-2.1-0.5-3-0.9c-8-3.3-15.1-7.8-21.1-14C7.5,28.5,2.6,21.1,0,12.4C0,12,0,11.7,0,11.3z M37.9,30.8c-0.1,0.2-0.2,0.3-0.4,0.5c-1.7,1.7-3.4,3.4-5.2,5.2c-0.2,0.3-0.4,0.3-0.8,0.2c-3.1-1.3-5.9-3-8.6-5c-4.5-3.4-7.5-7.8-9.5-13.1c-0.1-0.3-0.1-0.5,0.1-0.7c1.8-1.7,3.5-3.5,5.3-5.2c0.3-0.3,0.3-0.5,0-0.8c-2.5-2.5-4.9-5-7.4-7.6c-0.5-0.5-0.7-0.5-1.3,0C8.4,6.2,6.6,8.1,4.7,9.9c-0.8,0.8-1.1,1.7-0.7,2.8c3.3,8.6,8.3,16.1,15.1,22.3c5.3,4.7,11.3,8.2,17.8,10.8c1.3,0.5,2.5,0.3,3.5-0.7c1.8-1.8,3.6-3.6,5.5-5.5c0.1-0.1,0.2-0.3,0.3-0.4C43.5,36.5,40.7,33.7,37.9,30.8z" /></g></svg></div><div class="tv-contact-inner"><span class="tvcontact-lable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us','d'=>'Shop.Theme.Contact'),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>(('<a href="tel:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('"><span class="tv-call-main">'),'[/1]'=>'</span></a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></div></div></div><?php }
}
