<h3 class="pad bg gray mar">Quản lý sản phẩm của gian hàng</h3>

<div>
{if $product neq NULL}
	{foreach from=$product item=list}
		<div class="mar bor pad">
			<div class="wap-x15">
				<div class="img bor pad-sml shadow">
					<img alt="" src="{$list.img}" height="">
				</div>
			</div>
			<div class="wap-x85">
				<div class="mar-2lft">
					<h3 class="name">{$list.name}</h3>
					<p class="mar-sbtm">Giá bán: {$list.price}</p>
					<p>Danh mục: {$list.category}</p>
					<div class="mar-top bg gray pad">
						<ul class="ul">
							<li><a href="?mod=product&site=edit&id={$list.id}">Sửa sản phẩm</a></li>
							<li><a href="?mod=product&site=image&id={$list.id}">Quản lý hình ảnh</a></li>
							<li><a href="">Thiết lập</a></li>
							<li><a href="">Bỏ kích hoạt</a></li>
							<li><a href="">Xóa</a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	{/foreach}
	
	<div class="clear"></div>
{else}
	<div class="bor pad mar-cen">
		<p>Chưa có sản phẩm nào được đăng</p>
	</div>
{/if}
</div>
