<?php
	function getDescriptionProduct($groupId)
	{		
		$sql = "SELECT * FROM descriptionproduct WHERE Id= " .$groupId;		
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);		
		$result = mysql_query($sql,$conn);
		$item = new clsProducts();
		while($row = mysql_fetch_array($result))
		{
			$item->Id = $row['Id'];
			$item->hedieuhanh = $row['hedieuhanh'];
			$item->loaimanhinh = $row['loaimanhinh'];	
			$item->mayanh = $row['mayanh'];			 
			$item->kichthuocmanhinh = $row['kichthuocmanhinh'];			 			  
			$item->vixulicpu = $row['vixulicpu'];	
			$item->quayphim = $row['quayphim'];				 			  			  
			$item->bonhotrong = $row['bonhotrong'];				 
			$item->phankhucsanpham = $row['phankhucsanpham'];	
			$item->danhba = $row['danhba'];				 		  
			$item->thenhongoai = $row['thenhongoai'];				 
			$item->gioihancuocgoi = $row['gioihancuocgoi'];				 
			$item->dungluongpin = $row['dungluongpin'];				 		 
			break;
		}
		mysql_close($conn);	  
		return $item;
	};	
	
	function insertProductDetai($loaimanhinh, $mayanh, $hedieuhanh, $vixulicpu, $kichthuocmanhinh, $quayphim, $bonhotrong, $phankhucsanpham, $danhba, $thenhongoai, $gioihancuocgoi, $dungluongpin)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$result = mysql_query("SET NAMES utf8",$conn);	
		$sql = "INSERT INTO descriptionproduct(loaimanhinh, mayanh, hedieuhanh, vixulicpu, kichthuocmanhinh, quayphim, bonhotrong, phankhucsanpham, danhba, thenhongoai, gioihancuocgoi, dungluongpin) VALUES('" .$loaimanhinh ."','" .$mayanh ."','" .$hedieuhanh ."','" .$vixulicpu ."','" .$kichthuocmanhinh ."','" .$quayphim ."','" .$bonhotrong ."','" .$phankhucsanpham ."','" .$danhba ."','" .$thenhongoai ."','" .$gioihancuocgoi ."','" .$dungluongpin ."')";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function DeleteProductDetailByGroupId($Id)
	{
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("mobileshop",$conn);
		$sql = "DELETE FROM descriptionproduct WHERE Id=" .$Id ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	
?>