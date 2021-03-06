<?php
session_start();

include '../entity/clsTopicOther.php';
include '../dao/TopicOtherDAO.php';include '../entity/clsActiveAcc.php';include '../dao/ActiveAccDAO.php';
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
                                            <h2>DANH SÁCH BÀI HỌC</h2>
                                            <?php
                                            $IdLevel = $_GET['IdLevel'];
                                            ?>
                                            <h3> - 
                                                <?php
                                                if ($IdLevel == 1)
                                                    echo "Sơ Cấp";
                                                else if ($IdLevel == 2)
                                                    echo "Trung Cấp";
                                                else if ($IdLevel == 3)
                                                    echo "Thượng Cấp";
												else if ($IdLevel == 4)
                                                    echo "Kanji Sơ Cấp Khác";
												else if ($IdLevel == 5)
                                                    echo "Kanji Trung Cấp Khác";
												else if ($IdLevel == 6)
                                                    echo "Kanji Thượng Cấp Khác";
												else if ($IdLevel == 7)
                                                    echo "Học Tiếng Nhật Giao Tiếp";
												else if ($IdLevel == 8)
                                                    echo "Học mp3 Khác";
												else if ($IdLevel == 9)
                                                    echo "Trợ Từ";
												else if ($IdLevel == 10)
                                                    echo "Phó Từ";
												else if ($IdLevel == 11)
                                                    echo "Phương Pháp Học";
												else if ($IdLevel == 12)
                                                    echo "Học tính từ na";
												else if ($IdLevel == 13)
                                                    echo "Học tính từ i";
												else if ($IdLevel == 14)
                                                    echo "Học danh từ";
												else if ($IdLevel == 15)
                                                    echo "Học động từ";
												else if ($IdLevel == 16)
                                                    echo "Học chia thể động từ";
												else if ($IdLevel == 17)
                                                    echo "Học tự động từ và tha động từ";
                                                else
                                                    echo "No-Name";
                                                ?>
                                            </h3>
                                            <?php														
                                            $Topic = readTopicOth($IdLevel);
                                            foreach ($Topic as $item) {
                                                ?>
                                                <ul>
                                                    <li style="font-size: 13px;"> + <a  href="CTBaiHocKhac.php?IdTopic=<?php echo $item->Id ?>"><?php echo $item->Title ?></a></li>
                                                </ul>
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