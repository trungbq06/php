<div class="pad" id="admin">
	<h3 class="pad bg gray mar-btm">Quản lý thông tin gian hàng <a href="javacript:void(0);" class="show_edit">Chỉnh sửa</a></h3>
	<div class="frm_admin">
		<form action="" method="post" id="FrmValidate" enctype="multipart/form-data" class="mar-2btm">
			<table class="table mar-2btm">
				<tr>
					<td>Thể loại trang</td>
					<td>
						<div class="bor pad">
						<ul class="ul">
						{foreach from=$select_category item=list}
							<li class="wap-x33">
								<p class="pad">
									<input type="checkbox" value="{$list.id}" {if in_array($list.id, $arr_category)}checked{/if} name="category[]"> <span class="mar-2rgt">{$list.name}</span>
								</p>
							</li>
						{/foreach}
						</ul>
						<div class="clear"></div>
						</div>
					</td>
				</tr>
				<tr>
					<td>Tỉnh thành</td>
					<td>
						<select name="local_id" class="required">
							<option value="">Chọn tỉnh thành</option>
							{$select.local}
						</select>
					</td>
				</tr>
	
				<tr>
					<td width="102" class="bold">Hotline</td>
					<td><input type="text" name="hotline" minlength="10" value="{$result.hotline}" class="required fnt-x250"></td>
				</tr>
				<tr>
					<td class="bold">Địa chỉ</td>
					<td><input type="text" name="address" minlength="6" value="{$result.address}" class="required fnt-x250"></td>
				</tr>
			</table>
			
			<div class="mar-2top">
				<p>
					<input type="submit" name="FrmSubmit" value="Lưu thông tin">
					<input type="reset" value="Huỷ bỏ">
				</p>
			</div>
			
		</form>
	</div>
	
	
	<h3 class="pad bg gray mar-btm">Quản lý giới thiệu gian hàng <a href="javacript:void(0);" class="show_edit">Chỉnh sửa</a></h3>
	<div class="frm_admin">
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
	
	<h3 class="pad bg gray mar-btm">Quản lý hình thức thanh toán <a href="javacript:void(0);" class="show_edit">Chỉnh sửa</a></h3>
	<div class="frm_admin">
		<form method="post" action="">
			<textarea name="content" id="content2"></textarea>
			<div class="mar-2mid">
				<p>
					<input type="submit" name="FrmPayment" value="Lưu thông tin">
					<input type="reset" value="Huỷ bỏ">
				</p>
			</div>
		</form>
	</div>


	<h3 class="pad bg gray mar-btm">Quản lý thông tin liên hệ <a href="javacript:void(0);" class="show_edit">Chỉnh sửa</a></h3>
	<div class="frm_admin">
		<form method="post" action="">
			<textarea name="contact" id="content3"></textarea>
			<div class="mar-2mid">
				<p>
					<input type="submit" name="FrmContact" value="Lưu thông tin">
					<input type="reset" value="Huỷ bỏ">
				</p>
			</div>
		</form>
	</div>
	
</div>
<script type="text/javascript" src="./helpers/ckeditor/ckeditor.js"></script>
{literal}<script> CKEDITOR.replace('content1', {customConfig : './config_custom.js'}); </script>{/literal}
{literal}<script> CKEDITOR.replace('content2', {customConfig : './config_custom.js'}); </script>{/literal}
{literal}<script> CKEDITOR.replace('content3', {customConfig : './config_custom.js'}); </script>{/literal}
