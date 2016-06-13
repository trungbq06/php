<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Danh sách sản phẩm</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Id</th>
					  <th class="center">Hình ảnh</th>
					  <th>Tên sản phẩm</th>
					  <th class="center">Giá thanh toán</th>
					  <th class="center">Khuyến mại</th>
					  <th class="center">Số lượng</th>
					  <th class="center">Thành tiền</th>
					  <th class="center" width="80px">Xử lý</th>
				  </tr>
			  </thead>   
			  <tbody>
                {foreach from=$list key=k item=value}
				<tr>
					<td>{$value.product_id}</td>
					<td class="center" width="100px"><img alt="{$value.image}" src="{$value.img}" width="100px"></td>
					<td>{$value.name}</td>
					<td class="center">{$value.price}</td>
					<td class="center">{$value.promotions} %</td>
					<td class="center">{$value.number}</td>
					<td class="center">{$value.price_sale}</td>
					<td class="center">
						<a title="Delete" href="#" link="?mod=helps&site=delete&table=product_invoice_item&id={$value.id}" class="confirmer"><i class="icon-trash"></i></a>
					</td>
				</tr>
                {/foreach}
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
