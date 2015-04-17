<?php
		session_start();
			
		include '../entity/clsLearning.php';
		include '../dao/LearningDAO.php';
		
		include '../entity/clsLevel.php';
		include '../dao/LevelDAO.php';
		
		include '../entity/clsDeThi.php';
		include '../dao/DeThiDAO.php';
		
		include '../entity/clsCauHoi.php';
		include '../dao/CauHoiDAO.php';
		
		include '../entity/clsDapAnABCD.php';
		include '../dao/abcdDAO.php';
		
		include '../entity/clsDapAnDung.php';
		include '../dao/DapAnDAO.php';
		
		include '../entity/clsActiveAcc.php';
		include '../dao/ActiveAccDAO.php';
		
		$IdLevel = $_GET['IdLevel'];
		$IdLearning = $_GET['IdLearning'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CT Đề Thi</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
  $("a.an_hien").click(function(){ 
    $("div#test").slideToggle(); 
  }); 
}); 
</script> 
<style>
#full{
	width: 775px;
	margin: 10px 287px 0px 287px;
	background: white;
	border: 1px solid;
	padding: 5px 5px 5px 5px;
}
#test{
display: none;
float: left;
}
</style>
</head>
<body bgcolor="#c7c7c7">
<div id="full">
  <p align="center"><strong>HỌC TIẾNG NHẬT 24H </strong></p>
  <p align="center"><strong>hoctiengnhat24h.com </strong></p>
  <p align="center"><strong>CHƯƠNG TRÌNH HỌC TIẾNG NHẬT TRỰC TUYẾN</strong></p>
    <?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
				$IdDeThi = $_GET['Id'];
	?>
	<p style="font-weight:bold;">Trình Độ <?php echo getInfoLevelById($IdLevel)->Name ?> > <?php echo getInfoLearningById($IdLearning)->Name ?></p>
	<p style="font-weight:bold;"><?php echo getNameDeThiById($IdDeThi); ?></p>
	<?php
	$count = 1;
	$Topic=readCauHoi($IdDeThi);
	foreach($Topic as $item)
	{
	?>
  <p>Câu <?php echo $count ?>: <?php if($item->Text != '') echo $item->Text ?></p>
  <p><?php if($item->Image != ''){?><image src="<?php echo $item->Image ?>"/> <?php } ?></p>
  <p><?php if($item->Mp3 != '') echo $item->Mp3 ?></p>
	<p> <div style="float:left;"><input type="radio" name="cau<?php echo $item->Id ?>" id="radio" value="A">A: <?php echo readABCD($item->Id)->A ?> </div> <?php if(readDapAn($item->Id)=='A') echo "<div id='test'>&nbsp;&nbsp;<image src='images/icon-check.png'></div>" ?></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau<?php echo $item->Id ?>" id="radio" value="B">B: <?php echo readABCD($item->Id)->B ?> </div> <?php if(readDapAn($item->Id)=='B') echo "<div id='test'>&nbsp;&nbsp;<image src='images/icon-check.png'></div>" ?></p>
	<br />
	<?php 
	if(readABCD($item->Id)->C != '') 
	{
	?>
	<p> <div style="float:left;"><input type="radio" name="cau<?php echo $item->Id ?>" id="radio" value="C">C: <?php echo readABCD($item->Id)->C ?> </div> <?php if(readDapAn($item->Id)=='C') echo "<div id='test'>&nbsp;&nbsp;<image src='images/icon-check.png'></div>" ?></p>
	<br />
	<?php
	}
	if(readABCD($item->Id)->D != '') 
	{
	?>
	<p> <div style="float:left;"><input type="radio" name="cau<?php echo $item->Id ?>" id="radio" value="D">D: <?php echo readABCD($item->Id)->D ?> </div> <?php if(readDapAn($item->Id)=='D') echo "<div id='test'>&nbsp;&nbsp;<image src='images/icon-check.png'></div>" ?></p>
	<br />
	<?php
	}
	?>
 	<?php
	$count++;
	}
	?>
  <p align="center">
    <a href="javascript:void(0)" class="an_hien"><input type="submit" name="button" id="button" value="Xem Đáp Án"></a>
  </p>
<?php
			} else {
				echo 'Mời Bạn Nạp Tiền Để Xem Nội Dung Này!';
			}
		} else {
		echo 'Mời Bạn Đăng Nhập Để Xem Nội Dung Này!';
		}
	} else {
		echo 'Mời Bạn Đăng Nhập Để Xem Nội Dung Này!';
	}
?>
</div>
<div style="display: block; position: fixed; top: 20px; left: 30px; width:150px; height:50px; background-color: aliceblue;">
	<p>&nbsp;* <a href="DSDeThiLearning.php?IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>">Đề Thi Liên Quan</a></p>
</div>
</body>
</html>
