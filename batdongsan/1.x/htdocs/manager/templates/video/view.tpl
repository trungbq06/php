
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> value Detail</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<fieldset>
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <tbody>
								<tr>
									<td>value Name</td>
									<td>{$value.name}</td>
								</tr>
								<tr>
									<td>Important</td>
									<td>{$value.future}</td>
								</tr>
								<tr>
									<td>Video</td>
									<td>
										<iframe id="show_video" width="100%" height="420" src="{$value.embed}" frameborder="0" allowfullscreen></iframe>
									</td>
								</tr>
								<tr>
									<td>Link</td>
									<td>{$value.link}</td>
								</tr>
								<tr>
									<td>Active</td>
									<td>{$value.active}</td>
								</tr>
							  </tbody>
						  </table>            


						  <div class="form-actions">
							<a href="?mod=video&site=edit&id={$value.id}" class="btn btn-primary">Update this field</a>
							<a href="?mod=video&site=manager" class="btn">Back to manager</a>
						  </div>
						</fieldset>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
