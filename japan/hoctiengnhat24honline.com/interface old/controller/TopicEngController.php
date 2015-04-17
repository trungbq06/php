<?php
		include '../entity/clsTopicEng.php';
		include '../dao/TopicEngDAO.php';
	
		include '../entity/clsDesTopicEng.php';
		include '../dao/DesTopicEngDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$STT = $_POST["stt"];
			$Title = $_POST["title"];
			$IdLearning = $_POST["idLearning"];
			$Content = $_POST["content"];
			
			createTopicEng($STT ,$Title, $IdLearning);
			$IdTopic = getIdMax();
			createDesTopicEng($Content, $IdTopic);
		
			$url = "Location:../admin/ThemBGEng.php?IdLearning=".$IdLearning;
			Header($url);
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			deleteTopicEng($Id);
			deleteDesTopicEng($Id);
			Header("Location:../admin/ThanhCong.php");
		}
?>