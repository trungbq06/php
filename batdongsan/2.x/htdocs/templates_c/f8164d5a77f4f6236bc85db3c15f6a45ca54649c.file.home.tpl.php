<?php /* Smarty version Smarty-3.1.18, created on 2015-11-10 01:31:11
         compiled from "templates/layouts/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288669986564148df1cbc40-70056842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8164d5a77f4f6236bc85db3c15f6a45ca54649c' => 
    array (
      0 => 'templates/layouts/home.tpl',
      1 => 1445927320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288669986564148df1cbc40-70056842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_news' => 0,
    'list' => 0,
    'article' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564148df2d58a7_22740765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564148df2d58a7_22740765')) {function content_564148df2d58a7_22740765($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<?php echo $_smarty_tpl->getSubTemplate ('../elements/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</head>
<body>
<div id="page" class="full-content">
	<section class="header-desktop">
        <div class="row col-default">
    	    <?php echo $_smarty_tpl->getSubTemplate ('../elements/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	</div>
        <div class="row col-default">
            <?php echo $_smarty_tpl->getSubTemplate ('../elements/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </section>
    <?php echo $_smarty_tpl->getSubTemplate ('../elements/header-mobile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="row cate-mbile col-default">
        <div class="container">
           <div class="col-md-3 col-sm-4 col-xs-12 col-default sidebar">
                <?php echo $_smarty_tpl->getSubTemplate ('../elements/category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ('../elements/sidebar-content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 col-default content">
                <?php echo $_smarty_tpl->getSubTemplate ('../elements/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 
                <div class="sidebar">
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                     <div class="news-mobile box mobile">
                        <h3 style="padding-top: 0px; line-height:34px;"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 <i class="glyphicon glyphicon-plus pull-right" style="margin-top: 7px;"></i></h3>
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                            <li>
                                <p class="tit"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></p>
                                <div class="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
"></a>
                                    <span><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</span>
                                </div>
                            </li>
                         <?php } ?>
                         </ul>
                      </div>
                      <?php } ?>
                </div>
      -->          

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('../elements/sidebar-mobi-cont.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('../elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html><?php }} ?>
