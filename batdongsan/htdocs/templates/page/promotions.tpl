{if $product neq NULL}
	<h3 class="bor pad mar bg gray">Sản phẩm khuyến mại</h3>
	{foreach from=$product item=list}
	<div class="wap-x25">
		<div class="mar bor">
			<div class="img pad-sml">
				<a href="{$list.link}"><img alt="" src="{$list.image}" height=""></a>
			</div>
			<div class="pad align-cen">
				<p class="name"><a href="{$list.link}">{$list.name}</a></p>
				<p><b class="red">{$list.price}</b></p>
			</div>
		</div>
	</div>
	{/foreach}
{else}
	<div class="mar bor pad-big">
		<h3 class="bor-btm">Thông tin phản hổi</h3>
		<p>Không có sản phẩm nào được tìm thấy</p>
	</div>
{/if}
