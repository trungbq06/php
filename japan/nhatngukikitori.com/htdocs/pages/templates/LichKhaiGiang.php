<?php
		include '../model/clsKhaiGiang.php';
		include '../model/clsKhoaHoc.php';
		include '../dao/KhaiGiangDAO.php';
		include '../dao/KhoaHocDAO.php';
?>
<div id="gallery" STYLE="padding: 0px 0; font-size: 22px; background-color: white;font-weight: bold;">
  <div style="color: red; font-family: times New Roman;">Lịch Khai Giảng <image src="images/icon/new_icon.gif" style="width:50px"></div>
	<HR />
	<marquee direction="left" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" style="font-size: 15px; color: blue;">
	
		<?php
		$KhaiGiang=readKhaiGiang();
			foreach($KhaiGiang as $item)
			{
		?>
				<div style="float:left; padding-right:40px; text-align:center">
					<b>
					<?php echo getNameKhoaHocById($item->IdKhoaHoc)->Name ?>
					<br />
					<?php echo $item->StartTime ?> đến <?php echo $item->EndTime ?>
					<br />
					<?php
						$url;
						if(($item->IdKhoaHoc)==1){
							$url='KHSoCapKS1.php';
						}else if(($item->IdKhoaHoc)==2){
							$url='KHSoCapKS2.php';
						}else if(($item->IdKhoaHoc)==3){
							$url='KHSoCapKS3.php';
						}else if(($item->IdKhoaHoc)==4){
							$url='KHSoCapKS4.php';
						}else if(($item->IdKhoaHoc)==5){
							$url='KHSoCapKS5.php';
						}else if(($item->IdKhoaHoc)==6){
							$url='KHTrungCap.php';
						}else if(($item->IdKhoaHoc)==7){
							$url='KHThuongCapN1.php';
						}else if(($item->IdKhoaHoc)==8){
							$url='KHThuongCapN2.php';
						}
					?>
					<a href="<?php echo $url ?>" target="_blank">
					<image src="images/icon/icon_chitiet.gif" style="height:20px">
					</a>
					</b>
				</div>
		<?php
			}
		?>
		
	</marquee>
</div>