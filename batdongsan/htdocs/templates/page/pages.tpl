<div id="Home">
	<div class="use">
		<div class="wap-x35">
			<div class="pad bor mar-top">
				<h2 class="bor-btm">Danh sách cửa hàng</h2>
				{foreach from=$result item=list}
					<h3 class="pages"><a href="{$list.link}"><i></i><span>{$list.address} - {$list.name} - {$list.hotline}</span></a></h3>
				{/foreach}
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="wap-x65">
			<div class="mar bg gray pad">
				<h1>{$page.name}</h1>
				<p class="mar-smid">Địa chỉ: {$page.address}</p>
				<p>Điện thoại hỗ trợ: {$page.hotline}</p>
			</div>
			
			<div class="mar">
				<div id="map_canvas" style="width:100%; height:460px;" class=""></div><br/>
				<div style="display: none;">
					<label>latitude: </label><input id="txtPositionY" type="text"/><br/>
					<label>longitude: </label><input id="txtPositionX" type="text"/>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>	
</div>


