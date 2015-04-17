<?php
include '../entity/clsDesAccount.php';
include '../dao/DesAccountDAO.php';
?>
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
            <form id="ContactForm" name="ContactForm" action="../controller/AccountController.php" method="post" onsubmit="return checkInputSignIn();">
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
        <form id="ContactForm" name="ContactForm" action="../controller/AccountController.php" method="post" onsubmit="return checkInputSignIn();">
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
        <p class="pad_top2"><a href="skype:tokyotiengnhat?chat">Đang Online</a><br>
            Hỗ trợ hướng dẫn, giải đáp người dùng...</p>
    </div>
    <div class="wrapper">
        <span class="date">Yahoo</span>
        <p class="pad_top2"><a href="ymsgr:sendim?tokyotiengnhat&amp;m=Hello">Đang Online</a><br>
            Hỗ trợ hướng dẫn, giải đáp người dùng...</p>
    </div>							
</article>
<script>
    function checkInputSignIn() {
        if (document.ContactForm.username.value === "") {
            alert("Mời Bạn Nhập Tài Khoản!");
            return false;
        }
        if (document.ContactForm.password.value === "") {
            alert("Mời Bạn Nhập Mật Khẩu!");
            return false;
        }
        return true;
    }
</script>