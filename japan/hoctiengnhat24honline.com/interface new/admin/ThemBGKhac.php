<?php
session_start();
if (isset($_SESSION['loginAdmin'])) {
    if ($_SESSION['loginAdmin'] == 'Yes') {
        include '../entity/clsGroupMenu.php';
        include '../dao/GroupMenuDAO.php';

        include '../entity/clsLearning.php';
        include '../dao/LearningDAO.php';

        include '../entity/clsLevel.php';
        include '../dao/LevelDAO.php';
        ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <title>Bài Giảng</title>
                <?php include"templates/styles.php" ?>
                <?php include"templates/Tinymce.php" ?>
                <style>
                    .login {
                        position: relative;
                        margin: 0 auto;
                        padding: 20px 20px 20px;
                        width: 779px;
                        background: white;
                        border-radius: 3px;
                        -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
                        box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
                    }
                </style>
                <script>
                    function checkInput() {
                        if (document.topic.title.value == "") {
                            alert("Mời Bạn Nhập Tiêu Đề!");
                            document.topic.title.focus();
                            return false;
                        }
                    }
                </script>
            </head>
            <body>
                <!-- Menu Task -->
                <?php include"templates/Menu_Task.php" ?>
                <!-- End Menu Task -->

                <!-- Menu -->
                <?php include"templates/Menu.php" ?>
                <!-- End Menu -->

            <section class="container">
                <div class="login">
                    <h1>Thêm Bài Giảng</h1>

                    <form method="post" action="../controller/TopicOthController.php" name="topic" onsubmit="return checkInput();">	
                        <p>
                            <b style="font-size: 14px;">Trình Độ&nbsp;&nbsp;</b>
                            <select name="idLevel" style="width:242px"> 
                                <option value="1">Sơ Cấp</option>
                                <option value="2">Trung Cấp</option>
                                <option value="3">Thượng Cấp</option>
                                <option value="4">Kanji Sơ Cấp Khác</option>
                                <option value="5">Kanji Trung Cấp Khác</option>
                                <option value="6">Kanji Thượng Cấp Khác</option>
                                <option value="7">Học Tiếng Nhật Giao Tiếp</option>
                                <option value="8">Học mp3 Khác</option>
                                <option value="9">Trợ Từ</option>
                                <option value="10">Phó Từ</option>
                                <option value="11">Phương Pháp Học</option>
                                <option value="12">Học tính từ na</option>
                                <option value="13">Học tính từ i</option>
                                <option value="14">Học danh từ</option>
                                <option value="15">Học động từ</option>
                                <option value="16">Học chia thể động từ</option>
                                <option value="17">Học tự động từ và tha động từ</option>
                            </select>
                        </p>
                        <p>
                            <input type="text" name="title" value="" placeholder="Tiêu đề" />
                        </p>				
                        <p>
                            <textarea class="area-content" id="content" name="content" cols="35" rows="40">Nội Dung Trình Bày</textarea>					
                        </p>
                        <p class="submit">
                            <input type="reset" name="commit" value="Xóa" /><input type="submit" name="commit" value="Thêm" />
                        </p>
                    </form>
                </div>
            </section>
        </body>
        </html>
        <?php
    }
}
?>
