<?php
	include '../dtos/clsProducts.php';
	include '../dtos/clsGroupProducts.php';
	include '../dtos/clsProductImages.php';
	
	require '../model/GroupProductsModel.php';
	require '../model/ProductsModel.php';
	require '../model/ProductImagesModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Liên Hệ</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	
</head>
<body>
<!-- Top -->
<?php
	include 'page/header_image.php';
?>
<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">
		
		<!-- Search, etc -->
		<div class="options">
			<div class="search">
				<form action="seachproduct.php" method="get" >
				<span class="field"><input type="text" class="blink" value="Tìm Kiếm" title="SEARCH" name="seach"/></span>
				<input type="submit" class="search-submit" value="GO" />
				</form>
			</div>
			<?php
				include 'page/header_menu.php';
			?>
		</div>
		<!-- End Search, etc -->
		
		<!-- Content -->
		<div id="content">
			
			<!-- Tabs -->
			<div class="tabs">
			</div>
			<!-- Tabs -->
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">		
				
					<div class="full_center">		
						<div class="left_content">
						<?php
							include 'page/body_left.php'
						?>	
						</div><!-- end of left content -->
   
					<div class="center_content">
						<MARQUEE class="text_color_red"><h4>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h4></MARQUEE>					
						<div class="center_title_bar">Liên Hệ</div>
							<div class="text_margin">
								<div class="contact_margin">
								<br><br><br>
								<h2><b>Nguyễn Duy Quang</b></h2>
								<br>
								<table>
									<tr>
										<td><img src="css/images/con_address.png"></td>
										<td>197 Lê Đại Hành</td>
									</tr>
									<tr>
										<td></td>
										<td>Ninh Bình</td>
									</tr>
									<tr>
										<td></td>
										<td>84</td>
									</tr>
									<tr>
										<td></td>
										<td>Việt Nam</td>
									</tr>
									<tr>
									</tr>
									<tr>
									</tr>									
									<tr>
										<td><img src="css/images/emailButton.png"></td>
										<td><a href="mailto:smilequangkk@gmail.com">smilequangkk@gmail.com</a>
									</tr>
									<tr>
										<td><img src="css/images/con_tel.png"></td>
										<td>0303876543</td>
									</tr>
									<tr>
										<td><img src="css/images/con_mobile.png"></td>
										<td>0123456798</td>
									</tr>
									<tr>
									</tr>
									<tr>
									</tr>
									<tr>
										<td><img src="css/images/con_info.png"></td>
										<td>Hãy liên hệ với chúng tôi để được hỗ trợ một cách tốt nhất.</td>
									</tr>									
								</table>
								<br>
								
							</div>
							<iframe width="518" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=Keangnam+Hanoi+Apartments+For+Rent,+Ph%E1%BA%A1m+H%C3%B9ng,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=keang&amp;sll=21.02274,105.836964&amp;sspn=0.096782,0.195007&amp;t=m&amp;ie=UTF8&amp;hq=Keangnam+Hanoi+Apartments+For+Rent,+Ph%E1%BA%A1m+H%C3%B9ng,&amp;hnear=T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;ll=21.022662,105.836964&amp;spn=0.075662,0.078182&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=Keangnam+Hanoi+Apartments+For+Rent,+Ph%E1%BA%A1m+H%C3%B9ng,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=keang&amp;sll=21.02274,105.836964&amp;sspn=0.096782,0.195007&amp;t=m&amp;ie=UTF8&amp;hq=Keangnam+Hanoi+Apartments+For+Rent,+Ph%E1%BA%A1m+H%C3%B9ng,&amp;hnear=T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam&amp;ll=21.022662,105.836964&amp;spn=0.075662,0.078182" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small>

							</div>
						</div><!-- end of center content -->
					   
						<div class="right_content">							
						<?php
							include 'page/body_right.php';
						?>
						</div><!-- end of right content -->   
					</div>		
				</div>
				
				<!-- Brands -->
				<div class="brands">
					<h3>Brands</h3>
					<div class="logos">
					<?php
						include 'page/bottom_logo.php';
					?>	
					</div>
				</div>
				<!-- End Brands -->
				
				<!-- Footer -->
				<div id="footer">
					<?php
						include 'page/bottom_menu.php'
					?>
					<MARQUEE class="text_color_red"><h2>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h2></MARQUEE>						
					<div class="right">
					<br>
						&copy; Mobile Design by <a href="#" target="_blank" title="CSS Templates">SmileQuangKK.com</a>
					</div>
				</div>
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
<div class="quangcao">
<IMG src="css/images/quangcao.png">
</div>
</body>
</html>