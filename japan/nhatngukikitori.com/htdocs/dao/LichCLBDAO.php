<?php
	function readLichCLBStander()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM clblich",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsLichCLB();
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];					
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function updateLichCLB($Id, $Content)
	{
		include 'config.php';				
		$sql = "UPDATE clblich SET Content='".$Content."' where Id=" .$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function readLichCLB()
	{
		include 'config.php';	
		$sql = "SELECT * FROM clblich WHERE Id = 1";
		$result = mysql_query($sql,$conn);
		$item = new clsLichCLB();
		$item->Id = 0;
		$item->Content = "no-name";
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];				
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>