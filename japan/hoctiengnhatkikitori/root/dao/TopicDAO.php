<?php
	function createTopic($STT ,$Title, $IdGroupMenu, $IdLevel, $IdLearning)
	{
		include 'config.php';
		$sql = "INSERT INTO topic(STT, Title, IdGroupMenu, IdLevel, IdLearning) VALUES(".$STT.",'" .$Title ."'," .$IdGroupMenu ."," .$IdLevel ."," .$IdLearning .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readTopic($IdGroupMenu, $IdLevel, $IdLearning)
	{
		include 'config.php';	
		$sql="SELECT * FROM topic WHERE IdGroupMenu =".$IdGroupMenu." AND IdLevel=".$IdLevel." AND IdLearning=".$IdLearning." ORDER BY STT";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTopic();
			$item->Id = $row['Id'];
			$item->STT = $row['STT'];
			$item->Title = $row['Title'];
			$item->IdGroupMenu = $row['IdGroupMenu'];
			$item->IdLevel = $row['IdLevel'];	
			$item->IdLearning = $row['IdLearning'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteTopic($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM topic WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getIdMax()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM topic",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getInfoTopicById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM topic WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsTopic();
		$item->Id = 0;
		$item->STT = 0;
		$item->Title = "no-title";
		$item->IdGroupMenu = 0;
		$item->IdLevel = 0;	
		$item->IdLearning = 0;	
		while($row = mysql_fetch_array($result))
		{	
			$item->Id = $row['Id'];
			$item->STT = $row['STT'];
			$item->Title = $row['Title'];
			$item->IdGroupMenu = $row['IdGroupMenu'];
			$item->IdLevel = $row['IdLevel'];	
			$item->IdLearning = $row['IdLearning'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
	
	function read5TopTopic($IdGroupMenu, $IdLevel, $IdLearning)
	{
		include 'config.php';	
		$sql="SELECT * FROM topic WHERE IdGroupMenu =".$IdGroupMenu." AND IdLevel=".$IdLevel." AND IdLearning=".$IdLearning." ORDER BY STT LIMIT 5";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTopic();
			$item->Id = $row['Id'];
			$item->STT = $row['STT'];
			$item->Title = $row['Title'];
			$item->IdGroupMenu = $row['IdGroupMenu'];
			$item->IdLevel = $row['IdLevel'];	
			$item->IdLearning = $row['IdLearning'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>