<h3 class="title">{$category}</h3>
<div class="bor bg pad-sml mar-mid">
	{if $num_fields eq 0}
		<div class=" bor pad align-cen">
			<h3>{$trans.product_none}</h3>
		</div>
	{/if}
	<div id="proj01">
	{foreach from=$list key=k item=list}
	<div class="wap-x33">
	
		<div class="project">
			<h3 class="mar-btm"><a href="{$list.link}">{$list.name}</a></h3>
			<div class="wap-x50">
				<div class="img mar-rgt bor"><a href="{$list.link}"><img src="{$list.img}"></a></div>
			</div>
			<div class="wap-x50">
				<p class="address">{$list.address}</p>
				<p class="mar-top">Khởi công: {$list.started}</p>
				<p class="align-rgt mar-stop"><a href="{$list.link}">Chi tiết dự án »</a></p>
			</div>
			<div class="clear"></div>
		</div>
		
	</div>
	{/foreach}
	<div class="clear"></div>
	</div>
	{if $num_fields > 6}<div class="paging">{$paging}</div>{/if}
</div>