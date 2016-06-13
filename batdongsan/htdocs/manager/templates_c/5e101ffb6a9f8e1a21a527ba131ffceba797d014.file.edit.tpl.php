<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 10:42:18
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/page/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15472946185620d48a83bc10-89316542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e101ffb6a9f8e1a21a527ba131ffceba797d014' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/page/edit.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15472946185620d48a83bc10-89316542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_edit' => 0,
    'lang_name' => 0,
    'detail' => 0,
    'lang_select' => 0,
    'category' => 0,
    'lang_important' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5620d48c78aa54_81340865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620d48c78aa54_81340865')) {function content_5620d48c78aa54_81340865($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_edit']->value;?>
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
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
</label>
					<div class="controls">
					  <input class="input-xxlarge " id="name" name="name" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Tỉnh thành</label>
					<div class="controls">
					  <select id="selectError3" name="local" class="required">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Địa chỉ</label>
					<div class="controls">
					  <input class="input-xxlarge " name="address" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['address'];?>
">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Hotline</label>
					<div class="controls">
					  <input class="input-xxlarge " name="hotline" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['hotline'];?>
">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip Map</label>
					<div class="controls">
					  <input class="input-xlarge " name="map" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['map'];?>
">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['future']=='1') {?>checked<?php }?>>
						This is a important article
					  </label>
					</div>
				  </div>


				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-medium " id="" name="order_by" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['order_by'];?>
" >
					</div>
				  </div>

				  <div class="form-actions">
					<input type="submit" class="btn btn-primary" name="frmSubmit" value="<?php echo $_smarty_tpl->tpl_vars['lang_save']->value;?>
"/>
					<input type="reset" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
"/>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<script> CKEDITOR.replace('ar_content'); </script>		
<script> CKEDITOR.replace('ar_content2'); </script>		
<?php }} ?>
