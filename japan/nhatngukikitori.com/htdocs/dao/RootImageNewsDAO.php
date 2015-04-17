<?php
	function createRIN($Url, $IdNews)
	{
		include 'config.php';
		$sql = "INSERT INTO rootimagenews(Url, IdNews) VALUES('" .$Url ."'," .$IdNews .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteRIN($IdNews)
	{
		include 'config.php';
		$sql = "DELETE FROM rootimagenews WHERE IdNews=" .$IdNews ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	
	function getRINByIdNews($IdNews)
	{
		include 'config.php';	
		$sql = "SELECT * FROM rootimagenews WHERE IdNews= " .$IdNews;
		$result = mysql_query($sql,$conn);
		$item = new clsRootImageNews();
		$item->Id = 0;
		$item->Url = "images/no-image.jpg";
		$item->IdNews = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Url = $row['Url'];
			$item->IdNews = $row['IdNews'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
?>