<?php

class Project extends Generals{
	
	function index(){
		$this->general_admin();
		$lang = $_SESSION['admin_language'];
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		$list = array();
		$sql = "SELECT * FROM tbl_project WHERE lang IN (0,$lang) ";
		if($id != 0){
			$sql .= "AND category_id=$id";
		}
		$sql .= " ORDER BY id DESC";
		$query = $this->query($sql);
		while ($value = $this->fetch_array($query)){
			$value["created"] = gmdate("d/m/Y", strtotime($value["created"])+7*3600);
			$value["description"] = strip_tags($value["description"]);
			$value["future"] = $value["future"]==1 ? "icon-ok" : "icon-remove";
			$value['img'] = $this->get_image(PROJECT_UPLOAD, $value['image']);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value['category'] = $this->get_field_lang('tbl_project_category', $value['category_id']);
			$list[] = $value;
		}
		$this->smarty()->assign("manager", $list);
		$this->handle_check('tbl_project');
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	function add(){
		$this->general_admin();
		global $lang;
		
		$option['category'] = $this->get_option_tree("tbl_project_category", 0, 0, "name", 1);
		$option['province'] = $this->get_option('local_province');
		$this->smarty()->assign("option", $option);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$img = $_FILES["img"];
			$type = end(explode("/", $img["type"]));
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
			$data['order_by'] = $_POST["order_by"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = "1";
			$data['lang'] = $lang;
			$data['created'] = "now()";

			$data['type'] = $_POST["type"];
			$data['address'] = $_POST["address"];
			$data['size'] = $_POST["size"];
			$data['floor'] = $_POST["floor"];
			$data['started'] = $_POST["started"];
			$data['finished'] = $_POST["finished"];
			$data['status'] = $_POST["status"];
			$data['proj_boss'] = $_POST["proj_boss"];
			$data['proj_manager'] = $_POST["proj_manager"];
			$data['proj_working'] = $_POST["proj_working"];
			$data['proj_design'] = $_POST["proj_design"];
				
			if($id = $this->query_insert('tbl_project', $data)){
				if ($img['tmp_name'] != "" && $this->my_hand()->check_img($img)){
					$dir = "../" . PROJECT_UPLOAD;// lưu ảnh đại diện
					if (!is_dir($dir)) {
						mkdir($dir, 0777);
						chmod($dir, 0777);
					}
					$type = end(explode(".", $img["name"]));
					$image = $id . "-" . date('Y-m-d-His') . "." . $type;
						
					move_uploaded_file($img['tmp_name'], $dir . $image);
					$this->my_hand()->resizeImage($dir . $image);
					$this->query("UPDATE tbl_project SET image='$image' WHERE id='$id'");
					$this->my_hand()->redirect_script(ADMIN . "project");
				}
				else {
					$this->my_hand()->redirect_script(ADMIN . "project");
				}
			}
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();
		global $conf_product_level, $conf_product_warranty;
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0){
			$this->my_hand()->redirect_back();
		}
		$detail = $this->find_one("SELECT * FROM tbl_project WHERE id='$id'");
		$detail['img'] = DOMAIN . PROJECT_UPLOAD . $detail['image'];
		$this->smarty()->assign("detail", $detail);
		
		$option['category'] = $this->get_option_tree("tbl_project_category", $detail['category_id'], 0, "name", 1);
		$this->smarty()->assign("option", $option);
		
		$category = $this->get_select_tree("tbl_project_category", $detail["category_id"]);
		$this->smarty()->assign("category", $category);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
			$data['order_by'] = $_POST["order_by"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			
			$data['type'] = $_POST["type"];
			$data['address'] = $_POST["address"];
			$data['size'] = $_POST["size"];
			$data['floor'] = $_POST["floor"];
			$data['started'] = $_POST["started"];
			$data['finished'] = $_POST["finished"];
			$data['status'] = $_POST["status"];
			$data['proj_boss'] = $_POST["proj_boss"];
			$data['proj_manager'] = $_POST["proj_manager"];
			$data['proj_working'] = $_POST["proj_working"];
			$data['proj_design'] = $_POST["proj_design"];
				
			$img = $_FILES["img"];
			
			$where = "id='$id'";
				
			if($this->query_update('tbl_project', $data, $where)){
				if ($img['tmp_name'] != "" && $this->my_hand()->check_img($img)){
					$dir = "../" . PROJECT_UPLOAD;// lưu ảnh đại diện
					if (!is_dir($dir)) {
						mkdir($dir, 0777);
						chmod($dir, 0777);
					}
					$type = end(explode(".", $img["name"]));
					$image = $id . "-" . date('Y-m-d-His') . "." . $type;
		
					move_uploaded_file($img['tmp_name'], $dir . $image);
					$this->my_hand()->resizeImage($dir . $image);
					$this->query("UPDATE tbl_project SET image='$image' WHERE id='$id'");
					if($detail['image'] != NULL && $detail['image'] != ""){
						$this->my_hand()->hand_delete($dir . $detail['image']);
					}
					$this->my_hand()->redirect_script(ADMIN . "project");
				}
				else {
					$this->my_hand()->redirect_script(ADMIN . "project");
				}
			}
			else {
				echo 'error';
			}
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	# Quan ly anh san pham (upload tu dong)
	function images(){
		$this->general_admin();
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = $id == NULL || $id == "" ? 0 : $id;
		if($id == 0){
			$this->my_hand()->redirect_back();
		}
		else{
			$dir = "../" . PROJECT_IMAGE_UPLOAD . $id . "/";
			if (!is_dir($dir)) {
				mkdir($dir, 0777);
				chmod($dir, 0777);
			}
				
			if(isset($_FILES['image'])){
				$img = $_FILES['image'];
				if($this->my_hand()->check_img($img)){
					$type = end(explode(".", $img["name"]));
					$image = date('Y-m-d-His') . "." . $type;
					move_uploaded_file($img['tmp_name'], $dir . $image);
					$this->my_hand()->resizeImage($dir . $image, 500);
				}
				else{
					$this->my_hand()->alert('Error !');
				}
			}
			
			
			$files = scandir($dir);
			$list = array();
			foreach ($files as $k=>$item){
				$strlen = strlen($item);
				if($strlen > 10){
					$img = $dir . $item;
					$list[$k]['name'] = $item;
					$list[$k]['img'] = $dir . $item;
					$get_img = getimagesize($img);
					$list[$k]['size'] = $get_img[0] . "x" . $get_img[1] . " (pixel)";
					$list[$k]['type'] = $get_img['mime'];
				}
			}
			$this->smarty()->assign('list', $list);
				
				
		}
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	# Xoa anh
	function delete_upload(){
		if(isset($_POST['img'])){
			$img = $_POST['img'];
			if(strlen($img) < 10){
				return false;
			}
			elseif(!is_file($img)){
				return false;
			}
			else{
				@unlink($img);
			}
		}
	}
	
	
	/* Quan ly danh muc san pham */
	function cat(){
		$this->general_admin();
		global $conf_position, $lang;

		$list = $this->get_field_tree_lang('tbl_project_category');
		foreach ($list as $k=>$item){
			$list[$k]["position"] = $item["position"] == 0 ? "&nbsp" : $this->my_str()->str_get_field($conf_position, $item["position"]);
		}
		$this->smarty()->assign('list', $list);
		
		$this->handle_check('tbl_project_category');
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	

	function cat_add(){
		$this->general_admin();
		global $conf_position, $lang;
		
		$parent = $this->get_option_tree("tbl_project_category", 0, 0, "name", 1);
		$this->smarty()->assign("parent", $parent);
		
		$type = $this->my_str()->str_get_option($conf_position);
		$this->smarty()->assign("type", $type);
		
		if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] != ''){
			$data["description"] = $_POST["description"];
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["position"] = $_POST["type"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data["active"] = 1;
			$data['lang'] = $lang;
		
			if($id = $this->query_insert("tbl_project_category", $data)){
				# Luu lai theo ngon ngu
				$data_lang['name'] = $_POST['name'];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$this->query_insert('tbl_project_category_lang', $data_lang);
								
				$this->my_hand()->redirect_script(ADMIN . "project/cat");
			}
			else{
				$this->my_hand()->alert("Error !");
				$this->my_hand()->redirect_back();
			}
		}
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	

	function cat_edit(){
		$this->general_admin();
		global $conf_position, $lang;

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->my_hand()->redirect_back();
			exit();
		}
		
		$value = $this->find_by_id("tbl_project_category", $id);
		$value["name"] = $this->get_field_lang("tbl_project_category", $value['id'], "name");
		$this->smarty()->assign("value", $value);
		
		//$parent = $this->get_select_tree("product_category", $value["parent_id"], $id);
		$parent = $this->get_option_tree("tbl_project_category", $value["parent_id"], 0, "name", 1);
		$this->smarty()->assign("parent", $parent);
		
		$type = $this->my_str()->str_get_option($conf_position, $value["position"]);
		$this->smarty()->assign("type", $type);
		
		if(isset($_REQUEST["FrmSubmit"])){
			$data["description"] = $_POST["description"];
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["position"] = $_POST["position"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$where = "id='$id'";
			if($this->query_update("tbl_project_category", $data, $where)){
				$data_lang['name'] = $_POST['name'];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$check = $this->check_field("SELECT id FROM tbl_project_category_lang WHERE field_id=$id AND lang=$lang");
				if(!$check){
					$this->query_insert('tbl_project_category_lang', $data_lang);
				}
				else {
					$this->query_update('tbl_project_category_lang', $data_lang, "id=$check");
				}
				$this->my_hand()->redirect_script(ADMIN . "project/cat");
			}
			else {
				$this->my_hand()->alert('Error !');
				$this->my_hand()->redirect_back();
			}
		}
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	
	/* Don dat hang san pham */
	function invoice(){
		$this->general_admin();
	
		$list = array();
		$query = $this->query("SELECT * FROM product_invoice ORDER BY active ASC, id DESC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item['future'] = $item['future'] == 1 ? "X" : "";
			$list[] = $item;
		}
		$this->smarty()->assign('list', $list);
		
		$this->handle_check('product_invoice');
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	function invoice_item(){
		$this->general_admin();
	
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->my_hand()->redirect_back();
			exit();
		}
	
		$list = array();
		$query = $this->query("SELECT * FROM product_invoice_item WHERE invoice_id=$id ORDER BY id DESC");
		while ($item = $this->fetch_array($query)){
			$product = $this->find_one("SELECT id, name, image FROM product WHERE id=" .$item['product_id'] . " LIMIT 1");
			$item['img'] = DOMAIN . PRODUCT_UPLOAD . $product['id'] . "/" . $product['image'];
			$item['name'] = $product['name'];
			$item['price_sale'] = $item['price'] * (100 - $item['promotions']) * 0.01;
			$item['price_sale'] = number_format($item['price_sale']);
			$item['price'] = number_format($item['price']);
			$list[] = $item;
		}
		$this->smarty()->assign('list', $list);
	
		$this->smarty()->display(DEFAULT_LAYOUT);
	}
	
	
	
}