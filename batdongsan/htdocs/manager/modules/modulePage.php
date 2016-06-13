<?php

class Page extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		
		$list = array();
		$sql = "SELECT a.*,local.name AS local FROM tbl_page AS a
				LEFT JOIN tbl_local AS local ON a.local_id=local.id
				";
		
		if($id != 0){
			$sql .= "AND a.category_id=$id";
		}
		$sql .= " ORDER BY a.id DESC";
		$query = $this->query($sql);
		while ($value = $this->fetch_array($query)){
			$value["created"] = gmdate("d/m/Y", strtotime($value["created"])+7*3600);
			$value["future"] = $value["future"]==1 ? "icon-ok" : "icon-remove";
			$value['img'] = $this->get_image(ARTICLE_UPLOAD, $value['image']);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$list[] = $value;
		}
		$smarty->assign("manager", $list);
		$this->handle_check('tbl_page');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function add(){
		$this->general_admin();
		global $lang, $smarty;
		$category = $this->get_select_from_table("tbl_local", 0);
		$smarty->assign("category", $category);
		$message = "Please insert all content";
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['local_id'] = $_POST["local"];
			$data['name'] = $_POST["name"];
			$data['order_by'] = $_POST["order_by"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = "1";
			$data['created'] = "now()";
			$data['address'] = $_POST["address"];
			$data['hotline'] =  $_POST["hotline"];
			$data['map'] =  $_POST["map"];
				
			if($id = $this->query_insert('tbl_page', $data)){
				$this->redirect_script(ADMIN . "page");
			}
		}
		$smarty->assign("message", $message);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();
		global $lang, $smarty;
		$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
		if($id == 0){
			$this->redirect_script("page");
		}
		$query = $this->query("SELECT a.* FROM tbl_page AS a WHERE a.id=$id");
		$detail = $this->fetch_array($query);
		$smarty->assign("detail", $detail);
		
		$local = $this->get_select_from_table("tbl_local", 0, $detail["local_id"]);
		$smarty->assign("category", $local);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['local_id'] = $_POST["local"];
			$data['name'] = $_POST["name"];
			$data['order_by'] = $_POST["order_by"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = "1";
			$data['address'] = $_POST["address"];
			$data['hotline'] =  $_POST["hotline"];
			$data['map'] =  $_POST["map"];
			
			$where = "id='$id'";
			if($this->query_update('tbl_page', $data, $where)){
				$this->redirect_script(ADMIN . "page");
			}
			else {
				echo 'error';
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function view(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		
		$sql = "SELECT a.*, lg.name,lg.description,lg.content, cate.name AS category FROM article AS a
				LEFT JOIN article_lang AS lg ON a.id=lg.field_id
				LEFT JOIN article_category_lang AS cate ON a.category_id=cate.field_id
				WHERE lg.lang=$lang AND a.id=$id
				";
		$value = $this->find_one($sql);
		$value['img'] = $this->get_image(ARTICLE_UPLOAD, $value['image']);
		$smarty->assign("value", $value);
		
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function cat(){
		$this->general_admin();
		global $conf_position, $smarty;
		$list = $this->get_field_tree_lang('article_category', 0);
		foreach ($list as $k=>$item){
			$list[$k]['img'] = $this->get_image(ARTICLE_UPLOAD . "categories/", $item['image']);
			$list[$k]["type"] = $item["position"] == 0 ? "&nbsp" : $conf_position[$item["position"]];
		}
		
		$smarty->assign('list', $list);
		$this->handle_check('article_category');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function cat_add(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;
		$parent = $this->get_select_from_table("article_category");
		$smarty->assign("parent", $parent);
		
		$type = $this->get_select_from_array($conf_position);
		$smarty->assign("type", $type);
		
		if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] != ''){
			$data["description"] = $_POST["description"];
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["position"] = $_POST["type"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data["active"] = 1;
			$img = $_FILES["img"];
			if($id = $this->query_insert("article_category", $data)){
				# Luu ngon ngu
				$data_lang['name'] = $_POST['name'];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$this->query_insert('article_category_lang', $data_lang);
				
				$dir = "../" . ARTICLE_UPLOAD . "categories/";
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE article_category SET image='$upload' WHERE id='$id'");
				}
				$this->redirect_script(ADMIN . "article/cat");
				
			}
			else {
				$this->alert('Error !');
				$this->redirect_back();
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function cat_edit(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("article_category", $id);
		$value["name"] = $this->get_field_lang("article_category", $id, "name");
		$smarty->assign("value", $value);
		
		$parent = $this->get_select_from_table("article_category", 1, $value["parent_id"]);
		$smarty->assign("parent", $parent);
		
		$type = $this->get_select_from_array($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$data["description"] = $_POST["description"];
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["position"] = $_POST["type"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$img = $_FILES["img"];
			$where = "id='$id'";
			if($this->query_update("article_category", $data, $where)){
				
				# Luu ngon ngu
				$data_lang['name'] = $_POST['name'];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$check = $this->find_one("SELECT id FROM article_category_lang WHERE field_id=$id AND lang=$lang");
				if(!$check){
					$this->query_insert('article_category_lang', $data_lang);
				}
				else {
					$this->query_update('article_category_lang', $data_lang, "id=".$check['id']);
				}
				
				$dir = "../" . ARTICLE_UPLOAD . "categories/";
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE article_category SET image='$upload' WHERE id='$id'");
					@unlink($dir . $value['image']);
				}
				
				$this->redirect_script(ADMIN . "article/cat");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
}