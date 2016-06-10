<?php

class Generals extends MyHandles{
	
	public function general(){
		global $tpl, $conf_language_name, $lang, $smarty;
		$smarty->assign('domain', DOMAIN);
		$smarty->assign('this_link', THIS_LINK);
		$smarty->assign('content', $tpl);
		/* Lay bai viet theo vi tri */
		
		$info = $this->find_one("SELECT * FROM conf_info WHERE active=1 AND lang=$lang ORDER BY future ASC, id DESC LIMIT 0,1");
		$smarty->assign("info", $info);	
		$smarty->assign('support', $this->find("SELECT * FROM conf_support WHERE active=1 AND yahoo IS NOT NULL ORDER BY order_by ASC, id DESC"));
		
		
		/* Goi ra menu main */
		$smarty->assign('menu_p1', $this->gen_menus(1));
		$smarty->assign('menu_p3', $this->get_menu(3));
		$smarty->assign('menu_p4', $this->gen_menus(4));
		
		$smarty->assign('gallery_p1', $this->gen_gallery_by_position(1, "0,1"));//logo
		$smarty->assign('gallery_p2', $this->gen_gallery_by_position(2, 10));//slide
		$smarty->assign('gallery_p4', $this->gen_gallery_by_position(4, 3));//banner
		$smarty->assign('gallery_p3', $this->gen_gallery_by_position(3, 1));//banner
		$smarty->assign('gallery_p5', $this->gen_gallery_by_position(5,1));//Popup
		/*Quang cáo Google Adsense*/
		$smarty->assign('adsense_p1', $this->gen_adsense_by_position(6,1));
		$smarty->assign('adsense_p2', $this->gen_adsense_by_position(7,1));
		$smarty->assign('adsense_p3', $this->gen_adsense_by_position(8,1));
		$smarty->assign('adsense_p4', $this->gen_adsense_by_position(9,1));
		$smarty->assign('adsense_p5', $this->gen_adsense_by_position(10,1));
		$smarty->assign('adsense_p6', $this->gen_adsense_by_position(11,1));
		$smarty->assign('adsense_p7', $this->gen_adsense_by_position(12,1));
		//var_dump($this->gen_adsense_by_position(1,1));
		
		$search_cate = $this->get_select_from_table("product_category", 0);
		$smarty->assign('search_cate', $search_cate);
		/*Dịa chỉ popup*/
		$local = $this->find("SELECT id,name,link FROM tbl_local WHERE active=1 AND future=1 ORDER BY order_by ASC");
		$smarty->assign('local', $local);
		$local_all = $this->find("SELECT id,name,link FROM tbl_local WHERE active=1 AND parent_id=0 ORDER BY order_by ASC,future DESC");
		$smarty->assign('local_all', $local_all);
		
		$page = array();
		$query = $this->query("SELECT id,name,address,hotline FROM tbl_page WHERE active=1 ORDER BY future DESC, order_by ASC");
		while ($item = $this->fetch_array($query)){
			$item['link'] = "cuahang?id=" . $item['id'];
			$page[] = $item;
		}
		$smarty->assign('gpage', $page);
		
		
		
		$pro_buy = $this->get_products("SELECT a.* FROM tbl_orders_item AS item
				LEFT JOIN product AS a ON item.product_id=a.id
				ORDER BY item.id DESC", 4);
		$smarty->assign('pro_buy', $pro_buy);
		
		
		$member_id = $this->check_login();
		$member = $this->find_one("SELECT id,name,role FROM tbl_member WHERE id=$member_id");
		$smarty->assign('member', $member);
		
		
		$category = $this->get_category();
		$smarty->assign('gcategory', $category);
				
		$cate_news = $this->gen_menus(7);
		$smarty->assign("cate_news", $cate_news);
		/*$article_news = $this->get_category_article(0,2);
		$smarty->assign("article_news", $article_news);*/
		$construction = $this->get_category_article(0,3);
		$smarty->assign("construction", $construction);
	}
	

	function get_category($parent=0){
		$sql = "SELECT a.id,a.image,lg.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE a.active=1 AND parent_id=$parent
				ORDER BY order_by ASC
				";
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$item['link'] = ALIAS_PRODUCT . $item['id'] . "/" . $this->str_convert($item['name']) . ".html";
			$item['image'] = $this->get_image(PRODUCT_UPLOAD . "categories/", $item['image']);
			
			$check = $this->check_exist("SELECT id FROM product_category WHERE active=1 AND parent_id=".$item['id']);
			$item['child'] = NULL;
			if($check){
				$item['child'] = $this->get_category($item['id']);
			}
			
			$result[] = $item;
		}
		return $result;
	}
	
