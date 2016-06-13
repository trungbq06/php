<div class="mar">
	<div class="nav_cate bold bg gray pad-cen shadow">
		<ul>{$category}</ul>
		<div class="clear"></div>
	</div>

	<div class="">
	
		<div class="bor pad mar-mid">
			<div class="nav_cate bor-btm">
				{$sub_cate}
				<div class="clear"></div>
			</div>

			<div id="search_posts" class="mar-2top mar-btm">
				<select name="local_province" id="local_province" class="fnt-x160">
					<option value="0">Tỉnh / thành phố</option>
					{$select.province}
				</select>
				<select name="local_district" id="local_district" class="fnt-x160">
					<option value="0">Quận / huyện</option>{$select.district}
				</select>
				<select name="local_ward" id="local_ward" class="fnt-x160">
					<option value="0">Phường / Xã</option>{$select.ward}
				</select>
				<select name="local_street" id="local_street" class="fnt-x160">
					<option value="0">Đường / Phố</option>{$select.street}
				</select>
				<input type="submit" name="search" id="local_search" value="Tìm kiếm">
			</div>


		</div>
	
		
		
		<div class="mar-2top">
			<!--  
			<div class="bor mar-btm pad bg gray">
				<p>
					<b>Loại:</b>
					<a href="">Tất cả</a>
					<a href="">Mua</a>
					<a href="">Bán</a>

					<b>Tình trạng:</b>
					<a href="">Tất cả</a>
					<a href="">Mới</a>
					<a href="">Cũ</a>
				</p>
				
			</div>
			-->
			{if $result neq NULL}
			{foreach from=$result key=k item=list}
			<div class="bor-btm">
				<div class="wap-x10">
					<div class="bor img pad-tini">
						<a href="{$list.link}" title="{$list.name}"><img alt="" src="{$list.img}"></a>
					</div>
				</div>
				<div class="wap-x90">
					<div class="mar-lft">
						<h3 class="mar-mid"><a href="{$list.link}" title="{$list.name}">{$list.name}</a></h3>
						<p>
							<span>Mã tin: <b>{$list.id}</b></span>&nbsp&nbsp&nbsp&nbsp&nbsp
							<span>Lượt xem: {$list.view}</span>&nbsp&nbsp&nbsp&nbsp&nbsp
							<span>Mục: {$list.category}</span>&nbsp&nbsp&nbsp&nbsp&nbsp
							<span>Người đăng: <b>{$list.member_name}</b></span>
						</p>
						<p class="mar-smid">
							<span>Ngày đăng: <b>{$list.created}</b></span>&nbsp&nbsp&nbsp&nbsp&nbsp
							<span>Tỉnh thành: <b>{$list.local}</b></span>&nbsp&nbsp&nbsp&nbsp&nbsp
							<span class="rg">Giá: <b>{$list.price}</b></span>&nbsp&nbsp&nbsp&nbsp&nbsp
						</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			{/foreach}
			
			{if $fields > $pagesize}<div class="paging">{$paging}</div>{/if}
			{else}
			<h3 class="bor pad">Không có tin rao được tìm thấy</h3>
			{/if}
		</div>		
				
	</div>
	
</div>

