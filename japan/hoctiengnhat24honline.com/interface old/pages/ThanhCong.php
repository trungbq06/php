<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thành Công</title>
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
			<div class="center_title_bar">Thành Công</div>
			<p align="center">&nbsp;</p>
			<p align="center">&nbsp;</p>
			<p align="center" style="font-size:16px; font-weight:bold; text-align: center;"><br/><strong>Chương Trình Xử Lí Thành Công</strong></p>
		</div>
		<!-- end of center content -->
   
		<?php include'templates/BodyRight.php' ?>         
	</div><!-- end of main content -->
	
	<?php include'templates/Footer.php' ?>
</div>
</body>
</html>