<?php
require_once 'MyLibraries.php';
class MyHandles extends MyLibraries{

	# Ham gui mail
	function send_mail($mail_conf, $subject, $content){
		require_once './libraries/phpmailer/class.phpmailer.php';
		$mail = new PHPMailer();
	
		$mail->IsSMTP(); // enable SMTP
		$mail->CharSet = "UTF-8";
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = $mail_conf["smtp_secure"]; // secure transfer enabled REQUIRED for GMail
		$mail->Host = $mail_conf["host"];
		$mail->Port = $mail_conf["port"]; // or 587
		$mail->IsHTML(true);
		$mail->Username = $mail_conf["mail_from"];
		$mail->Password = $mail_conf["mail_from_pass"];
		$mail->SetFrom($mail_conf["mail_from"]);
	
		$mail->Subject = $subject;
		$mail->Body = $content;
	
		$mail->AddAddress($mail_conf["mail_to"]);
		if(!$mail->Send()){
			return false;
		}
		return true;
	}
	
	
	/*
	 * var_dump theo array
	*/
	function dump($var, $label=null, $echo=true) {
		$label = ($label === null) ? '' : rtrim($label) . ' ';
		ob_start();
		var_dump($var);
		$output = ob_get_clean();
		$output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
		$output = htmlspecialchars($output, ENT_QUOTES);
		$output = '<pre>' . $label . $output . '</pre>';
		if ($echo) {
			echo($output);
		}
	}
	
	
	/** Get short string from first string by custum length */
	public function str_short($str, $length){
		$str = strip_tags($str);
		/*$str = mb_strtolower($str, 'utf8');
		$str = mb_convert_case($str, MB_CASE_TITLE, 'utf8');*/
		$strlen = strlen($str);
		if($strlen <= $length){
			return $str;
		}
		$str = substr($str, 0, $length);
		$arr = explode(" ", $str);
		$end_arr = count($arr) - 1;
		unset($arr[$end_arr]);
		$str = implode(" ", $arr);
		return $str. "...";
	}
	
	
	/** Convert string */
	public function str_convert($str){
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|A)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|E)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|I)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|O)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|U)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ|Y)/", 'y', $str);
		$str = preg_replace("/(đ|Đ|D)/", 'd', $str);
		$str = preg_replace("/(B)/", 'b', $str);
		$str = preg_replace("/(%)/", '', $str);
		$str = preg_replace("/( – )/", '-', $str);
		$str = preg_replace("/( - )/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		$str = preg_replace("/(  )/", '-', $str);
		$str = preg_replace("/(   )/", '-', $str);
		$str = preg_replace("/(    )/", '-', $str);
		$str = preg_replace("/(C)/", 'c', $str);
		$str = preg_replace("/(G)/", 'g', $str);
		$str = preg_replace("/(L)/", 'l', $str);
		$str = preg_replace("/(M)/", 'm', $str);
		$str = preg_replace("/(N)/", 'n', $str);
		$str = preg_replace("/(P)/", 'p', $str);
		$str = preg_replace("/(Q)/", 'q', $str);
		$str = preg_replace("/(H)/", 'h', $str);
		$str = preg_replace("/(T)/", 't', $str);
		$str = preg_replace("/(K)/", 'k', $str);
		$str = preg_replace("/(S)/", 's', $str);
		$str = preg_replace("/(R)/", 'r', $str);
		$str = preg_replace("/(V)/", 'v', $str);
		$str = preg_replace("/(Y)/", 'y', $str);
		$str = preg_replace("/(W)/", 'w', $str);
		$str = str_replace('"', "", $str);
		$str = str_replace("?", "", $str);
		$str = str_replace(',', "", $str);
		$str = str_replace(':', "", $str);
		$str = str_replace('/', "-", $str);
		
		return trim($str);
	}


	
	function time_now(){
		$time = date("Y/m/d H:i:s");
		$time = gmdate("Y/m/d H:i:s", strtotime($time)+7*3600);
		return $time;
	}
	
	function time_news($time){
		$str = "";
		$str .= date("H", strtotime($time)) . ":" .date("i", strtotime($time));
		$str .= ", " .$this->time_get_th($time). ", ";
		$str .= date("d-m-Y", strtotime($time));
		return  $str;
	}
	
	function time_posts($time){
		$now = strtotime(date("Y/m/d H:i:s"));
		$get_time = $now - $time;
		
		if($get_time < 60){
			$result = "Cách đây " . $get_time . " giây";
		}
		else if($get_time < 60*60){
			$result = "Cách đây " . round($get_time/60) . " phút";
		}
		else if($get_time < 24*60*60 && $get_time >= 60*60){
			$result = "Cách đây " . round($get_time/(60*60)) . " giờ";
			if($get_time > 12*60*60){
				$result = "Lúc " . gmdate("H:i", $time+7*3600);
				if(gmdate("d", $now+7*3600)==gmdate("d", $time+7*3600)){
					$result .= ", hôm nay";
				}
				else {
					$result .= ", hôm qua";
				}
			}
		}
		else {
			$result = "Lúc " . gmdate("H:i", $time+7*3600) . ", ngày " . gmdate("d/m/Y", $time+7*3600);
		}
		return $result;
	}
	
	function time_get_th($time){
		$th = date("D", strtotime($time));
		switch ($th){
			case "Mon": $get = "Thứ Hai";
			break;
			case "Tue": $get = "Thứ Ba";
			break;
			case "Wed": $get = "Thứ Tư";
			break;
			case "Thu": $get = "Thứ Năm";
			break;
			case "Fri": $get = "Thứ Sáu";
			break;
			case "Sat": $get = "Thứ Bảy";
			break;
			case "Sun": $get = "Chủ Nhật";
			break;
		}
		return $get;
	}
	
	public function redirect_script($url){
		echo "<script> window.location = '".$url."' </script>";
	}
	
	public function redirect_back(){
		echo "<script> history.go(-1); </script>";
	}
	
	public function alert($title){
		echo "<script> alert('".$title."'); </script>";
	}
	
	
}
?>