<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>KH Sơ Cấp KS2</title>
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
      <h1>Khóa Học Sơ Cấp KS2 (Từ Bài 11 Đến Bài 20)</h1>
		1. Đối tượng đầu vào :
		<ul>
			<li>Các bạn đã học qua về tiếng Nhật khả năng nghe, nói, ngữ pháp, kanji, đọc viết tốt trong phạm vi 10 bài.</li>
			<li>Các bạn đã học qua khóa ks1.</li>
			<li>Có đủ khả năng và trình độ học khóa ks2 và theo kịp bài học thông qua bài test của trung tâm.</li>
			<li>Các bạn đã học qua rồi nhưng nghỉ một thời gian.</li>
		</ul>
		2. Đối tượng đầu vào :       
		<ul>
			<li>Nghe và nói được thông tin cần thiết trong hội thoại dài hơn một chút, nói nhanh dần trong các tình huống trong tình huống giao tiếp với bạn bè và người khác, lớp học, cuộc sống hàng ngày.</li>
			<li>Đọc, viết câu ngắn, đoạn văn ngắn bằng chữ hiragana va chữ katakana, các chữ kanji ở mức độ cao hơn. kanji khoảng (70 chữ), từ vựng khoảng (700 chữ).</li>
			<li>Có thể thuyết trình về 1 vấn đề gì đó trong cuộc sống.</li>
		</ul>
		3. Lịch trình khóa học :
		<ul>
			<li>Khóa học Ks1 kéo dài 23 buổi. Được chia thành 3 phần. Kết thúc mỗi phần sẽ có bài kiểm tra để đánh giá khả năng giảng dạy của giáo viên và tiến bộ của học viên. Từ đó điều chỉnh nội dung, phương pháp giảng dạy sao cho phù hợp với học viên.</li>
                  
		</ul>
		4. Học phí và thời gian :
		<ul>
			<li>Học phí: 1.500.000 VNĐ</li>
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
		  <input type="hidden" name="idkhoahoc" value="2">
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
