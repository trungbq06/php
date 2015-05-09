<?php
//Các Mimes quản lý định dạng file
$mimes = array(
	'image/jpeg', 'image/png', 'image/gif'
);
sleep(2);
if (isset($_FILES['myfile'])) {
	$fileName = $_FILES['myfile']['name'];
	$fileType = $_FILES['myfile']['type'];
	$fileError = $_FILES['myfile']['error'];
	$fileStatus = array(
		'status' => 0,
		'message' => ''	
	);
	if ($fileError== 1) { //Lỗi vượt dung lượng
		$fileStatus['message'] = 'Dung lượng quá giới hạn cho phép';
	
	} else { //Không có lỗi nào					
		$fileType = pathinfo($fileName);				
						
		move_uploaded_file($_FILES['myfile']['tmp_name'], '../res/data/'.$fileName);
		$fileStatus['status'] = 1;
		$fileStatus['fileType'] = $fileType['extension'];
		$fileStatus['message'] = "Bạn đã upload $fileName thành công";
		$fileStatus['fileName'] = $fileName;
	}	
	echo json_encode($fileStatus);
	exit();
}