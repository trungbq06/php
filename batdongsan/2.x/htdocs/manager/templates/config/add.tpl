<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{$title}</title>
	{include file="../libs/head.tpl"}		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
    	{include file="../libs/header.tpl"}
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
            {include file="../libs/sidebar.tpl"}
			
			<div id="content" class="span10">
			<!-- content starts -->
			
			{include file="../libs/menu.tpl"}

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Config contact</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" id="FrmCreateuser" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="">Company Name</label>
								<div class="controls">
								  <input class="input-xlarge" value="{$value.name}" id="name" name="name" type="text" required>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="">Address</label>
								<div class="controls">
								  <input class="input-xlarge" value="{$value.address}" id="address" name="address" type="text" required>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="">Email</label>
								<div class="controls">
								  <input class="input-xlarge" value="{$value.email}" id="email" name="email" type="text" required>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="">Hotline</label>
								<div class="controls">
								  <input class="input-xlarge" value="{$value.phone}" id="phone" name="phone" type="text" required>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="">Website</label>
								<div class="controls">
								  <input class="input-xlarge" value="{$value.website}" id="website" name="website" type="text" required>
								</div>
							  </div>


							  <div class="form-actions">
								<button type="submit" class="btn btn-primary" name="FrmSubmit">Save changes</button>
								<button type="reset" class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			</div><!--/#content.span10-->
        </div><!--/fluid-row-->
				
		{include file="../libs/footer.tpl"}

	</div><!--/.fluid-container-->

	{include file="../libs/js.tpl"}	
		
</body>
</html>