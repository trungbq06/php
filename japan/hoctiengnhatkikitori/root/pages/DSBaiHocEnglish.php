<?php
		session_start();
		
		include '../entity/clsLearnEng.php';
		include '../dao/LearnEngDAO.php';
		
		include '../entity/clsTopicEng.php';
		include '../dao/TopicEngDAO.php';
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
			$IdLearning = $_GET['IdLearning'];
			?>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<h3>&nbsp;&nbsp;&nbsp;Tiếng Anh > <?php echo getInfoLearnEngById($IdLearning)->Name ?></h3>
					<?php
					$Topic=readTopicEng($IdLearning);
						foreach($Topic as $item)
						{
							
					?>
					  <ul>
						<li style="font-size: 13px;"><a  href="CTBaiHocEnglish.php?IdTopic=<?php echo $item->Id ?>">Bài <?php echo $item->STT ?>: <?php echo $item->Title ?></a></li>
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