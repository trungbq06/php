<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:12:05
         compiled from "templates\layouts\wapfix.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291257470435109466-20260303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8b64a543e7f927a7435c0b23fd29a86bcf5ff3' => 
    array (
      0 => 'templates\\layouts\\wapfix.tpl',
      1 => 1444894882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291257470435109466-20260303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470435174fb1_69590062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470435174fb1_69590062')) {function content_57470435174fb1_69590062($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
                

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('../elements/sidebar-mobi-cont.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('../elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html><?php }} ?>
