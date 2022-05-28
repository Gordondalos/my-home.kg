<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmscategoryproduct/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca7a729_27462571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0365e5e553a6e28d8ce2ec3b74e9a1b3ca6e0cbe' => 
    array (
      0 => '/var/www/html/modules/tvcmscategoryproduct/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_62928bcca7a729_27462571 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='container-fluid tvcmstabcategory-product-slider wow fadeInUp'><div class='container tvtabcategory-product-slider'><div class='tvcmstabcategory-product-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class='tvtabcategory-all-tab tvtabcategory-product-desktop-view'><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_product_title']) {?><div class='tvtabcategory-tab-title'><i class='material-icons'>&#xe5c3;</i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['product_title'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }?><div class="tvtabcategory-product-sub-title-block"><ul class="tvtabcategory-product-inner"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><li class="tvtabcategory-product-li"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><a class="tvtabcategory-tab-sub-title" title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["title"], ENT_QUOTES, 'UTF-8');?>
' data-category-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["id_category"], ENT_QUOTES, 'UTF-8');?>
' data-num-prod='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["num_of_prod"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><li class='tvtabcategory-show show-hide hide'><a class="tvtabcategory-tab-sub-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show Category','mod'=>'tvcmscategoryproduct'),$_smarty_tpl ) );?>
</a><i class='material-icons'>&#xe313;</i></li><li class='tvtabcategory-hide show-hide hide'><a class="tvtabcategory-tab-sub-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide Category','mod'=>'tvcmscategoryproduct'),$_smarty_tpl ) );?>
</a><i class='material-icons'>&#xe316;</i></li></ul></div></div><div class='tvtabcategory-tab-product'><div class='tvtabcategory-all-product'><div class='tvtabcategory-all-product-wrapper'></div></div></div></div></div><?php }
}
}
