<?php
		include '../model/clsTLHocTap.php';
		include '../dao/TLHocTapDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$Summary = $_POST["summary"];
			$UrlDownload = $_POST["urldownload"];
			createHocTap($Title, $Summary, $UrlDownload);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteHocTap($id);
			Header("Location:../Admin/XoaTLHocTap.php");
		}
?>