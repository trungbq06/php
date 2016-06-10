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
						<h2><i class="icon-edit"></i> Contact Detail</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<fieldset>
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <tbody>
								<tr>
									<td>Menu Name</td>
									<td>{$value.name}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{$value.email}</td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td>{$value.phone}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>{$value.address}</td>
								</tr>
								<tr>
									<td>Title Contact</td>
									<td>{$value.title}</td>
								</tr>
								<tr>
									<td>Content</td>
									<td>{$value.content}</td>
								</tr>
								<tr>
									<td>Important</td>
									<td>{$value.future}</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>{$value.description}</td>
								</tr>
								<tr>
									<td>Created Date</td>
									<td>{$value.created}</td>
								</tr>
								<tr>
									<td>Updated Date</td>
									<td>{$value.updated}</td>
								</tr>
								<tr>
									<td>Active</td>
									<td>{$value.active}</td>
								</tr>
							  </tbody>
						  </table>            


						  <div class="form-actions">
							<a href="#" class="btn btn-primary">Reply this contact</a>
							<a href="?mod=contact&site=manager" class="btn">Back to manager</a>
						  </div>
						</fieldset>
					
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