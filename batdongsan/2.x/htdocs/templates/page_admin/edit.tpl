				<h3 class="align-cen mar-xmid font-x16">Chỉnh sửa thông tin tài khoản</h3>
				
				<div class="bor pad">
               		<form method="post" action="" id="Validate">
                		
						<h3 class="bor-btm color-title">Thông tin cá nhân</h3>
                		<p class="mar-mid">{$message}</p>
                		<table class="tabFrm">
                			<tr>
                				<td width="160px">Họ và tên (*)</td>
                				<td><input type="text" value="{$value.name}" name="name" class="required fnt-x200" minlength="3"></td>
                			</tr>
                			<tr>
                				<td>Giới tính (*)</td>
                				<td>
									<select name="gender" class="required">{$gender}</select>
								</td>
                			</tr>
                			<tr>
                				<td>Ngày sinh (*)</td>
                				<td><input type="text" name="birthday"  value="{$value.birthday}" class="required date fnt-x200"></td>
                			</tr>
                			<tr>
                				<td>Nghề nghiệp</td>
                				<td><input type="text" name="job" value="{$value.job}" class="fnt-x200" minlength="6"></td>
                			</tr>
                			<tr>
                				<td>Email (*)</td>
                				<td><input type="text" name="email" value="{$value.email}" class="required email fnt-x200"></td>
                			</tr>
                			<tr>
                				<td>Số điện thoại (*)</td>
                				<td><input type="text" name="phone" value="{$value.phone}" class="required number fnt-x200"></td>
                			</tr>
                			<tr>
                				<td>Địa chỉ hiện tại</td>
                				<td><input type="text" name="address" value="{$value.address}" class=" fnt-x200"></td>
                			</tr>
                			<tr>
                				<td></td>
                				<td><input type="submit" name="FrmSubmit" value="Thay đổi"></td>
                			</tr>
                		</table>
               		</form>
				</div>
