<?php /* Smarty version Smarty-3.1.18, created on 2015-01-09 16:30:41
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/article/cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36580885554b002319629d6-48122013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f530d2fc4e9792432661e3a7c9ead2bf19d8f1a1' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/article/cat.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36580885554b002319629d6-48122013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_manage' => 0,
    'lang_category' => 0,
    'lang_article' => 0,
    'lang_name' => 0,
    'lang_image' => 0,
    'lang_position' => 0,
    'lang_order' => 0,
    'lang_future' => 0,
    'lang_status' => 0,
    'lang_action' => 0,
    'list' => 0,
    'value' => 0,
    'lang_select' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b00231a95b55_03145087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b00231a95b55_03145087')) {function content_54b00231a95b55_03145087($_smarty_tpl) {?><div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['lang_manage']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
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
					  <th><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
</th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
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
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td><a href="article?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
					<td class="center"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" ></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
					<td class="center"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" class="input-xmini update_order" link="?mod=helps&site=update_order&table=article_category&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
					<td class="center"><i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
"></i></td>
					<td class="center">
                        <a href="#" table="article_category" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label frm_active <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?>label-success<?php } else { ?>label-warning<?php }?>" title="Click to Active/Inactive  this filed"><?php echo $_smarty_tpl->tpl_vars['value']->value['active_view'];?>
</a>
					</td>
					<td class="center">
						<a title="Edit" href="article/cat_edit?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=article_category&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
