<?php
	function createTopicHA($Name, $Content)
	{
		include 'config.php';
		$sql = "INSERT INTO topicha(Name, Content) VALUES('" .$Name ."','" .$Content ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readTopicHA()
	{
		include 'config.php';	
		$sql="SELECT * FROM topicha ORDER BY Name";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTopicHA();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Content = $row['Content'];		
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteTopicHA($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM topicha WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getInfoTopicHAById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM topicha WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsTopicHA();
		$item->Id = 0;
		$item->Name = "no-title";
		$item->Content = "no-content";
		while($row = mysql_fetch_array($result))
		{	
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Content = $row['Content'];		
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
?>