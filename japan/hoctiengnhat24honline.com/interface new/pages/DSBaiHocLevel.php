<?php
session_start();

include '../entity/clsTopic.php';
include '../dao/TopicDAO.php';
include '../entity/clsLearning.php';
include '../dao/LearningDAO.php';
include '../entity/clsGroupMenu.php';
include '../dao/GroupMenuDAO.php';
include '../entity/clsLevel.php';
include '../dao/LevelDAO.php';
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
                            $IdGroupMenu = $_GET['IdGroupMenu'];
                            $IdLevel = $_GET['IdLevel'];
                            ?>
                            <h2><?php echo getInfoMenuById($IdGroupMenu)->Name ?> > <?php echo getInfoLevelById($IdLevel)->Name ?></h2>
                            <ul>
                                <li><b style="font-size: 15px; font-weight: bold;">KANJI, Từ Vựng</b>
                                    <ul>
                                        <?php
                                        $IdLearning = 1;
                                        $Topic = read5TopTopic($IdGroupMenu, $IdLevel, $IdLearning);
                                        foreach ($Topic as $item) {
                                            ?>
                                            <li> + <a  href="CTBaiHoc.php?IdTopic=<?php echo $item->Id ?>">Bài <?php echo $item->STT ?>: <?php echo $item->Title ?></a></a></li>
                                            <?php
                                        }
                                        ?>
                                        <li> + <a href="DSBaiHocLearning.php?IdGroupMenu=<?php echo $IdGroupMenu ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=1" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
                                    </ul>
                                </li>
                                <br />
                                <li><b style="font-size: 15px; font-weight: bold;">Ngữ Pháp</b>
                                    <ul>
                                        <?php
                                        $IdLearning = 2;
                                        $Topic = read5TopTopic($IdGroupMenu, $IdLevel, $IdLearning);
                                        foreach ($Topic as $item) {
                                            ?>
                                            <li> + <a href="CTBaiHoc.php?IdTopic=<?php echo $item->Id ?>">Bài <?php echo $item->STT ?>: <?php echo $item->Title ?></a></a></li>
                                            <?php
                                        }
                                        ?>
                                        <li> + <a href="DSBaiHocLearning.php?IdGroupMenu=<?php echo $IdGroupMenu ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=2" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
                                    </ul>
                                </li>
                                <br />
                                <li><b style="font-size: 15px; font-weight: bold;">Đọc Hiểu</b>
                                    <ul>
                                        <?php
                                        $IdLearning = 3;
                                        $Topic = read5TopTopic($IdGroupMenu, $IdLevel, $IdLearning);
                                        foreach ($Topic as $item) {
                                            ?>
                                            <li> + <a  href="CTBaiHoc.php?IdTopic=<?php echo $item->Id ?>">Bài <?php echo $item->STT ?>: <?php echo $item->Title ?></a></a></li>
                                            <?php
                                        }
                                        ?>
                                        <li> + <a href="DSBaiHocLearning.php?IdGroupMenu=<?php echo $IdGroupMenu ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=3" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
                                    </ul>
                                </li>
                                <br />
                                <li><b style="font-size: 15px; font-weight: bold;">Nghe, Video</b>
                                    <ul>
                                        <?php
                                        $IdLearning = 4;
                                        $Topic = read5TopTopic($IdGroupMenu, $IdLevel, $IdLearning);
                                        foreach ($Topic as $item) {
                                            ?>
                                            <li> + <a  href="CTBaiHoc.php?IdTopic=<?php echo $item->Id ?>">Bài <?php echo $item->STT ?>: <?php echo $item->Title ?></a></a></li>
                                            <?php
                                        }
                                        ?>
                                        <li> + <a href="DSBaiHocLearning.php?IdGroupMenu=<?php echo $IdGroupMenu ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=4" style="font-size:12px; font-weight:bold; color:red;">Xem Thêm</a></li>
                                    </ul>
                                </li>
                            </ul>
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