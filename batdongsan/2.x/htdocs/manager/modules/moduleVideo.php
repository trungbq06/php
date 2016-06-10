<?php

class Video extends Generals{
	
	function index(){
		global $conf_position, $smarty;
		$this->general_admin();
		$list = array();  

		$query = $this->query("SELECT * FROM tbl_video ORDER BY id DESC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$item['img'] = "http://i.ytimg.com/vi/" . $item['code'] . "/mqdefault.jpg";
			$item['position'] = $conf_position[$item["position"]];
			$list[] = $item;
		}
		$smarty->assign('list', $list);

		$this->handle_check('tbl_video');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function view(){
		global $conf_position, $smarty;
		$this->general_admin();
		$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("tbl_video", $id);
		$value['embed'] = "http://www.youtube.com/embed/" . $value['code'];
		$smarty->assign("value", $value);
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	# chinh sua
	function edit(){
		global $conf_position, $smarty;
		$this->general_admin();
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0 || $id == NULL || $id == ""){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("tbl_video", $id);
		$smarty->assign("value", $value);
		
		$type = $this->get_select_from_array($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
			
			$data['name'] = trim($_POST["name"]);
			$data['link'] = $_POST['link'];
			$data['position'] = $_POST['position'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = 1;
			#$data['description'] = $_POST['description'];
			$data['order_by'] = $_POST['order_by'];
			$link = $_POST["link"];
			$arr_link = explode('watch?v=', $link);
			$data['code'] = $arr_link[1];
			
			$where = "id=$id";
			
			if($this->query_update('tbl_video', $data, $where)){
				$this->redirect_script(ADMIN . "video");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		global $conf_position, $smarty;
		$this->general_admin();

		$type = $this->get_select_from_array($conf_position);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
			$data['name'] = trim($_POST["name"]);
			$data['link'] = $_POST['link'];
			$data['position'] = $_POST['position'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = 1;
			#$data['description'] = $_POST['description'];
			$data['order_by'] = $_POST['order_by'];
			$link = $_POST["link"];
			$arr_link = explode('watch?v=', $link);
			$data['code'] = $arr_link[1];
					
			if($this->query_insert('tbl_video', $data)){
				$this->redirect_script(ADMIN . "video");
			}
		}
		
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
}