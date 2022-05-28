<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmsslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcca502f7_29560121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ef943ba815bf1d844238afdf06fd4ac932f765' => 
    array (
      0 => '/var/www/html/modules/tvcmsslider/views/templates/front/display_home.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcca502f7_29560121 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_assignInScope('col', '');
if (!empty($_smarty_tpl->tpl_vars['offer_banner']->value)) {
$_smarty_tpl->_assignInScope('col', 'col-md-10 col-lg-10');
}?><div class="tvcms-slider-offerbanner-wrapper container-fluid wow fadeInUp"><div class="tvcmsmain-slider-wrapper" data-speed='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_slider_js']->value['speed'], ENT_QUOTES, 'UTF-8');?>
' data-pause-hover='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_slider_js']->value['pause'], ENT_QUOTES, 'UTF-8');?>
'><div class='tvcms-main-slider'><div class='tv-main-slider'><div id='tvmain-slider' class="owl-theme owl-carousel"><?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img class="tvmain-slider-img" src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["image_url"], ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Main Slider",'mod'=>"tvcmsslider"),$_smarty_tpl ) );?>
'  data-caption-id='tvmain-slider-img-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
' width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['height'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value != 1) {?>style="display:none" <?php }?>><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["class_name"], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) && $_prefixVariable1 != "tvmain-slider-contant-none") {?><div id='tvmain-slider-img-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
' class="nivo-html-caption caption tvmain-slider-content-inner <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>active<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['class_name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value != 1) {?> style="display:none" <?php }?>><div class='tvmain-slider-contant'><h2 class="tvmain-slider-title animated"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2><div class="tvmain-slider-info animated"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['btn_caption'])) {?><div class="tvmain-slider-btn"><div class="btn tvall-inner-btn tvmain-slider-button animated"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['btn_caption'], ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php }?></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?></a><?php }
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvmain-slider-next-pre-btn"><div class="tvcmsmain-prev tvcmsprev-btn"><i class='material-icons'>&#xe5cb;</i></div><div class="tvcmsmain-next tvcmsnext-btn"><i class='material-icons'>&#xe5cc;</i></div></div></div><?php $_smarty_tpl->_assignInScope('i', 1);?></div></div></div><?php }
}
