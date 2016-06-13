<?php /* Smarty version Smarty-3.1.18, created on 2015-01-17 01:24:01
         compiled from "/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/gallery/add_QC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197859035054b9b9b131a426-16895360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e10a82a0e8c713fe69178ab8b9b0e93f92538f96' => 
    array (
      0 => '/home/daisanco/domains/vietnam.daisan.com.vn/public_html/manager/templates/gallery/add_QC.tpl',
      1 => 1413530069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197859035054b9b9b131a426-16895360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_form_create' => 0,
    'lang_album' => 0,
    'lang_select' => 0,
    'category' => 0,
    'lang_important' => 0,
    'lang_description' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b9b9b1389e22_18533295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b9b9b1389e22_18533295')) {function content_54b9b9b1389e22_18533295($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_form_create']->value;?>
 QC Google Adsense</h2>
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
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important item
					  </label>
					</div>
				  </div>
     
                       
                  <div class="control-group">
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea id="cleditor" rows="3" name="description"></textarea>
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
<script> CKEDITOR.replace('cleditor'); </script>	<?php }} ?>
