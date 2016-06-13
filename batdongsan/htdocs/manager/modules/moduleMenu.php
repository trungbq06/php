<?php

class Menu extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($id == 0 || $id == NULL || $id == ""){
			$this->redirect_back();
		}
		
		/* Tự động tạo field theo ngôn ngữ */
		$auto_query = $this->query("SELECT id FROM menu");
		while ($item = $this->fetch_array($auto_query)){
			$check = $this->find_one("SELECT id FROM menu_lang WHERE lang=$lang AND field_id=" . $item['id']);
			if(!$check){
				$this->query("INSERT INTO menu_lang (field_id, lang) VALUES (".$item['id'].", $lang)");
			}
		}
		
		$result = $this->get_field_tree_lang('menu', 0, "category_id=$id");
		foreach ($result as $k=>$item){
			$result[$k]['img'] = $this->get_image(MENU_UPLOAD, $item['image']);
		}
		$smarty->assign("manager", $result);
		$smarty->assign('category', $this->get_field_by_id('menu_category', $id));

		$this->handle_check('menu');
		$smarty->display(DEFAULT_LAYOUT);
	}

	
	function add(){
		$this->general_admin();
		global $conf_menu_type, $conf_menu_type_module, $conf_language, $smarty, $lang;

		$smarty->assign("parent", $this->get_parent(0, 0, $lang));
		$smarty->assign("menu_cat", $this->get_select_from_table("menu_category", 0));
		
		$type = $this->get_select_from_array($conf_menu_type);
		$smarty->assign("type", $type);
		
		$select['article_cate'] = $this->get_select_from_table('article_category');
		$select['article'] = $this->get_select_article('article');
		$select['product_cate'] = $this->get_select_from_table('product_category');
		$smarty->assign("select", $select);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$url = $conf_menu_type_module[$_POST['module']];
			$choice = isset($_POST[$_POST['module']]) ? $_POST[$_POST['module']] : 0;
			if($choice != 0 || $choice != NULL || $choice != ""){
				$url .= "&id=" . $choice;
			}
			if($_POST['module']==4 || $_POST['module']==5){
				$url = $_POST['module']==5 ? $_POST['link'] : $_POST['url'];
			}
				
			$data['module'] = $_POST['module'];
			$data['module_choice'] = isset($_POST[$_POST['module']]) ? $_POST[$_POST['module']] : 0;
			
			$data['link'] = $url;
			$data['parent_id'] = $_POST['parent_id'];
			$data['category_id'] = $_POST['category_id'];
			$data['order_by'] = $_POST['order_by'];
			$data['future'] = isset($_REQUEST["future"]) ? $_REQUEST["future"] : 0;
			$data['active'] = 1;
			$data['alias'] = $_POST['alias'];
			$data['web_class'] = $_POST['web_class'];
			$data['lang'] = $_SESSION['admin_language'];
			$img = $_FILES['img'];
			
			if($id = $this->query_insert('menu', $data)){
				
				$data_lang['name'] = stripslashes($_POST['name']);
				$data_lang['description'] = stripslashes($_POST['description']);
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$this->query_insert('menu_lang', $data_lang);
				
				if($img['tmp_name'] != "" && $this->check_img($img)){
					$type = end(explode("/", $img["type"]));
					$dir = "../" . MENU_UPLOAD;// lưu ảnh đại diện
					if (!is_dir($dir)) {
						mkdir($dir, 0777);
						chmod($dir, 0777);
					}
					$image = $id . "-" . date('Y-m-d-His') . "." . $type;
					move_uploaded_file($img['tmp_name'], $dir . $image);
					$this->query("UPDATE menu SET image='$image' WHERE id='$id'");
					$this->redirect_script(ADMIN . "?mod=helps&site=home_htaccess&id=".$data["category_id"]);
				}
				else {
					$this->redirect_script(ADMIN . "?mod=helps&site=home_htaccess&id=".$data["category_id"]);
				}
			}
			else{
				$this->alert("Error! Can't save this field");
				$this->redirect_back();
			}
		}
				
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();
		global $conf_menu_type, $conf_menu_type_module, $smarty, $lang;
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$sql = "SELECT m.*, l.name,l.description,l.field_id FROM menu AS m
				LEFT JOIN menu_lang AS l ON m.id=l.field_id
				WHERE l.lang=$lang AND m.id=$id
				";
		$value = $this->find_one($sql);
		$smarty->assign("value", $value);
		$smarty->assign("parent", $this->get_parent($value['parent_id'], $value["id"], $lang));
		$type = $this->get_select_from_array($conf_menu_type, $value['module']);
		$smarty->assign("type", $type);
		
		$select['article_cate'] = $this->get_select_from_table('article_category');
		$select['article'] = $this->get_select_article('article');
		$select['product_cate'] = $this->get_select_from_table('product_category');
		
		if($value['module'] == 1){
			$select['article_cate'] = $this->get_select_from_table('article_category', 1, $value['module_choice']);
		}
		if($value['module'] == 2){
			$select['article'] = $this->get_select_article('article', $value['module_choice']);
		}
		if($value['module'] == 3){
			$select['product_cate'] = $this->get_select_from_table('product_category', 1, $value['module_choice']);
		}
		$smarty->assign("select", $select);
		
		
		if(isset($_REQUEST["FrmSubmit"])){
			$url = $conf_menu_type_module[$_POST['module']];
			$choice = isset($_POST[$_POST['module']]) ? $_POST[$_POST['module']] : 0;
			if($choice != 0 || $choice != NULL || $choice != ""){
				$url .= "&id=" . $choice;
			}
			if($_POST['module']==4 || $_POST['module']==5){
				$url = $_POST['module']==5 ? $_POST['link'] : $_POST['url'];
			}
				
			$data['module'] = $_POST['module'];
			$data['module_choice'] = isset($_POST[$_POST['module']]) ? $_POST[$_POST['module']] : 0;
			
			$data['link'] = $url;
			$data['parent_id'] = $_POST['parent_id'];
			$data['order_by'] = $_POST['order_by'];
			$data['future'] = isset($_REQUEST["future"]) ? $_REQUEST["future"] : 0;
			$data['alias'] = $_POST['alias'];
			$data['web_class'] = $_POST['web_class'];
			$where = "id='$id'";
			$img = $_FILES['img'];
			
			if($this->query_update('menu', $data, $where)){
				
				$data_lang['name'] = stripslashes($_POST['name']);
				$data_lang['description'] = stripslashes($_POST['description']);
				$this->query_update('menu_lang', $data_lang, "lang=$lang AND field_id=$id");
				
				if($img['tmp_name'] != "" && $this->check_img($img)){
					$type = end(explode("/", $img["type"]));
					$dir = "../" . MENU_UPLOAD;// lưu ảnh đại diện
					if (!is_dir($dir)) {
						mkdir($dir, 0777);
						chmod($dir, 0777);
					}
					$image = $id . "-" . date('Y-m-d-His') . "." . $type;
					move_uploaded_file($img['tmp_name'], $dir . $image);
					if($value['image'] != NULL && $value['image'] != ""){
						@unlink($dir . $value['image']);
					}
					$this->query("UPDATE menu SET image='$image' WHERE id='$id'");
					$this->redirect_script(ADMIN . "?mod=helps&site=home_htaccess&id=".$value["category_id"]);
				}
				else {
					$this->redirect_script(ADMIN . "?mod=helps&site=home_htaccess&id=".$value["category_id"]);
				}
			}
			else{
				$this->alert("Error! Can't save this field");
				$this->redirect_back();
			}
		}
						
		$smarty->display(DEFAULT_LAYOUT);
	}

	
	function cat(){
		$this->general_admin();
		global $conf_position, $smarty, $lang;
		$list = array();
		$query = $this->query("SELECT * FROM menu_category ORDER BY order_by ASC");
		while ($value = $this->fetch_array($query)){
			$value["description"] = strip_tags($value["description"]);
			$value["future"] = $value["future"] == 1 ? "X" : "";
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value['position'] = $conf_position[$value['position']];
			$list[] = $value;
		}
		$smarty->assign("manager", $list);
	
		$this->handle_check('menu_category');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	function cat_add(){
		$this->general_admin();
		global $conf_position, $smarty, $lang;
		if(isset($_REQUEST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$data['description'] = $_POST['description'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['position'] = $_POST['position'];
			$data['order_by'] = $_POST['order_by'];
			$data['active'] = 1;
			if($this->query_insert('menu_category', $data)){
				$this->redirect_script(ADMIN . "menu");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function cat_edit(){
		$this->general_admin();
		global $conf_position, $smarty;
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0 || $id == NULL || $id == ""){
			$this->redirect_back();
		}
		$value = $this->find_by_id("menu_category", $id);
		$smarty->assign("value", $value);
		$type = $this->get_select_from_array($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		if(isset($_REQUEST["FrmSubmit"])){
			$data['name'] = $_POST['name'];
			$data['description'] = $_POST['description'];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['position'] = $_POST['position'];
			$data['order_by'] = $_POST['order_by'];
			$where = "id=$id";
			if($this->query_update('menu_category', $data, $where)){
				$this->redirect_script(ADMIN . "menu");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	/** Get menu select tree for admin */
	public function get_menu_tree($active=0, $mine=0, $lang=1){
		$sql_menu = "SELECT * FROM menu_category WHERE active='1' ORDER BY future DESC";
		$menu = $this->find($sql_menu);
	
		$option = "";
		foreach ($menu as $key => $item){
			$option .= "<optgroup label='".$item["name"]."'>";
				
			$sql_item_par = "SELECT * FROM menu WHERE category_id='".$item["id"]."' AND active=1 AND parent_id=0";
			$item_par = $this->find($sql_item_par);
			foreach ($item_par as $key => $item){
				if($item["id"] == $active){
					$option .= "<option value='".$item["id"]."' selected> ".$item["name"]." </option>";
				}
				else{
					$option .= "<option value='".$item["id"]."'> ".$item["name"]." </option>";
				}
	
				$sql_sub = "SELECT * FROM menu WHERE active='1' AND parent_id='".$item["id"]."'";
				$sql_sub .= " AND id <> $mine";
					
				$sub = $this->find($sql_sub);
				foreach ($sub as $key => $item){
					if($item["id"] == $active){
						$option .= "<option value='".$item["id"]."' selected> ─ ".$item["name"]." </option>";
					}
					else{
						$option .= "<option value='".$item["id"]."'> ─ ".$item["name"]." </option>";
					}
				}
			}
			$option .= "</optgroup>";
		}
		return $option;
	}
	
	public function get_parent($active=0, $lang=1){
		$option = "";
		$query = $this->query("SELECT id,name FROM menu_category WHERE active='1' ORDER BY future DESC");
		while ($item = $this->fetch_array($query)){
			$option .= "<optgroup label='".$item["name"]."'>";
			$menu = $this->get_menu_position($active, $item['id']);
			$option .= $menu;
			$option .= "</optgroup>";
		}
		return $option;
	}
	
	function get_menu_position($active=0, $category, $parent=0, $tree=NULL){
		global $lang;
		$query = $this->query("
				SELECT m.id,l.name FROM menu AS m
				LEFT JOIN menu_lang AS l ON m.id=l.field_id
				WHERE m.category_id=$category AND m.active=1 AND parent_id=$parent AND l.lang=$lang
				");
		$option = "";
		while ($item = $this->fetch_array($query)){
			$item['name'] = $tree . " " . $item['name'];
			if($item['id']==$active){
				$option .= "<option value='".$item['id']."' selected>".$item['name']."</option>";
			}
			else {
				$option .= "<option value='".$item['id']."'>".$item['name']."</option>";
			}
			
			$check = $this->check_exist("SELECT id FROM menu WHERE parent_id=".$item['id']);
			if($check){
				$option .= $this->get_menu_position($active, $category, $item['id'], "─" . $tree);
			}
		}
		return $option;
	}
	
	
	
}