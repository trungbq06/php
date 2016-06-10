<?php
class Generals extends MyHandles{
	
	public function general_admin(){
		/* Kiem tra quyen admin */
		global $mod, $site, $conf_language_name, $smarty;
		$smarty->assign('admin', ADMIN);
                 $smarty->assign('domain', DOMAIN);
		$smarty->assign('title', TITLE_ADMIN);
		$smarty->assign('admin_language', $_SESSION['admin_language']);
		
		# Danh sach ngon ngu
		$smarty->assign('gen_lang', $conf_language_name);
		
		/* Lay ra url */
		$url_arr = array();
		foreach ($_GET as $key => $item){
			$url_arr[] = $key . "=" . $item;
		}
		$url = "?mod=" . $mod . "&site=" . $site;
		if($this->count_field("SELECT id FROM conf_role WHERE url LIKE '$url%'") > 1){
			$url = implode("&", $url_arr);
			$url = "?" . $url;
		}
		
		$role = $this->find_one("SELECT id, role, parent_id FROM conf_role WHERE url LIKE '$url%'");
		if($role['role'] > $_SESSION[LOGIN_ADMIN_ROLE]){
			$this->alert('Ban khong co quyen quan ly muc nay');
			$this->redirect_back();
		}
	
		# Lay danh sach cac module quan ly
		$role_admin = $_SESSION[LOGIN_ADMIN_ROLE];
		$sidebar = $this->find("SELECT * FROM conf_role WHERE active=1 AND parent_id=0 ORDER BY order_by ASC");
		$smarty->assign('sidebar', $sidebar);

		# Danh sach module con
		$role_parent = $role['parent_id'] != 0 ? $role['parent_id'] : $role['id'];
		$arr_id_menu = $this->get_arr_id('conf_role', $role_parent);
		$menu = $this->find("SELECT * FROM conf_role WHERE active=1 AND id IN ($arr_id_menu) AND role <= $role_admin ORDER BY parent_id ASC, order_by ASC");
		$smarty->assign('menu', $menu);
		
		$smarty->assign('content', "../" . $mod . "/" . $site . ".tpl");
		
	}

	
	# Ham xu ly check all
	public function handle_check($table){
		global $conf_handle, $smarty;
		$list_handle = $this->get_select_from_array($conf_handle);
		$smarty->assign('list_handle', $list_handle);
	
		if(isset($_POST['frmSubmit'])){
			$hand = $_POST['handle'];
			$check = isset($_POST['check']) ? $_POST['check'] : array();
			$check = implode(',', $check);
			if($hand == '1'){
				$sql = "UPDATE $table SET active=1 WHERE id IN ($check)";
			}
			elseif($hand == '2'){
				$sql = "UPDATE $table SET active=0 WHERE id IN ($check)";
			}
			elseif($hand == '3'){
				$sql = "UPDATE $table SET future=1 WHERE id IN ($check)";
			}
			elseif($hand == '4'){
				$sql = "UPDATE $table SET future=0 WHERE id IN ($check)";
			}
			elseif ($hand == '5'){
				$sql = "DELETE FROM $table WHERE id IN ($check)";
				$list = $this->find("SELECT * FROM $table WHERE id IN ($check)");
				$images = array();
				foreach ($list as $k => $item){
					$images[$item['id']] = isset($item['image']) ? $item['image'] : NULL;
				}
			}
			elseif($hand == '6'){
				$sql = "UPDATE $table SET order_by=10 WHERE id IN ($check)";
			}
			else {
				$sql = "";
			}
			if($this->query($sql)){
				if($hand == '5'){
					$table_lang = $table . "_lang";
					$sql_lang = "DELETE FROM $table_lang WHERE field_id IN ($check)";
					$this->query($sql_lang);
					foreach ($images as $k=>$item){
						$this->image_delete($table, $item, $k);
					}
				}
				$this->redirect_script(THIS_LINK);
			}
			else {
				#$this->alert('Error !');
				$this->redirect_script(THIS_LINK);
			}
		}
	
	}

	function image_delete($table, $image, $id=0){
		$lists_dir = array(
				"article" => ARTICLE_UPLOAD,
				"article_category" => ARTICLE_UPLOAD . "categories/",
				"product" => PRODUCT_UPLOAD . $id . "/",
				"product_category" => PRODUCT_UPLOAD . "categories/",
				"gallery" => GALLERY_UPLOAD,
				"gallery_category" => GALLERY_UPLOAD . "Album/",
				"menu" => MENU_UPLOAD,
		);
		$dir = isset($lists_dir[$table]) ? $lists_dir[$table] : NULL;
		if($dir == NULL){
			return false;
		}
		$dir = "../" . $lists_dir[$table];
		@unlink($dir . $image);
		if($id != 0 && $table=="product"){
			@$this->dir_delete($dir);
		}
	}
	
	
	# Ham luu lai sap xep thu tu
	function update_order(){
		if(isset($_POST['order'])){
			$data['order_by'] = $_POST['order'];
			$table = $_GET['table'];
			$where = "id=".$_GET['id'];
			$this->query_update($table, $data, $where);
		}
	}
	
	
	function get_select_article($table, $active=0, $category=NULL){
		global $lang;
		$table_lang = $table . "_lang";
		$sql = "SELECT a.id,lang.name FROM $table AS a
				LEFT JOIN $table_lang AS lang ON a.id=lang.field_id
				WHERE a.active=1 AND lang.lang=$lang
				";
		if($category != NULL){
			$sql .= " AND category_id IN ($category)";
		}
		
		$result = "";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			if($item['id'] == $active){
				$result .= "<option value='".$item['id']."' selected>".$item['name']."</option>";
			}
			else{
				$result .= "<option value='".$item['id']."'>".$item['name']."</option>";
			}
		}
		return $result;
	}	
	
}