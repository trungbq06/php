<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:25:34
         compiled from "templates/layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:891717726544b0a1e8f1a93-27956399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4f95f8265fa124970a2edb12a16965aa3f297c' => 
    array (
      0 => 'templates/layouts/default.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891717726544b0a1e8f1a93-27956399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0a1e9dd987_43271337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0a1e9dd987_43271337')) {function content_544b0a1e9dd987_43271337($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<?php echo $_smarty_tpl->getSubTemplate ("../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
	<?php echo $_smarty_tpl->getSubTemplate ("../elements/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
    	<?php echo $_smarty_tpl->getSubTemplate ("../elements/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- topbar ends -->
    <div class="container-fluid">
		<div class="row-fluid">
				
            <?php echo $_smarty_tpl->getSubTemplate ("../elements/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<div id="content" class="span10"><!-- content starts -->
				<?php echo $_smarty_tpl->getSubTemplate ("../elements/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="FrmDelete">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Delete Field</h3>
            </div>
            <div class="modal-body">
                <p>Are you really want to delete this field ?</p>
            </div>
            <div class="modal-footer">
                <a class="btn" data-dismiss="modal">Cancel</a>
                <a class="confirmer-modal-confirm btn btn-primary">Accept</a>
            </div>
        </div>
				
		<?php echo $_smarty_tpl->getSubTemplate ("../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div><!--/.fluid-container-->

		
</body>
</html>
<?php }} ?>
