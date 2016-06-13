<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Edit value</h2>
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
					<label class="control-label" for="">Name</label>
					<div class="controls">
					  <input class="input-xlarge " value="{$value.name}" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Alias</label>
					<div class="controls">
					  <input class="input-xlarge " value="{$value.alias}" name="alias" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Url source</label>
					<div class="controls">
					  <input class="input-xlarge " value="{$value.url}" name="url" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Role user</label>
					<div class="controls">
					  <select id="" name="role">
                                 {$role}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Parent</label>
					<div class="controls">
					  <select id="" name="parent">
						<option value="">Select</option>
                                 {$parent}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Icon</label>
					<div class="controls">
					  <input class="input-large" value="{$value.icon}" name="icon" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order</label>
					<div class="controls">
					  <input class="input-large "  value="{$value.order_by}" name="order_by" type="text" >
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
