<?php

class Product extends Generals{
	
	function index(){
		$this->general();
		global $lang, $smarty;
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$id = intval($id);
		$id = $id == NULL || $id == "" ? 1 : $id;
		
		$backcrum = $this->get_backcum('article_category', $id, ALIAS_ARTICLE_LIST);
		$smarty->assign("backcrum", $backcrum);

		$bar = $this->gen_menu_content("product_category", ALIAS_PRODUCT_LIST);
		$smarty->assign("bar", $bar);
		
		$list = array();
		$sql = "SELECT cp.*,lang.name FROM product_category AS cp
				LEFT JOIN product_category_lang AS lang ON cp.id=lang.field_id
				WHERE cp.active=1 AND lang.lang=$lang";
		
		$query = $this->query($sql);
		while($item = $this->fetch_array($query)){
			$item["img"] = $this->my_hand()->get_image(PRODUCT_UPLOAD . "categories/", $item['image']);
			$item["link"] = ALIAS_PRODUCT_LIST . $this->str_convert($item["name"]) . "-" . $item['id'] . ".html";
			$item['alt'] = $this->str_convert($item['name']) . "jpg";
			$list[] = $item;
		}
		$smarty->assign('list', $list);
		
		$category = "Sản phẩm";
		$smarty->assign('category', $category);
		
		$seo['title'] = $category;
		$seo['keyword'] = $category;
		$seo['description'] = $category;
		$smarty->assign('seo', $seo);
		$smarty->display(DEFAULT_LAYOUT);
	}
	

