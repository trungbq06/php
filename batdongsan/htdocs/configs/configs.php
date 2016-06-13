<?php

require_once("conf_db.php");
require_once("conf_router.php");
require_once("constants.php");
require_once("parameters.php");

$PHPSESSID = session_id();
$ext = ".html";
$extension_tpl = ".html";

define('DEFAULT_LAYOUT', 'default.tpl');

define('LIBS', 'helpers/');

/* PATH */
define('CACHE_PATH', 'templates_c/');
define('TEMPLATE_PATH', 'templates/');
define('MODULE_PATH', 'modules/');
define('WEBROOT_PATH', 'webroots/');
define('UPLOAD_PATH', 'uploads/');



/* UPLOAD DIR */
define("GALLERY_UPLOAD", UPLOAD_PATH . "galleries/");
define("ARTICLE_UPLOAD", UPLOAD_PATH . "articles/");

define("PRODUCT_UPLOAD", UPLOAD_PATH . "products/");
define("PRODUCT_IMAGE_UPLOAD", UPLOAD_PATH . "products/images/");

define("PROJECT_UPLOAD", UPLOAD_PATH . "projects/");
define("PROJECT_IMAGE_UPLOAD", UPLOAD_PATH . "projects/images/");

define("POSTS_UPLOAD", UPLOAD_PATH . "posts/");
define("POSTS_IMAGE_UPLOAD", UPLOAD_PATH . "posts/images/");

define("MEMBER_UPLOAD", UPLOAD_PATH . "members/");

define("PAGE_UPLOAD", UPLOAD_PATH . "pages/");
define("GENERAL_UPLOAD", UPLOAD_PATH . "generals/");

define("NO_IMG", UPLOAD_PATH . "generals/noimg.jpg");

define("MENU_UPLOAD", "menus/");

/* SET SESSION */
define("LOGIN_ADMIN", HTTP_HOST . "_login_admin");
define("LOGIN_ADMIN_ROLE", HTTP_HOST . "_login_admin_role");
define("LOGIN_MEMBER", HTTP_HOST . "_login_member");

/* SET DEFAULT */
define("DEFAULT_USER", "dssuperadmin");
define("DEFAULT_PASS", "1379686899");
define("TITLE_ADMIN", "Admin | Develop by NiceWeb.vn");

# Da ngon ngu
define('LANG_DOMAIN', HTTP_HOST . "_language");
define('LANG_ADMIN', "_language_admin");

define('MAIL_CONFIG', "chungnd.dsc@gmail.com");

?>
