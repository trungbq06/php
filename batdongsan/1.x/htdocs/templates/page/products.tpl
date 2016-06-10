<h3 class="bor pad mar bg gray">Danh sách sản phẩm</h3>
{if $product neq NULL}
	{foreach from=$product item=list}
	<div class="wap-x25">
		<div class="mar">
			<div class="img">
				<a href="{$list.link}" title="{$list.name}"><img alt="" src="{$list.image}" height=""></a>
			</div>
			<div class="pad align-cen">
				<p class="name"><a href="{$list.link}" title="{$list.name}">{$list.name}</a></p>
				<p><b class="red">{$list.price}</b></p>
			</div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
	{if $fields > $pagesize}<div class="paging pad">{$paging}</div>{/if}
{else}
	<div class="mar bor pad-big">
		<h3 class="bor-btm">Thông tin phản hổi</h3>
		<p>Không có sản phẩm nào được tìm thấy</p>
	</div>
{/if}
