
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> {$lang_form_create}</h2>
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
					<label class="control-label" for="">{$lang_name}</label>
					<div class="controls">
					  <input class="input-xxlarge" name="name" type="text" required>
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="selectError3">Tỉnh thành</label>
					<div class="controls">
					  <select id="selectError3" name="local" class="required">
						<option value="">{$lang_select}</option>
                        {$category}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Địa chỉ</label>
					<div class="controls">
					  <input class="input-xxlarge " name="address" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Hotline</label>
					<div class="controls">
					  <input class="input-xxlarge " name="hotline" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip Map</label>
					<div class="controls">
					  <input class="input-xlarge " name="map" type="text" required>
					</div>
				  </div>


				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">{$lang_important}</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" checked>
						This is a important article
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_order}</label>
					<div class="controls">
					  <input class="input-medium " value="10" name="order_by" type="text" >
					</div>
				  </div>
				  
				  <div class="form-actions">
					<input type="submit" class="btn btn-primary" name="frmSubmit" value="{$lang_save}"/>
					<input type="reset" class="btn" value="{$lang_cancel}"/>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->

{literal}<script> CKEDITOR.replace('ar_content'); </script>{/literal}		
{literal}<script> CKEDITOR.replace('ar_content2'); </script>{/literal}		
