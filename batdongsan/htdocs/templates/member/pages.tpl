<div class="pad">
	<h3 class="category">Danh sách gian hàng của bạn</h3>

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
							<h3 class="mar-mid">{$list.local} - <a href="{$list.link}">{$list.name}</a></h3>
							<p>Mã gian hàng: <b>{$list.id}</b> - (Gian hàng cấp 1)</p>
							<p class="mar-smid">Đang bày bán: <b>{$list.products}</b> sản phẩm - Lượt truy cập: <b>{$list.view}</b></p>
							<p class="mar-smid">Khởi tạo ngày: {$list.created}</p>
							<p><a href="{$list.admin}" target="_blank">Vào trang quản lý gian hàng</a></p>
						</div>
					</div>
					
					
					<div class="clear"></div>
				</div>
			{/foreach}
			
		
		{/if}
	</div>
</div>