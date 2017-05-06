<?php
session_start();

include '../entity/clsTopicOther.php';
include '../dao/TopicOtherDAO.php';
include '../entity/clsDesTopicOther.php';
include '../dao/DesTopicOthDAO.php';
include '../entity/clsActiveAcc.php';
include '../dao/ActiveAccDAO.php';

include '../entity/clsGame.php';
include '../dao/GameDAO.php';
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
		<style>
            .boxInfoGame{
				float: left;
                height: 200px;
                width: 200px;
                border: black dotted thin;
				margin: 10px;
            }
			.labelDanhMuc{
				margin-top: 10px;
				width: 200px;
			}

        </style>
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
										$id = $_GET['id'];                                    
                                    ?>
                                    <h2 align="center"><?php echo readGameById($id)->name ?> ^_^</h2>
                                    <p align="center">
									<?php 
										if(readGameById($id)->mobile == 1){
									?>
									<iframe src="<?php echo readGameById($id)->path ?>" width="800" height="600" scrolling="no"></iframe>
									<?php } else{ ?>
									<object width="800" height="600" data="<?php echo readGameById($id)->path ?>" type="application/x-shockwave-flash"><param name="allowfullscreen" value="true"><param name="wmode" value="transparent"></object>
									<?php } ?>
									</p>
									<br/>									
									<div class="labelDanhMuc"><h4>Game Liên Quan</h4></div>																		
										<?php 
											$Topic = readGamesByType(1);
                                            foreach ($Topic as $item) {
										?>
										<a href="ChiTietThuThach.php?id=<?php echo $item->id ?>" title="<?php echo $item->name ?>">
										<div class="boxInfoGame">
											<p align="center"><b><i><?php echo $item->name ?></i></b></p>
											<image src="<?php echo $item->image ?>" style="width: 200px; height: 160px;" />
                                        </div>
										</a>
										<?php }?>	
										<?php 
											$Topic = readGamesByType(0);
                                            foreach ($Topic as $item) {
										?>
										<a href="ChiTietThuThach.php?id=<?php echo $item->id ?>" title="<?php echo $item->name ?>">
										<div class="boxInfoGame">
											<p align="center"><b><i><?php echo $item->name ?></i></b></p>
											<image src="<?php echo $item->image ?>" style="width: 200px; height: 160px;" />
                                        </div>
										</a>
										<?php }?>	
										                                        									
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