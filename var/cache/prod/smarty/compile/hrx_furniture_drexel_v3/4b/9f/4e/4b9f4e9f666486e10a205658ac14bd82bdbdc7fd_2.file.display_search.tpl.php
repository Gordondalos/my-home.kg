<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:32
  from '/var/www/html/modules/tvcmssearch/views/templates/front/display_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcce3caa7_74040088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b9f4e9f666486e10a205658ac14bd82bdbdc7fd' => 
    array (
      0 => '/var/www/html/modules/tvcmssearch/views/templates/front/display_search.tpl',
      1 => 1653771104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62928bcce3caa7_74040088 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="search-widget tvcmsheader-search" data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tvsearch-top-wrapper"><div class="tvheader-sarch-display"><div class="tvheader-search-display-icon"><div class="tvsearch-open"></div><div class="tvsearch-close"><i class='material-icons'>&#xe5cd;</i></div></div></div><div class="tvsearch-header-display-full"><div class="tvsearch-header-display-wrappper"><form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="controller" value="search" /><select class="tvcms-select-category"><option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?><option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="tvheader-top-search"><div class="tvheader-top-search-wrapper-info-box"><input type="text" name="s" class='tvcmssearch-words' placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
" autocomplete="off" /></div></div><div class="tvheader-top-search-wrapper"><button type="submit" class="tvheader-search-btn"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="182 372 50 50" style="enable-background:new 182 372 50 50;" xml:space="preserve"><g><path style="fill:#222222;" d="M204.019,416.038c-12.141,0-22.019-9.877-22.019-22.019c0-12.141,9.878-22.019,22.019-22.019c12.142,0,22.019,9.878,22.019,22.019C226.038,406.161,216.161,416.038,204.019,416.038z M204.019,376.065c-9.9,0-17.954,8.054-17.954,17.954c0,9.9,8.054,17.954,17.954,17.954c9.9,0,17.954-8.054,17.954-17.954C221.973,384.119,213.919,376.065,204.019,376.065z" /><path style="fill:#222222;" d="M229.967,422c-0.52,0-1.04-0.198-1.437-0.596l-11.653-11.653c-0.794-0.793-0.794-2.081,0-2.874c0.794-0.794,2.08-0.794,2.874,0l11.653,11.653c0.794,0.793,0.794,2.081,0,2.874C231.007,421.802,230.487,422,229.967,422z" /></g></svg></button></div></form><div class='tvsearch-result'></div></div></div></div></div><?php }
}
