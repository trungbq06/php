<h3 class="name"><a href="{$list.link}" class=""><b>{$trans.product_search}</b></a></h3>
<div class="clear"></div>
<div class="bdcont">
	{if $num_fields eq 0}
		<div class=" bor pad align-cen">
			<h3>{$trans.product_none}</h3>
		</div>
	{/if}
	{foreach from=$list key=k item=list}
		{include file="../elements/product.tpl"}
	{/foreach}
	<div class="clear"></div>
	
	{if $num_fields > 12}<div class="paging">{$paging}</div>{/if}
</div>