<?php
		session_start();
		
		include '../entity/clsTopicOther.php';
		include '../dao/TopicOtherDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DS Bài Học</title>
<link rel="shortcut icon" href="images/logo/1240398_427175504059500_1348746955_n.png" />
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
			<div class="center_title_bar">Danh Sách Bài Học</div>
			<?php 
			$IdLevel = $_GET['IdLevel'];
			?>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<h3>&nbsp;&nbsp;&nbsp;
						<?php 
						if($IdLevel==1)
							echo "Sơ Cấp";
						else if($IdLevel==2)
							echo "Trung Cấp";
						else if($IdLevel==3)
							echo "Thượng Cấp";
						else
							echo "No-Name";
						?>
					</h3>
					<?php
					$Topic=readTopicOth($IdLevel);
						foreach($Topic as $item)
						{							
					?>
					<ul>
						<li style="font-size: 13px;"><a  href="CTBaiHocKhac.php?IdTopic=<?php echo $item->Id ?>"><?php echo $item->Title ?></a></li>
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