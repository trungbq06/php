﻿<html>
<header>
<style>
    #mbt-menu, #mbt-menu ul {

    margin: 0;

    padding: 0;

    list-style: none;

    }

    #mbt-menu {

    width: 913px; /* Độ rộng của toàn bộ thanh menu */

    margin: 0px auto ;

    border: 1px solid #222;

    background-color: #111;

    background-image: -moz-linear-gradient(#444, #111);

    background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));

    background-image: -webkit-linear-gradient(#444, #111);

    background-image: -o-linear-gradient(#444, #111);

    background-image: -ms-linear-gradient(#444, #111);

    background-image: linear-gradient(#444, #111);

    -moz-border-radius: 6px;

    -webkit-border-radius: 6px;

    border-radius: 6px;

    -moz-box-shadow: 0 1px 1px #777;

    -webkit-box-shadow: 0 1px 1px #777;

    box-shadow: 0 1px 1px #777;

    }

    #mbt-menu:before,

    #mbt-menu:after {

    content: "";

    display: table;

    }

    #mbt-menu:after {

    clear: both;

    }

    #mbt-menu {

    zoom:1;

    }

    #mbt-menu li {

    float: left;

    border-right: 1px solid #222;

    -moz-box-shadow: 1px 0 0 #444;

    -webkit-box-shadow: 1px 0 0 #444;

    box-shadow: 1px 0 0 #444;

    position: relative;

    }

    #mbt-menu a {

    float: left;

    padding: 12px 28px;

    color: #999;

    text-transform: uppercase;

    font: bold 12,5px Arial, Helvetica;

    text-decoration: none;

    text-shadow: 0 1px 0 #000;

    }

    #mbt-menu li:hover > a {

    color: #fafafa;

    }

    *html #mbt-menu li a:hover { /* IE6 only */

    color: #fafafa;

    }

    #mbt-menu ul {

    margin: 20px 0 0 0;

    _margin: 0; /*IE6 only*/

    opacity: 0;

    visibility: hidden;

    position: absolute;

    top: 38px;

    left: 0;

    z-index: 9999;

    background: #444;

    background: -moz-linear-gradient(#444, #111);

    background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));

    background: -webkit-linear-gradient(#444, #111);

    background: -o-linear-gradient(#444, #111);

    background: -ms-linear-gradient(#444, #111);

    background: linear-gradient(#444, #111);

    -moz-box-shadow: 0 -1px rgba(255,255,255,.3);

    -webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);

    box-shadow: 0 -1px 0 rgba(255,255,255,.3);

    -moz-border-radius: 3px;

    -webkit-border-radius: 3px;

    border-radius: 3px;

    -webkit-transition: all .2s ease-in-out;

    -moz-transition: all .2s ease-in-out;

    -ms-transition: all .2s ease-in-out;

    -o-transition: all .2s ease-in-out;

    transition: all .2s ease-in-out;

    }

    #mbt-menu li:hover > ul {

    opacity: 1;

    visibility: visible;

    margin: 0;

    }

    #mbt-menu ul ul {

    top: 0;

    left: 150px;

    margin: 0 0 0 20px;

    _margin: 0; /*IE6 only*/

    -moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);

    -webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);

    box-shadow: -1px 0 0 rgba(255,255,255,.3);

    }

    #mbt-menu ul li {

    float: none;

    display: block;

    border: 0;

    _line-height: 0; /*IE6 only*/

    -moz-box-shadow: 0 1px 0 #111, 0 2px 0 #666;

    -webkit-box-shadow: 0 1px 0 #111, 0 2px 0 #666;

    box-shadow: 0 1px 0 #111, 0 2px 0 #666;

    }

    #mbt-menu ul li:last-child {

    -moz-box-shadow: none;

    -webkit-box-shadow: none;

    box-shadow: none;

    }

    #mbt-menu ul a {

    padding: 10px;

    width: 170px; /* Độ rộng của menu con */

    _height: 10px; /*IE6 only*/

    display: block;

    white-space: nowrap;

    float: none;

    text-transform: none;

    }

    #mbt-menu ul a:hover {

    background-color: #0186ba;

    background-image: -moz-linear-gradient(#04acec, #0186ba);

    background-image: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));

    background-image: -webkit-linear-gradient(#04acec, #0186ba);

    background-image: -o-linear-gradient(#04acec, #0186ba);

    background-image: -ms-linear-gradient(#04acec, #0186ba);

    background-image: linear-gradient(#04acec, #0186ba);

    }

    #mbt-menu ul li:first-child > a {

    -moz-border-radius: 3px 3px 0 0;

    -webkit-border-radius: 3px 3px 0 0;

    border-radius: 3px 3px 0 0;

    }

    #mbt-menu ul li:first-child > a:after {

    content: '';

    position: absolute;

    left: 40px;

    top: -6px;

    border-left: 6px solid transparent;

    border-right: 6px solid transparent;

    border-bottom: 6px solid #444;

    }

    #mbt-menu ul ul li:first-child a:after {

    left: -6px;

    top: 50%;

    margin-top: -6px;

    border-left: 0;

    border-bottom: 6px solid transparent;

    border-top: 6px solid transparent;

    border-right: 6px solid #3b3b3b;

    }

    #mbt-menu ul li:first-child a:hover:after {

    border-bottom-color: #04acec;

    }

    #mbt-menu ul ul li:first-child a:hover:after {

    border-right-color: #0299d3;

    border-bottom-color: transparent;

    }

    #mbt-menu ul li:last-child > a {

    -moz-border-radius: 0 0 3px 3px;

    -webkit-border-radius: 0 0 3px 3px;

    border-radius: 0 0 3px 3px;

    }
</style>
</header>
<body>
    <ul id="mbt-menu">  
    <li>
    <a href="#"style="width:170px; text-align:center">Thêm</a>
    <ul>
    <li><a href="insertgroup.php">● Thương hiệu</a></li>
    <li><a href="insertproduct.php">● Sản phẩm</a></li>
	<li><a href="insertService.php">● Dịch vụ</a></li>
    </ul>
    </li>

	<li>
    <a href="#"style="width:170px; text-align:center">Sửa</a>
    <ul>
    <li><a href="editGroup.php">● Tên thương hiệu</a></li>
    <li><a href="editProductKhoHang.php">● Kho hàng</a></li>
	<li><a href="editProductHot.php">● Trạng thái(HOT)</a></li>
    </ul>
    </li>

	<li>
    <a href="#" style="width:170px; text-align:center">Xóa</a>
    <ul>
    <li><a href="DeleteGroup.php">● Thương hiệu</a></li>
    <li><a href="DeleteProduct.php">● Sản phẩm</a></li>
	<li><a href="DeleteService.php">● Dịch vụ</a></li>
    </ul>
    
	<li><a href="donhang.php"style="width:174px; text-align:center">Đơn Hàng</a></li>
</body>
</html>
