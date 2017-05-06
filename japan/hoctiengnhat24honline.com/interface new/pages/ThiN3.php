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
	<p align="center"><strong>hoctiengnhat24h.com </strong></p>
	<p align="center"><strong>CHƯƠNG TRÌNH HỌC TIẾNG NHẬT TRỰC TUYẾN</strong></p>
    <p style="font-weight:bold;">Trình Độ N3</p>
	<?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
	?>
	<p>文字．語彙</p>
	<p><img src="images/japan/n3/1.png" width="100%" /></p>
	
	<p class="debai">１．	日本の首都はどこですか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau1" value="A">A. しゅとう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="B">B. しゅうと </div>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">C. しゅと</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="D">D. しゅうとう</div></p>
	<br />
    
    <p class="debai">2. <u>地球</u>は太陽のまわりを回っている。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau2" value="A">A. じきゅう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="B">B. ちきゅう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="C">C. じきゅ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau2" value="D">D. ちきゅ</div></p>
	<br />
  
	<p class="debai">3. あの時計は<u>遅れて</u>いる。</p>
	<p> <div style="float:left;"><input type="radio" name="cau3" value="A">A. こわれて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="B">B. おくれて</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="C">C. たおれて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau3" value="D">D. よごれて</div></p>
	<br />
    
    <p class="debai">4. 二人で<u>協力</u>すれば、仕事も早く終わるだろう。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau4" value="A">A. きょりょく</div> </p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="B">B. どりょく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="C">C. きょうりょく</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau4" value="D">D. どうりょく</div></p>
	<br />
    
    <p class="debai">5. 大学のしょうがくきんに<u>応募</u>した。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau5" value="A">A. おうぼ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="B">B. おうも</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="C">C. おうぼう </div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau5" value="D">D. おうもう</div></p>
	<br />
  	
	<p class="debai">6. 子どもの疑問に答えた。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau6" value="A">A. くもん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="B">B. きもん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="C">C. ぐもん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau6" value="D">D. ぎもん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    	
    <p class="debai">7. 試験のせいせきが発表された。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau7" value="A">A. はつひょう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="B">B. はっぴょう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="C">C. はつひょ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau7" value="D">D. はっぴょ</div></p>
	<br />
    
    <p class="debai">8. <u>単語<u>のリストはとなりのぺ一ジにあります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau8" value="A">A. げいご</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="B">B. けいご</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="C">C. だんご</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau8" value="D">D. たんご</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    
	<p><img src="images/japan/n3/2.png" width="100%" /></p>
	
	<p class="debai">9. みんなで話し合って、問題を<u>かいけつ</u>した。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau9" value="A">A. 改決</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="B">B. 改結</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="C">C. 解決</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau9" value="D">D. 解結</div></p>
	<br />
	  
    <p class="debai">10. やまぐちさんにとうきょうを<u>あんない</u>してもらった。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau11" value="A">A. 安内</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="B">B. 家内</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="C">C. 室内</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau11" value="D">D. 案内</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
    
    <p class="debai">11. わたしは<u>けいこう</u>のために毎日走っています。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau12" value="A">A. 健康</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="B">B. 建康</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="C">C. 健庫</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau12" value="D">D. 建庫</div></p>
	<br />
     
    <p class="debai">12. 今年の夏は<u>きおん</u>が高かった。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau13" value="A">A. 気湿</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="B">B. 気温</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="C">C. 気湯</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau13" value="D">D. 気混</div></p>
	<br />
	
	<p class="debai">13. 頭が<u>いたい</u>ので、薬をのんだ。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau14" value="A">A. 病い</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="B">B. 痛</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="C">C. 疫い</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau14" value="D">D. 症い</div></p>
	<br />
	
	<p class="debai">14. このシャツは工場で<u>たいりょう</u>に作られている。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau15" value="A">A. 多量</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="B">B. 多料</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="C">C. 大量</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau15" value="D">D. 大料</div></p>
	<br />
	
	<p><img src="images/japan/n3/3.png" width="100%" /></p>
	
	<p class="debai">15. このけいたいでんわはボタンが押しにくいという（　　　）を持つ利用者もいる。</p>
	<p> <div style="float:left;"><input type="radio" name="cau16" value="A">A. かんしん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="B">B. ふまん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="C">C. もくひょう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau16" value="D">D. がまん</div></p>
	<br />
	
	<p class="debai">16. まちを（　　　）していたら、やまもとさんに会った。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau17" value="A">A. ぐらぐら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="B">B. がらがら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="C">C. ばらばら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau17" value="D">D. ぶらぶら</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">17. セミナ一にさんかしたい人は、（　　　）に住所、氏名、希望日を書いてください。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau18" value="A">A. しょうめいしょ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="B">B. りょうしゅうしょ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="C">C. もうしこみしょ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau18" value="D">D. さんこうしょ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">18. このけいさんは（　　　）なので、コンピュ一タ一を使っても時間がかかる。</p>
	<p> <div style="float:left;"><input type="radio" name="cau19" value="A">A. いがい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="B">B. じゅうだい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="C">C. ふくざつ</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau19" value="D">D. せいじょう</div></p>
	<br />
	
	<p class="debai">19. このオレンジはアメリカ（　　　）です。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau20" value="A">A. さん</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="B">B. せい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="C">C. さく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau20" value="D">D. ひん</div></p>
	<br />
	
	<p class="debai">20. ゆうしょうしたせんしゅに（　　　）をして記事を書いた。</p>
	<p> <div style="float:left;"><input type="radio" name="cau21" value="A">A. フピ一チ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="B">B. インタビュ一</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="C">C. メッセ一ジ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau21" value="D">D. コミュニケ一ション</div></p>
	<br />
	
	<p class="debai">21. ぜんいんが自分の意見を（　　　）したので、かいぎがなかなか終わらなかった。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau22" value="A">A. めいれい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="B">B. へんしん</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="C">C. しゅちょう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau22" value="D">D. ちゅうもん</div></p>
	<br />
	
	<p class="debai">22. 朝から何も飲んでいないので、のどが（　　　）です。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau23" value="A">A. ぺらぺら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="B">B. からから</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="C">C. ふらふら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau23" value="D">D. ぺこぺこ</div></p>
	<br />
	
	<p class="debai">23. しょうらいのために、お金を（　　　）います。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau24" value="A">A. ためて</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="B">B. のせて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="C">C. かさねて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau24" value="D">D. くわえて</div></p>
	<br />
	
	<p><img src="images/japan/n3/4.png" width="100%" /></p>
	
	<p class="debai">24. わたしはつまといっしょに<u>つうきん</u>しています。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau25" value="A">A. 仕事に行って</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="B">B. 勉強に行って</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="C">C. 買い物に行って</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau25" value="D">D. さんぽに行って</div></p>
	<br />
    
    <p class="debai">２６． 宿題のレポ一トはほぼ終わった。</p>
	<p> <div style="float:left;"><input type="radio" name="cau26" value="A">A. すべて</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="B">B. すぐに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="C">C. だいたい </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau26" value="D">D. やっと</div></p>
	<br />
	
	<p class="debai">25. とても<u>おそろしい</u>経験をした。</p>
	<p> <div style="float:left;"><input type="radio" name="cau27" value="A">A. たのしい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="B">B. うれしい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="C">C. はずかしい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau27" value="D">D. こわい</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">26. 先生に<u>わけ</u>を話した。</p>
	<p> <div style="float:left;"><input type="radio" name="cau28" value="A">A. アイデイア</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="B">B. ル一ル</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="C">C. りゆう</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau28" value="D">D. ひみつ</div></p>
	<br />
	
	<p class="debai">27. 最近、この川は水が<u>へった</u>気がする。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau29" value="A">A. 多くなった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="B">B. 少なくなった</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="C">C. きれいになった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau29" value="D">D. きたなくなった</div></p>
	<br />
    
	<p class="debai">28. じっけんがうまくいかなかったので、<u>やりなおした</u>。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau30" value="A">A. やり方を調べた</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="B">B. やり方を教わった</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="C">C. もう一度やった</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau30" value="D">D. やるのをとちゅうでやめた。</div></p>
	<br />
	
	<p><img src="images/japan/n3/5.png" width="100%" /></p>
	
	<p class="debai">29. ころぶ</p>
 	<p> <div style="float:left;"><input type="radio" name="cau31" value="A">A. 今日はつかれたので、早めにベッドに<u>ころんだ</u>。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="B">B. 仕事が入ったので、旅行の計画が<u>ころんで</u>しまった。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="C">C. 台風でにわの木が<u>ころんだ</u>。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau31" value="D">D. かいだんで<u>ころんで</u>けがをした。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">30. しじ</p>
 	<p> <div style="float:left;"><input type="radio" name="cau32" value="A">A. 「このしょるい、３０ぶコピ一しておいて」とひしょに<u>しじ</u>した。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="B">B. 「この作文を見ていただけませんか」と先生に<u>しじし</u>た。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="C">C. 「あした映画を見に行こうよう」とともだちに<u>しじ</u>した。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau32" value="D">D. 「トイレはどこにありますか」と店員に<u>しじ</u>した。</div></p>
	<br />
	
	<p class="debai">31. 見送る</p>
	<p> <div style="float:left;"><input type="radio" name="cau33" value="A">A. 毎日かならずメ一ルを<u>見送る</u>ようにしている。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="B">B. 何ぺ一ジか<u>見送って</u>みたが、むずかしくてわからなかった。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="C">C. 電車のまどからけしきを<u>見送る</u>のが好きだ。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau33" value="D">D. 国に帰る友人を空港まで<u>見送った</u>。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">32. うえる</p>
	<p> <div style="float:left;"><input type="radio" name="cau34" value="A">A. 近所のこうえんにはいろいろな花が<u>うえて</u>ある。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="B">B. ケ一キにいちごやクリ一ムをたくさん<u>うえた</u>。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="C">C. この空港は海に土を<u>うえて</u>作られた。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau34" value="D">D. 道にでんとうを<u>うえた</u>ので明るくなった。</div></p>
	<br />
	<br />
	
	<p class="debai">33. しょうじき</p>
 	<p> <div style="float:left;"><input type="radio" name="cau35" value="A">A. おがわさんは<u>しょうじき</u>な人で、決してうそは言いません。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="B">B. このしょうひんの<u>しょうじき</u>な使い方をこれかれ説明します。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="C">C. これは<u>しょうじき</u>な話なのに、だれもしんじてくれません。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau35" value="D">D. <u>しょうじき</u>なきょりは分かりませんが、１０キロぐらいだと思います。</div></p>
	<br />
			
	<p>Ｐ２．文法、読解</p>
	<br />
	<p><img src="images/japan/n3/6.png" width="100%" /></p>
	
	<p class="debai">1. の試合にかてる（　　　）いっしょうけんめいがんばります。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau36" value="A">A. ために</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="B">B. ように</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="C">C. ことに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau36" value="D">D. みたいに</div></p>
	<br />
	
	<p class="debai">2. 今のわたしの安いきゅうりょうでは、何年はたらいても自分の家は（　　　　）そうもない。</p>
	<p> <div style="float:left;"><input type="radio" name="cau37" value="A">A. 買い</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="B">B. 買え</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="C">C. 買う</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau37" value="D">D. 買える</div></p>
	<br />
			
	
	<p class="debai">3. A「最近、やまださん元気ないね。」<br />B「うん。しょうらいの（　　　　）なやんでるらしいよ。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau38" value="A">A. ほうに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="B">B. 場合に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="C">C. ほかで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau38" value="D">D. ことで</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">4. A「ねえ、（　　　　）どんな人？」<br />B「とても親切でもいい人だよ」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau39" value="A">A. たなかさんが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="B">B. たなかさんで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="C">C. たなかさんって</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau39" value="D">D. たなかさんでも</div></p>
	<br />
	
	<p class="debai">5. A「おきなわ旅行はどうだった？」<br />B「海が青くて、料理もおいしくて、最高だったよ。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau40" value="A">A. いつのまにか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="B">B. いつ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="C">C. いつでも</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau40" value="D">D. いつか</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">6. （デパ一トでシャツを選びながら）<br />やまだ「明るい色のシャツが欲しいいんだけど．．．。」<br />たなか「だったら、これ（　　　　）どう？やまださんにすごくにあうと思うよ。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau41" value="A">A. なんか</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="B">B. ばかり</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="C">C. へ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau41" value="D">D. に</div></p>
	<br />
	
	<p class="debai">7. （ス一パ一で）<br/>母親「今、おかしを買った子がタケルくん？）」<br/>子ども「ちがうよ。あそこで泣いて、おかしを（　　　）子だよ。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau42" value="A">A. ほしい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="B">B. ほしがっている</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="C">C. ほしそうな</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau42" value="D">D. ほしがってみる</div></p>
	<br />
	
	<p class="debai">8. 学生「先生、ごそうだんしたいことがあるのですが、じゅぎょうの後、先生の研究室に（　　　）よろしいでしょうか。」<br />先生「はい、いいですよ。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau43" value="A">A. 来られても</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="B">B. いらっしゃっても</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="C">C. うかがっても</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau43" value="D">D. 行かれても</div></p>
	<br />
	
	<p class="debai">9. A「きのうからずっと頭が痛いんですが、どこかいい病院をしりませんか。」<br/>B「そうですねえ、ABCびょういんに行って（　　　）。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau44" value="A">A. みさせてください</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="B">B. みてもいいでしょうか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="C">C. みさせてほしいのですが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau44" value="D">D. みたらどうでしょう</div><div id='test'> <image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">10. このおかしはこむぎことたまごとさとう（　　　　）できています。バタ一やぎゅうにゅうは使っていません。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau45" value="A">A. ほどが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="B">B. ほどで</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="C">C. だけが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau45" value="D">D. だけで</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">11. （会社で）<br />A「すみません、やまださんはどこですか。」<br/>B「やまださんはかいぎちゅうですが、かいぎは１１時半（　　　）終わると思いますよ。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau46" value="A">A. までは</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="B">B. までには</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="C">C. までも</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau46" value="D">D. までにも</div></p>
	<br />
	
	<p class="debai">12. 妹「今日は友だちと晩ご飯を食べてくるね。」<br />兄「わかった。９時すぎる（　　　）、むかえに行くから、電話しろよ。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau47" value="A">A. １．	らしいなら</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="B">B. らしいのに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="C">C. ようなら</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau47" value="D">D. ようなのに</div></p>
	<br />
	
	<p class="debai">13. 弟「お父さん、どこにいるか知らない？」<br />兄「さっき部屋にいたけど、いそがしそうだったよ。」<br/>弟「そうか。じゃあ今は（　　　）。進学のこと、そうだんしたかったんだけど。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau48" value="A">A. 話しかけないほうがよさそうだな。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="B">B. 話しかけなくてもよさそうだな。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="C">C. 話しかけないほうがいいそうだな。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau48" value="D">D. 話しかけなくてもいいそうだな。</div></p>
	<br />
	
	<p><img src="images/japan/n3/7.png" width="100%" /></p>
	
	<p class="debai">14. A「来週、試合　＿　　＿　　＊　　＿　　んですか。」<br/>B「すみません。」</p>
 	<p> <div style="float:left;"><input type="radio" name="cau49" value="A">A. 何をやっていた</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="B">B. れんしゅうに来ないで</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="C">C. なのに</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau49" value="D">D. ちっとも</div></p>
	<br />
	<br />
			
	<br />
	<p class="debai">15. あのびじゅつかんは日曜　　＿　　＿　　＊　　＿　　まどぐちでかくにんしたほうがいいよ。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau50" value="A">A. 閉まる時間</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="B">B. ちがうから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="C">C. によって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau50" value="D">D. が</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">16. 自分で野菜を作ってみて、おいしい野菜をそだてる　＿　　＿　　＊　　＿　　わかりました。</p>
	<p> <div style="float:left;"><input type="radio" name="cau51" value="A">A. ことが</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="B">B. たいへんな</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="C">C. ことか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau51" value="D">D. どんなに</div></p>
	<br />
	
	<p class="debai">17. A「今度のさよならパ一テイ一で、みんなで歌う歌は、これでいいですか。」<br/>B「すみません。この歌は好きなんですが、少しむずかしいです　＿　　＿　　＊　　＿　　　してほしいです。」</p>
	<p> <div style="float:left;"><input type="radio" name="cau52" value="A">A. の</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="B">B. ほか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="C">C. に</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau52" value="D">D. から</div></p>
	<br />
	
	<p class="debai">18. 最近、子どもがピアノを習いたいと言いだした。わたしは、子どもが　＿　　＿　　＊　　＿　　　と思っている。</p>
	<p> <div style="float:left;"><input type="radio" name="cau53" value="A">A. したい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="B">B. やりたい</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="C">C. やらせて </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau53" value="D">D. と思うことは</div></p>
	<br />
	
	<p><img src="images/japan/n3/8.png" width="100%" /></p>
	<p><img src="images/japan/n3/9.png" width="100%" /></p>
	
	<p class="debai">19.</p>
 	<p> <div style="float:left;"><input type="radio" name="cau54" value="A">A. わかって　くるはずです</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="B">B. わかって　いくそうです</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="C">C. わかって　きました</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau54" value="D">D. わかって　いったようです</div></p>
	<br />
	<br />
  
  	<p class="debai">20.</p>
	<p> <div style="float:left;"><input type="radio" name="cau55" value="A">A. したがって</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="B">B. つまり</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="C">C. たとえば </div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="D">D. それから</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">21.</p>
	<p> <div style="float:left;"><input type="radio" name="cau55" value="A">A. ある電車</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="B">B. そこの電車</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="C">C. こういう電車 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau55" value="D">D. どちらかの電車</div></p>
	<br />
	
	<p class="debai">22.</p>
	<p> <div style="float:left;"><input type="radio" name="cau56" value="A">A. 答えなのか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="B">B. なぜなのか </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="C">C. 理由なのか</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau56" value="D">D. だれなのか</div></p>
	<br />
	
	<p class="debai">23.</p>
	<p> <div style="float:left;"><input type="radio" name="cau57" value="A">A. なるのでしょうか </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="B">B. なったでしょう</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="C">C. なってしまうのです</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau57" value="D">D. なってしまいました</div></p>
	<br />
	
	<p><img src="images/japan/n3/10.png" width="100%" /></p>
	<p><img src="images/japan/n3/11.png" width="100%" /></p>
	
	<p class="debai">24. 修理の人が来たとき、中村さんがしなければならないことは何か</p>
	<p> <div style="float:left;"><input type="radio" name="cau58" value="A">A. 教室へ下田先生を呼びに行く。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="B">B. いんさつした紙をプリンタ一のところに置く。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="C">C. 修理の人にこしょうのじょうたいを説明する。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau58" value="D">D. 修理の人にゼミのしりょうをいんさつしてもらう。</div></p>
	<br />
	
	<p><img src="images/japan/n3/12.png" width="100%" /></p>
	
	<p class="debai">25. このメ一ルを見て、参加しない人はどうしなければならないか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau59" value="A">A. 返信の必要はないが、７月３１日までに記念品代を払う。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="B">B. 返信の必要はないが、８月１０日に記念品代を払う。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="C">C. ７月８日までに返信して、７月３１日までに記念品代を払う。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau59" value="D">D. ７月８日までに返信して、８月１０日に記念品代を払う。</div></p>
	<br />
	<br />
	
	<img src="images/japan/n3/13.png" width="100%" />
	
	<p class="debai">２6． <u>うれしいこと</u>とあるが、どのようなことか。</p>
	<p> <div style="float:left;"><input type="radio" name="cau60" value="A">A. 会社の難しい問題がやった解決できたこと。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="B">B. ホテルの人が書類の整理をしてくれていたこと。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="C">C. ホテルが書類を捨てずに残しておいてくれたこと。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau60" value="D">D. 同じ部屋にもう一晩泊まることができたこと。</div></p>
	<br />

	<img src="images/japan/n4/14.png" width="100%" />
	<br />
	
	<p class="debai">２7． この文章を書いた人は、どんな人がげいじゅつかだと考えているか。</p>
	<p><image src="images/japan/n5/28p4.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau61" value="A">1. 子どものころの経験を大人になっても思い出すことができる人。	</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="B">2. 子どものころの経験を大人になっても音楽や絵で伝えられる人。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="C">3. 大人になって「子どもの心」をほとんどなくしてしまった人。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau61" value="D">4. 大人になっても「子どもの心」で感じたものを音楽や絵で表せる人。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<img src="images/japan/n3/15.png" width="100%" />
	<img src="images/japan/n3/16.png" width="100%" />
	
	<p class="debai">２8． ．①それとあるが、何のことか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau62" value="A">１． さんぽのとちゅうで見た、花がさいている家。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="B">２． 昔住んでいた家によくにている家。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="C">３． 子どものころ、自分が住んでいた家。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau62" value="D">４． 昔いっしょによくあそんだ明子ちゃんの家。</div></p>
	<br />

	<p class="debai">29. ②<u>なつかしい思い出</u>とあるが、例えばどんな思い出と言っているか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau63" value="A">１． となりの家の広い庭によく行った。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="B">２． そふとそぼがよくあそびに来た。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="C">３． 庭で明子ちゃんと花を見た。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau63" value="D">４． 友達といっしょに山や川で遊んだ。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	
	<p class="debai">３0． この文章を書いた人は、さんぽのときに昔住んでいた家のことを思い出したのはなぜだと考えているか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau64" value="A">１． 昔住んでいた家の庭にさいていたのと同じ花のかおりがしたから。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="B">２． 昔住んでいた家の庭にさいていたのと同じ白い花を見たから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="C">３． 昔住んでいた家の近くの道に咲いていたのと同じ花のかおりがしたから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau64" value="D">４． 昔住んでいた家の近くの道にさいていたのと同じ白い花を見たから。</div></p>
	<br />
  
	<img src="images/japan/n3/17.png" width="100%" />
  
	<p class="debai">３1． <u>このこと</u>は、何を指しているか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65" value="A">１． 町の中に公園や子どもの遊ぶ場所が増えてきたこと。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="B">２． 昔は子どもが家の外で遊ことが多かったこと。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="C">３． 子どもが一人で家の中で遊ぶようになったこと。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65" value="D">４． 以前に比べて子どもの体力がなくなってきたこと。</div></p>
	<br />
	
	<p class="debai">３2． この文章では、子どもに見られる変化には、例えばどんなものがあると言っているか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65f" value="A">１． 外で一人で遊ぶ時間が少なくなって、体力落ちている。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65f" value="B">２． 体を動かさないで遊ぶことが増えて、体力が落ちている。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65f" value="C">３． 友達との遊びの中で、よい付き合い方が学習できるようになった。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65f" value="D">４． テレビやゲ一ムから、よい付き合い方が学習できるようになった。</div></p>
	<br />
	
	<p class="debai">33． この文章で一番言いたいことは何か。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65c" value="A">１． 町のはってんが、子どもに悪いえいきょうをあたえていることに注意しなくてはいけない。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65c" value="B">２． 町がはってんしない場合、子どもにも悪いえいきょうが出ることを忘れてはいけない。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65c" value="C">３． 子どもに悪いえいきょうが出ているので、町をはってんする前のじょうたいにもどしたほうがいい。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65c" value="D">４． こどもに悪いえいきょうをあたえてしまうことはあるが、町ははってんしたほうがいい。</div></p>
	<br />
	
	<img src="images/japan/n3/18.png" width="100%" />
	<img src="images/japan/n3/19.png" width="100%" />

	<p class="debai">３4． ①このじょうたいとあるが、何か。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65b" value="A">１． のうぎょうをする人が大きくて減って、半分以上がお年寄りになったこと。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65b" value="B">２． のうぎょうをする人が大きくて減って、半分以上が若者になったこと。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65b" value="C">３． のうぎょうをする人が少し減って、お年寄りの割合が増えていること。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65b" value="D">４． のうぎょうをする人が少し減って、若者の割合が増えていること。</div></p>
	<br />
	
	<p class="debai">３5． ②いくつかの工夫とあるが、例えばどんな工夫か。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau65a" value="A">１． 多い月や少ない月があるが、毎月給料が払えるようにする。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65a" value="B">２． 一年中、一種類の野菜を作り続けるようにする。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65a" value="C">３． 社員みんなが、土曜と日曜日に休めるようにする。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau65a" value="D">４． 経験がない人には、のうぎょうのきそから教えるようにする。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">36. ③「あおぞら」には毎年のうぎょうにチャレンジしたいという若者がおおぜい入ってきてとあるが、それはどうしてだと言っているか。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau66" value="A">1. 「おおぞら」では、休みをたくさん取ることができるから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="B">2. 「あおぞら」では、会社経営の方法を教えてもらえるから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="C">3. 「あおぞら」では、昔からののうぎょうのやり方を守っているから。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau66" value="D">4. 「あおぞら」は、仕事がしやすいかんきょうを作っているから。</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">37. この文章全体のテ一マは、何か。</p>
	<p><img src="images/japan/n4/20.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau67" value="A">1. お年寄りとのうぎょう。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="B">2. これからののうぎょう。 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="C">3. 家族で行うのうぎょう。</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau67" value="D">4. 経験者に教わるのうぎょう。</div></p>
	<br />
  
	<p><img src="images/japan/n3/20.png" width="100%" /></p>
	<p><img src="images/japan/n3/21.png" width="100%" /></p>
  
	<p class="debai">３８． リンさんは、スキ一をしたいと思っている。スキ一用具を持っていないので、無料道具を借りられる旅行がいい。また、ぜひ温泉旅館に泊まりたいと思っている。リンさんの希望に合うのは、どの旅行か。</p>
 	<p> <div style="float:left;"><input type="radio" name="cau68" value="A">1. ①</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="B">2. ② </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="C">3. ③</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau68" value="D">4. ④</div></p>
	<br />
	
	<p class="debai">３９． キムさんは、「みんなでおきなわ４日間」の２月２５日出発の旅行に参加する。料金を旅行社で支払う場合、いつまでに払わなければならない。</p>
	<p> <div style="float:left;"><input type="radio" name="cau69" value="A">1. ２月１８日</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="B">2. ２月２０日</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="C">3. ２月２２日 </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau69" value="D">4. ２月２５日</div></p>
	<br />
	
	<p>P3: 聴解</p>
	<p><img src="images/japan/n3/22.png" width="100%" /></p>
	<p>
	<audio controls>
		<source src="audio/n3/N3Q1.mp3" type="audio/ogg">
	</audio>
	</p>
	
	<p class="debai">例：</p>
	<p><image src="images/japan/n4/22.png" width="100%" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau70" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau70" value="D">4.</div></p>
	<br />
  
	<p class="debai">１番：</p>
	<p><img src="images/japan/n3/23.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau71" value="A">1. アイウ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="B">2. アウエ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="C">3. アウオ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau71" value="D">4. アエオ</div></p>
	<br />
	
	<p class="debai">２番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau72" value="A">1. あかちゃんのふく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="B">2. あかちゃんのおもちゃ</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="C">3. どもだちのふく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau72" value="D">4. ともだちのバッグ </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">３番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau73" value="A">1. 友だちにれんらくする　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="B">2. レストランをよやくする</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="C">3. りょこうのけいかくをたてる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau73" value="D">4. ひこうきをよやくする</div></p>
	<br />
	
	<p class="debai">４番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau74" value="A">1. えいがをみる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="B">2. にもつをだす </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="C">3. ほんやにいく</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau74" value="D">4. ごはんをたべる</div></p>
	<br />
	
	<p class="debai">５番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau75" value="A">1. かさをよういする</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="B">2. リビングのエアコンをけす</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="C">3. だいどころのでんきをけす </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau75" value="D">4. だいどころのまどをしめる</div></p>
	<br />
	
	<p class="debai">６番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau76" value="A">1. アンケ一トをとる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="B">2. 行く場所をさがす　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="C">3. 何をするきめる</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau76" value="D">4. しょくじする店をきめる</div></p>
	<br />
  
	<p><img src="images/japan/n3/24.png" width="100%" /></p>
	<p>
	<audio controls>
		<source src="audio/n3/N3Q2.mp3" type="audio/ogg">
	</audio>
	</p>
	
	<p class="debai">例：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau77" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau77" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">１番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau78" value="A">1. 来週の月曜日</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="B">2. 来週の火曜日</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="C">3. 来週の水曜日　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau78" value="D">4. 来週の木曜日</div></p>
	<br />
	
	<p class="debai">２番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau79" value="A">1. いろいろな国のりょうりが作れるから　</div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="B">2. へいじつに教室があるから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="C">3. 一人で作れるから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau79" value="D">4. 料金がやすいから</div></p>
	<br />
	
	<p class="debai">３番：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau80" value="A">1. あさはやい仕事だったから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="B">2. じきゅうがやすかったから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="C">3. ものをつくるしごとがしたかったから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau80" value="D">4. ほかのしごともけいけんしたかったから </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">４番：</p>
	
	<p> <div style="float:left;"><input type="radio" name="cau81" value="A">1. インタ一ネットを使うこと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="B">2. メ一ルをすること </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="C">3. プリンタ一を使うこと</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81" value="D">4. ＤＶＤを見ること</div></p>

	<p class="debai">５番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau81b" value="A">1. もうしこみの　しめきりが　すぎたから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81b" value="B">2. ２かいめのさんかだから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81b" value="C">3. １か月後にきこくするから</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81b" value="D">4. 来日してはんとしいじょうになるから </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">６番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau81a" value="A">1. 新しい店ではたらけること</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81a" value="B">2. 車を使って仕事ができること</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81a" value="C">3. しょうひんがたくさん売れること</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau81a" value="D">4. 村の人がよろこんでくれること </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p><img src="images/japan/n3/25.png" width="100%" /></p>
	<p>
	<audio controls>
		<source src="audio/n3/N3Q3.mp3" type="audio/ogg">
	</audio>
	</p>
	
	<p class="debai">例：</p>
	<p> <div style="float:left;"><input type="radio" name="cau82" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau82" value="D">4.</div></p>
	<br />
	
	<p class="debai">１番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau83" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83" value="D">4.</div></p>
	<br />
	
	<p class="debai">２番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau83b" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83b" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83b" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83b" value="D">4.</div></p>
	<br />
	
	<p class="debai">3番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau83a" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83a" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83a" value="C">3.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau83a" value="D">4. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２番：(mp3   25)</p>
	<p><img src="images/japan/n4/28.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau84" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau84" value="C">3.</div></p>
	<br />
  
	<p class="debai">３番：(mp3  26)</p>
	<p><img src="images/japan/n4/29.png" width="100%" /></p>
	<p> <div style="float:left;"><input type="radio" name="cau85" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau85" value="C">3.</div></p>
	<br />
	
	<p><img src="images/japan/n3/26.png" width="100%" /></p>
	<p>
	<audio controls>
		<source src="audio/n3/N3Q4.mp3" type="audio/ogg">
	</audio>
	</p>
	
	<p class="debai">例：</p>
	<p><img src="images/japan/n4/30.png" width="100%" /></p>
  	<p> <div style="float:left;"><input type="radio" name="cau86" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau86" value="C">3.</div></p>
	<br />
  
	<p class="debai">１番：</p>
	<p><img src="images/japan/n3/27.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau87" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau87" value="C">3.</div></p>
	<br />
	
	<p class="debai">２番：</p>
	<p><img src="images/japan/n3/28.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau88" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau88" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
  
	<p class="debai">３番：</p>
	<p><img src="images/japan/n3/29.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau89" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau89 value="C">3.</div></p>
	<br />
	
	<p class="debai">４番：</p>
	<p><img src="images/japan/n3/30.png" width="100%" /></p>
 	<p> <div style="float:left;"><input type="radio" name="cau90" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau90" value="C">3.</div></p>
	<br />
	
	<p><img src="images/japan/n3/31.png" width="100%" /></p>
	<p>
	<audio controls>
		<source src="audio/n3/N3Q5.mp3" type="audio/ogg">
	</audio>
	</p>
	
	<p class="debai">例：</p>
 	<p> <div style="float:left;"><input type="radio" name="cau91" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau91" value="C">3.</div></p>
	<br />
  
	<p class="debai">１番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau92" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau92" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">２番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau93" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau93" value="C">3.</div></p>
	<br />
	
	<p class="debai">３番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau94" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau94" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau94" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">４番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau95" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau95" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau95" value="C">3.</div></p>
	<br />
	
	<p class="debai">５番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau96" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau96" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau96" value="C">3.</div></p>
	<br />
	
	<p class="debai">６番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau97" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau97" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau97" value="C">3.</div></p>
	<br />
	
	<p class="debai">７番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau98" value="A">1. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau98" value="B">2.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau98" value="C">3. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	
	<p class="debai">８番：</p>
	<p> <div style="float:left;"><input type="radio" name="cau99" value="A">1.</div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau99" value="B">2. </div><div id='test'><image src='images/icon-check.png'></div></p>
	<br />
	<p> <div style="float:left;"><input type="radio" name="cau99" value="C">3.</div></p>
	<br />
  
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