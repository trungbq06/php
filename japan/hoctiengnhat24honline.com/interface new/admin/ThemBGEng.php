<?php
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{	
		include '../entity/clsLearnEng.php';
		include '../dao/LearnEngDAO.php';
		
		if(isset($_GET['IdLearning'])){
			$IdLearning = $_GET['IdLearning'];
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bài Giảng</title>
<?php include"templates/styles.php" ?>
<?php include"templates/Tinymce.php" ?>
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
<script>
function checkInput(){
	if(document.topic.stt.value==""){ 
		alert("Mời Bạn Nhập Số Thứ Tự!");
		document.topic.stt.focus();
		return false;
	}
	if(document.topic.title.value==""){ 
		alert("Mời Bạn Nhập Tiêu Đề!");
		document.topic.title.focus();
		return false;
	}
	
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
			<h1>Thêm Bài Giảng</h1>
			
			<form method="post" action="../controller/TopicEngController.php" name="topic" onsubmit="return checkInput();">
				<input type="hidden" name="idGroupMenu" value="1" />
				<p>
					<b style="font-size: 14px;">Học Phần&nbsp;</b>
					<select name="idLearning" style="width:242px">
						<?php
						$Learning=readLearnEng();
						foreach($Learning as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>" <?php if(isset($_GET['IdLearning'])){if(($item->Id)==$IdLearning) echo 'selected';} ?> ><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>
				<p>
					<input type="text" name="stt" value="" placeholder="Số Thứ Tự" />
				</p>
				<p>
					<input type="text" name="title" value="" placeholder="Tiêu đề" />
				</p>				
				<p>
					<textarea class="area-content" id="content" name="content" cols="35" rows="40">Nội Dung Trình Bày</textarea>					
				</p>
				<p class="submit">
					<input type="reset" name="commit" value=" Xóa " /><input type="submit" name="commit" value="Thêm" />
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
