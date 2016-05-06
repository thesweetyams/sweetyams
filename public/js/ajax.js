$(function (){

	$('.ajaxBuildButton').on('click', function() {
		var $orders = $('#orders');
		var item_id = $(this).parent().find('.item_id').val();
		$.ajax({
			type: 'post',
			url:  '/orders',
			data: {
				'item_id': item_id
			},
			success: function(orders) {
				$orders.append('<li>' + orders.name + '</li>');
			},
			error: function() {
				alert('something is wrong');
			}
		});
	})
});