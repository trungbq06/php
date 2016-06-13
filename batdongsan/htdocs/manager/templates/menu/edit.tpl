<div class="row-fluid sortable">
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
					<label class="control-label" for="">{$lang_name} {$lang_menu}</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.name}" id="name" name="name" type="text" required onchange="get_alias()">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_alias}</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.alias}" id="alias" name="alias" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">{$lang_important}</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" {if $value.future=='1'}checked{/if}>
						This is a important menu
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_module}</label>
					<div class="controls">
					  <select id="module" name="module" class="required">
					  	<option value="">{$lang_select}</option>
                                 {$type}
					  </select>
					</div>
				  </div>
				  
				  
				  <div id="module_1">
				 	 <!-- Chon kieu menu tin tuc -->
					  <div class="control-group">
						<label class="control-label" for="selectError3">{$lang_category} {$lang_article}</label>
						<div class="controls">
						  <select id="" name="1">
							<option value="">{$lang_select}</option>
                                  {$select.article_cate}
						  </select>
						</div>
					  </div>
				 	 <!--  -->
				  </div>

				  <div id="module_2">
					  <!-- Chon kieu menu tin tuc -->
					  <div class="control-group">
						<label class="control-label" for="selectError3">{$lang_category} {$lang_article}</label>
						<div class="controls">
						  <select id="article_cate" name="article_cate">
							<option value="">{$lang_select}</option>
                                  {$select.article_cate}
						  </select>
						</div>
					  </div>
					  
				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_article}</label>
					<div class="controls">
					  <select id="article" name="2" class="required">
						<option value="">{$lang_select}</option>
                                 {$select.article}
					  </select>
					</div>
				  </div>
				  <!--  -->
				  </div>

				  <div id="module_3">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3">{$lang_category} {$lang_product}</label>
						<div class="controls">
						  <select id="" name="3">
							<option value="">Select</option>
                                  {$select.product_cate}
						  </select>
						</div>
					  </div>
				  </div>
				  
				  <div id="module_4">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3">{$lang_link}</label>
						<div class="controls">
							<input class="input-xlarge required" value="{$value.link}" name="url" type="text" >
						</div>
					  </div>
				  </div>
				  
				  <div id="module_5">
					  <!-- Chon kieu menu san pham -->
					  <div class="control-group">
						<label class="control-label" for="selectError3">{$lang_link}</label>
						<div class="controls">
							<input class="input-xlarge required" value="{$value.link}" name="link" type="text" >
						</div>
					  </div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="">Class {$lang_menu}</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.web_class}" name="web_class" type="text">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_parent}</label>
					<div class="controls">
					  <select id="selectError3" name="parent_id">
						<option value="">Select</option>
                        {$parent}
					  </select>
					</div>
				  </div>
                           
                  <div class="control-group">
                      <label class="control-label" for="fileInput">{$lang_image}</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" name="img" type="file">
                      </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label" for="textarea2">{$lang_description}</label>
                      <div class="controls">
                        <textarea class="input-xlarge" rows="3" name="description">{$value.description}</textarea>
                      </div>
                  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_order}</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.order_by}" id="name" name="order_by" type="text" required>
					</div>
				  </div>

				  <div class="form-actions">
					<button type="submit" class="btn btn-primary" name="FrmSubmit">{$lang_save}</button>
					<button type="reset" class="btn">{$lang_cancel}</button>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
