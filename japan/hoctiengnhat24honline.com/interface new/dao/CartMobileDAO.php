<?php
	function createCart($IdAccount, $Value, $Type)
	{
		include 'config.php';
		$sql = "INSERT INTO cartmobile(IdAccount, Value, Type) VALUES(" .$IdAccount .",'" .$Value ."','" .$Type ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteCart($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM cartmobile WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readCart()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM cartmobile GROUP BY IdAccount ORDER BY Id",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsCartMobile();
			$item->Id = $row['Id'];
			$item->IdAccount = $row['IdAccount'];
			$item->Value = $row['Value'];
			$item->Type = $row['Type'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getCartByIdAccount($IdAcc)
	{
		include 'config.php';	
		$sql = "SELECT * FROM cartmobile WHERE IdAccount=".$IdAcc;
		$result = mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsCartMobile();
			$item->Id = $row['Id'];
			$item->IdAccount = $row['IdAccount'];
			$item->Value = $row['Value'];	
			$item->Type = $row['Type'];	
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
?>