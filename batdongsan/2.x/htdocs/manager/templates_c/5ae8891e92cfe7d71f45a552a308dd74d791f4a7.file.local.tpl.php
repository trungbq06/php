<?php /* Smarty version Smarty-3.1.18, created on 2015-01-14 06:19:28
         compiled from "/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/other/local.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15518266354b60a7043a0c7-26042947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae8891e92cfe7d71f45a552a308dd74d791f4a7' => 
    array (
      0 => '/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/other/local.tpl',
      1 => 1413452896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15518266354b60a7043a0c7-26042947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'value' => 0,
    'lang_select' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b60a704f9c88_16686074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b60a704f9c88_16686074')) {function content_54b60a704f9c88_16686074($_smarty_tpl) {?><div class="row-fluid sortable">		
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
                      <th>Site</th>
					  <th class="center">Map</th>
					  <th class="center">Child</th>
					  <th class="center">future</th>
					  <th class="center">Order</th>
					  <th class="center">Status</th>
					  <th class="center">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td><a href="?mod=other&site=local&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
</a></td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['map_ip'];?>
</td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['number'];?>
</td>
					<td class="center"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
"></i></td>
					<td class="center"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" class="input-xmini update_order" link="?mod=helps&site=update_order&table=tbl_local&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td class="center">
                        <a href="#" table="tbl_local" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="Edit" href="other/edit?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="javascript:void(0)" link="?mod=helps&site=delete&table=tbl_local&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
