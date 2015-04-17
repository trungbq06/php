<?php
	function createDesTopicEng($Content, $IdTopicEng)
	{
		include 'config.php';
		$sql = "INSERT INTO destopiceng(Content, IdTopicEng) VALUES('" .$Content ."'," .$IdTopicEng .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteDesTopicEng($IdTopicEng)
	{
		include 'config.php';
		$sql = "DELETE FROM destopiceng WHERE IdTopicEng=" .$IdTopicEng ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getDesTopicByIdTopicEng($IdTopicEng)
	{
		include 'config.php';	
		$sql = "SELECT * FROM destopiceng WHERE IdTopicEng	= " .$IdTopicEng;
		$result = mysql_query($sql,$conn);
		$item = new clsDesTopicEng();
		$item->Id = 0;
		$item->Content = "no-content";
		$item->IdTopicEng = 0;	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];	
			$item->IdTopicEng = $row['IdTopicEng'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>