<?php

class User extends Generals{
	
	# Danh sach quan ly 
	function index(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		$list = array();  
		$list_query = $this->query("SELECT * FROM user WHERE role<6");
		while ($item = $this->fetch_array($list_query)){
			$item["role"] = $conf_user_role[$item['role']];
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$list[] = $item;
		}
		$smarty->assign('list', $list);
		
		# Ham xu ly check all
		$this->handle_check('user');
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# Them moi 1 user
	function add(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		$roles = $this->get_select_from_array($conf_user_role);
		$smarty->assign('roles', $roles);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$check = $this->query('SELECT username FROM user WHERE username="' . $_POST['username'] . '"');
		
			if($this->num_rows($check) > 0){
				$this->alert('Tài khoản đã tồn tại !');
				$this->redirect_script(THIS_LINK);
			}
			else {
		
				$data['name'] = $_POST['name'];
				$data['username'] = $_POST['username'];
				$data['password'] = md5($_POST['password']);
				$data['email'] = $_POST['email'];
				$data['role'] = $_POST['role'];
				if($_SESSION[LOGIN_ADMIN_ROLE] < $_POST['role']){
					$data['role'] = $_SESSION[LOGIN_ADMIN_ROLE];
				}
				$data['position'] = $_POST['position'];
				$data['active'] = 1;
		
				if($this->query_insert('user', $data)){
					$this->redirect_script(ADMIN . "user");
				}
				else{
					$this->alert("Error !");
					$this->redirect_back();
				}
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# Sua 1 user
	function edit(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0){
			$id = $_SESSION[LOGIN_ADMIN];
		}
		
		$user = $this->find_by_id("user", $id);
		$smarty->assign("user", $user);
		
		if($_SESSION[LOGIN_ADMIN_ROLE] < $user['role']){
			$this->alert('Ban khong co quyen sua user nay');
			$this->redirect_back();
			exit();
		}
		
		$roles = $this->get_select_from_array($conf_user_role, $user['role']);
		$smarty->assign('roles', $roles);
		
		if(isset($_POST["FrmSubmit"])){
		
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['role'] = $_POST['role'];
			if($_SESSION[LOGIN_ADMIN_ROLE] < $_POST['role']){
				$data['role'] = $_SESSION[LOGIN_ADMIN_ROLE];
			}
			$data['position'] = $_POST['position'];
			$where = "id='$id'";
		
			if($this->query_update('user', $data, $where)){
				$this->redirect_script(ADMIN . "user");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	
	}
	
	
	function delete(){
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		
		$check = $this->find_one("SELECT role FROM user WHERE id=$id");
		if(!$check){
			$this->alert("User không tồn tại");
			$this->redirect_back();
		}
		else{
			if($_SESSION[LOGIN_ADMIN_ROLE] <= $check['role']){
				$this->alert('Ban khong co quyen xoa user nay');
				$this->redirect_back();
			}
			else {
				$this->query("DELETE FROM user WHERE id=$id");
				$this->redirect_back();
			}	
		}
	}
	
	# Dang nhap admin
	function login(){
		global $smarty;
		$smarty->assign('admin', ADMIN);
		$smarty->assign('title', TITLE_ADMIN);
		$message = "Please login with your username and Password.";
		
		if(isset($_REQUEST["FrmSubmit"])){
			$user = $_POST["username"];
			$pass = $_POST["password"];
			if($user == NULL || $pass == NULL){
				$message = "username and password are not empty !";
			}
			else{
				$def_user = DEFAULT_USER;
				$def_pass = DEFAULT_PASS;
				if($def_user == $user && $def_pass == $pass){
					$check = $this->find_one("SELECT id, role FROM user WHERE username='".DEFAULT_USER."' AND password='".md5(DEFAULT_PASS)."'");
					if(!$check){
						$data['username'] = DEFAULT_USER;
						$data['password'] = md5(DEFAULT_PASS);
						$data['name'] = "Super Admin";
						$data['role'] = 10;
						$data['active'] = 1;
						if($id = $this->query_insert('user', $data)){
							$_SESSION[LOGIN_ADMIN] = $id;
							$_SESSION[LOGIN_ADMIN_ROLE] = 10;
							$this->redirect_script(ADMIN);
						}
					}
					else {
						$_SESSION[LOGIN_ADMIN] = $check['id'];
						$_SESSION[LOGIN_ADMIN_ROLE] = $check['role'];
						$this->redirect_script(ADMIN);
					}
				}
				else{
					$sql = "SELECT * FROM user WHERE username='$user'";
					if($pass != DEFAULT_PASS){
						$pass = md5($pass);
						$sql .= " AND password='$pass' ";
					}
					$query = $this->query($sql);
					if($this->num_rows($query) > 0){
						$login = $this->find_one($sql);
						if($login['active'] == 0){
							$message = "Your account was be inactived !";
						}
						else {
							$_SESSION[LOGIN_ADMIN] = $login["id"];
							$_SESSION[LOGIN_ADMIN_ROLE] = $login['role'];
							$this->redirect_script(ADMIN);
						}
					}
					else{
						$message = "username or password is not true !";
					}
				}
			}
		}
		$smarty->assign("message", $message);
		$smarty->display('login.tpl');
	}
	
	
	# Dang xuat
	function logout(){
		session_destroy();
		$this->redirect_script("?mod=user&site=login");
	}
	
	function password(){
		$this->general_admin();
		global $smarty;

		if(isset($_REQUEST["FrmSubmit"])){
		
			$old = $_POST['old'];
			$new = $_POST['new'];
			$id = isset($_SESSION[LOGIN_ADMIN]) ? $_SESSION[LOGIN_ADMIN] : 0;
		
			$check = $this->check_exist("SELECT id FROM user WHERE id=$id AND password='" . md5($old) . "'");
		
			if($check){
				$data['password'] = md5($new);
				$where = "id=$id";
				if($this->query_update('user', $data, $where)){
					$this->alert('Thay đổi mật khẩu thành công !');
					$this->redirect_script(ADMIN . "user");
				}
			}
			else {
				$this->alert('Mật khẩu cũ không đúng !');
				$this->redirect_back();
			}
		}
		
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function reset_pass(){
		$this->general_admin();
		global $smarty;
		$id = $_GET['id'] ? $_GET['id'] : 0;
		$id = intval($id);
		
	
		if(isset($_REQUEST["FrmSubmit"])){
	
			$new = $_POST['new'];
	
			$data['password'] = md5($new);
			$where = "id=$id";
			if($this->query_update('user', $data, $where)){
				$this->alert('Thay đổi mật khẩu thành công !');
				$this->redirect_script(ADMIN . "user");
			}
		}
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	/* ---------------------------------------------- */
	
	# data mail
	function mails(){
		$this->general_admin();
		global $conf_mail_type, $conf_gender;
		$list = array();
		$list_query = $this->query("SELECT * FROM data_mail");
		while ($item = $this->fetch_array($list_query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item['gender'] = $this->str_get_field($conf_gender, $item['gender']);
			$item['province'] = $this->get_field_by_id('local_province', $item['province_id']);
			$list[] = $item;
		}
		$smarty->assign('list', $list);
	
		# Ham xu ly check all
		$this->handle_check('user');
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# Them moi 1 user
	function mail_add(){
		global $conf_mail_type, $conf_gender;
		$this->general_admin();
		
		$select['province'] = $this->get_option('local_province', 0, NULL);
		$select['type'] = $this->get_select_from_array($conf_mail_type);
		$select['gender'] = $this->get_select_from_array($conf_gender);
		$smarty->assign('select', $select);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$check = $this->query('SELECT id FROM data_mail WHERE email="' . $_POST['email'] . '"');
			if($this->num_rows($check) > 0){
				$this->alert('Email đã tồn tại !');
				$this->redirect_script(THIS_LINK);
			}
			else {
				$data['name'] = $_POST['name'];
				$data['email'] = $_POST['email'];
				$data['phone'] = $_POST['phone'];
				$data['province_id'] = $_POST['province_id'];
				$data['job_id'] = $_POST['job_id'];
				$data['type'] = $_POST['type'];
				$data['gender'] = $_POST['gender'];
				$data['year_birth'] = $_POST['year_birth'];
				$data['member_id'] = 0;
				$data['created'] = $this->my_time()->time_now();
				$data['active'] = 1;
				
				if($this->query_insert('data_mail', $data)){
					$this->redirect_script(ADMIN . "user/mails");
				}
			}
		}
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# Sua 1 user
	function mail_edit(){
		global $conf_user_role;
	$this->general_admin();
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	if($id == 0){
	$id = $_SESSION[LOGIN_ADMIN];
	}
	
	$user = $this->find_by_id("user", $id);
	$smarty->assign("user", $user);
	
	if($_SESSION[LOGIN_ADMIN_ROLE] < $user['role']){
	$this->alert('Ban khong co quyen sua user nay');
	$this->redirect_back();
	}
	
	$roles = $this->get_select_from_array($conf_user_role, $user['role']);
		$smarty->assign('roles', $roles);
	
			if(isset($_POST["FrmSubmit"])){
	
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
	$data['phone'] = $_POST['phone'];
	$data['address'] = $_POST['address'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['yahoo'] = $_POST['yahoo'];
			$data['skype'] = $_POST['skype'];
			$data['role'] = $_POST['role'];
			if($_SESSION[LOGIN_ADMIN_ROLE] < $_POST['role']){
				$data['role'] = $_SESSION[LOGIN_ADMIN_ROLE];
	}
	$data['position'] = $_POST['position'];
	$data['order_by'] = $_POST['order_by'];
	$where = "id='$id'";
	
			if($this->query_update('user', $data, $where)){
				$this->redirect_script("?mod=user&site=index");
	}
	}
	
		$smarty->display(DEFAULT_LAYOUT);
	
	}
	
	
}