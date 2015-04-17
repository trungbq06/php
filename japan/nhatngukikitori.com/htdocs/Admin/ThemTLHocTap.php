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
<title>Thêm Tài Liệu Học Tập</title>
<?php include"templates/styles.php" ?>
<script>
function checkInput(){
	if(document.doc.title.value==""){ 
		alert("Mời Bạn Nhập Tiêu Đề!");
		document.doc.title.focus();
		return false;
	}
	if(document.doc.urldownload.value==""){ 
		alert("Mời Bạn Nhập URL File!");
		document.doc.urldownload.focus();
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
			<h1>Thông Tin Tài Liệu Học Tập</h1>
			<form method="post" action="../controller/TLHocTapController.php" name="doc" onsubmit="return checkInput();">
				<p>
					<input type="text" name="title" value=""
						placeholder="Tiêu Đề">
				</p>		
				<p>
					<textarea id="message" name="summary" cols="35" rows="4" />Nội Dung</textarea>
				</p>
				<p>
					<input type="text" name="urldownload" value=""
						placeholder="Link Download">
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
