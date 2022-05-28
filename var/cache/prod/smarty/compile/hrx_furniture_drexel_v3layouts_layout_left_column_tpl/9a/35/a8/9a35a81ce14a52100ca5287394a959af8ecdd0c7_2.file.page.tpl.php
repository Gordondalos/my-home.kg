<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccaa38a8_70086609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a35a81ce14a52100ca5287394a959af8ecdd0c7' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/page.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccaa38a8_70086609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194654200462928bccaa1c48_24605818', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_159422591162928bccaa1ea7_10548726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_211176037062928bccaa24c6_89818877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_24125404862928bccaa2811_93170601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_68109739762928bccaa22a1_06689131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block wow fadeInUp"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211176037062928bccaa24c6_89818877', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24125404862928bccaa2811_93170601', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_135436158162928bccaa2ff9_74440661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_211689175062928bccaa2dd8_04020017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135436158162928bccaa2ff9_74440661', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_194654200462928bccaa1c48_24605818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194654200462928bccaa1c48_24605818',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_159422591162928bccaa1ea7_10548726',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_68109739762928bccaa22a1_06689131',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_211176037062928bccaa24c6_89818877',
  ),
  'page_content' => 
  array (
    0 => 'Block_24125404862928bccaa2811_93170601',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_211689175062928bccaa2dd8_04020017',
  ),
  'page_footer' => 
  array (
    0 => 'Block_135436158162928bccaa2ff9_74440661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159422591162928bccaa1ea7_10548726', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68109739762928bccaa22a1_06689131', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211689175062928bccaa2dd8_04020017', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
