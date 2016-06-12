var map = undefined;
var marker = null;
var geocoder;
var infowindow = null;
var addressReturn;
var latlngReturn;

//Khởi tạo
//21.03051273991227,105.7872292696228
function initialize(lat, lng) {
    try {
        if (lat != "0" && lng != "0") {
            infowindow = new google.maps.InfoWindow();

            var myOptions = {
                zoom: 14,
                center: new google.maps.LatLng(lat, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
            if (lat == "" || lng == "" || lat == null || lng == null) {
                lat = 21.0295818;
                lng = 105.8504133;
            }
            var myLatlng = new google.maps.LatLng(lat, lng);
            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                draggable: true
            });
            map.setCenter(myLatlng);
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);
            });
            google.maps.event.addListener(marker, 'dragstart', function () { infowindow.close(); });
            google.maps.event.addListener(marker, 'dragend', getAddress);
            geocoder = new google.maps.Geocoder();
            getAddress();
        } else {
            $("#map_canvas").css('display', 'none');
        }
    } catch (ex) {
        console.log(ex);
    }
}
function initializeAddress(lat, lng, address) {
    try {
        if (lat != "0" && lng != "0") {
            infowindow = new google.maps.InfoWindow();

            var myOptions = {
                zoom: 14,
                center: new google.maps.LatLng(lat, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
            if (lat == "" || lng == "" || lat == null || lng == null) {
                lat = 21.0295818;
                lng = 105.8504133;
            }
            var myLatlng = new google.maps.LatLng(lat, lng);
            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                draggable: true
            });
            map.setCenter(myLatlng);
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);
            });
            google.maps.event.addListener(marker, 'dragstart', function () { infowindow.close(); });
            google.maps.event.addListener(marker, 'dragend', getAddress);
            geocoder = new google.maps.Geocoder();
            showAdd(address);
        } else {
            $("#map_canvas").css('display', 'none');
        }
    } catch (ex) {
        console.log(ex);
    }
}
//Add maker
function placeMarker(location) {

    try {

        marker.setMap(null);
        marker = new google.maps.Marker({
            position: location,
            map: map,
            draggable: true
        });
        google.maps.event.addListener(marker, 'dragstart', function () { infowindow.close(); });
        google.maps.event.addListener(marker, 'dragend', getAddress);
        map.setCenter(location);
        getAddress();
    } catch (ex) {
        console.log(ex);
    }
}
function showLocation(address) {

    try {

        if (address != null && address != '') {
            var add = address.split(',');
            if (add.length >= 3) {
                if ($.trim(add[add.length - 3]).toLowerCase() == "thanh xuân") {
                    add[add.length - 3] = "Thanh Xuân Bắc";
                }
            }
            address = add.join(',');
            marker.setMap(null);
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        draggable: true
                    });
                    document.getElementById('txtPositionX').value = results[0].geometry.location.lat();
                    document.getElementById('txtPositionY').value = results[0].geometry.location.lng();
                    infowindow.setContent("<span id='address'><b>Địa chỉ : </b>" + results[0].formatted_address + "</span>");
                    addressReturn = results[0].formatted_address;
                    infowindow.open(map, marker);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
                google.maps.event.addListener(marker, 'dragstart', function () { infowindow.close(); });
                google.maps.event.addListener(marker, 'dragend', getAddress);
            });
        } else {
            alert("Địa chỉ không hợp lệ");
        }
    } catch (ex) {
        console.log(ex);
    }
}
function getAddress() {

    try {

        var point = marker.getPosition();
        //alert(point);
        var lat = point.lat();
        var lng = point.lng();
        document.getElementById('txtPositionX').value = lat;
        document.getElementById('txtPositionY').value = lng;
        var latlng = new google.maps.LatLng(lat, lng);
        //alert(latlng);
        geocoder.geocode({ 'latLng': latlng }, function (results2, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results2[0]) {
                    infowindow.setContent("<span id='address'><b>Địa chỉ : </b>" + results2[0].formatted_address + "</span>");
                    addressReturn = results2[0].formatted_address;
                    infowindow.open(map, marker);
                }
            } else {
                alert("Geocoder failed due to: " + status);
            }
        });
        map.setCenter(point);
    } catch (ex) {
        console.log(ex);
    }
}
function showAdd(address) {
    try {
        var point = marker.getPosition();
        //alert(point);
        var lat = point.lat();
        var lng = point.lng();
        document.getElementById('txtPositionX').value = lat;
        document.getElementById('txtPositionY').value = lng;
        var latlng = new google.maps.LatLng(lat, lng);
        //alert(latlng);
        geocoder.geocode({ 'latLng': latlng }, function (results2, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results2[0]) {
                    if (address != '') {
                        infowindow.setContent("<span id='address'><b>Địa chỉ : </b>" + address + "</span>");
                    } else {
                        infowindow.setContent("<span id='address'><b>Địa chỉ : </b>" + results2[0].formatted_address + "</span>");
                    }

                    addressReturn = results2[0].formatted_address;
                    infowindow.open(map, marker);
                }
            } else {
                alert("Geocoder failed due to: " + status);
            }
        });
        map.setCenter(point);
    } catch (ex) {
        console.log(ex);
    }
}
//Lấy địa chỉ
function strAddress() {
    return addressReturn;
}
// Lấy kinh độ, vĩ độ
function strLatLng() {

    try {
        var lat = $('#txtPositionX').val();
        var lng = $('#txtPositionY').val();
        return lat + "," + lng;
    } catch (ex) {
        console.log(ex);
    }
}