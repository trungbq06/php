<?php

class Config extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty;
		$lang = $_SESSION['admin_language'];

		$value = $this->find_one("SELECT * FROM conf_info WHERE active=1 AND lang=$lang ORDER BY future DESC, id DESC LIMIT 0,1");
		if(!$value){
			$this->query('INSERT conf_info (future, active, lang) VALUES(1,1,'.$lang.')');
		}
		$smarty->assign("value", $value);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function info(){
		$this->general_admin();
		global $smarty, $lang;
		
		$value = $this->find_one("SELECT * from conf_info WHERE active=1 AND lang=$lang ORDER BY future DESC, id DESC LIMIT 1");
		$id=$value['id'];
		$smarty->assign("value", $value);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$data['web_title'] = $_POST['web_title'];
			$data['web_keyword'] = strip_tags($_POST['web_keyword']);
			$data['web_description'] = strip_tags($_POST['web_description']);
			
			$data['phone'] = strip_tags($_POST['phone']);
			$data['description'] = stripslashes($_POST['description']);
			$data['contact'] = stripslashes($_POST['contact']);
			$data['map1'] = stripslashes($_POST['map1']);
			$data['map2'] = stripslashes($_POST['map2']);
			$data['facebook'] = stripslashes($_POST['facebook']);
			$where = "id='$id'";
			if($this->query_update('conf_info', $data, $where)){
				$this->redirect_script(ADMIN . "config");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function conf_mail(){
		$this->general_admin();
		global $smarty;
		$value = $this->find_one("SELECT * FROM conf_mail WHERE active=1 ORDER BY id DESC LIMIT 1");
		$smarty->assign("value", $value);
	
		if($value == NULL){
			$data["mail_from"] = "info@domain";
			$data["mail_from_pass"] = "password";
			$data["mail_to"] = "info@domain";
			$data["smtp_secure"] = "ssl";
			$data["host"] = "smtp.gmail.com";
			$data["port"] = 465;
			$data["active"] = 1;
			$this->query_insert("conf_mail", $data);
		}
	
		if(isset($_POST["FrmSubmit"])){
			$mail["mail_from"] = $_POST["mail_from"];
			$mail["mail_from_pass"] = $_POST["mail_from_pass"];
			$mail["mail_to"] = $_POST["mail_to"];
			$mail["smtp_secure"] = $_POST["smtp_secure"];
			$mail["host"] = $_POST["host"];
			$mail["port"] = $_POST["port"];
			if($this->query_update("conf_mail", $mail, "id=".$value["id"])){
				$this->alert("successfull !");
				$this->redirect_back();
				$smarty->display(DEFAULT_LAYOUT);
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function map(){
		$this->general_admin();
		global $smarty;
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	/*
	 * Phan quan ly support
	 * Gom co muc quan ly, them, sua support
	 */
	function support(){
		$this->general_admin();
		global $smarty, $lang;
		$list = array();
		$list_query = $this->query("SELECT * FROM conf_support WHERE lang=$lang ORDER BY order_by ASC");
		while ($item = $this->fetch_array($list_query)){
			$item['future'] = $item["future"]==1 ? "X" : "";
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$list[] = $item;
		}
		$smarty->assign('list', $list);
		
		# Ham xu ly check all
		$this->handle_check('conf_support');
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function support_add(){
		$this->general_admin();
		global $smarty, $lang;
		if(isset($_REQUEST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['phone'] = $_POST['phone'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['yahoo'] = $_POST['yahoo'];
			$data['skype'] = $_POST['skype'];
			$data['position'] = $_POST['position'];
			$data['order_by'] = $_POST['order_by'];
			$data['lang'] = $lang;
			$data['active'] = 1;

			if($this->query_insert('conf_support', $data)){
				$this->redirect_script(ADMIN . "config/support");
			}
			else {
				$this->alert('error !');
				$this->redirect_back();
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# Sua 1 user
	function support_edit(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		
		$user = $this->find_by_id("conf_support", $id);
		$smarty->assign("user", $user);
		
		
		if(isset($_POST["FrmSubmit"])){
		
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['phone'] = $_POST['phone'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['yahoo'] = $_POST['yahoo'];
			$data['skype'] = $_POST['skype'];
			$data['position'] = $_POST['position'];
			$data['order_by'] = $_POST['order_by'];
			$where = "id='$id'";
	
			if($this->query_update('conf_support', $data, $where)){
				$this->redirect_script(ADMIN . "config/support");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
}