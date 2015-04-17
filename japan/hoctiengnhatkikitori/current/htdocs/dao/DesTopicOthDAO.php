<?php
	function createDesTopicOth($Content, $IdTopic)
	{
		include 'config.php';
		$sql = "INSERT INTO destopicother(Content, IdTopicOther) VALUES('" .$Content ."'," .$IdTopic .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteDesTopicOth($IdTopic)
	{
		include 'config.php';
		$sql = "DELETE FROM destopicother WHERE IdTopicOther=" .$IdTopic ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getDesTopicOthByIdTopic($IdTopic)
	{
		include 'config.php';	
		$sql = "SELECT * FROM destopicother WHERE IdTopicOther	= " .$IdTopic;
		$result = mysql_query($sql,$conn);
		$item = new clsDesTopicOther();
		$item->Id = 0;
		$item->Content = "no-content";
		$item->IdTopicOther = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];	
			$item->IdTopicOther = $row['IdTopicOther'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>