<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 'Yes')
	{
		include '../model/clsKhoaHoc.php';
		include '../dao/KhoaHocDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm Lịch Khai Giảng</title>
<?php include"templates/styles.php" ?>
<script>
function checkInput(){
	if(document.khaigiang.starttime.value==""){ 
		alert("Mời Bạn Nhập Thời Gian Bắt Đầu!");
		document.khaigiang.starttime.focus();
		return false;
	}
	if(document.khaigiang.endtime.value==""){ 
		alert("Mời Bạn Nhập Thời Gian Kết Thúc!");
		document.khaigiang.endtime.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
	<!-- Menu Task -->
	<?php include"templates/Menu_Task.php" ?>
	<!-- End Menu Task -->

	<!-- Menu -->
	<?php include"templates/Menu.php" ?>
	<!-- End Menu -->
	
	
	<section class="container">
		<div class="login">
			<h1>Thông Tin Khóa Học</h1>
			<form method="post" action="../controller/KhaiGiangController.php" name="khaigiang" onsubmit="return checkInput();">
            	<p>Chọn Khóa Học :
				  <select name="idKhoaHoc" id="select">
				    <?php
					$KhoaHoc = readKhoaHoc();
					foreach($KhoaHoc as $item)
					{
					?>
					<option value="<?php echo $item->Id ?>"><?php echo $item->Name ?></option>
					<?php
					}
					?>
                  </select>
				</p>
				<p>
					<input type="text" name="starttime" value=""
						placeholder="Thời Gian Bắt Đầu">
				</p>
				<p>
					<input type="text" name="endtime" value=""
						placeholder="Thời Gian Kết Thúc">
				</p>
				<p class="submit">
					<input type="reset" name="commit" value=" Xóa "><input type="submit" name="commit" value="Thêm">
				</p>
			</form>
		</div>
	</section>
</body>
</html>
<?php
		}
	}
?>
