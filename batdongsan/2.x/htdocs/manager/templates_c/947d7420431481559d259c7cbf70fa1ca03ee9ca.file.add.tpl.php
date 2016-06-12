<?php /* Smarty version Smarty-3.1.18, created on 2014-10-25 07:32:45
         compiled from "/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/other/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664734685544b521d9d1329-28863998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947d7420431481559d259c7cbf70fa1ca03ee9ca' => 
    array (
      0 => '/home/dsc36/domains/daisan.com.vn/public_html/manager/templates/other/add.tpl',
      1 => 1413455432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664734685544b521d9d1329-28863998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select' => 0,
    'lang_important' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544b521db655d5_11860275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b521db655d5_11860275')) {function content_544b521db655d5_11860275($_smarty_tpl) {?><div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Create New module</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" id="FrmCreateuser" method="post">
				<fieldset>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Tỉnh thành</label>
					<div class="controls">
					  <select id="local_province" name="province">
						<option value="">Select</option>
                        <?php echo $_smarty_tpl->tpl_vars['select']->value['province'];?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Quận huyện</label>
					<div class="controls">
					  <select id="local_district" name="district">
						<option value="">Select</option>
						<?php echo $_smarty_tpl->tpl_vars['select']->value['district'];?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Phường xã</label>
					<div class="controls">
					  <select id="local_ward" name="ward">
						<option value="">Select</option>
						<?php echo $_smarty_tpl->tpl_vars['select']->value['ward'];?>

					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Name</label>
					<div class="controls">
					  <input class="input-xlarge " name="name" type="text" required>
					</div>
				  </div>
                  
                    <div class="control-group">
					<label class="control-label" for="">Site</label>
					<div class="controls">
					  <input class="input-xlarge " name="site" type="text" required>
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
					<label class="control-label" for="">Order</label>
					<div class="controls">
					  <input class="input-large " value="10" name="order_by" type="text" >
					</div>
				  </div>

				  <div style="margin:0 100px;">
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
					<script type="text/javascript" src="webroots/js/api-map-google.js"></script>
					<div class="control-group">
						<label style="font-weight: bold;">Nhập địa chỉ chính xác tại khung bên dưới hoặc di chuyển vị trí đến đúng vị trí của bạn trên bản đồ. </label><input class="input" title="Gõ địa chỉ vào đây để di chuyển bản đồ tới, Ví dụ: Thái Thịnh, Đống Đa, Hà Nội, Việt Nam" id="address"  type="text" style="width: 440px; margin: 10px 0; padding: 4px;"/>
					    <input id="ProjectMapIp" name="map_ip" type="hidden"/>
					    <div id="map_canvas" style="width:100%; height:420px; margin: 10px 0; border: 1px solid #ccc;"></div><br/>
						<div style="display: none;">
							<label>latitude: </label><input id="latitude" type="text"/><br/>
							<label>longitude: </label><input id="longitude" type="text"/>
						</div>
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
<?php }} ?>
