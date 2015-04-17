<?php
		include '../entity/clsAccount.php';
		include '../entity/clsDesAccount.php';
		include '../entity/clsActiveAcc.php';
		
		include '../dao/AccountDAO.php';
		include '../dao/DesAccountDAO.php';
		include '../dao/ActiveAccDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Đăng Kí'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			$Name = $_POST['fullname'];
			$Phone = $_POST['phone'];
			$Email = $_POST['email'];
			$count = checkUserAccount($Username);
			if($count == 0){		
				createAccount($Username, $Password);
				$IdAcc = getIdMaxAcc();	
				createDesAccount($Name, $Phone, $Email, $IdAcc);
				createActiveAccount(0, '', $IdAcc);
				Header("Location:../pages/ThanhCong.php");
			}else{
				$message = 'Tài Khoản Đã Tồn Tại. Mời Nhập Tên Tài Khoản Khác!';
				$local ="Location:../pages/DangKi.php?messageDK=".$message."";
				Header($local);
				}
				
		}else if($btnAction=="Lấy Mật Khẩu"){
			$Username = $_POST["username"];
			$Phone = $_POST["phone"];
			$pass = getPass($Username, $Phone);
			
			echo $pass;
			$url = "Location:../pages/MatKhau.php";
			if($pass=='No-Password'){
				$message = 'Tài Khoản Hoặc Mật Khẩu Không Đúng. Xin Nhập Lại!';
				$url = "Location:../pages/QuenMK.php?messageMK=".$message."";
			}else{
				$url = "Location:../pages/MatKhau.php?pass=".$pass."";
			}
			Header($url);
			
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteAccount($id);
			delDesByIdAcc($id);
			delActiveByIdacc($id);
			Header("Location:../admin/TaiKhoan.php");
			
		}else if($btnAction == 'Đăng Nhập'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			$count = checkAccount($Username, $Password);
			if($count==1){
				session_start();
				$_SESSION['loginAcc'] = 'Yes';
				$id = getIdByAcc($Username, $Password);
				$_SESSION['id'] = $id;
				echo "<script>location.href='".$_SERVER['HTTP_REFERER']."';</script>";
			}else{
				$message = 'Tài Khoản Hoặc Mật Khẩu Không Tồn Tại!';
				Header("Location:../pages/Home.php?messageDN=".$message."");
			}
				
		}else if($btnAction=='Thoát'){
			session_start();
			session_destroy();
			Header("Location:../pages/Home.php");
			
		}else if($btnAction=='Cập Nhật'){
			$IdAt = $_POST['IdAt'];
			$Status = $_POST['status'];
			$Note = $_POST['ghichu'];
			upDateAtAc($IdAt, $Status, $Note);
			header("Location:../admin/TaiKhoan.php");
		}
?>