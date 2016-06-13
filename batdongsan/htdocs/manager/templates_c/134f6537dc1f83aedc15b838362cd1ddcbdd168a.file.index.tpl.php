<?php /* Smarty version Smarty-3.1.18, created on 2015-07-16 15:46:38
         compiled from "E:\VertrigoServ\www\DAISAN\daisan\manager\templates\product\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225055a7d1de36ea40-21126639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134f6537dc1f83aedc15b838362cd1ddcbdd168a' => 
    array (
      0 => 'E:\\VertrigoServ\\www\\DAISAN\\daisan\\manager\\templates\\product\\index.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225055a7d1de36ea40-21126639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_id' => 0,
    'lang_image' => 0,
    'lang_name' => 0,
    'lang_category' => 0,
    'lang_price' => 0,
    'lang_future' => 0,
    'lang_order' => 0,
    'lang_status' => 0,
    'lang_action' => 0,
    'manager' => 0,
    'value' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a7d1de670538_33842602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7d1de670538_33842602')) {function content_55a7d1de670538_33842602($_smarty_tpl) {?><div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Danh sách sản phẩm</h2>
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
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
</th>
					  <th style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['lang_price']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_future']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_status']->value;?>
</th>
					  <th class="center" width="150"><?php echo $_smarty_tpl->tpl_vars['lang_action']->value;?>
</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
					<td class="center"><img alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" width="92px"></td>
					<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					<td><a href="product?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['category'];?>
</a></td>
					<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
					<td class="center"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
"></i></td>
					<td class="center"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" class="input-xmini update_order" link="?mod=helps&site=update_order&table=product&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td class="center">
                         <a href="#" table="product" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="View" href="?mod=product&site=view&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Images Manager" href="product/images?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-picture"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="product/edit?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=product&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
