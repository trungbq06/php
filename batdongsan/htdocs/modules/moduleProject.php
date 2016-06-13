<?php

class Project extends Generals{
	
	function lists(){
		$this->general();
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id=="" || $id==NULL ? 0 : $id;
		
		global $trans, $lang;
		$cate = $this->find_by_id('tbl_project_category', $id);
		$category = $this->get_field_lang('tbl_project_category', $id, "name");
		if($id == 0 || $id == NULL || $id == ""){
			#$category = $trans['products'];
			$category = "Dự án";
		}
		$this->smarty()->assign("category", $category);
		
		$sql = "SELECT * FROM tbl_project WHERE active=1 AND lang=$lang";
		if($id != 0){
			$str_cate = $this->get_arr_id('tbl_project_category', $id);
			$sql .= " AND category_id IN ($str_cate)";
		}
		#$sql .= " AND future=" . $position;
		$sql .= " ORDER BY order_by ASC, id DESC";
		/* paging */
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$pagesize = isset($_REQUEST["pagesize"]) ? $_REQUEST["pagesize"] : 6;
		$num_fields = $this->num_rows($this->query($sql));
		$this->smarty()->assign('num_fields', $num_fields);
		
		if ($num_fields % $pagesize == 0) {
			$maxpage = $num_fields / $pagesize;
		} else {
			$maxpage = ceil($num_fields / $pagesize);
		}
		$start = ($page - 1) * $pagesize;
		
		$paging = $this->my_hand()->paging($page, $maxpage, $pagesize);
		$this->smarty()->assign("paging",$paging);
		$this->smarty()->assign("maxpage",$maxpage);
		/* end paging */

		$sql .= " LIMIT $start,$pagesize";
		$query = $this->query($sql);
		$list = array();
		while($item = $this->fetch_array($query)){
			$item["img"] = $this->my_hand()->get_image(PROJECT_UPLOAD, $item['image']);
			$item["link"] = ALIAS_PROJECT_VIEW . $this->my_str()->str_convert($item["name"]) . "-" . $item['id'] . ".html";
			$item['alt'] = $this->my_str()->str_convert($item['name']) . "jpg";
			$list[] = $item;
		}
		$this->smarty()->assign("list", $list);

		# Lay menu bar
		$bar_parent = "Dự án";
		$bar = $this->gen_menu_content("tbl_project_category", ALIAS_PROJECT_LIST);
		$this->smarty()->assign("bar_parent", $bar_parent);
		$this->smarty()->assign("bar", $bar);
		
		$seo['title'] = $category;
		$seo['keyword'] = $category;
		$seo['description'] = $category;
		$this->smarty()->assign('seo', $seo);
		
		$this->smarty()->display(DEFAULT_LAYOUT);
	}

	
	function view(){
		$this->general();
		global $conf_product_warranty;
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = $id==NULL || $id=="" ? 0 : $id;
		if($id == 0){
			$this->my_hand()->redirect_back();
			exit();
		}
		
		$value = $this->find_by_id("tbl_project", $id);
		$value["img"] = $this->my_hand()->get_image(PROJECT_UPLOAD, $value['image']);
		$value['alt'] = $this->my_str()->str_convert($value['name']) . ".jpg";
		$this->smarty()->assign("value", $value);
		
		$images = array();
		$dir = PROJECT_IMAGE_UPLOAD . $id . "/";
		if(is_dir($dir)){
			$files = scandir($dir);
			foreach ($files as $k=>$item){
				$strlen = strlen($item);
				if($strlen > 10){
					$img = $dir . $item;
					$images[$k]['name'] = $item;
					$images[$k]['img'] = $dir . $item;
				}
			}
		}
		$this->smarty()->assign('images', $images);
		$this->smarty()->assign('images_number', count($images));
		
		$category = $this->get_field_lang('tbl_project_category', $value["category_id"], "name");
		$this->smarty()->assign("category", $category);
				
		/* Tin lien quan */
		$sql_other = "SELECT * FROM tbl_project WHERE active='1' AND id <> '$id'";
		$sql_other .= " AND category_id = " . $value['category_id'];
		$sql_other .= " ORDER BY order_by ASC, id DESC LIMIT 6";
		$query_other = $this->query($sql_other);
		$numb_other = $this->num_rows($query_other);
		$other = array();
		while ($item = $this->fetch_array($query_other)){
			$item['link'] = ALIAS_PROJECT_VIEW . $this->my_str()->str_convert($item['name']) . '-' . $item['id'] . ".html";
			$item["img"] = $this->my_hand()->get_image(PROJECT_UPLOAD, $item['image']);
			$item['price'] = $item['price']==0 ? "Liên hệ" : number_format($item['price']) . " VNĐ";
			$item['alt'] = $this->my_str()->str_convert($item['name']) . "jpg";
			$item['s_description'] = $this->my_str()->str_short($item['description'], 160);
			$other[] = $item;
		}
		$this->smarty()->assign("other", $other);
		$this->smarty()->assign("numb_other", $numb_other);
		
		/* tang luot xem tin */
		$this->query("UPDATE tbl_project SET number_view=number_view+1 WHERE id = '$id'");

		
		$seo['title'] = $value['name'];
		$seo['keyword'] = $value['name'];
		$seo['description'] = $value['description'];
		$this->smarty()->assign('seo', $seo);
		
		$this->smarty()->display(DEFAULT_LAYOUT);
		
	}
	
	
	function search(){
		$this->general();
		global $lang;
		$key = isset($_POST['key']) ? $_POST['key'] : "";
		$list = array();
		$sql = "SELECT * FROM product WHERE active=1 AND lang=$lang AND name LIKE '%$key%' ORDER BY order_by ASC, number_view DESC";
		
		/* paging */
		$page = isset($_GET["page"]) ? $_GET["page"] : 1;
		$pagesize = isset($_REQUEST["pagesize"]) ? $_REQUEST["pagesize"] : 12;
		$num_fields = $this->num_rows($this->query($sql));
		$this->smarty()->assign('num_fields', $num_fields);
		
		if ($num_fields % $pagesize == 0) {
			$maxpage = $num_fields / $pagesize;
		} else {
			$maxpage = ceil($num_fields / $pagesize);
		}
		$start = ($page - 1) * $pagesize;
		
		$paging = $this->my_hand()->paging($page, $maxpage, $pagesize);
		$this->smarty()->assign("paging",$paging);
		$this->smarty()->assign("maxpage",$maxpage);
		/* end paging */
		
		$sql .= " LIMIT $start,$pagesize";
		$query = $this->query($sql);
		while($item = $this->fetch_array($query)){
			$item["img"] = $this->my_hand()->get_image(PRODUCT_UPLOAD, $item['image']);
			$item["link"] = ALIAS_PRODUCT_VIEW . $this->my_str()->str_convert($item["name"]) . "-" . $item['id'] . ".html";
			$item["description"] = $this->my_str()->str_short(strip_tags($item["description"]), 160);
			$item['price'] = number_format($item['price']);
			$item['alt'] = $this->my_str()->str_convert($item['name']) . "jpg";
			$list[] = $item;
		}
		$this->smarty()->assign("list", $list);
		
		$category = "Tìm kiếm sản phẩm";
		$this->smarty()->assign('category', $category);
		#$this->smarty()->assign('web_title', $category);
		#$this->smarty()->assign('web_keyword', $category);
		#$this->smarty()->assign('web_description', $category);
		$this->smarty()->display(DEFAULT_LAYOUT);
		
	}
	
	
}