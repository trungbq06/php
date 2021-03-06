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
<title>DS Tài Liệu</title>
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
			<div class="center_title_bar">Danh Sách Tài Liệu</div>
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<?php			
							$active = 'No';
							if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
									if($_SESSION['loginAcc'] == 'Yes'){
										$active = readAtAccByIdAcc($_SESSION["id"])->StatusDoc;	
									}
							}									

					
								$IdType = $_GET['IdType'];
								$TLHocTap=readDocByIdType($IdType);
								foreach($TLHocTap as $item)
								{
					?>
					<table width="553" height="103" border="1" cellpadding="0" cellspacing="0">
					<tr>
					  <td width="111" rowspan="3"><img src="images/modfl.jpg" width="111" height="95" alt="Logo" /></td>
					  <td width="435" height="24" style="text-align:center;"><b><?php echo $item->Title ?></b></td>
					</tr>
					<tr>
					  <td height="50"><?php echo $item->Summary ?></td>
					</tr>
					<tr>
					  <td height="20">
					<?php
						if($active=='Yes'){
					?>
						Link Download : <a href="<?php echo $item->Url ?>"  target="_blank">Click vào đây để tải về</a>
						<?php														
						}else if($active=='No'){
						?>
						Mời Bạn Đóng Phí Để Được Tải Tài Liệu <a href="NapTheTaiLieu.php">Click vào đây để xem hướng dẫn</a>
						<?php														
						} else {
						?>
                                                Mời Bạn Đóng Phí Để Được Tải Tài Liệu <a href="NapTheTaiLieu.php">Click vào đây để xem hướng dẫn</a>
                                                <?php														
						}
						?>							
					</td>
					<?php						
						}						
					?>					  					
					</tr>
					</table>
					<p>&nbsp;</p>							
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