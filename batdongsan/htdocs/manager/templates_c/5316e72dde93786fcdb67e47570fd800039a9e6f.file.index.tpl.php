<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 15:17:29
         compiled from "/home/chungcu2/public_html/manager/templates/member/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277080337575ada096bcb39-98913838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5316e72dde93786fcdb67e47570fd800039a9e6f' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/member/index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277080337575ada096bcb39-98913838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'value' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575ada09758af2_68193741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575ada09758af2_68193741')) {function content_575ada09758af2_68193741($_smarty_tpl) {?><div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Contacts Manager</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form method="post" action="">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
				  	 <th class="center"><input type="checkbox" class="checkall"></th>
					  <th>Contact By</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>Gender</th>
					  <th>Birthday</th>
					  <th class="center">Created</th>
					  <th class="center">Status</th>
					  <th class="center" width="100px">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
                 <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['gender'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['birthday'];?>
</td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['created'];?>
</td>
					<td class="center">
                        <a href="#" table="member" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=member&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="confirmer"><i class="icon-trash"></i></a>
					</td>
				</tr>
                <?php } ?>
			  </tbody>
			  <tfoot>
			  	<tr>
			  		<th colspan="10">
					<div class="controls">
					  <select id="" name="handle">
						<option value="0">Select</option>
						<?php echo $_smarty_tpl->tpl_vars['list_handle']->value;?>

					  </select>
					  <input type="submit" class="btn btn-primary" name="frmSubmit" value="Save changes"/>
					</div>
			  		</th>
			  	</tr>
			  </tfoot>
			  
		  </table>   
		  </form>           
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php }} ?>
