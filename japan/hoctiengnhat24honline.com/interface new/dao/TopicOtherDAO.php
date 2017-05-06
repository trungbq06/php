<?php
	function createTopicOth($Title, $IdLevel)
	{
		include 'config.php';
		$sql = "INSERT INTO topicother(Title, IdLevel) VALUES('" .$Title ."'," .$IdLevel .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readTopicOth($IdLevel)
	{
		include 'config.php';	
		$sql="SELECT * FROM topicother WHERE IdLevel=".$IdLevel." ORDER BY Title";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTopicOther();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->IdLevel = $row['IdLevel'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteTopicOth($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM topicother WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getIdMax()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM topicother",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getInfoTopicOthById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM topicother WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsTopicOther();
		$item->Id = 0;
		$item->Title = "no-title";
		$item->IdLevel = 0;	
		while($row = mysql_fetch_array($result))
		{	
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->IdLevel = $row['IdLevel'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
?>