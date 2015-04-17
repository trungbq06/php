<?php
	function createDapAn($DapAn, $IdCauHoi)
	{
		include 'config.php';
		$sql = "INSERT INTO dapandung(DapAn, IdCauHoi) VALUES('" .$DapAn ."',".$IdCauHoi.")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function readDapAn($IdCauHoi)
	{
		include 'config.php';	
		$sql="SELECT * FROM dapandung WHERE IdCauHoi=".$IdCauHoi;
		$result = mysql_query($sql, $conn);
		$DapAn = 'no-content';
		while($row = mysql_fetch_array($result))
		{
			$DapAn = $row['DapAn'];
			break;			
		}
		mysql_close($conn);	  
		return $DapAn;
	};
	
	function delDapAnByIdCH($IdCauHoi)
	{
		include 'config.php';
		$sql = "DELETE FROM dapandung WHERE IdCauHoi=".$IdCauHoi;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
?>