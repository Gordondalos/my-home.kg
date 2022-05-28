<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/themes/hrx_furniture_drexel_v3/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccabb0f0_67260175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e41f75a8259b01e45259ebf12f8709446ec7326' => 
    array (
      0 => '/var/www/html/themes/hrx_furniture_drexel_v3/templates/layouts/layout-both-columns.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/tvcms-javascript-files.tpl' => 1,
    'file:_partials/tvcms-page-loader.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_62928bccabb0f0_67260175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html><html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175305615962928bccaa8958_06449488', 'head');
$_smarty_tpl->_subTemplateRender("file:_partials/tvcms-javascript-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></head><body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
" <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?> style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?> data-mouse-hover-img='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_HOVER_IMG"), ENT_QUOTES, 'UTF-8');?>
' data-menu-sticky='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_MAIN_MENU_STICKY"), ENT_QUOTES, 'UTF-8');?>
'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191771827162928bccaabc74_39792180', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );?>
<main><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;'<?php }?>><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159786575362928bccaadea8_40429488', 'product_activation');
?>
<header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79875050962928bccaae515_32363658', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23381695062928bccaaece1_51573129', 'notifications');
?>
<div id="wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
<div class="container <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' || (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?> tv-left-layout<?php } else { ?>tv-full-layout <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>tvcms-full-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-both-columns']))) {?>tvcms-left-right-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?>tvcms-left-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']))) {?>tvcms-right-layout<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60168303062928bccab2080_83346676', 'breadcrumb');
}?><div class="row"><?php if (Context::getContext()->getDevice() == 1) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90271268862928bccab2e87_35114127', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115757388462928bccab48b5_34351442', "content_wrapper");
if (Context::getContext()->getDevice() > 1) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83518922162928bccab5e04_77796651', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139862969162928bccab7a43_50199759', "right_column");
?>
</div></div></div><footer id="footer"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewsLetterPopup"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18294581662928bccab9281_69344829', "footer");
?>
</footer></div></main><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151372445262928bccab99d6_93421039', 'javascript_bottom');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73821614062928bccaba397_56915663', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_175305615962928bccaa8958_06449488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_175305615962928bccaa8958_06449488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_191771827162928bccaabc74_39792180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_191771827162928bccaabc74_39792180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_159786575362928bccaadea8_40429488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_159786575362928bccaadea8_40429488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_79875050962928bccaae515_32363658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_79875050962928bccaae515_32363658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_23381695062928bccaaece1_51573129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_23381695062928bccaaece1_51573129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_60168303062928bccab2080_83346676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_60168303062928bccab2080_83346676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_90271268862928bccab2e87_35114127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_90271268862928bccab2e87_35114127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_107832571662928bccab4ed1_32555900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_115757388462928bccab48b5_34351442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_115757388462928bccab48b5_34351442',
  ),
  'content' => 
  array (
    0 => 'Block_107832571662928bccab4ed1_32555900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column right-column col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12"><div class="theiaStickySidebar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107832571662928bccab4ed1_32555900', "content", $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_83518922162928bccab5e04_77796651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_83518922162928bccab5e04_77796651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_139862969162928bccab7a43_50199759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_139862969162928bccab7a43_50199759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="right-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><div class='tvright-column-remove'><div class="tvright-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_18294581662928bccab9281_69344829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18294581662928bccab9281_69344829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_151372445262928bccab99d6_93421039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_151372445262928bccab99d6_93421039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_73821614062928bccaba397_56915663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_73821614062928bccaba397_56915663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
