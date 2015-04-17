<?php
	session_start();
	
	include '../entity/clsDocument.php';
	include '../dao/DocumentDAO.php';

	include '../entity/clsActiveAcc.php';
	include '../dao/ActiveAccDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách đề thi Online</title>
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
			<div class="center_title_bar">Danh Sách Đề Thi Online</div>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<?php
					if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
						if($_SESSION['loginAcc'] == 'Yes'){
							$active = readAtAccByIdAcc($_SESSION["id"])->Status;
							if($active == 'Yes'){
					?>
								<ul style="font-size: 12px;">
									<li><a href="ThiN1.php">Đề Thi N1</a></li>
									<br />
									<li><a href="ThiN2.php">Đề Thi N2</a></li>
									<br />
									<li><a href="ThiN3.php">Đề Thi N3</a></li>
									<br />
									<li><a href="ThiN4.php">Đề Thi N4</a></li>
									<br />
									<li><a href="ThiN5.php">Đề Thi N5</a></li>
								</ul>
							<?php
							} else {
							?>
							<p>Mời Bạn Nạp Tiền Để Xem Nội Dung Này!</p>
						<?php
							}
						}else{
						?>
						<p>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</p>
					<?php
						}
					}else{
					?>
					<p>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</p>
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