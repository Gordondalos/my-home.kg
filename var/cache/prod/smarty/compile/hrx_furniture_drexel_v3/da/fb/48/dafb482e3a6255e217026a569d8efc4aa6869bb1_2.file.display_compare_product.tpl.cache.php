<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmsproductcompare/views/templates/front/display_compare_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bccdb8816_76148876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dafb482e3a6255e217026a569d8efc4aa6869bb1' => 
    array (
      0 => '/var/www/html/modules/tvcmsproductcompare/views/templates/front/display_compare_product.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bccdb8816_76148876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '156205839462928bccdb3c19_49367158';
?>
<div class="tvcompare-wrapper product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><div class="tvproduct-compare"><div class=" tvcmsproduct-compare-btn tvproduct-compare-icon" data-product-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
' data-comp-val='<?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>remove<?php } else { ?>add<?php }?>' data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><svg class='remove <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {
} else { ?>hide<?php }?>' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="15px" height="15px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M512 0q212 0 362 150t150 362t-150 362t-362 150t-362-150T0 512t150-362T512 0zm0 961q185 0 316.5-132T960 512T828.5 195.5T512 64T195.5 195.5T64 512t131.5 317T512 961zm-35-417H288q-14 0-23-9t-9-23t9-23t23-9h448q14 0 23 9t9 23t-9 23t-23 9H477z" fill="#222222" /><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg><svg class='add <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>hide<?php }?>' version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="174.229 353.886 115.2 124.8" style="enable-background:new 174.229 353.886 115.2 124.8;" xml:space="preserve"><g><path style="fill:#111111;" d="M289.43,378.126c-0.334,0.266-0.697,0.503-0.997,0.802c-7.299,7.288-14.591,14.582-21.885,21.874c-0.301,0.301-0.618,0.586-1.077,1.02c0-6.456,0-12.707,0-19.136c-0.475,0-0.856,0-1.236,0c-4.677,0-9.355,0.025-14.032-0.023c-0.853-0.009-1.253,0.305-1.65,1.011c-13.974,24.887-27.975,49.76-41.942,74.651c-0.497,0.886-1.023,1.191-2.039,1.186c-10.114-0.043-20.228-0.026-30.343-0.026c0-3.2,0-6.4,0-9.6c8.236,0,16.473-0.013,24.709,0.02c0.861,0.003,1.338-0.224,1.775-1.007c5.878-10.527,11.787-21.037,17.727-31.53c0.454-0.802,0.454-1.364,0-2.166c-5.94-10.492-11.849-21.002-17.727-31.53c-0.437-0.783-0.914-1.011-1.775-1.007c-8.236,0.033-16.473,0.02-24.709,0.02c0-3.2,0-6.4,0-9.6c10.153,0,20.305,0.013,30.458-0.022c0.918-0.003,1.407,0.259,1.861,1.074c5.805,10.429,11.651,20.834,17.49,31.244c0.165,0.294,0.363,0.569,0.609,0.95c0.257-0.422,0.449-0.716,0.62-1.021c5.816-10.377,11.638-20.75,17.428-31.142c0.439-0.787,0.892-1.118,1.841-1.111c6.515,0.052,13.03,0.027,19.546,0.027c0.423,0,0.847,0,1.347,0c0-6.503,0-12.852,0-19.2c0.08,0,0.16,0,0.24,0c0.181,0.249,0.333,0.527,0.548,0.742c7.485,7.495,14.975,14.985,22.47,22.47c0.215,0.215,0.493,0.367,0.742,0.548C289.43,377.806,289.43,377.966,289.43,378.126z"/><path style="fill:#111111;" d="M265.43,478.686c0-6.351,0-12.701,0-19.2c-0.508,0-0.932,0-1.357,0c-6.558,0-13.116-0.013-19.675,0.017c-0.774,0.004-1.198-0.207-1.59-0.911c-4.086-7.324-8.225-14.617-12.31-21.941c-0.226-0.405-0.31-1.117-0.107-1.497c1.655-3.096,3.395-6.148,5.183-9.344c1.824,3.237,3.587,6.362,5.347,9.49c2.565,4.558,5.117,9.124,7.711,13.667c0.22,0.385,0.704,0.876,1.071,0.88c5.191,0.057,10.383,0.039,15.715,0.039c0-6.362,0-12.645,0-19.18c0.508,0.477,0.824,0.758,1.123,1.057c7.297,7.294,14.591,14.591,21.892,21.88c0.3,0.3,0.664,0.537,0.998,0.803c0,0.16,0,0.32,0,0.48c-0.249,0.181-0.527,0.333-0.742,0.548c-7.495,7.485-14.985,14.975-22.47,22.47c-0.215,0.215-0.367,0.493-0.548,0.742C265.59,478.686,265.51,478.686,265.43,478.686z"/></g></svg></div></div></div><?php }
}
