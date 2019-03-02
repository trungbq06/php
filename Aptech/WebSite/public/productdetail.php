<?php
	include '../dtos/clsProducts.php';
	include '../dtos/clsGroupProducts.php';
	include '../dtos/clsProductImages.php';
	include '../dtos/clsDescriptionProd.php';
	
	require '../model/GroupProductsModel.php';
	require '../model/ProductsModel.php';
	require '../model/ProductImagesModel.php';
	require '../model/DescriptionProdModel.php';

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
	
	<!-- Login -->
	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
	<script src="js/login.js" type="text/javascript"></script>
	
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
					
						<div class="center_title_bar">Chi Tiết Sản Phẩm</div>
							<div class="text_margin">
								<?php
								$productId = $_REQUEST["item"];
								$SelectedProduct=getProductDetail($productId);
								
								
									if($SelectedProduct!=NULL)
									{			
								?>	
								<div class="pd_img">	
									<img src="css/images/<?php echo getProductImage($SelectedProduct->Id)->FullName ?>"/>
								</div>
								<br>
								<b><h2><?php echo $SelectedProduct->Name ?></h2></b>
								<br>								
								<hr noshade="noshade" size="1px">
								<br>
								<p><b><h4>Mã hàng: <?php echo $SelectedProduct->Id ?></h4></b></p>
								<br>
								<p style="text-align:justify"><?php echo $SelectedProduct->Information ?></p>
								<br>
								<br>
								<table>
									<tr>	
										<td align="right"><p><b><h2>Giá: </h2></b></p></td>
										<td class="text_color_red"><p><b><h2><?php echo $SelectedProduct->RetaiPrice ?> VNĐ</h2></b></p></td>
									</tr>
									<tr></tr>
									<tr>	
										<td align="right"><p><b><h4>Kho hàng: </h4></b></p></td>
										<td><?php echo $SelectedProduct->Status?"Còn Hàng":"Hết Hàng" ?></td>
									</tr>
									
									<tr>	
										<td align="right"><p><b><h4>Bảo hành: </h4></b></p></td>
										<td>12 Tháng, Đổi Mới Trong 15 Ngày</td>
									</tr>
									<tr>	
										<td align="right"><p><b><h4>Phạm vi: </h4></b></p></td>
										<td>Toàn quốc</td>
									</tr>
									<tr>	
										<td align="right"><p><b><h4>Khuyến mại: </h4></b></p></td>
										<td>Túi da, Miếng dán màn hình, Bộ vệ sinh</td>
									</tr>
									<tr>
										<td></td>
										<td><a href="#login-box" class="login-window"><input name="" type="button" class="btncreateacc" value="Đặt Hàng" tabindex="0"></a></td>
									</tr>
								</table>
								<?php
									
								}
								?>
								<?php
								
									$descriptionproduct = getDescriptionProduct($productId);
									if($descriptionproduct!=NULL)
									{
								?>
								<br>
								<br>
								<h1><b>Thông số kĩ thuật</b></h1>
								<br>	
								<div class="body_thongtinmobile">
							<table class="body_thongtinmobile_table">
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Hệ điều hành</h5></b></p></td>
								<td><?php echo $descriptionproduct->hedieuhanh ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Loại màn hình</h5></b></p></td>
								<td><?php echo $descriptionproduct->loaimanhinh ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Máy ảnh</h5></b></p></td>
								<td><?php echo $descriptionproduct->mayanh ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Kích thước màn hình</h5></b></p></td>
								<td><?php echo $descriptionproduct->kichthuocmanhinh ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Vi xử lý CPU</h5></b></p></td>
								<td><?php echo $descriptionproduct->vixulicpu ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Quay phim</h5></b></p></td>
								<td><?php echo $descriptionproduct->quayphim ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Bộ nhớ trong</h5></b></p></td>
								<td><?php echo $descriptionproduct->bonhotrong ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Phân khúc sản phẩm</h5></b></p></td>
								<td><?php echo $descriptionproduct->phankhucsanpham ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Danh bạ</h5></b></p></td>
								<td><?php echo $descriptionproduct->danhba ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Thẻ nhớ ngoài</h5></b></p></td>
								<td><?php echo $descriptionproduct->thenhongoai ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Giới hạn cuộc gọi</h5></b></p></td>
								<td><?php echo $descriptionproduct->gioihancuocgoi ?></td>
							</tr>
							<tr class="body_thongtinmobile_table_tr">	
								<td><p><b><h5>Dung lượng pin</h5></b></p></td>
								<td><?php echo $descriptionproduct->dungluongpin ?></td>
							</tr>
						</table>
						<?php
						
						}
						?>	
						<br>
						<h2><p  class="text_color_red"></b>Shop mobile cam kết</b></p></h3><br>
						<p>Sản phẩm của chúng tôi là hàng xách tay chính hãng.</p>
						<p>Quý khách ở các tỉnh xa có thể đặt mua hàng qua mạng. Xem hướng dẫn mua hàng tại website. Chúng tôi cam kết bán đúng sản phẩm, đúng chất lượng như đã niêm yết trên website. Miễn phí vận chuyển toàn quốc đối với khách hàng ở các tỉnh xa. Rất hân hạnh được phục vụ Quý khách!</p>
						<p>Để biết thông tin chi tiết về sản phẩm xin vui lòng liên hệ:</p>
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

<script src="js/test_dathang.js" type="text/javascript"></script>	
<!-- Login Box -->
<div id="login-box" class="login-popup">
	<a href="#" class="close"><img src="css/images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
	<img src="css/images/HTC-8x-Pre.jpg">
	<form id="formlienhe" name="form" method="post" action="cart.php" class="signin">     
			<fieldset class="textbox">
			<label class="username">
			<span>Họ Và Tên</span>
			<input id="txtname" name="txtname" value="" type="text" autocomplete="on" placeholder="Nhập Họ Tên">
			<span id="idname"></span>
			</label>
	
			<label class="username">
			<span>Số Điện Thoại</span>
			<input id="txtdienthoai" name="txtdienthoai" value="" type="text" placeholder="Nhập Số Điện Thoại">						
			<span id="iddt"></span>
			</label>
			
			<label class="username">
			<span>Email</span>
			<input id="txtmail" name="txtmail" value="" type="text" placeholder="Nhập Email">
			<span id="idmail"></span>
			</label>
			
			<label class="username">
			<span>Địa Chỉ</span>
			<input id="txtdiachi" name="txtdiachi" value="" type="text" placeholder="Nhập Địa Chỉ">
			<span id="iddc"></span>
			</label>
			<input type="hidden" name="productSelectedId" value="<?php echo $SelectedProduct->Id ?>" />
			<button name="btguitongtin" type="button" id="btguitongtin" class="submit button_box" type="button" onclick="return check_form();" tabindex="0">Đặt Hàng</button>                          
			</fieldset>
	  </form>		
</div>
<div class="quangcao">
<IMG src="css/images/quangcao.png">
</div>	
</body>
</html>