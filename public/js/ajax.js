$(function (){
	$('.addItemButton').on('click', function(e) {
		
		var $orders = $('#orders');
		var $item_id = $(this).parent().find('.item_id').val();
		var $checkboxVal = $(this).parent().find('.checkbox').val();

		$('.checkbox:checked').each(function() {
			console.log('hello');
		});

		
		$.ajax({
			type: 'POST',
			url:  '/orders',
			data: {
				'item_id': $item_id
			},
			success: function(orderItem) {

				$orders.append('<li>' + orderItem.name + ': ' + '$' + (orderItem.price / 100) + '</li>');
			},
			error: function() {
				alert('something is wrong');
			}
		});
	})
});

