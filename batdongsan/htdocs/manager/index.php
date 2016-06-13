<?php
ob_start();
session_start();
error_reporting(E_ALL);
/*
$isDebug = isset($_REQUEST['debug']) ? 1: 0;
if ($isDebug) {
	ini_set('display_errors','On');
} else {
	ini_set('display_errors','Off');
}
*/
/*
$reset_cache=0;
if(isset($_GET['mem'])){
	$reset_cache=1;
}
// Set timeout cache
$now = getdate();
$currentTime = $now["hours"];
$timeout =  (24 - $currentTime)*60*60;
*/

require_once("../configs/configs.php");
require_once '../libraries/libs/MyHandles.php';
require_once './modules/moduleGeneral.php';
require_once('../libraries/smarty/Smarty.class.php');
$smarty = new Smarty();

# Thiet lap ngon ngu
if(!isset($_SESSION['default_lang_admin'])){
	$_SESSION['default_lang_admin'] = "vi";
}
if(!isset($_SESSION['admin_language'])){
	$_SESSION['admin_language'] = 1;
}
require_once './languages/' . $_SESSION['default_lang_admin'] . ".php";
$lang = $_SESSION['admin_language'];

/* Get mod and site From Link */
$mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
$site = isset($_GET['site']) ? $_GET['site'] : "index";
$login_id = isset($_SESSION[LOGIN_ADMIN]) ? $_SESSION[LOGIN_ADMIN] : 0;
$login_role = isset($_SESSION[LOGIN_ADMIN_ROLE]) ? $_SESSION[LOGIN_ADMIN_ROLE] : 0;
if($login_id == 0 || $login_role == 0){
	$mod = "user";
	$site = "login";
}

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
require_once 'modules/' . $file;

$user = new $class(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
$user->connect();
if($login_id != 0 && $login_role != 0){
	$account = $user->find_by_id("user", $login_id);
	$smarty->assign('account', $account);
}
$tpl = "../" . $mod . "/" . $site . ".tpl";
$user->$site();
$user->close();

?>
