<div class="">
		
	{foreach from=$result key=k item=list}
	<div class="wap-x33">
		<div class="mar shadow posts">
			<h3 class="pad bg gray"><a href="{$list.link}">{$list.name} <span style="font-weight: normal;">({$list.number})</span></a></h3>
			<div class="pad">
				{foreach from=$list.posts item=posts}
				<div class="bor-btm">
					<div class="wap-x15">
						<div class="img bor">
							<a href="{$posts.link}" title="{$posts.name}"><img src="{$posts.img}"></a>
						</div>
					</div>
					
					<div class="wap-x85">
						<div class="mar-slft">
							<p class="name"><b>{$posts.local}</b> - <a href="{$posts.link}" title="{$posts.name}">{$posts.name}</a></p>
							<p class="font-x11">
								<span class="bold">{$posts.created}</span>
								<span> &nbsp-&nbsp Xem: {$posts.view}</span>
								<span class="rg bold">Giá: {$posts.price}</span>
							</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
	
</div>
