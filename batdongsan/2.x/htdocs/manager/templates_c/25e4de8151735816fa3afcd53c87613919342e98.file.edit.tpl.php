<?php /* Smarty version Smarty-3.1.18, created on 2015-10-14 14:54:39
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/product/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96517472561e6caf71fb74-75475505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e4de8151735816fa3afcd53c87613919342e98' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/manager/templates/product/edit.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96517472561e6caf71fb74-75475505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_edit' => 0,
    'lang_product' => 0,
    'lang_name' => 0,
    'detail' => 0,
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
  'unifunc' => 'content_561e6caf99c519_39494309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e6caf99c519_39494309')) {function content_561e6caf99c519_39494309($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_edit']->value;?>
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
					  <input class="input-xlarge " id="name" name="name" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_code']->value;?>
</label>
					<div class="controls">
					  <input class="input-large " name="code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['code'];?>
">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_price']->value;?>
</label>
					<div class="controls">
					  <input class="input-large number" name="price" minlength="4" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['price'];?>
">
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
					  <input class="input-large number required" minlength="4" name="promotions" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['promotions'];?>
" type="text" >
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="category" class="required">
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
						<input class="input-xlarge" name="maker" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['maker'];?>
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
                      <label class="control-label" for="fileInput"><?php echo $_smarty_tpl->tpl_vars['lang_image']->value;?>
</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">&nbsp</label>
                      <div class="controls">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['img'];?>
" style="min-width: 200px; max-width: 300px; border: 1px solid #999; padding: 2px;"/>
                      </div>
                      
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea rows="5" id="ar_content2" class="input-xxlarge" name="description"><?php echo $_smarty_tpl->tpl_vars['detail']->value['description'];?>
</textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_content']->value;?>
</label>
                      <div class="controls">
                        <textarea id="ar_content" rows="3" name="content"><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</textarea>
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
