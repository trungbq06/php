<?php
	function createCauHoi($Text, $Image, $Mp3, $IdDeThi)
	{
		include 'config.php';
		$sql = "INSERT INTO cauhoi(Text, Image, Mp3, IdDeThi) VALUES('" .$Text ."','".$Image."','".$Mp3."',".$IdDeThi.")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readCauHoi($IdDeThi)
	{
		include 'config.php';	
		$sql="SELECT * FROM cauhoi WHERE IdDeThi=".$IdDeThi;
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsCauHoi();
			$item->Id = $row['Id'];
			$item->Text = $row['Text'];
			$item->Image = $row['Image'];	
			$item->Mp3 = $row['Mp3'];	
			$item->IdDeThi = $row['IdDeThi'];						
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getIdMaxCauHoi()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM cauhoi",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function delCauHoiByIdDe($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM cauhoi WHERE IdDeThi=".$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
?>