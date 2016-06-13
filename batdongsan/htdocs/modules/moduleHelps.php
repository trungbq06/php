<?php

class Helps extends Generals{
	
	function file_delete(){
		if(isset($_POST['file'])){
			$file = $_POST['file'];
			@unlink($file);
		}
	}
	
	function load_product_hot(){
		$this->general();
		global $smarty;
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$start = ($page*20)-1;
		$product = array();
		$sql = "SELECT a.* FROM product AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				WHERE a.active=1
				ORDER BY a.view DESC
				";
		$product = $this->get_products($sql, "$start,20");
		$smarty->assign('product', $product);
		$smarty->display("none.tpl");
	}

	
	function load_product_new(){
		$this->general();
		global $smarty;
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$start = ($page*20)-1;
		$product = array();
		$sql = "SELECT a.* FROM product AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				WHERE a.active=1
				ORDER BY a.id DESC
				";
		$product = $this->get_products($sql, "$start,20");
		$smarty->assign('product', $product);
		$smarty->display("none.tpl");
	}
	

	function load_product_promotions(){
		$this->general();
		global $smarty;
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$start = ($page*20)-1;
		$product = array();
		$sql = "SELECT a.* FROM product AS a
				LEFT JOIN product_category_lang AS cate ON a.category_id=cate.field_id
				WHERE a.active=1 AND a.promotions>0
				ORDER BY a.order_by ASC, a.id DESC
				";
		$product = $this->get_products($sql, "$start,20");
		$smarty->assign('product', $product);
		$smarty->display("none.tpl");
	}
	
	# Tạo session cho page quản trị 
	function set_admin_page(){
		$member_id = $this->check_login();
		
		if($member_id == 0){
			$this->redirect_script("?mod=member&site=login");
		}
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		
		$check = $this->check_exist("SELECT id FROM tbl_page WHERE active=1 AND id=$id AND member_id=$member_id");
		if($check){
			$_SESSION['vshops_page_admin'] = $id;
			$this->redirect_script("?mod=page_admin&site=admin");
		}
		else {
			$this->alert("Lỗi, Xảy ra lỗi quyền truy cập quản trị shop !");
		}
	}
	
	function load_map(){
		$this->general();
		global $smarty;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$sql = "SELECT id,name,parent_id,map_ip FROM tbl_local WHERE active=1 AND id=$id LIMIT 1";
		$result = $this->find_one($sql);
		if(!$result){
			$result = array("name" => "Việt Nam", "map_ip" => "");
		}
		else {
			$result["name"] = $this->get_name_full("tbl_local", $id) . ", Việt Nam";
		}
		$smarty->assign('result', $result);
		$smarty->display("none.tpl");
	}
	
	function get_name_full($table , $id , $result=NULL){
		$sql = "SELECT id,name,parent_id FROM $table WHERE id=$id LIMIT 1";
		$local = $this->find_one($sql);
		if($result==NULL){
			$result = $local['name'];
		}
		else {
			$result = $result . ", " . $local['name'];
		}
		if($local['parent_id'] != 0){
			$result = self::get_name_full($table, $local['parent_id'], $result);
		}
		return $result;
	}
	
	# Tạo session các mục tìm kiếm
	function search_posts() {
		if(isset($_POST['submit'])){
			$search['province'] = $_POST['province'];
			$search['district'] = $_POST['district'];
			$search['ward'] = $_POST['ward'];
			$search['street'] = $_POST['street'];
			$_SESSION['search_posts'] = $search;
		}
	}
	
	
	# Goi ket qua cua y kien phan hoi
	function feedback(){
		$str = "<ul>";
		$feedback = $this->find_one("SELECT id,name FROM tbl_feedback WHERE active=1 ORDER BY id DESC");
		$str .= "<li><b>Kết quả phản hồi: </b>" .$feedback["name"]. "</li>";
		
		$query = $this->query("SELECT score,name FROM tbl_feedback_item WHERE active=1 ORDER BY order_by ASC");
		while ($item = $this->fetch_array($query)){
			$str .= "<li class='mar-top'> <b>" .$item["score"]. "</b> - " .$item["name"]. "</li>";
		}
		$str .= "</ul>";
		echo $str;
	}
	
