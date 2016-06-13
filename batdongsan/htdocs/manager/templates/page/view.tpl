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
						<td>{$lang_title}</td>
						<td>{$value.name}</td>
					</tr>
					<tr>
						<td>{$lang_category}</td>
						<td>{$value.category}</td>
					</tr>
					<tr>
						<td>{$lang_image}</td>
						<td class="center">
                           <ul class="thumbnails gallery">
                               <li id="" class="thumbnail">
                                   <a style="background:url({$value.img})" title="{$value.name}" href="{$value.img}">
                                       <img class="grayscale" src="{$value.img}" alt="{$value.name}">
                                   </a>
                               </li>
                           </ul>
                       </td>
					</tr>
					<tr>
						<td>{$lang_important}</td>
						<td>{$value.future}</td>
					</tr>
					<tr>
						<td>{$lang_description}</td>
						<td>{$value.description}</td>
					</tr>
					<tr>
						<td>{$lang_content}</td>
						<td>{$value.content}</td>
					</tr>
					<tr>
						<td>{$lang_source}</td>
						<td>{$value.source}</td>
					</tr>
					<tr>
						<td>{$lang_created}</td>
						<td>{$value.created}</td>
					</tr>
					<tr>
						<td>updated</td>
						<td>{$value.updated}</td>
					</tr>
					<tr>
						<td>{$lang_order}</td>
						<td>{$value.order_by}</td>
					</tr>
					<tr>
						<td>{$lang_status}</td>
						<td>{$value.active}</td>
					</tr>
				  </tbody>
			  </table>            


			  <div class="form-actions">
				<a href="?mod=article&site=edit&id={$value.id}" class="btn btn-primary">Update this field</a>
				<a href="?mod=article&site=manager" class="btn">Back to manager</a>
			  </div>
			</fieldset>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
