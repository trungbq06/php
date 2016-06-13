<?php /* Smarty version Smarty-3.1.18, created on 2015-10-21 10:56:11
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/contact/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193691756156276f4bb9bd34-91134726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '634efc413cc3066a36156a899512e2a14728f190' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/contact/view.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193691756156276f4bb9bd34-91134726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56276f4bc55c95_64889422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56276f4bc55c95_64889422')) {function content_56276f4bc55c95_64889422($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Contact Detail</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<fieldset>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <tbody>
					<tr>
						<td>Menu Name</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
					</tr>
					<tr>
						<td>Phone Number</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
</td>
					</tr>
					<tr>
						<td>Title Contact</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
					</tr>
					<tr>
						<td>Content</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</td>
					</tr>
					<tr>
						<td>Important</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
</td>
					</tr>
					<tr>
						<td>Created Date</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['created'];?>
</td>
					</tr>
					<tr>
						<td>Updated Date</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['updated'];?>
</td>
					</tr>
					<tr>
						<td>Active</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['active'];?>
</td>
					</tr>
				  </tbody>
			  </table>            


			  <div class="form-actions">
				<a href="#" class="btn btn-primary">Reply this contact</a>
				<a href="#" class="btn">Back to manager</a>
			  </div>
			</fieldset>
		
		</div>
	</div><!--/span-->

</div><!--/row-->

<?php }} ?>
