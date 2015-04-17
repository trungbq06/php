<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiếng Anh</title>
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
			<div class="center_title_bar">Tiếng Anh</div>			
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">			
					<h3>Tiếng Anh</h3><br />
					<p>Nội dung trên web bao gồm hàng trăm bài giảng, gần 1,000 bài tập, hàng chục đề thi thử TOEIC, và kho tài liệu tham khảo. Bài giảng có đầy đủ các chiến lược làm bài cho mỗi Part của đề thi TOEIC. Chúng hướng dẫn bạn những phương pháp nghe hiệu quả, những kỹ năng đọc hiểu nhanh & đúng, và ôn lại tất cả những chủ điểm ngữ pháp có thể gặp trong một đề thi TOEIC.</p><br/>
					<p>Lồng ghép với bài giảng là những bài tập phong phú, sát thực với đề thi TOEIC, giúp bạn thực hành các chiến lược, kỹ năng đã học.</p></br>
					<p>Hệ thống bài tập đầy đủ, bám sát đề thi thực tế sẽ giúp bạn ôn luyện kỹ càng để đạt điểm cao trong kỳ thi TOEIC. Nội dung bài giảng, bài tập, đề thi trên website được tổng hợp và chắt lọc từ hầu hết những bộ giáo trình luyện thi TOEIC đang có, nên bạn không cần mua giáo trình khi ôn luyện trên hoctiengnhat24h.</p></br>
					<p>Yêu cầu là trong quá trình học, bạn cần bám sát bài giảng, làm hết các bài tập. Với mỗi bài tập, bạn cần làm đúng ít nhất 80% số điểm. Nếu chưa đạt thì đừng xem đáp án ngay, mà làm đi làm lại tới khi đạt 80% thì thôi. Khi bạn hoàn thành khóa Trung cấp và Nâng cao với tỉ lệ đúng ít nhất 80%, thì chúng tôi cam kết bạn sẽ thi đạt từ 600 điểm TOEIC trở lên khi đi thi thật. Thông thường, với thời lượng học 2h-3h/ngày, bạn mất 2 tháng để hoàn tất mỗi một khóa (level).<br/></p>
					<br/>
					<br/>
					<div style="font-size:15px;">
						<br/><a href="DSBaiHocEnglish.php?IdLearning=1">● Tiếng Anh Giao Tiếp</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=2">● Tiếng Anh Cấp Tốc</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=3">● Tiếng Anh Theo Chuyên Ngành</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=4">● Tiếng Anh Cấp Tốc Phỏng Vấn</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=5">● Tiếng Anh Du Lịch</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=6">● Tiếng Anh Trẻ Em</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=7">● Tiếng Anh Phổ Thông</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=8">● Tiếng Anh Người Lớn</a>
						<br/><br/><a href="DSBaiHocEnglish.php?IdLearning=9">● Kỹ Năng</a>
					</div>
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