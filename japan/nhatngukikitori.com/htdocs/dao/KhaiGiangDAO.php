<?php
	function createKhaiGiang($StartTime, $EndTime, $IdKhoaHoc)
	{
		include 'config.php';
		$sql = "INSERT INTO khaigiang(StartTime, EndTime, IdKhoaHoc) VALUES('" .$StartTime ."','" .$EndTime ."'," .$IdKhoaHoc .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readKhaiGiang()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM khaigiang ORDER BY IdKhoaHoc",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsKhaiGiang();
			$item->Id = $row['Id'];
			$item->StartTime = $row['StartTime'];
			$item->EndTime = $row['EndTime'];		
			$item->IdKhoaHoc = $row['IdKhoaHoc'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteKhaiGiang($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM khaigiang WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
?>