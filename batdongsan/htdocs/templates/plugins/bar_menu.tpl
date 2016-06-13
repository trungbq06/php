{if $bar|@count > 1}
<div class="bor pad shadow">
	<h3 class="bor-btm align-lft"><a href="#" class="cufon">Danh mục</a></h3>
	<ul class="bar_menu">
		{foreach from=$bar key=k1 item=list}
		<li><a href="{$list.alias}">{$list.name}</a></li>
		{/foreach}
	</ul>

</div>
{/if}
