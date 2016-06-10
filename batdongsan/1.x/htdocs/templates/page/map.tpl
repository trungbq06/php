<div class="mar bor shadow pad-big">
	<h1 class="bor-btm">Bản đồ</h1>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
	<script type="text/javascript" src="webroot/js/GoogleMapControl.js"></script>

	<h3>Địa chỉ: {$page.address}</h3>
	<div class="">
		<div id="map_canvas" style="width:100%; height:380px;" class="bor mar-2top"></div><br/>
		<div style="display: none;">
			<label>latitude: </label><input id="txtPositionY" type="text"/><br/>
			<label>longitude: </label><input id="txtPositionX" type="text"/>
		</div>
	</div>
</div>
