<?php /* Smarty version Smarty-3.1.18, created on 2015-10-17 01:51:25
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/roles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75753835621a99d1783f0-86806829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66eefc8f3f1e08dd5973a72a643710a7c024d320' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/roles/edit.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75753835621a99d1783f0-86806829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'role' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5621a99d232b96_87663200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5621a99d232b96_87663200')) {function content_5621a99d232b96_87663200($_smarty_tpl) {?><div class="row-fluid sortable">
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
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Alias</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['value']->value['alias'];?>
" name="alias" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Url source</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" name="url" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Role user</label>
					<div class="controls">
					  <select id="" name="role">
                                 <?php echo $_smarty_tpl->tpl_vars['role']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Parent</label>
					<div class="controls">
					  <select id="" name="parent">
						<option value="">Select</option>
                                 <?php echo $_smarty_tpl->tpl_vars['parent']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Icon</label>
					<div class="controls">
					  <input class="input-large" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
" name="icon" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order</label>
					<div class="controls">
					  <input class="input-large "  value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" name="order_by" type="text" >
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
