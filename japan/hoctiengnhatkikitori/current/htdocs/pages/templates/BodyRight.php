<div class="right_content">
	<div class="title_box">Facebook</div>  
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
    
	<div class="title_box">Thị Trường</div>
	<div class="border_box">
	<iframe frameborder="0" marginwidth="0" marginheight="0" src="http://www.thienduongweb.com/tool/weather/?size=194&fsize=12&bg=images/bg.png&repeat=repeat-x&r=1&w=0&g=1" width="194" height="200" scrolling="no"></iframe>
	</div> 
	
	<div class="title_box">Tìm Kiếm</div>	
	<div class="border_box">
		<form method="get" action="http://www.google.com/search?g=">
		<input type="text" name="q" size="19" style="color:#808080;" maxlength="255" value="Google site search" onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';" onblur="if(this.value=='')this.value=this.defaultValue; "/>
		<input type="submit" value="Go!" />
		</form>
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

	