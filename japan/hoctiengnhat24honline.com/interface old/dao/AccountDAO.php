<?php
	function createAccount($Username, $Password)
	{
		include 'config.php';
		$sql = "INSERT INTO account(Username, Password) VALUES('" .$Username ."','" .$Password ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readAccount()
	{
		include 'config.php';			
		$result = mysql_query("SELECT account.Id, account.Username, account.Password FROM account INNER JOIN activeaccount ON account.Id=activeaccount.IdAccount ORDER BY activeaccount.Status DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsAccount();
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
	
	function readAccountById($IdAcc)
	{
		include 'config.php';
		$sql ="SELECT * FROM account WHERE Id=".$IdAcc;
		$result = mysql_query($sql, $conn);
		$item = new clsAccount();
		$item->Id = 0;
		$item->Username = 'No-Name';
		$item->Password = 'No-Password';			
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			break;
		}
		mysql_close($conn);	  
		return $item;
	}
	
	function deleteAccount($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM account WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}

	function checkAccount($Username, $Password)
	{
		include 'config.php';
		$sql = "SELECT * FROM account WHERE Username='" .$Username."' AND Password='".$Password."'";
		$result = mysql_query($sql,$conn);
		$count = mysql_num_rows($result);
		return $count;
		mysql_close($conn);
	}
	
	function checkUserAccount($Username)
	{
		include 'config.php';
		$sql = "SELECT * FROM account WHERE Username='" .$Username."'";
		$result = mysql_query($sql,$conn);
		$count = mysql_num_rows($result);
		return $count;
		mysql_close($conn);
	}
	
	function getIdMaxAcc()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM account",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getIdByAcc($Username, $Password)
	{
		include 'config.php';
		$sql = "SELECT * FROM account WHERE Username='" .$Username."' AND Password='" .$Password."'";
		$result = mysql_query($sql,$conn);
		$item = new clsAccount();
		$item->Id = 0;
		$item->Username = 'No-Name';
		$item->Password = 'No-Password';			
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			break;
		}
		mysql_close($conn);	  
		return $item->Id;
	}
	
	function getPass($Username, $Phone)
	{
		include 'config.php';			
		$result = mysql_query("SELECT account.Id, account.Username, account.Password FROM account INNER JOIN descriptionaccount ON account.Id=descriptionaccount.IdAccount WHERE account.Username='".$Username."' AND descriptionaccount.Phone='".$Phone."'",$conn);
		$item = new clsAccount();
		$item->Id = 0;
		$item->Username = 'No-Name';
		$item->Password = 'No-Password';			
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			break;
		}
		mysql_close($conn);	  
		return $item->Password;
	}

        function searchAccount($User)
	{
		include 'config.php';			
		$result = mysql_query("SELECT account.Id, account.Username, account.Password FROM account INNER JOIN activeaccount ON account.Id=activeaccount.IdAccount WHERE account.Username LIKE '%".$User."%' ORDER BY activeaccount.Status DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsAccount();
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
?>