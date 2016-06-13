<?php

class Article extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty, $lang;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		
		/* Tự động tạo field theo ngôn ngữ */
		$auto_query = $this->query("SELECT id FROM article");
		while ($item = $this->fetch_array($auto_query)){
			$check = $this->find_one("SELECT id FROM article_lang WHERE lang=$lang AND field_id=" . $item['id']);
			if(!$check){
				$this->query("INSERT INTO article_lang (field_id, lang) VALUES (".$item['id'].", $lang)");
			}
		}
		
		$list = array();
		$sql = "
			SELECT a.*, l.field_id,l.name,l.description FROM article AS a
			LEFT JOIN article_lang AS l
			ON a.id=l.field_id
			WHERE l.lang=$lang
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
			$value['img'] = $this->get_image(ARTICLE_UPLOAD, $value['image']);
			$value["short_name"] = $this->str_short($value["name"], 45);
			$value["active_view"] = $value["active"]==1 ? "Active" : "Inactive";
			$value["category"] = $this->get_field_lang("article_category", $value['category_id'], "name");
			$list[] = $value;
		}
		$smarty->assign("manager", $list);
		$this->handle_check('article');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function add(){
		$this->general_admin();
		global $lang, $smarty;
		$category = $this->get_select_from_table("article_category");
		
		$smarty->assign("category", $category);
		$message = "Please insert all content";
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$img = $_FILES["img"];
			$type = end(explode("/", $img["type"]));
			$data['category_id'] = $_POST["category"];
			$data['order_by'] = $_POST["order_by"];
			$data['source'] = $_POST["source"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['image_show'] = isset($_POST["image_show"]) ? $_POST["image_show"] : 0;
			$data['active'] = "1";
			$data['class'] = $_POST["class"];
			$data['created'] = "now()";
			$data['updated'] = "now()";
	
			if($id = $this->query_insert('article', $data)){
				$message = "successful !";
				
				$data_lang["field_id"] = $id;
				$data_lang["description"] = stripslashes($_POST['description']);
				$data_lang["name"] = stripslashes($_POST['name']);
				$data_lang["content"] = stripslashes($_POST['content']);
				$data_lang["lang"] = $lang;
				$this->query_insert('article_lang', $data_lang);

				$dir = "../" . ARTICLE_UPLOAD;
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE article SET image='$upload' WHERE id='$id'");
				}
				$this->redirect_script(ADMIN . "article");
			}
		}
		$smarty->assign("message", $message);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function edit(){
		$this->general_admin();
		global $lang, $smarty;
		$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
		if($id == 0){
			$this->redirect_script("?mod=article&site=index");
		}
		$query = $this->query("
				SELECT a.*,l.field_id,l.name,l.description,l.content FROM article AS a
				LEFT JOIN article_lang AS l ON a.id=l.field_id
				WHERE a.id='$id' AND l.lang=$lang
				");
		$detail = $this->fetch_array($query);
		$detail['img'] = $this->get_image(ARTICLE_UPLOAD, $detail['image']);
		$smarty->assign("detail", $detail);
		
		$category = $this->get_select_from_table("article_category", 1, $detail["category_id"]);
		$smarty->assign("category", $category);
		
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['category_id'] = $_POST["category"];
			$data['order_by'] = $_POST["order_by"];
			$data['source'] = $_POST["source"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['image_show'] = isset($_POST["image_show"]) ? $_POST["image_show"] : 0;
			$data['active'] = "1";
			$data['class'] = $_POST["class"];
			$data['updated'] = "now()";
			$img = $_FILES["img"];
			
			$where = "id='$id'";
			if($this->query_update('article', $data, $where)){
				
				$data_lang["description"] = stripslashes($_POST['description']);
				$data_lang["name"] = stripslashes($_POST['name']);
				$data_lang["content"] = stripslashes($_POST['content']);
				$this->query_update('article_lang', $data_lang, "lang=$lang AND field_id=".$id);
				
				$dir = "../" . ARTICLE_UPLOAD;
				if($upload = $this->image_upload($img, $dir)){
					$this->query("UPDATE article SET image='$upload' WHERE id='$id'");
					@unlink($dir . $detail['image']);
				}
				
				$this->redirect_script(ADMIN . "article");
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
			#$data["description"] = $_POST["description"];
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
			#$data["description"] = $_POST["description"];
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