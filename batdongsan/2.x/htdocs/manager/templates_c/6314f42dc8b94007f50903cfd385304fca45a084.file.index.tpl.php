<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:05:53
         compiled from "C:\xampp\htdocs\manager\templates\config\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9971574702c1ca1ba3-33366958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6314f42dc8b94007f50903cfd385304fca45a084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\config\\index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9971574702c1ca1ba3-33366958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574702c1cfcc18_08377047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574702c1cfcc18_08377047')) {function content_574702c1cfcc18_08377047($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Role Detail</h2>
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
						<td>Hotline</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
					</tr>
					<tr>
						<td>Title web</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['web_title'];?>
</td>
					</tr>
					<tr>
						<td>Keyword seo</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['web_keyword'];?>
</td>
					</tr>
					<tr>
						<td>Description seo</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['web_description'];?>
</td>
					</tr>
					<tr>
						<td>Description</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</td>
					</tr>
				  </tbody>
			  </table>            


			</fieldset>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php }} ?>
