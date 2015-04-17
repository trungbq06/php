<?php
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
			$item->Url = $row['Url'];					
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function updateBanner($Id, $Url)
	{
		include 'config.php';				
		$sql = "UPDATE banner SET Url='".$Url."' where Id=" .$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function getBannerById($Id)
	{
		include 'config.php';	
		$sql = "SELECT * FROM banner WHERE Id= " .$Id;
		$result = mysql_query($sql,$conn);
		$item = new clsBanner();
		$item->Id = 0;
		$item->Name = "no-name";
		$item->Url = "images/no-image.jpg";	
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Url = $row['Url'];				
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
?>