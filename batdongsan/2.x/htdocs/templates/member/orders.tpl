<div class="pad">
	<h3 class="category">Danh sách đơn đặt hàng</h3>

	<div class="mar-top">
		{if $result eq 0}
		<p>Bạn chưa đăng tin nào !</p>
		{else}
			{foreach from=$result key=k item=list}
				<div class="bor-btm">
					<div class="wap-x15">
						<div class="img bor pad-sml mar-sml shadow">
							<img src="{$list.img}">
						</div>
					</div>

					<div class="wap-x80">
						<div class="mar-2lft">
							<h3 class="mar-mid">Đặt hàng lúc {$list.created}</h3>
							<p>Mã sản phẩm: <b>{$list.product_id}</b> - <a href="{$list.product_link}">{$list.name}</a></p>
							<p class="mar-smid">Số lượng: <b>{$list.number}</b> - Giá mua: <b>{$list.price}</b></p>
							<p>Tại shop: <a href="{$list.page_link}">{$list.page}</a></p>
							<p class="mar-smid">Trạng thái đơn hàng: <b class="red">Đang chờ xử lý</b></p>
						</div>
					</div>
					
					
					<div class="clear"></div>
				</div>
			{/foreach}
			
		
		{/if}
	</div>
</div>