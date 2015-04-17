<?php
	function createRegistration($Name, $Phone, $Email, $Address, $IdKhoaHoc)
	{
		include 'config.php';	
		$sql = "INSERT INTO registration(Name, Phone, Email, Address, IdKhoaHoc) VALUES('" .$Name ."','" .$Phone ."','" .$Email ."','" .$Address ."'," .$IdKhoaHoc .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readRegistration()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM registration",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsRegistration();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Phone = $row['Phone'];	
			$item->Email = $row['Email'];		
			$item->Address = $row['Address'];		
			$item->IdKhoaHoc = $row['IdKhoaHoc'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteRegistration($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM registration WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readRegistrationById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM registration WHERE IdKhoaHoc= " .$Id;
		$result = mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsRegistration();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Phone = $row['Phone'];	
			$item->Email = $row['Email'];		
			$item->Address = $row['Address'];		
			$item->IdKhoaHoc = $row['IdKhoaHoc'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>