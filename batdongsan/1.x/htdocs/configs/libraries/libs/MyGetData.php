<?php
require_once 'MyDataBase.php';
class MyGetData extends DataBase{

	/*
	 * Lấy phần tử
	 */
	public function find_one($sql){
		$query = $this->query($sql);
		if($this->check_exist($sql)){
			return $this->fetch_array($query);
		}
		return false;
	}
	
	public function find_by_id($table, $id){
		$sql = "SELECT * FROM $table WHERE id='$id' ";
		$item = $this->find_one($sql);
		return $item;
	}
	
	
	function convert_utf8($table, $col1=NULL, $col2=NULL){
		$sql = "UPDATE product SET $col1=CONVERT($col2 USING utf8)";
	}
	
	
	function insert_select(){
		$sql = "INSERT INTO table1 ( column1 ) SELECT col1 FROM table2";
	}
	
	/* --------------------------- */
	/* Lay ra tat ca cac item theo parent */
	public function get_item_by_parent($table, $parent){
		global $my_str;
		$query = $this->query("SELECT * FROM $table WHERE active=1 AND parent_id=$parent");
		$value = array();
		while ($item = $this->fetch_array($query)){
			$item['link'] = ALIAS_PRODUCT_LIST . $my_str->convert_str($item['name']) . "-" . $item['id'] . ".html";
			$value[] = $item;
		}
		return $value;
	}
	
	
	# Danh sach field dang tree
	function get_field_tree($table, $id, $where=NULL, $list=array()){
		# red
		global $lang;
		$sql = "SELECT * FROM $table WHERE parent_id=$id ";
		if($where != NULL){
			$sql .= "AND " . $where;
		}
		if($check = $this->check_exist("SELECT lang FROM $table")){
			$sql .= " AND lang IN (0,$lang)";
		}
		$sql .= " ORDER BY order_by ASC";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$list[] = $item;
			if($this->check_exist("SELECT id FROM $table WHERE parent_id=" . $item['id'])){
				$get = $this->get_field_tree($table, $item['id']);
				foreach ($get as $get){
					$get['name'] = "__ " . $get['name'];
					$list[] = $get;
				}
			}
		}
		return $list;
	}
	
	
	# Danh sach field dang tree lay theo ngon ngu
	function get_field_tree_lang($table, $id=0, $where=NULL, $tree=NULL){
		#red
		$list=array();
		$sql = "SELECT * FROM $table WHERE parent_id=$id ";
		if($where != NULL){
			$sql .= "AND " . $where;
		}
		$sql .= " ORDER BY order_by ASC";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item["active_view"] = $item["active"]==1 ? "Active" : "Inactive";
			$item['name'] = $tree . " " . $this->get_field_lang($table, $item['id'], "name");
			$item["future"] = $item["future"]==1 ? "icon-ok" : "icon-remove";
			$list[] = $item;
			if($this->check_exist("SELECT id FROM $table WHERE parent_id=" . $item['id'])){
				$get = $this->get_field_tree_lang($table, $item['id'], NULL, "─" . $tree);
				foreach ($get as $get){
					$list[] = $get;
				}
			}
		}
		return $list;
	}
	
	# Lay ten theo ngon ngu
	public function get_field_lang($table, $id, $field="name"){
		global $lang;
		$table .= "_lang";
		$sql = "SELECT $field FROM $table WHERE field_id=$id AND lang=$lang";
		$value = $this->find_one($sql);
		return $value[$field];
	}
	
	

	/*
	 * Lấy các option cho select
	 * active - id được active
	 * parent - danh mục cha : lấy danh sách mảng theo danh mục cha của nó
	 * tree - thuộc tính lựa chọn dạng cây hay không
	 * not_id - danh sách các id không sử dụng
	 * set_shild - ký tự sử dụng cho danh mục con dạng tree
	 */
	public function get_select_from_table($table, $tree=1, $active=0, $parent=0, $not_id=0, $set_child=NULL){
		$result = "";
		$sql = "SELECT a.id,a.name FROM $table AS a WHERE a.active=1 AND a.parent_id=$parent";
		$check_field = $this->check_field("SELECT name FROM $table limit 1");
		if(!$check_field){
			global $lang;
			$table_lang = $table . "_lang";
			$sql = "SELECT a.id,lang.name FROM $table AS a
					LEFT JOIN $table_lang AS lang ON a.id=lang.field_id
					WHERE a.active=1 AND lang.lang=$lang
					";
		}
		$sql .= " AND a.parent_id=$parent";
		$sql .= " AND a.id NOT IN ($not_id)";
		$sql .= " ORDER BY a.order_by ASC, a.id ASC";
		
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$name = $set_child . $item["name"];
			if($item['id'] == $active){
				$result .= "<option value='".$item['id']."' selected>".$name."</option>";
			}
			else{
				$result .= "<option value='".$item['id']."'>".$name."</option>";
			}
			if($tree == 1){# Lay ra cac danh muc con
				if($this->check_exist("SELECT id FROM $table WHERE parent_id=" . $item['id'])){
					$result .= $this->get_select_from_table($table, $tree, $active, $item['id'], $not_id, "─ " . $set_child);
				}
			}
		}
		return $result;
	}

	
	/*
	 * Lấy các option cho select từ 1 mảng đưa vào
	 */
	public function get_select_from_array($array, $active=0){
		$result = "";
		foreach ($array as $key => $item){
			if($key == $active){
				$result .= "<option value='".$key."' selected> ".$item." </option>";
			}
			else{
				$result .= "<option value='".$key."'> ".$item." </option>";
			}
		}
		return $result;
	}
	
	
	public function get_field_by_id($table, $id, $field="name"){
		$sql = "SELECT $field FROM $table WHERE id=$id";
		if(!$this->check_field($sql)){
			global $lang;
			$table_lang = $table . "_lang";
			$field_lang = "lang." . $field;
			$sql = "SELECT $field_lang FROM $table AS a
					LEFT JOIN $table_lang AS lang ON a.id=lang.field_id
					WHERE a.id=$id AND lang.lang=$lang
			";
		}
		$value = $this->find_one($sql);
		return $value[$field];
	}
	
	
	function get_item_from_array($array, $active, $item){
		$result = "";
		foreach ($array as $k => $list){
			if($k == $active){
				$result .= $list[$item];
			}
		}
		return $result;
	}
	
	/* --------------------------- */
	
	# Lay danh muc cha lon nhat
	function get_parent_id($table, $id){
		$check = $this->find_one("SELECT parent_id FROM $table WHERE id=$id");
		if($check["parent_id"] == 0){
			$parent = $id;
		}
		else {
			$parent = $check["parent_id"];
			$parent = $this->get_parent_id($table, $parent);
		}
		return $parent;
	}
	
	
	/* Lay ra mang cac id con cua id dua vao */
	public function get_arr_id($table, $id, $result = NULL){
		if($result==NULL){
			$result = $id;
		}
		$sql = "SELECT id FROM $table WHERE active=1 AND parent_id IN ($id) AND id NOT IN ($id)";
		if($this->check_exist($sql)){
			$query = $this->query($sql);
			$child = array();
			while ($item = $this->fetch_array($query)){
				$child[] = $item['id'];
			}
			$str_child = implode(',', $child);
			
			$result = implode(",", array("$result,$str_child"));
			if($this->check_exist("SELECT id FROM $table WHERE active=1 AND parent_id IN ($str_child) AND id NOT IN ($str_child)")){
				$result = $this->get_arr_id($table, $str_child, $result);
			}
		}
		return $result;
	}
	
	/* --------------------------- */
	
	public function check_exist($sql){
		$query = $this->query($sql);
		if($this->num_rows($query) > 0){
			return true;
		}
		return false;
	}

	
	public function check_field($sql){
		$value = $this->find_one($sql);
		if(!$value){
			return false;
		}
		else {
			return true;
		}
	}
	
	
	public function get_name_with_parent($table, $id, $name=NULL){
		$sql = "SELECT name,parent_id FROM $table WHERE id=$id";
		if(!$this->check_field($sql)){
			global $lang;
			$table_lang = $table . "_lang";
			$sql = "SELECT a.parent_id,lang.name FROM $table AS a
					LEFT JOIN $table_lang AS lang ON a.id=lang.field_id
					WHERE a.id=$id AND lang.lang=$lang
			";
		}
		$cate = $this->find_one($sql);
		$cate_name = $cate["name"];
		if($name != NULL){
			$cate_name = $cate_name . ", " . $name;
		}
		if($cate["parent_id"] != 0){
			$cate_name = $this->get_name_with_parent($table, $cate["parent_id"], $cate_name);
		}
		return $cate_name;
	}
	
	
	
	/*
	 * Lấy danh sách danh mục
	* Trả kết quả theo cú pháp ul li
	* Danh mục con sẽ đặt trong thẻ ul con
	*/
	function get_list($table, $parent=0, $alias=ALIAS_ARTICLE, $child=1){
		$sql = "SELECT a.id,a.name FROM $table AS a WHERE a.active=1 AND a.parent_id=$parent";
	
		$check_field = $this->check_field("SELECT name FROM $table");
		if(!$check_field){
			global $lang;
			$table_lang = $table . "_lang";
			$sql = "
					SELECT a.id,lang.name FROM $table AS a
					LEFT JOIN $table_lang AS lang ON lang.field_id=a.id
					WHERE a.active=1 AND a.parent_id=$parent AND lang.lang=$lang
					";
		}
	
		$sql .= " ORDER BY a.order_by ASC";
		$query = $this->query($sql);
	
		$result = "";
		$result .= "<ul>";
		while ($item = $this->fetch_array($query)){
			$link = $alias . $item["id"] . "/" . $this->str_convert($item["name"]) . ".html";
			$result .= "<li>";
			$result .= "<a href='" . $link . "'>" . $item["name"] . "</a>";
			if($child==1){
				$check_exits = $this->check_exist("SELECT id FROM $table WHERE active=1 AND parent_id=".$item["id"]);
				if($check_exits){
					$result .= $this->get_list($table, $item["id"], $alias);
				}
			}
			$result .= "</li>";
		}
		$result .= "</ul>";
	
		return $result;
	}
	
	
	
	public function count_field($sql){
		$query = $this->query($sql);
		return $this->num_rows($query);
	}

	
	/* ham phan trang */
	public function paging($page, $maxpage, $pagesize = 20) {
		$module = THIS_LINK;
		if(strpos($module, "?page=") == true){
			$module = explode("?page=", $module);
		}
		else{
			$module = explode("&page=", $module);
		}
		$module = current($module);
	
		$getpage = explode("?", $module);
		$sour = "?";
		if(count($getpage) > 1){
			$sour = "&";
		}
	
		$str = "";
		#$str .= "<span>Trang $page/$maxpage: &nbsp;</span>";
		if($page >1){
			$PrevStart=$page-1;
			#$str .= "<a class='link underline' href='" . $module . $sour . "page=1'>« First</a> ";
			$str .= "<a class='link underline' href='" . $module . $sour . "page=" . $PrevStart . "'>‹</li>";
		}
		$currentPage = 0;
		$pf = $page - 2;
		$pt = $page + 2;
		If ($pf < 1)
		$pf = 1;
	
		If ($pt > $maxpage)
		$pt = $maxpage;
		if (empty($page)) $page = 1;
		if (empty($pagesize)) $pagesize = 1;
		if (empty($recordcount)) $recordcount = 1;
		for($currentPage=$pf;$currentPage<=$pt;$currentPage++){
			if($currentPage < $maxpage){
				if($currentPage == $page){
					if($currentPage % $pagesize){
						$str.= "<a class='current'>$currentPage</a>";
					}else{
						$str.= "<a class='current'>$currentPage</a>";
					}
				}elseif($currentPage % $pagesize){
					$str.= "<a class='link' href='" .$module . $sour . "page=" . $currentPage . "'>$currentPage</a> ";
				}else{
					$str.= "<a class='link' href='" .$module . $sour . "page=" . $currentPage . "'>$currentPage</a> ";
				}
			}else{
				if($page == $maxpage){
					$str.= "<a class='current'>$currentPage</a>";
					break;
				}else{
					$str.="<a class='link' href='" .$module . $sour . "page=" . $currentPage . "'>$currentPage</a> ";
					break;
				}
			}
		}
		if($page < $maxpage){
			$NextPage=$page+1;
			$str.= "<a class='link underline' href='" .$module . $sour . "page=" . $NextPage . "'>›</a>";
		}
		if($page < $maxpage ){
			$LastRec = $recordcount % $pagesize;
			#$str.= "<a class='link underline' href='" .$module . $sour . "page=" . $maxpage . "'>Last »</a>";
		}
		return $str;
	}
	
	
	
	/*
	 * Hàm phân trang
	 */
	function pagination($sql, $pagesize=50){
		global $smarty;
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$fields = $this->num_rows($this->query($sql));
		$smarty->assign("fields",$fields);
		$smarty->assign("pagesize",$pagesize);
		
		if ($fields % $pagesize == 0) {
			$maxpage = $fields / $pagesize;
		} else {
			$maxpage = ceil($fields / $pagesize);
		}
		$start = ($page - 1) * $pagesize;
		
		$paging = $this->paging($page, $maxpage, $pagesize);
		$smarty->assign("paging",$paging);
		
		$sql .= " LIMIT $start,$pagesize";
		
		return $sql;
	}
	
}
?>