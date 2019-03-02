<?php
	function getGroupProducts()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query("SELECT * FROM GroupProducts ORDER BY Id",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsGroupProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->ParentId = $row['ParentId'];
			$item->Index = $row['Index'];
			$item->Note = $row['Note'];
			$item->Icon = $row['Icon'];			  
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getGroupFirstProducts()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query("SELECT * FROM GroupProducts WHERE Id = 1  LIMIT 1",$conn);
		$item = new clsGroupProducts();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsGroupProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->ParentId = $row['ParentId'];
			$item->Index = $row['Index'];
			$item->Note = $row['Note'];
			$item->Icon = $row['Icon'];			  
			break;
		}
		mysql_close($conn);	  
		return $item;
	};	
		
	function insertGroup($Name)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "INSERT INTO GroupProducts(Name) VALUES('" .$Name ."')";
		$result = mysql_query("SET NAMES utf8",$conn);
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function DeleteGroup($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM GroupProducts WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getGroupById($Id)
	{		
		$sql = "SELECT * FROM GroupProducts WHERE Id= " .$Id;		
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query($sql,$conn);
		$item = new clsGroupProducts();
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->ParentId = $row['ParentId'];
			$item->Index = $row['Index'];
			$item->Note = $row['Note'];
			$item->Icon = $row['Icon'];			
			break;
		}
		mysql_close($conn);	  
		return $item;
	};

	
	function editGroup($Name, $Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "update groupproducts set Name='".$Name."' where Id=" .$Id;
		$result = mysql_query("SET NAMES utf8",$conn);
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}

?>