
<div class="">
	{foreach from=$result key=k item=list}
	<div class="wap-x25">
		<div class="bor shadow mar pages">
			<h3 class="pad bg gray"><a href="{$list.link}">{$list.name} ({$list.pages})</a></h3>
			<div class="pad">
				{foreach from=$list.page item=page}
				<div class="bor-btm">
					<div class="wap-x20">
						<div class="img bor">
							<a href="{$page.link}"><img alt="" src="{$page.img}"></a>
						</div>
					</div>
					<div class="wap-x80">
						<div class="mar-lft">
							<p><a href="{$page.link}">{$page.name}</a></p>
							<p>Bày bán 384 sản phẩm</p>
							<p>Địa điểm: Hà Nội</p>
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
