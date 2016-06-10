<?php /* Smarty version Smarty-3.1.18, created on 2014-12-06 01:42:40
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/product/images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163788214154825f10cefe22-08765735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1eb8f0e40418a4dad0994ab719db2243e0d8967' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/product/images.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163788214154825f10cefe22-08765735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_image' => 0,
    'lang_product' => 0,
    'result' => 0,
    'list' => 0,
    'list_handle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54825f10d6cbb6_72268247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54825f10d6cbb6_72268247')) {function content_54825f10d6cbb6_72268247($_smarty_tpl) {?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_product']->value;?>
</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" enctype="multipart/form-data" id="FrmCreateuser" method="post">
				<fieldset>

                  <div class="control-group">
                      <label class="control-label" for="fileInput"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileUpload" name="image" type="file">
                      </div>
                  </div>

				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->


<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form method="post" action="" enctype="multipart/form-data">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
				  	  <th class="center"><input type="checkbox" class="checkall"></th>
					  <th class="center"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</th>
					  <th class="center" width="100">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
               	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value=""></td>
					<td class="center"><img alt="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" width="100"></td>
					<td class="center">
						<a title="Delete" href="javascript:void(0)"  data="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" class="delete_upload"><i class="icon-trash"></i></a>
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
