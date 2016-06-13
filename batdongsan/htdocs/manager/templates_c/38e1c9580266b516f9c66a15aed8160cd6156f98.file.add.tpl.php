<?php /* Smarty version Smarty-3.1.18, created on 2014-10-27 03:34:54
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/page/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144230620544dbd5e018836-68248552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e1c9580266b516f9c66a15aed8160cd6156f98' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/page/add.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144230620544dbd5e018836-68248552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_form_create' => 0,
    'lang_name' => 0,
    'lang_select' => 0,
    'category' => 0,
    'lang_important' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544dbd5e26d901_03062586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544dbd5e26d901_03062586')) {function content_544dbd5e26d901_03062586($_smarty_tpl) {?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_form_create']->value;?>
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
					  <input class="input-xxlarge" name="name" type="text" required>
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
					  <input class="input-xxlarge " name="address" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Hotline</label>
					<div class="controls">
					  <input class="input-xxlarge " name="hotline" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip Map</label>
					<div class="controls">
					  <input class="input-xlarge " name="map" type="text" required>
					</div>
				  </div>


				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" checked>
						This is a important article
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-medium " value="10" name="order_by" type="text" >
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
