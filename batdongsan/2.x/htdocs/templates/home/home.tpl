

<h3 class="mar pad bor bg gray">Sản phẩm nổi bật, được xem nhiều nhất</h3>
<div class="">
{if $hot neq NULL}
	{foreach from=$hot item=list}
	<div class="wap-x25">
		<div class="mar">
			<div class="img pad-tini bor">
				<a href="{$list.link}"><img alt="" src="{$list.image}" height=""></a>
			</div>
			<div class="mar-smid">
				<p class="name bold"><a href="{$list.link}">{$list.name}</a></p>
				<p><b class="red">{$list.price}</b></p>
			</div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
{else}
	<div class="mar bor shadow pad-big">
		<h3 class="bor-btm">Thông tin phản hổi</h3>
		<p>Không có sản phẩm nào được tìm thấy</p>
	</div>
{/if}
</div>

<h3 class="mar pad bor bg gray">Sản phẩm mới nhất</h3>
<div class="">
{if $new neq NULL}
	{foreach from=$new item=list}
	<div class="wap-x25">
		<div class="mar">
			<div class="img">
				<a href="{$list.link}" title="{$list.name}"><img alt="" src="{$list.image}" height=""></a>
			</div>
			<div class="pad bg align-cen">
				<p class="name"><a href="{$list.link}" title="{$list.name}">{$list.name}</a></p>
				<p><b class="red">{$list.price}</b></p>
			</div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
{else}
	<div class="mar bor shadow pad-big">
		<h3 class="bor-btm">Thông tin phản hổi</h3>
		<p>Không có sản phẩm nào được tìm thấy</p>
	</div>
{/if}
</div>
<div style="margin:0 auto;width:1000px">
{literal}
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 970*90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-7751440498976455"
     data-ad-slot="2546258054"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
{/literal}
</div>
