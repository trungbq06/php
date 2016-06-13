<?php

class Member extends Generals{
	
	
	function register(){
		
		$check_login = $this->check_login();
		if($check_login != 0){
			$this->redirect_script(DOMAIN . "?mod=member&site=profile");
		}
				
		$this->general();
		global $conf_year, $conf_month, $conf_day, $conf_gender, $smarty;
		$message = "Vui lòng nhập đầy đủ thông tin đăng ký !";
		
		$select['year'] = $this->get_select_from_array($conf_year, 1990);
		$select['month'] = $this->get_select_from_array($conf_month);
		$select['day'] = $this->get_select_from_array($conf_day);
		$select['gender'] = $this->get_select_from_array($conf_gender);
		$select['province'] = $this->get_select_from_table('tbl_local', 0);
		$smarty->assign('select', $select);

		$article = $this->gen_article_by_position(2);
		$smarty->assign('article', $article);
		
		if(isset($_POST["FrmRegister"])){
			$user = $_POST["email"];
			$pass = $_POST["password"];
			$repass = $_POST["repass"];
			$sql = "SELECT id FROM tbl_member WHERE email='$user'";
			
			if($pass != $repass){
				$message = "Mật khẩu nhập lại không đúng !";
				$this->alert($message);
				$this->redirect_back();
			}
			elseif($this->check_exist($sql)){
				$message = "Email đã được sử dụng, vui lòng chọn email khác !";
				$this->alert($message);
				$this->redirect_back();
			}
			else{
				$data["email"] = $_POST["email"];
				$data["password"] = md5($_POST["password"]);
				$data["name"] = $_POST["name"];
				$data["gender"] = $_POST["gender"];
				$data["birthday"] = $_POST["year"] . "-" . $_POST['month'] . "-" . $_POST['day'];
				$data["phone"] = $_POST["phone"];
				$data['province_id'] = $_POST['province_id'];
				$data["yahoo"] = $_POST["yahoo"];
				$data['skype'] = $_POST['skype'];
				$data["active"] = 1;
				$data["created"] = $this->time_now();
		
				if($id = $this->query_insert("tbl_member", $data)){
					$_SESSION[LOGIN_MEMBER] = $id;
					$this->alert("Đăng ký thành công !");
					$this->redirect_script(DOMAIN);
				}
				else{
					$message = "Xảy ra lỗi, vui lòng thực hiện lại !";
					$this->alert("Error !");
					$this->redirect_back();
				}
			}
		}
		$smarty->assign("message", $message);
		$smarty->display("wapfix.tpl");
	}
	
	

	
	function login(){
		$check_login = $this->check_login();
		if($check_login != 0){
			$this->redirect_script(DOMAIN . "?mod=member&site=profile");
		}
		$this->general();
		global $smarty;
		$message = "Vui lòng nhập đúng tên đăng nhập và mật khẩu !";
		
		if(isset($_POST["FrmLogin"])){
			$user = trim($_POST["email"]);
			$pass = trim($_POST["password"]);
			if($user == "" || $pass == ""){
				$message = "Vui lòng nhập đầy đủ thông tin đăng nhập !";
			}
			else{
				$pass = md5($pass);
				$sql = "SELECT id FROM tbl_member WHERE active=1 AND email='$user' AND password='$pass'";
				$query = $this->query($sql);
				$row = $this->num_rows($query);
				if($row > 0){
					$result = $this->fetch_array($query);
					$_SESSION[LOGIN_MEMBER] = $result["id"];
					$this->redirect_script(DOMAIN . "?mod=home&site=index");
				}
				else {
					$message = "Sai tên đăng nhập hoặc mật khẩu !";
				}
			}
		}
		$smarty->assign("message", $message);
		$smarty->display("wapfix.tpl");
	}
	
	
	function infomation(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
		
		$sql = "SELECT * FROM tbl_member WHERE id=$id";
		$result = $this->find_one($sql);
		$smarty->assign('result', $result);
		
		$smarty->display("account.tpl");
	}
	
	function profile(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];

		$shops = array();
		$shops_query = $this->query("SELECT id,name,image FROM tbl_page WHERE member_id=$id");
		while ($item = $this->fetch_array($shops_query)){
			$item["img"] = $this->get_image(PAGE_UPLOAD . $item['id'] . "/", $item["image"]);
			$shops[] = $item;
		}
		$smarty->assign('shops', $shops);
		
