<?php
	function createDesTopic($Content, $IdTopic)
	{
		include 'config.php';
		$sql = "INSERT INTO descriptiontopic(Content, IdTopic) VALUES('" .$Content ."'," .$IdTopic .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteDesTopic($IdTopic)
	{
		include 'config.php';
		$sql = "DELETE FROM descriptiontopic WHERE IdTopic=" .$IdTopic ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getDesTopicByIdTopic($IdTopic)
	{
		include 'config.php';	
		$sql = "SELECT * FROM descriptiontopic WHERE IdTopic	= " .$IdTopic;
		$result = mysql_query($sql,$conn);
		$item = new clsDesTopic();
		$item->Id = 0;
		$item->Content = "no-content";
		$item->IdTopic = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];	
			$item->IdTopic = $row['IdTopic'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>