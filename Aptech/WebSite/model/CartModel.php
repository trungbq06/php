<?php
	function insertCart($Name, $Phone, $Email, $Address, $IdProduct)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "INSERT INTO Cart(Name, Phone, Email, Address, IdProduct) VALUES('" .$Name ."'," .$Phone .",'" .$Email ."','" .$Address ."'," .$IdProduct .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function getCart()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query("SELECT * FROM Cart ORDER BY Id",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsCart();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->Phone = $row['Phone'];
			$item->Email = $row['Email'];
			$item->Address = $row['Address'];
			$item->IdProduct = $row['IdProduct'];			  
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>