<?php
		session_start();
		
		include '../entity/clsTopicHA.php';
		include '../dao/TopicHADAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DS Bài Học</title>
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
			<div class="center_title_bar">Danh Sách Bài Học Qua Hình Ảnh</div>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<?php
					$Topic=readTopicHA();
						foreach($Topic as $item)
						{							
					?>
					<ul>
						<li style="font-size: 13px;"><a  href="CTBaiHocHA.php?IdTopic=<?php echo $item->Id ?>"><?php echo $item->Name ?></a></li>
					</ul>
					<?php
						}
					?>
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