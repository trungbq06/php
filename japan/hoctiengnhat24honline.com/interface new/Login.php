<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Đăng Nhập</title>
<link rel="stylesheet" href="admin/css/style.css">
<script type="text/javascript">
function checkInput(){
	if(document.login.username.value==""){ 
		alert("Mời Bạn Nhập Tài Khoản!");
		document.login.username.focus();
		return false;
	}
	if(document.login.password.value==""){ 
		alert("Mời Bạn Nhập Mật Khẩu!");
		document.login.password.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
	<section class="container">
	<div class="login">
		<h1>Đăng Nhập</h1>
		<form method="post" action="controller/AdminController.php" name="login" onsubmit="return checkInput();">
			<?php 
			if(isset($_GET['message']))
				echo "<b style='font-size:12px; color:red;'>".$_GET['message']."</b>";
			?>
			<p>
				<input type="text" name="username" value=""
					placeholder="Tài Khoản">
			</p>
			<p>
				<input type="password" name="password" value=""
					placeholder="Mât Khẩu">
			</p>
			<p class="submit">
				<input type="reset" name="reset" value="Xóa">
				<input type="submit" name="commit" value="Login">
			</p>
		</form>
	</div>
	</section>
</body>
</html>