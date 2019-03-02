<?php
	include '../../dtos/clsService.php';
	require '../../model/ServiceModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" language="javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" language="javascript" src="js/product.actions.js"></script>
<title>Xóa dịch vụ</title>
<style>
.style1 {color: #FF0000}
</style>
</head>
<body>
<div style="text-align:center">

<table width="756" height="818" border="1px solid gray" cellspacing="0px">
	<tr>
		<td width="1074">
			<div align="center"><img src="web-design-sthelens-930x300.jpg">
				<?php include 'menutrong.php'?>
			</div>
		</td>
	</tr> 
	<tr>
		<td height="463">
	    <div align="center"><b></b> </div>
	    <h2 align="center" class="style1">Danh sách các dịch vụ</h2>
		<form id="form1" name="form1" method="post" action="DelServiceFinish.php">
		<input type="hidden" id ="txtSelectedId" name ="txtSelectedId">
	    <div align="center">
		<table width="246" border="1" cellspacing="0px">
            <tr>
              <th width="40" scope="row">Id</th>
              <th width="190"><div align="center">Tên dịch vụ</div></th>
			  <th>Delete</th>
			</tr>
			<?php
			$service=getService();
			foreach($service as $item)
			{
			?>
            <tr>
              <th scope="row"><?php echo $item->Id ?></th>
              <td><?php echo $item->Name ?></td>
			  <th> <input type="submit" value="Submit" name="btn<?php echo $item->Id?>" onclick="return DeleteItem(<?php echo $item->Id?>);"/></th>
            </tr>
			<?php
			}
			?>
		</form>	
		</table>
	    </div>
	</td>
</tr>
<tr>
    <td><div align="center"><b>SmileQuangKK@gmail.com</b></div></td>
</tr>
</table>
</div>
</body>
</html>
