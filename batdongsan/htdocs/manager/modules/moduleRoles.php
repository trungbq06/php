<?php

class Roles extends Generals{
	
	function index(){
		global $conf_user_role, $smarty;
		$this->general_admin();

		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = $id == "" || $id == NULL ? 0 : $id;
		
		$list = array();
		$query = $this->query("SELECT * FROM conf_role WHERE parent_id=$id ORDER BY order_by ASC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["role"] = $conf_user_role[$item['role']];
			//$item['name'] = $this->get_name_with_parent('conf_role', $item['id']);
			$list[] = $item;
		}
		$smarty->assign('list', $list);
		
		
		$this->handle_check('conf_role');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	# chinh sua
	function edit(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("conf_role", $id);
		$smarty->assign("value", $value);
		
		$role = $this->get_select_from_array($conf_user_role, $value['role']);
		$smarty->assign("role", $role);
		
		$parent = $this->get_select_from_table('conf_role', 1, $value['parent_id']);
		$smarty->assign("parent", $parent);
		
		if(isset($_POST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$data['alias'] = $_POST['alias'];
			$data['url'] = $_POST['url'];
			$data['role'] = $_POST['role'];
			$data['parent_id'] = $_POST['parent'];
			$data['icon'] = $_POST['icon'];
			$data['order_by'] = $_POST['order_by'];
			$where = "id=$id";
			if($this->query_update('conf_role', $data, $where)){
				$this->redirect_script("?mod=helps&site=admin_htaccess");
			}
			else{
				$this->alert('Xay ra loi');
				$this->redirect_back();
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		global $conf_user_role, $smarty;
		$this->general_admin();
		
		$role = $this->get_select_from_array($conf_user_role, 4);
		$smarty->assign("role", $role);
		
		$parent = $this->get_select_from_table("conf_role");
		$smarty->assign("parent", $parent);
		
		if(isset($_POST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$data['alias'] = $_POST['alias'];
			$data['url'] = $_POST['url'];
			$data['role'] = $_POST['role'];
			$data['parent_id'] = $_POST['parent'];
			$data['icon'] = $_POST['icon'];
			$data['order_by'] = $_POST['order_by'];
			$data['active'] = 1;
		
			if($this->query_insert('conf_role', $data)){
				$this->redirect_script("?mod=helps&site=admin_htaccess");
			}
			else{
				$this->alert('Xay ra loi');
				$this->redirect_back();
			}
		
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
}