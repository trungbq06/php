<h3 class="pad bg gray mar">Thay đổi banner đại diện cho shop của bạn</h3>

<div class="img mar bor pad">
	<img alt="" src="{$image}">
</div>

<div class="pad bor mar">
	<form name="photo" enctype="multipart/form-data" action="" method="post">
		<h3 class="mar-btm">Upload ảnh cho sản phẩm</h3>
		<p>Vui lòng chọn ảnh đúng định dạng .gif, .jpg, .jpeg, .png</p>
		<p class="mar-smid">Kích thước ảnh không được lớn quá 3Mb</p>
		<p>Chiều rộng ảnh nằm trong khoảng 980 pixel - 1500 pixel</p>
		<p class="mar-smid">Chiều cao ảnh nằm trong khoảng 120 pixel - 360 pixel</p>
		<p>Kích thước ảnh không được lớn quá 3Mb</p>
		<div class="mar-2top">
			Photo <input type="file" name="image" size="30" /> <input type="submit" name="upload" value="Upload" />
		</div>
		{if $message neq NULL}<div class="mar-mid bor pad">{$message}</div>{/if}
		<p class="mar-2mid"><b>Lưu ý:</b> Ảnh đại diện phải phù hợp, không được vi phạm các quy định của website. Nếu vi phạm, sẽ có các hình thức xử lý.</p>
	</form>
</div>

