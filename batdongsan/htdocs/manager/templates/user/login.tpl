<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{$title}</title>
	{include file="../libs/head.tpl"}		
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
						{$message}
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

	{include file="../libs/js.tpl"}	
		
</body>
</html>