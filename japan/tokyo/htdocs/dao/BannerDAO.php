<?php
	function createBanner($Name, $Position, $Image, $Url)
	{
		include 'config.php';
		$sql = "INSERT INTO banner(Name, Position, Image, Url) VALUES('" .$Name ."','" .$Position ."','" .$Image ."','" .$Url ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function deleteBanner($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM banner WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function getBannerByPos($position)
	{
		include 'config.php';	
		$sql = "SELECT * FROM banner WHERE Position= '" .$position."'";
		$result = mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsBanner();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Position = $row['Position'];
			$item->Image = $row['Image'];
			$item->Url = $row['Url'];	
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	}
	
	function readBanner()
	{
		include 'config.php';				
		$result = mysql_query("SELECT * FROM banner",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsBanner();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Position = $row['Position'];
			$item->Image = $row['Image'];
			$item->Url = $row['Url'];	
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>