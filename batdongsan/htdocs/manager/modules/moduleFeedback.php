<?php

class Feedback extends Generals{
	
	function index(){
		$this->general_admin();
		$lang = $_SESSION['admin_language'];
		$list = array();
		$query = $this->query("SELECT * FROM tbl_feedback ORDER BY id DESC");
		while ($value = $this->fetch_array($query)){
			$value["created"] = gmdate("d/m/Y", strtotime($value["created"])+7*3600);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$list[] = $value;
		}
		$this->smarty()->assign("manager", $list);
		$this->handle_check('tbl_feedback');
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	function add(){
		$this->general_admin();
		global $lang;
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$img = $_FILES["img"];
			$type = end(explode("/", $img["type"]));
			$data['name'] = $_POST["name"];
			$data['active'] = "1";
			//$data['lang'] = $lang;
			$data['created'] = "now()";
	
			if($id = $this->query_insert('tbl_feedback', $data)){
				$this->my_hand()->redirect_script(ADMIN . "feedback");
			}
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();

		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0){
			$this->my_hand()->redirect_script(ADMIN . "feedback");
		}
		$detail = $this->find_one("SELECT * FROM tbl_feedback WHERE id='$id'");
		$this->smarty()->assign("detail", $detail);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['name'] = $_POST["name"];
			$data['created'] = "now()";
			$where = "id='$id'";
			if($this->query_update('tbl_feedback', $data, $where)){
				$this->my_hand()->redirect_script(ADMIN . "feedback");
			}
			else {
				$this->my_hand()->alert("Error ! can't insert to database.");
				$this->my_hand()->redirect_back();
			}
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function items(){
		$this->general_admin();
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id == NULL || $id == "" ? 0 : $id;
		if($id==0){
			$this->my_hand()->redirect_back();
			exit();
		}
		
		$list = array();
		$query = $this->query("SELECT * FROM tbl_feedback_item WHERE feedback_id=$id ORDER BY order_by ASC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$list[] = $item;
		}
		
		$this->smarty()->assign('list', $list);
		$this->handle_check('tbl_feedback_item');
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function item_add(){
		$this->general_admin();
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id == NULL || $id == "" ? 0 : $id;
		if($id==0){
			$this->my_hand()->redirect_back();
			exit();
		}
		
		if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] != ''){
			$data["name"] = $_POST["name"];
			$data["order_by"] = $_POST["order_by"];
			$data["active"] = 1;
			$data["feedback_id"] = $id;
			if($this->query_insert("tbl_feedback_item", $data)){
				$this->my_hand()->redirect_script(ADMIN . "feedback/items?id=" . $id);
			}
		}
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	

	function item_edit(){
		$this->general_admin();

		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id == NULL || $id == "" ? 0 : $id;
		if($id==0){
			$this->my_hand()->redirect_back();
			exit();
		}
				
		$value = $this->find_by_id("tbl_feedback_item", $id);
		$this->smarty()->assign("value", $value);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$data["name"] = $_POST["name"];
			$data["order_by"] = $_POST["order_by"];
			$where = "id='$id'";
			if($this->query_update("tbl_feedback_item", $data, $where)){
				$this->my_hand()->redirect_script(ADMIN . "feedback/items?id=" . $value['feedback_id']);
			}
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
}