<div class="pad">
	<div class="wap-x75">
		<div class="mar">
			<h1 class="bg pad gray mar-2btm">Đăng ký gian hàng miễn phí</h1>
			<form action="" method="post" id="FrmValidate" enctype="multipart/form-data">
				<h3 class="mar-btm">Đăng ký gian hàng của bạn trên vshops.vn</h3>
				<p>Bạn vui lòng nhập đầy đủ thông tin đăng ký để mở gian hàng bán sản phẩm trên website.</p>
				<table class="table mar-2btm">
					<tr>
						<td colspan="2"><h3 class="bor-btm">&nbsp</h3></td>
					</tr>
					<tr>
						<td width="132" class="bold">Tên gian hàng</td>
						<td><input type="text" name="name" minlength="6" class="required fnt-x250"></td>
					</tr>
					<tr>
						<td class="bold">Thể loại gian hàng</td>
						<td>
							<select name="category" class="required fnt-x200">
								<option value="">Chọn thể loại</option>
								{$select.category}
							</select>
						</td>
					</tr>
					<tr>
						<td class="bold">Tỉnh thành</td>
						<td>
							<select name="local_id" class="required fnt-x200">
								<option value="">Chọn tỉnh thành</option>
								{$select.local}
							</select>
						</td>
					</tr>
					<tr>
						<td class="bold">Hotline</td>
						<td><input type="text" name="hotline" minlength="10" class="required fnt-x250"></td>
					</tr>
					<tr>
						<td class="bold">Địa chỉ gian hàng</td>
						<td><input type="text" name="address" minlength="10" class="required fnt-x250"></td>
					</tr>
					<tr>
						<td colspan="2"><h3 class="bor-btm">&nbsp</h3></td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td><input type="checkbox" checked name="check" value="1"> Tôi đồng ý với những điều khoản và quy định của website</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="FrmSubmit" value="Đăng ký">
							<input type="reset" value="Huỷ bỏ">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
	<div class="wap-x25">
		<div class="mar bor">
			<h3 class="pad bg gray">Gian hàng nổi bật</h3>
			<div class="pad">
	
				{foreach from=$result item=page}
				<div class="bor-btm">
					<div class="wap-x20">
						<div class="img bor">
							<a href="{$page.link}"><img alt="" src="{$page.img}"></a>
						</div>
					</div>
					<div class="wap-x80">
						<div class="mar-lft">
							<p><a href="{$page.link}">{$page.name}</a></p>
							<p>Bày bán {$page.products} sản phẩm</p>
							<p>Địa điểm: Hà Nội</p>
						</div>
					</div>
					
					<div class="clear"></div>
				</div>
				{/foreach}
			
			</div>
		</div>
	</div>

	<div class="clear"></div>
</div>