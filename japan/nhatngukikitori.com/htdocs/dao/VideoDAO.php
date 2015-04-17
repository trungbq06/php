<?php

	function createVideo($Title, $Url)
	{
		include 'config.php';
		$sql = "INSERT INTO video(Title, Url) VALUES('" .$Title ."','" .$Url ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	

	function readVideo()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM video ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsVideo();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Url = $row['Url'];					
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteVideo($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM video WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getVideoById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM video WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsVideo();
		$item->Id = 0;
		$item->Title = "no-name";
		$item->Url = "images/no-image.png";	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Url = $row['Url'];			
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
?>