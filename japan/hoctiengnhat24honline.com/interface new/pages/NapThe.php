<?php
session_start();
include '../entity/clsDesAccount.php';
include '../dao/DesAccountDAO.php';
include '../entity/clsAccount.php';
include '../dao/AccountDAO.php';
include '../entity/clsCartMobile.php';
include '../dao/CartMobileDAO.php';
include '../entity/clsActiveAcc.php';
include '../dao/ActiveAccDAO.php';
include '../entity/clsBanner.php';
include '../dao/BannerDAO.php';
include('includes/MobiCard.php');
if (isset($_POST['NLNapThe'])) {
    $idAcc = $_POST['txtId'];
    $soseri = $_POST['txtSoSeri'];
    $sopin = $_POST['txtSoPin'];
    $type_card = $_POST['select_method'];
    if ($_POST['txtId'] == "") {
        echo '<script>alert("Vui lòng đăng nhập lại");</script>';
        echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
        exit();
    }
    if ($_POST['txtSoSeri'] == "") {
        echo '<script>alert("Vui lòng nhập Số Seri");</script>';
        echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
        exit();
    }
    if ($_POST['txtSoPin'] == "") {
        echo '<script>alert("Vui lòng nhập Mã Thẻ");</script>';
        echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
        exit();
    }

    $fullname = readAccountById($idAcc)->Username;
    $phone = readDesAccByIdAcc($idAcc)->Phone;
    $email = readDesAccByIdAcc($idAcc)->Email;
    $arytype = array(92 => 'VMS', 93 => 'VNP', 107 => 'VIETTEL', 121 => 'VCOIN', 120 => 'GATE');

//Tiến hành kết nối thanh toán Thẻ cào.
    $call = new MobiCard();
    $rs = new Result();
    $coin1 = rand(10, 999);
    $coin2 = rand(0, 999);
    $coin3 = rand(0, 999);
    $coin4 = rand(0, 999);
    $ref_code = $coin4 + $coin3 * 1000 + $coin2 * 1000000 + $coin1 * 100000000;
    $rs = $call->CardPay($sopin, $soseri, $type_card, $ref_code, $fullname, $phone, $email);
    if ($rs->error_code == '00') {
        // Cập nhật data tại đây
        echo '<script>alert("Bạn đã nạp thành công ' . $rs->card_amount . ' vào trong tài khoản.");</script>'; //$total_results;
        createCart($idAcc, $rs->card_amount, "Hoc");	   updateByIaAcc($idAcc, "Yes");
        Header("Location:ThanhCong.php");
    } else {
        echo '<script>alert("Lỗi :' . $rs->error_message . '");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nạp Thẻ</title>
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
        <script>
            function checkInputContact() {
                if (document.contact.name.value == "") {
                    alert("Mời Bạn Nhập Họ Tên!");
                    document.contact.name.focus();
                    return false;
                }
                if (document.contact.phone.value == "") {
                    alert("Mời Bạn Nhập Số Điện Thoại!");
                    document.contact.phone.focus();
                    return false;
                }
                if (document.contact.message.value == "") {
                    alert("Mời Bạn Nhập Tin Nhắn!");
                    document.contact.message.focus();
                    return false;
                }
                return true;
            }
        </script>
        <style>
            #ttNganluong {
                background: url("includes/images/napthe.png") no-repeat scroll 0 0 transparent;
                border: 0 none;
                cursor: pointer;
                display: inline-block;
                height: 30px;
                margin-right: 5px;
                text-indent: -3000px;
                vertical-align: middle;
                width: 122px;
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
                            <article class="col1">
                                <div class="pad_left1">
                                    <?php
                                    if ((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))) {
                                        if ($_SESSION['loginAcc'] == 'Yes') {
                                            ?>                                            
                                            <h2>Nạp Học Phí</h2>
                                            <form id="ContactForm" name="NLNapThe" action="#" method="post">
                                                <div id="body12" style="border: 1px solid #444444;  margin: 0 auto;  padding: 10px;  width: 531px;">
                                                    <div style="color:#444444;margin-top:10px;font-size:14px" align="center">
                                                        Chọn loại thẻ để nạp
                                                    </div>
                                                    <table align="center">
                                                        <tr>
                                                            <td colspan="3">
                                                                <table>
                                                                    <tr>
                                                                        <td style="padding-left:60px;padding-top:5px" align="right" ><label for="92"><img  src="includes/images/mobifone.jpg" /></label> </td>
                                                                        <td style="padding-left:2px;padding-top:5px"><label for="93"><img  src="includes/images/vinaphone.jpg" /></label></td>
                                                                        <td style="padding-top:5px;padding-left:2px" align="left"><label for="107"><img  src="includes/images/viettel.jpg" width="110" height="35" /></label></td>
                                                                        <td style="padding-top:5px;padding-left:2px" align="left"> <label for="120"><img width="100" height="35" src="includes/images/gate.jpg"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="center" style="padding-bottom:0px;">
                                                                            <input type="radio" name="select_method" checked="true" value="VMS" id="92"  />
                                                                        </td>
                                                                        <td align="center" style="padding-bottom:0px;padding-left:5px">
                                                                            <input type="radio"  name="select_method" value="VNP" id="93" />
                                                                        </td>
                                                                        <td align="center" style="padding-bottom:0px;padding-right:0px">
                                                                            <input type="radio"  name="select_method" value="VIETTEL" id="107" />
                                                                        </td>
                                                                        <td align="center" style="padding-bottom:0px;padding-right:0px">
                                                                            <input type="radio" id="120" value="GATE" name="select_method">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" style="padding-bottom:10px">Số Seri :</td>
                                                            <td colspan="2">
                                                                <div class="bg">
                                                                    <input type="text" id="txtSoSeri" name="txtSoSeri" style="height:25px;width:200px;" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Mã số thẻ : </td>
                                                            <td colspan="2">
                                                                <div class="bg">
                                                                    <input type="text" id="txtSoPin" name="txtSoPin" style="height:25px;width:200px" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <input type="hidden" name="txtId" id="txtId" value="<?php echo $_SESSION["id"]; ?>"/>
                                                        <tr>
                                                            <td colspan="3" align="center" style="padding-bottom:10px;padding-right:10px">
                                                                <input type="submit" id="ttNganluong" name="NLNapThe" value="Nạp Thẻ"  /> 
                                                            </td>
                                                        </tr>	
                                                    </table>
                                                </div>
                                            </form>
                                            <?php
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
                            <article class="col2 pad_left2">
                                <?php
                                if (isset($_SESSION['loginAcc'])) {
                                    if ($_SESSION['loginAcc'] == 'Yes') {
                                        $user = readDesAccByIdAcc($_SESSION["id"])->Name;
                                        ?>
                                        <div class="pad_left1">
                                            <?php
                                            echo "<h3>Xin Chào " . $user . "</h3>";
                                            ?>
                                        </div>
                                        <form id="ContactForm" name="ContactForm" method="post" action="../controller/AccountController.php">
                                            <input type="submit" name="commit" value="Thoát" />
                                        </form>
                                        <?php
                                    } else {
                                        ?>

                                        <div class="pad_left1" style="border-bottom: 1px #000 outset">        
                                            <h3><a href="DangKi.php">Đăng Kí Tại Đây</a></h3>    
                                            <p>Đăng Kí để tham gia các khóa học</p>        
                                        </div>
                                        <div class="pad_left1">
                                            <h3>Đăng Nhập</h3>        
                                        </div>
                                        <?php
                                        if (isset($_GET['messageDN']))
                                            echo "<b style='font-size:12px;'>" . $_GET['messageDN'] . "</b>";
                                        ?>
                                        <form id="ContactForm" action="../controller/AccountController.php" method="post" name="contact">
                                            <div style="border-bottom: 1px #000 outset">
                                                <div class="wrapper">
                                                    <strong>Tài Khoản:</strong>
                                                    <div class="bg"><input type="text" name="username" class="input" style="width: 256px;"></div>
                                                </div>
                                                <div class="wrapper">
                                                    <strong>Mật Khẩu:</strong>
                                                    <div class="bg"><input type="password" name="password" class="input" style="width: 256px;"></div>
                                                </div>
                                                <br />
                                                <div class="wrapper">
                                                    <div class="bg">
                                                        <input type="submit" name="commit" value="Đăng Nhập"/>
                                                    </div>
                                                    <div class="bg">
                                                        <input type="reset" value="Xóa Dữ Liệu"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="pad_left1" style="border-bottom: 1px #000 outset">        
                                        <h3><a href="DangKi.php">Đăng Kí Tại Đây</a></h3>    
                                        <p>Đăng Kí để tham gia các khóa học</p>        
                                    </div>      
                                    <div class="pad_left1">
                                        <h3>Đăng Nhập</h3>        
                                    </div>
                                    <?php
                                    if (isset($_GET['messageDN']))
                                        echo "<b style='font-size:12px;'>" . $_GET['messageDN'] . "</b>";
                                    ?>
                                    <form id="ContactForm" action="../controller/AccountController.php" method="post" name="contact">
                                        <div style="border-bottom: 1px #000 outset">
                                            <div class="wrapper">
                                                <strong>Tài Khoản:</strong>
                                                <div class="bg"><input type="text" name="username" class="input" style="width: 256px;"></div>
                                            </div>
                                            <div class="wrapper">
                                                <strong>Mật Khẩu:</strong>
                                                <div class="bg"><input type="password" name="password" class="input" style="width: 256px;"></div>
                                            </div>
                                            <br />
                                            <div class="wrapper">
                                                <div class="bg">
                                                    <input type="submit" name="commit" value="Đăng Nhập"/>
                                                </div>
                                                <div class="bg">
                                                    <input type="reset" value="Xóa Dữ Liệu"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                }
                                ?>
                                <div class="pad_left1">
                                    <h3>Khóa Học Tiêu Biểu</h3>
                                </div>
                                <ul class="list1">								
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=5">Tiếng Nhật N5</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=4">Tiếng Nhật N4</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=3">Tiếng Nhật N3</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=2">Tiếng Nhật N2</a></li>
                                    <li><a href="DSBaiHocLevel.php?IdGroupMenu=1&IdLevel=1">Tiếng Nhật N1</a></li>
                                    <li><a href="DSBaiHocEnglish.php?IdLearning=1">Tiếng Anh Giao Tiếp</a></li>
                                    <li><a href="DSBaiHocEnglish.php?IdLearning=3">Tiếng Anh Chuyên Ngành</a></li>
                                </ul>
                                <div class="pad_left1">
                                    <h3>Hỗ Trợ Online</h3>
                                </div>
                                <div class="wrapper">
                                    <span class="date">Skype</span>
                                    <p class="pad_top2"><a href="#">Đang Online</a><br>
                                        Hỗ trợ hướng dẫn, giải đáp người dùng...</p>
                                </div>
                                <div class="wrapper">
                                    <span class="date">Yahoo</span>
                                    <p class="pad_top2"><a href="#">Đang Online</a><br>
                                        Hỗ trợ hướng dẫn, giải đáp người dùng...</p>
                                </div>							
                            </article>
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