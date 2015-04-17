<?php
	
	function updatePage($Id, $Content)
	{
		include 'config.php';				
		$sql = "UPDATE pages SET Content='".$Content."' where Id=" .$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function readPage($id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM pages WHERE Id =".$id;
		$result = mysql_query($sql,$conn);
		$item = new clsPage();
		$item->Id = 0;
		$item->Name = "no-name";
		$item->Content = "no-content";
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Content = $row['Content'];				
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>