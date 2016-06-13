<?php /* Smarty version Smarty-3.1.18, created on 2016-06-12 03:50:55
         compiled from "/home/chungcu2/public_html/manager/templates/article/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728216523575cdc1f461520-68486462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7394b487a7f0f9b87b7834c215a1f6ccbb2bba1' => 
    array (
      0 => '/home/chungcu2/public_html/manager/templates/article/edit.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728216523575cdc1f461520-68486462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_edit' => 0,
    'lang_article' => 0,
    'lang_title' => 0,
    'detail' => 0,
    'lang_category' => 0,
    'lang_select' => 0,
    'category' => 0,
    'lang_important' => 0,
    'lang_description' => 0,
    'lang_image' => 0,
    'lang_content' => 0,
    'lang_source' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575cdc1f518c64_93329181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575cdc1f518c64_93329181')) {function content_575cdc1f518c64_93329181($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_edit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
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
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
</label>
					<div class="controls">
					  <input class="input-xxlarge " id="name" name="name" type="text" required value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="category" class="required">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

					  </select>
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
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea class="input-xxlarge" id="ar_content2" rows="5" name="description"><?php echo $_smarty_tpl->tpl_vars['detail']->value['description'];?>
</textarea>
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
					<label class="control-label" for="optionsCheckbox2">Hiển thị ảnh</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="image_show" value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['image_show']=='1') {?>checked<?php }?>>
						Show this image in the article
					  </label>
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
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_content']->value;?>
</label>
                      <div class="controls">
                        <textarea id="ar_content" rows="3" name="content"><?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>
</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="">Class Web</label>
					<div class="controls">
					  <input class="input-xlarge " value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['class'];?>
" name="class" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_source']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge " id="" name="source" type="text" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['source'];?>
">
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
