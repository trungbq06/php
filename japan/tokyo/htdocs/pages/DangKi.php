<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng Kí</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <!--<script type="text/javascript" src="js/Molengo_400.font.js"></script>-->
        <!--<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>-->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <style type="text/css">
                .bg, .box2 {behavior:url(js/PIE.htc)}
        </style>
        <![endif]-->
        <!--[if lt IE 7]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
                        <img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
                </div>
        <![endif]-->   

        <script>
            function checkInputReg() {
                if (document.ContactForm.username.value == "") {
                    alert("Mời Bạn Nhập Tài Khoản!");
                    return false;
                }
                if (document.ContactForm.password.value == "") {
                    alert("Mời Bạn Nhập Mật Khẩu!");
                    return false;
                }
                if (document.ContactForm.fullname.value == "") {
                    alert("Mời Bạn Nhập Họ Tên!");
                    return false;
                }
                if (document.ContactForm.phone.value == "") {
                    alert("Mời Bạn Nhập Số Điện Thoại!");
                    return false;
                }
                return true;
            }
        </script>
    </head>

    <body id="page5">
        <div class="body1">
            <div class="main">
                <!-- header -->
                <header>
                    <?php include'templates/HeaderMenu.php' ?>
                    <?php include'templates/HeaderBanner.php' ?>
                </header>
                <!-- / header -->
            </div>
        </div>
        <div class="body2">
            <div class="main">
                <!-- content -->
                <section id="content">
                    <div class="box1">
                        <div class="wrapper">
                            <article class="col1">
                                <div class="pad_left1">
                                    <h2>Đăng Kí Tài Khoản</h2>
                                    <?php
                                    if (isset($_GET['messageDK']))
                                        echo "<b style='color:red;'>" . $_GET['messageDK'] . "</b>";
                                    ?>
                                    <br/>
                                    <form id="ContactForm" name="ContactForm" action="../controller/AccountController.php" method="post" onsubmit="return checkInputReg();">
                                        <div>
                                            <div  class="wrapper">
                                                <strong>Tài Khoản:</strong>
                                                <div class="bg"><input type="text" name="username" class="input" ></div>
                                            </div>  
                                            <div  class="wrapper">
                                                <strong>Mật Khẩu:</strong>
                                                <div class="bg"><input type="password" name="password" class="input" ></div>
                                            </div>  
                                            <div  class="wrapper">
                                                <strong>Họ Tên:</strong>
                                                <div class="bg"><input type="text" name="fullname" class="input" ></div>
                                            </div>
                                            <div  class="wrapper">
                                                <strong>Điện Thoại:</strong>
                                                <div class="bg"><input type="text" name="phone" class="input" ></div>
                                            </div>
                                            <div  class="wrapper">
                                                <strong>Email:</strong>
                                                <div class="bg"><input type="text" name="email" class="input" ></div>
                                            </div>                                            
                                            <br />
                                            <div class="bg">
                                                <input type="submit" name="commit" value="Đăng Kí"/>
                                            </div>
                                            <div class="bg">
                                                <input type="reset" value="Xóa Dữ Liệu"/>
                                            </div>                                            
                                        </div>
                                    </form>
                                </div>
                            </article>
                            <!-- Body Menu -->       
                            <article>
                                <div class="pad_left1">
                                    <h3>Khóa Học Tiêu Biểu</h3>
                                </div>
                                <ul class="list1">								
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=5">Tiếng Nhật N5</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=4">Tiếng Nhật N4</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=3">Tiếng Nhật N3</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=2">Tiếng Nhật N2</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=1">Tiếng Nhật N1</a></li>
                                    <li><a href="DSBaiHocEnglish.php?IdLearning=1">Tiếng Anh Giao Tiếp</a></li>
                                    <li><a href="DSBaiHocEnglish.php?IdLearning=3">Tiếng Anh Chuyên Ngành</a></li>
                                </ul>                              				
                            </article>
                            <!-- / Body Menu -->
                        </div>
                    </div>
                </section>
                <!-- content -->
                <!-- footer -->
                <?php include'templates/Footer.php' ?>
                <!-- / footer -->
            </div>
        </div>
        <script type="text/javascript"> Cufon.now();</script>
    </body>
</html>