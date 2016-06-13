<div class="pad">
	<form action="" method="post" id="FrmValidate" enctype="multipart/form-data">
		<h1 class="mar-btm">ĐĂNG TIN RAO VẶT</h1>
		<h3 class="category">Lựa chọn thể loại tin rao vặt</h3>
		<div class=" mar-mid pad">
			<table class="table">
				<tr>
					<td class="bold">Chuyên mục</td>
					<td><select name="category_id" id="category_id" class="fnt-x200"><option value="0">Lựa chọn</option>{$select.category}</select></td>
				</tr>
				<tr>
					<td class="bold">Nhu cầu</td>
					<td>
						<select name="category_type" id="category_type" class="fnt-x200">
							<option value="">Lựa chọn</option>
							{$select.category_type}
						</select>
					</td>
				</tr>
				<tr>
					<td class="bold">Chủng loại</td>
					<td><select name="category_detail" id="category_detail" class="fnt-x200"><option value="0">Lựa chọn</option>{$select.category_detail}</select></td>
				</tr>
				<tr>
					<td width="132" class="bold">Tiêu đề bài viết</td>
					<td><input type="text" name="name" value="{$value.name}" minlength="10" class="required fnt-x520"></td>
				</tr>
				<tr>
					<td width="132" class="bold">Giá</td>
					<td>
						<select name="" id="price_select" class="fnt-x200">
							{$select.price_type}
						</select>
						<input type="text" name="price" id="add_price" value="{$value.price}" minlength="4" class="fnt-x250">
					</td>
				</tr>
				<tr>
					<td width="132" class="bold">Tình trạng</td>
					<td>
						<select name="type" id="type" class="fnt-x200">
							{$select.type}
						</select>
					</td>
				</tr>
			</table>
			
		</div>


		<div class="mar-mid"><textarea class="fnt-x300 required" id="ckeditor" name="content">{$value.content}</textarea></div>

		<h3 class="category">Lựa chọn nơi đăng tin</h3>
		<div class=" mar-mid pad">
			<table class="table">
				<tr>
					<td width="132" class="bold">Tỉnh thành (*)</td>
					<td><select name="local_province" id="local_province" class="required fnt-x200"><option value="">Lựa chọn</option>{$select.province}</select></td>
					<td width="132" class="bold">Quận huyện (*)</td>
					<td><select name="local_district" id="local_district" class="required fnt-x200"><option value="">Lựa chọn</option>{$select.district}</select></td>
				</tr>
				<tr>
					<td width="132" class="bold">Phường/ xã</td>
					<td><select name="local_ward" id="local_ward" class=" fnt-x200"><option value="">Lựa chọn</option></select></td>
					<td width="132" class="bold">Đường/ phố</td>
					<td><select name="local_street" id="local_street" class=" fnt-x200"><option value="">Lựa chọn</option></select></td>
				</tr>
			
			</table>
			
		
		</div>
		
		<h3 class="category">Thông tin người liên hệ</h3>
		<div class="pad mar-mid">
			<table class="table">
				<tr>
					<td width="132">Họ tên</td>
					<td><input type="text" name="member_name" value="{$value.member_name}" class="required fnt-x250"></td>
				</tr>
				<tr>
					<td width="132">Địa chỉ email</td>
					<td><input type="text" name="member_email" value="{$value.member_email}" class="required fnt-x250"></td>
				</tr>
				<tr>
					<td width="132">Số điện thoại</td>
					<td><input type="text" name="member_phone" value="{$value.member_phone}" class="required fnt-x250"></td>
				</tr>
				<tr>
					<td width="132">Số điện thoại</td>
					<td><input type="text" name="member_yahoo" value="{$value.member_yahoo}" class="required fnt-x250"></td>
				</tr>
			</table>
		</div>
		
		
		
		<div class="mar-top bor-top pad">
			<table class="table">
	    		<tr>
	    			<td class="bold" width="132">Mã kiểm tra</td>
	    			<td><div class="lf mar-rgt"><img src="?mod=helps&site=captcha"></div><input type="text" name="captcha" minlength="6" class="fnt-x90 required number"></td>
	    		</tr>
	    		<tr>
	    			<td></td>
	    			<td><input type="checkbox" checked name="check" value="1"> Tôi đồng ý với những điều khoản và quy định của website</td>
	    		</tr>
	    		<tr>
	    			<td></td>
	    			<td>
						<input type="submit" name="FrmSubmit" value="Lưu sửa đổi">
	    			</td>
	    		</tr>
			
			</table>
		</div>
		
	</form>
</div>
<script type="text/javascript" src="./libraries/ckeditor/ckeditor.js"></script>		
{literal}<script> CKEDITOR.replace('ckeditor', {customConfig : './config_custom.js'}); </script>{/literal}
