<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Config seo web</h2>
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
					<label class="control-label" for="">Email gửi thư</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.mail_from}" name="mail_from" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Mật khẩu mail gửi</label>
					<div class="controls">
						<input class="input-xxlarge" value="{$value.mail_from_pass}" name="mail_from_pass" type="password" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Email nhận thư</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.mail_to}" name="mail_to" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình SMTP Secure</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.smtp_secure}" name="smtp_secure" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình Host</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.host}" name="host" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình Port</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.port}" name="port" type="text" required>
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
