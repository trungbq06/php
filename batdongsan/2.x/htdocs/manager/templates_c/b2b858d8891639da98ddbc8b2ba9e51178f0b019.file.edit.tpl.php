<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 15:18:13
         compiled from "/home/chungcu2/public_html/manager/templates/user/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248563290575ada35aeda09-18908987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2b858d8891639da98ddbc8b2ba9e51178f0b019' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/user/edit.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248563290575ada35aeda09-18908987',
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
  'unifunc' => 'content_575ada35b69426_30629867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575ada35b69426_30629867')) {function content_575ada35b69426_30629867($_smarty_tpl) {?>
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
