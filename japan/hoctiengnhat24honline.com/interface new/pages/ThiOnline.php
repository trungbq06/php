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
                                    <?php					if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){						if($_SESSION['loginAcc'] == 'Yes'){							$active = readAtAccByIdAcc($_SESSION["id"])->Status;							if($active == 'Yes'){					?>													<h2>DANH SÁCH BÀI HỌC</h2>								<ul style="font-size: 12px;">									<li style="font-size: 13px;"><a href="ThiN1.php">Đề Thi N1</a></li>									<br />									<li style="font-size: 13px;"><a href="ThiN2.php">Đề Thi N2</a></li>									<br />									<li style="font-size: 13px;"><a href="ThiN3.php">Đề Thi N3</a></li>									<br />									<li style="font-size: 13px;"><a href="ThiN4.php">Đề Thi N4</a></li>									<br />									<li style="font-size: 13px;"><a href="ThiN5.php">Đề Thi N5</a></li>								</ul>							<?php							} else {							?>							<h1>Mời Bạn Nạp Tiền Để Xem Nội Dung Này!</h1>						<?php							}						}else{						?>						<h1>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</h1>					<?php						}					}else{					?>					<h1>Mời Bạn Đăng Nhập Để Xem Nội Dung Này!</h1>					<?php					}					?>
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