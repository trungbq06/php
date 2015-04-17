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
<title>Thêm Tài Khoản</title>
<?php include"templates/styles.php" ?>
<script>
function checkInput(){
	if(document.account.username.value==""){ 
		alert("Mời Bạn Nhập Tài Khoản!");
		document.account.username.focus();
		return false;
	}
	if(document.account.password.value==""){ 
		alert("Mời Bạn Nhập Mật Khẩu!");
		document.account.password.focus();
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
			<h1>Thông Tin Tài Khoản</h1>
			<form method="post" action="../controller/AccountController.php" name="account" onsubmit="return checkInput();">
				<p>
					<input type="text" name="username" value=""
						placeholder="Username">
				</p>
				<p>
					<input type="text" name="password" value=""
						placeholder="Password">
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
