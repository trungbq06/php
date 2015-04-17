<?php
	function createDesAccount($Name, $Phone, $Email, $IdAcc)
	{
		include 'config.php';
		$sql = "INSERT INTO descriptionaccount(Name, Phone, Email, IdAccount) VALUES('".$Name."', '".$Phone."', '".$Email."', ".$IdAcc.")";
		$result=mysql_query($sql,$conn);
		mysql_close($conn);
	}
	
	function readDesAccount()
	{
		include 'config.php';
		$sql= "SELECT * FROM descriptionaccount";
		$result= mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsDesAccount;
			$item-> Name = 	$row['Name'];
			$item-> Phone = $row['Phone'];
			$item-> Email = $row['Email'];
			$arr[] = $item;
		}
		mysql_close($conn);
		return $arr;
	}
	
	function readDesAccByIdAcc($IdAcc)
	{
		include 'config.php';
		$sql ="SELECT * FROM descriptionaccount WHERE IdAccount=".$IdAcc;
		$result = mysql_query($sql, $conn);
		$item = new clsDesAccount();
		$item->Id = 0;
		$item->Name = 'No-Name';
		$item->Phone = 'No-Phone';
		$item->Email = 'No-Email';
		$item->IdAccount = 'No-IdAccount';
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Phone = $row['Phone'];	
			$item->Email = $row['Email'];
			$item->IdAccount = $row['IdAccount'];	
			break;
		}
		mysql_close($conn);	  
		return $item;		
	}
	
	function readOnceDesAccount($IdAcc)
	{
		include 'config.php';
		$sql ="SELECT * FROM descriptionaccount WHERE IdAccount=".$IdAcc;
		$result = mysql_query($sql, $conn);
		$item = new clsDesAccount();
		$item->Id = 0;
		$item->Name = 'No-Name';
		$item->Phone = 'No-Phone';
		$item->Email = 'No-Email';
		$item->IdAccount = 'No-IdAccount';
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Phone = $row['Phone'];	
			$item->Email = $row['Email'];
			$item->IdAccount = $row['IdAccount'];	
			break;
		}
		mysql_close($conn);	  
		return $item;	
	}
	
	function getNameByIdDeaAcc($Id)
	{
		include 'config.php';
		$sql = "SELECT * FROM descriptionaccount WHERE Id = '".$Id."'";
		$result = mysql_query($sql);
		mysql_close($conn);
		return $result;
	}
	
	function delDesByIdAcc($IdAccount)
	{
		include 'config.php';
		$sql = "DELETE FROM descriptionaccount WHERE IdAccount=".$IdAccount."";
		$result = mysql_query($sql, $conn);
		mysql_close($conn);
	}
?>