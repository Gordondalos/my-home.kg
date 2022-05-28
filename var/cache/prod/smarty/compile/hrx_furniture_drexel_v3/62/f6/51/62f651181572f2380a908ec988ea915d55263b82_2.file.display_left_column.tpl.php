<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmscustomerservices/views/templates/front/display_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd3933a5_06241350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f651181572f2380a908ec988ea915d55263b82' => 
    array (
      0 => '/var/www/html/modules/tvcmscustomerservices/views/templates/front/display_left_column.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcd3933a5_06241350 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['getSTATUS']->value == 0) {?><div class="tvcmscustomer-services container-fluid wow fadeInUp"><div class="tvcustomer-services container"><div class="tvservice-inner"><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tvleft-right-title-wrapper"><div class="tvleft-right-title facet-label"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['getLefttitle']->value, ENT_QUOTES, 'UTF-8');?>
</div><div class="tvleft-right-title-toggle"><i class="material-icons"></i></div></div><div class='tvleft-customer-services-wrapper-info'><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['image'], ENT_QUOTES, 'UTF-8');?>
"></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['image'], ENT_QUOTES, 'UTF-8');?>
"></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['image'], ENT_QUOTES, 'UTF-8');?>
"></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['image'], ENT_QUOTES, 'UTF-8');?>
"></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }?></div></div></div></div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['getSTATUS']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div class="tvcmscustomer-services container-fluid"><div class="tvcustomer-services container"><div class="tvservice-inner"><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tvleft-right-title-wrapper"><div class="tvleft-right-title facet-label"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['getLefttitle']->value, ENT_QUOTES, 'UTF-8');?>
</div><div class="tvleft-right-title-toggle"><i class="material-icons"></i></div></div><div class='tvleft-customer-services-wrapper-info'><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'></div></div><div class='tvservices-content-box'><div class="tvservices-info"><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div></div><?php }?></div></div></div></div></div></div></div><?php }
}
}
