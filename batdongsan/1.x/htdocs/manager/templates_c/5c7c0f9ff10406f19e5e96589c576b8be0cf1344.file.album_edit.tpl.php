<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 02:33:18
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/album_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502193316544b0bee97d9d0-51067766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7c0f9ff10406f19e5e96589c576b8be0cf1344' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/gallery/album_edit.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502193316544b0bee97d9d0-51067766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_edit' => 0,
    'lang_album' => 0,
    'lang_name' => 0,
    'value' => 0,
    'lang_important' => 0,
    'lang_image' => 0,
    'lang_position' => 0,
    'lang_select' => 0,
    'type' => 0,
    'lang_description' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b0beea60616_04507431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b0beea60616_04507431')) {function content_544b0beea60616_04507431($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_edit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_album']->value;?>
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
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['future']=='1') {?>checked<?php }?>>
						This is a important item
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
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_position']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="position">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

					  </select>
					</div>
				  </div>
                           
                  <div class="control-group">
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-large" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" name="order_by" type="text">
					</div>
				  </div>

				  <div class="form-actions">
					<button type="submit" class="btn btn-primary" name="FrmSubmit"><?php echo $_smarty_tpl->tpl_vars['lang_save']->value;?>
</button>
					<button type="reset" class="btn"><?php echo $_smarty_tpl->tpl_vars['lang_cancel']->value;?>
</button>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php }} ?>
