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
        <div align="justify"> "Em gửi lòng biết ơn sâu sắc đến thuchanhtiengnhat.com, đã truyền cho em niềm đam mê lớn lao với tiếng nhật; những bài giảng đề thi của thuchanhtiengnhat.com đã giúp em vững tin rất nhiều vào bản thân trong suốt những ngày ôn thi cũng như khi làm bài.<br>Những bài giảng rất dễ hiểu, bao quát toàn bộ kiến thức cần thiết. Đã giúp em có được hứng thú với Tiếng Nhật." (<span style="font-weight: bold;">pirates_of_caribbean</span>) </div>
        </marquee>
	</div>  
	<br/>
	
    <div class="border_box">    
	<script type="text/javascript"> epi_id='epi-widget-container'; epi_width='194px'; epi_height='210'; epi_theme='widgetDisplayThemePink'; epi_border = 1; </script>
	<script type="text/javascript" src="http://www.baomoi.com/Widget/JS/Widget.js"></script>
	<script type="text/javascript" src="http://www.baomoi.com/Widget/GenerateJS.aspx?zone=-1&count=30&ntype=popular&dtype=2&target=0"></script>
	</div>  
	
	<div class="banner_adds">
		<?php	
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