<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
	include '../entity/clsAccount.php';
	include '../dao/AccountDAO.php';
	include '../entity/clsCartMobile.php';
	include '../dao/CartMobileDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Nạp Thẻ</title>
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
	<div style=" width:780px; margin:0 auto;">	
		<table class="hovertable" style=" width:100%" cellpadding="1" cellspacing="1">
		<caption style="font-weight:bold; font-size:16px; margin-bottom:15px;">Danh Sách Tài Khoản</caption>
			<tr>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid;">STT</th>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid; padding-top:15px;">Tai Khoản</th>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid">Mệnh Giá</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid; width:150px">Xóa</th>
			</tr>
			<?php
			$Account=readCart();
			$count = 0;
				foreach($Account as $item)
				{
					if($item->Type == 'TaiLieu'){
					$id = $item->IdAccount;
					$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
				
				<form action="../controller/CartController.php" method="post" >
				<td style="text-align:center; border-left:1px #666 solid; border-right:1px #666 solid;"><?php echo $count ?></td>
				<td style="text-align:center;  border-right:1px #666 solid;">
					<?php
                    	echo readAccountById($id)->Username;
					?>	
				</td>	
                <td style="text-align:center;  border-right:1px #666 solid;">
                	<input type="hidden" name="Id" value="<?php echo $item->Id; ?>">
					<?php echo $item->Value ?>
                </td>
				<td style="text-align:center;  border-right:1px #666 solid;">
					<p class="submit">
						<input type="submit" name="commit" value="Xóa" onclick="return confirm('Bạn có chắc muốn xóa mục chọn?')" />
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

