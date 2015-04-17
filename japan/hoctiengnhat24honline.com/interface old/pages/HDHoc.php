<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hướng Dẫn Học</title>
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
				<div class="center_prod_box_big">			
					<h3>HƯỚNG DẪN HỌC</h3><br />
					<p>Sau khi thi thử để kiểm tra đầu vào, bạn dựa vào kết quả của mình để lựa chọn level phù hợp. Nếu điểm thi <300, bạn bắt đầu với khóa Sơ cấp. Nếu điểm thi từ 300-450 thì bạn học từ khóa Trung cấp. Nếu điểm thi từ 500-600 thì bạn có thể học ngay từ khóa Nâng cao.</p><br/>
					<p>Lựa chọn được khóa học xong, đầu tiên bạn cần học bài giảng. Bài giảng được phân chia theo Trình Độ và Level. Bạn học lần lượt từ các bài giảng.</p></br>
					<p>Đi kèm với mỗi chiến lược, bài giảng sẽ yêu cầu bạn làm những bài luyện tập để thực hành chiến lược ấy. Bạn cần làm hết và đạt ít nhất 80% số điểm của mỗi bài tập. Làm xong, bạn quay trở lại bài giảng để học những chiến lược, phương pháp tiếp theo.</p></br>
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