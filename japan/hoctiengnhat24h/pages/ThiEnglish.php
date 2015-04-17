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
					<p>Chương trình luyện thi TOEIC trực tuyến phần nghe và đọc chất lượng cao, cập nhật, nhiều nội dung miễn phí, giúp bạn thi TOEIC đạt 600 - 850 điểm sau 3 tháng luyện thi hoặc tương đương 200-300 giờ học. Tiện lợi, phù hợp với những người đi làm bận rộn hoặc sinh viên sắp tốt nghiệp.</p><br/>
					<table>
						<tr>
							<td>
								- 100% học online<BR/>
								- Hơn 1,500 bài tập và đề thi thử 120 phút&nbsp;&nbsp;&nbsp;<BR/>
								- Xác định điểm mạnh, yếu cần nâng cao<BR/>
								- Học phí chỉ 400.000 VNĐ/năm <BR/>
							</td>
							<td>
								- Tập trung vào những phần bạn thấy khó nhất<BR/>
								- Đầy đủ đáp án và giải thích cho người tự học<BR/>
								- Tự thiết lập thời gian học cho riêng bạn<BR/>
								- Phù hợp với sinh viên và người đi làm bận rộn<BR/>
							</td>
						</tr>
					</table>
					<br/>
					<br/>
					<div style="font-size:15px;">
						<br/><a href="DSDeThiLearnEng.php?IdLearning=5">● TOEIC</a>
						<br/><br/><a href="DSDeThiLearnEng.php?IdLearning=6">● IELTS</a>
						<br/><br/><a href="DSDeThiLearnEng.php?IdLearning=7">● TOELF</a>
						<br/><br/><a href="DSDeThiLearnEng.php?IdLearning=8">● THI THỬ</a>
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