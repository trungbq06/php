<?php
		include '../model/clsAlbum.php';
		include '../dao/AlbumDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$RootImage = $_POST["rootimage"];
			$Content = $_POST["content"];
			createAlbum($Title, $RootImage, $Content);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteAlbum($id);
			Header("Location:../Admin/XoaAlbum.php");
		}
?>