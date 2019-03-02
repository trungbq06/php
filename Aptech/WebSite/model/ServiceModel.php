<?php	
function getService()
{
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mobileshop",$conn);
	$result = mysql_query("SET NAMES utf8",$conn);		
	$result = mysql_query("SELECT * FROM service ORDER BY Id",$conn);
	$arr = array();
	while($row = mysql_fetch_array($result))
	{
		$item = new clsService();
		$item->Id = $row['Id'];
		$item->Name = $row['Name'];
		$item->Body = $row['Body'];  
		$arr[] = $item;
	}
	mysql_close($conn);	  
	return $arr;
};

function getServiceById($Id)
	{		
		$sql = "SELECT * FROM service WHERE Id= " .$Id;		
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query($sql,$conn);
		$item = new clsService();
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Body = $row['Body'];  
			break;
		}
		mysql_close($conn);	  
		return $item;
	};

function insertService($Name, $Body)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);	
		$sql = "INSERT INTO service(Name, Body) VALUES('" .$Name ."','" .$Body ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
function DeleteServiceById($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM service WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}
	
?>