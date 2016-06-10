<?php

class Gallery extends Generals{
	
	function index(){
		$this->general_admin();
		global $lang, $smarty;
		$list = array();
		$query = $this->query("SELECT * FROM gallery WHERE lang IN (0,$lang)");
		while ($item = $this->fetch_array($query)){
			$item['img'] = DOMAIN . GALLERY_UPLOAD . $item['image'];
			$list[] = $item;
		}
		$smarty->assign('list', $list);

		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	
	function manager(){
		$this->general_admin();
		global $conf_multimedia_type, $lang, $smarty;
		$id = isset($_GET["id"]) ? $_GET['id'] : 0;
		if($id == 0 || $id == "" || $id == NULL){
			$this->redirect_script(ADMIN . "gallery/album");
		}
		
		$category = $this->get_field_by_id('gallery_category', $id);
		$smarty->assign('category', $category);
		
		$sql = "SELECT * FROM gallery WHERE category_id =$id AND lang IN (0,$lang) ORDER BY order_by ASC, id DESC";
		$query = $this->query($sql);
		$manager = array();
		while($value = $this->fetch_array($query)){
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value['img'] = $this->get_image(GALLERY_UPLOAD,  $value['image']);
			$value["future"] = $value["future"]==1 ? "X" : "";
			$value['type'] = $conf_multimedia_type[$value['type']];
			$manager[] = $value;
		}
		$smarty->assign("manager", $manager);
		$this->handle_check('gallery');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function manager_adsense(){
		$this->general_admin();
		global $conf_multimedia_type, $lang, $smarty;
		$id = isset($_GET["id"]) ? $_GET['id'] : 0;
		if($id == 0 || $id == "" || $id == NULL){
			$this->redirect_script(ADMIN . "gallery/album");
		}
		
		$category = $this->get_field_by_id('gallery_category', $id);
		$smarty->assign('category', $category);
		
		$sql = "SELECT * FROM gallery WHERE category_id =$id AND lang IN (0,$lang) ORDER BY order_by ASC, id DESC";
		$query = $this->query($sql);
		$manager = array();
		while($value = $this->fetch_array($query)){
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value['img'] = $this->get_image(GALLERY_UPLOAD,  $value['image']);
			$value["future"] = $value["future"]==1 ? "X" : "";
			//$value['type'] = $conf_multimedia_type[$value['type']];
			$manager[] = $value;
		}
		$smarty->assign("manager", $manager);
		$this->handle_check('gallery');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function add(){
		$this->general_admin();
		global $conf_multimedia_type, $lang, $smarty;
		
		$category = $this->get_select_from_table2("gallery_category",0);
		$smarty->assign("category", $category);
		$type = $this->get_select_from_array($conf_multimedia_type);
		$smarty->assign('type', $type);
		
		$message = "";
		
		if(isset($_POST["FrmSubmit"])){
			$img = $_FILES["img"];
		
			if($img['tmp_name'] == ""){
				$message = "Error, file type is not true.";
				$this->alert($message);
				$this->redirect_back();
			}
		
			else{
				$message = "successful !";
		
				$data['name'] = $_POST["name"];
				$data['category_id'] = $_POST["category"];
				$data['description'] = stripslashes($_POST["description"]);
				$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
				$data['order_by'] = $_POST["order_by"];
				$data['link'] = $_POST["link"];
				$data['type'] = $_POST['type'];
				$data['lang'] = $lang;
				$data['active'] = 1;
		
				if($id = $this->query_insert('gallery', $data)){
					if($img['tmp_name'] != ""){
						$ar_type = explode("/", $img["type"]);
						$type = end($ar_type);
						$dir = $this->dir_check("../" . GALLERY_UPLOAD);
						$file = $id . "." .$type;
						move_uploaded_file($img['tmp_name'], $dir . $file);
						$sql = "UPDATE gallery SET image='$file' WHERE id='$id'";
						$this->query($sql);
						$this->redirect_script(ADMIN . "gallery/manager?id=".$data['category_id']);
					}
					else{ $this->alert("error"); }
				}
				else {
					$this->redirect_script(ADMIN . "gallery/manager?id=".$data['category_id']);
				}
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function edit(){
		$this->general_admin();
		global $conf_multimedia_type, $smarty;
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0 || $id == "" | $id == NULL){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("gallery", $id);
		$smarty->assign("value", $value);
		
		$category = $this->get_select_from_table2("gallery_category", 0, $value['category_id']);
		$smarty->assign("category", $category);
		$type = $this->get_select_from_array($conf_multimedia_type, $value['type']);
		$smarty->assign('type', $type);
		
		if(isset($_POST["FrmSubmit"])){
			$img = $_FILES["img"];
		
			$data['name'] = $_POST["name"];
			$data['description'] = stripslashes($_POST["description"]);
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['order_by'] = $_POST["order_by"];
			$data['link'] = $_POST["link"];
			$data['type'] = $_POST['type'];
			$data['category_id'] = $_POST['category'];
			$where = "id='$id'";
		
		
			if($this->query_update('gallery', $data, $where)){
				if($img['tmp_name'] != ""){
					
					$type = $img['name'];
					$type = explode(".", $type);
					$type = $type[count($type)-1];
					$dir = $this->dir_check("../" . GALLERY_UPLOAD);
					
					$file = $id . "-" . date('Y.m.d.his') . "." . $type;
					move_uploaded_file($img['tmp_name'], $dir . $file);
					$this->query("UPDATE gallery SET image='$file' WHERE id='$id'");
					if($value['image'] != ""){
						@unlink($dir . $value['image']);
					}
					$this->redirect_script(ADMIN . "gallery/manager?id=".$value["category_id"]);
				}
				else{
					$this->redirect_script(ADMIN . "gallery/manager?id=".$value["category_id"]);
				}
		
			}
			else{
				$this->alert("Error !");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function album(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;

		$sql = "SELECT * FROM gallery_category WHERE type=0 ORDER BY position ASC, order_by ASC, id DESC";
		$query = $this->query($sql);
		
		while($value = $this->fetch_array($query)){
			$value["type"] = $value["position"] == 0 ? "&nbsp" : $conf_position[$value["position"]];
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value["future"] = $value["future"]==1 ? "X" : "&nbsp";
			$manager[] = $value;
		}
		$smarty->assign("manager", $manager);
		$this->handle_check('gallery_category');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function album_add(){
		$this->general_admin();
		global $conf_position, $smarty;
		
		$type = $this->get_select_from_array($conf_position);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
		
			$data["name"] = stripcslashes($_POST["name"]);
			$data["description"] = stripcslashes($_POST["description"]);
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data["position"] = $_POST["position"];
			$data["order_by"] = $_POST["order_by"];
			$img = $_FILES["img"];
			$data["active"] = 1;
		
			if($id = $this->query_insert("gallery_category", $data)){
				if($this->check_img($img)){
					$type = end(explode("/", $img["type"]));
					if($value["image"] == "" || $value["image"] == NULL){
						$img_name = $id . "." . $type;
					}
					else{
						$img_name = $value["image"];
					}
					$path = GALLERY_UPLOAD . "Album/";
					$path_upload = "../" . $path;
		
					if($this->upload($img, $path_upload, $img_name)){
						$sql = "
						UPDATE gallery_category SET image='$img_name'
						WHERE id='$id'
						";
						$this->query($sql);
						$this->redirect_script(ADMIN . "gallery/album");
					}
				}
				else{
					$this->redirect_script(ADMIN . "gallery/album");
				}
			}
			else{
				$this->alert("error !");
			}
		}
		
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function album_edit(){
		$this->general_admin();
		global $conf_position, $smarty;
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("gallery_category", $id);
		$smarty->assign("value", $value);
		
		$type = $this->get_select_from_array($conf_position, $value["position"]);
		$smarty->assign("type", $type);
		
		if(isset($_POST["FrmSubmit"])){
			$data["name"] = stripslashes($_POST["name"]);
			$data["description"] = stripslashes($_POST["description"]);
			$data["position"] = $_POST["position"];
			$data["order_by"] = $_POST["order_by"];
			$img = $_FILES["img"];
			$data["future"] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$where = "id='$id'";
			if($this->query_update("gallery_category", $data, $where)){
				if($this->check_img($img)){
					$type = end(explode("/", $img["type"]));
					if($value["image"] == "" || $value["image"] == NULL){
						$img_name = $id . "." . $type;
					}
					else{
						$img_name = $value["image"];
					}
					$path = GALLERY_UPLOAD . "Album/";
					$path_upload = "../" . $path;
						
					if($this->upload($img, $path_upload, $img_name)){
						$sql = "
						UPDATE gallery_category SET image='$img_name'
						WHERE id='$id'
						";
						$this->query($sql);
						$this->redirect_script(ADMIN . "gallery/album");
					}
					else {
						$this->alert("error ! can not upload");
					}
				}
				else{
					$this->redirect_script(ADMIN . "gallery/album");
				}
			}
			else{
				$this->alert("error");
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function adsense(){
		$this->general_admin();
		global $conf_position, $lang, $smarty;

		$sql = "SELECT * FROM gallery_category WHERE type=1 ORDER BY position ASC, order_by ASC, id DESC ";
		$query = $this->query($sql);
		
		while($value = $this->fetch_array($query)){
			$value["type"] = $value["position"] == 0 ? "&nbsp" : $conf_position[$value["position"]];
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value["future"] = $value["future"]==1 ? "X" : "&nbsp";
			$manager[] = $value;
		}
		$smarty->assign("manager", $manager);
		$this->handle_check('gallery_category');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function add_QC(){
		$this->general_admin();
		global $conf_multimedia_type, $lang, $smarty;
		
		$category = $this->get_select_from_table2("gallery_category",1);
		$smarty->assign("category", $category);
		
		$message = "";
		
		if(isset($_POST["FrmSubmit"])){
	
				//$data['name'] = $_POST["name"];
				$data['category_id'] = $_POST["category"];
				$data['description'] = stripslashes($_POST["description"]);
				$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
				//$data['order_by'] = $_POST["order_by"];

				//$data['lang'] = $lang;
				$data['active'] = 1;
		
				if($id = $this->query_insert('gallery', $data)){
					
						$this->redirect_script(ADMIN . "gallery/manager_adsense?id=".$data['category_id']);
					
				}
				else {
					$this->redirect_script(ADMIN . "gallery/manager_adsense?id=".$data['category_id']);
				}
			}
			
		$smarty->display(DEFAULT_LAYOUT);
	}
}