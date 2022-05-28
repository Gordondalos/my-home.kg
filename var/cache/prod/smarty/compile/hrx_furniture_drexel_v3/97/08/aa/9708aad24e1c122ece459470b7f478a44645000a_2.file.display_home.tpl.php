<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmscategoryslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca64692_95145819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9708aad24e1c122ece459470b7f478a44645000a' => 
    array (
      0 => '/var/www/html/modules/tvcmscategoryslider/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_62928bcca64692_95145819 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='tvcmscategory-slider container-fluid wow fadeInUp'><div class='tvcategory-slider container'><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcategory-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><?php }?><div class="tvcategory-slider-inner-info-box"><div class='tvcategory-slider-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvcategory-slider-wrapper-info"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" class="tvcategory-slider-title"><div class="tvcategory-img-block"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
"  width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" /></div><div class='tvcategory-slider-info-box'><span class="tvcategory-slider-info-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span><span class="tvcategory-slider-all-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Now','mod'=>'tvcmscategoryslider'),$_smarty_tpl ) );?>
</span></div></a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class='tvcategory-slider-pagination-wrapper tv-pagination-wrapper'><div class="tvcategory-slider-pagination"><div class="tvcategory-slider-next-pre-btn tvcms-next-pre-btn"><div class="tvcategory-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe314;</i></div><div class="tvcategory-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe315;</i></div></div></div></div></div></div></div><?php }
}
}
