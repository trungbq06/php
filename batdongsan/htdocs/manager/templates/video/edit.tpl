<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Form Edit value</h2>
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
					<label class="control-label" for="">{$lang_name} Video</label>
					<div class="controls">
					  <input class="input-xlarge" value="{$value.name}" name="name" type="text" required>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox2">{$lang_important}</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox2" name="future" value="1" {if $value.future=='1'}checked{/if}>
						This is a important item
					  </label>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_link} Youtube</label>
					<div class="controls">
					  <input class="input-xxlarge" value="{$value.link}" name="link" type="url" required>
					</div> 
				  </div>

				  <div class="control-group">
					<label class="control-label" for="selectError3">{$lang_position}</label>
					<div class="controls">
					  <select id="selectError3" name="position">
                        {$type}
					  </select>
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label" for="">{$lang_order}</label>
					<div class="controls">
					  <input class="input-large" value="{$value.order_by}" name="order_by" type="text" >
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
