<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 09:58:30
         compiled from "C:\xampp\htdocs\php\tuvanxaydung_code\manager\templates\article\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20625561b6826f07c70-65045830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c961901241c8989c44ba0df91ca543df9bf123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\tuvanxaydung_code\\manager\\templates\\article\\index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20625561b6826f07c70-65045830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_manage' => 0,
    'lang_article' => 0,
    'lang_id' => 0,
    'lang_image' => 0,
    'lang_title' => 0,
    'lang_category' => 0,
    'lang_future' => 0,
    'lang_order' => 0,
    'lang_created' => 0,
    'lang_status' => 0,
    'lang_action' => 0,
    'manager' => 0,
    'value' => 0,
    'lang_select' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561b68272e65a1_03616602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b68272e65a1_03616602')) {function content_561b68272e65a1_03616602($_smarty_tpl) {?>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['lang_manage']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
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
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
</th>
					  <th class="center" width="110"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_title']->value;?>
</th>
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_future']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_created']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_status']->value;?>
</th>
					  <th class="center" width="100"><?php echo $_smarty_tpl->tpl_vars['lang_action']->value;?>
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
					<td class="center"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" style="width: 92px; max-height: 80px; min-height: 60px;"></td>
					<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['short_name'];?>
</td>
					<td><a href="article?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['category'];?>
</a></td>
					<td class="center"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
"></i></td>
					<td class="center"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" class="input-xmini update_order" link="?mod=helps&site=update_order&table=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['created'];?>
</td>
					<td class="center">
                        <a href="#" table="article" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="View" href="?mod=article&site=view&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="?mod=article&site=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
