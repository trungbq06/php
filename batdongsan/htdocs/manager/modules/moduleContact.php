<?php

class Contact extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty;
		$type = isset($_GET['id']) ? $_GET['id'] : 1;
		$type = $type == NULL || $type == "" ? 1 : $type;
		
		$list = array();  
		$query = $this->query("SELECT * FROM contact ORDER BY id DESC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["future"] = $item["future"] == 1 ? "X" : "";
			$list[] = $item;
		}
		$smarty->assign('list', $list);

		$this->handle_check('contact');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# chinh sua
	function edit(){
		global $conf_position;
		$this->general_admin();
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0 || $id == NULL || $id == ""){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("video", $id);
		$smarty->assign("value", $value);
		
		$type = $this->my_str()->str_get_option($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
			
			$data['name'] = trim($_POST["name"]);
			$data['link'] = $_POST['link'];
			$data['position'] = $_POST['position'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['updated'] = $this->my_time()->time_now();
			$data['active'] = 1;
			$data['description'] = $_POST['description'];
			$data['order_by'] = $_POST['order_by'];
			$link = $_POST["link"];
			$arr_link = explode('watch?v=', $link);
			$data['code'] = $arr_link[1];
			
			$where = "id=$id";
			
			if($this->query_update('video', $data, $where)){
				$this->redirect_script(ADMIN . "video");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		global $conf_position;
		$this->general_admin();

		$type = $this->my_str()->str_get_option($conf_position);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
			$data['name'] = trim($_POST["name"]);
			$data['link'] = $_POST['link'];
			$data['position'] = $_POST['position'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['created'] = $this->my_time()->time_now();
			$data['updated'] = $this->my_time()->time_now();
			$data['active'] = 1;
			$data['description'] = $_POST['description'];
			$data['order_by'] = $_POST['order_by'];
			$link = $_POST["link"];
			$arr_link = explode('watch?v=', $link);
			$data['code'] = $arr_link[1];
					
			if($this->query_insert('video', $data)){
				$this->redirect_script(ADMIN . "video");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function view(){
		$this->general_admin();
		global $smarty;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
	
		$value = $this->find_by_id("contact", $id);
		$smarty->assign("value", $value);
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
}