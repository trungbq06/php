<div class="pad">
	<h3 class="category">Danh sách tin rao vặt</h3>

	<div class="mar-top">
		{if $result eq 0}
		<p>Bạn chưa đăng tin nào !</p>
		{else}
			{foreach from=$result key=k item=list}
				<div class="bor-btm">
					<div class="wap-x10">
						<div class="img bor pad-sml mar-sml shadow">
							<img src="{$list.images}">
						</div>
					</div>

					<div class="wap-x80">
						<div class="mar-2lft">
							<h3 class="mar-smid"><a href="{$list.link}">{$list.name}</a></h3>
							<p>Mã tin: {$list.id} &nbsp&nbsp-&nbsp&nbsp Lượt xem: {$list.view} &nbsp&nbsp-&nbsp&nbsp Nhu cầu: {$list.type}</p>
							<p class="mar-smid">Đăng lúc: {$list.created} &nbsp&nbsp-&nbsp&nbsp Mục: {$list.category}</p>
							<p class="mar-stop">
								{if $active neq 1}
								<a href="{$list.link_edit}">Sửa tin</a> &nbsp&nbsp|&nbsp&nbsp
								<a href="?mod=posts&site=images&id={$list.id}">Quản lý hình ảnh</a> &nbsp&nbsp|&nbsp&nbsp
								<a href="?mod=posts&site=delete&id={$list.id}">Xóa tin</a> &nbsp&nbsp|&nbsp&nbsp
								<a href="?mod=posts&site=active&id={$list.id}">Kích hoạt tin</a> &nbsp&nbsp|&nbsp&nbsp
								{else}
								<a href="?mod=posts&site=active&id={$list.id}">Làm mới tin</a> &nbsp&nbsp|&nbsp&nbsp
								<a href="">Tính năng tin vip</a> &nbsp&nbsp|&nbsp&nbsp
								{/if}
							</p>
						</div>
					</div>
					
					
					<div class="clear"></div>
				</div>
			{/foreach}
			
		
		{/if}
	</div>
</div>