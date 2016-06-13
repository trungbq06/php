<div class="pad" id="admin">
	
	<h3 class="pad bg gray mar-btm">Quản lý giới thiệu gian hàng</h3>
	<div class="">
		<form method="post" action="">
			<textarea name="infomation" id="content1">{$result.infomation}</textarea>
			<div class="mar-2mid">
				<p>
					<input type="submit" name="FrmInfomation" value="Lưu thông tin">
					<input type="reset" value="Huỷ bỏ">
				</p>
			</div>
		</form>
	</div>
	
</div>
<script type="text/javascript" src="./libraries/ckeditor/ckeditor.js"></script>
{literal}<script> CKEDITOR.replace('content1', {customConfig : './config_custom.js'}); </script>{/literal}
