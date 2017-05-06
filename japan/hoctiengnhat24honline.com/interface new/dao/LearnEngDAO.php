<?php
	function readLearnEng()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM learneng",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsLearnEng();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getInfoLearnEngById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM learneng WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsLearnEng();
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