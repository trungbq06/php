<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:33:56
         compiled from "templates/layouts/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1614619609544b0c14ed19c0-73801375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7f4190b973b90f4bc6c924b98cc692cda32e27' => 
    array (
      0 => 'templates/layouts/login.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1614619609544b0c14ed19c0-73801375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0c15067051_87361120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0c15067051_87361120')) {function content_544b0c15067051_87361120($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<?php echo $_smarty_tpl->getSubTemplate ("../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
</head>

<body>
		<!-- topbar starts -->
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
 			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Administrator</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

					</div>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary" name="FrmSubmit">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div>
		</div>		

	</div><!--/.fluid-container-->

	<?php echo $_smarty_tpl->getSubTemplate ("../elements/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
		
</body>
</html><?php }} ?>
