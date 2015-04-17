<?php
		include '../model/clsBanner.php';
		include '../dao/BannerDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Cập Nhật'){
			$Id = $_POST["id"];
			$Url = $_POST["url"];
			updateBanner($Id, $Url);
			Header("Location:../Admin/Banner.php");
		}
?>