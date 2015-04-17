<?php
		include '../entity/clsCartMobile.php';
		include '../dao/CartMobileDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteCart($id);
			Header("Location:../admin/CartMobile.php");
		}
?>