	function product_new(){
		$this->general();
		global $lang, $smarty;
	
		$product = array();
		$sql = "SELECT a.* FROM product AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				WHERE a.active=1
				ORDER BY a.id DESC
				";
		$product = $this->get_products($sql, 20);
		$smarty->assign('product', $product);
	
		$smarty->assign("hometabs", 2);
		$smarty->display("home.tpl");
	}
	

	
	function product_promotions(){
		$this->general();
		global $lang, $smarty;
	
		$product = array();
		$sql = "SELECT a.* FROM product AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				WHERE a.active=1
				ORDER BY a.view DESC, a.id DESC
				";
		$product = $this->get_products($sql, 20);
		#$product = $this->get_list_product();
		$smarty->assign('product', $product);
	
		$smarty->assign("hometabs", 3);
		$smarty->display("home.tpl");
	}
	
	
	function lists(){
		$this->general();
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		global $trans, $lang, $smarty;
		$str_cate = $this->get_arr_id('product_category', $id);
		
		# Lấy danh sách sản phẩm mới
		$sql = "SELECT * FROM product WHERE active=1 AND category_id IN ($str_cate) ORDER BY future DESC, id DESC";
		$number = $this->num_rows($this->query($sql));
		$smarty->assign('number', $number);		
		$title = $this->get_name_with_parent("product_category", $id);
		$smarty->assign('title', $title);
		
		$cate = $this->find_one("SELECT a.id,lg.name,lg.description FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON lg.field_id=a.id
				WHERE a.id=$id AND lg.lang=$lang
				LIMIT 1
				");
		$description = $cate['description'];
		if($id==0){
			$description = "Sản phẩm, mua bán sản phẩm giá tốt nhất";
		}
		$smarty->assign('cate', $description);
		
		$result = $this->get_products($sql, 24, 1);
		$smarty->assign("product", $result);

		
		# Lấy sản phẩm vip
		$vip_sql = "SELECT id,name,image,price,promotions,page_id FROM product 
					WHERE active=1 AND future=1 AND category_id IN ($str_cate)
					ORDER BY id DESC
					";
		$vip = $this->get_products($vip_sql, 10);
		$smarty->assign('vip', $vip);
		
		$category = $this->get_category_content($id);
		$smarty->assign('category', $category);
		
		$seo['title'] = $cate['name'];
		$seo['keyword'] = $cate['name'];
		$seo['description'] = $description;
		$smarty->assign('seo', $seo);
		$smarty->display("wapfix.tpl");
	}


	function search(){
		$this->general();
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		global $trans, $lang, $smarty;
		
		$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
		$key = isset($_GET['key']) ? $_GET['key'] : "";
		
		$str_cate = $this->get_arr_id('product_category', $cate);
	
		# Lấy danh sách sản phẩm mới
		$sql = "SELECT * FROM product WHERE active=1 AND category_id IN ($str_cate)";
		$sql .= " AND name LIKE '%$key%'";
		$sql .= " ORDER BY future DESC, id DESC";
		
		$number = $this->num_rows($this->query($sql));
		$smarty->assign('number', $number);
		$title = $this->get_name_with_parent("product_category", $id);
		$smarty->assign('title', $title);
	
		$description = "Tìm kiếm sản phẩm";
		$smarty->assign('cate', $description);

		$result = $this->get_products($sql, 24, 1);
		$smarty->assign("result", $result);

		$category = $this->get_category_content($cate);
		//$category = "<a href='./'>Trang chủ</a><a href='#'>Tìm Kiếm</a>";
		$smarty->assign('category', $category);
	
		$seo['title'] = $description;
		$seo['keyword'] = $description;
		$seo['description'] = $description;
		$smarty->assign('seo', $seo);
		$smarty->display("wapfix.tpl");
	}
	
	
	function get_category_content($id){
		$sql = "SELECT a.id,lg.name,lg.description FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE active=1";
		$cate = $this->find_one($sql);
		
		$sub = array();
		$sql2 = "SELECT a.id,lg.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lg ON a.id=lg.field_id
				WHERE a.active=1 AND parent_id=$id
				";
		$query2 = $this->query($sql2);
		while ($item = $this->fetch_array($query2)){
			$item['link'] = ALIAS_PRODUCT . $item['id'] . "/" . $this->str_convert($item['name']) . ".html";
			$sub[] = $item;
		}
		$cate['child'] = $sub;
		$cate['site_map'] = "<a href='./'>Trang chủ</a>" . $this->get_site_map("product_category", $id);
		return $cate;
	}
	
	
	function db_product_view_list($id){ #hàm lưu lại các sản phẩm vừa xem
		$file_name = "./memory.txt";
		$file_content = file_get_contents($file_name);
		$handle_arr = explode(",", $file_content);
		if(in_array($id, $handle_arr)){
			return false;
		}
		if($file_content==""){
			$content = $id;
		}
		else{
			if(count($handle_arr)==4)
				unset($handle_arr[3]);
			$content = $id . "," . implode(',', $handle_arr);
		}
		$file=fopen($file_name, "w");
		$write=fwrite($file, $content);
		fclose($file);
	}
	
	
	function load_product_view_list(){
		$this->general();
		global $smarty;
		$product_id_view = file_get_contents("./memory.txt");
		var_dump($product_id_view);
		$pro_new = $this->get_products("SELECT * FROM product WHERE active=1 AND id IN ($product_id_view) ORDER BY FIELD(id,$product_id_view)", 4);
		$smarty->assign('pro_new', $pro_new);
		$smarty->display("none.tpl");
	}
	
	
	function view(){
		$this->general();
		global $conf_product_warranty, $smarty, $conf_product_type;
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		if($id == 0){
			$this->my_hand()->redirect_back();
			exit();
		}
		
		$this->db_product_view_list($id);
		
		
		$sql = "
				SELECT a.*, lg.name AS category FROM product AS a
				LEFT JOIN product_category_lang AS lg ON lg.field_id=a.category_id
				WHERE a.id=$id
				";
		
		$value = $this->find_one($sql);
		$dir = PRODUCT_UPLOAD ;
		$value['img'] = $this->get_image($dir, $value['image']);
		$value['type'] = $conf_product_type[$value['type']];
		$value['price_sale'] = $value["promotions"]==0 ? number_format($value['price']) : number_format($value['promotions']);
		$value['price_sale'] = $value['price']==0 ? "Liên hệ" : $value['price_sale'] . " đ / " . $value['type'];
		$value['price'] = $value['price']==0 ? "Liên hệ" : number_format($value['price']) . " đ";
		$value['alt'] = $this->str_convert($value['name']) . ".jpg";
		$smarty->assign("value", $value);

		//var_dump($value);die;

		$images = $this->get_image($dir . $id . "/", NULL, 1);
		$smarty->assign("images", $images);
		
		$str_cate = $this->get_arr_id('product_category', $value['category_id']);
		$parent = $this->get_parent_id("product_category", $value['category_id']);
		# Lấy sản phẩm liên quan
		$other_sql = "SELECT * FROM product
				WHERE active=1 AND category_id IN ($str_cate) AND id <> $id
				ORDER BY id DESC
				";
		$other = $this->get_products($other_sql, 4);
		$smarty->assign('max_view', $other);
		
		$category = $this->get_category_content($value["category_id"]);
		$smarty->assign('category', $category);
		
		$page = array();
		$query = $this->query("SELECT id,name,address,hotline FROM tbl_page WHERE active=1 ORDER BY future DESC, order_by ASC LIMIT 4");
		while ($item = $this->fetch_array($query)){
			$item['link'] = "cuahang?id=" . $item['id'];
			$page[] = $item;
		}
		$smarty->assign('page', $page);
		
		$seo['title'] = $value['name'];
		$seo['keyword'] = $value['name'];
		$seo['description'] = $this->str_short($value['description'], 160);
		$smarty->assign('seo', $seo);
		
		$this->query("UPDATE product SET view=view+1 WHERE id=$id");
		$smarty->display("wapfix.tpl");
	}
	
	
	
	/*
	 * Quản lý sản phẩm của page
	*/
	function manager(){
		global $smarty;
		$this->general();
		$page = $this->get_page();
		$id= $page['id'];
	
		$product = $this->get_products("
				SELECT * FROM product
				WHERE page_id=$id
				ORDER BY id DESC
				");
		$smarty->assign("product", $product);

		$smarty->display("account.tpl");
	}


	function add(){
		global $smarty, $conf_product_type;
		$this->general();
		$member_id = $this->check_login();
		$page = $this->get_page();
		$page_id = $page['id'];
	
		$select['category'] = $this->get_product_category($page['category']);
		$select['type'] = $this->get_select_from_array($conf_product_type);
		$smarty->assign("select", $select);
	
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category_id"];
			$data['price'] = $_POST["price"];
			$data['promotions'] = $_POST["promotions"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
				
			$data['order_by'] = 99;
			$data['warranty'] = $_POST["warranty"];
			$data['maker'] = $_POST["maker"];
			$data['future'] = isset($_POST["future"]) ? $_POST["future"] : 0;
			$data['active'] = "1";
				
			$data['page_id'] = $page_id;
				
			$data['created'] = "now()";
			$data['updated'] = "now()";
	
			if($id = $this->query_insert('product', $data)){
				$this->redirect_script(DOMAIN . "?mod=product&site=manager");
			}
			else{
				$this->alert("Lỗi thêm sản phẩm !");
				$this->redirect_back();
			}
		}
		$smarty->display("account.tpl");
	}
	

	function edit(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
		$page = $this->get_page();
		$page_id = $page['id'];
	
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
	
		$result = $this->find_by_id("product", $id);
		$smarty->assign("result", $result);
	
		$category = $this->get_product_category($page['category'], $result['category_id']);
		$smarty->assign("category", $category);
	
		if(isset($_POST['frmSubmit']) && $_POST['frmSubmit'] !=''){
			$data['name'] = stripslashes($_POST["name"]);
			$data['category_id'] = $_POST["category_id"];
			$data['price'] = $_POST["price"];
			$data['promotions'] = $_POST["promotions"];
			$data['description'] = stripslashes($_POST["description"]);
			$data["content"] = stripslashes($_POST["content"]);
	
			$data['code'] = $_POST["code"];
			$data['warranty'] = $_POST["warranty"];
			$data['maker'] = $_POST["maker"];
	
			$data['updated'] = "now()";
				
			$where = "id=$id";
	
			if($id = $this->query_update('product', $data, $where)){
				$this->redirect_script(DOMAIN . "?mod=page_admin&site=product");
			}
			else{
				$this->alert("Lỗi !");
				$this->redirect_back();
			}
		}
		$smarty->display("account.tpl");
	}

	
	function image(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
		$page = $this->get_page();
		$page_id = $page['id'];
	
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
	
		// Lấy ra danh sách ảnh trong thư mục
		$dir_page = $this->dir_check(PAGE_UPLOAD . $page_id . "/");
		$dir_product = $this->dir_check($dir_page . "products/");
		$dir = $this->dir_check($dir_product . $id . "/");
		if(!is_dir($dir)){
			mkdir($dir, 0777);
			chmod($dir, 0777);
		}
		$images = $this->get_img($dir, NULL, 1);
		$smarty->assign('images', $images);
	
		// Upload ảnh
		$avatar = isset($_SESSION['vshops_cache_image']) ? $_SESSION['vshops_cache_image'] : NULL;
		if(!is_file($avatar)){
			$avatar = NULL;
		}
		$smarty->assign("avatar", $avatar);
	
		//Upload ảnh
		$dir_cache = $this->dir_cache_upload($member_id);
		if(isset($_POST['upload'])){
			if(count($images) >= 4){
				$this->alert("Chỉ được thêm tối đa 4 ảnh!");
			}
			else {
				$this->img_upload($dir_cache);
			}
		}
		$this->img_upload_thumbnail($avatar, $dir, 300);
	
		$smarty->display("account.tpl");
	}
	
}