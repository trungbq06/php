			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Videos Manager</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th class="center"><input type="checkbox" class="checkall"></th>
								  <th>Name</th>
								  <th>Url</th>
								  <th>Alias</th>
								  <th class="center">Role User</th>
								  <th class="center">Order By</th>
								  <th class="center">Status</th>
								  <th class="center">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          	{foreach from=$list key=k item=value}
							<tr>
								<td class="center"><input type="checkbox" name="check[]" value="{$value.id}"></td>
								<td><a href="roles?id={$value.id}">{$value.name}</a></td>
								<td>{$value.url}</td>
								<td>{$value.alias}</td>
								<td class="center">{$value.role}</td>
								<td class="center">{$value.order_by}</td>
								<td class="center">
                                    <a href="#" table="conf_role" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
								</td>
								<td class="center">
									<a title="Edit" href="?mod=roles&site=edit&id={$value.id}"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
									<a title="Delete" href="#" link="?mod=helps&site=delete&table=conf_role&id={$value.id}" class="confirmer"><i class="icon-trash"></i></a>
								</td>
							</tr>
                            {/foreach}
						  </tbody>
						  <tfoot>
						  	<tr>
						  		<th colspan="10">
								<div class="controls">
								  <select id="" name="handle">
									<option value="0">{$lang_select}</option>
									{$list_handle}
								  </select>
								  <input type="submit" class="btn btn-primary" name="frmSubmit" value="Save changes"/>
								</div>
						  		</th>
						  	</tr>
						  </tfoot>
					  </table> 
					  </form>           
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

