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
    <p style="font-weight:bold;">Trình Độ N1</p>
	<?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
	?>
	<p><b>Ｐ１．文字．語彙．文法．読解 </b></p>
   <img src="images/japan/n1//p1.png" width="100%" height="200px" alt="" />
        <p class="debai"><b>1. 去年より<u>利益</u>がわずかに増えた。 </b></p>
   
    <p> <div style="float:left;"><input type="radio" name="cau1" value="A">１．りし　　　</div> </p><br />　
	 <p> <div style="float:left;"><input type="radio" name="cau1" value="A">２．りそく　　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau1" value="A">３．りえき　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	   <p> <div style="float:left;"><input type="radio" name="cau1" value="A">４．りじゅん 　</div> </p><br />
      
	  <p class="debai"><b>２．橋本選手の活躍で、なんとかピンチを<u>逃れた</u>。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau2" value="A">１．のがれて　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau2" value="A">２．はなれた　　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau2" value="A">３．それた　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau2" value="A">４．まねがれた 　</div> </p><br />
	  
      <p class="debai"><b>３．子どものおもちゃは、安全性を<u>考慮</u>して選びようにしている。</b></p>
      <p> <div style="float:left;"><input type="radio" name="cau3" value="A">１．こうろ　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau3" value="A">２．こうりょ　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau3" value="A">３．こうろう　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau3" value="A">４．こうりょう </div> </p><br />
      
	  <p class="debai"><b>４．この辺りは視界を<u>遮る</u>物は何もない。</b></p>
      <p> <div style="float:left;"><input type="radio" name="cau4" value="A">１．さまたげる　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="A">２．さえぎる　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="A">３．せばめる　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="A">４．へだてる</div> </p><br />
      
	  <p class="debai"><b>５．この説は科学的な<u>根拠</u>乏しい。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau5" value="A">１．こんしょ　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="A">２．こんじょ　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="A">３．こんきょ　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="A">４．こんぎょ </div> </p><br />
      
	  <p class="debai"><b>６．何事も初めが<u>肝心</u>だ。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau6" value="A">１．たんしん　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau6" value="A">２．かんしん　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau6" value="A">３．だんじん　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau6" value="A">４．かんじん </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <img src="images/japan/n1//p2.png" width="100%" height="150px" alt="" />
	  <p class="debai"><b>７．物置の隅で、ほこり（　　　）になっている古い人形を見つけた。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau7" value="A">１．ぐるみ　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau7" value="A">２．がらみ　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau7" value="A">３．まみれ　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau7" value="A">４．ずくめ </div> </p><br />
      
	  <p class="debai"><b>８．木村さんとは共通の趣味があるので、いつも会話が（　　　）。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau8" value="A">１．舞う　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau8" value="A">２．弾む　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau8" value="A">３．転がる　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau8" value="A">４．跳ねる </div> </p><br />
	  
        <p class="debai"><b>９．地域の（　　　）に合って医療のシステムが求められている。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau9" value="A">１．実情　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau9" value="A">２．実況　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau9" value="A">３．実権　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau9" value="A">４．実在 </div> </p><br />
      
	    <p class="debai"><b>１０．その選手は、十年に一人の（　　　）だと言われている。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau10" value="A">１．玄人　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="A">２．大家　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="A">３．巨匠　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="A">４．逸材</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	    <p class="debai"><b>１１．書類に（　　　）があった場合、申請は受理されません。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau11" value="A">１．不穏　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau11" value="A">２．不当　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau11" value="A">３．不備　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau11" value="A">４．不順 </div> </p><br />
      
	    <p class="debai"><b>１２．約３００年前の絵画の（　　　）が終わり、来月から公開される予定です。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau12" value="A">１．回復　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau12" value="A">２．修復　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau12" value="A">３．復旧　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau12" value="A">４．復興 </div> </p><br />
      
	    <p class="debai"><b>１３．経済だけでなく、法律にも詳しいのが彼の（　　　）だ。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau13" value="A">１．深み　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau13" value="A">２．強み　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau13" value="A">３．高み　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau13" value="A">４．重み </div> </p><br />
  <br />
      <img src="images/japan/n1//p3.png" width="100%" height="150px" alt="" />
	    <p class="debai"><b>１４．この映画は<u>画期的な</u>手法で製作された。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau14" value="A">１．広く知られている　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau14" value="A">２．最近ではめずらしい </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau14" value="A">３．非常に時間がかかる　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau14" value="A">４．今までになく新しい </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	    <p class="debai"><b>１５．あの企業は海外市場への進出を<u>もくろんで</u>いる。</b></p>
      <p> <div style="float:left;"><input type="radio" name="cau15" value="A">１．計画して　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　　　　
	  <p> <div style="float:left;"><input type="radio" name="cau15" value="A">２．果たして　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau15" value="A">３．開始して </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau15" value="A">４．あきらめて </div> </p><br />
      
	    <p class="debai"><b>１６．問題を解決するために、もう少し<u>手がかり</u>が欲しい。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau16" value="A">１．イメ一ジ　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="A">２．サポ一ト　　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="A">３．チャンス　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="A">４．セント </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	    <p class="debai"><b>１７．あの人の話は<u>にわかに</u>は信じられない。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau17" value="A">１．すぐには　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau17" value="A">２．完全には　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau17" value="A">３．すなおには　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau17" value="A">４．簡単には </div> </p><br />
      
	    <p class="debai"><b>１８．この鍋は<u>重宝している</u>。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau18" value="A">１．以前より値上がりしている　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau18" value="A">２．形が気に入っている </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau18" value="A">３．評価が高まっている　　　</div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau18" value="A">４．便利で役に立ている </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	    <p class="debai"><b>１９．中村さんは仕事に対していつも<u>シビアだ</u>。 </b></p>
      <p> <div style="float:left;"><input type="radio" name="cau19" value="A">１．弱気だ　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="A">２．厳しい　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="A">３．柔軟だ　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="A">４．注意深い </div> </p><br />
    <p> <br />
      <img src="images/japan/n1//p4.png" width="100%" height="150px" alt="" />
	    <p class="debai"><b>２０．連携 v</b></p>
      <p> <div style="float:left;"><input type="radio" name="cau20" value="A">１．学校は地域と<u>連携</u>して生徒の安全を守っている。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau20" value="A">２．複数の社員で一台のプリンタ一を<u>連携</u>して使っている。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau20" value="A">３．最近の株価は、為替レ一トと<u>連携</u>して上下している。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau20" value="A">４．登山のときには、必ず地図を<u>連携</u>してください。</div> </p><br />
      
	   <p class="debai"><b>２１．不服 </b></p>
       <p> <div style="float:left;"><input type="radio" name="cau21" value="A">１．彼の失礼な態度は、そこにいた人々の<u>不服</u>を買った。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau21" value="A">２．カラオケで思い切り歌って、日ごろの<u>不服</u>を晴らそう。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau21" value="A">３．審判の判定に<u>不服</u>を唱えることはできない。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau21" value="A">４．この部署で、お客様からの<u>不服</u>を受け付けています。</div> </p> <br />
      
	   <p class="debai"><b>２２．かなう </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau22" value="A">１．苦労が<u>かない</u>、彼は俳優として成功をおさめた。</div> </p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau22" value="A">２．天気予報が<u>かない</u>、今日は一日中快晴だった。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau22" value="A">３．準備を重ねてきたイベントが無事<u>かなった</u>。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau22" value="A">４．自分の店を持つという夢が、とうとう<u>かなった</u>。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>２３．目覚しい </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau23" value="A">１．あの新人選手は<u>目覚しい</u>成長を見せている。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau23" value="A">２．上の階で<u>目覚しい</u>ほどの大きな物音がした。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau23" value="A">３．この赤はとても<u>目覚しい</u>色で人目をひくね。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau23" value="A">４．昨夜早く寝たので、今朝はとても<u>目覚しい</u>。 </div> </p><br />
      
	   <p class="debai"><b>２４．ほどける </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau24" value="A">１．ねじが<u>ほどけて</u>、イスがぐらぐらしている。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau24" value="A">２．靴のひもが<u>ほどけない</u>ようにしっかりと結んだ。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau24" value="A">３．シャツのボタンが<u>ほどけて</u>いるから、とめた方がいいよ。 </div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau24" value="A">４．グラスに浮かぶ氷がみるみるうちに<u>ほどけた</u>。 </div> </p><br />
      
	   <p class="debai"><b>２５．赴任 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau25" value="A">１．明日から三日間東京へ赴任しなければならない。</div> </p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau25" value="A">２．新入社員の研修では、実際に売り場にも赴任してもらう。</div> </p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau25" value="A">３．部長が海外の支社に赴任するので、みんなで送別会を開いた。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau25" value="A">４．田中氏が新しい社長に赴任することが発表された。</div> </p></p>
    <p> <br />
      <img src="images/japan/n1//p5.png" width="100%" height="150px" alt="" />
	   <p class="debai"><b>２６．人気作家A氏の講演会が無料（　　　）、多くのファンが詰めかけた。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau26" value="A">１．にして　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau26" value="A">２．にあって　　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau26" value="A">３．として　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau26" value="A">４．とあって </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>２７．都会から田舎に移り住んだ人の話を聞く（　　　）、「田舎は人を癒す力を持っている」とつくづく感じる。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau27" value="A">１．につけ　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau27" value="A">２．なり　　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau27" value="A">３．とは　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau27" value="A">４．にしてみると </div> </p></p><br />
      
	   <p class="debai"><b>２８．この鍋は、いため者に、揚げ物に（　　　）何にでも使えて便利です。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau28" value="A">１．は　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau28" value="A">２．と　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau28" value="A">３．や　　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau28" value="A">４．か </div> </p></p><br />
      
	   <p class="debai"><b>２９．プリンタ一の調子が悪くなり、製造会社に電話で問い合わせたら、向こうの担当者に、あれこれ質問に答え（　　　）あげく、対応できないと言われた。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau29" value="A">１．させた　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau29" value="A">２．させられる　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau29" value="A">３．させる　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau29" value="A">４．させられた </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>３０．その日、私はホ一ムに入ってきた電車に飛び乗った。ところが、電車は反対方向に走り始めた（　　　）。私は電車の行き先を確かめなかったことを後悔した。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau30" value="A">１．ではない　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau30" value="A">２．ではないか　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau30" value="A">３．のではない　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau30" value="A">４．のではないか </div> </p></p><br />
    
	 <p class="debai"><b>３１．（インタビュ一で） </b></p><br />
      A「お店で一番気をつていることは何ですか。」 <br />
      B「衛星管理です。お客様に食事を（　　　）、衛生面の管理には、何よりも注意しております。」 <br />
       <p> <div style="float:left;"><input type="radio" name="cau31" value="A">１．お出しになる以上　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau31" value="A">２．お出しになるうえ　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau31" value="A">３．お出しする以上　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau31" value="A">４．お出しするうえ </div> </p></p><br />
      
	   <p class="debai"><b>３２．留学するまで、私は自分が見ている世界がすべてだと思っていた。実はそれが世界のほんの小さな一部分（　　　）気付いていなかった。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau32" value="A">１．でないことにしか　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau32" value="A">２．でしかないことに　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau32" value="A">３．にないことでしか　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau32" value="A">４．にしかないことで </div> </p></p><br />
      
	   <p class="debai"><b>３３．（パソコンを使いながら） </b></p><br />
      A「ねえ、この前教えた計算機能、使ってみた？」 <br />
      B「うん。今まであんなに時間をかけてたのが（　　　）簡単に計算できよ。」 <br />
      A「でしょ。パソコンのことならまかせてよ。」 </p>
    
     <p> <div style="float:left;"><input type="radio" name="cau33" value="A">1. ばかばかしい思いをするもので　</div> </p></p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau33" value="A">２．ばかばかしく思えるもので </div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau33" value="A">３．ばかばかし思いをするくらい　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau33" value="A">４．ばかばかしく思えるくらい</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>３４．（電話で） </b></p><br />
      山中「あ、木村先生でいらっしゃいますか。AB出版の山中でございますが、今から原稿をいただきに上がってもよろしいでしょうか。」 <br />
      木村「すみません。まだできていないんです。あと３日（　　　）。」 <br />
       <p> <div style="float:left;"><input type="radio" name="cau34" value="A">１．待っておいでになります　　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau34" value="A">２．お待ち申し上げております </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau34" value="A">３．待たせていただくことにしましょうか　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau34" value="A">４．待っていただくわけにはいきませんか </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>３５．（宇宙飛行士　山田太郎さんへインタビュ一で）</b></p> <br />
      山田「実は、初めから宇宙飛行士になる（　　　）、そうじゃいんです。大学を出たら、医者になろうと思っていましたから。」 <br />
      記者「では、何がきっかけで、宇宙飛行士になりたいと思ったんですか。」 <br />
       <p> <div style="float:left;"><input type="radio" name="cau35" value="A">１．つもりだったかっていうと　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau35" value="A">２．つもりなのかっていわれたら </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau35" value="A">３．つもりじゃなかったのかっていわれたら　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau35" value="A">４．つもりがなかったかっていうと </div> </p></p><br />
    <p> </p>
          <img src="images/japan/n1//p6.png" width="100%" height="150px" alt="" />
	 <p class="debai"><b>３６．大学入試では、試験当日初めてその大学に行き、迷ってしまった　　＿　　＿　　<u>＊</u>　　＿　　　事前に見学しておくとよい。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau36" value="A">１．ない　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau36" value="A">２．という　　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau36" value="A">３．ように　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau36" value="A">４．ことの </div> </p></p><br />
      
	   <p class="debai"><b>３７．趣味を持つのは良いことだと思いますが、家庭を犠牲　　＿　　＿　　<u>＊</u>　　＿　　、それはちょっと問題です。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau37" value="A">１．となる　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau37" value="A">２．まで　　　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau37" value="A">３．と　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau37" value="A">４．にして </div> </p></p><br />
      
	   <p class="debai"><b>３８．管理職になったら、たとえ　　＿　　＿　　<u>＊</u>　　＿　　　　部下の失敗も引き受けるというくらいの覚悟がなくてはならない。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau38" value="A">１．だとして　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau38" value="A">２．がなくても　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau38" value="A">３．自分には責任　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau38" value="A">４．自分の責任 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>３９．　＿　　＿　　<u>＊</u>　　＿　　　小さな町工場だった。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau39" value="A">１．もともとは　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau39" value="A">２．我が社だが　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau39" value="A">３．今でこそ　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau39" value="A">４．一流企業と言われる </div> </p></p><br />
      
	   <p class="debai"><b>４０．新番組でこれまでにない役柄を演じる俳優の上田秋さん。役作りに悩んでいる　　＿　　＿　　<u>＊</u>　　＿　　　　という。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau40" value="A">１．と　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau40" value="A">２．そうでもない　　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau40" value="A">３．思いきゃ　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau40" value="A">４．のか </div> </p></p><br />
    <img src="images/japan/n1//p7.png" width="100%" height="150px" alt="" />
	<img src="images/japan/n1//p8.png" width="100%" height="800px" alt="" />
    
      
       <p class="debai"><b>４１． </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau41" value="A">１．入るのにいい　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau41" value="A">２．入るのがいいのか　　</div> </p></p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau41" value="A">３．入るのはいい　　 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau41" value="A">４．入るのでいいのか </div> </p></p><br />
      
	   <p class="debai"><b>４２． </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau42" value="A">１．やめようと思う　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau42" value="A">２．やめてほしいのだ　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau42" value="A">３．やめるのだろうか　　　</div> </p></p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau42" value="A">４．やめられるものではない </div> </p></p><br />
      
	   <p class="debai"><b>４３． </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau43" value="A">１．Aやはり/bところだった　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau43" value="A">２．Aいったい/bのか </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau43" value="A">３．Aといっても/bわけでもない　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau43" value="A">４．Aだしかに/bことは間違いない </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	   <p class="debai"><b>４４．</b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau44" value="A">１．見させてしまう　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau44" value="A">２．身を乗り出させる </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau44" value="A">３．見られてしまう　　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau44" value="A">４．身を乗り出される</div> </p></p><br />
      
	   <p class="debai"><b>４５． </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau45" value="A">１．Aぼく/bみんな　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau45" value="A">２．A広告主/bみんな </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau45" value="A">３．a広告主/bぼくも　　　</div> </p></p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau45" value="A">４．Aぼく/b広告主も </div> </p></p><br />
	 <img src="images/japan/n1//p9.png" width="100%" height="150px" alt="" />
	 <img src="images/japan/n1//p10.png" width="100%" height="350px" alt="" />
    <p> <br />
      <br />
      
	   <p class="debai"><b>４６．筆者の考えに合うのはどれか。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau46" value="A">１．食事のたびに食器を眺めることで、陶芸品への愛着が強まる。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau46" value="A">２．日常使う食器に注意を向けることで、陶芸品への関心が高まる。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau46" value="A">３．食器を通して陶芸品に興味を持つことで、芸術全般への関心が高まる </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau46" value="A">４．家庭にいろいろな食器を取り入れることで、陶芸品への愛着が強まる。</div> </p></p><br />
  <br />
      <img src="images/japan/n1//p11.png" width="100%" height="800px" alt="" />
	   <p class="debai"><b>４７．筆者は、弱者をどのようにとらえているか。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau47" value="A">１．弱者は正直であることで自らの尊厳を守ろうとする。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau47" value="A">２．弱者は理性を持って自らの過ちをわびようとする。</div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau47" value="A">３．弱者は正論に頼って劣勢を解消しようとする。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau47" value="A">４．弱者は謝罪することで自らを守ろうとする。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
  <br />
        <img src="images/japan/n1//p12.png" width="100%" height="300px" alt="" />
	   <p class="debai"><b>４８．筆者は、思春期を迎える前の子どもにとってどんな経験が必要だと考えているか。 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau48" value="A">１．家庭の外の社会で多くの社会問題に取り組む試験。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau48" value="A">２．日々の生活の場で自分自身と向き合うような経験。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau48" value="A">３．広い社会の中で自分を鍛えることができるような経験。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau48" value="A">４．日常生活の中で個人に発達階段に応じた役割を担う経験。</div> </p></p><br />
  
        <img src="images/japan/n1//p13.png" width="100%" height="150px" alt="" />
		<img src="images/japan/n1//p14.png" width="100%" height="800px" alt="" />
	   <p class="debai"><b>４９．筆者は、自分が笑われた原因はどこにあると考えているか</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau49" value="A">１．科学者らしくない趣のある表現で桜の花を褒めた点。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau49" value="A">２．自分が桜の美しさを理解できいていなかった点。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau49" value="A">３．桜の花は自分が述べた形をしていなかった点。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau49" value="A">４．桜の美しさを科学者的に視点から表現した点。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
   
    <p class="debai"><b>５０．ここでの理想化とは何か。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau50" value="A">１．桜の花はどれも正五角形であるとみなすこと。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
       <p> <div style="float:left;"><input type="radio" name="cau50" value="A">２．桜の花には共通する特徴があるとみなすこと。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau50" value="A">３．桜の花には数学的な美しさがあると考えること。 </div> </p></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau50" value="A">４．桜の花には数学的な美しさがあると考える。 </div> </p></p><br />
	   
      <p class="debai"><b>５１．筆者の考えによると、花の場合、抽象化と理想化によって何が期待されるか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau51" value="A">１．花には品種を越えた共通点があることが明らかになること。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau51" value="A">２．自然界に咲いている花の美しさに普遍性が見いだされること。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau51" value="A">３．花の形がどのように決まるのかその仕組みが解明されること。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau51" value="A">４．花の形の対称性が遺伝子によるものであることが証明されること。 </div> </p></p><br />
   <img src="images/japan/n1//p15.png" width="100%" height="800px" alt="" />
      
	  <p class="debai"><b>５２．世間一般の価値基準として筆者が本文であげているのは何か。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau52" value="A">１．長期にわたって居住できる物件であること。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau52" value="A">２．将来売却するときにも有利物件であること。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau52" value="A">３．購入時の生活様式に合った物件であること。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau52" value="A">４．購入時の費用負担が抑えられる物件であること。</div> </p></p> <br />
      
	  <p class="debai"><b>５３．筆者の考えでは、年を取ってから住む家として住居を選ぶときに最も大切なことは何か。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau53" value="A">１．老後の生き方や行動範囲に沿っているかを判断する。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau53" value="A">２．老後は行動する能力が衰えるため家の構成を優先する。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau53" value="A">３．未来の予測に沿って決めた予算と同じくらいのものを選ぶ。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau53" value="A">４．いつか売るときのことも考えて資産的な価値を重視する。</div> </p></p> <br />
      
	  <p class="debai"><b>５４．住居選びについて、筆者が最も言いたいことは何か。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau54" value="A">１．人が生活する上でどんな住居に住むかはとても大切であり、一般的な価値基準も参考にしたほうがよい。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau54" value="A">２．他人と考え方が異なったとしても、自分の生活スタイルを重視して将来の住居を決定したほうがよい。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau54" value="A">３．将来の経済状勢の変化の備えて、できるだけ、資産価値の下がりにくそうな住居を選んだほうがよい </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau54" value="A">４．年を取るにつれて住居の好みも変わってくるため、その時々の考えに合わせて住居を選択したほうがよい。 </div> </p></p></p>
    <img src="images/japan/n1//p16.png" width="100%" height="800px" alt="" />
      
	  <p class="debai"><b>５５．①<u>そういう宿命</u>とはどういう意味か。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau5" value="A">１．現代の人々は考えが時代や環境に歪められ、「世界」の見方が定まらない。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau5" value="A">２．現代の人々は時代や環境の制約を受けており、「世界」が正しく見えないこともある。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau5" value="A">３．人間はものの見方が時代や環境に縛られ、「世界」が正しく見えないこともある。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau5" value="A">４．人間は生き方が時代や環境に大きく影響を受け、「世界」の見方が定まらない。</div> </p></p><br />
      
	  <p class="debai"><b>５６．①「世界を知る」ことがますます困難になったはなぜか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau56" value="A">１．個人の世界認識が狭まり、実世界の時代の変化をつかみにくいから。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau56" value="A">２．個人の世界認識が、固まらず、実世界の情報に惑わされてしまうから。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau56" value="A">３．個人の世界認識が、実世界のめまぐるしい変化や情報量に対応できないから。  </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau56" value="A">４．個人の世界認識が、高度に発達している実世界の情報環境に追いつけないから。</div> </p></p> <br />
      
	  <p class="debai"><b>５７．筆者は、「世界を知る力」を高めるためにできることは何だと考えているか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau57" value="A">１．今までの世界認識を改め、できるだけ多くの情報を得ること。</div> </p></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau57" value="A">２．時代や環境の制約を克服して、自分の世界認識の限界を越えること。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau57" value="A">３．情報の激流に吞み込まれず、自分の世界認識の枠から自由になること。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau57" value="A">４．自分の世界認識にできるでけ柔軟性を待たせ、その範囲を自覚すること。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
  <img src="images/japan/n1//p17.png" width="100%" height="150px" alt="" />
   <img src="images/japan/n1//p18.png" width="100%" height="700px" alt="" />
      
	  <p class="debai"><b>５８．①そんな錯覚に捕らえられるとはどういう意味か。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau58" value="A">１．自分は何でも知っていて世界を相手にできると思う。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau58" value="A">２．言葉でどんなことでも伝えられるような気になる。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau58" value="A">３．学問から得られることには限界がないと感じてしまう。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau58" value="A">４．人間が世界から学べることはいかに大きいことかと思う。 </div> </p></p><br />
      
	  <p class="debai"><b>５９．②<u>これ</u>とは何を指すか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau59" value="A">１．自分にできることを把握したうえで仕事をすること。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau59" value="A">２．自分が世界のために何ができるかを考えて仕事に励むこと。  </div> </p></p><br />
     <p> <div style="float:left;"><input type="radio" name="cau59" value="A"> ３．できる限り多くの知識を得て自分の仕事に役立たせること。  </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau59" value="A">４．人のためにできることは何かを考えたうえで仕事をすること。  </div> </p></p><br />
      
	  <p class="debai"><b>６０．この文章では、学問をするということをどのような例を使って説明しているか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau60" value="A">１．与えられた土を耕し、よい苗を選んで植える。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau60" value="A">２．与えられた土を耕し、よい作物になるように苗を育てる。  </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau60" value="A">３．与えられた土壌を改善するために耕し続ける。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau60" value="A">４．与えられた土壌を改善しながら世界標準の作物を育てる。</div> </p></p><br />
       <img src="images/japan/n1//p19.png" width="100%" height="150px" alt="" />
	    <img src="images/japan/n1//p20.png" width="100%" height="700px" alt="" />
		 <img src="images/japan/n1//p21.png" width="100%" height="700px" alt="" />
	  <p class="debai"><b>６１．筆者は「教養」をどのようなものだと考えているか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau61" value="A">１．新た気質を見ないだすことができる学問や思想。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau61" value="A">２．人それぞれの気質の中で育まれた学問や思想。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau61" value="A">３．生きていくうえで必要な専門的知識。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau61" value="A">４．書物や学問から得られた多くの知識。 </div> </p></p><br />
  <br />
  <br />
  <br />
      
	  <p class="debai"><b>６２．子どもにテレビを長時間見せることについて、AとBの観点はどのようなものか </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau62" value="A">１．Aは問題解決を意識した今後の課題を述べ、Bは批判的に現状を報告している。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau62" value="A">２．Aは解決を意識した問題提起をし、Bは問題の原因は社会的背景にあると指敵している。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau62" value="A">３．Aは影響の大きさを示して注意を喚起し、Bは問題解決を意識した今後の課題を述べている。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau62" value="A">４．Aは問題の原因は社会的背景にあると指敵し、Bは影響の大きさを示して注意を喚起している。 </div> </p></p><br />
      
	  <p class="debai"><b>６３．子どもテレビの玄関について、AとBはどのように述べているか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau63" value="A">１．Aはメデイアとの接触より親子のかかわりが大切だと述べ、Bはテレビを見せるより外での遊びを重視したほうがいいと述べている。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau63" value="A">２．Aはメデイアとの接触が子どもの発育を妨げる要因だと述べ、Bは子育てを取り巻く状況がテレビの見せ過ぎを引き起こす場合があると述べている。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau63" value="A">３．Aはメデイアとの接触が長いことよりも実体験の不況のほうが問題だと述べ、Bは生活の中からテレビを排除しただけでは問題は解決しないと述べている。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau63" value="A">４．Aはメデイアに長時間接することがこどもの成長に影響を与える場合が多いと述べ、Bは親が子どもに適切にテレビを見せることが大切だと述べている。 </div> </p></p><br />
  <img src="images/japan/n1//p22.png" width="100%" height="150px" alt="" />
   <img src="images/japan/n1//p23.png" width="100%" height="700px" alt="" />
    <img src="images/japan/n1//p24.png" width="100%" height="700px" alt="" />
      
	  <p class="debai"><b>６４．<u>かたちにならないもの</u>として筆者が挙げているのはどれか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau64" value="A">１．自然　　　</div> </p></p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau64" value="A">２．生命　　　</div> </p></p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau64" value="A">３．感謝　　</div> </p></p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau64" value="A">４．作法 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	  <p class="debai"><b>６５．この文章中で筆者は、自分に村に暮らす人々がどんな思想をもっていると述べているか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau65" value="A">１．自然の中で生きるための思想や、農業や村のあり方についての思想。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau65" value="A">２．自然を壊さずに暮らすために、農業や村人はどうあるべきかという思想。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau65" value="A">３．自然に対する感謝を表すために、村人としてどうするべきかという思想。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau65" value="A">４．自然を取り戻すための思想や、自然を利用する農業のあり方についての思想。 </div> </p></p><br />
      
	  <p class="debai"><b>６６．食事の作法は、次のどのような考え方と結びついているか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="A">１．多くの労力がささげられて作られた食べ物が、いかに尊いものであるかという考え方。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="A">２．何かを食べないでは生きてはいけない人間のあり方が、いかに犯罪深いものであるかという考え方。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="A">３．食事は農が生み出したものをいただくものであり、農業を営む村人への感謝が必要だという考え方。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="A">４．食事は他の生命を自分の身体に取り入れるものであり、それら、生命に感謝しなければいけないという考え方。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	  <p class="debai"><b>６７．この文章中で筆者が述べていることはどれか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="A">１．思想の表現は必ずしも文章や作品というかたちをとるとは限らず、かたちにならないものある。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="A">２．思想は絵や音楽のようなかたちに表わされるものと考えられてきたが、深い思想とはかたちにならないものである。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="A">３．思想の表現には絵や音楽などもあるし、かたちにならないものもあるが、文章で表現されたものが最上のものである。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="A">４．思想は文章や作品のようなかたちになったものが尊重されるが、生活と結びついた深い思想はかたちにならないものである。 </div> </p></p><br />
       <img src="images/japan/n1//p25.png" width="100%" height="200px" alt="" />
	       <img src="images/japan/n1//p26.png" width="100%" height="700px" alt="" />
      
	  <p class="debai"><b>６８．高木さんが製作した以下の作品のうち、応募できるものはどれか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="A">１．清森高校に通っていたとき入賞した秋の風景画。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="A">２．清森市にある清森温泉の紅葉の油絵とイラスト。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="A">３．清森市にある清森公園で撮った春の木々の写真。</div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="A">４．去年清森市で行われた秋祭りの写真と水彩画。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	  <p class="debai"><b>６９．入賞したかどうかを知るには、高木さんはどうしたらよいか。 </b></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="A">１．１月中旬に清森市のホ一ムぺ一ジを見る。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="A">２．１月中旬に直接、観光係に電話して聞く。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="A">３．２月下旬に市役所の窓口に問い合わせる。 </div> </p></p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="A">４．２月下旬に届く予定の通知を待つ。</div> </p></p><br />
    <p>Ｐ２．聴解 <br />
    </p>
	    <img src="images/japan/n1//p27.png" width="100%" height="350px" alt="" />
    <p>
	<audio controls>
		<source src="audio/n1/N1Q1.mp3" type="audio/ogg">
	</audio>
	<br />
	例： </p>
    <ol>
      <li>　　　２．　　　　３．　　　　　４． </li>
    </ol>
    <p>１番： <br />
      １．研究の背景をまとめる　　　２．研究目的を明確にする　　３．調査結果を視覚的に示す　　　　４．文法の間違いを直す <br />
      ２番： <br />
      １．植物の土を換える　　　２．牛のミルクの出方を調べる <br />
      ３．牛に名前をつける　　　４．植物に名前をつける <br />
      ３番： <br />
      １．配布資料を印刷する　　２．発表用のげんこうを修正する <br />
      ３．発表用のげんこうを暗記する　　４．質問を予想して準備する <br />
      ４番： <br />
      １．会計課に出す資料を作成する　　　２．打ち合わせの記録を作成する　３．今朝頼まれた仕事をする　　４．どうりょうに仕事を引き継ぐ <br />
      ５番： <br />
      １．客のコ一トをふく　　　２．客のコ一トをあずかる　　３．客の連絡先をたずねる　　　４．客にクリ一ニング代を払う <br />
      ６番： <br />
      １．保証書　　　２．修理依頼書　　　３.保証書と修理依頼書 <br />
      ４．修理依頼書と修理記録 <br />
	      <img src="images/japan/n1//p28.png" width="100%" height="350px" alt="" />
	<br />
	<audio controls>
		<source src="audio/n1/N1Q2.mp3" type="audio/ogg">
	</audio>
    <br />
      例： </p>
    <ol>
      <li>　　　２．　　　　３．　　　　４． </li>
    </ol>
    <p>１番： <br />
      １．スタミナを向上させること　　　２．体の柔軟性を高めること <br />
      ３．テクニックをみがくこと　　　　４．冷静さを常時保つこと <br />
      ２番： <br />
      １．海外の職場で働くこと　　　　　２．新しい土地で暮らすこと <br />
      ３．引っ越しの準備をすること　　４．子供を日本に残していくこと <br />
      ３番： <br />
      １．インタ一ネットで多くの人に見てもらえること　　２．しゅんかんを形にして後まで残せること　　　３．日常のささいなことが楽しめること　　４．できあがった写真がかざれること <br />
      ４番： <br />
      １．製品の広告を出す　　　２．製品の値段をさげる <br />
      ３．配送費用をただにする　４．設置費用を割り引く <br />
      ５番： <br />
      １．スト一リ一展開のおもしろさ　　２．言葉づかいのユニ一クさ <br />
      ３．ユ一モアのセンス　　　　　　　４．人物びょうしゃの見事さ <br />
      ６番： <br />
      １．熱意があり、何事にも積極的なこと　　２．語学力があり、海外経験が豊かなこと　　３．協調性があり、周囲とうまくやれること <br />
      ４．強いリ一ダ一シップを持っていること <br />
      ７番： <br />
      １．介護についての調査をすること　　　２．在宅での介護サ一ビスを充実させること　　３．介護施設の数を増加させること　　４．介護施設でのサ一ビスを向上させること <br />
	<br />
    <audio controls>
		<source src="audio/n1/N1Q3.mp3" type="audio/ogg">
	</audio>
	<br />
    例： </p>
    <ol>
      <li>　　２．　　　３．　　　　４． </li>
    </ol>
    <p>１番： </p>
    <ol>
      <li>　　２．　　　　３．　　　　４． </li>
    </ol>
    <p>２番：　　 </p>
    <ol>
      <li>　　２．　　　　３．　　　　　４． </li>
    </ol>
    <p>３番： </p>
    <ol>
      <li>　　２．　　　　３．　　　　　４． </li>
    </ol>
    <p>４番： </p>
    <ol>
      <li>　　２．　　　　　３．　　　　４． </li>
    </ol>
    <p>５番： </p>
    <ol>
      <li>　　　２．　　　　　３．　　　　４． </li>
    </ol>
    <p>６番： </p>
    <ol>
      <li>　　　２．　　　　　３．　　　　４． </li>
    </ol>
    <p> <br />
    <audio controls>
		<source src="audio/n1/N1Q4.mp3" type="audio/ogg">
	</audio>
	<br />
    例： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>１番： </p>
    <ol>
      <li>　　２．　　　　３． </li>
    </ol>
    <p>２番： </p>
    <ol>
      <li>　　　２．　　　　　３． </li>
    </ol>
    <p>３番： </p>
    <ol>
      <li>　　　２．　　　　　３． </li>
    </ol>
    <p>４番： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>５番： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>６番： </p>
    <ol>
      <li>　　　２　　　　　３． </li>
    </ol>
    <p>７番： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>８番： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>９番： </p>
    <ol>
      <li>　　　２．　　　　３． </li>
    </ol>
    <p>１０番： </p>
    <ol>
      <li>　　　２．　　　　　３． </li>
    </ol>
    <p>１１番： </p>
    <ol>
      <li>　　　２．　　　　　３． </li>
    </ol>
    <p>１２番： </p>
    <ol>
      <li>　　　　２．　　　３． </li>
    </ol>
    <p>１３番： </p>
    <ol>
      <li>　　　２．　　　　　３． </li>
    </ol>
    <p> <br />
    <audio controls>
		<source src="audio/n1/N1Q5.mp3" type="audio/ogg">
	</audio>
	<br />
    １番： </p>
    <ol>
      <li>　　　２．　　　　３．　　　４． </li>
    </ol>
    <p>２番： </p>
    <ol>
      <li>　　　２．　　　　３．　　　４． </li>
    </ol>
    <p>３番１： </p>
    <ol>
      <li>　　　２．　　　　３．　　　　４． </li>
    </ol>
    <p>３番２： </p>
    <ol>
      <li>　　　２．　　　　３．　　　　　４． </li>
    </ol>
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