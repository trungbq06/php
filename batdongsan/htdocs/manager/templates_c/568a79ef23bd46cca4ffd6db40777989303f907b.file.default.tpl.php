<?php /* Smarty version Smarty-3.1.18, created on 2015-04-16 07:22:08
         compiled from "templates\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8682552f6320f12237-17678649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568a79ef23bd46cca4ffd6db40777989303f907b' => 
    array (
      0 => 'templates\\layouts\\default.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8682552f6320f12237-17678649',
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
  'unifunc' => 'content_552f632110c521_54184321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f632110c521_54184321')) {function content_552f632110c521_54184321($_smarty_tpl) {?><!DOCTYPE html>
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
