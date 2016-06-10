<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:42:42
         compiled from "C:\xampp\htdocs\manager\templates\product\cat_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262205746fd5213be93-35484626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f70ec01e334b5c0d954ee1b785a9f86b33c3ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\product\\cat_add.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262205746fd5213be93-35484626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent' => 0,
    'type' => 0,
    'lang_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746fd521c8434_76443778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746fd521c8434_76443778')) {function content_5746fd521c8434_76443778($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Create New Category</h2>
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
					<label class="control-label" for="">Category Name</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">Important</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important item
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Parent Category</label>
					<div class="controls">
					  <select id="selectError3" name="parent">
						<option value="">Select</option>
                        <?php echo $_smarty_tpl->tpl_vars['parent']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Position</label>
					<div class="controls">
					  <select id="" name="type">
						<option value="">Select</option>
                        <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

					  </select>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Description</label>
                      <div class="controls">
                        <textarea class="" id="ar_content" rows="3" name="description"></textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order By</label>
					<div class="controls">
					  <input class="input-large " id="" name="order_by" value="10" type="text">
					</div>
				  </div>

				  <div class="form-actions">
					<input type="submit" class="btn btn-primary" name="frmSubmit" value="Save changes"/>
					<input type="reset" class="btn" value="Cancel"/>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<script> CKEDITOR.replace('ar_content'); </script>		
<?php }} ?>
