<?php
class MyHandle{
	

	
	
	

	function png2jpg($originalFile, $outputFile, $quality=100) {
		$image = imagecreatefrompng($originalFile);
		imagejpeg($image, $outputFile, $quality);
		imagedestroy($image);
	}
	
	function delete_img($table, $image){
		
		$list_path = array(
				'article' => ARTICLE_UPLOAD,
				'article_category' => ARTICLE_UPLOAD . "categories/",
				'product' => PRODUCT_UPLOAD,
				'product_category' => PRODUCT_UPLOAD . "categories/",
				'gallery' => GALLERY_UPLOAD,
				'gallery_category' => GALLERY_UPLOAD . "Album/",
				'menu' => MENU_UPLOAD,
		);
		
		$path = "../";
		foreach ($list_path as $key => $item){
			if($table == $key){
				$path = "../" . $item;
			}
		}
		$path = $path . $image;
		@unlink($path);
	}
	
	function hand_delete($path){# Xu ly xoa file hoac thu muc
		if(is_dir($path)){
			$this->deleteDir($path);
			echo "Deleted this foder";
		}
		else if (is_file($path)){
			@unlink($path);
			echo "Deleted this file";
		}
		else {
			echo "No file or foder";
		}
	}
	
	
	
	# Hàm lấy ảnh
	function get_image($path, $image, $source=NULL){
		if($image == "" || $image == NULL){
			$get = DOMAIN . UPLOAD_PATH . "generals/no-image.jpg";
		}
		elseif (!is_file($source . $path . $image)){
			$get = DOMAIN . UPLOAD_PATH . "generals/no-image.jpg";
		}
		else {
			$get = DOMAIN . $path . $image;
		}
		return $get;
	}
	
	
	
	
	
}
?>