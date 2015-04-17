<?php
		include '../entity/clsPage.php';
		include '../dao/PageDAO.php';
		
		$btnAction = $_POST["commit"];
			
		if($btnAction=='Cập Nhật'){
			$id = $_POST["id"];
			$Content = $_POST["content"];
			updatePage($id, $Content);
			Header("Location:../admin/ThanhCong.php");
		}
?>