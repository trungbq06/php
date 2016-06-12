<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 15:17:34
         compiled from "/home/chungcu2/public_html/manager/templates/roles/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1483540601575ada0eb7d5b2-68619685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9037c05cbd232e440e29f16406981b42c23cff91' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/roles/index.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483540601575ada0eb7d5b2-68619685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'value' => 0,
    'lang_select' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575ada0ec27b49_60572090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575ada0ec27b49_60572090')) {function content_575ada0ec27b49_60572090($_smarty_tpl) {?>			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Videos Manager</h2>
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
								  <th>Url</th>
								  <th>Alias</th>
								  <th class="center">Role User</th>
								  <th class="center">Order By</th>
								  <th class="center">Status</th>
								  <th class="center">Actions</th>
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
								<td><a href="roles?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['alias'];?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['role'];?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
</td>
								<td class="center">
                                    <a href="#" table="conf_role" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
								</td>
								<td class="center">
									<a title="Edit" href="?mod=roles&site=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
									<a title="Delete" href="#" link="?mod=helps&site=delete&table=conf_role&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
									<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
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
