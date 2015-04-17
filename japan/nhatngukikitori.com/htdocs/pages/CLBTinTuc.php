<?php
		include '../model/clsCLBNews.php';
		include '../dao/CLBNewsDAO.php';
		
		include '../model/clsDescriptionCLBNews.php';
		include '../dao/DescriptionCLBNewsDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Tin Tức CLB</title>
	<?php include"templates/Css_Script.php" ?>
</head>
<body id="top">
	<?php include"templates/Header_Menu.php" ?>
	
	<div class="wrapper col2">

		<!-- Content Slider -->
		<?php include"templates/Slide.php" ?>
		<!-- End Content Slider -->  
		
		<?php include"templates/LichKhaiGiang.php" ?>
  
	</div>

	<div class="wrapper col4">
	  <div id="container">
		<div id="content">
		  <h1>Danh Sách Tin Tức CLB</h1>
		  
			<?php
				$CLBNews=readCLBNews();
					foreach($CLBNews as $item)
					{
			?>
			<table width="200" border="1">
				<tr>
				  <td width="25%" rowspan="2"><img src="images/kikitori.jpg" width="150" height="130" /></td>
				  <td width="75%" bgcolor="#CCCCCC"><b>>>> <?php echo $item->Title ?></b></td>
				</tr>
				<tr>
				  <td><?php echo $item->Summary ?><br /><a href="ChiTietCLB.php?Id=<?php echo $item->Id ?>">Đọc Tiếp...</a></td>
				</tr>
			</table>
	    <p>&nbsp;</p>
			<?php
					}
			?>
	
			<p>Mọi thắc mắc hoặc tìm hiểu thông tin vui lòng liên hê để biết thêm chi tiết.</p>
		</div>
		
	   <?php include"templates/Body_Right.php" ?>
	   
	  </div>
	</div>
	
	<?php include"templates/Bottom_Contact.php" ?>

	<!-- Quảng cáo -->
	<?php include"templates/Banner.php" ?>
	
</body>
</html>
