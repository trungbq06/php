<?php

class Other extends Generals{
	
	function local(){
		$this->general_admin();
		global $smarty;
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		
		$result = array();
		$query = $this->query("SELECT a.*,count(c.id) AS number FROM tbl_local AS a
				LEFT JOIN tbl_local AS c ON a.id=c.parent_id
				WHERE a.parent_id=$id
				GROUP BY a.id
				ORDER BY a.id ASC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$result[] = $item;
		}
		$smarty->assign('result', $result);
		$this->handle_check('tbl_local');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		$this->general_admin();
		global $smarty;
		
		$session = isset($_SESSION['add_local_session']) ? $_SESSION['add_local_session'] : array(
				'province' => 0,
				'district' => 0,
				'ward' => 0
		);
		$select['province'] = $this->get_select_from_table("tbl_local", 0, $session['province']);
		$select['district'] = $this->get_select_from_table("tbl_local", 0, $session['district'], $session['province']);
		$select['ward'] = $this->get_select_from_table("tbl_local", 0, $session['ward'], $session['district']);
		$smarty->assign("select", $select);
		$parent = $this->get_select_from_table("tbl_local");
		$smarty->assign("parent", $parent);
		
		if(isset($_POST['FrmSubmit'])){
			
			$province = $_POST['province'];
			$district = $_POST['district'];
			$ward = $_POST['ward'];
			
			$_SESSION["add_local_session"] = array(
					'province' => $province,
					'district' => $district,
					'ward' => $ward
			);
			
			$data['parent_id'] = 0;
			if($province != 0 && $district != 0 && $ward != 0){
				$data['parent_id'] = $ward;
			}
			elseif ($province != 0 && $district != 0 && $ward == 0){
				$data['parent_id'] = $district;
			}
			elseif ($province != 0 && $district == 0 && $ward == 0){
				$data['parent_id'] = $province;
			}
			
			$data['map_ip'] = $_POST['map_ip'];
			$data['name'] = $_POST['name'];
			$data['link'] = $_POST['link'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['order_by'] = $_POST['order_by'];
			$data['active'] = 1;
			if($id = $this->query_insert("tbl_local", $data)){
				$this->redirect_script(ADMIN . "other?id=" . $data['parent_id']);
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}

	
	
	function edit(){
		$this->general_admin();
		global $smarty;
	
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$value = $this->find_one("SELECT id,name,link,parent_id,map_ip,order_by  FROM tbl_local WHERE id=$id");
		if(!$value){
			$this->alert("Không tồn tại !");
			$this->redirect_back();
			exit();
		}
		
		$parent = $this->get_select_from_table("tbl_local", 1, $value['parent_id'], 0, $id);
		$smarty->assign("parent", $parent);
	
		if(isset($_POST['FrmSubmit'])){
			$data['map_ip'] = $_POST['map_ip'];
			$data['name'] = $_POST['name'];
			$data['link'] = $_POST['link'];
			$data['parent_id'] = $_POST['parent'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['order_by'] = $_POST['order_by'];
			$data['active'] = 1;
			
			if($id = $this->query_update("tbl_local", $data, "id=$id")){
				$this->redirect_script(ADMIN . "other?id=" . $value['parent_id']);
			}
		}
	
		$smarty->assign("value", $value);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
}