<h3 class="pad bg gray mar">Quản lý đơn đặt hàng</h3>
<div class="">

	<div class="wap-x60">
		<div class="mar bor pad">
			<h3 class="bor-btm">Danh sách sản phẩm</h3>
			{foreach from=$product item=list}
			<div class="bor-btm">
				<div class="wap-x20">
					<div class="img shadow"><a href=""><img alt="" src="{$list.img}"></a></div>
				</div>
				<div class="wap-x80">
					<div class="mar-lft">
						<p class="name bold">{$list.name}</p>
						<p class="mar-sbtm">Giá bán: {$list.price}</p>
						<p>Số lượng mua: {$list.number}</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			{/foreach}
		</div>
	</div>

	<div class="wap-x40">
		<div class="mar bor pad">
			<div class="">
				<h3 class="bor-btm">Thông tin đơn hàng</h3>
				<table class="table">
					<tr>
						<td>Ngày đặt:</td>
						<td>{$orders.created}</td>
					</tr>
					<tr>
						<td>Trạng thái:</td>
						<td>
							<select name="status">
								<option value="0">Đặt hàng mới</option>
								<option value="1">Đang chuyển hàng</option>
								<option value="2">Giao dịch thành công</option>
								<option value="3">Đơn hàng trả về</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tổng số sản phẩm</td>
						<td>{$number_field}</td>
					</tr>
					<tr>
						<td>Giá trị đơn hàng</td>
						<td><b class="red">{$total} đ</b></td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td><input type="submit" value="Cập nhật"></td>
					</tr>
				</table>

			</div>
		</div>
		<div class="mar bor pad">
			<div class="">
				<h3 class="bor-btm">Thông tin liên hê</h3>
				
				<table class="table">
					<tr>
						<td>Người đặt:</td>
						<td>{$orders.guest_name}</td>
					</tr>
					<tr>
						<td>Điện thoại:</td>
						<td>{$orders.guest_phone}</td>
					</tr>
					<tr>
						<td>Email liên hệ:</td>
						<td>{$orders.guest_email}</td>
					</tr>
					<tr>
						<td>Địa chỉ nhận hàng:</td>
						<td>{$orders.guest_address}</td>
					</tr>
				</table>
				
			</div>
		</div>
	</div>

	<div class="clear"></div>
</div>
