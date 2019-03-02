<?php
	include '../dtos/clsProducts.php';
	include '../dtos/clsGroupProducts.php';
	include '../dtos/clsProductImages.php';
	include '../dtos/clsService.php';
	
	require '../model/GroupProductsModel.php';
	require '../model/ProductsModel.php';
	require '../model/ProductImagesModel.php';
	require '../model/ServiceModel.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>MobileShop</title>
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
						<MARQUEE class="text_color_red"><h2>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h2></MARQUEE>					
						<div class="center_title_bar">Dịch Vụ</div>
						<div class="text_margin">
							<?php
								$service = getService();
								foreach($service as $item)
								{
							?>
							<p><b><h2 style="text-align:center"><?php echo $item->Name; ?></h2></b></p>
							<br>
							<p><b>MobileShop</b> nhận <?php echo $item->Name; ?> bị khóa mạng, xách tay từ  Anh, Pháp, Úc, Nhật, Mỹ, Canada bằng phần mềm xài ok tất cả các sim ở VN .</p>
							<br>
							<p>- Thời gian xử lý từ 05 ->15 phút.</p>
							<br>
							<p><?php echo $item->Body; ?></p>
							<br>
							<p><b>- Unlock Network (Mở khóa mạng trực tiếp – Direct Unlock)</p>
							<p>- Unlock user code (Mở khóa máy,khóa bàn phím,khóa chức năng..)</p>
							<p>- Sửa lỗi phần mềm</p>
							<p>- Sử dụng tất cả các mạng 3G của Việt Nam</p>
							<p>- 3G – Mobifone (W Mobile Vietnam 452 01)</p>
							<p>- 3G – Vinaphone (W Vina Vietnam 452 02)</p>
							<p>- 3G – Viettel (W Viettel Vietnam 452 04)</b></p>
							<hr><br>
							<?php
								}
							?>
							
							<div class="text_color_red">
							<p><b><h2>Để biết thêm thông tin chi tiết xin liên hệ:</h2></b></p>
							<br>
							<p>MobileShop :</p>
							<p>HOTLINE: 012345679</p>
							<p>TEL: 987654321</p>
							<p>Website : http://mobileshop.com</p>
							<p>Địa chỉ: Toàn Quốc.</p>
							<br>
							<br>
							<p style="text-align:center"><b>CHÚNG TÔI XIN TRÂN TRỌNG CẢM ƠN.</b></p>					
							</div>						
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
</form>
<div class="quangcao">
<IMG src="css/images/quangcao.png">
</div>
</body>
</html>