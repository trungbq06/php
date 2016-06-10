<?php
require_once 'MyGetData.php';
class MyLibraries extends MyGetData{


	/*
	 * Hàm lấy ảnh
	* Kết quả trả về sẽ là được chỉ định hoặc là 1 list ảnh trong thư mục chỉ định
	* Nếu giá trị rỗng kết quả sẽ đưa ra 1 ảnh mặc định sẵn.
	*/
	
	function get_image($dir, $image=NULL, $type=0){
		$result = NO_IMG;
		if(!is_file($result)){
			$result = "../" . NO_IMG;
			$dir = "../" . $dir;
		}
		$img = $dir . $image;
	
		if(is_file($img) && $type==0){
			$result = $img;
		}
		else{
			$files = @scandir($dir);
			if($type==1){
				$result = array();
				if($files != NULL)
				foreach ($files as $k => $item){
					if(is_file($dir . $item)){
						$result[] = $dir . $item;
					}
				}
			}
			elseif($type==2) {
				if($files != NULL)
				foreach ($files as $k => $item){
					if(is_file($dir . $item)){
						$result = $dir. $item;
					}
				}
			}
		}
		return $result;
	}
	
	
	function image_upload($image, $dir, $resize=0){
		if(!$this->check_img($image)){
			return false;
		}
		else {
			$type = explode("/", $image["type"]);
			$type = end($type);
			$dir = $this->dir_check($dir);
			$name = date("Y-m-d-His") . "." . $type;
			if(move_uploaded_file($image['tmp_name'], $dir . $name)){
				if($resize != 0)
					$this->resizeImage($dir . $name, $resize);
				return $name;
			}
			return false;
		}
	}
	
	
	/* Ham kiem tra anh */
	public function check_img($img){
		$true_type = array("image/gif", "image/jpg", "image/jpeg", "image/png");
		if($img["error"] > 0){
			return false;
		}
		elseif(!in_array($img["type"], $true_type)){
			return false;
		}
		elseif(($img["size"]/1024) > 6000){
			return false;
		}
		else {
			return true;
		}
	}
	
