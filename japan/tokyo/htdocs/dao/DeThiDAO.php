<?php
	function createDeThi($Name, $IdLevel, $IdLearning)
	{
		include 'config.php';
		$sql = "INSERT INTO dethi(Name, IdLevel, IdLearning) VALUES('" .$Name ."',".$IdLevel.",".$IdLearning.")";
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	}	
	
	function read5TopDeThi($IdLevel, $IdLearning)
	{
		include 'config.php';	
		$sql="SELECT * FROM dethi WHERE IdLevel=".$IdLevel." AND IdLearning=".$IdLearning." ORDER BY Name LIMIT 5";
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsDeThi();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->IdLevel = $row['IdLevel'];	
			$item->IdLearning = $row['IdLearning'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function readDeThi($IdLevel, $IdLearning)
	{
		include 'config.php';	
		$sql="SELECT * FROM dethi WHERE IdLevel=".$IdLevel." AND IdLearning=".$IdLearning;
		$result = mysql_query($sql, $conn);
		$arr = array();
		while($row = mysql_fetch_array($result))
		{
			$item = new clsDeThi();
			$item->Id = $row['Id'];
			$item->Name = $row['Name'];
			$item->IdLevel = $row['IdLevel'];	
			$item->IdLearning = $row['IdLearning'];				
			$arr[] = $item;
		}
		mysql_close($conn);	  
		return $arr;
	};
	
	function getIdMaxDeThi()
	{
		include 'config.php';			
		$result = mysql_query("SELECT MAX(Id) FROM dethi",$conn);
		$max = 0;
		$row = mysql_fetch_array($result);
		$max = $row['MAX(Id)'];
		mysql_close($conn);	  
		return $max;
	};
	
	function delDeThiById($Id)
	{
		include 'config.php';
		$sql = "DELETE FROM dethi WHERE Id=".$Id;
		$result = mysql_query($sql,$conn);
		mysql_close($conn);
	};
	
	function getNameDeThiById($Id)
	{
		include 'config.php';	
		$sql="SELECT Name FROM dethi WHERE Id=".$Id;
		$result = mysql_query($sql, $conn);
		$Name = 'No-Name';
		while($row = mysql_fetch_array($result))
		{
			$Name = $row['Name'];
			break;
		}
		mysql_close($conn);	  
		return $Name;
	};
?>