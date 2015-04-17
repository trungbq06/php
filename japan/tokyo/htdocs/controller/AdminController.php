<?php
		include '../entity/clsAdmin.php';
		include '../dao/AdminDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			createAdmin($Username, $Password);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteAdmin($id);
			Header("Location:../admin/XoaAdmin.php");
		}else if($btnAction=='Login'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			$count = checkAdmin($Username, $Password);
			if($count==1){
				session_start();
				$_SESSION['loginAdmin'] = 'Yes';
				Header("Location:../admin/Home.php");
			}else{
				$message = 'Sai Tài Khoản Hoặc Mật Khẩu!';
				$local = "Location:../Login.php?message=".$message."";
				Header($local);
			}
		}else if($btnAction=='Logout'){
			session_start();
			session_destroy();
			Header("Location:../pages/Home.php");
		}
?>