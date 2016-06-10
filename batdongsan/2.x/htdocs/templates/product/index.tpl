{$backcrum}
<div class="bor pad bg">
	{foreach from=$list key=k item=list}
	<div class="wap-x50">
		<div class="pcat">
			<h3 class="mar-sbtm"><a href="{$list.link}">{$list.name}</a></h3>
			<div class="wap-x25 img mar-rgt"><a href="{$list.link}"><img src="{$list.img}" height="83"></a></div>
			<div class="align-jus">{$list.description}</div>
			<div class="clear"></div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
	
</div>