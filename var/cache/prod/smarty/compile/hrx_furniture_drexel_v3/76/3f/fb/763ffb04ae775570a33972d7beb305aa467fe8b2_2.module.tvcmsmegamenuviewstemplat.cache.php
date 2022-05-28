<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from 'module:tvcmsmegamenuviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccea8759_32608769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763ffb04ae775570a33972d7beb305aa467fe8b2' => 
    array (
      0 => 'module:tvcmsmegamenuviewstemplat',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccea8759_32608769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155458480862928bccea1121_46294939';
?>
<div class="container_tv_megamenu"><div id="tv-menu-horizontal" class="tv-menu-horizontal clearfix"><?php $_smarty_tpl->_assignInScope('id_lang', Context::getContext()->language->id);?><div class="title-menu-mobile"><a href="Javascript:void(0);" title=""><i class='material-icons'>&#xe5d2;</i></a></div><ul class="menu-content"><li class="tvmega-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mega Menu','mod'=>'tvcmsmegamenu'),$_smarty_tpl ) );?>
<a href="Javascript:void(0);"><i class='material-icons'>&#xe14c;</i></a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, NULL, 'menus', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['menu']->value['type'])) && $_smarty_tpl->tpl_vars['menu']->value['type'] == 'CAT' && $_smarty_tpl->tpl_vars['menu']->value['dropdown'] == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu'],'quotes','UTF-8' ));
} else { ?><li class="level-1 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?> parent<?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 0 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><img class="img-icon" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" /><?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 1 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?><i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle'] != '') {?><span class="menu-subtitle" <?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'] != '') {?>style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['sub_title_stylesheet'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </span><?php }?></a><span class="icon-drop-mobile"></span></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }
}
