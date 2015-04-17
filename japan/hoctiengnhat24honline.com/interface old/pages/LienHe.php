<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liên Hệ</title>
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
			<div class="center_title_bar">Liên Hệ</div>			
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big" style="font-weight:bold; color:blue;">			
					<h3>Liên Hệ</h3><br />
					<p>Học Tiếng Nhật 24h</p></br>
					<p>Chương Trình Học Tiếng Nhật Trực Tuyến</p></br>
					<p>Liên Hệ Để Biết Thêm Chi Tiết</p></br>
					<ul style="font-weight:bold; font-size:14px">
						<li>Số Điện Thoại: 0973617319 - 0966634897
						<li>Skype: hoctiengnhat24h
						<li>Gmail: hoctiengnhat24h@gmail.com
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