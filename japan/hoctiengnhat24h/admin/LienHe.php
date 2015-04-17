<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
		include '../entity/clsContact.php';
		include '../dao/ContactDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Danh Sách Liên Hệ</title>
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
	
	<div style="float:left; padding-left: 50px; padding-right: 50px;">	
		<table class="hovertable">
		<caption>Danh Sách Liên Hệ</caption>
			<tr>
				<th>STT</th>
				<th  style="width: 180px;">Họ Tên</th>
				<th>Email</th>
				<th>Điện Thoại</th>
				<th>Tin Nhắn</th>
				<th>Xóa</th>
			</tr>
			<?php
			$Contact=readContact();
				$count = 0;
				foreach($Contact as $item)
				{
					$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
				
				<form action="../controller/ContactController.php" method="post">
				<td><?php echo $count ?></td>
				<input type="hidden" name="Id" value="<?php echo $item->Id ?>">
				<td><?php echo $item->Name ?></td>
				<td><?php echo $item->Email ?></td>
				<td><?php echo $item->Phone ?></td>
				<td><?php echo $item->Message ?></td>
				<td>
					<p class="submit">
					<input type="submit" name="commit" value="Xóa">
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
