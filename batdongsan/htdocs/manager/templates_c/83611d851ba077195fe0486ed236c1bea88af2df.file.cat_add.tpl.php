<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 11:21:07
         compiled from "C:\xampp\htdocs\php\tuvanxaydung_code\manager\templates\article\cat_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4482561b7b83902c47-91838412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83611d851ba077195fe0486ed236c1bea88af2df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\tuvanxaydung_code\\manager\\templates\\article\\cat_add.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4482561b7b83902c47-91838412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_create' => 0,
    'lang_category' => 0,
    'lang_article' => 0,
    'lang_name' => 0,
    'lang_important' => 0,
    'lang_image' => 0,
    'lang_parent' => 0,
    'lang_select' => 0,
    'parent' => 0,
    'lang_position' => 0,
    'type' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561b7b83ae72b1_43468624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b7b83ae72b1_43468624')) {function content_561b7b83ae72b1_43468624($_smarty_tpl) {?>	<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_create']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
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
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" checked="checked">
						This is a important menu
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
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_parent']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="parent">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['parent']->value;?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_position']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="type">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

					  </select>
					</div>
				  </div>


				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-large " value="10" name="order_by" type="text">
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
<?php }} ?>
