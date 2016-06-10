// JavaScript Document

(function($) {
	$(document).ready(function(e) {
		/* --- CART --- */
		$(".add_cart").click(function(){
			var id = $(this).attr("data-id");
			$.post('?mod=cart&site=handle',{
				hand: 'add', id: id
			}).done(function(){
				//alert("Đã đưa vào giỏ hàng của bạn !");
				$('#showcart').load('?mod=cart&site=number_cart');
				window.location = ('cart.html');
			});
			return false;
		});

		$(".delete_cart_item").click(function(){
			var id = $(this).attr("data-id");
			$.post('?mod=cart&site=handle',{
				hand: 'delete_item', id: id
			}).done(function(){
				alert("Xoá sản phẩm khỏi giỏ hàng !");
			},function(){
				window.location.reload(true);
			});
			return false;
		});

		$(".update_cart").click(function(){
			var id = $(this).attr("data-id");
			var value = $(this).parent().prev().prev().children().val();
			value = parseInt(value);
			
			
			$.post('?mod=cart&site=handle',{
				hand: 'update', id: id, numb: value
			}).done(function(){
				alert("Cập nhật sản phẩm thành công !");
			},function(){
				window.location.reload(true);
			});
			
		});

		$("#delete_cart").click(function(){
			$.post('?mod=cart&site=handle',{
				hand: 'delete'
			}).done(function(){
				alert("Xoá giỏ hàng thành công !");
			},function(){
				window.location.reload(true);
			});
			return false;
		});

	});
	
}(jQuery));
