<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd455769_70183608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efcd0cd73a74ab56f64bf0c0cd15d60f8dce502b' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/footer.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd455769_70183608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShowMap'),$_smarty_tpl ) );?>
<div class="tvfooter-before"><div class="container-fluid"><div class="container"><div class="row"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78467817662928bcd452530_64347406', 'hook_footer_before');
?>
</div></div></div></div><div class="footer-container tvcmsfooter-background-image" <?php if ($_smarty_tpl->tpl_vars['FooterImageStatus']->value) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paths']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['FooterBackgroundImage']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?>><div class="container tvfooter-logo-link-wrapper"><div class="tvfooter-storelogo-weapper"><div class="tvfooter-storelogo-inner clearfix"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152386172162928bcd453245_66951407', 'hook_footer_part_2');
?>
</div></div><div class='tvfooter-storelogo-imformation row'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117273890562928bcd4538e9_64223586', 'hook_footer_part_1');
?>
</div> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13611792962928bcd453fb4_46074342', 'hook_footer');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomsocialblock'),$_smarty_tpl ) );?>
<div class='tvbottom-to-top'><a href="javascript:" class="tvbottom-to-top-icon"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go Top','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe316;</i></a></div></div><div class="tvfooter-copy-payment-icon-wrapper"><div class="container tvfooter-copy-payment-icon-content"><div class="row tvfooter-copy-payment-icon-inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyRightText'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomJs'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTvcmsFooter'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_78467817662928bcd452530_64347406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_78467817662928bcd452530_64347406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_part_2'} */
class Block_152386172162928bcd453245_66951407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_2' => 
  array (
    0 => 'Block_152386172162928bcd453245_66951407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart2'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_2'} */
/* {block 'hook_footer_part_1'} */
class Block_117273890562928bcd4538e9_64223586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_1' => 
  array (
    0 => 'Block_117273890562928bcd4538e9_64223586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart1'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_1'} */
/* {block 'hook_footer'} */
class Block_13611792962928bcd453fb4_46074342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_13611792962928bcd453fb4_46074342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
}
