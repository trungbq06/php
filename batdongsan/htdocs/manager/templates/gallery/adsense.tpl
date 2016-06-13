<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i>{$lang_album}</h2>
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
					  <th>{$lang_name}</th>
					  <th>{$lang_position}</th>
					  <th class="center">{$lang_order}</th>
					  <th class="center">{$lang_future}</th>
					  <th class="center">{$lang_status}</th>
					  <th class="center">{$lang_action}</th>
				  </tr>
			  </thead>   
			  <tbody>
                {foreach from=$manager key=k item=value}
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="{$value.id}"></td>
					<td><a href="gallery/manager_adsense?id={$value.id}">{$value.name}</a></td>
					<td class="">{$value.type}</td>
					<td class="center">{$value.order_by}</td>
					<td class="center">{$value.future}</td>
					<td class="center">
                                 <a href="#" table="gallery_category" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
					</td>
					<td class="center">
						<a title="View" href="?mod=album&site=view&id={$value.id}"><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="gallery/album_edit?id={$value.id}"><i class="icon-edit"></i></a>
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
