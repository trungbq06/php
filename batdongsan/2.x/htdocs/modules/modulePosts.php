<?php

class Posts extends Generals{
	
	
	function index(){
		$this->general();
		global $lang, $smarty;
		
		$result = array();
		$sql = "SELECT a.id,lang.name, count(posts.id) AS number FROM product_category AS a
				LEFT JOIN product_category_lang AS lang ON lang.field_id=a.id
				LEFT JOIN tbl_posts AS posts ON a.id=posts.category_id
				WHERE a.active=1 AND lang.lang=$lang AND a.parent_id=0
				GROUP BY a.id
				HAVING count(posts.id) > 0
				";
		
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$item['child'] = array();
			$item["link"] = ALIAS_POSTS_LIST . $this->str_convert($item["name"]) . "-" . $item["id"] . ".html";
			
			$posts_sql = "SELECT a.id,a.name,a.member_id,a.created,a.view,a.price, local.name AS local FROM tbl_posts AS a
					LEFT JOIN tbl_local AS local ON a.local_province=local.id
					WHERE a.active=1 AND a.category_id=".$item['id'];
			$posts_sql .= " ORDER BY a.future DESC, a.id DESC LIMIT 5";
			$posts_query = $this->query($posts_sql);
			$posts = array();
			while ($posts_item = $this->fetch_array($posts_query)){
				$dir = MEMBER_UPLOAD . $posts_item['member_id'] . "/posts/" . $posts_item['id'] . "/";
				$posts_item['img'] = $this->get_img($dir);
				$posts_item['price'] = $posts_item['price']=="" ? "Thỏa thuận" : $posts_item['price'];
				$posts_item['created'] = gmdate("H:i d/m", strtotime($posts_item['created'])+7*3600);
				$posts_item['link'] = ALIAS_POSTS_VIEW . $this->str_convert($posts_item["name"]) . "-" . $posts_item["id"] . ".html";
				$posts[] = $posts_item;
			}
			$item['posts'] = $posts;
			$result[] = $item;
		}
		$smarty->assign("result",$result);
		
