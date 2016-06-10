<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 14:48:58
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/product/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74313006156210e5a106b08-58949371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab35ca701ef51041313902daaa42941db43683a' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/product/add.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74313006156210e5a106b08-58949371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_create' => 0,
    'lang_product' => 0,
    'lang_name' => 0,
    'lang_code' => 0,
    'lang_price' => 0,
    'option' => 0,
    'lang_promotions' => 0,
    'lang_category' => 0,
    'lang_select' => 0,
    'lang_warranty' => 0,
    'lang_maker' => 0,
    'lang_important' => 0,
    'lang_image' => 0,
    'lang_description' => 0,
    'lang_content' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56210e5a3518d6_86578122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210e5a3518d6_86578122')) {function content_56210e5a3518d6_86578122($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_create']->value;?>
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
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_product']->value;?>
</label>
					<div class="controls">
					  <input class="input-xxlarge " id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_code']->value;?>
</label>
					<div class="controls">
					  <input class="input-large " name="code" type="text">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_price']->value;?>
</label>
					<div class="controls">
					  <input class="input-large number" minlength="4" name="price" type="text">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="selectError3">Kiểu giá</label>
					<div class="controls">
					  <select id="selectError3" name="type" class="required">
                        <?php echo $_smarty_tpl->tpl_vars['option']->value['type'];?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_promotions']->value;?>
</label>
					<div class="controls">
					  <input class="input-large number" minlength="4" value="" name="promotions" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
</label>
					<div class="controls">
					  <select id="" name="category" class="required">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['option']->value['category'];?>

					  </select>
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_warranty']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="warranty" class="">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['option']->value['warranty'];?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_maker']->value;?>
</label>
					<div class="controls">
						<input class="input-xlarge" name="maker" type="text" >
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important article
					  </label>
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
                      <label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea class="input-xxlarge" id="ar_content2" rows="4" name="description"></textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_content']->value;?>
</label>
                      <div class="controls textarea-big">
                        <textarea id="ar_content" rows="3" name="content"></textarea>
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
