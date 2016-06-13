<?php /* Smarty version Smarty-3.1.18, created on 2014-10-26 12:21:25
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/user/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486906886544ce74502bb79-15376151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5799e96ec3ee3fe02fa98c670c3f158a521c5cd' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/user/edit.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1486906886544ce74502bb79-15376151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544ce745321c13_40114273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ce745321c13_40114273')) {function content_544ce745321c13_40114273($_smarty_tpl) {?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Edit user</h2>
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
					  <input class="input-xlarge " id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Role</label>
					<div class="controls">
					  <select id="" name="role" class="required">
						<option value="">Select</option>
                                 <?php echo $_smarty_tpl->tpl_vars['roles']->value;?>

					  </select>
					</div>
				  </div>
                           
				  <div class="control-group">
					<label class="control-label" for="">Email</label>
					<div class="controls">
					  <input class="input-xlarge " id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" name="email" type="email" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Position</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
" name="position" type="text">
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