		$smarty->display("wapfix.tpl");
	}
	
	
	
	function lists(){
		$this->general();
		global $lang, $conf_product_type, $smarty;
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$parent_id = $this->get_parent_id("product_category", $id);
		
		$result = array();
		$sql = "SELECT a.id,a.name,a.created,a.view,a.member_id,a.price,a.date_active,a.image,member_name,
				cate.name AS category, local.name AS local FROM tbl_posts AS a
				LEFT JOIN product_category_lang AS cate ON a.category_detail=cate.field_id
				LEFT JOIN tbl_local AS local ON a.local_province=local.id
				WHERE a.active=1 AND cate.lang=$lang";
		$str_cate = $this->get_arr_id('product_category', $id);
		$sql .= " AND category_detail IN ($str_cate)";

		# Xử lý tìm kiếm
		$search = isset($_SESSION['search_posts']) ? $_SESSION['search_posts'] : array(
			"province" => 0, "district" => 0, "ward" => 0, "street" => 0
		);
		if($search['province'] != 0)
			$sql .= " AND local_province=".$search['province'];
		if($search['district'] != 0)
			$sql .= " AND local_district=".$search['district'];
		if($search['ward'] != 0)
			$sql .= " AND local_ward=".$search['ward'];
		if($search['street'] != 0)
			$sql .= " AND local_street=".$search['street'];
		
		
		$sql .= " ORDER BY id DESC";
		$sql = $this->pagination($sql, 20);
		
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$dir = MEMBER_UPLOAD . $item['member_id'] . "/posts/" . $item['id'] . "/";
			$item['time'] = $this->time_posts($item['date_active']);
			$item["img"] = $this->get_image($dir, $item['image'], 2);
			$item["link"] = ALIAS_POSTS_VIEW . $this->str_convert($item["name"]) . "-" . $item["id"] . ".html";
			$item["created"] = gmdate("d/m/Y", $item["date_active"]);
			$item['price'] = $item['price']=="" ? "Thỏa thuận" : $item['price'];
			$result[] = $item;
		}
		$smarty->assign("result", $result);
		
		# Lấy ra các danh mục menu
		$category = $this->get_menu_category($id, ALIAS_POSTS_LIST);
		$smarty->assign('category', $category);
		
		$sub_cate = $this->get_list("product_category", $parent_id, ALIAS_POSTS_LIST);
		$smarty->assign('sub_cate', $sub_cate);

		# lấy ra danh sách tin cùng loại
		$other = array();
		$other_query = $this->query("SELECT id,name FROM tbl_posts WHERE id <> $id AND active=1 ORDER BY future DESC,id DESC LIMIT 6");
		while ($item = $this->fetch_array($other_query)){
			$item["link"] = ALIAS_POSTS_VIEW . $this->str_convert($item["name"]) . "-" . $item["id"] . ".html";
			$other[] = $item;
		}
		$smarty->assign("other", $other);

		$search_item = isset($_SESSION['search_item']) ? $_SESSION['search_item'] : array();
		
		$select['province'] = $this->get_select_from_table("tbl_local", 0, $search['province']);
		if($search['province'] != 0)
			$select['district'] = $this->get_select_from_table("tbl_local", 0, $search['district'], $search['province']);
		if($search['district'] != 0)
			$select['ward'] = $this->get_select_from_table("tbl_local", 0, $search['ward'], $search['district']);
		if($search['ward'] != 0)
			$select['street'] = $this->get_select_from_table("tbl_local", 0, $search['street'], $search['ward']);
		$smarty->assign("select", $select);

		
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
		$seo['title'] = $cate['name'];
		$seo['keyword'] = $cate['name'];
		$seo['description'] = $description;
		$smarty->assign('seo', $seo);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	function view(){
		$this->general();
		global $lang, $conf_product_type, $smarty;
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		
		$sql = "SELECT a.id,a.name,a.content,a.view,a.created,a.member_name,a.member_phone,a.member_email,a.member_id,
				a.category_id,a.category_type,a.category_detail,a.price,a.type,a.date_active,a.date_finish,
				a.local_province,a.local_district,a.local_ward,a.local_street,
				province.name AS province, district.name AS district,
				type.name AS cate_type,
				cate.name AS category
				FROM tbl_posts AS a
				LEFT JOIN tbl_local AS province ON a.local_province=province.id
				LEFT JOIN tbl_local AS district ON a.local_district=district.id
				LEFT JOIN product_category_type AS type ON a.category_type=type.id
				LEFT JOIN product_category_lang AS cate ON a.category_detail=cate.field_id
				WHERE cate.lang=$lang AND a.id=$id
				";
		$value = $this->find_one($sql);
		$value['date_active'] = gmdate("H:i d/m/Y", $value["date_active"] +3600*7);
		$value['date_finish'] = gmdate("H:i d/m/Y", $value["date_finish"] +3600*7);
		$value['price'] = $value['price']=="" ? "Thỏa thuận" : $value['price'];
		$value['type'] = $conf_product_type[$value['type']];
		$smarty->assign("value", $value);

		$category = $this->get_menu_category($value['category_detail'], ALIAS_POSTS_LIST);
		$smarty->assign('category', $category);
		
		# Lấy ảnh của rao vặt
		$dir = MEMBER_UPLOAD . $value['member_id'] . "/posts/" . $id . "/";
		$images = $this->get_image($dir, NULL, 1);
		$smarty->assign('images', $images);
		
		$other = array();
		$other_query = $this->query("SELECT id,name FROM tbl_posts WHERE id <> $id AND active=1 ORDER BY future DESC,id DESC LIMIT 6");
		while ($item = $this->fetch_array($other_query)){
			$item["link"] = ALIAS_POSTS_VIEW . $this->str_convert($item["name"]) . "-" . $item["id"] . ".html";
			$other[] = $item;
		}
		$smarty->assign("other", $other);
		
		$this->get_seo("tbl_posts", $id);
		
		$this->query("UPDATE tbl_posts SET view=view+1 WHERE id=$id");

		$map = $this->MapIpLocal($value['local_province'], $value['local_district'], $value['local_ward'], $value['local_street']);
		$smarty->assign("map", $map);
		
		$seo['title'] = $value['name'];
		$seo['keyword'] = $value['name'];
		$seo['description'] = $value['description'];
		$smarty->assign('seo', $seo);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	
	function add(){
		$this->general();
		global $conf_product_type, $smarty;
		$member_id = $this->check_login();
		if($member_id==0){
			$this->redirect_script("?mod=member&site=login");
			exit();
		}
		$member = $this->find_one("SELECT name,email,phone FROM tbl_member WHERE id=$member_id");
		$smarty->assign('account', $member);
	
		$select['type'] = $this->get_select_from_array($conf_product_type);
		$select["category"] = $this->get_select_from_table("product_category", 0);
		$select["province"] = $this->get_select_from_table("tbl_local", 0);
		$smarty->assign("select", $select);
	
		if(isset($_POST['FrmSubmit'])){
			$data['name'] = stripslashes($_POST['name']);
			$data['content'] = stripslashes($_POST['content']);
	
			$captcha = $_SESSION["vshops_capcha"];
			if($captcha != $_POST["captcha"]){
				$this->alert("Mã kiểm tra không đúng !");
				$this->redirect_back();
			}
			else if($data['name'] == "" || $data['content'] == ""){
				$this->alert("Missing data !");
				$this->redirect_back();
			}
			else{
	
				$data['type'] = $_POST['type'];
				$data['price'] = isset($_POST['price']) ? $_POST['price'] : NULL;
				
				$data['category_id'] = $_POST['category_id'];
				$data['category_type'] = $_POST['category_type'];
				$data['category_detail'] = $_POST['category_detail'];
	
				$data['local_province'] = $_POST['local_province'];
				$data['local_district'] = $_POST['local_district'];
				$data['local_ward'] = $_POST['local_ward'];
				$data['local_street'] = $_POST['local_street'];
	
				$data['member_id'] = $member_id;
				$data['member_name'] = $_POST['member_name'];
				$data['member_email'] = $_POST['member_email'];
				$data['member_phone'] = $_POST['member_phone'];
				$data['member_yahoo'] = $_POST['member_yahoo'];
	
				$data['created'] = date("Y/m/d H:i:s");
				$data['date_finish'] = date("Y/m/d H:i:s");
				$data['view'] = 1;
				$data['active'] = 1;
	
				if($id = $this->query_insert('tbl_posts', $data)){
					$this->alert("Successfull !");
					$this->redirect_script(DOMAIN . "?mod=posts&site=images&id=" . $id);
				}
				else{
					$this->alert("Error !");
				}
			}
		}
		$smarty->display("wapfix.tpl");
	}
	
	
	function manager(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$id = $member["id"];
	
		$active = isset($_GET["active"]) ? $_GET['active'] : 0;
		$now = strtotime(date("Y/m/d H:i:s"));
		$smarty->assign('active', $active);
		
		
		$result = array();
		$sql = "SELECT a.id,a.name,a.created,a.view, cate.name AS category,type.name AS type FROM tbl_posts AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				LEFT JOIN product_category_type AS type ON a.category_type=type.id
				WHERE a.member_id=$id
				";
		if($active==1){
			$sql .= " AND a.date_finish > $now";
		}
		else {
			$sql .= " AND a.date_finish <= $now";
		}
		$sql .= " ORDER BY a.id DESC";
		$sql = $this->pagination($sql, 20);
		$result_query = $this->query($sql);
		while ($item = $this->fetch_array($result_query)){
			$item["link"] = ALIAS_POSTS_VIEW . $this->str_convert($item["name"]) . "-" . $item["id"] . ".html";
			$item["link_edit"] = DOMAIN . "?mod=posts&site=edit&id=" . $item["id"];
			$dir = MEMBER_UPLOAD . $id . "/posts/" . $item['id'] . "/";
			$item['images'] = $this->get_image($dir, NULL, 2);
			$item['created'] = gmdate("H:i d/m/y", $item['created'] +7*3600);
			$result[] = $item;
		}
		$smarty->assign("result", $result);
	
		$smarty->display("account.tpl");
	}
	
	
	function active(){
		$this->general();
		global $smarty, $conf_posts_price_active, $conf_posts_price_gold;
		$member = $this->get_member("gold");
		$member_id = $member["id"];
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		
		$select['price'] = $this->get_select_from_array($conf_posts_price_active);
		$smarty->assign('select', $select);
		
		$result = $this->find_one("SELECT * FROM tbl_posts WHERE id=$id AND member_id=$member_id");
		$dir = MEMBER_UPLOAD . $member_id . "/posts/" . $id . "/";
		$result['image'] = $this->get_image($dir, $result['image'], 2);
		$result['created'] = gmdate("H:i d/m/Y", $result['created']+7*3600);
		$result['finished'] = gmdate("H:i d/m/Y", $result['date_finish']+7*3600);
		$result['actived'] = gmdate("H:i d/m/Y", $result['date_active']+7*3600);
		
		$today = date("Y/m/d H:i:s");
		$today = strtotime($today);
		$date_finish = $result['date_finish'];
		
		$active = 0;
		if($date_finish > $today){
			$active = 1;
		}
		
		$smarty->assign('active', $active);
		
		$gold = $member['gold'];
		if(isset($_POST['active'])){
			$price = $_POST['price'];
			if($gold < $price){
				$this->alert("Tài khoản của bạn không đủ $price gold!");
			}
			else {
				$day = $conf_posts_price_gold[$price];
				$date = strtotime("+$day day", $today);
				$this->query("UPDATE tbl_posts set date_finish=$date, date_active=$today WHERE id=$id");
				$gold = $gold - $price;
				$this->query("UPDATE tbl_member set gold=$gold WHERE id=$member_id");
				$this->redirect_script(THIS_LINK);
			}
		}
		if(isset($_POST['refresh'])){
			$this->query("UPDATE tbl_posts set date_active=$today WHERE id=$id");
			$gold = $gold - 5;
			$this->query("UPDATE tbl_member set gold=$gold WHERE id=$member_id");
			$this->redirect_script(THIS_LINK);
		}
		
		$smarty->assign('result', $result);
		$smarty->display("account.tpl");
	}
	
	
	function delete(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$member_id = $member["id"];
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		$check = $this->find_one("SELECT id,name FROM tbl_posts WHERE id=$id AND member_id=$member_id");
		if(!$check){
			$this->redirect_back();
			exit();
		}
		$link = "?mod=posts&site=manager";
		$smarty->assign("posts", $check);
		if(isset($_POST['submit'])){
			$this->query("DELETE FROM tbl_posts WHERE id=$id");
			$this->dir_delete(MEMBER_UPLOAD . $member_id . "/posts/" . $id);
			$this->redirect_script($link);
		}
		if(isset($_POST['cancel'])){
			$this->redirect_script($link);
		}
		$smarty->display("account.tpl");
	}
	
	
	
	function images(){
		$this->general();
		global $smarty;
		$member = $this->get_member();
		$member_id = $member["id"];
	
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = $id == NULL || $id == "" ? 0 : $id;
		if($id == 0){
			$this->redirect_back();
		}
	
		$dir_member = MEMBER_UPLOAD . $member_id . "/";
		$dir_posts = $dir_member . "posts/";
		$dir = $dir_posts . $id . "/";
		$this->dir_check($dir_member);
		$this->dir_check($dir_posts);
		$this->dir_check($dir);
	
		$images = $this->get_image($dir, NULL, 1);
		$smarty->assign('images', $images);
	
		$avatar = isset($_SESSION['vshops_cache_image']) ? $_SESSION['vshops_cache_image'] : NULL;
		if(!is_file($avatar)){// Check tồn tại session upload
			$avatar = NULL;
		}
		$smarty->assign("avatar", $avatar);
	
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
	
	

	function edit(){
		$this->general();
		global $conf_product_type, $conf_price_type, $smarty;
		$member = $this->get_member();
		$member_id = $member["id"];
			
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$value = $this->find_by_id("tbl_posts", $id);
		$smarty->assign("value", $value);
	
		$price_type = $value['price']=="" ? 0 : 1;
	
		$select['price_type'] = $this->get_select_from_array($conf_price_type, $price_type);
		$select['type'] = $this->get_select_from_array($conf_product_type, $value['type']);
		$select["category"] = $this->get_select_from_table("product_category", 0, $value['category_id']);
		$select["category_detail"] = $this->get_select_from_table("product_category", 1, $value['category_detail'], $value['category_id']);
		$select["category_type"] = $this->get_select_from_table("product_category_type", 0, $value['category_type'], $value['category_id']);
	
		$select["province"] = $this->get_select_from_table("tbl_local", 0, $value['local_province']);
		$select["district"] = $this->get_select_from_table("tbl_local", 0, $value['local_district'], $value['local_province']);
	
		$smarty->assign("select", $select);
	
	
		if(isset($_POST['FrmSubmit'])){
			$data['name'] = stripslashes($_POST['name']);
			$data['content'] = stripslashes($_POST['content']);
			if($data['name'] == "" || $data['content'] == ""){
				$this->alert("Missing data !");
				$this->redirect_back();
			}
			else{
	
				$data['type'] = $_POST['type'];
				$data['price'] = isset($_POST['price']) ? $_POST['price'] : NULL;
	
				$data['category_id'] = $_POST['category_id'];
				$data['category_type'] = $_POST['category_type'];
				$data['category_detail'] = $_POST['category_detail'];
	
				$data['local_province'] = $_POST['local_province'];
				$data['local_district'] = $_POST['local_district'];
				$data['local_ward'] = $_POST['local_ward'];
				$data['local_street'] = $_POST['local_street'];
	
				$data['member_name'] = $_POST['member_name'];
				$data['member_email'] = $_POST['member_email'];
				$data['member_phone'] = $_POST['member_phone'];
				$data['member_yahoo'] = $_POST['member_yahoo'];
	
				$where = "id=$id";
	
				if($this->query_update('tbl_posts', $data, $where)){
					$this->alert("Successfull !");
					$this->redirect_script(DOMAIN . "?mod=posts&site=manager");
				}
				else{
					$this->alert("Error !");
				}
			}
		}
	
		$smarty->display("account.tpl");
	}
	
	
}