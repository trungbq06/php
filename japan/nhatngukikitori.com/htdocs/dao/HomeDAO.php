<?php
	function readHomeStander()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM home",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsHome();
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];					
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function updateHome($Id, $Content)
	{
		include 'config.php';				
		$sql = "UPDATE home SET Content='".$Content."' where Id=" .$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function readHome()
	{
		include 'config.php';	
		$sql = "SELECT * FROM home WHERE Id = 1";
		$result = mysql_query($sql,$conn);
		$item = new clsHome();
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