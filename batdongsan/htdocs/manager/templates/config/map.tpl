<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
<script type="text/javascript" src="webroots/js/api-map-google.js"></script>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> My Place on goole-map</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" id="FrmCreateuser" method="post">
				<fieldset>
				<div class="control-group">
					<label style="font-weight: bold;">Nhập địa chỉ chính xác tại khung bên dưới hoặc di chuyển vị trí đến đúng vị trí của bạn trên bản đồ. </label><input class="input" title="Gõ địa chỉ vào đây để di chuyển bản đồ tới, Di chuyển Marker để làm mịn, Ví dụ: Thái Thịnh, Đống Đa, Hà Nội, Việt Nam" id="address"  type="text" style="width: 540px; margin: 10px 0; padding: 4px;"/>
				    <input id="ProjectMapIp" name="map_id" type="text"/>
				    <div id="map_canvas" style="width:100%; height:520px; margin: 10px 0; border: 1px solid #ccc;"></div><br/>
					<div style="display: none;">
						<label>latitude: </label><input id="latitude" type="text"/><br/>
						<label>longitude: </label><input id="longitude" type="text"/>
					</div>
				</div>
				
				
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
