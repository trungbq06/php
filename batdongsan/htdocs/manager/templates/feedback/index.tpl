<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> {$lang_manage} Feedback</h2>
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
					  <th>{$lang_title}</th>
					  <th class="center">{$lang_created}</th>
					  <th class="center">{$lang_status}</th>
					  <th class="center">Thêm nội dung</th>
					  <th class="center" width="100">{$lang_action}</th>
				  </tr>
			  </thead>   
			  <tbody>
                {foreach from=$manager key=k item=value}
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="{$value.id}"></td>
					<td title="{$value.name}"><a href="feedback/items?id={$value.id}">{$value.name}</a></td>
					<td class="center">{$value.created}</td>
					<td class="center">
                        <a href="#" table="tbl_feedback" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
					</td>
					<td class="center">
						<a title="Add" href="feedback/item_add?id={$value.id}"><i class="icon-edit"></i></a>
					</td>
					<td class="center">
						<a title="Edit" href="feedback/edit?id={$value.id}"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=tbl_feedback&id={$value.id}" class="confirmer"><i class="icon-trash"></i></a>
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

