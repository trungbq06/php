<?php /* Smarty version Smarty-3.1.18, created on 2014-10-26 11:58:23
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/menu/cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611737632544ce1df3dcc46-02422760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6adbabb7ee80fac7fef46328e1507038ed1a692' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/menu/cat.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611737632544ce1df3dcc46-02422760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager' => 0,
    'value' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544ce1df52cc40_45275000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ce1df52cc40_45275000')) {function content_544ce1df52cc40_45275000($_smarty_tpl) {?><div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Category Menu Manager</h2>
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
					  <th>Name</th>
					  <th>Position</th>
					  <th class="center">Future</th>
					  <th class="center">Status</th>
					  <th class="center">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['manager']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td><a href="menu/manager?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['position'];?>
</td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
</td>
					<td class="center">
                                 <a href="#" table="menu_category" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="View" href=""><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="menu/cat_edit?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a>
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
