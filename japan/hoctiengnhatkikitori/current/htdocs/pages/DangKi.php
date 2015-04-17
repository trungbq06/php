<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Kí</title>
<link rel="shortcut icon" href="images/logo/1240398_427175504059500_1348746955_n.png" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />

<link rel="stylesheet" type="text/css" href="js/validationEngine.jquery.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-vi.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
 <script>
		$(document).ready(function(e) {
            $("#frmdangky").validationEngine({
					showOneMessage:true,
					maxErrorsPerField:true,
					validationEventTrigger:'keyup'
			
			});
        });
 </script>
</head>
<body>
<div id="main_container">
	<?php include'templates/Menu.php' ?>
	<?php include'templates/HeaderBanner.php' ?>
	
	<div id="main_content"> 
		<?php include'templates/LearningPrice.php' ?>                    
		<?php include'templates/BodyLeft.php' ?>
		<!-- end of left content -->
   
		<div class="center_content">
			<div class="center_title_bar">Đăng Ký</div>			
            <div class="prod_box_big">
				<div class="top_prod_box_big"></div>
				<div class="center_prod_box_big">                            
					<div class="contact_form">
						<form action="../controller/AccountController.php" method="post" id="frmdangky">
						<div class="form_row">
							<label class="contact"><strong>Tài Khoản:</strong></label>
							<input type="text" name="username" class="validate[required]" />
						</div>
						 <div class="form_row">
							<label class="contact"><strong>Mật Khẩu:</strong></label>
							<input type="password" name="password" class="validate[required]" />
						</div>
						<div class="form_row">
							<label class="contact"><strong>Họ Và Tên:</strong></label>
							<input type="text" class="validate[required]" name="fullname" />
						</div>  
						<div class="form_row">
							<label class="contact"><strong>Điện Thoại:</strong></label>
							<input type="text" class="validate[required,custom[phone]]" name="phone" />
						</div>
						<div class="form_row">
							<label class="contact"><strong>Email:</strong></label>
							<input type="text" class="" name="email" />
						</div>  
						<?php 
						if(isset($_GET['messageDK']))
							echo "<b style='color:red;'>".$_GET['messageDK']."</b>";
						?>
						<div class="form_row" style="margin-left: 121px;">
							<input type="submit" name="commit" id="dangky" value="Đăng Kí" />
						</div>      
						</form>
					</div> 
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