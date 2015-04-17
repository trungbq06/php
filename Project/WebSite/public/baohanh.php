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
	<title>Bảo Hành</title>
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
						</div>
						<!-- end of left content -->
   
					<div class="center_content">	
						<MARQUEE class="text_color_red"><h2>MobileShop Chuyên cung cấp các loại điện thoại cao cấp, chính hãng.</h2></MARQUEE>					
						<div class="center_title_bar">Bảo Hành</div>
							<div class="text_margin">
							<br><br><br>
							<p><h2>CÁC QUI ĐỊNH VỀ BẢO HÀNH ĐIỆN THOẠI DI ĐỘNG</h2></p>
							<br><br>
							<p><h2>MobileShop</h2></p>
							<p>MobileShop  xin trân trọng cảm ơn quí khách đã tin tưởng và dùng sản phẩm của chúng tôi.Chúng tôi cam đoan sẽ luôn mang đến cho các bạn những sản phẩm chính hãng mới – xịn – độc 100% mà giá thành luôn luôn rẻ nhất.Bên cạnh đó là các chế độ khuyến mãi lớn khi quí khách mua hàng !!!</p>
							<br>
							<p>Để phục vụ quí khách được tốt hơn chúng tôi xin thông báo chế độ bảo hành của cửa hàng như sau :</p>
							<br>
							<p><h2>1.Bảo hành :</h2></p>
							<br>
							<p>- Cửa hàng bảo hành trong vòng 12 tháng với mọi sản phẩm .</p>
							<br>
							<p>- Đặc biệt – Áp dụng chế độ 1 đổi 1 trong 10  ngày  đầu.</p>
							<br>
							<p><h2>2.Điều kiện đuợc bảo hành</h2></p>
							<br>
							<p>- Máy phải mang đến cửa hàng cùng phiếu bảo hành.Máy chỉ được bảo hành khi có phiếu bảo hành và ghi đầy đủ các dữ liệu cần thiết trùng khớp với số IMEI trong phiếu bảo hành.Máy chỉ được bảo hành khi có phiếu bảo hàng ( chúng tôi có giữ lại một cuống phiếu bảo hành để kiểm tra thẻ bảo hành của khách khi cần ) không được tẩy xóa sửa chữa.</p>
							<br>
							<p>- Bảo hành phần mềm theo chế độ bảo hành của nhà sản xuất với điều kiện phiếu còn trong thời gian hiệu lực và tem dán bảo hành còn nguyên</p>
							<br>
							<p><h2>3.Cửa hàng sẽ không chịu trách nhiệm bảo hành trong những truờng hợp sau</h2></p>
							<br>
							<p>- Máy không được sử dụng đúng với hướng dẫn trong sổ tay hướng dẫn.</p>
							<br>
							<p>- Màn hình LCD bị mất nét, đen trắng sọc màn hình sau khi sử dụng.Không bảo hành thẻ nhớ, tai nghe không nghe.</p>
							<br>
							<p>- Cảm ứng lệch không nhận .</p>
							<br>
							<p>- Vỏ thân máy bị trầy xước, có vết  mốc, gỉ, ăn mòn, bị nứt vỡ, gẫy, biến dạng, cháy nổ, có chất lỏng, dây nguồn do đóng mở.</p>
							<br>
							<p>- Máy để trong môi trường ẩm ướt ( phòng lạnh ), Nhiệt độ cao, ngoài nắng, gần lửa, các nguồn nhiệt vượt quá nhiệt độ cho phép( dưới 15*C và trên 40*C )</p>
							<br>
							<p>- Máy có mùi khét, mùi lạ tại một phần hoặc toàn bộ máy. Máy bị cấn dẫn đến bị cong Mainboard.</p>
							<br>
							<p>- Máy bị ướt mưa, rơi  vào nước, rớt xuống đất hoặc va chạm vào vật cứng .</p>
							<br>
							<p>- Khách hàng tự ý can thiệp vào bên trong máy hoặc tự ý làm phần mền (không phải do cửa hàng)</p>
							<br>
							<p>- Máy trong tình trạng security code, lock sim card, contact service, màn hình không đọc được IMEI (số IMEI không hiên lên nàm hình )</p>
							<br>
							<p>- Thay đổi ,làm gẫy Anten hoặc dán keo hoặc làm máy không tản nhiệt được</p>
							<br>
							<p>- Phiếu bảo hành bị mất hoặc không chính xác với  cuống phiếu trung tâm .</p>
							<br>
							<p>- Máy đem bảo hành sau khi hết hạn bảo hành.</p>
							<br>
							<p>- Trung tâm bảo hành không giải quyết mọi lý do trả lại má</p>
							<br><br><br>
							<p style="text-align:center"><b>CHÚNG TÔI XIN TRÂN TRỌNG CẢM ƠN.</b></p>
							</div>
						</div><!-- end of center content -->
						
						<div class="right_content">	
						<?php
							include 'page/body_right.php';
						?>
						</div>
						<!-- end of right content -->   
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