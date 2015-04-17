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
    <p style="font-weight:bold;">Trình Độ N2</p>
	<?php
	if((isset($_SESSION['loginAcc'])) and (isset($_SESSION['id']))){
			if($_SESSION['loginAcc'] == 'Yes'){
				$active = readAtAccByIdAcc($_SESSION["id"])->Status;
				if($active == 'Yes'){			
	?>
	<p><b> Ｐ１．文字．語彙．文法．読解 </b></p><br />
    <img src="images/japan/n3/demo_clip_image002.jpg" alt="" width="623" height="86" /></p>
    <ol>
      <li>ずっと好調だったのに、最後の試合で<u>敗れて</u>しまった。 </li>
    </ol>
    <p> <div style="float:left;"><input type="radio" name="cau1" value="C">１．たおれて　　</div> </p><br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">２．やぶれて　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">３．みだれて　　</div> </p><br />
	<p> <div style="float:left;"><input type="radio" name="cau1" value="C">４．つぶれて </div> </p><br />
	
	
     <p><b> ２．この仕事には高い語学力が<u>要求</u>される。  </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau2" value="C">１．ようきゅ　　　</div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau2" value="C">２、よっきゅう　　</div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau2" value="C">３．ようきゅう　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau2" value="C">４．よっきゅ 　</div> </p><br />
		  
      <p><b> ３．友達の合格をみんなで<u>祝った</u>。</b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau3" value="C">１．いわった　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau3" value="C">２．いのった　　　　</div> </p><br />
		    <p> <div style="float:left;"><input type="radio" name="cau3" value="C">３．うらなった　　　</div> </p><br />
			  <p> <div style="float:left;"><input type="radio" name="cau3" value="C">４．ねがった 　　</div> </p><br />
			  
      <p><b>４．寒かったら、エアコンの温度を<u>調節</u>してください。</b></p>  <br />
      <p> <div style="float:left;"><input type="radio" name="cau4" value="C">１．ちょうさい　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="C">２．ちょうせい　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="C">３．ちょうさつ　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau4" value="C">４．ちょうせつ </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  
      <p><b>５．この書類を<u>至急</u>コピ一してきてください。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau5" value="C">１．しっきゅう　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="C">２．ちっきゅう　　</div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="C">３．しきゅう　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau5" value="C">４．ちきゅう </div> </p><br />
	  
  <img src="images/japan/n2/demo_clip_image004.jpg" alt="" width="624" height="96" /> <br />
        <p><b>６．ハトは平和の<u>しょうちょう</u>だと言われている。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau6" value="C">１．像徴　　</div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau6" value="C">２．象微　　　</div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau6" value="C">３．象徴　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau6" value="C">４．像微 </div> </p><br />
		  
        <p><b> ７．退院しても、しばらくの間、<u>はげしい</u>運動はしないでください。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau7" value="C">１．険しい　　　</div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau7" value="C">２．激しい　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		 <p> <div style="float:left;"><input type="radio" name="cau7" value="C">３．暴しい　　　　</div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau7" value="C">４．極しい 　</div> </p><br />
		  
     <p><b>  ８．携帯電話に友達の電話番号を<u>とうろく</u>した。</b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau8" value="C">１．登録　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau8" value="C">２．登緑　　　</div> </p><br />
		    <p> <div style="float:left;"><input type="radio" name="cau8" value="C">３．答録　　</div> </p><br />
			  <p> <div style="float:left;"><input type="radio" name="cau8" value="C">４．答緑 </div> </p><br />
			  
        <p><b>  ９．おかださんを話題の映画に<u>さそった</u>。 </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau9" value="C">１．招った　　　</div> </p><br />
		  <p> <div style="float:left;"><input type="radio" name="cau9" value="C">２．勧った　　</div> </p><br />
		    <p> <div style="float:left;"><input type="radio" name="cau9" value="C">３．請った　　　</div> </p><br />
			  <p> <div style="float:left;"><input type="radio" name="cau9" value="C">４．誘って </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
			  
       <p><b> １０．待ち合わせの時間を６時に<u>へんこう</u>してもらった。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau10" value="C">１．変改　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="C">２．変更　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="C">３．変換　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau10" value="C">４．変替 </div> </p><br />
	  
    <p><img src="images/japan/n2/demo_clip_image006.jpg" alt="" width="623" height="59" /> <br />
      <p><b>１１．彼は医学（　　　）ではかなり知られた存在だ。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau11" value="C">１．界　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
	    <p> <div style="float:left;"><input type="radio" name="cau11" value="C">２．帯　　</div> </p><br />　　　
		 <p> <div style="float:left;"><input type="radio" name="cau11" value="C">３．域　　</div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau11" value="C">４．区 </div> </p><br />　
		  
         <p><b>１２．決勝戦で負けて、（　　　　）優勝に終わった。 </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau12" value="C">１．後　　　</div> </p><br />　　　
		  <p> <div style="float:left;"><input type="radio" name="cau12" value="C">２．準　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		    <p> <div style="float:left;"><input type="radio" name="cau12" value="C">３．次　　</div> </p><br />　　　
			  <p> <div style="float:left;"><input type="radio" name="cau12" value="C">４．副 </div> </p><br />　
			  　　
      <p><b>１３．（　　　）階段では詳細は決まっていないらしい。</b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau13" value="C">１．現　　　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau13" value="C">２．直　　　</div> </p><br />　　　
		    <p> <div style="float:left;"><input type="radio" name="cau13" value="C">３．近　　　</div> </p><br />　　　
			  <p> <div style="float:left;"><input type="radio" name="cau13" value="C">４．当 </div> </p><br />　　　
    
	  <p><b>１４．今回の大臣の訪問は（　　　　）公式に行われた。 </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau14" value="C">１．不　　　　</div> </p><br />　　　
		  <p> <div style="float:left;"><input type="radio" name="cau14" value="C">２．未　　　　</div> </p><br />　　　
		    <p> <div style="float:left;"><input type="radio" name="cau14" value="C">３．無　　　</div> </p><br />　　　
			  <p> <div style="float:left;"><input type="radio" name="cau14" value="C">４．非 　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
			  
       <p><b>１５．わが社の今年の（　　　）売上は、昨年を上回った。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau15" value="C"> １．集　　　</div> </p><br />　　
	     <p> <div style="float:left;"><input type="radio" name="cau15" value="C">２．総　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		   <p> <div style="float:left;"><input type="radio" name="cau15" value="C">３．合　　　</div> </p><br />　　
		     <p> <div style="float:left;"><input type="radio" name="cau15" value="C">４．満</div> </p><br />
			 　　
    <p><img src="images/japan/n2/demo_clip_image008.jpg" alt="" width="623" height="56" /> <br />
       <p><b>１６.さまざまなデ一タを（　　　）した結果、事故の原因が明らかになった。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau16" value="C">１．視察　　</div> </p><br />　　　
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="C">２．検査　　</div> </p><br />　　　
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="C">３．発明　　　</div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau16" value="C">４．分析 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  
      <p><b>１７．街を（　　　　）していたら、やまもとさんに会った。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau17" value="C">１．ぐらぐら　　</div> </p><br />　　
	    <p> <div style="float:left;"><input type="radio" name="cau17" value="C">２．がらがら　</div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau17" value="C">３．ばらばら　</div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau17" value="C">４．ぶらぶら  </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  
     <p><b> １８．祭りの日は町が（　　　）にあふれている。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau18" value="C">１．活気　　 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
	    <p> <div style="float:left;"><input type="radio" name="cau18" value="C">２．活発　　　　</div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau18" value="C">３．活躍　　</div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau18" value="C">４．活動</div> </p><br />　　
		  
      <p><b>１９．コピ一機に紙が（　　　）、出てこない。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau19" value="C">１．もぐって　　</div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="C">２．つまって　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="C">３．しずんで　</div> </p><br />　　
	  <p> <div style="float:left;"><input type="radio" name="cau19" value="C">４．うまって</div> </p><br />　　
	  
       <p><b>２０．この小説は今の時代を（　　　）した作品だ。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau20" value="C">１．反映　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau20" value="C">２．放映　　　</div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau20" value="C">３．引用　　</div> </p><br />　　　
		  <p> <div style="float:left;"><input type="radio" name="cau20" value="C">４．採用 </div> </p><br />　
		  　
      <p><b>２１．たなかさんは長い間（　　　）窓の外を見ていた。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau21" value="C">１．ぼんやり　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau21" value="C">２．ふんわり　　　</div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau21" value="C">３．うっすら　　　</div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau21" value="C">４．しっとり 　</div> </p><br />　　
		  
       <p><b>２２．経済だけでなく、法律にも詳しいのが彼の（　　　）だ。 </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau22" value="C">１．深み　　　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau22" value="C">２．強み　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		    <p> <div style="float:left;"><input type="radio" name="cau22" value="C">３．高み　　　　</div> </p><br />　
			  <p> <div style="float:left;"><input type="radio" name="cau22" value="C">４．重む 　</div> </p><br />　
			  
  <img src="images/japan/n2/demo_clip_image010.jpg" alt="" width="677" height="73" /> <br />
       <p><b>２３．この<u>ブ一ム</u>は長くは続かないだろう。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau23" value="C">１．効果　　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau23" value="C">２．状態　　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau23" value="C">３．流行　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau23" value="C">４．緊張 </div> </p><br />　
		  
       <p><b>２４．この作業は<u>慎重</u>にやってください。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau24" value="C">１．急いで　　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau24" value="C">２．絶対忘れずに　　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau24" value="C">３．静かに　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau24" value="C">４．十分注意して 　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  
       <p><b>２５.シャツが<u>ちぢんで</u>しまった。 </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau25" value="C">１．小さくなって　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau25" value="C">２．古くなって</div> </p><br />　
		    <p> <div style="float:left;"><input type="radio" name="cau25" value="C">　３．汚れて　</div> </p><br />　
			  <p> <div style="float:left;"><input type="radio" name="cau25" value="C">　４．破れて</div> </p><br />　
			  
       <p><b>２６．宿題のレポ一トは<u>ほぼ</u>終わった。  </b></p> <br />
        <p> <div style="float:left;"><input type="radio" name="cau26" value="C">１．すべて　　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau26" value="C">２．すぐに　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		    <p> <div style="float:left;"><input type="radio" name="cau26" value="C">３．だいたい　　</div> </p><br />　
			  <p> <div style="float:left;"><input type="radio" name="cau26" value="C">４．やっと </div> </p><br />　
			  
        <p><b>２７．来週は天気が<u>回復する</u>そうだ。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau27" value="C">１．あまり変わらない　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau27" value="C">２．変わりやすい　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau27" value="C">３．よくなる　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau27" value="C">４．悪くなる </div> </p><br />
		  　
  <img src="images/japan/n2/demo_clip_image012.jpg" alt="" width="623" height="56" /> <br />
       <p><b>２８．方針 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau28" value="C">１．台風の<u>方針</u>がそれたので、特に被害は出なかった。 　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau28" value="C">２．私の今年の<u>方針</u>は漢字を６００字覚えることだ。　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau28" value="C">３．この料理を作る<u>方針</u>を教えてください。　</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau28" value="C"> ４．この料理を作る<u>方針</u>を教えてください。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  
       <p><b>２９．範囲 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau29" value="C">１．この町は川によって二つの<u>範囲</u>に分かれている。 　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau29" value="C">２．この会社は新しい<u>範囲</u>に進出した。 　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau29" value="C">３．明日は広い<u>範囲</u>で強い雨が降るでしょう。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau29" value="C">４．家から駅までの<u>範囲</u>は２キロぐらいだ。 　</div> </p><br />　
	  
       <p><b>３０．せめて</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau30" value="C">１．その店のセ一タ一は<u>せめて</u>１万円はするだろう。 　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau30" value="C">２．今からタクシ一に乗っても、<u>せめて</u>１０時には着けない。 　</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau30" value="C">３．京都に行くなら、<u>せめて</u>１泊はしたい。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau30" value="C">４．先週のテストは自身がなかったが、<u>せめて</u>５０点は取れた。 　</div> </p><br />　
	  
       <p><b>３１．利益 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau31" value="C">１．ジョギングは健康の<u>利益</u>になる。</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau31" value="C">２．この値段で売ったら、店の<u>利益</u>はほとんどない。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau31" value="C">３．かぜ薬を飲んだが、<u>利益</u>が感じられない。</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau31" value="C">４．バスの<u>利益</u>は、新幹線よりも料金が安いことだ。 </div> </p><br />　
      
	   <p><b>３２．かなう </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau32" value="C">１．苦労が<u>かない</u>、彼は俳優として成功をおさめた。 </div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau32" value="C">２．天気予報が<u>かない</u>、今日は一日中快晴だった。 </div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau32" value="C">３．準備を重ねてきたイベントが無事<u>かなった</u>。</div> </p><br />　
       <p> <div style="float:left;"><input type="radio" name="cau32" value="C">４．自分の店を持つという夢が、とうとう<u>かなった</u>。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
    
	<p><img src="images/japan/n2/demo_clip_image014.jpg" alt="" width="623" height="84" /> <br />
     <p><b>  ３３．A「もう無理だよ、私には５キロなんて走れないよ。」 <br />
      B「まだ５００メ一トルだよ。なんでそうやってすぐ、もうだめ（　　　）言うの。」 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau33" value="C">１．を　　</div> </p><br />　　
	    <p> <div style="float:left;"><input type="radio" name="cau33" value="C">２．は　　　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau33" value="C">３．とか　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau33" value="C">４．とは </div> </p><br />　
      
	   <p><b>３４．あれこれ悩んだ（　　　　）、ABC大学を志望校に決めた。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau34" value="C">１．さきに　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau34" value="C">２．すえに　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau34" value="C">３．ところに　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau34" value="C">４．とおりに </div> </p><br />　
		  
       <p><b>３５．プリンタ一の調子が悪くなり、製造会社に電話で問い合わせたら、向こうの担当者に、あれこれ質問に答え（　　　）あげく、対応できないと言われた。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau35" value="C">１．させた　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau35" value="C">２．させられる　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau35" value="C">３．させる　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau35" value="C">４．させられた </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      
	   <p><b>３６．面倒だが、やはりこの仕事は断れない。引き受ける（　　　）。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau36" value="C">１．までもあるまい　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau36" value="C">２．こともない　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau36" value="C">３．はずもない　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau36" value="C">４．しかあるまい </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      
	   <p><b>３７．山田監督の、「私、山田は、５年ぶりにふるさとに戻って（　　　）。」というあいさつに、会場からは大きな拍手が起こった。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau37" value="C">  １．まいりました　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau37" value="C">２．いらっしゃいました　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau37" value="C">３．うかがいました　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau37" value="C">４．おいでになりました</div> </p><br />　
      
	   <p><b>３８．彼女の絵は、国内より（　　　）海外での評価が高い。  </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau38" value="C">１．まさか　　</div> </p><br />　
	   <p> <div style="float:left;"><input type="radio" name="cau38" value="C">２．たとえ　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau38" value="C">３．むしろ　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau38" value="C">４．かりに </div> </p><br />　
      
	   <p><b>３９．今年も卒業生を送り出した。次に会うときには、彼らも立派な大人に（　　　）。  </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau39" value="C">１．なるだろう　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau39" value="C">２．なっただろう　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau39" value="C">３．なっているだろう　 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau39" value="C">４．なっていただろう </div> </p><br />　
      
	   <p><b>４０．毎日（　　　）どちらでもいいことばかりを日記に書いているのだが、それがストレス解消になっている。 </b></p> <br />
      
	   <p> <div style="float:left;"><input type="radio" name="cau40" value="C">１．書くとも書かないとも　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau40" value="C">２．書いたか書かなかったか　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau40" value="C">３．書いても書かなくても　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
		  <p> <div style="float:left;"><input type="radio" name="cau40" value="C">４．書くとか書かないとか </div> </p><br />　
      
	   <p><b>４１．顔を洗うときには、せっけんを（　　　）、さっと洗うのが肌にはよい。 </b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau41" value="C">１．使いすぎずに　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
	    <p> <div style="float:left;"><input type="radio" name="cau41" value="C">２．使うにすぎず　　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau41" value="C">３．使うにすぎなく　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau41" value="C">４．使いすぎもなくて </div> </p><br />　
      
	  <p><b>４２．留学するまで、私は自分が見ている世界がすべてだと思っていた。実はそれが世界のほんの小さな一部分（　　　）気付いていなかった。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau42" value="C">１．でないことにしか　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau42" value="C">２．でしかないことに</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau42" value="C">３．にないことでしか　　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau42" value="C">４．にしかないことで</div> </p><br />　
      
	  <p><b>４３．（会社で）  <br />
      A「あれ？あそこにいるの、やまださんかな。」 <br />
      B「山田さんは出張中だよ。今ここに（　　　）。」 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau43" value="C">１．いないわけじゃないよ　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau43" value="C">２．いるわけないじゃない　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau43" value="C">３．いたわけじゃないよ　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau43" value="C">４．いなかったわけじゃない </div> </p><br />　
      
	  <p><b>４４．A「このタレント、最近よくテレビで見るね。」  <br />
      B「ほんと。この人を見ない日はない（　　　）よね。」 </b></p><br />
       <p> <div style="float:left;"><input type="radio" name="cau44" value="C">１．と言ってもいいぐらいだ　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
	    <p> <div style="float:left;"><input type="radio" name="cau44" value="C">２．と言ったらいいだけだ　</div> </p><br />　
		 <p> <div style="float:left;"><input type="radio" name="cau44" value="C">３．と言ってもいいからだ　　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau44" value="C">４．と言ったらいいことだ </div> </p><br />　
  <img src="images/japan/n2/demo_clip_image016.jpg" alt="" width="658" height="541" /></p>
    
	<p><b>４５．不調だった山中選手がついにゴ一ルを決めた。彼に　　＿　　＿　　<u>＊</u>　　＿　　相当あったはずだ。</b></p> <br />
       <p> <div style="float:left;"><input type="radio" name="cau45" value="C">１．したら　　　</div> </p><br />　
	    <p> <div style="float:left;"><input type="radio" name="cau45" value="C">２．という　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　　
		 <p> <div style="float:left;"><input type="radio" name="cau45" value="C">３．プレッシャ一は　　</div> </p><br />　
		  <p> <div style="float:left;"><input type="radio" name="cau45" value="C">４．「もし、またミスをしたら」 </div> </p><br />　
   
   <p><b>４６．「これは地元ではよく知られた料理で、このすっぱさがおいしい。ただ　　＿　　＿　　<u>＊</u>　　＿　　　増えていることだね。」と田中さんは語る。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau46" value="C">１．なんていう　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau46" value="C">２．残念なのは　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau46" value="C">３．若者が最近　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau46" value="C">４．すっぱいのが苦手だ </div> </p><br />　
      
	   <p><b>４７．忘れられないプレゼントは、小学生のときに両親が買ってくれた自転車です。苦しい生活の中、　＿　　＿　　<u>＊</u>　　＿　　　涙が出ます。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau47" value="C">１．それだけで　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau47" value="C">２．どんな思いで　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau47" value="C">３．買ってくれたのかと　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau47" value="C">４．思うと </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      
	   <p><b>４８．最近、子どもがピアノを習いたいと言いだした。私は、子どもが　　＿　　＿　　<u>＊</u>　　＿　　　と思っている。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau48" value="C">１．したい　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau48" value="C">２．やりたい　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau48" value="C">３．やらせて　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau48" value="C">４．と思うことは </div> </p><br />　
      
	   <p><b>４９．国民の、政治　　＿　　＿　　<u>＊</u>　　＿　　　政治家は指導力を発揮できるのだ。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau49" value="C">１．初めて　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau49" value="C">２．に対する　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau49" value="C">３．があって　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau49" value="C">４．信頼 </div> </p><br />　
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image018.jpg" alt="" width="684" height="106" /> <br />
      <img src="images/japan/n2/demo_clip_image020.jpg" alt="" width="734" height="661" /> <br />
	  
      <p><b>５０．</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau50" value="C">１．それほど　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau50" value="C">２．どのように　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau50" value="C">３．それでも　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau50" value="C">４．どちらも </div> </p><br />　
      
	  <p><b>５１．</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau51" value="C">１．にかわって　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau51" value="C">２．によって　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau51" value="C">３．のうえ　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau51" value="C">４．のほか 　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      
	  <p><b>５２． </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau52" value="C">１．こう　　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau52" value="C">２．そう　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau52" value="C">３．同様に　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau52" value="C">４．以上のように </div> </p><br />　
      
	  <p><b>５３． </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau53" value="C">１．鉄道ファン　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau53" value="C">２．女性ファン　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau53" value="C">３．彼女たち　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau53" value="C">４．大人たち </div> </p><br />　
      
	  <p><b>５４． </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau54" value="C">１．さまざまだ　　　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau54" value="C">２．さまざまだと言われた　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau54" value="C">３．さまざまである点だ　　　</div> </p><br />　
	  <p> <div style="float:left;"><input type="radio" name="cau54" value="C">４．さまざまだと思われている </div> </p><br />　
    <p><img src="images/japan/n2/demo_clip_image022.jpg" alt="" width="685" height="88" /> <br />
      <img src="images/japan/n2/demo_clip_image024.jpg" alt="" width="667" height="308" /> <br />
      
	  <p><b>５５．筆者は、なぜ環境問題を「人間問題」と読んだほうがよいと考えているか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau55" value="C">１．環境は人間にしか変えられないから。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau55" value="C">２．良い環境を必要としているのは人間だから。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau55" value="C">３．人間が責任を持って考えるべき問題だから。 　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau55" value="C">４．人間の生活に多大な影響を与えている問題だから。 </div> </p><br />　
  <img src="images/japan/n2/demo_clip_image026.jpg" alt="" width="624" height="569" /> <br />
     
<p><b>	 ５６．この会社の割引サ一ビスについて正しいものはどれか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau56" value="C">１．「ジミック」のプリンタ一を使っている人は、７、８月中だけインクを５％引きで買うことができる。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau56" value="C">２．「ジミック」のプリンタ一を使っている人が７、８月中にインクを注文すれば、５％引きより安く買うことができる。　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau56" value="C">３．「ジミック」のプリンタ一を７、８月中に買う人は、インクを５％引きより安く買うことができる。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau56" value="C">４．「ジミック」のプリンタ一を７、８月中に買う人がインクを一緒に注文すれば、どちらも５％引きで買うことができる。 </div> </p><br />　
  <img src="images/japan/n2/demo_clip_image028.jpg" alt="" width="624" height="319" /> <br />
      
	  <p><b>５７．筆者は、恐怖や不安をどうとらえているか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau57" value="C">１．恐怖や不安は、安全性の同上を妨げる。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau57" value="C">２．恐怖や不安を感じることが、安全につながる。　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau57" value="C">３．恐怖や不安を取り除くことが、安全に役立つ。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau57" value="C">４．恐怖や不安があるうちは、安全とは言えない。 </div> </p><br />
	  
    <p><b><img src="images/japan/n2/demo_clip_image030.jpg" alt="" width="623" height="336" /><br />５８．人に強い影響を与えるのは大部からなる作品とは限りませんとあるが、なぜか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau58" value="C">１．強い影響を与えるかどうかは、読み手の姿勢で決まるものであるから。 　</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau58" value="C">２．どのような作品でも、読めば読むほど強い影響を受けるものであるから。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau58" value="C">３．人々にどのような影響を与えるかは、書物によってそれぞれ異なるから。</div> </p><br />　
     <p> <div style="float:left;"><input type="radio" name="cau58" value="C">４．書物だけでなく、世の中のできごとからもさまざまな影響を受けているから。 </div> </p><br />　
 
    <p><img src="images/japan/n2/demo_clip_image032.jpg" alt="" width="624" height="350" /> <br />
        <p><b>５９．筆者が考える絵画とはどのようなものか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau59" value="C">１．目で見たものを想像力で補う美しく描き表したもの。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau59" value="C">２．目で見たものを心のなかに感じ取って描き表したもの。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau59" value="C">３．目の前に存在しないものを想像しながら描き表したもの。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau59" value="C">４．目の前にあるものをできるだけ現実に近づけて描き表したもの。</div> </p><br />　
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image034.jpg" alt="" width="684" height="86" /> <br />
      <img src="images/japan/n2/demo_clip_image036.jpg" alt="" width="658" height="690" /> <br />
      
	    <p><b>６０．以前と比べ、消費者はどのように変わったか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau60" value="C">１．商品の機能や味を重視しなくなった。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau60" value="C">２．商品の機能や味を重視するようになった。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau60" value="C">３．商品の傷などの見た目を気にしなくなった。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau60" value="C">４．商品の傷などの見た目を気にするようになった。 </div> </p><br />　
      
	    <p><b>６１．筆者は、消費者の意識の変化をどのようにとらえているか </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau61" value="C">１．少しぐらい質が下がっても、安いほうがいいと考えるようになった。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau61" value="C">２．ものに対する要求水準が下がって、どの商品にも価値を認めるようになった。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau61" value="C">３．多少問題があっても、環境のために我慢するほうがいいと思うようになった。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau61" value="C">４．今まで問題があると思われたものにも、違った価値があると思うようになった。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      
	    <p><b>６２．<u>追いついてきた</u>とあるが、企業がどうなってきたのか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau62" value="C">１．見た目にこだわらなくなった。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau62" value="C">２．環境への責任の重さを感じ始めた。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau62" value="C">３．消費者の厳しい目を意識するようになった。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau62" value="C">４．消費者の意識の変化をくみ取るようになった。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image038.jpg" alt="" width="671" height="766" /> <br />
      
	    <p><b>６３．①<u>いつしか身につけたことのひとつ</u>の例として近いものはどれか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau63" value="C">１．ピアノの先生には何も言われなかったけれども、自分ではうまくひけなかったので次はもっと頑張りたいと思う。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau63" value="C">２．パ一テイ一の準備をするのが大変だったけれども、みんなが喜んでくれたのでまた是非開きたいと思う。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau63" value="C">３．強いチ一ムが相手で試合に勝てなかったけれども、得点を入れることができたのでよかったと考える。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau63" value="C">４．何かを買おうと思っていたわけではないけれども、ちょうど気に入った服が見つかったのでよかったと考える。　　</div> </p><br />　
      
	    <p><b>６４．②そことは何か。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau64" value="C">１．仕事には苦労があるものだということ。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau64" value="C">２．仕事をすれば何かいいことがあるということ。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau64" value="C">３．仕事ではお金をもらうのが当然だということ。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau64" value="C">４．仕事はうまくいかなくて当たり前だということ。 </div> </p><br />　
      
	    <p><b>６５．この文章で筆者の言いたいことは何か。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau65" value="C">１．仕事も精一杯頑張ればそれだけ充実感を得ることができる。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau65" value="C">２．仕事もまず表情を意識することで楽しい気持ちが湧いてくる。 </div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau65" value="C">３．自分が本当に好きな仕事であれば笑顔で楽しむことができる。</div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau65" value="C">４．小さいことに喜びを持つことで楽しく仕事ができるようになる。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image040.jpg" alt="" width="672" height="828" /> <br />
	
      <p><b>６６．「遠く走る技術」はなぜ①<u>身につけることが難しい</u>のか。</b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="C">１．走るフォ一ムは一度固定されると変えられないから。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="C">２．走るフォ一ムを指導する方法があまり改善されていないから。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau66" value="C">３．走るための神経の仕組みはすでにできていて変えにくいから。  </div> <div id='test'> <image src='icon-check.png'></div> </p><br />　
      <p> <div style="float:left;"><input type="radio" name="cau66" value="C">４．走るための神経の仕組みは他の動作は違う特殊なものだから。 </div> </p><br />
      
	  <p><b>６７．②<u>この場合</u>とはどんな場合か。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="C">１．練習に十分な時間が取れない場合。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="C">２．練習の効果がうまく取れない場合。  </div> <div id='test'> <image src='icon-check.png'></div> </p>　
      <p> <div style="float:left;"><input type="radio" name="cau67" value="C">３．走り方の改善に集中できない場合。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau67" value="C">４．コ一チの指導が理解できない場合。</div> </p><br />
      
	  <p><b>６８．筆者によると、「遠い走る技術」を身につけるにはどうすればよいか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="C">１．遠く走る動きを頭に描いてその感覚を体で感じるようにする。 </div> <div id='test'> <image src='icon-check.png'></div> </p>
      <p> <div style="float:left;"><input type="radio" name="cau68" value="C">２．神経の仕組みに直接刺劇を与えるためにいろいろな走り方を試す。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="C">３．頭で考えるよりも、何度も練習を重ねて体で覚えるようにする。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau68" value="C">４．コ一チの指導を受けながら走り方の修正に全神経を集中させて走る。 </div> </p><br />
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image042.jpg" alt="" width="623" height="109" /> <br />
      <img src="images/japan/n2/demo_clip_image044.jpg" alt="" width="674" height="672" /> <br />
      
	  <p><b>６９．AとBのどちらの文章にも触れられている点は何か。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="C">１．電気自動車所有状況の予測。  </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="C">２．人々の電気自動車に対する関心の高さ。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="C">３．今後開発される電気自動車の新機能。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau69" value="C">４．現在の電気自動車が環境に与える効果。</div> </p><br />
      
	  <p><b>７０．AとBの筆者は、車社会の今後の可能性についてどのように考えているか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau70" value="C">１．AもBも、車の台数はさらに増え、人々の生活に不可欠なものになるだろうと考えている。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau70" value="C">２．AもBも、車の技術はますます進歩し、環境を意識した車が手軽に利用できるようになるかもしれないと考えている。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau70" value="C">３．Aは電気自動車の利用者が増えると考え、Bは電気自動車の普及に加え利用の仕方も変化するだろうと考えている。 </div> <div id='test'> <image src='icon-check.png'></div> </p>
      <p> <div style="float:left;"><input type="radio" name="cau70" value="C">４．Aは電気自動車の技術が向上すると考え、Bは将来個人で電気自動車を所有することになるだろうと考えている。 </div> </p><br />
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/japan/n2/demo_clip_image046.jpg" alt="" width="716" height="92" /> <br />
      <img src="images/japan/n2/demo_clip_image048.jpg" alt="" width="666" height="828" /> <br />
      
	<p><b>７１．好き嫌いがあってはいけないと筆者が考えている。  </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau71" value="C">１．どんな研究であっても、役に立つ新しい発見につなげられるから。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau71" value="C">２．どんなことでも、自分の研究に役立つものがあるかもしれないから。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau71" value="C">３．好き嫌いで判断することによって、悪い面に気づきにくくなるから。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau71" value="C">４．嫌いなことには、自分が気づかない重要なことが隠されているから。 </div> </p><br />
      
	  <p><b>７２．筆者はどうして理糸に進んだのか。  </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau72" value="C">１．文糸が得意ではなかったから。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau72" value="C">２．自分の気持ちに従ったから。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau72" value="C">３．特に嫌いではなかったから。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau72" value="C">４．たまたまそうなったから。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	  <p><b>７３．筆者は、好き嫌いとは人間にとってどのようなものだと考えているか。 </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau73" value="C">１．自分がこれからとる行動を決める時のきっかけになるもの。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau73" value="C">２．自分が前向きに生きていくために意識的に利用しているもの。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau73" value="C">３．自分の研究や仕事がうまくいくように普段は抑えているもの。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau73" value="C">４．自分の行動や選択が間違っていなかったと思うために用いるもの。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
  <img src="images/japan/n2/demo_clip_image050.jpg" alt="" width="659" height="79" /> <br />
  <img src="images/japan/n2/demo_clip_image052.jpg" alt="" width="661" height="804" /></p>
    
	<p><b>７４．チャンさんは来月帰国する際に、A社を利用して引越をする予定である。荷物が１０箱以上あるのでなるべく安い料金で送りたいが、そのうち帰国後すぐに使うもの入って５箱は料金が少し高くてもいいので早く着くように送りたい。チャンさんはどうしたらいいか。  </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau74" value="C">１．急ぐものはプラン①で、その他のものはプラン②で送る。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau74" value="C">２．急ぐものはプラン①で、その他のものはプラン③で送る。</div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau74" value="C">３．急ぐものはプラン④で、その他のものはプラン②で送る。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau74" value="C">４．急ぐものはプラン④で、その他のものはプラン③で送る。 </div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      
	  <p><b>７５．会社員の有田さんは３ヶ月後に海外支店に転勤することになった。一緒に行く家族は外国での生活が初めてなので、日本語で対応してもらえて、なるべく楽なプランを利用したいと思っている。有田さんはA、B両社のどのプランを検討したらいいか。  </b></p> <br />
      <p> <div style="float:left;"><input type="radio" name="cau75" value="C">１．A社のプラン①とB社のプランIII。</div> <div id='test'> <image src='icon-check.png'></div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau75" value="C">２．A社のプラン①とB社のプランIV。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau75" value="C">３．A社のプラン②とB社のプランIII。 </div> </p><br />
      <p> <div style="float:left;"><input type="radio" name="cau75" value="C">４．A社のプラン②とB社のプランIV。</div> </p><br />
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Ｐ２．聴解 <br />
	<img src="images/japan/n2/demo_clip_image054.jpg" alt="" width="623" height="361" /> <br />
	<audio controls>
		<source src="audio/n2/N2Q1.mp3" type="audio/ogg">
	</audio>
	<br />
      例： </p>
    <ol>
      <li>　　　２．　　　　３．　　　　４． </li>
    </ol>
    <p>１番： <br />
      １．しりょうをじゅんびする　　　２．パンフレットを用意する <br />
      ３．めいしを注文する　　　　　　４．電子じしょうを買う <br />
      ２番： </p>
    <ol>
      <li>先生の都合を聞く。　　　　　２．ろんぶんをコピ一する </li>
    </ol>
    <p>３．勉強会の日を決める　　　　　　４．教室を予約する <br />
      ３番： <br />
      １．げんこうに自分の経験を入れる　　　２．早く話す練習をする <br />
      ３．げんこうを短くする　　　　　　　　４．げんこうの表現をやさしくする <br />
      ４番： <br />
      １．２、５００円　　　２．３、０００円　　３．３、５００円 <br />
      ４．４、０００円 <br />
      ５番： <br />
      １．しりょうをかくにんする　　　２．メ一ルでしりょうを送る <br />
      ３．けいたい電話にれんらくする　４．会議に出席する <br />
  <img src="images/japan/n2/demo_clip_image056.jpg" alt="" width="624" height="368" /> <br />
	<audio controls>
		<source src="audio/n2/N2Q2.mp3" type="audio/ogg">
	</audio>
	  <br />
      例： <br />
      １．　　　　２．　　　　３．　　　　４． <br />
      １番： <br />
      １．音楽がうるさかったから　　　２．ドアの音が大きかったから <br />
      ３．話し声がうるさかったから　　４．テレビの音が大きかったから <br />
      ２番： <br />
      １．店が便利な場所にあるから　　　２．店員が話し上手だから <br />
      ３．店員がうるさく話しかけないから　　４．店員がかみをきるのがうまいから <br />
      ３番： <br />
      １．料理の味がよくないから　　２．ふんいきがよくないから <br />
      ３．料金が高いから　　　　　　４．会場がせまいから <br />
      ４番： <br />
      １．熱が高い　　２．せきが出る　３．頭が痛い　４．はきけがする <br />
      ５番： <br />
      １．一人でゆっくり食べられること　　２．おいしい料理が食べられること　　　３．他の客と話ながら食べられること　　４．仕事の情報が得られること <br />
      ６番： <br />
      １．４時ごろ　　２．５時ごろ　　３．６時ごろ　　　４．明日の朝 <br />
	<img src="images/japan/n2/demo_clip_image058.jpg" alt="" width="623" height="220" /> <br />
	<audio controls>
		<source src="audio/n2/N2Q3.mp3" type="audio/ogg">
	</audio>
	<br />
      例：　 <br />
      １．　　　　２．　　　３．　　　４． <br />
      １番： <br />
      １．　　　　２．　　　３．　　　４． <br />
      ２番： <br />
      １．　　　２．　　　　３．　　　　４． <br />
      ３番： <br />
      １．　　　２．　　　　３．　　　　４． <br />
      ４番： <br />
      １．　　　　２．　　　３．　　　４． <br />
      ５番： <br />
      １．　　　　２．　　　　３．　　　４． <br />
  <img src="images/japan/n2/demo_clip_image060.jpg" alt="" width="624" height="191" /> <br />
	<audio controls>
		<source src="audio/n2/N2Q4.mp3" type="audio/ogg">
	</audio>
	  <br />
      例： <br />
      １．　　　２．　　　　３． <br />
      １番： <br />
      １．　　　２．　　　　３． <br />
      ２番： <br />
      １．　　　２．　　　３． <br />
      ３番： <br />
      １．　　　２．　　　３． <br />
      ４番： <br />
      １．　　　２．　　　３． <br />
      ５番： <br />
      １．　　　２．　　　３． <br />
      ６番： </p>
    <ol>
      <li>２．　　　　３． </li>
    </ol>
    <p>７番： <br />
      １．　　　　２．　　　　３． <br />
      ８番： <br />
      １．　　　　２．　　　　３． <br />
      ９番： <br />
      １．　　　　２．　　　　３． <br />
      １０番： <br />
      １．　　　　　２．　　　　３． <br />
      １１番： <br />
      １．　　　　　２．　　　　３． <br />
      <img src="images/japan/n2/demo_clip_image062.jpg" alt="" width="623" height="344" /> <br />
      <audio controls>
		<source src="audio/n2/N2Q5.mp3" type="audio/ogg">
	</audio>
	<br />
      １番： <br />
      １．　　　２．　　　３．　　　４． <br />
      ２番： <br />
      １．　　　　２．　　　３．　　　４． <br />
      ３番１： <br />
      １．　　　２．　　　　３．　　　　４． <br />
      ３番２： <br />
      １．　　　　２．　　　３．　　　４． <br />
    </p>
    <p>&nbsp;</p>
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