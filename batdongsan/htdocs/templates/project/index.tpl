<h3 class="name"><span class="name_cont">{$category}</span><span class="name_last">&nbsp</span></h3>
<div class="bor">
	{if $num_fields eq 0}
		<div class=" bor pad align-cen">
			<h3>Không có sản phẩm</h3>
		</div>
	{/if}
	{foreach from=$list key=k item=list}
	<div class="wap-x33">
		<div class="pro_list">
			<h3 class="align-cen"><a href="{$list.link}">{$list.name}</a></h3>
			<div class="img mar-smid"><a href="{$list.link}"><img src="{$list.img}"></a></div>
			<p class="align-jus">{$list.description}</p>
			<a href="{$list.link}" class="pro_view">Chi tiết</a><div class="clear"></div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
	
	{if $num_fields > 9}<div class="paging">{$paging}</div>{/if}
	
</div>