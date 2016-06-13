
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> {$lang_image} {$lang_product}</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" enctype="multipart/form-data" id="FrmCreateuser" method="post">
				<fieldset>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">{$lang_image}</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileUpload" name="image" type="file">
                      </div>
                  </div>

				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->


<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> {$lang_image}</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form method="post" action="" enctype="multipart/form-data">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
				  	  <th class="center"><input type="checkbox" class="checkall"></th>
					  <th class="center">{$lang_image}</th>
					  <th class="center" width="100">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
               	{foreach from=$result key=k item=list}
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value=""></td>
					<td class="center"><img alt="{$list}" src="{$list}" width="100"></td>
					<td class="center">
						<a title="Delete" href="javascript:void(0)"  data="{$list}" class="delete_upload"><i class="icon-trash"></i></a>
					</td>
				</tr>
                {/foreach}
			  </tbody>
			  <tfoot>
			  	<tr>
			  		<th colspan="10">
					<div class="controls">
					  <select id="" name="handle">
						<option value="0">Select</option>
						{$list_handle}
					  </select>
					  <input type="submit" class="btn btn-primary" name="frmSubmit" value="Save changes"/>
					</div>
			  		</th>
			  	</tr>
			  </tfoot>
		  </table>
		  </form>            
		</div>
	</div><!--/span-->

</div><!--/row-->

