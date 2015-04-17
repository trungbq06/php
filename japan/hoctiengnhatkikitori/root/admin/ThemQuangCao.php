<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm Quảng Cáo</title>
<?php include"templates/styles.php" ?>
<script type="text/javascript">
function checkInput(){
	if(document.banner.nameB.value==""){ 
		alert("Mời Bạn Nhập Tên Quảng Cáo!");
		document.banner.nameB.focus();
		return false;
	}
	if(document.banner.image.value==""){ 
		alert("Mời Bạn Nhập URL Ảnh!");
		document.banner.image.focus();
		return false;
	}
	if(document.banner.url.value==""){ 
		alert("Mời Bạn Nhập URL!");
		document.banner.url.focus();
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
			<h1>Thông Tin Quảnh Cáo</h1>
			<form method="post" action="../controller/BannerController.php" name="banner" onsubmit="return checkInput();">
				<p>
					<input type="text" name="nameB" value="" placeholder="Tên Quảng Cáo" />
				</p>		
                <p>
					<select name="position" style="width: 307px;">
					  <option value="0">Cột Trái</option>
					  <option value="1">Cột Phải</option>
					  <option value="2">Chạy Bên Trái</option>
					  <option value="3">Chạy Bên Phải</option>
                    </select>
				</p>
				<p>
					<input type="text" name="image" value="" placeholder="Ảnh rộng 194px" />
				</p>	
				<p>
					<input type="text" name="url" value="" placeholder="Đường Dẫn" />
				</p>
				<p class="submit">
					<input type="reset" name="commit" value=" Xóa" /><input type="submit" name="commit" value="Thêm" />
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

