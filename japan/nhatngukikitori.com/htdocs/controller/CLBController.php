<?php
		include '../model/clsCLBNews.php';
		include '../dao/CLBNewsDAO.php';
		
		include '../model/clsDescriptionCLBNews.php';
		include '../dao/DescriptionCLBNewsDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$Summary = $_POST["summary"];
			$Content = $_POST["content"];
			
			createCLBNews($Title, $Summary);
			$IdCLBNews = getIdMax();
			createDescriptionCLB($Content, $IdCLBNews);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$IdCLBNews = $_POST["id"];
			deleteCLBNews($IdCLBNews);
			deleteDescriptionCLB($IdCLBNews);
			Header("Location:../Admin/XoaCLB.php");
		}
?>