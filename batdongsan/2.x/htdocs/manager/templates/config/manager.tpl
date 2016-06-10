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
						<h2><i class="icon-user"></i> Manager Configuration</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th><input type="checkbox"></th>
								  <th>Name</th>
								  <th>website</th>
								  <th class="center">Id</th>
								  <th class="center">Future</th>
								  <th class="center">Status</th>
								  <th class="center">Created</th>
							  </tr>
						  </thead>   
						  <tbody>
                          	{foreach from=$manager key=k item=value}
							<tr>
								<td><input type="checkbox"></td>
								<td>{$value.name}</td>
								<td>{$value.website}</td>
								<td class="center">{$value.id}</td>
								<td class="center">{$value.future}</td>
								<td class="center">
                                    <a href="#" table="company" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
								</td>
								<td class="center">{$value.created}</td>
							</tr>
                            {/foreach}
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

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
				
		{include file="../libs/footer.tpl"}

	</div><!--/.fluid-container-->

	{include file="../libs/js.tpl"}	
		
</body>
</html>