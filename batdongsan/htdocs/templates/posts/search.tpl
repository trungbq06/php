<div class="">
	<table class="table tableBor">
		<tr>
			<th class="align-lft"><p class="pad">Bất động sản</p></th>
			<th>Lượt xem</th>
			<th>Ngày đăng</th>
			<th>Loại tin</th>
		</tr>
		
		{foreach from=$result key=k item=list}
		<tr>
			<td width="420">
				<div class="mar lf bor">
					<a href="{$list.link}"><img alt="" src="{$list.img}" width="120" height="90"></a>
				</div>
				<h3 class="mar-top"><a href="{$list.link}">{$list.name}</a></h3>
				<p><b>Giá:</b> {$list.price}</p>
				<p><b>Diện tích:</b> {$list.size} m2</p>
				<p><b>Quận huyện:</b> {$list.local}</p>
			</td>
			<td class="align-cen">{$list.view}</td>
			<td class="align-cen">{$list.created}</td>
			<td class="align-cen">{$list.vip}</td>
		</tr>
		{/foreach}

		<tr>
			{if $num_fields > 8}<td colspan="5"><div class="paging">{$paging}</div></td>{/if}
		</tr>
		
	</table>
</div>