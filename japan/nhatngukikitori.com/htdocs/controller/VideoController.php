<?php
		include '../model/clsVideo.php';
		include '../dao/VideoDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$Url = $_POST["url"];
			createVideo($Title, $Url);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$Id = $_POST["id"];
			deleteVideo($Id);
			Header("Location:../Admin/XoaVideo.php");
		}
?>