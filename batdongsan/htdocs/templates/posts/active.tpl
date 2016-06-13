<div class="pad">
	<h1 class="bor-btm">Kích hoạt tin đăng</h1>
	
	<div class="">
		<div class="wap-x25">
			<div class="bor img">
				<img alt="" src="{$result.image}">
			</div>
		
		</div>
		<div class="wap-x40">
			<div class="mar-2lft">
				<h3 class="mar-top">Mã tin: {$result.id} - {$result.name}</h3>
				<p class="mar-mid">Ngày đăng tin: {$result.created}</p>
				<div class="bor pad mar-top">
					{if $active eq 0}
					<form action="" method="post">
						<p class="mar-btm bold">Lựa chọn thời gian đăng tin</p>
						<p>
						<select class="fnt-x120" name="price" id="posts_price_active">{$select.price}</select>
						</p>
						<p class="mar-mid">Tài khoản của bạn sẽ bị trừ <b class="red" id="posts_price_active_gold">10</b> gold</p>
						<p><input type="submit" name="active" value="Kích hoạt"></p>
					</form>
					{else}
					<h3 class="mar-btm">Tin đã được kích hoạt</h3>
					<table class="table tableBor">
						<tr>
							<td>Ngày kích hoạt:</td>
							<td>{$result.actived}</td>
						</tr>
						<tr>
							<td>Ngày hết hạn:</td>
							<td>{$result.finished}</td>
						</tr>
					</table>
					<p class="mar-smid">Làm mới tin để hiện thị tin trong vị trí mới trên trang đăng tin</p>
					<p>Phí làm mới <b class="red">5</b> glod</p>
					<form action="" method="post">
						<p class="mar-mid"><input type="submit" name="refresh" value="Làm mới tin"></p>
					</form>
					{/if}
				</div>
			</div>
		</div>
		<div class="wap-x35">
			<div class="pad line_2em bor mar-2lft mar-btm">
				<h3>Bạn đang có <b class="red">{$account.gold}</b> gold</h3>
				<p class="font-x20 align-cen mar-2mid"><a href="">Nạp gold ngay</a></p>
			</div>
			
			<div class="pad line_2em bor mar-2lft">
				<h3 class="bor-btm">Bảng giá tin rao vặt</h3>
				<p>Tin đăng trong 1 ngày: 10 gold</p>
				<p>Tin đăng trong 3 ngày: 20 gold</p>
				<p>Tin đăng trong 7 ngày: 50 gold</p>
				<p>Tin đăng trong 15 ngày: 80 gold</p>
				<p>Tin đăng trong 30 ngày: 150 gold</p>
			</div>	
		</div>
		<div class="clear"></div>
	</div>
	
	
</div>