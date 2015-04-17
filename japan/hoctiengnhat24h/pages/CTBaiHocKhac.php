<?php
		session_start();
	
		include '../entity/clsTopicOther.php';
		include '../dao/TopicOtherDAO.php';
		
		include '../entity/clsDesTopicOther.php';
		include '../dao/DesTopicOthDAO.php';
		
		include '../entity/clsActiveAcc.php';
		include '../dao/ActiveAccDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CT Bài Học</title>
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
			if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
				if($_SESSION['loginAcc'] == 'Yes'){
					$active = readAtAccByIdAcc($_SESSION["id"])->Status;
					if($active == 'Yes'){
						$IdTopic = $_GET['IdTopic'];
			?>
			<div class="center_title_bar" style="width:742px; background:url(images/bar_bg_des.gif) no-repeat center;"> 
				<?php echo getInfoTopicOthById($IdTopic)->Title ?>
			</div>
			<div class="prod_box_big" style="width:779px;">
				<div class="content_learning" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;font-weight: normal;">            
					<?php echo getDesTopicOthByIdTopic($IdTopic)->Content ?>
				</div>
			</div>
					<?php
					} else {
					?>
					<div class="center_title_bar" style="width:742px; background:url(images/bar_bg_des.gif) no-repeat center;">Chi Tiết Bài Học</div>
					<div class="prod_box_big" style="width:779px;">
						<div class="content_learning" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;font-weight: normal;">            
						Mời Bạn Nạp Tiền Để Xem Nội Dung Này!
						</div>
					</div>
				<?php
					}
				}else{
				?>
				<div class="center_title_bar" style="width:742px; background:url(images/bar_bg_des.gif) no-repeat center;">Chi Tiết Bài Học</div>
				<div class="prod_box_big" style="width:779px;">
					<div class="content_learning" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;font-weight: normal;">            
					Mời Bạn Đăng Nhập Để Xem Nội Dung Này!
					</div>
				</div>
			<?php
				}
			}else{
			?>
			<div class="center_title_bar" style="width:742px; background:url(images/bar_bg_des.gif) no-repeat center;">Chi Tiết Bài Học</div>
			<div class="prod_box_big" style="width:779px;">
				<div class="content_learning" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: justify;font-weight: normal;">            
			    Mời Bạn Đăng Nhập Để Xem Nội Dung Này!
				</div>
			</div>
			<?php
			}
			?>
		</div><!-- end of center content -->
	</div><!-- end of main content -->
	
	<?php include'templates/Footer.php' ?>
</div>
</body>
</html>