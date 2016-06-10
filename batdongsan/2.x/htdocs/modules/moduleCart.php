<?php

class Cart extends Generals{
	
	function index(){
		$this->general();
		global $smarty;
		$cart_numb = isset($_SESSION["shop_cart"]) ? count($_SESSION["shop_cart"]) : 0;
		$pid = 0;
		$cart = array();
		if($cart_numb > 0){
			$cart = $_SESSION["shop_cart"];
			$arr_pid = array();
			foreach ($cart as $key => $item){
				$arr_pid[] = $key;
			}
			$pid = implode(",", $arr_pid);
		}
		$query = $this->query("SELECT id, name, price, page_id, promotions, image FROM product WHERE id IN ($pid) ");
		$result = array();
		$sum_cart = 0;
		
		while ($item = $this->fetch_array($query)){
			$item["number"] = $this->get_item_from_array($cart, $item["id"], "number");
			$price = $item['promotions']==0 ? $item['price'] : $item['promotions'];
			$sum = $price * $item["number"];
			$item["sum"] = number_format($sum) . " đ";
			$item["price"] = number_format($price) . " đ";
			$dir = PRODUCT_UPLOAD ;
			$item["img"] = $this->get_image($dir, $item['image']);
			$result[] = $item;
			$sum_cart += $sum;
		}
		$smarty->assign("result", $result);
		$sum_cart = number_format($sum_cart) . " đ";
		$smarty->assign("sum_cart", $sum_cart);
		
		$bar = $this->get_list("article_category");
		$smarty->assign('bar', $bar);
		
		$site_map = "<a href='./'>Trang chủ</a> &nbsp;&nbsp;&gt;&nbsp;&nbsp; <a href='javascript:void(0)'>Giỏ hàng</a>";
		$smarty->assign('site_map', $site_map);
		
		$smarty->assign('category', 'Thông tin giỏ hàng');
		$smarty->display("wapfix.tpl");
	}
	
	
	function payment(){
		$this->general();
		global $smarty;
		/* Kiểm tra đăng nhập */
		$member_id = $this->check_login();
		if($member_id == 0){
			$this->alert("Vui lòng đăng nhập trước khi thanh toán !");
			$this->redirect_script("dang-nhap.html");
		}
		$member = $this->find_one("SELECT name,phone,email,address FROM tbl_member WHERE id=$member_id");
		$smarty->assign("mem", $member);
		
		/* Kiểm tra sản phẩm trong giỏ hàng */
		$cart_numb = isset($_SESSION["shop_cart"]) ? count($_SESSION["shop_cart"]) : 0;
		if($cart_numb == 0){
			$this->alert("Không có sản phẩm nào trong giỏ hàng !");
			$this->redirect_script(DOMAIN . "cart.html");
		}
		
		/* Thông tin giỏ hàng */
		$pid = 0;
		$cart = array();
		if($cart_numb > 0){
			$cart = $_SESSION["shop_cart"];
			$arr_pid = array();
			foreach ($cart as $key => $item){
				$arr_pid[] = $key;
			}
			$pid = implode(",", $arr_pid);
		}
		
		$query = $this->query("SELECT id,name,price,promotions,image FROM product WHERE id IN ($pid) ");
		$result = array();
		
		$sum_cart = 0;
		while ($item = $this->fetch_array($query)){
			$item["number"] = $this->get_item_from_array($cart, $item["id"], "number");
			$sum = $item["promotions"]==0 ? $item["price"] * $item["number"] : $item["promotions"] * $item["number"];
			$item["sum"] = number_format($sum) . " VNĐ";
			$item["price"] = $item["promotions"]==0 ? number_format($item["price"]) . " VNĐ" : number_format($item["promotions"]) . " VNĐ";
			$item["img"] = $this->get_image(PRODUCT_UPLOAD, $item['image']);
			$result[] = $item;
			
			$sum_cart += $sum;
		}
		
		
		$smarty->assign("result", $result);
		$sum_cart = number_format($sum_cart) . " VNĐ";
		$smarty->assign("sum_cart", $sum_cart);
		
		
		if(isset($_POST["FrmSubmit"])){
			$invoice["member_name"] = $_POST["name"];
			$invoice["member_email"] = $_POST["email"];
			$invoice["member_phone"] = $_POST["phone"];
			$invoice["member_address"] = $_POST["address"];
		
			if($invoice['member_name'] == NULL || $invoice['member_email'] == NULL || $invoice['member_phone'] == NULL || $invoice['member_address'] == NULL){
				$this->redirect_back();
			}
			$invoice["member_id"] = $member_id;
			$invoice["status"] = 1;
			$invoice["created"] = $this->time_now();
			$invoice["updated"] = $this->time_now();
			$invoice["active"] = 0;
			if($invoice_id = $this->query_insert("tbl_orders", $invoice)){
				foreach($cart as $key => $item){
					$invoice_item["number"] = $item["number"];
					$invoice_item["product_id"] = $item["id"];
					$invoice_item["invoice_id"] = $invoice_id;
					$invoice_item["promotions"] =  $this->get_field_by_id("product", $item["id"], "promotions");
					$invoice_item["price"] = $this->get_field_by_id("product", $item["id"], "price");
					if($this->query_insert("tbl_orders_item", $invoice_item)){
						unset($_SESSION["shop_cart"][$key]);
					}
					else {
						$this->alert("Không thể thêm sản phẩm vào hoá đơn !");
					}
				}
				
				$this->alert("Đặt hàng thành công, chúng tôi sẽ nhanh chóng phản hồi đơn hàng của bạn !");
				$this->redirect_script(DOMAIN);
			}
			else{
				$this->alert("Không thể tạo hoá đơn !");
			}
		}

		$bar = $this->get_list("article_category");
		$smarty->assign('bar', $bar);
		
		$site_map = "<a href='./'>Trang chủ</a> &nbsp;&nbsp;&gt;&nbsp;&nbsp; <a href='javascript:void(0)'>Thanh toán</a>";
		$smarty->assign('site_map', $site_map);
		
		$smarty->assign('category', 'Thanh toán đơn hàng');
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	# Xu ly them sua xoa gio hang
	function handle(){
		if(!isset($_SESSION["shop_cart"])){
			$_SESSION["shop_cart"] = array();
		}
		
		$hand = isset($_POST["hand"]) ? $_POST["hand"] : "";
		
		if($hand == "add"){
			$id = $_POST["id"];
			if($_SESSION['shop_cart'][$id]["id"] = $id){
				$number = $_SESSION['shop_cart'][$id]["number"];
				$number = $number + 1;
				$_SESSION["shop_cart"][$id]["id"] = $id;
				$_SESSION["shop_cart"][$id]["number"] = $number;
			}
			else{
				$_SESSION["shop_cart"][$id]["id"] = $id;
				$_SESSION["shop_cart"][$id]["number"] = 1;
			}
		}
		if($hand == "update"){
			$id = $_POST["id"];
			$numb = $_POST["numb"];
			if($_SESSION['shop_cart'][$id]["id"] = $id){
				$_SESSION["shop_cart"][$id]["id"] = $id;
				$_SESSION["shop_cart"][$id]["number"] = $numb;
			}
		}
		if($hand == "delete_item"){
			$id = $_POST["id"];
			unset($_SESSION["shop_cart"][$id]);
		}
		if($hand == "delete"){
			unset($_SESSION["shop_cart"]);
		}
		
	}
	
	function number_cart(){
		echo  $this->cart();
	}
	
}