		$products = $this->get_list_product(10, "description", NULL, "id DESC");
		$smarty->assign('products', $products);
		
		
		//$smarty->display(DEFAULT_LAYOUT);
		$smarty->display("wapfix.tpl");
	}
	
	
	
	function change(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
	
		$value = $this->find_by_id('tbl_member', $id);
		$smarty->assign('value', $value);
	
		global $conf_year, $conf_month, $conf_day, $conf_gender;
		$year = gmdate("Y", strtotime($value["birthday"])+3600*7);
		$month = gmdate("m", strtotime($value["birthday"])+3600*7);
		$day = gmdate("d", strtotime($value["birthday"])+3600*7);
		$message = "Vui lòng nhập đầy đủ thông tin đăng ký !";
		$select['year'] = $this->get_select_from_array($conf_year, $year);
		$select['month'] = $this->get_select_from_array($conf_month, $month);
		$select['day'] = $this->get_select_from_array($conf_day, $day);
		$select['gender'] = $this->get_select_from_array($conf_gender, $value["gender"]);
		$select['province'] = $this->get_select_from_table('tbl_local', 0, $value["province_id"]);
		$smarty->assign('select', $select);
	
	
		if(isset($_POST['FrmSubmit'])){
			$data["name"] = $_POST["name"];
			$data["gender"] = $_POST["gender"];
			$data["birthday"] = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
			//$data["email"] = $_POST["email"];
			$data["phone"] = $_POST["phone"];
			$data["province_id"] = $_POST["province_id"];
			$data["yahoo"] = $_POST["yahoo"];
			$data['skype'] = $_POST['skype'];
			$where = "id='$id'";
			if($this->query_update('tbl_member', $data, $where)){
				$this->alert('Thay đổi thông tin thành công !');
				$this->redirect_script(DOMAIN . "?mod=member&site=infomation");
			}
			else {
				$this->alert('Xảy ra lỗi, vui lòng thực hiện lại !');
			}
		}
	
		$smarty->display("account.tpl");
	}
	
	function password(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
	
		$message = "Nhập mật khẩu cũ xác nhận và nhập mật khẩu thay thế !";
	
		if(isset($_POST["FrmSubmit"])){
			$old = trim($_POST["old"]);
			$new = trim($_POST["new"]);
			$re = trim($_POST["re"]);
			$sql_check = "SELECT * FROM tbl_member WHERE id='$id' AND password='" . md5($old) . "'";
			$check = $this->check_field($sql_check);
			if($old == "" || $new == "" || $re == ""){
				$message = "Vui lòng nhập đầy đủ thông tin !";
			}
			elseif (!$check){
				$message = "Mật khẩu cũ xác nhận không đúng !";
			}
			elseif($re != $new){
				$message = "Mật khẩu mới xác nhận không đúng !";
			}
			else{
				$data['password'] = md5($new);
				$where = "id=" . $id;
				if($this->query_update('tbl_member', $data, $where)){
					$this->alert('Thay đổi mật khẩu thành công !');
					$this->redirect_script(DOMAIN . "?mod=member&site=infomation");
				}
				else {
					$this->alert('Xảy ra lỗi, vui lòng thực hiện lại !');
				}
			}
		}
		$smarty->assign("message", $message);
	
		$smarty->display("account.tpl");
	}
	
	
	function passreset(){
		$this->general();
		global $smarty;
		$message = "Vui lòng nhập email của bạn đã đăng ký trên website !";
		if(isset($_POST['FrmReset'])){
			$email = $_POST['email'];
			if($email != NULL){
				$check = $this->find_one("SELECT id FROM tbl_member WHERE active=1 AND email='$email'");
				if(!$check){
					$message = "Email chưa được đăng ký hoặc chưa được kích hoạt";
				}
				else {
					$key = md5(rand(100, 1000));
					$time = strtotime("+1 day", strtotime(date("Y/m/d H:i:s")));
					
					$this->query("UPDATE tbl_member SET reset_key='$key', reset_time=$time WHERE email='$email'");
					$link = DOMAIN . "?mod=member&site=passactive&key=$key&member=".$check['id'];
					
					$info_mail = $this->find_one("SELECT * FROM conf_mail LIMIT 1");
					$info_mail['mail_to'] = $email;
					
					if($this->send_mail($info_mail, "Reset password", $link)){
						$message = "Link xác nhận đã được gửi tới email của bạn, vui lòng đăng nhập email để lấy link.";
					}
				}
			}
		}
		
		$smarty->assign("message", $message);
		$smarty->display("wapfix.tpl");
	}
	
	
	function passactive(){
		$this->general();
		global $smarty;
		$message = "Vui lòng nhập mật khẩu mới của bạn !";
		
		$key = isset($_GET['key']) ? $_GET['key'] : 0;
		$id = isset($_GET['member']) ? $_GET['member'] : 0;
		$time = strtotime(date("Y/m/d H:i:s"));
		
		$sql = "SELECT id FROM tbl_member WHERE id=$id AND reset_key='$key' AND reset_time>$time";
		$member = $this->find_one($sql);
		if(!$member){
			$member = "Link không đúng hoặc đã quá thời gian quy định.";
		}
		else {
			if(isset($_POST['FrmReset'])){
				$pass = $_POST['pass'];
				$repass = $_POST['repass'];
				if($pass==NULL || $repass==NULL){
					$message = "Vui lòng nhập đầy đủ thông tin";
				}
				elseif ($pass != $repass){
					$message = "Mật khẩu nhập lại không đúng";
				}
				else{
					$pass = md5($pass);
					$this->query("UPDATE tbl_member SET password='$pass', reset_key='' WHERE id=$id");
					$message = "Cập nhật mật khẩu thành công";
				}
			}
		}
		
		$smarty->assign("message", $message);
		$smarty->display("wapfix.tpl");
	}
	
	function logout(){
		unset($_SESSION[LOGIN_MEMBER]);
		$this->redirect_script(DOMAIN . "?mod=member&site=login");
	}
	
	
	function avatar(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];

		// Check tồn tại session upload
		$avatar = isset($_SESSION['vshops_cache_image']) ? $_SESSION['vshops_cache_image'] : NULL;
		if(!is_file($avatar)){
			$avatar = NULL;
		}
		$smarty->assign("avatar", $avatar);
		
		//Upload ảnh
		$dir_cache = $this->dir_cache_upload($id);
		if(isset($_POST['upload'])){
			if(count($images) >= 4){
				$this->alert("Chỉ được thêm tối đa 4 ảnh!");
			}
			else {
				$this->img_upload($dir_cache);
			}
		}
		$dir_avatar = $this->dir_check(MEMBER_UPLOAD . $id . "/avatar/");
		$this->img_upload_thumbnail($avatar, $dir_avatar, 120, "tbl_member", $id, $member["image"]);
		
		$smarty->display("account.tpl");
	}
	
	
	/* Quản lý danh sách đơn đặt hàng của member */
	function orders(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
		$result = array();
		$sql = "SELECT a.id,a.number,a.price,a.product_id,pa.created, p.name,p.page_id, page.name AS page FROM product_invoice_item AS a
				LEFT JOIN product_invoice AS pa ON a.invoice_id=pa.id
				LEFT JOIN product AS p ON a.product_id=p.id
				LEFT JOIN tbl_page AS page ON p.page_id=page.id
				WHERE pa.member_id=$id
				";
		
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			
			$dir = PAGE_UPLOAD . $item['page_id'] . "/products/" . $item['product_id'] . "/";
			$item['img'] = $this->get_img($dir);
			$item['created'] = gmdate("H:i", strtotime($item['created'])+7*3600) . ", ngày " . gmdate("d/m/Y", strtotime($item['created'])+7*3600);
			$item['price'] = number_format($item['price']) . " đ";
			$item['product_link'] = ALIAS_PRODUCT_VIEW . $this->str_convert($item['name']) . "-" . $item['product_id'] . ".html";
			$item['page_link'] = ALIAS_SHOP . $item['page_id'] . "/";
			$result[] = $item;
		}
		$smarty->assign('result', $result);
		
		$smarty->display("account.tpl");
	}
	
	
	/* Quản lý danh sách pages đã đăng ký */
	function pages(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
		$result = array();
		$sql = "SELECT a.id,a.name,a.created,a.view,a.image, count(p.id) AS products, local.name AS local FROM tbl_page AS a
				LEFT JOIN product AS p ON p.page_id=a.id
				LEFT JOIN tbl_local AS local ON a.local_id=local.id
				WHERE a.member_id=$id
				GROUP BY a.id
				";
	
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$dir = PAGE_UPLOAD . $item['id'] . "/";
			$item['img'] = $this->get_image($dir, $item['image']);
			$item['created'] = gmdate("d/m/Y", strtotime($item['created'])+7*3600);
			$item['link'] = ALIAS_SHOP . $item['id'] . "/";
			$item['admin'] = "?mod=helps&site=set_admin_page&id=" . $item['id'];
			$result[] = $item;
		}
		$smarty->assign('result', $result);
		
		$smarty->display("account.tpl");
	}
	
	
}