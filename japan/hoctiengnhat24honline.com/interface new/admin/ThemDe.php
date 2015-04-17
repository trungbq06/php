<?php
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{	
		include '../entity/clsLearning.php';
		include '../dao/LearningDAO.php';
		
		include '../entity/clsLevel.php';
		include '../dao/LevelDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm Đề Thi</title>
<?php include"templates/styles.php" ?>
<?php include"templates/Tinymce.php" ?>

<script>
function checkInput(){
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
			<h1>Thêm Đề Thi</h1>
			
			<form method="post" action="../controller/DeThiController.php" name="topic" onsubmit="return checkInput();">
				<input type="hidden" name="idGroupMenu" value="1" />
				<p>
				  <b style="font-size: 14px;">Trình Độ&nbsp;&nbsp;</b>
					<select name="idLevel" style="width:242px"> 
						<?php
						$Level=readLevel();
						foreach($Level as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>"><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>
				<p>
					<b style="font-size: 14px;">Học Phần&nbsp;</b>
					<select name="idLearning" style="width:242px">
						<?php
						$Learning=readLearning();
						foreach($Learning as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>"><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>
				<p>
					<input type="text" name="title" value="" placeholder="Tên Đề Thi" />
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
