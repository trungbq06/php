<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tài Liệu</title>
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
			<div class="center_title_bar">Tài Liệu</div>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
				<h3>Tài liệu Bồi dưỡng thường xuyên theo các cấp học</h3>
				<p>Cung cấp tài liệu Bồi dưỡng thường xuyên theo các cấp học đến các bạn để lựa chọn, tham khảo bồi dưỡng thường xuyên.</p>
				<br />
				<p>Nội dung:</p>
				<p>Tài liệu gồm các mô đun theo 2 nhóm:</p>
				<ul>
						<li style="font-size:15px; font-weight:bold"><a href="DSTaiLieuType.php?IdType=1">Tài Liệu Sách</a></li>
						<li style="font-size:15px; font-weight:bold"><a href="DSTaiLieuType.php?IdType=2">Tài Liệu Video</a></li>
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