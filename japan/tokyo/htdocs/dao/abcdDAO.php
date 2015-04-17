<?php
	function createABCD($dapanA, $dapanB, $dapanC, $dapanD, $IdCauHoi)
	{
		include 'config.php';
		$sql = "INSERT INTO dapanabcd(A, B, C, D, IdCauHoi) VALUES('" .$dapanA ."','".$dapanB."','".$dapanC."','".$dapanD."',".$IdCauHoi.")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function readABCD($IdCauHoi)
	{
		include 'config.php';	
		$sql="SELECT * FROM dapanabcd WHERE IdCauHoi=".$IdCauHoi;
		$result = mysql_query($sql, $conn);
		$item = new clsDapAnABCD();
		$item->Id = 0;
		$item->A = 'no-content';
		$item->B = 'no-content';
		$item->C = '';	
		$item->D = '';	
		$item->IdCauHoi = 0;			
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->A = $row['A'];
			$item->B = $row['B'];
			$item->C = $row['C'];	
			$item->D = $row['D'];	
			$item->IdCauHoi = $row['IdCauHoi'];		
			break;			
		}
		mysql_close($conn);	  
		return $item;
	};
	
	function delABCDByIdCH($IdCauHoi)
	{
		include 'config.php';
		$sql = "DELETE FROM dapanabcd WHERE IdCauHoi=".$IdCauHoi;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
?>