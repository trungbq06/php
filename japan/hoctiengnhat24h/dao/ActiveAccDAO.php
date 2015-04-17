<?php
	function createActiveAccount($Status, $NoTe, $IdAccount)
	{
		include	'config.php';
		$sql= "INSERT INTO activeaccount(Status, NoTe, IdAccount)VALUES('No','".$NoTe."', ".$IdAccount.")";
		$result = mysql_query($sql, $conn);
		mysql_close($conn);
	}
	
	function readActiveAccount($IdAcc)
	{
		include 'config.php';
		$sql = "SELECT * FROM activeaccount WHERE IdAccount=".$IdAcc;
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsActiveAcc;
			$item->Id = $row['Id'];
			$item->Status = $row['Status'];
			$item->NoTe = $row['NoTe'];	
			$item->IdAccount = $row['IdAccount'];		
			$arr[] = $item;
		}
		mysql_close($conn);
		return $arr;	
	}
	
	function readAtAccByIdAcc($IdAcc)
	{
		include 'config.php';
		$sql ="SELECT * FROM activeaccount WHERE IdAccount=".$IdAcc;
		$result = mysql_query($sql, $conn);
		$item = new clsActiveAcc();
		$item->Id = 0;
		$item->Status = 'No';
		$item->NoTe = 'No-NoTe';
		$item->IdAccount = 0;
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Status = $row['Status'];
			$item->NoTe = $row['NoTe'];	
			$item->IdAccount = $row['IdAccount'];		
			break;
		}
		mysql_close($conn);	  
		return $item;		
	}
	
	function delActiveByIdacc($IdAccount)
	{
		include 'config.php';
		$sql = "DELETE FROM activeaccount WHERE IdAccount=".$IdAccount."";
		$result = mysql_query($sql, $conn);
		mysql_close($conn);
	}
	
	function upDateAtAc($Id, $Status, $Note)
	{
		include 'config.php';
		$sql = "UPDATE activeaccount SET Status ='".$Status."', NoTe='".$Note."' WHERE Id=".$Id." ";
		$result = mysql_query($sql, $conn);
		mysql_close($conn);
	}

        function updateByIaAcc($IdAcc, $Status)
	{
		include 'config.php';
		$sql = "UPDATE activeaccount SET Status ='".$Status."' WHERE IdAccount=".$IdAcc."";
		$result = mysql_query($sql, $conn);
		mysql_close($conn);
	}
?>