<?php /* Smarty version Smarty-3.1.18, created on 2016-06-10 14:33:03
         compiled from "/home/chungcu2/public_html/manager/templates/config/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1334926046575acf9f8a8711-39776445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc4d2b5bc2445e393d2acf9c81c271c95b1cdec' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/config/index.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1334926046575acf9f8a8711-39776445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acf9f931f65_53186294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acf9f931f65_53186294')) {function content_575acf9f931f65_53186294($_smarty_tpl) {?><div class="row-fluid sortable">
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
