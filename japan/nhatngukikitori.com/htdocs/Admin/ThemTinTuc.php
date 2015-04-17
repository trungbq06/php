<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 'Yes')
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm Tin Tức</title>
<?php include"templates/styles.php" ?>
<?php include"templates/CKEditor.php" ?>
<style>
.login {
position: relative;
margin: 0 auto;
padding: 20px 20px 20px;
width: 638px;
background: white;
border-radius: 3px;
-webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
</style>
<script>
function checkInput(){
	if(document.news.title.value==""){ 
		alert("Mời Bạn Nhập Tiêu Đề!");
		document.news.title.focus();
		return false;
	}
	if(document.news.rootimagenews.value==""){ 
		alert("Mời Bạn Nhập URL Ảnh!");
		document.news.rootimagenews.focus();
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
			<h1>Thông Tin Tin Tức</h1>
			<form method="post" action="../controller/NewsController.php" name="news" onsubmit="return checkInput();">
				<p>
					<input type="text" name="title" value=""
						placeholder="Tiêu Đề">
				</p>
				<p>
					<input type="text" name="rootimagenews" value=""
						placeholder="Link Ảnh Bìa Size(150x130)">
				</p>
				<p>
					<textarea name="summary" cols="55" rows="5">Nội Dung Tóm Tắt</textarea>
				</p>
				<p>
					<textarea id="content" name="content" cols="35" rows="5">Nội Dung Trình Bày</textarea>
					<script type="text/javascript">CKEDITOR.replace('content');</script>
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
