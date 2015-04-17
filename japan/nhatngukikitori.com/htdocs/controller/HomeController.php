<?php
		include '../model/clsHome.php';
		include '../dao/HomeDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Cập Nhật'){
			$Id = 1;
			$Content = $_POST["content"];
			updateHome($Id, $Content);
			Header("Location:../Admin/ThanhCong.php");
		}
?>