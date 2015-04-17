<div class="left_content">
    <div class="title_box">Hỗ Trợ Trực Tuyến</div>
	<div class="border_box">
		<br />
		<p><a href="ymsgr:sendim?hiroshiheian&amp;m=Hello"><img src="images/icon/Yahoo.png" width="45" height="41" /></a>Yahoo <a href="skype:hoctiengnhat24h?chat"><img src="images/icon/Skype.png" width="45" height="45" /></a>Skype</p>
        <br/>
	</div>  
	<br/>
	<a href="HDHoc.php"><img src="images/bt-hd.png" width="195" height="38" /></a>
	<br/>
	<br/>
	<a href="HocPhi.php"><img src="images/bt-ht.png" width="195" height="37" /></a>
	<br/>
	<br/>
        <a href="http://diendan.hoctiengnhat24h.com/" target="_blank" ><img src="images/bt-forum.png" width="195" height="37" /></a>
	<br/>
	<br/>
	
	<div class="title_box">Lắng Nghe Và Chia Sẻ</div>
	<div class="border_box">
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="200" align="center">
        <div align="justify"> "Em gửi lòng biết ơn sâu sắc đến hoctiengnhat24h.com, đã truyền cho em niềm đam mê lớn lao với tiếng nhật; những bài giảng đề thi của hoctiengnhat24h.com đã giúp em vững tin rất nhiều vào bản thân trong suốt những ngày ôn thi cũng như khi làm bài.<br>Những bài giảng rất dễ hiểu, bao quát toàn bộ kiến thức cần thiết. Đã giúp em có được hứng thú với Tiếng Nhật." (<span style="font-weight: bold;">pirates_of_caribbean</span>) </div>
        </marquee>
	</div>  
	<br/>
             
    <div class="title_box">Thống Kê</div>
        <ul class="left_menu">
			<li class="even"><a href="services.html">Học Viên Mới: vanhuy</a></li>
			<li class="even"><a href="services.html">Số Học Viên: 75,989</a></li>
			<li class="even"><a href="services.html">Số Bài Giảng: 1090</a></li>
			<li class="even"><a href="services.html">Số Đề Thi: 300</a></li>
			<li class="even"><a href="services.html">Số Bài Tập: 450</a></li>
			<li class="even"><a href="services.html">Đang Online: 220</a></li>
			<li class="even"><a href="services.html">Số Truy Cập: 1,756,456</a></li>
		</ul>      
	
    <div class="banner_adds">
		<?php	
			include '../entity/clsBanner.php';
			include '../dao/BannerDAO.php';
			$Banner=getBannerByPos("0");
			foreach($Banner as $item)
			{
		?>
			<div class="border_box">
				<a href="<?php echo $item->Url ?>" target="_blank"><image src="<?php echo $item->Image ?>" style="width: 194px;" /></a>
			</div>  
			<br />		
		<?php
			}
		?>
	</div>

</div>