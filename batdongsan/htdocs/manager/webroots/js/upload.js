// JavaScript Document

(function($) {
	
	$(document).ready(function(e) {
		$('#fileUpload').change(function(){
			$(this).closest("form").submit();
		});
		$(".delete_upload").click(function(){
			
			var $this = $(this);
			
			var img = $(this).attr('data');
			$.post( "?mod=product&site=delete_upload", { img: img } )
				.done(function(){
					//window.location.reload(true);
					$($this).parent().parent().hide(500);
				});
			
		});
	});
	

}(jQuery));
