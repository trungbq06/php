<h3 class="name">{$category}</h3>
<div class="mar-top">
	{if $num_fields neq 0}
		{foreach from=$list key=k item=list}
		<div class="news bor-btm">
			<div class="wap-x25">
				<div class="mar-rgt ava">
					<a href="{$list.link}" title="{$list.name}"><img alt="" src="{$list.img}"></a>
				</div>
			</div>
			<div class="wap-x75">
				<h3 class="mar-btm title_name"><a href="{$list.link}" title="{$list.name}">{$list.name}</a></h3>
				<p class=" align-jus">{$list.description}</p>
			</div>
			<div class="clear"></div>
		</div>
		{/foreach}
		{if $num_fields > 6}<div class="paging">{$paging}</div>{/if}
		
	{else}
	<h3 class="align-cen pad">{$trans.news_none}</h3>
	{/if}	
</div>