	function get_category_article($parent=0,$position=NULL,$where=NULL,$limit=8){
		$sql = "SELECT cate.*,lg.name from article_category AS cate
		LEFT JOIN article_category_lang AS lg ON cate.id = lg.field_id
		WHERE cate.active = 1";
		$sql .= " AND cate.parent_id =".$parent;
		
		if($position != NULL){
			
			$sql .=" AND position=".$position;
		}
		
		$category = $this->gen_id_by_position('article_category', $position);
		
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
		$item['link'] = ALIAS_ARTICLE . $item['id'] . "/" . $this->str_convert($item['name']) . ".html";
		$item['image'] = $this->get_image(ARTICLE_UPLOAD . "categories/", $item['image']);
		$sql_a = "SELECT a.*,l.name,l.description,l.content FROM article AS a
						LEFT JOIN article_lang AS l ON a.id=l.field_id
						WHERE a.active=1 AND category_id=".$item['id']." LIMIT $limit";
		
		$item['article'] = $this->get_articles($sql_a);
		
				$check = $this->check_exist("SELECT id FROM article_category WHERE active=1 AND parent_id=".$item['id']);		
				$item['child'] = NULL;
						if($check){
						$item['child'] = $this->get_category_article($item['id']);
						}
						
						$result[] = $item;
		}
		return $result;
	}
	
	/*
	 * Lấy data chung cho quản lý member
	 */
	function get_member($field=NULL){
		$id = $this->check_login();
		if($id==0){
			$this->redirect_script("?mod=member&site=login");
		}
		global $smarty;
		$sql = "SELECT id,name,image,email,phone,yahoo";
		if($field != NULL){
			$sql .= "," . $field;
		}
		$sql .= " FROM tbl_member WHERE id=$id";
		
		$member = $this->find_one($sql);
		$member['img'] = $this->get_image(MEMBER_UPLOAD . $id . "/avatar/", $member['image']);
		$smarty->assign("account", $member);
	
		$bar = $this->get_menu(3);
		$smarty->assign("bar", $bar);
	
		return $member;
	}
	

	/*
	 * Lấy data chung cho quản lý page
	 */
	function get_page(){
		global $smarty;
		$id = isset($_SESSION['vshops_page_admin']) ? $_SESSION['vshops_page_admin'] : 0;
		$id = intval($id);
		
		if($id==0){
			$this->redirect_script("?mod=member&site=profile");
			exit();
		}
		else if(!$this->check_exist("SELECT id FROM tbl_page WHERE id=$id")){
			unset($_SESSION['vshops_page_admin']);
			$this->redirect_script("?mod=member&site=profile");
			exit();
		}
		
		$bar = $this->get_menu(6);
		$smarty->assign("bar", $bar);
	
		$page = $this->find_one("SELECT id,name,image,category FROM tbl_page WHERE id=$id");
		$page['img'] = $this->get_image(PAGE_UPLOAD . $id . "/", $page['image']);
		$smarty->assign("account", $page);
	
		return $page;
	}
	
	
	function get_menu($position, $parent=0){
		global $lang;
		$category = $this->gen_id_by_position('menu_category', $position);		

		$sql = "SELECT m.id,m.alias,m.link,m.module,m.image,m.module_choice,m.future,m.web_class,l.name,l.description FROM menu AS m
				LEFT JOIN menu_lang AS l ON m.id=l.field_id
				WHERE l.lang=$lang AND m.active=1 AND m.parent_id=$parent AND m.category_id IN ($category)
				";
		$sql .= " ORDER BY m.order_by ASC";
		$result = "";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item['alias'] = $item['module']==4 ? $item['link'] : $item['alias'];
			$item['alias'] = $item['module']==6 ? 'javascript:void(0)' : $item['alias'];
			$result .= "<li>";
			$result .= "<a href='".$item['alias']."' target = '_blank'>";
			$result .= "<i class='".$item['web_class']."'></i>";
			$result .= $item['name'];
			$result .= "</a>";
			if($this->check_exist("SELECT id FROM menu WHERE parent_id=" . $item['id'])){
				$result .= "<ul>";
				$result .= $this->get_menu($position, $item['id']);
				$result .= "</ul>";
			}
			$result .= "</li>";
		}
		
		return $result;
	}
	
	
	# Lay danh muc tin tuc, san pham lam menu
	function gen_menu_content($table, $alias=ALIAS_ARTICLE, $parent=0, $future=0){
		$list = array();
		$table_lang = $table . "_lang";
		$sql = "SELECT a.id,lg.name FROM $table AS a
				LEFT JOIN $table_lang AS lg ON a.id=lg.field_id
				WHERE a.active=1 AND a.parent_id=$parent";
		if($future==1){
			$sql .= " AND a.future=1";
		}
		$sql .= " ORDER BY a.order_by ASC, a.id DESC";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item['name'] = $this->get_field_lang($table, $item['id'], 'name');
			$item['link'] = $alias . $item['id'] . "/" . $this->str_convert($item['name']) . ".html";
			$item['alias'] = $item['link'];
			$children = array();
			if($this->check_exist("SELECT id FROM $table WHERE parent_id=" . $item['id'])){
				$children = $this->gen_menu_content($table, $alias, $item['id'], $future);
			}
			$item['child'] = $children;
			$list[] = $item;
		}
		return $list;
	}
	
	
	function gen_menus($position, $parent=0, $future=NULL, $limit=99){ # Lay ra danh sach menu
		global $lang;
		$category = $this->gen_id_by_position('menu_category', $position);		
		$list = array();

		$sql = "SELECT m.id,m.alias,m.link,m.module,m.image,m.module_choice,m.future,m.web_class,l.name,l.description FROM menu AS m
				LEFT JOIN menu_lang AS l ON m.id=l.field_id
				WHERE l.lang=$lang AND m.active=1 AND m.parent_id=$parent AND m.category_id IN ($category)
				";
		
		if($future != NULL){
			$sql .= " AND future=$future";
		}
		$sql .= " ORDER BY order_by ASC";
		$sql .= " LIMIT $limit";
		
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$children = array();
			if($this->check_exist("SELECT id FROM menu WHERE parent_id=" . $item['id'])){
				$children = $this->gen_menus($position, $item['id']);
			}
			if($item["module"] == 1){
				$children = $this->gen_menu_content("article_category", ALIAS_ARTICLE, $item["module_choice"], 1);
			}
			if($item["module"] == 3){
				$children = $this->gen_menu_content("product_category", ALIAS_PRODUCT, $item["module_choice"], 1);
			}
			$item['child'] = $children;
			$item['alias'] = $item['module']==4 ? $item['link'] : $item['alias'];
			$item['alias'] = $item['module']==6 ? 'javascript:void(0)' : $item['alias'];
			
			$item['target'] = "";
			$item['target'] = $item['module']==4 ? "target='_blank'" : $item['target'];
			
			$item["img"] = $this->get_image(MENU_UPLOAD, $item["image"]);
			$list[] = $item;
		}
		
		return $list;
	}
	
	
	
	function gen_id_by_position($table, $position){# Lay danh sach id theo position
		$result = array();
		$query = $this->query("SELECT id FROM $table WHERE active=1 AND position=$position");
		
		while ($item = $this->fetch_array($query)){
			$result[] = $item['id'];
		}
		return implode(',', $result);
	}
	
	
	
	# Ham thong ke gio hang
	public function cart(){
		$cart_numb = isset($_SESSION["shop_cart"]) ? count($_SESSION["shop_cart"]) : 0;
		if($cart_numb > 0){
			$cart = $_SESSION["shop_cart"];
			$cart_sum = 0;
			foreach ($cart as $key => $item){
				$price = $this->get_field_by_id('product', $item["id"], 'price');
				$promotions = $this->get_field_by_id('product', $item["id"], 'promotions');
				$promotions = (100 - $promotions)/100;
				$sum = $price * $item["number"] * $promotions;
				$cart_sum += $sum;
			}
		}
		else {
			$cart_sum = 0;
		}
		$str = "";
		$str .= $cart_numb . " Sản phẩm";
		#$str .= "<p>" . $cart_numb . " Sản phẩm</p>";
		#$str .= "<p>Tổng: " .number_format($cart_sum). " đ</p>";
		
		return $str;
	}
	

	
	/* Lay tin theo position */
	public function gen_article_by_position($position, $limit=10, $future=0){
		global $lang;
		$category = $this->gen_id_by_position('article_category', $position);
		$str_cate = $this->get_arr_id('article_category', $category);
		
		$sql = "
			SELECT a.*,l.name,l.description,l.content FROM article AS a
			LEFT JOIN article_lang AS l ON a.id=l.field_id
			WHERE a.active=1 AND a.category_id IN ($category) AND l.lang=$lang
			";
		
		if($future==1){
			$sql .= " AND a.future=1";
		}
		$sql .= " ORDER BY a.future DESC, a.order_by ASC, a.id DESC LIMIT $limit";
		
		$list = $this->get_articles($sql);
		return $list;
	}
	/*Hàm láy quảng cáo Google Adsense*/
	public function gen_adsense_by_position($position, $limit=10, $future=0){
		global $lang;
		$category = $this->gen_id_by_position('gallery_category', $position);
		$str_cate = $this->get_arr_id('gallery_category', $category);
		
		$sql = "
			SELECT a.*, l.position, l.type FROM gallery AS a
			LEFT JOIN gallery_category AS l ON a.category_id=l.id
			WHERE a.active=1 AND l.type=1 AND a.category_id IN ($category) ";
		
		if($future==1){
			$sql .= " AND a.future=1";
		}
		$sql .= " ORDER BY a.future DESC, a.order_by ASC, a.id DESC LIMIT $limit";
		
		$list = array();
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			
			$list[] = $item;
		}
		return $list;
		}
	
	
	/* Lay hinh anh theo position album */
	public function gen_gallery_by_position($position, $limit, $future=NULL){
		global $lang;
		$category = $this->gen_id_by_position('gallery_category', $position);
		
		$list = array();
		$list_sql = "SELECT * FROM gallery WHERE active=1 AND category_id IN ($category) AND lang IN (0,$lang)";
		if($future != NULL){
			$list_sql .= " AND future=$future";
		}
		$list_sql .= " ORDER BY future DESC, order_by ASC, id DESC LIMIT $limit";
		$list_query = $this->query($list_sql);
		while ($item = $this->fetch_array($list_query)){
			$item['img'] = DOMAIN . GALLERY_UPLOAD . $item['image'];
			$type = explode('.', $item['image']);
			$item['alt'] = $this->str_convert($item['name']) . "." . $type[count($type)-1];
			$list[] = $item;
		}
		return $list;
	}
	
	/* Lay danh sach video */
	function gen_video($position=NULL, $limit=10){
		$list = array();
		$sql = "SELECT name,code FROM video WHERE active=1 AND code IS NOT NULL AND name IS NOT NULL";
		if($position != NULL){
			$sql .= " AND position=$position";
		}
		$sql .= " ORDER BY order_by ASC, id DESC";
		$sql .= " LIMIT $limit";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item['img'] = "http://i.ytimg.com/vi/" . $item['code'] . "/mqdefault.jpg";
			$item['embed'] = "http://www.youtube.com/embed/" . $item['code'];
			$list[] = $item;
		}
		return $list;
	}
	
	/* --------------------- */
	# Lay danh sach san pham
	function get_products($sql=NULL, $limit=20, $paging=0){
		global $conf_product_type;
		if($sql==NULL){
			$sql = "SELECT id,name,image,price,promotions,category_id FROM product ORDER BY order_by ASC";
		}
		if($paging==0){
			$sql .= " LIMIT $limit";
		}
		else {
			$sql = $this->pagination($sql, $limit);
		}
		
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$dir = PRODUCT_UPLOAD ;
			$item['img'] = $this->get_image($dir, $item["image"]);
			$item['alt'] = $this->str_convert($item['name']) . ".jpg";
			$item['type'] = $conf_product_type[$item['type']];
			$item['price_sale'] = $item["promotions"]==0 ? $item['price'] : $item['promotions'];
			$item['price_sale'] = $item['price_sale']==0 ? "Liên hệ" : number_format($item['price_sale']) . " đ / " . $item['type'];
			$item['price'] = $item['price']==0 ? "Liên hệ" : number_format($item['price']) . " đ";
			$item['link'] = ALIAS_PRODUCT . $item['id'] . "/" . $item['category_id'] . "/" . $this->str_convert($item['name']) . ".html";
			//$item["s_description"] = $this->str_short($item["description"], 160);
			//$item['category'] = $this->get_field_lang("product_category", $item['category_id']);
			$result[] = $item;
		}
		return $result;
	}
	
	
	
	function get_articles($sql){
		$list = array();
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item['img'] = $this->get_image(ARTICLE_UPLOAD, $item['image']);
			$item['alt'] = $this->str_convert($item['name']) . ".jpg";
			$item['time'] = gmdate("d/m/Y", strtotime($item['created'])+7*3600);
			$item['s_description'] = $this->str_short($item['description'], 360);
			$item['link'] = ALIAS_ARTICLE . $item['id'] . "/" . $item['category_id'] . "/" . $this->str_convert($item['name']) . ".html";
			$item['alias'] = $item['link'];
			$list[] = $item;
		}
		return $list;
	}
	
	
	/*
	 * Hàm lấy danh sách sản phẩm
	 */
	function get_list_product($limit=50, $field=NULL, $where=NULL, $order=NULL){
		global $lang;
		
		$sql = "SELECT a.id,a.name,a.image,a.price,a.promotions,a.page_id,";
		
		if($field != NULL){
			$arr_field = explode(",", $field);
			foreach ($arr_field as $k=>$item){
				$arr_field[$k] = "a." . $item;
			}
			$field = implode(",", $arr_field);
			$sql .= $field . ",";
		}
		$sql .= "lg.name AS category , pg.name AS page
				FROM product AS a
				LEFT JOIN product_category_lang AS lg ON a.category_id=lg.field_id
				LEFT JOIN tbl_page AS pg ON a.page_id=pg.id
				WHERE a.active=1 AND lg.lang=$lang
				";
		if($where != NULL){
			$arr_where = explode(";", $where);
			foreach ($arr_where as $k=>$item){
				$arr_where[$k] = "AND a." . $item;
			}
			$where = implode(" ", $arr_where);
			$sql .= $where;
		}
		if($order != NULL){
			$arr_order = explode(",", $order);
			foreach ($arr_order as $k=>$item){
				$arr_order[$k] = "a." . $item;
			}
			$order = implode(",", $arr_order);
			$sql .= " ORDER BY " . $order;
		}
		
		if(is_array($limit)){
			$sql = $this->pagination($sql, $limit[0]);
		}
		else {
			$sql .= " LIMIT $limit";
		}
		
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$dir = PRODUCT_UPLOAD . $item['id'] . "/";
			$item['link'] = ALIAS_PRODUCT_VIEW . $this->str_convert($item['name']) . "-" . $item['id'] . ".html";
			$item['image'] = $this->get_image($dir, $item['image'], 2);
			$item['price_sale'] = $item["promotions"]==0 ? number_format($item['price']) . " đ" : number_format($item['promotions']) . " đ";
			$item['price'] = number_format($item['price']) . " đ";
			$result[] = $item;
		}
		return $result;
	}
	
	
	
	/* Lấy danh mục sản phẩm */
	function get_product_category($id, $active=0){
		global $lang;
		$sql = "SELECT a.id, lang.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lang ON lang.field_id=a.id
				WHERE a.id IN ($id) AND lang.lang=$lang
				";
		$query = $this->query($sql);
		$option = "";
		while ($item = $this->fetch_array($query)){
			$option .= "<optgroup label='" .$item['name']. "'>";
			$option .= $this->get_select_from_table("product_category", 1, $active, $item['id']);
			$option .= "</optgroup>";
		}
		return $option;
	}
	

	

	/*
	 * Lấy danh mục menu cho tin rao vặt, sản phẩm
	*/
	function get_menu_category($id, $alias=ALIAS_PRODUCT_LIST){
		global $lang, $smarty;
		
		$sql = "SELECT a.id,a.parent_id,lg.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE a.active=1 AND lg.lang=$lang AND a.id=$id
				";
		$query = $this->query($sql);
		$result = "";
		
		if($id==0){
			$result .= "<li>";
			$result .= "<a href='javascript:void(0)'>Toàn bộ danh mục</a>";
			$result .= $this->get_menu_category_content(0, $alias);
			$result .= "</li>";
		}
		
		while ($item = $this->fetch_array($query)){
			if ($item['parent_id'] != 0) {
				$result .= $this->get_menu_category($item['parent_id'], $alias);
			}
			if($id==0 || $item['parent_id']==0){
				$result .= "<li>";
				$result .= "<a href='javascript:void(0)'>Toàn bộ danh mục</a>";
				$result .= $this->get_menu_category_content(0, $alias);
				$result .= "</li>";
			}
			$link = $alias . $this->str_convert($item['name']) . "-" . $item['id'] . ".html";
			$result .= "<li>";
			$result .= "<a href='$link'>" . $item['name'] . "</a>";
			$result .= $this->get_menu_category_content($item['id'], $alias);
			$result .= "</li>";
		}
		return $result;
	}
	
	function get_menu_category_content($parent, $alias=ALIAS_PRODUCT_LIST){
		global $lang, $smarty;
		$sql = "SELECT a.id,a.parent_id,lg.name AS cate_name FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE a.active=1 AND lg.lang=$lang AND a.parent_id=$parent
				ORDER BY a.order_by ASC,lg.name ASC
				";
	
		$query = $this->query($sql);
		$number = $this->num_rows($query);
		$result = "";
		if($number > 0){
			$result .= "<ul>";
			while ($item = $this->fetch_array($query)){
				$link = $alias . $this->str_convert($item['name']) . "-" . $item['id'] . ".html";
				$result .= "<li>";
				$result .= "<a href='$link'>" . $item['name'] . "</a>";
				$result .= "</li>";
			}
			$result .= "</ul>";
		}
		return $result;
	}
	
	function get_site_map($table, $id, $alias = ALIAS_PRODUCT, $str=NULL){
		global $lang;
		$table_lang = $table . "_lang";
		$sql = "SELECT a.id,a.parent_id,lg.name FROM $table AS a
				LEFT JOIN $table_lang AS lg ON a.id=lg.field_id
				WHERE a.id=$id AND lg.lang=$lang
				LIMIT 1
				";
		$result = $this->find_one($sql);
		$link = $alias . $id . "/" . $this->str_convert($result['name']) . ".html";
		if(!$result){
			return $str;
		}
		$str = " &nbsp&nbsp>&nbsp&nbsp " . "<a href='$link'>" . $result['name'] . "</a>" . $str;
		if($result['parent_id'] != 0){
			$str = self::get_site_map($table, $result['parent_id'], $alias, $str);
		}
		return $str;
	}
	
	
	
	/* --------------------------- */
	
	function check_login(){
		$id = isset($_SESSION[LOGIN_MEMBER]) ? $_SESSION[LOGIN_MEMBER] : 0;
		intval($id);
		$result = 0;
		if($id != 0){
			$check = $this->check_exist("SELECT id FROM tbl_member WHERE id=$id AND active=1");
			if($check){
				$result = $id;
			}
			else {
				$this->redirect_script(DOMAIN . "?mod=member&site=logout");
			}
		}
		return $result;
	}
	
	
}