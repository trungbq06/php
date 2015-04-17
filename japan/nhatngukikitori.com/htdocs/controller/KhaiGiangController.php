<?php
		include '../model/clsKhaiGiang.php';
		include '../dao/KhaiGiangDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$starttime = $_POST["starttime"];
			$endtime = $_POST["endtime"];
			$idKhoaHoc = $_POST["idKhoaHoc"];
			createKhaiGiang($starttime, $endtime, $idKhoaHoc);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$id = $_POST["Id"];
			deleteKhaiGiang($id);
			Header("Location:../Admin/XoaKhaiGiang.php");
		}
?>