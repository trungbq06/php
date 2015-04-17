<div class="right_content">
   	<div class="border_box">
   		<!-- Plugin Facebook -->  
        <iframe src="https://www.facebook.com/plugins/likebox.php?api_key=383038031850881&href=https://www.facebook.com/NhatNguKikitoriHaNoi&amp;height=195&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:195px; height:84px;" allowTransparency="true"></iframe>		
    </div>
   
	<div class="title_box">Nhận Xét</div>  
    <div class="border_box">
		<div style="overflow:auto; width:190px; height: 260px; padding-left:3px; padding-right:3px; text-align:left; font-size:11px;">
			<?php
				include '../entity/clsComments.php';
				
				include '../dao/CommentsDAO.php';
				
				$Comments = readConments();
				foreach($Comments as $item){
			?>
			<span id="lblcomments"><font color="blue"><?php echo $item->Content ?></font><br><font color="red"><?php echo readDesAccByIdAcc($item->IdAccount)->Phone ?></font><br><br></span>
			<?php
				}
			?>
		</div>
	</div> 
	<a href="Comments.php"><b style="color: #0254ad; padding-left: 60px;">Viết Nhận Xét</b></a>
     
	<div class="title_box">Ai Đang Làm Gì</div>
    <div class="border_box">
		<table boder="0" bgcolor="#CCFFFF">
			<tbody>
			<tr>
				<td style="font-size:12px; vertical-align:top;"><a href="/gs/user/74671/ngthai1995"><b>ngthai1995</b></a> đang làm đề thi thử <a href="/luyenthitoeic/exam?dethi_id=285&amp;part_id=2" target="_blank">ĐỀ THI THỬ SỐ 1</a><br>Cách đây 4 phút</td>
			</tr>
			<tr>
				<td style="font-size:12px; vertical-align:top;"><a href="/gs/user/74671/ngthai1995"><b>ngthai1995</b></a> đang làm đề thi thử <a href="/luyenthitoeic/exam?dethi_id=285&amp;part_id=2" target="_blank">ĐỀ THI THỬ SỐ 1</a><br>Cách đây 17 phút</td>
			</tr>		 
			<tr>
				<td style="font-size:12px; vertical-align:top;"><a href="/gs/user/74671/ngthai1995"><b>ngthai1995</b></a> đang làm đề thi thử <a href="/luyenthitoeic/exam?dethi_id=285&amp;part_id=2" target="_blank">ĐỀ THI THỬ SỐ 1</a><br>Cách đây 23 phút</td>
			</tr>		 
			<tr>
			   <td style="font-size:12px; vertical-align:top;"><a href="/gs/user/42499/huynghiem92"><b>huynghiem92</b></a> đang làm bài tập <a href="/luyenthitiengnhat/test/338/de-so-1-luyen-thi-ngu-phap-n5" target="_blank">Đề số 1: Luyện thi Ngữ Pháp N5</a><br>Cách đây 56 phút</td>
			</tr>		 
			<tr>
				<td style="font-size:12px; vertical-align:top;"><a href="/gs/user/42499/huynghiem92"><b>huynghiem92</b></a> đang làm bài tập <a href="/luyenthitiengnhat/test/658/luyen-doc-bai-so-5-luyen-thi-n5" target="_blank">Luyện đọc - Bài số  5 (luyện thi N5)</a><br>Cách đây 61 phút</td>
			</tr>
			</tbody>
		</table>  
    </div>
	
	<div class="banner_adds">
	<?php	
		$Banner=getBannerByPos("1");
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

	