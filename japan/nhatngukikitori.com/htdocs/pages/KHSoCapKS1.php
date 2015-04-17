<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>KH Sơ Cấp KS1</title>
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
      <h1>Khóa Học Sơ Cấp KS1 (Từ Bài 1 Đến Bài 10)</h1>
		1. Đối tượng đầu vào :
		<ul>
			<li>Các  bạn chưa biết gì về tiếng nhật, bắt đầu tìm hiểu và học tiếng Nhật…</li>
			<li>Các  bạn học hết bảng chữ cái, các bạn học chưa hết 10 bài của giáo trình mina…</li>
			<li>Các  bạn đã học một số chương trình chưa đủ trình độ học khóa tiếp theo.</li>
			<li>Các  bạn tự học ở nhà nhưng khả năng nghe, nói kém,…</li>
			<li>Học  qua rồi nhưng lâu không sử dụng,…	</li>
		</ul>
		 2. Đối tượng đầu vào :       
		<ul>
			<li>Nắm  được một số kỹ năng, phương pháp cần phải có khi học tiếng Nhật.</li>
			<li>Nghe  và nói được thông tin cần thiết trong hội thoại ngắn.</li>
			<li>Nói  chậm trong các tình huống hay gặp hàng ngày như giới thiệu bạn thân, lớp học,  cuộc sống xung quanh.</li>
			<li>Đọc,  viết chữ hiragana và chữ katakana, một số chữ kanji thông dụng. <br />Kanji khoảng (35  chữ), từ vựng khoảng (300 chữ).</li>
			<li>Tự  tin vào bản thân khi nói tiếng Nhật.</li>
		</ul>
		3. Lịch trình khóa học :
		<ul>
			<li>Khóa học Ks1 kéo dài 28 buổi. Được chia thành 3 phần. Kết thúc mỗi phần sẽ có bài kiểm tra để đánh giá khả năng giảng dạy của giáo viên và tiến bộ của học viên. Từ đó điều chỉnh nội dung, phương pháp giảng dạy sao cho phù hợp với học viên.</li>
		</ul>
		4. Học phí và thời gian :
		<ul>
			<li>Học phí: 1.450.000 VNĐ</li>
			<li>Số lượng: 28 buổi</li>
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
		  <input type="hidden" name="idkhoahoc" value="1">
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
