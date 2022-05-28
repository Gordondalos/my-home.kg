<?php
/* Smarty version 3.1.43, created on 2022-05-29 02:53:33
  from '/var/www/html/modules/tvcmsblogdisplayposts/views/templates/front/tvcmsblogdisplayposts_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62928bcd426939_59724610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d3121f99a9d8618d4c4c5d79ece7ee1e46d7ef2' => 
    array (
      0 => '/var/www/html/modules/tvcmsblogdisplayposts/views/templates/front/tvcmsblogdisplayposts_left.tpl',
      1 => 1653771103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 2,
    'module:tvcmsblogdisplayposts/views/templates/front/post-video.tpl' => 2,
    'module:tvcmsblogdisplayposts/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_62928bcd426939_59724610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['status_blog_all']->value)) && $_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['status_blog_all']->value == 1) {?><div class="tvcmsblog-event tvcmsblog-left-side wow fadeInUp"><div class="tvblog-event"><div class="home_blog_post_area product_block_container tvblog-full-width tvnews-event"><div class="tvnews-event-wrapper tvall-block-box-shadows"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, false);
?><div class="tvblog-event-all-block"><div class="tvblog-event-inner-block"><div class="tvnews-wrapper-info-box owl-carousel owl-theme"><?php $_smarty_tpl->_assignInScope('tmp', 1);
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'tvcmsblgpst');
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tvcmsblgpst']->value) {
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = false;
?><div class="item tvblog-event-all-content-block tvblog-part-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tmp']->value, ENT_QUOTES, 'UTF-8');?>
 tvblog-even"><article class="blog_pos clearfix"><div class="blog_post_content_top tvblog-img-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="post_thumbnail"><?php if ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'video') {
$_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['video']));
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"256",'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname']), 0, true);
} elseif ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'gallery') {
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['gallery_lists'],'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname'],'imagesize'=>'small','link'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link']), 0, true);
} else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="img_content"><div class="tvnews-event-hoverbtn"><div class="tvblog-content-img"><picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_img_small_res'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_img_small'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
"></picture></div><!-- <div class="tvnews-event-overly"></div> --><div class="tvnews-event-buttons"><i class='material-icons'>&#xe8b6;</i></div><div class="date_time tvdate-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_date'],'<p class="day_time tvday-time"><span>%d</span></p>
                                                            <p class="tvmonth-time"><span>%b</span></p>');?>
                                                        </div></div></a><?php }?></div></div><div class="post_content tvnews-event-content-wrapper col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="tv-event-content"><div class='tvblog-date-username'></div><div class="tvnews-event-titel"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="post_title"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</h3></a></div><p class="post_description tvnews-event-description"><?php if ((isset($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) && !empty($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_content'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?></p><div class='tvnews-event-read-more'><div class='tvnews-event-read-more-link'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe5cc;</i></a></div></div></div></div></article></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
</p><?php }?></div></div><div class="tvnews-event-link"><a href="<?php echo htmlspecialchars(TvcmsBlog::tvcmsBlogLink(), ENT_QUOTES, 'UTF-8');?>
" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All blogs','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe315;</i></a></div></div></div></div></div></div><?php } elseif ((isset($_smarty_tpl->tpl_vars['status_blog_all']->value)) && $_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['status_blog_all']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div class="tvcmsblog-event tvcmsblog-left-side"><div class="tvnews-event-wrapper tvall-block-box-shadows"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, true);
?><div class="tvblog-event-all-block"><div class="tvnews-wrapper-info-box owl-carousel owl-theme"><?php $_smarty_tpl->_assignInScope('tmp', 1);
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'tvcmsblgpst');
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tvcmsblgpst']->value) {
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = false;
?><article class="blog_pos clearfix tvblog-event-all-content-block"><div class="blog_post_content_top tvblog-img-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="post_thumbnail"><?php if ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'video') {
$_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['video']));
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"256",'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname']), 0, true);
} elseif ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'gallery') {
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['gallery_lists'],'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname'],'imagesize'=>'small','link'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link']), 0, true);
} else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="img_content"><div class="tvnews-event-hoverbtn"><div class="tvblog-content-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_img_small'], ENT_QUOTES, 'UTF-8');?>
" alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
'></div><!-- <div class="tvnews-event-overly"></div> --><div class="tvnews-event-buttons"><i class='material-icons'>&#xe8b6;</i></div><div class="date_time tvdate-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_date'],'<p class="day_time tvday-time"><span>%d</span></p><p class="tvmonth-time"><span>%b</span></p>');?>
                                                </div></div></a><?php }?></div></div><div class="post_content tvnews-event-content-wrapper col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="tv-event-content"><div class='tvblog-date-username'></div><div class="tvnews-event-titel"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="post_title"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</h3></a></div><p class="post_description tvnews-event-description"><?php if ((isset($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) && !empty($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_content'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?></p><div class='tvnews-event-read-more'><div class='tvnews-event-read-more-link'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe5cc;</i></a></div></div></div></div></article><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
</p><?php }?></div><div class="tvnews-event-link"><a href="<?php echo htmlspecialchars(TvcmsBlog::tvcmsBlogLink(), ENT_QUOTES, 'UTF-8');?>
" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All blogs','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe315;</i></a></div></div></div></div><?php }
}
}
