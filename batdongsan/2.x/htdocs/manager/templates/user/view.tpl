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
						<h2><i class="icon-edit"></i> user Detail</h2>
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
									<td>Full Name</td>
									<td>{$user.name}</td>
								</tr>
								<tr>
									<td>username</td>
									<td>{$user.username}</td>
								</tr>
								<tr>
									<td>Important</td>
									<td>{$user.future}</td>
								</tr>
								<tr>
									<td>Role</td>
									<td>{$user.role}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{$user.email}</td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td>{$user.phone}</td>
								</tr>
								<tr>
									<td>Yahoo</td>
									<td>{$user.yahoo}</td>
								</tr>
								<tr>
									<td>Skype</td>
									<td>{$user.skype}</td>
								</tr>
								<tr>
									<td>Position</td>
									<td>{$user.position}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>{$user.address}</td>
								</tr>
								<tr>
									<td>Created Date</td>
									<td>{$user.created}</td>
								</tr>
								<tr>
									<td>Updated Date</td>
									<td>{$user.updated}</td>
								</tr>
								<tr>
									<td>Active</td>
									<td>{$user.active}</td>
								</tr>
							  </tbody>
						  </table>            


						  <div class="form-actions">
							<a href="?mod=user&site=edit&id={$user.id}" class="btn btn-primary">Update this field</a>
							<a href="?mod=user&site=users" class="btn">Back to manager</a>
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