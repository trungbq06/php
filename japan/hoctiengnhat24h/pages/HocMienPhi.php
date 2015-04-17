<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Học Miễn Phí</title>
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
			<div class="center_title_bar">Hướng Dẫn Học</div>			
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big" style="font-weight:bold; color:blue;">			
					<h3>Các bài học Tiếng Nhật online miễn phí</h3><br />
					<p>Chương trình luyện thi tiếng Nhật online được hoctiengnhat24h.com thiết kế cho những người có nhu cầu luyện thi Năng lực tiếng Nhật ở tất cả các cấp độ (N1, N2, N3, N4, N5) với hàng ngàn bài tập, bài giảng và đề thi đáp ứng các kỹ năng cần thiết để đạt điểm thi cao nhất.</p></br>
					<p>Chương Trình Học Tiếng Nhật Trực Tuyến</p></br>
					<ul style="font-weight:bold; font-size:14px">
						<li>Đầy đủ các khóa N1, N2, N3, N4, N5
						<li>Hỗ trợ, giải đáp kiến thức qua chat hoặc email
						<li>Bài giảng được thiết kế riêng cho người tự học
						<li>Lời khuyên và mẹo trả lời câu hỏi từ chuyên gia
						<li>Tư vấn phương pháp học miễn phí
						<li>Chương trình học đã được chứng minh hiệu quả
					</ul>
					<br />
					<p>Các Bài Giảng Miễn Phí</p>
					<p>- <a href="HocMP.php?Id=2">Sơ Cấp</a></p>
					<p>- <a href="HocMP.php?Id=3">Trung Cấp</a></p>
					<p>- <a href="HocMP.php?Id=4">Thượng Cấp</a></p>
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