<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nạp Học Phí</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <!-- <script type="text/javascript" src="js/Molengo_400.font.js"></script> -->
        <!-- <script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script> -->
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

    <body id="page1">
        <div class="body1">
            <div class="main">
                <!-- header -->
                <header>

                    <?php include'templates/HeaderMenu.php' ?>

                    <div class="wrapper">
                        <h1><a href="index.html" id="logo">Learn Center</a></h1>
                    </div>
                    <div id="slogan">
                        Chúng Tôi Sẽ Giúp Bạn<span>Đến Với Thành Công!</span>
                    </div>
                    <ul class="banners">
                        <li><a href="#"><img src="images/banner1.png" alt=""></a></li>
                        <li><a href="#"><img src="images/banner2.png" alt=""></a></li>
                        <li><a href="#"><img src="images/banner3.png" alt=""></a></li>
                    </ul>
                </header>
                <!-- / header -->
            </div>
        </div>
        <div class="body2">
            <div class="main">
                <!-- content -->
                <section id="content">
                    <div class="wrapper">
                        <div class="pad1 pad_top1">
                            <article class="cols marg_right1">
                                <figure><img src="images/page1_img1.jpg" alt=""></figure>
                                <span class="font1">Chỉ Với 50.000 VNĐ Tham Gia Tất Cả Các Khóa Học <img src="images/icon_new.gif"></span>
                            </article>
                            <article class="cols marg_right1">
                                <figure><img src="images/page1_img2.jpg" alt=""></figure>
                                <span class="font1">Trao Đổi Học Hỏi Kiến Thức</span>
                            </article>
                            <article class="cols">
                                <figure><img src="images/page1_img3.jpg" alt=""></figure>
                                <span class="font1">Trả Lời Tất Cả Các Câu Hỏi Của Thành Viên</span>
                            </article>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="wrapper">
                            <article class="col1">													
                                <div class="pad_left1">
                                    <h3>HƯỚNG DẪN NẠP HỌC PHÍ!</h3>
                                </div>
                                <div class="wrapper">
                                    <p>
                                    <p>Học phí tại thuchanhtiengnhat.com là</p>
                                    <ul>
                                        <li style="font-size:14px">Chỉ với 100.000 VNĐ học mãi mãi!						
                                    </ul>
                                    <br />
                                    <br />
                                    <span style="font-size:14px">Sau khi nạp học phí, các bạn được tham gia học tất cả bài giảng, bài tập, đề thi thử trên website. Không giới hạn số lần và thời gian truy cập.</span>
                                    </p>
                                    <br />
                                    <p>
                                        Để nạp học phí các bạn có thể nạp qua thẻ cào điện thoại, hoặc chuyển khoản qua Ngân hàng
                                        Đối với nạp qua thẻ điện thoại, hệ thống chấp nhận các thẻ Viettel, Mobi, Vina hoặc Gate dưới đây. Tài khoản của bạn sẽ được kích hoạt ngay lập tức sau khi nạp thành công. 
                                        <br />
                                        <br />
                                    <div style="padding-left:100px">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="images/arrow-right.jpg" height="50" alt="" /></td>
                                                <td>
                                                    <a href="NapThe.php"><img src="images/card_charging.png" height="40" alt="" /></a></td>
                                                <td>
                                                    <img src="images/arrow-left.jpg" height="50" alt="" /></td>
                                            </tr>
                                        </table></p>
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