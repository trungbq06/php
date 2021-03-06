<?php
		session_start();

		include '../entity/clsPage.php';
		include '../dao/PageDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Thư viện trực tuyến Violet">
<meta name="robots" content="index, follow">
<meta name="description" content="Mạng xã hội của cộng đồng giáo viên Việt Nam, nơi giao lưu kiến thức và chia sẻ tài nguyên dạy học">
<meta name="keywords" content="blog, mang xa hoi, giao duc, giao vien, giang day, day hoc, e-learning, tai lieu">
<meta name="language" content="vi">
<title>Trang Chủ - HocTiengNhat24h.com</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<SCRIPT LANGUAGE="JavaScript">
function popupWin() {
setTimeout("window.open('http://quangbathitruong.com');", 3000);
}
function windowProp(text) {
newWindow = window.open('','newWin','width=300,height=100');
newWindow.document.write(text);
setTimeout('closeWin(newWindow)', 50000);	// delay 5 seconds before closing
}
function closeWin(newWindow) {
newWindow.close();				// close small window and depart
}
//  End -->
</script>
</head>
<body onLoad="popupWin()">
<div id="main_container">
	<?php include'templates/Menu.php' ?>
	<?php include'templates/HeaderBanner.php' ?>
		
	<div id="main_content"> 
		<?php include'templates/LearningPrice.php' ?>        
	
		<?php include'templates/BodyLeft.php' ?>
		<!-- end of left content -->
		<div class="center_content">
			<div class="center_title_bar">Trang Chủ</div>
			<div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
					<?php echo readPage(1)->Content ?>
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