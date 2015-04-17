<?php
	function readLearnEngTest()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM learnengtest",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsLearnEngTest();
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
		$sql = "SELECT * FROM learnengtest WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsLearnEngTest();
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