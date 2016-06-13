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
			<form class="form-horizontal" action="" id="FrmCreateuser" method="post" enctype="multipart/form-data">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="">Menu Name</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.name}" id="name" name="name" type="text" required>
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
					<label class="control-label" for="selectError3">Parent Category</label>
					<div class="controls">
					  <select id="selectError3" name="parent">
						<option value="">Select</option>
                                 {$parent}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Position</label>
					<div class="controls">
					  <select id="" name="position">
						<option value="">Select</option>
                        {$type}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Class</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.class}" name="class" type="text">
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">{$lang_image}</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Description</label>
                      <div class="controls">
                        <textarea class="" id="ar_content" rows="3" name="description">{$value.description}</textarea>
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
{literal}<script> CKEDITOR.replace('ar_content'); </script>{/literal}		

