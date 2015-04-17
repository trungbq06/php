<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Liên Hệ</title>
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
                                    <h2>Liên Hệ</h2>
                                    <form id="ContactForm" action="../controller/ContactController.php" method="post" name="contact">
                                        <div>
                                            <div  class="wrapper">
                                                <strong>Họ Tên:</strong>
                                                <div class="bg"><input type="text" name="name" class="input" ></div>
                                            </div>
                                            <div  class="wrapper">
                                                <strong>Điện Thoại:</strong>
                                                <div class="bg"><input type="text" name="phone" class="input" ></div>
                                            </div>
                                            <div  class="wrapper">
                                                <strong>Email:</strong>
                                                <div class="bg"><input type="text" name="message" class="input" ></div>
                                            </div>
                                            <div  class="textarea_box">
                                                <strong>Tin Nhắn:</strong>
                                                <div class="bg"><textarea name="textarea" cols="1" rows="1"></textarea>	</div>
                                            </div>
                                            <input type="hidden" name="commit" value="Gửi" />
                                            <a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Gửi</span></span></a>
                                            <a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Xóa</span></span></a>
                                        </div>
                                    </form>
                                </div>
                            </article>
                            <!-- Body Menu -->
                            <?php include'templates/BodyMenu.php' ?>
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