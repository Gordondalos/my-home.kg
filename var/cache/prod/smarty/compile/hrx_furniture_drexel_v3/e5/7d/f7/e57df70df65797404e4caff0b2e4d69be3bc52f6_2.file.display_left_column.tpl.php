<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmstestimonial/views/templates/front/display_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd286a96_15677831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e57df70df65797404e4caff0b2e4d69be3bc52f6' => 
    array (
      0 => '/var/www/html/modules/tvcmstestimonial/views/templates/front/display_left_column.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 2,
  ),
),false)) {
function content_62928bcd286a96_15677831 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['GetStatusService']->value == 0) {?><div class='tvcms-left-testimonial tvcms-all-testimonial wow fadeInUp'><div class='tvtestimonial'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, false);
?><div class="tvtestimonial-slider-button-wrapper"><div class="tvtestimonial-slider-inner"><div class='tvtestimonial-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvtestimonial-wrapper-info"><div class="tvtestimonial-inner-content-box"><div class="tvtestimonial-img-content-block"><div class="tvtestimonial-img-block"><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value["path"], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["image"], ENT_QUOTES, 'UTF-8');?>
' alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /></div><div class="tvtestimonial-title-des"><div class="tvtestimonial-title"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["link"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div><div class="tvtestimonial-designation"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['designation'], ENT_QUOTES, 'UTF-8');?>
</div></div></div><div class='tvtestimonial-info-box'><div class="tvtestimonial-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['GetStatusService']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div class='tvcms-left-testimonial tvcms-all-testimonial'><div class='tvtestimonial'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, true);
?><div class="tvtestimonial-slider-button-wrapper"><div class="tvtestimonial-slider-inner"><div class='tvtestimonial-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvtestimonial-wrapper-info"><div class="tvtestimonial-inner-content-box"><div class="tvtestimonial-img-content-block"><div class="tvtestimonial-img-block"><img class="lazy" src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value["path"], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["image"], ENT_QUOTES, 'UTF-8');?>
' alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /></div><div class="tvtestimonial-title-des"><div class="tvtestimonial-title"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["link"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div><div class="tvtestimonial-designation"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['designation'], ENT_QUOTES, 'UTF-8');?>
</div></div></div><div class='tvtestimonial-info-box'><div class="tvtestimonial-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div><?php }
}
}
