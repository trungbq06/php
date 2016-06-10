<?php
class Page extends Generals{
	/*
	 * Thêm mới page
	*/
	function add(){
		$this->general();
		global $smarty;
		$member_id = $this->check_login();
		if($member_id==0){
			$this->redirect_script("?mod=member&site=login");
		}
	
		$select['category'] = $this->get_select_from_table("product_category", 0);;
		$select['local'] = $this->get_select_from_table('tbl_local', 0);
		$smarty->assign('select', $select);
	
		if(isset($_POST['FrmSubmit'])){
			$text = "<p>Nội dung đang cập nhật...</p>";
			$data['name'] = stripslashes($_POST['name']);
			$data['category'] = $_POST['category'];
			$data['local_id'] = $_POST['local_id'];
			$data['address'] = $_POST['address'];
			$data['hotline'] = $_POST['hotline'];
			
			if($data['name'] == "" || $data['category'] == ""){
				$this->alert("Missing data !");
				$this->redirect_back();
			}
			else{
				$data['created'] = $this->my_time()->time_now();
				$data['member_id'] = $member_id;
				$data['active'] = 1;
				if($id = $this->query_insert('tbl_page', $data)){
					$this->alert("Successfull !");
					$this->redirect_script("?mod=helps&site=set_admin_page&id=$id");
				}
				else{
					$this->alert("Error !");
				}
			}
		}
	
		
		# Danh sách shop nổi bật
		$sql = "SELECT a.id,a.name,a.image,count(p.id) AS products,local.name AS local FROM tbl_page AS a
				LEFT JOIN product AS p ON a.id=p.page_id
				LEFT JOIN tbl_local AS local ON a.local_id=local.id
				WHERE a.active=1
				GROUP BY a.id
				ORDER BY a.future DESC
				";
		
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$item['link'] = DOMAIN . ALIAS_SHOP . $item["id"] . "/";
			$item["img"] = $this->get_img(PAGE_UPLOAD . $item['id'] . "/", $item["image"]);
			$result[] = $item;
		}
		$smarty->assign("result", $result);
		
		
		$smarty->display("wapfix.tpl");
	}
	
	
	
	/*
	 * Danh sách page
	 * Tìm kiếm page
	 * 
	 */
	function index(){
		$this->general();
		global $lang, $smarty;
		
		$sql = "SELECT a.id,lg.name,count(pg.id) AS pages FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				LEFT JOIN tbl_page AS pg ON a.id IN (pg.category)
				WHERE a.parent_id=0 AND a.active=1 AND lg.lang=$lang
				GROUP BY a.id
				HAVING count(pg.id)>0
				ORDER BY count(pg.id) DESC, a.order_by ASC, a.id DESC
				";
		$query = $this->query($sql);
		
		$result = array();
		while ($item = $this->fetch_array($query)){
			$id = $item['id'];
			$page_sql = "SELECT id,name,image FROM tbl_page WHERE active=1 AND $id IN (category) ORDER BY future DESC";
			$page_query = $this->query($page_sql);
			$page = array();
			while ($item_page = $this->fetch_array($page_query)){
				$item_page['link'] = DOMAIN . ALIAS_SHOP . $item_page["id"] . "/";
				$item_page["img"] = $this->get_img(PAGE_UPLOAD . $item_page['id'] . "/", $item_page["image"]);
				$page[] = $item_page;
			}
			$item['link'] = "?mod=page&site=pages&id=" . $id;
			$item["page"] = $page;
			$result[] = $item;
		}
		
		$smarty->assign("result", $result);
		
		
		var_dump($sql);
		
		$smarty->display("wapfix.tpl");
	}
	
	
	function pages(){
		$this->general();
		global $lang, $smarty;
		
		# Danh sách shop
		$sql = "SELECT a.id,a.name,a.image,a.address,a.hotline,count(p.id) AS products FROM tbl_page AS a
				LEFT JOIN product AS p ON a.id=p.page_id
				WHERE a.active=1";
		$sql .= " GROUP BY a.id ORDER BY a.future DESC";
		
		$query = $this->query($sql);
		$result = array();
		while ($item = $this->fetch_array($query)){
			$item['link'] = DOMAIN . "cuahang?id=" . $item["id"];
			$result[] = $item;
		}
		$smarty->assign("result", $result);
		
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$page = $this->find_one("SELECT * FROM tbl_page WHERE active=1 ORDER BY id DESC LIMIT 1");
		if($id != 0){
			$page = $this->find_one("SELECT * FROM tbl_page WHERE id=$id");
		}
		$smarty->assign('page', $page);
		
		$smarty->display("wapfix.tpl");
	}
	
	
	/*
	 * Chi tiết page
	 */
	function home(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		
		$hot = $this->get_list_product(8, NULL, "page_id=$id", "future DESC,view DESC");
		$smarty->assign("hot", $hot);

		$new = $this->get_list_product(8, NULL, "page_id=$id", "id DESC");
		$smarty->assign("new", $new);
		
		$smarty->display("page.tpl");
	}
	
	

	function article(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		
		$p_content = $page['infomation'];
		
		$smarty->assign("p_content", $p_content);
	
		$smarty->display("page.tpl");
	}

	
	function infomation(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		$p_content = $page['infomation'];
		$smarty->assign("p_content", $p_content);
	
		$smarty->display("page.tpl");
	}
	

	function map(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		$map = $page['map'];
		$smarty->assign("map", $map);
	
		$smarty->display("page.tpl");
	}
	
	
	function products(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		
		$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : 0;
		
		$arr_id = $this->get_arr_id("product_category", $cate_id);
		
		$product = $this->get_list_product(12, NULL, "page_id=$id;category_id IN ($arr_id)");
		$smarty->assign("product", $product);
		
		$smarty->display("page.tpl");
	}
	

	function promotions(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		
		$product = $this->get_list_product(12, NULL, "page_id=$id;promotions>0");
		$smarty->assign("product", $product);

		$smarty->display("page.tpl");
	}
	
	function contact(){
		$this->general();
		global $smarty;
		$page = $this->get_page_profile_content();
		$id = $page['id'];
		
		$page = $this->find_one("SELECT contact FROM tbl_page WHERE id=$id");
		$p_content = $page['contact'];
		$smarty->assign("p_content", $p_content);

		
		if(isset($_POST["FrmSubmit"])){
				
			$captcha = $_SESSION["vshops_capcha"];
			if($captcha != $_POST["captcha"]){
				$this->alert("Mã kiểm tra không đúng !");
				$this->redirect_back();
			}
			else {
				$data["name"] = $_POST["name"];
				$data["email"] = $_POST["email"];
				$data["address"] = $_POST["address"];
				$data["phone"] = $_POST["phone"];
				$data["title"] = $_POST["company"];
				$data["content"] = $_POST["content"];
				$data["page_id"] = $id;
				$data["created"] = $this->my_time()->time_now();
				if($data["name"] != "" && $data["email"] != "" && $data["content"] != ""){
					if($this->query_insert("contact", $data)){
						$this->alert("Gửi liên hệ thành công !");
						$this->redirect_script(THIS_LINK);
					}
					else{
						$this->alert("error");
					}
				}
				else{
					$this->alert("Please enter data !");
					$this->redirect_back();
				}
			}
		}
		
		$smarty->display("page.tpl");
	}
	
	

	function get_bar_product($id){
		global $lang;
		$bar = "";
		$sql = "SELECT a.id,lang.name FROM product_category AS a 
				LEFT JOIN product_category_lang AS lang ON a.id=lang.field_id
				WHERE a.id IN ($id) AND lang.lang=$lang
				";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$bar .= "<div class='mar bor'>";
			$bar .= "<h3 class='pad bg gray'>";
			$bar .= $item['name'];
			$bar .= "</h3>";
			$bar .= "<div class='pad'>";
			$bar .= $this->get_bar_content($item['id']);
			$bar .= "</div>";
			$bar .= "</div>";
		}
		return $bar;
	}
	function get_bar_content($id){
		global $lang;
		
		$page_id = isset($_GET['id']) ? $_GET['id'] : 0;
		$page_id = intval($page_id);
		
		$sql = "SELECT a.id,lang.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lang ON a.id=lang.field_id
				WHERE a.parent_id=$id AND lang.lang=$lang
				GROUP BY a.id
				";
		
		$query = $this->query($sql);
		$result = "";
		$result .= "<ul class='bar_menu'>";
		while ($item = $this->fetch_array($query)){
			
			$arr_id = $this->get_arr_id("product_category", $item['id']);
			$products = $this->num_rows($this->query("SELECT id FROM product WHERE active=1 AND category_id IN ($arr_id)"));
			
			$link = ALIAS_SHOP . $page_id . "/products?cate_id=" . $item['id'];
			$result .= "<li>";
			$result .= "<a href='$link'>";
			$result .= $item['name'] . " (" . $products . ")";
			$result .= "</a>";
			
			$check = $this->check_exist("SELECT id FROM product_category WHERE active=1 AND parent_id=" . $item['id']);
			if($check){
				$result .= $this->get_bar_content($item['id']);
			}
			
			$result .= "</li>";
		}
		$result .= "</ul>";
		
		return $result;
	}
	
	
	function get_page_profile_content(){
		global $smarty;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		if($id == 0){
			$this->redirect_back();
		}
		
		$shop_domain = ALIAS_SHOP . $id . "/";
		$smarty->assign("shop_domain", $shop_domain);
		
		$page = $this->find_one("SELECT id,name,image,category,hotline,address FROM tbl_page WHERE id=$id");
		$page['img'] = $this->get_image(PAGE_UPLOAD . $id . "/");
		$page['banner'] = $this->get_image(PAGE_UPLOAD . $id . "/banner/", NULL, 2);
		$smarty->assign("page", $page);
		
		$bar_product = $this->get_bar_product($page['category']);
		$smarty->assign("bar_product", $bar_product);
		
		return $page;
	}
}