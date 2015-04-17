<?php
		include '../model/clsVideo.php';
		include '../dao/VideoDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Xem Video</title>
	<?php include"templates/Css_Script.php" ?>
</head>
<body id="top">
	<?php include"templates/Header_Menu.php" ?>
	
	<div class="wrapper col2">

		<!-- Content Slider -->
		<?php include"templates/Slide.php" ?>
		<!-- End Content Slider -->  
		
		<?php include"templates/LichKhaiGiang.php" ?>
  
	</div>

	<div class="wrapper col4">
	  <div id="container">
		<div id="content">
		 <h1>Xem Video</h1>
			<?php
				$Id = $_GET['Id'];
			?>
			Mời quý khán giả chú ý đón xem:
			<br />
			<br />
			<br />
			<div style="text-align:center">
				<?php echo getVideoById($Id)->Url ?>
			</div>
			<p>Mọi thắc mắc hoặc tìm hiểu thông tin vui lòng liên hệ để biết thêm chi tiết.</p>
        </div>
		
	   <?php include"templates/Body_Right.php" ?>
	   
	  </div>
	</div>
	
	<?php include"templates/Bottom_Contact.php" ?>

	<!-- Quảng cáo -->
	<?php include"templates/Banner.php" ?>
	
</body>
</html>
