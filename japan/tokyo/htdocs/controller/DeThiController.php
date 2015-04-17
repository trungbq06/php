<?php
		include '../entity/clsDeThi.php';
		include '../dao/DeThiDAO.php';
		
		include '../entity/clsCauHoi.php';
		include '../dao/CauHoiDAO.php';
		
		include '../entity/clsDapAnABCD.php';
		include '../dao/abcdDAO.php';
		
		include '../entity/clsDapAnDung.php';
		include '../dao/DapAnDAO.php';
		
		$btnAction = $_POST["commit"];
			
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			createDeThi($Title, $IdLevel, $IdLearning);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Cập Nhật'){
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			$url = "Location:../admin/ThemCauHoi.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning;
			Header($url);
		}else if($btnAction=='Thêm Câu Hỏi'){
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			$IdDeThi = $_POST["idDeThi"];
			$VanBan = $_POST["vanban"];
			$Image = $_POST["image"];
			$Mp3 = $_POST["mp3"];
			$DapAnA = $_POST["dapanA"];
			$DapAnB = $_POST["dapanB"];
			$DapAnC = $_POST["dapanC"];
			$DapAnD = $_POST["dapanD"];
			$DapAn = $_POST["dapan"];
			
			createCauHoi($VanBan, $Image, $Mp3, $IdDeThi);
			$IdCauHoi = getIdMaxCauHoi();
			createABCD($DapAnA, $DapAnB, $DapAnC, $DapAnD, $IdCauHoi);
			createDapAn($DapAn, $IdCauHoi);
			
			$url = "Location:../admin/ThemCauHoi.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning."&IdDeThi=".$IdDeThi;
			Header($url);
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			delDeThiById($Id);
			$Topic = readCauHoi($Id);
			foreach($Topic as $item)
			{
				delDapAnByIdCH($item->Id);
				delABCDByIdCH($item->Id);
			}
			delCauHoiByIdDe($Id);
			
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Cập Nhật English'){
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			$url = "Location:../admin/ThemCauHoiEng.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning;
			Header($url);
		}else if($btnAction=='Thêm Câu Hỏi English'){
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			$IdDeThi = $_POST["idDeThi"];
			$VanBan = $_POST["vanban"];
			$Image = $_POST["image"];
			$Mp3 = $_POST["mp3"];
			$DapAnA = $_POST["dapanA"];
			$DapAnB = $_POST["dapanB"];
			$DapAnC = $_POST["dapanC"];
			$DapAnD = $_POST["dapanD"];
			$DapAn = $_POST["dapan"];
			
			createCauHoi($VanBan, $Image, $Mp3, $IdDeThi);
			$IdCauHoi = getIdMaxCauHoi();
			createABCD($DapAnA, $DapAnB, $DapAnC, $DapAnD, $IdCauHoi);
			createDapAn($DapAn, $IdCauHoi);
			
			$url = "Location:../admin/ThemCauHoiEng.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning."&IdDeThi=".$IdDeThi;
			Header($url);
		}
?>