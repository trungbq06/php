﻿<?php
	include '../../dtos/clsService.php';
	require '../../model/ServiceModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Finish</title>
<style>
.style1 {color: #FF0000}
</style>
</head>

<body>
<div style="text-align:center">
<table width="756" height="818" border="1px solid gray" cellspacing="0px">
	<tr>
		<td>
			<img src="web-design-sthelens-930x300.jpg">
				<?php include 'menutrong.php'?>
		</td>
	</tr> 
	<tr>
		<td height="463">
		<?php
		$SerSelected = $_POST["txtSelectedId"];	
		$NameService = getServiceById($SerSelected);
		DeleteServiceById($SerSelected);
		?>
		<h2 align="center">Đã xóa dịch vụ <b style="color:red"><?php echo $NameService->Name  ?></b> trong danh mục.</h2>
		</td>
	</tr>
	<tr>
		<td align="center"><b>SmileQuangKK@gmail.com</b></td>
	</tr>
</table>
</div>
</body>
</html>
