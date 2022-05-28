<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from 'module:pssupplierlistviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd4406e0_93495792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:pssupplierlistviewstempla',
      1 => 1653771104,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'supplier_display_type\']->value).".tpl' => 2,
  ),
),false)) {
function content_62928bcd4406e0_93495792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '153645334162928bcd43b093_95845452';
if ($_smarty_tpl->tpl_vars['GetStatusSupplier']->value == 1) {?><div id="search_filters_suppliers" class='tvfilter-supplier-list-wrapper wow fadeInUp'><div class="facet"><div class="tvleft-right-title-wrapper"><?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?><a class="tvleft-right-title facet-label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?></a><?php }?><div class='tvleft-right-title-toggle'><i class='material-icons'>&#xe313;</i></div></div><div class="tvserach-filter-suppliers tvside-panel-dropdown"><?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {
$_smarty_tpl->_subTemplateRender("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0, true);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php }?></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['GetStatusSupplier']->value == 0&$_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div id="search_filters_suppliers" class='tvfilter-supplier-list-wrapper'><div class="facet"><div class="tvleft-right-title-wrapper"><?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?><a class="tvleft-right-title facet-label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?></a><?php }?><div class='tvleft-right-title-toggle'><i class='material-icons'>&#xe313;</i></div></div><div class="tvserach-filter-suppliers tvside-panel-dropdown"><?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {
$_smarty_tpl->_subTemplateRender("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0, true);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php }?></div></div></div><?php }
}
}
