<?php

		$hostname = 'sql111.freevnn.com';

		$username = "freev_12482600";

		$password = "12341234";

		$database = "freev_12482600_learning";

		$conn=mysql_connect($hostname, $username, $password);

		mysql_select_db($database,$conn);

		$result = mysql_query("SET NAMES utf8",$conn);

?>