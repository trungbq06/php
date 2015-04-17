<?php
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{	
		include '../entity/clsLearnEngTest.php';
		include '../dao/LearnEngTestDAO.php';
		
		include '../entity/clsLevelEng.php';
		include '../dao/LevelEngDAO.php';
		
		include '../entity/clsDeThi.php';
		include '../dao/DeThiDAO.php';
		
		$IdLevel = $_GET['IdLevel'];
		$IdLearning = $_GET['IdLearning'];
		if(isset($_GET['IdDeThi'])){
			$IdDeThi = $_GET['IdDeThi'];
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Câu Hỏi</title>
<?php include"templates/styles.php" ?>
<?php include"templates/Tinymce.php" ?>
<style>
.login {
position: relative;
margin: 0 auto;
padding: 20px 20px 20px;
width: 650px;
background: white;
border-radius: 3px;
-webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
</style>
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
			<h1>Thêm Bài Giảng</h1>
			
			<form method="post" action="../controller/DethiController.php" name="topic" onsubmit="return checkInput();">
				<input type="hidden" name="idGroupMenu" value="1" />
				<p>
					<b style="font-size: 14px;">Học Phần&nbsp;</b>
					<select name="idLearning" style="width:242px">
						<?php
						$Learning=readLearnEngTest();
						foreach($Learning as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>" <?php if(($item->Id)==$IdLearning) echo 'selected' ?> ><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>
				<p>
				  <b style="font-size: 14px;">Trình Độ&nbsp;&nbsp;</b>
					<select name="idLevel" style="width:242px"> 
						<?php
						$Level=readLevelEng();
						foreach($Level as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>" <?php if(($item->Id)==$IdLevel) echo 'selected' ?> ><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>
				<p class="submit" style="float:left">
					<input type="submit" name="commit" value="Cập Nhật English" />
				</p>
				<br/>
				<br/>
				<br/>
				<p>
					<b style="font-size: 14px;">Đề Thi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<select name="idDeThi" style="width:242px">
						<?php
						$DeThi = readDeThi($IdLevel, $IdLearning);
						foreach($DeThi as $item)
						{
						?>
						<option value="<?php echo $item->Id ?>" <?php if(isset($_GET['IdDeThi'])){if(($item->Id)==$IdDeThi) echo 'selected';} ?>><?php echo $item->Name ?></option>
						<?php
						}
						?>
					</select>
				</p>	
				<p>
					<textarea class="area-content" id="vanban" name="vanban" cols="35" rows="5"></textarea>					
				</p>
				<p>
					A
					<input type="text" name="dapanA" value="" placeholder="Đáp Án A" />
					B
					<input type="text" name="dapanB" value="" placeholder="Đáp Án B" />
				</p>
				<p>
					C
					<input type="text" name="dapanC" value="" placeholder="Đáp Án C" />
					D
					<input type="text" name="dapanD" value="" placeholder="Đáp Án D" />
				</p>
				<p>
				Đáp Án Đúng<br />
					<input type="radio" name="dapan" value="A" checked>A
					<input type="radio" name="dapan" value="B">B
					<input type="radio" name="dapan" value="C">C
					<input type="radio" name="dapan" value="D">D
				</p>
				<p class="submit">
					<input type="submit" name="commit" value="Thêm Câu Hỏi English" />
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
