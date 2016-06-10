<div class="content" style="margin-bottom:20px; padding: 0px !important; border: 1px #dedede solid;">
			<h3 class="pad bg">{$category}</h3>
		<div class="pad">
		
	    	<table class="table tableBor cart-table">
	    		<thead>
	    			<tr>
	    				<th class="cen">Stt</th>
	    				<th>Hình ảnh</th>
	    				<th>Tên sản phẩm</th>
	    				<th>Giá bán</th>
	    				<th width="60">Số lượng</th>
	    				<th>Thành Tiền</th>
	    				<th>Lựa chọn</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			{foreach from=$result key=k item=list}
	     		<tr>
	     			<td class="align-cen">{$k+1}</td>
	     			<td width="80"><div class="img"><img src="{$list.img}"></div></td>
	     			<td width="168">{$list.name}</td>
	     			<td>{$list.price}</td>
	     			<td class="align-cen"><input type="text" value="{$list.number}" class="inp-small align-cen"></td>
	     			<td class="align-cen">{$list.sum}</td>
	     			<td class="align-cen">
	     				<a href="javascript:void(0);" class="update_cart" data-id="{$list.id}" title="Refresh"><img alt="" src="webroot/images/save.png"></a> &nbsp 
	     				<a href="javascript:void(0);" class="delete_cart_item" data-id="{$list.id}" title="Delete"><img alt="" src="webroot/images/delete.png"></a>
	     			</td>
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
	    		<a href="payment.html">Thanh toán giỏ hàng</a>
	    		<a href="javascript:void(0);" id="delete_cart">Huỷ giỏ hàng</a>
	    	</div>
	
							
		</div>

</div>