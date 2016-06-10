<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
{include file='../elements/meta.tpl'}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
<script type="text/javascript" src="webroot/js/GoogleMapControl.js"></script>

</head>
<body onload="initialize({$map.map_ip})">

<div class="Zoom">
	<div class="ZoomView">
	</div>
</div>



<div id="wrapper">

	<span id="icon_category"></span>
	{include file='../elements/btm_category.tpl'}
	
	<!--header -->
	{include file='../elements/header.tpl'}
	<!--end header -->

	<div id="Content" class="bg">

		<div class="use">
			<div class="pad">
				{$site_map}
			</div>
			<div class="wap-x20">
				{include file='../elements/sidebar.tpl'}
			</div>

			<div class="wap-x60">
				<div class="mar">
					{include file=$content}
				</div>
			</div>
			
			<div class="wap-x20">
				<div class="mar bor" id="hotline">
					<h3 class="bor-btm pad">HOTLINE HỖ TRỢ</h3>
					<ul id="">
						{foreach from=$support item=list}
						<li>
							<span>{$list.name}</span>
							<span class="phone">{$list.phone}</span>
						</li>
						{/foreach}
					</ul>
				</div>
				
				
				{if $other neq NULL}
				<div class="mar">
					<h2 class="bor-btm">Các tin khác</h2>
					<div class="mar-mid" id="news_other">
						{foreach from=$other key=k item=list}
						<p class="mar-btm"><a href="{$list.link}">{$list.name} ({$list.created})</a></p>
						{/foreach}
					</div>
				</div>
				{/if}
			
				{if $other neq NULL}
				<div class="mar-3top mar">
					<h2 class="bor-btm">Tin xem nhiều nhất</h2>
					<div class="mar-mid" id="news_other">
						{foreach from=$hot key=k item=list}
						<p class="mar-btm"><a href="{$list.link}">{$list.name} ({$list.created})</a></p>
						{/foreach}
					</div>
				</div>
				{/if}
				
				
			</div>
			
			<div class="clear"></div>
			
		</div>
		
	</div>
	
	<!--footer -->
	{include file='../elements/footer.tpl'}
	<!--end footer -->
</div>

</body>
</html>