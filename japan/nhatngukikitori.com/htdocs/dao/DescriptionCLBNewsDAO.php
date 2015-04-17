<?php
	function createDescriptionCLB($Content, $IdCLBNews)
	{
		include 'config.php';
		$sql = "INSERT INTO descriptionclbnews(Content, IdCLBNews) VALUES('" .$Content ."'," .$IdCLBNews .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteDescriptionCLB($IdCLBNews)
	{
		include 'config.php';
		$sql = "DELETE FROM descriptionclbnews WHERE IdCLBNews=" .$IdCLBNews ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getDesCLBByIdCLB($IdCLBNews)
	{
		include 'config.php';	
		$sql = "SELECT * FROM descriptionclbnews WHERE IdCLBNews= " .$IdCLBNews;
		$result = mysql_query($sql,$conn);
		$item = new clsDescriptionCLBNews();
		$item->Id = 0;
		$item->Content = "no-content";
		$item->IdCLBNews = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];
			$item->IdCLBNews = $row['IdCLBNews'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
?>