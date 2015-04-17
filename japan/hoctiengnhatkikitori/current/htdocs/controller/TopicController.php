<?php
		include '../entity/clsTopic.php';
		include '../dao/TopicDAO.php';
		
		include '../entity/clsExplainTopic.php';
		include '../dao/ExplainTopicDAO.php';
		
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
			$Explain = $_POST["explain"];
			
			createTopic($STT, $Title, $IdGroupMenu, $IdLevel, $IdLearning);
			$IdTopic = getIdMax();
			createDesTopic($Content, $IdTopic);
			createExTopic($Explain, $IdTopic);
		
			$url = "Location:../admin/ThemBaiGiang.php?IdLevel=".$IdLevel."&IdLearning=".$IdLearning;
			Header($url);
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			deleteTopic($Id);
			deleteDesTopic($Id);
			deleteExTopic($Id);
			Header("Location:../admin/ThanhCong.php");
		}
?>