<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> {$lang_edit} {$lang_product}</h2>
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
					<label class="control-label" for="">{$lang_name} {$lang_product}</label>
					<div class="controls">
					  <input class="input-xlarge " id="name" name="name" type="text" required value="{$detail.name}">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_category}</label>
					<div class="controls">
					  <select id="selectError3" name="category" class="required">
						<option value="">{$lang_select}</option>
                                 {$option.category}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">{$lang_important}</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" {if $detail.future eq '1'}checked{/if}>
						This is a important article
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
                      <label class="control-label" for="fileInput">&nbsp</label>
                      <div class="controls">
                        <img src="{$detail.img}" style="min-width: 200px; max-width: 300px; border: 1px solid #999; padding: 2px;"/>
                      </div>
                      
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">{$lang_description}</label>
                      <div class="controls">
                        <textarea rows="5" class="input-xxlarge" name="description">{$detail.description}</textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">{$lang_content}</label>
                      <div class="controls">
                        <textarea id="ar_content" rows="3" name="content">{$detail.content}</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Loại hình</label>
					<div class="controls">
						<input class="input-medium" name="type" type="text" value="{$detail.type}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Địa chỉ</label>
					<div class="controls">
						<input class="input-xlarge" name="address" type="text" value="{$detail.address}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Diện tích tổng thể</label>
					<div class="controls">
						<input class="input-xlarge" name="size" type="text" value="{$detail.size}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Số tầng</label>
					<div class="controls">
						<input class="input-xlarge" name="floor" type="text" value="{$detail.floor}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Ngày khởi công</label>
					<div class="controls">
						<input class="input-xlarge" name="started" type="text" value="{$detail.started}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Ngày hoàn thành</label>
					<div class="controls">
						<input class="input-xlarge" name="finished" type="text" value="{$detail.finished}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Hiện trạng</label>
					<div class="controls">
						<input class="input-xlarge" name="status" type="text" value="{$detail.status}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Chủ đầu tư</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_boss" type="text" value="{$detail.proj_boss}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị thi cômg</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_working" type="text" value="{$detail.proj_working}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị quản lý</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_manager" type="text" value="{$detail.proj_working}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">Đơn vị thiết kế</label>
					<div class="controls">
						<input class="input-xlarge" name="proj_design" type="text" value="{$detail.proj_design}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_order}</label>
					<div class="controls">
					  <input class="input-medium " id="" name="order_by" type="text" value="{$detail.order_by}" >
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
