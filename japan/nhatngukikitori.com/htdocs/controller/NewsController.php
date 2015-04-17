<?php
		include '../model/clsNews.php';
		include '../dao/NewsDAO.php';
		
		include '../model/clsRootImageNews.php';
		include '../dao/RootImageNewsDAO.php';
		
		include '../model/clsDescriptionNews.php';
		include '../dao/DescriptionNewsDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Thêm'){
			$Title = $_POST["title"];
			$RootImageNews = $_POST["rootimagenews"];
			$Summary = $_POST["summary"];
			$Content = $_POST["content"];
			
			createNews($Title, $Summary);
			$IdNews = getIdMax();
			createRIN($RootImageNews, $IdNews);
			createDescriptionNews($Content, $IdNews);
			Header("Location:../Admin/ThanhCong.php");
		}else if($btnAction=='Xóa'){
			$IdNews = $_POST["id"];
			deleteNews($IdNews);
			deleteRIN($IdNews);
			deleteDescriptionNews($IdNews);
			Header("Location:../Admin/XoaTinTuc.php");
		}
?>