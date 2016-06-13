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
					  <input class="input-xlarge" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label">username</label>
					<div class="controls">
					  <input class="input-xlarge required" name="username" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Password</label>
					<div class="controls">
					  <input class="input-xlarge required" name="password" type="password" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label">Role</label>
					<div class="controls">
					  <select id="selectError3" name="role" class="required">
						<option value="">Select</option>
                            {$roles}
					  </select>
					</div>
				  </div>
                           
				  <div class="control-group">
					<label class="control-label" for="">Email</label>
					<div class="controls">
					  <input class="input-xlarge" id="email" name="email" type="email" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Position</label>
					<div class="controls">
					  <input class="input-xlarge" name="position" type="text">
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
