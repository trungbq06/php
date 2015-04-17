<?php		session_start();				include '../entity/clsLearnEngTest.php';		include '../dao/LearnEngTestDAO.php';				include '../entity/clsLevelEng.php';		include '../dao/LevelEngDAO.php';				include '../entity/clsDeThi.php';		include '../dao/DeThiDAO.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DS Đề Thi</title>
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
                                    <h2>Danh Sách Đề Thi</h2>
                                    <?php 										$IdLevel = $_GET['IdLevel'];										$IdLearning = $_GET['IdLearning'];									?>

                                    <h3>Luyện Thi > <?php echo getInfoLearnEngById($IdLearning)->Name ?> > <?php echo getInfoLevelEngById($IdLevel)->Name ?></h3>
                                    <?php					$Topic=readDeThi($IdLevel, $IdLearning);						foreach($Topic as $item)						{												?>					  <ul>						<li><a  href="CTDeThiEng.php?Id=<?php echo $item->Id ?>&IdLevel=<?php echo $IdLevel ?>&IdLearning=<?php echo $IdLearning ?>"> - <?php echo $item->Name ?></a></li>					  </ul>					<?php						}					?>
                                </div>
                            </article>
                            <!--Body Menu -->
                            <?php include'templates/BodyMenu.php'
                            ?>
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