<?php
	function createNews($Title, $Summary)
	{
		include 'config.php';
		$sql = "INSERT INTO news(Title, Summary) VALUES('" .$Title ."','" .$Summary ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readNews()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM news ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsNews();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteNews($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM news WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getIdMax()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM news",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getNewsById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM news WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsNews();
		$item->Id = 0;
		$item->Title = "no-name";
		$item->Summary = "no-name";	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
?>