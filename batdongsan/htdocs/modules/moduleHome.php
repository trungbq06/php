<?php

class Home extends Generals{
	
	function index(){
		$this->general();
		global $lang, $smarty;
		
 
 		$sql = "SELECT a.* FROM product AS a
 				WHERE a.active=1
 				ORDER BY a.order_by ASC
 				";

	/*	$limit = 20;
	
		if(isset($_GET['limit'])){
			$limit = $limit + $_GET['limit'];
			$ajax = 1;
		}*/
		$product = $this->get_products($sql,20, 1);
		$smarty->assign("product", $product);
		
		$sql1 = "SELECT a.* FROM product AS a LEFT JOIN product_category AS cate ON a.category_id = cate.id WHERE a.active=0" ;
		$product1 = $this->get_products($sql1, 20, 0);	
		$smarty->assign("product1", $product1);
		
      /*
		$sqlArticle = "SELECT cate.*,lg.name from article_category AS cate
		LEFT JOIN article_category_lang AS lg ON cate.id = lg.field_id
		WHERE cate.active = 1";

		
		
		$cate_news = $this->get_category_article($sqlArticle,0,1); 
	
		$query = $this->query($sqlArticle);
		$cate_news = array();
		while ($item = $this->fetch_array($query)) {
				$cate_news['link'] = ALIAS_ARTICLE . $item['id'] . "/" . $item['category_id'] . "/" . $this->str_convert($item['name']) . ".html";				
			   
				
				$cate_news[] = $item;
		}	
		$smarty->assign("cate_news", $cate_news);
		*/	
		$view_sql = "SELECT a.* FROM article_category AS cate
			
		";
		$max_view = $this->get_products($view_sql, 4);
		$smarty->assign('max_view', $max_view);
		
		$smarty->display("home.tpl");
	}
	
	
	function images(){
		$this->general();
		
		$images = $this->gen_gallery_by_position(5, 30);
		$smarty->assign('images', $images);
		
		$videos_default = $this->gen_video(NULL,1);
		$smarty->assign('videos_default', $videos_default);
		
		$videos = $this->gen_video();
		$smarty->assign('videos', $videos);
		
		$smarty->display("wapfix.tpl");
	}
	

	function add_email(){
		$this->general();
		$message = "Vui lòng nhập email !";
		
		
		if(isset($_POST['SubmitEmail'])){
			$email = $_POST['email'];
			$check = filter_var($email, FILTER_VALIDATE_EMAIL);
			//var_dump($check);
			if($check){
				$exits = $this->check_exist("SELECT id FROM tbl_email WHERE email='$email'");
				if($exits){
					$message = "Email đã đăng ký !";
				}
				else{
					$data['email'] = $email;
					$this->query_insert("tbl_email", $data);
					$message = "Đăng ký email thành công !";
				}
			}
		}
		$smarty->assign('message', $message);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	
	function question(){
		$this->general();

		$result = array();
		
		
		$sql = "SELECT * FROM question WHERE active=1 AND title IS NOT NULL AND answer IS NOT NULL ORDER BY order_by ASC, id DESC";
		$sql = $this->pagination($sql, 4);
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$result[] = $item;
		}
		$smarty->assign('result', $result);
		
		$smarty->assign('gallery_p3', $this->gen_gallery_by_position(3, 12));//Quang cao

		
		if(isset($_POST['FrmSubmit'])){
			$data['title'] = $_POST['name'];
			$data['answer'] = $_POST['content'];
			if($data['title']=="" || $data['title']==NULL){
				$this->my_hand()->alert("Vui lòng nhập nội dung câu hỏi !");
				$this->my_hand()->redirect_back();
			}
			else{
				$data['created'] = $this->my_time()->time_now();
				$this->query_insert("question", $data);
				$this->my_hand()->alert("Cảm ơn bạn đã gửi ý kiến cho chúng tôi !");
				//$this->my_hand()->redirect_script(DOMAIN);
			}
		}
		
		
		$smarty->display("wapfix.tpl");
	}

	
	function question_add(){
		$this->general();
		
		if(isset($_POST['FrmSubmit'])){
			$data['title'] = $_POST['title'];
			if($data['title']=="" || $data['title']==NULL){
				$this->my_hand()->alert("Vui lòng nhập nội dung câu hỏi !");
				$this->my_hand()->redirect_back();
			}
			else{
				$data['created'] = $this->my_time()->time_now();
				$this->query_insert("question", $data);
				$this->my_hand()->alert("Cảm ơn bạn đã gửi câu hỏi !");
				$this->my_hand()->redirect_script(DOMAIN);
			}
		}
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	function contact(){
		$this->general();
		global $lang, $smarty;
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
				$data["content"] = $_POST["content"];
				//$data["created"] = $this->my_time()->time_now(); 
				if($data["name"] != "" && $data["email"] != "" && $data["content"] != ""){

					if($this->query_insert("contact", $data)){
						$info = $this->find_one("SELECT name FROM conf_info WHERE active=1 AND lang=$lang LIMIT 1");
						$mail_conf = $this->find_one("SELECT * FROM conf_mail WHERE active=1 LIMIT 1");
						
						$title = "Thư liên hệ từ " . $info["name"];
						# Gui lien he
						$content = "";
						$content .= "<h3>" .$data['title']. "</h3>";
						$content .= "<div>" .$data['content']. "</div>";
						
						$content .= "<div style='border:1px solid #ccc; background: #f2f2f2; padding: 10px; margin-top:10px;'>";
						$content .= "<h3>Thông tin người liên hệ</h3>";
						$content .= "<p>" .$data['name']. "</p>";
						$content .= "<p>Email: " .$data['email']. "</p>";
						$content .= "<p>Điện thoại: " .$data['phone']. "</p>";
						$content .= "<p>Địa chỉ: " .$data['address']. "</p>";
						$content .= "</div>";
						
						$this->send_mail($mail_conf, $title, $content);
						$this->alert("Bạn đã gửi liên hệ thành công !");
						$this->redirect_script(DOMAIN);
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
		
		$smarty->display("wapfix.tpl");
	}
	
	
}