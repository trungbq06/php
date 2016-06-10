<div class="pad">
	<h1 class="bor-btm">Thay đổi thông tin</h1>
			
	<form action="" method="post" class="mar-top" id="FrmValidate">
		<table class="table mar-2top">
			<tr>
				<td width="130px">Tên đầy đủ:</td>
				<td><input type="text" name="name" class="required fnt-x200" minlength="3" value="{$value.name}"></td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td>
					<select name="day" class="required">
						{$select.day}
					</select>
					<select name="month" class="required">
						{$select.month}
					</select>
					<select name="year" class="required">
						{$select.year}
					</select>
				</td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<select name="gender" class="required">
						{$select.gender}
					</select>
				</td>
			</tr>
			<tr>
				<td>Tỉnh thành:</td>
				<td>
					<select name="province_id" class="required">
						{$select.province}
					</select>
				</td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="phone" class="fnt-x200" value="{$value.phone}"></td>
			</tr>
			<tr>
				<td>Yahoo</td>
				<td><input type="text" name="yahoo" class=" fnt-x200" value="{$value.yahoo}"></td>
			</tr>
			<tr>
				<td>Skype</td>
				<td><input type="text" name="skype" class=" fnt-x200" value="{$value.skype}"></td>
			</tr>
			<tr>
				<td colspan="2"><h3 class="bor-btm">&nbsp</h3></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="checkbox" checked name="check" value="1"> Tôi đồng ý với những điều khoản và quy định của website</td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td>
					<input type="submit" name="FrmSubmit" value="Lưu thay đổi">
					<input type="reset" value="Huỷ bỏ">
				</td>
			</tr>
			
		</table>
	</form>
</div>