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
			<form class="form-horizontal" action="" id="NewUser" method="post">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="">Full Name</label>
					<div class="controls">
					  <input class="input-xlarge" minlength="4" maxlength="50" id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Email</label>
					<div class="controls">
					  <input class="input-xlarge " id="email" name="email" type="email" required>
					</div>
				  </div>


				  <div class="control-group">
					<label class="control-label" for="selectError3">Province</label>
					<div class="controls">
					  <select id="" name="province_id" class="required">
						<option value="">Select</option>
                            {$select.province}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Gender</label>
					<div class="controls">
					  <select id="" name="gender" class="required">
						<option value="">Select</option>
                            {$select.gender}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Job</label>
					<div class="controls">
					  <select id="" name="job_id" class="required">
						<option value="">Select</option>
                            {$select.province}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Type mail</label>
					<div class="controls">
					  <select id="" name="type" class="required">
						<option value="">Select</option>
                            {$select.type}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Year Birth</label>
					<div class="controls">
					  <input class="input required" minlength="4" maxlength="4" name="year_birth" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Phone Number</label>
					<div class="controls">
					  <input class="input-xlarge" name="phone" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Address</label>
					<div class="controls">
					  <input class="input-xlarge " id="address" name="address" type="text">
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
