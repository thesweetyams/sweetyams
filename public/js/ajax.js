$(function (){

	$('.ajaxBuildButton').on('click', function() {
		var $orders = $('#orders');
		var $item_id = $(this).parent().find('.item_id').val();
		$.ajax({
			type: 'post',
			url:  '/orders',
			data: {
				'item_id': $item_id
			},
			success: function(orders) {
				console.log(orders);
				$orders.append('<li class="orderLis">' + orders.name + ': ' + '$' + (orders.price / 100) + '</li>');
			},
			error: function() {
				alert('something is wrong');
			}
		});
	})
});