<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmscategorychainslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca918a3_94982053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17d206197ab92fc22afda8d710eae513e674671e' => 
    array (
      0 => '/var/www/html/modules/tvcmscategorychainslider/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_62928bcca918a3_94982053 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='tvcmscategory-chain-slider container-fluid bottom-to-top hb-animate-element wow fadeInUp'><div class='tvcategory-chain-slider container'><div class='tvcategory-chain-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class="tvcategory-chain-slider-inner-info-box"><div class='tvcategory-chain-slider-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvcategory-chain-slider-wrapper-info"><div class="tvcategory-chain-slider-wrapper clearfix"><div class="tvcategory-chain-slider-info-wrapper"><div class="tvcategory-chin-img-block col-xl-12 col-lg-12 col-md-12 col-xs-12"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" /><div class='tvcategory-chain-title'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div></div><div class="tvcategory-chain-content-wrapper col-xl-12 col-lg-12 col-md-12 col-xs-12"><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['child_category'])) {
$_smarty_tpl->_assignInScope('count', 1);
$_smarty_tpl->_assignInScope('open_div', 'true');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['child_category'], 'cat_info');
$_smarty_tpl->tpl_vars['cat_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_info']->value) {
$_smarty_tpl->tpl_vars['cat_info']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value <= 3) {?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat_info']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="tvcategory-chain-slider-category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
} else {
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><span class="tvcategory-chain-slider-all-link"><button class="tvall-inner-btn"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>add</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'tvcmscategorychainslider'),$_smarty_tpl ) );?>
</span></a></button></span><?php }?></div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class='tvcategory-chain-slider-pagination-wrapper tv-pagination-wrapper'><div class="tvcategory-chain-slider-pagination"><div class="tvcategory-chain-slider-next-pre-btn tvcms-next-pre-btn"><div class="tvcategory-chain-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe314;</i></div><div class="tvcategory-chain-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe315;</i></div></div></div></div></div></div></div><?php }
}
}