	# Khoi tao session ngon ngu
	function set_lang(){
		global $conf_language;
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$id = $id == NULL || $id == "" ? 1 : $id;
		$_SESSION['home_language'] = $id;
		$name = $this->my_str()->str_get_field($conf_language, $id);
		$_SESSION['home_language_name'] = $name;
	}
	
	
	# Active menu
	function active_menu(){
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$_SESSION["active_menu"] = $id;
	}
	
	
	/*
	 * Hàm xử lý thống kê truy cập
	 */
	function statistics(){
		$ip = $_SERVER['REMOTE_ADDR'];
		$date = date("Y-m-d");
		$check = $this->find_one("SELECT id FROM tbl_statistics WHERE ip='$ip' AND date='$date'");
		$time = time();
		if(!$check){
			$data['ip'] = $ip;
			$data['date'] = $date;
			$data['online'] = 1;
			$data['time'] = $time;
			$this->query_insert("tbl_statistics", $data);
		}
		else {
			$this->query("UPDATE tbl_statistics SET online=1, time=$time WHERE id=".$check['id']);
			$this->query("UPDATE tbl_statistics SET online=0 WHERE time+900<$time");
		}
		$result = array();
		$sql = "SELECT id FROM tbl_statistics";
		$result['total_visit'] = $this->count_field("SELECT id FROM tbl_statistics");
		$result['visit_today'] = $this->count_field("SELECT id FROM tbl_statistics WHERE date='$date'");
		$result['online'] = $this->count_field("SELECT id FROM tbl_statistics WHERE online=1");
		
		$str = "";		
		$str .= "<p class='stat_online'>Đang online: <span>".$result['online']."</span></p>";
		$str .= "<p class='stat_today'>Truy cập hôm nay: <span>".$result['visit_today']."</span></p>";
		$str .= "<p class='stat_total'>Tổng số truy cập: <span>".$result['total_visit']."</span></p>";
		echo $str;
	}
	
	
	function bds_category(){
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		$str = "<option value=''>Lựa chọn</option>";
		if($id==0){
			$str .= NULL;
		}
		else{
			$str .= $this->get_select_from_table("product_category", 1, 0, $id);
		}
		echo $str;
	}

	
	function bds_category_type(){
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		$str = "<option value=''>Lựa chọn</option>";
		if($id==0){
			$str .= NULL;
		}
		else{
			$str .= $this->get_select_from_table("product_category_type", 0, 0, $id);
		}
		echo $str;
	}
	
	
	/*
	 * Gọi giá trị địa phương theo parent
	 */
	function bds_local(){
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$id = $id==NULL || $id=="" ? 0 : $id;
		$str = "<option value=''>Lựa chọn</option>";
		if($id==0){
			$str .= NULL;
		}
		else{
			$str .= $this->get_select_from_table("tbl_local", 0, 0, $id);
		}
		echo $str;
	}

	# Tạo ảnh captcha
	function captcha(){
		$text = rand(100000,999999);
		$_SESSION["vshops_capcha"] = $text;
		$height = 30;
		$width = 65;
	
		$image = imagecreate($width, $height);
		$black = imagecolorallocate($image, 0, 0, 0);
		$white = imagecolorallocate($image, 255, 255, 255);
		$font_size = 16;
		
		imagestring($image, $font_size, 6, 6, $text, $white);
		header('Content-Type: image/jpeg');
		imagejpeg($image, null, 80);
		imagedestroy($image);
	}
	
	function infomation(){
		$this->general();
	
		$result = array();
		$result["domain"] = DOMAIN;
		$result["admin"] = ADMIN;
		$result['db_server'] = DB_SERVER;
		$result['db_user'] = DB_USER;
		$result['db_pass'] = DB_PASS;
		$result['db_name'] = DB_NAME;
		$result['admin_name'] = DEFAULT_USER;
		$result['admin_pass'] = DEFAULT_PASS;
		dump($result);
		$this->smarty()->display("none.tpl");
	}
	
	
}