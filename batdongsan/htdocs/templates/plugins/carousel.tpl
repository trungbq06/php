<div id="partner" class="mar-2top">
	<div class="list_carousel shadow">
		<ul id="foo">
			{foreach from=$gallery_p4 key=k item=list}
			<li>
				<div class="box-item">
					<a href="{$list.link}" class="img" title="{$list.name}"><img src="{$list.img}" height="60"></a>
				</div>
			</li>
			{/foreach}
			
		</ul>
		<div class="clearfix"></div>
		<a id="prev" class="prev" href="#"><img  src="webroot/images/icon/prev.png"/></a>
		<a id="next" class="next" href="#"><img  src="webroot/images/icon/next.png"/></a>
	</div>
</div>