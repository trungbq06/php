<?php
		include '../entity/clsBanner.php';
		include '../dao/BannerDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Name = $_POST["nameB"];
			$Position = $_POST["position"];
			$Image = $_POST["image"];
			$Url = $_POST["url"];
			createBanner($Name, $Position, $Image, $Url);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["id"];
			deleteBanner($id);
			Header("Location:../admin/XoaQuangCao.php");
		}
?>