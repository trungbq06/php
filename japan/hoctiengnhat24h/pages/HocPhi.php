<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Học Phí</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>

<body>

<div id="main_container">
	<?php include'templates/Menu.php' ?>
	<?php include'templates/HeaderBanner.php' ?>
	
	<div id="main_content"> 
		<?php include'templates/LearningPrice.php' ?>                    
		<?php include'templates/BodyLeft.php' ?>
		<!-- end of left content -->
   
		<div class="center_content">
			<div class="center_title_bar">Học Phí</div>			
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">			
					<h3>HƯỚNG DẪN NẠP HỌC PHÍ</h3><br />
					<p>Học phí tại hoctiengnhat24h.com là</p>
					<ul>
						<li style="font-size:14px">3 Tháng / 200.000 VNĐ
						<li style="font-size:14px">6 Tháng / 300.000 VNĐ
						<li style="font-size:14px">1 Năm / 400.000 VNĐ
					</ul>
					<br />
					<br />
					<span style="font-size:14px">Sau khi nạp học phí, các bạn được tham gia học tất cả bài giảng, bài tập, đề thi thử trên website. Không giới hạn số lần và thời gian truy cập.</span>
					</p>
					<br />
					<p>
					Để nạp học phí các bạn có thể nạp qua thẻ cào điện thoại, hoặc chuyển khoản qua Ngân hàng
					Đối với nạp qua thẻ điện thoại, hệ thống chấp nhận các thẻ Viettel, Mobi hoặc Vina dưới đây. Tài khoản của bạn sẽ được kích hoạt ngay lập tức sau khi nạp thành công. 
					<br />
					<br />
					<div style="padding-left:100px">
						<table>
						<tr>
							<td>
							    <img src="images/arrow-right.jpg" height="50" alt="" /></td>
							<td>
							    <a href="NapThe.php"><img src="images/card_charging.png" height="40" alt="" /></a></td>
							<td>
							    <img src="images/arrow-left.jpg" height="50" alt="" /></td>
							</tr>
						</table>
					</div>
					<p>Nếu nạp học phí qua chuyển khoản, mời bạn chuyển vào một trong những ngân hàng dưới đây của chúng tôi. Sau khi chuyển khoản bạn gửi các thông tin sau tới hoctiengnhat24h@gmail.com:</p>	
					<ul>
						<li><p>Tên người chuyển</p></li>
						<li><p>Chuyển tới ngân hàng nào</p></li>
						<li><p>Tài khoản đăng nhập trên hoctiengnhat24h.com</p></li>
						<li><p>Số tiền đã chuyển</p></li>
					</ul>
					<p><b>HỆ THỐNG HỖ TRỢ CÁC NGÂN HÀNG SAU:</b></p>
					<ul style="list-style:none;">
						<li><h2>Ngân hàng TMCP Công Thương Việt Nam (VIETINBANK)</h2>
							<p>Số tài khoản: 711A25466562</p>
							<p>Tên tài khoản: Hà Phú An</p>
							<p>Chi Nhánh Phú Thọ</p>
						</li>
						<li><h2>Ngân Hàng TMCP Ngoại Thương Việt Nam (VIETCOMBANK)</h2>
							<p>Số tài khoản: 0451.000.265.627</p>
							<p>Chủ tài khoản: HÀ PHÚ AN</p>
							<p>Chi Nhánh Thanh Xuân Hà Nội</p>
						</li>
					   <li><h2>Ngân Hàng TMCP Đầu Tư Và Phát Triển Việt Nam (BIDV)</h2>
							<p>Số tài khoản: 2201.0000.500.239</p>
							<p>Chủ tài khoản: HÀ PHÚ AN</p>
							<p>Chi Nhánh Thăng Long</p>
						</li>
						<li><h2>Ngân hàng (TECHCOMBANK) Hà Nội</h2>
							<p>Số tài khoản: 1902.7760.574.011</p>
							<p>Chủ tài khoản: HÀ PHÚ AN</p>
							<p>Chi Nhánh Hà Nội</p>
						</li>
						<li><h2>Ngân hàng (HDBANK) Hà Nội</h2>
							<p>Số tài khoản: 0137.0407.0012.547</p>
							<p>Chủ Tài Khoản: HÀ PHÚ AN</p>
							<p>Chi Nhánh Hà Nội</p>
						</li>
					</ul>
				</div>
				<div class="bottom_prod_box_big"></div>                                
			</div>
		</div>
		<!-- end of center content -->
   
		<?php include'templates/BodyRight.php' ?>         
	</div><!-- end of main content -->
	
	<?php include'templates/Footer.php' ?>
</div>
</body>
</html>