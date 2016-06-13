<div id="Home">
	<div class="use" id="ProductCate">
		<div class="pad">
			<p class="pad-top">{$category.site_map}</p>
			<h1>{$category.description}</h1>
			<ul>
				{foreach from=$category.child item=list}
				<li><a href="{$list.link}">{$list.name}</a></li>
				{/foreach}
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="use">
	<div class="mar pad bg shadow">
		<b>Sản phẩm, {$title}</b> (Có <b class="red">{$number}</b> sản phẩm)
	</div>
	{foreach from=$result item=list}
	<div class="wap-x25">
		{include file="../elements/product.tpl"}
	</div>
	{/foreach}
	<div class="clear"></div>
	{if $fields > $pagesize}<div class="paging mar-top">{$paging}</div>{/if}
</div>


