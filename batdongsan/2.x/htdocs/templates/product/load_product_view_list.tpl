<ul class="pro_btm">
	{foreach from=$pro_new item=list}
	<li>
		<a href="{$list.link}">
			<span class="img">
				<img alt="{$list.name}" src="{$list.img}">
			</span>
			<span class="name">{$list.name}</span>
			<span class="price">{$list.price_sale}</span>
		</a>
	</li>
	{/foreach}
</ul>
