<?php
		$hostname = 'mysql-server01';
		$username = "haphuan.H1649";
		$password = "932t0ff81A0";
		$database = "haphuantiengnhat";
		$conn=mysql_connect($hostname, $username, $password);
		mysql_select_db($database,$conn);
		$result = mysql_query("SET NAMES utf8",$conn);
?>