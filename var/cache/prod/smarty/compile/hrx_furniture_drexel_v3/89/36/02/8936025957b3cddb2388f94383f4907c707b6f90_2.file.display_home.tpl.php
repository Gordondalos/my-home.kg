<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmsbrandlist/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd45c011_21459582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8936025957b3cddb2388f94383f4907c707b6f90' => 
    array (
      0 => '/var/www/html/modules/tvcmsbrandlist/views/templates/front/display_home.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_62928bcd45c011_21459582 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class="container-fluid tvcmsbrandlist-slider"><div class='container tvbrandlist-slider'><div class='tvcmsbrandlist-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class="tvbrandlist-slider-block"><div class='tvbrandlist-slider-inner tvbrandlist-slider-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvbrandlist-slider-wrapper-info wow zoomIn tvall-block-box-shadows"><div class="tvbrand-img-block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /></a></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class='tvcms-brandlist-pagination-wrapper'><div class="tvcms-brandlist-pagination"><div class="tvcms-brandlist-next-pre-btn"><div class="tvbrandlist-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe5cb;</i></div><div class="tvbrandlist-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe5cc;</i></div></div></div></div></div></div><?php }
}
}
