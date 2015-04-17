<?php	
		include '../entity/clsTopicHA.php';
		include '../dao/TopicHADAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$Content = $_POST["content"];
		
			createTopicHA($Title, $Content);
			Header("Location:../admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$Id = $_POST["Id"];
			deleteTopicHA($Id);
			Header("Location:../admin/ThanhCong.php");
		}
?>