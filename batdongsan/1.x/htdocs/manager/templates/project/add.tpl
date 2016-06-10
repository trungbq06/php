
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> {$lang_create} {$lang_product}</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<h4>{$message}</h4>
			<br>
			<form class="form-horizontal" action="" enctype="multipart/form-data" id="FrmCreateuser" method="post">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="">{$lang_name} {$lang_product}</label>
					<div class="controls">
					  <input class="input-xxlarge " id="name" name="name" type="text" required>
					</div>
				  </div>
				  

				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_category}</label>
					<div class="controls">
					  <select id="" name="category" class="required">
						<option value="">{$lang_select}</option>
                                 {$option.category}
					  </select>
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">{$lang_important}</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1">
						This is a important item
					  </label>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">{$lang_image}</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="">{$lang_description}</label>
                      <div class="controls">
                        <textarea class="input-xxlarge" rows="4" name="description"></textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">{$lang_content}</label>
                      <div class="controls textarea-big">
                        <textarea id="ar_content" rows="3" name="content"></textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Loại hình</label>
					<div class="controls">
						<input class="input-medium" name="type" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Địa chỉ</label>
					<div class="controls">
						<input class="input-xlarge" name="address" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Diện tích tổng thể</label>
					<div class="controls">
						<input class="input-xlarge" name="size" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Số tầng</label>
					<div class="controls">
						<input class="input-xlarge" name="floor" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Ngày khởi công</label>
					<div class="controls">
						<input class="input-xlarge" name="started" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Ngày hoàn thành</label>
					<div class="controls">
						<input class="input-xlarge" name="finished" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Hiện trạng</label>
					<div class="controls">
						<input class="input-xlarge" name="status" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Chủ đầu tư</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_boss" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị thi cômg</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_working" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị quản lý</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_manager" type="text" value="">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị thiết kế</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_design" type="text" placeholder="">
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
