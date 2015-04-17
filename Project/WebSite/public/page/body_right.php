<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Body Righ</title>
</head>
<body>
						
	<div class="title_box">Hỗ Trợ Trực Tuyến</div>  
	<div class="border_box">
		<div class="product_title"><span>Tư Vẫn Bán Hàng<span></div>
		<div class="product_img"><img src="css/images/online.gif"></div>
		<div class="product_title"><span>Hỗ Trợ Kĩ Thuật<span></div>
		<div class="product_img"><img src="css/images/online.gif"></div>
	</div>     
	
	<div class="title_box">Lượt Khác Tham Quan</div>  
	<div class="border_box">
	<table cellpadding="0" cellspacing="0" style="width: 90%;">
	<tbody>
	<tr align="left">
	<td><img src="css/images/vtoday.png" alt="mod_vvisit_counter" title="2012-11-26"></td>
	<td>Hôm nay</td>
	<td align="right">215</td>
	</tr>
	<tr align="left">
	<td><img src="css/images/vyesterday.png" alt="mod_vvisit_counter" title="2012-11-25"></td>
	<td>Hôm qua</td><td align="right">273</td></tr><tr align="left">
	<td><img src="css/images/vweek.png" alt="mod_vvisit_counter" title="2012-11-24 -&gt; 2012-11-26"></td>
	<td>Tuần này</td><td align="right">772</td>
	</tr>
	<tr align="left">
	<td><img src="css/images/vlweek.png" alt="mod_vvisit_counter" title="2012-11-17 -&gt; 2012-11-24"></td>
	<td>Tuần trước</td><td align="right">3588</td>
	</tr>
	<tr align="left">
	<td><img src="css/images/vmonth.png" alt="mod_vvisit_counter" title="2012-10-31 -&gt; 2012-11-26"></td>
	<td>Tháng này</td><td align="right">15531</td></tr><tr align="left">
	<td><img src="css/images/vlmonth.png" alt="mod_vvisit_counter" title="2012-10-01 -&gt; 2012-10-31"></td>
	<td>Tháng trước</td>
	<td align="right">24510</td>
	</tr>
	<tr align="left">
	<td><img src="css/images/vall.png" alt="mod_vvisit_counter" title="Vinaora Visitors Counter"></td>
	<td>Tất cả</td>
	<td align="right">155951</td>
	</tr>
	</tbody>
	</table>
	</div>	
	
	<div class="title_box">Sản Phẩm Bán Chạy</div>  
	<?php
	$Products=getProductHot();
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
		<a href="#"><img src="css/images/like_facebook.png" alt="" title="" border="0" /></a>
	</div>  
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/unlock4.jpg" alt="" title="" border="0" /></a>
	</div>  
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/htcwildfires-dung.jpg" alt="" title="" border="0" /></a>
	</div>    	 
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/OneXplus-banner.jpg" alt="" title="" border="0" /></a>
	</div>   
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/visa-mastercard.jpg" alt="" title="" border="0" /></a>
	</div>   
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/39868626left_tragop.png" alt="" title="" border="0" /></a>
	</div> 
	<div class="banner_adds"> 
		<a href="#"><img src="css/images/2889343737banner_cung_mua.png" alt="" title="" border="0" /></a>
	</div>  
	
</body>