<div class="bor bg gray nav_cate pad-cen">
	<ul>{$category}</ul>
	<div class="clear"></div>
</div>

<div class="mar pad">
	<h1>{$cate.description}</h1>
</div>

	<div id="product" class="mar">
	
	<h3 class="mar pad bg gray shadow"><span class="vip"></span>Danh sách sản phẩm vip</h3>
	
	{foreach from=$hot item=list}
	<div class="wap-x16">
		<div class="mar">
			<div class="img bor pad-tini shadow">
				<a href="{$list.link}"><img alt="{$list.alt}" src="{$list.img}" height=""></a>
			</div>
			<div class="mar-smid">
				<p class="name"><a href="{$list.link}" class="">{$list.name}</a></p>
				<p class="bold red">{$list.price_new}</p>
			</div>
		</div>
	</div>
	{/foreach}
	<div class="clear"></div>
</div>


<div class="wap-x75">
	
	<div id="product" class="mar">
		<div class="mar pad bg gray shadow">
			<b>Sản phẩm, {$title}</b> (Có <b class="red">{$number}</b> sản phẩm)
			<div class="rg">
				<label>Sắp xếp</label>
				<select>
					<option value="0">Mới nhất</option>
				</select>
				<select>
					<option value="0">Trên toàn quốc</option>
				</select>
			</div>
			<div class="clear"></div>
		</div>
		{foreach from=$result item=list}
		<div class="wap-x20">
			<div class="mar">
				<div class="img bor pad-tini shadow">
					<a href="{$list.link}"><img alt="{$list.alt}" src="{$list.img}" height=""></a>
				</div>
				<div class="mar-smid">
					<p class="name"><a href="{$list.link}" class="">{$list.name}</a></p>
					<p class="bold red">{$list.price_new}</p>
				</div>
			</div>
		</div>
		{/foreach}
		<div class="clear"></div>
		{if $fields > $pagesize}<div class="paging mar-top">{$paging}</div>{/if}
	</div>
	
</div>

<div class="wap-x25">
	<div class="mar bor">
		<h3 class="pad bg gray"><span class="ihot"></span>Sản phẩm xem nhiều nhất</h3>
		<div class="pad">
			{foreach from=$hot item=list}
			<div class="bor-btm">
				<div class="wap-x30">
					<div class="img">
						<a href="{$list.link}"><img src="{$list.img}"></a>
					</div>
				</div>
				<div class="wap-x70">
					<div class="mar-lft">
						<p class="name"><a href="{$list.lnik}">{$list.name}</a></p>
						<p>Giá bán: {$list.price_new}</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			{/foreach}
		</div>
	</div>
	
	<div class="mar bor">
		<h3 class="pad bg gray">Tin khuyến mại của các gian hàng</h3>
		<div class="pad">
			<p class="bor-btm">
				<a href="">Tin khuyến mại của các gian hàng</a>
			</p>
		</div>
	</div>	
	
</div>

<div class="clear"></div>