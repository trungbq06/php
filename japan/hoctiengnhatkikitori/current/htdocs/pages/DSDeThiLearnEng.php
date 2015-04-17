<?php
		session_start();
		
		include '../entity/clsLearnEngTest.php';
		include '../dao/LearnEngTestDAO.php';
		
		include '../entity/clsLevelEng.php';
		include '../dao/LevelEngDAO.php';
		
		include '../entity/clsDeThi.php';
		include '../dao/DeThiDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DS Đề Thi</title>
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
			<div class="center_title_bar">Danh Sách Đề Thi</div>
			<?php 
			$IdLearning = $_GET['IdLearning'];
			?>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<h3>&nbsp;&nbsp;&nbsp;Luyện Thi > <?php echo getInfoLearnEngById($IdLearning)->Name ?></h3>
					<ul>
						<li><b style="font-size: 15px; font-weight: bold;">Sơ Cấp</b>
							<ul>
								<?php
								$IdLevel = 6;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThiEng.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiEnglish.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
						</li>
						<li><b style="font-size: 15px; font-weight: bold;">Trung Cấp</b>
							<ul>
								<?php
								$IdLevel = 7;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThiEng.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiEnglish.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
						</li>
						<li><b style="font-size: 15px; font-weight: bold;">Cao Cấp</b>
							<ul>
								<?php
								$IdLevel = 8;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThiEng.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiEnglish.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
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