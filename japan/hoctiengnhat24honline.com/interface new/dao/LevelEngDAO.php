<?php
	function readLevelEng()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM leveleng",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsLevelEng();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getInfoLevelEngById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM leveleng WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsLevelEng();
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