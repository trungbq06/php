<?php

/* host website + admin */
$http_host = $_SERVER['HTTP_HOST'];
$host = "http://" . $http_host;
$domain = $host . "/";
if($http_host != "localhost"){
	$domain = $host . "/";
}

$admin = $domain . "manager/";

define("HTTP_HOST", $http_host);
define("DOMAIN", $domain);
define("ADMIN", $admin);

/* link hien tai */
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
define("THIS_LINK", $actual_link);



/* ket noi database */
define('DB_SERVER', "localhost");
define('DB_USER', "chungcu2_ccv247");
define('DB_PASS', "123!@#");
define('DB_NAME', "chungcu2_chungcuviet247");

?>