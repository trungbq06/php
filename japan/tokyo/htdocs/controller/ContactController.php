<?php
		include '../model/clsContact.php';
		include '../dao/ContactDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Gửi'){
			$Name = $_POST["name"];
			$Email = $_POST["email"];
			$Phone = $_POST["phone"];
			$Message = $_POST["message"];
			createContact($Name, $Email, $Phone, $Message);
			Header("Location:../pages/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteContact($id);
			Header("Location:../Admin/LienHe.php");
		}
?>