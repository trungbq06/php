<?php

class Product extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		$list = array();
		$sql = "SELECT a.*, cate.name AS category FROM product AS a
				LEFT JOIN product_category_lang AS cate ON cate.field_id=a.category_id
				WHERE a.id=a.id
				";
		if($id != 0){
			$sql .= "AND a.category_id=$id";
		}
		$sql .= " ORDER BY a.id DESC";
		
		$query = $this->query($sql);
		while ($value = $this->fetch_array($query)){
			$value["created"] = gmdate("d/m/Y", strtotime($value["created"])+7*3600);
			$value["description"] = strip_tags($value["description"]);
			$value["future"] = $value["future"]==1 ? "icon-ok" : "icon-remove";
			$value['img'] = $this->get_image(PRODUCT_UPLOAD , $value['image']);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value['price'] = $value['price']==0 ? "Liên hệ" : number_format($value['price']) . " đ";
			$list[] = $value;
		}
		$smarty->assign("manager", $list);
		$this->handle_check('product');
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
	
		$dir = PRODUCT_UPLOAD;
		$images = $this->get_image($dir, NULL, 1);
		$smarty->assign("images", $images);
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function add(){
		$this->general_admin();
		global $conf_product_level, $conf_product_warranty, $lang, $smarty, $conf_product_type;
		
		$option['category'] = $this->get_select_from_table("product_category");
		$option['province'] = $this->get_select_from_table('local_province', 0, 0);
		$option['warranty'] = $this->get_select_from_array($conf_product_warranty);
		$option['type'] = $this->get_select_from_array($conf_product_type);
		$smarty->assign("option", $option);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$img = $_FILES["img"];
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category"];
			$data['price'] = $_POST["price"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
			$data['order_by'] = $_POST["order_by"];
			$data['warranty'] = $_POST["warranty"];
			$data['maker'] = $_POST["maker"];
			$data['type'] = $_POST["type"];
			$data['code'] = $_POST["code"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = 0;
			$data['view'] = 1;
			$data['lang'] = $lang;
			$data['promotions'] = $_POST["promotions"];
			$data['created'] = strtotime(date("Y/m/d H:i:s"));
			$data['updated'] = strtotime(date("Y/m/d H:i:s"));
	
			if($id = $this->query_insert('product', $data)){
				$dir = PRODUCT_UPLOAD;
				if($upload = $this->image_upload($img, "../" . $dir)){
					$this->query("UPDATE product SET image='$upload' WHERE id='$id'");
				}
				$this->redirect_script(ADMIN . "product");
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();
		global $conf_product_level, $conf_product_warranty, $smarty, $conf_product_type;
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		$dir = PRODUCT_UPLOAD;
		$detail = $this->find_one("SELECT * FROM product WHERE id='$id'");
		$detail['img'] = $this->get_image($dir, $detail['image']);
		$smarty->assign("detail", $detail);
		
		$option['category'] = $this->get_select_from_table("product_category", 1, $detail['category_id']);
		$option['province'] = $this->get_select_from_table('tbl_local', 0, $detail['province_id']);
		$option['warranty'] = $this->get_select_from_array($conf_product_warranty, $detail['warranty']);
		$option['type'] = $this->get_select_from_array($conf_product_type, $detail['type']);
		$smarty->assign("option", $option);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
			$data['price'] = $_POST["price"];
			$data['code'] = $_POST["code"];
			$data['type'] = $_POST["type"];
			$data['promotions'] = $_POST["promotions"];
			$data['order_by'] = $_POST["order_by"];
			$data['warranty'] = $_POST["warranty"];
			$data['maker'] = $_POST["maker"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['updated'] = strtotime(date("Y/m/d H:i:s"));
			$img = $_FILES["img"];
			$where = "id='$id'";
				
			if($this->query_update('product', $data, $where)){
				if($upload = $this->image_upload($img, "../" . $dir)){
					$this->query("UPDATE product SET image='$upload' WHERE id='$id'");
					@unlink("../" . $dir . $detail['image']);
				}
				$this->redirect_script(ADMIN . "product");
			}
			else {
				echo 'error';
			}
		}
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	# Quan ly anh san pham (upload tu dong)
	function images(){
		$this->general_admin();
		global $smarty;
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		if($id == 0){
			$this->redirect_back();
			exit();
		}
		else{
			$dir = PRODUCT_UPLOAD . $id . "/";
				
			if(isset($_FILES['image'])){
				$img = $_FILES['image'];
				$this->image_upload($img, "../" . $dir);
			}
			
			$result = $this->get_image($dir, NULL, 1);
			$smarty->assign('result', $result);
				
		}
		$smarty->display(DEFAULT_LAYOUT);
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
		global $conf_position, $lang, $smarty;

		$list = $this->get_field_tree_lang('product_category');
		foreach ($list as $k=>$item){
			$list[$k]["position"] = $item["position"] == 0 ? "&nbsp" : $conf_position[$item["position"]];
		}
		$smarty->assign('list', $list);
		
		$this->handle_check('product_category');
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function cat_add(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;
		$parent = $this->get_select_from_table("product_category", 1);
		$smarty->assign("parent", $parent);
		
		$type = $this->get_select_from_array($conf_position);
		$smarty->assign("type", $type);
		
		if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] != ''){
			
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["position"] = $_POST["type"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data["active"] = 1;
			$data['lang'] = $lang;
			$img = $_FILES["img"];
		
			if($id = $this->query_insert("product_category", $data)){
				
				# Luu lai theo ngon ngu
				$data_lang['name'] = $_POST['name'];
				$data_lang["description"] = $_POST["description"];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$this->query_insert('product_category_lang', $data_lang);
				
				$dir = "../" . PRODUCT_UPLOAD . "categories/";
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE product_category SET image='$upload' WHERE id='$id'");
				}
				$this->redirect_script(ADMIN . "product/cat");
				
			}
			else{
				$this->alert("Error !");
				$this->redirect_back();
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function cat_edit(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->redirect_back();
			exit();
		}
		
		$value = $this->find_one("SELECT a.*, lg.name,lg.description FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE lg.lang=$lang AND a.id=$id
				");
		
		$smarty->assign("value", $value);
		
		$parent = $this->get_select_from_table("product_category", 1, $value["parent_id"]);
		$smarty->assign("parent", $parent);
		
		$type = $this->get_select_from_array($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		
		if(isset($_REQUEST["FrmSubmit"])){
			
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["class"] = $_POST["class"];
			$data["position"] = $_POST["position"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$img = $_FILES["img"];
			$where = "id='$id'";
			if($this->query_update("product_category", $data, $where)){
				$data_lang['name'] = $_POST['name'];
				$data_lang["description"] = $_POST["description"];
				$data_lang['field_id'] = $id;
				$data_lang['lang'] = $lang;
				$check = $this->find_one("SELECT id FROM product_category_lang WHERE field_id=$id AND lang=$lang");
				if(!$check){
					$this->query_insert('product_category_lang', $data_lang);
				}
				else {
					$this->query_update('product_category_lang', $data_lang, "id=".$check['id']);
				}

				$dir = "../" . PRODUCT_UPLOAD . "categories/";
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE product_category SET image='$upload' WHERE id='$id'");
					@unlink($dir . $value['image']);
				}
				$this->redirect_script(ADMIN . "product/cat");
				
			}
			else {
				$this->alert('Error !');
				$this->redirect_back();
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	/* Quan ly danh muc san pham */
	function cat_type(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;
	
		$sql = "SELECT a.*, t.name AS category FROM product_category_type AS a
				LEFT JOIN product_category_lang AS t ON a.parent_id=t.field_id
				WHERE t.lang=$lang
				ORDER BY a.parent_id ASC, a.order_by ASC
				";
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$result[] = $item;
		}
		
		$smarty->assign('list', $result);
	
		$this->handle_check('product_category_type');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	

	function cat_type_add(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;
		$parent = $this->get_select_from_table("product_category", 0);
		$smarty->assign("parent", $parent);
	
		$type = $this->get_select_from_array($conf_position);
		$smarty->assign("type", $type);
	
		if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] != ''){
			$data["parent_id"] = $_POST["parent"];
			$data["name"] = $_POST["name"];
			$data["order_by"] = $_POST["order_by"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data["active"] = 1;
	
			if($id = $this->query_insert("product_category_type", $data)){
				$this->redirect_script(ADMIN . "product/cat_type");
			}
			else{
				$this->alert("Error !");
				$this->redirect_back();
			}
		}
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	function cat_type_edit(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;
	
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->redirect_back();
			exit();
		}
		
		$value = $this->find_by_id("product_category_type", $id);
		$smarty->assign("value", $value);
	
		$parent = $this->get_select_from_table("product_category", 0 , $value["parent_id"]);
		$smarty->assign("parent", $parent);
	
		if(isset($_REQUEST["FrmSubmit"])){
			$data["name"] = $_POST["name"];
			$data["parent_id"] = $_POST["parent"];
			$data["order_by"] = $_POST["order_by"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$where = "id='$id'";
			if($this->query_update("product_category_type", $data, $where)){
				$this->redirect_script(ADMIN . "product/cat_type");
			}
			else {
				$this->alert('Error !');
				$this->redirect_back();
			}
		}
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	
	/* Don dat hang san pham */
	function invoice(){
		$this->general_admin();
		global $smarty;
		$list = array();
		$query = $this->query("SELECT * FROM product_invoice ORDER BY active ASC, id DESC");
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item['future'] = $item['future'] == 1 ? "X" : "";
			$list[] = $item;
		}
		$smarty->assign('list', $list);
		
		$this->handle_check('product_invoice');
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function invoice_item(){
		$this->general_admin();
		global $smarty;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->redirect_back();
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
		$smarty->assign('list', $list);
	
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	

	
	
}