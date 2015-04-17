<?php
session_start();include '../entity/clsPage.php';		include '../dao/PageDAO.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang Chủ</title>
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
        <![endif]-->		<style>		#contentHome>h1{			padding: 0px;
		}		</style>
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
                                <span class="font1">Chỉ Với 400.000 VNĐ Tham Gia Tất Cả Các Khóa Học <img src="images/icon_hot.gif"></span>
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
                                    <h3>Chào mừng bạn đến với lớp học online!</h3>
                                </div>
                                <div class="wrapper">
                                    <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
                                    <p class="pad_bot1 pad_top2"><strong>KHÓA HỌC TIẾNG NHẬT TRỰC TUYẾN (HỌC ANH VĂN VÀ TÀI LIỆU CHO HỌC VIÊN).</strong></p>
                                    <p align="justify">
                                        Khi học tại www.hoctiengnhat24honline.com bạn sẽ được đào tạo trong môi trường chuyên nghiệp, tiết kiệm thời gian chi phí, nguồn tài liệu chọn lọc: tài liệu sách, mp3, video trong phần tài liệu và học lý thuyết mọi cấp độ và luyện thi trắc nghiệm mọi cấp độ khi tài khoản đã được kích hoạt.</p>
                                </div>
                                <div id="contentHome">
                                    <br />
                                    <?php echo readPage(1)->Content ?>

                                   
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