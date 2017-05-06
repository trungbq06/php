<?php
session_start();

include '../entity/clsTopicHA.php';
include '../dao/TopicHADAO.php';include '../entity/clsActiveAcc.php';include '../dao/ActiveAccDAO.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Danh Sách Bài Học</title>
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
                                    <?php
                                    if ((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))) {
                                        if ($_SESSION['loginAcc'] == 'Yes') {												$active = 'No';												$active = readAtAccByIdAcc($_SESSION["id"])->Status;	
                                            ?>
                                            <h2>DANH SÁCH BÀI HỌC</h2>
                                            <?php											if($active=='Yes'){
                                            $Topic = readTopicHA();
                                            foreach ($Topic as $item) {
                                                ?>
                                                <ul>
                                                    <li style="font-size: 13px;"> + <a  href="CTBaiHocHA.php?IdTopic=<?php echo $item->Id ?>"><?php echo $item->Name ?></a></li>
                                                </ul>
                                                <?php
                                            }											}else {												?>												Mời Bạn Đóng Phí Để Xem Nội Dung Này <a href="HocPhi.php">Click vào đây để xem hướng dẫn</a>												<?php											}
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