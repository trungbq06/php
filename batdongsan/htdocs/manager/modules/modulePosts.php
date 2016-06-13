<?php

class Posts extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$list = array();
		$sql = "SELECT a.*, cate.name AS category FROM tbl_posts AS a
				LEFT JOIN product_category_lang AS cate ON cate.field_id=a.category_detail
				WHERE cate.lang=$lang
				";
		if($id != 0){
			$sql .= " AND a.category_detail=$id";
		}
		$sql .= " ORDER BY id DESC";
		
		$query = $this->query($sql);
		while ($value = $this->fetch_array($query)){
			$dir = MEMBER_UPLOAD . $value['member_id'] . "/posts/" . $value['id'] . "/";
			$value["created"] = gmdate("d/m/Y", strtotime($value["created"])+7*3600);
			$value["future"] = $value["future"]==1 ? "icon-ok" : "icon-remove";
			$value['img'] = $this->get_image($dir, $value['image'], 2);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$parent = $this->get_parent_id('tbl_posts_category', $value['category_id']);
			$list[] = $value;
		}
		
		$smarty->assign("manager", $list);
		$this->handle_check('tbl_posts');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function view(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$sql = "SELECT a.*, cate.name AS category FROM tbl_posts AS a
				LEFT JOIN product_category_lang AS cate ON cate.field_id=a.category_detail
				WHERE cate.lang=$lang AND a.id=$id
				";
		$result = $this->find_one($sql);
		$smarty->assign("value", $result);

		$dir = MEMBER_UPLOAD . $result['member_id'] . "/posts/" . $result['id'] . "/";
		$images = $this->get_image($dir, NULL, 1);
		$smarty->assign("images", $images);
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
}