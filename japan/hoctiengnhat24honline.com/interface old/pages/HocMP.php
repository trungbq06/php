<?php
		session_start();

		include '../entity/clsPage.php';
		include '../dao/PageDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Học Miễn Phí</title>
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
		
		<div class="center_content" style="width: 784px">
			<?php 
			$Id = $_GET['Id'];
			?>
			<div class="center_title_bar" style="width:742px; background:url(images/bar_bg_des.gif) no-repeat center;">Học Miền Phí</div>
			<div class="prod_box_big" style="width:779px;">
				<div class="content_learning" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;font-weight: normal;">            
					<?php echo readPage($Id)->Content ?>
				</div>
			</div>
		</div><!-- end of center content -->
	</div>
	
	<?php include'templates/Footer.php' ?>
</div>
</body>
</html>