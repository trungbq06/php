<?php
		include '../model/clsRegistration.php';
		include '../dao/RegistrationDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Đăng Kí'){
			$Name = $_POST["name"];
			$Phone = $_POST["phone"];
			$Email = $_POST["email"];
			$Address = $_POST["address"];
			$IdKhoaHoc = $_POST["idkhoahoc"];
			createRegistration($Name, $Phone, $Email, $Address, $IdKhoaHoc);
			Header("Location:../pages/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["id"];
			deleteRegistration($id);
			Header("Location:../Admin/ThanhCong.php");
		}
?>