<?php
ob_start();
session_start();
error_reporting(E_ALL);
$isDebug = isset($_REQUEST['debug']) ? 1: 0;
if ($isDebug) {
	ini_set('display_errors','On');
} else {
	ini_set('display_errors','Off');
}
$reset_cache=0;
if(isset($_GET['mem'])){
	$reset_cache=1;
}
// Set timeout cache
$now = getdate();
$currentTime = $now["hours"];
$timeout =  (24 - $currentTime)*60*60;

require_once("./configs/configs.php");
require_once './libraries/libs/MyHandles.php';
require_once './modules/moduleGeneral.php';
require_once('./libraries/smarty/Smarty.class.php');
$smarty = new Smarty();

# Thiet lap ngon ngu
if(!isset($_SESSION['home_language']) || !isset($_SESSION['home_language_name'])){
	$_SESSION['home_language'] = 1;
	$_SESSION['home_language_name'] = "vi";
}
require_once './languages/translates/' . $_SESSION['home_language_name'] . ".php";
$lang = $_SESSION['home_language'];

/* Get mod and site From Link */
$mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
$site = isset($_GET['site']) ? $_GET['site'] : "index";

/* Config Dir For Smarty */
$smarty->template_dir = "templates/layouts/";
$compile_dir = "templates_c/";
if(!is_dir($compile_dir)){
	mkdir($compile_dir, 0777);
}
$smarty->compile_dir  = $compile_dir;
$smarty->config_dir   = 'configs/';
$smarty->cache_dir    = CACHE_PATH;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


/* Get Modules To Index */
$file = "module" . ucfirst($mod) . ".php";
$class = ucfirst($mod);
require_once './modules/' . $file;

$user = new $class(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
$user->connect();
$tpl = "../" . $mod . "/" . $site . ".tpl";
$user->$site();
$user->close();

?>
