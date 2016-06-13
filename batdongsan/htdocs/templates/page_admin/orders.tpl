<h3 class="pad bg gray mar">Quản lý đơn đặt hàng</h3>
<div class="pad">
	
	<div class="wap-x70">
			
		{foreach from=$orders key=k item=list}
			<div class="bor-btm">
				<div class="">
					<div class="wap-x50">
						<p class="mar-sml"><b>{$list.created}</b> (Đơn hàng mới)</p>
						<p class="mar-sml">Số lượng: <b>{$list.number}</b> - Tổng giá trị: <b class="red">{$list.total}</b></p>
					</div>
					<div class="wap-x50">
						<p class="align-rgt"><a href="{$list.link}"><input type="submit" value="Cập nhật"></a></p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		{/foreach}
			
	</div>
	
	<div class="wap-x30">
		<div class="pad bor mar-2lft">
			<h3 class="bor-btm">Thống kê</h3>
			<table class="table">
				<tr>
					<td>Tổng số đơn hàng</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Đơn hàng mới</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Đang giao dịch</td>
					<td>6</td>
				</tr>
				<tr>
					<td>Giao dịch thành công</td>
					<td>6</td>
				</tr>
				<tr>
					<td>Đơn hàng trả về</td>
					<td>6</td>
				</tr>
				
			</table>
		</div>
	</div>

	<div class="clear"></div>
</div>
