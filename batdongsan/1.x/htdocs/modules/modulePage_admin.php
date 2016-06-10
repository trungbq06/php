<?php

class Page_admin extends Generals{
	
	/*
	 * Quản lý thông tin cơ bản
	 */
	function admin(){
		$this->general();
		global $lang, $smarty;

		$page = $this->get_page();
		$id= $page['id'];
		
		$result = $this->find_one("SELECT * FROM tbl_page WHERE id=$id");
		$smarty->assign('result', $result);
		
		$arr_category = explode(",", $result['category']);
		$smarty->assign('arr_category', $arr_category);
		
		$select_category = $this->find("
				SELECT a.id,lang.name FROM product_category AS a
				LEFT JOIN product_category_lang AS lang ON a.id=lang.field_id
				WHERE a.active=1 AND a.parent_id=0 AND lang.lang=$lang
				");
		$smarty->assign('select_category', $select_category);
		
		$select['category'] = $this->get_select_from_table('product_category', 0);
		$select['local'] = $this->get_select_from_table('tbl_local', 0, $result['local_id']);
		$smarty->assign('select', $select);
		
		if(isset($_POST['FrmSubmit'])){
			$data['hotline'] = $_POST['hotline'];
			$data['address'] = $_POST['address'];
			$data['local_id'] = $_POST['local_id'];
			$data['category'] = implode(",", $_POST['category']);
			$where = "id=$id";
			if($this->query_update('tbl_page', $data, $where)){
				$this->alert('Successfull !');
				$this->redirect_script(THIS_LINK);
			}
			else{
				$this->alert('Error !');
			}
		}

		if(isset($_POST['FrmInfomation'])){
			$data['infomation'] = $_POST['infomation'];
			$where = "id=$id";
			if($this->query_update('tbl_page', $data, $where)){
				$this->alert('Successfull !');
				$this->redirect_script(THIS_LINK);
			}
			else{
				$this->alert('Error !');
			}
		}

		if(isset($_POST['FrmContact'])){
			$data['contact'] = $_POST['contact'];
			$where = "id=$id";
			if($this->query_update('tbl_page', $data, $where)){
				$this->alert('Successfull !');
				$this->redirect_script(THIS_LINK);
			}
			else{
				$this->alert('Error !');
			}
		}
		
		$smarty->display("account.tpl");
	}
	
	
	/*
	 * Thay đổi logo page
	 */
	function avatar(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
		
		$page = $this->get_page();
		$id= $page['id'];
		
		$avatar = isset($_SESSION['vshops_cache_image']) ? $_SESSION['vshops_cache_image'] : NULL;
		if(!is_file($avatar)){
			$avatar = NULL;
		}
		$smarty->assign("avatar", $avatar);
		
		//Upload ảnh
		$dir_cache = $this->dir_cache_upload($member_id);
		if(isset($_POST['upload'])){
			$this->img_upload($dir_cache);
		}
		$dir_upload = $this->dir_check(PAGE_UPLOAD . $id . "/");
		$this->img_upload_thumbnail($avatar, PAGE_UPLOAD . $id . "/", 120, "tbl_page", $id, $page["image"]);
		
		$smarty->display("account.tpl");
	}

	
	
	function banner(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
	
		$page = $this->get_page();
		$id= $page['id'];
	
		
				
		//Upload ảnh
		$dir_page = $this->dir_check(PAGE_UPLOAD . $id . "/");
		$dir_upload = $this->dir_check($dir_page . "banner/");
		
		$image = $this->get_image($dir_upload, NULL, 2);
		$smarty->assign("image", $image);
		
		$message = "";
		if(isset($_POST['upload'])){
			$img = $_FILES['image'];
			list($width, $height, $imageType) = getimagesize($img['tmp_name']);
			if($width > 1500 || $width < 900){
				$message .= "<p><b>Lỗi upload:</b> Chiều rộng ảnh phải nằm trong khoảng 900px - 1500px</p>";
			}
			elseif($height > 360 || $height < 100){
				$message .= "<p><b>Lỗi upload:</b> Chiều cao ảnh phải nằm trong khoảng 100px - 300px</p>";
			}
			else{
				$this->dir_empty($dir_upload);
				
				$type_arr = explode(".", $img["name"]);
				$type = end($type_arr);
				$image_name = date('Y-m-d-His') . "." . $type;
				move_uploaded_file($img['tmp_name'], $dir_upload . $image_name);
				$this->resizeImage($dir_upload . $image_name, 980);
				$this->redirect_script(THIS_LINK);
				$message = "Upload ảnh thành công !";
			}
		}
		$smarty->assign('message', $message);
		
		$smarty->display("account.tpl");
	}
	
	
	
	
	/*
	 * Đơn đặt hàng
	 */
	function orders(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
		
		$page = $this->get_page();
		$page_id = $page['id'];
		$smarty->assign("page", $page);
		
		$orders = array();
		$query = $this->query("SELECT * FROM product_invoice ORDER BY active DESC, id DESC");
		while ($item = $this->fetch_array($query)){
			$item['link'] = "?mod=page_admin&site=orders_item&id=" . $item['id'];
			$item['created'] = gmdate("(H:i) d/m/Y", strtotime($item['created'])+7*3600);
			
			$sql = "SELECT id,number,price FROM product_invoice_item WHERE invoice_id=" . $item['id'];
			$query_item = $this->query($sql);
			$item['number'] = $this->num_rows($query_item);
			$total = 0;
			while ($pitem = $this->fetch_array($query_item)){
				$total += $pitem['price'] * $pitem['number'];
			}
			$item['total'] = number_format($total) . " đ";
			$orders[] = $item;
		}
		$smarty->assign("orders", $orders);
		$smarty->display("account.tpl");
	}


	
	function orders_item(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();

		$page_id = $this->check_page_admin();
		
		$page = $this->get_page($page_id);
		$smarty->assign("page", $page);
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$id = intval($id);
		
		$orders = $this->find_by_id("product_invoice", $id);
		$orders['created'] = gmdate("H:i d-m-Y", strtotime($orders['created'])+7*3600);
		
		$smarty->assign("orders", $orders);
		
		$product = array();
		$sql = "SELECT a.*, p.name,p.image,p.page_id FROM product_invoice_item AS a
				LEFT JOIN product AS p ON a.product_id=p.id
				WHERE a.invoice_id=$id
				";
		$query = $this->query($sql);
		$number_field = $this->num_rows($query);
		$smarty->assign("number_field", $number_field);
		$total = 0;
		while ($item = $this->fetch_array($query)){
			$sum = $item['price'] * $item['number'];
			$dir = PAGE_UPLOAD . $item['page_id'] . "/products/" . $item['product_id'] . "/";
			$item['img'] = $this->get_img($dir);
			$item['price'] = number_format($item['price']) . " đ";
			$product[] = $item;
			
			$total += $sum;
		}
		$total = number_format($total);
		$smarty->assign("total", $total);
		$smarty->assign("product", $product);
		
		$smarty->display("account.tpl");
	}
	/*-----------------------------------------------------*/
	
	
	function infomation(){
		global $smarty;
		$this->general();
		$member_id = $this->check_login();
		
		$page = $this->get_page();
		$id= $page['id'];
		
		if(isset($_POST['FrmInfomation'])){
			$info = $_POST['infomation'];
		}
		
		$smarty->display("account.tpl");
	}
	
}