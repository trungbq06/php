<?php
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
		include '../entity/clsTopicHA.php';
		include '../dao/TopicHADAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Xóa Bài Học</title>
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
	<div style="font-size:14px; font-weight: bold;">Danh Sách Bài Học Qua Hình Ảnh</div>
		<br />
		<table class="hovertable">	
			<tr>
				<th>STT</th>
				<th>Tên Bài</th>
				<th>Xóa</th>
			</tr>
			<?php
			$Topic=readTopicHA();
			$count = 0;
			foreach($Topic as $item)
			{
				$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
				
				<form action="../controller/TopicHAController.php" method="post">
                <input type="hidden" name="Id" value="<?php echo $item->Id ?>">	
				<td><?php echo $count ?></td>
				<td>
					<?php echo $item->Name ?>
				</td>
				<td>
					<p class="submit">
					<input type="submit" name="commit" value="Xóa" onclick="return confirm('Bạn có chắc muốn xóa mục chọn?')" />
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
