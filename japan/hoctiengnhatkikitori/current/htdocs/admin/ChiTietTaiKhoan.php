<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	if($_SESSION['loginAdmin'] == 'Yes')
	{
		include "../entity/clsAccount.php";
		include "../dao/AccountDAO.php";
		
		include "../entity/clsActiveAcc.php";
		include "../dao/ActiveAccDAO.php";
		  
		include "../entity/clsDesAccount.php";
		include "../dao/DesAccountDAO.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Chi Tiết Tài Khoản</title>
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
	<div style=" width:980px; margin:0 auto;">	
    	
		<form action="../controller/AccountController.php" method="post">
		<table class="hovertable" style=" width:100%" cellpadding="1" cellspacing="1">
		<caption style="font-weight:bold; font-size:16px; margin-bottom:15px;">Chi Tiết Tài Khoản</caption>
			<tr>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid; padding-top:15px;">Tài Khoản</th>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid">Mật Khẩu</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid; width:150px">Trạng Thái</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid">Họ Tên</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid">Điện Thoại</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid">Email</th>
				<th style="font-size:14px; font-weight:bold; border:#666 1px solid">Ghi Chú</th>
                <th style="font-size:14px; font-weight:bold; border:#666 1px solid">Cập Nhật</th>
			</tr>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
					<?php
					$IdAcc=$_GET['IdAcc'];
                    ?>
				<td style="text-align:center; border-left:1px #666 solid; border-right:1px #666 solid;">
					<?php 
                         echo readAccountById($IdAcc)->Username;
                    ?>
                </td>
				<td style="text-align:center;  border-right:1px #666 solid;">
					<?php 
						echo readAccountById($IdAcc)->Password;
                    ?>
				</td>
				<td style="text-align:center;  border-right:1px #666 solid;">
					<?php 
						$status = readAtAccByIdAcc($IdAcc)->Status;	
					?>
                    <select name="status">
                    	<option value="No"<?php if($status=='No') echo 'selected' ?> >Khóa</option>
                        <option value="Yes"<?php if($status=='Yes') echo 'selected' ?> >Hoạt Động</option>
                    </select>
                    <input type="hidden" name="IdAt" value="<?php echo readAtAccByIdAcc($IdAcc)->Id; ?>" />
				</td>
				<td style="text-align:center;  border-right:1px #666 solid;">
					<?php
                     	echo readDesAccByIdAcc($IdAcc)->Name;
					?>
				</td>
                <td style="text-align:center;  border-right:1px #666 solid;">
					<?php
                      	echo readDesAccByIdAcc($IdAcc)->Phone;
                    ?>
				</td>
                <td style="text-align:center;  border-right:1px #666 solid;">
					<?php
                       echo readDesAccByIdAcc($IdAcc)->Email;
                    ?>
				</td>
				<td style="text-align:center;  border-right:1px #666 solid;">
                 	<input type="text" name="ghichu" value="<?php echo readAtAccByIdAcc($IdAcc)->NoTe; ?>" />
				</td>
				<td style="text-align:center;  border-right:1px #666 solid;">
                 	<input type="submit" name="commit" value="Cập Nhật" />
				</td>
			</tr>	
		</table>
        </form>
	</div>
</body>
</html>
<?php
		}
	}
?>
