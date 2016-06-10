<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:51:24
         compiled from "C:\xampp\htdocs\manager\templates\gallery\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31175746ff5c772645-09902834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49caa8c815b439263246a36afc11061e06cb378b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\gallery\\edit.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31175746ff5c772645-09902834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'lang_type' => 0,
    'type' => 0,
    'lang_album' => 0,
    'lang_select' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746ff5c835025_16123858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746ff5c835025_16123858')) {function content_5746ff5c835025_16123858($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Edit Gallery</h2>
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
					<label class="control-label" for="">Name</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">Important</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['future']=='1') {?>checked<?php }?>>
						This is a important item
					  </label>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">Image Upload</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_type']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="type" class="required">
                      <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_album']->value;?>
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
                      <label class="control-label" for="textarea2">Description</label>
                      <div class="controls">
                        <textarea id="cleditor" rows="3" name="description"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="">Order By</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" id="name" name="order_by" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Link</label>
					<div class="controls">
					  <input class="input-xlarge" id="link" name="link" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
" >
					</div>
				  </div>

				  <div class="form-actions">
					<button type="submit" class="btn btn-primary" name="FrmSubmit">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<script> CKEDITOR.replace('cleditor'); </script>	
<?php }} ?>
