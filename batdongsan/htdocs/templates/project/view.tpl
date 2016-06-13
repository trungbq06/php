<div class="wap-x70">
	<h3 class="title">{$category}</h3>
	<div class="bor pad bg mar-mid">
		<div class="pad-sml">
			<h1 class="mar-sbtm">{$value.name}</h1>
	
			<div class="fotorama bor" data-width="100%" data-height="366">
				<a href="{$value.img}"><img src="{$value.img}"></a>
				{foreach from=$images key=k item=list}
				<a href="{$list.img}"><img src="{$list.img}"></a>
				{/foreach}
			</div>
		
			<div class="mar-btm" id="pro_con">
				<div class="pad-top">
					{include file='../plugins/like.tpl'}
				</div>
			</div>
	
			
			<div class="mar-mid pad-top">
				<p class="mar-btm bold">Thông tin Dự án</p>
				<table class="table tableBor">
					<tr>
						<td>Loại hình: </td>
						<td>{$value.type}</td>
					</tr>
					<tr>
						<td>Địa chỉ: </td>
						<td>{$value.address}</td>
					</tr>
					<tr>
						<td>Diện tích tổng thể: </td>
						<td>{$value.size}</td>
					</tr>
					<tr>
						<td>Số tầng: </td>
						<td>{$value.floor}</td>
					</tr>
					<tr>
						<td>Ngày khởi công: </td>
						<td>{$value.started}</td>
					</tr>
					<tr>
						<td>Ngày hoàn thành: </td>
						<td>{$value.finished}</td>
					</tr>
					<tr>
						<td>Hiện trạng: </td>
						<td>{$value.status}</td>
					</tr>
					<tr>
						<td>Chủ đầu tư: </td>
						<td>{$value.proj_boss}</td>
					</tr>
					<tr>
						<td>Đơn vị thi công: </td>
						<td>{$value.proj_working}</td>
					</tr>
					<tr>
						<td>Đơn vị quản lý: </td>
						<td>{$value.proj_manager}</td>
					</tr>
					<tr>
						<td>Đơn vị thiết kế: </td>
						<td>{$value.proj_design}</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="content">{$value.content}</div>	
		
	</div>
</div>

<div class="wap-x30">
	<!-- San pham lien quan -->
	{if $numb_other > 0}
	<div class="mar-2lft">
		<h3 class="title mar-btm">Các Dự án khác</h3>
		{foreach from=$other key=k item=list}
		<div class="bor-btm">
			<div class="project_list">
				<p class="mar-sbtm bold"><a href="{$list.link}">{$list.name}</a></p>
				<div class="wap-x50">
					<div class="img mar-rgt bor"><a href="{$list.link}"><img src="{$list.img}"></a></div>
				</div>
				<div class="wap-x50">
					<p class="address">{$list.address}</p>
					<p class="mar-top">Khởi công: {$list.started}</p>
					<p class="align-rgt mar-stop"><a href="{$list.link}">Chi tiết dự án »</a></p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		{/foreach}
		<div class="clear"></div>
	</div>
	{/if}
</div>
<div class="clear"></div>