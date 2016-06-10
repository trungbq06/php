<?php

class Member extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty;
		$list = array();  
		$query = $this->query("SELECT * FROM tbl_member ORDER BY id DESC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item['gender'] = $item['gender'] == 1 ? "Nữ" : "Nam";
			$list[] = $item;
		}
		$smarty->assign('list', $list);

		$this->handle_check('tbl_member');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
}