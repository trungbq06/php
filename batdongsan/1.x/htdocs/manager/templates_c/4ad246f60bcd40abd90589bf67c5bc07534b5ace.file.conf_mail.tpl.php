<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:45:31
         compiled from "C:\xampp\htdocs\manager\templates\config\conf_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292357470c0b6df9f5-45376388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad246f60bcd40abd90589bf67c5bc07534b5ace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\config\\conf_mail.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292357470c0b6df9f5-45376388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470c0b7b9ae5_15039588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470c0b7b9ae5_15039588')) {function content_57470c0b7b9ae5_15039588($_smarty_tpl) {?><div class="row-fluid sortable">
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
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['mail_from'];?>
" name="mail_from" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Mật khẩu mail gửi</label>
					<div class="controls">
						<input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['mail_from_pass'];?>
" name="mail_from_pass" type="password" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Email nhận thư</label>
					<div class="controls">
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['mail_to'];?>
" name="mail_to" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình SMTP Secure</label>
					<div class="controls">
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['smtp_secure'];?>
" name="smtp_secure" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình Host</label>
					<div class="controls">
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['host'];?>
" name="host" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Cấu hình Port</label>
					<div class="controls">
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['port'];?>
" name="port" type="text" required>
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
<?php }} ?>
