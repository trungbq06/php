<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:32:20
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/adsense.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046726274544b0bb4065bc8-79566066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c46a33caafe877293a8b8cbf10a6be023a879af' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/adsense.tpl',
      1 => 1413538521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046726274544b0bb4065bc8-79566066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_album' => 0,
    'lang_name' => 0,
    'lang_position' => 0,
    'lang_order' => 0,
    'lang_future' => 0,
    'lang_status' => 0,
    'lang_action' => 0,
    'manager' => 0,
    'value' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0bb41bc174_26149422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0bb41bc174_26149422')) {function content_544b0bb41bc174_26149422($_smarty_tpl) {?><div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['lang_album']->value;?>
</h2>
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
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_position']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_future']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_status']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_action']->value;?>
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
					<td><a href="gallery/manager_adsense?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
					<td class=""><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
</td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
</td>
					<td class="center">
                                 <a href="#" table="gallery_category" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="View" href="?mod=album&site=view&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="gallery/album_edit?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
