<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Học Miễn PHí - Tài Liệu</title>
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
                                    <h2>Học Miễn Phí</h2>
                                    <h4>Các bài học Tiếng Nhật online miễn phí</h4><br />
                                    <p>Chương trình luyện thi tiếng Nhật online được hoctiengnhat24h.com thiết kế cho những người có nhu cầu luyện thi Năng lực tiếng Nhật ở tất cả các cấp độ (N1, N2, N3, N4, N5) với hàng ngàn bài tập, bài giảng và đề thi đáp ứng các kỹ năng cần thiết để đạt điểm thi cao nhất.</p></br>
                                    <p>Chương Trình Học Tiếng Nhật Trực Tuyến</p>
                                    <ul style="font-weight:bold; font-size:14px">
                                        <li>Đầy đủ các khóa N1, N2, N3, N4, N5
                                        <li>Hỗ trợ, giải đáp kiến thức qua chat hoặc email
                                        <li>Bài giảng được thiết kế riêng cho người tự học
                                        <li>Lời khuyên và mẹo trả lời câu hỏi từ chuyên gia
                                        <li>Tư vấn phương pháp học miễn phí
                                        <li>Chương trình học đã được chứng minh hiệu quả
                                    </ul>
                                    <br />
                                    <p>Các Bài Giảng Miễn Phí</p>
                                    <p>- <a href="HocMP.php?Id=2">Sơ Cấp</a></p>
                                    <p>- <a href="HocMP.php?Id=3">Trung Cấp</a></p>
                                    <p>- <a href="HocMP.php?Id=4">Thượng Cấp</a></p>                                    
                                    <h2>Tài Liệu</h2>
                                    <h4>Tài liệu Bồi dưỡng thường xuyên theo các cấp học</h4><br />
                                    <p>Cung cấp tài liệu Bồi dưỡng thường xuyên theo các cấp học đến các bạn để lựa chọn, tham khảo bồi dưỡng thường xuyên.</p>                                                                
                                    <p>Tài liệu gồm các mô đun theo 2 nhóm:</p>
                                    <ul>
                                        <li style="font-size:15px; font-weight:bold"><a href="DSTaiLieuType.php?IdType=1">Tài Liệu Sách</a></li>
                                        <li style="font-size:15px; font-weight:bold"><a href="DSTaiLieuType.php?IdType=2">Tài Liệu Video</a></li>
                                    </ul>
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