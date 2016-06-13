<div class="mar">
	<div class="nav_cate bold bor bg gray pad-cen">
		<ul>{$category}</ul>
		<div class="clear"></div>
	</div>

	<div class="mar-2top">

		<div class="">
		
			<h1 class="mar-2btm">{$value.name}</h1>
		
			{if $images neq NULL}
			<div class="wap-x45">
				<div class="fotorama bor" data-width="100%" data-height="366">
					{foreach from=$images key=k item=list}
					<a href="{$list}"><img src="{$list}"></a>
					{/foreach}
				</div>
			</div>
			{/if}
		
			<div class="wap-x55">
				<div class="mar-2lft">
				
					<h3 class="pad bg gray">Giá: <span class="font-x14 mar-slft red bold">{$value.price}</span></h3>
					<table class="table mar-mid">
						<tr>
							<td><p>Người đăng: <b>{$value.member_name}</b></p></td>
							<td><p>Lượt xem: <b>{$value.view}</b></p></td>
						</tr>
						<tr>
							<td><p>Đăng lúc: <b>{$value.date_active}</b></p></td>
							<td><p>Mã tin: <b>{$value.id}</b></p></td>
						</tr>
						<tr>
							<td><p>Email: <b>{$value.member_email}</b></p></td>
							<td><p><b><a href="javascript:void(0)" class="ZoomViewMap" data-id="{$map.id}">Xem bản đồ</a></b></p></td>
						</tr>
					</table>
					
					<h3 class="pad bg gray">Nội dung tin</h3>
					<table class="table f_right">
						<tr>
							<td>Ngày hết hạn:</td>
							<td>{$value.date_finish}</td>
						</tr>
						<tr>
							<td width="100">Mục:</td>
							<td>{$value.category}</td>
						</tr>
						<tr>
							<td>Nơi đăng:</td>
							<td><b>{$value.district}, {$value.province}</b></td>
						</tr>
						<tr>
							<td>Hình thức:</td>
							<td>{$value.cate_type}</td>
						</tr>
						<tr>
							<td>Tình trạng:</td>
							<td>{$value.type}</td>
						</tr>
						
					</table>
					
					<div id="PostsContact">
						<a href="ymsgr:sendim?{$value.member_yahoo}" class="yahoo">
							<img alt="{$list.yahoo}" height="13" src="http://opi.yahoo.com/online?u={$value.member_yahoo}&amp;m=g&amp;t=0&amp;l=us">
							<span>Yahoo chat</span>
						</a>
						
						<span class="Phone"><i class="icon14 phone"></i>{$value.member_phone}</span>
					</div>
					
					
					<div class="mar-mid">{include file="../plugins/like.tpl"}</div>
					
					
				</div>
			</div>
			<div class="clear"></div>
			
			<h2 class="bor-btm mar-2top">Nội dung chi tiết</h2>
			<div class="mar-mid content">{$value.content}</div>
		</div>
	</div>
	
</div>


