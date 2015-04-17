<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 'Yes')
	{
		include '../model/clsBanner.php';
		include '../dao/BannerDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cập Nhật Quảng Cáo</title>
<?php include"templates/styles.php" ?>
</head>
<body>
	<!-- Menu Task -->
	<?php include"templates/Menu_Task.php" ?>
	<!-- End Menu Task -->

	<!-- Menu -->
	<?php include"templates/Menu.php" ?>
	<!-- End Menu -->
	
	<br>
	
	<div style="padding-left: 50px;">	
		<table class="hovertable">
		<caption>Danh Sách Quảng Cáo</caption>
			<tr>
				<th>STT</th>
				<th>Vị Trí</th>
				<th>Ảnh</th>
				<th>Đường Dẫn</th>
				<th>Cập Nhật</th>
			</tr>
			<?php
			$Banner=readBanner();
			$count = 0;
				foreach($Banner as $item)
				{
					$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
				
				<form method="post" action="../controller/BannerController.php">
				<td><?php echo $count ?></td>
				<input type="hidden" name="id" value="<?php echo $item->Id ?>">
				<td><?php echo $item->Name ?></td>
				<td><image src="<?php echo $item->Url ?>" style="height:134px"></td>
				<td>
				<textarea id="url" name="url" cols="30" rows="6" /><?php echo $item->Url ?></textarea>
				<br />
				<p>Size rộng 150px</p>
				</td>
				<td>
					<p class="submit">
					<input type="submit" name="commit" value="Cập Nhật">
					</p>
				</td>
				</form>
				
			</tr>	
			<?php
				}
			?>
	
		</table>
	</div>
</body>
</html>
<?php
		}
	}
?>
