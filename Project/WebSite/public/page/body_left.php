<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Body Left</title>
</head>
<body>
						
	<div class="title_box">Danh Mục Sản Phẩm</div>  
	<ul class="left_menu">
	<?php
		$GroupProducts = getGroupProducts();
		foreach($GroupProducts as $item)
		{		
	
	?>
	<li class="even"><a href="product.php?item=<?php echo $item->Id ?>"><?php echo $item->Name ?></a></li>
	<?php
			
		}
	?>
	</ul> 
															
	<div class="title_box">Sản Phẩm Mới</div>  
	<?php
	$Products=getProductNew();
	foreach($Products as $item)
	{
	?>	
	<div class="border_box">
	<span><?php echo $item->Name ?></span>
	<div class="image">
		<a href="productdetail.php?item=<?php echo $item->Id ?>"><img src="css/images/<?php echo getProductImage($item->Id)->Name ?>"/></a>
	</div>
	<p class="text_color_red"><strong><image src="css/images/cart.gif" width="27" height="23"><?php echo $item->RetaiPrice ?>đ</strong></p>
	</div> 
	<?php
	}
	?>
	 
	<div class="banner_adds">
		<a href="#"><img src="css/images/new.gif" alt="" title="" border="0" /></a>
	</div> 
	<div class="banner_adds">
		<a href="#"><img src="css/images/bb9900-dung.jpg" alt="" title="" border="0" /></a>
	</div>   
	<div class="banner_adds">
		<a href="#"><img src="css/images/HoNgocHa-S3.jpg" alt="" title="" border="0" /></a>
	</div> <div class="banner_adds">
		<a href="#"><img src="css/images/Ion-banner.jpg" alt="" title="" border="0" /></a>
	</div> <div class="banner_adds">
		<a href="#"><img src="css/images/Nokia-Lumia.jpg" alt="" title="" border="0" /></a>
	</div> 
	<div class="banner_adds">  
		<marquee>
		<a href="#"><img src="css/images/htc-desires-dung.jpg" alt="" title="" border="0" /></a>
		<a href="#"><img src="css/images/untitled-1asdsad.jpg" alt="" title="" border="0" /></a>
		<a href="#"><img src="css/images/ios61.jpg" alt="" title="" border="0" /></a>
		<a href="#"><img src="css/images/ip service.jpg" alt="" title="" border="0" /></a>
		<a href="#"><img src="css/images/visa.jpg" alt="" title="" border="0" /></a>

		</marquee>
	</div>  
</body>