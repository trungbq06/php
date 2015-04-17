<?php
		include '../entity/clsTopic.php';
		include '../dao/TopicDAO.php';
		
		include '../entity/clsDesTopic.php';
		include '../dao/DesTopicDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$STT = $_POST["stt"];
			$Title = $_POST["title"];
			$IdGroupMenu = $_POST["idGroupMenu"];
			$IdLevel = $_POST["idLevel"];
			$IdLearning = $_POST["idLearning"];
			$Content = $_POST["content"];
			
			createTopic($STT, $Title, $IdGroupMenu, $IdLevel, $IdLearning);
			$IdTopic = getIdMax();
			createDesTopic($Content, $IdTopic);
		
			$url = "Location:../admin/ThemBaiGiang.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning;
			Header($url);
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			deleteTopic($Id);
			deleteDesTopic($Id);
			Header("Location:../admin/ThanhCong.php");
		}
?>