<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmstwoofferbanner/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca714f9_75305818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a50d259364b63f57904f5321db249badd583b0c1' => 
    array (
      0 => '/var/www/html/modules/tvcmstwoofferbanner/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcca714f9_75305818 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmstwoofferbanners-one container-fluid"><div class="container"><div class="tvcmstwoofferbanner-wrapper"><div class="tvofferbanner-two-inner tvbanner1 col-md-6 col-xs-12 wow fadeInUp"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer Banner','mod'=>'tvcmstwoofferbanner'),$_smarty_tpl ) );?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_1'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_1'], ENT_QUOTES, 'UTF-8');?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
 tvtwoofferbanner-content tvtwoofferbanner-content-one"><?php echo $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></a></div><div class="tvofferbanner-two-inner tvbanner2 col-md-6 col-xs-12 wow fadeInUp"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_LINK_2'], ENT_QUOTES, 'UTF-8');?>
" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME_2'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer Banner','mod'=>'tvcmstwoofferbanner'),$_smarty_tpl ) );?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_2'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_2'], ENT_QUOTES, 'UTF-8');?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2'] != 'none') {?><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2'], ENT_QUOTES, 'UTF-8');?>
 tvtwoofferbanner-content tvtwoofferbanner-content-two"><?php echo $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></a></div></div></div></div><?php }
}
