<?php
/*
 * Thiet lap cac url link
*/
define('ALIAS_ARTICLE', 'tintuc/');
define('ALIAS_PRODUCT', 'sanpham/');

# Du an
define('ALIAS_PROJECT_VIEW', 'project/');
define('ALIAS_PROJECT_LIST', 'pjcat/');

# Posts
define('ALIAS_POSTS_VIEW', 'posts/');
define('ALIAS_POSTS_LIST', 'cposts/');

define('ALIAS_SHOP', 'shop/');

$conf_menu_type = array(
		1 => 'Danh mục tin tức',
		2 => 'Xem chi tiết tin',
		3 => 'Danh mục sản phẩm',
		4 => 'Nhập link url',
		5 => 'Tự nhập module',
		6 => 'Không nhập link'
);
$conf_menu_type_module = array(
		1 => '?mod=article&site=lists',
		2 => '?mod=article&site=view',
		3 => '?mod=product&site=lists',
		4 => '',
		5 => '',
		6 => ''
);

/*
 * rewrite url toi htaccess
 */

$router_new = array(
		ALIAS_PRODUCT . '([0-9]+)/([0-9]+)/(.*).html' => '?mod=product&site=view&id=$1',
		ALIAS_PRODUCT . '([0-9]+)/(.*).html' => '?mod=product&site=lists&id=$1',
		ALIAS_ARTICLE . '([0-9]+)/([0-9]+)/(.*).html' => '?mod=article&site=view&id=$1',
		ALIAS_ARTICLE . '([0-9]+)/(.*).html' => '?mod=article&site=lists&id=$1',
		ALIAS_PROJECT_LIST . '(.*)-(.*).html' => '?mod=project&site=lists&id=$2',
		ALIAS_PROJECT_VIEW . '(.*)-(.*).html' => '?mod=project&site=view&id=$2',

		ALIAS_POSTS_LIST . '(.*)-(.*).html' => '?mod=posts&site=lists&id=$2',
		ALIAS_POSTS_VIEW . '(.*)-(.*).html' => '?mod=posts&site=view&id=$2',
		
		#shop
		ALIAS_SHOP . '([0-9]+)/' => '?mod=page&site=home&id=$1',
		ALIAS_SHOP . '([0-9]+)/infomation' => '?mod=page&site=infomation&id=$1',
		ALIAS_SHOP . '([0-9]+)/contact' => '?mod=page&site=contact&id=$1',
		ALIAS_SHOP . '([0-9]+)/map' => '?mod=page&site=map&id=$1',
		ALIAS_SHOP . '([0-9]+)/products' => '?mod=page&site=products&id=$1',
		ALIAS_SHOP . '([0-9]+)/promotions' => '?mod=page&site=promotions&id=$1',
		ALIAS_SHOP . '([0-9]+)/([A-Za-z0-9-/]+)' => '?mod=page&site=home&id=$1',
		
		'cart.html' => '?mod=cart&site=index',
		'payment.html' => '?mod=cart&site=payment',
                 
		'dang-ky.html' => '?mod=member&site=register',
		'dang-nhap.html' => '?mod=member&site=login',
                 'tai-khoan.html' => '?mod=member&site=infomation',
		
		'cuahang' => '?mod=page&site=pages',
		'home/new' => '?mod=product&site=product_new',
		'home/promotions' => '?mod=product&site=product_promotions',
		'sanpham' => '?mod=product&site=lists',
		'timkiem' => '?mod=product&site=search',
		'contact' => '?mod=home&site=contact',
		
		'([A-Za-z0-9-/]+)' => '?mod=home&site=index',
);

