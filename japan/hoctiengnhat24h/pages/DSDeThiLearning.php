<?php
		session_start();
		
		include '../entity/clsLearning.php';
		include '../dao/LearningDAO.php';
		
		include '../entity/clsLevel.php';
		include '../dao/LevelDAO.php';
		
		include '../entity/clsDeThi.php';
		include '../dao/DeThiDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DS Đề Thi</title>
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
			<div class="center_title_bar">Danh Sách Đề Thi</div>
			<?php 
			$IdLevel = $_GET['IdLevel'];
			$IdLearning = $_GET['IdLearning'];
			?>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<h3>&nbsp;&nbsp;&nbsp;Luyện Thi > <?php echo getInfoLevelById($IdLevel)->Name ?> > <?php echo getInfoLearningById($IdLearning)->Name ?></h3>
					<?php
					$Topic=readDeThi($IdLevel, $IdLearning);
						foreach($Topic as $item)
						{
							
					?>
					  <ul>
						<li style="font-size: 13px;"><a  href="CTDeThi.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>"><?php echo $item->Name ?></a></li>
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