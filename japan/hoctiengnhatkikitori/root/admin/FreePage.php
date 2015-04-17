<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
		include"templates/styles.php";
		include"templates/Tinymce.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cập Nhật Trang</title>
<style>
.login {
position: relative;
margin: 0 auto;
padding: 20px 20px 20px;
width: 779px;
background: white;
border-radius: 3px;
-webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
</style>
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
			<h1>Thêm Bài Giảng</h1>
			
			<form method="post" action="../controller/PageController.php">			
				<p>
					<label for="select"></label>
					<b style="font-size: 14px;">Bài Giảng&nbsp;&nbsp;</b>  
					<select name="id" style="width:242px">				 
						<option value="2">Sơ Cấp</option>
						<option value="3">Trung Cấp</option>
						<option value="4">Thượng Cấp</option>
					</select>
				</p>	
				<p>
					<textarea class="area-content" id="content" name="content" cols="35" rows="30">Nội Dung Trình Bày</textarea>					
				</p>
				<p class="submit">
					<input type="submit" name="commit" value="Cập Nhật" />
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