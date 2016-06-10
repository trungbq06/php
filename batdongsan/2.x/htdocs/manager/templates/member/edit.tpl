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
			
			{include file="menu.tpl"}

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Edit Article Category</h2>
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
								<label class="control-label" for="">Title Contact</label>
								<div class="controls">
								  <input class="input-xxlarge" value="{$value.title}" name="title" type="text" required>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="optionsCheckbox2">Important</label>
								<div class="controls">
								  <label class="checkbox">
									<input type="checkbox" id="optionsCheckbox2" name="future" value="1" {if $value.future=='1'}checked{/if}>
									This is a important menu
								  </label>
								</div>
							  </div>

                              <div class="control-group">
                                  <label class="control-label" for="textarea2">Answer this contact</label>
                                  <div class="controls">
                                    <textarea class="cleditor" rows="3" name="answer">{$value.answer}</textarea>
                                  </div>
                              </div>

							  <div class="control-group">
								<label class="control-label" for="">Order By</label>
								<div class="controls">
								  <input class="input-xlarge " value="{$value.order_by}" name="order_by" type="text">
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