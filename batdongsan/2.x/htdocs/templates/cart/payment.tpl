<h3 class="pad">{$category}</h3>
<div class="pad">
	
   	<table class="table tableBor">
   		<thead>
   			<tr>
   				<th class="align-cen">Mã</th>
   				<th>Hình ảnh</th>
   				<th>Tên sản phẩm</th>
   				<th class="">Giá bán</th>
   				<th class="align-cen" width="60px">Số lượng</th>
   				<th class="align-cen">Khuyến mại</th>
   				<th class="align-rgt">Thành Tiền</th>
   			</tr>
   		</thead>
   		<tbody>
   			{foreach from=$result key=k item=list}
    		<tr>
    			<td class="align-cen">{$list.id}</td>
    			<td width="80"><img src="{$list.img}" style="width: 80px; height: 60px;"></td>
    			<td width="168">{$list.name}</td>
    			<td class="">{$list.price}</td>
    			<td class="align-cen">{$list.number}</td>
    			<td class="align-cen">{$list.promotions} %</td>
    			<td class="align-rgt">{$list.sum}</td>
    		</tr>
    		{/foreach}
   		</tbody>
   		<tfoot>
   			<tr>
   				<th colspan="8" class="align-rgt">Tổng tiền : {$sum_cart}</th>
   			</tr>
   		</tfoot>
   	</table>

   	<div id="cart_hand" class="mar-mid">
   		<a href="cart.html">Chỉnh sửa giỏ hàng</a>
   		<a href="javascript:void(0);" id="delete_cart">Huỷ giỏ hàng</a>
   	</div>

	  	
</div>

<h3 class="pad mar-top">Gửi thông tin khách hàng</h3>
<div class="pad bor mar">
	<p class="mar-mid">Vui lòng xác nhận lại thông tin của bạn dưới đây để thuận tiện trong việc giao hàng !</p>
	<form method="post" action="" id="FrmSubmit">
		<table class="table">
			<tr>
				<td width="160px">Họ và tên (*)</td>
				<td><input type="text" name="name" value="{$mem.name}" class="required fnt-x300"></td>
			</tr>
			<tr>
				<td>Email (*)</td>
				<td><input type="email" name="email" value="{$mem.email}" class="required fnt-x300"></td>
			</tr>
			<tr>
				<td>Số điện thoại (*)</td>
				<td><input type="text" name="phone" value="{$mem.phone}" class="required number fnt-x300"></td>
			</tr>
			<tr>
				<td>Địa chỉ (*)</td>
				<td><input type="text" name="address" value="{$mem.address}" class="required fnt-x300"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="FrmSubmit" value="Gửi hoá đơn"></td>
			</tr>
		</table>
	</form>

</div>


