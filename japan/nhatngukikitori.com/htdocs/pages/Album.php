<?php
		include '../model/clsAlbum.php';
		include '../dao/AlbumDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Album Ảnh</title>
	<?php include"templates/Css_Script.php" ?>
</head>
<style>
#album{
	float:left;
	width: 160px; 
	text-align: center;
	margin-left:35px;
	margin-bottom:40px;
}
</style>
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
		  <h1>Album Ảnh</h1>
			<?php
				$Album=readAlbum();
					foreach($Album as $item)
					{
			?>
			<a href="ChiTietAlbum.php?Id=<?php echo $item->Id ?>">
			<table width="171" height="148" border="1" id="album">
			<tr>
			  <td height="24" bgcolor="#CCCCFF"><?php echo $item->Title ?></td>
			</tr>
			<tr>
			  <td height="116"><div align="center"><img src="<?php echo $item->RootImage ?>" width="140" height="107" /></div></td>
			</tr>
			</table>
			</a>
			<?php
					}
			?>
		</div>
		
	   <?php include"templates/Body_Right.php" ?>
	   
	  </div>
	</div>
	
	<?php include"templates/Bottom_Contact.php" ?>

	<!-- Quảng cáo -->
	<?php include"templates/Banner.php" ?>
	
</body>
</html>
