
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
					  <input class="input-xxlarge" value="{$value.web_title}" name="web_title" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Keyword meta</label>
					<div class="controls">
                        <textarea rows="3" class="input-xxlarge" name="web_keyword">{$value.web_keyword}</textarea>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Description meta</label>
                      <div class="controls">
                        <textarea rows="5" class="input-xxlarge" name="web_description">{$value.web_description}</textarea>
                      </div>
                  </div>

				</fieldset>

				<h3>Cấu hình website</h3>
				<fieldset>

				  <div class="control-group">
					<label class="control-label" for="">Hotline</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.phone}" id="phone" name="phone" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Facebook</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.facebook}" name="facebook" type="text" >
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
						<input class="input-xlarge" value="{$value.map1}" name="map1" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">Ip map 2</label>
					<div class="controls">
						<input class="input-xlarge" value="{$value.map2}" name="map2" type="text" >
					</div>
				  </div>
				  

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Footer</label>
                      <div class="controls">
                      	<textarea id="ar_content" rows="3" name="description">{$value.description}</textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">Contact</label>
                      <div class="controls">
                      	<textarea id="contact" rows="3" name="contact">{$value.contact}</textarea>
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
{literal}<script> CKEDITOR.replace('ar_content'); </script>{/literal}		
{literal}<script> CKEDITOR.replace('contact'); </script>{/literal}		
