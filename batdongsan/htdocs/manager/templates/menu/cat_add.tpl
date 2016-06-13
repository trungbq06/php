<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Create New Category</h2>
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
					<label class="control-label" for="">Menu Name</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">Important</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important menu
					  </label>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Description</label>
                      <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name="description"></textarea>
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