<?php
	function readGMenu()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM groupmenu",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsGroupMenu();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getInfoMenuById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM groupmenu WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsGroupMenu();
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