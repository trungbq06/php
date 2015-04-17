<?php
		include '../entity/clsDocument.php';
		include '../dao/DocumentDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$Summary = $_POST["summary"];
			$UrlDownload = $_POST["urldownload"];
			$IdType = $_POST["IdType"];
			createDoc($Title, $Summary, $UrlDownload, $IdType);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			$IdType = $_POST["IdType"];
			deleteDoc($id);
			Header("Location:../admin/XoaTLHocTap.php?IdType=".$IdType);
		}
?>