<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccaa0239_55261412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75e4fa20f5b99eb9ae23736a320035c65b07cf61' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/index.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccaa0239_55261412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106724712462928bcca9edd9_96254600', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_190907210262928bcca9f0d3_16875053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_178921645062928bcca9f7b8_36282600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_154066956162928bcca9f580_38591262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178921645062928bcca9f7b8_36282600', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_106724712462928bcca9edd9_96254600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_106724712462928bcca9edd9_96254600',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_190907210262928bcca9f0d3_16875053',
  ),
  'page_content' => 
  array (
    0 => 'Block_154066956162928bcca9f580_38591262',
  ),
  'hook_home' => 
  array (
    0 => 'Block_178921645062928bcca9f7b8_36282600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" class="page-home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190907210262928bcca9f0d3_16875053', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154066956162928bcca9f580_38591262', 'page_content', $this->tplIndex);
?>
</section><?php
}
}
/* {/block 'page_content_container'} */
}
