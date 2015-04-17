<footer>
    <div class="wrapper">
        <div class="pad1">
            <div class="pad_left1">
                <div class="wrapper">
                    <article class="col_1">
                        <h3>Địa Chỉ:</h3>
                        <p class="col_address"><strong>Quốc Gia:<br>
                                Vị Trí:<br>
                                Gmail:<br>
                                Skype:</strong></p>
                        <p>VietNames<br>
                            Ha Noi<br>
                            hoctiengnhat24h<br>
                            hoctiengnhat24h</p>
                    </article>
                    <article class="col_2 pad_left2">
                        <h3>Tài Liệu:</h3>
                        <ul class="list2">
                            <li><a href="DSTaiLieuType.php?IdType=1">Sách Japan</a></li>
                            <li><a href="#">Sách English</a></li>
                            <li><a href="DSTaiLieuType.php?IdType=2">Video Japan</a></li>
                            <li><a href="#">Video English</a></li>
                        </ul>
                    </article>
                    <article class="col_3 pad_left2">
                        <h3>Tư Liệu:</h3>
                        <ul class="list2">
                            <li><a href="HDHoc.php">Hướng dẫn học online</a></li>
                            <li><a href="HocPhi.php">Đóng Học Phí</a></li>
                            <li><a href="Contact.php">Liên Hệ </a></li>
                        </ul>
                    </article>
                    <article class="col_4 pad_left2">
                        <h3>Tìm Kiếm:</h3>
                        <form id="newsletter" method="get" action="http://www.google.com/search?g=">
                            <div class="wrapper">
                                <div class="bg"><input type="text" name="q" size="19" style="color: black;" maxlength="255" value="Google site search" onfocus="if (this.value == this.defaultValue)
                                            this.value = '';
                                        this.style.color = 'black';" onblur="if (this.value == '')
                                                    this.value = this.defaultValue;
                                                       "></div>
                            </div>
                            <a href="#" class="button" onclick="document.getElementById('newsletter').submit()"><span><span><strong>Google</strong></span></span></a>
                        </form>
                    </article>
                </div>
                <div class="wrapper">
                    <article class="call">
                        <span class="call1">HỖ TRỢ 24H </span><span class="call2"></span>
                    </article>
                    <article class="col_4 pad_left2">
                        Website đã đăng ký bản quyền <a href="http://www.hoctiengnhat24honline.com/" target="_blank" rel="nofollow">www.hoctiengnhat24honline.com</a><br>									
                        Sản phẩm cung cấp qua <a href="http://www.hoctiengnhat24honline.com" target="_blank" rel="nofollow">www.hoctiengnhat24honline.com</a> 						<br />
                        Copyright © 2015<br></article>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php		include '../entity/clsBanner.php';	include '../dao/BannerDAO.php';	$Banner=getBannerByPos("0");	foreach($Banner as $item)	{?>	<div class="border_box">		<a href="<?php echo $item->Url ?>" target="_blank"><image style="display: block; position: fixed; top: 20px; left: 0px; width:170px" src="<?php echo $item->Image ?>" style="width: 194px;" /></a>	</div>  	<br />		<?php	}?><?php			$Banner=getBannerByPos("1");		foreach($Banner as $item)		{	?>		<div class="border_box">			<a href="<?php echo $item->Url ?>" target="_blank"><image style="display: block; position: fixed; top: 20px; right: 0px; width:150px" src="<?php echo $item->Image ?>" style="width: 194px;" /></a>		</div>    		<br />	<?php		}	?>	</div>		<?php	include 'PopupMenu.php';	?>