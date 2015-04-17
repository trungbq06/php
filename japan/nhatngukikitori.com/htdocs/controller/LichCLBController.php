<?php
		include '../model/clsLichCLB.php';
		include '../dao/LichCLBDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Cập Nhật'){
			$Id = 1;
			$Content = $_POST["content"];
			updateLichCLB($Id, $Content);
			Header("Location:../Admin/ThanhCong.php");
		}
?>