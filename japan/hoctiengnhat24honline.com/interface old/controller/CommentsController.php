<?php
	session_start();
	
	include '../entity/clsComments.php';
	include '../dao/CommentsDAO.php';
	
	$comment = $_POST['commit'];
	
		if($comment == 'Nhận Xét'){
			if(isset($_SESSION['loginAcc'])){
				if(isset($_SESSION['id'])){
					$id = $_SESSION['id'];	
					$noidung = $_POST['comment'];
					creadComments($noidung, $id);
					header("Location:../pages/ThanhCong.php");
				}		
			}else{
					$message = 'Bạn cần đăng nhập để bình luận';
					$local = "Location:../pages/Comments.php?message=".$message."";	
					header($local);
					}
		}
		
		if($comment == 'Xóa'){
			$IdComment = $_POST['IdComment'];
			delCommentById($IdComment);	
			header("Location:../admin/XoaComments.php");
		}	
?>