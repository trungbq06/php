<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:50:13
         compiled from "templates/layouts/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363080074564d2d784cafd0-80002927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04e2466f7e77ac2036f50055801933315520e83' => 
    array (
      0 => 'templates/layouts/account.tpl',
      1 => 1447908219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363080074564d2d784cafd0-80002927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d2d78540627_99581463',
  'variables' => 
  array (
    'bar' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d2d78540627_99581463')) {function content_564d2d78540627_99581463($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
            <div class="category box">
            <ul>
                <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
 
             </ul>
             </div>    
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
