<?php
	include '../../dtos/clsCart.php';
	require '../../model/CartModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Đơn đặt hàng</title>
<style>
.style1 {color: #FF0000}
</style>
</head>

<body>
<div style="text-align:center">
<table width="756" border="1px solid gray" cellspacing="0px">
	<tr>
		<td>
			<img src="web-design-sthelens-930x300.jpg">
			<?php include 'menutrong.php'?>
		</td>
	</tr> 
	<tr>
		<td>
		<h2 align="center" class="style1">&#272;&#417;n &#273;&#7863;t h&agrave;ng</h2>
		<div align="center">
		<table width="909" border="1" cellspacing="0">
            <tr>
			  <th width="38" scope="row">Id</th>
			  <td width="151"><strong>Name</strong></td>
			  <td width="120"><strong>Phone</strong></td>
			  <td width="196"><strong>Email</strong></td>
			  <td width="310"><strong>Address</strong></td>
			  <td width="68"><strong>IdProduct</strong></td>
            </tr>       
			<?php
				$dondathang = getCart();						
				foreach($dondathang as $item)
				{
			?>
				<tr>
				<td><?php echo $item->Id ?></td>
				<td><?php echo $item->Name ?></td>
				<td><?php echo $item->Phone ?></td>
				<td><?php echo $item->Email ?></td>
				<td><?php echo $item->Address ?></td>
				<td><?php echo $item->IdProduct ?></td>
				</tr>
			<?php
				}
			?>       
		</table>
		</div>
		<p align="center">&nbsp; </p></td>
	</tr>
	<tr>
		<td align="center" height=20px><b>SmileQuangKK@gmail.com</b></td>
	</tr>
</table>
</div>
</body>
</html>
