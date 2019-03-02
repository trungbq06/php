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
					<MARQUEE class="text_color_red"><h4>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h4></MARQUEE>
					
						<div class="center_title_bar">Mua HÀng Online</div>						
							<div class="text_margin">	
							<p><h2><b>I. Cách thức mua hàng từ xa:</b></h2></p>
							<br>
							<p>+ Tìm hiểu về Sản phẩm: được phân loại theo tính năng, khách hàng căn cứ nhu cầu sử dụng điện thoại để chọn được sản phẩm ưng ý cho mình. (Lưu ý: khách hàng nên kích vào sản phẩm để xem kĩ chi tiết tính năng, hình ảnh,... trước khi quyết định mua hàng. Chúng tôi cam kết đảm bảo hàng khi đến tay người tiêu dùng sẽ đúng như niêm yết trên website.)</p>
							<p>+ Bạn có thể sử dụng công cụ tìm kiếm để định vị nhanh chóng sản phẩm mà bạn cần tìm (hỗ trợ tìm kiếm tiếng Việt với chuẩn Unicode). Ngoài ra website còn cung cấp nhiều tính năng khác như so sánh tính năng các sản phẩm với nhau, tạm tính đơn hàng, in hóa đơn...</p>
							<p>+ Chúng tôi khuyên bạn nên khởi tạo một tài khoản để chúng tôi có thể hỗ trợ bạn tối đa: theo dõi đơn hàng và có chính giá cho khách hàng quen, hỗ trợ tối đa tìm hiểu về sản phẩm, chiết khấu, chính sách giá...</p>
							<p>+ Sau khi đã khởi tạo tài khoản, Quý khách có thể chọn mua hàng và đặt hàng trên website của chúng tôi. Mọi thông tin về đơn đặt hàng của Quý khách sẽ được gửi về cho chúng tôi, chúng tôi sẽ tiến hành xử lý đơn hàng và phản hồi lại cho Quý khách.</p>
							<br>
							<p><h2><b>II. Phương thức thanh toán: ( bạn hãy chọn phương án phù hợp với mình nhất)</b></h2></p>
							<br>
							<p>1. Thanh toán trực tiếp bằng tiền mặt:<p>
							<p>+ Với những sản phẩm Cửa hàng có hàng sẵn trong kho Khách hàng có thể đến trực tiếp Cửa hàng mua hàng và thanh toán. (Đặc biệt trong nội thành Hà Nội chúng tôi sẽ giao hàng tận nơi và khách hàng thanh toán 100% tiền ngay sau khi nhận được hàng.)</p>
							<p>2. Thanh toán chuyển khoản:
							<p>- Đối với Quý khách hàng ở các tỉnh xa muốn mua hàng. Quý khách có thể lựa chọn các hình thức chuyển khoản.</p>
							<br>
							<p><h2><b>III. Phương thức vận chuyển:</b></h2></p>
							<br>
							<p>- Ngay sau khi nhận được tiền, chúng tôi sẽ chuyển hàng ngay theo đúng địa chỉ người nhận theo yêu cầu của Quý khách qua các dịch vụ chuyển phát nhanh (EMS Bưu chính Việt Nam, Tín Thành, Hợp Nhất, ViettelPost, Gió Nam...). Quý khách sẽ nhận được hàng trong vòng 24-48h. Quý khách ở xa hoàn toàn yên tâm với phương thức này.</p>
							<p>- Ngoài ra chúng tôi còn có thể chuyển hàng qua hệ thống xe khách Hoàng Long cho các khách hàng có nhu cầu nhận hàng nhanh chóng trong vòng 3-5 tiếng.</p>
							<p>Miễn phí vận chuyển đối với khách hàng ở các tỉnh xa trên toàn quôc !</p>
							<br>
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
<div class="quangcao">
<IMG src="css/images/quangcao.png">
</div>
</body>
</html>