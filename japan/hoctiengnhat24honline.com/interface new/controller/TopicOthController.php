<?php
		include '../entity/clsTopicOther.php';
		include '../dao/TopicOtherDAO.php';
		
		include '../entity/clsDesTopicOther.php';
		include '../dao/DesTopicOthDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$IdLevel = $_POST["idLevel"];
			$Content = $_POST["content"];
			
			createTopicOth($Title, $IdLevel);
			$IdTopic = getIdMax();
			createDesTopicOth($Content, $IdTopic);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			deleteTopicOth($Id);
			deleteDesTopicOth($Id);
			Header("Location:../admin/ThanhCong.php");
		}
?>