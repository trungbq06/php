<?php
	function readKhoaHoc()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM khoahoc",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsKhoaHoc();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getNameKhoaHocById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM khoahoc WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsKhoaHoc();
		$item->Id = 0;
		$item->Name = "no-name";
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];			
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>