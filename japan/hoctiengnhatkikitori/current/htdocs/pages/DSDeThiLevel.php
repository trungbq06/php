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
					<h3>&nbsp;&nbsp;&nbsp;Luyện Thi > <?php echo getInfoLevelById($IdLevel)->Name ?></h3>
					<ul>
						<li><b style="font-size: 15px; font-weight: bold;">KANJI, Từ Vựng</b>
							<ul>
								<?php
								$IdLearning = 1;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThi.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=1"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiLearning.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=1" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
						</li>
						<li><b style="font-size: 15px; font-weight: bold;">Ngữ Pháp</b>
							<ul>
								<?php
								$IdLearning = 2;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThi.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=2"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiLearning.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=2" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
						</li>
						<li><b style="font-size: 15px; font-weight: bold;">Đọc Hiểu</b>
							<ul>
								<?php
								$IdLearning = 3;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThi.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=3"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiLearning.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=3" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
							</ul>
						</li>
						<li><b style="font-size: 15px; font-weight: bold;">Nghe, Video</b>
							<ul>
								<?php
								$IdLearning = 4;
								$Topic=read5TopDeThi($IdLevel, $IdLearning);
								foreach($Topic as $item)
								{
								?>
								<li><a  href="CTDeThi.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=4"><?php echo $item->Name ?></a></a></li>
								<?php
								}
								?>
								<li><a href="DSDeThiLearning.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=4" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
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