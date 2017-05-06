<?php
	function createContact($Name, $Email, $Phone, $Message)
	{
		include 'config.php';
		$sql = "INSERT INTO contact(Name, Email, Phone, Message) VALUES('" .$Name ."','" .$Email ."','" .$Phone ."','" .$Message ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readContact()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM contact ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsContact();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Email = $row['Email'];		
			$item->Phone = $row['Phone'];	
			$item->Message = $row['Message'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteContact($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM contact WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
?>