<?php

class Question extends Generals{
	
	function index(){
		global $conf_position;
		$this->general_admin();
		$list = array();  

		$query = $this->query("SELECT * FROM question ORDER BY order_by ASC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$list[] = $item;
		}
		$this->smarty()->assign('list', $list);

		$this->handle_check('question');
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	# chinh sua
	function edit(){
		$this->general_admin();
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0 || $id == NULL || $id == ""){
			$this->my_hand()->redirect_back();
		}
		
		$value = $this->find_by_id("question", $id);
		$this->smarty()->assign("value", $value);
		
		if(isset($_POST["FrmSubmit"])){
			
			$data['title'] = trim($_POST["title"]);
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = 1;
			$data['answer'] = stripslashes($_POST['answer']);
			$data['order_by'] = $_POST['order_by'];
			$where = "id=$id";
			
			if($this->query_update('question', $data, $where)){
				$this->my_hand()->redirect_script(ADMIN . "question");
			}
		}
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		$this->general_admin();

		if(isset($_POST["FrmSubmit"])){
			$data['title'] = trim($_POST["title"]);
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = 1;
			$data['answer'] = stripslashes($_POST['answer']);
			$data['order_by'] = $_POST['order_by'];
								
			if($this->query_insert('question', $data)){
				$this->my_hand()->redirect_script(ADMIN . "question");
			}
		}
		
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
}