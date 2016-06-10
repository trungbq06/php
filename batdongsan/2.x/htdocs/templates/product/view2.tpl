<div id="Home"></div>
<div class="bg">
	<div class="use" id="ProductCate">
		<div class="pad">
			<p class="pad-top">{$category.site_map}</p>
			<div class="clear"></div>
		</div>
	</div>

	<div class="use" id="ProductView">
		<div class="wap-x75">
			<div class="bg pad">
			
				<div class="wap-x40">
					<div class="pad bor">
						<div class="fotorama" data-width="100%" data-height="340">
							<a href="{$value.img}"><img src="{$value.img}"></a>
							{foreach from=$images key=k item=list}
							<a href="{$list}"><img src="{$list}"></a>
							{/foreach}
						</div>
					</div>
				</div>
				
				<div class="wap-x60">
				
					<div class="mar-2lft">
						<h1 class="mar-btm title">{$value.name}</h1>
						
						<div class="bor-btm">
							<div class="mar-btm">{include file="../plugins/like.tpl"}</div>
							<p style="font-size:15px"><b>Mã sản phẩm: {$value.code}</b> ({$value.view} lượt xem) </p>
						</div>
						{if $value.promotions neq 0}<p class="price">Giá gốc: {$value.price}</p>{/if}
						<p class="price_sale">{$value.price_sale}</p>
                       <!-- Thông tin nhà sản xuất --> 
						<p class="maker"><b>Nhà sản xuất: {$value.maker}</b></p>
						<p class="mar-2mid"><a href="javascript:void(0)" class="add_cart view_cart" data-id="{$value.id}">Đặt hàng</a></p>
						
						{if $value.description neq NULL}
						<div class="bor pad content">
							<h2 class="bor-btm">Mô tả ngắn</h2>
							{$value.description}
						</div>
						{/if}

					
						
					</div>
				</div>
				
				<div class="clear"></div>
				
			</div>
        
{foreach from = $adsense_p3 item=list}
<div class="adsense_p3">
{$list.description}
</div>
{/foreach}
        
            	<div class="bgbor">
							<h3 class="pad bg gray">Sản phẩm có bán tại các cửa hàng</h3>
							<div class="pad mar-btm content">
								<ul id="productPageList">
									{foreach from=$page item=list}
									<li><a href="{$list.link}">{$list.address} - {$list.name} - hotline: {$list.hotline}</a></li>
									{/foreach}
								</ul>
								<p class="align-rgt"><a href="./cuahang">Xem thêm</a></p>
							</div>
						</div>
			
			
			<div class="mar-2mid pad">
				<div class="">
					<ul class="tabs">
						<li tab="1"><a href="javascript:void(0)">Thông tin chi tiết</a></li>
						<!-- <li tab="2"><a href="javascript:void(0)">Thông tin gian hàng</a></li> -->
						<li tab="3"><a href="javascript:void(0)">Bình luận</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="pad bor bg">
					
					<div id="tab-1" class="content">
						{$value.content}
					</div>
		
					<div id="tab-3" class="content">
						<div class="fb-comments" data-href="{$this_link}" data-numposts="3"  data-width="760" data-colorscheme="light"></div>
					</div>
		
				
				</div>
			</div>
		
			
			
		</div>
		
		<div class="wap-x25">
			
            {foreach from = $adsense_p5 item=list}
<div class="adsense_p5">
{$list.description}
            </div>
            {/foreach}
			<div class="mar bor" id="hotline">
				<h3 class="bor-btm pad bg gray">HOTLINE HỖ TRỢ</h3>
				<ul id="">
					{foreach from=$support item=list}
					<li>
						<span><b>{$list.name}</b> - <b class="red">{$list.phone}</b></span>
						<!--<span class="mar-stop">
							<a style=" border:none" href="ymsgr:sendim?{$list.yahoo}">
								<img alt="{$list.yahoo}" height="18" src="http://opi.yahoo.com/online?u={$list.yahoo}&amp;m=g&amp;t=1&amp;l=us">
							</a>
							<a href="skype:{$list.skype}?chat">
								<img alt="skype.gif" height="22" src="http://mystatus.skype.com/bigclassic/{$list.skype}">
							</a>
						</span>-->
					</li>
					{/foreach}
				</ul>
			</div>
			
             {foreach from = $adsense_p6 item=list}
				<div class="adsense_p6">
				{$list.description}
          	  </div>
            {/foreach}
            
			{foreach from=$gallery_p4 item=list}
			<div class="mar img">
				<a href="{$list.link}"><img src="{$list.img}"></a>
			</div>
			{/foreach}
			
            {foreach from=$adsense_p4 item = list}
            
            <div class="adsense_p4">
            {$list.description}
            </div>
            {/foreach}
            
		</div>
		
		<div class="clear"></div>
	</div>
	
	<div class="use">
		<!-- San pham lien quan -->
		<div class="title pad"><h2 style="font-size:18px">Sản phẩm liên quan</h2></div>
		
		<div id="" class="mar-2btm">
			{foreach from=$other item=list}
			<div class="wap-x25">
				{include file="../elements/product_relead.tpl"}
			</div>
			{/foreach}
			<div class="clear"></div>
		</div>
	</div>
	
</div>
	





 
 