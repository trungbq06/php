<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 'Yes')
	{
		include '../model/clsRegistration.php';
		include '../dao/RegistrationDAO.php';
		
		include '../model/clsKhoaHoc.php';
		include '../dao/KhoaHocDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DS Sơ Cấp</title>
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
		<caption>Danh Sách Đăng Kí Học Lớp Sơ Cấp</caption>
			<tr>
				<th>STT</th>
				<th>Họ Tên</th>
				<th>Điện Thoại</th>
				<th>Email</th>
				<th>Địa Chỉ</th>
				<th>Lớp</th>
				<th>Xóa</th>
			</tr>
			<?php
			$count = 0;
			for($i = 1; $i <= 5; $i++){
				$Registration=readRegistrationById($i);
					foreach($Registration as $item)
					{
						$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
				
				<form action="../controller/RegistrationController.php" method="post">
                <input type="hidden" name="id" value="<?php echo $item->Id ?>">	
				<td><?php echo $count ?></td>
				<td><?php echo $item->Name ?></td>
				<td><?php echo $item->Phone ?></td>
				<td><?php echo $item->Email ?></td>
				<td><?php echo $item->Address ?></td>
				<td><?php echo getNameKhoaHocById($item->IdKhoaHoc)->Name ?></td>
				<td>
					<p class="submit">
					<input type="submit" name="commit" value="Xóa">
					</p>
				</td>
				</form>
				
			</tr>	
			<?php
					}
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
