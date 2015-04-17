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
<title>Cập Nhật Trung Tâm</title>
<?php include"templates/styles.php" ?>
<?php include"templates/Tinymce.php" ?>
<style>
.login {
position: relative;
margin: 0 auto;
padding: 20px 20px 20px;
width: 559px;
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
			<h1>Cập Nhật Trung Tâm</h1>
			<form method="post" action="../controller/PageController.php">			
				<input type="hidden" name="id" value="5" />
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

