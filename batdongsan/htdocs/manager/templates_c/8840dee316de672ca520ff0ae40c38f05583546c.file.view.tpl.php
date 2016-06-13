<?php /* Smarty version Smarty-3.1.18, created on 2014-12-06 02:01:35
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/product/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20682645585482637f69a612-95253028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8840dee316de672ca520ff0ae40c38f05583546c' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/product/view.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20682645585482637f69a612-95253028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'images' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5482637f737307_00500593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5482637f737307_00500593')) {function content_5482637f737307_00500593($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Article Detail</h2>
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
						<td>Title Article</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					</tr>
					<tr>
						<td>Category</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['category'];?>
</td>
					</tr>
					<tr>
						<td>Price</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
					</tr>
					<tr>
						<td>Image</td>
						<td class="center">
                           <ul class="thumbnails gallery">
                           		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                               <li id="" class="thumbnail">
                                   <a style="background:url(<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
)" title="image" href="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
">
                                       <img class="grayscale" src="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
                                   </a>
                               </li>
                               <?php } ?>
                           </ul>
                       </td>
					</tr>
					<tr>
						<td>Important</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['future'];?>
</td>
					</tr>
					<tr>
						<td>Content</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</td>
					</tr>
					<tr>
						<td>Created Date</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['created'];?>
</td>
					</tr>
					<tr>
						<td>Order By</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
</td>
					</tr>
					<tr>
						<td>Active</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['active'];?>
</td>
					</tr>
				  </tbody>
			  </table>            


			</fieldset>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php }} ?>
