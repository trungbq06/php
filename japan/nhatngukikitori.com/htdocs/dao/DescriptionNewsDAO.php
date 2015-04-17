<?php
	function createDescriptionNews($Content, $IdNews)
	{
		include 'config.php';
		$sql = "INSERT INTO descriptionnews(Content, IdNews) VALUES('" .$Content ."'," .$IdNews .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteDescriptionNews($IdNews)
	{
		include 'config.php';
		$sql = "DELETE FROM descriptionnews WHERE IdNews=" .$IdNews ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getDNByIdNews($IdNews)
	{
		include 'config.php';	
		$sql = "SELECT * FROM descriptionnews WHERE IdNews= " .$IdNews;
		$result = mysql_query($sql,$conn);
		$item = new clsDescriptionNews();
		$item->Id = 0;
		$item->Content = "no-content";
		$item->IdNews = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];
			$item->IdNews = $row['IdNews'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
?>