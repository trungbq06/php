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
include('includes/MobiCard.php');

if(isset($_POST['NLNapThe'])){
		$idAcc = $_POST['txtId'];
		$soseri = $_POST['txtSoSeri'];
		$sopin = $_POST['txtSoPin'];
		$type_card = $_POST['select_method'];
		
		if ($_POST['txtId'] == "" ) {
			echo '<script>alert("Vui lòng đăng nhập lại");</script>';
			echo "<script>location.href='".$_SERVER['HTTP_REFERER']."';</script>";
			exit();
		}
		if ($_POST['txtSoSeri'] == "" ) {
			echo '<script>alert("Vui lòng nhập Số Seri");</script>';
			echo "<script>location.href='".$_SERVER['HTTP_REFERER']."';</script>";
			exit();
		}
		if ($_POST['txtSoPin'] == "" ) {
			echo '<script>alert("Vui lòng nhập Mã Thẻ");</script>';
			echo "<script>location.href='".$_SERVER['HTTP_REFERER']."';</script>";
			exit();
		}
		$fullname = readAccountById($idAcc)->Username;
		$phone = readDesAccByIdAcc($idAcc)->Phone;
		$email = readDesAccByIdAcc($idAcc)->Email;
		 $arytype= array(92=>'VMS',93=>'VNP',107=>'VIETTEL',121=>'VCOIN',120=>'GATE');
	//Tiến hành kết nối thanh toán Thẻ cào.
	          $call = new MobiCard();
			  $rs = new Result();
			  $coin1 = rand(10,999);
			  $coin2 = rand(0,999);
			  $coin3 = rand(0,999);
			  $coin4 = rand(0,999);
			  $ref_code = $coin4 + $coin3 * 1000 + $coin2 * 1000000 + $coin1 * 100000000;
					
			  $rs = $call->CardPay($sopin,$soseri,$type_card,$ref_code,$fullname,$phone,$email);
			  
			  if($rs->error_code == '00') {				
				// Cập nhật data tại đây
				   echo  '<script>alert("Bạn đã nạp thành công '.$rs->card_amount.' vào trong tài khoản.");</script>'; //$total_results;
			           createCart($idAcc, $rs->card_amount);
                                   updateByIaAcc($idAcc, "Yes");
                                   Header("Location:ThanhCong.php");
			   }
			   else {
				   echo  '<script>alert("Lỗi :'.$rs->error_message.'");</script>';
			   }
	
		 //var_dump($rs);
	
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nạp Học Phí</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
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
<body>
<div id="main_container">
	<?php include'templates/Menu.php' ?>
	<div id="header">    
        <div id="logo">
			<p><a href="http://hoctiengnhat24h.com/"><img src="images/logo/1240398_427175504059500_1348746955_n.png" width="175" height="113" /></a></p>
			<p STYLE="text-align:center; font-size: 18px;">Học Tiếng Nhật 24h</p>
		</div>
        
        <div class="oferte_content">
			<img src="images/quangcao/lophoc24h.png" width="590px" height="219px" />
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
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="DangKi.php">Đăng Kí</a> | <a href="QuenMK.php">Quên Mật Khẩu</a></p>
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
	
	<div id="main_content"> 
		<?php include'templates/LearningPrice.php' ?>             
		<?php include'templates/BodyLeft.php' ?>
		<!-- end of left content -->
		<div class="center_content">
			<div class="center_title_bar">Nạp Học Phí</div>
			<div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">
				<?php
				if(isset($_SESSION['loginAcc'])){
					if($_SESSION['loginAcc'] == 'Yes')
					{
				?>
					<form name="napthe" action="#" method="post">
						<div id="body12" style="border: 1px solid #444444;  margin: 0 auto;  padding: 10px;  width: 531px;">
						<div style="color:#444444;margin-top:10px;font-size:14px" align="center">
							Chọn loại thẻ để nạp
						</div>

						<table align="center">
							
							<tr>
								<td colspan="3">
									<table>
										<tr>
											<td style="padding-left:0px;padding-top:5px" align="right" ><label for="92"><img  src="includes/images/mobifone.jpg" /></label> </td>
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
								<td colspan="2"><input type="text" id="txtSoSeri" name="txtSoSeri" style="height:25px;width:200px" /></td>
							</tr>
							 <tr>
								<td align="right">Mã số thẻ : </td>
								<td colspan="2">
									<input type="text" id="txtSoPin" name="txtSoPin" style="height:25px;width:200px" />
									
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
					}else{
						echo 'Mời Bạn Đăng Nhập Để Nạp Tiền Vào Tài Khoản';
					}
				}else{
					echo 'Mời Bạn Đăng Nhập Để Nạp Tiền Vào Tài Khoản';
				}
				?>
				</div>
				<div class="bottom_prod_box_big"></div>
			</div>
		</div>
		<!-- end of center content -->
   
		<?php include'templates/BodyRight.php' ?>         
	</div><!-- end of main content -->
	
	<?php include'templates/Footer.php' ?>
</div>
</body>
</html>