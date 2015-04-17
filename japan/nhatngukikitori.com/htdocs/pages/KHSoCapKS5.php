<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>KH Sơ Cấp KS5</title>
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
      <h1>Khóa Học Sơ Cấp KS5 (Từ Bài 41 Đến Bài 50)</h1>
		1. Đối tượng đầu vào :
		<ul>
			<li>Các bạn học trong trình độ N4  hay tương đương trình độ N4 có khả năng tự tin và giao tiếp tốt.nghe nói, ngữ pháp, kanji, đọc viết ngon lành ở trình độ sơ cấp và có đủ khả năng và trình độ khóa ks5 để theo kịp bài.</li>
			<li>Có thể hiểu nội dung giao tiếp hàng ngày nhanh chóng ở trình độ sơ cấp với người khác.</li>
			<li>Hoàn thành khóa Ks4 tại trung tâm.</li>
		</ul>
		2. Đối tượng đầu vào :       
		<ul>
			<li>Nghe, nói được thông tin hàng ngày trong cuộc hội thoại một cách nhanh chóng ở trình độ sơ cấp hay cao hơn.</li>
			<li>Đọc hiểu cụm từ , câu, đoạn văn dạng cố định khá là dài viết  bằng chữ hiragana và chữ katakana.</li>
			<li>Chữ kanji ở mức độ nhiều hơn.kanji khoảng (hơn 300 chữ), từ vựng khoảng (1.700 chữ).</li>
			<li>Có thể thi N4.</li>
		</ul>
		3. Lịch trình khóa học :
		<ul>
			<li>Khóa học Ks1 kéo dài 23 buổi. Được chia thành 3 phần. Kết thúc mỗi phần sẽ có bài kiểm tra để đánh giá khả năng giảng dạy của giáo viên và tiến bộ của học viên. Từ đó điều chỉnh nội dung, phương pháp giảng dạy sao cho phù hợp với học viên.</li>
                  
		</ul>
		4. Học phí và thời gian :
		<ul>
			<li>Học phí: 1.650.000 VNĐ</li>
			<li>Số lượng: 23 buổi</li>
		</ul>
		<p><br />Nhập Thông Tin Cá Nhân Để Tham Gia Khóa Học      </p>
	  <form method="post" action="../controller/RegistrationController.php" name="registration" onsubmit="return checkInput();">
		<table width="200" border="0">
		  <tr>
			<td width="17%">Họ Và Tên:</td>
			<td width="83%"><label for="name"></label>
			<input name="name" type="text" id="name" value="" size="40" /></td>
		  </tr>
		  <tr>
			<td>Điện Thoại:</td>
			<td><label for="phone"></label>
			<input name="phone" type="text" id="phone" size="40" /></td>
		  </tr>
		  <tr>
			<td>Email:</td>
			<td><input name="email" type="text" id="email" size="40" /></td>
		  </tr>
		  <tr>
			<td>Địa Chỉ:</td>
			<td><input name="address" type="text" id="address" size="40" /></td>
		  </tr>
		  <tr>
		  <input type="hidden" name="idkhoahoc" value="5">
			<td>&nbsp;</td>
			<td><input type="submit" name="commit" id="button" value="Đăng Kí" /></td>
		  </tr>
		</table>
	  </form>
      <p>&nbsp;</p>
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
