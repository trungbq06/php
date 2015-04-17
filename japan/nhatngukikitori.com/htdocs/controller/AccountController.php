<?php
		include '../model/clsAccount.php';
		include '../dao/AccountDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			createAccount($Username, $Password);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteAccount($id);
			Header("Location:../Admin/XoaTaiKHoan.php");
		}else if($btnAction=='Login'){
			$Username = $_POST["username"];
			$Password = $_POST["password"];
			$count = checkAccount($Username, $Password);
			if($count==1){
				session_start();
				$_SESSION['login'] = 'Yes';
				Header("Location:../Admin/Index.php");
			}else
				Header("Location:../Admin/Login.php");
		}else if($btnAction=='Logout'){
			session_start();
			session_destroy();
			Header("Location:../pages/Home.php");
		}
?>