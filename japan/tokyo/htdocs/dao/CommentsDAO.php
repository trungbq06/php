<?php
	function creadComments($noidung, $IdAccount)
	{
		include 'config.php';
		$sql = "INSERT INTO comments(Content, IdAccount ) VALUES('".$noidung."', ".$IdAccount.")";
		$result= mysql_query($sql,$conn);
		mysql_close($conn);	
	}
	
	function readConments()
	{
		include 'config.php';
		$sql = "SELECT * FROM comments ORDER BY Id DESC";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result)){
			$item = new clsComments;
			$item->Id = $row['Id'];
			$item->Content = $row['Content'];
			$item->IdAccount =$row['IdAccount']	;
			$arr[] = $item; 
		}
		mysql_close($conn);	
		return $arr;
	}
	
	function delCommentById($IdComment)
	{
		include 'config.php';
		$sql = "DELETE FROM comments WHERE Id=" .$IdComment ;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}
?>