<?php
		$hostname = 'sql102.byethost6.com';
		$username = "b6_14030950";
		$password = "19931214";
		$database = "b6_14030950_japan";
		$conn=mysql_connect($hostname, $username, $password);
		mysql_select_db($database,$conn);
		$result = mysql_query("SET NAMES utf8",$conn);
?>