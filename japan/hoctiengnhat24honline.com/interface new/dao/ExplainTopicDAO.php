<?php
	function createExTopic($Content, $IdTopic)
	{
		include 'config.php';
		$sql = "INSERT INTO explaintopic(Content, IdTopic) VALUES('" .$Content ."'," .$IdTopic .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteExTopic($IdTopic)
	{
		include 'config.php';
		$sql = "DELETE FROM explaintopic WHERE IdTopic=".$IdTopic ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getExTopicByIdTopic($IdTopic)
	{
		include 'config.php';	
		$sql = "SELECT * FROM explaintopic WHERE IdTopic=".$IdTopic;
		$result = mysql_query($sql,$conn);
		$item = new clsExplainTopic();
		$item->Id = 0;
		$item->Content = "";
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