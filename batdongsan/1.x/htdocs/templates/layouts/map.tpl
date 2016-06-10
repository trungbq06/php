<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="{$domain}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

{include file='../elements/meta.tpl'}

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
<script type="text/javascript" src="webroot/js/GoogleMapControl.js"></script>


</head>
<body onload="initialize({$info.map1})">
<div id="wrapper">

	<!--header -->
	{include file='../elements/header.tpl'}
	<!--end header -->
	
	<div id="bd02" class="pad-big">
		
		<!--  
		<div class="img">
			<img alt="" src="{$menu_active.img}">
		</div>
		-->
			
		<div class="use">
			{include file=$content}
		</div>
		
	</div>
			
	<!--footer -->
	{include file='../elements/footer.tpl'}
	<!--end footer -->
</div>

</body>
</html>