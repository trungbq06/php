<?php
	function createAdmin($Username, $Password)
	{
		include 'config.php';
		$sql = "INSERT INTO admin(Username, Password) VALUES('" .$Username ."','" .$Password ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readAdmin()
	{
		include 'config.php';			
		$result = mysql_query("SELECT * FROM admin",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsAdmin();
			$item->Id = $row['Id'];
			$item->Username = $row['Username'];
			$item->Password = $row['Password'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteAdmin($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM admin WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}

	function checkAdmin($Username, $Password)
	{
		include 'config.php';
		$sql = "SELECT * FROM admin WHERE Username='" .$Username."' AND Password='".$Password."'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		return $count;
		mysql_close($conn);
	}
?>