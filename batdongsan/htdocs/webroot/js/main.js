$(document).ready(function(){
	$('.bxslider').bxSlider({
		controls: false,
		pager: true,
		auto: true
	});

	

	$(".bar-mobile i").click(function() {
		if($(".menubar-mobile").is(":hidden") == true){
			$(".menubar-mobile").slideDown();
		}else{
			$(".menubar-mobile").slideUp();
		}
	});

	$(".search-mobile i").click(function() {
		if($(".search-form").is(":hidden") == true ){
			$(".search-form").slideDown();
		}else{
			$(".search-form").slideUp();
		}
	});

	$(".news h3 i").click(function() {
		if($(".news ul").is(":hidden") == true){
			$(".news ul").slideDown();
		}else{
			$(".news ul").slideUp();
		}
	});

	$(".news-mobile h3 i").click(function() {
		if($(".news-mobile ul").is(":hidden") == true){
			$(".news-mobile ul").slideDown();
		}else{
			$(".news-mobile ul").slideUp();
		}
	});

	  $("#FrmValidate").validate({});

	  $('#etalage').etalage({
			thumb_image_width: 352,
			thumb_image_height: 352,
			source_image_width: 900,
			source_image_height: 1200,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});

	 
});


   