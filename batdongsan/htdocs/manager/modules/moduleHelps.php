<?php

class Helps extends Generals{
	
	function active(){
		if(!isset($_GET["table"]) && !isset($_GET["id"]) ){
			$this->alert('Missing data !');
			exit();
		}
		$table = $_GET["table"];
		$id = $_GET['id'];
		$check = $this->find_by_id($table, $id);
		if(!$check){
			$this->alert('This item no exist !');
			exit();
		}
		$active = $check['active'] == 1 ? 0 : 1;
		
		$sql = "UPDATE $table SET active='$active' WHERE id='$id'";
		if($this->query($sql)){
			$this->alert('Successfull !');
			exit();
		}
		else{
			$this->alert('Error !');
			exit();
		}
	}
	
	
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
	
	
	
	function delete(){
		$table = isset($_GET["table"]) ? $_GET['table'] : "error";
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$check = $this->find_one("SELECT * FROM $table WHERE id=$id LIMIT 1");
		if(!$check){
			$this->alert('This item no exist !');
			$this->redirect_back();
			exit();
		}
		$image = isset($check['image']) ? $check['image'] : NULL;
		$image = $image == "" ? NULL : $image;
		
		$sql = "DELETE FROM $table WHERE id=$id";
		if($this->query($sql)){
			$table_lang = $table . "_lang";
			$sql_lang = "DELETE FROM $table_lang WHERE field_id=$id";
			$this->query($sql_lang);
			$this->image_delete($table, $image, $id);
			//$this->alert('Successfull !');
			$this->redirect_back();
		}
		else{
			$this->alert('Error !');
			$this->redirect_back();
		}
	}
	
	
	# Lưu lại htaccess cho trang manager khi thay đổi role
	function admin_htaccess(){
		$path = './.htaccess';
		
		$data ="RewriteEngine On \n\n";
		
		$data .="#Rewrite in database module\n";
		$sql = "SELECT * FROM conf_role WHERE alias IS NOT NULL AND url IS NOT NULL
		ORDER BY parent_id ASC, order_by ASC";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$data .= "RewriteRule ^" . $item['alias'] . "$ " . $item['url'] . " [QSA,L]\n";
		}
		$file=fopen($path, "w");
		$write=fwrite($file, $data);
		fclose($file);
		$this->redirect_script("?mod=roles&site=index");
	}
	
	# Lưu lại htaccess cho trang chủ khi thay đổi menu
	function home_htaccess(){
		global $router_new;
		$path = '../.htaccess';
		$data ="RewriteEngine On \n\n";
		$data .="#Rewrite in router\n";
		foreach ($router_new as $key=>$item){
			$data .= "RewriteRule ^" . $key . "$ " . $item . " [QSA,L]\n";
		}
		
		$data .= "\n";
		$data .="#Rewrite in database menu\n";
		$sql = "SELECT * FROM menu WHERE active=1 AND alias IS NOT NULL AND link IS NOT NULL AND module NOT IN (0,4,6)
		ORDER BY category_id ASC, parent_id ASC, order_by ASC";
		$query = $this->query($sql);
		while ($item = $this->fetch_array($query)){
			$data .= "RewriteRule ^" . $item['alias'] . "$ " . $item['link'] . " [QSA,L]\n";
		}
		$file=fopen($path, "w");
		$write=fwrite($file, $data);
		fclose($file);
		$id=$_GET['id'];
		$this->redirect_script(ADMIN . "menu/manager?id=".$id);
	}
	
	
	function get_article(){
		$id = $_GET['id'];
		$arr_id = $this->get_arr_id('article_category', $id);
		echo $this->get_select_article('article', 0, $arr_id);
	}
	

	/* Dat ngon ngu cho website */
	function set_lang(){
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$id = $id == NULL || $id == "" ? 1 : $id;
		$_SESSION['admin_language'] = $id;
	}
	
	# Validate - Kiểm tra email đã có trong data hay chưa	
	function check_email(){
		$email = $_GET['email'];
		$check = $this->check_exist("SELECT id FROM data_mail WHERE email='$email'");
		if($check){
			echo "false";
		}
		else {
			echo "true";
		}
	}
	
	
}