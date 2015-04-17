<?php
	include '../entity/clsDesAccount.php';
	include '../dao/DesAccountDAO.php';
?>
<link rel="stylesheet" type="text/css" href="js/validationEngine.jquery.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-vi.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
 <script>
		$(document).ready(function(e) {
            $("#frmdangnhap").validationEngine({
					showOneMessage:true,
					maxErrorsPerField:true,
					validationEventTrigger:'keyup'
			
			});
        });
 </script>
<div id="header">    
        <div id="logo">
			<p><a href="http://thuchanhtiengnhat.com/"><img src="images/logo/1240398_427175504059500_1348746955_n.png" width="175" height="113" /></a></p>
			<p STYLE="text-align:center; font-size: 18px;">Học Tiếng Nhật 24h</p>
		</div>
        
        <div class="oferte_content">
			<img src="images/quangcao/lophoc24h.jpg" width="590px" height="174px" />
		</div> 
			
		<div id="login_acc">
			
			<?php
			if(isset($_SESSION['loginAcc'])){
				if($_SESSION['loginAcc'] == 'Yes')
				{
					$user = readDesAccByIdAcc($_SESSION["id"])->Name;
			?>
			</br>
			</br>
			</br>
			<b style="margin-left:7px; font-size:12px;">
			<?php
				echo "Xin Chào </br>".$user."";
			?>
			</b>
			</br>
			<form id="form1" name="form1" method="post" action="../controller/AccountController.php">
				<input type="submit" name="commit" id="button" value="Thoát" />
			</form>
			<?php
				}else{
			?>
			<p><!-- end of oferte_content-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Đăng Nhập</b></p>
			<form id="frmdangnhap" name="frmdangnhap" method="post" action="../controller/AccountController.php">
				<p>Tài Khoản:</p>
				&nbsp;<input type="text" name="username" id="textfield" class="validate[required]"/>
				<p>Mật Khẩu:</p>
				<input type="password" name="password" id="textfield2" class="validate[required]"/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="DangKi.php">Đăng Kí</a> | <a href="QuenMK.php">Quên Mật Khẩu</a></p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="commit" id="button" value="Đăng Nhập" />
				</p>
			</form>
			<?php
				}
			}else{
			?>
			<p><!-- end of oferte_content-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Đăng Nhập</b></p>
			<form id="frmdangnhap" name="frmdangnhap" method="post" action="../controller/AccountController.php">
				<p>Tài Khoản:</p>
				&nbsp;<input type="text" name="username" id="textfield" class="validate[required]"/>
				<p>Mật Khẩu:</p>
				<input type="password" name="password" id="textfield2" class="validate[required]"/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="DangKi.php" style="color: black;">Đăng Kí</a> | <a href="QuenMK.php" style="color: black;">Quên Mật Khẩu</a></p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="commit" id="button" value="Đăng Nhập" />
				</p>
			
			<?php 
			if(isset($_GET['messageDN']))
				echo "<b style='font-size:12px;'>".$_GET['messageDN']."</b>";
			?>
			</form>	
			<?php
			}
			?>	
        </div>	

</div>
<?php
	include '../entity/clsBanner.php';
	include '../dao/BannerDAO.php';
	$Banner=getBannerByPos("2");
	foreach($Banner as $item)
	{
?>
<a href="<?php echo $item->Url ?>"><image src="<?php echo $item->Image ?>" style="display: block; position: fixed; top: 20px; left: 2px; width:150px"></a>
<?php
	}
	$Banner=getBannerByPos("3");
	foreach($Banner as $item)
	{
?>
<a href="<?php echo $item->Url ?>"><image src="<?php echo $item->Image ?>" style="display: block; position: fixed; top: 20px; right: 2px; width:150px"></a>
<?php
	}
?>
    