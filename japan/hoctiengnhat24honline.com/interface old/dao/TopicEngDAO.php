<?php
	function createTopicEng($STT ,$Title, $IdLearnEng)
	{
		include 'config.php';
		$sql = "INSERT INTO topiceng(STT, Title, IdLearnEng) VALUES(".$STT.",'" .$Title ."'," .$IdLearnEng .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readTopicEng($IdLearnEng)
	{
		include 'config.php';	
		$sql="SELECT * FROM topiceng WHERE IdLearnEng=".$IdLearnEng." ORDER BY STT";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTopicEng();
			$item->Id = $row['Id'];
			$item->STT = $row['STT'];
			$item->Title = $row['Title'];
			$item->IdLearnEng = $row['IdLearnEng'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteTopicEng($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM topiceng WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getIdMax()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM topiceng",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getInfoTopicEngById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM topiceng WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsTopicEng();
		$item->Id = 0;
		$item->STT = 0;
		$item->Title = "no-title";
		$item->IdLearnEng = 0;	
		while($row = mysql_fetch_array($result))
		{	
			$item->Id = $row['Id'];
			$item->STT = $row['STT'];
			$item->Title = $row['Title'];
			$item->IdLearnEng = $row['IdLearnEng'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
?>