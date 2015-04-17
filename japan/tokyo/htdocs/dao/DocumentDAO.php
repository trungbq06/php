<?php
	function createDoc($Title, $Summary, $Url, $IdType)
	{
		include 'config.php';	
		$sql = "INSERT INTO documents(Title, Summary, Url, IdType) VALUES('" .$Title ."','" .$Summary ."','" .$Url ."'," .$IdType .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readDoc()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM documents ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsDocument();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];		
			$item->Url = $row['Url'];			
			$item->IdType = $row['IdType'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteDoc($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM documents WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readDocByIdType($IdType)
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM documents WHERE IdType=".$IdType." ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsDocument();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];		
			$item->Url = $row['URL'];			
			$item->IdType = $row['IdType'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>