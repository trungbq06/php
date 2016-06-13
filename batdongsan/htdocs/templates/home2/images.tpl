<div>
	<div class="wap-x70">
		<div class="mar-2rgt">

			<h3 class="title"><b>Hình ảnh</b></h3>
			<div class="bor pad bg">
			
				<div class="fotorama bor" data-width="628" data-height="366">
					{foreach from=$images key=k item=list}
					<a href="{$list.img}"><img src="{$list.img}"></a>
					{/foreach}
				</div>
			
			</div>

		</div>
	</div>
	
	<div class="wap-x30">
		<div class="">
		{include file='../elements/sidebar.tpl'}
		</div>
	</div>
	
	<div class="clear"></div>
</div>



<h3 class="title mar-2top"><b>Video</b></h3>
<div class="bor pad bg">
	<div class="wap-x70">
		<div class="mar-2rgt">
			{foreach from=$videos_default key=k item=list}
			<iframe id="show_video" width="100%" height="420" src="{$list.embed}" frameborder="0" allowfullscreen></iframe>
			{/foreach}
		</div>
	</div>

	<div class="wap-x30">
		{foreach from=$videos key=k item=list}
		<div class="bor-btm">
			<div class="wap-x40 img mar-rgt">
				<a href="javascript:void(0)" link="{$list.embed}" class="video_list">
					<img src="{$list.img}">
				</a>
			</div>
			<h3><a href="javascript:void(0)" link="{$list.embed}">{$list.name}</a></h3>
			<div class="clear"></div>
		</div>
		{/foreach}
	</div>

	<div class="clear"></div>
</div>