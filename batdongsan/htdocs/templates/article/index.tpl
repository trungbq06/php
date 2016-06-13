<div id="backcrum">
	<a href="./" class="home">Trang chủ</a>
	<a href="#">Tin tức</a>
</div>
<div class="mar-btm bor pad bg">
	{foreach from=$result item=list}
	<div class="news_title">
		<a href="">{$list.name}</a>
	</div>
	
	<div class="pad-mid ">
		<div class="wap-x60">
			{foreach from=$list.article1 item=ar1}
			<div class="wap-x40 img mar-rgt bor">
				<a href="{$ar1.link}"><img src="{$ar1.img}"></a>
			</div>
			<h3><a href="{$ar1.link}">{$ar1.name}</a></h3>
			<p class="mar-top mar-sbtm">Ngày {$ar1.time}</p>
			<p>{$ar1.description}</p>
			{/foreach}
		</div>
		
		<div class="wap-x40">
			<div class="mar-2lft news_index_b2">
				{foreach from=$list.article2 item=ar2}
				<p><a href="{$ar2.link}">{$ar2.name}</a></p>
				{/foreach}
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	{/foreach}
</div>
