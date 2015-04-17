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
    <p style="font-weight:bold;">Trình Độ N4</p>
	<?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
	?>
	<p>Ｐ１．文字．語彙</p>
	<p><img src="images/japan/n4/1.png" width="100%" height="200" /></p>
	
	<p class="debai">１．	くつに　石が　入って　いました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau1" value="A">A. いし</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="B">B. すな</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">C. くさ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="D">D. えだ</div></p>
	<br />
    
    <p class="debai">2. にほんで　いろいろな　経験を　しました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau2" value="A">A. けいけん </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="B">B. けいげん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="C">C. けけん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="D">D. けげん</div></p>
	<br />
  
	<p class="debai">３． 店員に　トイレが　どこに　あるか　聞きました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau3" value="A">A. てにん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="B">B. てんにん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="C">C. ていん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="D">D. てんいん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    
    <p class="debai">4. きょうは　食堂が　こんで　いました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau4" value="A">A． しゅくど</div> </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="B">B. しょくどう </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="C">C. しょくど</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="D">D. しゅくどう</div></p>
	<br />
    
    <p class="debai">５． この　まどから　港が　見えます。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau5" value="A">A． うみ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="B">B. みなと </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="C">C. みずうみ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="D">D. いけ</div></p>
	<br />
  	
    <p class="debai">６． この　小説は　おもしろかったです。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau6" value="A">A． しょせつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="B">B. しょぜつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="C">C. しょうせつ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="D">D. しょうぜつ</div></p>
	<br />
    	
       
    <p class="debai">７． まいばん　日記を　書いて　います。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau7" value="A">A． にっき </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="B">B. にちき</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="C">C. にっきい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="D">D. にちきい</div></p>
	<br />
    
    <p class="debai">８． 夕方、雨が　ふりました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau8" value="A">A． ゆうほう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="B">B. ゆうがた </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="C">C. ゆほう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="D">D. ゆがた</div></p>
	<br />
    
    <p class="debai">９． もうすぐ　秋ですね。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau9" value="A">A． ふゆ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="B">B. なつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="C">C. はる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="D">D. あき </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
    <p><img src="images/japan/n4/2.png" width="100%" height="200" /></p>
	
    <p class="debai">１０． すずきさんは　あおい　シャツを　きて　います。</p>
	<p> <div style="float:left;"><input type="radio" name="cau10" value="A">A． 青い </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="B">B. 黒い</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="C">C. 赤い</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau10" value="D">D. 白い</div></p>
	<br />
    
    <p class="debai">１１． かいぎの　ばしょを　おしえて　ください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau11" value="A">A. 揚斦</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="B">B.　場斦</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="C">C. 揚所</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="D">D. 場所 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    
    <p class="debai">１２． わたしの　いえは　えきから　あるいて　５分です。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau12" value="A">A. 羌いて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="B">B. 走いて </div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="C">C. 歩いて </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="D">D. 徒いて</div></p>
	<br />
     
    <p class="debai">１３． ちかてつが　できて　べんりに　なりました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau13" value="A">A. 哽利</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="B">B. 便理</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="C">C. 哽理</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="D">D. 便利 </div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１４． とても　ねむかったので、　コ一ヒ一を　飲みました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau14" value="A">A． 昩むかった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="B">B. 味かった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="C">C. 眠かった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="D">D. 眠かった </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１５． きょうは　ゆきが　ふって　います。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau15" value="A">A． 雪 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="B">B. 電</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="C">C. 雷</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="D">D. 雲</div></p>
	<br />
	<p><img src="images/japan/n4/3.png" width="100%" height="200" /></p>
	<p class="debai">１６． けさ　せんたくした　ふくが　また　（　　　）いません。</p>
	<p> <div style="float:left;"><input type="radio" name="cau16" value="A">A． ひえて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="B">B. なおって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="C">C. ぬれて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="D">D. かわいて </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１７． スミスさんは　いつも　（　　　）　べんきょうして　います。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau17" value="A">A． だいじに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="B">B. たいせつに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="C">C. ねっしんに </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="D">D. まっすぐに</div></p>
	<br />
	
	<p class="debai">１８． わたしは　にほんの　まんがに　（　　　）が　あります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau18" value="A">A． きぶん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="B">B. きょうみ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="C">C. こころ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="D">D. しゅみ</div></p>
	<br />
	
	<p class="debai">１９． わたしは　テニスの　（　　　）を　よく　しりません。</p>
	<p> <div style="float:left;"><input type="radio" name="cau19" value="A">A． アイデイア</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="B">B. ル一ル </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="C">C. あんない</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="D">D. せつめい</div></p>
	<br />
	
	<p class="debai">２０． りょこうの　にもつは　もう　（　　　）　できましたか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau20" value="A">A. やくそく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="B">B. りよう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="C">C. せわ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="D">D. ようい </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２１． おとうとと　（　　　）して　母に　あげる　プレゼントを　えらびました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau21" value="A">A. さんせい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="B">B. あいさつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="C">C. そうだん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="D">D. へんじ</div></p>
	<br />
	
	<p class="debai">２２． この　にもつを　あそこに　（　　　）　ください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau22" value="A">A． はこんで </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="B">B. つたえて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="C">C. ひろって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="D">D. むかえて</div></p>
	<br />
	
	<p class="debai">２３． この　きかいは　つかいかたを　まちがえると　とても　（　　　）です。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau23" value="A">A． けっこう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="B">B. きけん </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="C">C. じゆう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="D">D. あんぜん</div></p>
	<br />
	
	<p class="debai">２４． 入口の　前には　車を　（　　　）ください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau24" value="A">A． やめないで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="B">B. しめないで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="C">C. とめないで </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="D">D. きめないで</div></p>
	<br />
	
	<p><img src="images/japan/n4/4.png" width="100%" height="200" /></p>
	
	<p class="debai">２５． バスが　しゅっぱつしました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau25" value="A">A． バスが　とまりました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="B">B. バスが　つきました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="C">C. バスが　でました。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="D">D. バスが　まがりました。</div></p>
	<br />
    
    <p class="debai">２６． もっと　ていねいに　かいて　ください。</p>
	<p> <div style="float:left;"><input type="radio" name="cau26" value="A">A． もっと　おおきく　かいて　ください。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="B">B. もっと　きれいに　かいて　ください。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="C">C. もっと　ふとく　かいて　ください。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="D">D. もっと　かんたんに　かいて　ください。</div></p>
	<br />
	
	<p class="debai">２７． あには　えが　うまいです。</p>
	<p> <div style="float:left;"><input type="radio" name="cau27" value="A">A. あには　えが　じょうずです。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="B">B. あには　えが　きらいです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="C">C. あには　えが　へたです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="D">D. あには　えが　すきです。</div></p>
	<br />
    
	<p class="debai">２８． きのうは　ねぼうしました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau28" value="A">A． きのうは　ねるのが　おそく　なって　しまいました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="B">B. きのうは　はやく　ねて　しまいました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="C">C. きのうは　おきるのが　おそく　なって　しまいました。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="D">D. きのうは　はやく　おきて　しまいました。</div></p>
	<br />
	
	<p class="debai">２９． たなかさんは　せんせいに　ほめられました。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau29" value="A">A． 先生は　たなかさんに　「気を　つけてね」と　言いました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="B">B. 先生は　たなかさんに　「とても　よかったですよ」と 言いました。 </div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="C">C. 先生は　たなかさんに　「ちょっと　休みましょう」と 言いました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="D">D. 先生は　たなかさんに　「たいへんですね」と　言いました。</div>   </p>
	<br />
    
	<p><img src="images/japan/n4/5.png" width="100%" height="200" /></p>
	
    <p class="debai">３０． るす</p>
 	<p> <div style="float:left;"><input type="radio" name="cau30" value="A">A． さいきん　いそがしくて、しごとが　るすに　なりません。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="B">B. あの　デパ一トは　きょうは　るすです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="C">C. この　ひこうきには　るすの　せきが　ありません。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="D">D. ともだちの　いえに　行ったら　るすでした。 </div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３１． しんせつ</p>
 	<p> <div style="float:left;"><input type="radio" name="cau31" value="A">A． この　りょうりは　からだに　とても　しんせつですよ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="B">B. コンビニは　何でも　買えるので　とても　しんせつです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="C">C. この　びょういんの　おいしゃさんは　とても　しんせつですよ。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="D">D. わたしの　母は　にわの　花に　とても　しんせつです。</div></p>
	<br />
	
	<p class="debai">３２． にがい</p>
 	<p> <div style="float:left;"><input type="radio" name="cau32" value="A">A． かぜを　ひいたので、　こえが　にがいです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="B">B. くらい　みちを　一人で　あるくのは　にがいです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="C">C. にもつが　おもかったので、　うでが　にがいです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="D">D. この　くすりは　とても　にがいです。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３３． わる</p>
	<p> <div style="float:left;"><input type="radio" name="cau33" value="A">A． おさらを　おとして、　わって　しまいました。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="B">B. しんぶんを　わって、　かばんに　入れました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="C">C. ようふくを　わって、母に　おこられました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="D">D. この　ジャムを　三本の　びんに　わって　ください。</div></p>
	<br />
	
  	<p class="debai">34． ちこく</p>
	<p> <div style="float:left;"><input type="radio" name="cau34" value="A">A． あの　とけいは　ちょっと　ちこくして　います。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="B">B. じゅぎょうに　ちこくして　すみません。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="C">C. １０時の　でんしゃに　ちこくして　しましました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="D">D. れんらくが　ちこくして　すみません。</div></p>
	<br />
	<br />
	
	<p>Ｐ２．文法</p>
	<p><img src="images/japan/n4/6.png" width="100%" height="400px"></p>
	<p class="debai">1． わたしの　父は　中国語も　英語　（　　　）　話せます。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau35" value="A">A． を</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="B">B. で</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="C">C. も </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="D">D. が</div>   </p>
	<br />
			
	
	<p class="debai">2． これは　わたしが　こめ　（　　　）つくった　パンです。　</p>
 	<p> <div style="float:left;"><input type="radio" name="cau36" value="A">A. に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="B">B. の</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="C">C. や</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="D">D. で </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">3. 男の子の　かおは　ちちおやより　ははおや　（　　　）にると　いう　話を　聞いた。</p>
	<p> <div style="float:left;"><input type="radio" name="cau37" value="A">A． に </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="B">B. へ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="C">C. も</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="D">D. を</div></p>
	<br />
			
	
	<p class="debai">4． いもうとは　おしゃべりだ。しずかなのは、しょくじの　とき（　　　）だ。</p>
	<p> <div style="float:left;"><input type="radio" name="cau38" value="A">A． しか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="B">B. だけ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="C">C. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="D">D. の</div></p>
	<br />
	
	<p class="debai">5． A「たんじょうびに　たなかさんから　何を　もらったんですか。」<br />B「たなかさん　（　　　）うでどけいを　もらいました。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau39" value="A">A． からが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="B">B. からに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="C">C. からで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="D">D. からは </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">6． （会社で）<br />A「すみません、やまださんは　どこですか。」<br />B「やまださんは　かいぎちゅうですが、かいぎは　１１時半（　　　）おわると　おもいますよ」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau40" value="A">A． までは</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="B">B. までには </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="C">C. までも</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="D">D. までにも</div></p>
	<br />
	
	<p class="debai">7． 学生「先生、この　ことばは　（　　　）いみですか。」<br />先生「やさしい　と　いう　いみです。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau41" value="A">A． どうやって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="B">B. どのぐらい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="C">C. どういう </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="D">D. どう</div></p>
	<br />
	
	<p class="debai">8． チャン「ふるかわさん、この　じゅぎょうの　レポ一ト、おわりましたか。」<br />ふるかわ「はい、一週間　かかりましたが、きのうの　よる、（　　　）おわりました。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau42" value="A">A． やっと </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="B">B. ずっと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="C">C. もっと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="D">D. きっと</div></p>
	<br />
	
	<p class="debai">9． A「あした　いっしょに　ドライブに　いきませんか。」<br />B「（　　　）、ごめんなさい、あしたは　アルバイトが　あるんです。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau43" value="A">A． 行きたいから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="B">B. 行きたいけれど </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="C">C. 行きたいし</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="D">D. 行きたくて</div></p>
	<br />
	
	<p class="debai">１0． 子ども「ねえ、ゲ一ムを　しても　いい？」<br />ははおや「しゅくだいを　（　　　）あとですね。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau44" value="A">A. していた</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="B">B. している</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="C">C. する</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="D">D. した </div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１1． この　すいかは　（　　　）すぎて、れいぞうこに　入らない。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau45" value="A">A. 大き </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="B">B. 大きい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="C">C. 大きく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="D">D. 大きくて</div></p>
	<br />
	
	<p class="debai">１2． A「たんじょうび　おめでとうございます。これ、プレゼントです。どうぞ。」<br />B「ありがとうございます。たいせつに　（　　　）。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau46" value="A">A. します </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="B">B. います</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="C">C. なります</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="D">D. あります</div></p>
	<br />
	
	<p class="debai">13． A「きのうは　ひっこしを　（　　　）、どうも　ありがとうございました。」<br />B「いいえ、どういたしまして。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau47" value="A">A. てつだって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="B">B. てつだったので</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="C">C. てつだって　くれて　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="D">D. てつだったから</div></p>
	<br />
	
	<p class="debai">１4． 今日、わたしは　えんぴつと　けしゴムを　わすれたので、となりの　人に　かして　（　　　）。</p>
	<p> <div style="float:left;"><input type="radio" name="cau48" value="A">A． やりました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="B">B. あげました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="C">C. くれました</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="D">D. もらいました </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１5． わたしの　本だなには　（　　　）読んで　いない　まんがが　たくさん　あります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau49" value="A">A. 買うあいだ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="B">B. 買ったまま </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="C">C. 買いそうで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="D">D. 買っている</div></p>
	<br />
	<br />
			
	<p><img src="images/japan/n4/7.png" width="100%" /></p>
	<br />
	<p class="debai">１6． A「コンサ一トには　もう　まにあわないですね。」<br />B「今すぐ　　＿　　＿　　＊　　＿　　行こう。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau50" value="A">A. タクシ一に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="B">B. タクシ一で</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="C">C. まにあうかもしれないから </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="D">D. のれば</div></p>
	<br />
  
	<p class="debai">１7． やまだ「たなかさん、　これから　しょくじでも　どうですか。<br />たなか「すみません。ちょうど　　＿　　＿　　＊　　＿　　です。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau51" value="A">A. なん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="B">B. ところ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="C">C. 食べた</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="D">D. 今</div></p>
	<br />
	
	<p class="debai">１8． A「あしたは　だいじな　おきゃくさまに　会うから、　＿　　＿　　＊　　＿　　　いけませんよ。」<br />B「わかりました。あしたは　新しい　くつを　はいて　来ます。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau52" value="A">A. くつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="B">B. は</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="C">C. そんな</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="D">D. で </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">19． 今日は　かぜが　　＿　　＿　　＊　　＿　　出かけたくない。</p>
	<p> <div style="float:left;"><input type="radio" name="cau53" value="A">A. し</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="B">B. だから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="C">C. さむそう </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="D">D. つよい</div></p>
	<br />
	
	<p class="debai">２0． たなか「やまださん。とうきょうの　大学に　行く　ことを、もう　ごりょうしんに　はなしましたか。」<br />やまだ「いいえ。でも、もし　りょうしんに　　＿　　＿　　＊　　＿　　　つもりです。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau54" value="A">A. はんたい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="B">B. する</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="C">C. とうきょうで　べんきょう　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="D">D. されても</div></p>
	<br />
	<br />

	<img src="images/japan/n4/8.png" width="100%" />
	<img src="images/japan/n4/9.png" width="100%" />
	<br />
  
  	<p class="debai">21.</p>
	<p> <div style="float:left;"><input type="radio" name="cau55" value="A">A. かうでしょう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="B">B. かって　います </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="C">C. かって　いますか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="D">D. かって　いました</div></p>
	<br />
	
	<p class="debai">22.</p>
	<p> <div style="float:left;"><input type="radio" name="cau56" value="A">A. こわした　ところだ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="B">B. こわされて　いる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="C">C. こわして　しまった </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="D">D. こわされた</div></p>
	<br />
	
	<p class="debai">23.</p>
	<p> <div style="float:left;"><input type="radio" name="cau57" value="A">A. さびしく　なります</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="B">B. さびしく　なくなりました </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="C">C. さびしく　なるかもしれません</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="D">D. さびしく　なくなったそうです</div></p>
	<br />
	
	<p class="debai">24.</p>
	<p> <div style="float:left;"><input type="radio" name="cau58" value="A">A. それに </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="B">B. たとえば</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="C">C. だから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="D">D. それなら</div></p>
	<br />
	
	<p class="debai">25.</p>
	<p> <div style="float:left;"><input type="radio" name="cau59" value="A">A. が</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="B">B. で</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="C">C. と</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="D">D. は </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<br />
	
	<img src="images/japan/n4/10.png" width="100%" />
	<br />
	<img src="images/japan/n4/11.png" width="100%" />
	
	<p class="debai">２6． 石川さんは、来週、何をすると言っていますか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau60" value="A">A. アリさんに本を２さつかえします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="B">B. アリさんに本を３さつかえします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="C">C. アリさんに本を２さつかします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="D">D. アリさんに本を３さつかします。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />

	<img src="images/japan/n4/12.png" width="100%" />
	<br />
	
	<p class="debai">２7． このお知らせから、こうえんについてわかることは何ですか。</p>
	<p><image src="images/japan/n5/28p4.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau61" value="A">1. 午後１０時にこうえんに入ってもいいです。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="B">2. 入り口にオ一トバイをとめてはいけません。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="C">3. サッカ一のれんしゅうをしてはいけません。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="D">4. たばこをすってもいいです。</div></p>
	<br />
	
	<img src="images/japan/n4/13.png" width="100%" />
	<br />

	<p class="debai">２8． トムさんは、山田先生に何を知らせなければなりませんか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau62" value="A">１． やくそくを明日にかえられるかどうか。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="B">２． やくそくをあさってにかえられるかどうか。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="C">３． トムさんの明日の午後のつごう。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="D">４． トムさんのあさっての午前のつごう。</div></p>
	<br />

	<img src="images/japan/n4/14.png" width="100%" />
	<br />

	<p class="debai">29． 石田さんの仕事ではないものはどれですか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau63" value="A">１． そうだんに来た人に本についてしょうかいします。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="B">２． 本をおく場所はどこがいいか、考えます。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="C">３． 新聞にのっている、よい本のしょうかいぶんをさがします。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="D">４． 小さな子どもたちに、いろいろなえほんを読みます。</div></p>
	<br />
	<img src="images/japan/n4/15.png" width="100%" />
	<img src="images/japan/n4/16.png" width="100%" />
	
	<p class="debai">３0． どんな①ホテルにとまりましたか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau64" value="A">１． 山の中の大きなホテル。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="B">２． 古いが、中はきれいなホテル。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="C">３． テレビやゲ一ムが楽しめるホテル。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="D">４． いろいろなものがあって、便利なホテル。</div></p>
	<br />
  
	<p class="debai">３1． 駅からホテルまでどうやって行きましたか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． 駅から３０分バスに乗って、バスていから２時間以上歩きました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． 駅から３０分バスていまで歩いて、バスに２時間以上乗りました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． 駅から２時間近くバスに乗って、バスていから３０分以上歩きました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． 駅から２時間以上バスに乗って、バスていから３０分近く歩きました。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３2． ホテルに着いてから、何をしましたか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． へやに行かないで、すぐにみずうみに行きました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． へやに行って、夜までずっと休みました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． へやでテレビを見てから、ほしを見に外へ出しました。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． へやで少し休んでから、さんぽに行きました。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３3． ②こんな生活とありますが、どんな生活ですか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． 山であそんだり、ひるねをしたりする生活。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． ゲ一ムをしたり、むしをとったりする生活。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． さんぽをしたり、テレビを見たりする生活。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． おいしいものを食べて、何もしない生活。</div></p>
	<br />
	
	<img src="images/japan/n4/17.png" width="100%" />
	<img src="images/japan/n4/18.png" width="100%" />

	<p class="debai">３4． 自転車をかりて乗りたい人は、いくらはらわなければなりませんか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． ただ </div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． １００円</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． ２００円 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． ３００円</div></p>
	<br />
	
	<p class="debai">３5． バスケットボ一ルのル一ルや、やり方を習ってからしあいに出たい人は、まずどうしなければなりませんか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． １０：００までにうけつけに行きます。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． １０：００までにたいいくかんに行きます。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． １３：００までにうけつけに行きます。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． １３：００までにたいいくかんに行きます。</div></p>
	<br />
	
	<p>P3: 聴解
	<audio controls>
		<source src="audio/n4/01-ちょうかい-せつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n4/02-もんだい１-せつめい.mp3" type="audio/ogg">
	</audio>
	</p>
	<img src="images/japan/n4/19.png" width="100%" />

	<p class="debai">例：
	<audio controls>
		<source src="audio/n4/03-もんだい１-れい.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau66" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１番： 
	<audio controls>
		<source src="audio/n4/04-もんだい１-１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/20.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau67" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="D">4.</div></p>
	<br />
  
	<p class="debai">２番： 
	<audio controls>
		<source src="audio/n4/05-もんだい１-２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/21.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau68" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３番： 
	<audio controls>
		<source src="audio/n4/06-まんだい１-３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau69" value="A">1. ２まい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="B">2. ４まい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="C">3. ５まい </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="D">4. ６まい</div></p>
	<br />
	
	<p class="debai">４番： 
	<audio controls>
		<source src="audio/n4/07-もんだい１-４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n4/22.png" width="100%" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau70" value="A">1. アイ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="B">2. アエ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="C">3. イウ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="D">4. イエ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">５番： 
	<audio controls>
		<source src="audio/n4/08-もんだい１-５ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n5/mp3 08.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau71" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="D">4.</div></p>
	<br />
	
	<p class="debai">６番： 
	<audio controls>
		<source src="audio/n4/09-もんだい１-６ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><image src="images/japan/n4/24.png" width="100%" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau72" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="D">4.</div></p>
	<br />
	
	<p class="debai">７番： 
	<audio controls>
		<source src="audio/n4/10-もんだい１-７ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau73" value="A">1. ８じはんに　きょうしつ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="B">2. ８じはんに　たいいくかんの　まえ。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="C">3. ９じに　きょうしつ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="D">4. ９じに　たいいくかんの　まえ。</div></p>
	<br />
	
	<p><image src="images/japan/n4/25.png" width="100%" /></p>
  	
	<p class="debai">例：
	<audio controls>
		<source src="audio/n4/12-もんだい２-せつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n4/13-もんだい２-れい.mp3" type="audio/ogg">
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
	
	<p class="debai">１番： 
	<audio controls>
		<source src="audio/n4/14-もんだい２-１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau75" value="A">1. りょうしん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="B">2. あね</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="C">3. いもうと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="D">4. おとうと </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２番： 
	<audio controls>
		<source src="audio/n4/15-もんだい２-２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau76" value="A">1. いますぐ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="B">2. きょうの　４じ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="C">3. きょうの　６じ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="D">4. あしたの　ひる</div></p>
	<br />
  
	<p class="debai">３番： 
	<audio controls>
		<source src="audio/n4/16-もんだい２-３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau77" value="A">1. りょこうに　行きたいから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="B">2. デパ一トで　かいものが　したいから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="C">3. にほんじんの　はたらきかたが　しりたいから。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="D">4. にほんごの　べんきょうが　したいから。</div></p>
	<br />
	
	<p class="debai">４番：
	<audio controls>
		<source src="audio/n4/17-もんだい２-４ばん.mp3" type="audio/ogg">
	</audio> 
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau78" value="A">1. かようび</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="B">2. すいようび</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="C">3. もくようび </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="D">4. きんようび</div></p>
	<br />
	
	<p class="debai">５番： 
	<audio controls>
		<source src="audio/n4/18-もんだい２-５ばん.mp3" type="audio/ogg">
	</audio> 
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau79" value="A">1. ぜんぜん　よまない。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="B">2. つきに　１さつ　よむ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="C">3. つきに　３さつ　よむ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="D">4. つきに　１０さついじょう　よむ。</div></p>
	<br />
	
	<p class="debai">６番： 
	<audio controls>
		<source src="audio/n4/19-もんだい２-６ばん.mp3" type="audio/ogg">
	</audio> 
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau80" value="A">1. しょうがっこうの　せんせい。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="B">2. ピアニスト </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="C">3. けいさつかん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="D">4. かんごし</div></p>
	<br />
  
	<p class="debai">７番： 
	<audio controls>
		<source src="audio/n4/20-もんだい２-７ばん.mp3" type="audio/ogg">
	</audio> 
	</p>
	
	<p> <div style="float:left;"><input type="radio" name="cau81" value="A">1. １０じ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="B">2. １０じ１０ぷん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="C">3. １０じ２０ぷん </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="D">4. １０じ３０ぷん</div></p>
	<br />
	
	<audio controls>
		<source src="audio/n4/21-ちょっと　やすみましょう.mp3" type="audio/ogg">
	</audio> 
	
	<p><img src="images/japan/n4/26.png" width="100%" /></p>
	
	
	<p class="debai">例：　 
	<audio controls>
		<source src="audio/n4/22-もんだい３-せつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n4/23-もんだい３-れい.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau82" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１番： 
	<audio controls>
		<source src="audio/n4/24-もんだい３-１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/27.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau83" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="C">3.</div></p>
	<br />
	
	<p class="debai">２番： 
	<audio controls>
		<source src="audio/n4/25-もんだい３-２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/28.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau84" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="C">3.</div></p>
	<br />
  
	<p class="debai">３番： 
	<audio controls>
		<source src="audio/n4/26-もんだい３-３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/29.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau85" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="C">3.</div></p>
	<br />
	
	<p class="debai">４番： 
	<audio controls>
		<source src="audio/n4/27-もんだい３-４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/30.png" width="100%" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau86" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="C">3.</div></p>
	<br />
  
	<p class="debai">５番： 
	<audio controls>
		<source src="audio/n4/28-もんだい３-５ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p><img src="images/japan/n4/31.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau87" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="C">3.</div></p>
	<br />
	
	<p><img src="images/japan/n4/32.png" width="100%" /></p>
	<p class="debai">例：　 
	<audio controls>
		<source src="audio/n4/29-もんだい４-せつめい.mp3" type="audio/ogg">
	</audio>
	<audio controls>
		<source src="audio/n4/30-もんだい４-れい.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau88" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">１番： 
	<audio controls>
		<source src="audio/n4/31-もんだい４-１ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau89" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="C">3.</div></p>
	<br />
	
	<p class="debai">２番： 
	<audio controls>
		<source src="audio/n4/32-もんだい４-２ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau90" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３番： 
	<audio controls>
		<source src="audio/n4/33-もんだい４-３ばん.mp3" type="audio/ogg">
	</audio>
	</p>
 	<p> <div style="float:left;"><input type="radio" name="cau91" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="C">3.</div></p>
	<br />
  
	<p class="debai">４番：
	<audio controls>
		<source src="audio/n4/34-もんだい４-４ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau92" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="C">3.</div></p>
	<br />
	
	<p class="debai">５番： 
	<audio controls>
		<source src="audio/n4/35-もんだい４-５ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3.</div></p>
	<br />
	
	<p class="debai">６番： 
	<audio controls>
		<source src="audio/n4/36-もんだい４-６ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">７番： 
	<audio controls>
		<source src="audio/n4/37-もんだい４-７ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">８番： 
	<audio controls>
		<source src="audio/n4/38-もんだい４-８ばん.mp3" type="audio/ogg">
	</audio>
	</p>
	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3.</div></p>
	<br />
  
	<p class="debai">８番： 
	<audio controls>
		<source src="audio/n4/39-おわり.mp3" type="audio/ogg">
	</audio>
	</p>
	
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