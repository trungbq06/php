<div id="languages">
	<ul>
		{foreach from=$gen_lang key=k item=item}
		<li><a href="javascript:void(0)" data-id="{$k}"><!-- <span>{$item.name}</span> --> <i id="flag_{$item.id}"></i></a></li>
		{/foreach}
	</ul>
	<div class="clear"></div>
</div>