	/* Ham thay doi kich thuoc anh */
	function resizeImage($image,$max_width=800) {
		list($width, $height, $imageType) = getimagesize($image);
		if ($width > $max_width){
			$scale = $max_width/$width;
		}else{
			$scale = 1;
		}
	
		$imageType = image_type_to_mime_type($imageType);
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		$color = imagecolorallocate ($newImage, 255, 255, 255);
		imagefill($newImage, 0, 0, $color);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image);
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image);
				break;
			case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image);
				break;
		}
		imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
		$color = imagecolorallocate ($newImage, 255, 255, 255);
		imagefill($newImage, 0, 0, $color);
	
		switch($imageType) {
			case "image/gif":
				imagegif($newImage,$image);
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				imagejpeg($newImage,$image,90);
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage,$image);
				break;
		}
	
		chmod($image, 0777);
		return $image;
	}

	

	function resizeThumbnailImage($thumb_image_name, $image, $width, $height, $start_width, $start_height, $scale){
		list($imagewidth, $imageheight, $imageType) = getimagesize($image);
		$imageType = image_type_to_mime_type($imageType);
	
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		$color = imagecolorallocate ($newImage, 255, 255, 255);
		imagefill($newImage, 0, 0, $color);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image);
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image);
				break;
			case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image);
				break;
		}
		imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
		$color = imagecolorallocate ($newImage, 255, 255, 255);
		imagefill($newImage, 0, 0, $color);
		switch($imageType) {
			case "image/gif":
				imagegif($newImage,$thumb_image_name);
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				imagejpeg($newImage,$thumb_image_name,90);
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage,$thumb_image_name);
				break;
		}
		chmod($thumb_image_name, 0777);
		return $thumb_image_name;
	}
	

	
	/*
	 * Chuyển ảnh thành ảnh vuông 1x1
	*/
	function convert_image($image){
		list($width, $height, $imageType) = getimagesize($image);
	
		//Lấy kích thước ảnh
		$size = $width;
		if($width < $height){
			$size = $height;
		}
		//Lấy tọa độ mới của ảnh
		$start_width = 0;
		$start_height = 0;
		if($width > $height){
			$start_height = -($size - $height)/2;
		}
		else if($width < $height){
			$start_width = -($size - $width)/2;
		}
		$cropped = $this->resizeThumbnailImage($image, $image, $size, $size, $start_width, $start_height, 1);
		return $cropped;
	}
	
	
	/*
	 * Hàm upload ảnh
	 */
	public function img_upload($dir){
		$img = $_FILES['image'];
			
		if ($img['tmp_name'] != "" && $this->check_img($img)){
			$type_arr = explode(".", $img["name"]);
			$type = end($type_arr);
			$image = date('Y-m-d-His') . "." . $type;

			if(move_uploaded_file($img['tmp_name'], $dir . $image)){
				$this->resizeImage($dir . $image, 500);
				$this->convert_image($dir . $image);
				$_SESSION['vshops_cache_image'] = $dir . $image;
				$this->redirect_script(THIS_LINK);
			}
			else {
				$this->alert("Lỗi upload !");
			}
		}
		else {
			$this->alert("Lỗi upload !");
		}
	}
	
	/*
	 * Upload ảnh thumbnail
	 */
	public function img_upload_thumbnail($image, $dir_upload, $size, $table=NULL, $id=NULL, $old_img=NULL){
		if (isset($_POST["upload_thumbnail"])) {
			//Get the new coordinates to crop the image.
			$x1 = $_POST["x1"];
			$y1 = $_POST["y1"];
			$x2 = $_POST["x2"];
			$y2 = $_POST["y2"];
			$w = $_POST["w"];
			$h = $_POST["h"];
			//Scale the image to the thumb_width set above
			$scale = $size/$w;
			$type_arr = explode(".", $image);
			$type = end($type_arr);
			$image_new = date('Y-m-d-His') . "." . $type;
			$cropped = $this->resizeThumbnailImage($dir_upload . $image_new, $image,$w,$h,$x1,$y1,$scale);
			unset($_SESSION['vshops_cache_image']);
			@unlink($image);
			if($table != NULL && $id != NULL){
				$this->query("UPDATE $table SET image='$image_new' WHERE id=$id");
				if(is_file($dir_upload . $old_img)){
					@unlink($dir_upload . $old_img);
				}
			}
			$this->alert("Lưu ảnh thành công !");
			$this->redirect_script(THIS_LINK);
			//return $image_new;
		}
	}

	
	function dir_cache_upload($member_id){
		$dir_member = MEMBER_UPLOAD;
		$dir_member_id = $dir_member . $member_id . "/";
		$dir = $dir_member_id . "cache/";
		
		# Khởi tạo thư mục nếu chưa tồn tại
		$this->dir_check($dir_member);
		$this->dir_check($dir_member_id);
		$this->dir_check($dir);
		
		# Xử lý xóa ảnh lưu cũ thêm thư mục cache
		$files = @scandir($dir);
		if(count($files)>3){
			foreach ($files as $item){
				if(is_file($dir . $item)){
					@unlink($dir . $item);
				}
			}
			$this->redirect_script(THIS_LINK);
		}
		return $dir;
	}
	
	/*
	 * Hàm kiểm tra thư mục có tồn tại không
	 * nếu không thì sẽ tạo ra thư mục mới
	 */
	public function dir_check($dir){
		if(!is_dir($dir)){
			mkdir($dir, 0777);
			chmod($dir, 0777);
		}
		return $dir;
	}
	
	/*
	 * Hàm xóa tất cả các file trong thư mục
	 */
	function dir_delete($dir) {#Xoa thu muc va tat ca cac file trong thu muc
		if (! is_dir($dir)) {
			#throw new InvalidArgumentException("$dir must be a directory");
			return false;
		}
		if (substr($dir, strlen($dir) - 1, 1) != '/') {
			$dir .= '/';
		}
		$files = glob($dir . '*', GLOB_MARK);
		foreach ($files as $file) {
			if (is_dir($file)) {
				self::dir_delete($file);
			} else {
				@unlink($file);
			}
		}
		rmdir($dir);
	}
	

	function dir_empty($dir){
		if (!is_dir($dir)) {
			#throw new InvalidArgumentException("$dir must be a directory");
			return false;
		}
		if (substr($dir, strlen($dir) - 1, 1) != '/') {
			$dir .= '/';
		}
		$files = glob($dir . '*', GLOB_MARK);
		foreach ($files as $file) {
			if (is_dir($file)) {
				$this->dir_delete($file);
			} else {
				@unlink($file);
			}
		}
	}
}