<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Contacts Manager</h2>
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
					  <th>Contact By</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>Gender</th>
					  <th>Birthday</th>
					  <th class="center">Created</th>
					  <th class="center">Status</th>
					  <th class="center" width="100px">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
                 {foreach from=$list key=k item=value}
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="{$value.id}"></td>
					<td>{$value.name}</td>
					<td>{$value.email}</td>
					<td>{$value.phone}</td>
					<td>{$value.gender}</td>
					<td>{$value.birthday}</td>
					<td class="center">{$value.created}</td>
					<td class="center">
                        <a href="#" table="member" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
					</td>
					<td class="center">
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=member&id={$value.id}" class="confirmer"><i class="icon-trash"></i></a>
					</td>
				</tr>
                {/foreach}
			  </tbody>
			  <tfoot>
			  	<tr>
			  		<th colspan="10">
					<div class="controls">
					  <select id="" name="handle">
						<option value="0">Select</option>
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
