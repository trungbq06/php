<?php /* Smarty version Smarty-3.1.18, created on 2015-01-16 01:26:10
         compiled from "/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/config/support_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31893558254b868b25f60d2-12216198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6076f436ccf8be46aa286cd5330c10b49bf71cb' => 
    array (
      0 => '/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/config/support_edit.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31893558254b868b25f60d2-12216198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b868b264b9f3_40027114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b868b264b9f3_40027114')) {function content_54b868b264b9f3_40027114($_smarty_tpl) {?>
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
					<label class="control-label" for="optionsCheckbox2">Important</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['future']==1) {?>checked<?php }?>>
						This is a important person
					  </label>
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
					<label class="control-label" for="">Phone Number</label>
					<div class="controls">
					  <input class="input-xlarge required" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" name="phone" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Position</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
" name="position" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Yahoo</label>
					<div class="controls">
					  <input class="input-xlarge required" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['yahoo'];?>
" name="yahoo" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Skype</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['user']->value['skype'];?>
" name="skype" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order</label>
					<div class="controls">
					  <input class="input required" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['order_by'];?>
" name="order_by" type="text">
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
