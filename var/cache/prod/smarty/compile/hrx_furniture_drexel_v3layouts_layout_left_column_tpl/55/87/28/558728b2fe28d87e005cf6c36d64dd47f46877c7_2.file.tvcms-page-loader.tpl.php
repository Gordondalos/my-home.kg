<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce05240_14682114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '558728b2fe28d87e005cf6c36d64dd47f46877c7' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/_partials/tvcms-page-loader.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce05240_14682114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (Configuration::get('TVCMSCUSTOMSETTING_PAGE_LOADER')) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166479972362928bcce04019_69748556', 'page_loading');
}
}
/* {block 'page_loading'} */
class Block_166479972362928bcce04019_69748556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loading' => 
  array (
    0 => 'Block_166479972362928bcce04019_69748556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvcms-loading-overlay"><div class="tvcms-loading-inner"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"  height="51" width="205"/><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/tv_loading.gif" alt="" height="101" width="114"/></div></div><?php
}
}
/* {/block 'page_loading'} */
}
