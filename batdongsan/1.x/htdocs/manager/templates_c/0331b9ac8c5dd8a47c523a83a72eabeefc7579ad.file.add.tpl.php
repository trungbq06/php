<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:21:25
         compiled from "C:\xampp\htdocs\manager\templates\menu\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1940057470665c29c65-27857443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0331b9ac8c5dd8a47c523a83a72eabeefc7579ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manager\\templates\\menu\\add.tpl',
      1 => 1407158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940057470665c29c65-27857443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_create' => 0,
    'lang_menu' => 0,
    'lang_name' => 0,
    'lang_alias' => 0,
    'lang_important' => 0,
    'lang_module' => 0,
    'lang_select' => 0,
    'type' => 0,
    'lang_category' => 0,
    'lang_article' => 0,
    'select' => 0,
    'lang_product' => 0,
    'lang_link' => 0,
    'lang_parent' => 0,
    'parent' => 0,
    'lang_position' => 0,
    'menu_cat' => 0,
    'lang_image' => 0,
    'lang_description' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470665d3b738_03277947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470665d3b738_03277947')) {function content_57470665d3b738_03277947($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['lang_create']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_menu']->value;?>
</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" id="FrmCreateuser" method="post" enctype="multipart/form-data">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_menu']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" onchange="get_alias()" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_alias']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge" value="" id="alias" name="alias" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important menu
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_module']->value;?>
</label>
					<div class="controls">
					  <select id="module" name="module" class="required">
					  	<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

					  </select>
					</div>
				  </div>
				  
				  <div id="module_1">
				 	 <!-- Chon kieu menu tin tuc -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
</label>
						<div class="controls">
						  <select id="" name="1">
							<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                  <?php echo $_smarty_tpl->tpl_vars['select']->value['article_cate'];?>

						  </select>
						</div>
					  </div>
				 	 <!--  -->
				  </div>

				  <div id="module_2">
					  <!-- Chon kieu menu tin tuc -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
</label>
						<div class="controls">
						  <select id="article_cate" name="article_cate">
							<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                  <?php echo $_smarty_tpl->tpl_vars['select']->value['article_cate'];?>

						  </select>
						</div>
					  </div>
					  
						  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_article']->value;?>
</label>
						<div class="controls">
						  <select id="article" name="2" class="required">
							<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                  <?php echo $_smarty_tpl->tpl_vars['select']->value['article'];?>

						  </select>
						</div>
					  </div>
					  <!--  -->
				  </div>

					<div id="module_3">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_category']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_product']->value;?>
</label>
						<div class="controls">
						  <select id="" name="3">
							<option value="">Select</option>
                                  <?php echo $_smarty_tpl->tpl_vars['select']->value['product_cate'];?>

						  </select>
						</div>
					  </div>
				  </div>
				  
				  <div id="module_4">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
</label>
						<div class="controls">
							<input class="input-xlarge required" name="link" type="text" >
						</div>
					  </div>
				  </div>
				  
				  <div id="module_5">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
</label>
						<div class="controls">
							<input class="input-xlarge required" name="link" type="text" >
						</div>
					  </div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Class <?php echo $_smarty_tpl->tpl_vars['lang_menu']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge" id="link" name="web_class" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_parent']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="parent_id">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['parent']->value;?>

					  </select>
					</div>
				  </div>
                           
				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_position']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang_menu']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="category_id" class="required">
						<option value=""><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>
</option>
                                 <?php echo $_smarty_tpl->tpl_vars['menu_cat']->value;?>

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
                      <label class="control-label" for="textarea2"><?php echo $_smarty_tpl->tpl_vars['lang_description']->value;?>
</label>
                      <div class="controls">
                        <textarea class="input-xlarge" rows="3" name="description"></textarea>
                      </div>
                  </div>

                           
				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-large" value="10" id="name" name="order_by" type="text" >
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
