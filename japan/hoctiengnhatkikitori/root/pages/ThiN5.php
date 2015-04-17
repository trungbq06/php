<?php
	session_start();			
	include '../entity/clsActiveAcc.php';
	include '../dao/ActiveAccDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CT Đề Thi</title>
<link rel="shortcut icon" href="images/logo/1240398_427175504059500_1348746955_n.png" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
  $("a.an_hien").click(function(){ 
    $("div#test").slideToggle(); 
  }); 
}); 
</script> 
<style>
#full{
	width: 775px;
	margin: 10px 287px 0px 287px;
	background: white;
	border: 1px solid;
	padding: 5px 5px 5px 5px;
}
#test{
display: none;
float: left;
}
</style>
</head>
<body bgcolor="#c7c7c7">
<div id="full">
	<p align="center"><strong>HỌC TIẾNG NHẬT 24H </strong></p>
	<p align="center"><strong>thuchanhtiengnhat.com </strong></p>
	<p align="center"><strong>CHƯƠNG TRÌNH HỌC TIẾNG NHẬT TRỰC TUYẾN</strong></p>
    <p style="font-weight:bold;">Trình Độ N5</p>
	<?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
	?>
	<p class="debai">１．	先週　デパ一トに　かいものに　いきました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau1" value="A">A． せんしゅ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="B">B． せんしゅう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">C. ぜんしゅ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="D">D: ぜんしゅう</div></p>
	<br />
    
    <p class="debai">2. ごはんの　後で　さんぽします。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau2" value="A">A． つぎ</div> </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="B">B. うしろ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="C">C. まえ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="D">D. あと</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">３． もう　いちど　言って　ください。</p>
	<p> <div style="float:left;"><input type="radio" name="cau3" value="A">A． いって</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="B">B. きって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="C">C. まって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="D">D. たって</div></p>
	<br />
    
    <p class="debai">4. ちかくに　山が　あります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau4" value="A">A． かわ</div> </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="B">B. やま</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="C">C. いけ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="D">D. うみ</div></p>
	<br />
    
    <p class="debai">５． この　ホテルは　へやが　多いです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau5" value="A">A． すくない</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="B">B. おおい</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="C">C. せまい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="D">D. ひろい </div></p>
	<br />
  	
    <p class="debai">６． ともだちと　いっしょに　学校に　いきます。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau6" value="A">A． がこう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="B">B. がこお</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="C">C. がっこう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="D">D. がっこお</div></p>
	<br />
    	
       
    <p class="debai">７． えんぴつが　六本　あります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau7" value="A">A． ろくぼん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="B">B. ろくぽん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="C">C. ろっぼん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="D">D. ろっぽん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    
    <p class="debai">８． この　新聞は　いくらですか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau8" value="A">A． しんむん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="B">B. しんぶん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="C">C. しむん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="D">D. しぶん</div></p>
	<br />
    
    <p class="debai">９． この　カメラは　安いです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau9" value="A">A． たかい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="B">B. やすい</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="C">C. おもい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="D">D. かるい</div></p>
	<br />
    
    <p class="debai">１０． かさは　外に　あります。</p>
	<p> <div style="float:left;"><input type="radio" name="cau10" value="A">A． いえ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="B">B.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="C">C.そと</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="D">D.にわ</div></p>
	<br />
    
    <p class="debai">１１． けさ　しゃわ一を　あびました。</p>
 	<p><div style="float:left;"><input type="radio" name="cau11" value="A">A． シャワ一</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="B">B.　シャウ一</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="C">C. シャウ一</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="D">D. シャウ一</div></p>
	<br />
    
    <p class="debai">１２． コ一ヒ一を　のみました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau12" value="A">A． 飯みました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="B">B. 飲みました</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="C">C. 餃みました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="D">D. 飾みました</div></p>
	<br />
     
    <p class="debai">１３． あたらしい　くるまを　かいました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau13" value="A">A． 卓</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="B">B. 東</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="C">C. 車</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="D">D. 頁</div></p>
	<br />
	
	<p class="debai">１４． この　ぼうしは　１０００えんです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau14" value="A">A． １０００内</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="B">B. １０００用</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="C">C. １０００冊</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="D">D. 1000円</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１５． しゅくだいが　はんぶん　おわりました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau15" value="A">A． 羊岔</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="B">B. 半岔</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="C">C. 羊分</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="D">D. 半分</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１６． わたしの　うちに　きませんか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau16" value="A">A． 来ませんか</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="B">B. 采ませんか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="C">C. 木ませんか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="D">D. 未ませんか</div></p>
	<br />
	
	<p class="debai">１７． きのう　たなかさんと　あいました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau17" value="A">A． 見いました　</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="B">B. 書いました　</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="C">C. 会いました</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="D">D. 話いました </div></p>
	<br />
	
	<p class="debai">１８． いもうとと　おなじ　ふくを　かいました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau18" value="A">A． 同じ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="B">B. 回じ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="C">C. 冋じ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="D">D. 固</div></p>
	<br />
	
	<p class="debai">１９． わたし　へやは　この　（　　　）の　２かいです。</p>
	<p> <div style="float:left;"><input type="radio" name="cau19" value="A">A． エレベ一タ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="B">B. プ一ル</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="C">C. エアコン</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="D">D. アパ一ト</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２０． さとうさんは　ギタ一を　じょうずに　（　　　　）。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau20" value="A">A． うたいます</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="B">B. ききます</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="C">C. ひきます</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="D">D. あそびます</div></p>
	<br />
	
	<p class="debai">２１． テ一プルに　おさらと　はしを　（　　　）ください。</p>
	<p> <div style="float:left;"><input type="radio" name="cau21" value="A">A． ならべて</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="B">B. とって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="C">C. たべて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="D">D.あらって</div></p>
	<br />
	
	<p class="debai">２２． けさ　そうじを　したから　へやは（　　　）です。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau22" value="A">A． きれい</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="B">B. きたない</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="C">C. あかるい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="D">D. くらい</div></p>
	<br />
	
	<p class="debai">２３． きょうは　５００（　　　）およぎました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau23" value="A">A． ど</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="B">B. ばん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="C">C. メ一トル</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="D">D. グラム </div>   </p>
	<br />
	
	<p class="debai">２４． えきから　たいしかんまでの　（　　　）を　かいて　ください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau24" value="A">A． しゃしん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="B">B. ちず</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="C">C. てがみ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="D">D. きっぷ</div></p>
	<br />
	
	<p class="debai">２５． うるさいから　テレビを　（　　　）ください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau25" value="A">A． けして</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="B">B. つけて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="C">C. しめて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="D">D. あけて</div></p>
	<br />
    
    <p class="debai">２６． きょうは　（　　　）が　ふって　います。</p>
	<p> <div style="float:left;"><input type="radio" name="cau26" value="A">A． くもり</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="B">B. はれ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="C">C. かぜ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="D">D. ゆき</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２７． はこに　りんごが　（　　　）あります。</p>
	<p> <div style="float:left;"><input type="radio" name="cau27" value="A">A． よっつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="B">B. いつつ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="C">C. むっつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="D">D. ななつ</div></p>
	<br />
    
	<p class="debai">２８． めがねは　つくえの　（　　　）に　あります。</p>
	<p> <div style="float:left;"><input type="radio" name="cau28" value="A">A． そば</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="B">B. よこ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="C">C. した</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="D">D. うえ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２９．まいばん　くにの　かぞくに　でんわします。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau29" value="A">A． よるは　ときどき　くにの　かぞくに　でんわします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="B">B. あさは　ときどき　くにの　かぞくに　でんわします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="C">C. よるは　いつも　くにの　かぞくに　でんわします。　　</div>  <div id='test'> <image src='images/icon-check.png'></div>  </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="D">D. あさは　いつも　くにの　かぞくに　でんわします。</div>   </p>
	<br />
    
    <p class="debai">３０． この　まちには　ゆうめいな　たてものが　あります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau30" value="A">A． この　まちには　ゆうめいな　ビルがあります。</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="B">B. この　まちには　ゆうめいな　おちゃが　あります。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="C">C. この　まちには　ゆうめいな　ケ一キが　あります。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="D">D. この　まちには　ゆうめいな　こうえんが　あります。</div></p>
	<br />
	
	<p class="debai">３１． その　えいがは　おもしろくなかったです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau31" value="A">A． その　えいがは　たのしかったです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="B">B. その　えいがは　つまらなかったです。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="C">C. その　えいがは　みじかかったです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="D">D. その　えいがは　ながかったです。</div></p>
	<br />
	
	<p class="debai">３２． たんじょうびは　６がつ１5にちです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau32" value="A">A． ６がつ１5にちに　けっこんしました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="B">B. ６がつ１5にちに　テストが　はじまりました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="C">C. ６がつ１5にちに　うまれました。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="D">D. ６がつ１5にちに　くにへ　かえりました。</div></p>
	<br />
	
	<p class="debai">３３． にねんまえに　きょうとへ　いきました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau33" value="A">A． きのう　きょうとへ　いきました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="B">B. おととい　きょうとへ　いきました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="C">C. きょねん　きょうとへ　いきました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="D">D. おととし　きょうとへ　いきました。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<br /><br />
	Ｐ２．文法、読解
	<br /><br />
	<img src="images/japan/n5/p2.png" width="100%" height="200" />
  
  	<p class="debai">１． にほん（　　　）ラ一メンは　おいしいです。</p>
	<p> <div style="float:left;"><input type="radio" name="cau34" value="A">A． に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="B">B. の</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="C">C. を　　</div>    </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="D">D.へ</div>   </p>
	<br />
			
	<p class="debai">２． わたしは　きょうだいが　ふたり　います。おとうと（　　　）いもうとです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau35" value="A">A． は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="B">B. も</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="C">C. と</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="D">D. か</div>   </p>
	<br />
			
	
	<p class="debai">３． やました「やましたさん（　　　）きのう　どこかに　でかけましたか。」 「たなか「いいえ、いえに　いました。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau36" value="A">A． で</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="B">B. は</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="C">C. を</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="D">D. に</div></p>
	<br />
	
	<p class="debai">4. （タクシ一で）</p>
	<p class="debai">A 「つぎの　かどを　みぎ　（　　　）まがって　ください。」</p>
	<p class="debai">B 「わかりました。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau37" value="A">A． が</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="B">B. や</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="C">C. か</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="D">D. に</div></p>
	<br />
			
	
	<p class="debai">５． きのう、わたしは　ひとり　（　　　）えいがを　みに　いきました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau38" value="A">A． が</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="B">B. を</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="C">C. で</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="D">D. は</div></p>
	<br />
	
	<p class="debai">６． やました「きょう　パ一ティ一が　ありますから、たなかさん（　　　）きてください。」 <br />たなか「ありがとうございます。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau39" value="A">A． に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="B">B. も</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="C">C. や</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="D">D. で</div></p>
	<br />
	
	<p class="debai">７． たなか「この　ぼうしは　やまださん（　　　）ですか。」 <br /> やまだ「はい・」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau40" value="A">A． や</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="B">B. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="C">C. の</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="D">D. か</div></p>
	<br />
	
	<p class="debai">８． えきまで　タクシ一で　１０００円（　　　）です。
	<p> <div style="float:left;"><input type="radio" name="cau41" value="A">A． ぐらい</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="B">B. など</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="C">C. ごろ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="D">D. も</div></p>
	<br />
	
	<p class="debai">９． A 「さようなら。」<br />B 「さようなら。また（　　　）。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau42" value="A">A． おととい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="B">B. きょう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="C">C. らいしゅう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="D">D. こんげつ</div></p>
	<br />
	
	<p class="debai">１０． わたしの　ははは　５０さいです。ちちは５５さいです。ははは　ちち（　　）５さい　わかいです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau43" value="A">A． から</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="B">B. まで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="C">C. より　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="D">D. のほうが</div></p>
	<br />
	
	<p class="debai">１１． こども「いただきます。」 <br /> はは　「あ、たべる（　　　）てを　あらいましょう。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau44" value="A">A． まえに</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="B">B. のまえに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="C">C. あとに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="D">D. のあとに</div></p>
	<br />
	
	<p class="debai">１２． A 「とうきょうでも　ゆきが　ふりますか。」 <br />  B 「ええ、ふりますよ。でも、きょねんは　あまり　（　　　）。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau45" value="A">A． ふりませんでした</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="B">B. ふりません</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="C">C. ふりました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="D">D. ふります</div></p>
	<br />
	
	<p class="debai">１３． （かわで） <br /> A 「みて　ください。ちいさいな　さかなが　たくさん（　　　）よ。」 <br /> B 「ほんとうですね。３０ぴきくらい　いますね。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau46" value="A">A．およぎます</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="B">B. およぎません</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="C">C. およぎました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="D">D.およいで　います</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１４． なかがわ「やまださんの　その　カメラは　いいですね。どこで　かいましたか。 <br />やまだ「いえ、これは　あに　（　　　）。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau47" value="A">A．あげました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="B">B. もらいました</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="C">C. うりました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="D">D. かいました</div></p>
	<br />
	
	<p class="debai">１５． たまごりょうりの　じょうずな　つくりかたを（　　　）よみました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau48" value="A">A． なにに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="B">B. なにも</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="C">C. なにかへ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="D">D. なにかで。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１６． （でんわで）<br />
	ほんだ：「はい、ほんだです。」<br />
	きたやま：「あ、きたやまはなこです。すみません、（　　）。」<br />
	ほんだ：「はい。ちょっと　まって　くださいね。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau49" value="A">A． ひろこさんを　おねがいします。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="B">B. ひろこさんを　ください。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="C">C.	ひろこさんと　はなしますか。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="D">D. ひろこさんと　はなしませんか。</div></p>
	<br /><br />
			
	<img src="images/japan/n5/giua.png" width="100%" height="400px">
	<br /><br />
  
	<p class="debai">１７． （みせで）<br />たなか「すみません。くだもの　　＿　　＿　　＊　　＿　か。」 <br />みせのひと「こちらです。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau50" value="A">A. どこ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="B">B. あります</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="C">C. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="D">D. に</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">１８． A 「やましたさんは？」<br />B 「となりの　へやで　＿　　＿　　＊　　＿　しています。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau51" value="A">A. れんしゅう</div> <div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="B">B. の</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="C">C. ギタ一</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="D">D. を</div></p>
	<br />
	
	<p class="debai">１９． A 「かいしゃ　＿　　＿　　＊　　＿　いって　いますか。」 <br />B 「わたしは　あるいて　いって　います。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau52" value="A">A. で</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="B">B. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="C">C. へ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="D">D. なに</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２０． やまだ「ジョンさん、しゅくだいは　ぜんぶ　おわりましたか。」<br />ジョン「いいえ、まだです。ここ　＿　　＿　　＊　　＿　、さいご　もんだいが　むずかしいです。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau53" value="A">A. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="B">B. かんたんでした</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="C">C. が</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="D">D. までまで</div></p>
	<br />
	
	<p class="debai">２１．（ほんやで）<br/>ヤン「わたしは　この　ほんを　かいます。アンナさんは　どんな　ほんが　いいですか。」<br/>アンナ「わたしは　もう　すこし　＿　　＿　　＊　　＿　　いいです。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau54" value="A">A. ほん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="B">B. かんたんな </div><div id='test'> <image src='images/icon-check.png'></div>  </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="C">C. が</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="D">D. にほんご</div></p>
	<br />
	
	<br /><br />
	<img src="images/japan/n5/giua3.png" width="100%" height="400px">
	<br /><br />
  
  	<p class="debai">22.</p>
	<p> <div style="float:left;"><input type="radio" name="cau55" value="A">A. いくから	</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="B">B. いってから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="C">C. くるから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="D">D. きてから </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">23.</p>
	<p> <div style="float:left;"><input type="radio" name="cau56" value="A">A. いきましたか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="B">B. いきませんか </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="C">C. いって いきましたか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="D">D. いって　いませんか</div></p>
	<br />
	
	<p class="debai">24.</p>
	<p> <div style="float:left;"><input type="radio" name="cau57" value="A">A. います</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="B">B. と</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="C">C. の</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="D">D. は </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">25.</p>
	<p> <div style="float:left;"><input type="radio" name="cau58" value="A">A. います</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="B">B. よみます</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="C">C. あります </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="D">D. します</div></p>
	<br />
	
	<p class="debai">26.</p>
	<p> <div style="float:left;"><input type="radio" name="cau59" value="A">A. だから </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="B">B. では</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="C">C. それから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="D">D. でも</div></p>
	<br />
  
	<br /><br />
	<img src="images/japan/n5/giua4.png" width="100%" height="400px">
	<br /><br />
  
	<p>（１）<br />わたしは　きょう、ともだちと　かいものに　いきました。　３かげつまえに　みた　えいがの　ＤＶＤが　ほしかったからです。かった　ＤＶＤは、ともだちや　あねと　いっしょに　みます。</p>
   
	<p class="debai">２７． 「わたし」は　きょう、なにを　しましたか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau60" value="A">A. ともだちと　えいがを　みに　いきました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="B">B. ともだちと　ＤＶＤを　かいに　いきました。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="C">C. あねと　えいがを　みに　いきました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="D">D. あねと　ＤＶＤを　かいに　いきました。</div></p>
	<br />
  
	<p>（２）<br />わたしの　へやには、　テ一ブルが　ひとつと　いすが　ふたつと　ほんだなが　ひとつ　あります。ほんが　たくさん　ありますから。　もっと　おおきい　ほんだなが　ほしいです。</p>

	<p class="debai">２８． いまの　へやは　どれですか。</p>
	<p><image src="images/japan/n5/28p4.png" width="100%" height="300px" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau61" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="D">4.</div></p>
	<br />

	<p>（３）<br />もりさんの　つくえの　うえに、やまぐちせんせいの　メモと　ほんが　あります。</p>
	<img src="images/japan/n5/(3).png" width="100%" height="300px">
	<br /><br />

	<p class="debai">２９． もりさんは　コピ一を　した　あとで、ほんを　どうしますか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau62" value="A">１． クラスで　つかいます。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="B">２． みなみさんに　わたします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="C">３． なかがわせんせいに　かえします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="D">４． やまぐちせんせいの　つくえの　うえに　おきます。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />

	<img src="images/japan/n5/5.png" width="100%" height="300px">
	<br /><br />

	<p>きのうの　よるは　おそくまで　しごとを　しました。とても　つかれました。しごとの　あと、でんしゃで　かえりました。
	<br />うちの　ちかくの　えきで　でんしゃを　おりました。そとは　あめでしたが、えきの　ひとが　わたしを　みて、「あの　はこの　なかの　かさを　つかってください。」と　いいました。はこの　なかには　かさが　３ぼん　ありました。
	<br />わたしは　「えっ、いいんですか。」と　ききました。
	<br />えきの　ひとは「あれは（みんなの　かさ）です。」おかねは　いりません。あした、　あの　はこに　かえして　ください。」と　いいました。
	<br />わたしは　「わかりました。ありがとうございます。」と　いって、かさを　かりて　かえりました。
	<br />
	<br />
	</p>
  
	<p class="debai">３０． どうして　こまりましたか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau63" value="A">１． おそい　じかんに　えきに　ついたから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="B">２． しごとが　たくさん　あったから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="C">３． とても　つかれたから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="D">４． かさが　なかったから。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３１． 「わたし」は、あした　どうしますか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau64" value="A">１． かさを　はこの　なかに　いれます。</div><div id='test'> <image src='images/icon-check.png'></div>  </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="B">２． かさを　えきの　ひとに　わたします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="C">３． おかねを　はこの　なかに　いれます。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="D">４． おかねを　えきの　ひとに　わたします。</div></p>
	<br />
  
	<img src="images/japan/n5/6.png" width="100%" height="300px">
	<img src="images/japan/n5/6,1.png" width="500" height="300px">
  
	<p class="debai">３２． あらきやで　トイレットぺ一パ一と　にくと　やさいを　おなじ　ひに　かいたいです。いつがやすいですか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． ６がつ１１にち（げつ）と　１２にち（か）</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． ６がつ１３にち（すい）と　１４か（もく） </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． ６がつ１５にち（きん）と　１６にち（ど）</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． ６がつ１７にち（にち）と　１８にち（げつ）</div></p>
	<br />
  
	<p>P3: 聴解
		<audio controls>
		<source src="audio/n5/01-ちょうかいーせつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n5/02-もんだい１ーせつめい.mp3" type="audio/ogg">
	</audio>
	</p>
	<img src="images/japan/n5/mp3.png" width="100%" height="500px" />

	<p class="debai">
	<audio controls>
		<source src="audio/n5/03-もんだい１ーれい.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau66" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="D">4.</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/04-もんだい１ー１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 04.png" width="100%" height="300px"  /></p>
	<p> <div style="float:left;"><input type="radio" name="cau67" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="D">4.</div></p>
	<br />
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/05-もんだい１－２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau68" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="D">4.</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/06-もんだい１－３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 06.png" width="100%" height="300px"  /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau69" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="D">4.</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/07-もんだい１－４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 07.png" width="100%" height="300px"  /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau70" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="D">4.</div></p>
	<br />
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/08-もんだい１－５ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 08.png" width="100%" height="300px"  /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau71" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="D">4.</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/09-もんだい１－６ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 09.png" width="100%" height="300px"  /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau72" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/10-もんだい１－７ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau73" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<img src="images/japan/n5/mp3 giua.png" width="100%" height="300px" />
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/11-もんだい２－せつめい" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n5/12-もんだい２－れい.mp3" type="audio/ogg">
	</audio>
	
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau74" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="D">4.</div></p>
	<br />

	<p class="debai">
	<audio controls>
		<source src="audio/n5/13-もんだい２－１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau75" value="A">1. じかん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="B">2. じかん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="C">3. じかん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="D">4. じかん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/14-もんだい２－２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau76" value="A">1. ５１２－７７３３</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="B">2. ５１２－７７３４</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="C">3. ５１２－７７４３ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="D">4. ５１２－７７４４</div></p>
	<br />
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/15-もんだい２－３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau77" value="A">1. りょうしん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="B">2. あね </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="C">3. いもうと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="D">4. おとうと</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/16-もんだい２－４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau78" value="A">1.しょくどう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="B">2. きっさてん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="C">3. パンや</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="D">4. きょうしつ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/17-もんだい２－５ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau79" value="A">1. くろいボ一ルペン</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="B">2. あかいボ一ルペン</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="C">3. くろいえんぴつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="D">4. あかいえんぴつ</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/18-もんだい２－６ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau80" value="A">1. こうえん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="B">2. えき</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="C">3. きっさてん </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="D">4. レストラン</div></p>
	<br />
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/19-ちょっと　やすみましょう.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n5/mp3 cuoi.png" width="100%" height="500px" /></p>
  
	<p class="debai">
	<audio controls>
		<source src="audio/n5/20-もんだい３－せつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n5/21-もんだい３－れい.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau81" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="D">4.</div></p>
	<br />
	
	<p class="debai">
	<audio controls>
		<source src="audio/n5/22-もんだい３－１ばん.mp3" type="audio/ogg">
	</audio>
	<p><img src="images/japan/n5/mp3 22.png" width="100%" height="300px" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau82" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="D">4.</div></p>
	<br />
  
	<p class="debai">
		<audio controls>
		<source src="audio/n5/23-もんだい３－２ばん.mp3" type="audio/ogg">
	</audio>
	<p><img src="images/japan/n5/mp3 23.png" width="100%" height="300px" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau83" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/24-もんだい３－３ばん.mp3" type="audio/ogg">
	</audio>
	<p><img src="images/japan/n5/mp3 24.png" width="100%" height="300px" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau84" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="D">4.</div></p>
	<br />
  
	<p class="debai">
		<audio controls>
		<source src="audio/n5/25-もんだい３－４ばん.mp3" type="audio/ogg">
	</audio>
	<p><img src="images/japan/n5/mp3 25.png" width="100%" height="300px" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau85" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/26-もんだい３－５ばん.mp3" type="audio/ogg">
	</audio>
	<p><img src="images/japan/n5/mp3 26.png" width="100%" height="300px" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau86" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="D">4.</div></p>
	<br />
  
	<p><img src="images/japan/n5/mp3 end4.png" width="100%" height="300px" /></p>
	<p class="debai">
		<audio controls>
		<source src="audio/n5/27-もんだい４－せつめい.mp3" type="audio/ogg">
	</audio>
		<audio controls>
		<source src="audio/n5/28-もんだい４－れい.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau87" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/29-もんだい４－１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau88" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="D">4.</div></p>
	<br />
  
	<p class="debai">
		<audio controls>
		<source src="audio/n5/30-もんだい４－２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau89" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/31-もんだい４－３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau90" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/32-もんだい４－４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau91" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="D">4.</div></p>
	<br />
  
	<p class="debai">
		<audio controls>
		<source src="audio/n5/33-もんだい４－５ばん.mp3" type="audio/ogg">
	</audio>
	<p> <div style="float:left;"><input type="radio" name="cau92" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="D">4.</div></p>
	<br />
	
	<p class="debai">
		<audio controls>
		<source src="audio/n5/34-もんだい４－６ばん.mp3" type="audio/ogg">
	</audio>
 	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="D">4.</div></p>
	<br />
  
	<p class="debai">
		<audio controls>
		<source src="audio/n5/35-おわり.mp3" type="audio/ogg">
	</audio>

	<p align="center">
    <a href="javascript:void(0)" class="an_hien"><input type="submit" name="button" id="button" value="Xem Đáp Án"></a>
	</p>
<?php
			} else {
				echo 'Mời Bạn Nạp Tiền Để Xem Nội Dung Này!';
			}
		} else {
		echo 'Mời Bạn Đăng Nhập Để Xem Nội Dung Này!';
		}
	} else {
		echo 'Mời Bạn Đăng Nhập Để Xem Nội Dung Này!';
	}
?>
</div>
<div style="display: block; position: fixed; top: 20px; left: 30px; width:150px; height:50px; background-color: aliceblue;">
	<p>&nbsp;* <a href="ThiOnline.php">Đề Thi Liên Quan</a></p>
</div>
</body>
</html>