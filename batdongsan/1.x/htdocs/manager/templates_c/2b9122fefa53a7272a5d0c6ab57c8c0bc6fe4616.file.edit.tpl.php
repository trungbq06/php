<?php /* Smarty version Smarty-3.1.18, created on 2014-12-17 05:29:29
         compiled from "/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/menu/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823364203549114b9efa712-09431744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b9122fefa53a7272a5d0c6ab57c8c0bc6fe4616' => 
    array (
      0 => '/home/daisanco/domains/daisan.com.vn/public_html/manager/templates/menu/edit.tpl',
      1 => 1407158389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823364203549114b9efa712-09431744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_name' => 0,
    'lang_menu' => 0,
    'value' => 0,
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
    'lang_image' => 0,
    'lang_description' => 0,
    'lang_order' => 0,
    'lang_save' => 0,
    'lang_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549114ba0cb979_33855186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549114ba0cb979_33855186')) {function content_549114ba0cb979_33855186($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Edit menu</h2>
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
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" id="name" name="name" type="text" required onchange="get_alias()">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_alias']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['alias'];?>
" id="alias" name="alias" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2"><?php echo $_smarty_tpl->tpl_vars['lang_important']->value;?>
</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['future']=='1') {?>checked<?php }?>>
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
							<input class="input-xlarge required" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
" name="url" type="text" >
						</div>
					  </div>
				  </div>
				  
				  <div id="module_5">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
</label>
						<div class="controls">
							<input class="input-xlarge required" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
" name="link" type="text" >
						</div>
					  </div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="">Class <?php echo $_smarty_tpl->tpl_vars['lang_menu']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['web_class'];?>
" name="web_class" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3"><?php echo $_smarty_tpl->tpl_vars['lang_parent']->value;?>
</label>
					<div class="controls">
					  <select id="selectError3" name="parent_id">
						<option value="">Select</option>
                        <?php echo $_smarty_tpl->tpl_vars['parent']->value;?>

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
                        <textarea class="input-xlarge" rows="3" name="description"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for=""><?php echo $_smarty_tpl->tpl_vars['lang_order']->value;?>
</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['order_by'];?>
" id="name" name="order_by" type="text" required>
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
