<div class="pad">
	<form action="" method="post" id="FrmValidate" enctype="multipart/form-data" class="mar-2btm">
		<h3 class="pad bg gray mar-btm">Thêm mới sản phẩm cho shop</h3>
		<table class="table mar-2btm">
			<tr>
				<td class="bold" width="152">Tên sản phẩm</td>
				<td><input type="text" name="name" minlength="10" value="{$result.name}" class="required fnt-x360"></td>
			</tr>
			<tr>
				<td class="bold">Danh mục</td>
				<td>
					<select name="category_id" class="required">
						<option value="">Chọn danh mục sản phẩm</option>
						{$category}
					</select>
				</td>
			</tr>
			<tr>
				<td class="bold">Giá bán gốc</td>
				<td><input type="text" name="price" minlength="4" value="{$result.price}" class="required fnt-x250"><span class="mar-lft">Nhập số hoặc để trống</span></td>
			</tr>
			<tr>
				<td class="bold">Giá khuyến mại</td>
				<td><input type="text" name="promotions" value="{$result.promotions}" class="required fnt-x250"></td>
			</tr>

			<tr>
				<td class="bold">Giới thiệu</td>
				<td><textarea name="description" class="fnt-x360">{$result.description}</textarea></td>
			</tr>
		</table>
		
		
		<h3 class="pad bg gray mar-btm">Thông tin liên quan sản phẩm</h3>
		
		<table class="table mar-2btm">
			<tr>
				<td class="bold" width="152">Tình trạng sản phẩm</td>
				<td><input type="text" name="address" minlength="6" value="{$result.address}" class=" fnt-x250"></td>
			</tr>
			<tr>
				<td class="bold" width="152">Bảo hành</td>
				<td><input type="text" name="warranty" minlength="6" value="{$result.warranty}" class=" fnt-x250"></td>
			</tr>
			<tr>
				<td class="bold">Xuất xứ/ nguồn gốc</td>
				<td><input type="text" name="maker" minlength="6" value="{$result.maker}" class=" fnt-x250"></td>
			</tr>
			<tr>
				<td class="bold">Nhà sản xuất</td>
				<td><input type="text" name="address2" minlength="6" value="{$result.address}" class=" fnt-x250"></td>
			</tr>
			<tr>
				<td class="bold" width="152">Tình trạng trong kho</td>
				<td><input type="text" name="type" minlength="6" value="{$result.address}" class=" fnt-x250"></td>
			</tr>
		</table>		
		
		<h3 class="pad bg gray mar-btm">Thông tin mô tả chi tiết sản phẩm</h3>
		<textarea name="content" id="content1">{$result.content}</textarea>

		<div class="mar-2mid">
			<p>
				<input type="submit" name="frmSubmit" value="Lưu thông tin">
				<input type="reset" value="Huỷ bỏ">
			</p>
		</div>

		
	</form>
	
	
	
	
</div>
<script type="text/javascript" src="./helpers/ckeditor/ckeditor.js"></script>		
{literal}<script> CKEDITOR.replace('content1', {customConfig : './config_custom.js'}); </script>{/literal}
