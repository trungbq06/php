<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Create New user</h2>
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
					<label class="control-label" for="">Full Name</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">Important</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="option1">
						This is a important person
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Email</label>
					<div class="controls">
					  <input class="input-xlarge required email" name="email" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Phone Number</label>
					<div class="controls">
					  <input class="input-xlarge required number" name="phone" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Position</label>
					<div class="controls">
					  <input class="input-xlarge " value="" name="position" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Yahoo</label>
					<div class="controls">
					  <input class="input-xlarge required" value="" name="yahoo" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Skype</label>
					<div class="controls">
					  <input class="input-xlarge " value="" name="skype" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order</label>
					<div class="controls">
					  <input class="input-large required" value="10" name="order_by" type="text">
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
