<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Các khóa học</title>
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
      <h1>Đăng Ký Khóa Học      </h1>
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
            <td><br/><br/><br/>Khóa Học:</td>
            <td><input name="idkhoahoc" type="radio" id="radio" value="1" checked="checked" />
            <label for="radio">Tiếng Nhật KS1<br />
              <input type="radio" name="idkhoahoc" id="radio2" value="2" />
              Tiếng Nhật KS2<br />
              <input type="radio" name="idkhoahoc" id="radio3" value="3" />
              Tiếng Nhật KS3<br />
              <input type="radio" name="idkhoahoc" id="radio4" value="4" />
              Tiếng Nhật KS4<br />
              <input type="radio" name="idkhoahoc" id="radio5" value="5" />
              Tiếng Nhật KS5<br />
              <input type="radio" name="idkhoahoc" id="radio6" value="7" />
              Tiếng Nhật N1 (Thượng Cấp)<br />
              <input type="radio" name="idkhoahoc" id="radio7" value="8" />
              Tiếng Nhật N2 (Thượng Cấp)<br />
              <input type="radio" name="idkhoahoc" id="radio8" value="6" />
              Tiếng Nhật N3 (Trung Cấp)<br />
            </label></td>
          </tr>
          <tr>
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
