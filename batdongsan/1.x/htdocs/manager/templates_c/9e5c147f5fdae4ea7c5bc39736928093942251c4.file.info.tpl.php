<?php /* Smarty version Smarty-3.1.18, created on 2015-08-31 10:13:03
         compiled from "C:\xampp\htdocs\php\daisan_temp_code\manager\templates\config\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826855e40c8f9a4fa2-83920673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5c147f5fdae4ea7c5bc39736928093942251c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\daisan_temp_code\\manager\\templates\\config\\info.tpl',
      1 => 1407158388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826855e40c8f9a4fa2-83920673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e40c8fb142f2_70098706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e40c8fb142f2_70098706')) {function content_55e40c8fb142f2_70098706($_smarty_tpl) {?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Config contact</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" id="FrmCreateuser" method="post">
				<h3>Cấu hình seo</h3>
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="">Title website</label>
					<div class="controls">
					  <input class="input-xxlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['web_title'];?>
" name="web_title" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Keyword meta</label>
					<div class="controls">
                        <textarea rows="3" class="input-xxlarge" name="web_keyword"><?php echo $_smarty_tpl->tpl_vars['value']->value['web_keyword'];?>
</textarea>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Description meta</label>
                      <div class="controls">
                        <textarea rows="5" class="input-xxlarge" name="web_description"><?php echo $_smarty_tpl->tpl_vars['value']->value['web_description'];?>
</textarea>
                      </div>
                  </div>

				</fieldset>

				<h3>Cấu hình website</h3>
				<fieldset>

				  <div class="control-group">
					<label class="control-label" for="">Hotline</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
" id="phone" name="phone" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Facebook</label>
					<div class="controls">
					  <input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['facebook'];?>
" name="facebook" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">&nbsp</label>
					<div class="controls">
						<p>Để chọn Ip map, bạn vui lòng tìm kiếm địa chỉ của mình trong mục "<a href="config/map" target="_blank">Chọn bản đồ</a>" sau đó copy lấy Id.</p>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip map 1</label>
					<div class="controls">
						<input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['map1'];?>
" name="map1" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip map 2</label>
					<div class="controls">
						<input class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['map2'];?>
" name="map2" type="text" >
					</div>
				  </div>
				  

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Footer</label>
                      <div class="controls">
                      	<textarea id="ar_content" rows="3" name="description"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Contact</label>
                      <div class="controls">
                      	<textarea id="contact" rows="3" name="contact"><?php echo $_smarty_tpl->tpl_vars['value']->value['contact'];?>
</textarea>
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
<script> CKEDITOR.replace('ar_content'); </script>		
<script> CKEDITOR.replace('contact'); </script>		
<?php }} ?>
