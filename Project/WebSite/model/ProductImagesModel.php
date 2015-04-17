<?php		
	function getProductImage($productId)
	{	
		$sql = "SELECT * FROM productimage WHERE Id= " .$productId;		
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query($sql,$conn);		
		$item = new clsProducts();
		$item->Id = 0;
	    $item->Name = "no-image.png";		  
		while($row = mysql_fetch_array($result))
		{			  
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];		  
			$item->FullName = $row['FullName'];
			break;
		}
		mysql_close($conn);	  
	  	return $item;	  		
	};	
	
	function insertProductImage($Name, $FullName)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "INSERT INTO productimage(Name, FullName) VALUES('" .$Name ."','" .$FullName ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function DeleteProductImageByGroupId($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM productimage WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
?>