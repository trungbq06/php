<?php
	function createAlbum($Title, $RootImage, $Content)
	{
		include 'config.php';	
		$sql = "INSERT INTO albumimage(Title, RootImage, Content) VALUES('" .$Title ."','" .$RootImage ."','" .$Content ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readAlbum()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM albumimage ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsAlbum();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->RootImage = $row['RootImage'];		
			$item->Content = $row['Content'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteAlbum($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM albumimage WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getAlbumById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM albumimage WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsAlbum();
		$item->Id = 0;
		$item->Title = "no-name";
		$item->RootImage = "images/no-image.png";	
		$item->Content = "no-content";	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->RootImage = $row['RootImage'];		
			$item->Content = $row['Content'];				
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>