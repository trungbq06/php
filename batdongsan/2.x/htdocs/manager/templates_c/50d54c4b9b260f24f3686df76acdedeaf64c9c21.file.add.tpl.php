<?php /* Smarty version Smarty-3.1.18, created on 2014-12-06 00:57:27
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/user/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104662771554825477197ef6-64191093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d54c4b9b260f24f3686df76acdedeaf64c9c21' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/user/add.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104662771554825477197ef6-64191093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548254771e0151_91288595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548254771e0151_91288595')) {function content_548254771e0151_91288595($_smarty_tpl) {?><div class="row-fluid sortable">
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
                            <?php echo $_smarty_tpl->tpl_vars['roles']->value;?>

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
<?php }} ?>
