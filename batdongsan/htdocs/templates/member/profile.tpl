<div class="wap-x25">
	<div class="bor mar shadow">
		<h3 class="pad bg gray">Cá nhân</h3>
		<div class="pad">
			<div class="wap-x50">
				<div class="img shadow pad-sml"><img src="{$account.img}"></div>
			</div>
			<div class="wap-x50">
				<div class="mar-lft mar-stop">
					<p class="bold">{$account.name}</p>
					<p class="mar-top"><a href="#">Thiết lập tài khoản</a></p>
				</div>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="mar bor shadow">
		<h3 class="pad bg gray">Danh sách gian hàng của bạn</h3>
		<div>
			{foreach from=$shops item=list}
			<div class="mar bor-btm">
				<div class="wap-x25 img shadow">
					<a href="{$list.link}"><img src="{$list.img}"></a>
				</div>
				<div class="wap-x75">
					<div class="mar-lft">
						<p class="bold mar-btm"><a href="{$list.link}">{$list.name}</a></p>
						<p class="mar-sbtm"><a href="?mod=helps&site=set_admin_page&id={$list.id}" target="_blank">Chỉnh sửa thông tin</a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			{/foreach}
			
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="wap-x75">
	
	{foreach from=$products item=list}
	<div class="wap-x50">
		<div class="bor mar shadow">
			<p class="pad bg gray bold"><a href="{$list.link}" title="{$list.name}">{$list.name}</a></p>
			
			<div class="pad">
				<div class="wap-x40">
					<div class="img bor">
						<a href="{$list.link}" title="{$list.name}"><img src="{$list.image}"></a>
					</div>
				</div>
				<div class="wap-x60">
					<div class="mar-2lft">
						<p>
							<b class="red font-x14">{$list.price_sale}</b>
							{if $list.promotions neq 0}<span class="price_old">{$list.price}</span>{/if}
						</p>
						<p class="mar-mid">{$list.description}</p>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="pad bg gray">
				<p>Shop: <a href="">{$list.page}</a></p>
			</div>
	
		</div>
	</div>
	{/foreach}
	
	<div class="clear"></div>
</div>


<div class="clear"></div>