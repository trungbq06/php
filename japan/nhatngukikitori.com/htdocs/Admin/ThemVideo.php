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
<title>Thêm Video</title>
<?php include"templates/styles.php" ?>
<script>
function checkInput(){
	if(document.video.title.value==""){ 
		alert("Mời Bạn Nhập Tiêu Đề!");
		document.video.title.focus();
		return false;
	}
	if(document.video.url.value==""){ 
		alert("Mời Bạn Nhập URL Video!");
		document.video.url.focus();
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
			<h1>Thêm Video</h1>
			<form method="post" action="../controller/VideoController.php" name="video" onsubmit="return checkInput();">
				<p>
					<input type="text" name="title" value=""
						placeholder="Tiêu Đề">
				</p>
				<p>
					<input type="text" name="url" value=""
						placeholder="URL Video">
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
