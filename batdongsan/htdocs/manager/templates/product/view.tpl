<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Article Detail</h2>
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
						<td>Title Article</td>
						<td>{$value.name}</td>
					</tr>
					<tr>
						<td>Category</td>
						<td>{$value.category}</td>
					</tr>
					<tr>
						<td>Price</td>
						<td>{$value.price}</td>
					</tr>
					<tr>
						<td>Image</td>
						<td class="center">
                           <ul class="thumbnails gallery">
                           		{foreach from=$images item=list}
                               <li id="" class="thumbnail">
                                   <a style="background:url({$list})" title="image" href="{$list}">
                                       <img class="grayscale" src="{$list}" alt="{$value.name}">
                                   </a>
                               </li>
                               {/foreach}
                           </ul>
                       </td>
					</tr>
					<tr>
						<td>Important</td>
						<td>{$value.future}</td>
					</tr>
					<tr>
						<td>Content</td>
						<td>{$value.content}</td>
					</tr>
					<tr>
						<td>Created Date</td>
						<td>{$value.created}</td>
					</tr>
					<tr>
						<td>Order By</td>
						<td>{$value.order_by}</td>
					</tr>
					<tr>
						<td>Active</td>
						<td>{$value.active}</td>
					</tr>
				  </tbody>
			  </table>            


			</fieldset>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
