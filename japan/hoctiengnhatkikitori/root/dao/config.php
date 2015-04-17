<?php
		$hostname = 'sql301.byethost15.com';
		$username = "b15_14485690";
		$password = "1234512345";
		$database = "b15_14485690_tiengnhat";
		$conn=mysql_connect($hostname, $username, $password);
		mysql_select_db($database,$conn);
		$result = mysql_query("SET NAMES utf8",$conn);
?>