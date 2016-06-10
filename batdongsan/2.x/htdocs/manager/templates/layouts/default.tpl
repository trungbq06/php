<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{$title}</title>
	{include file="../elements/head.tpl"}	
	{include file="../elements/js.tpl"}		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
    	{include file="../elements/header.tpl"}
	</div>
	<!-- topbar ends -->
    <div class="container-fluid">
		<div class="row-fluid">
				
            {include file="../elements/sidebar.tpl"}
			
			<div id="content" class="span10"><!-- content starts -->
				{include file="../elements/menu.tpl"}
				
				{include file=$content}
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
				
		{include file="../elements/footer.tpl"}

	</div><!--/.fluid-container-->

		
</body>
</html>
