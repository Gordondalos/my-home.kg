<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccaa70b9_45124064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13c45942d1300c765f61e9060c64a8a1e3ae554' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/layouts/layout-left-column.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccaa70b9_45124064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167777257862928bccaa5140_87131898', 'right_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108542190762928bccaa5550_45682972', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_167777257862928bccaa5140_87131898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_167777257862928bccaa5140_87131898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_199270100262928bccaa6396_70207511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_108542190762928bccaa5550_45682972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_108542190762928bccaa5550_45682972',
  ),
  'content' => 
  array (
    0 => 'Block_199270100262928bccaa6396_70207511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php } else { ?> col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199270100262928bccaa6396_70207511', 'content', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'content_wrapper'} */
}
