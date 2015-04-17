<?php
	function readLevel()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM level",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsLevel();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getInfoLevelById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM level WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsLearning();
		$item->Id = 0;
		$item->Name = "no-content";
		while($row = mysql_fetch_array($result))
		{	
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
?>