
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> {$lang_manage} {$lang_article}</h2>
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
					  <th>{$lang_id}</th>
					  <th class="center" width="110">{$lang_image}</th>
					  <th>{$lang_title}</th>
					  <th>{$lang_category}</th>
					  <th class="center">{$lang_future}</th>
					  <th class="center">{$lang_order}</th>
					  <th class="center">{$lang_created}</th>
					  <th class="center">{$lang_status}</th>
					  <th class="center" width="100">{$lang_action}</th>
				  </tr>
			  </thead>   
			  <tbody>
                       	{foreach from=$manager key=k item=value}
				<tr>
					<td class="center"><input type="checkbox" name="check[]" value="{$value.id}"></td>
					<td>{$value.id}</td>
					<td class="center"><img src="{$value.img}" style="width: 92px; max-height: 80px; min-height: 60px;"></td>
					<td title="{$value.name}">{$value.short_name}</td>
					<td><a href="article?id={$value.category_id}">{$value.category}</a></td>
					<td class="center"><i class="{$value.future}"></i></td>
					<td class="center"><input type="text" value="{$value.order_by}" class="input-xmini update_order" link="?mod=helps&site=update_order&table=article&id={$value.id}"></td>
					<td class="center">{$value.created}</td>
					<td class="center">
                        <a href="#" table="article" value="{$value.id}" class="label frm_active {if $value.active==1}label-success{else}label-warning{/if}" title="Click to Active/Inactive  this filed">{$value.active_view}</a>
					</td>
					<td class="center">
						<a title="View" href="?mod=article&site=view&id={$value.id}"><i class="icon-zoom-in"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Edit" href="?mod=article&site=edit&id={$value.id}"><i class="icon-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=article&id={$value.id}" class="confirmer"><i class="icon-trash"></i></a>
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

