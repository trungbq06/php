<?php
	function createCLBNews($Title, $Summary)
	{
		include 'config.php';
		$sql = "INSERT INTO clbnews(Title, Summary) VALUES('" .$Title ."','" .$Summary ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readCLBNews()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM clbnews ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsCLBNews();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];			
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteCLBNews($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM clbnews WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getIdMax()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM clbnews",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function getCLBNewsById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM clbnews WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsCLBNews();
		$item->Id = 0;
		$item->Title = "no-name";
		$item->Summary = "no-name";	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];	
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
?>