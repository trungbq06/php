<?php
		include '../model/clsSlide.php';
		include '../dao/SlideDAO.php';
		
		$btnAction = $_POST["commit"];
		
		if($btnAction=='Cập Nhật'){
			$Id = $_POST["id"];
			$Url = $_POST["url"];
			updateSlide($Id, $Url);
			Header("Location:../Admin/Slide.php");
		}
?>