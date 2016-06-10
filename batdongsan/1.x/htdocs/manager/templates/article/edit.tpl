<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> {$lang_edit} {$lang_article}</h2>
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
					<label class="control-label" for="">{$lang_title} {$lang_article}</label>
					<div class="controls">
					  <input class="input-xxlarge " id="name" name="name" type="text" required value="{$detail.name}">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_category}</label>
					<div class="controls">
					  <select id="selectError3" name="category" class="required">
						<option value="">{$lang_select}</option>
                        {$category}
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
                      <label class="control-label" for="textarea2">{$lang_description}</label>
                      <div class="controls">
                        <textarea class="input-xxlarge" id="ar_content2" rows="5" name="description">{$detail.description}</textarea>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">{$lang_image}</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">Hiển thị ảnh</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="image_show" value="1" {if $detail.image_show eq '1'}checked{/if}>
						Show this image in the article
					  </label>
					</div>
				  </div>

                  <div class="control-group">
                      <label class="control-label" for="fileInput">&nbsp</label>
                      <div class="controls">
                        <img src="{$detail.img}" style="min-width: 200px; max-width: 300px; border: 1px solid #999; padding: 2px;"/>
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">{$lang_content}</label>
                      <div class="controls">
                        <textarea id="ar_content" rows="3" name="content">{$detail.content}</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="">Class Web</label>
					<div class="controls">
					  <input class="input-xlarge " value="{$detail.class}" name="class" type="text" >
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_source}</label>
					<div class="controls">
					  <input class="input-xlarge " id="" name="source" type="text" value="{$detail.source}">
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
{literal}<script> CKEDITOR.replace('ar_content2'); </script>{/literal}		
