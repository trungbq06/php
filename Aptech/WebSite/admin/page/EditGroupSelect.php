<?php
	include '../../dtos/clsGroupProducts.php';
	require '../../model/GroupProductsModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Đã chọn thương hiệu thay thế</title>
<style>
.style1 {color: #FF0000}
</style>
<script language="JavaScript" type="text/javascript">     
function check_formGroup()
	{
	tenmenu=document.form1.namethaythe.value;		
	if(tenmenu=="")
	{			
		alert ("Chưa nhập tên thay thế !"); 
		document.form1.namethaythe.focus();
		return false;
	}		
	document.form1.submit();
}
</script>
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
		<td height="463" align="center">
		<?php
		$groupSelected = $_POST["txtSelectedId"];
		$NameGroup = getGroupById($groupSelected);
		?>
		<h2 align="center">Đã chọn thương hiệu <b style="color:red"></b> trong danh mục.</h2>
		<form id="form1" name="form1" method="post" action="EditGroupFinish.php">
		<table border="1px solid gray" cellspacing="0px">
			<tr>
				<th>Tên thương hiệu</th>
				<th>Tên thay thế</th>
				<th>Đồng ý</th>
			</tr>
			<tr>
				<td><input type="text" name="id" value="<?php echo $NameGroup->Id ?>" hidden><?php echo $NameGroup->Name ?></td>
				<td><input type="text" name="namethaythe" size="20"></td>
				<td><input type="submit" value="Đồng ý" onclick="return check_formGroup();"></td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
	<tr>
		<td align="center"><b>SmileQuangKK@gmail.com</b></td>
	</tr>
</table>
</div>
</body>
</html>
