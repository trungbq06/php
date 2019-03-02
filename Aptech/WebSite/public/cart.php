<?php
	include '../dtos/clsProducts.php';
	include '../dtos/clsGroupProducts.php';
	include '../dtos/clsProductImages.php';
	include '../dtos/clsCart.php';
	
	require '../model/GroupProductsModel.php';
	require '../model/ProductsModel.php';
	require '../model/ProductImagesModel.php';
	require '../model/CartModel.php';
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
						<MARQUEE class="text_color_red"><h2>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h2></MARQUEE>					
						<div class="center_title_bar">Cart</div>
							<div class="text_margin" style="text-align:center">	
								<p><b><h1>Qúy khách đã đặt hàng thành công</h1></b></p><br>
								<?php
								$CartName = $_POST["txtname"];
								$CartPhone = $_POST["txtdienthoai"];
								$CartEmail = $_POST["txtmail"];
								$CartAddress = $_POST["txtdiachi"];
								$CartIdProduct = $_POST["productSelectedId"];								
								insertCart($CartName, $CartPhone, $CartEmail, $CartAddress, $CartIdProduct);
								?>
								<h2>Tên khách hàng: <?php echo $CartName ?><br><br>
								Số điện thoại: <?php echo $CartPhone ?><br><br>
								Email: <?php echo $CartEmail ?><br><br>
								Địa chỉ: <?php echo $CartAddress ?><br><br>
								Đã đặt mua sản phẩm có mã: <?php echo $CartIdProduct ?><br><br></h2>.
								<p><a href="home.php"><b>Click here</a> để chuyển về trang chủ</p>								
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