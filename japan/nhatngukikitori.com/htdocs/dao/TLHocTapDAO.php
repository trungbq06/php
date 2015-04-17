<?php
	function createHocTap($Title, $Summary, $UrlDownload)
	{
		include 'config.php';	
		$sql = "INSERT INTO tlhoctap(Title, Summary, UrlDownload) VALUES('" .$Title ."','" .$Summary ."','" .$UrlDownload ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function readTLHocTap()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM tlhoctap ORDER BY Id DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsTLHocTap();
			$item->Id = $row['Id'];
			$item->Title = $row['Title'];
			$item->Summary = $row['Summary'];		
			$item->UrlDownload = $row['UrlDownload'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function deleteHocTap($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM tlhoctap WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
?>