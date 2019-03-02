<?php
	function getProducts()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);				
		$result = mysql_query("SELECT * FROM Products ORDER BY RetaiPrice DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getProductsAd()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);				
		$result = mysql_query("SELECT * FROM Products ORDER BY Id",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	
	function getProductMenu($groupId)
	{				
		$sql = "SELECT * FROM Products WHERE GroupId= " .$groupId ;
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getProductDetail($id)
	{		
		$sql = "SELECT * FROM Products WHERE Id= " .$id;		
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query($sql,$conn);
		$item = new clsProducts();
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			break;
		}
		mysql_close($conn);	  
		return $item;
	};
	
	
	function getProductNew()
	{				
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SELECT * FROM products ORDER BY Products.Id DESC LIMIT 3",$conn);	
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getProductHot()
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query("SELECT * FROM Products WHERE Note=1 ORDER BY RetaiPrice DESC",$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};	
	
	function insertProduct($Name, $GroupId, $RetaiPrice, $Information, $Status, $Note)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);	
		$sql = "INSERT INTO Products(Name, GroupId, RetaiPrice, Information, Status, Note) VALUES('" .$Name ."'," .$GroupId ."," .$RetaiPrice .",'" .$Information ."'," .$Status ."," .$Note .")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function DeleteProductByGroupId($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM Products WHERE GroupId=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function DeleteProductById($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM Products WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function editProductKhoHang($Status, $Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "update Products set Status=".$Status." where Id=" .$Id;
		$result = mysql_query("SET NAMES utf8",$conn);
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}
	
	function editProductHot($Note, $Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "update Products set Note=".$Note." where Id=" .$Id;
		$result = mysql_query("SET NAMES utf8",$conn);
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}
	
	function SeachProducts($Name)
	{				
		$sql = "select * from products where Name LIKE '%".$Name."%'" ;
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query($sql,$conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsProducts();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->GroupId = $row['GroupId'];	
			$item->RetaiPrice = $row['RetaiPrice'];			 
			$item->SalePrice = $row['SalePrice'];			 			  
			$item->Information = $row['Information'];	
			$item->Description = $row['Description'];				 			  			  
			$item->Status = $row['Status'];				 
			$item->Note = $row['Note'];				 
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
?>