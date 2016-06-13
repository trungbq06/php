<div class="pad">
	<form action="" method="post" id="FrmValidate" enctype="multipart/form-data" class="mar-2btm">
		<h3 class="pad bg gray mar-btm">Thêm mới sản phẩm cho shop</h3>
		<table class="table mar-2btm">
			<tr>
				<td class="bold" width="152">Tên sản phẩm</td>
				<td><input type="text" name="name" minlength="4" value="{$result.hotline}" class="required fnt-x360"></td>
			</tr>
			<tr>
				<td class="bold">Danh mục</td>
				<td>
					<select name="category_id" class="required">
						<option value="">Chọn danh mục sản phẩm</option>
						{$select.category}
					</select>
				</td>
			</tr>
			<tr>
				<td class="bold">Giá bán gốc</td>
				<td><input type="text" name="price" minlength="4" value="{$result.address}" class="required fnt-x250"></td>
			</tr>
			<tr>
				<td class="bold">Giá khuyến mại</td>
				<td><input type="text" name="promotions" minlength="4" value="{$result.address}" class="fnt-x250"></td>
			</tr>

			<tr>
				<td class="bold">Mô tả ngắn</td>
				<td><textarea name="description" class="fnt-x360"></textarea></td>
			</tr>
		</table>
		
		<h3 class="pad bg gray mar-btm">Thông tin liên quan sản phẩm</h3>
		
		<table class="table mar-2btm">
			<tr>
				<td class="bold" width="152">Tình trạng sản phẩm</td>
				<td>
					<select name="type" class="fnt-x200">
						{$select.type}
					</select>
				</td>
			</tr>
			<tr>
				<td class="bold" width="152">Bảo hành</td>
				<td><input type="text" name="warranty" placeholder="12 Tháng" class="fnt-x200"></td>
			</tr>
			<tr>
				<td class="bold">Xuất xứ/ nguồn gốc</td>
				<td><input type="text" name="maker" placeholder="Việt Nam" class="fnt-x200"></td>
			</tr>
			<tr>
				<td class="bold">Nhà sản xuất</td>
				<td><input type="text" name="address" value="" class="fnt-x200"></td>
			</tr>
			<tr>
				<td class="bold" width="152">Tình trạng trong kho</td>
				<td><input type="text" name="number" value="Còn hàng" class="required fnt-x200"></td>
			</tr>
		</table>		
		
		<h3 class="pad bg gray mar-btm">Thông tin mô tả chi tiết sản phẩm</h3>
		<textarea name="content" id="content1"></textarea>

		<div class="mar-2mid">
			<p>
				<input type="submit" name="frmSubmit" value="Lưu thông tin">
				<input type="reset" value="Huỷ bỏ">
			</p>
		</div>

		
	</form>
	
	
	
	
</div>
<script type="text/javascript" src="./libraries/ckeditor/ckeditor.js"></script>		
{literal}<script> CKEDITOR.replace('content1', {customConfig : './config_custom.js'}); </script>{/literal}
