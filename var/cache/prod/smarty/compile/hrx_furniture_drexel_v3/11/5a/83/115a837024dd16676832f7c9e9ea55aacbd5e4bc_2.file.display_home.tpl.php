<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:38
  from '/var/www/html/modules/tvcmsthemeoptions/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bd2072459_51221318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '115a837024dd16676832f7c9e9ea55aacbd5e4bc' => 
    array (
      0 => '/var/www/html/modules/tvcmsthemeoptions/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bd2072459_51221318 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmstheme-control"><div class="tvtheme-control"><div class="tvtheme-control-wrapper"><div class="tvthemecontrol-heading"><div class="tvtheme-control-title-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFrontSetting'),$_smarty_tpl ) );?>
</div><div class="tvtheme-control-title-name-reset-btn"><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Option','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p></div><div class="tvcms-custom-font-1"></div><div class="tvcms-custom-font-2"></div><div class="tvcms-custom-color"></div><div class="tvcms-custom-theme"></div></div><table><tr class="tvselect-theme tvall-theme-content"><td><div class="tvselect-theme-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><select class="tvselect-theme-select" id="select_theme"><option value="" data-color="" data-color-two=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 1','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><option value="theme2" data-color="#47779e" data-color-two="#ededed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 2','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><option value="theme3" data-color="#317773" data-color-two="#ededed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 3','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><option value="theme4" data-color="#CA7840" data-color-two="#ededed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 4','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><option value="theme_custom" data-color=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option></select></td></tr><tr class="tvtheme-color-one tvall-theme-content"><td><div class="tvcolor-theme-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custome Color 1','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
</div><div class="tvtheme-color-box"><input type="text" id="themecolor1" class="tvtheme-color-box-1" data-control="saturation"></div></td></tr><tr class="tvtheme-box-layout tvall-theme-content"><td><div class="tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box-Layout','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="box tvtheme-option"><input type="checkbox" id="box-layout-toggle" class='tvtheme-box-layout-option' /><label for="box-layout-toggle" class="tvtheme-option"></label></div></td></tr><tr class="tvtheme-background-patten tvall-theme-content"><td><div class="tvtheme-background-pattern-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background Pattern','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-all-pattern-wrapper"><?php $_smarty_tpl->_assignInScope('i', 1);
while ($_smarty_tpl->tpl_vars['i']->value <= 36) {?> <div class="tvtheme-all-pattern"><div id="pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvtheme-pattern-image tvtheme-pattern-image<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
pattern/pattern_sprite.png')" data-background-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
pattern/pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
.png"></div></div><?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}?>
</div><p class="notice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custome background also available in admin.','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
</p></td></tr><tr class="tvtheme-background-color tvall-theme-content"><td><div class="tvbgcolor-theme-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background color','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-bgcolor-box"><input type="text" id="themebgcolor2" data-control="saturation" class="tvtheme-bgcolor-box-2"></div></td></tr><tr class="tvtheme-background-layout tvall-theme-content"><td><div class="tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Body Background','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="box tvtheme-option"><input type="checkbox" id="body-background-toggle" class='tvtheme-body-background-option' /><label for="body-background-toggle" class="tvtheme-body-background"></label></div></td></tr><tr class="tvtheme-body-bgcolor tvall-theme-content"><td><div class="tvbody-bgcolor-theme-name tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Body Background Color','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-color-box"><input type="text" id="themebodybgcolor" class="tvtheme-bgcolor" data-control="saturation"></div></td></tr><tr class="tvtheme-body-background-patten tvall-theme-content"><td><div class="tvtheme-body-background-pattern-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Body Background Pattern','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-all-body-pattern-wrapper"><?php $_smarty_tpl->_assignInScope('i', 1);
while ($_smarty_tpl->tpl_vars['i']->value <= 36) {?> <div class="tvtheme-all-body-pattern"><div id="bodypattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvtheme-body-pattern-image tvtheme-body-pattern-image<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
pattern/pattern_sprite.png')" data-background-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
pattern/pattern<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
.png"></div></div><?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}?>
</div><p class="notice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custome background also available in admin.','mod'=>'tvcmsthemeoptions'),$_smarty_tpl ) );?>
</p></td></tr><!-- <tr class="tvtheme-box-layout tvall-theme-content"><td><div class="tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box-Layout','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="box tvtheme-option"><input type="checkbox" id="box-layout-toggle" class='tvtheme-box-layout-option' /><label for="box-layout-toggle" class="tvtheme-option"></label></div></td></tr> --><!-- <tr class="tvtheme-body-bgcolor tvall-theme-content"><td><div class="tvbody-bgcolor-theme-name tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Body Background Color','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-color-box"><input type="text" id="themebodybgcolor" class="tvtheme-bgcolor" data-control="saturation"></div></td></tr> --><tr class="tvselect-title-font-1 tvall-theme-content"><td><div class="tvselect-title-font-1-name tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title Font Family','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><select class="tvselect-title-font-1-select" id="select_title_font_1"><option value="" data-font-link=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Font Style','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title_font_list']->value, 'font');
$_smarty_tpl->tpl_vars['font']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->do_else = false;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-font-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr class="tvtheme-title-color tvall-theme-content"><td><div class="tvtheme-title-color tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title Color','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="tvtheme-color-box"><input type="text" id="themeCustomTitleColor" class="tvtheme-custom-title-color" data-control="saturation"></div></td></tr><tr class="tvselect-title-font-2 tvall-theme-content"><td><div class="tvselect-title-font-2-name tvtheme-layout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><select class="tvselect-title-font-2-select" id="select_title_font_2"><option value="" data-font-link=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Font Style','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title_font_list']->value, 'font');
$_smarty_tpl->tpl_vars['font']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->do_else = false;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-font-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr class="tvtheme-menu-sticky tvall-theme-content"><td><div class="tvtheme-menu-sticky-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Sticky','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div><div class="box tvtheme-option"><input type="checkbox" id="menu-sticky-toggle" class='tvtheme-menu-sticky-option' /><label for="menu-sticky-toggle" class="tvtheme-option"></label></div></td></tr></table><button class="tvtheme-control-reset tvall-inner-btn"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></button></div><div class="tvtheme-control-icon"><i class='material-icons'>&#xe429;</i></div></div></div><!--Start of Tawk.to Script--><?php echo '<script'; ?>
 type="text/javascript">
    /*var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5bb5c1e7b033e9743d02392d/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();*/
    <?php echo '</script'; ?>
><!--End of Tawk.to Script--><?php }
}
