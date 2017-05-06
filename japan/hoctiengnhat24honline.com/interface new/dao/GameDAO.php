<?php	
	function readGames()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM games",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsGame();
			$item->id = $row['id'];
			$item->name = $row['name'];
			$item->image = $row['image'];
			$item->path = $row['path'];
			$item->mobile = $row['mobile'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
	
	function readGamesByType($Mobile)
	{
		include 'config.php';			
		$sql ="SELECT * FROM games WHERE mobile=".$Mobile;
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsGame();
			$item->id = $row['id'];
			$item->name = $row['name'];
			$item->image = $row['image'];
			$item->path = $row['path'];
			$item->mobile = $row['mobile'];
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
	
	function readGameById($Id)
	{
		include 'config.php';
		$sql ="SELECT * FROM games WHERE id=".$Id;
		$result = mysql_query($sql, $conn);
		$item = new clsGame();
		$item->id = 0;
		$item->name = '';
		$item->image = '';
		$item->path = '';
		$item->mobile = '';		
		while($row = mysql_fetch_array($result))
		{
			$item->id = $row['id'];
			$item->name = $row['name'];
			$item->image = $row['image'];
			$item->path = $row['path'];
			$item->mobile = $row['mobile'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	}	
?>