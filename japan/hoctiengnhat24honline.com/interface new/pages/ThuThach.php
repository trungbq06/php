<?php
session_start();

include '../entity/clsTopicOther.php';
include '../dao/TopicOtherDAO.php';
include '../entity/clsDesTopicOther.php';
include '../dao/DesTopicOthDAO.php';
include '../entity/clsActiveAcc.php';
include '../dao/ActiveAccDAO.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chi Tiết Bài Học</title>
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
                            <?php
                            if ((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))) {
                                if ($_SESSION['loginAcc'] == 'Yes') {
                                    $active = readAtAccByIdAcc($_SESSION["id"])->Status;
                                    if ($active == 'Yes') {                                        
                                    ?>
                                    <h2 align="center">Hãy Chơi Game Thử Thách Tiếng Nhật Các Bạn Ơi</h2>
                                    <p align="center">
									<iframe src="http://thuthach.hoctiengnhat24honline.com/" width="800" height="600"></iframe>
									</p>
                                    <?php
                                } else {
                                        ?>
                                        <h3>Mời Bạn Nạp Tiền Để Xem Nội Dung Này!</h3>
                                        <h2><a href="HocPhi.php">Click vào đây để hướng dẫn nạp tiền</a></h2>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <h3>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</h3>
                                    <?php
                                }
                            } else {
                                ?>
                                <h3>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</h3>
                                <?php
                            }
                            ?>
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